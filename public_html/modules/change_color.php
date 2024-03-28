<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("change_color", $modules_array)) return;

function change_color($smarty) {

	global $appearance_settings;
	if(isset($_COOKIE['tpl_colorscheme'])) {
		$appearance_settings['template_colorscheme'] = escape($_COOKIE['tpl_colorscheme']);
		$smarty->assign("appearance", $appearance_settings);
	}	

}

add_action('init_template', "change_color");

?>