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
Plugin URI: http://aaroncollegeman.com/projects/wordpress/wp-ci
Description: Embed CodeIgniter(R) in WordPress, build plugins using MVC.
Author: Aaron Collegeman
Version: 1.0.0
Author URI: http://aaroncollegeman.com
*/

// marker constant
define('HAS_WPCI', true);

// absolute path to wp-ci src
if (!defined('WPCI_FILE')) define('WPCI_FILE', __FILE__);	
if (!defined('WPCI_ROOT')) define('WPCI_ROOT', dirname(__FILE__));
	
// request methods
define('GET', "GET");
define('POST', "POST");
define('PUT', "PUT");
define('DELETE', "DELETE");

// WP-CI plugin
require_once(WPCI_ROOT.'/WPCI.php');
WPCI::add_actions();

// load dependencies and support libraries

/*
if (!class_exists('clAPI')) 
	require_once(WPCI_ROOT.'/lib/coreylib/coreylib.php');

if (!class_exists('Spyc')) 
	require_once(WPCI_ROOT.'/lib/spyc/spyc.php');
//*/

if (!class_exists('Annotations')) 
	require_once(WPCI_ROOT.'/lib/annotations.php');

// load the hacks file, if it exists, allowing for pluggable overrides.
if (file_exists(WPCI_ROOT.'/hacks.php')) 
	require_once(WPCI_ROOT.'/hacks.php');

// pluggable (i.e., hackable from hacks.php) functions
require_once(WPCI_ROOT.'/pluggable.php');

// bootstrap CodeIgniter
require_once(WPCI_ROOT.'/bootstrap.php');

log_message('debug', '+++| CodeIgniter is bootstrapped. Burn baby, burn. |+++');