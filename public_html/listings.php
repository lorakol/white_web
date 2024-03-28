<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
$minimal = 0;
if($_POST && !isset($_POST['Accept_disclaimer']) && !$_POST['Accept_disclaimer']) {
//print_r($_POST); exit(0);
	global $minimal;
	$minimal = 1;
}
if($minimal) {
	require_once "include/include_min.php";
	global $config_abs_path;
	require_once $config_abs_path."/add_hooks.php";
}
else
	require_once "include/include.php";
//_print_r($_GET);

global $config_abs_path;
global $db;
global $post_array;

$seo = new seo();
global $keyword_name, $non_latin_url;
$post_array = array($keyword_name =>"", "category" =>"", "user_id"=>"", "price_low" =>"", "price_high" =>"", "currency" =>"", "order" => "", "order_way" => "", "with_pic" => "", "show" => "", "with_auction" => "");

$order1_array = array("date_updated", "price","title");
$order2_array = array("desc", "asc");
$show_array = array("list", "gallery");

global $page;
$page=1;
global $seo_settings, $settings, $ads_settings;

require_once $config_abs_path."/classes/searches.php";
$s = new searches();

// if post, generate the url and redirect to that url
if($_POST && !isset($_POST['Accept_disclaimer']) && !$_POST['Accept_disclaimer']) {
	$post_locations_array = array();
	// get post values
	foreach($_POST as $key=>$val)
	{

		// slash signs will be replaced with underscore signs
		$val = str_replace("/", "__", $val);
		// $ sign will be replaced with ~~
		$val = str_replace("$", "~~", $val);
		// & sign will be replaced with ||
		$val = str_replace("&", "||", $val);


		switch($key) {

			case "search":
			case "Search":
			case "Search1":
			case "Save-search":
			case "x":
			case "y":
			case "qs_category1":
			case "qs_category2":
			case "qs_category3":
			case "qs_category4":
			case "qs_category5":
			case "qs_lat":
			case "qs_long":
			case "page":
				break;
			case "category":
			case "user_id":
			case "price_low":
			case "price_high":
				if($val && is_numeric($val)) $post_array[$key] = $val;
				break;
			case "currency":
			case $keyword_name:
			case "qs_".$keyword_name:
				if($val) $post_array[$keyword_name] = $val;//_mb_strtolower(urlencode(strip_tags($val)));
				break;
			case "order":
				if($_POST['order'] &&  in_array($_POST['order'],$order1_array)) $post_array['order'] = $_POST['order'];
				break;
			case "order_way":
				if($_POST['order_way'] &&  in_array($_POST['order_way'],$order2_array)) $post_array['order_way'] = $_POST['order_way'];
				break;
			case "show":
				if($_POST['show'] &&  in_array($_POST['show'],$show_array)) $post_array['show'] = $_POST['show'];
				break;
			case "with_pic":
				$post_array['with_pic'] = checkbox_value('with_pic');
				break;
			case "with_auction":
				$post_array['with_auction'] = checkbox_value('with_auction');
				break;
			case "qs_location":
			case "location":
				$post_array['location'] = str_replace(", ", "|", $val);
				break;
			default: 
			
				// temporary fields for date fields
				if(preg_match ('/^([^\/])+(_low_vis)$/', $key) || preg_match ('/^([^\/])+(_high_vis)$/', $key) || preg_match ('/^([^\/])+(_vis)$/', $key) || preg_match ('/^(dep_id)([^\/])+$/', $key)) break;
				// remove qs_ if the search was made with quick search
				if(preg_match ('/^(qs_)([^\/])+$/', $key)) $key = substr($key, 3);

				// remove multisearch checkboxes
				if(preg_match ('/^(ms_)([^\/])+$/', $key)) break;

				if($ads_settings['enable_location_autosuggest'] && isset($_POST['location']) && $_POST['location'] && in_array( $key, $ads_settings['address_components_fields'])) {
					break;
				}

				if($val!='' || ( is_numeric($val) && $val!=0 )) $post_array["$key"] =  $val;//_mb_strtolower(strip_tags($val));

				// save location fields 
				if($settings['enable_locations'] && in_array($key, explode(",", $settings['location_fields'])) ) {
					$post_locations_array[$key] = rawurldecode($val);
				}
				break;

		} // end switch
		
	} // end foreach post
//_print_r($post_array);exit(0);
	if($settings['enable_locations']) 
	{ 
		require_once $config_abs_path."/classes/locations.php";
		$lclass = new locations();
		$lclass->init();
		$lclass->initLiveSiteUrl();
		$lclass->setPostLocation($post_locations_array);
	}

	// generate the url 
	if($seo_settings['enable_mod_rewrite']) {

		require_once $config_abs_path."/classes/categories.php";
		$url_str = $seo->makeSearchLink($post_array, 1);

	}
	else {

		$query = "";
		foreach ($post_array as $key=>$value) {

			// skip area field from areasearch module
			if($value=='' && $key!="area") continue;
			// don't add show and order elements if default values
			if($key=="show" || ($key=="order" && $value=="date_updated") || ($key=="order_way" && $value=="desc")) continue;
			// don't add location fields to the url
			if(in_array($key, explode(",", $settings['search_location_fields']))) continue;

			if(($key!="order" || $value!="date_updated") && ($key!="order_way" || $value!="desc"))
				$sign="&";

			$query.=$sign.$key."="._urlencode($value, 0);
		}

		global $config_live_site;
		$url_str = $config_live_site;
		$url_str.="/listings.php?page=1".$query;
	}
	
	$search_id = $s->addSearch();
	if(!strstr($url_str, "?"))
		$url_str.="?search_id=".$search_id;
	else $url_str.="&search_id=".$search_id;
	$s->updateSearchURL($search_id, $url_str);

	do_action("search_keyword", array($post_array[$keyword_name]));
//echo $url_str; exit(0);
	header("Location: $url_str");
	exit(0);

} // end if $_POST

