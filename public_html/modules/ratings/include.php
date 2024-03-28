<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/modules/ratings/classes/ratings.php";

global $crt_lang;
if(file_exists($config_abs_path."/modules/ratings/lang/".$crt_lang.".php"))
	require_once $config_abs_path."/modules/ratings/lang/".$crt_lang.".php";
else require_once $config_abs_path."/modules/ratings/lang/eng.php";
global $lng_ratings;
?>
