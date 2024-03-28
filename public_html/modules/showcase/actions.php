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
global $config_live_site, $config_abs_path;

$id = get_numeric_only("id");
$l = new listings();
$auth = new auth();
$crt_usr = $auth->crtUserId();
if(!$l->belongsToUser($id,$crt_usr)) { header("Location: ".$config_live_site."/not_authorized.php"); exit(0); }

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

$arr_action= array("add_showcase", "remove_showcase");

if(isset($_GET['action']))  {

	if(!in_array($_GET['action'], $arr_action)) exit(0);
	$action=$_GET['action'];
	
}
else exit(0);

require_once $config_abs_path."/modules/showcase/classes/showcase.php";


switch ($action) {

	case 'add_showcase':
		$sw = new showcase();
		$sw->addToShowcase($id);

	break;

	case 'remove_showcase':
		$sw = new showcase();
		$sw->removeFromShowcase($id);

	break;

	break;
} // end switch

?>