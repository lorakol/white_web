<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!in_array("eu_cookies", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/eu_cookies/classes/eu_cookies.php";

function cookie_banner($smarty) {

	// already accepted
	if( isset($_COOKIE['eucb']) && $_COOKIE['eucb']==1 )	return;

	// get banner code
	$smarty_info = new Smarty;
	$smarty_info = smartyShowDBVal($smarty_info);

	global $config_abs_path;
	require_once($config_abs_path."/classes/info.php");
	$inf = new info();
	$notice = $inf->getVal("eu_cookie");

	$smarty_info->assign("notice", $notice);

	global $lng;
	$smarty_info->assign("lng", $lng);
	global $main_domain;
	$smarty_info->assign("main_domain", $main_domain);

	global $config_live_site;
	$smarty_info->assign("live_site", $config_live_site);

	$bottom_content = $smarty_info->fetch("modules/eu_cookies/banner_template.html");

	$smarty->assign("bottom_content", $bottom_content);
	
}

add_action('common1', 'cookie_banner');

?>