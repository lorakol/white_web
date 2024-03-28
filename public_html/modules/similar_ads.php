<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("similar_ads", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/similar_ads/classes/similar_ads.php";

function similar_listings($smarty, $listing_id, $listing_array) {

	//global $is_mobile;
	//if($is_mobile) return;
	
	global $smarty;
	$sa = new similar_ads();
	$similar_ads = $sa->getSettings();
	$smarty->assign("similar_ads", $similar_ads);

	$similar = $sa->getSimilar($similar_ads, $listing_array);
	$no_similar = count($similar);
	$smarty->assign("similar", $similar);
	$smarty->assign("no_similar", $no_similar);

}

function check_languages_similar() {

	$sa = new similar_ads();
	$sa->autoCheckLang();
	
}

add_action('details_page', 'similar_listings');
add_action('add_language', 'check_languages_similar');
add_action('delete_language', 'check_languages_similar');

?>