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
require_once $config_abs_path."/modules/news/classes/news.php";
require_once $config_abs_path."/classes/paginator.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

$page = get_numeric("page", 1);

$newsm = new news();
$news_settings = $newsm->getSettings();
$ads_per_page=$news_settings["news_on_each_page"];
$no_pages = 1;

$no_news=$newsm->getNo();
if($no_news>$ads_per_page) {
$paginator = new paginator();
$paginator->setNoSeo(1);
$paginator->setItemsNo($no_news);
global $seo_settings;
if(!$seo_settings['enable_mod_rewrite'])
	$paginator->addToPath('/modules/news');
global $seo_settings;
$paginator->paginate($smarty);
$no_pages = ceil($no_news/$ads_per_page);
}

$news=$newsm->getNews($page, $ads_per_page);
$smarty->assign("news",$news);
$smarty->assign("news_settings",$news_settings);
$smarty->assign("no_news",$no_news);
$smarty->assign("news_per_page",$ads_per_page);
$smarty->assign("no_pages",$no_pages);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/news/news.html');

$db->close();
close();
?>
