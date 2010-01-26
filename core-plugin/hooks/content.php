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
	return (is_codeigniter()) ? WPCI::get_title() : $title;
}

// wp_title filter is executed to retrieve the page/post title as it
// is printed for the <title></title> tag, as well as by the Widgets
// that print lists of pages or posts
add_filter('wp_title', 'wpci_wp_title', 10, 3);
function wpci_wp_title($title, $sep, $seplocation) {
	return (is_codeigniter()) ? WPCI::get_title($sep, $seplocation) : $title;
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

add_action('in_admin_footer', 'wpci_in_admin_footer');
function wpci_in_admin_footer() {
	?> 
		<span style="float: right; margin-left: 20px;">
			You are running <a href="http://codeigniter.com" target="_blank">CodeIgniter&reg; <?php echo CI_VERSION ?></a>
			| <a href="http://wiki.github.com/collegeman/wp-ci/" target="_blank">Learn WP-CI</a>
		</span> 
	<?php
}