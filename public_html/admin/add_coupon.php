<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/coupons.php";
require_once "../classes/config/coupons_config.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","listings");
$smarty->assign("lng",$lng);

$error='';
$tmp=array();
$cp=new coupons_config();
if(isset($_POST['Submit'])){
	if(!$cp->add()) { 
		$error=$cp->getError();
		$tmp=$cp->getTmp();
	} else { 
		header ('Location: coupons.php');
		exit(0);
	}
}

$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_coupon.html');

$db->close();
close();
?>
