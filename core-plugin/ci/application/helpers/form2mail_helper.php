<?php

$form2mail_secret = "Jackson Clinics are the best clinics!";

$form2mail_fields = array();

function setformfield($label, $name, $options = array()) {
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

function formfield($label, $name, $options = array()) {
	setformfield($label, $name, $options);
	echo _loc($label);
}

function setcheckboxfield($label, $name) {
	global $form2mail_fields;
	$form2mail_fields[] = array(
		'name' => $name,
		'label' => $label,
		'checkbox' => true
	);
}

function checkboxfield($label, $name) {
	setcheckboxfield($label, $name);
	echo _loc($label);
}

function setprivatefield($label, $name) {
	global $form2mail_fields;
	$form2mail_fields[] = array(
		'name' => $name,
		'label' => $label,
		'private' => true
	);
}

function privatefield($label, $name) {
	setprivatefield($label, $name);
	echo _loc($label);
}

function setformsection($label, $level = 1) {
	global $form2mail_fields;
	$form2mail_fields[] = array(
		'header' => $label,
		'level' => $level
	);
}

function formsection($label, $level = 1) {
	setformsection($label);
	echo _loc($label);
}

function fieldlist() {
	global $form2mail_fields, $form2mail_secret;
	$json = htmlentities(json_encode($form2mail_fields));
	?>
		<input type="hidden" name="__fields" value="<?php echo $json ?>" />
		<input type="hidden" name="__nonce" value="<?php echo md5($form2mail_secret.$json) ?>" />
	<?php
}

function form_nonce_is_valid() {
	global $IN, $form2mail_secret;
	return $IN->post('__nonce') == md5($form2mail_secret.htmlentities($IN->post('__fields')));
}
