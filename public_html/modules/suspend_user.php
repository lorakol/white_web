<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("suspend_user", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/suspend_user/classes/suspend_user.php";

function initSuspendUsers($smarty, &$array_users) {

	global $modules_array, $config_abs_path, $db;
	if(!in_array("suspend_user", $modules_array)) return;
	$su = new suspend_user();
	$su_settings = $su->getSettings();
	$smarty->assign("su_settings", $su_settings);
	
	global $lng_su;
	global $appearance_settings;
	$al = $appearance_settings['admin_language'];
	global $config_admin_folder;
	$lang_file = $config_abs_path."/".$config_admin_folder."/modules/suspend_user/lang/$al.php";
	if(!file_exists($lang_file)) $lang_file = $config_abs_path."/".$config_admin_folder."/modules/suspend_user/lang/eng.php";
	require_once $lang_file;
	$smarty->assign("lng_su", $lng_su);
	
	$date_format=$appearance_settings["date_format"];
	$i = 0;
	foreach($array_users as $u) {
		if($u['suspended']) {
			if($array_users[$i]['date_unsuspend'] && $array_users[$i]['date_unsuspend']!='0000-00-00 00:00:00') {
				$array_users[$i]['banned'] = 0;	
				$array_users[$i]['date_unsuspend_nice'] = $db->fetchRow("select date_format(`date_unsuspend`,'$date_format') as date_unsuspend_nice from ".TABLE_USERS." where id='{$u['id']}'");
			}
			else $array_users[$i]['banned'] = 1;	
		}
		$i++;
	}


}

function unsuspendUsers() {

	global $modules_array;
	if(!in_array("suspend_user", $modules_array)) return;
	$su = new suspend_user();
	$su->periodic();

}

function postSuspendUsers($smarty, $post_array, $page) {

	global $modules_array, $config_abs_path, $db;
	if(!in_array("suspend_user", $modules_array)) return;
	$su = new suspend_user();
	$su_settings = $su->getSettings();
	$smarty->assign("su_settings", $su_settings);

	// check post for suspend all / unsuspend all
	if(isset($_POST['suspend_selected']) || isset($_POST['ban_selected']) || isset($_POST['unsuspend_all']) || isset($_POST['unsuspend_all_x'])) {
	
		foreach($_POST as $key=>$value) {
			if(!preg_match('/^(user)([0-9])+/',$key)) continue;
			if($value!="on") continue;
			$id = substr($key, 4);
			if(!is_numeric($id)) continue;
			
			if(isset($_POST['suspend_selected'])) { $days = $_POST['suspend_all_days']; $su->suspend($id, $days); };
			if(isset($_POST['ban_selected'])) $su->ban($id);
			if(isset($_POST['unsuspend_all']) || isset($_POST['unsuspend_all_x'])) $su->unsuspend($id);
			
		}
		
		$location="users_list.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
		
	}

}

add_action('periodic', 'unsuspendUsers');
add_action('users_list', 'initSuspendUsers');
add_action('users_list_search', 'postSuspendUsers');

?>