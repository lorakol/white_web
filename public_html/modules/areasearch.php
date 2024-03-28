<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("areasearch", $modules_array)) return;

function areasearch_includes() {

	global $config_abs_path;
	require_once($config_abs_path.'/modules/areasearch/include.php');

}

function areasearch_init_template($smarty) {

	global $smarty;
	$mod_class = new areasearch;
	$mod_class->initTemplatesVals($smarty);

}

add_action('include', 'areasearch_includes');
add_action('init_template', 'areasearch_init_template');

?>