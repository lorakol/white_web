<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/extra_visits/classes/extra_visits.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/extra_visits/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/extra_visits/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_ev",$lng_ev);

$ev = new extra_visits();

$ev_settings = $ev->getSettings();

if(isset($_POST['Submit'])) {
	$ev->saveSettings();
	$ev_settings = $ev->getSettings();
}
$smarty->assign("ev_settings",$ev_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/extra_visits/index.html');

$db->close();
close();
?>
