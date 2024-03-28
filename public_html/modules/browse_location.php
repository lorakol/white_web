<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("browse_location", $modules_array)) return;

function first_page_browse_location($smarty) {

	global $is_mobile;
	if($is_mobile) return;
	
	$lc_cache = new cache();
	global $crt_lang;
	if(!$browse_location_settings = $lc_cache->readCache("mod_bl_settings", $crt_lang)) {

		global $config_abs_path;
		require_once $config_abs_path."/modules/browse_location/classes/browse_location.php";

		$bl = new browse_location();
		$browse_location_settings = $bl->getSettings();

		$lc_cache->writeCache("mod_bl_settings", $browse_location_settings, $crt_lang);

	}

	if(!$bl_locations = $lc_cache->readCache("mod_bl_locations", $crt_lang)) {

		global $config_abs_path;
		require_once $config_abs_path."/modules/browse_location/classes/browse_location.php";
		$bl = new browse_location();

		$bl_locations = $bl->getBrowseValues($browse_location_settings['type'], $browse_location_settings['field_id'], $browse_location_settings['no_rows']);	

		$lc_cache->writeCache("mod_bl_locations", $bl_locations, $crt_lang);

	}

	global $smarty;

	$smarty->assign('browse_location_settings',$browse_location_settings);
	$smarty->assign('bl_locations',$bl_locations);


}

function check_languages_bl() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/browse_location/classes/browse_location.php";
	$bl = new browse_location();
	$bl->autoCheckLang();
	
}

function clearBLCache() {

	// clear cache
	$lc_cache = new cache();
	$lc_cache->clearCache("mod_bl_locations");

}

add_action('first_page', 'first_page_browse_location');
add_action('add_language', 'check_languages_bl');
add_action('delete_language', 'check_languages_bl');

?>