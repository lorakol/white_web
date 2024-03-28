<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/categories.php";
require_once '../../../modules/change_fg_theme/classes/change_fg_theme.php';

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/change_fg_theme/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/change_fg_theme/lang/eng.php";
require_once $lang_file;

global $lng_ac;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_cfgth",$lng_cfgth);

$th = new change_fg_theme();

if(isset($_POST['Submit'])) {
	$th->saveSettings();
}
// get templates
$cfgth_templates = $th->getTemplates();
$smarty->assign("cfgth_templates",$cfgth_templates);

// get colorschemes
$colorschemes = $th->getColorschemes();
$smarty->assign("colorschemes",$colorschemes);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/change_fg_theme/index.html');

$db->close();
close();
?>
