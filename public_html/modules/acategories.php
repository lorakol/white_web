<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("acategories", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/acategories/classes/acategories.php";

function is_adult($smarty, $self_noext) {

	if(is_robot()) return;
	if( $self_noext != "listings" && $self_noext != "index" )	return;

	// if no category is set or agreement is already accepted
	if($self_noext == "listings") {
		global $post_array;
		if(!$post_array['category'] || (isset($_COOKIE['personals']) && $_COOKIE['personals']==1)) return;
		$pcategory = $post_array['category'];
	}	
	else { // index

		$cat = get_numeric("category", 0);
		if(!$cat || (isset($_COOKIE['personals']) && $_COOKIE['personals']==1)) return;
		$pcategory = $cat;
	}

	$ac = new acategories();
	$ac_settings = $ac->getSettings();

	if( in_array($pcategory, $ac_settings['array_categories_list']) ) { 

		global $config_live_site;
		if($self_noext == "listings") {
			$sign = "&";
			$vars_str="?page=listings";
			foreach($post_array as $key=>$value) {
				if(!$value || ($key=="show" && $value=="list")) continue;
				$vars_str.=$sign.$key."=".$value;
				$sign="&";
			}
		} else {
			$vars_str="?page=index&category=".$cat;
		}
		header("Location: ".$config_live_site."/modules/acategories/disclaimer.php".$vars_str);
		exit(0);
	
	}

}

function alter_query(&$where) {

	// allow adult ads on search page
	global $self_noext;
	if( $self_noext == "listings" && isset($_COOKIE['personals']) && $_COOKIE['personals']==1 )	return;
	if( $self_noext == "my_listings") return;

	// if it does not contain category_id value
	//if( !preg_match("/category_id in/", $where)  && !preg_match("/category_id not in/", $where)){ 

		$ac = new acategories();
		$ac_settings = $ac->getSettings();

		if(!$ac_settings['categories_list']) return;
//_print_r($ac_settings);
		$str='';

		$to_check = 1;
		if( $self_noext == "details") { 
		    $lid = get_numeric('id');
		    $cid = listings::getCategory($lid);
		    if(in_array($cid, $ac_settings['array_categories_list'])) $to_check=0;
		}

		if(!$to_check) return;
		
		if($where) $str.=" and "; else $str.=" where ";
		$str.=" category_id not in ( ".$ac_settings['categories_list']." ) ";
		$where.=$str;

	//} 

}

function initFirstPageTemplate($smarty) {

	global $smarty;

	$ac = new acategories();
	$ac_settings = $ac->getSettings();

	$smarty->assign('ac_settings', $ac_settings);


}

add_action('common1', 'is_adult');
add_action('search_listing_query', 'alter_query');
add_action('first_page', 'initFirstPageTemplate');

?>