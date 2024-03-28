<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/auto_renew/classes/auto_renew.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_renew/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_renew/lang/eng.php";
require_once $lang_file;

require_once $config_abs_path."/classes/packages.php";

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_ar",$lng_ar);

$ar = new auto_renew();

$ar_settings = $ar->getSettings();

$packages = packages::getAllForm();
$smarty->assign("packages",$packages);

if(isset($_POST['Submit'])) {
	$ar->saveSettings();
	$ar_settings = $ar->getSettings();
}
$smarty->assign("ar_settings",$ar_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/auto_renew/index.html');

$db->close();
close();
?>
