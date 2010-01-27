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

/**
 * This function is a debugging aid that uses the normal print_r
 * function to generate output, but surrounds that output in a <code><pre></pre></code>
 * wrapper.
 */
function dump_code($obj = null, $before = '', $after = '') {
	echo $before.'<code><pre>'.htmlentities(print_r($obj, true)).'</pre></code>'.$after;
}

if (!function_exists('wpci_get_ssl_enabled')):
function wpci_get_ssl_enabled() {
	return get_option('wpci_ssl_enabled', TRUE);
}
endif;

/**
 * Lookup the front-end WordPress page object that is the Gateway
 * for CI requests. The slug and the page were both created
 * when the plug-in was activated. They are also both destroyed when
 * the plug-in is deactivated, so this page should never be accessed
 * directly.
 * @return A WordPress Page object with slug = get_option('wpci_gateway_slug')
 */
if (!function_exists('wpci_get_gateway')):
function wpci_get_gateway() {
	return get_page_by_path(get_option('wpci_gateway_slug'));
}
endif;

/**
 * Lookup the slug that is used to identify CI requests, e.g., '/do/...'.
 * This value can be changed via the WP-CI configuration screen in
 * the back-end. 
 */
if (!function_exists('wpci_get_slug')):
function wpci_get_slug() {
	$slug = get_option('wpci_get_slug');
	return $slug ? $slug : 'do';
}
endif;

/**
 * This function creates the WP-CI front-end gateway page at $slug.
 * @param $slug The value to use for the slug
 */
if (!function_exists('wpci_create_gateway')):
function wpci_create_gateway($slug) {
	return wp_insert_post(array(
		'post_type' => 'page',
		'post_title' => 'CodeIgniter Gateway',
		'post_content' => "The purpose of this file is to provide a page through which all CodeIgniter-generated content can be displayed. Please do not delete it.",
		'post_status' => 'publish',
		'post_name' => $slug
	));
}
endif;

/**
 * Retrieve an array of CI application paths, include the core application
 */
if (!function_exists('wpci_get_app_paths')):
function wpci_get_app_paths() {
	return WPCI::get_apps();
}
endif;

/**
 * Load the setting for CI logging threshold. This value can be set
 * via the WP-CI settings screen in the back-end.
 */
if (!function_exists('wpci_get_logging_threshold')):
function wpci_get_logging_threshold() {
	if ($threshold = get_option('wpci_logging_threshold'))
		return (int) $threshold;
	else if (defined('WP_DEBUG') && WP_DEBUG)
		return 2; // debugging level
	else
		return 0;
}
endif;

/**
 * This is an alias for wpci_get_application_debugging_enabled(), which
 * allows the application to quickly identify whether or not 
 * application debugging is enabled.
 */
if (!function_exists('is_debugging')):
function is_debugging() {
	return (wpci_get_application_debugging_enabled());
}
endif;

/**
 * Retrieves the encryption key used for encrypting the session.
 * This value can be set using the WP-CI settings screen in the back-end.
 */
