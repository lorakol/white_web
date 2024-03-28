<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/categories.php";
require_once "../classes/fieldsets.php";
require_once "../classes/fields.php";
require_once "../classes/users.php";
require_once "../classes/depending_fields.php";
global $config_abs_path, $config_admin_folder;
require_once $config_abs_path."/".$config_admin_folder."/include/lists.php";
require_once "../classes/rules.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","settings");
$smarty->assign("lng",$lng);

$banner=array();
$errors_str='';
if(isset($_POST['Submit'])){
	$rules=new rules();
	if(!$rules->add()) { 
		$errors_str=$rules->getError();
		$rule=$rules->getTmp();
		$smarty->assign("rule",$rule);
	} else {
		header ('Location: manage_rules.php');
		exit(0);
	}
}

$smarty->assign("error",$errors_str);

$fields=new fields('cf');
$array_fields=$fields->getIndividualFields();
$smarty->assign("fields",$array_fields);

$array_subcats=array();
$cats=new categories();
$categories=$cats->getSubcats(0,'',$array_subcats);
$smarty->assign("categories",$categories);

$groups=common::getCachedObject("base_short_groups");
$smarty->assign("groups",$groups);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('add_rule.html');

$db->close();
close();
?>
