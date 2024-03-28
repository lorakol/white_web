<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/fieldsets.php";
require_once "../classes/config/fieldsets_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

$fieldsets=new fieldsets_config();
$array_fieldsets=$fieldsets->getAll();
$smarty->assign("array_fieldsets",$array_fieldsets);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('manage_fieldsets.html');

$db->close();
close();
?>
