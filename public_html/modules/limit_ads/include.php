<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/limit_ads/classes/limit_ads.php";
global $limit_settings;
$limit = new limit_ads();
$limit_settings = $limit->getSettings();

?>
