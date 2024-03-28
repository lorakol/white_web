<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("adisclaimer", $modules_array)) return;

if(is_robot()) return;

global $config_abs_path;
require_once $config_abs_path."/modules/adisclaimer/classes/adisclaimer.php";

function show_disclaimer($smarty, $self_noext) {

	$ad = new adisclaimer();
	$ad_settings = $ad->getSettings();

	if(isset($_POST['Accept_disclaimer']) && $_POST['Accept_disclaimer']) {

		global $main_domain;
		$a = setcookie("adult_content", 1, time()+86400*$ad_settings['cookie_availability'], '/', ".".$main_domain);
		$smarty->assign('disclaimer_accepted', 1);

	}

	$smarty->assign('ad_settings', $ad_settings);

	global $crt_lang;
	$disclaimer_text = $ad_settings['disclaimer_'.$crt_lang];
	$smarty->assign("disclaimer_text", $disclaimer_text);

	$adult_disclaimer=1;
	if(isset($_COOKIE['adult_content']) && $_COOKIE['adult_content']==1) 
		$adult_disclaimer=0;
	$smarty->assign("adult_disclaimer", $adult_disclaimer);
	return;

}

function saveDisclaimerCookie() {

	$ad = new adisclaimer();
	$ad_settings = $ad->getSettings();

	if(isset($_POST['Accept_disclaimer']) && $_POST['Accept_disclaimer']) {

		global $main_domain;
		$a = setcookie("adult_content", 1, time()+86400*$ad_settings['cookie_availability'], '/', ".".$main_domain);

	}

}

add_action('common1', 'show_disclaimer');
add_action('include', 'saveDisclaimerCookie');

?>