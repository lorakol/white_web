<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
my_session_start();
global $db;

$auth=new auth();

global $is_mod;

if($auth->isMod()) 
	$auth->clearlogin();
else 
	$auth->admin_clearlogin();

session_write_close();

header("Location: ../"); 
exit(0);
?>
