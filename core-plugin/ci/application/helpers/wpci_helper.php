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
 * Valid values for $path include
 *     {$class}
 *     {$class}/{$method}
 *     /${method}
 *	   array('controller' =>, 'action' =>)
 * @return TRUE if $path represents the current action.
 */ 
function is_action($path) {
	global $RTR;
	
	if (is_array($path)) {
		if (isset($path['controller']) && $RTR->fetch_class() != $path['controller'])
			return FALSE;
		if (isset($path['action']) && $RTR->fetch_method() != $path['action'])
			return FALSE;
	}
	
	else {
		$path = split('\/', $path);
		if (isset($path[0]) && $path[0] && $RTR->fetch_class() != $path[0])
			return FALSE;
		if (isset($path[1]) && $path[1] && $RTR->fetch_method() != $path[1])
			return FALSE;
	}
	
	return TRUE;
}


/**
 * Set the WordPress title to any value from anywhere in the stack.
 * @param title
 * @see WPCI::title(String)
 */
function title($title) {
	WPCI::title($title);
}

function link_to($args = array(), $params = array(), $as_request_param = 'page') {
	echo get_link_to($args, $params, $as_request_param);
}

function get_link_to($args = array(), $params = array(), $as_request_param = 'page') {
	if (is_admin()) {
		return get_admin_link($args, $params, $as_request_param);
	}
}

function form_open($action = '', $attributes = '', $hidden = array()) {
	
	// default form method is post
	if ($attributes == '') {
		$attributes = array('method' => 'post');
	}

	if (strpos($action, '://') === FALSE) {
		if (strtolower($attributes['method']) == 'post' || !is_admin()) {
			$action = get_link_to(array('action' => $action), array(), 'page');
		}
		else {
			$hidden['page'] = get_link_to(array('action' => $action), array(), FALSE);
			$action = '';
		}
	}
	
	if ($action)
		$form = '<form action="'.$action.'"';
	else
		$form = '<form';

	$form .= _attributes_to_string($attributes, TRUE);

	$form .= '>';

	if (is_array($hidden) AND count($hidden) > 0)
	{
		$form .= form_hidden($hidden);
	}

	return $form;
}


/**
 * @return When $value is defined, 'Edit'; otherwise, 'Add New'
 */
function get_add_or_edit($value) {
	return ($value ? 'Edit' : 'Add New');
}

function add_or_edit($value) {
	echo get_add_or_edit($value);
}

function get_admin_link($args = array(), $params = array(), $as_request_param = 'page') {
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
		'params' => $params
	), $args);
	
	extract($args);
	
	// sometimes $directory gets fucked up...
	$directory = preg_replace("#\/\/#", "/", $directory);
	
	if (!is_array($params))
		$params = array($params);
	
	$token = "wp-ci/$application".$directory."$controller/$action";
	
	if ($as_request_param) {
		if (isset(WPCI::$admin_menus[$token])) {
			$menu = WPCI::$admin_menus[$token];
			
			// FIXME: not necessarily "admin.php"...
			$base = "admin.php?$as_request_param=$token";
		}
		else {
			$base = "admin.php?$as_request_param=wp-ci&a=$application&c=$controller&m=$action&d=$directory";
		}
	}
	else {
		if (!is_array($params))
			$params = array($params);

		if (isset(WPCI::$admin_menus[$token])) {
			return $token;
		}
		else {
			return "wp-ci&a=$application&c=$controller&m=$action&d=$directory";
		}
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

function admin_link($args = array(), $params = array(), $as_request_parameter = FALSE) {
	echo get_admin_link($args, $params);
}

/**
 * Generates a standard WordPress options page header, with optional
 * "Add New" button...
 */
function admin_head($label, $icon = 'icon-options-general', $add_new_url = null, $add_new_label = 'Add New') {
	?>
		<div id="<?php echo $icon ?>" class="icon32"><br /></div>
		<h2><?php echo $label ?><?php if ($add_new_url) echo ' <a href="'.$add_new_url.'" class="add-new-h2 button">'.$add_new_label.'</a>' ?></h2>
	<?php
}

/**
 * Generate a nonce.
 * @param action (Optional) The action for which to create the nonce
 * When action is null, the name of the current class is used.
 */
function get_nonce($action = null) {
	if ($action = null) {
		global $RTR;
		$action = $RTR->fetch_class();
	}
	return wp_create_nonce($action);
}

function nonce($action = null) {
	echo get_nonce($action);
}


/**
 * Verify a nonce.
 * @param action (Optional) The action for which the nonce was created; assumed to be the name of the current class when undefined
 * @param param (Optional) The request parameter in which the nonce value can be found; assumed to be "nonce" when undefined
 * @return If nonce is invalid, thread death ensues. Otherwise, returns TRUE.
 */
function verify_nonce($action = null, $param = 'nonce') {
	if ($action = null) {
		global $RTR;
		$action = $RTR->fetch_class();
	}

	if (!wp_verify_nonce($_REQUEST[$param], $action))
		wp_die("Invalid nonce.");
	else
		return true;
}

