<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
require_once "classes/info.php";
require_once 'libs/PHPGangsta/GoogleAuthenticator.php';

global $db, $lng, $settings;
$post = get_numeric("post", 0);
$step = get_numeric("step", 0);

if(isset($_GET['loc'])) $loc=escape($_GET['loc']); else $loc='';

if(!$post) {

	global $config_live_site;
	$live = $config_live_site;

	$smarty = new Smarty;
	$smarty = common($smarty);
	$smarty->assign("lng",$lng);
	$smarty->assign("section","login-register");

	// if logged in, redirect towards user account
	global $logged_in, $is_admin, $is_aff;
	if($logged_in) {
		header("Location: ".$config_live_site."/useraccount.php");
		exit(0);
	}

	if($is_admin) {
		global $config_admin_folder;
		header("Location: ".$config_live_site."/".$config_admin_folder."/index.php");
		exit(0);
	}

	if($step<2) {
	

		$general_info=info::getVal("login");
		$smarty->assign("general_info", $general_info);


		// ...fix for logging out admin when the site is accesses with a different domain than $config_live_site
		/*global $mobile_settings;
		if( (!$settings['enable_locations'] || !$settings['enable_subdomains']) && (!$is_mobile || !$mobile_settings['enable_mobile_subdomain']) && $live!=$config_live_site) { 
			if($loc) $loc_str = "?loc=".$loc;
			header("Location: ".$live."/login.php".$loc_str);
			exit(0);
		}*/

	
	} 
	else {
		
		$step=2;
		$tfa_info=info::getVal("2fa");
		$smarty->assign("tfa_info", $tfa_info);
		if(isset($_GET['auth_name'])) $auth_name=escape($_GET['auth_name']); else $auth_name='';
		$smarty->assign("auth_name",$auth_name);

	}
	
	
	$smarty->assign("loc",$loc);
	$smarty->assign("step", $step);

} // end not post

else {
	my_session_start();
}

if($post) {

	$ret = array("response" => 0, "error" => array(), "redirect" => "");

	$auth=new auth();
	$auth->clearlogin();
	
	if($step==2) {// step 2 verification
	
		$ip=getRemoteIp();
		$auth_name = escape($_GET['auth_name']);
		$auth->auth_name = $auth_name;

		// check if there is a registration in login_history and is not expired, with the same ip, if expired remove it.
		// check otp
		if($valid = $auth->step2HasLogin($auth_name, $ip)) {

			if($auth_name == $settings['admin_username']) {
				$auth->admin_savelogin($ip, 2);
			} else {
				$auth->savelogin($ip, '', '', 2);
			}
			$ret['response'] = 1;
		
		} else {

			$ret['error'] = $auth->getLoginError();
			
		}
	
	}
	
	else { // step 1 verification
	
		// check captcha if enabled
		if($settings['login_captcha'] ) { 
		
			global $config_abs_path;
			require_once $config_abs_path."/include/captcha.php";
			$error = checkCaptcha();
			if($error) $ret['error'] = $error;

		}

		if(!$ret['error']) {

			$ip=getRemoteIp();

			require_once "classes/users.php";

			if ($valid = $auth->haslogin()) {

				// haslogin() returns 2 for 2 factor authentication
				$two_fac = 0;
				if($valid==2) $two_fac = 1;
			
				if(!$two_fac) {
					$auth->savelogin($ip);
					if(!empty($loc)) $ret['redirect'] = $loc; else $ret['redirect'] = "useraccount.php";
					
				}	
				else { 
					$auth->saveLoginFirstStep($ip);
					
					$loc_str='';
					if($loc) $loc_str="&loc=".$loc;
					$ret['redirect'] = "login.php?step=2&auth_name=".$auth->auth_name.$loc_str;
					
				}
				$ret['response'] = 1;

			} else 

				if ($valid = $auth->admin_haslogin()) {

					// haslogin() returns 2 for 2 factor authentication
					$two_fac = 0;
					if($valid==2) $two_fac = 1;
					
					if(!$two_fac) {
						$auth->admin_savelogin($ip);
					}
					else {
						$auth->saveAdminLoginFirstStep($ip);
						
						$loc_str='';
						if($loc) $loc_str="&loc=".$loc;
 						$ret['redirect'] = "login.php?step=2&auth_name=".$auth->auth_name.$loc_str;
					}
						
					$ret['response'] = 1;

			} else { 
			
					$ret['error'] = $auth->getLoginError();
			
					$ret['response'] = $auth->saveFailedLogin($ip);

			}

		} // end if(!$ret['error'])
		
	} // end if step
	
	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";

	global $appearance_settings;
	if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	//header('Content-type: text/html; charset='.$appearance_settings['charset']);
	
	//echo htmlspecialchars(json_encode($ret), ENT_NOQUOTES);
	echo json_encode($ret);
	session_write_close();
	exit();

} // end post

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if(!$post) {

	$smarty->display('login.html');
	close();
}

$db->close();
?>