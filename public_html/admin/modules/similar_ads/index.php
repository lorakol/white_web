<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/similar_ads/classes/similar_ads.php';
require_once "../../../classes/fieldsets.php";
require_once "../../../classes/fields.php";
require_once "../../../classes/depending_fields.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/similar_ads/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/similar_ads/lang/eng.php";
require_once $lang_file;

global $lng_similar_ads;
$smarty->assign("lng_similar_ads",$lng_similar_ads);

$sa = new similar_ads();
$similar_settings = $sa->getSettings();

$cf = new fields("cf");
$fields = $cf->getFieldsOfType('', 'textarea,htmlarea,multiselect,radio_group,checkbox_group,file,image,youtube,video,audio,google_maps');//getIndividualFields();
$smarty->assign("fields",$fields);


$info = '';
$error = '';
$sa->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($sa->saveSettings()) {
		$info=$lng_similar_ads['settings_saved'];
		$similar_settings = $sa->getSettings(1);
	} else {
		$similar_settings = $sa->getTmp();
		$error = $sa->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("similar_settings",$similar_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/similar_ads/index.html');

$db->close();
close();
?>