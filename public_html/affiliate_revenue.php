<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/paginator.php";
require_once "classes/affiliates.php";
require_once "classes/payment_actions.php";
require_once "classes/priorities.php";
require_once "classes/featured_plans.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

global $logged_in, $crt_usr;

if(!$logged_in) { header("Location: ".$config_live_site."/login.php?loc=affiliate_revenue.php"); exit(0); }
$smarty->assign("username",$logged_in);


$page = get_numeric("page", 1);
$no_per_page = get_numeric("no_per_page", 20);
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; else $order='date';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';

global $usr_sett;
$post_array = array("affiliate_id"=> $crt_usr);

$array_searches = array("amount_from", "amount_to", "date_from", "date_to");
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
	if(isset($post_array['order'])) $order = $post_array['order'];
	if(isset($post_array['order_way'])) $order_way = $post_array['order_way'];
	if(isset($post_array['no_per_page'])) $no_per_page = $post_array['no_per_page'];

}

$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$aff = new affiliates;
$revenue_array=$aff->searchRevenue($post_array,$page,$no_per_page,$order,$order_way);
$no_rev=$aff->getNoRev();

$smarty->assign("revenue_array",$revenue_array);
$smarty->assign("no_rev",$no_rev);
//_print_r($revenue_array);
// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_rev);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('affiliate_revenue.html');

$db->close();
close();
?>