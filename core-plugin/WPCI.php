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
	
	static $admin_menus = array();
	
	static $active_app;
	
	private static $title;
	
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
	
	static function log($level, $message = null) {
		if (function_exists('log_message')) {
			log_message($level, $message);
		}
		else if (defined('WP_DEBUG') && WP_DEBUG == true) {
			error_log("[WPCI] $message");
		}
	}
	
	static function title($title) {
		self::$title = $title;
	}
	
	static function get_title($sep, $seplocation) {
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
		
		add_menu_page($page_title, $page_title, $args['capability'], $token, array('WPCI', 'execute_admin_fx'), $icon_url, $args['position']);
		
		if ($page_title != $menu_title)
			add_submenu_page($token, $page_title, $menu_title, $args['capability'], $token, array('WPCI', 'execute_admin_fx'));	
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
			
			add_submenu_page($parent_token, $page_title, $menu_title, $args['capability'], $token, array('WPCI', 'execute_admin_fx'));	
		}
	}
	
	static function execute_admin_fx() {
		global $OUT;
		echo $OUT->_display();
	}
	
}


/**
 * @return TRUE when the Gateway Page has been used to front this request,
 * indicating that CodeIgniter should be used to process the request and
 * generate content for its response.
 */
function is_codeigniter() {
	$gateway = wpci_get_gateway();
	$current_page = get_page(get_the_ID());
	return $gateway->post_name == $current_page->post_name;
}

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

