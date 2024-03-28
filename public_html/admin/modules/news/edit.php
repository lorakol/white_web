<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/images.php";
require_once '../../../modules/news/classes/news.php';

$id = get_numeric_only("id");

// use for moderators page detection
global $self_noext;
$self_noext = "edit_news";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("smenu",'index');
$smarty->assign("id",$id);

global $appearance_settings, $config_admin_folder;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_news",$lng_news);

$smarty->assign("id",$id);

$news = new news();
$tmp = $news->getArticle($id);
$error = '';
if(isset($_POST['Submit'])) {

	if($news->edit($id)) {
		global $config_live_site;
		$path = $config_live_site."/".$config_admin_folder."/modules/news/";
		header("Location: ".$path."index.php");
		exit(0);
	} else { 
		$error = $news->getError();
		$tmp = $news->getTmp();
	}
}

$news_settings = $news->getSettings();
$smarty->assign("news_settings",$news_settings);
$smarty->assign("tmp",$tmp);
$smarty->assign("error",$error);

$smarty->assign("content",$tmp['content']);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/news/edit.html');

$db->close();
close();
?>
