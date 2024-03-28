<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/packages.php";
require_once "classes/pictures.php";
require_once "classes/paginator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","recent");

$array_order_way= array("asc", "desc");
$array_order= array("date_updated", "price", "title");
$page = get_numeric("page", 1);
if(isset($_GET['order']) && in_array($_GET['order'],$array_order)) $order=$_GET['order']; else $order='date_updated';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $appearance_settings;
$ads_per_page=$appearance_settings["ads_per_page"];

$listings=new listings();

$no_listings=$listings->getNoRecent();
$paginator = new paginator();
$paginator->setItemsNo($no_listings);
global $seo_settings;
$paginator->paginate($smarty);

$listings_array=$listings->getRecent($page, $ads_per_page, $order, $order_way);
$smarty->assign("listings_array",$listings_array);
$smarty->assign("no_listings",$no_listings);

// if search maps enabled
if(!$is_mobile && $ads_settings['enable_map_search']) {
	$gmap_field = common::getCachedObject("base_gmap_fields");
	$smarty->assign("gmap_field",$gmap_field);
}

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('recent_ads.html');

$db->close();
close();
?>
