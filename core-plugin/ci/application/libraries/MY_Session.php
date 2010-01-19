<?php
class MY_Session extends CI_Session {
	
	function MY_Session($params = array()) {
		// encryption must be forced on to alleviate conflict between WordPress and CI treatments of $_COOKIE scope
		$params['sess_encrypt_cookie'] = TRUE;
		
		parent::CI_Session($params);
	}
	
}