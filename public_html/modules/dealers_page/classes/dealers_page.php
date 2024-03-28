<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

class dealers_page
{

	public function __construct()
	{

		global $config_table_prefix;
		$this->settings_table = $config_table_prefix."dealers_page_settings";

	}

	function initTemplatesVals($smarty) {

		global $smarty;
		$dp = new dealers_page();
		$settings = $dp->getSettings();
		$smarty->assign("dealers_page_settings", $settings);
		
		if($settings['only_to_logged_users'] && $cp_id = $this->getDealersPageActiveCPId()) {
		
			global $logged_in, $is_admin;
			global $main_navbar_links, $secondary_navbar_links;
			if(!$logged_in && !$is_admin) 
			{
				// remove from $main_navbar_links, $secondary_navbar_links;
				global $db;
				$type = $db->fetchRow("select `navlink` from ".TABLE_CUSTOM_PAGES." where `id`='$cp_id'");
				if($type==1) { // main navbar
					$i = 0;
					foreach($main_navbar_links as $m) {
						if($m['id']==$cp_id) { 
							array_splice($main_navbar_links,$i,1);
							$smarty->assign("main_navbar",$main_navbar_links);
							break;
						}
						$i++;
					}// end foreach
				
				}// end if main navbar
				if($type==2) { // secondary navbar
					$i = 0;
					foreach($secondary_navbar_links as $m) {
						if($m['id']==$cp_id) { 
							array_splice($secondary_navbar_links,$i,1);
							$smarty->assign("sec_navbar",$secondary_navbar_links);
							break;
						}
						$i++;
					}// end foreach
				
				}// end if main navbar
			}
		
		}

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

			$this->tmp['array_search_location_fields'] = array();
		if(!empty( $this->tmp['search_location_fields'])) $this->tmp['array_search_location_fields'] = explode(",", $this->tmp['search_location_fields']);

		return $this->tmp;

	}

