<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
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

function template_exists($file) {
	$path = get_template_directory().'/'.$file;
	return (file_exists($path) ? $path : FALSE);
}

add_filter('page_template', 'wpci_template');
function wpci_template($default) {
	log_message('debug', "Default template is $default");
	$template = $default;
	if (is_codeigniter()) {
		global $RTR;
		// application/class/action template
		if ($path = template_exists($RTR->fetch_app().'/'.$RTR->fetch_class().'/'.$RTR->fetch_method().EXT))
			$template = $path;
		// application/class template
		else if ($path = template_exists($RTR->fetch_app().'/'.$RTR->fetch_class().EXT))
			$template = $path;
		// class/action
		else if ($path = template_exists($RTR->fetch_class().'/'.$RTR->fetch_method().EXT))
			$template = $path;
		// class-named template
		else if ($path = template_exists($RTR->fetch_class().EXT))
			$template = $path;
		// application-named template
		else if ($path = template_exists($RTR->fetch_app().EXT))
			$template = $path;
		// template file named "codeigniter.php"
		else if ($path = template_exists('codeigniter'.EXT))
			$template = $path;
	}
	
	log_message('debug', "Loading template $template");
	return $template;
}