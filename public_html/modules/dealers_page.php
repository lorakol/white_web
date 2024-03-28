<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("dealers_page", $modules_array)) return;

function check_languages_dealers_page() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";
	$dp = new dealers_page();
	$dp->autoCheckLang();

}

function dealers_page_includes() {

	global $config_abs_path;
	require_once($config_abs_path.'/classes/fields.php');
	require_once($config_abs_path.'/classes/depending_fields.php');
	require_once($config_abs_path.'/modules/dealers_page/include.php');

}

function dealers_page_init_template($smarty) {

	global $self_noext;

	global $config_abs_path;
	require_once($config_abs_path.'/classes/fields.php');
	require_once($config_abs_path.'/classes/depending_fields.php');
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";

	global $smarty;
	$mod_class = new dealers_page;
	$mod_class->initTemplatesVals($smarty);
}

function set_meta_info($smarty, $self_noext) {

	if($self_noext != "dealers") return;

	global $config_abs_path;
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";
	$dp = new dealers_page();
	$dp->setMetaInfo($smarty);

}

function check_categories_images($type, $field_id, $caption) {

	global $config_abs_path;
	if($type!="uf") return;
	require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";
	$dp = new dealers_page();
	$dp_settings = $dp->getSettings();

	if(!$dp_settings['group_on_categories']) return;

	if($dp_settings['category_field'] != $caption) return;

	// the edited field is the field configured as category field
	$dp->checkCategories($caption);

}

//add_action('include', 'dealers_page_includes');
add_action('init_template', 'dealers_page_init_template');
add_action('add_language', 'check_languages_dealers_page');
add_action('delete_language', 'check_languages_dealers_page');
// set meta info
add_action('init_template', 'set_meta_info');
// review categories images when custom field edited
add_action('end_edit_custom_field', 'check_categories_images');


?>
