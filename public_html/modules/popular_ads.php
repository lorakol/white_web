<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("popular_ads", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/popular_ads/classes/popular_ads.php";

function popular_listings($smarty) {

	global $smarty;
	$pa = new popular_ads();
	$popular_ads = $pa->getSettings();
	$smarty->assign("popular_ads", $popular_ads);

	global $cat;
	$where="";
	if($cat) {
		$str="";
		$c = new categories();
		$subcategories = $c->subcatList($cat, $str);
		if($subcategories)
			$where=" and `category_id` in ($subcategories) ";

	}
	
	$popular = $pa->getPopular($popular_ads, $where);
	$no_popular = count($popular);
	$smarty->assign("popular", $popular);
	$smarty->assign("no_popular", $no_popular);

}

function check_languages_popular() {

	$pa = new popular_ads();
	$pa->autoCheckLang();
	
}

add_action('first_page', 'popular_listings');
add_action('add_language', 'check_languages_popular');
add_action('delete_language', 'check_languages_popular');

?>