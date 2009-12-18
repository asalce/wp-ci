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
 
/*
Plugin Name: Hello Sparky
Plugin URI: http://aaroncollegeman.com/projects/wp-ci
Description: An example of writing pluggable applications for WP-CI, also the WP-CI unit-testing application.
Author: Aaron Collegeman
Version: 1.0.0
Author URI: http://aaroncollegeman.com
*/

add_action('wpci_register_apps', 'sparky_register_app');
function sparky_register_app() { WPCI::register_app(__FILE__); }