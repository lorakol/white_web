<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once "../../../classes/paginator.php";
require_once "../../../classes/listings.php";
require_once "../../../classes/users.php";
require_once '../../../modules/auto_repost/classes/auto_repost.php';

$page = get_numeric("page", 1);
$delete = get_numeric("delete");

if($_POST) {

	$ar = new auto_repost();
	// actions for multiple items
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(rp)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $ar->Delete($id);
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $ar->Enable($id);
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $ar->Disable($id);
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) 
	|| ( isset($_POST['activate_selected']) || isset($_POST['activate_selected_x']) ) 
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))) // IE image submit fix

	{
		$location="index.php?page=".$page;
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple items
}

global $db;
global $lng;

global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/auto_repost/lang/eng.php";
require_once $lang_file;

global $lng_repost;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_repost",$lng_repost);
$smarty->assign("page",$page);
$smarty->assign("smenu",'index');

$no_per_page = 20;
$ar = new auto_repost();
$ar_settings = $ar->getSettings();
$array_reposts = $ar->getAll($page, $no_per_page);
$smarty->assign("array_reposts",$array_reposts);

$no = $ar->getNo();
$smarty->assign("no",$no);
$smarty->assign("ar_settings",$ar_settings);

$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/auto_repost");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/auto_repost/index.html');

$db->close();
close();
?>
