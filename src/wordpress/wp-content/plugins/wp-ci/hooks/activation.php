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

// on activation, make sure our gateway page is installed
register_activation_hook(__FILE__, 'wpci_activate');
function wpci_activate() {

	if (!($slug = get_option('wpci_gateway_slug', false))) {
		
		do {
			$slug = md5(uniqid());
			if (!get_page_by_path($slug)) {
				$page = wpci_create_gateway($slug);
			}
		} while (!$page);
	
		update_option('wpci_gateway_slug', $slug);
	}
	
	// no page for the slug? maybe deleted, create again...
	else if (!get_page_by_path($slug)) {
		wpci_create_gateway($slug);
	}
	      
}

// make sure that our gateway page doesn't show up in standard page lists
add_filter('wp_list_pages_excludes', 'wpci_list_pages_excludes');
function wpci_list_pages_excludes($exclude) {
	$gateway = wpci_get_gateway();
	$exclude[] = $gateway->ID;
	return $exclude;
}

// on deactivation, remove our gateway page
register_deactivation_hook(__FILE__, 'wpci_deactivate');
function wpci_deactivate() {
	// remove our gateway page, otherwise it'll show up in page lists
	if ($page = wpci_get_gateway()) {
		wp_delete_post($page->ID);
	}	
}
