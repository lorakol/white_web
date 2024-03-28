<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "include/include.php";

global $db;
global $lng;
global $settings, $config_abs_path;

require_once $config_abs_path."/classes/listings.php";

$step = get_numeric("step", 0);

$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("tab","listings");

global $settings, $ads_settings;
if($step<=1) {

	require_once $config_abs_path."/classes/users.php";
	// do include actions
	do_action("newad", array($smarty));

	unset($_SESSION['pictures']);
	$_SESSION['pictures'] = array();

	$categories=common::getCachedObject("base_short_categories");
	$smarty->assign("short_categories", $categories);

	$plans_array = common::getCachedObject("base_short_plans");
	$smarty->assign("plans_array",$plans_array);

	$usr = new users();
	$no_users = $usr->getNo();
	if($no_users<=100) {
		$users_array = $usr->getAll();
		$smarty->assign("users_array",$users_array);
	}
	$smarty->assign("no_users",$no_users);

} // end if step 0

// ad details, photos and extra options
if($step==2) {

	do_action("newad_form", array($smarty));

	$category = get_numeric_only("category");
	$plan = get_numeric("plan", 0);
	$user_id = get_numeric("user_id", 0);

	require_once $config_abs_path."/include/gmaps_util.php";
	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/packages.php";
	require_once $config_abs_path."/classes/priorities.php";
	require_once $config_abs_path."/classes/featured_plans.php";
	require_once $config_abs_path."/classes/users.php";

	// ************ CUSTOM FIELDS ****************

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

	// get custom fields for the selected category
	$fieldset = categories::getFieldset($category);
	$u = new users();
	$gr = $u->getGroup($user_id);

	$fields=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));

	$smarty->assign("fields", $fields);
	$smarty->assign("fieldset", $fieldset);

	// set google maps fields 
	setGmaps('cf', $fieldset, $smarty);

	global $currencies;
	$smarty->assign("currencies", $currencies);

	// ************ PHOTOS ****************

	$no_photos = packages::getNoPictures($plan);
	$smarty->assign("no_photos", $no_photos);

	// ************ EXTRA OPTIONS ****************
	// check if extra options are allowed
	$extra_options=0;
	if( $ads_settings['enable_featured'] || $ads_settings['enable_highlited'] || $ads_settings['enable_priorities'] || $ads_settings['enable_video'] || $ads_settings['enable_urgent'] || $ads_settings['enable_url'])

		$extra_options=1; 

	$smarty->assign("extra_options",$extra_options);

	// get extra options included with the plan
	if($plan && $extra_options) {

		$pkg = new packages();
		$pkg_det = $pkg->getPackage($plan);
		$featured = $pkg_det['featured'];
		$highlited = $pkg_det['highlited'];
		$priority = priorities::getOrderNo($pkg_det['priority']);
		$urgent = $pkg_det['urgent'];
		$video = $pkg_det['video'];
		$url = $pkg_det['url'];
		$plan_name = $pkg_det['name'];
		$html_editor = $pkg_det['html_editor'];

	} else { 

		$featured = 0; $highlited=0; $priority=0; $urgent=0; $video = 0; $url=0;
		$plan_name=0; 
	}

	$smarty->assign("featured",$featured);
	$smarty->assign("highlited",$highlited);
	$smarty->assign("priority",$priority);
	$smarty->assign("urgent",$urgent);
	$smarty->assign("video",$video);
	$smarty->assign("url",$url);
	$smarty->assign("plan_name",$plan_name);
	$smarty->assign("html_editor",$html_editor);

	// get priorities list
	if($ads_settings['enable_priorities']) {
		$priorities = common::getCachedObject("base_priorities");
		$smarty->assign("priorities",$priorities);
	}

	// get featured plans list
	if($ads_settings['enable_featured']) {
		$featured_plans = common::getCachedObject("base_featured_plans");
		$smarty->assign("featured_plans",$featured_plans);
	}

}

