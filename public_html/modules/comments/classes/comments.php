<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class comments {

	var $table;
	var $settings_table;

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."comments";
		$this->settings_table = $config_table_prefix."comments_settings";
		$this->error = array();
		$this->info = '';

	}

	function getId() {

		return $this->id;

	}

	function Delete($id) {

		global $db;
		$res_del=$db->query('delete from '.$this->table.' where `id`="'.$id.'"');
		return 1;
	}

	function Enable($id) {

		global $db;
		$res_del=$db->query('update '.$this->table.' set `active`=1 where `id`="'.$id.'"');
		return 1;
	}

	function Disable($id) {

		global $db;
		$res_del=$db->query('update '.$this->table.' set `active`=0 where `id`="'.$id.'"');
		return 1;
	}

	function Block($id) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$ip=$this->getIp($id);
		$res=$db->query('delete from '.TABLE_BLOCKED_IPS.' where ip like "'.$ip.'"');
		$res1=$db->query('insert into '.TABLE_BLOCKED_IPS.' values ("'.$ip.'")');

	}

	function Unblock($id) {

		global $db;
		global $config_demo;
		if($config_demo==1) return;

		$ip=$this->getIp($id);
		$res=$db->query('delete from '.TABLE_BLOCKED_IPS.' where ip like "'.$ip.'"');

	}

	function getIp($id) {

		global $db;
		$result=$db->fetchRow('select `ip` from '.$this->table.' where `id`="'.$id.'"');
		return $result;

	}

	function deleteListing($id) {

		global $db;
		$db->query("delete from ".$this->table." where listing_id = $id");
		return 1;

	}

	function getComment($id) {

		global $db;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format"];

		global $crt_lang;
		$title_var ="`title`";
		global $ads_settings;
		if($ads_settings['translate_title_description']) {
			global $languages;
			if(empty($languages)) $languages = common::getCachedObject("base_languages");
			if(count($languages)>1) {
				$title_var = "`title_$crt_lang` as `title`";
			}
		}

		$result=$db->fetchAssoc("select ".$this->table.".*, ".TABLE_ADS.".$title_var, date_format(".$this->table.".`date`,'$date_format') as `date_nice` from ".$this->table." LEFT JOIN ".TABLE_ADS." on ".$this->table.".listing_id = ".TABLE_ADS.".`id` where ".$this->table.".`id`=$id");

		$result['name'] = cleanStr($result['name']);
		$result['title'] = cleanStr($result['title']);
		$result['content'] = cleanStr($result['content']);

		return $result;

	}

	function getNo($id=0) {

		global $db;
		$where = '';
		if($id) $where = " where `listing_id`=$id";
		$no=$db->fetchRow("select count(*) from ".$this->table.$where);
		
		return $no;

	}

	function getNoActive($id=0) {

		global $db;
		$where = '';
		if($id) $where = ' and `listing_id`="'.$id.'"';
		$no=$db->fetchRow('select count(*) from '.$this->table.' where `active`=1'.$where);

		return $no;

	}

	function getComments($listing_id, $page, $no_per_page) {

		global $db;
		$start=($page-1)*$no_per_page;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$sett = $this->getSettings();
		$str_logo = '';
		$str_logo_join = '';

		if($sett['logo_field']) {
			$str_logo= ", ".TABLE_USERS.".`".$sett['logo_field']."` as `logo`, ".TABLE_USERS.".* ";
			$str_logo_join = " LEFT JOIN ".TABLE_USERS." on ".TABLE_USERS.".`id` = ".$this->table.".`user_id`";
		}

		$str_active="";
		if(!$sett['allow_owner_activate'])
			$str_active=" and ".$this->table.".`active`=1 ";
		
		
		$result=$db->fetchAssocList("select *, ".$this->table.".`id` as `comment_id`, ".$this->table.".`active` as `comment_active`, date_format(".$this->table.".`date`,'$date_format') as `date_nice`$str_logo from ".$this->table." $str_logo_join where `listing_id`=$listing_id $str_active order by ".$this->table.".`date` desc limit $start, $no_per_page");

		$i=0;
		$array=array();
		foreach($result as $row) {
			$array[$i]=$row;
			$array[$i]['content'] = str_replace("\n", "<br/>",$array[$i]['content']);
			$i++;
		}

		return $array;

	}

	function getAll($page,$no_per_page) {

		global $db;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format"];

		global $crt_lang;
		$title_var ="`title`";
		global $ads_settings, $settings;
		if($ads_settings['translate_title_description']) {
			global $languages;
			if(empty($languages)) $languages = common::getCachedObject("base_languages");
			if(count($languages)>1) {
				$title_var = "`title_$crt_lang` as `title`";
			}
		}

		$start=($page-1)*$no_per_page;
		$result=$db->fetchAssocList("select ".$this->table.".*, ".TABLE_ADS.".$title_var, date_format(".$this->table.".`date`,'$date_format') as `date_nice`, ( ".TABLE_BLOCKED_IPS.".ip is not null ) as blocked from ".$this->table."
		LEFT JOIN ".TABLE_ADS." on ".$this->table.".listing_id = ".TABLE_ADS.".`id`
		LEFT JOIN ".TABLE_BLOCKED_IPS." on ".$this->table.".ip = ".TABLE_BLOCKED_IPS.".ip
		order by `date` desc limit $start, $no_per_page");
		$i=0;
		$array=array();
		foreach($result as $row) {
			$array[$i]=$row;
			$array[$i]['content'] = str_replace("\n", "<br/>",$array[$i]['content']);
			if(isset($array[$i]['user_id']) && $array[$i]['user_id']) {
				global $config_abs_path;
				require_once $config_abs_path.'/classes/users.php';

				if($settings['enable_username'])
					$array[$i]['username']=users::getUsername($array[$i]['user_id']);
				else
					$array[$i]['username'] = users::getEmail($array[$i]['user_id']);
			}
			$i++;
		}
		return $array;
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

	function check_form ($comm_settings, $id) {

		global $lng;
		global $lng_comments;

		global $crt_usr, $settings;

		//if(empty($_POST['comments_listing_id'])) $this->addError("comments_listing_id", $lng_comments['error']['listing_id_missing']);

		if($comm_settings['use_name']==1 && empty($_POST['comments_name'])) $this->addError('comments_name', $lng_comments['error']['name_missing']);

		if(empty($_POST['comments_content'])) $this->addError('comments_content', $lng_comments['error']['content_missing']);
		else if($comm_settings['badwords_check']) {

			$badword=new badwords();
			if($badword->check(escape($_POST['comments_content']))) $this->addError('comments_content', $lng_comments['errors']['badwords']);

		}

		if( $comm_settings['use_email']==1 && empty($_POST['comments_email'])) $this->addError('comments_email', $lng_comments['error']['email_missing']);

		if($comm_settings['use_email'] && !empty($_POST['comments_email']) && !validator::valid_email($_POST['comments_email'])) $this->addError('comments_email', $lng_comments['error']['invalid_email']);

		if( $comm_settings['use_website'] && $comm_settings['use_website']==1 && empty($_POST['comments_website'])) $this->addError('comments_website', $lng_comments['error']['website_missing']);

		if(!empty($_POST['comments_website']) && !validator::valid_url($_POST['comments_website'])) $this->addError('comments_website', $lng_comments['error']['invalid_website']);


		if($comm_settings['captcha']==1 || ($comm_settings['captcha']==2 && !$crt_usr)) {
			global $config_abs_path;
			require_once $config_abs_path."/include/captcha.php";

			if($settings['enable_recaptcha']) $field = 'recaptcha_div_comm'; else $field = 'number';

			$error = checkCaptcha();
 			if($error) $this->addError($field, $error);

		}

		return 1;
	}

	function add($id) {

		global $db;
		global $lng_comments, $lng;
		$this->clean=array();

		$comm_settings = $this->getSettings();

		// get auth information
		checkAuth();
		global $crt_usr, $is_admin;
		if(!$crt_usr) $crt_usr=0;

		$this->check_form($comm_settings, $id);

		if($this->getError()) return 0;

		if(!empty($_POST['comments_email'])) $this->clean['email'] = escape($_POST['comments_email']); else $this->clean['email']='';
		if(!empty($_POST['comments_website'])) $this->clean['website'] = escape($_POST['comments_website']); else $this->clean['website']='';
		if(!empty($_POST['comments_name'])) $this->clean['name'] = escape($_POST['comments_name']); else $this->clean['name']='';
		$this->clean['content'] = escape($_POST['comments_content']);

		// strip not allowed html
		$this->clean['content'] = strip_tags($this->clean['content'], tags_list($comm_settings['allowed_html']));

		$active = 0;
		if($comm_settings['admin_verification']==0 || ($comm_settings['admin_verification']==2 && $crt_usr)) $active=1;

		$this->clean['date']=date('Y-m-d H:i:s');
		$db->query('insert into '.$this->table.' set `name` = "'.$this->clean['name'].'", `content` = "'.$this->clean['content'].'",  `email` =  "'.$this->clean['email'].'", `website` = "'.correct_href($this->clean['website']).'", `listing_id` = "'.$id.'", `user_id` = "'.$crt_usr.'", `ip` = "'.getRemoteIp().'", `date` = "'.$this->clean['date'].'", `active` = '.$active.';');

		if($active==1) $this->setInfo($lng_comments['info']['comment_added']);
		else $this->setInfo($lng_comments['info']['comment_pending']);

		// send mail to owner
		global $config_abs_path;
		require_once $config_abs_path."/classes/mails.php";
		require_once $config_abs_path."/classes/mail_templates.php";

		$owner_id = listings::getUser($id);
		global $settings;
		if($owner_id) {
			$owner_info = $db->fetchAssoc("select `{$settings['contact_name_field']}`, `email` from ".TABLE_USERS." where id='$owner_id'");
		} else {
			$owner_info = $db->fetchAssoc("select `mgm_name` as `{$settings['contact_name_field']}`, `mgm_email` as `email` from ".TABLE_ADS_EXTENSION." where `id` = '".$id."'");
		}

		$details_link = listings::makeDetailsLink($id);
		$ad_title = cleanStr(listings::getTitle($id));

		// send email
		$mail2send=new mails();
		$mail2send->init($owner_info['email'], $owner_info[$settings['contact_name_field']]);

		$array_subject = array("ad_id"=>$id, "contact_name"=>$owner_info[$settings['contact_name_field']], "ad_link"=> $details_link, "title"=>$ad_title, "sender_name"=>cleanStr($this->clean['name']), "sender_email"=>cleanStr($this->clean['email']), "message" => $this->clean['content']);

		$array_message = array("ad_id"=>$id, "contact_name"=>$owner_info[$settings['contact_name_field']], "ad_link"=> $details_link, "title"=>$ad_title, "sender_name"=>cleanStr($this->clean['name']), "sender_email"=>cleanStr($this->clean['email']), "message" => $this->clean['content']);

		$sent = $mail2send->composeAndSend("new_comment", $array_message, $array_subject);

		return 1;

	}

	// admin side edit
	function edit($id) {

		global $db;
		$this->clean=array();

		if(isset($_POST['email'])) $this->clean['email'] = escape($_POST['email']); else $this->clean['email']='';
		if(isset($_POST['website'])) $this->clean['website'] = escape($_POST['website']); else $this->clean['website']='';

		if(isset($_POST['name'])) $this->clean['name'] = escape($_POST['name']); else $this->clean['name']='';
		$this->clean['content'] = escape($_POST['content']);

		$db->query('update '.$this->table.' set `name` = "'.$this->clean['name'].'", `content` = "'.$this->clean['content'].'",  `email` =  "'.$this->clean['email'].'", `website` = "'.correct_href($this->clean['website']).'" where id='.$id.';');

		return 1;

	}

	// user side edit
	function user_edit($id) {

		global $db;
		$this->clean=array();

		if(isset($_POST['comments_email_edit'])) $this->clean['email'] = escape($_POST['comments_email_edit']); else $this->clean['email']='';
		if(isset($_POST['comments_website_edit'])) $this->clean['website'] = escape($_POST['comments_website_edit']); else $this->clean['website']='';

		if(isset($_POST['comments_name_edit'])) $this->clean['name'] = escape($_POST['comments_name_edit']); else $this->clean['name']='';
		$this->clean['content'] = escape($_POST['comments_content_edit']);

		$db->query('update '.$this->table.' set `name` = "'.$this->clean['name'].'", `content` = "'.$this->clean['content'].'",  `email` =  "'.$this->clean['email'].'", `website` = "'.correct_href($this->clean['website']).'" where id='.$id.';');

		return 1;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) {
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db;
		$this->clean=array();

		$str_update = '';

		$array_checkboxes = array("require_login", "badwords_check", "html_editor", "allow_owner_delete", "allow_owner_edit", "allow_owner_activate");

		foreach ($array_checkboxes as $field) {

			$this->clean[$field] = checkbox_value($field);
			$str_update.=" `$field` = '".$this->clean[$field]."', ";
		}

		$array_inputs_zero = array("admin_verification", "use_name", "use_email", "use_website", "comments_on_page", "captcha");

		foreach ($array_inputs_zero as $field) {

			if(isset($_POST[$field]) && $_POST[$field]) $this->clean[$field]=escape($_POST[$field]); else $this->clean[$field]=0;
			$str_update.=" `$field` = '".$this->clean[$field]."',";

		}


		$array_inputs_null = array("allowed_html", "logo_field");

		$no = count($array_inputs_null);
		$i=1;
		foreach ($array_inputs_null as $field) {

			$this->clean[$field] = escape($_POST[$field]);
			$str_update.=" `$field` = '".$this->clean[$field]."'";
			if($i<$no) $str_update.=", ";
			$i++;
		}

		global $languages;
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['terms_'.$lang_id]) && $_POST['terms_'.$lang_id]) $this->clean['terms_'.$lang_id]=escape($_POST['terms_'.$lang_id]); else $this->clean['terms_'.$lang_id]='';

			$str_update.=", `terms_$lang_id` = '".$this->clean['terms_'.$lang_id]."' ";
		}

		if(isset($_POST['choose_categ']) && $_POST['choose_categ']=="choose")
		{
			$this->clean['categories']='';
			$i=0;
			while (isset($_POST['categories'][$i])){
				$category=escape($_POST['categories'][$i]);
				if($i) $this->clean['categories'].=',';
				$this->clean['categories'].=$category;
				$i++;
			}
		} else $this->clean['categories']='0';
		$str_update.=", `categories` = '".$this->clean['categories']."' ";

		$db->query("update ".$this->settings_table." set ".$str_update);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_comments_settings");

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered
		$lc_cache = new cache();
		global $crt_lang;
		if($overwrite || !$comm_settings = $lc_cache->readCache("mod_comments_settings", $crt_lang)) {

			global $db;
			$comm_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$comm_settings['array_allowed_html'] = explode(",", $comm_settings['allowed_html']);
			$comm_settings['categories_array'] = array();
			if($comm_settings['categories']!=0) $comm_settings['categories_array'] = explode(",", $comm_settings['categories']);
			$lc_cache->writeCache("mod_comments_settings", $comm_settings, $crt_lang);

		}
		return $comm_settings;

	}

	function initTemplatesVals($smarty) {

/*		global $lng_comments;
		$comments_settings = $this->getSettings();
		$smarty->assign("comments_settings", $comments_settings);
		$smarty->assign("lng_comments", $lng_comments);
*/
	}

	function autoCheckLang() {

		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("terms", $fields_settings)) $db->query("alter table ".$this->settings_table." change `terms` `terms_$default_lang` text");
		$fields_settings = $db->getTableFields($this->settings_table);

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("terms_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `terms_$lang_id` text");
		}
	}

	function deleteListingComments($id) {

		if(!$id) return;
		global $db, $config_table_prefix;
		$db->query("delete from ".$config_table_prefix."comments where listing_id = $id");

	}

}
?>
