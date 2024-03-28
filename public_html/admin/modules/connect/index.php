<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/connect/classes/connect.php';
require_once 'lang/eng.php';

require_once "../../../classes/fields.php";
require_once "../../../classes/groups.php";


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_connect",$lng_connect);

$conn = new connect();
$connect_settings = $conn->getSettings();

global $crt_lang;
$fields = $arr = $db->fetchAssocList("select `".TABLE_USER_FIELDS."`.`id`, `name`, `caption` from `".TABLE_USER_FIELDS."` left join `".TABLE_USER_FIELDS."_lang` on `".TABLE_USER_FIELDS."`.id = `".TABLE_USER_FIELDS."_lang`.id where `type` like 'textbox' and lang_id='$crt_lang' and `active`=1 and `groups`!=-1");

$smarty->assign("fields",$fields);

$groups = common::getCachedObject("base_autoregister_groups");
$smarty->assign("groups",$groups);

$info = '';
$error = '';
if(isset($_POST['Submit'])) {
	if($conn->saveSettings()) {
		$info=$lng['settings']['settings_saved'];
		$connect_settings = $conn->getSettings(1);
	} else {
		$connect_settings = $conn->getTmp();
		$error = $conn->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("connect_settings",$connect_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/connect/index.html');

$db->close();
close();
?>
