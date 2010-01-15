<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * Ning API library
 */
class NingAPI {

    /**
	 *  Returns the options names and aliases
     *
	 *  @return     {alias=>name}
     */
	function getOptionNames() {
		static $options = array(
			'domain' => 'mt_ning_domain',
			'name_label' => 'mt_ning_name_label',
			'email_label' => 'mt_ning_email_label',
			'password_label' => 'mt_ning_password_label',
			'moderation_warning' => 'mt_ning_moderation_warning',
			'allow_anonymous_comments' => 'mt_ning_allow_anonymous_comments',
			'failed_login_error_message' => 'mt_ning_failed_login_error_message'
		);
    	return $options;
    }

    /**
	 *  Returns the options values
     *
	 *  @return     {alias=>value}
     */
    function getOptionValues() {
		$opts = array();
		foreach(NingIdApi::getOptionNames() as $alias=>$name) {
			$opts[$alias] = get_option($name);
		}
		return $opts;
    }

    /**
	 *  Checks whether domain is valid.
     *
	 *  @param      $domain		string		Domain name (w/o schema and path)
     *  @return     boolean
     */
    function checkDomain($domain) {
		$url = "http://$domain/main/external/info?format=serialize";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		if ($result && is_array($info = unserialize($result)) && $info['version']) {
			return true;
		}
		return false;
    }

    /**
	 *  Authorizes ning user and returns some information about him/her.
	 *  Returns array with user information or NULL if authentification fails
     *
	 *  @param      $domain		string		Ning network domain (w/o schema and path)
	 *  @param		$email		string		Screen name or email
	 *  @param		$password	string		Password
	 *  @return     {name, email, avatar_url}
     */
	function authorize($domain, $email, $password) {
		$url = "http://$domain/main/external/auth?format=serialize";
        $curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, "email=".urlencode($email)."&password=".urlencode($password));
        curl_setopt($curl, CURLOPT_USERAGENT, "botd Mozilla/4.0 (Compatible; Ning Auth API)");
		$result = curl_exec($curl);
		if ($result && is_array($info = unserialize($result)) && count($info) && $info['email'] && $info['name']) {
			return $info;
		}
		return NULL;
    }
	
}