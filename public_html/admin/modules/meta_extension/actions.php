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

require_once $config_abs_path."/modules/meta_extension/classes/meta_extension.php";

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

$mext = new meta_extension;
if(isset($_GET['id']) && is_numeric($_GET['id'])) $id=$_GET['id']; else if($action=="delete") exit(0);

switch($action) {

	case "delete": 
		$mext->delete($id);
		break;
	case "list": 
		$all = $mext->getAll();	
		$i = 0;
		foreach($all as $a) { if($i) echo ','; echo $a['id']; $i++; }
		break;
	default: break;
}

?>
