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
	
	private static $apps = array();
	
	private static $active_app;
	
	private static $title;
	
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
			log_message('debug', "Pluggable application [$app_name] activated");
			self::$active_app = $app_name;
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
		$app_path = realpath(dirname($plugin_file)).'/application/';
		if (file_exists($app_path) && is_dir($app_path))
			self::$apps[$app_name] = $app_path;
		else
			wp_die("Plugin <b>$plugin_file</b> is not a valid pluggable CI application: missing folder <b>$app_path</b>.");
	}

	/**
	 * Locate and load the PHP file to handle this CI request.
	 * @return If found, the path to the controller file.
	 */
	static function include_controller(&$RTR) {
		$the_path = null;
		
		$this_path = self::active_app_path().'controllers/'.$RTR->fetch_directory().$RTR->fetch_class().EXT;
		if (file_exists($this_path)) {
			require_once($this_path);
			log_message('debug', "Loaded Controller $this_path");
			$the_path = $this_path;
		}
		
		if (!$the_path) {
			$this_path = self::active_app_path().'controllers/'.$RTR->default_controller.EXT;
			require_once($this_path);
			log_message('debug', "Loaded Controller $this_path");
			$the_path = $this_path;
		}
		
		if (!$the_path)		
			wp_die('Unable to load default controller. Please make sure the controller specified in routes.php file is valid.');
			
		return $the_path;
	}
	
}