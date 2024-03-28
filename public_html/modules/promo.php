<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("promo", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/promo/classes/promo.php";

function promo() {

	global $modules_array;
	if(!in_array("promo", $modules_array)) return;
	$pr = new promo();
	$pr->sendPromo();

}


add_action('periodic', 'promo');

?>