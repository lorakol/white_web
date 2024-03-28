<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
require_once "../classes/paginator.php";
require_once "../classes/users_packages.php";
require_once "../classes/users.php";
require_once "../classes/groups.php";
require_once "../classes/listings.php";
require_once "../classes/fields.php";

global $db, $lng, $settings;
$smarty = new Smarty;
$smarty = common($smarty);

$users=new users();

$arr_search= array("username", $settings['contact_name_field'], "email", "ip");
$arr_order= array("username", $settings['contact_name_field'], "listings", "registration_date", "group", "inactive_pending", "inactive_not_pending", "banned", "suspended");
$arr_order_way= array("asc", "desc");
$array_show=array("all", "active", "inactive", "suspended", "verification", "pending", "inactive_pending", "inactive_not_pending");
if(isset($_GET['show']) && in_array($_GET['show'], $array_show)) $show=$_GET['show']; else $show="all";

$page = get_numeric("page", 1);
$no_per_page = get_numeric("no_per_page", 20);

if(isset($_GET['search'])) $search=escape($_GET['search']); else $search='';

if(isset($_GET['search_for']) && in_array($_GET['search_for'], $arr_search)) $search_for=$_GET['search_for']; else $search_for='';

if(isset($_GET['order']) && in_array($_GET['order'], $arr_order)) $order=$_GET['order']; else $order='registration_date';

if(isset($_GET['order_way']) && in_array($_GET['order_way'], $arr_order_way)) $order_way=$_GET['order_way'];
else if($order) $order_way='desc';

if($order=="inactive_pending") {
	global $config_table_prefix;
	$order = "`active` asc, `pending` desc, registration_date desc";
	$order_way="";
}
if($order=="inactive_not_pending") {
	global $config_table_prefix;
	$order = "`active` asc, `pending` asc, registration_date desc";
	$order_way="";
}
if($order=="banned") {
	global $config_table_prefix;
	$order = "`suspended` desc, `date_unsuspend` asc";
	$order_way="";
}
if($order=="suspended") {
	global $config_table_prefix;
	$order = "`suspended` desc, `date_unsuspend` desc";
	$order_way="";
}

if(isset($_GET['login_as']) && is_numeric($_GET['login_as']))
{
	$login_as=$_GET['login_as'];
	$usr=new users();
	if($usr->exists($login_as)) {
		$auth=new auth();
		$auth->autologin($login_as);
		$auth->admin_clearlogin();
		header("Location: ".$config_live_site);
		exit(0);
	}
}

$post_array = array();

$f = new fields("uf");
$phone_fields = $f->getFieldsOfTypeShort("phone");

$array_searches = array("id", $settings['contact_name_field'], "username", "email", "ip", "group", "date_from", "date_to", "only_moderators", "only_stores", "only_affiliates");

foreach($phone_fields as $p) array_push($array_searches, $p['caption']);

foreach($array_searches as $key) {
	if(isset($_GET[$key])) $post_array[$key]=escape($_GET[$key]);
}

$admin_verification_exists = $f->getAdminVerificationExists();
$smarty->assign("admin_verification_exists", $admin_verification_exists);

if($_POST) {

	array_push($array_searches, "show");
	array_push($array_searches, "order");
	array_push($array_searches, "order_way");
	array_push($array_searches, "no_per_page");

	foreach($array_searches as $key) {
		if(isset($_POST[$key])) {
			if($key=="only_moderators" || $key=="only_affiliates" || $key=="only_store" && $_POST[$key]=="on")  $post_array[$key] = 1;
			else $post_array[$key]=escape($_POST[$key]);
		}

	}

	if($post_array['show']) $show = $post_array['show'];
	if($post_array['order']) $order = $post_array['order'];
	if($post_array['order_way']) $order_way = $post_array['order_way'];
	if($post_array['no_per_page']) $no_per_page = $post_array['no_per_page'];

	// actions for multiple ads
	foreach($_POST as $key=>$value) {
		if(!preg_match('/^(user)([0-9])+/',$key)) continue;
		if($value!="on") continue;
		$id = substr($key, 4);
		if(!is_numeric($id)) continue;

		if (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x'])) $users->delete($id);
		if (isset($_POST['activate_selected']) || isset($_POST['activate_selected_x'])) $users->Enable($id);
		if (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x'])) $users->Disable($id);
	}

	do_action("users_list_search", array($smarty, &$post_array, $page));

	if ( (isset($_POST['delete_selected']) || isset($_POST['delete_selected_x']))
	|| ( isset($_POST['activate_selected']) || isset($_POST['activate_selected_x']) )
	|| (isset($_POST['deactivate_selected']) || isset($_POST['deactivate_selected_x']))) // IE image submit fix

	{
		$location="users_list.php?page=".$page;
		foreach($post_array as $key=>$value) {
			if($value)
				$location.="&$key=$value";
		}
		header("Location: ".$location);
		exit(0);
	}
	// end actions for multiple users
}

if($show=="active") $post_array['active'] = 1;
if($show=="inactive") $post_array['inactive'] = 1;
if($show=="suspended") $post_array['suspended'] = 1;
if($show=="verification") $post_array['verification'] = 1;
if($show=="pending") $post_array['pending'] = 1;
if($show=="inactive_pending") $post_array['inactive_pending'] = 1;
if($show=="inactive_not_pending") $post_array['inactive_not_pending'] = 1;

$smarty->assign("tab","users");
//$smarty->assign("page",$lng['panel']['users']);
$smarty->assign("lng",$lng);
$smarty->assign("show",$show);
$smarty->assign("page",$page);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);
$smarty->assign("no_per_page",$no_per_page);
$smarty->assign("post_array",$post_array);
$smarty->assign("phone_fields",$phone_fields);

$array_users=$users->searchUsers($post_array, $page,$no_per_page,$order,$order_way);
$no_users=$users->getNoUsers();

do_action("users_list", array($smarty, &$array_users));

$smarty->assign("array_users",$array_users);
$smarty->assign("total",$no_users);

// set pages
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no_users);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExcludeArray(array("Search", "no_per_page_sel"));
global $seo_settings;
$paginator->paginate($smarty);

$gr = new groups;
$groups = $gr->getShortGroups();
$smarty->assign("groups", $groups);

global $config_vars;
$credits_enabled = $config_vars['credits_enabled'];
$smarty->assign("credits_enabled", $credits_enabled);


if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('users_list.html');

$db->close();
close();
?>
