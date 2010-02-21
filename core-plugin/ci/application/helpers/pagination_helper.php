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

$CI = &get_instance();
$CI->load->helper('localization');

wp_enqueue_script('jquery-pag', resource('/js/jquery.pag.js'), array('jquery'));

function page_static_buttons() {
	?>
		<div class="static buttons">
			<input type="button" class="btnBack" value="<?php _L('Go Back') ?>" style="float:right;" disabled="disabled" />
			<input type="button" class="btnNext" value="<?php _L('Next') ?> &raquo;" />
			<input type="submit" class="btnFinish" value="<?php _L('Send') ?> &raquo;" />
			<a href="<?php link_to('forms') ?>"><?php _L('Cancel') ?></a>
		</div>
	<?php
}