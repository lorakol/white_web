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
require_once '../../../modules/news/classes/news.php';

global $db;
global $lng;
global $lng_comments;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("smenu",'settings');

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_news",$lng_news);

$news = new news();
$news->autoCheckLang();
$news_settings = $news->getSettings();
if(isset($_POST['Submit'])) {

	$news->saveSettings();
	$news_settings = $news->getSettings(1);
}



$smarty->assign("news_settings",$news_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/news/settings.html');

$db->close();
close();
?>
