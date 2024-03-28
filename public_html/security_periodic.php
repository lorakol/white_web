<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/periodic.php";

$periodic=new periodic();

// delete old failed attempts
$periodic->unblockFailedAttempts();

do_action("security_periodic", array());

?>