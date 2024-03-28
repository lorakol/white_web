<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class promo {

	var $settings_table;
	var $tmp;
	var $error;

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."promo_settings";

	}

	function initTemplatesVals($smarty) {

	}

	static function getSettings() {

		global $db, $config_table_prefix;
		$settings = $db->fetchAssoc("select * from ".$config_table_prefix."promo_settings");
		return $settings;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db, $lng, $config_table_prefix;;

		if(is_numeric($_POST['no_days']) && $_POST['no_days']>0) $no_days = $_POST['no_days']; else $no_days = 3;
		if(is_numeric($_POST['no_visits']) && $_POST['no_visits']>0) $no_visits = $_POST['no_visits']; else $no_visits = 15;

		$db->query("update `".$this->settings_table."` set `no_days` = '$no_days', `no_visits` = '$no_visits';");
		return 1;
	}

	function sendPromo() {

		global $db;
		global $ads_settings, $settings, $seo_settings;

		global $mail_settings;
		if(empty($mail_settings)) $mail_settings = settings::getMailSettings();
		$html_mails=$mail_settings['html_mails'];
		if($html_mails) $amp = "&amp;"; else $amp = "&";

		global $crt_lang;
		$title_var ="`title`";
		if($ads_settings['translate_title_description']) {
			global $languages;
			if(empty($languages)) $languages = languages::getActiveLanguages();
			if(count($languages)>1) {
				$title_var = "`title_$crt_lang` as `title`";
			}
		}

		$psettings = promo::getSettings();
		$mail2send=new mails();
		$mail2send->setMailTemplate("promote_your_ad");

		$current_date = date("Y-m-d");

		$dn1 = $psettings['no_days']+1;
		$date_x_days_before_start = $db->fetchRow("select date_sub('$current_date', INTERVAL $dn1 DAY)");
		$date_x_days_before_end = $db->fetchRow("select date_sub('$current_date', INTERVAL {$psettings['no_days']} DAY)");

		// get all listings which were posted "no_days" days ago and have less than "no_visits" visits
		$result=$db->query("select ".TABLE_ADS.".id, $title_var, user_id, ".TABLE_USERS.".`username`, ".TABLE_USERS.".`email`, ".TABLE_USERS.".`contact_name` from ".TABLE_ADS." 
		left join ".TABLE_USERS." on ".TABLE_ADS.".user_id=".TABLE_USERS.".id 
		where ".TABLE_ADS.".active=1 and (`date_added` between '$date_x_days_before_start' and '$date_x_days_before_end') and `viewed`<'{$psettings['no_visits']}';");

		while($row = $db->fetchAssocRes($result)) {

			$id = $row['id'];
			global $config_abs_path;
			require_once $config_abs_path."/classes/users.php";
			$user_details = listings::getUserDetails($id);
			$mail2send->init($user_details['email'], $user_details['name']);

			if(!$user_details) continue;

			$details_link = listings::makeDetailsLink($id, $user_details['key']);
			$title = listings::getTitle($id);

			$array_subject = array("id"=>$id, "ad_id"=>$id, "title" => $title);

			$array_message = array("id"=>$id, "ad_id"=>$id, "username"=>$user_details['username'], "contact_name"=>$user_details['name'], "details_link"=>$details_link, "title" => $title, "no_visits" => $psettings['no_visits'], "no_days" => $psettings['no_days']);

			$mail2send->composeAndSend("", $array_message, $array_subject);

	}
		// compose and send the promo message

	}

}
?>
