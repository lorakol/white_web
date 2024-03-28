<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("mobile_hsi", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/mobile_hsi/classes/mobile_hsi.php";

function initTemplate($smarty) {

	$head_includes = $smarty->getTemplateVars('head_includes');
	if(!$head_includes) $head_includes = array();
	
	$mhsi = new mobile_hsi();
	$mobile_icons = $mhsi->getIcons();
	$smarty->assign('mobile_hsi', $mobile_icons);
	
	array_push($head_includes, "modules/mobile_hsi/header.html");
	$smarty->assign('head_includes', $head_includes);

}

add_action('init_template', 'initTemplate');

?>