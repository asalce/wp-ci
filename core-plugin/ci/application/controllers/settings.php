<?php
class Settings extends Controller {
	
	function Settings() {
		parent::Controller();
	}
	
	function index() {
		$this->load->view('settings/index');
	}
	
}