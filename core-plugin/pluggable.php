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

if (!function_exists('is_debugging')):
function is_debugging() {
	return (wpci_get_logging_threshold() == 2);
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

// get the database debugging setting
if (!function_exists('wpci_get_database_debugging_enabled')):
function wpci_get_database_debugging_enabled() {
	return get_option('wpci_database_debugging_enabled', FALSE);
}
endif;


/**
 * @return TRUE when this request is a CodeIgniter request
 * @param 
 */
if (!function_exists("is_codeigniter")):
function is_codeigniter() {
	global $post;
	$gateway = wpci_get_gateway();
	return ($gateway && isset($post) && $gateway->post_name == $post->post_name);
}
endif;

/**
 * Valid values for $path include
 *     {$class}
 *     {$class}/{$method}
 *     /${method}
 *	   array('controller' =>, 'action' =>)
 * @return TRUE if $path represents the current action.
 */ 
if (!function_exists("is_action")):
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
endif;

/**
 * Set the WordPress title to any value from anywhere in the stack.
 * @param title
 * @see WPCI::title(String)
 */
if (!function_exists("title")):
function title($title = null) {
	if ($title !== null) {
		WPCI::set_title($title);
	}
	return WPCI::get_title();
}
endif;

/**
 * Issues a redirect using wp_redirect(), generating with the parameters sent
 * to this function a CI link, generated by get_link_to($args, $params, $as_request_param)
 */
if (!function_exists("wpci_redirect")):
function wpci_redirect($args = null, $params = array(), $as_request_param = 'page') {
	if (!is_array($args) && stripos($args, '://') !== false) {
		redirect($args);
		exit;
	}
	else if (!is_array($args) && ($args == '/' || $args == '' || $args === null)) {
		wp_redirect(get_bloginfo('home'));
		exit;
	}
	else {
		wp_redirect(get_link_to($args, $params, $as_request_param));
		exit;
	}
}
endif;

if (!function_exists("link_to")):
function link_to($args = array(), $params = array(), $as_request_param = 'page') {
	echo get_link_to($args, $params, $as_request_param);
}
endif;

if (!function_exists('frontend_link')):
function frontend_link($args = array(), $params = array(), $as_request_param = 'page') {
	echo get_frontend_link($args, $params, $as_request_param);
}
endif;

if (!function_exists("get_frontend_link")):
function get_frontend_link($args = array(), $params = array(), $as_request_param = 'page') {
	global $RTR;
	
	if (!is_array($args)) {
		$matches = array();
		if (preg_match('#(.*)/(.*)/(.*)#', $args, $matches)) {
			$args = array(
				'application' => $matches[1],
				'controller' => $matches[2],
				// TODO: support directory here, when the time comes...
				'action' => $matches[3]
			);
		}
		else {
			$args = array('action' => $args);
		}
	}
	
	$args = array_merge(array(
		'application' => $RTR->fetch_app(),
		'controller' => $RTR->fetch_class(),
		'action' => $RTR->fetch_method(),
		'directory' => $RTR->fetch_directory(),
		'params' => $params,
		'secure' => FALSE,
		'absolute' => FALSE
	), $args);
	
	extract($args);
	
	// sometimes $directory gets fucked up...
	$directory = preg_replace("#\/\/#", "/", $directory);
	if (!$directory)
		$directory = '/';
	
	
	$token = "/".wpci_get_forward_gateway_slug()."/$application".$directory."$controller/$action";
	
	// prepare the query parameters
	// TODO: do custom routing here...
	if (!is_array($params))
		$params = array($params);
	if (count($params)) {
		$values = array();
		foreach($params as $k => $p) {
			$values[] = $p;
		}
		$token .= "/".join('/', $values);
	}
	
	// trailing slash is a must in WordPress, without which we tend to get
	// two requests processed for the price of one... :-P
	return ($args['absolute'] ? get_bloginfo('home').'/'.$token.'/' : $token.'/');
}
endif;

if (!function_exists("get_link_to")):
function get_link_to($args = array(), $params = array(), $as_request_param = 'page') {
	if (is_admin()) {
		return get_admin_link($args, $params, $as_request_param);
	}
	else {
		return get_frontend_link($args, $params, $as_request_param);
	}
}
endif;

if (!function_exists("form_open")):
function form_open($action = '', $attributes = '', $hidden = array(), $use_validation_engine = TRUE) {
	
	// default form method is post
	if ($attributes == '') {
		$attributes = array('method' => 'post');
	}

	if (is_array($action) || strpos($action, '://') === FALSE) {
		if (strtolower($attributes['method']) == 'post' || !is_admin()) {
			if (is_array($action)) {
				$action_str = array_shift($action);
				$params = array_shift($action);
				$page = array_shift($action);
				$action = get_link_to(is_array($action_str) ? $action_str : array('action' => $action_str), $params, $page);
			}
			else {
				$action = get_link_to(array('action' => $action), array(), 'page');
			}
			
		}
		else {
			if (is_admin()) {
				$hidden['page'] = get_link_to(array('action' => $action), array(), FALSE);
				$action = '';
			}
		}
	}
	
	if ($action) {
		$form = '<form action="'.$action.'"';
	}
	else
		$form = '<form';

	if (!isset($attributes['id'])) {
		$attributes['id'] = md5(uniqid().$action.time());
	}

	$form .= _attributes_to_string($attributes, TRUE);

	$form .= '>';
	
	if ($use_validation_engine) {
		wp_enqueue_style('jquery-validation-engine', WP_PLUGIN_URL.'/wp-ci/css/validationEngine.jquery.css');
		wp_enqueue_script('jquery-validation-engine-lang', WP_PLUGIN_URL.'/wp-ci/js/jquery.validationEngine-en.js', array('jquery'));
		wp_enqueue_script('jquery-validation-engine', WP_PLUGIN_URL.'/wp-ci/js/jquery.validationEngine.js', array('jquery-validation-engine-lang'));
		$id = $attributes['id'];
		echo "<script type=\"text/javascript\"> jQuery(function() { jQuery('#$id').validationEngine(); }); </script>";
	}

	if (is_array($hidden) AND count($hidden) > 0)
	{
		$form .= form_hidden($hidden);
	}

	return $form;
}
endif;

if (!function_exists('get_admin_link')):
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
endif;

if (!function_exists("admin_link")):
function admin_link($args = array(), $params = array(), $as_request_parameter = FALSE) {
	echo get_admin_link($args, $params);
}
endif;

if (!function_exists('get_wp_page_content')):
function get_wp_page_content($path) {
	if ($page = get_page_by_path($path)) {
		return do_shortcode($page->post_content);
	}
}
endif;

if (!function_exists('wp_edit_link')):
function wp_edit_link($ref = null) {
	$post = null;
	if (is_numeric($ref)) { // id
		$post = new stdClass();
		$post->ID = $ref;
	}
	else if (is_string($ref)) {
		if (!$post = get_page_by_path($ref))
			wp_die("I couldn't find a page at <b>$ref</b>.");
	}
	else if (is_object($ref)) {
		$post = $ref;
	}
	else {
		edit_post_link();
		return;
	}
	
	edit_post_link(null, '', '', $post->ID);
}
endif;

if (!function_exists('wp_page_content')):
function wp_page_content($path, $include_edit_link = FALSE) {
	if ($include_edit_link) 
		wp_edit_link($path);
	echo get_wp_page_content($path);
}
endif;

// FROM ./ci/system/helpers/form_helper.php
// we need this because we have defined our own form_open herein
function _attributes_to_string($attributes, $formtag = FALSE)
{
	if (is_string($attributes) AND strlen($attributes) > 0)
	{
		if ($formtag == TRUE AND strpos($attributes, 'method=') === FALSE)
		{
			$attributes .= ' method="post"';
		}

	return ' '.$attributes;
	}

	if (is_object($attributes) AND count($attributes) > 0)
	{
		$attributes = (array)$attributes;
	}

	if (is_array($attributes) AND count($attributes) > 0)
	{
	$atts = '';

	if ( ! isset($attributes['method']) AND $formtag === TRUE)
	{
		$atts .= ' method="post"';
	}

	foreach ($attributes as $key => $val)
	{
		$atts .= ' '.$key.'="'.$val.'"';
	}

	return $atts;
	}
}