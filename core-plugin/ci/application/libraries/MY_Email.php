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

class MY_Email extends CI_Email {
	
	/**
	 * Support PHP4...
	 */
	function MY_Email() {
		parent::CI_Email();
	}
	
	/**
	 * Load a view file to parse as the message for the e-mail.
	 */
	function view($name, $data = array()) {
		$CI = &get_instance();
		$this->message($CI->load->view($name, $data, true));
	}
	
	/**
	 * Loads a view file to parse as the alternative message for the e-mail.
	 */
	function alt_view($name, $data = array()) {
		$CI = &get_instance();
		$this->set_alt_message($CI->load->view($name, $data, true));
	}
	
}