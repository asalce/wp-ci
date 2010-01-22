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

	$langfile = $locale.'.properties';

	if (file_exists(WPCI::active_app_path().'/language/'.$langfile)) {
		$lang = file_get_contents(WPCI::active_app_path().'/language/'.$langfile);
	}
	else {
		if (file_exists(BASEPATH.'language/'.$langfile)) {
			$lang = file_get_contents(BASEPATH.'language/'.$langfile);
			if (!$lang) {
				log_message('error', 'Language file contains no data: language/'.$langfile);
				return;
			}
		}
		else {
			//show_error('Unable to load the requested language file: language/'.$langfile);
			log_message('error', 'Unable to load the requested language file: language/'.$langfile);
			return;
		}
	}

	Localization::$locales[$locale] = array();

	// parse the language file
	foreach(split("\n", $lang) as $entry) {
		// if line starts with #, ignore
		if (strncmp($entry, '#', 1) == 0)
			continue;
			
		list($phrase, $trans) = split("=", $entry);
		Localization::$locales[$locale][trim($phrase)] = trim($trans);
	}

	log_message('debug', 'Language file loaded: language/'.$langfile);

	if ($return == TRUE) {
		return Localization::$locales[$locale];
	}

	return TRUE;
}

/**
 * Print the translated $phrase in $locale (when available), 
 * the original $phrase otherwise.
 */
function _L($phrase, $locale = null) {
	echo localize($phrase, $locale);
}

/**
 * Retrieves the translated $phrase in $locale (when available), 
 * the original $phrase otherwise.
 */
function __L($phrase, $locale = null) {
	return localize($phrase, $locale);
}

function localize($phrase, $locale = null) {
	if (!$locale)
		$locale = Localization::$active_locale;
		
	if (!isset(Localization::$locales[$locale])) {
		load_locale($locale);
	}
		
	return (isset(Localization::$locales[$locale][$phrase]) ? Localization::$locales[$locale][$phrase] : $phrase);		
}