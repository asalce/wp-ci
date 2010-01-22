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

// the_title filter is executed for the_title() function, typically
// used by WordPress templates to print the page title into the source
add_filter('the_title', 'wpci_the_title', 10, 2);
function wpci_the_title($title, $post = null) {
	WPCI::log('info', 'wpci_the_title()');
	return (is_codeigniter()) ? WPCI::get_title() : $title;
}

// wp_title filter is executed to retrieve the page/post title as it
// is printed for the <title></title> tag, as well as by the Widgets
// that print lists of pages or posts
add_filter('wp_title', 'wpci_wp_title', 10, 3);
function wpci_wp_title($title, $sep, $seplocation) {
	WPCI::log('info', 'wpci_wp_title()');
	return (is_codeigniter()) ? WPCI::get_title($sep, $seplocation) : $title;
}

add_filter('the_content', 'wpci_the_content');
function wpci_the_content($content) {
	WPCI::log('info', 'wpci_the_content()');
	
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

// Process back-office requests
add_action('admin_init', 'wpci_admin_init');
function wpci_admin_init() {
	WPCI::log('info', 'wpci_admin_init()');
		
	if ($token = isset($_REQUEST['page']) ? $_REQUEST['page'] : null) {
		
		global $RTR, $CI, $EXT, $BM, $URI;

		$class = null;	
		$method = null;
		$app = null;
		$directory = null;
		$app_path = null;

		// exact match for token?
		if (isset(WPCI::$admin_menus[$token])) {
			// load the menu settings
			$menu = WPCI::$admin_menus[$token];
			
			// tell WPCI which app is active
			$app = $menu['app'];
			WPCI::activate($app);
			
			// load the application controller
			$app_path = $menu['app_path'];
			require_once($app_path);
			
			$BM->mark('loading_time_base_classes_end');
			
			// create an instance of the controller
			$class = $menu['class'];
			$method = $menu['method_name'];
		}
		
		// otherwise, read controller and action from request
		else if ($token == 'wp-ci') {
			$app = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
			$class = isset($_REQUEST['c']) ? strtolower($_REQUEST['c']) : 'settings';
			$method = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
			$directory = isset($_REQUEST['d']) ? $_REQUEST['d'] : null;
		
			// if app is specified, activate it... (otherwise the core application will be used)
			if ($app)
				WPCI::activate($app);
			
			if ($directory)	
				$app_path = WPCI::active_app_path()."/controllers/$directory/$class".EXT;
			else
				$app_path = WPCI::active_app_path()."/controllers/$class".EXT;
		
			if (!file_exists($app_path)) {
				wp_die("I don't know how to do <b>{$class}/{$method}</b>.");
			}	
			
			// load the contorller
			require_once($app_path);
		}
		
		if ($class && $method) {
		
			// fake the router into thinking he did his job...
			$RTR->set_app($app);
			$RTR->set_class($class);
			$RTR->set_method($method);
			$RTR->set_directory($directory);
			
			$BM->mark('loading_time_base_classes_end');
		
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
		
			$EXT->_call_hook('pre_controller');
		
			$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_start');
		
			$CI = new $class();
		
			$EXT->_call_hook('post_controller_constructor');

			// make sure app class is at the top of the annotations stack
			Annotations::addClass($class, $app_path);
			
			// Is there a "remap" function?
			if (method_exists($CI, '_remap')) {
				$CI->_remap($method);
			}
			else {
				// is_callable() returns TRUE on some versions of PHP 5 for private and protected
				// methods, so we'll use this workaround for consistent behavior
				if ( ! in_array(strtolower($method), array_map('strtolower', get_class_methods($CI)))) {
					wp_die("I'm not allowed to do <b>{$class}/{$method}</b>.");
				}
				
				// Call the requested method.
				// Any URI segments present (besides the class/function) will be passed to the method for convenience
				call_user_func_array(array(&$CI, $method), array());
			}
		
			$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_end');
		
			$EXT->_call_hook('post_controller');

			$EXT->_call_hook('post_system');

			if (class_exists('CI_DB') AND isset($CI->db)) {
				$CI->db->close();
			}	
		}
	}
}

// Process front-end requests - actually fired on both the front- and back-ends
add_action('plugins_loaded', 'wpci_plugins_loaded');
function wpci_plugins_loaded() {
	WPCI::log('info', 'wpci_plugins_loaded()');
	
	global $RTR, $CI, $EXT, $BM, $URI;
	
	// call upon pluggable applications to register themsevles
	do_action('wpci_register_apps');
	
	if (is_admin()) {
		return false;
	}

	// set routing, triggering detection of active application (if any)
	$RTR->_set_routing();
	$RTR->set_app(WPCI::$active_app);
	
	// complete CI logging
	log_message('debug', "Router Class Set");
	
	// if a class was identified, try to execute it
	if ($RTR->fetch_class()) {
		
		$app_path = WPCI::include_controller($RTR);
		
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
			
			// make sure app class is at the top of the annotations stack
			Annotations::addClass($RTR->fetch_class(), $app_path);

			// grab the title annotation, if defined
			if ($title = Annotations::get($RTR->fetch_class(), $RTR->fetch_method(), 'title'))
				WPCI::set_title($title);

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
				
				$param_list = substr(
					preg_replace('/\t/',  '', 
						preg_replace('/[\n\r]/', '', 
							print_r(array_slice($URI->rsegments, 2), true)
				)), 8);
				
				log_message('debug', "Executing {$class}/{$method}($param_list");

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

add_action('in_admin_footer', 'wpci_in_admin_footer');
function wpci_in_admin_footer() {
	?> 
		<span style="float: right; margin-left: 20px;">
			You are running <a href="http://codeigniter.com" target="_blank">CodeIgniter&reg; <?php echo CI_VERSION ?></a>
			| <a href="<?php echo WP_PLUGIN_URL ?>/wp-ci/ci/user_guide" target="_blank">User Manual</a>
			| <a href="<?php echo WP_PLUGIN_URL ?>/wp-ci/ci/wpci_user_guide" target="_blank">Developing with WP-CI</a>
		</span> 
	<?php
}