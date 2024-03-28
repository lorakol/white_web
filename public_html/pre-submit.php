<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";

function myRedirect( $location )
{
	$sname = 'phpSESSID';
	$sid = session_id();

	if( strlen( $sid ) < 1 ) {

		Header( $location );
		return;
	}
	if( isset( $_COOKIE[ $sname ] ) || strpos( $location, $sname."=".$sid ) !== false )
	{
		Header( $location );
		return;
	}
	else {
	if( strpos( $location, "?" ) > 0 )
		$separator = "&";
	else
		$separator = "?";
	$fixed = $location . $separator . $sname."=".$sid;
	Header( $fixed );
	return;
	}
}

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","login-register");

$loc = "new_listing.php";
$smarty->assign("loc",$loc);

$error='';
$auth=new auth();

if(isset($_POST['Login'])){
	$user=new users();
	$auth->clearlogin();
	$ip=getRemoteIp();

	global $lng, $settings;

	// check captcha if enabled
	if($settings['login_captcha'] ) { 
		
		global $config_abs_path;
		require_once $config_abs_path."/include/captcha.php";
		$error.=checkCaptcha();

	}

	if(!$error) {

		if ($auth->haslogin()) {
			$auth->savelogin($ip);
			if(isset($loc) && $loc!='') myRedirect( "Location: $loc" );
			else myRedirect( "Location: ./" );
			session_write_close();
			exit();
		} else 
		if ($auth->admin_haslogin()) {
			$auth->admin_savelogin($ip);
			if(isset($loc) && $loc!='') myRedirect("Location: ".$loc);
			else  {
				global $config_admin_folder;
				myRedirect("Location: ".$config_admin_folder."/index.php");
			}
			session_write_close();
			exit();
		} else { 
			$error=$lng['login']['errors']['invalid_username_pass'];
			$auth->saveFailedLogin($ip);
		}
	}
	$smarty->assign("error",$error);
}

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('pre-submit.html');

$db->close();
close();
?>
