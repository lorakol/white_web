<?php
/*
	*	
	* BTCPay module for OxyClassifieds
	* Ozgur Arslan (blueorange589@gmail.com)
	* devnote : main btcpay class. needs to be created/copied entirely.
*/

class btcpay {
	var $postback_url;
	var $post;
	var $user_key;
	var $pending;
	var $invoice_no;
	var $pay_settings;
	var $error;
	var $tmp;
	var $formTitle;

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `processor_table`, `processor_ret_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'btcpay'");

		$this->table = $config_table_prefix.$arr['processor_table'];
		$this->ret_table = $config_table_prefix.$arr['processor_ret_table'];

		//$this->table = $this->getTable();
	}
  
    function btcpayClient() {
	
		global $config_abs_path;
		require $config_abs_path.'/classes/payment/btcpay/vendor/autoload.php';
      
      if(!$this->pay_settings) {
        $this->pay_settings = $this->getSettings();
      }
      
      $bptoken = $this->pay_settings['token'];
      $server = $this->pay_settings['server'];
      if($this->pay_settings['testmode']) {
        $bptoken = $this->pay_settings['testtoken'];
        $server = $this->pay_settings['testserver'];
      }
      
      $storageEngine = new \BTCPayServer\Storage\EncryptedFilesystemStorage('YourTopSecretPassword'); // Password may need to be updated if you changed it
      $privateKey    = $storageEngine->load($this->pay_settings['path'].'/btcpayserver.pri');
      $publicKey     = $storageEngine->load($this->pay_settings['path'].'/btcpayserver.pub');
      $client        = new \BTCPayServer\Client\Client();
      $adapter       = new \BTCPayServer\Client\Adapter\CurlAdapter();
      $client->setPrivateKey($privateKey);
      $client->setPublicKey($publicKey);
      $client->setUri($server);
      $client->setAdapter($adapter);
      $token = new \BTCPayServer\Token();
      $token->setToken($bptoken);
      $token->setFacade('merchant');
      $client->setToken($token);
    return $client;
    }

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `processor_table` from ".TABLE_PAYMENT_PROCESSORS." where `processor_code` like 'btcpay'");
		return $table;
	}

	function setTable($table) {

		$this->table = $table;
	
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

	function init($key='') {
		global $config_live_site;
		//$this->pending = 0;
      
		if($key) {
          $this->user_key = $key;
        } else {
          $this->user_key = isset($_GET['ukey'])?$_GET['ukey']:md5(uniqid(rand(), true));
        }
		//$this->pending = $this->pay_settings['pending'];
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

	}

	function setPostBack($str) {

		$this->postback_url = $str;

	}

	function setSid($str) {

		$this->post['x_login'] = $str;

	}

	function setAmount($str) {

		//$this->post['total'] = $str;
		$this->post['x_amount'] = $str;
		$this->total = $str;

	}

	function getSettings() {

		global $db;
		$result = $db->fetchAssoc("select * from ".$this->table);
		return $result;

	}

	function setPending($val) {

		$this->pending = $val;

	}

	function getPending() {

		return $this->pending;

	}
  
    function generateInvoice($orderData) {
		
		global $db;
		global $config_table_prefix;
      
		$client = $this->btcpayClient();

		$res_ad = $db->query("select * from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		if(!$db->numRows($res_ad)) return 0;
		$pa = $db->fetchAssoc();
      
		$email='email';
		$phone ='phone';
		$address='address';
      
		if($pa['user_id']) {
			$user_id = $pa['user_id'];
			
			global $settings;

			$email = $db->fetchRow("select `email` from ".TABLE_USERS." where id='$user_id'");
			
			$phone_field = $this->pay_settings["phone_field"];
			$phone = $db->fetchRow("select `$phone_field` from ".TABLE_USERS." where id='$user_id'");
			
			$address_field = $this->pay_settings["address_field"];
			$address = $db->fetchRow("select `$address_field` from ".TABLE_USERS." where id='$user_id'");
		
		}
		else {
		// if no user
		
			$action = unserialize($pa['action']);
			if(isset($action['ad_id']) && $action['ad_id']) {
				
				$action_id = $action['ad_id'];
				
				global $db;
				
				$email = $db->fetchRow("select `mgm_email` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				
				$phone_field = $this->pay_settings["nologin_phone_field"];
				$phone = $db->fetchRow("select `$phone_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
			
