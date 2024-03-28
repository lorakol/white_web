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
require_once "classes/messages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$array_order_way= array("asc", "desc");
$array_order = array("date");

$page = get_numeric("page", 1);
$delete = get_numeric("delete");
$no_per_page = get_numeric("no_per_page", 10);

global $logged_in;
if(!$logged_in) { header("Location: ".$config_live_site."/login.php?loc=messages.php"); exit(0); }
$smarty->assign("username",$logged_in);

$order = 'date';
$order_way = 'desc';

$msg = new messages();
$post_array = array();
$array_searches = array("id", "keyword", "name", "email","date_from", "date_to", "type");

foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

if($_POST) {

	global $settings;

	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) $post_array[$key]=escape($_POST[$key]);
	}
	if($post_array['order']) $order = $post_array['order'];
	if($post_array['order_way']) $order_way = $post_array['order_way'];
	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(msg)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 3);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $msg->delete($id);
	}

	if ( isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) // IE image submit fix

	{
		$location="messages.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple messages
}


if(!$_POST || !isset($post_array['type']) || !$post_array['type'])
	$post_array['user_id'] = $crt_usr;

$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$messages_array=$msg->getMessages($post_array, $page,$no_per_page,$order,$order_way, 1);
$no_messages=$msg->getNoMessages();

$smarty->assign("no_messages",$no_messages);
$smarty->assign("messages_array",$messages_array);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_messages);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('messages.html');

$db->close();
close();
?>
