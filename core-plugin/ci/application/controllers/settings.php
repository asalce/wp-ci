<?php
/**
 * @user_can(administrator)
 */
class Settings extends Controller {
	
	function Settings() {
		parent::Controller();
	}
	
	function saveSettings() {
		if (verify_nonce()) {
			update_option('wpci_logging_threshold', $this->input->post('logging_threshold'));
			update_option('wpci_encryption_key', strip_tags($this->input->post('encryption_key')));
			$this->session->set_flashdata('success', 'Settings saved.');
			wp_redirect("?page=wp-ci");
		}
	}
	
	function index() {
		$this->load->view('settings/index');
	}
	
}