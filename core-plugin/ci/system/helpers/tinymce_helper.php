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

wp_enqueue_script('jquery-tinymce', WP_PLUGIN_URL.'/wp-ci/ci/system/helpers/tiny_mce/jquery.tinymce.js', array('jquery'));

function tinymce_simple($css_selector = 'textarea.tinymce') {
	?>
		<script type="text/javascript">
			;(function($) { $(function() { setTimeout(function() {
				$.each($('<?php echo $css_selector ?>'), function(i, editor) {
					$(editor).tinymce({
						script_url: '<?php echo WP_PLUGIN_URL ?>/wp-ci/ci/system/helpers/tiny_mce/tiny_mce.js',
						mode: 'specific_textareas',
						editor_selector: 'tinymce',
						theme: 'simple'
					});
				});	
			}, 2000); }); })(jQuery);
		</script>
	<?php
}