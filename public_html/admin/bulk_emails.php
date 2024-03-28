<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/mails.php";
require_once "../classes/users.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("tab","users");

$gr = new groups;
$groups = $gr->getShortGroups();
$smarty->assign("groups", $groups);

global $mail_settings;
$smarty->assign("mail_settings",$mail_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('bulk_emails.html');

$db->close();
close();
?>