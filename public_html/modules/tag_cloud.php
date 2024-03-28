<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("tag_cloud", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/tag_cloud/classes/tag_cloud.php";

function add_to_tag_cloud($keyword) {

	$tc = new tag_cloud();
	$tc->add(rawurldecode($keyword));

}

function periodic_tag_cloud() {

	// delete old tags for tag cloud
	$tc = new tag_cloud();
	$tc->periodic();

}

function first_page_tag_cloud($smarty) {

	global $is_mobile;
	if($is_mobile) return;
	
	global $smarty;
	$tc = new tag_cloud();
	$tag_cloud_title = $tc->getTitle();
	$tag_cloud_array = $tc->getTags();
	$smarty->assign('tag_cloud_title',$tag_cloud_title);
	$smarty->assign('tag_cloud_array',$tag_cloud_array);

}

function check_languages_tc() {

	$tc = new tag_cloud();
	$tc->autoCheckLang();
	
}

add_action('search_keyword', 'add_to_tag_cloud');
add_action('periodic', 'periodic_tag_cloud');
add_action('first_page', 'first_page_tag_cloud');
add_action('add_language', 'check_languages_tc');
add_action('delete_language', 'check_languages_tc');

?>