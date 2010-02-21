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

$form2mail_fields = array();

/**
 * Records a new form field - could be a text input or a select input -for this form2mail session. 
 * @param String The field label, to be displayed in the e-mail
 * @param String The field name, to store the field value
 * @param Array Options for field creation, including
 *		display_when = '<field_name>'
 *			Only include this field in the resulting e-mail when <field_name> is present and defined
 */
function set_formfield($label, $name, $options = array()) {
	global $form2mail_fields;
	
	$options = array_merge(array(
		"display_when" => ''
	), $options);
	
	$form2mail_fields[] = array(
		'name' => $name,
		'label' => $label,
		'options' => $options
	);
	
}

/**
 * Records a new form field and then prints a localized version of $label.  
 * For parameter types and descriptions, see set_formfield($label, $name, $options);
 */
function formfield($label, $name, $options = array()) {
	set_formfield($label, $name, $options);
	_L($label);
}


/**
 * Records a new checkbox field - a checkbox input or a radio input -for this form2mail session. 
 * @param String The field label, to be displayed in the e-mail
 * @param String The field name, to store the field value
 * @param Array Options for field creation, including
 *		display_when = '<field_name>,<field_name2>,...'
 *			Only include this field in the resulting e-mail when one of <field_name>,<field_name2>,... are present and defined
 */
function set_checkboxfield($label, $name, $options = array()) {
	global $form2mail_fields;
	
	$options = array_merge(array(
		"display_when" => ''
	), $options);
	
	$form2mail_fields[] = array(
		'name' => $name,
		'label' => $label,
		'checkbox' => true,
		'options' => $options
	);
}

/**
 * Records a new form field and then prints a localized version of $label.  
 * For parameter types and descriptions, see set_checkboxfield($label, $name, $options);
 */
function checkboxfield($label, $name, $options = array()) {
	set_checkboxfield($label, $name, $options);
	_L($label);
}

/**
 * Records a private field - a field whose text value is stored in the local database instead of being e-mailed.
 * @param String The field label, to be displayed in the e-mail
 * @param String The field name, to store the field value
 * @param Array Options for field creation, including
 *		display_when = '<field_name>,<field_name2>,...'
 *			Only include this field in the resulting e-mail when one of <field_name>,<field_name2>,... are present and defined
 */
function set_privatefield($label, $name, $options = array()) {
	global $form2mail_fields;
	
	$options = array_merge(array(
		"display_when" => ''
	), $options);
	
	$form2mail_fields[] = array(
		'name' => $name,
		'label' => $label,
		'private' => true,
		'options' => $options
	);
}

/**
 * Records a new private field and then prints a localized version of $label.  
 * For parameter types and descriptions, see set_privatefield($label, $name, $options);
 */
function privatefield($label, $name, $options = array()) {
	setprivatefield($label, $name, $options);
	_L($label);
}

/**
 * Introduces a section break into the form fields.
 * @param String The label to use to identify the section. 
 * @param Numeric The level at which this section occurs in the hierarchy.
 */
function set_formsection($label, $level = 1) {
	global $form2mail_fields;
	$form2mail_fields[] = array(
		'header' => $label,
		'level' => $level
	);
}

/**
 * Records a new field section, and then prints the localized version of $label into the form.
 * For parameter types and descriptions, see set_formsection($label, $name);
 */
function formsection($label, $level = 1) {
	set_formsection($label, $level);
	echo '<span class="sectionbreak">'.__L($label).'</span>';
}

/**
 * Records a new field section, and then prints the localized version of $label into the form as
 * <hX class="sectionbreak"><span>$label</span></hX>
 * where X is = $level
 */
function formheading($label, $level = 1) {
	set_formsection($label, $level);
	echo '<div class="sectionbreak"><p>'.__L($label).'</p></div>';
}

/**
 * Generates the JSON-encoded list of form fields to be captured and e-mailed,
 * and prints that list as well as an encoded NONCE to protect the list from
 * tampering as hidden input fields followed by </form>.
 */
function form2mail_close() {
	global $form2mail_fields;
	$field_data = json_encode($form2mail_fields);
	?>
			<input type="hidden" name="__fields" value="<?php echo htmlspecialchars($field_data) ?>" />
			<input type="hidden" name="__nonce" value="<?php echo md5(wpci_get_encryption_key().$field_data) ?>" />
		</form>
	<?php
}

function verify_form2mail_nonce() {
	global $IN;
	return $IN->post('__nonce') == md5(wpci_get_encryption_key().$IN->post('__fields'));
}
