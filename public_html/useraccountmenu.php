<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","account");

$auth=new auth();
$username = $auth->loggedIn();
global $crt_usr;

if(!$username) { header("Location: ".$config_live_site."/login.php?loc=useraccount.php"); exit(0); }
$smarty->assign("username",$username);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('useraccountmenu.html');

$db->close();
close();
?>
