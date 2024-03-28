<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/fields.php";
require_once "../classes/groups.php";
require_once "../classes/config/fields_config.php";
require_once "../classes/depending_fields.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

$group = get_numeric("group");
$smarty->assign("group",$group);

$user_fields_config=new fields_config('uf');
$user_fields=new fields('uf');
if(isset($_GET['fix']) && $_GET['fix']==1) { 
	$user_fields_config->reArrange();
	header("Location: user_fields.php");
	exit(0);
}

global $default_fields_types;
$smarty->assign("default_fields_types", $default_fields_types);

$array_fields=$user_fields_config->getFields($group);
$smarty->assign("array_fields",$array_fields);

$array_groups = common::getCachedObject("base_short_groups");
$smarty->assign("array_groups",$array_groups);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('user_fields.html');

$db->close();
close();
?>
