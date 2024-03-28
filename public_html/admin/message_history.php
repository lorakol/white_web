<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/messages.php";
require_once $config_abs_path."/classes/listings.php";

$id = get_numeric_only("id");

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("tab","users");

$post_array = array("history" => $id);

$msg = new messages;
$messages_array = $msg->getMessages($post_array, 0, 0,'date','asc');

$smarty->assign("messages_array", $messages_array);
$smarty->assign("id", $id);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('message_history.html');

$db->close();
close();
?>
