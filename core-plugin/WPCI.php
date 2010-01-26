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

/**
 * The WPCI class provides a namespace for functions and state that
 * bridge the gap between WordPress and CodeIgniter. 
 */
class WPCI {
	
	static $apps = array();
	
	// TODO: rename this, and make these damn variables private...
	static $admin_menus = array();
	
	static $menus = array();
	
	static $active_app;
	
	private static $title;
	
	private static $vars = array();
	
	static function set($name, $value = null) {
		self::$vars[$name] = $value;
		return $value;
	}
	
	static function get($name, $default = null) {
		return (isset(self::$vars[$name]) ? self::$vars[$name] : $default);
	}
	
	static function safe($name, $default = null) {
		return htmlentities(self::get($name, $default));
	}
	
	static function get_url($resource, $app = null) {
		if (!$app)
			$app = self::$active_app;
		
		if ($app)
			return WP_PLUGIN_URL."/$app/application/".$resource;
		else
			return WP_PLUGIN_URL."/wp-ci/".$resource;
	}
	
	static function url($resource, $app = null) {
		echo self::get_url($resource, $app);
	}
	
	static function set_title($title) {
		self::$title = $title;
	}
	
	static function get_title($sep = null, $seplocation = null) {
		if (!self::$title)
			return null;
		
		if ($sep && $seplocation == 'right') {
			return self::$title.' '.$sep;
		}
		else if ($sep && $seplocation == 'left') {
			return $sep.' '.self::$title;
		}
		else {
			return self::$title;
		}
	}
	
	static function activate($spec) {
		if (is_array($spec) && count($spec) < 2)
			return FALSE;
		
		// if $spec is an array, use the second segment for app name, otherwise just use spec
		$app_name = (is_array($spec) && count($spec) > 1 ? $spec[1] : $spec);

		if (self::registered($app_name)) {
			global $CFG;
			self::$active_app = $app_name;
			$CFG->load('config');

			log_message('debug', "Pluggable application [$app_name] activated");
		}
	}
	
	static function active_app() {
		return self::$active_app;
	}
	
	static function active_app_path($fallback_to_core = TRUE) {
		return (self::$active_app ? self::$apps[self::$active_app] : ( $fallback_to_core ? APPPATH : null ));
	}
	
	static function registered($spec) {
		if (is_array($spec) && count($spec) < 2)
			return FALSE;
		
		$app_name = (is_array($spec) && count($spec) > 1 ? $spec[1] : $spec);
		
		return isset(self::$apps[$app_name]);
	}
	
	static function routes() {
		return  (self::$active_app ? self::$apps[self::$active_app].'config/routes'.EXT : APPPATH.'config/routes'.EXT);
	}
	
	/**
	 * Locate and load the PHP file to handle this CI request.
	 * @return If found, the path to the controller file.
	 */
	static function include_controller(&$RTR) {
		$the_path = null;
		
		$this_path = self::active_app_path().'/controllers/'.$RTR->fetch_directory().$RTR->fetch_class().EXT;
		if (file_exists($this_path)) {
			require_once($this_path);
			log_message('debug', "Loaded Controller $this_path");
			$the_path = $this_path;
		}
		
		if (!$the_path) {
			$this_path = self::active_app_path().'/controllers/'.$RTR->default_controller.EXT;
			require_once($this_path);
			log_message('debug', "Loaded Controller $this_path");
			$the_path = $this_path;
		}
		
		if (!$the_path)		
			wp_die('Unable to load default controller. Please make sure the controller specified in routes.php file is valid.');
			
		return $the_path;
	}
	
