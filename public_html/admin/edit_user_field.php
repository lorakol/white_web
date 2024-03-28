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
require_once "../classes/images.php";
require_once "../classes/depending_fields.php";
require_once "../classes/groups.php";
require_once "../classes/users.php";
require_once "../classes/validator.php";
require_once "../classes/users.php";

global $db;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header ('Location: user_fields.php'); exit(0); }

global $lng;
$smarty->assign("lng",$lng);
$smarty->assign("tab","settings");
$smarty->assign("id",$id);

$fields=array();
$f=new fields_config('uf');
$fields=$f->getFieldLang($id);

if(isset($_POST['Submit'])){
	if(!$f->edit($id)) { 
		$errors_str=$f->getError();
		$fields=$f->getTmp();
		$smarty->assign("error",$errors_str);
	} else { 
		header ('Location: user_fields.php');
		exit(0);
		}
}

$smarty->assign("fields",$fields);
$smarty->assign("type","uf");

// fields for google maps
$cf = new fields("uf");
$fields_array = $cf->getFieldsOfType("", "file,image,youtube,google_maps,terms");
$smarty->assign("fields_array",$fields_array);

$gr = new groups;
$groups_list = $gr->getShortGroups();
$smarty->assign("groups_list",$groups_list);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_custom_field.html');

$db->close();
close();
?>
