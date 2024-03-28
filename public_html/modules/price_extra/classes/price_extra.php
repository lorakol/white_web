<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class price_extra {

	var $table;
	var $info='';
	var $error='';

	public function __construct()
	{

		global $config_table_prefix;
		$this->table = $config_table_prefix."price_extra_settings";
		$this->offers_table = $config_table_prefix."price_extra_offers";

	}

	function getId() {

		return $this->id;

	}

	function Delete($id) {

		global $db;
		$res_del=$db->query('delete from '.$this->table.' where `id`="'.$id.'"');
		$res_del=$db->query('delete from '.$this->table.'_lang where `id`="'.$id.'"');

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;
	}

	function deleteOffer($id) {

		global $db;
		$res_del=$db->query('delete from '.$this->offers_table.' where `id`="'.$id.'"');

		return 1;
	}

	function allFieldsetsConfiguration() {
	
		global $db;
		$first_fs = $db->fetchRow('select `fieldset` from '.$this->table.' limit 1');
		
		// if the first and only fieldset is set to 0, then we have a unique configuration
		if($first_fs === 0) return 1;
		return 0;

	}

	function getAll() {

		global $db, $crt_lang;

		$result=$db->fetchAssocList("select * from ".$this->table);
		
		// fieldsets names
		$i = 0;
		foreach ($result as $row) {
		
		  if( $row['fieldset'] == 0 ) { 
		      global $lng;
		      $result[$i]['fieldset_names'] = $lng['custom_fields']['all_fieldsets'];
		  }
		  else {
		      $fs_list = explode(",", $row['fieldset']);
		      $result[$i]['fieldset_names'] = "";
		      $j = 0;
		      global $config_abs_path;
		      require_once $config_abs_path."/classes/fieldsets.php";
		      
		      foreach($fs_list as $f) {
			if($j) $result[$i]['fieldset_names'] .= ",";
			$result[$i]['fieldset_names'] .= fieldsets::getName($f);
			$j++;
		      }
		  }
		  
		  // get tags
		  $tags = $db->fetchRow("select `tags` from ".$this->table."_lang where `lang_id`='$crt_lang' and id='{$row['id']}'");
		  
		  $result[$i]['tags'] = str_replace("|", ",", $tags);
		  
		  $i++;
		  
		}
		
		return $result;

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
		global $lng_pe;
		global $languages;

		$this->error='';
		$this->tmp=array();
		
		//negotiable
		if(checkbox_value("use_negotiable")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['negotiable_'.$lang['id']]) || !$_POST['negotiable_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_negotiable']."<br/>"); 
				break;
			}
		}
		}

		//free
		if(checkbox_value("use_free")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['free_'.$lang['id']]) || !$_POST['free_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_free']."<br/>"); 
				break;
			}
		}
		}

		//tags
		if(checkbox_value("use_tags")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['tags_'.$lang['id']]) || !$_POST['tags_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_tags']."<br/>"); 
				break;
			}
		}
		}
		
		//extra_option1
		if(checkbox_value("use_extra_option1")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['extra_option1_'.$lang['id']]) || !$_POST['extra_option1_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_extra_option1']."<br/>"); 
				break;
			}
		}
		}

		//extra_option2
		if(checkbox_value("use_extra_option2")==1) {
		foreach($languages as $lang) {
			if(!isset($_POST['extra_option2_'.$lang['id']]) || !$_POST['extra_option2_'.$lang['id']]) { 
				$this->addError($lng_pe['error']['enter_extra_option2']."<br/>"); 
				break;
			}
		}
		}

		if($this->error!='') {
			$this->tmp = array();

			if(isset($_POST['all_fieldsets'])) $this->tmp['all_fieldsets']=$_POST['all_fieldsets'];
			if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
			{
				$this->tmp['fieldset']='';
				$i=0;
				while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
					if($i) $this->tmp['fieldset'].=',';
					$this->tmp['fieldset'].=$f;
					$i++;
				}
			} else $this->tmp['fieldset']='0';
			
			$array_checkboxes = array("use_negotiable", "use_free", "use_tags", "use_extra_option1", "use_extra_option2");
			foreach($array_checkboxes as $c) {
			    $this->tmp[$c] = checkbox_value($c);
			}
			
			foreach($languages as $lang) {
				$this->tmp['negotiable'][$lang['id']] = cleanStr($_POST['negotiable_'.$lang['id']]);
				$this->tmp['free'][$lang['id']] = cleanStr($_POST['free_'.$lang['id']]);
				$this->tmp['tags'][$lang['id']] = cleanStr($_POST['tags_'.$lang['id']]);
				$this->tmp['extra_option1'][$lang['id']] = cleanStr($_POST['extra_option1_'.$lang['id']]);
				$this->tmp['extra_option2'][$lang['id']] = cleanStr($_POST['extra_option2_'.$lang['id']]);
			}

		}

		return 1;
	}

	function add() {
	
		global $db;
		global $lng_news;
		global $languages;

		$this->clean=array();

		$this->check_form();
		if($this->getError()!='') return 0;

		if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
		{
			$this->clean['fieldset']='';
			$i=0;
			while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
				if($i) $this->clean['fieldset'].=',';
				$this->clean['fieldset'].=$f;
				$i++;
			}
		} else $this->clean['fieldset']='0';

		$array_checkboxes = array("use_negotiable", "use_free", "use_tags", "use_extra_option1", "use_extra_option2");
		foreach($array_checkboxes as $c) {
		    $this->clean[$c] = checkbox_value($c);
		}

		$db->query("insert into ".$this->table." set `fieldset` = '{$this->clean['fieldset']}', `use_negotiable` = '{$this->clean['use_negotiable']}', `use_free` = '{$this->clean['use_free']}', `use_tags` = '{$this->clean['use_tags']}', `use_extra_option1` = '{$this->clean['use_extra_option1']}', `use_extra_option2` = '{$this->clean['use_extra_option2']}'");
		
		$id=$db->insertId();
		
		foreach($languages as $lang) {

		    $lang_id = $lang['id'];
		    $this->clean['negotiable'] = escape($_POST['negotiable_'.$lang_id]);
		    $this->clean['free'] = escape($_POST['free_'.$lang_id]);
		    $this->clean['extra_option1'] = escape($_POST['extra_option1_'.$lang_id]);
		    $this->clean['extra_option2'] = escape($_POST['extra_option2_'.$lang_id]);
		    $this->clean['tags'] = str_replace("\n", "|", $_POST['tags_'.$lang_id]);
		    $this->clean['tags'] = escape(str_replace("\r", "", $this->clean['tags']));
		    
		    $db->query("insert into ".$this->table."_lang set `id`='$id', `lang_id` = '$lang_id', `negotiable` = '{$this->clean['negotiable']}', `free` = '{$this->clean['free']}', `tags` = '{$this->clean['tags']}', `extra_option1` = '{$this->clean['extra_option1']}', `extra_option2` = '{$this->clean['extra_option2']}'");
		
		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;

	}


	function edit($id) {
	
		global $db;
		global $lng_news;

		$this->clean=array();
		$this->check_form();

		if($this->getError()!='') return 0;

		if(isset($_POST['all_fieldsets']) && $_POST['all_fieldsets']=="0")
		{
			$this->clean['fieldset']='';
			$i=0;
			while (isset($_POST['fieldset'][$i]) && $f=escape($_POST['fieldset'][$i])){
				if($i) $this->clean['fieldset'].=',';
				$this->clean['fieldset'].=$f;
				$i++;
			}
		} else $this->clean['fieldset']='0';

		$array_checkboxes = array("use_negotiable", "use_free", "use_tags", "use_extra_option1", "use_extra_option2");
		foreach($array_checkboxes as $c) {
		    $this->clean[$c] = checkbox_value($c);
		}

		$db->query("update ".$this->table." set `fieldset` = '{$this->clean['fieldset']}', `use_negotiable` = '{$this->clean['use_negotiable']}', `use_free` = '{$this->clean['use_free']}', `use_tags` = '{$this->clean['use_tags']}', `use_extra_option1` = '{$this->clean['use_extra_option1']}', `use_extra_option2` = '{$this->clean['use_extra_option2']}' where id='$id'");

		global $languages;
		foreach($languages as $lang) {

		    $lang_id = $lang['id'];
		    $this->clean['negotiable'] = escape($_POST['negotiable_'.$lang_id]);
		    $this->clean['free'] = escape($_POST['free_'.$lang_id]);
		    $this->clean['extra_option1'] = escape($_POST['extra_option1_'.$lang_id]);
		    $this->clean['extra_option2'] = escape($_POST['extra_option2_'.$lang_id]);
		    
		    $this->clean['tags'] = str_replace("\n", "|", $_POST['tags_'.$lang_id]);
		    $this->clean['tags'] = escape(str_replace("\r", "", $this->clean['tags']));

		    $db->query("update ".$this->table."_lang set `negotiable` = '{$this->clean['negotiable']}', `free` = '{$this->clean['free']}', `tags` = '{$this->clean['tags']}', `extra_option1` = '{$this->clean['extra_option1']}', `extra_option2` = '{$this->clean['extra_option2']}' where id='$id' and `lang_id`='$lang_id'");

		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

		return 1;

	}

	function getPriceConfig($id) {
	
	    global $db, $languages;
	    
	    $pe = $db->fetchAssoc("select * from ".$this->table." where id='$id'");
	    
	    foreach ($languages as $lang) {
	    
		$lang_id = $lang['id'];
		$pel = $db->fetchAssoc("select * from ".$this->table."_lang where id='$id' and `lang_id`='$lang_id'");
		$pe['negotiable'][$lang_id] = $pel['negotiable'];
		$pe['free'][$lang_id] = $pel['free'];
		$pe['tags'][$lang_id] = str_replace("|", "\n", $pel['tags']);
		$pe['extra_option1'][$lang_id] = $pel['extra_option1'];
		$pe['extra_option2'][$lang_id] = $pel['extra_option2'];
		
	    }
	    
	    return $pe;
	    
	}
	
	function initTemplatesVals($smarty) {

	}

	function getSettings($overwrite=0) {
	
		global $db, $languages;
		// overwrite = 1 => when settings have been changed the cache is not to be considered 
		$lc_cache = new cache();
		if($overwrite || !$pe_settings = $lc_cache->readCache("mod_pe_settings")) {

			global $db;
			$array = $db->fetchAssocList("select * from ".$this->table);
			
			$j = 0;
			$pe_settings = array();
			foreach ($array as $row) {
			
			$id = $row['id'];
			$lang_array = array();
			foreach($languages as $lang) {
			
			      $lang_id = $lang['id'];
			      $lang_array[$lang_id] = $db->fetchAssoc("select * from ".$this->table."_lang where `lang_id`='$lang_id' and `id`='$id'");
			      $tags = str_replace("\n", "|", $lang_array[$lang_id]['tags']);
			      $lang_array[$lang_id]['tags_array'] = explode("|", $tags);
			
			}
			
			$fieldsets_array = explode(",", $row['fieldset']);
			
			// add one registration for each different fieldset
			foreach($fieldsets_array as $f) {
			
			    $pe_settings[$f] = $array[$j];
			    $pe_settings[$f]['fieldset'] = $f;
			    foreach($languages as $lang) {
			      $lang_id = $lang['id'];
			      $pe_settings[$f]['lang'][$lang_id] = $lang_array[$lang_id];
			    }
			    
			}
			$j++;
			} // end foreach array

			$lc_cache->writeCache("mod_pe_settings", $pe_settings);

		}
//_print_r($pe_settings);
		return $pe_settings;

	
	}

	function postAd($ad_id, $pending_edited=0) {
	
	      if(!$ad_id) return;
	      global $db;
	      $pe_settings = $this->getSettings();
	      $fieldset = listings::getFieldset($ad_id);
	      
	      $price_type = '';
	      if(isset($_POST['price_type'])) $price_type = escape($_POST['price_type']);

	      if($pending_edited) { 
			$l = new listings; 
			$pe_array = $l->getPendingEdited($ad_id);
		}
	      
	      // price_type==1 => price value
	      // price set to value => no change, already done in listings_process

	      // price_type==2 => FREE
	      // price set to 0
	      if(isset($price_type) && $price_type==2 && ( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_free']) || (isset($pe_settings[0]) && $pe_settings[0]['use_free']) )) {

			if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `price`=0 where `id`='$ad_id'");
			else {
				$pe_array['price'] = 0;
				$pe_array['price_tag'] = $price_type;
			}
	      }
	      
	      // price_type = non numeric => price extra tag
	      if(isset($price_type) && !is_numeric($price_type) && ( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_tags']) || (isset($pe_settings[0]) && $pe_settings[0]['use_tags']))) {
	      
			if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `price`=-1, `price_tag`='$price_type' where `id`='$ad_id'");
			else {
				$pe_array['price'] = -1;
				$pe_array['price_tag'] = $price_type;
			}
	      
	      }
	      
	      if( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_negotiable']) || (isset($pe_settings[0]) && $pe_settings[0]['use_negotiable'])) {
	      
		    $negotiable = checkbox_value("negotiable");
		    if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `negotiable`= '$negotiable' where `id`='$ad_id'");
			else 
				$pe_array['negotiable'] = $negotiable;
		
	      }
	      
	      if( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_extra_option1']) || (isset($pe_settings[0]) && $pe_settings[0]['use_extra_option1'])) {
	      
		    $extra_option1 = checkbox_value("extra_option1");
		    if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `extra_option1`= '$extra_option1' where `id`='$ad_id'");
			else 
				$pe_array['extra_option1'] = $extra_option1;
		
	      }

	      if( (isset($pe_settings[$fieldset]) && $pe_settings[$fieldset]['use_extra_option2']) || (isset($pe_settings[0]) && $pe_settings[0]['use_extra_option2'])) {
	      
		    $extra_option2 = checkbox_value("extra_option2");
		    if(!$pending_edited)
				$db->query("update ".TABLE_ADS." set `extra_option2`= '$extra_option2' where `id`='$ad_id'");
			else 
				$pe_array['extra_option2'] = $extra_option2;
		
	      }

	      if($pending_edited) {
			global $config_abs_path;
			require_once $config_abs_path."/libs/JSON.php";
			
			//global $appearance_settings;
		        //if(strtolower($appearance_settings['charset'])!="utf-8") $ret = utf8_encode_all($ret);

//			$encoded = json_encode($pe_array);
			
			if (version_compare(phpversion(), '5.4', 'ge'))
				$encoded = json_encode($pe_array, JSON_UNESCAPED_UNICODE);
			else 
				$encoded = raw_json_encode($pe_array);
			
			$lp = new listings_process();
			$lp->addAsPendingEdited($ad_id, $encoded);
	      }
	      
	      return;
	      
	}

	function editAd($ad_id) {
	
		if(!$ad_id) return;
	      
		$pending_edited = 0; 
		global $is_admin, $is_mod, $ads_settings;
		if(!($is_admin || $is_mod) && $ads_settings['pending_edited']  && listings::wasListingPostedAsPending($ad_id)) $pending_edited=1;

		$this->postAd($ad_id, $pending_edited);
		return;

	}
	
	function addLang($lang_id) {
		
		global $languages, $config_table_prefix;
		global $db;

		$default_lang = languages::getDefault();
		$pe_array = $db->fetchAssocList("select * from ".$config_table_prefix."price_extra_settings_lang where `lang_id`='$default_lang'");
		
		foreach($pe_array as $pe_row) {
		
		    $db->query("insert into ".$config_table_prefix."price_extra_settings_lang set `lang_id`='$lang_id', `id`='{$pe_row['id']}', `negotiable`='{$pe_row['negotiable']}', `free`='{$pe_row['free']}', `tags`='{$pe_row['tags']}', `extra_option1`='{$pe_row['extra_option1']}', `extra_option2`='{$pe_row['extra_option2']}'");
		    
		}
		
		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");


	}

	function deleteLang($lang_id) {
		
		global $config_table_prefix;
		global $db;

		$db->query("delete from ".$config_table_prefix."price_extra_settings_lang where `lang_id`='$default_lang'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_pe_settings");

	}

	function checkPriceValueEntered() {

	      global $db;

	      $price_type = '';
	      if(isset($_POST['price_type'])) $price_type = escape($_POST['price_type']);
	      // no price type selected!
	      else return 0;

	      // price_type==1 => price value
	      if(isset($price_type) && $price_type==1) {

			// price value must be set
			if(!isset($_POST['price']) || !$_POST['price']) return 0;
	      
	      }

	      return 1;
	
	}

	function addOffer($ad_id, $offer, $currency) {

	    global $lng_pe, $crt_lang, $config_abs_path;
		if(file_exists($config_abs_path."/modules/price_extra/lang/".$crt_lang.".php"))
			require_once $config_abs_path."/modules/price_extra/lang/".$crt_lang.".php";
		else require_once $config_abs_path."/modules/price_extra/lang/eng.php";

		global $logged_in, $crt_usr, $settings;
		if(!$logged_in) { 
			$this->addError($lng_pe['error']['not_logged']);
			return 0;
		}

		if(!$offer || !is_numeric($offer)) {
			$this->addError($lng_pe['error']['invalid_offer']);
			return 0;
		}
	
		global $db, $config_table_prefix;
		$date = date("Y-m-d H:i:s");
		$db->query("insert into ".$config_table_prefix."price_extra_offers set `ad_id`='$ad_id', `user_id`='$crt_usr', `date`='$date', `offer`='{$offer}', `currency` = '$currency'");
	
		$contact_name = users::getContactName($crt_usr);
		$contact_email = users::getEmail($crt_usr);

		$user_details = listings::getUserDetails($ad_id);

		$mail2send=new mails();
		$mail2send->init($user_details['email'], $user_details['name']);

		$ad_title = listings::getTitle($ad_id);
		$array_subject = array("ad_title" => cleanStr($ad_title), "offer" => $offer, "ad_id"=>$ad_id);

		$array_message = array("contact_name"=>$user_details['name'], "sender_name"=>$contact_name, "sender_email"=>$contact_email, "offer" => add_currency($offer, $currency), "ad_title" => $ad_title, "ad_id"=>$ad_id);

		$sent = $mail2send->composeAndSend("new_offer", $array_message, $array_subject);

		return 1;
	
	}

	function getOfferUserInfo($id) {

		global $db;
		$user_id=$db->fetchRow('select `user_id` from '.$this->offers_table.' where `id`="'.$id.'"');
		$user_info['contact_name'] = users::getContactName($user_id);
		$user_info['contact_email'] = users::getEmail($user_id);

		return $user_info;
	}

	function getOfferAdId($id) {

		global $db;
		$ad_id=$db->fetchRow('select `ad_id` from '.$this->offers_table.' where `id`="'.$id.'"');
		return $ad_id;
	}

	function getOffer($id) {

		global $db;
		$result=$db->fetchAssoc('select * from '.$this->offers_table.' where `id`="'.$id.'"');
		$result['offer_curr'] = add_currency($result['offer'], $result['currency']);
		return $result;
	}
} 

?>