	/**
	 * Register a WordPress plugin as a CI application.
	 * @param $plugin_file String The path to the plugin trigger file; easily identified by __FILE__ constant.
	 */
	static function register_app($plugin_file) {
		$app_name = substr(basename($plugin_file), 0, strrpos(basename($plugin_file), '.'));
		log_message('debug', "Registering pluggable application: [$app_name]");
		$app_path = realpath(dirname($plugin_file)).'/application';
		if (file_exists($app_path) && is_dir($app_path)) {
			self::$apps[$app_name] = $app_path;
		}
		else {
			wp_die("Plugin <b>$plugin_file</b> is not a valid pluggable CI application: missing folder <b>$app_path</b>.");
		}
	}
	
	
	function process_menu_annotations($app = null, $app_path = null) {
		if ($app == null && $app_path == null) {
			foreach(self::$apps as $app => $app_path) {
				self::process_menu_annotations($app, "$app_path/controllers");
			}
			return;
		}

		$dir = opendir($app_path);

		while(($entry = readdir($dir)) !== false) {

			if ($entry != '.' && $entry != '..') {

				if (is_dir("$app_path/$entry")) {
					self::process_menu_annotations($app, "$app_path/$entry");
				}

				else if (stripos($entry, '.php') == strlen($entry)-4) {
					$class = split("\.", $entry);
					$class = $class[0];

					Annotations::addClass($class, "$app_path/$entry");

					$ann = Annotations::get($class);
					if (isset($ann['methods'])) {
						foreach($ann['methods'] as $method_name => $method) {

							// administrative menus
							if (isset($method['menu'])) {
								self::add_menu($app, "$app_path/$entry", $class, $method_name, $method);
							}

							// submenus
							if (isset($method['submenu'])) {
								self::add_submenu($app, "$app_path/$entry", $class, $method_name, $method);
							}
							else if (isset($method['item'])) {
								$method['submenu'] = $method['item'];
								self::add_submenu($app, "$app_path/$entry", $class, $method_name, $method);
							}

							// submenus on specific pages
							foreach(array('posts', 'media', 'links', 'pages', 'comments', 'appearance', 'plugins', 'users', 'tools', 'settings') as $p) {
								if (isset($method[$p.'_item'])) {
									self::add_submenu($app, "$app_path/$entry", $class, $method_name, $method, $p);
								}
							}

						}
					}

				}
			}
		}

		closedir($dir);
	}
	
	
	static function admin_menu() {
		// add menu item for WP-CI
		add_options_page('WP-CI', 'WP-CI', 'administrator', 'wp-ci', array('WPCI', 'execute_admin_fx'));

		// then add all the other menus
		foreach(self::$menus as $menu) {
			if ($menu['type'] == 'menu') {
				self::_menu($menu);
			}
			else {
				self::_submenu($menu);
			}
		}
	}
	
	

	static function add_menu($app, $path, $class, $method_name, $annotations) {
    
		$args = wp_parse_args($annotations['menu'], array(
			'page_title' => 'My Menu',
			'menu_title' => '',
			'position' => null,
			'capability' => ''
		));
    
		if (!$args['menu_title'])
			$args['menu_title'] = $args['page_title'];
			
		if (!$args['capability'] && isset($annotations['user_can']))
			$args['capability'] = $annotations['user_can'];
		else
			$args['capability'] = 'administrator'; // maybe overkill... ?
    
		$token = "wp-ci/$app/$class/$method_name";
		
		if (!isset(self::$admin_menus[$app]))
			$admin_menus[$app] = array();
		
		if (!isset(self::$admin_menus[$class]))
			$admin_menus[$class] = array();
		
		self::$admin_menus[$app][$class][$method_name] = $token;
		self::$admin_menus[$token] = array('app' => $app, 'app_path' => $path, 'class' => $class, 'method_name' => $method_name);
		
		$icon_url = '';
		if ($icon = isset($annotations['icon']) ? $annotations['icon'] : null) {
			if (strncmp($icon, '/', 1) != 0 && strncmp($icon, 'http://', 7) != 0)
				$icon_url = self::get_url($icon, $app); 
			else
				$icon_url = $icon;
		}
		
		$action_label = isset($_REQUEST['id']) ? 'Edit' : 'Add New';
		$page_title = preg_replace('/%a/', $action_label, $args['page_title']);
		$menu_title = preg_replace('/%a/', $action_label, $args['menu_title']);
		
		self::$menus[] = array(
			'type' => 'menu',
			'page_title' => $page_title, 
			'menu_title' => $menu_title,
			'capability' => $args['capability'], 
			'token' => $token,
			'icon_url' => $icon_url,
			'position' => $args['position']
		);
	}
	
