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
require_once "../classes/fieldsets.php";
require_once "../classes/depending_fields.php";
require_once "../classes/config/depending_fields_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else { header ('Location: manage_custom_fields.php'); exit(0); }
if(isset($_GET['type']) && $_GET['type']=="cf" || $_GET['type']=="uf") $type=$_GET['type']; else $type="cf";
$current = array();
if(isset($_GET['current2']) && is_numeric($_GET['current2'])) $current[2]=$_GET['current2']; else $current[2] = '';
if(isset($_GET['current3']) && is_numeric($_GET['current3'])) $current[3]=$_GET['current3']; else $current[3] = '';
if(isset($_GET['current4']) && is_numeric($_GET['current4'])) $current[4]=$_GET['current4']; else $current[4] = '';
if(isset($_GET['current5']) && is_numeric($_GET['current5'])) $current[5]=$_GET['current5']; else $current[5] = '';
if(isset($_GET['current_fieldset']) && is_numeric($_GET['current_fieldset'])) $current_fieldset=$_GET['current_fieldset']; else $current_fieldset='';

if($type=="cf") $smarty->assign("tab","settings");
$smarty->assign("lng",$lng);
$smarty->assign("type",$type);
$smarty->assign("id",$id);

$depending = new depending_fields();
$dep = $depending->getDependingField($id);
$smarty->assign("dep",$dep);


if($type=="cf") {
	$field = new fields('cf');
	$fieldsets = $field->getDepFieldsets($id);
	$smarty->assign("fieldsets",$fieldsets);
	if($fieldsets!=0) $multiple_fsets = 1; else $multiple_fsets = 0;
	$smarty->assign("multiple_fsets",$multiple_fsets);
	if($fieldsets!=0) { // pick first fieldset as current
		if($current_fieldset=='') $current_fieldset = $fieldsets[0]['id'];
	}
}

if(isset($_POST['add1'])) {
	$word=str_replace("\r\n","|",$_POST[$dep['caption1']]);
	$word=escape($word);
	$set = 0;
	if($type=="cf") { 
		$set = escape($_POST['fieldset']);
		if($set) $current_fieldset=$set;
		else $set = 0;
	}
	$depending_config = new depending_fields_config();
	$depending_config->addBulkDep1($word, $dep['table1'], $set);

	$loc = "edit_depending_field.php?id=$id&type=$type";
	if($type=="cf") $loc.="&current_fieldset=$current_fieldset";
	header("Location: $loc");
	exit(0);

}

if (isset($_POST['delete_'.$dep['caption1']])) {

	$depending_config = new depending_fields_config();

	for($i=0; $i<count($_POST[$dep['caption1'].'_list']); $i++) 
		$depending_config->deleteDepValue($id, $_POST[$dep['caption1'].'_list'][$i], 1);
		

	if($type=="cf") $current_fieldset=escape($_POST['fieldset']);

	$loc = "edit_depending_field.php?id=$id&type=$type";
	if($type=="cf") $loc.="&current_fieldset=$current_fieldset";
	header("Location: $loc");
	exit(0);

}

for($i=2; $i<=5;$i++) {

$j=$i-1;

if(isset($_POST['add'.$i])) {

	for($k=2;$k<=$i;$k++)
		$current[$k]=escape($_POST['sel_'.$dep['caption'.($k-1)]]);
	if($type=="cf") $current_fieldset=escape($_POST['fieldset']);

	$word=str_replace("\r\n","|",$_POST[$dep['caption'.$i]]);
	$word=escape($word);
	$depending_config = new depending_fields_config();
	$depending_config->addBulkDep2($word, $dep['table'.$i], $current[$i]);

	$loc = "edit_depending_field.php?id=$id&type=$type";

	for($k=2;$k<=$i;$k++) {

		if($current[$k]) $loc.="&current$k=".$current[$k];

	}

	if($type=="cf" && $current_fieldset) $loc.="&current_fieldset=$current_fieldset";
	header("Location: $loc");
	exit(0);

}

if (isset($_POST['delete_'.$dep['caption'.$i]])) {
	$current[$i]=escape($_POST['sel_'.$dep['caption'.$j]]);
	if($type=="cf") $current_fieldset=escape($_POST['fieldset']);

	$depending_config = new depending_fields_config();
	for($k=0; $k<count($_POST[$dep['caption'.$i].'_list']); $k++) {
		$depending_config->deleteDepValue($id, $_POST[$dep['caption'.$i].'_list'][$k], $i);
	}

	$loc = "edit_depending_field.php?id=$id&type=$type";

	for($k=2;$k<=$i;$k++) {

		if($current[$k]) $loc.="&current$k=".$current[$k];

	}

	if($type=="cf" && $current_fieldset) $loc.="&current_fieldset=$current_fieldset";
	header("Location: $loc");
	exit(0);

}

}

$array1 = array();
$array2 = array();
$array3 = array();
$array4 = array();
$array5 = array();

if($type=="cf") $array1 = $depending->getTableStrict($dep['table1'], $current_fieldset);
else $array1 = $depending->getTable($dep['table1']);

if( isset($current[2]) && $current[2]) $array2 = $depending->getSecondTable($dep['table2'], $current[2]);
else if($array1 && $array1[0]['id']) $array2 = $depending->getSecondTable($dep['table2'], $array1[0]['id']);

if($dep['no'] >=3) {

if(isset($current[3]) && $current[3]) $array3 = $depending->getSecondTable($dep['table3'], $current[3]);
else if($array2 && $array2[0]['id']) $array3 = $depending->getSecondTable($dep['table3'], $array2[0]['id']);

}


if($dep['no'] >=4) {

if(isset($current[4]) &&$current[4]) $array4 = $depending->getSecondTable($dep['table4'], $current[4]);
else if($array3 && $array3[0]['id']) $array4 = $depending->getSecondTable($dep['table4'], $array3[0]['id']);

}

if($dep['no'] ==5) {

if(isset($current[5]) &&$current[5]) $array5 = $depending->getSecondTable($dep['table5'], $current[5]);
else if($array4 && $array4[0]['id']) $array5 = $depending->getSecondTable($dep['table5'], $array4[0]['id']);

}

$smarty->assign("array1",$array1);
$smarty->assign("array2",$array2);
$smarty->assign("array3",$array3);
$smarty->assign("array4",$array4);
$smarty->assign("array5",$array5);

$smarty->assign("current2",$current[2]);
$smarty->assign("current3",$current[3]);
$smarty->assign("current4",$current[4]);
$smarty->assign("current5",$current[5]);

if($type=="cf") $smarty->assign("current_fieldset",$current_fieldset);

$fields = new fields($type);
$field_name=$fields->getDependingFieldName($id);
$smarty->assign("field_name",$field_name);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('edit_depending_field.html');

$db->close();
close();
?>
