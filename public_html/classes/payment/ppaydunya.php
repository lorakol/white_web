<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once("paydunya/dependency_check.php");

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__)));

abstract class Paydunya {
  const VERSION = "1.0.0";
  const SUCCESS = "success";
  const FAIL = "fail";
  const PENDING = "pending";
}

if (strnatcmp(phpversion(),'5.3.0') >= 0) {
  define('JSON_ENCODE_PARAM_SUPPORT',   true);
}else{
  define('JSON_ENCODE_PARAM_SUPPORT',   false);
}

require_once("paydunya/setup.php");
require_once("paydunya/customdata.php");
require_once("paydunya/checkout.php");
require_once("paydunya/checkout/store.php");
require_once("paydunya/checkout/checkout_invoice.php");
require_once("paydunya/checkout/onsite_invoice.php");
require_once("paydunya/direct_pay.php");
require_once("paydunya/libraries/Requests.php");
require_once("paydunya/utilities.php");


class ppaydunya {

	var $postback_url;
	var $post;
	var $user_key;
	var $paydunya_keys;
	var $pending;
	var $invoice_no;
	var $pay_settings;
	var $table;
	var $error;
	var $tmp;
	var $formTitle;
	var $subscrAutoRenew;
	var $subscrId;
	var $name;
	var $paydunya_invoice;

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'paydunya'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];
		$this->subscrAutoRenew = 0;
		$this->subscrId = 0;
		$this->name = "paydunya";

		//$this->table = $this->getTable();

	}

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'paydunya'");
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
		$this->postback_url = $config_live_site."/payment_return/paydunya.php";

		$this->pay_settings = $this->getSettings();
  
		Paydunya_Setup::setMasterKey($this->pay_settings['master_key']);
		Paydunya_Setup::setPublicKey($this->pay_settings['public_key']);
		Paydunya_Setup::setPrivateKey($this->pay_settings['private_key']);
		Paydunya_Setup::setToken($this->pay_settings['token']);
		Paydunya_Setup::setMode($this->pay_settings['test']);
		$this->setDemo($this->pay_settings["test"]);
		
		Paydunya_Checkout_Store::setName($this->pay_settings['company_name']); // Only the name is required
		if(!empty($this->pay_settings['tagline'])) Paydunya_Checkout_Store::setTagline($this->pay_settings['tagline']);
		if(!empty($this->pay_settings['company_phone'])) Paydunya_Checkout_Store::setPhoneNumber($this->pay_settings['company_phone']);
		if(!empty($this->pay_settings['company_address'])) Paydunya_Checkout_Store::setPostalAddress($this->pay_settings['company_address']);
		if(!empty($this->pay_settings['website'])) Paydunya_Checkout_Store::setWebsiteUrl($this->pay_settings['website']);
		if(!empty($this->pay_settings['logo_url'])) Paydunya_Checkout_Store::setLogoUrl($this->pay_settings['logo_url']);
		
		Paydunya_Checkout_Store::setCallbackUrl($this->postback_url.'?mode=process&ukey='.$this->user_key);
		Paydunya_Checkout_Store::setCancelUrl($this->postback_url.'?mode=cancel&ukey='.$this->user_key);
		Paydunya_Checkout_Store::setReturnUrl($this->postback_url.'?mode=success&ukey='.$this->user_key);
		
		$this->paydunya_invoice = new Paydunya_Checkout_Invoice();

		$this->paydunya_keys = array("response_code", "response_text", "hash", "token",
			       "total_amount", "mode", "status", "name", "phone", "email", "receipt_url" );

	}

	function getUserKey() {

		return $this->user_key;

	}

	function setDebug($val) {

		$this->debug = $val;

	}

	// recurring payments
	function setSubscription($total, $days) {

		return 1;

	}

	function setFirstSubscription($amount, $days) {

	}

	function setInvoiceNo($val) {

		$this->invoice_no = $val;

	}

	function setAmount($str) {

		$amount = number_format($str, 2, '.', '');
		$this->post['amount'] = $amount;
		$this->amount = $amount;
		
		$this->paydunya_invoice->addItem($this->pay_settings['item_name'], 1, $amount, $amount);
		$this->paydunya_invoice->setTotalAmount($amount);

	}
	function setFormTitle($val) {


	}
	function getPost() {

	}
	function setCurrency($str) {

	}

	function setItemName($str) {

	}

	function setDemo($value) {

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
		if($this->paydunya_invoice->create()) {
			$form = '<form method="get" name="payment_form" id="payment_form" action="'.$this->paydunya_invoice->getInvoiceUrl().'">
<input type="submit" name="submit_payment" value="Submit" />
</form>';
			
			
		}else{
			$form = $this->paydunya_invoice->response_text;
		}
		return $form;
	}

	function process()
	{

		$processed=0;

		//Take your MasterKey, hash it and compare the result to the received hash by IPN
		if($_POST['data']['hash'] === hash('sha512', $this->pay_settings['master_key'])) {

			if ($_POST['data']['status'] == "completed") {

				//check if valid
				if($this->dataCorrect()) {

					$success = $this->saveToDB();
					if(!$success) $this->log("saveToDB: ERROR: Cannot save to db!");
					$processed=1;

				}
				else { // incorrect payment data
					$this->log("Incorrect received data ");
				}

			}

		} else {
			$this->log("ERROR: This request was not issued by Paydunya");
		}
		
		$this->logIt($success);

		return $processed;
	}

	function dataCorrect() {

		global $db;
		
		$this->log("select `amount` from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		
		$amount = $db->fetchRow("select `amount` from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		
		if( (float)$amount != (float)$_POST['data']['invoice']['total_amount'] ) {
			$this->log("(float)$ _POST['invoice']['total_amount'] != (float)$ amount: ".(float)$_POST['data']['invoice']['total_amount'].' <> '.(float)$amount);
			return 0;
		}
		return 1;

	}
	
	function saveToDB()
	{

		global $db;
		$addtosql = '';
		$entirepost = '';

		$response["response_code"] = $_POST['data']['response_code'];
		$response["response_text"] = $_POST['data']['response_text'];
		$response["hash"] = $_POST['data']['hash'];
		$response["token"] = $_POST['data']['invoice']['token'];
		$response["total_amount"] = $_POST['data']['invoice']['total_amount'];
		$response["mode"] = $_POST['data']['mode'];
		$response["status"] = $_POST['data']['status'];
		$response["name"] = $_POST['data']['customer']['name'];
		$response["phone"] = $_POST['data']['customer']['phone'];
		$response["email"] = $_POST['data']['customer']['email'];
		$response["receipt_url"] = $_POST['data']['receipt_url'];

		
		foreach($this->paydunya_keys as $key) 
		{
			$addtosql .= $key."='".$response[$key]."',";
			$entirepost .= "[".$key."]=\'".$response[$key]."\',";
		}
		$addtosql = rtrim($addtosql,','); 

		$res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET completed='1' where ukey='".$this->user_key."'");

		$timestamp = date("Y-m-d H:i:s");
		$res = $db->query("INSERT INTO ".$this->ret_table." SET date='$timestamp', entirepost='".$entirepost."', ".$addtosql.",ukey='".$this->user_key."'");

		return 1;

	}

	function isAutoRenew() {

		return 0;

	}

	function subscrAutoRenew() {

		return 0;

	}

	function getSubscriptionId() {

		return 0;

	}

	function logIt($success)
	{
		if(!$this->debug) return;
		// Generate content
		$content = "-----------------------------------\n".date("r")."\n";
		$content .= "\nRECEIVED POST:\n";

		$content .= json_encode($_POST);
/*		foreach($_POST as $key => $val)
		{
			$content .= $key."=".$val."\n";
		}*/
		$content .= "-----------------------------------\n";

		// Create File
		global $config_abs_path;
		$file = $config_abs_path."/log/paydunya_transaction";
		if(!$success) $file = $config_abs_path."/log/paydunya_error";

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
		$file = $config_abs_path."/log/paydunya_debug";

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
		
		$array_fields = array( "master_key", "public_key", "private_key", "token", "company_name", "item_name" );
		
		foreach($array_fields as $key) {
			if(!$_POST["paydunya_".$key]) {
				$this->setError("Please configure all required Paydunya settings!");
			}
		}

		if($this->getError()!='') {

			if($_POST['paydunya_test']=="on") $this->tmp['test'] = 1; else $this->tmp['test'] = 0;

			$array_fields = array( "master_key", "public_key", "private_key", "token", "company_name", "tagline", "company_phone", "company_address", "website", "logo_url", "item_name" );

			foreach ($array_fields as $field) {
				if(isset($_POST["paydunya_".$field])) $this->tmp[$field] = cleanStr($_POST["paydunya_".$field]);
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
		$this->clean['test'] = checkbox_value("paydunya_test");	
		$sql = "update ".$this->table." set test = ".$this->clean['test'];

		$array_fields = array( "master_key", "public_key", "private_key", "token", "company_name", "tagline", "company_phone", "company_address", "website", "logo_url", "item_name" );

		foreach ($array_fields as $field) {

			if(isset($_POST["paydunya_".$field])) $this->clean[$field] = escape($_POST["paydunya_".$field]); else $this->clean[$field] = '';
			$sql.=", `$field` = '".$this->clean[$field]."'";

		}

		$db->query($sql);
		return 1;
	}

	function correctSettings() {
		
		global $lng;
		$array_settings = $this->getSettings();
		
		$array_fields = array( "master_key", "public_key", "private_key", "token", "company_name", "item_name" );
		
		foreach($array_fields as $key) {
			if(!$array_settings[$key]) {
				$this->setError("Please configure Paydunya settings!");
				return 0;
			}
		}
		return 1;
	}

}
?>
