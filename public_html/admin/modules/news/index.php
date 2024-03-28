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

$page = get_numeric("page", 1);
$delete = get_numeric("delete");

// use for moderators page detection
global $self_noext;
$self_noext = "news_index";


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/news/lang/eng.php";
require_once $lang_file;

global $lng_news;
$smarty->assign("lng_news",$lng_news);

$smarty->assign("page",$page);
$smarty->assign("smenu",'index');

$no_per_page = 10;
$news = new news();
$news->autoCheckLang();
$news_settings = $news->getSettings();
$array_news = $news->getAll($page, $no_per_page);
$smarty->assign("array_news",$array_news);

$no = $news->getNo();
$smarty->assign("no",$no);
$smarty->assign("news_settings",$news_settings);

$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/news");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/news/index.html');

$db->close();
close();
?>