	function saveSettings() {

		global $config_demo;
		if($config_demo==1) {
			$this->addError($lng['general']['errors']['demo'].'<br />');
			return 0;
		}

		global $db, $config_table_prefix;
		$old_values = $db->fetchAssoc("select * from ".$this->settings_table);

		$this->clean=array();

		$str_update = '';

		global $languages;

		$array_lang_depending = array("title", "meta_keywords", "meta_description");
		foreach ($languages as $lang) {
			$lang_id = $lang['id'];

			foreach ($array_lang_depending as $field) {

				if(isset($_POST[$field.'_'.$lang_id]) && $_POST[$field.'_'.$lang_id]) $this->clean[$field.'_'.$lang_id]=escape($_POST[$field.'_'.$lang_id]); else $this->clean[$field.'_'.$lang_id]='';

				$str_update.=" `".$field."_$lang_id` = '".$this->clean[$field.'_'.$lang_id]."', ";

			}
		}

		$arr_checkboxes = array ('all_with_store', 'group_on_categories', 'enable_map_search', 'map_visible', 'only_to_logged_users');
		$arr_f = array('logo_field', 'name_field', 'category_field','stores_order_by', 'stores_order_dir');
		$arr_numeric = array('categories_on_row');
		$arr_multiple = array('groups', 'details_fields', 'search_fields');

		foreach($arr_checkboxes as $field) {
			$this->clean[$field] = checkbox_value($field);
			$str_update .= " `$field` = '{$this->clean[$field]}', ";
		}

		foreach($arr_numeric as $field) {
			if(isset($_POST[$field]) && is_numeric($_POST[$field])) {
				$this->clean[$field] = $_POST[$field];
				$str_update .= " `$field` = '{$this->clean[$field]}', ";
			}
		}

		foreach($arr_f as $field) {
			$this->clean[$field] = escape($_POST[$field]);
			$str_update .= " `$field` = '{$this->clean[$field]}', ";
		}

		$i = 0;
		$this->clean['groups']="";
		while (isset($_POST['groups'][$i]) && $f=escape($_POST['groups'][$i])){
			if($i) $this->clean['groups'].=',';
			$this->clean['groups'].=$f;
			$i++;
		}
		$str_update .= " `groups` = '{$this->clean['groups']}', ";

		$i = 0;
		$this->clean['details_fields']='';
		while (isset($_POST['details_fields'][$i]) && $f=escape($_POST['details_fields'][$i])){
			if($i) $this->clean['details_fields'].=',';
			$this->clean['details_fields'].=$f;
			$i++;
		}
		$str_update .= " `details_fields` = '{$this->clean['details_fields']}', ";

		$i = 0;
		$this->clean['search_fields']='';
		while (isset($_POST['search_fields'][$i]) && $f=escape($_POST['search_fields'][$i])){
			if($i) $this->clean['search_fields'].=',';
			$this->clean['search_fields'].=$f;
			$i++;
		}
		$str_update .= " `search_fields` = '{$this->clean['search_fields']}'";

		//search_location_fields
		if(isset($_POST['search_location_fields'])) {
			$this->clean['search_location_fields'] = cleanStr($_POST['search_location_fields']);
		}
		$str_update .= ", `search_location_fields` = '{$this->clean['search_location_fields']}'";

		$db->query("update ".$this->settings_table." set ".$str_update);

		// check if categories fields
		if($old_values['category_field'] != $this->clean['category_field']) {

				$db->query("delete from ".$config_table_prefix."dealers_page_categories");
				$this->addCategories($this->clean['category_field']);

		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_dp_settings");

	}

	function addCategories($category_field) {

		global $db, $config_table_prefix;
		$default_lang = languages::getDefault();
		$elements = $db->fetchRow("select `elements` from ".TABLE_USER_FIELDS."_lang left join ".TABLE_USER_FIELDS." on ".TABLE_USER_FIELDS.".id = ".TABLE_USER_FIELDS."_lang.id where `caption` like '$category_field' and `lang_id`='$default_lang'");
		$elements_array = explode("|", $elements);
		foreach($elements_array as $el)
			$db->query("insert into ".$config_table_prefix."dealers_page_categories set `category_name`='".escape($el)."', `image`=''");

	}

	function checkCategories($category_field) {

		global $db, $config_table_prefix;
		$default_lang = languages::getDefault();
		$elements = $db->fetchRow("select `elements` from ".TABLE_USER_FIELDS."_lang left join ".TABLE_USER_FIELDS." on ".TABLE_USER_FIELDS.".id = ".TABLE_USER_FIELDS."_lang.id where `caption` like '$category_field' and `lang_id`='$default_lang'");
		$elements_array = explode("|", $elements);

		// add if it does not exists
		foreach($elements_array as $el) {
			$exists = $db->fetchRow("select count(*) from ".$config_table_prefix."dealers_page_categories where `category_name` like '".escape($el)."'");
			if(!$exists) $db->query("insert into ".$config_table_prefix."dealers_page_categories set `category_name`='".escape($el)."', `image`=''");
		}

		// remove categories which don't exist as element
		$dcats = $db->fetchRowList("select `category_name` from ".$config_table_prefix."dealers_page_categories");
		foreach($dcats as $d) {

			if(!in_array(clean($d), $elements_array)) $db->query("delete from ".$config_table_prefix."dealers_page_categories where `category_name` like '$d'");

		}

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_dp_settings");

	}

	function getCategories($category_field) {

// !!!!!!!!!!!!! translate
		global $db, $config_table_prefix;
		return $db->fetchAssocList("select * from ".$config_table_prefix."dealers_page_categories");

	}

	function getSettings($overwrite=0) {

		// overwrite = 1 => when settings have been changed the cache is not to be considered
		global $crt_lang;
		$lc_cache = new cache();

		if($overwrite || !$dp_settings = $lc_cache->readCache("mod_dp_settings", $crt_lang)) {

			global $db;
			$dp_settings = $db->fetchAssoc("select * from ".$this->settings_table);
			$dp_settings['groups_array'] = explode(",", $dp_settings['groups']);
			$dp_settings['details_fields_array'] = explode(",", $dp_settings['details_fields']);
			
			// place special fields like phone and whatsapp in an array
			$dp_settings['phone_fields_array'] = array();
			$dp_settings['whatsapp_fields_array'] = array();
			$f = new fields("uf");
			foreach($dp_settings['details_fields_array'] as $df) {
				$type=$f->getTypeByCaption($df);
				if($type=="phone") array_push($dp_settings['phone_fields_array'], $df);
				if($type=="whatsapp") array_push($dp_settings['whatsapp_fields_array'], $df);
			}

			if($dp_settings['search_fields']) {
				$dp_settings['search_fields_array'] = explode(",", $dp_settings['search_fields']);
				$i = 0;
				$f = new fields("uf");
				foreach($dp_settings['search_fields_array'] as $field) {
					$dp_settings['search_fields_details_array'][$i] = $f->getField($field, 'uf');
					$i++;
				}

			}
			else {
				$dp_settings['search_fields_array'] = array();
				$dp_settings['search_fields_details_array'] = array();
			}
			$dp_settings['array_search_location_fields'] = explode(",", $dp_settings['search_location_fields']);

			// get link names
			global $config_table_prefix;
			$dp_settings['link_name'] = $db->fetchRow("select `title` FROM `".$config_table_prefix."custom_pages_lang` left join `".$config_table_prefix."custom_pages` on `".$config_table_prefix."custom_pages_lang`.id=`".$config_table_prefix."custom_pages`.id where `code` = 'dealers_page' and `lang_id`='$crt_lang'");

			// get categories images
			$dp_settings['categories_images'] = $this->getCategories($dp_settings['category_field']);

			$lc_cache->writeCache("mod_dp_settings", $dp_settings, $crt_lang);

		}

		return $dp_settings;

	}

	function autoCheckLang() {

		global $languages;
		global $db;
		$fields_settings = $db->getTableFields($this->settings_table);

		$default_lang = languages::getDefault();
		if(in_array("title", $fields_settings)) {

			if(in_array("title", $fields_settings)) $db->query("alter table ".$this->settings_table." change `title` `title_$default_lang` varchar(200) NULL");

			if(in_array("meta_keywords", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_keywords` `meta_keywords_$default_lang` text");

			if(in_array("meta_description", $fields_settings)) $db->query("alter table ".$this->settings_table." change `meta_description` `meta_description_$default_lang` text");

			$fields_settings = $db->getTableFields($this->settings_table);
		}

		$cp_id = $db->fetchRow("select `id` from ".TABLE_CUSTOM_PAGES." where `code` like 'dealers_page'");
		$default_title = $db->fetchRow("select `title` from ".TABLE_CUSTOM_PAGES."_lang where `id`=$cp_id and `lang_id`='$default_lang'");
		if(!$default_title) $default_title = $db->fetchRow("select `title` from ".TABLE_CUSTOM_PAGES."_lang where `id`=$cp_id limit 1");
		
		foreach($languages as $lang) {
			$lang_id = $lang['id'];
			if(!in_array("title_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `title_$lang_id` varchar(200) NULL");
			if(!in_array("meta_keywords_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_keywords_$lang_id` text");
			if(!in_array("meta_description_".$lang['id'], $fields_settings)) $db->query("alter table ".$this->settings_table." add `meta_description_$lang_id` text");
			
			// check custom custom_pages_lang
			$exists = $db->fetchRow("select count(*) from ".TABLE_CUSTOM_PAGES."_lang where `id`=$cp_id and `lang_id`='$lang_id'");
			if(!$exists) $db->query("insert into ".TABLE_CUSTOM_PAGES."_lang set `id`=$cp_id, `lang_id`='$lang_id', `title`='$default_title'");
		}
	}

	function getDealers($general_row, $ads_per_page, $settings, $where_str='', $dcat='') {

		global $db;
		global $lng;

		$where = " where ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ( ";
		if($settings['all_with_store']) $where .= " `store` =1 ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" or ";
		if($settings['groups']) $where .= " `group` in ({$settings['groups']}) ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ) ";

		if(!$settings['all_with_store'] && !$settings['groups'])
			$where.=" `active` = 1 ";
		else $where.=" and `active` = 1 ";

		if($dcat) {

			global $languages;
			if(empty($languages)) $languages = common::getCachedObject("base_languages");
			$no_lang = count($languages);

			$q_translated = '';
			$q_translated_str = '';
			if($no_lang>1) { 
				$q_translated = $this->getCategoryTranslated(escape($dcat), $settings['category_field']);
				if($q_translated) $q_translated_str = "|".$q_translated;
			}
			$dcat = escape($dcat);
			//$where.=" and (`{$settings['category_field']}` REGEXP CONCAT('(^|)$dcat(|$)' ".$q_translated.")) ";
			$where.=" and (`{$settings['category_field']}` REGEXP CONCAT('[[:<:]](".$dcat.$q_translated_str.")[[:>:]]')) ";

		}

		$sql = "select ".TABLE_USERS.".* from ".TABLE_USERS
		 .$where.$where_str
		 ." order by ".$settings['stores_order_by']." ".$settings['stores_order_dir']." ";
		if($ads_per_page>0) $sql .= " limit ".$general_row.", ".$ads_per_page;
//echo $sql;
		$result = $db->fetchAssocList($sql);
		
		global $config_abs_path;
		require_once $config_abs_path."/classes/groups.php";
		$i = 0;
		foreach($result as $res) {
		
			$result[$i]['group_name'] = groups::getName($res['group']);
			$result[$i]['no_listings'] = $db->fetchRow("select count(*) from ".TABLE_ADS." where user_id='{$res['id']}' and active=1");
			$i++;
		
		}

		if($settings['enable_map_search']) {
			$i = 0;
			$uf = new fields("uf");
			$search_location_fields = explode(",", $settings['search_location_fields']);
			$details_fields = explode(",", $settings['details_fields']);
			foreach ($result as $row) {
				// make search_location_fields string
				$result[$i]['search_map_location'] = '';
				$result[$i]['search_map_coordinates'] = '';
				foreach($search_location_fields as $s) {
					// check if a google maps field
					$type = $uf->getTypeByCaption($s);
					if($type=="google_maps" && $result[$i][$s]) $result[$i]['search_map_coordinates'] = $result[$i][$s];
					else
						if($result[$i][$s]) $result[$i]['search_map_location'] .=" ".str_replace(array("\n", "\r", "<br>", "<br/>"), " ", $result[$i][$s]);

				}
				$result[$i]['info'] = '';
				foreach($details_fields as $s) {
					if($result[$i][$s]) $result[$i]['info'] .=str_replace(array("\n", "\r", "<br>", "<br/>"), " ", $result[$i][$s])." ";
				}
				$result[$i]['info'] = trim($result[$i]['info']);
				$i++;
			}
		}

		return $result;
	}

	function getNoDealers($settings, $where_str='', $dcat='') {

		global $db;

		$where = " where ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ( ";
		if($settings['all_with_store']) $where .= " `store` =1 ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" or ";
		if($settings['groups']) $where .= " `group` in ({$settings['groups']}) ";
		if($settings['all_with_store'] && $settings['groups']) $where.=" ) ";
		//if($dcat) $where.=" and (`{$settings['category_field']}` REGEXP CONCAT('(^|)".escape($dcat)."(|$)')";
		//if($dcat) $where.=" and (`{$settings['category_field']}` REGEXP CONCAT('^|".escape($dcat)."|$')";
		//if($dcat) $where.=" and (`{$settings['category_field']}` REGEXP CONCAT('[[:<:]](".$dcat.$q_translated_str.")[[:>:]]')) ";
		
		if($dcat) {

			global $languages;
			if(empty($languages)) $languages = common::getCachedObject("base_languages");
			$no_lang = count($languages);

			$q_translated = '';
			$q_translated_str = '';
			if($no_lang>1) { 
				$q_translated = $this->getCategoryTranslated(escape($dcat), $settings['category_field']);
				if($q_translated) $q_translated_str = "|".$q_translated;
			}
			$dcat = escape($dcat);
			$where.=" and (`{$settings['category_field']}` REGEXP CONCAT('[[:<:]](".$dcat.$q_translated_str.")[[:>:]]')) ";

		}

		if(!$settings['all_with_store'] && !$settings['groups'])
			$where.=" `active` = 1 ";
		else $where.=" and `active` = 1 ";

		$no = $db->fetchRow("select count(*) from ".TABLE_USERS.$where.$where_str);
		return $no;

	}

	function getDealerCategories($settings) {

		global $crt_lang;
		global $db;
		$elements=$db->fetchRow("select `elements` from ".TABLE_USER_FIELDS."_lang left join ".TABLE_USER_FIELDS." on ".TABLE_USER_FIELDS.".id = ".TABLE_USER_FIELDS."_lang.id where `caption` like '{$settings['category_field']}' and `lang_id`='$crt_lang'");
		$elements = clean($elements);
		$arr = explode("|", $elements);
		$elements_array = array();
		$i = 0;
		foreach($arr as $el) {
			$elements_array[$i]['category'] = $el;
			$elements_array[$i]['image'] = $this->getCategoryImage($el);
			$elements_array[$i]['no_dealers'] = $this->getNoDealers($settings, '', $el);
			$i++;
		}
		return $elements_array;

	}

	function getCategoryImage($category_name) {

		global $db, $config_table_prefix;
		$image = $db->fetchRow("select `image` from ".$config_table_prefix."dealers_page_categories where `category_name` like '$category_name'");
		return $image;

	}

	function getCategoryTranslated($cat, $category_field) {

		// get elements for each language for that field
		global $db;
		global $crt_lang;
		$cat = cleanStr($cat);
		$q_translated = '';

		$id = $db->fetchRow("select id from ".TABLE_USER_FIELDS." where `caption` like '$category_field'");
		$el_array = $db->fetchAssocList("select `lang_id`, `elements` from ".TABLE_USER_FIELDS."_lang where id = $id");
		$el_fields = array();
		foreach($el_array as $e) {
			$el_fields[$e['lang_id']] = $e['elements'];
			if($e['lang_id']==$crt_lang) $crt_lang_elem = $e['elements'];
		}

			$crt_lang_arr = explode("|", $crt_lang_elem);
			$index = -1;
			$i=0;

			foreach($crt_lang_arr as $el) {
				if($el == $cat) { $index = $i; break; }
				$i++;
			}

			if($index!=-1) {

				// translate in all languages except current lang
				$arr_translations = array();
				global $languages;
				foreach($languages as $l) {
					if($l['id'] == $crt_lang) continue;
					$alt_lang_elem = $el_fields[$l['id']];

					$alt_lang_arr = explode("|", $alt_lang_elem);
					if(empty($alt_lang_arr[$index])) continue;
					$alt_val = $alt_lang_arr[$index];

					if(!in_array(strtolower($alt_val), $arr_translations) && strtolower($alt_val)!=strtolower($cat)) array_push($arr_translations, strtolower($alt_val));
				}

				// add to query
				foreach($arr_translations as $tr) {

						$str = escape($str);
						$q_translated.=" or `".$category_field."` REGEXP CONCAT('(^|)".$str."(|$)') ";
				}
			}//if($index!=-1)

		return $q_translated;

	}

	function setMetaInfo($smarty) {

		global $smarty, $crt_lang;
		$dp = new dealers_page();
		$settings = $dp->getSettings();

		$page_info['title']=$settings['title_'.$crt_lang];
		$page_info['meta_keywords']=$settings['meta_keywords_'.$crt_lang];
		$page_info['meta_description']=$settings['meta_description_'.$crt_lang];
		$page_info['noindex'] = '';
		$page_info['canonical'] = '';

		$smarty->assign("page_info", $page_info);

	}

	function autoCheckSlug() {

		global $db, $config_table_prefix;
		$cp_id = $db->fetchRow("select id from ".$config_table_prefix."custom_pages where `code` like 'dealers_page'");
		$exists = $db->fetchRow("select count(*) from ".$config_table_prefix."slugs where `type`= 'content' and `object_id`='$cp_id'");
		if(!$exists) {
			$slug = new slugs();
			$slug->addContent($cp_id, "dealers");
		}

	}

	function addImage() {

		global $db, $config_table_prefix, $config_abs_path;
		$el = escape($_POST['category']);

		if(isset($_FILES['image']['name']) && $_FILES['image']['name']!='') {
			$image=new image('image', $config_abs_path."/images/categories",'categ');
			$image->verify();
			if($image->upload()) $category_image=$image->getUploadedFile();
			//else $this->addError($image->getError());
		} else $category_image='';

		$db->query("update ".$config_table_prefix."dealers_page_categories set `image`='$category_image' where `category_name` like '$el'");

		// clear cache
		$lc_cache = new cache();
		$lc_cache->clearCache("mod_dp_settings");

	}

	function getDealersPageActiveCPId() {
	
		global $db;
		$cp_id = $db->fetchRow("select `id` from ".TABLE_CUSTOM_PAGES." where `code` like 'dealers_page' and `active`=1");
		return $cp_id;
	
	}
	
}
?>
