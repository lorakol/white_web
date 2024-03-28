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
$smarty->assign("section","other");

$array_order_way= array("asc", "desc");
$array_order = array("date_added", "price", "viewed");

$page = get_numeric("page", 1);
$delete = get_numeric("delete");
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; else $order='date_added';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $appearance_settings, $crt_usr;

$ads_per_page=$appearance_settings["ads_per_page"];

if (isset($_POST['delete_selected'])) {

	if(isset($_POST['order_hidden'])) $order=escape($_POST['order_hidden']); else $order='date_added';
	if(isset($_POST['order_way_hidden'])) $order_way=escape($_POST['order_way_hidden']); else $order_way='desc';
	if(isset($_POST['page_hidden'])) $page=escape($_POST['page_hidden']); else $page=1;

}

$listings=new listings();
//$page=2;
$listings_array = $listings->getAllFavourites($page, $ads_per_page, $order, $order_way);
$no_listings=$listings->getNoFavourites();

// set pages 
$paginator = new paginator();
$paginator->setItemsNo($no_listings);
global $seo_settings;
$paginator->paginate($smarty);
$smarty->assign("no_listings",$no_listings);
$smarty->assign("favourite",1);

if (isset($_POST['delete_selected'])) {

	$no=count($listings_array);
	for($i=0; $i<$no; $i++) {
		$id=$listings_array[$i]['id'];
		if(isset($_POST['ad'.$id]) && $_POST['ad'.$id]=='on') $listings->delete($id);
	}
	$location="browse_listings.php?page=".$page;
	if($order) $location.='&order='.$order;
	if($order_way) $location.='&order_way='.$order_way;

	header("Location: ".$location);
	exit(0);
}

$smarty->assign("listings_array",$listings_array);

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('favourites.html');

$db->close();
close();
?>