require_once "classes/pictures.php";
require_once "classes/paginator.php";
require_once $config_abs_path."/libs/JSON.php";
require_once $config_abs_path."/classes/categories.php";

// you get here by browsing pages or refining the search

if($settings['enable_locations']) { 
	require_once $config_abs_path."/classes/locations.php";
	$lclass = new locations();
	$lclass->init();
}

global $seo_settings;
$has_search_fields = 0;
if($seo_settings['enable_mod_rewrite'] && $seo_settings['sef_legacy_mode']) {
	$has_search_fields = $seo->legacySearchParseParam($post_array);
	if(isset($post_array['page']) && $post_array['page']) $page = $post_array['page'];
}
else {

	foreach($_GET as $key=>$value) {

		// get & sign back
		$value = str_replace("||", "&", $value);

			switch($key) {

			case "search":
			case "Search":
			case "x":
			case "y":
				break;
			// quick search
			case "qs_".$keyword_name:
				if($value) $post_array[$keyword_name] = cleanSearchString($value);
  				$has_search_fields = 1;
				break;
			case "qs_category":
			case "qs_user_id":
			case "qs_price_low":
			case "qs_price_high":
				$key = substr($key, 3);
				if($value) $post_array[$key] = cleanSearchString($value);
  				$has_search_fields = 1;
				break;
			case "qs_currency":
			case "currency":
				$key = 'currency';
				$currency_val = cleanSearchString($value);
				if($value) $post_array[$key] = $currency_val;
  				$has_search_fields = 1;

				global $modules_array;
  				if(in_array("multicurrency", $modules_array)) {
					$mc = new multicurrency();
					$mc->setMulticurrencyCookie($value);
  				}
  				break;
			// refine search
			case $keyword_name:
				if($value) $post_array[$keyword_name] = cleanSearchString($value);
  				$has_search_fields = 1;
				break;
			case "category":// only when mod rewrite is not on
			case "user_id":
			case "price_low":
			case "price_high":
				if($value && is_numeric($value)) $post_array[$key] = $value;
  				$has_search_fields = 1;
				break;
			case "category_slug":
				$category = slugs::getCategoryId(escape($value));
				if($category) $post_array['category'] = $category;
				break;
			case "page":
				if($value && is_numeric($value)) $page = $value;
				break;
			case "order":
				if($value &&  in_array($value,$order1_array)) $post_array['order'] = $value;
  				$has_search_fields = 1;
				break;
			case "order_way":
				if($value &&  in_array($value,$order2_array)) $post_array['order_way'] = $value;
  				$has_search_fields = 1;
				break;
			case "with_pic":
				if($value==0 || $value==1) $post_array['with_pic'] = $value;
  				$has_search_fields = 1;
				break;
			case "with_auction":
				if($value==0 || $value==1) $post_array['with_auction'] = $value;
  				$has_search_fields = 1;
				break;
			case "show":
				if($value &&  in_array($value,$show_array)) $post_array['show'] = $value; else break;
				global $main_domain;
				$expire = time() + 60*60*24*365;
				setcookie('show', $post_array['show'], $expire, '/', ".".$main_domain);
  				$has_search_fields = 1;
				break;
			case "location":
				$post_array["location"] = str_replace("|", ", ", rawurldecode($value));
				break;
			default: 

  				$has_search_fields = 1;
				//$post_array[$key] = cleanSearchString($value);
				$post_array[$key] = ucfirst(cleanSearchString($value));

				// can only be set with refine search, only one at once
				if($settings['enable_locations'] && in_array($key, explode(",", $settings['location_fields']))) { 

					$lclass->setLocation($key, cleanSearchString($value));

				}

				break;

		} // end switch
	
	
	} // end foreach $_GET

} // end no legacy mode

