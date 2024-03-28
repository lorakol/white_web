<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "include/include.php";
global $appearance_settings;
header("Content-Type: application/atom+xml; charset=".$appearance_settings['charset']);
global $config_abs_path;
require_once($config_abs_path.'/classes/rss.php');
require_once($config_abs_path.'/classes/pictures.php');
global $config_live_site;

$rss = new rss();
$no_rss = $rss->noRss();
if(!$no_rss) exit(0);
if($no_rss == 1) $id = $rss->getFirst();
else $id = get_numeric_only("id");

global $appearance_settings, $seo_settings, $settings;

$feed = $rss->getRssFeed($id);
$items = array();

$mod_rewrite = $seo_settings['enable_mod_rewrite'];
if($mod_rewrite) $seo = new seo();
$i=0;

if($feed['type'] == 1) { // listings type

$condition = $rss->makeListingsCondition($feed['parameters']);
$order_by = "order by date_updated";
$order_way = "desc";

$listings = new listings();
// $condition is a where string
$listings_array = $listings->getShortListings($condition,$order_by,$order_way,0,$feed['no_items']);

//generate for each listing 
foreach ($listings_array as $listing)
{

	if($mod_rewrite)
		$item['link'] = $seo->makeDetailsLink($listing['id'], $listing['title']);
	else 
		$item['link'] = $config_live_site."/details.php?id=".$listing['id'];

	$item['guid'] = $item['link'];

	$item['title'] = rss::well_formed($listing['title']);
	$item['content'] ="";
	if($listing['image']) $item['content'].="<a href=\"".$item['link']."\"><img src=\"$config_live_site/".$listing['image']."\" align=\"left\" style='margin: 0 5px 5px 0;' border=\"0\"></a>";
	global $config_db_charset;
	if($config_db_charset=="utf8" && function_exists('mb_substr')) {
		// use mb_substr() if possible to cut the string correctly when multibyte characters
		$item['description'] = rss::well_formed(mb_substr($listing['description'],0,300,$appearance_settings['charset'])).'[...]';
	}
	else {
		$item['description'] = rss::well_formed(substr($listing['description'],0,300)).'[...]';
	}
	$item['content'] .= rss::well_formed($listing['description']);
	if($listing['price']>0) $item['content'].="<br/><font color='#76a03a'>{$listing['price_curr']}</font>";

	// contact name, if $include_user_info is set to 1
	if(isset($listing['user'])) { 
	    $contact_name = $listing['user'][$settings['contact_name_field']];
	    if($listing['user']['store']==1) {
	      if($mod_rewrite) $usr_link = $seo->makeDealerLink($listing['user_id'], $contact_name);
	      else $usr_link = $config_live_site."/store.php?id=".$listing['user_id'];
	    }
	    else {
	      if($mod_rewrite) $usr_link = $seo->makeUserListingsLink($listing['user_id'], $contact_name);
	      else $usr_link = $config_live_site."/user_listings.php?id=".$listing['user_id'];
	    }
	    
	    $item['content'] .= "<br/><a href=\"".$usr_link."\" >".$contact_name."</a>";
	}

	$timestamp = strtotime($listing['date_updated']);
	$item['date'] = date("r", $timestamp);
	
	$items[$i] = $item;
	$i++;
}

} // end if listings type
else // if users type
{

$condition = $rss->makeUsersCondition($feed['parameters']);
$order_by = $rss->getOrderBy($feed['parameters']);
$order_way = $rss->getOrderWay($feed['parameters']);

require_once($config_abs_path.'/classes/users.php');
require_once($config_abs_path.'/classes/fields.php');

$usr = new users;
$fields = new fields("uf");
$users_array = $usr->getUsers($condition, 1,$feed['no_items'],$order_by,$order_way);

//generate for each listing 
foreach ($users_array as $user)
{

	$contact_name = $user[$settings['contact_name_field']];
	if($user['store']==1) {
	  if($mod_rewrite) $item['link'] = $seo->makeDealerLink($user['id'], $contact_name);
	  else $item['link'] = $config_live_site."/store.php?id=".$user['id'];
	}
	else {
	      if($mod_rewrite) $item['link'] = $seo->makeUserListingsLink($user['id'], $contact_name);
	      else $item['link'] = $config_live_site."/user_listings.php?id=".$user['id'];
	}

	$item['guid'] = $item['link'];

	$item['title'] = rss::well_formed($contact_name);
	
	$item['content'] ="";

	if($feed['logo_field'] && $user[$feed['logo_field']]) $item['content'].="<a href=\"".$item['link']."\"><img src=\"$config_live_site/uploads/".$feed['logo_field']."/".$user[$feed['logo_field']]."\" align=\"left\" style='margin: 0 5px 5px 0;' border=\"0\"></a>";
	
	$item['description'] = '';
	$fields_array = explode(",", $feed['show_fields']);
	foreach($fields_array as $f) {

		if($user[$f]) { 
			$line = $fields->getNameByCaption($f).": ";
			$line.=$user[$f];
			$item['content'] .= rss::well_formed($line)."<br/>";
		}
	
	}

	$timestamp = strtotime($user['registration_date']);
	$item['date'] = date("r", $timestamp);
	
	$items[$i] = $item;
	$i++;
}

} // end if users type

$rss->generateFeed($feed, $items);


?>
