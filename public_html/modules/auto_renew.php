<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("auto_renew", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/auto_renew/classes/auto_renew.php";


function periodic() {

	$ar = new auto_renew();
	$ar->periodic();

}

add_action('periodic', 'periodic');

?>