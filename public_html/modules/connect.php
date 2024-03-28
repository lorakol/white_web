<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("connect", $modules_array)) return;

function connect_includes() {

	global $config_abs_path;
	require_once($config_abs_path.'/modules/connect/classes/connect.php');

}

function connect_init_template($smarty) {

	global $self_noext;
	if($self_noext!="login" && $self_noext!="pre-submit" && $self_noext!="new_listing" && $self_noext!="register") return;
	global $smarty;
	$conn = new connect;
	$conn->initTemplatesVals($smarty);

}

add_action('include', 'connect_includes');
add_action('init_template', 'connect_init_template');

?>