<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/paginator.php";
require_once '../../../modules/ratings/classes/ratings.php';
require_once $config_abs_path."/classes/groups.php";
require_once $config_abs_path."/classes/fields.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("smenu",'settings');

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/eng.php";
require_once $lang_file;

global $ratings_lng;
$smarty->assign("lng_ratings",$lng_ratings);

$ratings = new ratings();
$ratings->autoCheckLang();
$rt_settings = $ratings->getSettings();

if(isset($_POST['Submit'])) {

	$ratings->saveSettings();
	$rt_settings = $ratings->getSettings(1);
}


$smarty->assign("rt_settings",$rt_settings);

$html_tags = array("a","b","blockquote","br","caption","center","cite","code","div","em","font","frame","h1","h2","h3","h4","h5","h6","hr","i","img","label","li","object","ol","p","pre","script","span","strong","style","table","tbody","td","th","tr","u","ul");
$smarty->assign("html_tags",$html_tags);


$uf = new fields("uf");
$image_fields = $uf->getFieldsOfTypeShort("image,logo", '', '', " and `groups`!=-1");
$smarty->assign("image_fields",$image_fields);

$groups = common::getCachedObject("base_short_groups");
$smarty->assign("groups",$groups);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/ratings/settings.html');

$db->close();
close();
?>