// post ad step
if($step==3) {

	global $config_abs_path;
	require_once $config_abs_path."/libs/JSON.php";
	require_once $config_abs_path."/classes/badwords.php";
	require_once $config_abs_path."/classes/pictures.php";
	require_once $config_abs_path."/classes/images.php";
	require_once $config_abs_path."/classes/validator.php";
	require_once $config_abs_path."/classes/listings_process.php";
	require_once $config_abs_path."/classes/fields.php";
	require_once $config_abs_path."/classes/fields_process.php";
	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/packages.php";
	require_once $config_abs_path."/classes/priorities.php";
	require_once $config_abs_path."/classes/featured_plans.php";
	require_once $config_abs_path."/classes/users.php";

	// send the following response back:
	// response = 1 / 0
	// error - array containing errors strings and fields which contain the error
	// amount calculated for the current options
	$ret = array("response" => 1, "error" => array(), "ad_id" =>0);

	// save category and plan id

	$category = escape($_POST['category']);
	$package = escape($_POST['package']);

	$actions_array['newpkg']['value'] = 1;

	$pkg = new packages();
	$pkg_det = $pkg->getPackage($package);
	$featured = $pkg_det['featured'];
	$highlited = $pkg_det['highlited'];
	$priority = priorities::getOrderNo($pkg_det['priority']);
	$urgent = $pkg_det['urgent'];
	$video = $pkg_det['video'];
	$url = $pkg_det['url'];

	$priorities = common::getCachedObject("base_priorities");

	$featured_plans = common::getCachedObject("base_featured_plans");

	$video_code = "";
	if( (isset($_POST['video']) && $_POST['video']=="on") || $video) {

		if(isset($_POST['video_code'])) { 
			$video_code = escape($_POST['video_code']);
			if(!strstr($video_code, " wmode=\"transparent\"")) $video_code = str_replace("></embed>", " wmode=\"transparent\"></embed>", $video_code);
		}

		if($video_code) { 
			$valid_video_code = 0;
			require_once $config_abs_path."/classes/validator.php";
			if(!validator::valid_youtube($_POST['video_code'])) { 
				global $lng; 
				array_push($ret['error'], array("field"=> "video", "error" => $lng['listings']['errors']['invalid_youtube_video']));
				$ret['response'] = 0;
	
		    		global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit();

			}
			else $valid_video_code = 1; 
		}

	}
	$site_url = "";
	if( (isset($_POST['url']) && $_POST['url']=="on") || $url) {

		if(isset($_POST['site_url'])) { 
			$site_url = escape($_POST['site_url']);
		}

		if($site_url) { 
			$valid_url = 0;
			require_once $config_abs_path."/classes/validator.php";
			if(!validator::valid_url($_POST['site_url'])) { 
				global $lng; 
				array_push($ret['error'], array("field"=> "site_url", "error" => $lng['listings']['errors']['invalid_url']));
				$ret['response'] = 0;
	
	    		global $appearance_settings;
				if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

				echo json_encode($ret);
				exit();

			}
			else $valid_url = 1; 
		}

	}

//_print_r($_POST);
//_print_r($_FILES);

	$lp = new listings_process();
	if(!$lp->add()) { 
		$ret['error'] = $lp->getError();
		$ret['response'] = 0;
		
		global $appearance_settings;
		if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

		echo json_encode($ret);
		exit();
	}

	$ad_id = $lp->getLast();
	$ret['ad_id'] = $ad_id;

	// add video if the case
	if( $video_code && $valid_video_code) listings::saveVideo($ad_id, $video_code);

	// add url if the case
	if( $site_url && $valid_url) listings::saveUrl($ad_id, $site_url);

	global $appearance_settings;
        if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

	echo json_encode($ret);

}

if($step==4) {

	require_once $config_abs_path."/classes/categories.php";
	require_once $config_abs_path."/classes/pictures.php";
	require_once $config_abs_path."/include/gmaps_util.php";
	require_once $config_abs_path."/classes/users.php";

	$listing = new listings();
	$ad_id = get_numeric_only("ad_id", 0);
	
	require_once $config_abs_path."/classes/pictures.php";

	$listing_array = $listing->getListing($ad_id);
	$category_id = $listing_array['category_id'];
	$fieldset = categories::getFieldset($category_id);

	$options = $listing->getOptions($ad_id);	
	$smarty->assign("options",$options);

	$u = new users();
	$gr = $u->getGroup($listing_array['user_id']);
	$fields_array=common::getCachedObject("base_listing_fields", array("fieldset" => $fieldset, "group"=>$gr));
	$smarty->assign("fields_array", $fields_array);
	$smarty->assign("category", $category_id);

	setGmaps('cf', $fieldset, $smarty);

	$cf=new fields('cf');
	$smarty->assign("id",$ad_id);
	$smarty->assign("tmp",$listing_array);
	$smarty->assign("fieldset", $fieldset);

	global $default_fields_types;
	$smarty->assign("default_fields_types", $default_fields_types);

}

if($step!=3) $smarty->assign("step",$step);

if($db->error!='' && $step!=3) { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

if($step!=3) $smarty->display('new_listing.html');

$db->close();
if($step==1) close();

?>