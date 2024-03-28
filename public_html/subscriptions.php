<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/users_packages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$array_order_way= array("asc", "desc");
$array_order = array("date_added", "price", "viewed");

$auth=new auth();
$username = $auth->loggedIn();
if(!$username) { header("Location: ".$config_live_site."/login.php?loc=subscriptions.php"); exit(0); }
$smarty->assign("username",$username);
global $crt_usr;

$up = new users_packages;
$subscriptions_array = $up->getUserSubscriptions($crt_usr);
$no_subscriptions=0;
if($subscriptions_array)
    $no_subscriptions=count($subscriptions_array);

$smarty->assign("no_subscriptions",$no_subscriptions);
$smarty->assign("subscriptions_array",$subscriptions_array);

$usr = new users();
$user = $usr->getUser($crt_usr);
$smarty->assign("user",$user);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('subscriptions.html');

$db->close();
close();
?>
