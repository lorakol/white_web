<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

$path=dirname(__FILE__);
require_once($path.'/../../include/include.php');
my_session_start();

if(!$_SERVER['HTTP_REFERER']) exit(0);

require_once $config_abs_path."/modules/news/classes/news.php";

global $config_live_site;
$auth=new auth();
global $is_admin, $is_mod;
$is_admin = $auth->adminLoggedIn();
$is_mod = $auth->modLoggedIn();

//$is_admin=1;

if(!$is_admin && !$is_mod) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$arr_action= array("enable", "disable", "delete", "list", "order_up", "order_down");

if(isset($_GET['action']))  {

	if(!in_array($_GET['action'], $arr_action)) exit(0);
	$action=$_GET['action'];
	
}
else exit(0);

global $settings;

if($is_mod) { 
	global $settings;
	$usr = new users; 

	if($settings['enable_username'])
		$mod_id=users::getUserId($is_mod);
	else 
		$mod_id=users::getIdByEmail($is_mod);

	$mod_sections = $usr->getSections($mod_id);
}

$news = new news;
if($action!="list") {
	$id = get_numeric_only("id");
}

switch($action) {

	case "enable": 
		if($is_admin || $mod_sections['news']['edit'])
			$news->Enable($id);
		break;
	case "disable": 
		if($is_admin || $mod_sections['news']['edit'])
			$news->Disable($id);
		break;
	case "delete": 
		if($is_admin || $mod_sections['news']['delete'])
			$news->Delete($id);
		break;
	case "list": 
		if($is_admin || $mod_sections['news']['view']) {
		global $db;
		global $config_table_prefix;
		$all = $db->fetchRowList("select id from ".$config_table_prefix."news");	
		$i = 0;
		foreach($all as $a) { if($i) echo ','; echo $a; $i++; }
		}
		break;
	case "order_up": 
		if($is_admin || $mod_sections['news']['edit'])
			$response = $news->orderUp($id);
			echo $response;
		break;
	case "order_down": 
		if($is_admin || $mod_sections['news']['edit'])
			$response=$news->orderDown($id);
			echo $response;
		break;
	default: break;
}

?>
