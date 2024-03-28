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
require_once "../classes/config/categories_config.php";
require_once "../classes/fieldsets.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['page']) && is_int($_GET['page'])) $page=$_GET['page']; else $page=1;
if(isset($_GET['delete']) && is_int($_GET['delete'])) $delete=$_GET['delete'];

$smarty->assign("tab","settings");
$smarty->assign("page",$lng['panel']['manage_categories']);
$smarty->assign("lng",$lng);

$parent = get_numeric("parent");
if(isset($parent) && $parent!='') { 
	$_SESSION['parent'] = $parent;
}
else {
	if(isset($_SESSION['parent']) && $_SESSION['parent']) $parent = $_SESSION['parent'];
}
$smarty->assign("parent",$parent);

$cat_config=new categories_config();
$all_categories=$cat_config->getAll();
$smarty->assign("all_categories",$all_categories);

if(isset($_GET['fix']) && $_GET['fix']==1) { 
	$cat_config->reArrange();
	header("Location: manage_categories.php");
	exit(0);
}

if(isset($_POST['copy']) && $_POST['copy']==1) { 

	$str='';
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(chk)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 3);
		if(!is_numeric($id)) continue;

		$new_id = $cat_config->copy($id);
		$str.=$new_id.",";
		
	}
	$str = rtrim($str);

	header("Location: manage_categories.php?copied=".$str);
	exit(0);
}

$copied_array = array();
if(isset($_GET['copied']) && $_GET['copied']) { 

	$copied_array = explode(",", $_GET['copied']);

}
$smarty->assign("copied_array", $copied_array);
if(isset($_GET['recount']) && $_GET['recount']==1) { 
	$cat_config->Recount();
	header("Location: manage_categories.php");
	exit(0);
}

if(isset($_GET['slugs']) && $_GET['slugs']==1) { 
	require_once "../classes/slugs.php";
	$s = new slugs();
	$s->generateCategorySlugs();
	header("Location: manage_categories.php");
	exit(0);
}

$array_categories=$cat_config->getAll($parent);
$smarty->assign("array_categories",$array_categories);
//_print_r($array_categories);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('manage_categories.html');

$db->close();
close();
?>
