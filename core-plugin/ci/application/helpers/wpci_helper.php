<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
 * Sets/gets a success message from the flashdata scope.
 * @param $message When set, puts $message at 'success' in the flashdata scope; otherwise, attempts
 * to return a message previously stored in the same location.
 */
function success($message = null) {
	global $CI;
	if (!$CI) {
		wp_die('Can\'t use <code>success()</code> without an initialized CI request.');
	}
	
	if ($message) {
		log_message('debug', "Storing success message: $message");
		$CI->session->set_flashdata('success', $message);
		return FALSE;
	}
	else if ($message = $CI->session->flashdata('success')) {
		log_message('debug', "Retrieving success message: $message");
		return $message;
	}
}

/**
 * Sets/gets a failure message from the flashdata scope.
 * @param $message When set, puts $message at 'failure' in the flashdata scope; otherwise, attempts
 * to return a message previously stored in the same location.
 */
function failure($message = null) {
	global $CI;
	if (!$CI) {
		wp_die('Can\'t use <code>failure()</code> without an initialized CI request.');
	}
	
	if ($message) {
		log_message('debug', "Storing failure message: $message");
		$CI->session->set_flashdata('failure', $message);
		return FALSE;
	}
	else if ($message = $CI->session->flashdata('failure')) {
		log_message('debug', "Retrieving failure message: $message");
		return $message;
	}
}

/**
 * Prints the WordPress-standard success and/or failure bar when a message is stored
 * in either of success() or failure().
 */
function success_and_failure() {
	foreach(array('success' => success(), 'failure' => failure()) as $class => $message) {
		if (is_admin() && $message) {
			?>
				<div class="updated fade <?php echo $class ?>" id="message" style="background-color: <?php ($class == 'success' ? 'rgb(255, 251, 204)' : '#AB6F74') ?>;">
					<p><?php echo $message ?></p></div><br />
			<?php
		}
		else if ($message) {
			?>
				<div class="<?php echo $class ?>">
					<p><?php echo $message ?></p>
				</div>
			<?php
		}
	}
}


/**
 * @return When $value is defined, 'Edit'; otherwise, 'Add New'
 */
function get_add_or_edit($value) {
	return ($value ? 'Edit' : 'Add New');
}

function add_or_edit($value) {
	echo get_add_or_edit($value);
}



/**
 * Generates a standard WordPress options page header, with optional
 * "Add New" button...
 */
function admin_head($label, $icon = 'icon-options-general', $add_new_url = null, $add_new_label = 'Add New') {
	?>
		<div id="<?php echo $icon ?>" class="icon32"><br /></div>
		<h2><?php echo $label ?><?php if ($add_new_url) echo ' <a href="'.$add_new_url.'" class="add-new-h2 button">'.$add_new_label.'</a>' ?></h2>
	<?php
}

/**
 * Generate a nonce.
 * @param action (Optional) The action for which to create the nonce
 * When action is null, the name of the current class is used.
 */
function get_nonce($action = null) {
	if ($action = null) {
		global $RTR;
		$action = $RTR->fetch_class();
	}
	return wp_create_nonce($action);
}

function nonce($action = null) {
	echo get_nonce($action);
}


/**
 * Verify a nonce.
 * @param action (Optional) The action for which the nonce was created; assumed to be the name of the current class when undefined
 * @param param (Optional) The request parameter in which the nonce value can be found; assumed to be "nonce" when undefined
 * @return If nonce is invalid, thread death ensues. Otherwise, returns TRUE.
 */
function verify_nonce($action = null, $param = 'nonce') {
	if ($action = null) {
		global $RTR;
		$action = $RTR->fetch_class();
	}

	if (!wp_verify_nonce($_REQUEST[$param], $action))
		wp_die("Invalid nonce.");
	else
		return true;
}


