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

add_action('admin_menu', 'wpci_admin_menu');
function wpci_admin_menu() {
  WPCI::log('info', 'wpci_admin_menu()');
	
  // add menu item for WP-CI
  add_options_page('WP-CI', 'WP-CI', 'administrator', 'wp-ci', array('WPCI', 'execute_admin_fx'));
	
	// add menus for all applications (via annotations)
	foreach(WPCI::$apps as $app => $app_path)
		wpci_process_admin_annotations($app, "$app_path/controllers");
}

function wpci_process_admin_annotations($app, $app_path) {
	WPCI::log('info', 'wpci_process_admin_annotations()');
	
  // Not sure what the performance hit on Glob is.
  // This should probably be cached based on file date modified.
  $entries = glob("{$app_path}/*.php");
  
  foreach($entries as $entry) {
    $class = explode(".php", basename($entry));
    $class = $class[0];
    
    Annotations::addClass($class, $entry);
    
    $ann = Annotations::get($class);
    if (isset($ann['methods'])) {
      foreach($ann['methods'] as $method_name => $method) {
        
        // administrative menus
        if (isset($method['menu'])) {
          WPCI::add_menu($app, $entry, $class, $method_name, $method);
        }
        
        // submenus
        if (isset($method['submenu'])) {
          WPCI::add_submenu($app, $entry, $class, $method_name, $method);
        }
        else if (isset($method['item'])) {
          $method['submenu'] = $method['item'];
          WPCI::add_submenu($app, $entry, $class, $method_name, $method);
        }
        
        // submenus on specific pages
        foreach(array('posts', 'media', 'links', 'pages', 'comments', 'appearance', 'plugins', 'users', 'tools', 'settings') as $p) {
          if (isset($method[$p.'_item'])) {
            WPCI::add_submenu($app, $entry, $class, $method_name, $method, $p);
          }
        }    
      }
    }
  }
  
}
