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
require_once "classes/categories.php";
require_once "classes/payment_actions.php";
require_once "classes/users_packages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$array_order_way= array("asc", "desc");
$array_order = array("date_added", "date_updated", "price", "viewed");
$array_show=array("all", "pending", "pending_featured", "expired", "featured", "highlited", "active", "inactive", "priorities", "video", "urgent", "url");
if(isset($_GET['show']) && in_array($_GET['show'], $array_show)) $show=$_GET['show']; else $show="all";
$page = get_numeric("page", 1);
$delete = get_numeric("delete");
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; else $order='date_updated';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';
$no_per_page = get_numeric("no_per_page", 10);

global $crt_usr, $usr_sett;
if(!$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=my_listings.php"); exit(0); }
$smarty->assign("username",$usr_sett['username']);

$listings=new listings();

$post_array = array();
$array_searches = array("id", "keyword", "category_id", "package_id", "date_from", "date_to", "user_id");

foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	global $settings, $ads_settings;

	array_push($array_searches, "show");
	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) $post_array[$key]=escape($_POST[$key]);
	}
	if(isset($post_array['show']) && $post_array['show']) $show = $post_array['show'];
	if(isset($post_array['order']) && $post_array['order']) $order = $post_array['order'];
	if(isset($post_array['order_way']) && $post_array['order_way']) $order_way = $post_array['order_way'];
	if(isset($post_array['no_per_page']) && $post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(ad)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if ($settings['users_delete_ads'] && (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x']))) $listings->delete($id);
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $listings->Activate($id);
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $listings->Deactivate($id);
		if ($ads_settings['enable_sold'] && (isset($_POST['sold_selected']) || isset($_POST['sold_selected_x']))) $listings->markSold($id);
		if ($ads_settings['enable_rented'] && (isset($_POST['rented_selected']) || isset($_POST['rented_selected_x']))) $listings->markRented($id);
	}

	if ( 
	(isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) 
	|| (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) 
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))
	|| (isset($_POST['sold_selected']) || isset($_POST['sold_selected_x']))
	|| (isset($_POST['rented_selected']) || isset($_POST['rented_selected_x']))) // IE image submit fix

	{
		$location="my_listings.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple ads
}

$post_array['user_id'] = $crt_usr;

$options_array = array("active", "inactive", "expired", "pending", "featured", "highlited", "priorities", "video", "urgent", "url");
if(in_array($show, $options_array)) $post_array[$show] = 1;

$smarty->assign("lng",$lng);
$smarty->assign("show",$show);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$listings_array=$listings->searchListings($post_array, $page,$no_per_page,$order,$order_way);
$no_listings=$listings->noListings();

$smarty->assign("no_listings",$no_listings);
$smarty->assign("listings_array",$listings_array);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_listings);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search"));
global $seo_settings;
$paginator->paginate($smarty);

// get plans
$pkg = new packages;
$plans = common::getCachedObject("base_short_plans");
$smarty->assign("plans",$plans);

do_action("listings_page", array($smarty));
do_action("my_listings", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('my_listings.html');

$db->close();
close();
?>