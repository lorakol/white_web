<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class multicurrency {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."multicurrency";

	}

	function initTemplatesVals($smarty) {

	}

	function getSettings() {

		global $db;
		$mc_settings = $db->fetchAssocList("select * from ".$this->settings_table);
		return $mc_settings;

	}

	function saveSettings() {

		global $config_demo, $lng;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $languages;
		$str_update = "";
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['disclaimer_'.$lang_id]) && $_POST['disclaimer_'.$lang_id]) $this->tmp['disclaimer_'.$lang_id]=escape($_POST['disclaimer_'.$lang_id]); else $this->tmp['disclaimer_'.$lang_id]='';
			
			$str_update.=" `disclaimer_$lang_id` = '".$this->tmp['disclaimer_'.$lang_id]."', ";
		}

		if(isset($_POST['categories'])) {
			$this->clean['categories_list'] = clean($_POST['categories']);
			$str_update.=" `categories_list` = '".$this->clean['categories_list']."'";
		}

		if(isset($_POST['cookie_availability']) && is_numeric($_POST['cookie_availability'])) $this->clean['cookie_availability'] = $_POST['cookie_availability']; else $this->clean['cookie_availability'] =30;
		$str_update.=", `cookie_availability`= '{$this->clean['cookie_availability']}'";

		$db->query("update `".$this->settings_table."` set $str_update");

		return 1;
	}


	function getError() {
	
		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str;

	}

	function setError($str) {

		$this->error=$str;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function autoCheck() {

		global $currencies, $db;
		
		$default_curency = $this->getDefault();
		$default=0;

		foreach($currencies as $c) {

			$exists = $db->fetchRow("select currency from `".$this->settings_table."` where `currency` like '{$c['currency']}'");
			if(!$exists) {
				if(!$default_curency) { 
					$default=1;
					$default_curency = $c['currency'];
				}
				$db->query("insert into `".$this->settings_table."` set `currency` = '{$c['currency']}', `ratio`=1, `default`='$default'");
				$default=0;

			}

		}

	}

	function getDefault() {

		global $db;
		$default = $db->fetchRow("select `currency` from `".$this->settings_table."` where `default`=1");
		return $default;

	}

	function setDefault($id) {

		global $db;
		$db->query("update `".$this->settings_table."` set `default`=0");
		$db->query("update `".$this->settings_table."` set `default`=1, `ratio`=1 where `id` = '$id'");

	}

	function saveRatio() {

		$id = escape($_POST['id']);
		global $db;
		$ratio = escape($_POST['ratio']);
		if(!is_numeric($ratio)) $ratio=1;
		$db->query("update `".$this->settings_table."` set `ratio` = '$ratio' where id='$id'");

	}

	function getRatio($currency) {

		global $db;
		$ratio = $db->fetchRow("select `ratio` from `".$this->settings_table."` where currency like '$currency'");
		return $ratio;

	}

	function getRatios() {

		global $db;
		$result = $db->fetchAssocList("select `currency`, `ratio` from `".$this->settings_table."`");
		$ratio_array = array();
		foreach($result as $r) {
			$ratio_array[$r['currency']] = $r['ratio'];
		}
		return $ratio_array;

	}
	
	function setUnitPrice($ad_id) {

		global $db;
		$arr = $db->fetchAssoc("select `price`, `currency` from ".TABLE_ADS." where id='$ad_id'");
		$price = $arr['price'];
		$currency = $arr['currency'];

		$default = $this->getDefault();
		if(!$default) return;

		if($price==-1 || $price==0 || $currency==$default) 
			$unit_price = $price;
		else {

			$ratio = $this->getRatio($currency);
			if(!$ratio) return;
			$unit_price = $price*$ratio;

		}

		$db->query("update ".TABLE_ADS." set `unit_price`='$unit_price' where id='$ad_id'");

	}

	function recalculatePrices() {

		$default = $this->getDefault();
		if(!$default) return;

		$ratio_array = $this->getRatios();

		global $db;
		$result = $db->query("select `id`, `price`, `currency` from ".TABLE_ADS);
		while($row = $db->fetchAssocRes($result)) {

			$ad_id = $row['id'];
			$price = $row['price'];
			$currency = $row['currency'];

			if($price==-1 || $price==0 || $currency==$default) 
				$unit_price = $price;
			else {

				$ratio = $ratio_array[$currency];
				if(!$ratio) continue;
				$unit_price = $price*$ratio;

			}

			$db->query("update ".TABLE_ADS." set `unit_price`='$unit_price' where id='$ad_id'");

		}// end while row

		// change auctions price
		$result = $db->query("select `id`, `starting_price`, `currency` from ".TABLE_AUCTIONS);
		while($row = $db->fetchAssocRes($result)) {

			$ac_id = $row['id'];
			$price = $row['starting_price'];
			$currency = $row['currency'];

			if($price==0 || $currency==$default) 
				$unit_price = $price;
			else {

				$ratio = $ratio_array[$currency];
				if(!$ratio) continue;
				$unit_price = $price*$ratio;

			}

			$db->query("update ".TABLE_AUCTIONS." set `unit_starting_price`='$unit_price' where id='$ac_id'");

		}// end while row

	}

	function setMulticurrencyCookie($currency) {

		global $main_domain;
		// remove cookie
		unset($_COOKIE['mc_currency']);
		setcookie ('mc_currency', $currency, time() + 25920000, "/", ".".$main_domain); // 30 days

	}

	function getCrtCurrency() {
	
		if(!isset($_COOKIE['mc_currency'])) {

			$default_currency = $this->getDefault();
		
		}
		else {
	
			$default_currency = rawurldecode($_COOKIE['mc_currency']);
	
		}	
		return $default_currency;
	
	}
	
}
?>
