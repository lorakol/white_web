DROP TABLE if exists `PREFIX2co_return`;
CREATE TABLE `PREFIX2co_return` (
  `id` int(10) NOT NULL auto_increment,
  `x_login` varchar(16) default NULL,
  `key` varchar(50) default NULL,
  `ukey` varchar(255) default '0',
  `x_amount` varchar(50) default NULL,
  `X_Email` varchar(50) default NULL,
  `X_Address` varchar(50) default NULL,
  `X_City` varchar(50) default NULL,
  `X_State` varchar(50) default NULL,
  `X_Country` varchar(50) default NULL,
  `X_ZIP` varchar(30) default NULL,
  `x_invoice_num` varchar(255) default '0',
  `order_number` varchar(30) default NULL,
  `merchant_order_id` varchar(50) default NULL,
  `ip_country` varchar(50) default NULL,
  `lang` varchar(20) default NULL,
  `cart_id` varchar(50) default NULL,
  `demo` varchar(1) default NULL,
  `pay_method` varchar(10) default NULL,
  `credit_card_processed` char(1) default 'Y',
  `card_holder_name` varchar(100) default NULL,
  `merchant_product_id` int(10) default NULL,
  `entirepost` text,
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIX2co_settings`;
CREATE TABLE `PREFIX2co_settings` (
  `to_checkout_sid` varchar(20) default NULL,
  `to_checkout_secret` varchar(16) default NULL,
  `to_checkout_demo` int(1) default '0'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIX2co_settings` (`to_checkout_sid`, `to_checkout_secret`, `to_checkout_demo`) VALUES
('', '', 0);

DROP TABLE if exists `PREFIXaamarpay_return`;
CREATE TABLE `PREFIXaamarpay_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `pay_status` varchar(15) default null, 
  `status_code` int(2), 
  `pg_txnid` varchar(30) default null, 
  `amount` varchar(20) default null,
  `mer_txnid` varchar(30) default null, 
  `merchant_id` varchar(30) default null, 
  `store_id` varchar(30) default null, 
  `currency` varchar(3) default null, 
  `currency_merchant` varchar(3) default null,
  `convertion_rate` varchar(10) default null, 
  `store_amount` varchar(30) default null, 
  `pay_time` varchar(15) default null, 
  `bank_txn` varchar(30) default null,
  `card_number` varchar(30) default null, 
  `card_holder` varchar(30) default null, 
  `card_type` varchar(30) default null, 
  `ip_address` varchar(32) default null, 
  `reason` varchar(30) default null,
  `other_currency` varchar(30) default null, 
  `success_url` varchar(100) default null, 
  `fail_url` varchar(100) default null, 
  `pg_service_charge_bdt` varchar(30) default null,
  `pg_service_charge_usd` varchar(30) default null, 
  `pg_card_bank_name` varchar(30) default null, 
  `pg_card_bank_country` varchar(30) default null, 
  `risk_level` varchar(30) default null,
  `pg_error_code_details` varchar(30) default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
	) ENGINE=MyISAM ;
	
DROP TABLE if exists `PREFIXaamarpay_settings`;	
CREATE TABLE `PREFIXaamarpay_settings` (
  `store_id` varchar(100),
  `signature_key` varchar(100),
  `desc` varchar(100),
  `currency` varchar(3),
  `phone_field` varchar(30) default null,
  `address_field` varchar(30) default null,
  `city_field` varchar(30) default null,
  `state_field` varchar(30) default null,
  `postcode_field` varchar(30) default null,
  `country_field` varchar(30) default null,
  `nologin_phone_field` varchar(30) default null,
  `nologin_address_field` varchar(30) default null,
  `nologin_city_field` varchar(30) default null,
  `nologin_state_field` varchar(30) default null,
  `nologin_postcode_field` varchar(30) default null,
  `nologin_country_field` varchar(30) default null,
  `test` tinyint(1) default 0
	) ENGINE=MyISAM;
INSERT INTO `PREFIXaamarpay_settings` set `desc`='Classifieds ad', `currency`='BDT';
	
DROP TABLE if exists `PREFIXactions`;
CREATE TABLE `PREFIXactions` (
  `id` int(10) NOT NULL auto_increment,
  `type` varchar(20) NOT NULL,
  `object_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice` int(10) default NULL,
  `pending` tinyint(1)  NOT NULL  default '0',
  `date` datetime not null,
  `extra` int(10) default 0,
  PRIMARY KEY  (`id`),
  KEY `idx_object` (`object_id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_invoice` (`invoice`),
  KEY `idx_type` (`type`),
  KEY `idx_date` (`date`),
  KEY `idx_pending` (`pending`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXadmin_tpl_colorschemes`;
CREATE TABLE `PREFIXadmin_tpl_colorschemes` (
	`tpl` varchar(30),
	`colorscheme` varchar(50)
);
insert into `PREFIXadmin_tpl_colorschemes` set `tpl`='default', `colorscheme`='blue';
insert into `PREFIXadmin_tpl_colorschemes` set `tpl`='default', `colorscheme`='navy-blue';
insert into `PREFIXadmin_tpl_colorschemes` set `tpl`='default', `colorscheme`='sage';

DROP TABLE if exists `PREFIXaddress_components`;
CREATE TABLE `PREFIXaddress_components` (
  `component` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL default 'long_name',
  `field` varchar(20) default null
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXaddress_components` set `component`='country', `type`='long_name', `field`='country';
insert into `PREFIXaddress_components` set `component`='administrative_area_level_1', `type`='long_name', `field`='region';
insert into `PREFIXaddress_components` set `component`='administrative_area_level_2', `type`='long_name', `field`='';
insert into `PREFIXaddress_components` set `component`='locality', `type`='long_name', `field`='city';
insert into `PREFIXaddress_components` set `component`='postal_code', `type`='long_name', `field`='zip';


DROP TABLE if exists `PREFIXads`;
CREATE TABLE `PREFIXads` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `category_id` int(3) NOT NULL,
  `package_id` int(2) NOT NULL,
  `usr_pkg` int(10),
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_expires` datetime,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` double default -1,
  `currency` varchar(10) default NULL,
  `country` varchar(64) default NULL,
  `region` varchar(64) default NULL,
  `city` varchar(64) default NULL,
  `zip` varchar(15) default NULL,
  `lat` double,
  `lng` double,
  `meta_description` varchar(256) default NULL,
  `meta_keywords` varchar(256) default NULL,
  `sold` tinyint(1)  NOT NULL default '0',
  `rented` tinyint(1)  NOT NULL default '0',
  `viewed` int(10)  NOT NULL default '0',
  `user_approved` tinyint(1)  NOT NULL default '0',
  `active` tinyint(1)  NOT NULL default '1',
  `pending` tinyint(1)  NOT NULL default '0',
  `featured` int(3)  NOT NULL default '0',
  `highlited` tinyint(1)  NOT NULL default '0',
  `priority` int(1)  NOT NULL default '0',
  `video` text default NULL,
  `urgent` tinyint(1) default 0,
  `site_url` text default null,
  `rating` double(4,2)  NOT NULL default 0,
  `language` varchar(30)  NOT NULL  default 'DEF_LANG',
  `unique_id` VARCHAR( 30 ) default NULL,
  `auction` int(1) default 0,
  `email_contact` tinyint(1) default 1,
  PRIMARY KEY  (`id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_category` (`category_id`),
  KEY `idx_package` (`package_id`),
  KEY `idx_region_id` (`region`),
  KEY `idx_country_id` (`country`),
  KEY `idx_location` (`city`),
  KEY `idx_lat` (`lat`),
  KEY `idx_lng` (`lng`),
  KEY `idx_price` (`price`),
  KEY `idx_title` (`title`),
  KEY `idx_viewed` (`viewed`),
  KEY `idx_zip` (`zip`),
  KEY `date_added` (`date_added`),
  KEY `date_expires` (`date_expires`),
  KEY `idx_featured` (`featured`),
  KEY `idx_active` (`active`),
  KEY `idx_pending` (`pending`),
  KEY `idx_highlited` (`highlited`),
  KEY `idx_priority` (`priority`),
  KEY `idx_sold` (`sold`),
  KEY `idx_rented` (`rented`),
  KEY `usr_pkg` (`usr_pkg`),
  KEY `priority_2` (`priority`,`date_added`),
  KEY `active_2` (`active`,`date_added`),
  KEY `active_3` (`active`,`priority`),
  KEY `active_4` (`active`,`priority`,`date_added`),
  KEY `user_approved` (`user_approved`),
  KEY `app` (`active`,`priority`,`price`),
  KEY `priority_3` (`priority`,`price`),
  KEY `priority_4` (`priority`,`title`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXads_extension`;
CREATE TABLE `PREFIXads_extension` (
  `id` int(10) NOT NULL auto_increment,
  `mgm_email` varchar(60) NOT NULL,
  `mgm_name` varchar(60) default NULL,
  `mgm_phone` varchar(60) default NULL,
  `activation` varchar(60) default NULL,
  `ip` varchar(39),
  PRIMARY KEY  (`id`),
  KEY `idx_activation` (`activation`),
  KEY `idx_ip` (`ip`),
  KEY `idx_mgm_email` (`mgm_email`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXads_pictures`;
CREATE TABLE `PREFIXads_pictures` (
  `id` int(10) NOT NULL auto_increment,
  `ad_id` int(11) NOT NULL,
  `picture` varchar(128) NOT NULL,
  `folder` VARCHAR( 20 ) default NULL,
  `order_no` int(2) NOT NULL default '1',
  `title` varchar(200) default null,
  PRIMARY KEY  (`id`),
  KEY `idx_ad` (`ad_id`),
  KEY `idx_order` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXads_settings`;
CREATE TABLE `PREFIXads_settings` (
  `thmb_width` int(4) default '140',
  `thmb_height` int(4) default '98',
  `med_thmb_width` int(4) default '300',
  `med_thmb_height` int(4) default '300',
  `big_thmb_width` int(4) default '600',
  `big_thmb_height` int(4) default '420',
  `nopic` varchar(128),
  `med_nopic` varchar(128),
  `big_nopic` varchar(128),
  `pic_max_size` int(5) default '10000',
  `pic_max_width` int(5) default '6000',
  `pic_max_height` int(5) default '4500',
  `resize_image` tinyint(1) default 0,
  `resize_width` int(5) default '800',
  `resize_height` int(5) default '600',
  `watermark` varchar(60) default null,
  `watermark_position` varchar(4) default 'br',
  `watermark_transparency` int(3) default '50',
  `days_recent` int(5) default '0',
  `badwords_check` tinyint(1) default '1',
  `badwords_check_type` tinyint(1) default '1',
  `enable_price` tinyint(1) default NULL,
  `enable_stock` tinyint(1) default '1',
  `enable_sold` tinyint(1) default '1',
  `enable_rented` tinyint(1) default '0',
  `sold_image` varchar(60) default NULL,
  `rented_image` varchar(60) default NULL,
  `hide_contact_when_sold` tinyint(1) default 0,
  `hide_contact_when_rented` tinyint(1) default 0,
  `no_featured` int(2) default '2',
  `no_featured_on_row` int(2) default '1',
  `enable_latest` tinyint(1) default '1',
  `no_latest` int(2) default '3',
  `no_latest_on_row` int(2) default '3',
  `show_more_link` tinyint(1) default '1',
  `enable_featured` tinyint(1) default '1',
  `enable_highlited` tinyint(1) default '1',
  `enable_priorities` tinyint(1) default '1',
  `random_priorities` tinyint(1) default '0',
  `enable_video` tinyint(1) default '1',
  `highlited_color` varchar(7) default NULL,
  `highlited_expires` int(4) default '0',
  `priorities_expires` int(4) default '0',
  `video_expires` int(4) default '0',
  `highlited_price` double default '0',
  `video_price` double default '0',
  `store_availability` int(4) default '30',
  `store_price` double default '0',
  `dealer_subdomain` tinyint(1) default '0',
  `dealers_can_edit_slug` tinyint(1) default 0,
  `resize_store_image` tinyint(1) default 0,
  `resize_store_width` int(5) default '200',
  `resize_store_height` int(5) default '100',
  `add_meta_with_listings` tinyint(1) default '1',
  `allowed_html` varchar(250),
  `search_in_fields` varchar(250),
  `location_fields` varchar(250),
  `translate_title_description` tinyint(1) default 0,
  `show_ad_date_for_everybody` tinyint(1) default '1',
  `alerts_enabled` tinyint(1) default 1,
  `alerts_ask_adv_key` tinyint(1) default 0,
  `alerts_days_delete` int(4) default 30,
  `alerts_require_login` tinyint(1) default 0,
  `alerts_activation` tinyint(1) default 2,
  `saved_searches_enabled` tinyint(1) default 1,
  `enable_map_search` tinyint(1) default 0,
  `map_visible` tinyint(1) default 0,
  `default_search_view` tinyint(1) default 0,
  `search_location_fields` varchar(250),
  `search_type` VARCHAR( 10 ) NOT NULL DEFAULT 'any',
  `hide_contact_when_not_logged`  TINYINT( 1 ) NOT NULL DEFAULT '0',
  `featured_autoscroll` tinyint(1) default 1,
  `date_time_ago_format` tinyint(1) default 0,
  `date_time_ago_days` int(3) default 7,
  `pending_edited` tinyint(1) default 0,
  `enable_auctions` tinyint(1) default 0,
  `notify_when_new_bid` tinyint(1) default 1,
  `prioritize_featured`tinyint(1) default 0,
  `search_by_account_type` tinyint(1) default 0,
  `prof_groups` varchar(20) default '0',
  `enable_distance_search` tinyint(1) default 0,
  `ds_measuring_unit` varchar(5) default 'Km',
  `ds_distances_list` varchar(100) default '2|5|10|15|30|50|75|100',
  `enable_location_autosuggest` tinyint(1) default 0,
  `limit_location_autosuggest` varchar(50) default null,
  `gm_api_lang` varchar(2) default null,
  `count_refine_results` int(1) default 0,
  `enable_urgent` tinyint(1) default 0,
  `enable_url` tinyint(1) default 0,
  `urgent_expires` int(4) default '0',
  `url_expires` int(4) default '0',
  `urgent_price` double default '0',
  `url_price` double default '0',
  `featured_example` varchar(100) default null,
  `highlited_example` varchar(100) default null,
  `priorities_example` varchar(100) default null,
  `video_example` varchar(100) default null,
  `urgent_example` varchar(100) default null,
  `url_example` varchar(100) default null,
  `latest_show_only_with_image` tinyint(1) default 0,
  `latest_show_list` tinyint(1) default 0,
  `hide_contact_button` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXads_settings` set `thmb_width`=140, `thmb_height`=98, `med_thmb_width`=300, `med_thmb_height`=300, `big_thmb_width`=600, `big_thmb_height`=420, `nopic`='noimage.jpg', `med_nopic`='mednoimage.jpg', `big_nopic`='big_noimage.jpg', `pic_max_size`=10000, `pic_max_width`=6000, `pic_max_height`=4500, `days_recent`=0, `badwords_check`=1, `badwords_check_type`=1, `enable_price`=1, `enable_stock`=1, `enable_sold`=1, `enable_rented`=1, `sold_image`='sold.gif', `rented_image`='rented.gif', `no_featured`=5, `no_featured_on_row`=5, `no_latest`=5, `no_latest_on_row`=1, `show_more_link`=1, `enable_featured`=1, `enable_highlited`=1, `enable_priorities`=1, `highlited_color`='#f5f5f5', `highlited_expires`=0, `priorities_expires`=0, `highlited_price`=2, `add_meta_with_listings`=0,
`resize_image` = 0, `resize_width` = '800', `resize_height` = '600', `watermark` = '', `watermark_position` = 'br', `watermark_transparency` = 50, `enable_video` = 0, `video_expires` = 0, `video_price` = 2, `allowed_html`='b,br,center,div,em,span,p,i,u,font,strong', `search_in_fields`='title,description', `location_fields` = 'country,region,city', `hide_contact_when_sold`=0, `hide_contact_when_rented`=0, `translate_title_description`=0, `show_ad_date_for_everybody` =1,
`store_availability`=30, `store_price`=10, `alerts_enabled` = 1, `alerts_ask_adv_key` = 0, `alerts_days_delete` = 30, `alerts_require_login` = 0, `alerts_activation` = 2, `saved_searches_enabled`=1, `resize_store_image`=0, `resize_store_width`=200, `resize_store_height`=100 , `search_location_fields` = 'country,region,city,zip', `urgent_price`='1', `url_price`='3';

DROP TABLE if exists `PREFIXads_settings_lang`;
CREATE TABLE `PREFIXads_settings_lang` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `featured_description` varchar(255) default null,
  `highlited_description` varchar(255) default null,
  `priorities_description` varchar(255) default null,
  `video_description` varchar(255) default null,
  `urgent_description` varchar(255) default null,
  `url_description` varchar(255) default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXads_settings_lang`
    set `lang_id`='DEF_LANG',
    `featured_description` = 'Show your ad on the homepage.',
    `highlited_description` = 'Your ad will be colored differently to be more visible.',
    `priorities_description` = 'Your ad will be placed on top of search pages.',
    `video_description` = 'Add a Youtube video to your ad.',
    `urgent_description` = 'Show your ad with an Urgent tag.',
    `url_description` = 'Add your Website Link to your ad.';

DROP TABLE if exists `PREFIXaffiliates`;
CREATE TABLE `PREFIXaffiliates` (
    `id` int(10) NOT NULL,
    `affiliate_id` varchar(8) NOT NULL,
    `affiliate_paypal_email` varchar(50),
     PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXaffiliates_revenue`;
CREATE TABLE `PREFIXaffiliates_revenue` (
	`id` int(10) NOT NULL auto_increment,
	`affiliate_id` varchar(8) NOT NULL,
	`amount` float,
	`date` datetime not null,
	`order_id` int(20) not null,
	`paid` int(1) default 0,
	`released` int(1) default 0,
	`payment_id` int(10) default null,
	PRIMARY KEY  (`id`),
	KEY `idx_affiliate_id` (`affiliate_id`),
 	KEY `idx_date` (`date`),
	KEY `idx_paid` (`paid`),
	KEY `idx_released` (`released`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE `PREFIXaffiliates_payments`;
CREATE TABLE `PREFIXaffiliates_payments` (
	`id` int(3) NOT NULL auto_increment,
	`affiliate_id` varchar(8) NOT NULL,
	`amount` float,
	`date` datetime not null,
	`processor` varchar(40) default 'paypal',
	`paid_to` varchar(200) default null,
	`completed` int(1) default 0,
	PRIMARY KEY  (`id`),
	KEY `idx_affiliate_id` (`affiliate_id`),
	KEY `idx_date` (`date`),
	KEY `idx_released` (`completed`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXaltiria`;
CREATE TABLE `PREFIXaltiria` (
  `replacePOSTsms` varchar(50),
  `domainId` varchar(50),
  `altiria_login` varchar(50),
  `altiria_passwd` varchar(50)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXaltiria` set `altiria_login`='';

DROP TABLE if exists `PREFIXaltiria_log`;
CREATE TABLE `PREFIXaltiria_log` (
  `object_id` int(8),
  `type` varchar(8),
  `success` int(1) default 1,
  `error_message` varchar(200),
  `details` text,
  `date` datetime default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXappearance`;
CREATE TABLE `PREFIXappearance` (
  `template` varchar(50) default 'default',
  `template_colorscheme` varchar(50),
  `admin_template` varchar(50) default 'default',
  `admin_language` varchar(20) default 'eng',
  `show_header` tinyint(1) default '1',
  `header_pic` varchar(128),
  `small_header_pic` varchar(128),
  `header_pic_link` varchar(128) default NULL,
  `show_footer` tinyint(1) default '0',
  `footer_pic` varchar(128),
  `footer_pic_link` varchar(128) default NULL,
  `show_footer_categ` tinyint(1) default '1',
  `outer_table` int(4),
  `max_cat_per_row` tinyint(1) default '6',
  `categ_count_ads` tinyint(1) default '1',
  `ads_per_page` int(2) default '5',
  `first_page_type` int(2) default 1,
  `timezone` varchar(50) default 'GMT',
  `time_offset` int(5) default 0,
  `maintenance_mode` int(1) default 0,
  `maintenance_ips` text,
  `enable_impressions_count` int(1) default 1,
  `admin_template_colorscheme` varchar(50) default 'blue'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXappearance` (`template`, `template_colorscheme`, `admin_template`, `admin_language`, `show_header`, `header_pic`, `header_pic_link`, `show_footer`, `footer_pic`, `footer_pic_link`, `show_footer_categ`, `outer_table`, `max_cat_per_row`, `categ_count_ads`, `ads_per_page`, `first_page_type`, `timezone`) VALUES
('flux', 'green', 'default', 'eng', 1, '', '', 1, '', '', 0, 1200, 6, 1, 20, 1, 'GMT');


DROP TABLE if exists `PREFIXappearance_lang`;
CREATE TABLE `PREFIXappearance_lang` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `footer_text` varchar(255) default '',
  `charset` varchar(50) default 'UTF-8',
  `default_currency` varchar(10) default '$',
  `currency_pos` tinyint(1) default '0',
  `date_format` varchar(30) default NULL,
  `date_format_long` varchar(30) default NULL,
  `number_format_decimals` int(2) default 2,
  `number_format_point` varchar(5) default '.',
  `number_format_separator` varchar(6) default ',',
  `price_format_decimals` int(2) default 0,
  `price_format_point` varchar(5) default '.',
  `price_format_separator` varchar(6) default ','
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXappearance_lang` set `lang_id`='DEF_LANG', `footer_text`='Copyright 2020, YourDomain.com', `charset`='UTF-8', `default_currency`='$', `currency_pos`=0, `date_format`='%b %d, %Y', `date_format_long`= '%b %d, %Y %H:%i', `number_format_decimals`=2, `number_format_point` = '.', `number_format_separator` = ',', `price_format_decimals`= 2, `price_format_point`='.', `price_format_separator`=',';

DROP TABLE if exists `PREFIXauctions`;
CREATE TABLE `PREFIXauctions` (
  `id` int(10) NOT NULL auto_increment,
  `ad_id` int(10) NOT NULL,
  `starting_price` double NOT NULL,
  `currency` VARCHAR(20),
  `max_bid` double default NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
   PRIMARY KEY  (`id`),
   KEY `ad_id` (`ad_id`),
   KEY `date` (`date`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXbids`;
CREATE TABLE `PREFIXbids` (
  `id` int(10) NOT NULL auto_increment,
  `aid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bid` double NOT NULL,
  `date` datetime NOT NULL,
  `message` text default null,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;



DROP TABLE if exists `PREFIXauthorize_return`;
CREATE TABLE `PREFIXauthorize_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `x_response_code` int(3),
  `x_response_subcode` int(3),
  `x_response_reason_code` int(3),
  `x_response_reason_text` text,
  `x_auth_code` varchar(6),
  `x_avs_code` char,
  `x_trans_id` varchar(40),
  `x_invoice_num` int(5),
  `x_description` varchar(100),
  `x_amount` float,
  `x_method` varchar(10),
  `x_type` varchar(20),
  `x_cust_id` varchar(20),
  `x_first_name` varchar(50),
  `x_last_name` varchar(50),
  `x_company` varchar(60),
  `x_address` varchar(60),
  `x_city` varchar(40),
  `x_state` varchar(50),
  `x_zip` varchar(20),
  `x_country` varchar(60),
  `x_phone` varchar(25),
  `x_fax` varchar(25),
  `x_email` varchar(255),
  `x_ship_to_first_name` varchar(50),
  `x_ship_to_last_name` varchar(50),
  `x_ship_to_company` varchar(50),
  `x_ship_to_address` varchar(60),
  `x_ship_to_city` varchar(40),
  `x_ship_to_state` varchar(50),
  `x_ship_to_zip` varchar(20),
  `x_ship_to_country` varchar(60),
  `x_tax` float,
  `x_duty` float,
  `x_freight` float,
  `x_tax_exempt` varchar(10),
  `x_po_num` varchar(25),
  `x_MD5_Hash` varchar(50),
  `x_cvv2_resp_code` varchar(2),
  `x_cavv_response` varchar(2),
  `x_test_request` varchar(20),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXauthorize_settings`;
CREATE TABLE `PREFIXauthorize_settings` (
  `authorize_login` varchar(20),
  `authorize_tkey` varchar(30),
  `authorize_secret` varchar(30),
  `authorize_pay_title` varchar(128),
  `authorize_demo` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXauthorize_settings` (`authorize_login`, `authorize_tkey`, `authorize_secret`, `authorize_pay_title`, `authorize_demo`) VALUES
('', '', '', 'Classifieds Payment', 0);


DROP TABLE if exists `PREFIXbadwords`;
CREATE TABLE `PREFIXbadwords` (
  `word` varchar(50)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXbanners`;
CREATE TABLE `PREFIXbanners` (
  `id` int(3) NOT NULL auto_increment,
  `filename` varchar(128) default NULL,
  `title` varchar(128) default NULL,
  `code` text,
  `position` varchar(30) default NULL,
  `sections` varchar(250) default NULL,
  `link` varchar(128) default NULL,
  `date_added` datetime default NULL,
  `date_start` datetime default NULL,
  `date_end` datetime default NULL,
  `max_impressions` int(11) NOT NULL default '0',
  `max_clicks` int(11) NOT NULL default '0',
  `impressions` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `categories` varchar(250) default NULL,
  `open_new` tinyint(1) DEFAULT '1',
  PRIMARY KEY  (`id`),
  KEY `idx_position` (`position`),
  KEY `idx_date_start` (`date_start`),
  KEY `idx_date_end` (`date_end`),
  KEY `idx_max_impressions` (`max_impressions`),
  KEY `idx_max_clicks` (`max_clicks`),
  KEY `idx_impressions` (`impressions`),
  KEY `idx_clicks` (`clicks`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXbanners_positions`;
CREATE TABLE `PREFIXbanners_positions` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `specific_section` tinyint(1) default 0,
  `active` tinyint(1) NOT NULL default '1',
  `no_banners` int(2) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXbanners_positions` (`id`, `name`, `specific_section`, `active`, `no_banners`) VALUES
(1,'header', 0, 1, 1),
(2,'footer', 0, 1, 1),
(3,'left', 0, 1, 1),
(4,'right', 0, 1, 1),
(5,'details1', 1, 1, 1),
(6,'details2', 1, 1, 1),
(7,'details3',1, 0, 1),
(8,'details4', 1, 0, 1),
(9,'firstpage1', 1, 1, 1),
(10,'firstpage2', 1, 1, 1),
(11,'firstpage3', 1, 1, 1),
(12,'firstpage4', 1, 1, 1),
(13,'listings1', 1, 1, 1),
(14,'listings2', 1, 1, 1),
(15,'listings3', 1, 1, 1),
(16,'listings4', 1, 1, 1),
(17,'footer-mobile', 0, 1, 1),
(18,'background', 0, 1, 1),
(19,'header-mobile', 0, 1, 1),
(20,'top', 0, 0, 1);

DROP TABLE if exists `PREFIXbtcpay_return`;
CREATE TABLE `PREFIXbtcpay_return` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(128) NOT NULL,
  `ipn` text,
  `date` datetime default null,
  PRIMARY KEY (`iid`)
);

DROP TABLE if exists `PREFIXbtcpay_settings`;
CREATE TABLE `PREFIXbtcpay_settings` (
  `currency` varchar(3) NOT NULL,
  `server` varchar(512) NOT NULL,
  `testserver` varchar(512) NOT NULL,
  `path` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `testmode` enum('0','1') NOT NULL DEFAULT '0',
  `testtoken` varchar(128) NOT NULL,
  `approvewhen` enum('paid','confirmed','complete') NOT NULL DEFAULT 'paid',
  `phone_field` varchar(30) default null,
  `address_field` varchar(30) default null,
  `nologin_phone_field` varchar(30) default null,
  `nologin_address_field` varchar(30) default null
);
INSERT INTO PREFIXbtcpay_settings VALUES ('EUR', 'https://bitpay.com/', 'https://test.bitpay.com/', '$config_abs_path', '', '0', '', 'paid', 'phone', 'address', 'mgm_phone', '');

DROP TABLE if exists `PREFIXblocked_emails`;
CREATE TABLE `PREFIXblocked_emails` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(64),
  `info` varchar(200),
  PRIMARY KEY  (`id`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXblocked_ips`;
CREATE TABLE `PREFIXblocked_ips` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip` varchar(39),
  `type` tinyint(1) default 1,
  `date_expires` datetime,
  `blocked_for` int(2),
  `info` varchar(200),
  PRIMARY KEY  (`id`),
  KEY `idx_ip` (`ip`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXblocked_phones`;
CREATE TABLE `PREFIXblocked_phones` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `phone` varchar(64),
  `info` varchar(200),
  PRIMARY KEY  (`id`),
  KEY `idx_phone` (`phone`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXbulksms`;
CREATE TABLE `PREFIXbulksms` (
  `bulksms_username` varchar(50),
  `bulksms_password` varchar(50)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXbulksms` set `bulksms_username`='';

DROP TABLE if exists `PREFIXbulksms_log`;
CREATE TABLE `PREFIXbulksms_log` (
  `object_id` int(8),
  `type` varchar(8),
  `success` tinyint(1) default 0,
  `api_batch_id` varchar(50),
  `api_message` varchar(50),
  `api_status_code` varchar(20),
  `http_status_code` varchar(4),
  `details` text,
  `transient_error` varchar(20),
  `date` datetime default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcategories`;
CREATE TABLE `PREFIXcategories` (
  `id` int(3) NOT NULL auto_increment,
  `picture` varchar(64) default null,
  `icon` varchar(50) default null,
  `parent_id` int(11) NOT NULL default '0',
  `fieldset` int(2) default NULL,
  `order_no` int(5) default NULL,
  `groups` varchar(250) NOT NULL default '0',
  `ads` int(10) NOT NULL default 0,
  `level` int(1) NOT NULL default 1,
  `active` tinyint(1) default 1,
  PRIMARY KEY  (`id`),
  KEY `idx_order` (`order_no`),
  KEY `idx_parent` (`parent_id`),
  KEY `idx_fieldset` (`fieldset`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcategories_lang`;
CREATE TABLE `PREFIXcategories_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(128) default NULL,
  `description` text,
  `page_title` varchar(250) default NULL,
  `meta_keywords` text,
  `meta_description` text,
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE IF EXISTS `PREFIXcategories_no_ads`;
CREATE TABLE IF NOT EXISTS `PREFIXcategories_no_ads` (
  `category_id` int(4)  NOT NULL,
  `field` varchar(40)  NOT NULL,
  `val` varchar(64)  NOT NULL,
  `no` int(10) default 0
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXccbill_settings`;
CREATE TABLE `PREFIXccbill_settings` (
  `account_no` varchar(6),
  `subaccount_no` varchar(4),
  `form_name` varchar(30),
  `currency` varchar(3),
  `salt` varchar(50)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXccbill_settings` set `currency`='840';

DROP TABLE if exists `PREFIXccbill_return`;
CREATE TABLE `PREFIXccbill_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `accountingAmount` float,
  `address1` varchar(30),
  `affiliate` varchar(30),
  `affiliate_id` varchar(30),
  `affiliate_system` int(3),
  `allowedTypes` text,
  `baseCurrency` int(3),
  `cardType` varchar(20),
  `ccbill_referer` varchar(20),
  `city` varchar(30),
  `clientAccnum` varchar(20),
  `clientDrivenSettlement` tinyint(1),
  `clientSubacc` varchar(4),
  `consumerUniqueId` varchar(20),
  `country` varchar(30),
  `currencyCode` int(3),
  `customer_fname` varchar(20),
  `customer_lname` varchar(30),
  `denialId` varchar(20),
  `email` varchar(40),
  `formName` varchar(255),
  `initialFormattedPrice` varchar(30),
  `initialPeriod` int(4),
  `initialPrice` float,
  `ip_address` varchar(39),
  `lifeTimeSubscription` tinyint(1),
  `password` varchar(30),
  `paymentAccount` varchar(32),
  `phone_number` varchar(20),
  `price` varchar(50),
  `productDesc` varchar(50),
  `reasonForDecline` text,
  `reasonForDeclineBeforeOverride` text,
  `reasonForDeclineCode` int(3),
  `reasonForDeclineCodeBeforeOverride` int(3),
  `rebills` tinyint(2),
  `recurringFormattedPrice` varchar(30),
  `recurringPeriod` int(4),
  `recurringPrice` float,
  `referer` varchar(16),
  `referringUrl` text,
  `reservationId` varchar(20),
  `responseDigest` varchar(32),
  `start_date` datetime,
  `state` varchar(20),
  `subscription_id` varchar(20),
  `typeId` varchar(10),
  `username` varchar(16),
  `zipcode` varchar(10),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcinetpay_return`;
CREATE TABLE `PREFIXcinetpay_return` (
    `id` bigint(20) NOT NULL auto_increment,
    `ukey` varchar(255) default '0',
    `date` datetime default null,
    `entirepost` text,
    `signature` varchar(50),
    `cpm_amount` double,
    `cpm_currency` varchar(3),
    `cpm_payid` varchar(40),
    `cpm_version` varchar(10),
    `cpm_payment_date` varchar(40),
    `cpm_payment_time` varchar(40),
    `cpm_error_message` varchar(20),
    `payment_method` varchar(20),
    `cpm_cel_phone_num` varchar(30),
    `cpm_cell_phone_prefixe`varchar(10),
    `cpm_ipn_ack` varchar(3),
    `created_at` varchar(20),
    `updated_at` varchar(20),
    `cpm_result` varchar(10),
    `cpm_trans_status` varchar(20),
    `cpm_designation` varchar(30),
    `buyer_name` varchar(50),
    PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXcinetpay_settings`;
CREATE TABLE `PREFIXcinetpay_settings` (
  `cinetpay_siteId` varchar(128),
  `cinetpay_apikey` varchar(50),
  `cinetpay_currency` varchar(3),
  `cinetpay_description` varchar(200),
  `cinetpay_test` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXcinetpay_settings` set `cinetpay_test`='0', `cinetpay_currency`= 'CFA';


DROP TABLE if exists `PREFIXclickatell`;
CREATE TABLE `PREFIXclickatell` (
  `clickatell_username` varchar(50),
  `clickatell_password` varchar(50),
  `clickatell_api_id` varchar(30)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXclickatell` set `clickatell_username`='';

DROP TABLE if exists `PREFIXclickatell_log`;
CREATE TABLE `PREFIXclickatell_log` (
  `object_id` int(8),
  `type` varchar(8),
  `success` tinyint(1) default 0,
  `message_id` varchar(30),
  `error_code` varchar(10),
  `error_string` varchar(200),
  `details` text,
  `date` datetime default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXcountries`;
CREATE TABLE `PREFIXcountries` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(128) default '',
  `lang_id` varchar(20) default 'DEF_LANG',
  `set_id` int(3) default 0,
  KEY `id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_set_id` (`set_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcoupons`;
CREATE TABLE `PREFIXcoupons` (
  `id` int(2) NOT NULL auto_increment,
  `code` varchar(40) default '',
  `type` varchar(20) default 'fixed',
  `discount` double,
  `ads` tinyint(1) default 1,
  `store` tinyint(1) default 1,
  `groups` varchar(30) default '0',
  `allow` int(3) default 0,
  `date_start` datetime default NULL,
  `date_end` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcredits_packages`;
CREATE TABLE `PREFIXcredits_packages` (
  `id` int(2) NOT NULL auto_increment,
  `no_credits` double not null,
  `price` double,
  `groups` varchar(250) default '0',
  `order_no` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcredits_packages_lang`;
CREATE TABLE `PREFIXcredits_packages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20),
  `name` varchar(200)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcredits_return`;
CREATE TABLE `PREFIXcredits_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXcredits_settings`;
CREATE TABLE `PREFIXcredits_settings` (
  `unit` double,
  `groups` varchar(250) default '0'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;
INSERT into `PREFIXcredits_settings` set `unit`=1;


DROP TABLE if exists `PREFIXcurrencies`;
CREATE TABLE `PREFIXcurrencies` (
  `id` int(2) NOT NULL auto_increment,
  `currency` varchar(16),
  `order_no` int(4) default '1000',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXcurrencies` (`id`, `currency`, `order_no`) VALUES (1, '$', 2);


DROP TABLE if exists `PREFIXcustom_pages`;
CREATE TABLE `PREFIXcustom_pages` (
  `id` int(3) NOT NULL auto_increment,
  `code` varchar(30) default null,
  `type` tinyint(1) default '1',
  `hreflink` varchar(200) default NULL,
  `navlink` tinyint(1) default '1',
  `blank` tinyint(1) default '0',
  `parent_id` int(11) default '0',
  `active` tinyint(1) default '1',
  `read_only` tinyint(1) default '0',
  `order_no` int(5) default NULL,
  `groups` VARCHAR( 250 ) NOT NULL DEFAULT '0',
  `noindex` tinyint(1) default 0,
  PRIMARY KEY  (`id`),
  KEY `idx_active` (`active`),
  KEY `idx_type` (`type`),
  KEY `idx_order_no` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXcustom_pages` (`id`, `type`, `hreflink`, `navlink`, `active`, `read_only`, `order_no`) VALUES
(1, 1, '', 0, 1, 1, 1), (2, 1, '', 2, 0, 1, 2), (3, 1, '', 0, 1, 1, 3);


DROP TABLE if exists `PREFIXcustom_pages_lang`;
CREATE TABLE `PREFIXcustom_pages_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `title` varchar(128) default NULL,
  `content` text,
  `page_title` varchar(200),
  `meta_description` text,
  `meta_keywords` text,
   KEY `idx_id` (`id`),
   KEY `idx_lang_id` (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXcustom_pages_lang` (`id`, `title`, `content`, `page_title`, `meta_description`, `meta_keywords`) VALUES
(1, 'First Page Content', '', '', '',''), (2, 'Affiliates', '<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class="mt4 lfloat buttonwrapper space5"><div class="button1-left"><a href="register.php?group=2"><span class="button1-right">Register as an affiliate!</span></a></div></div><br/><br/>\n\n', 'Affiliates', '', ''), (3, 'Bulk uploads help', '', '', '', '');


DROP TABLE if exists `PREFIXdb_backup`;
CREATE TABLE `PREFIXdb_backup` (
  `enabled` tinyint(1) default 0,
  `backup_compress` varchar(10) default '0',
  `backup_freq` varchar(30),
  `keep` int(2),
  `generated_last` datetime default NULL
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXdb_backup` values (0, '0', 'weekly', 5, null);


DROP TABLE if exists `PREFIXdepending_fields`;
CREATE TABLE `PREFIXdepending_fields` (
  `id` int(2) NOT NULL auto_increment,
  `no` int(1) default 2,
  `caption1` varchar(64) default NULL,
  `caption2` varchar(64) default NULL,
  `caption3` varchar(64) default NULL,
  `caption4` varchar(64) default NULL,
  `caption5` varchar(64) default NULL,
  `table1` varchar(64) default NULL,
  `table2` varchar(64) default NULL,
  `table3` varchar(64) default NULL,
  `table4` varchar(64) default NULL,
  `table5` varchar(64) default NULL,
  `required1` tinyint(1) default NULL,
  `required2` tinyint(1) default NULL,
  `required3` tinyint(1) default NULL,
  `required4` tinyint(1) default NULL,
  `required5` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXdepending_fields` (`id`, `no`, `caption1`, `caption2`, `caption3`, `caption4`, `table1`, `table2`, `table3`, `table4`, `required1`, `required2`, `required3`, `required4`) VALUES
(1, 2, 'country', 'region', '', '', 'countries', 'regions', '', '', 0, 0, 0, 0 );


DROP TABLE if exists `PREFIXdepending_fields_lang`;
CREATE TABLE `PREFIXdepending_fields_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name1` varchar(64) default NULL,
  `name2` varchar(64) default NULL,
  `name3` varchar(64) default NULL,
  `name4` varchar(64) default NULL,
  `name5` varchar(64) default NULL,
  `top_str1` varchar(64) default NULL,
  `top_str2` varchar(64) default NULL,
  `top_str3` varchar(64) default NULL,
  `top_str4` varchar(64) default NULL,
  `top_str5` varchar(64) default NULL,
  `error_message1` text,
  `error_message2` text,
  `error_message3` text,
  `error_message4` text,
  `error_message5` text,
  KEY `idx_lang` (`lang_id`),
  KEY `idx_id` (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXdepending_fields_lang` (`id`, `name1`, `name2`, `top_str1`, `top_str2`, `error_message1`, `error_message2`) VALUES
(1, 'Country', 'Region', 'Select Country', 'Select Region', '', '' );


DROP TABLE if exists `PREFIXdiscounts`;
CREATE TABLE `PREFIXdiscounts` (
  `object_id` int(2) NOT NULL,
  `type` varchar(10) default 'ad',
  `code` varchar(40) default '',
  `user_id` int(10),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_code` (`code`),
  KEY `idx_type` (`type`),
  KEY `idx_object_id` (`object_id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXebanx_return`;
CREATE TABLE `PREFIXebanx_return` (
    `id` bigint(20) NOT NULL auto_increment,
    `ukey` varchar(255) default '0',
    `date` datetime default null,
    `entirepost` text,
	`merchant_payment_code` varchar(50),
	`pstatus` varchar(10),
	`status_date` varchar(30),
	`open_date` varchar(30),
	`confirm_date` varchar(30),
	`amount_br` float,
	`amount_ext` float,
	`amount_iof` float,
	`currency_rate` float,
	`currency_ext` varchar(3),
	`due_date` varchar(30),
	`installments` int(3),
	`payment_type_code` varchar(20),
	`acquirer` varchar(50),
	`code` varchar(20),
	`description` varchar(255),
	`authcode` varchar(20),
	`pre_approved` varchar(10),
	`capture_available` varchar(10),
	`status` varchar(10),
	PRIMARY KEY  (`id`));

DROP TABLE if exists `PREFIXebanx_settings`;
CREATE TABLE `PREFIXebanx_settings` (
  `integration_key` varchar(100),
  `currency` varchar(3),
  `country` varchar(2),
  `name_field` varchar(30) default null,
  `email_field` varchar(30) default null,
  `nologin_name_field` varchar(30) default null,
  `nologin_email_field` varchar(30) default null,
  `test` tinyint(1) default 0
	) ENGINE=MyISAM;
INSERT INTO `PREFIXebanx_settings` set currency='COP', country='co';

DROP TABLE if exists `PREFIXemail_alerts`;
CREATE TABLE `PREFIXemail_alerts` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10),
  `email` varchar(100),
  `ip` varchar(39),
  `search` text,
  `frequency` varchar(20),
  `date` datetime,
  `last_check` datetime,
  `key` varchar(200),
  `active` tinyint(1) default 1,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `idx_user_id` (`user_id`),
  KEY `email` (`email`),
  KEY `idx_last_check` (`last_check`),
  KEY `idx_active` (`active`),
  KEY `ip` (`ip`),
  KEY `frequency` (`frequency`),
  KEY `date_2` (`date`,`frequency`),
  KEY `active_2` (`active`,`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXepay_return`;
CREATE TABLE `PREFIXepay_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
 `tid` int(20),
  `orderid` varchar(50),
  `amount` int(20),
  `cur` int(3),
  `eKey` varchar(50),
  `fraud` int(1),
  `transfee` int(10),
  `HTTP_COOKIE` varchar(50),
  `subscriptionid` int(30),
  `cardid` int(50),
  `entirepost` text,
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXepay_settings`;
CREATE TABLE `PREFIXepay_settings` (
  `epay_merchantnumber` int(20) default NULL,
  `epay_language` int(2) default 1,
  `epay_currency` int(4) default 208,
  `epay_md5key` varchar(255)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXepay_settings` (`epay_merchantnumber`, `epay_language`, `epay_currency`, `epay_md5key`) VALUES
('', 1, 208, '');

DROP TABLE if exists `PREFIXeuplatesc_settings`;
CREATE TABLE `PREFIXeuplatesc_settings` (
    `merchant_id` varchar(50),
    `key` varchar(50),
    `currency` varchar(3),
    `item_name` varchar(100)
    ) ENGINE=MyISAM;

insert into `PREFIXeuplatesc_settings` set `item_name`='Classifieds ad';

DROP TABLE if exists `PREFIXeuplatesc_return`;
CREATE TABLE `PREFIXeuplatesc_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `amount` varchar(20),
  `curr` varchar(10),
  `invoice_id` varchar(100),
  `ep_id` varchar(100),
  `merch_id` varchar(20),
  `action` varchar(30),
  `message` varchar(50),
  `approval` varchar(50),
  `timestamp` varchar(20),
  `nonce` varchar(60),
  `entirepost` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

DROP TABLE if exists `PREFIXexperttexting`;
CREATE TABLE `PREFIXexperttexting` (
  `experttexting_username` varchar(50),
  `experttexting_password` varchar(50),
  `experttexting_api_key` varchar(30),
  `experttexting_from` varchar(30)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXexperttexting` set `experttexting_username`='';

CREATE TABLE `PREFIXexperttexting_log` (
  `success` int(1) default 1,
  `status` int(1) default 0,
  `message_id` varchar(30),
  `price` double,
  `error_message` varchar(200),
  `details` text,
  `date` datetime default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXfailed_attempts`;
CREATE TABLE `PREFIXfailed_attempts` (
  `is_admin` tinyint(1) default 0,
  `date` datetime,
  `ip` varchar(39)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXfavourites`;
CREATE TABLE `PREFIXfavourites` (
  `ad_id` int(10) NOT NULL,
  `user_id` int(4) NOT NULL,
  KEY `idx_ad_id` (`ad_id`),
  KEY `idx_user_id` (`user_id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXfeatured_plans`;
CREATE TABLE `PREFIXfeatured_plans` (
  `id` int(2) NOT NULL auto_increment,
  `amount` float default '0',
  `no_days` int(4) default '0',
  `order_no` int(2) default NULL,
  PRIMARY KEY  (`id`)
);

INSERT INTO `PREFIXfeatured_plans` set `amount`='5', `no_days`='0', `order_no`=1;

DROP TABLE if exists `PREFIXfields`;
CREATE TABLE `PREFIXfields` (
  `id` int(3) NOT NULL auto_increment,
  `fieldset` varchar(200),
  `caption` varchar(200) default NULL,
  `type` varchar(20) default 'textbox',
  `order_no` int(2) default NULL,
  `is_numeric` tinyint(1) default '0',
  `validation_type` varchar(100) default NULL,
  `size` varchar(10) default 20,
  `min` int(10) default 0,
  `max` int(10) default 0,
  `required` tinyint(1) default '0',
  `editable` tinyint(1) default '1',
  `advanced_search` tinyint(1) default 0,
  `quick_search` tinyint(1) default 0,
  `search_type` tinyint(1) default '1',
  `max_uploaded_size` double default 0,
  `extensions` varchar(100) default NULL,
  `image_resize` varchar(20) default NULL,
  `dep_id` int(4) default 0,
  `other_val` tinyint(1) default 0,
  `all_val` tinyint(1) default 0,
  `read_only` tinyint(1) default '0',
  `unique` tinyint(1) default '0',
  `ext1` tinyint(1) default '0',
  `active` tinyint(1) default '1',
  `groups` varchar(100) default 0,
  PRIMARY KEY  (`id`),
  KEY `idx_active` (`active`)
) ENGINE=MyISAM  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXfields` (`id`, `fieldset`, `caption`, `type`, `order_no`, `is_numeric`, `validation_type`, `size`, `min`, `max`, `required`, `editable`, `advanced_search`, `quick_search`, `search_type`, `max_uploaded_size`, `extensions`, `image_resize`, `dep_id`, `other_val`, `read_only`, `active`) VALUES
(1, 0, 'price', 'price', 1, 1, 'price', '7', 0, 0, 0, 1, 1, 0, 2, 0, '2|.|,', '', 0, 0, 1, 1),
(2, 0, 'country_region', 'depending', 2, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 1, 0, 0, 1),
(3, 0, 'city', 'textbox', 3, 0, '', '20', 0, 0, 0, 1, 1, 0, 0, 0, '', '', 0, 0, 0, 1),
(4, 0, 'zip', 'textbox', 4, 0, '', '20', 0, 0, 0, 1, 1, 0, 0, 0, '', '', 0, 0, 0, 1);


DROP TABLE if exists `PREFIXfields_lang`;
CREATE TABLE `PREFIXfields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(128) default NULL,
  `top_str` varchar(128) default NULL,
  `error_message` text default NULL,
  `error_message2` text default NULL,
  `info_message` text default NULL,
  `default_val` text default NULL,
  `prefix` varchar(64) default NULL,
  `postfix` varchar(64) default NULL,
  `elements` text default NULL,
  `search_elements` text default NULL,
  `date_format` varchar(30) default NULL,
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_id` (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXfields_lang` (`id`, `name`, `top_str`, `error_message`, `info_message`, `default_val`, `prefix`, `postfix`, `elements`, `search_elements`, `date_format`) VALUES
(1, 'Price', '', 'Invalid price!', '', '', '', '', '', '500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000', ''),
(2, 'Country&Region', '', '', '', '', '', '', '', '', ''),
(3, 'City', '', '', '', '', '', '', '', '', ''),
(4, 'Zip', '', '', '', '', '', '', '', '', '');


DROP TABLE if exists `PREFIXfieldsets`;
CREATE TABLE `PREFIXfieldsets` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(64) default NULL,
  `description` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXflagged_ips`;
CREATE TABLE `PREFIXflagged_ips` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip` varchar(39),
  `info` varchar(200),
  PRIMARY KEY  (`id`),
  KEY `idx_ip` (`ip`)
);


DROP TABLE if exists `PREFIXfortumo_products`;
CREATE TABLE IF NOT EXISTS `PREFIXfortumo_products` (
  `id` int(2) NOT NULL auto_increment,
  `price` float not null,
  `keyword` varchar(100) default NULL,
  `short_code` char(10) default NULL,
  `secret` char(50) default NULL,
  PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXfortumo_return`;
CREATE TABLE `PREFIXfortumo_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(20) default '0',
  `message` varchar(100),
  `sender` varchar(50),
  `country` varchar(2),
  `price` float,
  `currency` varchar(3),
  `service_id` varchar(100),
  `message_id` varchar(50),
  `keyword` varchar(50),
  `shortcode` int(10),
  `operator` varchar(40),
  `billing_type` varchar(2),
  `status` varchar(20),
  `test` varchar(5),
  `sig` varchar(50),
  `entirepost` text,
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXfortumo_settings`;
CREATE TABLE `PREFIXfortumo_settings` (
  `currency` varchar(3),
  `test` tinyint(1) default '0'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXfortumo_settings` (`currency`, `test`) VALUES
('EUR', 0);


DROP TABLE if exists `PREFIXhipay_return`;
CREATE TABLE `PREFIXhipay_return` (
    `id` int(10) NOT NULL auto_increment,
    `ukey` varchar(255) default '0',
    `date` datetime default null,
    `entirepost` text,
    `operation` varchar(100),
    `status` varchar(100),
    `time` varchar(130),
    `transid` varchar(130),
    `amount` varchar(130),
    `currency` varchar(130),
    `idformerchant` varchar(130),
    `merchantdatas` varchar(130),
    `emailClient` varchar(130),
    `subscriptionId` varchar(130),
    `refProduct` varchar(130),
     PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXhipay_settings`;
CREATE TABLE `PREFIXhipay_settings` (
  `member_account` varchar(128),
  `merchant_password` varchar(100),
  `website_id` varchar(10),
  `locale` varchar(20),
  `currency` varchar(3),
  `notification_email` varchar(100),
  `category` varchar(10)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


insert into `PREFIXhipay_settings` set `locale`='en_GB', `currency`= 'EUR';


DROP TABLE if exists `PREFIXicepay_ipn`;
CREATE TABLE `PREFIXicepay_ipn` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `Status` varchar(10),
  `StatusCode` varchar(100) default NULL,
  `Merchant` int(10),
  `OrderID` varchar(10),
  `PaymentID` int(10),
  `Reference` varchar(50),
  `TransactionID` varchar(50),
  `ConsumerName` varchar(100),
  `ConsumerAccountNumber` varchar(100),
  `ConsumerAddress` varchar(100),
  `ConsumerHouseNumber` varchar(10),
  `ConsumerPostCode` varchar(50),
  `ConsumerCity` varchar(100),
  `ConsumerCountry` varchar(100),
  `ConsumerEmail` varchar(200),
  `ConsumerPhoneNumber` varchar(50),
  `ConsumerIPAddress` varchar(50),
  `Amount` int(20),
  `Currency` varchar(3),
  `Duration` int(10),
  `Checksum` varchar(40),
  `PaymentMethod` varchar(20),
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXicepay_settings`;
CREATE TABLE `PREFIXicepay_settings` (
  `merchantID` int(10),
  `secretCode` varchar(50),
  `ic_language` varchar(3),
  `ic_country` varchar(3),
  `ic_currency` varchar(3),
  `description` text
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXicepay_settings` (`description`) VALUES ('');


DROP TABLE if exists `PREFIXie_settings`;
CREATE TABLE `PREFIXie_settings` (
  `bulk_type` varchar(20),
  `bulk_template` int(2),
  `bulk_plan` int(2),
  `csv_column_separator` varchar(10),
  `csv_field_separator` varchar(10),
  `custom_page_id` int(2) default 3
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO PREFIXie_settings values ('xml', '0', '1', ',', '"', 3);


DROP TABLE if exists `PREFIXie_templates`;
CREATE TABLE `PREFIXie_templates` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(50),
  `type` varchar(10) default 'ad',
  `purpose` varchar(10) default 'import',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXie_templates_fields`;
CREATE TABLE `PREFIXie_templates_fields` (
  `id` int(3) NOT NULL auto_increment,
  `template_id` int(2),
  `field` varchar(50),
  `alias` varchar(40),
  `cdata` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXinfo`;
CREATE TABLE `PREFIXinfo` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `code` varchar(50) NOT NULL,
  `content` text,
  `info` text
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXinfo` (`code`, `content`, `info`) VALUES
('ad_publish_status', '{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href="{$details_link}">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href="{$site_url}/useraccount.php">Return to your account</a>\r\n{/if}', 'The info message which appears after the ad is posted. The message can contain information about ad status.'),
('ad_options_upgrade_status', '{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n\{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n\{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href="{$site_url}/useraccount.php">Return to your account</a>\r\n{/if}', 'The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),
('subscription_status', '{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href="{$site_url}/useraccount.php">Return to your account</a>', 'The info message which appears after the subscription is posted. The message can contain information about subscription status.'),
('buy_store_status', '{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href="{$site_url}/useraccount.php">Return to your account</a>', 'The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),
('bulk_uploads_info', 'Place here information regarding bulk uploads format.', 'Message which explains to users how to use bulk uploads feature.'),
('password_recovery_mail_sent', 'An email has been sent to your email address with information how to recover your password.', 'The message the user gets after he submits for retrieving a lost password.'),
('not_authorized', 'You are not authorized to view this page!<br /> \r\n\r\nPlease <a href="login.php" class="info">login</a> on your account, or if you do not have one, please <a href="register.php" class="info">register</a>!', 'The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),
('password_recovery_key_invalid', 'You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!', 'The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),
('fortumo_info', 'Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::', 'The message which appears when the user chooses to pay with Fortumo SMS payment.'),
('fortumo_failed', 'The payment failed!', 'The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),
('fortumo_success', 'Payment successful!', 'The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),
('buy_credits_status', '{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>', 'The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),
( 'account_removal', 'Your account removal request was sent. Your account will be removed shortly by the site administrator!', 'The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),
('password_recovery', '', 'The message which appears on password recovery page.'),
('login', '', 'Add here a message you want to appear on the login page'),
('2fa_info', 'Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.', 'The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),
('2fa_login', 'Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.', 'The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).');


DROP TABLE if exists `PREFIXinstamojo_settings`;
CREATE TABLE `PREFIXinstamojo_settings` (
  `instamojo_api_key` varchar(50),
  `instamojo_auth_token` varchar(50),
  `instamojo_salt` varchar(50),
  `instamojo_test` int(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXinstamojo_settings` set `instamojo_api_key`='';

DROP TABLE if exists `PREFIXinstamojo_return`;
CREATE TABLE `PREFIXinstamojo_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXinvoice_settings`;
CREATE TABLE `PREFIXinvoice_settings` (
  `enable_invoices` tinyint(1) default 0,
  `seller_details` text,
  `invoice_logo` varchar(100) default null,
  `user_fields` varchar(150),
  `custom_text` text default null,
  `filename` varchar(20) default 'invoice',
  `show_vat` tinyint(1) default 0,
  `vat_percent` int(3) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXinvoice_settings` set `user_fields`='contact_name,email';

DROP TABLE if exists `PREFIXinvoices`;
CREATE TABLE `PREFIXinvoices` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) default null,
  `processor` varchar(40),
  `date` datetime default null,
  `payment_action` int(20) not null,
  `currency` varchar(20),
  `amount` float default NULL,
  `tax` float default 0,
  `seller_details` text,
  `invoice_logo` varchar(100) default null,
  `user_details` varchar(150),
  `custom_text` text,
  `payment_details` text,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXklarna_settings`;
CREATE TABLE `PREFIXklarna_settings` (
  `merchant_id` varchar(20),
  `sharedSecret` varchar(50),
  `test` varchar(50),
  `currency` varchar(20),
  `country` varchar(10),
  `locale` varchar(10),
  `terms_uri` varchar(200),
  `payment_desc` text
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXklarna_settings` (`merchant_id`, `sharedSecret`, `test`, `currency`, `country`, `locale`, `payment_desc`, `terms_uri`) VALUES
('200', 'test', '1', 'SEK', 'SE', 'se-se', NULL, '');

DROP TABLE if exists `PREFIXklarna_return`;
CREATE TABLE `PREFIXklarna_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXlanguages`;
CREATE TABLE `PREFIXlanguages` (
  `id` varchar(20) NOT NULL,
  `code` varchar(2),
  `name` varchar(50) ,
  `image` varchar(50) default NULL,
  `characters_map` varchar(200),
  `default` tinyint(1) default '0',
  `enabled` tinyint(1) default '1',
  `order_no` int(2) default '1',
  `direction` VARCHAR( 3 ) NOT NULL DEFAULT 'ltr',
  PRIMARY KEY  (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE IF EXISTS `PREFIXlocation_no_ads`;
CREATE TABLE IF NOT EXISTS `PREFIXlocation_no_ads` (
  `field` varchar(64) not null,
  `val` varchar(64) not null,
  `no` int(10) default 0
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXlogin_history`;
CREATE TABLE `PREFIXlogin_history` (
  `id` int(10) NOT NULL auto_increment,
  `auth_name` varchar(60),
  `date_login` datetime default NULL,
  `ip` varchar(39) default NULL,
  `succeeded` tinyint(1) default 0,
  `blocked` tinyint(1) default 0,
  `otp` varchar(20) default null,
  PRIMARY KEY  (`id`),
  KEY `idx_auth_name` (`auth_name`),
  KEY `idx_date` (`date_login`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXmails`;
CREATE TABLE `PREFIXmails` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `code` varchar(50) NOT NULL,
  `subject` varchar(255) default NULL,
  `content` text,
  `info` text
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXmails` (`code`, `subject`, `content`, `info`) VALUES
('registration', 'Your account on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a user receives after registration with account information and account activation link if the case.'),
('mailto', '{$site_name} new message', 'Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color="#2995b5">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color="#2995b5">{$sender_phone}</font><br/><br/>\n\n', 'The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),
('recommend_ad', '{$sender_name} recommended you this ad!', 'Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color="#2995b5">{$administrator}</font><br/><br/>\n', 'The email which is sent to the when a user or guest recommends an ad to a friend using the "Share" link on every ad details page.'),
('password_recovery', 'Password recovery for {$site_name}', 'To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n', 'The email which a user receives after initiating a password recovery process.'),
('listing_expired', 'Your listing on {$site_name} expired', 'Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account "Browse Listings" section and use the "Renew" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a listing owner receives after a listing expired.'),
('listing_will_expire', 'Your listing on {$site_name} will expire', 'Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a listing owner receives before a listing expires.'),
('admin_announce_pending', 'New {$processor} pending on {$site_name}', '<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Details</td></tr>\n<tr><td>Invoice no:</td><td class="right">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class="right">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class="right">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class="right">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class="right">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class="right">{$details_link}</td></tr>\n{/if}\n{if $plan.type=="sub" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class="right">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class="right">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class="right">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class="right">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n', 'The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),
('admin_new_account', 'New {if $user.affiliate}affiliate {/if}user registered on {$site_name}', 'A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class="right">{$username}</td></tr>{else}<tr><td>Email:</td><td class="right">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class="right">{$group}</td></tr>\n<tr><td>Status:</td><td class="right">{$status}</td></tr>\n</table><br/><br/>\n', 'The email which is sent to the administrator to notify a new user registered.'),
('report_ad', 'Report Abusive Ad on {$site_name}', 'The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n', 'The email sent to admin when someone reports an ad as abusive'),
('ad_publish_status', 'Your listing on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Ad Details</td></tr>\n<tr><td>ID:</td><td class="right">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class="right">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class="right">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan="2" style="background: #2885b5; color: #fff;">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class="right">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class="right">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class="right">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class="right">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class="right">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class="right">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class="right">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class="right">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class="right">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type=="sub" && $new_subscription}  {* - details if new subscription - *}\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class="right">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class="right">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class="right">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class="right">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class="right">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class="right">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class="right">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class="right">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class="right">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class="right">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),
('ad_options_upgrade_status', 'Listing upgrade status on {$site_name}', 'Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Upgrade Status</td></tr>\n<tr><td class="right">Ad ID:</td><td>#{$ad_id}\n<tr><td class="right">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class="right">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class="right">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class="right">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class="right">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class="right">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class="right">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class="right">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class="right">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class="right">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class="right">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),
('subscription_status', 'Your subscription on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class="right">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class="right">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class="right">{$discount}</td></tr>\n<tr><td>Amount:</td><td class="right">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class="right">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class="right">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class="right">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class="right">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class="right">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class="right">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class="right">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class="right">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),
('subscription_expired', 'Your subscription on {$site_name} expired', 'Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a user receives after a subcription expires.'),
('subscription_will_expire', 'Your subscription on {$site_name} will expire', 'Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a user receives before a subscription expires.'),
('store_expired', 'Your Dealer Page on {$site_name} expired', 'Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which the user receives after the Dealer Page expires.'),
('ad_options_expired', 'Your ad options on {$site_name} expired', 'Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which a user receives after a subcription expires.'),
('buy_store_status', 'Your Dealer Page on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class="right">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class="right">{$discount}</td></tr>\n<tr><td>Total:</td><td class="right">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class="right">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class="right">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class="right">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class="right">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),
('email_alert', '{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}', 'Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email which the user receives when new listings appear for the alert search terms.'),
('email_alert_confirmation', 'Your email alert for {$search}', 'Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color="#2995b5">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),
('ad_options_upgrade_done', 'Your ad upgrade', 'Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width="400">\n<tr><td style="background: #2885b5; color: #fff; font-weight: bold;">Upgrade Details</td></tr>\n{if $featured}<tr><td class="right">Featured</td></tr>{/if}\n{if $highlited}<tr><td class="right">Highlighted</td></tr>{/if}\n{if $video}<tr><td class="right">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class="right">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class="right">Urgent</td></tr>{/if}\n{if $url}<tr><td class="right">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),
('new_comment', 'New comment for listing #{$ad_id}', 'Hello {$contact_name},<br/><br/>\n\nYou have a new comment for listing #{$ad_id}:<br/><br/>\n\n{$message}<br/><br/>\n\nPosted by: {$contact_name}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The message which announces a new comment'),
('admin_new_ad', 'New listing on {$site_name}', '<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class="right">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class="right">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class="right">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class="right">{$details_link}</td></tr>\n</table><br/><br/>\n', 'The email sent to administrator to notify a new listing'),
('reply', 'Message reply on {$site_name}', 'A new reply has been made on {$site_name}:<br/><br/>{$message}', 'The email which a user receives when a reply is made for a message'),
('report_message', 'Message id {$id} reported as spam', 'The message id {$id} was reported as spam.', 'The message the administrator receives when a user reports a message as spam.'),
('buy_credits_status', 'Your credits purchase on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width="400">\n<tr><td colspan="2" style="background: #2885b5; color: #fff; font-weight: bold;">Credits package details</td></tr>\n<tr><td>Package name:</td><td class="right">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class="right">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class="right">{$discount}</td></tr>\n<tr><td>Total:</td><td class="right">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class="right">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class="right">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class="right">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),
('account_removal', 'Account removal request', 'An account removal request was filed for your account. <br/><br/>\n\n<font color="f00">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.
<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),
( 'admin_account_removal', 'Account removal requested for user id #{$id}', 'An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color="#2995b5">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The message which announces the site administrator a request for an account removal.'),
( 'admin_pending_edited', 'Listing #{$ad_id} was modified', 'Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n', 'The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),
( 'pending_edited', 'Your listing modifications were {$action}', 'Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The message which announces the user that its modified listing was accepted or denied by the site administrator'),
('new_auction_bid', 'New auction bid for your listing #{$ad_id} on {$site_name}', 'Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n', 'The message that announces a new auction bid for a listing')
;


DROP TABLE if exists `PREFIXmails_settings`;
CREATE TABLE `PREFIXmails_settings` (
  `html_mails` tinyint(1) default '1',
  `use_smtp_auth` tinyint(1) default '0',
  `smtp_server` varchar(40) default NULL,
  `port` int(5) default NULL,
  `username` varchar(70) default NULL,
  `password` varchar(40) default NULL,
  `bcc_to` varchar(70) default NULL,
  `send_using_admin_email` tinyint(1) default 1,
  `encryption` varchar(10) default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXmails_settings` (`html_mails`, `use_smtp_auth`, `smtp_server`, `port`, `username`, `password`, `bcc_to`) VALUES
(1, 0, '', 25, '', '','');


DROP TABLE if exists `PREFIXmanual_return`;
CREATE TABLE `PREFIXmanual_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXmb_return`;
CREATE TABLE `PREFIXmb_return` (
  `id` int(10) NOT NULL auto_increment,
  `pay_to_email` varchar(128),
  `pay_from_email` varchar(128),
  `merchant_id` varchar(100),
  `customer_id` varchar(100),
  `transaction_id` varchar(50),
  `mb_transaction_id` varchar(50),
  `mb_amount` varchar(30),
  `mb_currency` varchar(10),
  `status` varchar(3),
  `md5sig` varchar(128),
  `amount` varchar(30),
  `currency` varchar(10),
  `payment_type` varchar(50),
  `failed_reason_code` varchar(10) DEFAULT NULL,
  `sha2sig` varchar(100) DEFAULT NULL,
  `neteller_id` varchar(100) DEFAULT NULL,
  `merchant_fields` varchar(100) DEFAULT NULL,
  `entirepost` text,
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXmb_settings`;
CREATE TABLE `PREFIXmb_settings` (
  `mb_email` varchar(128),
  `mb_secret` varchar(10),
  `mb_currency` char(3),
  `mb_language` char(3),
  `mb_pay_title` varchar(128),
  `mb_demo` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXmb_settings` (`mb_email`, `mb_secret`, `mb_currency`, `mb_language`, `mb_pay_title`, `mb_demo`) VALUES
('email@yoursite.com', '', 'USD', 'EN', 'Classifieds Payment', 0);


DROP TABLE if exists `PREFIXmessages`;
CREATE TABLE `PREFIXmessages` (
  `id` int(10) NOT NULL auto_increment,
  `from` int(10) null default null,
  `from_email` varchar(50),
  `from_phone` varchar(20),
  `to` int(10),
  `to_email` varchar(50),
  `date` datetime default null,
  `ip` varchar(39),
  `ad_id` int(10),
  `message` text,
  `report` tinyint(1) default 0,
  `reply_to` int(10) default 0,
  `starting` int(10) default 0,
  `pending` tinyint( 1 ) default 0,
  `read` tinyint(1) default 0,
  PRIMARY KEY  (`id`),
  KEY `idx_from` (`from`),
  KEY `idx_to` (`to`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXmobile_settings`;
CREATE TABLE `PREFIXmobile_settings` (
  `enable_mobile_templates` tinyint(1) default 0,
  `mobile_template` varchar(40),
  `enable_mobile_subdomain` tinyint(1) default 0,
  `mobile_thmb_width` int(4) default '65',
  `mobile_thmb_height` int(4) default '50',
  `mobile_big_thmb_width` int(4) default '250',
  `mobile_big_thmb_height` int(4) default '220',
  `mobile_nopic` varchar(128),
  `mobile_big_nopic` varchar(128),
  `mobile_show_header` tinyint(1) default '1',
  `mobile_header_pic` varchar(128),
  `mobile_header_pic_link` varchar(128) default NULL,
  `mobile_ads_per_page` int(2) default '10'
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


insert into `PREFIXmobile_settings` set `enable_mobile_templates` = 0, mobile_nopic='noimage_mobile.jpg', `mobile_big_nopic`='mobile_big_nopic.gif', `mobile_template` = 'minimal_blue', `mobile_header_pic`='mobile_logo.png';

DROP TABLE if exists `PREFIXmobilpay_return`;
CREATE TABLE `PREFIXmobilpay_return` (
    `id` bigint(20) NOT NULL auto_increment,
    `ukey` varchar(255) default '0',
    `date` datetime default null,
    `entirepost` text,
    `purchase` varchar(50),
    `action` varchar(50),
    `timestamp` varchar(30),
    `error` varchar(100),
    PRIMARY KEY  (`id`)
);

DROP TABLE if exists `PREFIXmobilpay_settings`;
CREATE TABLE `PREFIXmobilpay_settings` (
  `mobilpay_signature` varchar(30),
  `mobilpay_certificate` varchar(100),
  `mobilpay_private_key` varchar(100),
  `mobilpay_test` tinyint(1) default 0
) ENGINE=MyISAM;

insert into `PREFIXmobilpay_settings` set `mobilpay_test`='0';

CREATE TABLE IF NOT EXISTS `PREFIXmobilpay_products` (
  `id` int(2) NOT NULL auto_increment,
  `price` float not null,
  `service` varchar(128),
  PRIMARY KEY  (`id`)
);


DROP TABLE if exists `PREFIXmodules`;
CREATE TABLE `PREFIXmodules` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50),
  `description` text,
  `enabled` tinyint(1) default '1',
  UNIQUE KEY `id` (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXmuthofun`;
CREATE TABLE `PREFIXmuthofun` (
  `username` varchar(50),
  `password` varchar(50)
	) ENGINE=MyISAM;
INSERT INTO `PREFIXmuthofun` set `username`='';	

DROP TABLE if exists `PREFIXmuthofun_log`;
CREATE TABLE `PREFIXmuthofun_log` (
	`success` int(1) default 1,
  `message_id` varchar(30),
  `mobile_no` varchar(30),
  `error_message` varchar(200),
  `details` text,
  `date` datetime default null
  
) ENGINE=MyISAM;
	
DROP TABLE if exists `PREFIXnew_alerts`;
CREATE TABLE `PREFIXnew_alerts` (
  `id` int(10) NOT NULL auto_increment,
  `alert_id` int(10),
  `date` datetime default null,
  `listings` text,
  PRIMARY KEY  (`id`),
  KEY `idx_alert_id` (`alert_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXoptions`;
CREATE TABLE `PREFIXoptions` (
  `object_id` int(2) NOT NULL,
  `option` varchar(20),
  `date_added` datetime,
  `date_expires` datetime,
  KEY `idx_id` (`object_id`),
  KEY `idx_option` (`option`),
  KEY `idx_date` (`date_added`),
  KEY `idx_expires` (`date_expires`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpackages`;
CREATE TABLE `PREFIXpackages` (
  `id` int(2) NOT NULL auto_increment,
  `type` varchar(10) default 'ad',
  `amount` float default '0',
  `no_words` int(5) default '0',
  `no_days` int(4) default '0',
  `no_pictures` int(2),
  `photo_mandatory` tinyint(1) default 0,
  `no_ads` int(3) default '1',
  `subscription_time` int(5) default '0',
  `html_editor` TINYINT(1) NOT NULL DEFAULT '0',
  `groups` varchar(250) default '0',
  `categories` text,
  `order_no` int(5) default NULL,
  `featured` tinyint(1) default '0',
  `highlited` tinyint(1) default '0',
  `priority` int(4) default '0',
  `video` tinyint(1) default 0,
  `urgent` tinyint(1) default 0,
  `url` tinyint(1) default 0,
  `allow` int(2) default 0,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY  (`id`),
  KEY `idx_type` (`type`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpackages` (`id`, `type`, `amount`, `no_words`, `no_days`, `no_pictures`, `no_ads`, `subscription_time`, `groups`, `categories`, `order_no`, `featured`, `highlited`, `priority`, `video`) VALUES
(1, 'ad', 0, 1000, 30, 4, 1, 0, 0, 0, 1, 0, 0, 0, 0);


DROP TABLE if exists `PREFIXpackages_lang`;
CREATE TABLE `PREFIXpackages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(128) default '',
  `description` text,
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpackages_lang` (`id`, `name`, `description`) VALUES
(1, 'Free Ad Plan', 'Free listing with up to 100 words and 4 pictures.');


DROP TABLE if exists `PREFIXpagseguro_settings`;
CREATE TABLE `PREFIXpagseguro_settings` (
  `pagseguro_email` varchar(50),
  `pagseguro_token` varchar(50),
  `pagseguro_currency` varchar(3),
  `pagseguro_item_name` varchar(40),
  `pagseguro_item_description` text,
  `pagseguro_test` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXpagseguro_settings` set `pagseguro_currency`='BRL', `pagseguro_item_name`='Classified ads', `pagseguro_item_description`='Classified ads';

DROP TABLE if exists `PREFIXpagseguro_return`;
CREATE TABLE `PREFIXpagseguro_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `code` varchar(100),
  `reference` varchar(30),
  `status` int(2),
  `grossAmount` double,
  `netAmount` double,
  `email` varchar(50),
  `name` varchar(50),
  `areaCode` varchar(3),
  `number` varchar(30),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXpaydunya_return`;
CREATE TABLE `PREFIXpaydunya_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `response_code` varchar(5),
  `response_text` varchar(30),
  `hash` varchar(150),
  `token` varchar(40),
  `total_amount` varchar(20),
  `mode` varchar(20),
  `status` varchar(30),
  `name` varchar(40),
  `phone` varchar(30),
  `email` varchar(40),
  `receipt_url` varchar(150),
  `entirepost` text,
  PRIMARY KEY  (`id`)
	) ENGINE=MyISAM;
	
DROP TABLE if exists `PREFIXpaydunya_settings`;
CREATE TABLE `PREFIXpaydunya_settings` (
	`master_key` varchar(50),
	`public_key` varchar(50),
	`private_key` varchar(50),
	`token` varchar(50),
	`test` tinyint(1) default 0,
	`company_name` varchar(50),
	`tagline` varchar(50),
	`company_phone` varchar(50),
	`company_address` varchar(50),
	`website` varchar(50),
	`logo_url` varchar(50),
	`item_name` varchar(30)
	) ENGINE=MyISAM;
INSERT INTO `PREFIXpaydunya_settings` set `item_name`='Classifieds ad';

DROP TABLE if exists `PREFIXpayfast_return`;
CREATE TABLE `PREFIXpayfast_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `m_payment_id` varchar(100),
  `pf_payment_id` varchar(100),
  `payment_status` varchar(20),
  `item_name` varchar(100),
  `item_description` varchar(250),
  `amount_gross` varchar(20),
  `amount_fee` varchar(20),
  `amount_net` varchar(20),
  `name_first` varchar(50),
  `name_last` varchar(50),
  `email_address` varchar(60),
  `merchant_id` varchar(60),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpayfast_settings`;
CREATE TABLE `PREFIXpayfast_settings` (
  `merchant_id` varchar(20),
  `merchant_key` varchar(50),
  `item_name` varchar(100),
  `demo` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpayfast_settings` set `merchant_id`='10000100', `merchant_key`='46f0cd694581a', `item_name`='Classifieds ad';


DROP TABLE if exists `PREFIXpayment_actions`;
CREATE TABLE `PREFIXpayment_actions` (
  `id` int(20) NOT NULL auto_increment,
  `user_id` int(10) default '0',
  `processor` varchar(30) default NULL,
  `ukey` varchar(255) default NULL,
  `amount` float default NULL,
  `action` text,
  `post` text,
  `completed` tinyint(1) default '0',
  `date` datetime default null,
  `subscr_signup` tinyint(1) default '0',
  `subscr_payment` tinyint(1) default '0',
  `subscr_id` varchar(40) default NULL,
  `tax` float default 0,
  `affiliate_id` varchar(8),
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ukey` (`ukey`),
  KEY `idx_amount` (`amount`),
  KEY `idx_date` (`date`),
  KEY `idx_user` (`user_id`),
  KEY `idx_processor` (`processor`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpayment_processors`;
CREATE TABLE `PREFIXpayment_processors` (
  `processor_name` varchar(50),
  `processor_title` varchar(100),
  `processor_code` varchar(20),
  `processor_table` varchar(30),
  `processor_class` varchar(30),
  `processor_ret_table` varchar(30),
  `enabled` tinyint(1) default '1',
  `manual` tinyint(1) default '1',
  `free` tinyint(1) default '0',
  `pending` tinyint(1) default '0',
  `recurring` tinyint(1) default '-1',
  `percent_tax` float default 0,
  `fixed_tax` float default 0,
  KEY `idx_code` (`processor_code`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpayment_processors` (`processor_name`, `processor_title`, `processor_code`, `processor_table`, `processor_class`, `processor_ret_table`, `enabled`, `manual`, `free`, `pending`, `recurring`) VALUES
('PayPal', 'PayPal', 'paypal', 'paypal_settings', 'paypal', 'paypal_ipn', 1, 0, 0, 0, 0),
('2Checkout', '2Checkout', '2co', '2co_settings', 'to_checkout', '2co_return', 0, 0, 0, 0, -1),
('Skrill', 'Skrill', 'mb', 'mb_settings', 'moneybookers', 'mb_return', 0, 0, 0, 0, -1),
('Authorize.net SIM', 'Authorize.net', 'authorize', 'authorize_settings', 'authorize', 'authorize_return', 0, 0, 0, 0, -1),
('ePay', 'Credit Card by ePay', 'epay', 'epay_settings', 'epay', 'epay_return', 0, 0, 0, 0, -1),
('Manual Payment', 'Check', 'manual', '', 'manual_payment', 'manual_return', 0, 1, 0, 1, -1),
('Fortumo', 'Fortumo SMS payment', 'fortumo', 'fortumo_settings', 'fortumo', 'fortumo_return', 0, 0, 0, 0, -1),
('ICEPAY', 'ICEPAY', 'icepay', 'icepay_settings', 'icepay', 'icepay_ipn', 0, 0, 0, 0, -1),
('PayTPV', 'PayTPV', 'paytpv', 'paytpv_settings', 'paytpv', 'paytpv_return', 0, 0, 0, 0, -1),
('Free', 'Free', 'free', '', 'free', '', 1, 0, 1, 0, -1),
('Credits', 'Credits', 'credits', 'credits_settings', 'credits_payment', 'credits_return', 0, 0, 1, 0, -1),
('Hipay', 'Hipay', 'hipay', 'hipay_settings', 'hipay', 'hipay_return', '0', '0', '0', '0', -1),
('Payfast', 'PayFast', 'payfast', 'payfast_settings', 'payfast', 'payfast_return', '0', '0', '0', '0', '-1'),
('Robokassa', 'Robokassa', 'robokassa', 'robokassa_settings', 'robokassa', 'robokassa_return', '0', '0', '0', '0', '-1'),
('Klarna', 'Klarna', 'klarna', 'klarna_settings', 'klarna', 'klarna_return', '0', '0', '0', '0', '-1'),
('Instamojo', 'Instamojo', 'instamojo', 'instamojo_settings', 'instamojo', 'instamojo_return', '0', '0', '0', '0', '-1'),
('Pagseguro', 'Pagseguro', 'pagseguro', 'pagseguro_settings', 'pagseguro', 'pagseguro_return', '0', '0', '0', '0', '-1'),
('CCBill', 'CCBill', 'ccbill', 'ccbill_settings', 'ccbill', 'ccbill_return', '0', '0', '0', '0', '0'),
('PayU', 'PayU', 'payu', 'payu_settings', 'payu', 'payu_return', '0', '0', '0', '0', '-1'),
('CinetPay', 'CinetPay', 'cinetpay', 'cinetpay_settings', 'cinetpay', 'cinetpay_return', '0', '0', '0', '0', '0'),
('Stripe', 'Stripe', 'stripe', 'stripe_settings', 'stripe', 'stripe_return', '0', '0', '0', '0', '-1'),
('Webxpay', 'Webxpay', 'webxpay', 'webxpay_settings', 'webxpay', 'webxpay_return', '0', '0', '0', '0', '-1'),
('mobilPay', 'mobilPay', 'mobilpay', 'mobilpay_settings', 'mobilpay', 'mobilpay_return', '0', '0', '0', '0', '-1'),
('EuPlatesc', 'EuPlatesc', 'euplatesc', 'euplatesc_settings', 'euplatesc', 'euplatesc_return', '0', '0', '0', '0', '-1'),
('Paydunya', 'Paydunya', 'paydunya', 'paydunya_settings', 'ppaydunya', 'paydunya_return', '0', '0', '0', '0', '-1'),
('aamarPay', 'aamarPay', 'aamarpay', 'aamarpay_settings', 'aamarpay', 'aamarpay_return', '0', '0', '0', '0', '-1'),
('Ebanx', 'ebanx', 'ebanx', 'ebanx_settings', 'ebanx', 'ebanx_return', '0', '0', '0', '0', '-1'),
('BitPay/BTCPay', 'BitPay', 'btcpay', 'btcpay_settings', 'btcpay', 'btcpay_return', '0', '0', '0', '0', '-1')
;


DROP TABLE if exists `PREFIXpaypal_ipn`;
CREATE TABLE `PREFIXpaypal_ipn` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `item_name` varchar(130),
  `receiver_email` varchar(125) default NULL,
  `item_number` varchar(130) default '0',
  `quantity` smallint(6) default '0',
  `invoice` varchar(25) default '0',
  `custom` varchar(60) default NULL,
  `payment_status` set('Completed','Pending','Failed','Denied') default 'Failed',
  `pending_reason` set('echeck','intl','verify','address','upgrade','unilateral','other') default 'other',
  `payment_gross` float default '0',
  `payment_fee` float default '0',
  `payment_type` set('echeck','instant') default 'instant',
  `payment_date` varchar(50) default '0',
  `txn_id` varchar(20) default '0',
  `payer_email` varchar(125) default NULL,
  `payer_status` set('verified','unverified','intl_verified') default 'unverified',
  `txn_type` set('web_accept','cart','send_money','subscr_signup','subscr_cancel','subscr_failed','subscr_payment','subscr_eot') default 'subscr_payment',
  `first_name` varchar(35) default NULL,
  `last_name` varchar(60) default NULL,
  `address_city` varchar(60) default NULL,
  `address_street` varchar(60) default NULL,
  `address_state` varchar(60) default NULL,
  `address_zip` varchar(15) default NULL,
  `address_country` varchar(60) default NULL,
  `address_status` set('confirmed','unconfirmed') default 'unconfirmed',
  `subscr_date` varchar(50) default '0',
  `period1` varchar(20) default 'UNK',
  `period2` varchar(20) default 'UNK',
  `period3` varchar(20) default 'UNK',
  `amount1` float default '0',
  `amount2` float default '0',
  `amount3` float default '0',
  `recurring` tinyint(4) default '1',
  `reattempt` tinyint(4) default '0',
  `retry_at` varchar(50) default NULL,
  `recur_times` smallint(6) default '0',
  `username` varchar(25) default NULL,
  `password` varchar(20) default NULL,
  `subscr_id` varchar(20) default NULL,
  `entirepost` text,
  `paypal_verified` set('VERIFIED','INVALID') default 'INVALID',
  `verify_sign` varchar(125) default NULL,
  `mc_currency` varchar(20) default 'USD',
  `mc_gross` float default '0',
  `mc_amount1` FLOAT NOT NULL DEFAULT '0',
  `mc_amount2` FLOAT NOT NULL DEFAULT '0',
  `mc_amount3` FLOAT NOT NULL DEFAULT '0',
  PRIMARY KEY  (`id`),
  KEY `txn_type` (`txn_type`),
  KEY `payment_status` (`payment_status`),
  KEY `pending_reason` (`pending_reason`),
  KEY `payer_status` (`payer_status`),
  KEY `payment_type` (`payment_type`),
  KEY `retry_at` (`retry_at`),
  KEY `receiver_email` (`receiver_email`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpaypal_settings`;
CREATE TABLE `PREFIXpaypal_settings` (
  `paypal_email` varchar(128),
  `paypal_currency` char(3),
  `paypal_pay_title` char(50),
  `paypal_demo` tinyint(1) default '0',
  `paypal_lc` VARCHAR( 2 )
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpaypal_settings` (`paypal_email`, `paypal_currency`, `paypal_pay_title`, `paypal_demo`) VALUES
('email@yoursite.com', 'USD', 'YourSite.com', 0);


DROP TABLE if exists `PREFIXpaytpv_return`;
CREATE TABLE `PREFIXpaytpv_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(20) default '0',
  `i` varchar(20),
  `r` varchar(50),
  `ret` varchar(50),
  `deserror` varchar(100),
  `TransactionType` int(3),
  `TransactionName` varchar(50),
  `CardCountry` varchar(50),
  `BankDateTime` datetime,
  `Signature` varchar(50),
  `Order` varchar(50),
  `Response` varchar(50),
  `ErrorID` int(3),
  `ErrorDescription` int(100),
  `AuthCode` varchar(50),
  `Currency` varchar(3),
  `Amount` int(10),
  `AmountEur` int(10),
  `Language` varchar(50),
  `AccountCode` varchar(50),
  `TpvID` int(5),
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpaytpv_settings`;
CREATE TABLE `PREFIXpaytpv_settings` (
  `paytpv_account` varchar(300),
  `paytpv_usercode` varchar(30),
  `paytpv_terminal` int(4),
  `paytpv_currency` varchar(3),
  `paytpv_password` varchar(40)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXpaytpv_settings` (`paytpv_account`, `paytpv_usercode`, `paytpv_terminal`, `paytpv_currency`, `paytpv_password`) VALUES
('', '', '', 'EUR', '');


DROP TABLE if exists `PREFIXpayu_return`;
CREATE TABLE `PREFIXpayu_return` (
    `id` bigint(20) NOT NULL auto_increment,
    `ukey` varchar(255) default '0',
    `date` datetime default null,
    `entirepost` text,
    `merchant_id` varchar(12),
    `state_pol` varchar(32),
    `risk` float,
    `response_code_pol` varchar(255),
    `reference_sale` varchar(255),
    `reference_pol` varchar(255),
    `sign` varchar(255),
    `extra1` varchar(255),
    `extra2` varchar(255),
    `payment_method` int(3),
    `payment_method_type` int(3),
    `installments_number` int(3),
    `value` float,
    `tax` float,
    `additional_value` float,
    `transaction_date` datetime,
    `currency` varchar(3),
    `email_buyer` varchar(255),
    `cus` varchar(64),
    `pse_bank` varchar(255),
    `test` tinyint(1),
    `description` varchar(255),
    `billing_address` varchar(255),
    `shipping_address` varchar(50),
    `phone` varchar(20),
    `office_phone` varchar(20),
    `administrative_fee` float,
    `administrative_fee_base` float,
    `administrative_fee_tax` float,
    `airline_code` varchar(4),
    `attempts` int(3),
    `authorization_code` varchar(12),
    `bank_id` varchar(255),
    `billing_city` varchar(255),
    `billing_country` varchar(2),
    `commision_pol` float,
    `commision_pol_currency` varchar(3),
    `customer_number` varchar(10),
    `error_code_bank` varchar(255),
    `error_message_bank` varchar(255),
    `exchange_rate` float,
    `ip` varchar(39),
    `nickname_buyer` varchar(150),
    `nickname_seller` varchar(150),
    `payment_method_id` int(10),
    `payment_request_state` varchar(32),
    `pseReference1` varchar(255),
    `pseReference2` varchar(255),
    `pseReference3` varchar(255),
    `response_message_pol` varchar(255),
    `shipping_city` varchar(50),
    `shipping_country` varchar(2),
    `transaction_bank_id` varchar(255),
    `transaction_id` varchar(36),
    `payment_method_name` varchar(255),
    PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXpayu_settings`;
CREATE TABLE `PREFIXpayu_settings` (
  `payu_merchantId` varchar(128),
  `payu_accountId` varchar(100),
  `payu_apikey` varchar(50),
  `payu_description` text,
  `payu_currency` varchar(3),
  `payu_test` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXpayu_settings` set `payu_test`='0', `payu_currency`= 'USD';

DROP TABLE if exists `PREFIXpending_edited`;
CREATE TABLE `PREFIXpending_edited` (
  `ad_id` int(10),
  `date` datetime default null,
  `edited` text,
  `pictures_edited` text,
  `notification_sent` tinyint(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXperiodic`;
CREATE TABLE `PREFIXperiodic` (
  `type` varchar(30),
  `val` int(10) default 0,
  `date` datetime default null
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXperiodic` set `type` = 'affiliates_payment', `val`='2';


DROP TABLE if exists `PREFIXperiodic_tasks`;

CREATE TABLE `PREFIXperiodic_tasks` (
  `id` int(10) NOT NULL auto_increment,
  `type` varchar(20) NOT NULL,
  `object_id` int(10) DEFAULT NULL,
  `listing_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `time` datetime NOT NULL,
  `extra` int(10) default null,
  PRIMARY KEY  (`id`),
  KEY `idx_object` (`object_id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_listing` (`listing_id`),
  KEY `idx_type` (`type`),
  KEY `idx_time` (`time`)
) ENGINE=InnoDB  AUTO_INCREMENT=1;


DROP TABLE if exists `PREFIXpriorities`;
CREATE TABLE `PREFIXpriorities` (
  `id` int(4) NOT NULL auto_increment,
  `price` double,
  `order_no` int(2),
  PRIMARY KEY  (`id`),
  KEY `idx_order_no` (`order_no`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXpriorities_lang`;
CREATE TABLE `PREFIXpriorities_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(50),
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXregions`;
CREATE TABLE `PREFIXregions` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(128) default '',
  `lang_id` varchar(20) default 'DEF_LANG',
  `dep` int(5) default NULL,
  KEY `id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_dep` (`dep`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXrobokassa_return`;
CREATE TABLE `PREFIXrobokassa_return` (
  `id` int(10) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `OutSum` varchar(100),
  `InvId` varchar(100),
  `SignatureValue` varchar(100),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXrobokassa_settings`;
CREATE TABLE `PREFIXrobokassa_settings` (
  `login` varchar(20),
  `password1` varchar(50),
  `password2` varchar(50),
  `currency` varchar(20),
  `language` varchar(10),
  `encoding` varchar(10),
  `payment_desc` text,
  `test` int(1) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


insert into `PREFIXrobokassa_settings` set `test`=0, `encoding`='utf8';


DROP TABLE if exists `PREFIXrss`;
CREATE TABLE `PREFIXrss` (
  `id` int(2) NOT NULL auto_increment,
  `type` tinyint(1) default 1,
  `enabled` tinyint(1) default NULL,
  `link` varchar(200) default NULL,
  `language` varchar(20) default NULL,
  `feedburner` varchar(250) default NULL,
  `parameters` varchar(255) default NULL,
  `no_items` int(2) default NULL,
  `show_fields` text default null,
  `logo_field` varchar(40) default null,
  PRIMARY KEY  (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXrss_lang`;
CREATE TABLE `PREFIXrss_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `short_title` varchar(50) default NULL,
  `title` varchar(255) default NULL,
  `description` text
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXrules`;
CREATE TABLE `PREFIXrules` (
`id` int(3) NOT NULL auto_increment,
`type` VARCHAR( 20 ) NOT NULL ,
`category` text,
`field` varchar(30),
`selected_values` TEXT,
`second_field` varchar( 30 ),
`allowed_values` TEXT,
`required_field` varchar( 30 ),
`required_group` INT( 2 ),
`error_message` VARCHAR( 250 ),
`order_no` int(2),
 PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXsaved_searches`;
CREATE TABLE `PREFIXsaved_searches` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10),
  `ip` varchar(39),
  `search` text,
  `browser` varchar(200),
  `date` datetime default null,
  PRIMARY KEY  (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_date` (`date`),
  KEY `idx_ip` (`ip`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXscheduled_imports`;
CREATE TABLE `PREFIXscheduled_imports` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(100),
  `type` varchar(3),
  `access_type` varchar(10) default 'url',
  `template` int(3),
  `category_id` int(5) default 0,
  `package_id` int(2) default 0,
  `url` varchar(250),
  `ftp_server` varchar(250),
  `ftp_login` varchar(100),
  `ftp_password` varchar(50),
  `ftp_filename` varchar(100),
  `user_id` int(10),
  `use_id_as_unique_field` int(1) default 0,
  `delete_inexisting` tinyint(1) default '0',
  `only_download_inexisting` int(1) default '0',
  `key` varchar(30),
  `active` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXsearches`;
CREATE TABLE `PREFIXsearches` (
  `id` int(10) NOT NULL auto_increment,
  `lat` varchar(20) default NULL,
  `long` varchar(20) default NULL,
  `location_fields` varchar(200) default NULL,
  `search_url` text,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_date` (`date`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXsecurity_settings`;
CREATE TABLE `PREFIXsecurity_settings` (
  `block_admin_attempts` tinyint(1) default 0,
  `allowed_admin_attempts` int(2) default 3,
  `block_admin_attempts_for` int(4) default 1,
  `block_user_attempts` tinyint(1) default 0,
  `allowed_user_attempts` int(1) default 5,
  `block_user_attempts_for` int(4) default 1,
  `enable_2fa` tinyint(1) default 0,
  `2fa_site_title` varchar(100) default null,
  `2fa_enable_sms` tinyint(1) default 0,
  `2fa_phone_field` varchar(30) default null,
  `admin_enable_2fa` tinyint(1) default 0, 
  `admin_2fa_secret` varchar(50) default null,
  `admin_2fa_enable_sms` tinyint(1) default 0,
  `admin_phone_number` varchar(30) default null 

) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

insert into `PREFIXsecurity_settings` set `block_admin_attempts`=0;


DROP TABLE if exists `PREFIXseo_pages`;
CREATE TABLE `PREFIXseo_pages` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `page` varchar(30) not null,
  `page_description` varchar(70),
  `title` text,
  `meta_description` text,
  `meta_keywords` text,
  `noindex` tinyint(1) default 0,
  `order_no` int(2)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;


insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='index', `page_description`='Site index page', `order_no` = 1;

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='details', `title`='%category_name - %title', meta_description='%category_name %description', meta_keywords='%category_name,%title,%description', `page_description`='Listing details page', `order_no` = 2;

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='listings', `page_description`='Search page', `noindex`=2, `order_no` = 3;

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='contact_details', `page_description`='Contact details page ( mobile only )', `order_no`='4';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='login', `page_description`='Login page', `order_no`='5';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='register', `page_description`='User registration page', `order_no`='6';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='pre-submit', `page_description`='Pre-submit ad page (choice between login or post wihtout a user account)', `order_no`='7';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='recent_ads', `page_description`='Recent ads page', `order_no`='8';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='refine', `page_description`='Refine search page ( mobile only )', `order_no`='9';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='store', `page_description`='Dealer page', `order_no`='10';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='user_listings', `page_description`='Regular user page', `order_no`='11';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='notfound', `page_description`='Page not found', `order_no`='12';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='contact', `page_description`='Contact page', `order_no`='13';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='favorites', `page_description`='Favorites listings page', `order_no`='14';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='new_listing', `page_description`='New listing page', `order_no`='15';

insert into `PREFIXseo_pages` set `lang_id`='DEF_LANG', `page`='featured_ads', `page_description`='Featured listing page', `order_no`='16';


DROP TABLE if exists `PREFIXseo_settings`;
CREATE TABLE `PREFIXseo_settings` (
  `enable_mod_rewrite` tinyint(1) default '0',
  `analytics_code` TEXT default NULL,
  `sef_legacy_mode` tinyint(1) default 0,
  `sef_links` text,
  `maximum_slug_width` int(3) default 0
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXseo_settings` (`enable_mod_rewrite`, `sef_links`) VALUES (0, "{\"listings\":\"search\",\"user_listings\":\"users\",\"store\":\"store\",\"content\":\"content\",\"affiliate\":\"affiliate\",\"recent_ads\":\"recent_ads\",\"featured_ads\":\"featured_ads\",\"auctions\":\"auctions\",\"login\":\"login\",\"register\":\"register\",\"logout\":\"logout\",\"favorites\":\"favorites\",\"contact\":\"contact\",\"pre_submit\":\"pre_submit\",\"refine\":\"refine\",\"contact_details\":\"user-details\",\"new_listing\":\"new_listing\"}");

DROP TABLE if exists `PREFIXsettings`;
CREATE TABLE `PREFIXsettings` (
  `admin_username` varchar(50) default NULL,
  `admin_password` varchar(50) default NULL,
  `admin_email` varchar(128),
  `contact_email` varchar(128),
  `users_delete_ads` tinyint(1) default '0',
  `users_feature_ads` tinyint(1) default '1',
  `register_captcha` tinyint(1) default '1',
  `contact_captcha` tinyint(1) default '1',
  `alerts_captcha` tinyint(1) default '1',
  `login_captcha` tinyint(1) default '0',
  `delete_login_older_than` int(4) default NULL,
  `maps_default_long` double default NULL,
  `maps_default_lat` double default NULL,
  `maps_default_height` int(2) default '4',
  `google_maps_api_key` varchar(50) default NULL,
  `cron_simulator` tinyint(1) default 1,
  `session_expires` int(8) default 1440,
  `delete_expired` tinyint(1) default '0',
  `days_del_expired` int(4) default '30',
  `days_notify` int(1) default '3',
  `send_mail_to_admin_when_pending` tinyint(1) default '1',
  `send_mail_to_admin_when_new_ad` tinyint(1) default '1',
  `send_mail_to_admin_when_registeres` tinyint(1) default '1',
  `send_mail_to_user_when_posting_ads` tinyint(1) default '1',
  `send_mail_to_user_when_expired` tinyint(1) default '1',
  `send_mail_to_user_before_expires` tinyint(1) default '1',
  `nologin_enabled` tinyint(1) default 0,
  `nologin_activate_via_email` tinyint(1) default 1,
  `nologin_activate_via_sms` tinyint(1) default '0',
  `nologin_pending_listing` tinyint(1) default 0,
  `nologin_allow_edit` tinyint(1) default 1,
  `nologin_allow_delete` tinyint(1) default 1,
  `nologin_extra_options` tinyint(1) default 1,
  `nologin_image_verification` tinyint(1) default 0,
  `internal_messaging` tinyint( 1 ) default '1',
  `enable_locations` tinyint(1) default 0,
  `location_fields` varchar(100) default null,
  `enable_subdomains` tinyint(1) default 0,
  `subdomain_field` varchar(40) default null,
  `enable_recaptcha` tinyint(1) default 0,
  `recaptcha_public_key` varchar(50) default null,
  `recaptcha_private_key` varchar(50) default null,
  `contact_messages_pending` tinyint( 1 ) default '0',
  `users_can_ask_account_removal` tinyint( 1 ) default '0',
  `time_offset` int(5) default 0,
  `enable_username` tinyint(1) default 1,
  `contact_name_field` varchar(32) default 'contact_name' ,
  `enable_affiliates`  tinyint(1) default 0,
  `accounts_session_timeout` int(6) default 24,
  `map_type` varchar(10) default 'gmaps'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXsettings` set `admin_username`='admin', `admin_password`='21232f297a57a5a743894a0e4a801fc3', `admin_email`='office@yoursite.com', `contact_email`='office@yoursite.com',  `users_delete_ads`=1, `users_feature_ads`=1 , `register_captcha`=1, `contact_captcha`=1, `login_captcha`=0, `delete_login_older_than`=30,
`cron_simulator`=1, `session_expires`='1440', `delete_expired`=0, `days_del_expired`=30, `days_notify`=3, `send_mail_to_admin_when_pending`=1, `send_mail_to_admin_when_new_ad` = 1, `send_mail_to_admin_when_registeres`=1, `send_mail_to_user_when_expired`=1, `send_mail_to_user_before_expires`=1, `nologin_enabled`=0, `nologin_activate_via_email`=1, `nologin_pending_listing`=0, `nologin_allow_edit`=1, `nologin_allow_delete`=1, `nologin_extra_options`=0, `nologin_image_verification`=0, internal_messaging = 1;


DROP TABLE if exists `PREFIXsettings_lang`;
CREATE TABLE `PREFIXsettings_lang` (
  `lang_id` varchar(20) default 'DEF_LANG',
  `admin_name` varchar(128),
  `site_name` varchar(128)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXsettings_lang` (`admin_name`, `site_name`) VALUES
('Site Administrator', 'YourSite.com');


DROP TABLE if exists `PREFIXsitemap`;
CREATE TABLE `PREFIXsitemap` (
  `enabled` tinyint(1) default NULL,
  `write_categories` tinyint(1) default '1',
  `write_listings` tinyint(1) default '1',
  `write_custom_pages` tinyint(1) default '1',
  `priority` double(4,2) default NULL,
  `changefreq` varchar(20) default NULL,
  `categories_priority` double(4,2) default NULL,
  `categories_changefreq` varchar(20) default NULL,
  `listings_priority` double(4,2) default NULL,
  `listings_changefreq` varchar(20) default NULL,
  `listings_no` int(10),
  `cp_priority` double(4,2) default NULL,
  `cp_changefreq` varchar(20) default NULL,
  `auto_write_freq` varchar(20) default NULL,
  `extra_entries` longblob,
  `generated_last` datetime default NULL
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXsitemap` (`enabled`, `write_categories`, `write_listings`, `write_custom_pages`, `priority`, `changefreq`, `categories_priority`, `categories_changefreq`, `listings_priority`, `listings_changefreq`, `cp_priority`, `cp_changefreq`, `auto_write_freq`, `generated_last`, `listings_no`) VALUES
(1, 1, 1, 1, 0.25, 'monthly', 0.5, 'weekly', 0.75, 'daily', 0.5, 'weekly', 'daily', null, 100);

DROP TABLE if exists `PRFIXslugs`;
CREATE TABLE `PREFIXslugs` (
  `id` int(10) NOT NULL auto_increment,
  `object_id` int(10) NOT NULL,
  `type` varchar(20) default 'listing',
  `slug` text,
  PRIMARY KEY  (`id`),
  KEY `idx_type` (`type`),
  KEY `idx_object_id` (`object_id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXslugs` (`object_id`, `type`, `slug`) VALUES
(1, 'content', 'first-page-content'),
(2, 'content', 'affiliates'),
(3, 'content', 'bulk-uploads-help');

DROP TABLE if exists `PREFIXsms_gateways`;
CREATE TABLE `PREFIXsms_gateways` (
  `gateway_name` varchar(50),
  `gateway_title` varchar(50),
  `gateway_code` varchar(20),
  `gateway_table` varchar(30),
  `gateway_class` varchar(30),
  `gateway_ret_table` varchar(30),
  `default` tinyint(1) default '0'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXsms_gateways` set `gateway_name`='Clickatell', `gateway_title`='Clickatell', `gateway_code`='clickatell', `gateway_table`='clickatell', `gateway_class`='clickatell', `gateway_ret_table`='clickatell_log', `default`= 1;
INSERT INTO `PREFIXsms_gateways` set `gateway_name`='BulkSMS', `gateway_title`='BulkSMS', `gateway_code`='bulksms', `gateway_table`='bulksms', `gateway_class`='bulksms', `gateway_ret_table`='bulksms_log', `default`= 0;
INSERT INTO `PREFIXsms_gateways` set `gateway_name`='Experttexting', `gateway_title`='Experttexting', `gateway_code`='experttexting', `gateway_table`='experttexting', `gateway_class`='experttexting', `gateway_ret_table`='experttexting_log', `default`= 0;
INSERT INTO `PREFIXsms_gateways` set `gateway_name`='Altiria', `gateway_title`='Altiria', `gateway_code`='altiria', `gateway_table`='altiria', `gateway_class`='altiria', `gateway_ret_table`='altiria_log', `default`= 0;
INSERT INTO `PREFIXsms_gateways` set `gateway_name`='Muthofun', `gateway_title`='Muthofun', `gateway_code`='muthofun', `gateway_table`='muthofun', `gateway_class`='muthofun', `gateway_ret_table`='muthofun_log', `default`= 0;

DROP TABLE if exists `PREFIXsms_gateways_settings`;
CREATE TABLE `PREFIXsms_gateways_settings` (
  `sms_content` varchar(50),
  `type` int(1) default 1
) ENGINE=MyISAM;
insert into `PREFIXsms_gateways_settings` set `sms_content`='Your activation code is: ', type='1';

DROP TABLE if exists `PREFIXstripe_settings`;
CREATE TABLE `PREFIXstripe_settings` (
  `secret_key` varchar(100),
  `publishable_key` varchar(100),
  `endpoint_secret` varchar(64),
  `item_name` varchar(100),
  `currency` varchar(3)
) ENGINE=InnoDB;

INSERT INTO `PREFIXstripe_settings` set `item_name`='Classifieds ad';

DROP TABLE if exists `PREFIXstripe_return`;
CREATE TABLE `PREFIXstripe_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `charge_id` varchar(100),
  `amount` int(10),
  `currency` varchar(3),
  `customer` varchar(40),
  `livemode` varchar(5),
  `paid` varchar(5),
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB AUTO_INCREMENT=1 ;

DROP TABLE if exists `PREFIXtemp_import`;
CREATE TABLE `PREFIXtemp_import` (
  `id` int(10) NOT NULL auto_increment,
  `succeeded` int(5) default 0,
  `failed` int(5) default 0,
  `json` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE `PREFIXtpl_colorschemes`;
CREATE TABLE `PREFIXtpl_colorschemes` (
	`tpl` varchar(30),
	`colorscheme` varchar(50)
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='blue';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='red';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='green';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='dark_blue';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='forest';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='orange';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='anthracite';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='yellow';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='momentum', `colorscheme`='raspberry';

INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='blue';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='red';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='yellow';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='green';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='simple_red';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='simple_blue';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='simple_green';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='simple_orange';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='sand';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='terra_cota';
INSERT INTO `PREFIXtpl_colorschemes` set `tpl`='flux', `colorscheme`='dark';


DROP TABLE if exists `PREFIXusers`;
CREATE TABLE `PREFIXusers` (
  `id` int(10) NOT NULL auto_increment,
  `group` int(3) NOT NULL,
  `username` varchar(60) default null,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_name` varchar(100) default null,
  `registration_date` datetime,
  `ip` varchar(39) default NULL,
  `activation` varchar(100) default NULL,
  `active` tinyint(1) NOT NULL default '1',
  `pending` tinyint(1) default 0,
  `store` tinyint(1) NOT NULL default '0',
  `store_banner` varchar(100) default null,
  `bulk_uploads` tinyint(1) NOT NULL default 0,
  `rating` double(4,2) NOT NULL default 0,
  `language` varchar(30) default 'DEF_LANG',
  `auth_provider` varchar(30) default null,
  `identity` varchar(200) default null,
  `address` varchar(100) default null,
  `phone` varchar(30) default null,
  `company` varchar(30) default null,
  `webpage` varchar(100) default null,
  `no_credits` double default 0,
  `moderator` tinyint(1) default 0,
  `sections` text,
  `affiliate` tinyint(1) default 0,
  `user_info` text default null,
  `dealer_subdomain` varchar(30) default null,
  `admin_verification` tinyint(1) default 0,
  `last_login` datetime default NULL,
  `enable_2fa` tinyint(1) default 0,
  `2fa_secret` varchar(50) default null,
  PRIMARY KEY  (`id`),
  KEY `idx_username` (`username`),
  KEY `idx_group` (`group`),
  KEY `idx_email` (`email`),
  KEY `idx_date` (`registration_date`),
  KEY `idx_contact` (`contact_name`),
  KEY `idx_active` (`active`),
  KEY `store` (`store`),
  KEY `bulk_uploads` (`bulk_uploads`),
  KEY `moderator` (`moderator`),
  KEY `affiliate` (`affiliate`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE:: ;


DROP TABLE if exists `PREFIXusers_packages`;
CREATE TABLE `PREFIXusers_packages` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(5),
  `package_id` int(2) NOT NULL,
  `date_start` datetime,
  `date_end` datetime,
  `date_renew` datetime,
  `ads_left` int(3) NOT NULL default '0',
  `user_approved` int(11) NOT NULL default '0',
  `active` tinyint(1) NOT NULL default '0',
  `pending` tinyint(1) NOT NULL default '0',
  `subscr_id` varchar(30),
  `recurring` tinyint(1) NOT NULL default '0',
  `fixed` tinyint(1) NOT NULL default 0,
  `allow` int(2) NOT NULL default 0,
  `ip` varchar(39),
  PRIMARY KEY  (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_date_start` (`date_start`),
  KEY `idx_date_end` (`date_end`),
  KEY `idx_active` (`active`),
  KEY `idx_pending` (`pending`),
  KEY `package_id` (`package_id`),
  KEY `user_approved` (`user_approved`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXuser_fields`;
CREATE TABLE `PREFIXuser_fields` (
  `id` int(3) NOT NULL auto_increment,
  `caption` varchar(200)  NOT NULL,
  `type` varchar(20) NOT NULL default 'textbox',
  `order_no` int(2) default NULL,
  `is_numeric` tinyint(1) NOT NULL default '0',
  `validation_type` varchar(100) default NULL,
  `size` varchar(10) default NULL,
  `min` int(10) default 0,
  `max` int(10) default 0,
  `required` tinyint(1) NOT NULL default '0',
  `editable` tinyint(1) NOT NULL default '1',
  `max_uploaded_size` int(6) default 0,
  `extensions` varchar(100) default NULL,
  `image_resize` varchar(20) default NULL,
  `groups` varchar(100) default NULL,
  `dep_id` int(4) default 0,
  `other_val` tinyint(1) default 0,
  `all_val` tinyint(1) default 0,
  `read_only` tinyint(1) default '0',
  `unique` tinyint(1) default '0',
  `ext1` tinyint(1) default '0',
  `public` tinyint(1) NOT NULL default '1',
  `active` tinyint(1) NOT NULL default '1',
  `admin_verification` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXuser_fields` (`id`, `caption`, `type`, `order_no`, `is_numeric`, `validation_type`, `size`, `min`, `max`, `required`, `editable`, `max_uploaded_size`, `extensions`, `image_resize`, `groups`, `dep_id`, `other_val`, `read_only`, `public`, `unique`, `active`, `ext1`) VALUES
(1, 'username', 'username', 1, 0, '', '40', 0, 0, 1, 0, 0, '', '', '0', 0, 0, 1, 0, 0, 1, 0),
(2, 'email', 'user_email', 2, 0, '', '40', 0, 0, 1, 1, 0, '', '', '0', 0, 0, 1, 0, 0, 1, 0),
(3, 'password', 'password', 9, 0, '', '40', 0, 0, 1, 0, 0, '', '', '0', 0, 0, 1, 0, 0, 1, 1),
(4, 'contact_name', 'textbox', 3, 0, '', '40', 0, 0, 1, 1, 0, '', '', '0', 0, 0, 0, 1, 0, 1, 0),
(5, 'address', 'textbox', 4, 0, '', '40', 0, 0, 0, 1, 0, '', '', '0', 0, 0, 0, 1, 0, 1, 0),
(6, 'phone', 'phone', 5, 0, '', '40', 0, 0, 0, 1, 0, '', '', '0', 0, 0, 0, 1, 0, 1, 0),
(7, 'webpage', 'url', 7, 0, '', '40', 0, 0, 0, 1, 0, '', '', '0', 0, 0, 0, 1, 0, 1, 0),
(8, 'terms', 'terms', 8, 0, '', '70X10', 0, 0, 1, 0, 0, '', '', '0', 0, 0, 0, 0, 0, 0, 0),
(9, 'mgm_email', 'user_email', 9, 0, '', '40', 0, 0, 1, 1, 0, '', '', '-1', 0, 0, 1, 0, 0, 1, 0),
(10, 'mgm_name', 'textbox', 10, 0, '', '40', 0, 0, 0, 1, 0, '', '', '-1', 0, 0, 0, 1, 0, 1, 0),
(11, 'mgm_phone', 'phone', 11, 0, '', '40', 0, 0, 0, 1, 0, '', '', '-1', 0, 0, 0, 1, 0, 1, 0);


DROP TABLE if exists `PREFIXuser_fields_lang`;
CREATE TABLE `PREFIXuser_fields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(128)  NOT NULL,
  `top_str` varchar(128) default NULL,
  `error_message` text,
  `error_message2` text default NULL,
  `info_message` text,
  `default_val` text,
  `prefix` varchar(64) default NULL,
  `postfix` varchar(64) default NULL,
  `elements` text,
  `date_format` varchar(30) default NULL,
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE:: ;


INSERT INTO `PREFIXuser_fields_lang` (`id`, `name`, `top_str`, `error_message`, `info_message`, `default_val`, `prefix`, `postfix`, `elements`, `date_format`) VALUES
(1, 'Username', '', '', '', '', '', '', '', ''),
(2, 'Email', '', '', '', '', '', '', '', ''),
(3, 'Password', '', 'Please fill in your password!', '', '', '', '', '', ''),
(4, 'Contact Name', '', 'Please fill in contact name!', '', '', '', '', '', ''),
(5, 'Address', '', '', '', '', '', '', '', ''),
(6, 'Phone', '', 'Please fill in your phone number!', '', '', '', '', '', ''),
(7, 'Webpage', '', '', '', '', '', '', '', ''),
(8, 'Terms and Conditions', '', 'Please read and agree to the site terms and conditions!', 'I have read and agree with the Terms and Conditions.', 'Terms and conditions ...', '', '', '', ''),
(9, 'Your Email Address', '', 'Please fill in your email address. This will be used to manage your listing.', '', '', '', '', '', ''),
(10, 'Your Name', '', '', '', '', '', '', '', ''),
(11, 'Your Phone', '', 'Please fill in your phone number!', '', '', '', '', '', '');


DROP TABLE if exists `PREFIXuser_groups`;
CREATE TABLE `PREFIXuser_groups` (
  `id` int(2) NOT NULL auto_increment,
  `auto_register` tinyint(1) default '1',
  `activate_via_email` tinyint(1) default '1',
  `activate_via_sms` tinyint(1) default '0',
  `admin_verification` tinyint(1) default '0',
  `post_ads` tinyint(1) default 1,
  `store` tinyint(1) default '0',
  `bulk_uploads` tinyint(1) default '0',
  `listing_pending` tinyint(1) default '0',
  `package_pending` tinyint(1) default '0',
  `order_no` int(2) default NULL,
  `active` tinyint(1) default '1',
  `affiliates` tinyint(1) default '0',
  `default_credits` int(4) default '0',
  `affiliates_cookie_availability` int(4) default 0,
  `affiliates_percentage` int(3) default 0,
  `affiliates_payment_cycle` int(4) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXuser_groups` (`id`, `auto_register`, `activate_via_email`, `admin_verification`, `store`, `bulk_uploads`, `listing_pending`, `package_pending`, `order_no`, `active`, `affiliates`, `post_ads`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 1, 1,0,1), (2,1,1,0,0,0,0,0,2,0,1,0);


DROP TABLE if exists `PREFIXuser_groups_lang`;
CREATE TABLE `PREFIXuser_groups_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'DEF_LANG',
  `name` varchar(64) default NULL,
  `description` text,
  KEY `idx_id` (`id`),
  KEY `idx_lang_id` (`lang_id`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB  AUTO_INCREMENT=1 CHARSET=::CHARSET:: COLLATE=::COLLATE::;


INSERT INTO `PREFIXuser_groups_lang` (`id`, `name`, `description`) VALUES
(1, 'Regular User', 'Regular user group.'), (2, 'Affiliates', 'Affiliates group.');


DROP TABLE if exists `PREFIXuser_keys`;
CREATE TABLE `PREFIXuser_keys` (
  `user_id` int(10) default NULL,
  `activation` varchar(100) default NULL,
  `date` datetime default null,
  `type` INT( 2 ) NOT NULL DEFAULT '1'
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXversion`;
CREATE TABLE `PREFIXversion` (
`ver` INT( 2 ) NOT NULL DEFAULT '9',
`subver` INT( 3 ) NOT NULL DEFAULT '8',
`last_update` date default NULL,
`last_check` date default NULL,
`last_checked_version`  VARCHAR( 100 ),
`last_checked_bugfix` varchar(100) default NULL
) CHARSET=::CHARSET:: COLLATE=::COLLATE::;

INSERT INTO `PREFIXversion` ( `ver` , `subver` , `last_update` ) VALUES ( '9', '9', NULL );

DROP TABLE if exists `PREFIXwebxpay_settings`;
CREATE TABLE `PREFIXwebxpay_settings` (
  `public_key` text,
  `secret_key` varchar(50),
  `currency` varchar(3) default 'LKR',
  `phone_field` varchar(20) default 'phone',
  `nologin_phone_field` varchar(20) default 'mgm_phone'
) ENGINE=MyISAM;

insert into `PREFIXwebxpay_settings` set `currency`='LKR';

DROP TABLE if exists `PREFIXwebxpay_return`;
CREATE TABLE `PREFIXwebxpay_return` (
  `id` bigint(20) NOT NULL auto_increment,
  `ukey` varchar(255) default '0',
  `date` datetime default null,
  `order_id` varchar(50),
  `order_refference_number` varchar(50),
  `date_time_transaction` datetime,
  `payment_gateway_used` varchar(30),
  `status_code` varchar(10),
  `comment` varchar(200),
  `entirepost` text,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

DROP TABLE if exists `PREFIXwhitelist_ips`;
CREATE TABLE `PREFIXwhitelist_ips` (
  `id` int(3) NOT NULL auto_increment,
  `info` varchar(200) default null,
  `ip` varchar(39),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;


DROP TABLE if exists `PREFIXwhitelist_emails`;
CREATE TABLE `PREFIXwhitelist_emails` (
  `id` int(3) NOT NULL auto_increment,
  `info` varchar(200) default null,
  `email` varchar(60),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;

DROP TABLE if exists `PREFIXwhitelist_phones`;
CREATE TABLE `PREFIXwhitelist_phones` (
  `id` int(3) NOT NULL auto_increment,
  `info` varchar(200) default null,
  `phone` varchar(60),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB CHARSET=::CHARSET:: COLLATE=::COLLATE::;
