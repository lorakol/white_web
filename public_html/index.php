<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/pictures.php";
require_once "classes/custom_pages.php";
require_once "classes/categories.php";

global $db;

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","firstpage");

global $cat;
$where_featured='';
$c = new categories();
if($cat) {
	$crt_category=cleanStr(categories::getName($cat));
	$smarty->assign("crt_category",$crt_category);
	$smarty->assign("crt_category_name",_urlencode($crt_category));
	$str="";
	$subcategories = $c->subcatList($cat, $str);
	if($subcategories)
		$where_featured=" and `category_id` in ($subcategories)";
}
global $appearance_settings;
global $is_mobile;

if(!$is_mobile && $cat == 0) {
	// first page content
	$cp = new custom_pages();
	$content = $cp->getFirstPageContent();
	$smarty->assign("content",$content);
}

global $ads_settings;
$listings=new listings();

// featured ads
if(!$is_mobile && $ads_settings['enable_featured']) {
	$max_featured = $ads_settings['no_featured'];
	$featured_ads = $listings->getFeatured($max_featured, $where_featured);
	$no_featured = count($featured_ads);
	$smarty->assign("no_featured",$no_featured);
	$smarty->assign("featured_ads",$featured_ads);
}

// latest ads
if(!$is_mobile && $ads_settings['enable_latest']) {
	$max_latest = $ads_settings['no_latest'];
	$latest = $listings->getLatest($max_latest, $where_featured);
	$no_latest = count($latest);
	if($ads_settings['no_latest_on_row']) $width_latest = (100/$ads_settings['no_latest_on_row']); else $width_latest=100;
	if($ads_settings['no_featured_on_row']) $width_featured = (100/$ads_settings['no_featured_on_row']); else $width_featured=100;
	$smarty->assign("no_latest",$no_latest);
	$smarty->assign("width_latest",$width_latest);
	$smarty->assign("width_featured",$width_featured);
	$smarty->assign("latest",$latest);
}



$array_categories = $c->getCategories($cat);
$smarty->assign('array_categories',$array_categories);

if(!$is_mobile) {
    $no_categories=count($array_categories);
    $no_cats_per_row=$appearance_settings["max_cat_per_row"];
    $width = (int)(100/$no_cats_per_row);
    $no_rows=ceil($no_categories/$no_cats_per_row);
    $smarty->assign('no_categories',$no_categories);
    $smarty->assign('width',$width);
    $smarty->assign('no_cats_per_row',$no_cats_per_row);
    $smarty->assign('no_rows',$no_rows);
}
else if($cat) {
	$parent = $c->getParentCategory($cat);
	$smarty->assign("parent", $parent);
}

// location values, only for Flux template
global $settings;
if($settings['enable_locations'] && $appearance_settings['template']=="flux") {

	require_once "classes/locations.php";
	require_once "classes/fields.php";
	require_once "classes/depending_fields.php";
	$loc = new locations();
	$fields = $loc ->getAllLocations();
	$smarty->assign("fields", $fields);

}

// do actions for "first_page"
do_action("first_page", array($smarty, $cat));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('index.html');

$db->close();
close();
?>
