<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../../include/include.php";
require_once "../../classes/pictures.php";
require_once "../../classes/users.php";
require_once "../../classes/categories.php";
require_once "../../include/gmaps_util.php";

global $db;
global $lng;
$info='';
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

$cmp = array();
$compare_array = array();
$compare_array_temp = array();
$i=0; $j=0;
$no_compare = 0;
if(isset($_COOKIE['compare'])) {
	$cmp = explode(",", $_COOKIE['compare']);
	$no_compare = count($cmp);
	$l = new listings;
	$line = 0;
	foreach($cmp as $c) {
		$compare_array[$line][$i] = $l->getListing($c);
		//$compare_array[$line][$i]['url_title'] = _urlencode($compare_array[$i]['title']);
		$compare_array_temp[$j] = $compare_array[$line][$i];
		if($i%3==2) { $line++; $i=0; }
		else $i++;
		$j++;
	}
}
//_print_r($compare_array);
$fs = common::getCachedObject("base_listing_fields");

$fields = array();
$gmap_fields = array();
$i=0; $gm = 0;
foreach ($fs as $f) {
	if($f['type']=="price") continue;
	if($f['type']=="google_maps") $gmap_fields[$gm++] = $f['caption'];
	$found=0;
	foreach($compare_array_temp as $cp) {
		if($f['type']=="depending") {
			if($cp[$f['depending']['caption1']])
			{ 
				$fields[$i]['type'] = 'depending';
				$fields[$i]['name'] = $f['depending']['name1'];
				$fields[$i]['caption'] = $f['depending']['caption1'];
				$i++;
				$found=1;

			}
			if($cp[$f['depending']['caption2']])
			{ 
				$fields[$i]['type'] = 'depending';
				$fields[$i]['name'] = $f['depending']['name2'];
				$fields[$i]['caption'] = $f['depending']['caption2'];
				$i++;
				$found=1;

			}
			if($f['depending']['no']>=3 && $cp[$f['depending']['caption3']])
			{ 
				$fields[$i]['type'] = 'depending';
				$fields[$i]['name'] = $f['depending']['name3'];
				$fields[$i]['caption'] = $f['depending']['caption3'];
				$i++;
				$found=1;

			}
			if($f['depending']['no']>=4 && $cp[$f['depending']['caption4']])
			{ 
				$fields[$i]['type'] = 'depending';
				$fields[$i]['name'] = $f['depending']['name4'];
				$fields[$i]['caption'] = $f['depending']['caption4'];
				$i++;
				$found=1;

			}
			if($found) { $found=0;  break;}
		} else {
			if($cp[$f['caption']]) $found=1;
		}
	}
	if(!$found) continue;
	$fields[$i] = $f;
	$i++;
}
//_print_r($fields);

$smarty->assign("no_compare",$no_compare);
$smarty->assign("cmp",$cmp);
$smarty->assign("compare_array",$compare_array);
$smarty->assign("fields",$fields);
$smarty->assign("gmap_fields",$gmap_fields);
//_print_r($compare_array);
// maximum  3 on the row
if($no_compare>3) $no_compare=3;
if($no_compare) $percent = 80/$no_compare; else $percent=100;
$smarty->assign("percent",$percent);

global $settings;
$smarty->assign("settings",$settings);

//_print_r($compare_array);
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('modules/listings_compare/compare.html');

$db->close();
close();
?>