// set $post_array['location']	
if($ads_settings['enable_location_autosuggest'] && (!isset($post_array['location']) || !$post_array['location'])) {
	$post_array['location'] = '';
	$loc_fields = explode(",", $ads_settings['location_fields']);
	$location_str = '';
	$k = 0;
	foreach($loc_fields as $l) {

		if(!isset($post_array[$l]) || !$post_array[$l]) continue;
		if($k) $post_array['location'].=", ";
		$post_array['location'].= $post_array[$l];
		$k++;

	}
}
	
if($seo_settings['enable_mod_rewrite'])
	$post_array['search_id'] = get_numeric('search_id', 0);

	
if(isset($post_array['search_id']) && $post_array['search_id']) {
	$sarray = $s->getSearch($post_array['search_id']);
	foreach($sarray as $key => $value) {
		$post_array[$key] = $value;
	}
}

//_print_r($post_array);

// set value for show page type
if( !$post_array['show'] && isset($_COOKIE['show']) && $_COOKIE['show'] && in_array($_COOKIE['show'], $show_array)) $post_array['show'] = $_COOKIE['show'];
if(!$post_array['show']) $post_array['show'] = $ads_settings['default_search_view']?"gallery":"list";

global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","listings");
$smarty->assign("crt_uri",$_SERVER['REQUEST_URI']);

do_action("search_init_template", array($smarty, &$post_array));

$groups_list = common::getCachedObject("base_short_groups");
$smarty->assign("groups_list",$groups_list);

global $is_mobile;
if($is_mobile) {
	global $mobile_settings;
	$ads_per_page=$mobile_settings["mobile_ads_per_page"];
} else {
	global $appearance_settings;
	$ads_per_page=$appearance_settings["ads_per_page"];
}

$listings=new listings();
if(!$page) $page=1;

if($post_array['category']) { 
	$cat = $post_array['category'];
	$smarty->assign("cat",$cat);
	//require_once $config_abs_path."/classes/categories.php";
	$categ = new categories();
	$cat_name = cleanStr(categories::getName($cat));
	
}
else { 
	$cat_name = '';
	$cat=0;
}
$smarty->assign("category_name",$cat_name);


if($cat) $fset = categories::getFieldset($cat);
else $fset = 0;

// fields list 
$base_refine_fields_list = common::getCachedObject("base_refine_fields_list", array("fieldset" => $fset));

