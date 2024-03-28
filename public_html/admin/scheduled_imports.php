<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once '../classes/scheduled_imports.php';
require_once '../classes/users.php';

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","tools");
$smarty->assign("lng",$lng);
$smarty->assign("smenu", "scheduled_imports");

$si = new scheduled_imports();
$scheduled_imports = $si->getAll();
$smarty->assign("scheduled_imports",$scheduled_imports);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('scheduled_imports.html');

$db->close();
close();
?>
