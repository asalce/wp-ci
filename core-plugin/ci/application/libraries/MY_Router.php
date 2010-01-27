<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * WP-CI The CodeIgniter plugin for WordPress.
 * Copyright (C)2009-2010 Aaron Collegeman.
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

class MY_Router extends CI_Router {

	private $app;
	
	
	function set_app($app) {
		$this->app = $app;
	}
	
	function fetch_app() {
		return $this->app;
	}

	// --------------------------------------------------------------------
	
	function MY_Router() {
		$this->config =& load_class('Config');
		$this->uri =& load_class('URI');
		log_message('debug', "Router Class Initialized");
	}
	
	/**
	 * Set the route mapping
	 *
	 * This function determines what should be served based on the URI request,
	 * as well as any "routes" that have been set in the routing config file.
	 *
	 * @access	private
	 * @return	void
	 */
	function _set_routing() {
		
		// REMOVED: query string support detection - query strings are supported, but routes are required
		
		// Fetch the complete URI string
		$this->uri->_fetch_uri_string();
		
		// Do we need to remove the URL suffix?
		$this->uri->_remove_url_suffix();
		
		// Compile the segments into an array
		$this->uri->_explode_segments();
				
		// attempt to activate pluggable application (might not actually exist...)
		WPCI::activate($this->uri->segments);
		
		// Load the routes.php file.
		$routes_path = WPCI::routes();
		if (file_exists($routes_path)) {
			@include($routes_path);
		}
			
		$this->routes = (!isset($route) OR ! is_array($route)) ? array() : $route;
		
		// Set the default controller so we can display it in the event
		// the URI doesn't correlated to a valid controller.
		$this->default_controller = ( ! isset($this->routes['default_controller']) OR $this->routes['default_controller'] == '') ? FALSE : strtolower($this->routes['default_controller']);	
		unset($this->routes['default_controller']);
		
		// pluggable application is active, but no controller specified - go default
		if (WPCI::active_app_path() != APPPATH && count($this->uri->segments) < 3) {
			$this->go_default();
			return;
		}
		// otherwise, core apppath, no controller specified - go default
		else if (WPCI::active_app_path() == APPPATH && count($this->uri->segments) < 2) {
			$this->go_default();
			return;
		}
		
		// Parse any custom routing that may exist
		$this->_parse_routes();		
		
		// Re-index the segment array so that it starts with 1 rather than 0
		$this->uri->_reindex_segments();
	}
	
	private function go_default() {
		if ($this->default_controller === FALSE) {
			wp_die("Unable to determine what should be displayed. A default route has not been specified in the routing file.");
		}
		
		if (strpos($this->default_controller, '/') !== FALSE)
		{
			$x = explode('/', $this->default_controller);
			$this->set_class(end($x));
			$this->set_method('index');
			$this->_set_request(array_merge(array_filter(array('do', WPCI::get_active_app())), $x));
		}
		else
		{
			$this->set_class($this->default_controller);
			$this->set_method('index');
			// this is a little hairy!
			$this->_set_request(array_merge(array_filter(array('do', WPCI::get_active_app())), array($this->default_controller, 'index')));
		}

		// re-index the routed segments array so it starts with 1 rather than 0
		$this->uri->_reindex_segments();
		
		log_message('debug', "No URI present. Default controller set.");
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Set the Route
	 *
	 * This function takes an array of URI segments as
	 * input, and sets the current class/method
	 *
	 * @access	private
	 * @param	array
	 * @param	bool
	 * @return	void
	 */
	function _set_request($segments = array())
	{
		$segments = $this->_validate_request($segments);
		
		if (count($segments) == 0)
		{
			return;
		}
						
		$this->set_class($segments[0]);
		
		if (isset($segments[1]))
		{
			// A scaffolding request. No funny business with the URL
			if (isset($this->routes['scaffolding_trigger']) AND $this->routes['scaffolding_trigger'] == $segments[1] AND $segments[1] != '_ci_scaffolding')
			{
				$this->scaffolding_request = TRUE;
				unset($this->routes['scaffolding_trigger']);
			}
			else
			{
				// A standard method request
				$this->set_method($segments[1]);
			}
		}
		else
		{
			// This lets the "routed" segment array identify that the default
			// index method is being used.
			$segments[1] = 'index';
		}
		
		// Update our "routed" segment array to contain the segments.
		// Note: If there is no custom routing, this array will be
		// identical to $this->uri->segments
		$this->uri->rsegments = $segments;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Validates the supplied segments.  Attempts to determine the path to
	 * the controller.
	 *
	 * @access	private
	 * @param	array
	 * @return	array
	 */	
	function _validate_request($segments)
	{
		
		// the first segment is our WordPress gateway, so we remove it
		$gateway = array_shift($segments);
		if ($gateway != wpci_get_slug())
			return false;
		
		// the second segment might be an app spec
		if ($segments[0] == WPCI::get_active_app()) {
			$this->set_app(array_shift($segments));
		}
		
		// and if there's nothing else, stop validating...
		if (!count($segments)) {
			return $segments;
		}
		
		// Does the requested controller exist in the root folder?
		if (file_exists(WPCI::active_app_path().'/controllers/'.$segments[0].EXT)) {
			return $segments;
		}

		// Is the controller in a sub-folder?
		if (is_dir(WPCI::active_app_path().'/controllers/'.$segments[0]))
		{		
			// Set the directory and remove it from the segment array
			$this->set_directory($segments[0]);
			$segments = array_slice($segments, 1);
			
			if (count($segments) > 0)
			{
				// Does the requested controller exist in the sub-folder?
				if ( ! file_exists(WPCI::active_app_path().'/controllers/'.$this->fetch_directory().$segments[0].EXT))
				{
					wp_die("There are no controllers for <b>".$this->fetch_directory().$segments[0]."</b>.");
				}
			}
			else
			{
				$this->set_class($this->default_controller);
				$this->set_method('index');
			
				// Does the default controller exist in the sub-folder?
				if ( ! file_exists(WPCI::active_app_path().'/controllers/'.$this->fetch_directory().$this->default_controller.EXT))
				{
					$this->directory = '';
					return array();
				}
			
			}

			return $segments;
		}
		
		// Is the requested controller 

		// Can't find the requested controller...
		wp_die("There are no controllers for <b>$segments[0]</b>.");
	}

}
// END Router Class

/* End of file Router.php */
/* Location: ./system/libraries/Router.php */