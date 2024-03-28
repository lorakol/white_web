<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class claim_listing {

	var $table;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."claim_listing";
		$this->error = array();
		$this->info = '';

	}

	
	function getError() {
	
		return $this->error;

	}

	function addError($err_field, $err_text) {

		array_push($this->error, array("field"=> $err_field, "error" => $err_text));

	}

	function setError($err_field, $err_text) {

		$this->error =  array("field"=> $err_field, "error" => $err_text);

	}

	function setInfo($str){

		$this->info = $str;

	}

	function getInfo() {

		return $this->info;

	}
	
	function claim($id) {

		global $db, $settings, $lng_claim_listing;

		$this->check_form($id);

		if($this->getError()) return 0;
		
		if(!empty($_POST['claim_email'])) $this->clean['email'] = escape($_POST['claim_email']); else $this->clean['email']='';

		$this->setInfo($lng_claim_listing['email_sent']);
		
		// check if this ad is posted with this email
		$ad_info = $db->fetchAssoc("select `mgm_email`, `mgm_name`, `activation` from ".TABLE_ADS_EXTENSION." where id='$id'");
		if($ad_info['mgm_email'] != $this->clean['email']) return 1;
		
		$mail2send=new mails();
		$mail2send->setMailTemplate("claim_listing");

		$contact_name = $ad_info['mgm_name'];
		$contact_email = $this->clean['email'];
		$title = listings::getTitle($id);

		global $config_live_site;
		$details_link = listings::makeDetailsLink($id, $ad_info['activation']);
		
		$mail2send->init($contact_email, $contact_name);

		$array_subject = array("ad_id"=>$id, "title"=>$title);

		$array_message = array("ad_id"=>$id, "contact_name"=>$contact_name, "details_link"=>$details_link, "title"=>$title);

		$mail2send->composeAndSend("", $array_message, $array_subject);

		return 1;
	}

	function check_form ($id) {

		global $lng;
		global $lng_claim_listing;

		global $crt_usr, $settings;

		if( empty($_POST['claim_email'])) $this->addError('claim_email', $lng_claim_listing['error']['email_missing']);
		
		if(!empty($_POST['claim_email']) && !validator::valid_email($_POST['claim_email'])) $this->addError('claim_email', $lng['users']['errors']['invalid_email']);
		
		// check captcha if enabled
		global $settings;
		if($settings['contact_captcha'] ) { 
			global $config_abs_path;
			require_once $config_abs_path."/include/captcha.php";
			if($settings['enable_recaptcha']) $field = 'recaptcha_div_claim'; else $field = 'number';
			$error = checkCaptcha();
			if($error) $this->addError($field, $error);

		}

		return 1;

	}

	
}
?>
