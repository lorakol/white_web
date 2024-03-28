<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/saved_searches.php";
require_once "../classes/paginator.php";
require_once "../classes/alerts.php";
require_once "../classes/fields.php";
require_once "../classes/categories.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$searches=new saved_searches();

$page = get_numeric("page", 1);
$delete = get_numeric("delete");
$no_per_page = get_numeric("no_per_page", 20);

$post_array = array();

$array_searches = array("id", "username", "ip", "date_from", "date_to");
foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) $post_array[$key]=escape($_POST[$key]);
	}
	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(sr)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $searches->delete($id);
	}

	if ( isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) // IE image submit fix

	{
		$location="manage_saved_searches.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple ads
}

$smarty->assign("tab","users");
$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$order = "date";
$order_way = "desc";

$searches_array=$searches->search($post_array, $page, $no_per_page, $order, $order_way);
$no_searches=$searches->getNoSearches();

$smarty->assign("searches_array",$searches_array);
$smarty->assign("total",$no_searches);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_searches);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('manage_saved_searches.html');

$db->close();
close();
?>
