<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/modules/change_fg_theme/classes/change_fg_theme.php";

global $crt_lang, $config_abs_path, $lng_cfgth;
$lang_file = $config_abs_path."/modules/change_fg_theme/lang/$crt_lang.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/change_fg_theme/lang/eng.php";
require_once $lang_file;

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("lng_cfgth",$lng_cfgth);
$smarty->assign("section","other");

global $crt_usr;
if(!$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=modules/change_fg_theme/settings.php"); exit(0); }

$th = new change_fg_theme();

// get templates
$cfgth_templates = $th->getActiveTemplates();
$smarty->assign("cfgth_templates",$cfgth_templates);

if(isset($_POST['Submit'])) {

	$th->saveUserSettings($crt_usr);
	header("Location: ".$config_live_site."/modules/change_fg_theme/settings.php");
	exit(0);

}

$th_settings = $th->getCFGTHSettings($crt_usr);
if(!$th_settings) {
	global $appearance_settings;
	$th_settings = array("template" =>$appearance_settings['template'], "template_colorscheme"=>$appearance_settings['template_colorscheme'], "first_page_type"=>$appearance_settings['first_page_type'], "ads_per_page"=>$appearance_settings['ads_per_page'], "dark_mode"=>0);
}
$smarty->assign("th_settings",$th_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/change_fg_theme/settings.html');
close();
$db->close();

?>
