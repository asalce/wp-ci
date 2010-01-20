<?php
class Localization {
	
	static $locales = array();
	
	static $active_locale = 'en_US';
	
}

function locale($locale = null, $return = FALSE) {
	if (count(func_get_args())) {
		$lang = load_locale($locale, $return);
		Localization::$active_locale = $locale;	
		return $lang;
	}
	else {
		return Localization::$active_locale;
	}
}

function load_locale($locale, $return = FALSE) {
	if ($locale == '') {
		$CI =& get_instance();
		$deft_lang = $CI->config->item('locale');
		$locale = ($deft_lang == '') ? 'en_US' : $deft_lang;
	}

	if (in_array($locale, Localization::$locales, TRUE)) {
		return;
	}

	$langfile = 'messages.'.$locale;

	if (file_exists(WPCI::active_app_path().'/language/'.$langfile)) {
		$lang = file_get_contents(WPCI::active_app_path().'/language/'.$langfile);
	}
	else {
		if (file_exists(BASEPATH.'language/'.$langfile)) {
			$lang = file_get_contents(BASEPATH.'language/'.$langfile);
		}
		else {
			show_error('Unable to load the requested language file: language/'.$langfile);
		}
	}

	if (!$lang) {
		log_message('error', 'Language file contains no data: language/'.$langfile);
		return;
	}

	Localization::$locales[$locale] = array();

	// parse the language
	foreach(split("\n", $lang) as $entry) {
		list($phrase, $trans) = split("=", $entry);
		Localization::$locales[$locale][trim($phrase)] = $trans;
	}

	log_message('debug', 'Language file loaded: language/'.$langfile);

	if ($return == TRUE) {
		return Localization::$locales[$locale];
	}

	return TRUE;
}

function _loc($phrase, $locale = null) {
	echo localize($phrase, $locale);
}

function localize($phrase, $locale = null) {
	if (!$locale)
		$locale = Localization::$active_locale;
		
	if (!isset(Localization::$locales[$locale])) {
		load_locale($locale);
	}
		
	return (isset(Localization::$locales[$locale][$phrase]) ? Localization::$locales[$locale][$phrase] : $phrase);		
}