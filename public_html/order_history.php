<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/payment_actions.php";
require_once "classes/users_packages.php";
require_once "classes/paginator.php";
require_once "classes/groups.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";
require_once "classes/invoices.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$array_order_way= array("asc", "desc");
$array_order= array("date", "amount", "processor");
$page = get_numeric("page", 1);
$delete = get_numeric("delete");
$no_per_page = get_numeric("no_per_page", 20);
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; else $order='date';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $crt_usr, $usr_sett;
if(!$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=order_history.php"); exit(0); }
$smarty->assign("username",$usr_sett['username']);

$actions=new payment_actions();

$post_array = array();
$array_searches = array("id");

foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) $post_array[$key]=escape($_POST[$key]);
	}
	if( isset($post_array['order']) && $post_array['order']) $order = $post_array['order'];
	if( isset($post_array['order_way']) && $post_array['order_way']) $order_way = $post_array['order_way'];
	if( isset($post_array['no_per_page']) && $post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(act)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $actions->delete($id);
	}

	if ( isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) // IE image submit fix

	{
		$location="order_history.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple subscriptions
}

$post_array['user_id'] = $crt_usr;

$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$actions_array=$actions->searchOrders($post_array,$page,$no_per_page,$order,$order_way);
$no_actions=$actions->getNoOrders();

$smarty->assign("actions_array",$actions_array);
$smarty->assign("no_actions",$no_actions);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_actions);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('order_history.html');

$db->close();
close();
?>
