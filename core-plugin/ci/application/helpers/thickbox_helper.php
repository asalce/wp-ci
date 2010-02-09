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

// enqueue the script and styles for thickbox - they're built-into WordPress, so this is all we need!
wp_enqueue_style('thickbox');
wp_enqueue_script('wpci-admin', resource('/js/admin.js'), array('jquery'));
wp_enqueue_script('thickbox', array('wpci-admin'));

function media_picker($field, $value = null) {
	
	if (!is_array($field)) {
		$field = array('field' => $field, 'value' => $value);
	}
	
	$field = array_merge(array(
		'label' => 'Browse...',
		'tab' => 'library',
		'id' => $field['field']
	), $field);
	
	// default tab when bad input: library
	if (!in_array($field['tab'], array('type', 'library', 'type_url')))
		$field['tab'] = 'library';
		
	echo form_input(array(
		'name' => $field['field'], 
		'id' => $field['id'], 
		'value' => $field['value'], 
		'class' => 'regular-text', 
		'onclick' => 'jQuery(this).next().focus().click();', 
		'readonly' => 'readonly', 
		'style' => 'float: left; margin-right: 8px;'
	));
	echo '<a class="thickbox button icon-button icon-media-browse" href="media-upload.php?type=image&tab=library&TB_iframe=true&width=640&height=541" onclick="set_next_editor(\''.$field['id'].'\'); return false;"><span>'.$field['label'].'</span></a>';
	
}