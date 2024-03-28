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
require_once "../classes/depending_fields.php";
require_once "../classes/config/depending_fields_config.php";
require_once "../classes/groups.php";
require_once "../classes/validator.php";
require_once "../classes/users.php";

global $config_abs_path, $config_admin_folder;
require_once $config_abs_path."/".$config_admin_folder."/include/lists.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$smarty->assign("lng",$lng);

$fields=array();

if(isset($_POST['Submit'])){
	$field=new fields_config('uf');
	if(!$field->add()) { 
		$errors_str=$field->getError();
		$fields=$field->getTmp();
		$smarty->assign("error",$errors_str);
	} else { 
		header ('Location: user_fields.php');
		exit(0);
	}
}

$smarty->assign("fields",$fields);

// fields for google maps
$cf = new fields("uf");
$fields_array = $cf->getFieldsOfType("", "file,image,youtube,google_maps,terms");
$smarty->assign("fields_array",$fields_array);

$gr = new groups;
$groups_list = $gr->getShortGroups();
$smarty->assign("groups_list",$groups_list);

global $fields_types;
$smarty->assign("fields_types", $fields_types);

global $extra_fields_types;
$smarty->assign("extra_fields_types", $extra_fields_types);

$smarty->assign("type", "uf");

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_custom_field.html');

$db->close();
close();
?>
