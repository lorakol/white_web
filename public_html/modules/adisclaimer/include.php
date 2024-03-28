<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/adisclaimer/classes/adisclaimer.php";
global $ad_settings;
$ad = new adisclaimer();
$ad_settings = $ad->getSettings();

?>
