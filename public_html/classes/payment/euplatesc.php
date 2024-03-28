<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class euplatesc {

	var $postback_url;
	var $post;
	var $user_key;
	var $euplatesc_keys;
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
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'euplatesc'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];
		$this->name = "euplatesc";

		//$this->table = $this->getTable();

	}

	function getTable() {

		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'euplatesc'");
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
		$this->postback_url = $config_live_site."/payment_return/euplatesc.php";
		$this->euplatesc_url="https://secure.euplatesc.ro/tdsprocess/tranzactd.php";

		$this->pay_settings = $this->getSettings();

		$this->post['order_desc'] = $this->pay_settings['item_name'];
		$this->post['merch_id'] = $this->pay_settings['merchant_id'];
		$this->post['curr'] = $this->pay_settings['currency'];

		$this->post['timestamp'] = date("YmdHis");
		$this->post['nonce'] = md5(mt_rand().time());

//		$this->post['ExtraData[successurl]'] = $this->postback_url.'?mode=success';
		$this->post['ExtraData[successurl]'] = $this->postback_url;

		$this->euplatesc_keys = array("amount", "curr", "invoice_id", "ep_id",
			       "merch_id", "action", "message", "approval", "timestamp",
			       "nonce" );
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

		return 1;

	}

	function setFirstSubscription($amount, $days) {

	}

	function setInvoiceNo($val) {

		$this->invoice_no = $val;

	}

	function setPostBack($str) {

		$this->postback_url = $str;

	}

