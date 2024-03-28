<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";

if(isset($_GET['action'])) $action = escape($_GET['action']); else $action='';
if(isset($_GET['sub'])) $sub = escape($_GET['sub']); else $sub='';

if(!$action) {

	global $db;
	global $lng;
	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","account");

}
else
	common_no_template();

if(isset($_GET['delete'])) $delete = escape($_GET['delete']); else $delete='';

global $crt_usr;
if(!$crt_usr) { header("Location: ".$config_live_site."/login.php?loc=account_info.php"); exit(0); }

global $config_abs_path;
require_once $config_abs_path."/libs/JSON.php";

$security_settings  = common::getCachedObject("base_security");

if(isset($delete) && $delete) {

	require_once "classes/images.php";
	users::emptyField($crt_usr, $delete);
	header("Location: account_info.php");
	exit(0);

}

if(!$action && isset($_GET['regenerate_2fa'])) {

	$usr = new users();
	$usr->regenerate2FAKey($crt_usr);
	header("Location: account_info.php#2fa");
	exit(0);

}

if(!$action) {

	require_once "include/gmaps_util.php";

	$usr = new users();
	$user = $usr->getUser($crt_usr,1);

	$user_fields=common::getCachedObject("base_user_fields", array("group" => $user['group']));
	//_print_r($user_fields);
	$smarty->assign("user_fields",$user_fields);
	setGmaps('uf', $user['group'], $smarty);

	/*$uf=new fields('uf');
	$htmlarea = $uf->HTMLAreaFieldExists($user['group']);
	$smarty->assign("htmlarea",$htmlarea);*/
//_print_r($user);
	$smarty->assign("user",$user);
	$smarty->assign("tmp",$user);
	$smarty->assign("sub",$sub);
	$smarty->assign("security_settings",$security_settings);

	global $ads_settings, $seo_settings;
	if($ads_settings['dealers_can_edit_slug'] && $user['store']==1 && $seo_settings['enable_mod_rewrite'] && !$seo_settings['sef_legacy_mode']) {
		$dealers_page_slug = slugs::getUserSlug($crt_usr);
		$smarty->assign("dealers_page_slug",$dealers_page_slug);
	}

	if($security_settings['enable_2fa']) {
		require_once $config_abs_path.'/libs/PHPGangsta/GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();
	
		global $settings;
		if($settings['enable_username']) $aname=$user['username']; else $aname = $user['email'];

		$qr_code_url = $ga->getQRCodeGoogleUrl($security_settings['2fa_site_title']." ".$aname, $user['2fa_secret']);
		$smarty->assign("qr_code_url",$qr_code_url);
		
		require_once $config_abs_path.'/classes/info.php';
		$tfa_info=info::getVal("2fa_info");
		
		$smarty->assign("tfa_info", $tfa_info);
	}
	
}

if($action=="account_info") {

	require_once "classes/images.php";
	require_once "classes/validator.php";
	require_once "classes/groups.php";
	require_once "classes/fields.php";

	require_once "classes/fields_process.php";
	require_once "classes/blocked_emails.php";

	$usr = new users();
	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	$ret = array("response" => 1, "error" => null);

	if(!$usr->edit_info($crt_usr)) {

		$ret['error'] = $usr->getError();
		$ret['response'] = 0;

	}
	else $ret['info']=$usr->getInfo();

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}

if( $action=="save_pass" ) {

	$usr = new users();
	$ret = array("response" => 1, "error" => null);

	if(!$usr->change_password($crt_usr)) {

		$ret['error'] = $usr->getError();
		$ret['response'] = 0;

	} else {

		$ret['info']=$usr->getInfo();

		// change password session
		$a = new auth();
		$a->savePassword($_POST['password']);

	}

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}

global $settings;
if($settings['users_can_ask_account_removal'] && $action=="request_removal") {

	$usr = new users();
	require_once "classes/mails.php";
	require_once "classes/mail_templates.php";
	require_once "classes/info.php";
	$usr->removalRequest($crt_usr);
	$info_acc_removal = $lng['useraccount']['removal_verification_sent'];
	$ret = array("response" => 1, "error" => null, "info" =>$info_acc_removal);

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}

if($action=="2fa") {

	$usr = new users();
	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	$ret = array("response" => 1, "error" => null);

	if(!$usr->edit_2fa($crt_usr)) {

		$ret['error'] = $usr->getError();
		$ret['response'] = 0;

	}
	else $ret['info']=$usr->getInfo();

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);

}

if(!$action) {
	if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
	$smarty->display('account_info.html');
	close();
}

$db->close();

?>
