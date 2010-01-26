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

add_filter('init', 'wpci_flush_rules');
function wpci_flush_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

add_filter('generate_rewrite_rules', 'wpci_generate_rewrite_rules');
function wpci_generate_rewrite_rules($wp_rewrite) {
	$gateway = wpci_get_gateway();
	$wp_rewrite->rules = array(
		'^'.wpci_get_slug().'/.*' => 'index.php?pagename='.$gateway->post_name
	) + $wp_rewrite->rules;
}

add_filter('query_vars', 'wpci_rewrite_query_vars');
function wpci_rewrite_query_vars($vars) {
	return $vars;
}