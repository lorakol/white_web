<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/paginator.php";
require_once $config_abs_path."/classes/users.php";
require_once $config_abs_path."/classes/fields.php";
require_once $config_abs_path."/modules/dealers_page/classes/dealers_page.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");
/*
$array_order_way= array("asc", "desc");
$array_order= array("registration_date");
if(isset($_GET['order']) && in_array($_GET['order'],$array_order)) $order=$_GET['order']; else $order='registration_date';
if(isset($_GET['order_way']) && in_array($_GET['order_way'],$array_order_way)) $order_way=$_GET['order_way']; else $order_way='desc';
*/
$page = get_numeric("page", 1);
if(isset($_GET['dcat'])) $dcat=cleanStr($_GET['dcat']); else $dcat='';

//$dealer_categories

global $appearance_settings;
$ads_per_page=$appearance_settings["ads_per_page"];

$dp=new dealers_page();
$dealers_page_settings = $dp->getSettings();

$smarty->assign("dealers_page_settings",$dealers_page_settings);
$smarty->assign("dcat", $dcat);

$dcat_image = $dp->getCategoryImage($dcat);
$smarty->assign("dcat_image", $dcat_image);

$search = 0;
if($_POST || $_SERVER['QUERY_STRING']) $search = 1;

$search_full_array = array();
$t = 0;
foreach($dealers_page_settings['search_fields_details_array'] as $a) {

	if($a['type'] != "depending")
		$search_full_array[$t++] = $a['caption'];
	else {

		$search_full_array[$t++] = $a['depending']['caption1'];
		$search_full_array[$t++] = $a['depending']['caption2'];
		if($a['depending']['caption3']) $search_full_array[$t++] = $a['depending']['caption3'];
		if($a['depending']['caption4']) $search_full_array[$t++] = $a['depending']['caption4'];

	}

}


if(!$dealers_page_settings['group_on_categories'] || $dcat || $search) {

	$where_str = "";
	$post_array = array();

	// search
	if($_POST) {

		foreach($_POST as $key=>$val)
		{

			$key = str_replace("qds_", "", $key);
			if( !in_array($key, $search_full_array)) continue;

			$val = cleanSearchString($val);
			if($val) {
				$where_str .= " and `".$key."` like '%$val%'";
				$post_array[$key] =  $val;
			}

		}
		$smarty->assign("post", "1");

	}
	else if($_SERVER['QUERY_STRING']) {

		$args = explode("&", $_SERVER['QUERY_STRING']);

		foreach($args as $arg) {

			$keyval = explode("=",$arg);

			$key = $keyval[0];
			$key = str_replace("qds_", "", $key);
			if( !in_array($key, $search_full_array)) continue;

			if($keyval[1]) {

				$val = cleanSearchString($keyval[1]);
				$where_str .= " and `".$key."` like '%$val%'";
				$post_array[$key] =  $val;

			}

		}

		$smarty->assign("post", "1");
	}
	$smarty->assign("post_array", $post_array);

	$no_dealers=$dp->getNoDealers($dealers_page_settings, $where_str, $dcat);
	$paginator = new paginator($ads_per_page);
	$paginator->setNoSeo(1);
	$paginator->addToPath("/modules/dealers_page");
	$paginator->setItemsNo($no_dealers);
	$paginator->paginate($smarty);

	$start=($page-1)*$ads_per_page;

	$dealers_array=$dp->getDealers($start, $ads_per_page, $dealers_page_settings, $where_str, $dcat);
	$smarty->assign("dealers_array",$dealers_array);
	$smarty->assign("no_dealers",$no_dealers);

	require_once $config_abs_path."/classes/fields.php";
	$field_names = array();
	$uf = new fields('uf');
	foreach($dealers_page_settings['details_fields_array'] as $f) {
		$field_names[$f] = cleanStr($uf->getNameByCaption($f));
	}
	$smarty->assign("field_names",$field_names);

}
else {

	$dealer_categories = $dp->getDealerCategories($dealers_page_settings);
	$smarty->assign("dealer_categories",$dealer_categories);
	$width = (int)(100/$dealers_page_settings['categories_on_row']);
	$smarty->assign("width",$width);
}


if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('modules/dealers_page/dealers.html');
$db->close();
close();
?>
