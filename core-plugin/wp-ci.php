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
Plugin Name: WP-CI
Plugin URI: http://aaroncollegeman.com/projects/wp-ci
Description: Allows you to develop CodeIgniter applications within WordPress.
Author: Aaron Collegeman
Version: 1.0.0
Author URI: http://aaroncollegeman.com
*/

// absolute path to wp-ci src
// these may be set in wp-config.php or wp-settings.php (for dev purposes)
if (!defined('WPCI_FILE'))
	define('WPCI_FILE', __FILE__);
	
if (!defined('WPCI_ROOT'))
	define('WPCI_ROOT', dirname(__FILE__));

// CodeIgniter namespace
require_once(WPCI_ROOT.'/WPCI.php');

// load dependencies and support libraries
if (!class_exists('clAPI')) require_once(WPCI_ROOT.'/lib/coreylib/coreylib.php');

if (!class_exists('Spyc')) require_once(WPCI_ROOT.'/lib/spyc/spyc.php');

// load the hacks file, if it exists, allowing for pluggable overrides.
if (file_exists(WPCI_ROOT.'/hacks.php')) require_once(WPCI_ROOT.'/hacks.php');

// pluggable (i.e., hackable from hacks.php) functions
require_once(WPCI_ROOT.'/pluggable.php');

// hook CodeIgniter into WordPress
require_once(WPCI_ROOT.'/hooks/activation.php');
require_once(WPCI_ROOT.'/hooks/rewrite.php');
require_once(WPCI_ROOT.'/hooks/content.php');
require_once(WPCI_ROOT.'/hooks/menus.php');

// bootstrap CodeIgniter
require_once(WPCI_ROOT.'/bootstrap.php');


