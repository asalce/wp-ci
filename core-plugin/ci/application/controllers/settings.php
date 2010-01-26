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
			
			update_option('wpci_get_slug', strip_tags($this->input->post('slug')));
			
			update_option('wpci_database_debugging_enabled', strip_tags($this->input->post('database_debugging_enabled')));
			
			update_option('wpci_ssl_enabled', $this->input->post('ssl_enabled'));
			
			update_option('wpci_application_debugging_enabled', strip_tags($this->input->post('application_debugging_enabled')));
			
			success('Settings <b>saved</b>.');
			
			redirect('index');
		}
	}
	
	function index() {
		$this->load->helper('ui');
		$this->load->view('settings/index');
	}
	
}