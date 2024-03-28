<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";
global $config_abs_path;

require_once $config_abs_path."/classes/listings.php";
require_once $config_abs_path."/classes/categories.php";
require_once $config_abs_path."/classes/pictures.php";

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);

if(isset($_GET['id']) && is_numeric($_GET['id'])) $id = $_GET['id']; else { header ('Location: manage_listings.php'); exit(0); }

$smarty->assign("lng",$lng);
$smarty->assign("id",$id);

// get pending edited information
$l = new listings;
$p = new pictures;

// if not pending edited
$is_pending = $l->isPendingEdited($id);
if(!$is_pending) { header ('Location: manage_listings.php'); exit(0); }

$listing_array = $l->getListing($id);

$pending_edited_array_unformatted = $l->getPendingEdited($id);

$pending_edited_array = array();
if($pending_edited_array_unformatted) 
	$pending_edited_array = $l->getListing($id, 0, $pending_edited_array_unformatted);

$pictures_array = $p->getPictures($id);
$pending_edited_pictures_array = $p->getPendingEdited($id);


$smarty->assign("listing_array", $listing_array);
$smarty->assign("pending_edited_array", $pending_edited_array);

$smarty->assign("pictures_array", $pictures_array);
$smarty->assign("pending_edited_pictures_array", $pending_edited_pictures_array);

// get custom fields for fieldset
$fieldset = listings::getFieldset($id);
$fs=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset));
$smarty->assign("fieldset", $fieldset);

$fields = array();
$gmap_fields = array();
$i=0; $gm = 0;
foreach ($fs as $f) {

	if($f['type']=="google_maps") $gmap_fields[$gm++] = $f['caption'];

	if($f['type']=="depending") {

		$fields[$i]['type'] = "depending";
		$fields[$i]['prefix'] = "";
		$fields[$i]['postfix'] = "";
		$fields[$i]['validation_type'] = "";
		$fields[$i]['name'] = $f['depending']['name1'];
		$fields[$i]['caption'] = $f['depending']['caption1'];
		$i++;

		$fields[$i]['type'] = "depending";
		$fields[$i]['prefix'] = "";
		$fields[$i]['postfix'] = "";
		$fields[$i]['validation_type'] = "";
		$fields[$i]['name'] = $f['depending']['name2'];
		$fields[$i]['caption'] = $f['depending']['caption2'];
		$i++;

		if($f['depending']['no']>=3)
		{ 
			$fields[$i]['type'] = "depending";
			$fields[$i]['prefix'] = "";
			$fields[$i]['postfix'] = "";
			$fields[$i]['validation_type'] = "";
			$fields[$i]['name'] = $f['depending']['name3'];
			$fields[$i]['caption'] = $f['depending']['caption3'];
			$i++;

		}

		if($f['depending']['no']>=4)
		{ 
			$fields[$i]['type'] = "depending";
			$fields[$i]['prefix'] = "";
			$fields[$i]['postfix'] = "";
			$fields[$i]['validation_type'] = "";
			$fields[$i]['name'] = $f['depending']['name4'];
			$fields[$i]['caption'] = $f['depending']['caption4'];
			$i++;

		}
	} // end if depending

	else $fields[$i] = $f;
	$i++;
}

//_print_r($fields);

$smarty->assign("fields", $fields);

$smarty->display('review_pending_edited.html');
?>