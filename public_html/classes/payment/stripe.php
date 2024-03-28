<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $config_abs_path;
require_once $config_abs_path."/classes/payment/stripe/init.php";

class stripe {

	var $postback_url;
	var $post;
	var $user_key;
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

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'stripe'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];
		$this->subscrAutoRenew = 0;
		$this->subscrId = 0;
		$this->name = "stripe";

		//$this->table = $this->getTable();

	}

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'stripe'");
		return $table;
	}

	function setTable($table) {

		$this->table = $table;
	
	}

	function init($key = '') {

		global $config_live_site;
		$this->pending = 0;
		$this->pay_settings = $this->getSettings();

		\Stripe\Stripe::setApiKey($this->pay_settings['secret_key']);
		
		
		if($key) $this->user_key = $key;
		else $this->user_key = isset($_GET['ukey'])?$_GET['ukey']:md5(uniqid(rand(), true));
		$this->postback_url = $config_live_site."/payment_return/stripe.php?mode=process&ukey=".$this->user_key;
		$this->cancel_url = $config_live_site."/payment_return/stripe.php?mode=cancel&ukey=".$this->user_key;
		$this->post['item_name'] = $this->pay_settings["item_name"];

		$this->pay_settings['endpoint_secret'] = $this->pay_settings['endpoint_secret'];
		
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

	// recurring payments
	function setSubscription($total, $days) {

		$total = number_format($total, 2, '.', '');

		$this->post['cmd'] = '_xclick-subscriptions';
		$this->post['a3'] = $total;
		
		if($days>90) { 
		    $this->post['p3'] = round($days/30);
		    $this->post['t3'] = "M";
		} else
		{
		    $this->post['p3'] = $days;
		    $this->post['t3'] = "D";
		}

		
		$this->post['src'] = "1"; // Recurring payments. If set to 1, the payment will recur unless your customer cancels the subscription before the end of the billing cycle
		$this->post['sra'] = "1";//Reattempt on failure. If set to 1, and the payment fails, the payment will be reattempted two more times. After the third failure, the subscription will be cancelled

		return 1;

	}

	function setFirstSubscription($amount, $days) {

		$amount = number_format($amount, 2, '.', '');

		$this->post['a1'] = $amount;
		if($days>90) { 
		    $this->post['p1'] = round($days/30);
		    $this->post['t1'] = "M";
		} else
		{
		    $this->post['p1'] = $days;
		    $this->post['t1'] = "D";
		}

	}

	function setInvoiceNo($val) {

		$this->invoice_no = $val;

	}

	function disableReturn() {

		$this->post['return'] = '';
		$this->post['cancel_return'] = '';
		$this->post['notify_url'] = '';

	}

	function setAmount($str) {

		$amount = $str*100;
		$amount = number_format($amount, 0, '', '');
		$this->post['amount'] = $amount;
		$this->amount = $amount;

	}

	function setCurrency($str) {

		//$this->post['currency_code'] = $str;

	}

	function setItemName($str) {

		$this->post['item_name'] = $str;

	}

	function setDemo($value) {

		$this->stripe_url = 'https://api.stripe.com';
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
		
		$product = \Stripe\Product::create([
		'name' => $this->pay_settings["item_name"],
		]);
		
		$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'product' => $product,
      'unit_amount' => $this->amount,
      'currency' => strtolower($this->pay_settings['currency']),
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $this->postback_url,
  'cancel_url' => $this->cancel_url,
]);

		$str ="<script type='text/javascript'>
		
		var stripe = Stripe('{$this->pay_settings['publishable_key']}');
  stripe.redirectToCheckout({
    sessionId: '{$session['id']}'
  }).then(function (result) {
    alert(result.error.message);
  });
