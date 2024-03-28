<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("latest_auctions", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/latest_auctions/classes/latest_auctions.php";

function latest_auctions($smarty) {

	global $smarty;
	$la = new latest_auctions();
	$la_settings = $la->getSettings();
	$smarty->assign("la_settings", $la_settings);

	global $cat;
	$where="";
	if($cat) {
		$str="";
		$c = new categories();
		$subcategories = $c->subcatList($cat, $str);
		if($subcategories)
			$where=" and `category_id` in ('$subcategories') ";
	}

	$auctions = $la->getAuctions($la_settings, $where);
	$no_auctions = count($auctions);
	$smarty->assign("auctions", $auctions);
	$smarty->assign("no_auctions", $no_auctions);

}

function check_languages_auctions() {

	$la = new latest_auctions();
	$la->autoCheckLang();
	
}

add_action('first_page', 'latest_auctions');
add_action('add_language', 'check_languages_auctions');
add_action('delete_language', 'check_languages_auctions');

?>