<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../config.php";
global $config_abs_path;
require_once $config_abs_path."/include/include.php";

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

my_session_start();
$auth = new auth;
echo $auth->loggedIn();

?>