</script>";

		return $str;

	}
	
	function process()
	{

		global $db;
		$processed=0;

		
		$payload = @file_get_contents('php://input');

		$this->log("Payload: ".json_encode($payload));

		$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
		
		$this->log("Signature: ".$sig_header);
		$this->log("Endpoint secret: ".$this->pay_settings['endpoint_secret']);
		
		// You can find your endpoint's secret in your webhook settings
		$endpoint_secret = $this->pay_settings['endpoint_secret'];
		
		try {
			$event = \Stripe\Webhook::constructEvent(
			$payload, $sig_header, $endpoint_secret
			);
		} catch(\UnexpectedValueException $e) {
			// Invalid payload
			$this->log("Invalid payload");
			//$this->processError($e);
			http_response_code(400);
			return 0;
		} catch(\Stripe\Exception\SignatureVerificationException $e) {
			// Invalid signature
			$this->log("Invalid signature");
			//$this->processError($e);
			http_response_code(400);
			return 0;
		}
		$this->log("Passed signature verification!");
		
		// Handle the checkout.session.completed event
		if ($event->type == 'checkout.session.completed') {
			$session = $event->data->object;
			
			$this->log("Session: ".json_encode($session));

			$this->log("Success url: ".$session->success_url);
		
			$success_url = $session->success_url;
			$sarr = explode("=", $success_url);
			$size = count($sarr);
			$this->user_key = $sarr[$size-1];
			$this->log("Ukey: ".$this->user_key);

			// Fulfill the purchase...
			if ($session->payment_status == 'paid') {
			
				$success = $this->saveToDB($session);
				if(!$success) $this->log("saveToDB: ERROR: Cannot save to db!");
				$amount = $db->fetchRow("select `amount` from ".TABLE_PAYMENT_ACTIONS." where ukey='{$this->user_key}'");
				$this->setAmount($amount);
				
				$processed=1;
			
			}	
		}
		http_response_code(200);
		return $processed;
	}

	function saveToDB($session)
	{

		global $db;

		$addtosql = "`charge_id`='{$session->id}', `amount`='{$session->amount_total}', `currency`='{$session->currency}', `customer`='{$session->customer}', `livemode`='{$session->livemode}', `paid`='1' "; 

		$res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET completed='1' where ukey='".$this->user_key."'");

		$timestamp = date("Y-m-d H:i:s");
		$res = $db->query("INSERT INTO ".$this->ret_table." SET date='$timestamp', ".$addtosql.",ukey='".$this->user_key."'");

		return 1;

	}

	function isAutoRenew() {

		if( $_POST['txn_type'] == "subscr_payment") return 1;
		return 0;

	}

	function subscrAutoRenew() {

		return $this->subscrAutoRenew;

	}

	function getSubscriptionId() {

		return $this->subscrId;

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
		$file = $config_abs_path."/log/stripe_transaction";
		if(!$success) $file = $config_abs_path."/log/stripe_error";

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
		$file = $config_abs_path."/log/stripe_debug";

		$handle = fopen($file, "a");
		fwrite($handle, $content);
		fclose($handle);
	}

	function getError() {

		return $this->error;

	}

	function addError($str) {

		$this->error.=	$str."<br/>";

	}

	function setError($str) {

		$this->error=$str;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function check_form() {

		global $lng;

		if(!isset($_POST["secret_key"]) || !$_POST["secret_key"]) $this->addError($lng['settings']['errors']['required_secret_key'].'<br />');
		
		if(!isset($_POST["publishable_key"]) || !$_POST["publishable_key"]) $this->addError($lng['settings']['errors']['required_publishable_key'].'<br />');

		if(!isset($_POST["endpoint_secret"]) || !$_POST["endpoint_secret"]) $this->addError($lng['settings']['errors']['required_endpoint_secret'].'<br />');

		
		
		if($this->getError()!='') {

			$array_fields = array( "secret_key", "publishable_key", "item_name", "endpoint_secret" );

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

		$this->clean['secret_key'] = escape($_POST['secret_key']);
		$this->clean['publishable_key'] = escape($_POST['publishable_key']);
		$this->clean['endpoint_secret'] = escape($_POST['endpoint_secret']);
		if(isset($_POST['item_name']) && $_POST['item_name']) $this->clean['item_name'] = escape($_POST['item_name']);
		else $this->clean['item_name'] = '';
		$this->clean['currency'] = escape($_POST['currency']);
		
		$sql = "update ".$this->table." set secret_key = '".$this->clean['secret_key']."', `publishable_key` =  '".$this->clean['publishable_key']."', `endpoint_secret` =  '".$this->clean['endpoint_secret']."', `item_name` =  '".$this->clean['item_name']."', `currency` =  '".$this->clean['currency']."'";

		$db->query($sql);
		return 1;
	}

	function correctSettings() {
		
		global $lng;
		$array_settings = $this->getSettings();
		if(!$array_settings['secret_key'] || !$array_settings['publishable_key'] || !$array_settings['endpoint_secret']) {
			$this->setError($lng['settings']['errors']['stripe_settings_missing']);
			return 0;
		}
		return 1;
	}

}
?>
