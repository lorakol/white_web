<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("browse_make", $modules_array)) return;

function bm_first_page($smarty) {

	global $is_mobile;
	if($is_mobile) return;

	$lc_cache = new cache();
	global $crt_lang;
	if(!$browse_make_settings = $lc_cache->readCache("mod_bm_settings", $crt_lang)) {

		global $config_abs_path;
		require_once $config_abs_path."/modules/browse_make/classes/browse_make.php";

		$bm = new browse_make();
		$browse_make_settings = $bm->getSettings();

		$lc_cache->writeCache("mod_bm_settings", $browse_make_settings, $crt_lang);

	}

	if(!$bm_makes = $lc_cache->readCache("mod_bm_makes", $crt_lang)) {
		global $config_abs_path;
		require_once $config_abs_path."/modules/browse_make/classes/browse_make.php";

		$bm = new browse_make();
		$bm_makes = $bm->getBrowseValues($browse_make_settings['type'], $browse_make_settings['field_id'], $browse_make_settings['no_rows']);	

		$lc_cache->writeCache("mod_bm_makes", $bm_makes, $crt_lang);

	}

	global $smarty;
	$smarty->assign('browse_make_settings',$browse_make_settings);
	$smarty->assign('bm_makes',$bm_makes);
}

function bm_check_languages() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/browse_make/classes/browse_make.php";
	$bl = new browse_make();
	$bl->autoCheckLang();
	
}

add_action('first_page', 'bm_first_page');
add_action('add_language', 'bm_check_languages');
add_action('delete_language', 'bm_check_languages');

?>