<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","login-register");

$groups=new groups();
$groups_array=common::getCachedObject("base_autoregister_groups"); 
$smarty->assign("groups_array",$groups_array);
$smarty->assign("no_groups",count($groups_array));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('pre-register.html');

$db->close();
close();
?>
