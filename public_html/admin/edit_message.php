<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once $config_abs_path."/classes/messages.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id'])) $id = escape($_GET['id']); else { header ('Location: messages.php'); exit(0); }

$smarty->assign("tab","users");
$smarty->assign("lng",$lng);
$smarty->assign("id",$id);


$msg = new messages();
$message = $msg->getMessage($id);
$message['message'] = str_replace("<br />", "", $message['message']);

$error='';
if(isset($_POST['Submit'])) {

	if(!$msg->edit($id)) {
		$error = $msg->getError();
	} else { 
		header("Location: messages.php");
		exit(0);
	}
}

$smarty->assign("message",$message);

$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$db->close();
$smarty->display('edit_message.html');
?>
