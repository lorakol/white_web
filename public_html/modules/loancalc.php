<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("loancalc", $modules_array)) return;

global $config_abs_path;
require_once($config_abs_path.'/modules/loancalc/include.php');

function loancalc_init($smarty, $id, $listing_array) {

	global $is_mobile;
	if($is_mobile) return;
	
	$lc = new loancalc();
	$loancalc_settings = $lc->getSettings();

	if (!in_array( $listing_array['category_id'], $loancalc_settings['array_categories_list'])) { 
		global $smarty;
		$smarty->assign("loancalc_disabled", 1);
		return;
	}	
	
	$smarty->assign("loancalc_disabled", 0);
	$smarty->assign("loancalc_settings", $loancalc_settings);

	global $lng_loancalc;
	$smarty->assign("lng_loancalc", $lng_loancalc);
}

function check_languages_loancalc() {

	$lc = new loancalc();
	$lc->autoCheckLang();
	
}

add_action('details_page', 'loancalc_init');
add_action('add_language', 'check_languages_loancalc');
add_action('delete_language', 'check_languages_loancalc');

?>