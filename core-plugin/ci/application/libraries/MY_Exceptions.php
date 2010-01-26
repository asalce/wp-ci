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

class MY_Exceptions extends CI_Exceptions {
	
	/**
	 * Support PHP4...
	 */
	function MY_Exceptions() {
		parent::CI_Exceptions();
	}
	
	function show_php_error($severity, $message, $filepath, $line) {	
		// don't do this unless specifically allowed
		if (wpci_display_errors()) {
			parent::show_php_errors($severity, $message, $filepath, $line);
		}
	}
	
}