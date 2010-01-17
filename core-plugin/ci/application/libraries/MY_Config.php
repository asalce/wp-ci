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

class MY_Config extends CI_Config {
	
	function load($file = '', $use_sections = FALSE, $fail_gracefully = FALSE) {
		
		if ($app_path = WPCI::active_app_path(FALSE)) {
			$file_path = $app_path.'/config/'.$file.EXT;

			if (file_exists($file_path)) {

				if (in_array($file_path, $this->is_loaded, TRUE)) {
					return TRUE;
				}
				
				@include($file_path);
				
				if ($use_sections === TRUE) {
					if (isset($this->config[$file])) {
						$this->config[$file] = array_merge($this->config[$file], $config);
					}
					else {
						$this->config[$file] = $config;
					}
				}
				else {
					$this->config = array_merge($this->config, $config);
				}
			
				return TRUE;
			}
		}
		
		parent::load($file, $use_sections, $fail_gracefully);
	}
	
}
