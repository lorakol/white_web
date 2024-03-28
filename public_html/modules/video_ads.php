<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("video_ads", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/video_ads/classes/video_ads.php";

function video_listings($smarty) {

	global $smarty;
	$va = new video_ads();
	$video_ads = $va->getSettings();
	$smarty->assign("video_ads", $video_ads);

	// include language file
	global $config_abs_path, $crt_lang;
	$lang_file = $config_abs_path."/modules/video_ads/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/modules/video_ads/lang/eng.php";
	require_once $lang_file;

	$smarty->assign("lng_va",$lng_va);

	global $cat;
	$where="";
	if($cat) {
		$str="";
		$c = new categories();
		$subcategories = $c->subcatList($cat, $str);
		if($subcategories)
			$where=" and `category_id` in ($subcategories) ";

	}
	
	$video = $va->getVideo($video_ads, $where);
	$no_video = count($video);
	$smarty->assign("video", $video);
	$smarty->assign("no_video", $no_video);

}

function check_languages_video() {

	$va = new video_ads();
	$va->autoCheckLang();
	
}

add_action('first_page', 'video_listings');
add_action('add_language', 'check_languages_video');
add_action('delete_language', 'check_languages_video');

?>