<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/abdetector/classes/abdetector.php";
global $abd_settings;
$abd = new abdetector();
$abd_settings = $abd->getSettings();

?>
