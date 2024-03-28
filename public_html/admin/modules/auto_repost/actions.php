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

require_once $config_abs_path."/modules/auto_repost/classes/auto_repost.php";

global $config_live_site;
$auth=new auth();
global $is_admin, $is_mod;
$is_admin = $auth->adminLoggedIn();
$is_mod = $auth->modLoggedIn();

//$is_admin=1;

if(!$is_admin && !$is_mod) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$arr_action= array("enable", "disable", "delete");

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

$auto_repost = new auto_repost;
if($action!="list") {
	$id = get_numeric_only("id");
}

switch($action) {

	case "enable": 
		if($is_admin || $mod_sections['auto_repost']['edit']) {
			global $config_abs_path;
			require_once $config_abs_path."/classes/listings.php";
			$auto_repost->Enable($id);
		}
		break;
	case "disable": 
		if($is_admin || $mod_sections['auto_repost']['edit'])
			$auto_repost->Disable($id);
		break;
	case "delete": 
		if($is_admin || $mod_sections['auto_repost']['delete'])
			$auto_repost->Delete($id);
		break;
	case "update":
		if($is_admin || $mod_sections['auto_repost']['edit'])
			$auto_repost->updateAd($id);
		break;
	default: break;
}

?>
