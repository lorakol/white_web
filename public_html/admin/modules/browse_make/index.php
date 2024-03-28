<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/browse_make/classes/browse_make.php';
require_once "../../../classes/fields.php";
require_once "../../../classes/depending_fields.php";

global $db;
global $lng;
global $lng_browse_make;
global $lng_browse_location;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_browse_make",$lng_browse_make);
$smarty->assign("lng_browse_location",$lng_browse_location);

$bm = new browse_make();
$bm_settings = $bm->getSettings();

$cf = new fields("cf");
$fields = $cf->getFieldsOfTypeShort("menu");
$depending_fields = $cf->getFieldsOfTypeShort("depending");

$smarty->assign("fields",$fields);
$smarty->assign("depending_fields",$depending_fields);

$info = '';
$error = '';
$bm->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($bm->saveSettings()) {
		$info=$lng_browse_make['settings_saved'];
		$bm_settings = $bm->getSettings(1);
	} else {
		$bm_settings = $bm->getTmp();
		$error = $bm->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("bm_settings",$bm_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/browse_make/index.html');

$db->close();
close();
?>