if (!function_exists('wpci_get_encryption_key')):
function wpci_get_encryption_key() {
	if ($key = get_option('wpci_encryption_key'))
		return $key;
	else {
		// since it wan't defined, we make one up and save it... don't want to MD5 on every request...
		$key = md5($_SERVER['HTTP_HOST'].'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
		update_option('wpci_encryption_key', $key);
		return $key;
	}
}
endif;

/**
 * Whether or not database debugging should be enabled. This value
 * can be set using the WP-CI settings screen in the back-end.
 */
if (!function_exists('wpci_get_database_debugging_enabled')):
function wpci_get_database_debugging_enabled() {
	return get_option('wpci_database_debugging_enabled', FALSE);
}
endif;

/**
 * Whether or not application debugging should be enabled. This value
 * can be set using the WP-CI settings screen in the back-end. This
 * value can also be retrieved using the is_debugging() function.
 */
if (!function_exists('wpci_get_application_debugging_enabled')):
function wpci_get_application_debugging_enabled() {
	return get_option('wpci_application_debugging_enabled', FALSE);
}
endif;

/**
 * Whether or not the CI error renderer should be enabled.
 */
if (!function_exists('wpci_display_errors')):
function wpci_display_errors() {
	return get_option('wpci_display_errors', FALSE);
}
endif;


/**
 * @return TRUE when this request is a CodeIgniter request; otherwise FALSE.
 * @param 
 */
if (!function_exists("is_codeigniter")):
function is_codeigniter() {
	global $post;
	$gateway = wpci_get_gateway();
	return ($gateway && isset($post) && $gateway->post_name == $post->post_name);
}
endif;

/**
 * @return TRUE when the current request is being processed across HTTPS
 */
if (!function_exists('is_secure')):
function is_secure() {
	return WPCI::is_secure();
}
endif;

/**
 * @param $path A String or an Array specifying the contents of a CI request path
 * @return TRUE if $path represents the current action; otherwise FALSE.
 * @see wpci_parse_path() For valid values of $path
 */ 
if (!function_exists("is_action")):
function is_action($path) {
	global $RTR;
	
	$path = wpci_parse_path($path);
	
	if (is_array($path)) {
		if (isset($path['application']) && $RTR->fetch_app() != $path['application'])
			return FALSE;
		if (isset($path['controller']) && $RTR->fetch_class() != $path['controller'])
			return FALSE;
		if (isset($path['action']) && $RTR->fetch_method() != $path['action'])
			return FALSE;
	}
	
	return TRUE;
}
endif;

/**
 * Set the WordPress title to any value from anywhere in the stack.
 * @param $title
 * @see WPCI::title(String)
 */
if (!function_exists("title")):
function title($title = null) {
	if ($title !== null) {
		WPCI::set_title($title);
	}
	return WPCI::get_title();
}
endif;

if (!function_exists('resource')):
function resource($file, $app = null) {
	return WPCI::resource($file, $app);
}
endif;



/**
 * Overrides the redirect() function in the CI URL Helper, instead delegating
 * redirects to the wp_redirect() function.  This function also intelligently
 * recognizes a CI path request and processes it through get_link_to($path, $params).
 * $path specified absolutely (e.g., /path/file or http:// and https://) are passed
 * straight through to wp_redirect().
 */
if (!function_exists("redirect")):
function redirect($path = null, $params = array()) {
	if (!is_array($path) && preg_match('#^(https?:/)?/#i', $path)) {
		wp_redirect($path);
		exit;
	}
	else if (!is_array($path) && ($path == '/' || $path === '' || $path === null)) {
		wp_redirect(get_bloginfo('home'));
		exit;
	}
	else {
		wp_redirect(get_link_to($path, $params));
		exit;
	}
}

/**
 * for backwards-compatibility with last WP-CI release...
 * @deprecated Use redirect($path, $params, $as_request_param) instead. This function WILL go away.
 */
function wpci_redirect($path = null, $params = array()) {
	redirect($path, $params);
}
endif;

/**
 * Parse $path to generate an array of CI path elements. Valid values for $path include
 *
 *     {$action}
 *     {$controller}/{$action}
 *     {$application}/${controller}/${action}
 * 	   {$application}/${controller}/${action}/${param1}/${params2}...
 *
 * $path can also be an array of predefined CI path elements, including...
 *
 * 	   array(
 *		   'application' => $application, 
 *		   'controller' => $controller, 
 * 		   'action' => $action, 
 * 		   'params' => array(),
 *		   'directory' => $directory, // THIS ONE IS NOT YET SUPPORTED...
 *		   'secure' => ( $_SERVER['HTTPS'] == 'on' ), // should be a request over HTTPS, defaults to the current context
 *		   'absolute' => TRUE, // should be an absolute URL include the http:// or https:// protocol,
 *		   'context' => ( is_admin() ? 'back' : 'front' ) 
 *	   ) 
 *
 * When the parameter $use_context is TRUE, the current CI context (when
 * available) is used to fill in the empty portions of the CI path.  This
 * allows for the $application and $controller values to be omitted, but only when
 * in CI context. So if you're calling wpci_parse_path() from outside a CI
 * request, you must include the $application and $controller elements, lest
 * your URL be dysfunctional.
 *
 * The context in which wpci_parse_path() is invoked (i.e., front-end or back-end)  
 * is used to determine the context that is reported in the returned result. This
 * behavior can be overridden with a protocol specified in $path
 *
 *     front://controller/action is a front-end request
 *	   back://controller/action is a back-end request
 *
 * By default, all paths a parsed into URLs that include the domain name
 *
 *     this: http://yourdomain.com/controller/action
 *	   not this: /controller/action
 * 
 * We call the former "absolute", and the latter "relative".
 *
 * To force the exclusion of the domain name, you use a relative notation in the URL
 *
 *     ../controller/action
 *
 * This notation can be combined with the context protocol, looking like
 *
 *     front://../controller/action
 *
 * By default, if the current request was made over HTTPS, then the URL generated
 * will include the https protocol. This can be override through the path protocol
 *
 *     this turns it on: +secure://controller/action
 *     this turns it off: -secure://controller/action
 *
 * This is also compatible with the context protocol element, but will forcefully
 * override the relative notation
 *
 *     this: front+secure://../controller/action
 *	   will produce this: https://yourdomain.com/controller/action
 *     never this: /controller/action
 *
 *     and this: front-secure://../controller/action
 *     will produce this: http://yourdomain.com/controller/action
 *     never this: /controller/action
 *
 * @param $path A path structured as outlined above
 * @param $params (Optional) An array of parameters to include in the request
 * @param $use_context (Optional) Use the context of the current request to fill in unspecified path elements
 * @return An array containing the path elements defined by $path
 */ 
if (!function_exists('wpci_parse_path')):
function wpci_parse_path($path = array(), $params = array(), $use_context = TRUE) {
	global $RTR;

	// dump_code(array('path' => $path, 'params' => $params, 'use_context' => $use_context));

	if (!is_array($path)) {
		
		// detect protocol
		$protocol = array();
		$regex = '^((ci|do|front|frontend|back|backend|admin)?((\+|\-)?(s|secure|ssl))?://)?(\.\./)?';
		preg_match("#$regex#i", $path, $protocol);
		$path = preg_replace("#$regex#i", '', $path);
		
		// reverse the array to allow for a varying quantity of path specifiers
		$params_in_url = array();
		$src = array_reverse(split('\/', $path));
		
		// first, while there are more than three elements in the path, pull out parameter values
		while (count($src) > 3) {
			array_unshift($params_in_url, array_shift($src));
		}

		$path = array();
		
		$path['params'] = $params_in_url;
		
		if (isset($src[0]))
			$path['action'] = $src[0];
		if (isset($src[1]))
			$path['controller'] = $src[1];
		if (isset($src[2]))
			$path['application'] = $src[2];
		
		if (wpci_get_ssl_enabled() != TRUE)
			$path['secure'] = FALSE;
		else
			$path['secure'] = ( $_SERVER['HTTPS'] == 'on' );
		
		// dump_code($path);
				
		if (count($protocol)) {
			//dump_code($protocol);
			
			$context = isset($protocol[2]) ? $protocol[2] : null;
			$secure = isset($protocol[4]) ? $protocol[4] : null;
			
			// override contextual security setting
			if (wpci_get_ssl_enabled() == TRUE) {
				if ($secure == '-')
					$path['secure'] = FALSE;
				else if ($secure == '+' || (isset($protocol[5]) && $protocol[5]))
					$path['secure'] = TRUE;
			}
			
			// context?
			if ($context == 'ci' || $context == 'do' || $context == 'go' || $context == 'front')
				$path['context'] = 'front';
			else if ($context == 'back' || $context == 'backend' || $context == 'admin')
				$path['context'] = 'back';
			else
				$path['context'] = is_admin() ? 'back' : 'front';
				
			// absolute
			$path['absolute'] = $path['secure'] == TRUE || (isset($protocol[6]) && $protocol[6] ? FALSE : TRUE);
		}
	}
		
	// contextual defaults, if requested
	if ($use_context && $RTR) { 
		$path = array_merge(array(
			'application' => $RTR->fetch_app(),
			'controller' => $RTR->fetch_class(),
			'action' => $RTR->fetch_method(),
			'directory' => $RTR->fetch_directory()
		), $path);
	}
	
	// dump_code($path);
	
	// other defaults
	$path = array_merge(array(
		'absolute' => TRUE,
		'params' => array(),
		'context' => 'front'
	), $path);
	
	// merge parameters specified in $path with $params and save in $path
	if (!is_array($path['params']))
		$path['params'] = array($path['params']);
	$path['params'] = array_merge($path['params'], $params);
	
	// sometimes $directory gets fucked up... don't know why...
	$path['directory'] = preg_replace("#\/\/#", "/", $path['directory']);
	// by default, directory needs to be a single slash
	if (!$path['directory'])
		$path['directory'] = '/';
		
	//dump_code($path);
		
	return $path;
}	
endif;

/**
 * Retrieve a link that will be processed by a CI action. This function
 * is context sensitive, generating links for the front-end when in the front-end
 * context and for the back-end when in the back-end context. Context sensitivity
 * can be overridden.  See wpci_parse_path() for details.
 *
 * @param $path An action path as defined by wpci_parse_path()
 * @param $params An array of parameters to include in the URL (values will be encoded)
 * @param $return_array When TRUE, an array is returned instead of the URL. The
 *			array includes all of the original parameters to this function, including
 *			any defaults filled in by wpci_parse_path(), and parameters specific to
 *			the context. 
 *
 * 			In back-end context
 *			    page = The value for the page parameter
 *				host = The host PHP script, e.g., admin.php
 *
 *			In front-end context
 *				URL = The URL to be treated as the from action
 * @param A URL string
 * @see wpci_parse_path()
 */
if (!function_exists("get_link_to")):
function get_link_to($path = array(), $params = array(), $return_array = FALSE) {
	extract($path = wpci_parse_path($path, $params));
	
	if ($context == 'back') {
		
		/* Back-end links take one of two forms
		 *     <host>.php?page=wp-ci/<application>/<controller>/<directory>/<action>
		 *     admin.php?page=wp-ci&a=<application>&c=<controller>&d=<directory>&m=<action>
		 *
		 * The first form is generated when $path specifies a CI request that has a menu
		 * or submenu item. The second form is generated in all other cases.
		 * This approach is required by the necessity of the "page" request parameter,
		 * which must be present lest WordPress reject the request.  
		 */
		
		// the token is what is used to store menu references...
		$token = "wp-ci/$application".$directory."$controller/$action";

		$menu = null;
		$host = 'admin.php';
		if ($app = WPCI::find_app($token)) {
			// FIXME: set host here...
			
		}
		
		// if $menu was found for $token, then page = $token; otherwise $page = 'wp-ci'
		$page = ($app) ? $token : "wp-ci";
		
		if ($return_array) {
			$path['host'] = $host;
			$path['page'] = $page;
			$path['app'] = $app;
			// whatever receives $path will have to decide whether or not to add additional parameters...
			return $path;
		}
		else {
			$query = array();
			
			foreach($params as $k => $p) {
				if (is_array($p)) {
					foreach($p as $i => $v) {
						$query[] = urlencode($k).'['.urlencode($i).']='.urlencode($v);
					}
				}
				else {
					$query[] = urlencode($k).'='.urlencode($p);
				}
			}
			
			$url = "$host?page=$page";
			
			if (!$menu) {
				$url .= "&a=$application&c=$controller&m=$action&d=$directory";
			}
			
			// absolute references by default, otherwise turned off...
			if ($absolute !== FALSE || $secure) {
				$home = get_bloginfo('home');
				// secure?
				if ($secure)
				 	$home = preg_replace('/^http/', 'https', $home);
				$url = $home.'/wp-admin/'.$url;
			}
			
			if (count($query)) {
				$url .= '&'.join('&', $query);
			} 
				
			return $url;
		}
	}
	
	else { // context ~= front
		
		/* Front-end links follow the typical CI format:
		 * 	/application/directory/controller/action/param1/param2
		 */
		
		$url = "/".wpci_get_slug()."/$application".$directory."$controller/$action";

		// prepare the query parameters
		// TODO: do custom routing here...
		if (count($params)) {
			$values = array();
			foreach($params as $k => $p) {
				$values[] = urlencode($p);
			}
			$url .= "/".join('/', $values);
		}

		// absolute references by default, otherwise turned off...
		if ($absolute !== FALSE || $secure) {
			$home = get_bloginfo('home');
			// secure?
			if ($secure)
			 	$home = preg_replace('/^http/', 'https', $home);
			$url = $home.$url;
		}

		// trailing slash is a must in WordPress, without which we tend to 
		// get two requests for the price of one, which screws up the Flash scope to no end...	
	 	$url .= '/';
	
		if ($return_array) {
			$path['url'] = $url;
			return $path;
		}
		else {
			return $url;
		}
	}
	
}
endif;

if (!function_exists("link_to")):
function link_to($path = array(), $params = array()) {
	echo get_link_to($path, $params);
}
endif;

if (!function_exists("form_open")):
function form_open($path = array(), $attributes = '', $hidden = array(), $use_validation_engine = TRUE) {
	
	// default form method is post
	if (is_array($attributes) && !isset($attributes['method'])) {
		$attributes['method'] = 'post';
	}
	else if (is_string($attributes) && stripos($attributes, 'method=') === FALSE) {
		$attributes .= ' method="post"';
	}

	if (is_array($path) || !preg_match('#^(https?:/)?/#i', $path)) {
		extract(get_link_to($path, array(), TRUE));
	
		if ($context == 'back') {
			// if method is get, then page is a hidden input parameter
			// otherwise, it must be a Query String parameter in the form action
			if ( (is_array($attributes) && strtolower($attributes['method']) == 'get') 
				 || stripos($attributes, 'method="get"') !== FALSE ) {
				$form_action = $host;
				$hidden = array_merge($hidden, array(
					'page' => $page
				));
			}
			else {
				$form_action = $host.'?page='.$page;
			}
			
			// when app is null, $page does not include the parts of the CI path
			// spec that tell CI what to execute... so we include them as hidden
			// parameters
			if (!$app) {
				$hidden = array_merge($hidden, array(
					'a' => $application,
					'c' => $controller,
					'm' => $action,
					'd' => $directory
				));
			}
			
		}
		else { 
			// on the front-end, $url always has everything it needs to be the form action...
			$form_action = $url;
		}
	}
	else {
		$form_action = $path;
	}
	
	$form = ($form_action) ? '<form action="'.$form_action.'"' : '<form';

	// generate a random id, if one is not defined (to support the validation engine)
	$form_id = md5(uniqid().$form_action.time());
	if ($use_validation_engine) {
		if (is_array($attributes)) {
			if (!isset($attributes['id'])) {
				$attributes['id'] = $form_id;
			}
			else {
				$form_id = $attributes['id'];
			}
		}
		else {
			$matches = array();
			if (!preg_match('#id="([^"]+)?"#i', $attributes, $matches)) {
				$attributes .= ' id="'.$form_id.'"';
			}
			else { // defined
				$form_id = $matches[1];
			}
		}
	}

	$form .= _attributes_to_string($attributes, TRUE);

	$form .= '>';
	
	if ($use_validation_engine) {
		wp_enqueue_style('jquery-validation-engine', resource('css/validationEngine.jquery.css'));
		wp_enqueue_script('jquery-validation-engine-lang', resource('js/jquery.validationEngine-en.js'), array('jquery'));
		wp_enqueue_script('jquery-validation-engine', resource('js/jquery.validationEngine.js'), array('jquery-validation-engine-lang'));
		$id = $attributes['id'];
		$form .= "\n<script type=\"text/javascript\"> jQuery(function() { jQuery('#$form_id').validationEngine(); }); </script>";
	}

	if (is_array($hidden) AND count($hidden) > 0) {
		$form .= form_hidden($hidden);
	}

	return $form;
}
endif;

/**
 * This function is typically defined in the CI form helper, but
 * we've defined it here to support our overriding of the form_open
 * function.
 */
function _attributes_to_string($attributes, $formtag = FALSE)
{
	if (is_string($attributes) AND strlen($attributes) > 0)
	{
		if ($formtag == TRUE AND strpos($attributes, 'method=') === FALSE)
		{
			$attributes .= ' method="post"';
		}

	return ' '.$attributes;
	}

	if (is_object($attributes) AND count($attributes) > 0)
	{
		$attributes = (array)$attributes;
	}

	if (is_array($attributes) AND count($attributes) > 0)
	{
	$atts = '';

	if ( ! isset($attributes['method']) AND $formtag === TRUE)
	{
		$atts .= ' method="post"';
	}

	foreach ($attributes as $key => $val)
	{
		$atts .= ' '.$key.'="'.$val.'"';
	}

	return $atts;
	}
}

/**
 * Retrieve the content for the WordPress page at $path. This
 * allows for using the WP editing interface to handily store snippets
 * of content.
 * @param $path The page path, assuming SEO permalinks are enabled (and they are for 99% of users)
 */
if (!function_exists('get_wp_page_content')):
function get_wp_page_content($path) {
	if ($page = get_page_by_path($path)) {
		return do_shortcode($page->post_content);
	}
}
endif;

/**
 * Print the content for the WordPress page at $path
 * @param $path The page path, assuming SEO permalinks are enabled (and they are for 99% of users)
 */
if (!function_exists('wp_page_content')):
function wp_page_content($path, $include_edit_link = FALSE) {
	if ($include_edit_link) 
		wp_edit_link($path);
	echo get_wp_page_content($path);
}
endif;

if (!function_exists('wp_edit_link')):
function wp_edit_link($ref = null, $link = null, $before = '', $after = '') {
	if (!current_user_can('edit_pages'))
		return false;
	
	$post = null;
	if (is_numeric($ref)) { // id
		$post = new stdClass();
		$post->ID = $ref;
	}
	else if (is_string($ref)) {
		if (preg_match('#^https?://#i', $ref)) { // custom link
			if ($link === null)
				$link = __('Edit This');
			$link = '<a class="post-edit-link" href="' . $ref . '" title="' . esc_attr( __( 'Edit This' ) ) . '">' . $link . '</a>';
			echo $before . apply_filters( 'edit_post_link', $link, null ) . $after;
			return;
		}
		else if (!($post = get_page_by_path($ref))) { // page path
			wp_die("I couldn't find a page at <b>$ref</b>.");
		}
	}
	else if (is_object($ref)) {
		$post = $ref;
	}
	else {
		// just default to the 
		edit_post_link($link, $before, $after);
		return;
	}
	
	edit_post_link($link, $before, $after, $post->ID);
}
endif;

