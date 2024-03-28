<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("news", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/news/classes/news.php";

function first_page_news($smarty) {

	//global $is_mobile;
	//if($is_mobile) return;
	
	global $smarty;
	$newsm = new news();
	$news_settings = $newsm->getSettings();
	$news = $newsm->getNews(1, $news_settings['news_on_first_page']);
	$smarty->assign('news_settings',$news_settings);
	$smarty->assign('news',$news);

	// include language file
	global $config_abs_path, $crt_lang;
	$lang_file = $config_abs_path."/modules/news/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/news/lang/eng.php";
	require_once $lang_file;
	$smarty->assign("lng_news",$lng_news);

}

function check_languages_news() {

	$news = new news();
	$news->autoCheckLang();
	
}

function setNewsMetaInfo(&$page_info, $smarty){

	global $self_noext;
	if( $self_noext != "news")	return;

	$newsm = new news();
	$news_settings = $newsm->getSettings();
	
	global $crt_lang;
	
	$page_info['title'] = $news_settings['page_title_'.$crt_lang];
	$page_info['meta_keywords'] = $news_settings['meta_keywords_'.$crt_lang];
	$page_info['meta_description'] = $news_settings['meta_description_'.$crt_lang];
	
	$smarty->assign("page_info", $page_info);

}

function setSeoNewsLink(&$seo_links) {
 
	$seo_links['news'] = 'news';

}

add_action('first_page', 'first_page_news');
add_action('add_language', 'check_languages_news');
add_action('delete_language', 'check_languages_news');
add_action('set_meta_info', 'setNewsMetaInfo');
add_action('init_seo', 'setSeoNewsLink');

?>