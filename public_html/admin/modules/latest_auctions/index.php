<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/latest_auctions/classes/latest_auctions.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/latest_auctions/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/latest_auctions/lang/eng.php";
require_once $lang_file;

global $lng_latest_auctions;
$smarty->assign("lng_latest_auctions",$lng_latest_auctions);

$la = new latest_auctions();
$la_settings = $la->getSettings();

$info = '';
$error = '';
$la->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($la->saveSettings()) {
		$info=$lng['settings']['settings_saved'];
		$la_settings = $la->getSettings(1);
	} else {
		$la_settings = $la->getTmp();
		$error = $la->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("la_settings",$la_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/latest_auctions/index.html');

$db->close();
close();
?>