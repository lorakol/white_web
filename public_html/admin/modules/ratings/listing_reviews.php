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
require_once "../../../classes/users.php";
require_once '../../../modules/ratings/classes/ratings.php';

$page = get_numeric("page", 1);
$delete = get_numeric("delete");

if($_POST) {

	$ratings = new ratings();
	// actions for multiple items
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(rw)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;
		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $ratings->Delete($id, 'ad');
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $ratings->Enable($id, 'ad');
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $ratings->Disable($id, 'ad');
	}

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) 
	|| ( isset($_POST['activate_selected']) || isset($_POST['activate_selected_x']) ) 
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))) // IE image submit fix

	{
		$location="listing_reviews.php?page=".$page;
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
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/ratings/lang/eng.php";
require_once $lang_file;

global $lng_ratings;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("lng_ratings",$lng_ratings);
$smarty->assign("page",$page);
$smarty->assign("smenu",'ad_reviews');

$no_per_page = 10;
$ratings = new ratings();
$settings = $ratings->getSettings();
$array_ratings = $ratings->getAll($page, $no_per_page, "ad");
$smarty->assign("array_ratings",$array_ratings);

$no = $ratings->getNoReviews('ad');
$smarty->assign("no",$no);
$smarty->assign("settings",$settings);

$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/ratings");
$paginator->setNoSeo(1);
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/ratings/listing_reviews.html');

$db->close();
close();
?>