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
require_once "../classes/config/depending_fields_config.php";
require_once "../classes/fieldsets.php";
require_once "../classes/depending_fields.php";
require_once "../classes/validator.php";
require_once "../classes/groups.php";
global $config_abs_path, $config_admin_folder;
require_once $config_abs_path."/".$config_admin_folder."/include/lists.php";


global $db;
$smarty = new Smarty;
$smarty = common($smarty);

global $lng;
$smarty->assign("lng",$lng);
$smarty->assign("tab","settings");

$fields=array();

if(isset($_POST['Submit'])){
	$field=new fields_config('cf');
	if(!$field->add()) { 
		$errors_str=$field->getError();
		$fields=$field->getTmp();
		$smarty->assign("error",$errors_str);
	} else { 

		$type = $field->clean['type'];
		if($type=="depending") {

			$dep_id = $field->clean['dep_id'];
			header ('Location: edit_depending_field.php?id='.$dep_id.'&type='.$field->type);
			exit(0);

		}
		header ('Location: manage_custom_fields.php');
		exit(0);
	}
}

$smarty->assign("fields",$fields);

$cf = new fields("cf");
$fields = $cf->getFieldsOfType("", "file,image,youtube,google_maps,terms", "title,description");
$smarty->assign("fields_array",$fields);

$array_fieldsets=fieldsets::getFieldsets();
$smarty->assign("array_fieldsets",$array_fieldsets);

global $fields_types;
$smarty->assign("fields_types", $fields_types);

global $extra_fields_types;
$smarty->assign("extra_fields_types", $extra_fields_types);

$gr = new groups;
$groups_list = $gr->getShortGroups();
$smarty->assign("groups_list",$groups_list);

$smarty->assign("type", "cf");

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_custom_field.html');

$db->close();
close();
?>
