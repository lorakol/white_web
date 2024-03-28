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

require_once $config_abs_path."/modules/price_extra/classes/price_extra.php";

global $config_live_site;
$auth=new auth();
if(!$auth->adminLoggedIn()) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$arr_action= array("delete", "list");

if(isset($_GET['action']))  {

	if(!in_array($_GET['action'], $arr_action)) exit(0);
	$action=$_GET['action'];
	
}
else exit(0);


$pe = new price_extra;
if($action!="list") {
	$id = get_numeric_only("id");
}

switch($action) {

	case "delete": 
		$pe->Delete($id);
		break;
	case "list": 
		global $db;
		global $config_table_prefix;
		$all = $db->fetchRowList("select id from ".$config_table_prefix."price_extra_settings");
		$i = 0;
		foreach($all as $a) { if($i) echo ','; echo $a; $i++; }
		break;
	default: break;
}

?>
