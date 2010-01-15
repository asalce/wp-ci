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


add_filter('the_title', 'wpci_the_title', 10, 2);
function wpci_the_title($title, $post_id = null) {
	$gateway = wpci_get_gateway();
	// titles for CI are generated in CI views...
 	return ($post_id == $gateway->ID) ? '' : $title;
}

add_filter('wp_title', 'wpci_wp_title', 10, 3);
function wpci_wp_title($title, $sep, $seplocation) {
	global $post;
	$gateway = wpci_get_gateway();
	if ($gateway->ID == $post->ID) {
		return WPCI::get_title($sep, $seplocation);
	}
	else {
		return $title;
	}
}

add_filter('the_content', 'wpci_the_content');
function wpci_the_content($content) {
	global $wp_query, $RTR, $OUT;
	$gateway = wpci_get_gateway();
	if ($wp_query->query_vars['pagename'] == $gateway->post_name) {
		ob_start();
		$OUT->_display();
		echo do_shortcode(ob_get_clean());
	}
	else {
		return $content;
	}
}

add_action('admin_init', 'wpci_admin_init');
function wpci_admin_init() {
	global $CI;
	
	if ($token = $_REQUEST['page']) {
		// exact match for token?
		if (isset(WPCI::$admin_menus[$token])) {
			// load the menu settings
			$menu = WPCI::$admin_menus[$token];
			// load the application controller
			$app_path = $menu['app_path'];
			require_once($app_path);
			// tell WPCI which app is active
			WPCI::activate($menu['app']);
			// create an instance of the controller
			$class = $menu['class'];
			$CI = new $class();
			
			call_user_func_array(array(&$CI, $menu['method_name']), array());
		}
	}
}

add_action('plugins_loaded', 'wpci_plugins_loaded');
function wpci_plugins_loaded() {
	global $RTR, $CI, $EXT, $BM, $URI;
	
	// call upon pluggable applications to register themsevles
	do_action('wpci_register_apps');
	
	if (is_admin()) {
		return false;
	}
	
	// set routing, triggering detection of active application (if any)
	$RTR->_set_routing();
	
	// complete CI logging
	log_message('debug', "Router Class Set");
	
	// if a class was detected, execute it
	if ($RTR->fetch_class()) {
		
		WPCI::include_controller($RTR);
		
		$BM->mark('loading_time_base_classes_end');

		/*
		 * ------------------------------------------------------
		 *  Security check
		 * ------------------------------------------------------
		 *
		 *  None of the functions in the app controller or the
		 *  loader class can be called via the URI, nor can
		 *  controller functions that begin with an underscore
		 */
		$class  = $RTR->fetch_class();
		$method = $RTR->fetch_method();

		if (!class_exists($class)) {
			wp_die("I can't find <b>{$class}/{$method}</b>.");
		}

		if ($method == 'controller'
			OR strncmp($method, '_', 1) == 0
			OR in_array(strtolower($method), array_map('strtolower', get_class_methods('Controller')))
			)
		{
			wp_die("You're not allowed to do <b>{$class}/{$method}</b>.");
		}

		/*
		 * ------------------------------------------------------
		 *  Is there a "pre_controller" hook?
		 * ------------------------------------------------------
		 */
		$EXT->_call_hook('pre_controller');

		/*
		 * ------------------------------------------------------
		 *  Instantiate the controller and call requested method
		 * ------------------------------------------------------
		 */

		// Mark a start point so we can benchmark the controller
		$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_start');

		$CI = new $class();

		// Is this a scaffolding request?
		if ($RTR->scaffolding_request === TRUE)
		{
			if ($EXT->_call_hook('scaffolding_override') === FALSE)
			{
				$CI->_ci_scaffolding();
			}
		}
		else
		{
			/*
			 * ------------------------------------------------------
			 *  Is there a "post_controller_constructor" hook?
			 * ------------------------------------------------------
			 */
			$EXT->_call_hook('post_controller_constructor');

			// Is there a "remap" function?
			if (method_exists($CI, '_remap'))
			{
				$CI->_remap($method);
			}
			else
			{
				// is_callable() returns TRUE on some versions of PHP 5 for private and protected
				// methods, so we'll use this workaround for consistent behavior
				if ( ! in_array(strtolower($method), array_map('strtolower', get_class_methods($CI))))
				{
					wp_die("I'm not allowed to do {$class}/{$method}.");
				}

				// Call the requested method.
				// Any URI segments present (besides the class/function) will be passed to the method for convenience
				call_user_func_array(array(&$CI, $method), array_slice($URI->rsegments, 2));
			}
		}

		// Mark a benchmark end point
		$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_end');

		/*
		 * ------------------------------------------------------
		 *  Is there a "post_controller" hook?
		 * ------------------------------------------------------
		 */
		$EXT->_call_hook('post_controller');

		/*
		 * ------------------------------------------------------
		 *  Is there a "post_system" hook?
		 * ------------------------------------------------------
		 */
		$EXT->_call_hook('post_system');

		/*
		 * ------------------------------------------------------
		 *  Close the DB connection if one exists
		 * ------------------------------------------------------
		 */
		if (class_exists('CI_DB') AND isset($CI->db))
		{
			$CI->db->close();
		}

	}
}