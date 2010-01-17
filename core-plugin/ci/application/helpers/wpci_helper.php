<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

/**
 * Set the WordPress title to any value from anywhere in the stack.
 * @param title
 * @see WPCI::title(String)
 */
function title($title) {
	WPCI::title($title);
}

function get_admin_link($args = array()) {
	global $RTR;
	
	if (!is_array($args)) {
		$args = array('action' => $args);
	}
	
	// admin links look like this: admin.php?page=wp-ci/<application>/<controller>/<directory>/<action>
	// they also look like: admin.php?page=wp-ci&a=<application>&c=<controller>&d=<directory>&m=<action>
	
	// the first is only recognized when a menu or submenu has been defined through annotations
	// the second is used when a token does not exist...
	
	// and the reason for this?
	// without a defined $_REQUEST['page'], WordPress won't serve a custom admin page... :-P
	
	$args = array_merge(array(
		'application' => $RTR->fetch_app(),
		'controller' => $RTR->fetch_class(),
		'action' => $RTR->fetch_method(),
		'directory' => $RTR->fetch_directory(),
		'params' => array()
	), $args);
	
	extract($args);
	
	if (!is_array($params))
		$params = array($params);
	
	$token = "wp-ci/$application".$directory."$controller/$action";
	
	if (isset(WPCI::$admin_menus[$token])) {
		$menu = WPCI::$admin_menus[$token];
		$base = "admin.php?page=$token";
	}
	else {
		$base = "admin.php?page=wp-ci&a=$application&c=$controller&m=$action&d=$directory";
	}
	
	$query = array();
	foreach($params as $k => $p) {
		if (is_array($p)) {
			foreach($p as $i => $v) {
				$query[] = urlencode($k).'['.urlencode($i).']='.urlencode($v);
			}
		}
		else {
			$query[] = urlencode($k).'='.urlencode($p);
		}
	}	
	
	return (count($query) ? $base."&".join('&', $query) : $base);		
}

function get_admin_page($args = array()) {
	global $RTR;
	
	if (!is_array($args)) {
		$args = array('action' => $args);
	}
	
	// admin links look like this: admin.php?page=wp-ci/<application>/<controller>/<directory>/<action>
	// they also look like: admin.php?page=wp-ci&a=<application>&c=<controller>&d=<directory>&m=<action>
	
	// the first is only recognized when a menu or submenu has been defined through annotations
	// the second is used when a token does not exist...
	
	// and the reason for this?
	// without a defined $_REQUEST['page'], WordPress won't serve a custom admin page... :-P
	
	$args = array_merge(array(
		'application' => $RTR->fetch_app(),
		'controller' => $RTR->fetch_class(),
		'action' => $RTR->fetch_method(),
		'directory' => $RTR->fetch_directory(),
		'params' => array()
	), $args);
	
	extract($args);
	
	if (!is_array($params))
		$params = array($params);
	
	$token = "wp-ci/$application".$directory."$controller/$action";
	
	if (isset(WPCI::$admin_menus[$token])) {
		return $token;
	}
	else {
		return "wp-ci&a=$application&c=$controller&m=$action&d=$directory";
	}
}

function admin_page($args = array()) {
	echo get_admin_page($args);
}

function admin_link($args = array()) {
	echo get_admin_link($args);
}

function admin_head($label, $icon = 'icon-options-general') {
	?>
		<div id="<?php echo $icon ?>" class="icon32"><br /></div>
		<h2><?php echo $label ?></h2>
	<?php
}

/**
 * Generate a nonce.
 * @param action (Optional) The action for which to create the nonce
 * When action is null, the name of the current class is used.
 */
function nonce($action = null) {
	if ($action = null) {
		global $RTR;
		$RTR = $RTR->fetch_class();
	}
	echo wp_create_nonce($action);
}

/**
 * Verify a nonce.
 * @param action (Optional) The action for which the nonce was created; assumed to be the name of the current class when undefined
 * @param param (Optional) The request parameter in which the nonce value can be found; assumed to be "nonce" when undefined
 * If nonce is invalid, thread death ensues.
 */
function verify_nonce($action = null, $param = 'nonce') {
	if ($action = null) {
		global $RTR;
		$RTR = $RTR->fetch_class();
	}

	if (!wp_verify_nonce($_REQUEST[$param], $action))
		wp_die("Invalid nonce.");
}