				$address_field = $this->pay_settings["nologin_address_field"];
				$address = $db->fetchRow("select `$address_field` from ".TABLE_ADS_EXTENSION." where id='$action_id'");
				
			}
		
		} // end if no user

      $invoice = new \BTCPayServer\Invoice();
      $invoice->setOrderId((string)$orderData['oxyinv']);
      $invoice->setCurrency(new \BTCPayServer\Currency($this->pay_settings['currency']));
      $invoice->setFullNotifications(true);
      $invoice->setExtendedNotifications(true);
      $invoice->setNotificationUrl($orderData['postbackurl'].'?do=ipn&ukey='.$orderData['ukey'].'&salt='.md5($orderData['oxyinv']));
      $invoice->setRedirectUrl($orderData['postbackurl'].'?do=redirect');
      
      $buyer = new \BTCPayServer\Buyer();
      $buyer->setEmail($email);
      $buyer->setAddress(array($address));
      $buyer->setPhone($phone);
      $invoice->setBuyer($buyer);
      $item = new \BTCPayServer\Item();
      $item->setPrice($pa['amount']);
      $invoice->setItem($item);

      /**
       * Updates invoice with new information such as the invoice id and the URL where
       * a customer can view the invoice.
       */
      try {
          //echo "Creating invoice at BTCPayServer now.".PHP_EOL;
          $res = $client->createInvoice($invoice);
      } catch (\Exception $e) {
			$this->addError("Exception occured: " . $e->getMessage().PHP_EOL);
          //$request  = $client->getRequest();
          //$response = $client->getResponse();
          //echo (string) $request.PHP_EOL.PHP_EOL.PHP_EOL;
          //echo (string) $response.PHP_EOL.PHP_EOL;
          exit(1); // We do not want to continue if something went wrong
      }
      return $res;
    }

	function getForm()
	{
      global $config_live_site, $db;
        $orderData = array( 
          'ukey' => $this->user_key,
          'oxyinv' => $this->invoice_no,
          'postbackurl' => $config_live_site."/payment_return/btcpay.php"
        );
      
        $this->pay_settings = $this->getSettings();
        $inv = $this->generateInvoice($orderData);
        $invno = $inv->getId();
        $this->post['invno'] = $invno;
        $this->post['oxyinv'] = $this->invoice_no;
        if($invno) {
          $su = $this->pay_settings['server'];
          if($this->pay_settings['testmode']=='1') $su = $this->pay_settings['testserver'];
          $su = substr($su,-1)=='/'?$su:$su.'/';
          $this->pay_url = $su.'invoice';
          $this->postback_url = $config_live_site."/payment_return/btcpay.php";
        } else {
          return false;
        }
      
        // update post fields
        $res_ad = $db->query("select post from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		if(!$db->numRows($res_ad)) return 0;
		$arr = $db->fetchAssoc();
        $oldp = unserialize(stripslashes($arr['post']));
        $newp = array_merge($oldp, $this->post);
        $res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET post='".addslashes(serialize($newp))."' where ukey='".$this->user_key."'");
        
      
		$form = <<<ENDFORM
<form method="get" name="payment_form" id="payment_form" action="%s">
%s
<center><input type="submit" name="submit_payment" value="%s"></center>
</form>
ENDFORM;
		$inputs = '<input type="hidden" name="id" value="'.$invno.'"/>';
		foreach($this->post as $key => $val) 
		{
			//$inputs .= '<input type="hidden" name="'.$key.'" value="'.$val.'"/>';
		}

		$str =  sprintf($form, $this->pay_url, $inputs, $this->formTitle);
		return $str;

	}

	function process() {
      global $db;
      
		$this->log("Processing");
		if(!$this->pay_settings) $this->pay_settings = $this->getSettings();
		
        if(isset($_GET['ukey'])) {
          $timestamp = date("Y-m-d H:i:s");
          $post = file_get_contents("php://input");
          global $config_table_prefix;
          $res = $db->query("INSERT INTO ".$config_table_prefix."btcpay_return SET ukey='".$this->user_key."', ipn='".$post."', date='$timestamp'");
          $this->log("Adding to btcpay_return");
        }

        $processed = 0;
        $success = 0;
        $finished=0;
        $ipndata = json_decode($post, true);
        
		$correct = $this->dataCorrect($ipndata);
        if(!$correct) return 0;
        
        if(isset($ipndata['data']['id'])) {

			$amount = $db->fetchRow("select `amount` from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
			if($ipndata['data']['price']==$amount || $ipndata['data']['currency']==$this->pay_settings['currency']) {
          
            //if($_POST['credit_card_processed']!='Y') $this->setPending(1);

				$this->log("Payment status: ".$ipndata['data']['status']);
			
				if($ipndata['data']['status']==$this->pay_settings['approvewhen']) {
					$res_upd = $db->query("update ".TABLE_PAYMENT_ACTIONS." SET completed='1' where ukey='".$this->user_key."'");
					$processed = 1;
					$success = 1;
					$finished=1;
					$this->log("Status: {$ipndata['data']['status']}. Setting payment to complete!");
				} else $this->log("Status: {$ipndata['data']['status']}");
            
			}
			else $this->log("Incorrect amount or currency: {$ipndata['data']['price']} vs {$amount} , {$ipndata['data']['currency']} vs {$this->pay_settings['currency']}");
          
			if($finished) $this->logIt($success);
		}
		return $processed;
	}

	function dataCorrect($ipndata)
	{
		global $db;
      
		$payrow = $db->query("select * from ".TABLE_PAYMENT_ACTIONS." where ukey='".$this->user_key."'");
		if(!$db->numRows($payrow)) { 
			$this->log("payment_action does not exist!");
			return 0;
		}
		$pa = $db->fetchAssoc();
      
        if(!isset($_GET['salt'])) { 
			$this->log("The salt value is not set!");
			return 0; 
		}
        if($_GET['salt']!=md5($pa['id'])) { 
			$this->log("[Error] Salt value incorrect: ".md5($pa['id'])." vs ".$_GET['salt']);
			return 0; 
		}
        
        return 1;
        // getInvoice
        /*$client = $this->btcpayClient();
        try {
            $invoice = $client->getInvoice($papost['invno']);
            if (!isset($invoice) || !$invoice) {
                $this->log("[Error] Invalid invoice value");
                return 0;
            }
        } catch (\Exception $e) {
            $this->log("Exception occured: " . $e->getMessage());
            return 0;
        }
        if(!$invoice) { return 0; }
        
        $order_id = $invoice->getOrderId();
        if($order_id!=$papost['oxyinv']) { 
			$this->log("[Error] Order id incorrect: {$papost['oxyinv']} vs $order_id");
			return 0; 
        }
        
        $checkStatus = $invoice->getStatus();
        $data = array('status'=>$checkStatus);
		return $data;*/
	}
  
    

	function saveToDB() {
		global $db;
		$addtosql = '';
		$entirepost = '';
		foreach($_POST as $key => $val) 
		{
			if(in_array($key, $this->to_checkout_keys)) 
			{
				$addtosql .= "`".$key."`='".$val."',";
			}
			$entirepost .= "[".$key."]=\'".$val."\',";
		}
		$addtosql = rtrim($addtosql,','); 
		$timestamp = date("Y-m-d H:i:s");
 		//$res = $db->query("INSERT INTO ".$this->ret_table." SET ".$addtosql?($addtosql.','):''." entirepost='".$entirepost."', date='$timestamp'");
        $res = $db->query("INSERT INTO ".$this->ret_table." SET ukey='".$this->user_key."', ipn='".json_encode($_POST)."', date='$timestamp'");
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
		$file = $config_abs_path."/log/btcpay_transaction";
		if(!$success) $file = $config_abs_path."/log/btcpay_error";

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
		$file = $config_abs_path."/log/btcpay_debug";

		$handle = fopen($file, "a");
		fwrite($handle, $content);
		fclose($handle);
	}

	function saveSettings() {
	
		global $lng;
		$this->error='';
		$this->tmp=array();

		global $config_demo;
		if($config_demo==1) $this->addError($lng['general']['errors']['demo'].'<br />');

		global $db;
      
        $set = $this->getSettings();
      
        if($set) {
          $this->clean['testmode'] = checkbox_value("testmode");	
          $sql = "update `".$this->table."` set testmode = '".$this->clean['testmode']."'";
          $array_fields = array( "server", "testserver", "path", "token", "testtoken", "approvewhen", "currency", "phone_field", "address_field", "nologin_phone_field", "nologin_address_field" );

          foreach ($array_fields as $field) {
              if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]); else $this->clean[$field] = '';
              $sql.=", `$field` = '".$this->clean[$field]."'";
          }
        } else {
          $post = $_POST;
          unset($post['Submit_btcpay']);
          if(isset($post['testmode'])&&$post['testmode']=='on') {
            $post['testmode'] = 1;
          } else {
            $post['testmode'] = 0;
          }
          
          $keys = array_keys($post);
          $vals = array_values($post);
          $sql = "INSERT INTO `".$this->table."` (`".implode("`, `", $keys)."`) VALUES ('".implode("', '", $vals)."')";
        }
		
      
		$db->query($sql);
		return 1;
	}

	function correctSettings() {

		return 1;
	}

	function checkSettings() {
		
		global $lng;
		$array_settings = $this->getSettings();
	
		// check if the path is web accessible
		global $config_abs_path;
		if(!isset($array_settings['path']) || !$array_settings['path'])
			$this->addError($lng['settings']['btcpay_set_path']."<br/>");
		// check if keys are present
		if(!file_exists($array_settings['path']."/btcpayserver.pri") || !file_exists($array_settings['path']."/btcpayserver.pub"))
			$this->addError($lng['settings']['error']['keys']."<br/>");
	
		if($this->getError()) return;
	
		if($array_settings['path']== $config_abs_path)
			$this->addError($lng['settings']['btcpay_set_safe_path']."<br/>");

		if(!$array_settings['testmode']) {

			// check if token is present
			if(!$array_settings['token'])
				$this->addError($lng['settings']['btcpay_token_missing']."<br/>");
			
		}
		else{ 
			// check if test token is present
			if(!$array_settings['testtoken'])
				$this->addError($lng['settings']['btcpay_test_token_missing']."<br/>");
		}

	}

	function generateKeys() {
	
		global $lng;
		$array_settings = $this->getSettings();
	
		if(!is_writable($array_settings['path'])) {
			$this->addError($lng['settings']['error']['folder_not_writable']);
			return 0;
		}
		
		global $config_abs_path;
		require_once  $config_abs_path."/classes/payment/btcpay/vendor/autoload.php";

		$priKey = $array_settings['path'].'/btcpayserver.pri';
		$pubKey = $array_settings['path'].'/btcpayserver.pub';
    
		if(file_exists($priKey)) unlink($priKey);
		if(file_exists($pubKey)) unlink($pubKey);

		$privateKey = \BTCPayServer\PrivateKey::create($priKey)->generate();
		$publicKey = new \BTCPayServer\PublicKey($pubKey);
		$publicKey->setPrivateKey($privateKey);
		$publicKey->generate();
		$storageEngine = new \BTCPayServer\Storage\EncryptedFilesystemStorage('YourTopSecretPassword');
		$storageEngine->persist($privateKey);
		$storageEngine->persist($publicKey);
		
		if(!file_exists($priKey) || !file_exists($pubKey)) {
			$this->addError("The keys were not generated correctly!");
			return 0;
		}
		
		return 1;
	
	}

	function generateToken($test=0) {

		global $lng;
		$array_settings = $this->getSettings();
	
		global $config_abs_path;
		require_once  $config_abs_path."/classes/payment/btcpay/vendor/autoload.php";
		
		$baseUrl = $array_settings['server'];
		$token_field = "token";
		if($test) {
			$baseUrl = $array_settings['testserver'];
			$token_field = "testtoken";
		}

		$storageEngine = new \BTCPayServer\Storage\EncryptedFilesystemStorage('YourTopSecretPassword');
		$privateKey = $storageEngine->load($array_settings['path'].'/btcpayserver.pri');
		$publicKey = $storageEngine->load($array_settings['path'].'/btcpayserver.pub');
		$client = new \BTCPayServer\Client\Client();
		$adapter = new \BTCPayServer\Client\Adapter\CurlAdapter();
		$client->setPrivateKey($privateKey);
		$client->setPublicKey($publicKey);
		$client->setUri($baseUrl);
		$client->setAdapter($adapter);
		$sin = $publicKey->getSin()->__toString();

		$facade = 'merchant';

		$postData = json_encode(
		[
			'id'     => $sin,
			'facade' => $facade,
		]);

		$curlCli = curl_init(trim($baseUrl, "|") . "tokens");
		curl_setopt(
			$curlCli, CURLOPT_HTTPHEADER, [
			'x-accept-version: 2.0.0',
			'Content-Type: application/json',
			'x-identity'  => $publicKey->__toString(),
			'x-signature' => $privateKey->sign(trim($baseUrl, "|") . "/tokens".$postData),
		]);

		curl_setopt($curlCli, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($curlCli, CURLOPT_POSTFIELDS, stripslashes($postData));
		curl_setopt($curlCli, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlCli, CURLOPT_SSL_VERIFYPEER, false);

		$result = curl_exec($curlCli);
		
		
		$resultData = json_decode($result, true);
		curl_close($curlCli);
		if (array_key_exists('error', $resultData)) {
			$this->addError($resultData['error']);
			exit(0);
		}

		// configure the token
		$merchantToken = $resultData['data'][0]['token'];

		global $db;
        if($merchantToken) $db->query("update ".$this->table." set `$token_field`='$merchantToken'");
        
        return $resultData['data'][0]['pairingCode'];

	}
	
}
?>
