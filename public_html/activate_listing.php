<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/mail_templates.php";
require_once "classes/mails.php";
require_once "classes/info.php";
require_once "classes/listings.php";
require_once "classes/pictures.php";

if(isset($_GET['id']))
	$id = escape($_GET['id']); 
else exit(0);

$post = get_numeric("post", 0);


if(!$post) {

	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","other");
}
else {
	my_session_start();
}

global $db;
global $lng;
$error=''; $info='';
$l=new listings();

if($post) {

	$listing = new listings();
	
	$ret = array("response" => 0, "info" =>"", "error" => "");

	$activation = escape($_POST['activation']);
	$response = $listing->checkActivation($id, $activation);
	$ret['response'] = $response;
	
	if($response) {
	
		if($listing->isExpired($id)) $listing->renew($id);
		$listing->nologinApprove($id);
		if($settings['nologin_pending_listing']) $ret['info'] = $lng['listings']['info']['listing_pending'];
		else $ret['info'] = $lng['listings']['info']['listing_activated'];
		
	} 
	else $ret['error'] = $lng['listings']['errors']['sms_invalid_activation'];
	
	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

        global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);
	session_write_close();
	exit();

} else { 
	// check if already active !!!
	$active = $l->isActive ($id);
	if($active) {
		$info=$lng['listings']['errors']['listing_already_active'];
		$smarty->assign("active", $active);
	}
	else
		$info=$lng['listings']['info']['sms_verification'];
}

if($error) $smarty->assign("error", $error[0]['error']);
$smarty->assign("info", $info);
$smarty->assign("id", $id);

if(!$post) {

	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
	$smarty->display('activate_listing.html');
	close();
	
}

$db->close();
?>