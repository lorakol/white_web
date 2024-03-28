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

require_once $config_abs_path."/modules/ratings/classes/ratings.php";

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


$r = new ratings;
$id = get_numeric_only("id");
if(isset($_GET['type']) && $_GET['type']=='ad') $type=escape($_GET['type']); else $type="user";

switch($action) {

	case "enable": 

		$r->Enable($id, $type);
		break;

	case "disable": 
		$r->Disable($id, $type);
		break;
	case "block": 
		$r->Block($id, $type);
		break;
	case "unblock": 
		$r->Unblock($id, $type);
		break;
	case "delete": 
		$r->Delete($id, $type);
		break;
	default: break;
}

?>
