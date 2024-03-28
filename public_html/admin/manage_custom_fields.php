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
require_once "../classes/config/fields_config.php";
require_once "../classes/fieldsets.php";
require_once "../classes/config/fieldsets_config.php";
require_once "../classes/depending_fields.php";
require_once "../classes/groups.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

$fset = get_numeric("fset");
if(isset($fset) && $fset!='') { 
	$_SESSION['fset'] = $fset;
}
else {
	if(isset($_SESSION['fset']) && $_SESSION['fset']) $fset = $_SESSION['fset'];
}
$smarty->assign("fset",$fset);

$fields=new fields('cf');
$fields_config=new fields_config('cf');
if(isset($_GET['fix']) && $_GET['fix']==1) { 
	$fields_config->reArrange();
	$fset_str = "";
	if($fset) $fset_str = "?fset=".$fset;
	header("Location: manage_custom_fields.php".$fset_str);
	exit(0);
}

global $default_fields_types;
$smarty->assign("default_fields_types", $default_fields_types);

$array_fields=$fields_config->getFields($fset);
$smarty->assign("array_fields",$array_fields);
$no_fields = count($array_fields);
$smarty->assign("no_fields",$no_fields);

$fieldsets=new fieldsets_config();
$array_fieldsets=$fieldsets->getAll();
$smarty->assign("array_fieldsets",$array_fieldsets);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('manage_custom_fields.html');

$db->close();
close();
?>
