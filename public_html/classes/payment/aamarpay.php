<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class aamarpay {

	var $post;
	var $user_key;
	var $aamarpay_keys;
	var $pending;
	var $invoice_no;
	var $pay_settings;
	var $table;
	var $error;
	var $tmp;
	var $formTitle;
	var $name;

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'aamarpay'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];
		$this->name = "aamarpay";

		//$this->table = $this->getTable();

	}

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'aamarpay'");
		return $table;
	}

	function setTable($table) {

		$this->table = $table;
	
	}

	function init($key = '') {

		global $config_live_site;
		$this->pending = 0;
		if($key) $this->user_key = $key;
		else $this->user_key = isset($_GET['ukey'])?$_GET['ukey']:md5(uniqid(rand(), true));
		$this->postback_url = $config_live_site."/payment_return/aamarpay.php";

		$this->pay_settings = $this->getSettings();
		//$this->pending = $this->pay_settings['pending'];

		$this->post['store_id'] = $this->pay_settings["store_id"];
		$this->post['signature_key'] = $this->pay_settings["signature_key"];
		$this->post['currency'] = $this->pay_settings["currency"];
		$this->post['desc'] = $this->pay_settings["desc"];
		$this->setDemo($this->pay_settings["test"]);
		
		$this->post['cus_name'] = 'Name';
		$this->post['cus_email'] = 'Email';
		$this->post['cus_add1'] = 'Address';
		$this->post['cus_city'] = 'City';
		$this->post['cus_state'] = 'State';
		$this->post['cus_postcode'] = 'Postcode';
		$this->post['cus_country'] = 'Country';
		$this->post['cus_phone'] = 'Phone';
		

		$this->post['success_url'] = $this->postback_url.'?mode=process&ukey='.$this->user_key;
		$this->post['fail_url'] = $this->postback_url.'?mode=cancel&ukey='.$this->user_key;
		$this->post['cancel_url'] = $this->postback_url.'?mode=cancel&ukey='.$this->user_key;
		$this->post['ipn_url'] = $this->postback_url.'?mode=process&ukey='.$this->user_key;
		
		$this->aamarpay_keys = array("pay_status", "status_code", "pg_txnid", "amount",
			       "mer_txnid", "merchant_id", "store_id", "currency", "currency_merchant",
			       "convertion_rate", "store_amount", "pay_time", "bank_txn",
			       "card_number", "card_holder", "card_type", "ip_address", "reason",
			       "other_currency", "success_url", "fail_url", "pg_service_charge_bdt",
			       "pg_service_charge_usd", "pg_card_bank_name", "pg_card_bank_country", "risk_level",
			       "pg_error_code_details");

	}

	function getUserKey() {

		return $this->user_key;

	}

	function getPost() {

		return $this->post;

	}

	function setDebug($val) {

		$this->debug = $val;

	}

	function setFormTitle($val) {

		$this->formTitle = $val;

	}

	function setInvoiceNo($val) {

		$this->invoice_no = $val;
		$this->post['tran_id'] = $val;
		
		// if user_id
		global $db;
		$res = $db->fetchAssoc("select `user_id`, `action` from ".TABLE_PAYMENT_ACTIONS." where id='$val'");
		if($res['user_id']) {
			$user_id = $res['user_id'];
			
			global $db;
			global $settings;
			$name_field = $settings['contact_name_field'];
			$name = $db->fetchRow("select `$name_field` from ".TABLE_USERS." where id='$user_id'");
			if($name) $this->post['cus_name'] = $name;
			
			$email_field = "email";
			$email = $db->fetchRow("select `$email_field` from ".TABLE_USERS." where id='$user_id'");
			if($email) $this->post['cus_email'] = $email;
			
			$phone_field = $this->pay_settings["phone_field"];
			$phone = $db->fetchRow("select `$phone_field` from ".TABLE_USERS." where id='$user_id'");
			if($phone) $this->post['cus_phone'] = $phone;
			
			$address_field = $this->pay_settings["address_field"];
			$address = $db->fetchRow("select `$address_field` from ".TABLE_USERS." where id='$user_id'");
			if($address) $this->post['cus_add1'] = $address;

			$city_field = $this->pay_settings["city_field"];
			$city = $db->fetchRow("select `$city_field` from ".TABLE_USERS." where id='$user_id'");
			if($city) $this->post['cus_city'] = $city;

			$state_field = $this->pay_settings["state_field"];
			$state = $db->fetchRow("select `$state_field` from ".TABLE_USERS." where id='$user_id'");
			if($state) $this->post['cus_state'] = $state;

			$postcode_field = $this->pay_settings["postcode_field"];
			$postcode = $db->fetchRow("select `$postcode_field` from ".TABLE_USERS." where id='$user_id'");
			if($postcode) $this->post['cus_postcode'] = $postcode;

			$country_field = $this->pay_settings["country_field"];
			$country = $db->fetchRow("select `$country_field` from ".TABLE_USERS." where id='$user_id'");
			if($country) $this->post['cus_country'] = $country;
			
		
		}
		else {
		// if no user
		
			$action = unserialize($res['action']);
			if(isset($action['ad_id']) && $action['ad_id']) {
				
				$action_id = $action['ad_id'];
				
				global $db;
				$name_field = "mgm_name";
				$name = $db->fetchRow("select `$name_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($name) $this->post['cus_name'] = $name;
			
				$email_field = "mgm_email";
				$email = $db->fetchRow("select `$email_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($email) $this->post['cus_email'] = $email;
				
				$phone_field = $this->pay_settings["nologin_phone_field"];
				$phone = $db->fetchRow("select `$phone_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($phone) $this->post['cus_phone'] = $phone;
			
				$address_field = $this->pay_settings["nologin_address_field"];
				$address = $db->fetchRow("select `$address_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($address) $this->post['cus_add1'] = $address;

				$city_field = $this->pay_settings["nologin_city_field"];
				$city = $db->fetchRow("select `$city_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($city) $this->post['cus_city'] = $city;

				$state_field = $this->pay_settings["nologin_state_field"];
				$state = $db->fetchRow("select `$state_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($state) $this->post['cus_state'] = $state;

				$postcode_field = $this->pay_settings["nologin_postcode_field"];
				$postcode = $db->fetchRow("select `$postcode_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($postcode) $this->post['cus_postcode'] = $postcode;

				$country_field = $this->pay_settings["nologin_country_field"];
				$country = $db->fetchRow("select `$country_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($country) $this->post['cus_country'] = $country;
				
			}
		
		} // end if no user

	}

	function setPostBack($str) {

		$this->postback_url = $str;

	}

	function setAmount($str) {

		$amount = number_format($str, 2, '.', '');
		$this->post['amount'] = $amount;
		$this->amount = $amount;

	}

	function setCurrency($str) {

		$this->post['currency'] = $str;

	}

	function setDesc($str) {

		$this->post['desc'] = $str;

	}

	function setDemo($value) {

		if($value==1) $this->aamarpay_url = 'https://www.sandbox.aamarpay.com/request.php';
		else $this->aamarpay_url = 'https://secure.aamarpay.com/request.php';
		return 1;

	}

	function setPending($val) {

		$this->pending = $val;

	}

	function getPending() {

		return $this->pending;

	}

	function getSettings() {

		global $db;
		$result = $db->fetchAssoc("select * from ".$this->table);
		return $result;

	}

	function getForm()
	{
		global $lng;

		$fields_string = '';
		foreach($this->post as $key => $val) 
		{
			$fields_string .= $key."=".urlencode($val)."&";
		}
		$fields_string = rtrim($fields_string, "&");

		$url = $this->aamarpay_url."?".$fields_string;
		
		$this->log("aamarPay URL: ".$url);
		
		$ch = curl_init();
		
		$domain = $_SERVER["SERVER_NAME"];
		$ip = $_SERVER["SERVER_ADDR"];

		//set the url, number of POST vars, POST data
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip", "HTTP_X_FORWARDED_FOR:$ip"));
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_REFERER, $domain);
		curl_setopt($ch, CURLOPT_INTERFACE, $ip);
		curl_setopt($ch, CURLOPT_POST, count($this->post));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//execute post
		$result = curl_exec($ch);
		//print_r($result);
		$url_forward = json_decode($result, true);
		
		$this->log("aamarPay Forward URL (json): ".$result);		
		
		//close connection
		curl_close($ch);
		
		$redirect_url_final="http://secure.aamarpay.com/".$url_forward;
		
		$form='<form name="payment_form" id="payment_form" method="post" action="'.$redirect_url_final.'"></form>';
		
		return $form;

	}

	function process()
	{

		//pg_txnid ??

		$this->log("IPN response: ".json_encode($_POST));
		$this->log("Remote address: ".getRemoteIp());
		
		$success = 0;
		if($_POST['pay_status']!="Successful") {
			$this->log("ERROR: Payment failed!");
			return 0;
		}
		
		// check store_id
		if($_POST['store_id']!=$this->pay_settings["store_id"]) {
			$this->log("ERROR: Store id does not match!");
			return 0;
		}
		
		global $db;
		$res_ad = $db->query("select amount from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		if(!$db->numRows($res_ad)) return 0;
		$am = $db->fetchRow();
		// format so there are not more than 2 decimals
		$amount = number_format($am, 2, '.', '');
		
		// check amount
		if($_POST['amount'] != $amount || $_POST['currency']!=$this->pay_settings["currency"]) {
			$this->log("ERROR: Amount does not match! ".$_POST['amount']." <> ".$amount." or  ".$_POST['currency']." !=".$this->pay_settings["currency"]);
			return 0;
		}
		
		$success = $this->saveToDB();
		if(!$success) $this->log("saveToDB: ERROR: Cannot save to db!");

		$this->logIt($success);

		return 1;
	}
	
	function saveToDB()
	{

		global $db;
		$addtosql = '';
		$entirepost = '';

		foreach($_POST as $key => $val) 
		{
			if(in_array($key, $this->aamarpay_keys)) 
			{
				$addtosql .= $key."='".$val."',";
			}
			$entirepost .= "[".$key."]=\'".$val."\',";
		}
		$addtosql = rtrim($addtosql,','); 

		$res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET completed='1' where ukey='".$this->user_key."'");

		$timestamp = date("Y-m-d H:i:s");
		$res = $db->query("INSERT INTO ".$this->ret_table." SET date='$timestamp', entirepost='".$entirepost."', ".$addtosql.",ukey='".$this->user_key."'");

		return 1;

	}

	function logIt($success)
	{
		if(!$this->debug) return;
		// Generate content
		$content = "-----------------------------------\n".date("r")."\n";
		$content .= "LOCAL POST:\n";
		foreach($this->post as $key => $val)
		{
			$content .= $key."=".$val."\n";
		}
		$content .= "\nRECEIVED POST:\n";

		foreach($_POST as $key => $val)
		{
			$content .= $key."=".$val."\n";
		}
		$content .= "-----------------------------------\n";

		// Create File
		global $config_abs_path;
		$file = $config_abs_path."/log/aamarpay_transaction";
		if(!$success) $file = $config_abs_path."/log/aamarpay_error";

		$handle = fopen($file, "a");
		fwrite($handle, $content);
		fclose($handle);
	}

	function log($msg)
	{
		if(!$this->debug) return;

		$content = "-----------------------------------\n".date("r")."\n";
		$content .= $msg."\n";
		$content .= "-----------------------------------\n";

		global $config_abs_path;
		$file = $config_abs_path."/log/aamarpay_debug";

		$handle = fopen($file, "a");
		fwrite($handle, $content);
		fclose($handle);
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

	function check_form() {

		global $lng;

		if(!isset($_POST["store_id"]) || !$_POST["store_id"]) $this->addError('Please enter the Store id!<br />');
		if(!isset($_POST["signature_key"]) || !$_POST["signature_key"]) $this->addError('Please enter the Signature key!<br />');
		if((!isset($_POST["currency"]) || !$_POST["currency"])) $this->addError('Please select a currency!<br />');
		if((!isset($_POST["desc"]) || !$_POST["desc"])) $this->addError('Please configure a description for the payment!<br />');

		if($this->getError()!='') {

			if($_POST['test']=="on") $this->tmp['test'] = 1; else $this->tmp['test'] = 0;

			$array_fields = array( "store_id", "signature_key", "desc", "currency", "phone_field", "address_field", "city_field", "state_field", "postcode_field", "country_field", "nologin_phone_field", "nologin_address_field", "nologin_city_field", "nologin_state_field", "nologin_postcode_field", "nologin_country_field" );

			foreach ($array_fields as $field) {
				if(isset($_POST[$field])) $this->tmp[$field] = cleanStr($_POST[$field]);
			}
			
		}

	}

	function saveSettings() {

		global $lng;
		$this->error='';
		$this->tmp=array();

		$this->clean=array();
		$this->check_form();
		if($this->getError()!='') return 0;

		global $config_demo;
		if($config_demo==1) $this->addError($lng['general']['errors']['demo'].'<br />');
		
		global $db;
		$this->clean['test'] = checkbox_value("test");	
		$sql = "update ".$this->table." set test = ".$this->clean['test'];

		$array_fields = array( "store_id", "signature_key", "desc", "currency", "phone_field", "address_field", "city_field", "state_field", "postcode_field", "country_field", "nologin_phone_field", "nologin_address_field", "nologin_city_field", "nologin_state_field", "nologin_postcode_field", "nologin_country_field" );

		foreach ($array_fields as $field) {

			if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]); else $this->clean[$field] = '';

			$sql.=", `$field` = '".$this->clean[$field]."'";

		}

		$db->query($sql);
		return 1;
	}

	function correctSettings() {
		
		global $lng;
		$array_settings = $this->getSettings();
		if(!$array_settings['store_id'] || !$array_settings['signature_key'] || !$array_settings['desc']) {
			$this->setError($lng['settings']['errors']['aamarpay_settings_missing']);
			return 0;
		}
		return 1;
	}

}
?>
