<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/users.php";
require_once "classes/mail_templates.php";
require_once "classes/mails.php";
require_once "classes/info.php";
require_once "classes/config/settings_config.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

$error=''; $info='';
$users=new users();

global $settings;

$general_info=info::getVal("password_recovery");
$smarty->assign("general_info", $general_info);

if(isset($_GET['key'])) { 
	$key=escape($_GET['key']);
	// get user id by key
	$user_id = $users->getKeyUser($key);
	if($user_id==-1) $info=$lng['password_recovery']['invalid_key'];
}
else $key='';

if(isset($_POST['Submit'])) {

	require_once "classes/validator.php";
	if(!isset($_POST['email'])) $error=$lng['password_recovery']['email_missing'];
	else if(!validator::valid_email($_POST['email'])) $error=$lng['password_recovery']['invalid_email'];
	else if( $_POST['email'] != $settings['admin_email'] && !$users->email_exists($_POST['email'])) $error=$lng['password_recovery']['email_inexistent'];

}

if(isset($_POST['Submit']) && $error=='') {

	$email=escape($_POST['email']);

	// if the mail is the admin email
	if($email == $settings['admin_email']) {

		// generate activation code for admin (id=0)
		$activation_code = $users->generateRecoveryKey(0);
		//$email = $settings['admin_email'];
		$contact_name = $settings['admin_name'];
		global $settings;
		$username = $settings['admin_username'];

	} else { // regular user

		$id=users::getIdByEmail(escape($_POST['email']));
		if($id>0) {
			$activation_code = $users->generateRecoveryKey($id);
			$contact_name=users::getContactName($id);
			$username = users::getUsername($id);
		}

	}

	global $mail_settings;
	$html_mails=$mail_settings["html_mails"];

	$mail2send=new mails();
	$mail2send->init($email, $contact_name);

	global $config_live_site;
	if(!$html_mails)
		$act_link=$config_live_site.'/password_recovery.php?key='.$activation_code;
	else {
		$lnk=$config_live_site.'/password_recovery.php?key='.$activation_code;
		$act_link='<a href="'.$lnk.'">'.$lnk.'</a>';
	}

	$array_subject = array();
	$array_message = array("link"=>$act_link, "username"=>$username);

	$mail2send->composeAndSend("password_recovery", $array_message, $array_subject);

	$info=info::getVal("password_recovery_mail_sent");

}

if(isset($_POST['Submit_password'])) {

	if(!isset($key) || $key=='' || $user_id==-1) $info=$lng['password_recovery']['invalid_key'];
	else {

		global $config_abs_path;
		if($settings['register_captcha']) {
			require_once $config_abs_path."/include/captcha.php";
			$error=checkCaptcha();
		}

		if(!$error)
		{ // valid string

			// admin
			if($user_id==0) {

				$sett = new settings_config;
				$remove_2fa=1;
				if(!$sett->change_password($remove_2fa)) { 
				$error=$sett->getError();
				
			} else { 
				$info=$lng['users']['info']['password_changed'];
			}

			} else {// normal user

			$remove_2fa=1;
			if(!$users->change_password($user_id, $remove_2fa)) { 
				$err=$users->getError();
				$error = $err[0]['error'];
			} else { 
				$info=$users->getInfo();
			}
			}// end normal user 
		}
	}
}

$smarty->assign("error", $error);
$smarty->assign("info", $info);
$smarty->assign("key", $key);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('password_recovery.html');

$db->close();
close();
?>
