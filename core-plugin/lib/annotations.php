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
 * @author Aaron Collegeman aaron@collegeman.net
 * @author Alberto Salce alberto.salce@gmail.com
 */
class Annotations {
	
	const FX = '#(/\*\*[^{]+)function\W+([a-z_\x7f-\xff][a-z0-9_\x7f-\xff]+)\(#misU';
	const CLS = '#(/\*\*.*)class\W+([a-z_\x7f-\xff][a-z0-9_\x7f-\xff]+)\b#misU';
	const ANN_WITHOUT_VAL = '#@([a-z_\x7f-\xff][a-z0-9_\x7f-\xff]+)\s#misU';
	const ANN_WITH_VAL = '#@([a-z_\x7f-\xff][a-z0-9_\x7f-\xff]+)\s?\((.*)\)\s#misU';
	
	private static $cache = array();
	
	private static $index = array();
	
	private $content;
	
	private $methods = array();
	
	private $classes = array();
	
	private $class;
	
	private $file;
	
	static function get($class, $file = null) {
		if (!isset(self::$cache[$class]))
			self::$cache[$class] = self::$index[$file] = new Annotations($class, $file);
		
		return self::$cache[$class];
	}
	
	private function Annotations($class, $file) {
		$this->class = array_pop(split('/', $class));
		$this->file = $file;
		
		// if the file doesn't exist, let the caller handle it
		if (!file_exists($file))
			throw new Exception("Cannot read annotations: file does not exist [$file]");
		// load the contents of the file	
		$this->content = file_get_contents($file);
		// look for annotated functions
		if (preg_match_all(self::FX, $this->content, $matches)) {
			// for each annotated function
			foreach($matches[2] as $i => $method) {
				// grab the raw annotations
				if ($raw = $matches[1][$i]) {
					// parse the raw annotations
					if (preg_match_all(self::ANN_WITH_VAL, $raw, $annotations)) {
						// for each annotation
						foreach($annotations[1] as $i => $name) {
							// store the value
							$this->add_method_annotation($method, $name, $annotations[2][$i]);
						}
					}
					if (preg_match_all(self::ANN_WITHOUT_VAL, $raw, $annotations)) {
						// for each annotation
						foreach($annotations[1] as $name) {
							$this->add_method_annotation($method, $name, true);
						}
					}
				}
			}
		}
		
		// look for annotated classes
		if (preg_match_all(self::CLS, $this->content, $matches)) {
			// for each annotated class
			foreach($matches[2] as $i => $class) {
				// grab the raw annotations
				if ($raw = $matches[1][$i]) {
					// parse the raw annotations
					if (preg_match_all(self::ANN_WITH_VAL, $raw, $annotations)) {
						// for each annotation
						foreach($annotations[1] as $i => $name) {
							// store the value
							$this->add_class_annotation($class, $name, $annotations[2][$i]);
						}
					}
					if (preg_match_all(self::ANN_WITHOUT_VAL, $raw, $annotations)) {
						// for each annotation
						foreach($annotations[1] as $name) {
							$this->add_class_annotation($class, $name, true);
						}
					}
				}
			}
		}
	}
	
	function add_method_annotation($method, $name, $value) {
		// make sure our method array is there
		if (!isset($this->methods[$method])) {
			$this->methods[$method] = array();
			$this->methods[$method][$name] = array();
		}

		if (is_bool($value)) {
			$this->methods[$method][$name] = true;
		}
		else {
			if (!isset($this->methods[$method][$name])) {
				$this->methods[$method][$name] = array();
			}
			$this->methods[$method][$name][] = $value;
		}
	}
	
	function add_class_annotation($class, $name, $value) {
		$class = strtolower($class);
		
		// make sure our method array is there
		if (!isset($this->classes[$class])) {
			$this->classes[$class] = array();
			$this->classes[$class][$name] = array();
		}

		if (is_bool($value)) {
			$this->classes[$class][$name] = true;
		}
		else {
			if (!isset($this->classes[$class][$name])) {
				$this->classes[$class][$name] = array();
			}
			$this->classes[$class][$name][] = $value;
		}
	}
	
	function methods() {
		return array_keys($this->methods);
	}
	
	function for_method($method, $annotation = null) {
		if (!$annotation)
			return isset($this->methods[$method]) ? $this->methods[$method] : array();
		
		if (isset($this->methods[$method][$annotation]))
			return $this->methods[$method][$annotation];
		else
			return array();
	}
	
	function for_class($annotation = null, $class = null) {
		$class = (!$class) ? strtolower($this->class) : strtolower($class);
		
		if (!$annotation)
			return isset($this->classes[$class]) ? $this->classes[$class] : array();

		if (isset($this->classes[$class][$annotation]))
			return $this->classes[$class][$annotation];
		else
			return array();
	}
	
	
} 