// if a location field is set as a cookie, set it for $post_array
if($settings['enable_locations']) {
	$post_array = $lclass->checkPostArray($post_array);
}
$base_refine_fields=array();
$subcategories_array = array();
if(!$is_mobile) {

	// compile subcategories list
	global $short_categories;
	$subcategories_array = array();
	$i=0;
	$parent_id = 0;
	foreach($short_categories as $crt_cat) {
		if($crt_cat['id']==$cat) { $parent_id = $crt_cat['parent_id']; }
		if($crt_cat['parent_id']==$cat) {

			$subcategories_array[$i++] = $crt_cat;
			
			
			

		}
	}// end foreach $short_categories
	// move it below counting ads
	//$smarty->assign("categories_array",$subcategories_array);

	$cat_path ="";
	// category_path
	if($cat) {
		if($parent_id) $cat_path = $categ->catPath($parent_id,$cat_name);
		else $cat_path = $cat_name;
		$smarty->assign("category_path_text",$cat_path);
		
		$category_path = $categ->catPathArray($cat, array());
		$smarty->assign("category_path",$category_path);

	} // end if $cat


	$base_refine_fields = common::getCachedObject("base_refine_fields", array("fieldset" => $fset));

	//get values for next depending fields if one field is selected
	require_once $config_abs_path."/classes/fields.php";
	require_once $config_abs_path."/classes/depending_fields.php";
	$cf = new fields('cf');
	if($post_array && $base_refine_fields)
		$base_refine_fields = $cf->getSearchDepValues($base_refine_fields, $post_array);
	//_print_r($base_refine_fields);
	// move it below counting ads
	//$smarty->assign("fields", $base_refine_fields);

} // end if not mobile

// add subcategories list instead of just category for advanced search query
$post_array_sql = $post_array;

if($cat) {
	// subcategories list for search ads belonging to subcategories
	$s = "";
	$post_array_sql['category'] = $categ->subcatList($cat, $s);

}

// prepare for mysql
foreach($post_array_sql as $key=>$value) {
	$post_array_sql[$key] = escape($value);
}

$listings_array=$listings->getAdvSearch($post_array_sql, $page, $ads_per_page);
$no_listings = $listings->noListings();

