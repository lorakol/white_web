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

$msg = new messages();
$message = $msg->getMessage($id);

$smarty->assign("message", $message);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('view_message.html');

$db->close();
close();
?>
