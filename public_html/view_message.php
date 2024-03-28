<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/messages.php";

$id = get_numeric_only("id");

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

global $logged_in;
if(!$logged_in) { header("Location: ".$config_live_site."/login.php?loc=messages.php"); exit(0); }
global $crt_usr;
if(!messages::belongsTo($id, $crt_usr)) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

$msg = new messages();
$message = $msg->getMessage($id);

$smarty->assign("message", $message);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('view_message.html');

$db->close();
close();
?>
