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
require_once $config_abs_path."/classes/images.php";
require_once '../../../modules/news/classes/news.php';

// use for moderators page detection
global $self_noext;
$self_noext = "add_news";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("smenu",'index');

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_news",$lng_news);

$news = new news();
$tmp = array();
$error = '';
if(isset($_POST['Submit'])) {

	if($news->add()) {
		global $config_live_site;
		$path = $config_live_site."/".$config_admin_folder."/modules/news/";
		header("Location: ".$path."index.php");
		exit(0);
	} else { 
		$error = $news->getError();
		$tmp = $news->getTmp();

		foreach($languages as $lang) {

			$smarty->assign("content",$tmp['content'][$lang['id']]);

		}

	}

}

$news_settings = $news->getSettings();
$smarty->assign("news_settings",$news_settings);
$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/news/add.html');

$db->close();
close();
?>
