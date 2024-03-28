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

require_once $config_abs_path."/modules/comments/classes/comments.php";

global $config_live_site;
$auth=new auth();
if(!$auth->adminLoggedIn()) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$arr_action= array("enable", "disable", "block", "unblock", "delete");

if(isset($_GET['action']))  {

	if(!in_array($_GET['action'], $arr_action)) exit(0);
	$action=$_GET['action'];
	
}
else exit(0);


$comm = new comments;
$id = get_numeric_only("id");

switch($action) {

	case "enable": 
		$comm->Enable($id);
		break;
	case "disable": 
		$comm->Disable($id);
		break;
	case "block": 
		$comm->Block($id);
		break;
	case "unblock": 
		$comm->Unblock($id);
		break;
	case "delete": 
		$comm->Delete($id);
		break;
	default: break;
}

?>
