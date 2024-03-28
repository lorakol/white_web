<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/groups.php";
require_once "classes/images.php";
require_once "include/gmaps_util.php";
require_once "classes/users.php";
require_once "classes/info.php";

global $db;
global $lng;

do_action("register_page", array());

$step = get_numeric("step", 1);
$group = get_numeric("group", 0);

if($step<3) {
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","login-register");
	$smarty->assign("step",$step);
}
else 	
	common_no_template();

global $logged_in, $is_admin;
if($logged_in || $is_admin) { if($step<3) header("Location: ./"); exit(0); }

if($step==1 && $group>0) {
	$smarty->assign("only_group",$group);
}

// select group step
if($step==1) {

	$no_groups = $config_vars['no_groups'];
	$groups_array=array();
	if($no_groups==1) { 
		$group = $config_vars['default_register_group']; 
		$smarty->assign("only_group",$group);
	}
	else {
		$groups=new groups();
		$groups_array=common::getCachedObject("base_autoregister_groups"); 
		
	}	
	$smarty->assign("groups_array",$groups_array);
	$smarty->assign("no_groups",$no_groups);
}

// user registration step
if($step==2) {

	global $appearance_settings;
	header('Content-type: text/html; charset='.$appearance_settings['charset']);

	if(isset($_GET['group']) && is_numeric($_GET['group'])) { 
		$group = escape($_GET['group']);
	}
	// invalid group or not allowed
	if(!$group || (!groups::exists($group) && $group!=-2)) {
		header("Location: access_restricted.php"); 
		exit(0);
	}

	$gr = new groups();
	$group_settings = $gr->getGroup($group);
	
	$smarty->assign("group",$group);
	$smarty->assign("group_settings",$group_settings);

	$registration_info=info::getVal("registration");
	$smarty->assign("registration_info",$registration_info);

	$user_fields=common::getCachedObject("base_user_fields", array("group" => $group));
	$smarty->assign("user_fields",$user_fields);

	setGmaps('uf', $group, $smarty);

	$uf=new fields('uf');
	$htmlarea = $uf->HTMLAreaFieldExists($group);
	$smarty->assign("htmlarea_exists",$htmlarea);
	$smarty->assign("tmp", array());
}

if( $step==3 ){

	require_once "classes/fields.php";
	require_once "classes/fields_process.php";
	require_once "classes/validator.php";
	require_once "classes/blocked_emails.php";
	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";


	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	$ret = array("response" => 0, "error" => array(), "info" => null, "redirect" => "");

	$sp_response = array();
	do_action("register_post", array(&$sp_response, getRemoteIp(), $_POST['email']));
	if($sp_response && is_array($sp_response)) { 
	    array_push($ret['error'], $sp_response); 
	    
	    global $appearance_settings;
	    if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	    echo json_encode($ret); 
	    return;
	}

	$user=new users();
	if(!$user->add()) {

		require_once "classes/mails.php";
		require_once "classes/mail_templates.php";

		$ret['error'] = array_merge ( $ret['error'], $user->getError());
		$ret['response'] = 0;

	}
	else {

		$ret['response'] = 1;

		// if SMS verification
		$gr = new groups();
		if(is_numeric($_POST['group'])) $group = escape($_POST['group']);
		$group_settings = $gr->getGroup($group);
		
		// when activate via sms show the sms code box
		// when both activation methods are on don't show the box, the only way is using the url in the email
		if($group_settings['activate_via_sms']==1 && $group_settings['activate_via_email']==0) {
		
			$ret['response'] = 2; // redirect case
			global $settings;
			$user_details = $user->getUser($user->last);
			if($settings['enable_username']) $account = urlencode($user_details['username']);
			else $account = urlencode($user_details['email']);
	
			$act_link=$config_live_site.'/activate_account.php?account='.$account.'&type=sms';
			$ret['redirect'] = $act_link;
			
			global $appearance_settings;
			if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

			echo json_encode($ret);
			exit(0);
			
		}
		
		$ret['info']=$user->getInfo();
	}

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);
}

if($step<3) {
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('register.html');
}

if($step<3) close();

$db->close();
?>
