<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

 class social_networks {

	public function __construct()
	{
		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."social_networks_settings";
		$this->error='';
 	}
	function getSettings ($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$sn_settings = $lc_cache->readCache("mod_sn_settings")) {

			global $db;
			$sn_settings = $db->fetchAssoc("select * from ".$this->settings_table);

			if($sn_settings['fb_access_token']) {

				global $appearance_settings;
				$date_format=$appearance_settings["date_format"];

				if($sn_settings['fb_access_token_expires']) $sn_settings['fb_access_token_expires_nice']= $db->fetchRow("select date_format(`fb_access_token_expires`,'$date_format')  from ".$this->settings_table);

			}

			$sn_settings['fb_pp_tabs_array'] = explode(",", $sn_settings['fb_pp_tabs']);
			
			$lc_cache->writeCache("mod_sn_settings", $sn_settings);

		}

		return $sn_settings;

	}

	function initTemplatesVals($smarty) {

		global $lng_sn;
		global $crt_lang, $config_abs_path;
		if(file_exists($config_abs_path.'/modules/social_networks/lang/'.$crt_lang.'.php'))
			require_once($config_abs_path.'/modules/social_networks/lang/'.$crt_lang.'.php');
		else 
			require_once($config_abs_path.'/modules/social_networks/lang/eng.php');

		global $smarty, $sn_settings;
		$sn_settings = $this->getSettings();
		$smarty->assign("sn_settings", $sn_settings);
		$smarty->assign("lng_sn", $lng_sn);

	}

	function check_form() {

		global $lng_sn;
		$err=0;
		if(checkbox_value("tweet_ads") && (!$_POST["tw_consumer_key"] || !$_POST["tw_consumer_secret"] || !$_POST["tw_access_token"] || !$_POST["tw_access_token_secret"])) { 
			$this->setError($lng_sn['error']['enable_tweet_ads']);
			$err=1;
		}

		if(checkbox_value("fb_post_ads") && (!$_POST["fb_appid"] || !$_POST["fb_secret"] || !$_POST["fb_access_token"])) { 
			$this->setError($lng_sn['error']['enable_fb_post_ads']);
			$err=1;
		}

		if(checkbox_value("enable_fb_page_plugin") && (!$_POST["fb_appid"])) { 
			$this->setError($lng_sn['error']['enable_fb_page_plugin']);
			$err=1;
		}

		if($err) {
			$array_checkboxes=array("enable_fb_like_button", "enable_tweet_button", "fb_lb_show_faces", "tweet_ads", "enable_gplus_button", "enable_fb_comments", "fb_post_ads", "enable_fb_page_plugin", "fb_pp_hide_cover", "fb_pp_show_facepile", "fb_pp_hide_cta", "fb_pp_small_header");
			$array_inputs=array("facebook_page_link", "twitter_account", "fb_lb_layout", "fb_lb_width", "fb_lb_action", "fb_lb_color", "fb_lb_locale", "tw_data_count", "tw_data_text", "tw_consumer_key", "tw_consumer_secret", "tw_access_token", "tw_access_token_secret", "gplus_size", "gplus_language", "fb_appid", "gplus_page_link", "fb_comments_posts", "fb_comments_color", "fb_secret", "fb_access_token", "youtube_link", "pinterest_link", "instagram_link", "linkedin_link", "fb_pp_width", "fb_pp_height", "enable_pinterest_button", "enable_linkedin_button");

			foreach($array_checkboxes as $key) $this->tmp[$key] = checkbox_value($key);
			
			foreach($array_inputs as $key) $this->tmp[$key] = cleanStr($_POST[$key]);
			
			$fb_pp_tabs='';
			$i=0;
			while (isset($_POST['fb_pp_tabs'][$i]) && $fb_pp_tab=$_POST['fb_pp_tabs'][$i]){
				if($i) $fb_pp_tabs_list.=',';
				$fb_pp_tabs_list.=$fb_pp_tab;
				$i++;
			}
			$this->tmp["fb_pp_tabs"] = $fb_pp_tabs_list;

			
		}
	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) { 
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		global $lng_sn;

		$this->check_form();
		if($this->getError()) return 0;

		$this->clean = array();
		$str_update = "";
		$array_checkboxes=array("enable_fb_like_button", "enable_fb_share_button", "enable_tweet_button", "fb_lb_show_faces", "tweet_ads", "enable_gplus_button", "enable_fb_comments", "fb_post_ads", "enable_fb_page_plugin", "fb_pp_hide_cover", "fb_pp_show_facepile", "fb_pp_hide_cta", "fb_pp_small_header", "enable_pinterest_button", "enable_linkedin_button");

		foreach ($array_checkboxes as $field) {

			$this->clean[$field] = checkbox_value($field);
			if($str_update) $str_update.=", ";
			$str_update.="`$field` = '".$this->clean[$field]."'";

		}

		$array_inputs=array("facebook_page_link", "twitter_account", "fb_lb_layout", "fb_lb_width", "fb_lb_action", "fb_lb_color", "fb_lb_locale", "tw_data_count", "tw_data_text", "tw_consumer_key", "tw_consumer_secret", "tw_access_token", "tw_access_token_secret", "gplus_size", "gplus_language", "fb_appid", "gplus_page_link", "fb_comments_posts", "fb_comments_color",  "fb_secret", "fb_access_token", "fb_pageid", "fb_page_access_token", "fb_access_token", "youtube_link", "pinterest_link", "instagram_link", "linkedin_link", "fb_pp_width", "fb_pp_height");

		foreach ($array_inputs as $field) {

			$this->clean[$field] = escape($_POST[$field]);
			$str_update.=", `$field` = '".$this->clean[$field]."'";

		}

		$fb_pp_tabs_list='';
		$i=0;
		while (isset($_POST['fb_pp_tabs'][$i]) && $fb_pp_tab=$_POST['fb_pp_tabs'][$i]){
			if($i) $fb_pp_tabs_list.=',';
			$fb_pp_tabs_list.=$fb_pp_tab;
			$i++;
		}
		$this->clean["fb_pp_tabs"] = $fb_pp_tabs_list;
		$str_update.=", `fb_pp_tabs` = '".$this->clean['fb_pp_tabs']."'";

		$db->query("update `".$this->settings_table."` set $str_update;");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_sn_settings");

		return 1;

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

	function tweetAd($id, $ad_url, $title) {

		global $config_abs_path;
		global $sn_settings;
		require_once($config_abs_path.'/libs/twitteroauth/OAuth.php');
		require_once($config_abs_path.'/libs/twitteroauth/twitteroauth.php');

		$tweet = new TwitterOAuth($sn_settings['tw_consumer_key'], $sn_settings['tw_consumer_secret'], $sn_settings['tw_access_token'], $sn_settings['tw_access_token_secret'] );

		// make tweet content
		$tweet_content = $title." ".$ad_url;
		$tweet_content = get_start_string($tweet_content, 137);
		
		//$hashtags = "";
		
		$result = $tweet->post('statuses/update', array('status' => $tweet_content));
// _print_r($result);

	}

	function setAccessToken($fb_access_token, $fb_appid, $fb_secret, $fb_pageid, $pageAccessToken, $expires) {

		global $db;
		$db->query("update ".$this->settings_table." set `fb_access_token`='".escape($fb_access_token)."', `fb_appid`='".escape($fb_appid)."', `fb_secret`='".escape($fb_secret)."', `fb_pageid`='".escape($fb_pageid)."', `fb_page_access_token`='".escape($pageAccessToken)."'");

		if($expires) {
			$now = time();
			$expires = $expires + $now;
			$db->query("update ".$this->settings_table." set `fb_access_token_expires`='".date('Y-m-d H:i:s', $expires)."'");
		}
		else 
			$db->query("update ".$this->settings_table." set `fb_access_token_expires`=''");

		$lc_cache = new cache();
		$lc_cache->clearCache("mod_sn_settings");

	}

	function setPageAccessToken($access_token) {

		global $db;
		$db->query("update ".$this->settings_table." set `fb_page_access_token`='".escape($access_token)."'");

		$lc_cache = new cache();
		$lc_cache->clearCache("mod_sn_settings");

	}

	function setPageID($pageid) {

		global $db;
		$db->query("update ".$this->settings_table." set `fb_pageid`='".escape($pageid)."'");

		$lc_cache = new cache();
		$lc_cache->clearCache("mod_sn_settings");

	}




	function verifyAccessToken() {

		global $sn_settings;
		if(!$sn_settings) $sn_settings = $this->getSettings();

		if($sn_settings['fb_access_token']) {

			global $db;

			$current_date = date("Y-m-d");

			// 3 days before
			//$date_x_days_before_start = $db->fetchRow("select date_sub('$current_date', INTERVAL 4 DAY)");
			$date_x_days_before_end = $db->fetchRow("select date_add('$current_date', INTERVAL 3 DAY)");

			$expires = $db->fetchRow("select count(*) from ".$this->settings_table." where `fb_access_token_expires` between '$current_date' and '$date_x_days_before_end'");

			// send mail to admin
			if($expires) {

				$mail2send=new mails();
				$mail2send->setMailTemplate("facebook_access_token_will_expire");

				global $config_abs_path;
				$mail2send->init();

				$array_subject = array();
				$array_message = array();
				$mail2send->composeAndSend("", $array_message, $array_subject);

			}

		}

	}

}
?>