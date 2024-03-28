<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/modules/latest_visited/classes/latest_visited.php";
require_once $config_abs_path."/classes/packages.php";
require_once $config_abs_path."/classes/pictures.php";
require_once $config_abs_path."/classes/paginator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

$page = get_numeric("page", 1);

// include language file
global $config_abs_path, $crt_lang;
$lang_file = $config_abs_path."/modules/latest_visited/lang/$crt_lang.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/latest_visited/lang/eng.php";
require_once $lang_file;

$smarty->assign("lng_lv",$lng_lv);

$lv = new latest_visited();
$lv_settings = $lv->getSettings();
$smarty->assign("lv_settings",$lv_settings);

global $appearance_settings;
$ads_per_page=$appearance_settings["ads_per_page"];

$l=new listings();

$lv = new latest_visited;
$listings_array = $lv->getLatestVisited('', $page, $ads_per_page);

$smarty->assign("listings_array",$listings_array);
$no_listings = $lv->getNoLatestVisited();
$smarty->assign("no_listings",$no_listings);

$paginator = new paginator();
$paginator->setNoSeo(1);
$paginator->addToPath("/modules/latest_visited");
$paginator->setItemsNo($no_listings);
global $seo_settings;
$paginator->paginate($smarty);

// if search maps enabled
if(!$is_mobile && $ads_settings['enable_map_search']) {
	$gmap_field = common::getCachedObject("base_gmap_fields", array());
	$smarty->assign("gmap_field",$gmap_field);
}

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/latest_visited/all_latest_visited.html');

$db->close();
close();
?>
