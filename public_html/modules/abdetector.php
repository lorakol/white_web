<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("abdetector", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/abdetector/classes/abdetector.php";

function hasAdblocker($smarty, $self_noext) {

	$abd = new abdetector();
	$abd_settings = $abd->getSettings();
	$smarty->assign("abd_settings", $abd_settings);
}

function check_languages_abdetector() {

	$abd = new abdetector();
	$abd->autoCheckLang();

}

add_action('common1', 'hasAdblocker');
add_action('add_language', 'check_languages_abdetector');
add_action('delete_language', 'check_languages_abdetector');

?>
