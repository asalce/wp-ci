<?php
/**
 * WP-CI The CodeIgniter plugin for WordPress.
 * Copyright (C)2009-2010 Aaron Collegeman.
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

class MY_URI extends CI_URI {
	
	function MY_URI() {
		parent::CI_URI();
	}
	
	// On the front-end, we rely on REQUEST_URI SERVER variable for the path, 
	// since all URLs are rewritten to index.php by WordPress...
	function _fetch_uri_string() {
		if (is_admin()) {
			
		}
		else {
			$this->uri_string = $this->_parse_request_uri();

			// If the URI contains only a slash we'll kill it
			if ($this->uri_string == '/') {
				$this->uri_string = '';
			}
		}
		
		return;
	}
	
	function _filter_uri($str) {
		
		/* We don't do this because QueryStrings must be allowed for WordPress functionality (but not forced in configuration, to allow for routing)
		if ($str != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE)
		{
			// preg_quote() in PHP 5.3 escapes -, so the str_replace() and addition of - to preg_quote() is to maintain backwards
			// compatibility as many are unaware of how characters in the permitted_uri_chars will be parsed as a regex pattern
			if ( ! preg_match("|^[".str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-'))."]+$|i", $str))
			{
				show_error('The URI you submitted has disallowed characters.', 400);
			}
		}
		*/

		// Convert programatic characters to entities
		$bad	= array('$', 		'(', 		')',	 	'%28', 		'%29');
		$good	= array('&#36;',	'&#40;',	'&#41;',	'&#40;',	'&#41;');

		return str_replace($bad, $good, $str);
	}
	
}