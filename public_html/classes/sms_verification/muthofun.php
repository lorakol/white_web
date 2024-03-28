<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class muthofun {

	var $table;
	var $error;
	var $tmp;
	var $name;
	var $result;

	public function __construct()
	{
		global $db;
		global $config_table_prefix;
		$arr = $db->fetchAssoc("select `gateway_table`, `gateway_ret_table` from ".TABLE_SMS_GATEWAYS." where `gateway_code` like 'muthofun'");

		$this->table = $config_table_prefix.$arr['gateway_table'];
		$this->ret_table = $config_table_prefix.$arr['gateway_ret_table'];
		$this->name = "muthofun";
		$this->result = array();
		$this->keys = array("smsclientid", "messageid", "mobile-no", "error-code", "error-description");

	}

	function getTable() {
		
		global $db;
		global $config_table_prefix;
		$table = $config_table_prefix.$db->fetchRow("select `gateway_table` from ".TABLE_SMS_GATEWAYS." where `gateway_code` like 'muthofun'");
		return $table;
	}

	function setTable($table) {

		$this->table = $table;
	
	}

	
	function getSettings() {

		global $db;
		$result = $db->fetchAssoc("select * from ".$this->table);

		return $result;

	}

	function setDebug($val) {

		$this->debug = $val;

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

		if(!isset($_POST["username"]) || !$_POST["username"]) $this->addError($lng['users']['errors']['username_missing'].'<br />');
		if(!isset($_POST["password"]) || !$_POST["password"]) $this->addError($lng['users']['errors']['password_missing'].'<br />');

		if($this->getError()!='') {

			$array_fields = array( "username", "password" );

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
		$sql = "update ".$this->table." set ";

		$array_fields = array( "username", "password" );
		$sep = "";
		
		foreach ($array_fields as $field) {

			if(isset($_POST[$field])) $this->clean[$field] = escape($_POST[$field]); else $this->clean[$field] = '';

			$sql.=$sep." `$field` = '".$this->clean[$field]."'";
			$sep=",";

		}

		$db->query($sql);
		return 1;
	}

	function correctSettings() {
		
		global $lng;
		$array_settings = $this->getSettings();
		if(!$array_settings['username'] || !$array_settings['password']) {
			$this->setError(str_replace("::PROCESSOR::", "Muthofun", $lng['settings']['errors']['incomplete_smsg_settings']));
			return 0;
		}
		return 1;
	}

	function send($phone_no, $message, $object_id, $type='user') {

		$smsgw_settings = $this->getSettings();
		$username = urlencode($smsgw_settings['username']);
		$password = urlencode($smsgw_settings['password']);
 		$phone_no = substr($phone_no, 1);
 		// remove the + sign
		$to = urlencode($phone_no);
		$message = urlencode($message);

		$url="http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=$username&password=$password&mobiles=$phone_no&sms=$message&unicode=1";
		$result = array("success"=>1, "status"=>0, "message_id"=>'', 'mobile_no'=>0, 'error_message'=>'');

		if(_isCurl()) {
 			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			if(curl_error($ch)) {  
				$result['success'] = 0;
				$result['error_string'] = "cURL error: " . curl_error( $ch );
				$result['details'] .= $result['error_string'] . "\n";

			}
		
			if($result['success']) {
				$data = curl_exec($ch);
			}
			curl_close($ch);

		} else 

			$data = file_get_contents($url);

		
	
		// the message was not sent
		if(!isset($this->result['smslist']['sms']) && isset($this->result['smslist']['error']))  {
		
		}
			
		// interpret data
		if($data) {
		
			$this->parseXML($data);
			
			if(isset($this->result['messageid'])) { // success
				$result['message_id'] = $this->result['messageid'];
				$result['mobile_no'] = $this->result['mobile-no'];
				$result['details'] = "Message sent - message ID {$result['message_id']}\n";
			}
			else {
				$result['error_message'] = $this->result['error-description'];
				$result['details'] = "Error sending message: \"{$result['error_message']}\"";
			}
		
		} // end if data

		// log data
		$this->saveToDB($result, $object_id, $type);
	
	}

	function parseXML($data) {
	
	
		$this->parser=xml_parser_create("UTF-8");

		xml_set_object($this->parser, $this);
		xml_set_default_handler($this->parser,"_default"); 

		//Specify Handlers to start and ending tag
		xml_set_element_handler($this->parser, "start_element", "end_element");
		//Data Handler
		xml_set_character_data_handler($this->parser, "character_data");
		//match the exact case
		//xml_parser_set_option($this->parser, XML_OPTION_TARGET_ENCODING, $encoding);
		xml_parser_set_option($this->parser, XML_OPTION_CASE_FOLDING, 0);
		xml_parser_set_option($this->parser, XML_OPTION_SKIP_WHITE, 0);

		xml_parse ( $this->parser , $data);
		xml_parser_free($this->parser);
	
	}
	
	
	function start_element($parser, $element_name, $element_attrs)
	{
		$this->curr_element = $element_name;

	}

	function end_element($parser, $element_name)
	{
		
	}

	function character_data($parser,$data)
	{

		if(in_array($this->curr_element, $this->keys) ) {
		
			if(!isset($this->result[$this->curr_element]) || !$this->result[$this->curr_element]) // protection to overwrite the code
				$this->result[$this->curr_element] = $data;
		
		}
	
	}

	function saveToDB($result, $object_id, $type)
	{

		global $db;
		$addtosql = '';

		$keys = array('success', 'message_id', 'mobile_no', 'error_message', 'details');
		
		foreach($keys as $key) 
		{
			
			$addtosql .= "`".$key."`='".$result[$key]."',";
			
		}
		$addtosql = rtrim($addtosql,','); 

		$timestamp = date("Y-m-d H:i:s");
		$res = $db->query("INSERT INTO ".$this->ret_table." SET date='$timestamp', ".$addtosql);

		return 1;

	}

	function getReturnInfo($object_id, $type="user") {
	
		global $db;
		$result = $db->fetchAssoc("select * from ".$this->ret_table." where `type`='$type' and `object_id`='$object_id' order by `date` desc limit 1");
		return $result;
	
	}
}
?>
