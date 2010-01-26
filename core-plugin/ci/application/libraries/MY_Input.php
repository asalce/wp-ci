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

class MY_Input extends CI_Input {
	
	function MY_Input() {
		return parent::CI_Input();
	}
	
	function _sanitize_globals() {}
	
	/*
	function get($index = '', $xss_clean = FALSE) {
		return stripslashes_deep(parent::get($index, $xss_clean));
	}
	
	function post($index = '', $xss_clean = FALSE) {
		return stripslashes_deep(parent::post($index, $xss_clean));
	}
	
	function get_post($index = '', $xss_clean = FALSE) {
		return stripslashes_deep(parent::get_post($index, $xss_clean));
	}
	
	function cookie($index = '', $xss_clean = FALSE) {
		return stripslashes_deep(parent::cookie($index, $xss_clean));
	}
	
	function server($index = '', $xss_clean = FALSE) {
		return stripslashes_deep(parent::server($index, $xss_clean));
	}
	*/
}