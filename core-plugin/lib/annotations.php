<?php 
/**
 * WP-CI The CodeIgniter plugin for WordPress.
 * Copyright (C)2009-2010 Collegeman.net, LLC.
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
 * A library for emulating the annotation-reading capabilities of PHP5 reflection
 * using regular expressions.  Reading annotations with regular expressions allows
 * for annotations support in PHP4, and allows for annotations support without 
 * actually loading PHP classes into memory.
 *
 * @author Alberto Salce alberto.salce@gmail.com
 * @author Aaron Collegeman aaron@collegeman.net
 */
class Annotations {
  
	private static $cache = array();

  	static function addClass($class, $file) { 
		log_message('debug', "Class added to annotation cache: [$class]:$file");
		self::$cache[strtolower($class)] = $file;
  	}
  
	static function has($args = null) {
		return self::has_one((is_array($args) ? $args : func_get_args()));
	}
	
	static function has_one($args = null) {
		return self::get((is_array($args) ? $args : func_get_args()));
	}
	
	static function has_all($args = null) {
		$args = (is_array($args) ? $args : func_get_args());
		if (count($args) < 1)
			return false;
	
		// load requested annotations
		$annotations = self::get($args);
		// then process out function parameters:	
			
		// class is always first argument
		$class = strtolower(array_shift($args));
		
		$annotation = null;
		
		// if two arguments remain, then we're looking for a method annotations
		if (count($args) > 1) {
			$method = $args[0];
			$annotation = $args[1];
		}
		
		// if no arguments remain, then we return everything
		else if (count($args) > 0){
			$annotation = $args[0];
		}
		
		if (!$annotation)
			return true; // does it have all of nothing? sure!
		
		if (!is_array($annotation))
			$annotation = array($annotation);
			
		return count($annotation) == count($annotations);
	}

  	static function get($args = null) {
		$args = (is_array($args) ? $args : func_get_args());
		if (count($args) < 1)
			return false;
			
		// class is always first argument
		$class = strtolower(array_shift($args));
		$method = null;
		
		$annotation = null;
		
		// if two arguments remain, then we're looking for a method annotations
		if (count($args) > 1) {
			$method = $args[0];
			$annotation = $args[1];
		}
		
		// if no arguments remain, then we return everything
		else if (count($args) > 0){
			$annotation = $args[0];
		}
	
    	// make sure the annotations for this class have been processed
		self::process($class);
		
		// return all annotations if no specific ones are mentioned.
	    if (!$annotation)
	      	return self::$cache[$class];
      
	   	if (!is_array($annotation))
			$annotation = array($annotation);
			
		$ret = array();

		if ($method && isset(self::$cache[$class]['methods'][$method]))
			$annotations = self::$cache[$class]['methods'][$method];
		else if (isset(self::$cache[$class]['__class__']))
			$annotations = self::$cache[$class]['__class__'];
		else
			$annotations = array(); // none!
		
		foreach($annotation as $a) {
			if (isset($annotations[$a]))
				$ret[$a] = $annotations[$a];
		}
		
		if (count(array_keys($ret)) > 1) {
			return $ret;
		}
		else {
			$keys = array_keys($ret);
			return count($keys) ? $ret[$keys[0]] : null;
		}
	}

  private static function process($class) {
    
    if (is_array(self::$cache[$class]))
    return true;
    
    // read the php file.
    $content = file_get_contents(self::$cache[$class]);
    
    // parse comments and function/class names
    $class_notations = array();
    
    // NON GREEDY -- FIXES AN ISSUE WHERE PREG_MATCH CRASHES ON LONG STRINGS
    preg_match_all('{((/\*([^*]|(\*+[^*/]))*\*+/)|(//.*))((\r?)\n.+|)}U',
    $content,
    $matches,
    PREG_PATTERN_ORDER);
    
    foreach($matches[0] as $i => $comment) {
      // comment must preced a function/class name
      // look for @function
      if(is_int(strpos($matches[2][$i],"@function"))) {
        
        // get function/class annotations
        $annotations = array();
        if (preg_match_all('/@(\w+) ?(\((.*)\))?/', $matches[2][$i], $annotation_matches)) {
          $names = $annotation_matches[1];
          $values = $annotation_matches[3];
          foreach($names as $y => $name)
          $annotations[$name] = trim($values[$y]);
        }
        
        $function = $annotations['function'];
        
        // store our annotations into the proper array
        if ($function == '__construct') {
          $class_notations['__class__'] = $annotations;
        } else if($function){
          $class_notations['methods'][ $function ]  = $annotations;
        }
        
      }
    }
    
    // cache the results for future uses.
    self::$cache[$class] = $class_notations;
    return true;
  }
} 
