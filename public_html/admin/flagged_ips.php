<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/flagged_ips.php";
require_once "../classes/paginator.php";
require_once "../classes/validator.php";

$page = get_numeric("page", 1);
$no_per_page = get_numeric("no_per_page", 20);

$post_array = array();

$array_searches = array("ip", "info");
foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

global $db;

$flagged_ips=new flagged_ips();

if($_POST) {

	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) { 
			$post_array[$key]=escape($_POST[$key]);
		}
	}

	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];
	

	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(fi)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 2);
		if(!is_numeric($id)) continue;

		if(isset($_POST['delete_selected']) || isset($_POST['delete_selected_x']))  $flagged_ips->delete($id);
	}

	if(isset($_POST['Add'])) {

		$word=str_replace("\r\n","|",$_POST['bulk_ips']);
		$word=escape($word);
		$info = escape($_POST['sinfo']);
		$flagged_ips->AddBulk($word, $info);

	}

	if(isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) {

		$location="flagged_ips.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}

		header("Location: ".$location);
		exit(0);
	}
	
	if(isset($_POST['Add'])) {

		$location="flagged_ips.php";
		header("Location: ".$location);
		exit(0);
	}


} // end if post

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","security");
$smarty->assign("lng",$lng);
$smarty->assign("page",$page);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);

$start=($page-1)*$no_per_page;
$array_flagged_ips = $flagged_ips->searchIPs($post_array, $start, $no_per_page);
$no_ips = $flagged_ips->getNo($post_array);

$smarty->assign("array_flagged_ips",$array_flagged_ips);
$smarty->assign("no_ips",$no_ips);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_ips);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('flagged_ips.html');

$db->close();
close();
?>
