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

// get the WordPress page object for our gateway
if (!function_exists('wpci_get_gateway')):
function wpci_get_gateway() {
	return get_page_by_path(get_option('wpci_gateway_slug'));
}
endif;

if (!function_exists('wpci_get_forward_gateway_slug')):
function wpci_get_forward_gateway_slug() {
	return get_option("wpci_forward_gateway_slug", "do");
}
endif;

// create the WordPress page to represent our gateway
if (!function_exists('wpci_create_gateway')):
function wpci_create_gateway($slug) {
	return wp_insert_post(array(
		'post_type' => 'page',
		'post_title' => 'CodeIgniter Gateway',
		'post_content' => "The purpose of this file is to provide a page through which all CodeIgniter-generated content can be displayed. Please do not delete it.",
		'post_status' => 'publish',
		'post_name' => $slug
	));
}
endif;

// retrieve an array of application paths
if (!function_exists('wpci_get_app_paths')):
function wpci_get_app_paths() {
	return array(APPPATH);
}
endif;

// retrieve an array of controller files
if (!function_exists('wpci_get_controllers')):
function wpci_get_controllers($path = null) {
	$controllers = array();
	
	if ($path == null) {
		foreach(wpci_get_app_paths() as $app_path) {
			$controllers = $controllers + wpci_get_controllers($app_path);
		}
	}
	
	else {
		if (is_dir($path)) {
			$dir = opendir($path);
			while(($file = readdir($dir)) !== false) {
				if ($file != '.' && $file != '..') {
					if (is_dir("$path/$file")) {
						$controllers = $controllers + wpci_get_controllers("$path/$file");
					}
					else if (strtolower(substr($file, -3)) == 'php') {
						$controllers[] = "$path/$file";
					}
				}
			}
			closedir($dir);
		}
	}
	
	return $controllers;
}
endif;

// get the programmed logging threshold (if set)
if (!function_exists('wpci_get_logging_threshold')):
function wpci_get_logging_threshold() {
	if ($threshold = get_option('wpci_logging_threshold'))
		return (int) $threshold;
	else if (defined('WP_DEBUG') && WP_DEBUG)
		return 2; // debugging level
	else
		return 0;
}
endif;

// get the programmed encryption key
if (!function_exists('wpci_get_encryption_key')):
function wpci_get_encryption_key() {
	if ($key = get_option('wpci_encryption_key'))
		return $key;
	else
		return md5('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
}
endif;