/*	function setRecipient($str) {

		$this->post['business'] = $str;

	}

	function disableReturn() {

		$this->post['return'] = '';
		$this->post['cancel_return'] = '';
		$this->post['notify_url'] = '';

	}
*/
	function setAmount($str) {

		$amount = number_format($str, 2, '.', '');
		$this->post['amount'] = $amount;
		$this->amount = $amount;

	}

	function setCurrency($str) {

		$this->post['curr'] = $str;
		$this->currency = $str;

	}

	function setItemName($str) {

		$this->post['order_desc'] = $str;

	}

	function setDemo($value) {
/*
		if($value==1) $this->euplatesc_url = 'https://www.sandbox.euplatesc.com/cgi-bin/webscr';
		else $this->euplatesc_url = 'https://www.euplatesc.com/cgi-bin/webscr';*/
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

		$this->post['invoice_id'] = $this->invoice_no;

		$data = array(
				'amount'      => $this->post['amount'],
				'curr'        => $this->post['curr'],
				'invoice_id'  => $this->post['invoice_id'],
				'order_desc'  => $this->post['order_desc'],
				'merch_id'    => $this->post['merch_id'],
				'timestamp'   => $this->post['timestamp'],
				'nonce'       => $this->post['nonce']
			);

			$this->post['fp_hash'] = strtoupper($this->euplatesc_mac($data,$this->pay_settings['key']));

		$form = <<<ENDFORM
<form method="post" name="payment_form" id="payment_form" action="%s">
%s
<input type="submit" name="submit_payment" value="{$lng['general']['submit']}" />
</form>
ENDFORM;

		$inputs = '';
		foreach($this->post as $key => $val)
		{
			$inputs .= '<input type="hidden" name="'.$key.'" value="'.$val.'"/>
';
		}

		$str =  sprintf($form, $this->euplatesc_url, $inputs);//, $this->formTitle
		return $str;

	}

	function hmacmd5($key,$data) {

			$blocksize = 64;
			$hashfunc  = 'md5';
			if(strlen($key) > $blocksize){
				$key = pack('H*', $hashfunc($key));
			}
			$key  = str_pad($key, $blocksize, chr(0x00));
			$ipad = str_repeat(chr(0x36), $blocksize);
			$opad = str_repeat(chr(0x5c), $blocksize);
			$hmac = pack('H*', $hashfunc(($key ^ $opad) . pack('H*', $hashfunc(($key ^ $ipad) . $data))));
			return bin2hex($hmac);

		}

		function euplatesc_mac($data, $key){

			$str = NULL;
			foreach($data as $d){
				if($d === NULL || strlen($d) == 0){
					$str .= '-'; // valorile nule sunt inlocuite cu -
				}else{
					$str .= strlen($d) . $d;
				}
			}
			$key = pack('H*', $key); // convertim codul secret intr-un string binar
			return $this->hmacmd5($key, $str);

		}

	function process()
	{

			$processed = 0;
			if(isset($_POST['message']) and strpos(strtolower($_POST['message']),"pending")!==false){ /*to filter sms pending message*/
				echo "SMS pending";
				die();
			}

			$data =  array (
				'amount'     => addslashes(trim(@$_POST['amount'])),
				'curr'       => addslashes(trim(@$_POST['curr'])),
				'invoice_id' => addslashes(trim(@$_POST['invoice_id'])),
				'ep_id'      => addslashes(trim(@$_POST['ep_id'])),
				'merch_id'   => addslashes(trim(@$_POST['merch_id'])),
				'action'     => addslashes(trim(@$_POST['action'])),
				'message'    => addslashes(trim(@$_POST['message'])),
				'approval'   => addslashes(trim(@$_POST['approval'])),
				'timestamp'  => addslashes(trim(@$_POST['timestamp'])),
				'nonce'      => addslashes(trim(@$_POST['nonce'])),
			);

			$data['fp_hash'] = strtoupper($this->euplatesc_mac($data, $this->pay_settings['key']));
			$fp_hash=addslashes(trim(@$_POST['fp_hash']));

			$success = 0;
			if($data['fp_hash']===$fp_hash){
				if($data['action']=="0") {
					$this->invoice_no = $data['invoice_id'];
					//Complete
					if($this->dataCorrect($data)) {

						$success = $this->saveToDB();
						if(!$success) $this->log("saveToDB: ERROR: Cannot save to db!");
						$processed=1;

					}
					else { // incorrect payment data
						$this->log("Incorrect received data ");
					}

				}else {
					//Failed
					$processed=0;
				}
				echo "OK";//IMPORTANT sa se afiseze ok
			}else{
				$this->log("Invalid hash string: received: {$fp_hash} <> computed: {$data['fp_hash']} ");
				// Invalid
			}

			$this->logIt($success);

			$str = implode("|", $_POST);
			$this->log($str);

			return $processed;
	}

	function dataCorrect($data)
	{

		global $db;
		$res_ad = $db->query("select `amount`, `ukey` from ".TABLE_PAYMENT_ACTIONS." where id='".$this->invoice_no."'");
		if(!$db->numRows($res_ad)) return 0;
		$array = $db->fetchAssoc();
		$am = $array['amount'];
		$this->user_key = $array['ukey'];

		// format so there are not more than 2 decimals
		$amount = number_format($am, 2, '.', '');
		$currency = $this->pay_settings["currency"];
		$merch_id = $this->pay_settings["merchant_id"];

		if( (float)$amount != (float)$data['amount'] ) {
			$this->log("(float)$ _POST['amount'] != (float)$ amount: ".(float)$data['amount'].' <> '.(float)$amount);
			return 0;
		}
		if( $currency != $data['curr'] ) {
			$this->log("$ _POST['curr'] != $ currency: ".$data['curr'].' <> '.$currency);
			return 0;
		}
		if( $merch_id != $data['merch_id'] ) {
			$this->log("$ _POST['merch_id'] != $ merch_id: ".$data['merch_id'].' <> '.$merch_id);
			return 0;
		}
		return 1;
	}

	function saveToDB()
	{

		global $db;
		$addtosql = '';
		$entirepost = '';

		foreach($_POST as $key => $val)
		{
			if(in_array($key, $this->euplatesc_keys))
			{
				$addtosql .= $key."='".$val."',";
			}
			$entirepost .= "[".$key."]=\'".$val."\',";
		}
		$addtosql = rtrim($addtosql,',');

		$res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET completed='1' where id='".$this->invoice_no."'");

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
		$file = $config_abs_path."/log/euplatesc_transaction";
		if(!$success) $file = $config_abs_path."/log/euplatesc_error";

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
		$file = $config_abs_path."/log/euplatesc_debug";

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

		if(!isset($_POST["euplatesc_merchant_id"]) || !$_POST["euplatesc_merchant_id"]) $this->addError('Please enter the merchant id!<br />');
		if((!isset($_POST["euplatesc_key"]) || !$_POST["euplatesc_key"])) $this->addError('Please enter the key!<br />');
		//if((!isset($_POST["euplatesc_currency"]) || !$_POST["euplatesc_currency"])) $this->addError('Please enter the currency!<br />');

		if($this->getError()!='') {

			$array_fields = array( "euplatesc_merchant_id", "euplatesc_key", "euplatesc_item_name", "euplatesc_currency" );

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

		$array_fields = array( "merchant_id", "key", "item_name", "currency" );
		$sql = "update ".$this->table." set ";
		$start=1;

		foreach ($array_fields as $field) {

			if(isset($_POST["euplatesc_".$field])) $this->clean[$field] = escape($_POST["euplatesc_".$field]); else $this->clean[$field] = '';

			if(!$start) $sql.=", ";
			$sql.=" `$field` = '".$this->clean[$field]."'";
			$start=0;
		}

		$db->query($sql);
		return 1;
	}

	function correctSettings() {

		global $lng;
		$array_settings = $this->getSettings();
		if(!$array_settings['merchant_id'] || !$array_settings['key']) {
			$this->setError("Please configure the EuPlatesc.ro settings!");
			return 0;
		}
		return 1;
	}

}
?>
