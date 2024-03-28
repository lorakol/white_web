<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/browse_location/classes/browse_location.php';
require_once "../../../classes/fields.php";
require_once "../../../classes/depending_fields.php";

global $db;
global $lng;
global $lng_browse_location;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_browse_location",$lng_browse_location);

$bc = new browse_location();
$bl_settings = $bc->getSettings();


$cf = new fields("cf");
$fields = $cf->getFieldsOfTypeShort("menu");
$depending_fields = $cf->getFieldsOfTypeShort("depending");

$smarty->assign("fields",$fields);
$smarty->assign("depending_fields",$depending_fields);

$info = '';
$error = '';
$bc->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($bc->saveSettings()) {
		$info=$lng_browse_location['settings_saved'];
		$bl_settings = $bc->getSettings(1);
	} else {
		$bl_settings = $bc->getTmp();
		$error = $bc->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("bl_settings",$bl_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/browse_location/index.html');

$db->close();
close();
?>
