<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("spam_prevention", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/spam_prevention/classes/spam_prevention.php";

function spam_check_mailto(&$sp_response, $ip='', $email='') {

	$type="mailto";
    $sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['check_contact_forms']) return;
    
    // check and block if the case
    $sp_response = $sp->spamCheck($ip, $email, $type);

}

function spam_check_register(&$sp_response, $ip='', $email='') {

	$type="register";
    $sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['check_registration']) return;
    
    // check and block if the case
    $sp_response = $sp->spamCheck($ip, $email, $type);

}

function spam_check_comments(&$sp_response, $ip='', $email='') {

	$type="comments";
    $sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['check_comments']) return;
    
    // check and block if the case
    $sp_response = $sp->spamCheck($ip, $email, $type);

}

function spam_check_reviews(&$sp_response, $ip='', $email='') {

	$type="reviews";
    $sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['check_reviews']) return;
    
    // check and block if the case
    $sp_response = $sp->spamCheck($ip, $email, $type);

}

function spam_check_post_ad_nologin(&$sp_response, $ip='', $email='') {

	$type="post_ad";
    $sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    //if(!$sp_settings['check_post_nologin']) return;
    
    // check and block if the case
    $sp_response = $sp->spamCheck($ip, $email, $type);

}

function check_waiting_time($smarty) {

	global $crt_usr, $is_admin, $is_mod, $usr_sett;
	if($is_admin || $is_mod) return;
	
	$sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['add_waiting_time']) return;

    // waiting time does not apply to this user group
	if($sp_settings['waiting_groups']!='0' && (($crt_usr && !in_array($usr_sett['group'], $sp_settings['waiting_groups_array'])) ||(!$crt_usr && !in_array(1000, $sp_settings['waiting_groups_array'])))) return;

	if($crt_usr) {
		$delay = $sp->getDelayInSeconds($crt_usr, $sp_settings);
	}
	else {
		// check by ip address
		$ip = getRemoteIp();
		$delay = $sp->getDelayInSecondsNologin($ip, $sp_settings);
	}

	//echo $delay."s delay";
	//$delay = 150;
	
	// set in smarty the number of seconds to wait to pass, or 0 if allowed to post already
	$smarty->assign("sp_waiting_time", $delay);
	$sp_waiting_minutes = (int)($delay/60);
	$smarty->assign("sp_waiting_minutes", $sp_waiting_minutes);
	$smarty->assign("sp_waiting_seconds", $delay-$sp_waiting_minutes*60);
	
 
}

function check_waiting_time_err(&$spa_errors) {

	global $crt_usr, $is_admin, $is_mod, $usr_sett;
	if($is_admin || $is_mod) return;
	
	$sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['add_waiting_time']) return;
    
    // waiting time does not apply to this user group
	if($sp_settings['waiting_groups']!='0' && (($crt_usr && !in_array($usr_sett['group'], $sp_settings['waiting_groups_array'])) ||(!$crt_usr && !in_array(1000, $sp_settings['waiting_groups_array'])))) return;
 
	if($crt_usr) {
		$delay = $sp->getDelayInSeconds($crt_usr, $sp_settings);
	}
	else {
		// check by ip address
		$ip = getRemoteIp();
		$delay = $sp->getDelayInSecondsNologin($ip, $sp_settings);
	}
	
	if($delay>0) $spa_errors = array("title" => "Waiting time not complete!");

}

function spam_get_user_info($smarty, $user_id, &$user_array) {

	$sp = new spam_prevention();
    $sp_settings = $sp->getSettings();
    
    if(!$sp_settings['ipqs_add_user_info']) return;
    
    $user_array['spam_prevention_info'] = $sp->getUserInfo($user_array['register_ip']);

   	global $crt_lang, $config_abs_path, $lng_sp;
   	global $config_admin_folder;
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/eng.php";
	require_once $lang_file;
	$smarty->assign("lng_sp", $lng_sp);

}

function spam_check_accesses($smarty, $self_noext) {

	$sp = new spam_prevention();
    $sp_settings = $sp->getSettings();

    if(!$sp_settings['limit_accesses'] && !$sp_settings['limit_same_page_accesses'] ) return;
	if($sp_settings['limit_acc_count_from_pages']!='0' && !in_array($self_noext, $sp_settings['limit_acc_count_from_pages_array'])) return;

	// don't apply for admin 
	global $is_admin;
	//if($is_admin) return;
	
	//don't apply for blacklists ips
	global $config_abs_path;
	require_once $config_abs_path."/classes/blocked_ips.php";
	$bi = new blocked_ips();
	$ip = getRemoteIp();
	//if($bi->checkIfWhitelisted($ip)) return;

	global $crt_lang, $config_abs_path, $lng_sp, $config_admin_folder;
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/$crt_lang.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/eng.php";
	require_once $lang_file;

	$sp->removeOlderAccesses($sp_settings, $ip);
	$sp->addAccess($sp_settings, $ip);
    $sp->checkAccesses($sp_settings, $ip);
  
}

function spam_periodic() {

	$sp = new spam_prevention();
	$sp->periodic();

}

function initUsersListInfo($smarty, &$array_users) {

	global $modules_array, $config_abs_path, $db;
	if(!in_array("spam_prevention", $modules_array)) return;
	$sp = new spam_prevention();
	$sp_settings = $sp->getSettings();
	$smarty->assign("sp_settings", $sp_settings);
	
	if(!$sp_settings['ipqs_info_on_users_list'] || !$sp_settings['ipqs_add_user_info']) return;
 
	global $lng_sp;
	global $appearance_settings;
	$al = $appearance_settings['admin_language'];
	global $config_admin_folder;
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/$al.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/spam_prevention/lang/eng.php";
	require_once $lang_file;
	$smarty->assign("lng_sp", $lng_sp);
	
	$i = 0;
	foreach($array_users as $u) {
		
		$array_users[$i]['spam_prevention_info'] = $sp->getUserInfo($u['ip']);
		$i++;
	}

}

add_action('mailto_post', 'spam_check_mailto');
add_action('nologin_ad_post', 'spam_check_post_ad_nologin');
add_action('register_post', 'spam_check_register');
add_action('comments_post', 'spam_check_comments');
add_action('reviews_post', 'spam_check_reviews');
add_action('price_drop_alert_post', 'spam_check_mailto');
add_action('claim_listing_post', 'spam_check_mailto');
add_action('newad', 'check_waiting_time');
add_action('start_post_ad', 'check_waiting_time_err');
add_action('user_info', 'spam_get_user_info');
add_action('init_template', 'spam_check_accesses');
add_action('periodic', 'spam_periodic');
add_action('users_list', 'initUsersListInfo');
?>