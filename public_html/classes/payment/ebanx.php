<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class ebanx {

	var $post;
	var $user_key;
	var $ebanx_keys;
	var $pending;
	var $invoice_no;
	var $pay_settings;
	var $table;
	var $error;
	var $tmp;
	var $formTitle;
	var $name;
	var $return_keys;

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'ebanx'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];
		$this->name = "ebanx";

		//$this->table = $this->getTable();

	}

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'ebanx'");
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
		$this->postback_url = $config_live_site."/payment_return/ebanx.php";

		$this->pay_settings = $this->getSettings();
		//$this->pending = $this->pay_settings['pending'];

		$this->post['integration_key'] = $this->pay_settings["integration_key"];
		$this->post['currency_code'] = $this->pay_settings["currency"];
		$this->post['country'] = $this->pay_settings["country"];
		$this->post['payment_type_code'] = '_all';
		
		$this->setDemo($this->pay_settings["test"]);
		
		$this->post['name'] = 'Name';
		$this->post['email'] = 'Email';

		$this->post['notification_url'] = $this->postback_url.'?mode=process&ukey='.$this->user_key;
		
		$this->ebanx_keys = array("merchant_payment_code", "pstatus", "status_date", "open_date",
			       "confirm_date", "amount_br", "amount_ext", "amount_iof", "currency_rate",
			       "currency_ext", "due_date", "installments", "payment_type_code",
			       "acquirer", "code", "description", "authcode", "pre_approved",
			       "capture_available", "status");

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
		$this->post['merchant_payment_code'] = $val;
		
		// if user_id
		global $db;
		$res = $db->fetchAssoc("select `user_id`, `action` from ".TABLE_PAYMENT_ACTIONS." where id='$val'");
		if($res['user_id']) {
			$user_id = $res['user_id'];
			
			global $db;
			global $settings;

			$name_field = $this->pay_settings["name_field"];
			$name = $db->fetchRow("select `$name_field` from ".TABLE_USERS." where id='$user_id'");
			if($name) $this->post['name'] = $name;
			
			$email_field = $this->pay_settings["email_field"];
			$email = $db->fetchRow("select `$email_field` from ".TABLE_USERS." where id='$user_id'");
			if($email) $this->post['email'] = $email;
		
		}
		else {
		// if no user
		
			$action = unserialize($res['action']);
			if(isset($action['ad_id']) && $action['ad_id']) {
				
				$action_id = $action['ad_id'];
				
				global $db;
				
				$name_field = $this->pay_settings["nologin_name_field"];
				$name = $db->fetchRow("select `$name_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($name) $this->post['name'] = $name;
			
				$email_field = $this->pay_settings["nologin_email_field"];
				$email = $db->fetchRow("select `$email_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				if($email) $this->post['email'] = $email;
				
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

//		$this->post['desc'] = $str;

	}

	function setDemo($value) {

		if($value==1) $this->ebanx_url = 'https://sandbox.ebanxpay.com';
		else $this->ebanx_url = 'https://ebanxpay.com';
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

		$url = $this->ebanx_url."/ws/request?".$fields_string;
		
		$this->log("ebanx URL: ".$url);
		
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
		$response_array = json_decode($result, true);
		
		//close connection
		curl_close($ch);

		$this->log("ebanx response: ".$result);
		
		if($response_array['status'] == 'SUCCESS')
			$redirect_url_final = $response_array['redirect_url'];
		else return;	
		
		$form='<form name="payment_form" id="payment_form" method="post" action="'.$redirect_url_final.'"></form>';
		
		return $form;

	}

	function process()
	{
	
	
		$this->log("IPN response: operation: ".$_POST['operation']." notification_type=".$_POST['operation']." hash_codes: ".$_POST['hash_codes']);

		$fields_string = "integration_key=".urlencode($this->pay_settings["integration_key"])."&hash=".urlencode($_POST['hash_codes']);

		$url = $this->ebanx_url."/ws/query?".$fields_string;
		
		$this->log("ebanx payment status query URL: ".$url);
		
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
		$response_array = json_decode($result, true);
		
		//close connection
		curl_close($ch);

		$this->log("ebanx response: ".$result);

		if($response_array['status']!='SUCCESS') {
			$this->log("ERROR: Payment failed!");
			return 0;
		}
		
		$this->return_keys['merchant_payment_code'] = $response_array['payment']['merchant_payment_code'];
		$this->return_keys['pstatus'] = $response_array['payment']['status'];
		$this->return_keys['status_date'] = $response_array['payment']['status_date'];
		$this->return_keys['open_date'] = $response_array['payment']['open_date'];
		$this->return_keys['confirm_date'] = $response_array['payment']['confirm_date'];
		$this->return_keys['amount_br'] = $response_array['payment']['amount_br'];
		$this->return_keys['amount_ext'] = $response_array['payment']['amount_ext'];
		$this->return_keys['amount_iof'] = $response_array['payment']['amount_iof'];
		$this->return_keys['currency_rate'] = $response_array['payment']['currency_rate'];
		$this->return_keys['currency_ext'] = $response_array['payment']['currency_ext'];
		$this->return_keys['due_date'] = $response_array['payment']['due_date'];
		$this->return_keys['installments'] = $response_array['payment']['installments'];
		$this->return_keys['payment_type_code'] = $response_array['payment']['payment_type_code'];
		$this->return_keys['acquirer'] = $response_array['payment']['transaction_status']['acquirer'];
		$this->return_keys['code'] = $response_array['payment']['transaction_status']['code'];
		$this->return_keys['description'] = $response_array['payment']['transaction_status']['description'];
		$this->return_keys['authcode'] = $response_array['payment']['transaction_status']['authcode'];
		$this->return_keys['pre_approved'] = $response_array['payment']['pre_approved'];
		$this->return_keys['capture_available'] = $response_array['payment']['capture_available'];
		$this->return_keys['status'] = $response_array['status'];

		
/*		
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
	*/	
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

		foreach($this->return_keys as $key => $val) 
		{
			if(in_array($key, $this->ebanx_keys)) 
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
		$file = $config_abs_path."/log/ebanx_transaction";
		if(!$success) $file = $config_abs_path."/log/ebanx_error";

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
		$file = $config_abs_path."/log/ebanx_debug";

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

		if(!isset($_POST["integration_key"]) || !$_POST["integration_key"]) $this->addError('Please enter the Integration key!<br />');

		if($this->getError()!='') {

			if($_POST['test']=="on") $this->tmp['test'] = 1; else $this->tmp['test'] = 0;

			$array_fields = array( "integration_key", "currency", "country", "name_field", "email_field", "nologin_name_field", "nologin_email_field" );

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

		$array_fields = array( "integration_key", "currency", "country", "name_field", "email_field", "nologin_name_field", "nologin_email_field" );

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
		if(!$array_settings['integration_key']) {
			$this->setError($lng['settings']['errors']['ebanx_settings_missing']);
			return 0;
		}
		return 1;
	}

}
?>
