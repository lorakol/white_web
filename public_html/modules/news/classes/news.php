<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class news {

	var $table;
	var $settings_table;
	var $info='';
	var $error='';
	var $image='';

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."news";
		$this->settings_table = $config_table_prefix."news_settings";

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

	function getNo() {
	
		global $db;
		global $crt_lang;
		$no=$db->fetchRow('select count(*) from '.$this->table.' where `lang_id` = "'.$crt_lang.'"');
		return $no;

	}

	function getArticle($id) {

		global $db;

		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$sett = $this->getSettings();

		$result=$db->fetchAssoc("select *, date_format(".$this->table.".`date`,'$date_format') as `date_nice` from ".$this->table." where ".$this->table.".`id`='$id'");

		return $result;

	}

	function getNews($page, $ads_per_page) {

		global $db;
		global $appearance_settings;
		global $crt_lang;
		$date_format=$appearance_settings["date_format"];

		$start = 0;
		$start=($page-1)*$ads_per_page;

		$result=$db->fetchAssocList("select *, date_format(".$this->table.".`date`,'$date_format') as `date_nice` from ".$this->table."
		where ".$this->table.".`active`=1 and `lang_id` = '$crt_lang' order by ".$this->table.".`order_no` desc limit $start, $ads_per_page");

		return $result;

	}

	function getAll($page, $no) {

		global $db;
		$start=($page-1)*$no;
		global $appearance_settings;
		$date_format=$appearance_settings["date_format_long"];

		$sett = $this->getSettings();

		$result=$db->fetchAssocList("select ".$this->table.".*, date_format(".$this->table.".`date`,'$date_format') as `date_nice`, ".TABLE_LANGUAGES.".name, ".TABLE_LANGUAGES.".image as language_image
		from ".$this->table." 
		left join ".TABLE_LANGUAGES." on ".TABLE_LANGUAGES.".id = ".$this->table.".lang_id
		order by ".$this->table.".`order_no` desc limit $start, $no");
		
		$i=0;
		foreach($result as $n) {
			$result[$i]['order_up'] = $this->canOrderUp($result[$i]['id'], $result[$i]['order_no']);
			$result[$i]['order_down'] = $this->canOrderDown($result[$i]['id'], $result[$i]['order_no']);

			$i++;
		}
		
		return $result;

	}

	function canOrderUp($id, $order_no) {

		global $db;
		$exists = $db->fetchRow("select `order_no` from ".$this->table." where `order_no`>$order_no order by order_no desc limit 1");
		return $exists;

	}

	function canOrderDown($id, $order_no) {

		global $db;
		$exists = $db->fetchRow("select `order_no` from ".$this->table." where `order_no`<$order_no order by order_no asc limit 1");
		return $exists;

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

	function setInfo($str){

		$this->info = $str;

	}

	function getInfo() {

		return $this->info;

	}

	function getTmp() {
	
		return $this->tmp;

	}

	function check_form () {

		global $lng;
		global $lng_news;
		global $languages;

		$this->error='';
		$this->tmp=array();

		// check if at least a language is set
		$array_lang = array();
		$no_lang = count($languages);
		if($no_lang>1) {
			$no = 0;
			foreach($languages as $lang) {
				$lang_id = $lang['id'];
				if(isset($_POST['language_'.$lang_id]) && $_POST['language_'.$lang_id]=="on") { $array_lang[$no] = $lang['id']; $no++; }
			}
			if($no==0) $this->addError($lng_news['error']['choose_at_least_one_lang']."<br/>");

		}

		// image
		if($_FILES['image']['name']) {
			global $config_abs_path;
			$this->image=new image('image',$config_abs_path.'/modules/news/images','news');
			$allowedtypes=array("jpeg", "jpg", "png", "gif");
			$this->image->setTypes($allowedtypes);
			if(!$this->image->verify()) $this->addError($lng_news['errors']['invalid_image']."<br/>");
		}


		//summary
		foreach($array_lang as $lang) {
			if(!isset($_POST['summary_'.$lang]) || !$_POST['summary_'.$lang]) { 
				if($no_lang==1) $this->addError($lng_news['error']['enter_summary']."<br/>"); 
				else  $this->addError($lng_news['error']['enter_summary_for_selected']."<br/>"); 
				break;
			}
		}

		//content
		foreach($array_lang as $lang) {
			if(!isset($_POST['content_'.$lang]) || !$_POST['content_'.$lang]) { 

				if($no_lang==1) $this->addError($lng_news['error']['enter_content']."<br/>"); 
				else  $this->addError($lng_news['error']['enter_content_for_selected']."<br/>"); 
				break;
			}
		}

		if($this->error!='') {
			$this->tmp = array();
			if($no_lang>1) {
			foreach($languages as $lang) {
				$lang_id = $lang['id'];
				if(isset($_POST['language_'.$lang_id]) && $_POST['language_'.$lang_id]=="on") { 
					$this->tmp['language_'.$lang['id']] = 1; 
				} else $this->tmp['language_'.$lang['id']] = 0;
			}
			}

			foreach($languages as $lang) {
				$this->tmp['title_'.$lang['id']] = cleanStr($_POST['title_'.$lang['id']]);
				$this->tmp['summary_'.$lang['id']] = cleanStr($_POST['summary_'.$lang['id']]);
				$postedValue = $_POST['content_'.$lang['id']];

				if (!_get_magic_quotes_gpc())
					$this->tmp['content_'.$lang['id']]=addslashes($postedValue);
				else
					$this->tmp['content_'.$lang['id']]=$postedValue;
			}

			// date
			if(isset($_POST['date']) && $_POST['date']) $this->tmp['date'] = $_POST['date']; else $this->tmp['date'] = ''; 
			// published
			if(isset($_POST['active']) && $_POST['active']=="on") $this->tmp['active'] = 1; else $this->tmp['active'] = 0; 
		}

		return 1;
	}

	function add() {
	
		global $db;
		global $lng_news;
		global $languages;

		$no_lang = count($languages);
		$this->clean=array();

		$this->check_form();

		if($this->getError()!='') return 0;

		if($no_lang>1) {
		$no = 0;
		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(isset($_POST['language_'.$lang_id]) && $_POST['language_'.$lang_id]=="on") { 
				$array_lang[$no] = $lang['id']; 
				$no++;
			}
		}
		} else $array_lang[0] = languages::getDefault();

		foreach($array_lang as $lang) {
			$this->clean['title_'.$lang] = escape($_POST['title_'.$lang]);
			$this->clean['summary_'.$lang] = escape($_POST['summary_'.$lang]);

			$postedValue = $_POST['content_'.$lang];
	
			if (!_get_magic_quotes_gpc())
				$this->clean['content_'.$lang]=addslashes($postedValue);
			else
				$this->clean['content_'.$lang]=$postedValue;

		}

		// date
		$timestamp = date("Y-m-d H:i:s");
		if(isset($_POST['date']) && $_POST['date']) $this->clean['date'] = escape($_POST['date']); else $this->clean['date'] = $timestamp; 
		// published
		if(isset($_POST['active']) && $_POST['active']=="on") $this->clean['active'] = 1; else $this->clean['active'] = 0; 

		if(isset($_FILES['image']['name']) && $_FILES['image']['name']) {
			if($this->image->upload()) { 
				$this->clean['image']=$this->image->getUploadedFile();
			}
			else  $this->addError($this->image->getError());
		}
		
		$order_no = $this->getLastOrderNo()+1;

		foreach($array_lang as $lang) {

			$db->query("insert into ".$this->table." set `lang_id` = '$lang', `title` = '".$this->clean['title_'.$lang]."', `summary` = '".$this->clean['summary_'.$lang]."', `content` = '".$this->clean['content_'.$lang]."', `image` = '".$this->clean['image']."', `date` = '".$this->clean['date']."', `active` = '".$this->clean['active']."', `order_no`=$order_no");
		}
		
	return 1;

	}

	function check_form_edit () {

		global $lng;
		global $lng_news;

		$this->error='';
		$this->tmp=array();

		// image
		if($_FILES['image']['name']) {
			global $config_abs_path;
			$this->image=new image('image',$config_abs_path.'/modules/news/images','news');
			$allowedtypes=array("jpeg", "jpg", "png", "gif");
			$this->image->setTypes($allowedtypes);
			if(!$this->image->verify()) $this->addError($lng_news['errors']['invalid_image']."<br/>");
		}

		//summary
		if(!isset($_POST['summary']) || !$_POST['summary']) { 
			$this->addError($lng_news['error']['enter_summary']."<br/>"); 
		}

		//content
		if(!isset($_POST['content']) || !$_POST['content']) { 
			$this->addError($lng_news['error']['enter_content']."<br/>"); 
		}

		if($this->error!='') {
			$this->tmp = array();

			$this->tmp['title'] = cleanStr($_POST['title']);
			$this->tmp['summary'] = cleanStr($_POST['summary']);
			$postedValue = $_POST['content'];

			if (!_get_magic_quotes_gpc())
				$this->tmp['content']=addslashes($postedValue);
			else
				$this->tmp['content']=$postedValue;
		}

		// date
		if(isset($_POST['date']) && $_POST['date']) $this->tmp['date'] = $_POST['date']; else $this->tmp['date'] = ''; 
		// published
		if(isset($_POST['active']) && $_POST['active']=="on") $this->tmp['active'] = 1; else $this->tmp['active'] = 0; 

		return 1;
	}

	function edit($id) {
	
		global $db;
		global $lng_news;

		$this->clean=array();
		$this->check_form_edit();

		if($this->getError()!='') return 0;

		$this->clean['title'] = escape($_POST['title']);
		$this->clean['summary'] = escape($_POST['summary']);

		$postedValue = $_POST['content'];
	
		if (!_get_magic_quotes_gpc())
			$this->clean['content']=addslashes($postedValue);
		else
			$this->clean['content']=$postedValue;

		// date
		$timestamp = date("Y-m-d H:i:s");
		if(isset($_POST['date']) && $_POST['date']) $this->clean['date'] = escape($_POST['date']); else $this->clean['date'] = $timestamp; 
		// published
		if(isset($_POST['active']) && $_POST['active']=="on") $this->clean['active'] = 1; else $this->clean['active'] = 0; 

		if(isset($_FILES['image']['name']) && $_FILES['image']['name']) {
			if($this->image->upload()) { 
				$this->clean['image']=$this->image->getUploadedFile();
				$db->query("update ".$this->table." set `image` = '".$this->clean['image']."' where id='$id'");
			}
			else  $this->addError($this->image->getError());
		}

		$db->query("update ".$this->table." set `title` = '".$this->clean['title']."', `summary` = '".$this->clean['summary']."', `content` = '".$this->clean['content']."', `date` = '".$this->clean['date']."', `active` = '".$this->clean['active']."' where id='$id'");

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

		global $languages;
		foreach ($languages as $lang) {
		
			$lang_id = $lang['id'];
			
			if(isset($_POST['title_'.$lang_id]) && $_POST['title_'.$lang_id]) $this->clean['title_'.$lang_id]=escape($_POST['title_'.$lang_id]); else $this->clean['title_'.$lang_id]='';
			
			if(isset($_POST['page_title_'.$lang_id]) && $_POST['page_title_'.$lang_id]) $this->clean['page_title_'.$lang_id]=escape($_POST['page_title_'.$lang_id]); else $this->clean['page_title_'.$lang_id]='';
			
			if(isset($_POST['meta_keywords_'.$lang_id]) && $_POST['meta_keywords_'.$lang_id]) $this->clean['meta_keywords_'.$lang_id]=escape($_POST['meta_keywords_'.$lang_id]); else $this->clean['meta_keywords_'.$lang_id]='';

			if(isset($_POST['meta_description_'.$lang_id]) && $_POST['meta_description_'.$lang_id]) $this->clean['meta_description_'.$lang_id]=escape($_POST['meta_description_'.$lang_id]); else $this->clean['meta_description_'.$lang_id]='';

			$str_update.=" `title_$lang_id` = '".$this->clean['title_'.$lang_id]."', `page_title_$lang_id` = '".$this->clean['page_title_'.$lang_id]."', `meta_keywords_$lang_id` = '".$this->clean['meta_keywords_'.$lang_id]."', `meta_description_$lang_id` = '".$this->clean['meta_description_'.$lang_id]."',";
			
		}

		if(isset($_POST["news_on_first_page"]) && $_POST["news_on_first_page"]) $this->clean["news_on_first_page"]=escape($_POST["news_on_first_page"]); else $this->clean["news_on_first_page"]=1;
		$str_update.=" `news_on_first_page` = '".$this->clean["news_on_first_page"]."',";

		if(isset($_POST["news_on_each_page"]) && $_POST["news_on_each_page"]) $this->clean["news_on_each_page"]=escape($_POST["news_on_each_page"]); else $this->clean["news_on_each_page"]=1;
		$str_update.=" `news_on_each_page` = '".$this->clean["news_on_each_page"]."'";

		$db->query("update ".$this->settings_table." set ".$str_update);

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_news_settings");

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		global $crt_lang;
		$lc_cache = new cache();
		if($overwrite || !$news_settings = $lc_cache->readCache("mod_news_settings", $crt_lang)) {

			global $db;
			$news_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$lc_cache->writeCache("mod_news_settings", $news_settings, $crt_lang);

		}
		return $news_settings;

	}

	function initTemplatesVals($smarty) {

	}

	// check if new languages added and add a new field for title for that language
	/**
	 * 
	 * @param  
	 */
	function autoCheckLang() {
		
		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) {
			if(in_array("title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(100) NULL");
			$fields_settings = $db->getTableFields($this->settings_table);
			
			if(in_array("page_title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `page_title` `page_title_$default_lang` varchar(200) NULL");
			
			if(in_array("meta_keywords", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_keywords` `meta_keywords_$default_lang` text");
			
			if(in_array("meta_description", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_description` `meta_description_$default_lang` text");

			$fields_settings = $db->getTableFields($this->settings_table);
		}

		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			
			if(!in_array("title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(100) NULL");
			
			if(!in_array("page_title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `page_title_$lang_id` varchar(200) NULL");
			
			if(!in_array("meta_keywords_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_keywords_$lang_id` text");
			
			if(!in_array("meta_description_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_description_$lang_id` text");
			
		}
	}
	
	function reOrder() {
	
		global $db, $config_table_prefix;
		$result=$db->fetchAssocList("select `id`, `order_no` from ".$config_table_prefix."news order by `order_no`");	
		$crt_pos = 1;

		foreach($result as $n) {
			$id = $n['id'];
			$db->query("update ".$config_table_prefix."news set `order_no`='$crt_pos' where `id`='$id'");
			$crt_pos++;
		}
	
	}
	
	function getOrderNo($id) {

		global $db;

		$order=$db->fetchRow("select `order_no` from ".$this->table." where `id`='$id'");

		return $order;

	}

	function getLastOrderNo() {

		global $db;

		$order=$db->fetchRow("select `order_no` from ".$this->table." order by `order_no` desc limit 1");

		if(!$order) return 0;
		return $order;

	}

	function orderUp($id) {
	
		global $db;
		
		$crt_order = $this->getOrderNo($id);
		$prev_order_array = $db->fetchAssoc("select `order_no`, `id` from ".$this->table." where `order_no`>$crt_order order by `order_no` limit 1");
		$prev_order = $prev_order_array['order_no'];
		$prev_order_id = $prev_order_array['id'];
		
		$db->query("update ".$this->table." set `order_no`='$crt_order' where `id`='$prev_order_id'");
		$db->query("update ".$this->table." set `order_no`='$prev_order' where `id`='$id'");
	
		return $prev_order.'|'.$prev_order_id;
	
	}

	function orderDown($id) {

		global $db;
		
		$crt_order = $this->getOrderNo($id);
		$next_order_array = $db->fetchAssoc("select `order_no`, `id` from ".$this->table." where `order_no`<$crt_order order by `order_no` desc limit 1");
		$next_order = $next_order_array['order_no'];
		$next_order_id = $next_order_array['id'];
		
		$db->query("update ".$this->table." set `order_no`='$crt_order' where `id`='$next_order_id'");
		$db->query("update ".$this->table." set `order_no`='$next_order' where `id`='$id'");
		
		return $next_order.'|'.$next_order_id;
	
	}
	
}

?>