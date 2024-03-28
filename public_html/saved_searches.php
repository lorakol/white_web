<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/saved_searches.php";
require_once "classes/alerts.php";
require_once "classes/fields.php";
require_once "classes/depending_fields.php";
require_once "classes/categories.php";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$id = get_numeric("id");

$ss = new saved_searches();

if($_POST) {

	global $settings;

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(search)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$sid = substr($key, 6);
		if(!is_numeric($sid)) continue;
		$ss->delete($sid);
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) ) // IE image submit fix

	{
		header("Location: saved_searches.php");
		exit(0);
	}
	// end actions for multiple ads
}

$auth = new auth();
$username = $auth->loggedIn();
if(!$username) exit(0);
$smarty->assign("username",$username);
global $crt_usr;
$searches = $ss->getSavedSearches($crt_usr);
$no_listings = count($searches);
$smarty->assign("searches", $searches);
$smarty->assign("no_listings", $no_listings);

$usr = new users();
$user = $usr->getUser($crt_usr);
$smarty->assign("user",$user);

do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('saved_searches.html');

$db->close();
close();
?>
