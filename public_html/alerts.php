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
require_once "classes/alerts.php";
require_once "classes/pictures.php";

$array_actions = array ("view", "confirm", "unsubscribe", "user");
$array_actions_key = array ("confirm", "unsubscribe");

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

if(isset($_GET['action']) && in_array($_GET['action'], $array_actions)) $action = $_GET['action']; else exit(0);
if(isset($_GET['key'])) $key = escape($_GET['key']); else if(in_array($_GET['action'], $array_actions_key)) exit(0);
$id = get_numeric("id");
$page = get_numeric("page", 1);

$alert = new alerts();

if($_POST) {

	global $settings;

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(alert)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$sid = substr($key, 5);
		if(!is_numeric($sid)) continue;
		$alert->delete($sid);
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) ) // IE image submit fix

	{
		header("Location: alerts.php?action=user");
		exit(0);
	}
	// end actions for multiple ads
}


$auth=new auth();
$username = $auth->loggedIn();
if($username) { 

	global $crt_usr;
	$usr = new users();
	$user = $usr->getUser($crt_usr);
	$smarty->assign("user",$user);
}

$info = "";
$error = "";

switch($action) {

	case "view":

		require_once "classes/categories.php";

		global $appearance_settings;

		$no_listings = $alert->getNoListings($id);
		$alert_id = $alert->getAlertId($id);
		$alert_array = $alert->getAlert($alert_id);
		$new_alerts = $alert->getNewAlerts($id, $page, $appearance_settings['ads_per_page']);

		$listings = new listings;
		$listings_array = $listings->getList($new_alerts);

		$smarty->assign("listings_array",$listings_array);
		$smarty->assign("no_listings",$no_listings);

		$search_array = $alert->searchToArray($alert_array['search']);
		$str_search=$alert->makeSearchString($search_array);
		$smarty->assign("str_search",$str_search);

		$paginator = new paginator();
		$paginator->setItemsNo($no_listings);
		$paginator->setNoSeo(1);
		$paginator->paginate($smarty);

		break;

	case "confirm":
		if($alert->confirm($id, $key)) $info = $lng['alerts']['alert_activated'];
		else $error = $lng['alerts']['error']['invalid_confirmation'];
		break;

	case "unsubscribe":

		if($alert->unsubscribe($id, $key)) $info = $lng['alerts']['alert_unsubscribed'];
		else $error = $lng['alerts']['error']['invalid_unsubscribe_request'];
		break;

	case "user":

		require_once "classes/categories.php";

		if(!$username) exit(0);
		$smarty->assign("username",$username);

		$alerts = $alert->getAlerts($crt_usr);
		$no_listings = count($alerts);
		$smarty->assign("alerts", $alerts);
		$smarty->assign("no_listings", $no_listings);

		$paginator = new paginator();
		$paginator->setItemsNo($no_listings);
		$paginator->setNoSeo(1);
		$paginator->paginate($smarty);

		$smarty->assign("page",$page);

		break;

}

$smarty->assign("action",$action);
$smarty->assign("info",$info);
$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('alerts.html');

$db->close();
close();
?>