if($ads_settings['count_refine_results']) {

// ---------------- count no ads for fields ------------------
$where = $listings->getWhere();
$join = '';
if(strstr($where, TABLE_USERS)) 
	$join = " inner join ".TABLE_USERS." on ".TABLE_ADS.".user_id=".TABLE_USERS.".id ";
if(strstr($where, TABLE_ADS_PICTURES))
	$join .= "inner join ".TABLE_ADS_PICTURES." on ".TABLE_ADS.".id=".TABLE_ADS_PICTURES.".ad_id ";
if(strstr($where, TABLE_CATEGORIES."_lang"))
	$join .= "inner join ".TABLE_CATEGORIES."_lang on ".TABLE_ADS.".category_id=".TABLE_CATEGORIES."_lang.id ";

$count_str="DISTINCT ".TABLE_ADS.".`id`";
//echo $where;
//_print_r($base_refine_fields);
$rf = 0;
global $languages_array;
foreach($base_refine_fields as $brf) {
	if($brf['type']=="menu" || $brf['type']=="radio") {
		$el=0;
		// check if not already set in $post_array
		//if(isset($post_array[$brf['caption']]) && $post_array[$brf['caption']]) { $rf++; continue; }

		$where_crt = ' where '.TABLE_ADS.'.active=1 ';
		$where_array = $listings->getWhereArray();
		
		if(isset($post_array[$brf['caption']]) && $post_array[$brf['caption']]) {

			$array_post_crt = explode("|", $post_array[$brf['caption']]);
		}
		foreach($where_array as $k=>$v)
			if($k!=$brf['caption']) $where_crt.=$v;

		foreach($brf['elements_array'] as $element) {
		
			$all_str="";
			if(isset($element['all_val']) && $element['all_val']==1) $all_str=" or ".TABLE_ADS.".`{$brf['caption']}` like 'all'";

			$where_field='';
			$elements = $db->fetchAssocList("select `lang_id`, `elements` from ".TABLE_FIELDS."_lang where `id`='{$brf['id']}'");
					
			// find the element number $el for all languages
			foreach($elements as $l) {
				if(!in_array($l['lang_id'], $languages_array)) continue;
				
				$elements_array = explode("|", $l['elements']);
				if(isset($elements_array[$el]) && $elements_array[$el]) {
					if($where_field) $where_field.=" or ";
					$where_field.=" `{$brf['caption']}` like '".escape($elements_array[$el])."' ";
				}
			}
			$count = $db->fetchRow("select count($count_str) from ".TABLE_ADS." ".$join.$where_crt." and (".$where_field.$all_str.")");
			$base_refine_fields[$rf]['count_elements_array'][$el]=$count;
			
			$el++;
		}
	}
	if($brf['type']=="textbox" && $brf['is_numeric']==1 && $brf['search_type']==2) {
		$el=0;

		// check if not already set in $post_array
		if(isset($post_array[$brf['caption']]) && $post_array[$brf['caption']]) { $rf++; continue; }
		if(isset($brf['search_elements_array']) && $brf['search_elements_array']) {
		foreach($brf['search_elements_array'] as $element) {
			$count = $db->fetchRow("select count($count_str) from ".TABLE_ADS." ".$join.$where." and (`{$brf['caption']}` like '".escape($element)."' )");
			$base_refine_fields[$rf]['count_elements_array'][$el]=$count;
			
			$el++;
		}
 		}
		
	}
	if($brf['type']=="depending") {
		$el=0;
		$el_no=0;
		if(isset($brf['depending']['elements2']) && $brf['depending']['elements2']) { $el_no='2'; $el_field=$brf['depending']['caption2']; }
		if(isset($brf['depending']['elements3']) && $brf['depending']['elements3']) { $el_no='3'; $el_field=$brf['depending']['caption3']; }
		if(isset($brf['depending']['elements4']) && $brf['depending']['elements4']) { $el_no='4'; $el_field=$brf['depending']['caption4']; }
		if(isset($brf['depending']['elements5']) && $brf['depending']['elements5']) { $el_no='5'; $el_field=$brf['depending']['caption5']; }
		if(!$el_no) { $el_no=''; $el_field=$brf['depending']['caption1'];  }
		
		$all_str="";
		if($brf['all_val']==1) $all_str=" or ".TABLE_ADS.".`$el_field` like 'all'";
		
		if(isset($post_array[$el_field]) && $post_array[$el_field]) {
			$where_array = $listings->getWhereArray();
			$where_crt = ' where '.TABLE_ADS.'.active=1 ';
			foreach($where_array as $k=>$v)
				if($k!=$el_field) $where_crt.=$v;
		}

		global $crt_lang;
		$translate=0;
		if(count($languages_array)>1) {
			$translate=1;
			$languages_array_additional = array();
			$ind = 0;

			foreach($languages_array as $lnga) {
				if($lnga!=$crt_lang) $languages_array_additional[$ind++] = $lnga;
			}

		}
		$df = new depending_fields();
		//_print_r($base_refine_fields[$rf]['depending']);
		foreach($base_refine_fields[$rf]['depending']['elements'.$el_no] as $element) {

			$str_translated = "";
			foreach($languages_array_additional as $lnga) {
				$translated = $df->translateField( $base_refine_fields[$rf]['depending']['id'], $el_field, $crt_lang, $lnga, $element['name'] );
				$str_translated .= "or ".TABLE_ADS.".`{$el_field}` like '".escape($translated)."'";
			}	
		
			if(isset($post_array[$el_field]) && $post_array[$el_field]) {
				$count = $db->fetchRow("select count($count_str) from ".TABLE_ADS." ".$join.$where_crt." and (".TABLE_ADS.".`{$el_field}` like '".escape($element['name'])."' $all_str $str_translated)");
				//echo "select count($count_str) from ".TABLE_ADS." ".$join.$where_crt." and (".TABLE_ADS.".`{$el_field}` like '".escape($element['name'])."' $all_str $str_translated)";
			} else {
				$count = $db->fetchRow("select count($count_str) from ".TABLE_ADS." ".$join.$where." and (".TABLE_ADS.".`{$el_field}` like '".escape($element['name'])."' $all_str $str_translated)");
				//echo "select count($count_str) from ".TABLE_ADS." ".$join.$where." and (".TABLE_ADS.".`{$el_field}` like '".escape($element['name'])."' $all_str $str_translated)<br/>";
			}

			$base_refine_fields[$rf]['depending']['elements'.$el_no][$el]['count']=$count;
			
			$el++;
		}
		
	}
	$rf++;
}
//_print_r($base_refine_fields);
//_print_r($post_array);
$i=0;
$categ = new categories();
foreach($subcategories_array as $scat) {
	$s = "";
	$subcat_list = $categ->subcatList($scat['id'], $s);
	$count = $db->fetchRow("select count($count_str) from ".TABLE_ADS." ".$join.$where." and `category_id` in ({$subcat_list})");
	$subcategories_array[$i]['count'] = $count;
	$i++;
}

} // end if count ads

