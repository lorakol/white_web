<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/packages.php";
require_once "../classes/groups.php";
require_once "../classes/listings.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);

$id = get_numeric_only("id");
$smarty->assign("id",$id);

$pkg = new packages;
$package = $pkg->getPackage($id);
$smarty->assign("package",$package);

$packages_array = common::getCachedObject("base_short_plans");
$smarty->assign("packages_array",$packages_array);

$info = '';
if(isset($_POST['Submit'])) {

	require_once "../classes/config/packages_config.php";
	$pkg_config = new packages_config;

	if(isset($_POST['action']) && $_POST['action']=="delete") {
		// delete plan
		$pkg_config->Deactivate($id);
		$info = $lng['packages']['info']['ads_disabled'];
	} else { // move

		if(isset($_POST['move_to']) && is_numeric($_POST['move_to']) && $_POST['move_to']) {
			// move to plan $_POST['move_to']
			$listing = new listings;
			$listing->moveAds($id, escape($_POST['move_to']), 'plan');
			$pkg_config->Deactivate($id);
			$info = $lng['packages']['info']['disabled_and_ads_moved'];
		}
		
	}

}

$smarty->assign("info",$info);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('disable_plan.html');

$db->close();
close();
?>
