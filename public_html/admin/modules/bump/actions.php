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

require_once $config_abs_path."/modules/bump/classes/bump.php";

global $config_live_site;
global $is_admin, $is_mod;
$auth=new auth();
$is_admin = $auth->adminLoggedIn();
$is_mod = $auth->modLoggedIn();

//$is_admin=1;

if(!$is_admin && !$is_mod) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

if($is_mod) { 
	global $settings;
	$usr = new users; 

	if($settings['enable_username'])
		$mod_id=users::getUserId($is_mod);
	else 
		$mod_id=users::getIdByEmail($is_mod);

	$mod_sections = $usr->getSections($mod_id);
}

$id = get_numeric_only("id");
$b = new bump();
if($is_admin || $mod_sections['listings']['edit']) {
	$action=$_GET['action'];
	
	if($action == "bump") { 
		$days = $_GET['days'];
		if(!isset($days) || !$days || !is_numeric($days)) $days=0;
		$b->bumpAd($id, $days);
	}
	
}

?>