	static function add_submenu($app, $path, $class, $method_name, $annotations, $page = null) {
		$args = wp_parse_args($annotations['submenu'], array(
			'page_title' => 'My Menu Item',
			'menu_title' => '',
			'capability' => '',
			'parent' => ''
		));
		
		if (!$args['menu_title'])
			$args['menu_title'] = $args['page_title'];
			
		if (!$args['capability'] && isset($annotations['user_can']))
			$args['capability'] = $annotations['user_can'];
		else
			$args['capability'] = 'administrator'; // maybe overkill... ?
			
		$token = "wp-ci/$app/$class/$method_name";
	
		if (!isset(self::$admin_menus[$app]))
			$admin_menus[$app] = array();
		
		if (!isset(self::$admin_menus[$class]))
			$admin_menus[$class] = array();
		
		self::$admin_menus[$app][$class][$method_name] = $token;
		self::$admin_menus[$token] = array('app' => $app, 'app_path' => $path, 'class' => $class, 'method_name' => $method_name);
		
		if ($args['parent']) {
			if (stripos($args['parent'], '.php') == strlen($args['parent'])-4) // specific WordPress menu...
				$parent_token = $args['parent'];
			else
				$parent_token = self::$admin_menus[$app][$class][$args['parent']];
		
			$action_label = isset($_REQUEST['id']) ? 'Edit' : 'Add New';
			$page_title = preg_replace('/%a/', $action_label, $args['page_title']);
			$menu_title = preg_replace('/%a/', $action_label, $args['menu_title']);
			
			self::$menus[] = array(
				'type' => 'submenu',
				'parent_token' => $parent_token,
				'page_title' => $page_title,
				'menu_title' => $menu_title,
				'capability' => $args['capability'],
				'token' => $token
			);
		}
	}
	
	function _menu($menu) {
		extract($menu);
		add_menu_page($page_title, $page_title, $capability, $token, array('WPCI', 'execute_admin_fx'), $icon_url, $position);
		if ($page_title != $menu_title)
			add_submenu_page($token, $page_title, $menu_title, $capability, $token, array('WPCI', 'execute_admin_fx'));	
		
	}
	
	static function _submenu($menu) {
		extract($menu);
		add_submenu_page($parent_token, $page_title, $menu_title, $capability, $token, array('WPCI', 'execute_admin_fx'));	
	}
	
	static function execute() {
  
    // MOVED HERE FROM wp-ci.php
    // call upon pluggable applications to register themsevles
    do_action('wpci_register_apps');
    
		log_message('debug', 'Firing-up the engines: processing'.(is_admin() ? ' admin ' : ' ').'request.');
		
		if (is_admin()) {
			self::execute_admin();
		}

		else { // front-end request
			self::execute_frontend();
		}
	}
	
	private static function execute_frontend() {
		global $RTR, $CI, $EXT, $BM, $URI;

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

					if (count(array_slice($URI->rsegments, 2)) > 0) {
						$param_list = trim(substr(
							preg_replace('/\t/',  '', 
								preg_replace('/[\n\r]/', '', 
									print_r(array_slice($URI->rsegments, 2), true)
						)), 8));
					}
					else {
						$param_list = ')';
					}

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
	
	private static function execute_admin() {
		global $RTR, $CI, $EXT, $BM, $URI;

		// process annotations so that tokens are defined
		WPCI::process_menu_annotations();

		if ($token = isset($_REQUEST['page']) ? $_REQUEST['page'] : null) {

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
					
					log_message('debug', "Executing {$class}/{$method}()");

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
	
	
	static function get_apps() {
		return array_merge(array('__core__' => APPPATH), self::$apps);
	}
	
	static function execute_admin_fx() {
		global $OUT;
		echo $OUT->_display();
	}
  
  static function log($type,$str)
  {
    //WPCI::log
		log_message($type, $str);
  }
	
}



