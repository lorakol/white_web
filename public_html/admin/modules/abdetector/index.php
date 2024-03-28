<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/abdetector/classes/abdetector.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/abdetector/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/abdetector/lang/eng.php";
require_once $lang_file;

global $lng_abd;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_abd",$lng_abd);

$abd = new abdetector();

$abd->autoCheckLang();

$abd_settings = $abd->getSettings();

if(isset($_POST['Submit'])) {
	$abd->saveSettings();
	$abd_settings = $abd->getSettings();
}
$smarty->assign("abd_settings",$abd_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/abdetector/index.html');

$db->close();
close();
?>
