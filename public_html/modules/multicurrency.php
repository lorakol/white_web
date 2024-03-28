<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!isset($modules_array) || !in_array("multicurrency", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/multicurrency/classes/multicurrency.php";

function multicurrencyInitTemplate($smarty) {

	global $smarty;
	$mc = new multicurrency();
	$mc_default_currency = $mc->getDefault();
	$smarty->assign("mc_default_currency", $mc_default_currency);
	
}

function calculateUnitPrice($ad_id) {

	$mc = new multicurrency();
	$mc->setUnitPrice($ad_id);

}

function alterSortColumn(&$order_by, &$order_way) {

	//if price column 
	if( strstr($order_by, "price") )  {

		$order_by = str_replace("price", "unit_price", $order_by);

	}

}

function transformPrices(&$result) {

	$mc = new multicurrency();
	$ratios = $mc->getRatios();
	
	$mc_default_currency = $mc->getDefault();

	global $post_array;
	if(isset($post_array['currency']) && $post_array['currency']) {
		$crt_currency = $post_array['currency'];
		foreach($ratios as $key=>$value) 
		    if(strtolower($key)==strtolower($crt_currency)) $crt_currency = $key;
		$mc->setMulticurrencyCookie($crt_currency);
	}
	else 
		$crt_currency = $mc_default_currency;

	$mc_default_ratio = $ratios[$crt_currency];

	// recalculate ratios if not default currency
	if($crt_currency != $mc_default_currency) {

		foreach($ratios as $key=>$value) {

			if($key==$crt_currency) $ratios[$key] = 1;
			else {

				$ratios[$key] = $ratios[$key]/$mc_default_ratio;

			}

		}

	} // end recalculate ratios

	$i = 0;
	foreach($result as $res) {

		if( $res['price']>0 && $res['currency'] && $res['currency']!=$crt_currency) {

			$result[$i]['price'] = $res['price']*$ratios[$res['currency']];

			$result[$i]['currency'] = $crt_currency;
			$result[$i]['price_curr'] = add_currency(format_price_field($result[$i]['price']), $crt_currency);

		}

		if( $res['price']==0 && $res['currency']!=$crt_currency) {

			$result[$i]['price_curr'] = add_currency(format_price_field(0), $crt_currency);

		}

		$i++;

	}

}

function changeCurrencies($smarty) {

	$mc = new multicurrency();
	$default_currency = $mc->getCrtCurrency();
	$smarty->assign("mc_default_currency", $default_currency);

}


function transformListingPrice(&$listing_array) {

	if(!isset($listing_array['price']) || $listing_array['price']==-1) return;
	if(!isset($listing_array['currency']) || !$listing_array['currency']) return;

	$mc = new multicurrency();
	$crt_currency = $mc->getCrtCurrency();

	$mc_default_currency = $mc->getDefault();
	$ratios = $mc->getRatios();
	$default_listing_price = $listing_array['price'];
	$default_listing_currency = $listing_array['currency'];
	
	if($crt_currency != $default_listing_currency) {

		$listing_array['price'] = $listing_array['unit_price']/$ratios[$crt_currency];

		$listing_array['currency'] = $crt_currency;
		$listing_array['price_curr'] = add_currency(format_price_field($listing_array['price']), $listing_array['currency']);
		
		$listing_array['price'] = format_price_field($listing_array['price']);
		
	}
	
	foreach ($ratios as $curr => $ratio) {
	
		if($curr==$default_listing_currency) 
			$listing_array['mc'][$curr] = add_currency($default_listing_price, $curr);
		else
			$listing_array['mc'][$curr] = add_currency(format_price_field($listing_array['unit_price']/$ratio), $curr);
	
	}
	//_print_r($listing_array['mc']);
	
}

add_action('end_post_ad', 'calculateUnitPrice');
add_action('end_edit_ad', 'calculateUnitPrice');
add_action('search_listing_order', 'alterSortColumn');
add_action('short_listings_result', 'transformPrices');
add_action('listings_page', 'changeCurrencies');
add_action('listing_result', 'transformListingPrice');
add_action('init_template', 'multicurrencyInitTemplate');
?>