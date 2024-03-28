<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class price_drop_alert {

	var $table;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."price_drop_alert";
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
	
	function sendAlert($ad_id, $user_id, $email, $old_price, $new_price, $details_link, $title, $key, $html_mails, $amp) {

		global $db, $settings;

		$mail2send=new mails();
		$mail2send->setMailTemplate("price_drop_alert");

		if($user_id) {

			$user = new users();
			$user_details = $user->getUser($user_id);	
			$contact_email = $user_details['email'];
			$contact_name = $user_details[$settings['contact_name_field']];

		}
		else {
			$contact_name = '';
			$contact_email = $email;
		}

		global $config_live_site;
		$remove_link = $config_live_site."/modules/price_drop_alert/remove_alert.php?id=".$ad_id.$amp."key=".$key;
		if($html_mails) $remove_link = '<a href="'.$remove_link.'">'.$remove_link.'</a>';
		
		$mail2send->init($contact_email, $contact_name);

		$array_subject = array("ad_id"=>$ad_id, "title" => $title);

		$array_message = array("ad_id"=>$ad_id, "contact_name"=>$contact_name, "details_link"=>$details_link, "title" => $title, "remove_link"=>$remove_link, "price_from" => $old_price, "price_to" => $new_price);

		$mail2send->composeAndSend("", $array_message, $array_subject);


	}

	function checkAlerts($ad_id) {

		global $config_abs_path;
		require_once $config_abs_path."/classes/mails.php";
		require_once $config_abs_path."/classes/mail_templates.php";

		global $db;
		global $crt_lang, $ads_settings;
		$title_var ="`title`";
		if($ads_settings['translate_title_description']) {
			global $languages;
			if(empty($languages)) $languages = languages::getActiveLanguages();
			if(count($languages)>1) {
				$title_var = "`title_$crt_lang` as `title`";
			}
		}

		$new_data = $db->fetchAssoc("select `price`, `active`, $title_var from ".TABLE_ADS." where `id`='$ad_id'");

		// only active ads
		if(!$new_data['active']) return;
		
		$new_price = $new_data['price'];
		$details_link = listings::makeDetailsLink($ad_id);
		$title = $new_data['title'];

		global $config_abs_path;
		require_once $config_abs_path."/classes/users.php";

		global $mail_settings;
		if(empty($mail_settings)) $mail_settings = settings::getMailSettings();
		$html_mails=$mail_settings['html_mails'];
		if($html_mails) $amp = "&amp;"; else $amp = "&";

		
		$result = $db->query("select * from ".$this->table." where `ad_id` = '$ad_id'");
		while($row = $db->fetchAssocRes($result)) {
		
			$old_price = $row['init_price'];
			if($old_price>$new_price) {
			
				$user_id = $row['user_id'];
				$email = $row['email'];
				$key = $row['key'];
				$this->sendAlert($ad_id, $user_id, $email, $old_price, $new_price, $details_link, $title, $key, $html_mails, $amp);
			
			}
		
		}

		$this->updateAlert($ad_id, $new_price);
	
	}
	
	function updateAlert($ad_id, $new_price) {
	
		global $db;
		$db->query("update ".$this->table." set `init_price`='$new_price' where `ad_id`='$ad_id'");
	
	}
	
	function deleteAlert($ad_id, $key) {
	
		global $db;
		$db->query("delete from ".$this->table." where `ad_id` = '$ad_id' and `key` like '$key'");
		return;
	
	}

	function isKeyCorrect($ad_id, $key) {
	
		global $db;
		$result = $db->fetchRow("select `id` from ".$this->table." where `ad_id` = '$ad_id' and `key` like '$key'");
		return $result;

	}
	

	
	function check_form ($id) {

		global $lng;
		global $lng_price_drop_alert;

		global $crt_usr, $settings;

		if( empty($_POST['pd_email'])) $this->addError('pd_email', $lng_price_drop_alert['error']['email_missing']);
		
		if(!empty($_POST['pd_email']) && !validator::valid_email($_POST['pd_email'])) $this->addError('pd_email', $lng['users']['errors']['invalid_email']);

		return 1;

	}

	function add($id) {
	
		global $db;
		global $lng_price_drop_alert, $lng;
		$this->clean=array();

		// get auth information
		checkAuth();
		global $crt_usr;
		if(!isset($crt_usr) || !$crt_usr) $crt_usr=0;

		$this->check_form($id);

		if($this->getError()) return 0;

		if(!empty($_POST['pd_email'])) $this->clean['email'] = escape($_POST['pd_email']); else $this->clean['email']='';
		
		$price = listings::getPrice($id);
		$key = generate_random();
		
		$this->clean['date']=date('Y-m-d H:i:s');
		$db->query('insert into '.$this->table.' set `email` =  "'.$this->clean['email'].'", `user_id` = "'.$crt_usr.'", `ad_id` = "'.$id.'", `init_price` = "'.$price.'", `date` = "'.$this->clean['date'].'", `key` = "'.$key.'";');

		$this->setInfo($lng_price_drop_alert['info']['alert_added']);

		return 1;

	}

	function hasAlert($ad_id, $user_id) {

		global $db;
		$exists = $db->fetchRow("select count(*) from ".$this->table." where `ad_id`='$ad_id' and `user_id`='$user_id'");
		return $exists;
	
	}
	
}
?>
