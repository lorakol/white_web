<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/packages.php";
require_once "../classes/users_packages.php";
require_once "../classes/priorities.php";
require_once "../classes/featured_plans.php";
require_once "../classes/users.php";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","users");
$smarty->assign("lng",$lng);

$usr = new users();
$no_users = $usr->getNo();
if($no_users<=100) {
	$users = $usr->getAll();
	$smarty->assign("users",$users);
}
$smarty->assign("no_users",$no_users);

$pkg = new packages;
$subscriptions = $pkg->getAllSubscriptions();
$smarty->assign("subscriptions",$subscriptions);


$usr_pkg = new users_packages();
if(isset($_POST['Submit'])){

	if(((isset($_POST['user']) && is_numeric($_POST['user'])) || (isset($_POST['username']) && $_POST['username']) || (isset($_POST['email']) && $_POST['email'])) && isset($_POST['package']) && is_numeric($_POST['package'])) {

		if(isset($_POST['user']) && is_numeric($_POST['user'])) {
			$user_id = $_POST['user'];
		} else 
		{
			global $settings;
			if($settings['enable_username'])
				$user_id = users::getUserId(escape($_POST['username']));
			else 
				$user_id = users::getIdByEmail(escape($_POST['email']));
		}

		if($user_id) {
			if($usr_pkg->add($_POST['package'], $user_id, 1)) { 
				header ('Location: subscriptions.php');
				exit(0);
			}
		}
	}

}

$smarty->display('add_user_subscription.html');

$db->close();
close();
?>
