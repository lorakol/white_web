<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/users.php";
require_once "../classes/config/settings_config.php";

global $db;
global $lng;

$post = get_numeric("post", 0);
$id = get_numeric("id", 0);

if(!$post) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("id",$id);
}
else common_no_template();

// moderator change user password 
global $is_mod;
if($id && $is_mod) {
	global $mod_sections;
	if($mod_sections['users']['edit']==0) { 
	    global $config_admin_folder;
	    header("Location: ".$config_live_site."/".$config_admin_folder."/not_authorized.php"); 
	    exit(0); 
	}
}

if($id) {

	if($settings['enable_username'])
		$username=users::getUsername($id);
	else $username="";
	$useremail = users::getEmail($id);

	if(!$post) {
		$smarty->assign("username",$username);
		$smarty->assign("useremail",$useremail);
	}

}

if($post){

	$ret = array("response" => 0, "error" => array(), "info" => null);

	global $is_admin;
	if(!$id && $is_admin) {
		
		// administrator
		$sett=new settings_config();
		if(!$sett->change_password()) { 

			$ret['error'] =  $sett->getError();

		} else { 
			$ret['response'] = 1;
			$ret['info']=$lng['users']['password_changed'];
			// change password session
			$a = new auth();
			$a->saveAdminPassword($_POST['password']);
		}
	}
	else {

		$usr = new users();
		if(!$usr->change_password($id)) 
			$ret['error'] =  $usr->getError();
		else { 
			$ret['response'] = 1;
			$ret['info']=$lng['users']['password_changed'];
		}

	}
	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

        global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
if(!$post) $smarty->display('change_password.html');

$db->close();
close();
?>