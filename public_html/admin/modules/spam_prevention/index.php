<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/spam_prevention/classes/spam_prevention.php';
require_once "../../../classes/paginator.php";

$page = get_numeric("page", 1);
$no_per_page = get_numeric("no_per_page", 20);

$post_array = array();

$array_searches = array("ip", "email", "date_from", "date_to", "type", "confidence_from", "confidence_to");
foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

global $db;
$sp = new spam_prevention();

if($_POST) {

	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) { 
			$post_array[$key]=escape($_POST[$key]);
		}
	}

	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];
	

	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(sl)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;

		if(isset($_POST['unblock_selected']) || isset($_POST['unblock_selected_x']))  $sp->unblock($id);
		if(isset($_POST['whitelist_selected']) || isset($_POST['delete_selected_x']))  $sp->whitelist($id);
	}

	if(isset($_POST['unblock_selected']) || isset($_POST['unblock_selected_x']) || isset($_POST['whitelist_selected']) || isset($_POST['whitelist_selected_x'])) {

		$location="index.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}

		header("Location: ".$location);
		exit(0);
	}
	

} // end if post


global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);


global $config_abs_path, $config_admin_folder;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/eng.php";
require_once $lang_file;

global $lng_sp;
$smarty->assign("lng_sp",$lng_sp);

$array_logs = $sp->searchLogs($post_array, $page, $no_per_page);
$no_logs = $sp->noLogs();

$smarty->assign("array_logs",$array_logs);
$smarty->assign("no_logs",$no_logs);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_logs);
$paginator->setAdmin(1);
$paginator->addToPath("/modules/spam_prevention");
$paginator->setNoSeo(1);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

$sp = new spam_prevention();
$sp_settings = $sp->getSettings();
$smarty->assign("sp_settings",$sp_settings);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/spam_prevention/index.html');

$db->close();
close();

?>