<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("listings_compare", $modules_array)) return;

function compare_init_template($smarty, $self_noext) {

	global $is_mobile;
	if($is_mobile) return;

//	if(!in_array($self_noext, array("add_to_compare", "remove_compare", "compare", "details", "store", "alerts", "recent_ads", "listings", "user_listings", "favorites") )) return;

	global $smarty;
	// include language file
	global $config_abs_path, $crt_lang;
	$lang_file = $config_abs_path."/modules/listings_compare/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/listings_compare/lang/eng.php";
	global $lng_compare;
	require_once $lang_file;
	$smarty->assign("lng_compare",$lng_compare);

	global $db;
	$cmp = array();
	$compare_array = array();

	$title_var ="title";
	global $ads_settings;
	if($ads_settings['translate_title_description']) {
		global $languages;
		if(empty($languages)) $languages = common::getCachedObject("base_languages");
		if(count($languages)>1) {
			$title_var = "title_$crt_lang";
		}
	}

	if(isset($_COOKIE['compare'])) {
		$cmp = explode(",", $_COOKIE['compare']);
		$i=0;	
		global $db;
		foreach($cmp as $c) {
			$compare_array[$i]['id'] = $c;
			$compare_array[$i]['title'] = $db->fetchRow("select `$title_var` from ".TABLE_ADS." where id='$c'");
			$compare_array[$i]['url_title'] = _urlencode($compare_array[$i]['title']);
			$i++;
		}
	}

	$no_compare = count($compare_array);

	$smarty->assign("no_compare",$no_compare);
	$smarty->assign("cmp",$cmp);
	$smarty->assign("compare_array",$compare_array);

}

add_action('init_template', 'compare_init_template');

?>