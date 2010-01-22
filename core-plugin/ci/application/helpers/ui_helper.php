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

wp_enqueue_script('jquery-ui', WP_PLUGIN_URL.'/wp-ci/ci/application/helpers/jquery_ui/js/jquery-ui-1.7.2.custom.min.js', array('jquery'));
wp_register_style('jquery-ui', WP_PLUGIN_URL.'/wp-ci/ci/application/helpers/jquery_ui/css/smoothness/jquery-ui-1.7.2.custom.css');
wp_enqueue_style('wpci-ui', WP_PLUGIN_URL.'/wp-ci/css/admin.css', array('jquery-ui'));

function ui_tabs($css_selector = '.ui-tabs') {
	?> 
		<script type="text/javascript"> 
			jQuery(function() { jQuery('<?php echo $css_selector ?>').tabs(); }); 
		</script> 
	<?php
}