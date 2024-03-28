<?php

/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 7.0
	* (c) 2011 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("pedigree", $modules_array)) return;

function pedigree_includes() {

	global $config_abs_path;
	require_once $config_abs_path."/modules/pedigree/classes/pedigree.php";
	global $config_admin_folder;
	require_once $config_abs_path."/".$config_admin_folder."/modules/pedigree/add_field_type.php";

}

function pedigree_newad($smarty) {

	global $smarty;
	$pedigree_class = new pedigree();
	$pedigree_settings = $pedigree_class->getSettings();
	$smarty->assign("pedigree_settings", $pedigree_settings);

}
add_action('include', 'pedigree_includes', 5, 0);
add_action('newad_form', 'pedigree_newad');

?>