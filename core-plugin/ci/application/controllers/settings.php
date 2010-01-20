<?php
/**
 * @user_can(manage_options)
 */
class Settings extends Controller {
	
	function Settings() {
		parent::Controller();
	}
	
	function saveSettings() {
		if (verify_nonce()) {
			
			update_option('wpci_logging_threshold', $this->input->post('logging_threshold'));
			
			update_option('wpci_encryption_key', strip_tags($this->input->post('encryption_key')));
			
			update_option('wpci_forward_gateway_slug', strip_tags($this->input->post('forward_gateway_slug')));
			
			update_option('wpci_database_debugging_enabled', strip_tags($this->input->post('database_debugging_enabled')));
			
			success('Settings <b>saved</b>.');
			
			wp_redirect("?page=wp-ci");
		}
	}
	
	function index() {
		$this->load->view('settings/index');
	}
	
}