$smarty->assign("fields", $base_refine_fields);
$smarty->assign("categories_array",$subcategories_array);

// ---------------- end count no ads for fields ------------------

//_print_r($listings_array);
// ---------- randomize prioritized ads -----------
if($ads_settings['random_priorities']) {
	// get number of priority ads
	$no_prioritized = 0;
	$start_prioritized = 0;
	$pos=0;
	foreach($listings_array as $l) {
		if($l['priority'] && $l['priority']!=100) { // not bumped ads 
			if(!$start_prioritized) $start_prioritized = $pos;
			$no_prioritized++; 
		} 
		$pos++;
	}

	if(($pos!=$ads_per_page && $pos!=$no_listings) && $no_prioritized) {
		// get subarray of prioritized ads
		$prioritized = array_slice($listings_array, $start_prioritized, $no_prioritized);

		// shuffle order for prioritized ads
		$numbers = range(0, $no_prioritized-1);
		shuffle($numbers);
		//$i = 0;
		foreach($numbers as $j) {
			$listings_array[$start_prioritized] = $prioritized[$j];
			$start_prioritized++;
		}
	}
}
// ---------- end randomize prioritized ads -----------
$smarty->assign("listings_array",$listings_array);
$smarty->assign("no_listings",$no_listings);

// allow only a limited number of pages to display
$new_page = checkPageNo($page, $ads_per_page);
$info = '';
if($new_page<$page) {
	$page = $new_page;
	$info = $lng['search']['high_no_results'];
}
$smarty->assign("info", $info);

$paginator = new paginator($ads_per_page);
$paginator->setItemsNo($no_listings);
$paginator->paginate($smarty);

// set meta info 
// after cofiguring location filter and after setting the current page
$seo->setMetaInfo($self_noext, $smarty);

// if no search result mark page as noindex, nofollow
global $page_info;
$noindex=0;
if($page_info["noindex"]==1) $noindex=1;
if($page_info["noindex"]==2 && !$no_listings) $noindex=1;
$smarty->assign("noindex", $noindex);

// do actions for "search_meta", after setMetaInfo !
do_action("search_meta", array($smarty, $post_array));

$smarty->assign("post_array",$post_array);
$smarty->assign("has_search_fields",$has_search_fields);

// save search & email alerts

if($ads_settings['alerts_enabled'] || $ads_settings['saved_searches_enabled']) {

	$post_clear = array();
	foreach($post_array as $key => $value) {
		if($value=='') continue;
		if($key=="page" || $key=="order_way" || $key=="order" || $key=="show") continue;
		$post_clear[$key] = base64_encode($value);
	}

	$post_json = "";
	if($post_clear) {
		$post_json = json_encode($post_clear);
	}
	$smarty->assign("post_json",$post_json);
}

// email alerts
if($ads_settings['alerts_enabled']) {

	require_once "classes/alerts.php";
	require_once "classes/categories.php";
	$str_search = "";
	$alerts = new alerts();
	$str_search = $alerts->makeSearchString($post_array);
	$smarty->assign("str_search",$str_search);
	
}

// if search maps enabled
if(!$is_mobile && $ads_settings['enable_map_search']) {
	$gmap_field = common::getCachedObject("base_gmap_fields", array("fieldset" => $fset));
	$smarty->assign("gmap_field",$gmap_field);
}

// do search actions
// not sql escaped array
do_action("search1", array($smarty, $post_array));
do_action("listings_page", array($smarty));

if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }
$smarty->display('listings.html');

$db->close();
close();
?>
