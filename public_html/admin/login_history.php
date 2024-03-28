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
require_once "../classes/users.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

$array_order_way= array("asc", "desc");
$array_order= array("last_login", "username", "email");


$page = get_numeric("page", 1);
$no_per_page=20;
if(isset($_GET['order']) && in_array($_GET['order'], $array_order)) $order=$_GET['order']; 
else $order='last_login';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';


if(isset($_GET['search'])) $search=escape($_GET['search']); else $search='';
// ----------------------- search ------------------------
if(isset($_POST['search'])) {
	$search=escape($_POST['search']);
} else $search='';

$smarty->assign("tab","security");
$smarty->assign("lng",$lng);
$smarty->assign("order",$order);
$smarty->assign("order_way",$order_way);

$users=new users();
$no=$users->getNo($search);

$array_users=$users->getLoginHistory($page,$no_per_page,$order,$order_way,$search);
$smarty->assign("array_users",$array_users);

// set pages 
$paginator = new paginator($no_per_page);
$paginator->setItemsNo($no);
$paginator->setAdmin(1);
$paginator->setNoSeo(1);
$paginator->setOrderBy($order);
$paginator->setOrderWay($order_way);
$paginator->setExtraFieldsArray(array("search"));
global $seo_settings;
$paginator->paginate($smarty);

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('login_history.html');

$db->close();
close();
?>
