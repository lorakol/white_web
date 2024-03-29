DROP DATABASE IF EXISTS admin_oxy;
CREATE DATABASE admin_oxy; 
USE admin_oxy;

DROP TABLE IF EXISTS `oxy_2co_return`;
CREATE TABLE `oxy_2co_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `x_login` varchar(16) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `ukey` varchar(255) DEFAULT '0',
  `x_amount` varchar(50) DEFAULT NULL,
  `X_Email` varchar(50) DEFAULT NULL,
  `X_Address` varchar(50) DEFAULT NULL,
  `X_City` varchar(50) DEFAULT NULL,
  `X_State` varchar(50) DEFAULT NULL,
  `X_Country` varchar(50) DEFAULT NULL,
  `X_ZIP` varchar(30) DEFAULT NULL,
  `x_invoice_num` varchar(255) DEFAULT '0',
  `order_number` varchar(30) DEFAULT NULL,
  `merchant_order_id` varchar(50) DEFAULT NULL,
  `ip_country` varchar(50) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `cart_id` varchar(50) DEFAULT NULL,
  `demo` varchar(1) DEFAULT NULL,
  `pay_method` varchar(10) DEFAULT NULL,
  `credit_card_processed` char(1) DEFAULT 'Y',
  `card_holder_name` varchar(100) DEFAULT NULL,
  `merchant_product_id` int(10) DEFAULT NULL,
  `entirepost` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_2co_settings`;
CREATE TABLE `oxy_2co_settings` (
  `to_checkout_sid` varchar(20) DEFAULT NULL,
  `to_checkout_secret` varchar(16) DEFAULT NULL,
  `to_checkout_demo` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_aamarpay_return`;

CREATE TABLE `oxy_aamarpay_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `pay_status` varchar(15) DEFAULT NULL,
  `status_code` int(2) DEFAULT NULL,
  `pg_txnid` varchar(30) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `mer_txnid` varchar(30) DEFAULT NULL,
  `merchant_id` varchar(30) DEFAULT NULL,
  `store_id` varchar(30) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `currency_merchant` varchar(3) DEFAULT NULL,
  `convertion_rate` varchar(10) DEFAULT NULL,
  `store_amount` varchar(30) DEFAULT NULL,
  `pay_time` varchar(15) DEFAULT NULL,
  `bank_txn` varchar(30) DEFAULT NULL,
  `card_number` varchar(30) DEFAULT NULL,
  `card_holder` varchar(30) DEFAULT NULL,
  `card_type` varchar(30) DEFAULT NULL,
  `ip_address` varchar(32) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL,
  `other_currency` varchar(30) DEFAULT NULL,
  `success_url` varchar(100) DEFAULT NULL,
  `fail_url` varchar(100) DEFAULT NULL,
  `pg_service_charge_bdt` varchar(30) DEFAULT NULL,
  `pg_service_charge_usd` varchar(30) DEFAULT NULL,
  `pg_card_bank_name` varchar(30) DEFAULT NULL,
  `pg_card_bank_country` varchar(30) DEFAULT NULL,
  `risk_level` varchar(30) DEFAULT NULL,
  `pg_error_code_details` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `oxy_aamarpay_settings`;

CREATE TABLE `oxy_aamarpay_settings` (
  `store_id` varchar(100) DEFAULT NULL,
  `signature_key` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `phone_field` varchar(30) DEFAULT NULL,
  `address_field` varchar(30) DEFAULT NULL,
  `city_field` varchar(30) DEFAULT NULL,
  `state_field` varchar(30) DEFAULT NULL,
  `postcode_field` varchar(30) DEFAULT NULL,
  `country_field` varchar(30) DEFAULT NULL,
  `nologin_phone_field` varchar(30) DEFAULT NULL,
  `nologin_address_field` varchar(30) DEFAULT NULL,
  `nologin_city_field` varchar(30) DEFAULT NULL,
  `nologin_state_field` varchar(30) DEFAULT NULL,
  `nologin_postcode_field` varchar(30) DEFAULT NULL,
  `nologin_country_field` varchar(30) DEFAULT NULL,
  `test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


LOCK TABLES `oxy_aamarpay_settings` WRITE;
INSERT INTO `oxy_aamarpay_settings` VALUES (NULL,NULL,'Classifieds ad','BDT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_actions`;

CREATE TABLE `oxy_actions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `object_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice` int(10) DEFAULT NULL,
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `extra` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_object` (`object_id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_invoice` (`invoice`),
  KEY `idx_type` (`type`),
  KEY `idx_date` (`date`),
  KEY `idx_pending` (`pending`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_actions`
--

LOCK TABLES `oxy_actions` WRITE;
INSERT INTO `oxy_actions` VALUES (1,'newad',1,1,1,0,'2021-08-03 20:19:51',0),(3,'newad',2,1,2,0,'2021-08-05 13:43:15',0),(5,'newad',3,1,3,0,'2021-08-12 15:29:59',0),(9,'newad',4,2,6,0,'2021-08-17 12:24:57',0),(11,'newad',5,2,7,0,'2021-08-17 12:36:10',0),(13,'newad',6,2,8,0,'2021-08-17 12:44:08',0),(15,'newad',7,1,9,0,'2021-08-17 14:22:46',0),(16,'newad',8,2,10,1,'2021-08-23 08:48:04',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_address_components`
--

DROP TABLE IF EXISTS `oxy_address_components`;

CREATE TABLE `oxy_address_components` (
  `component` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'long_name',
  `field` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_address_components`
--

LOCK TABLES `oxy_address_components` WRITE;
INSERT INTO `oxy_address_components` VALUES ('country','long_name','country'),('administrative_area_level_1','long_name','region'),('administrative_area_level_2','long_name',''),('locality','long_name','city'),('postal_code','long_name','zip');
UNLOCK TABLES;

--
-- Table structure for table `oxy_admin_tpl_colorschemes`
--

DROP TABLE IF EXISTS `oxy_admin_tpl_colorschemes`;

CREATE TABLE `oxy_admin_tpl_colorschemes` (
  `tpl` varchar(30) DEFAULT NULL,
  `colorscheme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_admin_tpl_colorschemes`
--

LOCK TABLES `oxy_admin_tpl_colorschemes` WRITE;
INSERT INTO `oxy_admin_tpl_colorschemes` VALUES ('default','blue'),('default','navy-blue'),('default','sage');
UNLOCK TABLES;

--
-- Table structure for table `oxy_ads`
--

DROP TABLE IF EXISTS `oxy_ads`;

CREATE TABLE `oxy_ads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(3) NOT NULL,
  `package_id` int(2) NOT NULL,
  `usr_pkg` int(10) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_expires` datetime DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `price` double DEFAULT '-1',
  `currency` varchar(10) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `region` varchar(64) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `meta_description` varchar(256) DEFAULT NULL,
  `meta_keywords` varchar(256) DEFAULT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `rented` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` int(10) NOT NULL DEFAULT '0',
  `user_approved` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `featured` int(3) NOT NULL DEFAULT '0',
  `highlited` tinyint(1) NOT NULL DEFAULT '0',
  `priority` int(1) NOT NULL DEFAULT '0',
  `video` text,
  `urgent` tinyint(1) DEFAULT '0',
  `site_url` text,
  `rating` double(4,2) NOT NULL DEFAULT '0.00',
  `language` varchar(30) NOT NULL DEFAULT 'eng',
  `unique_id` varchar(30) DEFAULT NULL,
  `auction` int(1) DEFAULT '0',
  `email_contact` tinyint(1) DEFAULT '1',
  `make` varchar(64) DEFAULT NULL,
  `motorcycle_make` varchar(64) DEFAULT NULL,
  `make_rvs` varchar(64) DEFAULT NULL,
  `make1` varchar(64) DEFAULT NULL,
  `model` varchar(64) DEFAULT NULL,
  `model1` varchar(64) DEFAULT NULL,
  `bodystyle` varchar(64) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL,
  `transmission` varchar(64) DEFAULT NULL,
  `fuel` varchar(64) DEFAULT NULL,
  `doors` int(2) DEFAULT NULL,
  `color` varchar(64) DEFAULT NULL,
  `engine_size` int(5) DEFAULT NULL,
  `horsepower` int(5) DEFAULT NULL,
  `condition_vehicles` varchar(64) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `vehicle_features` text,
  `rv_features` text,
  `category1` varchar(128) DEFAULT NULL,
  `make2` varchar(128) DEFAULT NULL,
  `model2` varchar(255) DEFAULT NULL,
  `construction_year` float DEFAULT NULL,
  `operating_hours` float DEFAULT NULL,
  `kategorie` varchar(128) DEFAULT NULL,
  `marke` varchar(128) DEFAULT NULL,
  `kategorie1` varchar(128) DEFAULT NULL,
  `marke1` varchar(128) DEFAULT NULL,
  `kategorie2` varchar(128) DEFAULT NULL,
  `marke2` varchar(128) DEFAULT NULL,
  `kategorie3` varchar(128) DEFAULT NULL,
  `marke3` varchar(128) DEFAULT NULL,
  `kategorie4` varchar(128) DEFAULT NULL,
  `marke4` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ads`
--

LOCK TABLES `oxy_ads` WRITE;
INSERT INTO `oxy_ads` VALUES (1,1,4,1,1,'2021-10-09 00:17:22','2021-10-09 00:17:22','2021-11-08 00:17:22','1970 Ford Mustang Mach 1','This car is a head turner. 351C 4bbl Holley 83310-1 750 cfm vac sec. carb Edelbrock performer rpm manifold Hooker Super Competition headers Dyno tuned 6/28/16 Runs great. Upgraded Baer 4 wheel disc brakes Upgraded suspension Monte Carlo Bar 3 speed automatic Power steering Power brakes Chrome Crager 17” wheels 243/45/17 front 255/50/17 rear Nitto tires Air Conditioning New carpet New roof liner Knit vinyl front bucket seats with fold down rear Center console Original rim blow horn Retrosound Malibu Bluetooth radio Fuel cutoff switch',-1,'$','Germany','Rhineland-Palatinate','Ruben','43294',NULL,NULL,'','',0,0,231,1,1,0,0,0,0,NULL,0,NULL,0.00,'eng',NULL,0,1,'Ford',NULL,NULL,NULL,'Mustang',NULL,'Van / Minibus',1970,68007,'Automatic','Diesel',4,'Yellow',3000,258,'Used',NULL,'4-Wheel Drive|Safety Belt Pretensioners|Side Airbags|Rear Spoiler|Electric heated seats|Power Locks|Power Seats|Sunroof|Navigation System',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,1,4,1,2,'2021-10-08 03:45:07','2021-10-08 03:45:07','2021-11-07 03:45:07','1968 Ford Mustang GT350','68 Mustang Fast Back GT 350 Shelby Clone. A Tribute to this iconic classic muscle car. 02 cid GT spec. engine, Holly carb. mounted on Edelbrock intake manifold. Long tube exhaust manifolds. 4 speed manual transmission with Hurst shifter. A/C. New black interior to original spec. AM radio.',15200,'€','Germany','Hamburg','Hamburg','24422',NULL,NULL,'','',0,0,210,1,1,0,0,0,0,NULL,0,NULL,0.00,'german',NULL,0,1,'Ford',NULL,NULL,NULL,'Mustang',NULL,'4x4',1968,14258,'Manual','Petrol',4,'White',4244,144,'Used',NULL,'4-Wheel Drive|Alarm|Safety Belt Pretensioners|Catalytic Converter|Rear Spoiler|Tuning|Climate Control|Leather Seats|Power Locks|Power Seats|Power Windows|AM/FM Stereo|CD Player',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,1,7,1,3,'2021-10-15 00:17:56','2021-10-15 00:17:56','2021-11-14 00:17:56','Buldozer','Minunat plm',1200,'€','Germany','Bremen','Bremen','1803',NULL,NULL,'','',0,0,110,1,1,0,0,0,0,NULL,0,NULL,0.00,'eng',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Construction Equipment','Upright','2.0 TDI',1903,120302,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,2,7,1,6,'2021-10-20 00:20:13','2021-10-20 00:20:13','2021-11-19 00:20:13','JCB 4CX Baggerlader','JCB 4CX Baggerlader \r\nBj.2010\r\nBaggerlader in der Militärversion.\r\nDie bewährte, verstärkte Struktur ermöglicht den Einsatz der Maschine unter sehr extremen Bedingungen und in schwierigem Gelände.\r\nSeitenhydraulikausgang, hydraulischer Seitenschieber, Kraftstoffpumpe, Klimaanlage, Schnellwechsler vorn und hinten.\r\n100PS-Motor, 4-Gang-Getriebe, Hammerleistung, AUX-Ausgang, Joystick-Steuerung.\r\nGebrauchte 28-Zoll-Räder und Goodyear IT 530-Reifen mit höherer Geländefestigkeit.\r\nDie Maschine ist in einem sehr guten Zustand - KEINE LECKS ODER SPIELE.',17400,'€','Germany','Hamburg','Hamburg','44097',NULL,NULL,'','',0,0,206,1,1,0,0,0,0,NULL,0,NULL,0.00,'eng',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Wheeled loader','JCB','4cx',2010,2000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,2,7,1,7,'2021-10-20 00:20:13','2021-10-20 00:20:13','2021-11-19 00:20:13','VOLVO L35B Z PRO','VOLVO L35B Z PRO\r\nBaujahr 2013\r\n5.700 Std.\r\n\r\nStandardschaufel m. Zähnen\r\nPalettengabel\r\nHubgerüstfederung\r\nKehrmaschinenvorbereitung\r\nHanddrehinchventil\r\nArbeitsscheinwerfer\r\nReifen 405/70 R 20, vorn 35%, hinten 45%\r\nLieferung möglich',19900,'€','Germany',NULL,'Berlin','4550077',NULL,NULL,'','',0,0,113,1,1,0,0,0,0,NULL,0,NULL,0.00,'german',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Radlader','Volvo','L35B Z',2013,200,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,2,7,1,8,'2021-10-20 00:20:13','2021-10-20 00:20:13','2021-11-19 00:20:13','VOLVO L35B Z PRO','VOLVO L35B Z PRO\r\nBaujahr 2013\r\n5.700 Std.\r\n\r\nStandardschaufel m. Zähnen\r\nPalettengabel\r\nHubgerüstfederung\r\nKehrmaschinenvorbereitung\r\nHanddrehinchventil\r\nArbeitsscheinwerfer\r\nReifen 405/70 R 20, vorn 35%, hinten 45%\r\nLieferung möglich',20003,'€','Germany','Berlin','Berlin','4444',NULL,NULL,'','',0,0,275,1,1,0,0,0,0,NULL,0,NULL,0.00,'german',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Radlader','Volvo','L35B Z PRO',2015,3000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,1,7,2,5,'2021-08-17 14:24:53','2021-08-17 14:24:53',NULL,'1956 Ford F100','<div>Beginning with a stock frame, a Camaro front clip was installed new tubular upper and lower control arms, with 2\" drop spindles. Front and rear disc brakes. The rear end is a C4 corvette independent suspension all new urethane bushings. All brake lines are stainless steel with braided S.S. connectors. Fuel lines are stainless steel. Front wheels are COY V-ROD 5 18\"x8\" Nitto 555 G2 tires 245-10-18 Rear wheels are Coy V-ROD 5 20\"x10\" Nitto 555 G2 275x35 20.</div><div><br></div>',16000,'€','Germany','Mecklenburg-Vorpommerr','NY','43255',NULL,NULL,'','',0,0,668,1,1,0,1,1,2,NULL,0,NULL,0.00,'german',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Baggerlader','CAT','Mata',1956,2433,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,2,7,1,9,'2021-09-24 00:21:17','2021-09-24 00:21:17','2021-10-24 00:21:17','JCB 3CX Baggerlader','2017 Baujahr',30000,'€','Germany','Berlin','Berlin','13156',NULL,NULL,'','',0,0,426,1,1,1,0,0,0,NULL,0,NULL,0.00,'eng',NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Compaction technology','JCB','3cx',2017,2536,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_ads_extension`
--

DROP TABLE IF EXISTS `oxy_ads_extension`;

CREATE TABLE `oxy_ads_extension` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mgm_email` varchar(60) NOT NULL,
  `mgm_name` varchar(60) DEFAULT NULL,
  `mgm_phone` varchar(60) DEFAULT NULL,
  `activation` varchar(60) DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_activation` (`activation`),
  KEY `idx_ip` (`ip`),
  KEY `idx_mgm_email` (`mgm_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ads_extension`
--


--
-- Table structure for table `oxy_ads_pictures`
--

DROP TABLE IF EXISTS `oxy_ads_pictures`;

CREATE TABLE `oxy_ads_pictures` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad_id` int(11) NOT NULL,
  `picture` varchar(128) NOT NULL,
  `folder` varchar(20) DEFAULT NULL,
  `order_no` int(2) NOT NULL DEFAULT '1',
  `title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ad` (`ad_id`),
  KEY `idx_order` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ads_pictures`
--

LOCK TABLES `oxy_ads_pictures` WRITE;
INSERT INTO `oxy_ads_pictures` VALUES (1,1,'1970_ford_mustang_mach_1-1628021700-641-e.jpg','2021-08',1,''),(2,1,'1970_ford_mustang_mach_1-1628021700-223-e.jpg','2021-08',2,''),(3,1,'1970_ford_mustang_mach_1-1628021701-530-e.jpg','2021-08',3,''),(4,1,'1970_ford_mustang_mach_1-1628021699-190-e.jpg','2021-08',4,''),(5,2,'1968_ford_mustang_gt350-1628170953-468-e.jpg','2021-08',1,''),(6,2,'1968_ford_mustang_gt350-1628170964-114-e.jpg','2021-08',2,''),(7,2,'1968_ford_mustang_gt350-1628170965-835-e.jpg','2021-08',3,''),(8,2,'1968_ford_mustang_gt350-1628170965-92-e.jpg','2021-08',4,''),(9,3,'buldozer-1628782160-812-e.jpg','2021-08',1,''),(10,3,'buldozer-1628782160-781-e.jpg','2021-08',2,''),(11,3,'buldozer-1628782161-426-e.jpg','2021-08',3,''),(12,3,'buldozer-1628782161-360-e.jpg','2021-08',4,''),(13,4,'jcb_4cx_baggerlader-1629203081-917-e.jpg','2021-08',1,''),(14,4,'jcb_4cx_baggerlader-1629203082-402-e.jpg','2021-08',2,''),(15,4,'jcb_4cx_baggerlader-1629203082-998-e.jpg','2021-08',3,''),(16,4,'jcb_4cx_baggerlader-1629203083-608-e.jpg','2021-08',4,''),(17,5,'volvo_l35b_z_pro-1629203764-845-e.jpg','2021-08',1,''),(18,5,'volvo_l35b_z_pro-1629203764-336-e.jpg','2021-08',2,''),(19,6,'volvo_l35b_z_pro-1629204244-540-e.jpg','2021-08',1,''),(20,6,'volvo_l35b_z_pro-1629204244-106-e.jpg','2021-08',2,''),(21,7,'1956_ford_f100-1629210149-957-e.jpg','2021-08',1,''),(22,7,'1956_ford_f100-1629210149-446-e.jpg','2021-08',2,''),(23,7,'1956_ford_f100-1629210150-7-e.jpg','2021-08',3,''),(24,7,'1956_ford_f100-1629210150-539-e.jpg','2021-08',4,''),(25,7,'1956_ford_f100-1629210151-105-e.jpg','2021-08',5,''),(26,7,'1956_ford_f100-1629210151-651-e.jpg','2021-08',6,''),(27,7,'1956_ford_f100-1629210152-716-e.jpg','2021-08',7,'');
UNLOCK TABLES;

--
-- Table structure for table `oxy_ads_settings`
--

DROP TABLE IF EXISTS `oxy_ads_settings`;

CREATE TABLE `oxy_ads_settings` (
  `thmb_width` int(4) DEFAULT '140',
  `thmb_height` int(4) DEFAULT '98',
  `med_thmb_width` int(4) DEFAULT '300',
  `med_thmb_height` int(4) DEFAULT '300',
  `big_thmb_width` int(4) DEFAULT '600',
  `big_thmb_height` int(4) DEFAULT '420',
  `nopic` varchar(128) DEFAULT NULL,
  `med_nopic` varchar(128) DEFAULT NULL,
  `big_nopic` varchar(128) DEFAULT NULL,
  `pic_max_size` int(5) DEFAULT '10000',
  `pic_max_width` int(5) DEFAULT '6000',
  `pic_max_height` int(5) DEFAULT '4500',
  `resize_image` tinyint(1) DEFAULT '0',
  `resize_width` int(5) DEFAULT '800',
  `resize_height` int(5) DEFAULT '600',
  `watermark` varchar(60) DEFAULT NULL,
  `watermark_position` varchar(4) DEFAULT 'br',
  `watermark_transparency` int(3) DEFAULT '50',
  `days_recent` int(5) DEFAULT '0',
  `badwords_check` tinyint(1) DEFAULT '1',
  `badwords_check_type` tinyint(1) DEFAULT '1',
  `enable_price` tinyint(1) DEFAULT NULL,
  `enable_stock` tinyint(1) DEFAULT '1',
  `enable_sold` tinyint(1) DEFAULT '1',
  `enable_rented` tinyint(1) DEFAULT '0',
  `sold_image` varchar(60) DEFAULT NULL,
  `rented_image` varchar(60) DEFAULT NULL,
  `hide_contact_when_sold` tinyint(1) DEFAULT '0',
  `hide_contact_when_rented` tinyint(1) DEFAULT '0',
  `no_featured` int(2) DEFAULT '2',
  `no_featured_on_row` int(2) DEFAULT '1',
  `enable_latest` tinyint(1) DEFAULT '1',
  `no_latest` int(2) DEFAULT '3',
  `no_latest_on_row` int(2) DEFAULT '3',
  `show_more_link` tinyint(1) DEFAULT '1',
  `enable_featured` tinyint(1) DEFAULT '1',
  `enable_highlited` tinyint(1) DEFAULT '1',
  `enable_priorities` tinyint(1) DEFAULT '1',
  `random_priorities` tinyint(1) DEFAULT '0',
  `enable_video` tinyint(1) DEFAULT '1',
  `highlited_color` varchar(7) DEFAULT NULL,
  `highlited_expires` int(4) DEFAULT '0',
  `priorities_expires` int(4) DEFAULT '0',
  `video_expires` int(4) DEFAULT '0',
  `highlited_price` double DEFAULT '0',
  `video_price` double DEFAULT '0',
  `store_availability` int(4) DEFAULT '30',
  `store_price` double DEFAULT '0',
  `dealer_subdomain` tinyint(1) DEFAULT '0',
  `dealers_can_edit_slug` tinyint(1) DEFAULT '0',
  `resize_store_image` tinyint(1) DEFAULT '0',
  `resize_store_width` int(5) DEFAULT '200',
  `resize_store_height` int(5) DEFAULT '100',
  `add_meta_with_listings` tinyint(1) DEFAULT '1',
  `allowed_html` varchar(250) DEFAULT NULL,
  `search_in_fields` varchar(250) DEFAULT NULL,
  `location_fields` varchar(250) DEFAULT NULL,
  `translate_title_description` tinyint(1) DEFAULT '0',
  `show_ad_date_for_everybody` tinyint(1) DEFAULT '1',
  `alerts_enabled` tinyint(1) DEFAULT '1',
  `alerts_ask_adv_key` tinyint(1) DEFAULT '0',
  `alerts_days_delete` int(4) DEFAULT '30',
  `alerts_require_login` tinyint(1) DEFAULT '0',
  `alerts_activation` tinyint(1) DEFAULT '2',
  `saved_searches_enabled` tinyint(1) DEFAULT '1',
  `enable_map_search` tinyint(1) DEFAULT '0',
  `map_visible` tinyint(1) DEFAULT '0',
  `default_search_view` tinyint(1) DEFAULT '0',
  `search_location_fields` varchar(250) DEFAULT NULL,
  `search_type` varchar(10) NOT NULL DEFAULT 'any',
  `hide_contact_when_not_logged` tinyint(1) NOT NULL DEFAULT '0',
  `featured_autoscroll` tinyint(1) DEFAULT '1',
  `date_time_ago_format` tinyint(1) DEFAULT '0',
  `date_time_ago_days` int(3) DEFAULT '7',
  `pending_edited` tinyint(1) DEFAULT '0',
  `enable_auctions` tinyint(1) DEFAULT '0',
  `notify_when_new_bid` tinyint(1) DEFAULT '1',
  `prioritize_featured` tinyint(1) DEFAULT '0',
  `search_by_account_type` tinyint(1) DEFAULT '0',
  `prof_groups` varchar(20) DEFAULT '0',
  `enable_distance_search` tinyint(1) DEFAULT '0',
  `ds_measuring_unit` varchar(5) DEFAULT 'Km',
  `ds_distances_list` varchar(100) DEFAULT '2|5|10|15|30|50|75|100',
  `enable_location_autosuggest` tinyint(1) DEFAULT '0',
  `limit_location_autosuggest` varchar(50) DEFAULT NULL,
  `gm_api_lang` varchar(2) DEFAULT NULL,
  `count_refine_results` int(1) DEFAULT '0',
  `enable_urgent` tinyint(1) DEFAULT '0',
  `enable_url` tinyint(1) DEFAULT '0',
  `urgent_expires` int(4) DEFAULT '0',
  `url_expires` int(4) DEFAULT '0',
  `urgent_price` double DEFAULT '0',
  `url_price` double DEFAULT '0',
  `featured_example` varchar(100) DEFAULT NULL,
  `highlited_example` varchar(100) DEFAULT NULL,
  `priorities_example` varchar(100) DEFAULT NULL,
  `video_example` varchar(100) DEFAULT NULL,
  `urgent_example` varchar(100) DEFAULT NULL,
  `url_example` varchar(100) DEFAULT NULL,
  `latest_show_only_with_image` tinyint(1) DEFAULT '0',
  `latest_show_list` tinyint(1) DEFAULT '0',
  `hide_contact_button` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ads_settings`
--

LOCK TABLES `oxy_ads_settings` WRITE;
INSERT INTO `oxy_ads_settings` VALUES (140,98,300,300,600,420,'noimage.jpg','mednoimage.jpg','big_noimage.jpg',10000,6000,4500,0,800,600,'','br',70,0,0,0,1,0,1,0,'sold.gif','rented.gif',0,0,5,5,1,5,1,0,1,1,1,1,1,'#f5f5f5',0,0,0,2,0,30,10,0,0,0,200,100,0,'b,br,center,div,em,font,i,p,span,strong,u','title,description','country,region,city',0,0,1,0,30,0,2,1,0,0,0,'country,region,city','any',0,1,0,7,1,0,0,0,0,'',0,'Km','2|5|10|15|30|50|75|100',0,'','',0,1,0,0,0,1,3,NULL,NULL,NULL,NULL,NULL,NULL,1,0,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_ads_settings_lang`
--

DROP TABLE IF EXISTS `oxy_ads_settings_lang`;

CREATE TABLE `oxy_ads_settings_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `featured_description` varchar(255) DEFAULT NULL,
  `highlited_description` varchar(255) DEFAULT NULL,
  `priorities_description` varchar(255) DEFAULT NULL,
  `video_description` varchar(255) DEFAULT NULL,
  `urgent_description` varchar(255) DEFAULT NULL,
  `url_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ads_settings_lang`
--

LOCK TABLES `oxy_ads_settings_lang` WRITE;
INSERT INTO `oxy_ads_settings_lang` VALUES ('eng','Show your ad on the homepage.','Your ad will be colored differently to be more visible.','Your ad will be placed on top of search pages.','Add a Youtube video to your ad.','Show your ad with an Urgent tag.','Add your Website Link to your ad.'),('esp','Show your ad on the homepage.','Your ad will be colored differently to be more visible.','Your ad will be placed on top of search pages.','Add a Youtube video to your ad.','Show your ad with an Urgent tag.','Add your Website Link to your ad.'),('french','Show your ad on the homepage.','Your ad will be colored differently to be more visible.','Your ad will be placed on top of search pages.','Add a Youtube video to your ad.','Show your ad with an Urgent tag.','Add your Website Link to your ad.'),('italian','Show your ad on the homepage.','Your ad will be colored differently to be more visible.','Your ad will be placed on top of search pages.','Add a Youtube video to your ad.','Show your ad with an Urgent tag.','Add your Website Link to your ad.'),('dutch','Show your ad on the homepage.','Your ad will be colored differently to be more visible.','Your ad will be placed on top of search pages.','Add a Youtube video to your ad.','Show your ad with an Urgent tag.','Add your Website Link to your ad.'),('german','Show your ad on the homepage.','Ihre Anzeige wird anders eingefärbt, um besser sichtbar zu sein.','Ihre Anzeige wird oben auf den Suchseiten platziert.','Fügen Sie Ihrer Anzeige ein Youtube-Video hinzu.','Zeigen Sie Ihre Anzeige mit einem Dringend-Tag an.','Fügen Sie Ihren Website-Link zu Ihrer Anzeige hinzu.');
UNLOCK TABLES;

--
-- Table structure for table `oxy_affiliates`
--

DROP TABLE IF EXISTS `oxy_affiliates`;

CREATE TABLE `oxy_affiliates` (
  `id` int(10) NOT NULL,
  `affiliate_id` varchar(8) NOT NULL,
  `affiliate_paypal_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_affiliates`
--

--
-- Table structure for table `oxy_affiliates_payments`
--

DROP TABLE IF EXISTS `oxy_affiliates_payments`;

CREATE TABLE `oxy_affiliates_payments` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `affiliate_id` varchar(8) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` datetime NOT NULL,
  `processor` varchar(40) DEFAULT 'paypal',
  `paid_to` varchar(200) DEFAULT NULL,
  `completed` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_affiliate_id` (`affiliate_id`),
  KEY `idx_date` (`date`),
  KEY `idx_released` (`completed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_affiliates_payments`
--
--
-- Table structure for table `oxy_affiliates_revenue`
--

DROP TABLE IF EXISTS `oxy_affiliates_revenue`;

CREATE TABLE `oxy_affiliates_revenue` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `affiliate_id` varchar(8) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` datetime NOT NULL,
  `order_id` int(20) NOT NULL,
  `paid` int(1) DEFAULT '0',
  `released` int(1) DEFAULT '0',
  `payment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_affiliate_id` (`affiliate_id`),
  KEY `idx_date` (`date`),
  KEY `idx_paid` (`paid`),
  KEY `idx_released` (`released`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_affiliates_revenue`
--


--
-- Table structure for table `oxy_altiria`
--

DROP TABLE IF EXISTS `oxy_altiria`;

CREATE TABLE `oxy_altiria` (
  `replacePOSTsms` varchar(50) DEFAULT NULL,
  `domainId` varchar(50) DEFAULT NULL,
  `altiria_login` varchar(50) DEFAULT NULL,
  `altiria_passwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_altiria`
--

LOCK TABLES `oxy_altiria` WRITE;
INSERT INTO `oxy_altiria` VALUES (NULL,NULL,'',NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_altiria_log`
--

DROP TABLE IF EXISTS `oxy_altiria_log`;

CREATE TABLE `oxy_altiria_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` int(1) DEFAULT '1',
  `error_message` varchar(200) DEFAULT NULL,
  `details` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_appearance`
--

DROP TABLE IF EXISTS `oxy_appearance`;

CREATE TABLE `oxy_appearance` (
  `template` varchar(50) DEFAULT 'default',
  `template_colorscheme` varchar(50) DEFAULT NULL,
  `admin_template` varchar(50) DEFAULT 'default',
  `admin_language` varchar(20) DEFAULT 'eng',
  `show_header` tinyint(1) DEFAULT '1',
  `header_pic` varchar(128) DEFAULT NULL,
  `small_header_pic` varchar(128) DEFAULT NULL,
  `header_pic_link` varchar(128) DEFAULT NULL,
  `show_footer` tinyint(1) DEFAULT '0',
  `footer_pic` varchar(128) DEFAULT NULL,
  `footer_pic_link` varchar(128) DEFAULT NULL,
  `show_footer_categ` tinyint(1) DEFAULT '1',
  `outer_table` int(4) DEFAULT NULL,
  `max_cat_per_row` tinyint(1) DEFAULT '6',
  `categ_count_ads` tinyint(1) DEFAULT '1',
  `ads_per_page` int(2) DEFAULT '5',
  `first_page_type` int(2) DEFAULT '1',
  `timezone` varchar(50) DEFAULT 'GMT',
  `time_offset` int(5) DEFAULT '0',
  `maintenance_mode` int(1) DEFAULT '0',
  `maintenance_ips` text,
  `enable_impressions_count` int(1) DEFAULT '1',
  `admin_template_colorscheme` varchar(50) DEFAULT 'blue'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_appearance`
--

LOCK TABLES `oxy_appearance` WRITE;
INSERT INTO `oxy_appearance` VALUES ('flux','simple_green','default','eng',1,'logotrans.png','logosize.jpg','',0,'logosizeinvert.jpg','',0,1200,6,0,20,2,'GMT',0,0,NULL,1,'navy-blue');
UNLOCK TABLES;

--
-- Table structure for table `oxy_appearance_lang`
--

DROP TABLE IF EXISTS `oxy_appearance_lang`;

CREATE TABLE `oxy_appearance_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `footer_text` varchar(255) DEFAULT '',
  `charset` varchar(50) DEFAULT 'UTF-8',
  `default_currency` varchar(10) DEFAULT '$',
  `currency_pos` tinyint(1) DEFAULT '0',
  `date_format` varchar(30) DEFAULT NULL,
  `date_format_long` varchar(30) DEFAULT NULL,
  `number_format_decimals` int(2) DEFAULT '2',
  `number_format_point` varchar(5) DEFAULT '.',
  `number_format_separator` varchar(6) DEFAULT ',',
  `price_format_decimals` int(2) DEFAULT '0',
  `price_format_point` varchar(5) DEFAULT '.',
  `price_format_separator` varchar(6) DEFAULT ','
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_appearance_lang`
--

LOCK TABLES `oxy_appearance_lang` WRITE;
INSERT INTO `oxy_appearance_lang` VALUES ('eng','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',','),('esp','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',','),('french','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',','),('italian','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',','),('dutch','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',','),('german','Copyright 2020, getrent.live','UTF-8','$',0,'%b %d, %Y','%b %d, %Y %H:%i',2,'.',',',2,'.',',');
UNLOCK TABLES;

--
-- Table structure for table `oxy_ar_settings`
--

DROP TABLE IF EXISTS `oxy_ar_settings`;

CREATE TABLE `oxy_ar_settings` (
  `days` int(2) DEFAULT '2',
  `plans` varchar(200) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ar_settings`
--

LOCK TABLES `oxy_ar_settings` WRITE;
INSERT INTO `oxy_ar_settings` VALUES (1,'0');
UNLOCK TABLES;

--
-- Table structure for table `oxy_auctions`
--

DROP TABLE IF EXISTS `oxy_auctions`;

CREATE TABLE `oxy_auctions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad_id` int(10) NOT NULL,
  `starting_price` double NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `max_bid` double DEFAULT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ad_id` (`ad_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_authorize_return`
--

DROP TABLE IF EXISTS `oxy_authorize_return`;

CREATE TABLE `oxy_authorize_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `x_response_code` int(3) DEFAULT NULL,
  `x_response_subcode` int(3) DEFAULT NULL,
  `x_response_reason_code` int(3) DEFAULT NULL,
  `x_response_reason_text` text,
  `x_auth_code` varchar(6) DEFAULT NULL,
  `x_avs_code` char(1) DEFAULT NULL,
  `x_trans_id` varchar(40) DEFAULT NULL,
  `x_invoice_num` int(5) DEFAULT NULL,
  `x_description` varchar(100) DEFAULT NULL,
  `x_amount` float DEFAULT NULL,
  `x_method` varchar(10) DEFAULT NULL,
  `x_type` varchar(20) DEFAULT NULL,
  `x_cust_id` varchar(20) DEFAULT NULL,
  `x_first_name` varchar(50) DEFAULT NULL,
  `x_last_name` varchar(50) DEFAULT NULL,
  `x_company` varchar(60) DEFAULT NULL,
  `x_address` varchar(60) DEFAULT NULL,
  `x_city` varchar(40) DEFAULT NULL,
  `x_state` varchar(50) DEFAULT NULL,
  `x_zip` varchar(20) DEFAULT NULL,
  `x_country` varchar(60) DEFAULT NULL,
  `x_phone` varchar(25) DEFAULT NULL,
  `x_fax` varchar(25) DEFAULT NULL,
  `x_email` varchar(255) DEFAULT NULL,
  `x_ship_to_first_name` varchar(50) DEFAULT NULL,
  `x_ship_to_last_name` varchar(50) DEFAULT NULL,
  `x_ship_to_company` varchar(50) DEFAULT NULL,
  `x_ship_to_address` varchar(60) DEFAULT NULL,
  `x_ship_to_city` varchar(40) DEFAULT NULL,
  `x_ship_to_state` varchar(50) DEFAULT NULL,
  `x_ship_to_zip` varchar(20) DEFAULT NULL,
  `x_ship_to_country` varchar(60) DEFAULT NULL,
  `x_tax` float DEFAULT NULL,
  `x_duty` float DEFAULT NULL,
  `x_freight` float DEFAULT NULL,
  `x_tax_exempt` varchar(10) DEFAULT NULL,
  `x_po_num` varchar(25) DEFAULT NULL,
  `x_MD5_Hash` varchar(50) DEFAULT NULL,
  `x_cvv2_resp_code` varchar(2) DEFAULT NULL,
  `x_cavv_response` varchar(2) DEFAULT NULL,
  `x_test_request` varchar(20) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_authorize_settings`
--

DROP TABLE IF EXISTS `oxy_authorize_settings`;

CREATE TABLE `oxy_authorize_settings` (
  `authorize_login` varchar(20) DEFAULT NULL,
  `authorize_tkey` varchar(30) DEFAULT NULL,
  `authorize_secret` varchar(30) DEFAULT NULL,
  `authorize_pay_title` varchar(128) DEFAULT NULL,
  `authorize_demo` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_authorize_settings`
--

LOCK TABLES `oxy_authorize_settings` WRITE;
INSERT INTO `oxy_authorize_settings` VALUES ('','','','Classifieds Payment',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_badwords`
--

DROP TABLE IF EXISTS `oxy_badwords`;

CREATE TABLE `oxy_badwords` (
  `word` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_banners`
--

DROP TABLE IF EXISTS `oxy_banners`;

CREATE TABLE `oxy_banners` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `filename` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `code` text,
  `position` varchar(30) DEFAULT NULL,
  `sections` varchar(250) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `max_impressions` int(11) NOT NULL DEFAULT '0',
  `max_clicks` int(11) NOT NULL DEFAULT '0',
  `impressions` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `categories` varchar(250) DEFAULT NULL,
  `open_new` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_position` (`position`),
  KEY `idx_date_start` (`date_start`),
  KEY `idx_date_end` (`date_end`),
  KEY `idx_max_impressions` (`max_impressions`),
  KEY `idx_max_clicks` (`max_clicks`),
  KEY `idx_impressions` (`impressions`),
  KEY `idx_clicks` (`clicks`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_banners_positions`
--

DROP TABLE IF EXISTS `oxy_banners_positions`;

CREATE TABLE `oxy_banners_positions` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `specific_section` tinyint(1) DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `no_banners` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_banners_positions`
--

LOCK TABLES `oxy_banners_positions` WRITE;
INSERT INTO `oxy_banners_positions` VALUES (1,'header',0,1,1),(2,'footer',0,1,1),(3,'left',0,1,1),(4,'right',0,1,1),(5,'details1',1,1,1),(6,'details2',1,1,1),(7,'details3',1,0,1),(8,'details4',1,0,1),(9,'firstpage1',1,1,1),(10,'firstpage2',1,1,1),(11,'firstpage3',1,1,1),(12,'firstpage4',1,1,1),(13,'listings1',1,1,1),(14,'listings2',1,1,1),(15,'listings3',1,1,1),(16,'listings4',1,1,1),(17,'footer-mobile',0,1,1),(18,'background',0,1,1),(19,'header-mobile',0,1,1),(20,'top',0,0,1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_bids`
--

DROP TABLE IF EXISTS `oxy_bids`;

CREATE TABLE `oxy_bids` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bid` double NOT NULL,
  `date` datetime NOT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_blocked_emails`
--

DROP TABLE IF EXISTS `oxy_blocked_emails`;

CREATE TABLE `oxy_blocked_emails` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_blocked_ips`
--

DROP TABLE IF EXISTS `oxy_blocked_ips`;

CREATE TABLE `oxy_blocked_ips` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `date_expires` datetime DEFAULT NULL,
  `blocked_for` int(2) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_blocked_phones`
--

DROP TABLE IF EXISTS `oxy_blocked_phones`;

CREATE TABLE `oxy_blocked_phones` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `phone` varchar(64) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_btcpay_return`
--

DROP TABLE IF EXISTS `oxy_btcpay_return`;

CREATE TABLE `oxy_btcpay_return` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(128) NOT NULL,
  `ipn` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_btcpay_settings`
--

DROP TABLE IF EXISTS `oxy_btcpay_settings`;

CREATE TABLE `oxy_btcpay_settings` (
  `currency` varchar(3) NOT NULL,
  `server` varchar(512) NOT NULL,
  `testserver` varchar(512) NOT NULL,
  `path` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `testmode` enum('0','1') NOT NULL DEFAULT '0',
  `testtoken` varchar(128) NOT NULL,
  `approvewhen` enum('paid','confirmed','complete') NOT NULL DEFAULT 'paid',
  `phone_field` varchar(30) DEFAULT NULL,
  `address_field` varchar(30) DEFAULT NULL,
  `nologin_phone_field` varchar(30) DEFAULT NULL,
  `nologin_address_field` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_btcpay_settings`
--

LOCK TABLES `oxy_btcpay_settings` WRITE;
INSERT INTO `oxy_btcpay_settings` VALUES ('EUR','https://bitpay.com/','https://test.bitpay.com/','$config_abs_path','','0','','paid','phone','address','mgm_phone','');
UNLOCK TABLES;

--
-- Table structure for table `oxy_bulksms`
--

DROP TABLE IF EXISTS `oxy_bulksms`;

CREATE TABLE `oxy_bulksms` (
  `bulksms_username` varchar(50) DEFAULT NULL,
  `bulksms_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_bulksms`
--

LOCK TABLES `oxy_bulksms` WRITE;
INSERT INTO `oxy_bulksms` VALUES ('',NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_bulksms_log`
--

DROP TABLE IF EXISTS `oxy_bulksms_log`;

CREATE TABLE `oxy_bulksms_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `api_batch_id` varchar(50) DEFAULT NULL,
  `api_message` varchar(50) DEFAULT NULL,
  `api_status_code` varchar(20) DEFAULT NULL,
  `http_status_code` varchar(4) DEFAULT NULL,
  `details` text,
  `transient_error` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_categories`
--

DROP TABLE IF EXISTS `oxy_categories`;

CREATE TABLE `oxy_categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `picture` varchar(64) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `fieldset` int(2) DEFAULT NULL,
  `order_no` int(5) DEFAULT NULL,
  `groups` varchar(250) NOT NULL DEFAULT '0',
  `ads` int(10) NOT NULL DEFAULT '0',
  `level` int(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_order` (`order_no`),
  KEY `idx_parent` (`parent_id`),
  KEY `idx_fieldset` (`fieldset`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_categories`
--

LOCK TABLES `oxy_categories` WRITE;
INSERT INTO `oxy_categories` VALUES (4,'trucks.png',NULL,0,7,1,'0',2,1,1),(5,'rvs.png',NULL,0,3,7,'0',0,1,0),(7,'HeavyDuty.jpg','',0,7,8,'0',6,1,1),(8,'','',4,9,2,'0',0,2,1),(9,'','',4,10,3,'0',0,2,1),(10,'','',4,11,4,'0',0,2,1),(11,'','',4,12,5,'0',0,2,1),(12,'','',4,13,6,'0',0,2,1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_categories_lang`
--

DROP TABLE IF EXISTS `oxy_categories_lang`;

CREATE TABLE `oxy_categories_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) DEFAULT NULL,
  `description` text,
  `page_title` varchar(250) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_categories_lang`
--

LOCK TABLES `oxy_categories_lang` WRITE;
INSERT INTO `oxy_categories_lang` VALUES (4,'eng','Trucks','Trucks, Commercial & Utility Vehicles','Trucks, Commercial & Utility Vehicles for Sale','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'eng','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(4,'esp','Trucks, Vans & SUVs','Search or find','Trucks, Vans & SUVs for Sale','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'esp','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(4,'french','Trucks, Vans & SUVs','Search or find','Trucks, Vans & SUVs for Sale','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'french','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(4,'italian','Trucks, Vans & SUVs','Search or find','Trucks, Vans & SUVs for Sale','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'italian','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(4,'dutch','Trucks, Vans & SUVs','Search or find','Trucks, Vans & SUVs for Sale','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'dutch','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(4,'german','Lkw','Lkw & Nutzfahrzeuge','Lkw & Nutzfahrzeuge zum Verkauf.','trucks,vans,suv\'s,used trucks,used vans,used pickup trucks,4x4 trucks,used suvs,cheap trucks,trucks for sale,pickup trucks,commercial trucks,cargo vans,cheap vans,suv vans','Browse listings of Trucks, Vans and SUVs or post your ad with photos.'),(5,'german','RVs','New or used RVs','RVs for sale','rvs,rv\'s,used rvs,rvs for sale,small rvs,rv camper,rv trailer,rvs for sale by owner,rv dealers,rv travel trailers,trailer rvs,rvs sales','Used RVs, travel trailers and motorhomes classifieds. Buy and sell new or used recreational vehicles.'),(7,'eng','Construction Machinery','Heavy-duty vehicles','Construction Machinery','Construction Machinery','Heavy-duty vehicles, specially designed for executing construction tasks.'),(7,'german','Baumaschinen','Schwerlastfahrzeuge','Baumaschinen','Baumaschinen','Schwerlastfahrzeuge, speziell entwickelt für die Ausführung von Bauaufgaben.'),(8,'eng','Trucks up to 7.5 t','Trucks up to 7.5 t','Trucks up to 7.5 t','Trucks up to 7.5 t','Trucks up to 7.5 t'),(8,'german','Lkw bis 7,5 t','Lkw bis 7,5 t','Lkw bis 7,5 t','Lkw bis 7,5 t','Lkw bis 7,5 t'),(9,'eng','Trucks over 7.5 t','Trucks over 7.5 t','Trucks over 7.5 t','Trucks over 7.5 t','Trucks over 7.5 t'),(9,'german','Lkw über 7,5 t','Lkw über 7,5 t','Lkw über 7,5 t','Lkw über 7,5 t','Lkw über 7,5 t'),(10,'eng','Semi-trailer truck','Semi-trailer truck','Semi-trailer truck','Semi-trailer truck','Semi-trailer truck'),(10,'german','Sattelzugmaschinen','Sattelzugmaschinen','Sattelzugmaschinen','Sattelzugmaschinen','Sattelzugmaschinen'),(11,'eng','Trailers','Trailers','Trailers','Trailers','Trailers'),(11,'german','Anhänger','Anhänger','Anhänger','Anhänger','Anhänger'),(12,'eng','Semi-Trailers','Semi-Trailers','Semi-Trailers','Semi-Trailers','Semi-Trailers'),(12,'german','Auflieger','Auflieger','Auflieger','Auflieger','Auflieger');
UNLOCK TABLES;

--
-- Table structure for table `oxy_categories_no_ads`
--

DROP TABLE IF EXISTS `oxy_categories_no_ads`;

CREATE TABLE `oxy_categories_no_ads` (
  `category_id` int(4) NOT NULL,
  `field` varchar(40) NOT NULL,
  `val` varchar(64) NOT NULL,
  `no` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_ccbill_return`
--

DROP TABLE IF EXISTS `oxy_ccbill_return`;

CREATE TABLE `oxy_ccbill_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `accountingAmount` float DEFAULT NULL,
  `address1` varchar(30) DEFAULT NULL,
  `affiliate` varchar(30) DEFAULT NULL,
  `affiliate_id` varchar(30) DEFAULT NULL,
  `affiliate_system` int(3) DEFAULT NULL,
  `allowedTypes` text,
  `baseCurrency` int(3) DEFAULT NULL,
  `cardType` varchar(20) DEFAULT NULL,
  `ccbill_referer` varchar(20) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `clientAccnum` varchar(20) DEFAULT NULL,
  `clientDrivenSettlement` tinyint(1) DEFAULT NULL,
  `clientSubacc` varchar(4) DEFAULT NULL,
  `consumerUniqueId` varchar(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `currencyCode` int(3) DEFAULT NULL,
  `customer_fname` varchar(20) DEFAULT NULL,
  `customer_lname` varchar(30) DEFAULT NULL,
  `denialId` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `formName` varchar(255) DEFAULT NULL,
  `initialFormattedPrice` varchar(30) DEFAULT NULL,
  `initialPeriod` int(4) DEFAULT NULL,
  `initialPrice` float DEFAULT NULL,
  `ip_address` varchar(39) DEFAULT NULL,
  `lifeTimeSubscription` tinyint(1) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `paymentAccount` varchar(32) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `productDesc` varchar(50) DEFAULT NULL,
  `reasonForDecline` text,
  `reasonForDeclineBeforeOverride` text,
  `reasonForDeclineCode` int(3) DEFAULT NULL,
  `reasonForDeclineCodeBeforeOverride` int(3) DEFAULT NULL,
  `rebills` tinyint(2) DEFAULT NULL,
  `recurringFormattedPrice` varchar(30) DEFAULT NULL,
  `recurringPeriod` int(4) DEFAULT NULL,
  `recurringPrice` float DEFAULT NULL,
  `referer` varchar(16) DEFAULT NULL,
  `referringUrl` text,
  `reservationId` varchar(20) DEFAULT NULL,
  `responseDigest` varchar(32) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `subscription_id` varchar(20) DEFAULT NULL,
  `typeId` varchar(10) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_ccbill_settings`
--

DROP TABLE IF EXISTS `oxy_ccbill_settings`;

CREATE TABLE `oxy_ccbill_settings` (
  `account_no` varchar(6) DEFAULT NULL,
  `subaccount_no` varchar(4) DEFAULT NULL,
  `form_name` varchar(30) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ccbill_settings`
--

LOCK TABLES `oxy_ccbill_settings` WRITE;
INSERT INTO `oxy_ccbill_settings` VALUES (NULL,NULL,NULL,'840',NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_cinetpay_return`
--

DROP TABLE IF EXISTS `oxy_cinetpay_return`;

CREATE TABLE `oxy_cinetpay_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  `signature` varchar(50) DEFAULT NULL,
  `cpm_amount` double DEFAULT NULL,
  `cpm_currency` varchar(3) DEFAULT NULL,
  `cpm_payid` varchar(40) DEFAULT NULL,
  `cpm_version` varchar(10) DEFAULT NULL,
  `cpm_payment_date` varchar(40) DEFAULT NULL,
  `cpm_payment_time` varchar(40) DEFAULT NULL,
  `cpm_error_message` varchar(20) DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `cpm_cel_phone_num` varchar(30) DEFAULT NULL,
  `cpm_cell_phone_prefixe` varchar(10) DEFAULT NULL,
  `cpm_ipn_ack` varchar(3) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `cpm_result` varchar(10) DEFAULT NULL,
  `cpm_trans_status` varchar(20) DEFAULT NULL,
  `cpm_designation` varchar(30) DEFAULT NULL,
  `buyer_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_cinetpay_settings`
--

DROP TABLE IF EXISTS `oxy_cinetpay_settings`;

CREATE TABLE `oxy_cinetpay_settings` (
  `cinetpay_siteId` varchar(128) DEFAULT NULL,
  `cinetpay_apikey` varchar(50) DEFAULT NULL,
  `cinetpay_currency` varchar(3) DEFAULT NULL,
  `cinetpay_description` varchar(200) DEFAULT NULL,
  `cinetpay_test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_cinetpay_settings`
--

LOCK TABLES `oxy_cinetpay_settings` WRITE;
INSERT INTO `oxy_cinetpay_settings` VALUES (NULL,NULL,'CFA',NULL,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_clickatell`
--

DROP TABLE IF EXISTS `oxy_clickatell`;

CREATE TABLE `oxy_clickatell` (
  `clickatell_username` varchar(50) DEFAULT NULL,
  `clickatell_password` varchar(50) DEFAULT NULL,
  `clickatell_api_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_clickatell`
--

LOCK TABLES `oxy_clickatell` WRITE;
INSERT INTO `oxy_clickatell` VALUES ('',NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_clickatell_log`
--

DROP TABLE IF EXISTS `oxy_clickatell_log`;

CREATE TABLE `oxy_clickatell_log` (
  `object_id` int(8) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `message_id` varchar(30) DEFAULT NULL,
  `error_code` varchar(10) DEFAULT NULL,
  `error_string` varchar(200) DEFAULT NULL,
  `details` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_countries`
--

DROP TABLE IF EXISTS `oxy_countries`;

CREATE TABLE `oxy_countries` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT '',
  `lang_id` varchar(20) DEFAULT 'eng',
  `set_id` int(3) DEFAULT '0',
  KEY `id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_set_id` (`set_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_countries`
--

LOCK TABLES `oxy_countries` WRITE;
INSERT INTO `oxy_countries` VALUES (1,'USA','eng',0),(2,'Canada','eng',0),(3,'UK','eng',0),(4,'Spain','eng',0),(5,'France','eng',0),(6,'Germany','eng',0),(7,'Austria','eng',0),(1,'USA','esp',0),(2,'Canada','esp',0),(3,'UK','esp',0),(4,'Spain','esp',0),(5,'France','esp',0),(6,'Germany','esp',0),(7,'Austria','esp',0),(1,'USA','french',0),(2,'Canada','french',0),(3,'UK','french',0),(4,'Spain','french',0),(5,'France','french',0),(6,'Germany','french',0),(7,'Austria','french',0),(1,'USA','italian',0),(2,'Canada','italian',0),(3,'UK','italian',0),(4,'Spain','italian',0),(5,'France','italian',0),(6,'Germany','italian',0),(7,'Austria','italian',0),(1,'USA','dutch',0),(2,'Canada','dutch',0),(3,'UK','dutch',0),(4,'Spain','dutch',0),(5,'France','dutch',0),(6,'Germany','dutch',0),(7,'Austria','dutch',0),(1,'USA','german',0),(2,'Canada','german',0),(3,'UK','german',0),(4,'Spain','german',0),(5,'France','german',0),(6,'Germany','german',0),(7,'Austria','german',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_coupons`
--

DROP TABLE IF EXISTS `oxy_coupons`;

CREATE TABLE `oxy_coupons` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) DEFAULT '',
  `type` varchar(20) DEFAULT 'fixed',
  `discount` double DEFAULT NULL,
  `ads` tinyint(1) DEFAULT '1',
  `store` tinyint(1) DEFAULT '1',
  `groups` varchar(30) DEFAULT '0',
  `allow` int(3) DEFAULT '0',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_coupons`
--

LOCK TABLES `oxy_coupons` WRITE;
INSERT INTO `oxy_coupons` VALUES (1,'DISCO','fixed',30,1,1,'-1',0,'2021-06-30 00:00:00','2025-05-31 00:00:00');
UNLOCK TABLES;

--
-- Table structure for table `oxy_credits_packages`
--

DROP TABLE IF EXISTS `oxy_credits_packages`;

CREATE TABLE `oxy_credits_packages` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `no_credits` double NOT NULL,
  `price` double DEFAULT NULL,
  `groups` varchar(250) DEFAULT '0',
  `order_no` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_credits_packages_lang`
--

DROP TABLE IF EXISTS `oxy_credits_packages_lang`;

CREATE TABLE `oxy_credits_packages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_credits_return`
--

DROP TABLE IF EXISTS `oxy_credits_return`;

CREATE TABLE `oxy_credits_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_credits_settings`
--

DROP TABLE IF EXISTS `oxy_credits_settings`;

CREATE TABLE `oxy_credits_settings` (
  `unit` double DEFAULT NULL,
  `groups` varchar(250) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_credits_settings`
--

LOCK TABLES `oxy_credits_settings` WRITE;
INSERT INTO `oxy_credits_settings` VALUES (1,'0');
UNLOCK TABLES;

--
-- Table structure for table `oxy_currencies`
--

DROP TABLE IF EXISTS `oxy_currencies`;

CREATE TABLE `oxy_currencies` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `currency` varchar(16) DEFAULT NULL,
  `order_no` int(4) DEFAULT '1000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_currencies`
--

LOCK TABLES `oxy_currencies` WRITE;
INSERT INTO `oxy_currencies` VALUES (2,'€',3);
UNLOCK TABLES;

--
-- Table structure for table `oxy_custom_pages`
--

DROP TABLE IF EXISTS `oxy_custom_pages`;

CREATE TABLE `oxy_custom_pages` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `hreflink` varchar(200) DEFAULT NULL,
  `navlink` tinyint(1) DEFAULT '1',
  `blank` tinyint(1) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `read_only` tinyint(1) DEFAULT '0',
  `order_no` int(5) DEFAULT NULL,
  `groups` varchar(250) NOT NULL DEFAULT '0',
  `noindex` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_active` (`active`),
  KEY `idx_type` (`type`),
  KEY `idx_order_no` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_custom_pages`
--

LOCK TABLES `oxy_custom_pages` WRITE;
INSERT INTO `oxy_custom_pages` VALUES (1,NULL,1,'',0,0,0,1,1,1,'0',0),(2,NULL,1,'',2,0,0,0,1,2,'0',0),(3,NULL,1,'',0,0,0,1,1,3,'0',0),(4,'eu_cookie',1,NULL,0,0,0,1,1,0,'0',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_custom_pages_lang`
--

DROP TABLE IF EXISTS `oxy_custom_pages_lang`;

CREATE TABLE `oxy_custom_pages_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `title` varchar(128) DEFAULT NULL,
  `content` text,
  `page_title` varchar(200) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  KEY `idx_id` (`id`),
  KEY `idx_lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_custom_pages_lang`
--

LOCK TABLES `oxy_custom_pages_lang` WRITE;
INSERT INTO `oxy_custom_pages_lang` VALUES (1,'eng','First Page Content','','','',''),(2,'eng','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'eng','Bulk uploads help','','','',''),(1,'esp','First Page Content','','','',''),(2,'esp','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'esp','Bulk uploads help','','','',''),(1,'french','First Page Content','','','',''),(2,'french','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'french','Bulk uploads help','','','',''),(1,'italian','First Page Content','','','',''),(2,'italian','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'italian','Bulk uploads help','','','',''),(1,'dutch','First Page Content','','','',''),(2,'dutch','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'dutch','Bulk uploads help','','','',''),(1,'german','First Page Content','','','',''),(2,'german','Affiliates','<p>Our affiliate program is a web-based program that compensates partner sites (&quot;affiliates&quot;) for generating sales.</p>\n\n<p>As an affiliate, you refer our site to other possible clients, and in return you receive a percentage of the revenue from the sale.<br />\nBecoming an Affiliate is easy and profitable. All you need to do is register on our site as an affiliate. You will receive an affiliate link which you can use to refer our site. The affiliate link contains an unique affiliate id which will be used to trace back to you the sales you generate.</p>\n\n<p>In order to get paid you will need to provide a PayPal account with your affiliate account. You can always login using your affiliate account and check your revenues and payments.</p>\n\n<p>Benefits include:</p>\n\n<ul>\n<li>X day cookie length</li>\n<li>Earn X% of each sale sale</li>\n<li>Free to join</li>\n</ul>\n\n<p>Join now for free as an affiliate for our site!</p>\n<div class=\"mt4 lfloat buttonwrapper space5\"><div class=\"button1-left\"><a href=\"register.php?group=2\"><span class=\"button1-right\">Register as an affiliate!</span></a></div></div><br/><br/>\n\n','Affiliates','',''),(3,'german','Bulk uploads help','','','',''),(4,'eng','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL),(4,'esp','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL),(4,'french','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL),(4,'italian','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL),(4,'dutch','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL),(4,'german','Cookies policy','<p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p><br/>\n<br/>\n<h3>What are cookies?</h3><br/>\n<br/>\n<p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p><br/>\n<br/>\n<h3>How do we use cookies?</h3><br/>\n<br/>\n<p>Our site uses cookies mainly to remember preferences you have about the site display:</p><br/>\n<br/>\n<ul>\n<li>default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.</li>\n<li>authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.</li>\n<li>the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.</li>\n<li>the list of listings you add to Listings Compare list</li>\n	<li>the preference to show search page listings in list or gallery mode</li>\n<li><span style=\'color:#FF0000\'>******** Delete below if not applicable to your site **********</span></li>\n<li>the choice you made about viewing the adult categories listings</li>\n<li>the affiliate which brought you to our site.</li>\n</ul><br/>\n<br/>\n<p>How to control cookies</p><br/>\n<br/>\n<p>You can <strong>control and/or delete</strong> cookies as you wish - for details, see <u><a href=\'http://www.aboutcookies.org/\'>aboutcookies.org</a></u>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p><br/>\n<br/>\n',NULL,NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_db_backup`
--

DROP TABLE IF EXISTS `oxy_db_backup`;

CREATE TABLE `oxy_db_backup` (
  `enabled` tinyint(1) DEFAULT '0',
  `backup_compress` varchar(10) DEFAULT '0',
  `backup_freq` varchar(30) DEFAULT NULL,
  `keep` int(2) DEFAULT NULL,
  `generated_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_db_backup`
--

LOCK TABLES `oxy_db_backup` WRITE;
INSERT INTO `oxy_db_backup` VALUES (0,'0','weekly',5,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_default_images`
--

DROP TABLE IF EXISTS `oxy_default_images`;

CREATE TABLE `oxy_default_images` (
  `category_id` int(3) NOT NULL,
  `thmb` varchar(50) NOT NULL,
  `big_thmb` varchar(50) NOT NULL,
  `thmb_mobile` varchar(50) NOT NULL,
  `big_thmb_mobile` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_depending_fields`
--

DROP TABLE IF EXISTS `oxy_depending_fields`;

CREATE TABLE `oxy_depending_fields` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `no` int(1) DEFAULT '2',
  `caption1` varchar(64) DEFAULT NULL,
  `caption2` varchar(64) DEFAULT NULL,
  `caption3` varchar(64) DEFAULT NULL,
  `caption4` varchar(64) DEFAULT NULL,
  `caption5` varchar(64) DEFAULT NULL,
  `table1` varchar(64) DEFAULT NULL,
  `table2` varchar(64) DEFAULT NULL,
  `table3` varchar(64) DEFAULT NULL,
  `table4` varchar(64) DEFAULT NULL,
  `table5` varchar(64) DEFAULT NULL,
  `required1` tinyint(1) DEFAULT NULL,
  `required2` tinyint(1) DEFAULT NULL,
  `required3` tinyint(1) DEFAULT NULL,
  `required4` tinyint(1) DEFAULT NULL,
  `required5` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_depending_fields`
--

LOCK TABLES `oxy_depending_fields` WRITE;
INSERT INTO `oxy_depending_fields` VALUES (1,2,'country','region','','',NULL,'countries','regions','','',NULL,0,0,0,0,NULL),(2,2,'make','model',NULL,NULL,NULL,'makes_dep','models_dep',NULL,NULL,NULL,1,1,NULL,NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_depending_fields_lang`
--

DROP TABLE IF EXISTS `oxy_depending_fields_lang`;

CREATE TABLE `oxy_depending_fields_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name1` varchar(64) DEFAULT NULL,
  `name2` varchar(64) DEFAULT NULL,
  `name3` varchar(64) DEFAULT NULL,
  `name4` varchar(64) DEFAULT NULL,
  `name5` varchar(64) DEFAULT NULL,
  `top_str1` varchar(64) DEFAULT NULL,
  `top_str2` varchar(64) DEFAULT NULL,
  `top_str3` varchar(64) DEFAULT NULL,
  `top_str4` varchar(64) DEFAULT NULL,
  `top_str5` varchar(64) DEFAULT NULL,
  `error_message1` text,
  `error_message2` text,
  `error_message3` text,
  `error_message4` text,
  `error_message5` text,
  KEY `idx_lang` (`lang_id`),
  KEY `idx_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_depending_fields_lang`
--

LOCK TABLES `oxy_depending_fields_lang` WRITE;
INSERT INTO `oxy_depending_fields_lang` VALUES (1,'eng','Country','Region',NULL,NULL,NULL,'Select Country','Select Region',NULL,NULL,NULL,'','',NULL,NULL,NULL),(2,'eng','Make','Model',NULL,NULL,NULL,'Select Make','Select Model',NULL,NULL,NULL,'Please choose a make!','Please choose a model!',NULL,NULL,NULL),(1,'esp','Country','Region','','','','Select Country','Select Region','','','','','','','',''),(2,'esp','Make','Model','','','','Select Make','Select Model','','','','Please choose a make!','Please choose a model!','','',''),(1,'french','Country','Region','','','','Select Country','Select Region','','','','','','','',''),(2,'french','Make','Model','','','','Select Make','Select Model','','','','Please choose a make!','Please choose a model!','','',''),(1,'italian','Country','Region','','','','Select Country','Select Region','','','','','','','',''),(2,'italian','Make','Model','','','','Select Make','Select Model','','','','Please choose a make!','Please choose a model!','','',''),(1,'dutch','Country','Region','','','','Select Country','Select Region','','','','','','','',''),(2,'dutch','Make','Model','','','','Select Make','Select Model','','','','Please choose a make!','Please choose a model!','','',''),(1,'german','Country','Region','','','','Select Country','Select Region','','','','','','','',''),(2,'german','Make','Model','','','','Select Make','Select Model','','','','Please choose a make!','Please choose a model!','','','');
UNLOCK TABLES;

--
-- Table structure for table `oxy_discounts`
--

DROP TABLE IF EXISTS `oxy_discounts`;

CREATE TABLE `oxy_discounts` (
  `object_id` int(2) NOT NULL,
  `type` varchar(10) DEFAULT 'ad',
  `code` varchar(40) DEFAULT '',
  `user_id` int(10) DEFAULT NULL,
  KEY `idx_user_id` (`user_id`),
  KEY `idx_code` (`code`),
  KEY `idx_type` (`type`),
  KEY `idx_object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_ebanx_return`
--

DROP TABLE IF EXISTS `oxy_ebanx_return`;

CREATE TABLE `oxy_ebanx_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  `merchant_payment_code` varchar(50) DEFAULT NULL,
  `pstatus` varchar(10) DEFAULT NULL,
  `status_date` varchar(30) DEFAULT NULL,
  `open_date` varchar(30) DEFAULT NULL,
  `confirm_date` varchar(30) DEFAULT NULL,
  `amount_br` float DEFAULT NULL,
  `amount_ext` float DEFAULT NULL,
  `amount_iof` float DEFAULT NULL,
  `currency_rate` float DEFAULT NULL,
  `currency_ext` varchar(3) DEFAULT NULL,
  `due_date` varchar(30) DEFAULT NULL,
  `installments` int(3) DEFAULT NULL,
  `payment_type_code` varchar(20) DEFAULT NULL,
  `acquirer` varchar(50) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `authcode` varchar(20) DEFAULT NULL,
  `pre_approved` varchar(10) DEFAULT NULL,
  `capture_available` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_ebanx_settings`
--

DROP TABLE IF EXISTS `oxy_ebanx_settings`;

CREATE TABLE `oxy_ebanx_settings` (
  `integration_key` varchar(100) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `name_field` varchar(30) DEFAULT NULL,
  `email_field` varchar(30) DEFAULT NULL,
  `nologin_name_field` varchar(30) DEFAULT NULL,
  `nologin_email_field` varchar(30) DEFAULT NULL,
  `test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ebanx_settings`
--

LOCK TABLES `oxy_ebanx_settings` WRITE;
INSERT INTO `oxy_ebanx_settings` VALUES (NULL,'COP','co',NULL,NULL,NULL,NULL,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_email_alerts`
--

DROP TABLE IF EXISTS `oxy_email_alerts`;

CREATE TABLE `oxy_email_alerts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `search` text,
  `frequency` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `last_check` datetime DEFAULT NULL,
  `key` varchar(200) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `idx_user_id` (`user_id`),
  KEY `email` (`email`),
  KEY `idx_last_check` (`last_check`),
  KEY `idx_active` (`active`),
  KEY `ip` (`ip`),
  KEY `frequency` (`frequency`),
  KEY `date_2` (`date`,`frequency`),
  KEY `active_2` (`active`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_epay_return`
--

DROP TABLE IF EXISTS `oxy_epay_return`;

CREATE TABLE `oxy_epay_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `tid` int(20) DEFAULT NULL,
  `orderid` varchar(50) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `cur` int(3) DEFAULT NULL,
  `eKey` varchar(50) DEFAULT NULL,
  `fraud` int(1) DEFAULT NULL,
  `transfee` int(10) DEFAULT NULL,
  `HTTP_COOKIE` varchar(50) DEFAULT NULL,
  `subscriptionid` int(30) DEFAULT NULL,
  `cardid` int(50) DEFAULT NULL,
  `entirepost` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_epay_settings`
--

DROP TABLE IF EXISTS `oxy_epay_settings`;

CREATE TABLE `oxy_epay_settings` (
  `epay_merchantnumber` int(20) DEFAULT NULL,
  `epay_language` int(2) DEFAULT '1',
  `epay_currency` int(4) DEFAULT '208',
  `epay_md5key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_epay_settings`
--

LOCK TABLES `oxy_epay_settings` WRITE;
INSERT INTO `oxy_epay_settings` VALUES (0,1,208,'');
UNLOCK TABLES;

--
-- Table structure for table `oxy_euplatesc_return`
--

DROP TABLE IF EXISTS `oxy_euplatesc_return`;

CREATE TABLE `oxy_euplatesc_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `curr` varchar(10) DEFAULT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `ep_id` varchar(100) DEFAULT NULL,
  `merch_id` varchar(20) DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `approval` varchar(50) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `nonce` varchar(60) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `oxy_euplatesc_settings`
--

DROP TABLE IF EXISTS `oxy_euplatesc_settings`;

CREATE TABLE `oxy_euplatesc_settings` (
  `merchant_id` varchar(50) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_euplatesc_settings`
--

LOCK TABLES `oxy_euplatesc_settings` WRITE;
INSERT INTO `oxy_euplatesc_settings` VALUES (NULL,NULL,NULL,'Classifieds ad');
UNLOCK TABLES;

--
-- Table structure for table `oxy_ev_settings`
--

DROP TABLE IF EXISTS `oxy_ev_settings`;

CREATE TABLE `oxy_ev_settings` (
  `no` int(2) DEFAULT '10'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ev_settings`
--

LOCK TABLES `oxy_ev_settings` WRITE;
INSERT INTO `oxy_ev_settings` VALUES (20);
UNLOCK TABLES;

--
-- Table structure for table `oxy_experttexting`
--

DROP TABLE IF EXISTS `oxy_experttexting`;

CREATE TABLE `oxy_experttexting` (
  `experttexting_username` varchar(50) DEFAULT NULL,
  `experttexting_password` varchar(50) DEFAULT NULL,
  `experttexting_api_key` varchar(30) DEFAULT NULL,
  `experttexting_from` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_experttexting`
--

LOCK TABLES `oxy_experttexting` WRITE;
INSERT INTO `oxy_experttexting` VALUES ('',NULL,NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_experttexting_log`
--

DROP TABLE IF EXISTS `oxy_experttexting_log`;

CREATE TABLE `oxy_experttexting_log` (
  `success` int(1) DEFAULT '1',
  `status` int(1) DEFAULT '0',
  `message_id` varchar(30) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `error_message` varchar(200) DEFAULT NULL,
  `details` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_failed_attempts`
--

DROP TABLE IF EXISTS `oxy_failed_attempts`;

CREATE TABLE `oxy_failed_attempts` (
  `is_admin` tinyint(1) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_favourites`
--

DROP TABLE IF EXISTS `oxy_favourites`;

CREATE TABLE `oxy_favourites` (
  `ad_id` int(10) NOT NULL,
  `user_id` int(4) NOT NULL,
  KEY `idx_ad_id` (`ad_id`),
  KEY `idx_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_favourites`
--

LOCK TABLES `oxy_favourites` WRITE;
INSERT INTO `oxy_favourites` VALUES (1,1),(2,1),(3,1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_featured_plans`
--

DROP TABLE IF EXISTS `oxy_featured_plans`;

CREATE TABLE `oxy_featured_plans` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `amount` float DEFAULT '0',
  `no_days` int(4) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_featured_plans`
--

LOCK TABLES `oxy_featured_plans` WRITE;
INSERT INTO `oxy_featured_plans` VALUES (1,5,0,1),(2,10,0,2);
UNLOCK TABLES;

--
-- Table structure for table `oxy_fields`
--

DROP TABLE IF EXISTS `oxy_fields`;

CREATE TABLE `oxy_fields` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fieldset` varchar(200) DEFAULT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT 'textbox',
  `order_no` int(2) DEFAULT NULL,
  `is_numeric` tinyint(1) DEFAULT '0',
  `validation_type` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT '20',
  `min` int(10) DEFAULT '0',
  `max` int(10) DEFAULT '0',
  `required` tinyint(1) DEFAULT '0',
  `editable` tinyint(1) DEFAULT '1',
  `advanced_search` tinyint(1) DEFAULT '0',
  `quick_search` tinyint(1) DEFAULT '0',
  `search_type` tinyint(1) DEFAULT '1',
  `max_uploaded_size` double DEFAULT '0',
  `extensions` varchar(100) DEFAULT NULL,
  `image_resize` varchar(20) DEFAULT NULL,
  `dep_id` int(4) DEFAULT '0',
  `other_val` tinyint(1) DEFAULT '0',
  `all_val` tinyint(1) DEFAULT '0',
  `read_only` tinyint(1) DEFAULT '0',
  `unique` tinyint(1) DEFAULT '0',
  `ext1` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `groups` varchar(100) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_active` (`active`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_fields`
--

LOCK TABLES `oxy_fields` WRITE;
INSERT INTO `oxy_fields` VALUES (1,'0','price','price',24,1,'price','7',0,0,0,1,1,0,2,0,'2|.|,','',0,0,0,1,0,0,1,'0'),(2,'0','country_region','depending',25,0,'','',0,0,0,1,1,0,1,0,'','',1,0,0,0,0,0,1,'0'),(3,'0','city','textbox',26,0,'','20',0,0,0,1,1,0,0,0,'','',0,0,0,0,0,0,1,'0'),(4,'0','zip','textbox',27,0,'','20',0,0,0,1,1,0,0,0,'','',0,0,0,0,0,0,1,'0'),(5,'1','makes_models','depending',2,0,'','',0,0,1,1,1,1,0,0,'','',2,1,0,0,0,0,1,'0'),(6,'2','motorcycle_make','menu',3,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(7,'3','make_rvs','menu',6,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(8,'4','make1','textbox',8,0,'','',0,0,0,1,1,0,1,0,'','',0,0,0,0,0,0,1,'0'),(9,'2,3','model1','textbox',9,0,'','',0,0,0,1,1,0,1,0,'','',0,0,0,0,0,0,1,'0'),(10,'1','bodystyle','menu',10,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(11,'1,2,3','year','textbox',11,0,'/^[0-9]+$/','7',0,0,0,1,1,0,2,0,'','',0,0,0,0,0,0,1,'0'),(12,'1,2,3','mileage','textbox',12,0,'/^[0-9]+$/','7',0,0,0,1,1,0,2,0,'','',0,0,0,0,0,0,1,'0'),(13,'1,2','transmission','menu',13,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(14,'1,2,3','fuel','menu',14,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(15,'1','doors','menu',15,1,'','',0,0,0,1,1,0,1,0,'','',0,0,0,0,0,0,1,'0'),(16,'1,2,3','color','menu',16,0,'','',0,0,0,1,1,0,3,0,'','',0,1,0,0,0,0,1,'0'),(17,'1,2','engine_size','textbox',17,1,'','7',0,0,0,1,1,0,2,0,'','',0,0,0,0,0,0,1,'0'),(18,'1','horsepower','textbox',18,0,'/^[0-9]+$/','7',0,0,0,1,1,0,2,0,'','',0,0,0,0,0,0,1,'0'),(19,'1,2,3','condition_vehicles','menu',19,0,'','',0,0,0,1,1,0,1,0,'','',0,1,0,0,0,0,1,'0'),(20,'3','length','textbox',20,1,'','7',0,0,0,1,1,0,2,0,'','',0,0,0,0,0,0,1,'0'),(21,'1','vehicle_features','checkbox_group',21,0,'','',0,0,0,1,0,0,0,0,'','',0,0,0,0,0,0,1,'0'),(22,'3','rv_features','checkbox_group',22,0,'','',0,0,0,1,0,0,0,0,'','',0,0,0,0,0,0,1,'0'),(23,'7','category1','menu',1,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(24,'7','make2','menu',4,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(25,'10,7,11,13,9,12,8','model2','textbox',5,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(26,'10,7,11,13,9,12,8','construction_year','textbox',7,1,'/^(19|20)\\d{2}$/','4',4,4,0,1,0,0,1,0,'0|.|','',0,0,0,0,0,0,1,'0'),(27,'10,7,11,9,8','operating_hours','textbox',23,1,'/^\\d+/','10',1,0,0,1,0,0,1,0,'0|.|','',0,0,0,0,0,0,1,'0'),(29,'9','kategorie','menu',28,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(30,'9','marke','menu',29,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(31,'10','kategorie1','menu',30,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(32,'10','marke1','menu',31,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(33,'11','kategorie2','menu',32,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(34,'11','marke2','menu',33,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(35,'12','kategorie3','menu',34,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(36,'12','marke3','menu',35,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(37,'13','kategorie4','menu',36,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0'),(38,'13','marke4','menu',37,0,'','',0,0,0,1,0,0,1,0,'','',0,0,0,0,0,0,1,'0');
UNLOCK TABLES;

--
-- Table structure for table `oxy_fields_lang`
--

DROP TABLE IF EXISTS `oxy_fields_lang`;

CREATE TABLE `oxy_fields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) DEFAULT NULL,
  `top_str` varchar(128) DEFAULT NULL,
  `error_message` text,
  `error_message2` text,
  `info_message` text,
  `default_val` text,
  `prefix` varchar(64) DEFAULT NULL,
  `postfix` varchar(64) DEFAULT NULL,
  `elements` text,
  `search_elements` text,
  `date_format` varchar(30) DEFAULT NULL,
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_fields_lang`
--

LOCK TABLES `oxy_fields_lang` WRITE;
INSERT INTO `oxy_fields_lang` VALUES (1,'eng','Price','','Invalid price!',NULL,'','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'eng','Country&Region','','',NULL,'','','','','','',''),(3,'eng','City','','',NULL,'','','','','','',''),(4,'eng','Zip','','',NULL,'','','','','','',''),(5,'eng','Makes&Models','','',NULL,'','','','','','',''),(6,'eng','Make','Select Make','',NULL,'','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'eng','Make','','',NULL,'','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'eng','Make','','',NULL,'','','','','','',''),(9,'eng','Model','','',NULL,'','','','','','',''),(10,'eng','Body Style','Select Body Style','',NULL,'','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'eng','Year','','Please enter a numeric value for year!',NULL,'','','','','','',''),(12,'eng','Mileage','','Please enter a numeric value for mileage!',NULL,'','','','Km','','',''),(13,'eng','Transmission','Select Transmission','',NULL,'','','','','Manual|Automatic|Semi-Automatic','',''),(14,'eng','Fuel','Select Fuel Type','',NULL,'','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'eng','Doors','Select Doors Number','',NULL,'','','','','2|3|4|5','',''),(16,'eng','Color','Select Color','',NULL,'','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'eng','Engine Size','','Please enter a numeric value for engine size!',NULL,'','','','CC','','',''),(18,'eng','Horsepower','','Please enter a numeric value for horsepower!',NULL,'','','','HP','','',''),(19,'eng','Condition','Select Condition','',NULL,'','','','','New|Used|Certified Pre-Owned','',''),(20,'eng','Length','','Please enter a numeric value for length!',NULL,'','','','m','','',''),(21,'eng','Vehicle Features','','',NULL,'',NULL,'','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'eng','RV Features','','',NULL,'',NULL,'','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(1,'esp','Price','','Invalid price!','','','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'esp','Country&Region','','','','','','','','','',''),(3,'esp','City','','','','','','','','','',''),(4,'esp','Zip','','','','','','','','','',''),(5,'esp','Makes&Models','','','','','','','','','',''),(6,'esp','Make','Select Make','','','','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'esp','Make','','','','','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'esp','Make','','','','','','','','','',''),(9,'esp','Model','','','','','','','','','',''),(10,'esp','Body Style','Select Body Style','','','','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'esp','Year','','Please enter a numeric value for year!','','','','','','','',''),(12,'esp','Mileage','','Please enter a numeric value for mileage!','','','','','Km','','',''),(13,'esp','Transmission','Select Transmission','','','','','','','Manual|Automatic|Semi-Automatic','',''),(14,'esp','Fuel','Select Fuel Type','','','','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'esp','Doors','Select Doors Number','','','','','','','2|3|4|5','',''),(16,'esp','Color','Select Color','','','','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'esp','Engine Size','','Please enter a numeric value for engine size!','','','','','CC','','',''),(18,'esp','Horsepower','','Please enter a numeric value for horsepower!','','','','','HP','','',''),(19,'esp','Condition','Select Condition','','','','','','','New|Used|Certified Pre-Owned','',''),(20,'esp','Length','','Please enter a numeric value for length!','','','','','m','','',''),(21,'esp','Vehicle Features','','','','','','','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'esp','RV Features','','','','','','','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(1,'french','Price','','Invalid price!','','','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'french','Country&Region','','','','','','','','','',''),(3,'french','City','','','','','','','','','',''),(4,'french','Zip','','','','','','','','','',''),(5,'french','Makes&Models','','','','','','','','','',''),(6,'french','Make','Select Make','','','','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'french','Make','','','','','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'french','Make','','','','','','','','','',''),(9,'french','Model','','','','','','','','','',''),(10,'french','Body Style','Select Body Style','','','','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'french','Year','','Please enter a numeric value for year!','','','','','','','',''),(12,'french','Mileage','','Please enter a numeric value for mileage!','','','','','Km','','',''),(13,'french','Transmission','Select Transmission','','','','','','','Manual|Automatic|Semi-Automatic','',''),(14,'french','Fuel','Select Fuel Type','','','','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'french','Doors','Select Doors Number','','','','','','','2|3|4|5','',''),(16,'french','Color','Select Color','','','','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'french','Engine Size','','Please enter a numeric value for engine size!','','','','','CC','','',''),(18,'french','Horsepower','','Please enter a numeric value for horsepower!','','','','','HP','','',''),(19,'french','Condition','Select Condition','','','','','','','New|Used|Certified Pre-Owned','',''),(20,'french','Length','','Please enter a numeric value for length!','','','','','m','','',''),(21,'french','Vehicle Features','','','','','','','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'french','RV Features','','','','','','','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(1,'italian','Price','','Invalid price!','','','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'italian','Country&Region','','','','','','','','','',''),(3,'italian','City','','','','','','','','','',''),(4,'italian','Zip','','','','','','','','','',''),(5,'italian','Makes&Models','','','','','','','','','',''),(6,'italian','Make','Select Make','','','','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'italian','Make','','','','','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'italian','Make','','','','','','','','','',''),(9,'italian','Model','','','','','','','','','',''),(10,'italian','Body Style','Select Body Style','','','','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'italian','Year','','Please enter a numeric value for year!','','','','','','','',''),(12,'italian','Mileage','','Please enter a numeric value for mileage!','','','','','Km','','',''),(13,'italian','Transmission','Select Transmission','','','','','','','Manual|Automatic|Semi-Automatic','',''),(14,'italian','Fuel','Select Fuel Type','','','','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'italian','Doors','Select Doors Number','','','','','','','2|3|4|5','',''),(16,'italian','Color','Select Color','','','','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'italian','Engine Size','','Please enter a numeric value for engine size!','','','','','CC','','',''),(18,'italian','Horsepower','','Please enter a numeric value for horsepower!','','','','','HP','','',''),(19,'italian','Condition','Select Condition','','','','','','','New|Used|Certified Pre-Owned','',''),(20,'italian','Length','','Please enter a numeric value for length!','','','','','m','','',''),(21,'italian','Vehicle Features','','','','','','','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'italian','RV Features','','','','','','','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(1,'dutch','Price','','Invalid price!','','','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'dutch','Country&Region','','','','','','','','','',''),(3,'dutch','City','','','','','','','','','',''),(4,'dutch','Zip','','','','','','','','','',''),(5,'dutch','Makes&Models','','','','','','','','','',''),(6,'dutch','Make','Select Make','','','','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'dutch','Make','','','','','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'dutch','Make','','','','','','','','','',''),(9,'dutch','Model','','','','','','','','','',''),(10,'dutch','Body Style','Select Body Style','','','','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'dutch','Year','','Please enter a numeric value for year!','','','','','','','',''),(12,'dutch','Mileage','','Please enter a numeric value for mileage!','','','','','Km','','',''),(13,'dutch','Transmission','Select Transmission','','','','','','','Manual|Automatic|Semi-Automatic','',''),(14,'dutch','Fuel','Select Fuel Type','','','','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'dutch','Doors','Select Doors Number','','','','','','','2|3|4|5','',''),(16,'dutch','Color','Select Color','','','','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'dutch','Engine Size','','Please enter a numeric value for engine size!','','','','','CC','','',''),(18,'dutch','Horsepower','','Please enter a numeric value for horsepower!','','','','','HP','','',''),(19,'dutch','Condition','Select Condition','','','','','','','New|Used|Certified Pre-Owned','',''),(20,'dutch','Length','','Please enter a numeric value for length!','','','','','m','','',''),(21,'dutch','Vehicle Features','','','','','','','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'dutch','RV Features','','','','','','','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(1,'german','Price','','Invalid price!','','','','','','','500|1500|2000|2500|3000|3500|4000|4500|5000|6000|7000|8000|9000|10000|12500|15000|17500|20000|25000|30000|40000|50000|75000|100000',''),(2,'german','Country&Region','','','','','','','','','',''),(3,'german','City','','','','','','','','','',''),(4,'german','Zip','','','','','','','','','',''),(5,'german','Makes&Models','','','','','','','','','',''),(6,'german','Make','Select Make','','','','','','','Aprilia|Ariel|Benelli|Bimota|Bmw|Buell|Cagiva|Cz|Derbi|Ducati|Gilera|Harley-Davidson|Honda|Husqvarna|Hyosung|Jawa|Kawasaki|Ktm|Kymco|Malaguti|Moto Guzzi|Mv Agusta|Mz|Peugeot|Piaggio|Polaris|Rieju|Romet|Simson|Suzuki|Triumph|Vespa|Yamaha|Zipp','',''),(7,'german','Make','','','','','','','','Advantage|Big Sky|Cambridge|Cherokee|Corsair|Cougar|Energy|Fleetwood|Fusion|Gearbox|Hornet|Keystone|Montana|Outback|Raptor|Rockstar|Starcraft|Starstream|Terry|TrailRunner|Travel Star|Vanguard|Villa','',''),(8,'german','Make','','','','','','','','','',''),(9,'german','Model','','','','','','','','','',''),(10,'german','Body Style','Select Body Style','','','','','','','Hatchback|Saloon|Estate|Convertible|People Carrier|Coupe|4x4|Cabrio|Van / Minibus|Pickup|MPV|Kit Car','',''),(11,'german','Year','','Please enter a numeric value for year!','','','','','','','',''),(12,'german','Mileage','','Please enter a numeric value for mileage!','','','','','Km','','',''),(13,'german','Transmission','Select Transmission','','','','','','','Manual|Automatic|Semi-Automatic','',''),(14,'german','Fuel','Select Fuel Type','','','','','','','Petrol|Diesel|Hybrid|Electric|LPG','',''),(15,'german','Doors','Select Doors Number','','','','','','','2|3|4|5','',''),(16,'german','Color','Select Color','','','','','','','Beige|Black|Blue|Brown|Burgundy/ Maroon|Cream/ Pearl|Gold|Green|Grey|Orange|Purple|Red|Silver|Turquoise/ Teal|White|Yellow','',''),(17,'german','Engine Size','','Please enter a numeric value for engine size!','','','','','CC','','',''),(18,'german','Horsepower','','Please enter a numeric value for horsepower!','','','','','HP','','',''),(19,'german','Condition','Select Condition','','','','','','','New|Used|Certified Pre-Owned','',''),(20,'german','Length','','Please enter a numeric value for length!','','','','','m','','',''),(21,'german','Vehicle Features','','','','','','','','4-Wheel Drive|Alarm|ABS|Driver Airbag|Electronic Stability Program (ESP)|Immobiliser|Passenger Airbag|Rear seat belts|Safety Belt Pretensioners|Safety Belt Pretensioners|Side Airbags|Xenon headlights|Alloy Wheels|Catalytic Converter|Rear Spoiler|Tow Bar|Tuning|Air Conditioning|Auxiliary heating|Climate Control|Cruise Control|Electric heated seats|Leather Seats|Parking Sensors|Power-assisted Steering (PAS)|Power Locks|Power Seats|Power Windows|Sunroof|Tilt Steering Wheel|AM/FM Stereo|Cassette Player|CD Multichanger|CD Player|Navigation System|Premium Sound System','',''),(22,'german','RV Features','','','','','','','','Auto Transmission|Aux. Generator|Exhaust Brake|Leveler Jacks|Cruise Control|Backup Camera|CB Radio|Satellite Dish|Solar Panel|Fantastic Fan|Patio Awning|Window Awning|Slide Awning|Awnings All Around','',''),(23,'eng','Category','','',NULL,'','Any','','','Caterpillar digger|Combined Dredger Loader|Compaction technology|Compactor|Construction crane|Construction Equipment|Dozer|Drill machine|Grader|Mini/Kompact-digger|Mobile digger|Other substructures|Road building technology|Rollers|Wheeled loader|Working platform|Other construction vehicles','',''),(23,'german','Kategorie','','',NULL,'','Beliebig','','','Arbeitsbühne|Asphalttechnik|Baggerlader|Baugeräte|Bodenstabilisierer|Bohrgerät|Grader|Kettenbagger|Kran, stationär|Mini-/Kompaktbagger|Mobilbagger|Radlader|Raupe/Dozer|Sonstige Anbauten|Verdichtungstechnik|Walzen|Andere Baumaschinen','',''),(24,'eng','Make','','',NULL,'','Any','','','ABG|Ahlmann|Ammann|Atlas|Atlas Copco|AUSA|Avant Tecno|Bell|Bobcat|BOMAG|Case|CAT|Daewoo|Demag|Dieci|Ditch Witch|Doosan|Dresser|Dynapac|Eurocomach|Faun|Fermec|Fiat|Fuchs|Furukawa|Gehl|Gehlmax|Genie|Grove|Hako|Halla|Hamm|Hanix|Hanomag|Haulotte|Hinowa|Hitachi|Hydrema|Hyundai|IHC|IHI|JCB|JLG|Kaercher|Kaeser|Kälble|Kobelco|Komatsu|Kramer|Krupp|Kubota|Liebherr|Manitou|MECALAC|MF|Michigan|Mitsubishi|Morooka|Moxy|Multicar|Neuson|New Holland|Niftylift|NPK|O & K|Orthaus|Palfinger|Paus|Pel-Job|Potain|Putzmeister|Rammax|Renault|Scania|Schaeff|Schäffer|Sennebogen|Shatal|Takeuchi|Terberg|Terex|Thwaites|Unimog|Upright|Vermeer|Vögele|Volvo|Wacker|Weber|Weidemann|Wirtgen|Yamaguchi|Yanmar|Zeppelin|Zettelmeyer|Other construction vehicles','',''),(24,'german','Marke','','',NULL,'','Beliebig','','','ABG|Ahlmann|Ammann|Atlas|Atlas Copco|AUSA|Avant Tecno|Bell|Bobcat|BOMAG|Case|CAT|Daewoo|Demag|Dieci|Ditch Witch|Doosan|Dresser|Dynapac|Eurocomach|Faun|Fermec|Fiat|Fuchs|Furukawa|Gehl|Gehlmax|Genie|Grove|Hako|Halla|Hamm|Hanix|Hanomag|Haulotte|Hinowa|Hitachi|Hydrema|Hyundai|IHC|IHI|JCB|JLG|Kaercher|Kaeser|Kälble|Kobelco|Komatsu|Kramer|Krupp|Kubota|Liebherr|Manitou|MECALAC|MF|Michigan|Mitsubishi|Morooka|Moxy|Multicar|Neuson|New Holland|Niftylift|NPK|O & K|Orthaus|Palfinger|Paus|Pel-Job|Potain|Putzmeister|Rammax|Renault|Scania|Schaeff|Schäffer|Sennebogen|Shatal|Takeuchi|Terberg|Terex|Thwaites|Unimog|Upright|Vermeer|Vögele|Volvo|Wacker|Weber|Weidemann|Wirtgen|Yamaguchi|Yanmar|Zeppelin|Zettelmeyer|Andere','',''),(25,'eng','Model','','',NULL,'','','','','','',''),(25,'german','Modell','','',NULL,'','','','','','',''),(26,'eng','Construction Year','','Please enter construction year',NULL,'','','','','','',''),(26,'german','Baujahr','','Bitte treten Sie das Baujahr ein',NULL,'','','','','','',''),(27,'eng','Operating Hours','','Please enter operating hours',NULL,'','','','','','',''),(27,'german','Betriebsstd.','','Bitte geben Sie die Betriebszeiten ein',NULL,'','','','','','',''),(29,'eng','Category','','',NULL,'','Any','','','Ambulance|Beverages van|Box|Box-type delivery van|Box-type delivery van - high|Box-type delivery van - high and long|Box-type delivery van - long|Breakdown truck|Car carrier|Cattle truck|Chassis|Dumper truck|Estate - minibus up to 9 seats|Glass transport superstructure|Hydraulic work platform|Refrigerator body|Refrigerator Box|Refuse truck|Roll-off tipper|Security van|Stake body|Stake body and tarpaulin|Swap chassis|Sweeping machine|Tank body|Three-sided Tipper|Tipper|Traffic construction|Truck-mounted crane|Vacuum and pressure vehicle|Other','',''),(29,'german','Kategorie','','',NULL,'','Beliebig','','','Abrollkipper|Abschleppwagen|Absetzkipper|Autokran|Autotransporter|Dreiseitenkipper|Fahrgestell|Geldtransporter|Getränke|Glastransporter|Hubarbeitsbühne|Kastenwagen|Kastenwagen hoch|Kastenwagen hoch + lang|Kastenwagen lang|Kehrmaschine|Kipper|Koffer|Kombi, Kleinbus bis 9 Sitze|Kühlkastenwagen|Kühlkoffer|Müllwagen|Pritsche|Pritsche + Plane|Rettungswagen|Saug- und Druckwagen|Tankaufbau|Tier-/Pferdetransport|Verkaufsaufbau|Wechselfahrgestell|Andere','',''),(30,'eng','Make','','',NULL,'','Any','','','Algema|Barkas|Citroën|Dacia|DAF|Fiat|Ford|FUSO|GAC Gonow|Hako|Hanomag|Hyundai|Ifor Williams|Intrall|Isuzu|Iveco|Kia|Ladog|Magirus Deutz|MAN|Maxus|Mazda|Mercedes-Benz|Mitsubishi|Multicar|Nissan|Opel|Peugeot|Piaggio|Renault|Robur|Ruthmann|Schmidt|Seat|Skoda|Steyr|StreetScooter|Suzuki|Toyota|Unimog|Volkswagen|Volvo|Other','',''),(30,'german','Marke','','',NULL,'','Beliebig','','','Algema|Barkas|Citroën|Dacia|DAF|Fiat|Ford|FUSO|GAC Gonow|Hako|Hanomag|Hyundai|Ifor Williams|Intrall|Isuzu|Iveco|Kia|Ladog|Magirus Deutz|MAN|Maxus|Mazda|Mercedes-Benz|Mitsubishi|Multicar|Nissan|Opel|Peugeot|Piaggio|Renault|Robur|Ruthmann|Schmidt|Seat|Skoda|Steyr|StreetScooter|Suzuki|Toyota|Unimog|Volkswagen|Volvo|Andere','',''),(31,'eng','Category','','',NULL,'','Any','','','Beverage|Box|Breakdown truck|Car carrier|Cement mixer|Chassis|Concrete Pump|Dumper truck|Food Carrier|Grain Truck|Horses|Hydraulic work platform|Jumbo Truck|Mining truck|Refrigerator body|Refuse truck|Roll-off tipper|Stake body|Stake body and tarpaulin|Swap chassis|Sweeping machine|Tank truck|Three-sided Tipper|Timber carrier|Tipper|Traffic construction|Truck-mounted crane|Vacuum and pressure vehicle|Other','',''),(31,'german','Kategorie','','',NULL,'','Beliebig','','','Abrollkipper|Abschleppwagen|Absetzkipper|Autokran|Autotransporter|Betonmischer|Betonpumpe|Dreiseitenkipper|Fahrgestell|Getränkewagen|Getreidekipper|Holztransporter|Hubarbeitsbühne|Jumbo-Lkw|Kehrmaschine|Kipper|Koffer|Kühlkoffer|Lebensmitteltankwagen|Muldenkipper|Müllwagen|Pritsche|Pritsche + Plane|Saug- und Druckwagen|Tankwagen|Tier-/Pferdetransportwagen|Verkaufsaufbau|Wechselfahrgestell|Andere','',''),(32,'eng','Make','','',NULL,'','Any','','','DAF|Demag|Faun|Ford|Freightliner|FUSO|Ginaf|Grove|Hako|HN Schörling|Iveco|Kamaz|Liebherr|Mack|Magirus Deutz|MAN|Meiller|Mercedes-Benz|Mitsubishi|Nissan|Opel|Palfinger|Peugeot|Renault|Ruthmann|Scania|Schmidt|Skoda|Steyr|Tatra|Toyota|Unimog|Volkswagen|Volvo|Yanmar|Other','',''),(32,'german','Marke','','',NULL,'','Beliebig','','','DAF|Demag|Faun|Ford|Freightliner|FUSO|Ginaf|Grove|Hako|HN Schörling|Iveco|Kamaz|Liebherr|Mack|Magirus Deutz|MAN|Meiller|Mercedes-Benz|Mitsubishi|Nissan|Opel|Palfinger|Peugeot|Renault|Ruthmann|Scania|Schmidt|Skoda|Steyr|Tatra|Toyota|Unimog|Volkswagen|Volvo|Yanmar','',''),(33,'eng','Category','','',NULL,'','Any','','','Hazardous load|Heavy load|Standard tractor/trailer unit|Volume trailer|Other','',''),(33,'german','Kategorie','','',NULL,'','Beliebig','','','Gefahrgut|Schwerlast|Standard-SZM|Volumen-SZM|Andere','',''),(34,'eng','Make','','',NULL,'','Any','','','Daewoo|DAF|Freightliner|Iveco|Kenworth|Mack|Magirus Deutz|MAN|Menke-Janzen|Mercedes-Benz|Peterbilt|Renault|Scania|Unimog|Volvo|Other','',''),(34,'german','Marke','','',NULL,'','Beliebig','','','Daewoo|DAF|Freightliner|Iveco|Kenworth|Mack|Magirus Deutz|MAN|Menke-Janzen|Mercedes-Benz|Peterbilt|Renault|Scania|Unimog|Volvo','',''),(35,'eng','Category','','',NULL,'','Any','','','Beverages trailer|Boat Trailer|Box|Car carrier|Cattle truck|Chassis|Construction Trailer|Food tank trailer|Furniture lift|Glass transport superstructure|Hydraulic work platform|Long material transporter|Low loader|Motortcycle Trailer|Platform|Refrigerator body|Roll-off trailer|Silo|Stake body|Stake body and tarpaulin|Swap chassis|Swap Stake body|Tank body|Three-sided tipper|Timber carrier|Traffic construction|Trailer|Walking floor|Other','',''),(35,'german','Kategorie','','',NULL,'','Beliebig','','','Abrollanhänger|Autotransporter|Bauwagen|Bootsanhänger|Dreiseitenkipper|Fahrgestell|Getränke|Glastransport|Holztransporter|Hubarbeitsbühne|Koffer|Kühlkoffer|Langmaterialtransporter|Lebensmitteltank|Möbellift|Motorradanhänger|Pkw-Anhänger|Plattform|Pritsche|Pritsche + Plane|Silo|Tankaufbau|Tieflader|Tier-/Pferdetransport|Verkaufsaufbau|Walkingfloor|Wechselfahrgestell|Wechselpritsche|Andere','',''),(36,'eng','Make','','',NULL,'','Any','','','Ackermann|Agados|Ahlmann|Airstream|Algema|Annaburger|Anssems|Atec|Auwärter|Barthau|Blomenröhr|Blomert|Blyss|BNG|Böckmann|Borco-Höhns|Brandl|Brenderup|Brian James|Broshuis|Bücker Trailer|Bunge|Carnehl|Chereau|Cheval Liberte|Daltec|Dinkel|Doll|Eduard|Excalibur|Feldbinder|FGS|Fitzel|Fliegl|Floor|Frankenstein|Frühauf|Gergen|Goldhofer|Hapert|Harbeck|Heinemann|Hendricks|Henra|HKM|Hoffmann|Homar|Hüffermann|Hulco|Humbaur|HUMER|Huttner|Ifor Williams|Jotha|Kässbohrer|Kel-Berg|Kempf|Klagie|Koch|Kögel|Kotschenreuther|Kroeger|Krone|Krukenmeier|Lafaro|Lag|Langendorf|LeciTrailer|Ley|Lück|MEGA|Meiller|Menke-Janzen|Meusburger|Möslein|Müller-Mitteltal|Neptun|NFP-Eurotrailer|Niewiadów|Nooteboom|Obermaier|Orten|Orthaus|Palfinger|Panav|PAVIC|Pezzaioli|Pongratz|Renders|Reuter|ROHR|ROKA|Saris|SAXAS|Schmidt|Schmitz Cargobull|Schwarzmüller|Seico|Sluis|Sommer|Spier|Spitzer|Stas|Stedele|Stema|TEMA|Tempus|Thiel|THULE|Tijhof|TPV|Trebbiner|Unsinn|Vanhool|Variant|Variotrail|Vezeko|Volkswagen|Voss|Wackenhut|Wagner|Web-Trailer|Wecon|Westfalia|Wielton|WM Meyer|Woodford|Wörmann|XXTrail|ZASŁAW|Z-Trailer|Other','',''),(36,'german','Marke','','',NULL,'','Beliebig','','','Ackermann|Agados|Ahlmann|Airstream|Algema|Annaburger|Anssems|Atec|Auwärter|Barthau|Blomenröhr|Blomert|Blyss|BNG|Böckmann|Borco-Höhns|Brandl|Brenderup|Brian James|Broshuis|Bücker Trailer|Bunge|Carnehl|Chereau|Cheval Liberte|Daltec|Dinkel|Doll|Eduard|Excalibur|Feldbinder|FGS|Fitzel|Fliegl|Floor|Frankenstein|Frühauf|Gergen|Goldhofer|Hapert|Harbeck|Heinemann|Hendricks|Henra|HKM|Hoffmann|Homar|Hüffermann|Hulco|Humbaur|HUMER|Huttner|Ifor Williams|Jotha|Kässbohrer|Kel-Berg|Kempf|Klagie|Koch|Kögel|Kotschenreuther|Kroeger|Krone|Krukenmeier|Lafaro|Lag|Langendorf|LeciTrailer|Ley|Lück|MEGA|Meiller|Menke-Janzen|Meusburger|Möslein|Müller-Mitteltal|Neptun|NFP-Eurotrailer|Niewiadów|Nooteboom|Obermaier|Orten|Orthaus|Palfinger|Panav|PAVIC|Pezzaioli|Pongratz|Renders|Reuter|ROHR|ROKA|Saris|SAXAS|Schmidt|Schmitz Cargobull|Schwarzmüller|Seico|Sluis|Sommer|Spier|Spitzer|Stas|Stedele|Stema|TEMA|Tempus|Thiel|THULE|Tijhof|TPV|Trebbiner|Unsinn|Vanhool|Variant|Variotrail|Vezeko|Volkswagen|Voss|Wackenhut|Wagner|Web-Trailer|Wecon|Westfalia|Wielton|WM Meyer|Woodford|Wörmann|XXTrail|ZASŁAW|Z-Trailer|Andere','',''),(37,'eng','Category','','',NULL,'','Any','','','Beverages|Box|Car carrier|Cattle truck|Chassis|Deep-freeze transporter|Food tank|Long material transporter|Low loader|Platform|Refrigerator body|Silo|Stake body|Stake body and tarpaulin|Swap chassis|Tank body|Timber carrier|Tipper|Traffic construction|Truck-mounted crane|Walking floor|Other','',''),(37,'german','Kategorie','','',NULL,'','Beliebig','','','Autokran|Autotransporter|Fahrgestell|Getränke|Holztransporter|Kipper|Koffer|Kühlkoffer|Langmaterialtransporter|Lebensmitteltank|Plattform|Pritsche|Pritsche + Plane|Silo|Tankaufbau|Tiefkühl|Tieflader|Verkaufsaufbau|Viehtransporter|Walkingfloor|Wechselfahrgestell|Andere','',''),(38,'eng','Make','','',NULL,'','Any','','','Ackermann|Annaburger|ATM|Auwärter|Benalu|Berger|Blomenröhr|BNG|Böckmann|Brenderup|Broshuis|Bücker Trailer|Bunge|Carnehl|Chereau|Dinkel|Doll|D-TEC|ES-GE|Faymonville|Feber|Feldbinder|Fliegl|Floor|Frühauf|General Trailer|Goldhofer|Groenewegen|Heinemann|Hendricks|Hoffmann|HRD|Hüffermann|Humbaur|Huttner|Kaiser|Kässbohrer|Kel-Berg|Kempf|Knapen|Kögel|Kotschenreuther|Kraker|Kramer|Kroeger|Krone|Krukenmeier|Lag|Lamberet|Langendorf|Lecinena|LeciTrailer|Legras|LinTrailers|Lück|Magyar|MEGA|Meierling|Meiller|Menci|Menke-Janzen|Merceron|Merker|Meusburger|Montenegro|Möslein|Müller-Mitteltal|NFP-Eurotrailer|Nooteboom|Orten|Orthaus|Pacton|Panav|PAVIC|Pezzaioli|Reisch|Renders|ROHR|Samro|Scheuerle|Schmidt|Schmitz Cargobull|Schrader|Schwarzmüller|SEKA|Sommer|Spier|Spitzer|Stas|Talson|Trailor|Van Eck|Vanhool|Volkswagen|Wackenhut|Wagner|Web-Trailer|Wecon|Wielton|ZASŁAW|Other','',''),(38,'german','Marke','','',NULL,'','Beliebig','','','Ackermann|Annaburger|ATM|Auwärter|Benalu|Berger|Blomenröhr|BNG|Böckmann|Brenderup|Broshuis|Bücker Trailer|Bunge|Carnehl|Chereau|Dinkel|Doll|D-TEC|ES-GE|Faymonville|Feber|Feldbinder|Fliegl|Floor|Frühauf|General Trailer|Goldhofer|Groenewegen|Heinemann|Hendricks|Hoffmann|HRD|Hüffermann|Humbaur|Huttner|Kaiser|Kässbohrer|Kel-Berg|Kempf|Knapen|Kögel|Kotschenreuther|Kraker|Kramer|Kroeger|Krone|Krukenmeier|Lag|Lamberet|Langendorf|Lecinena|LeciTrailer|Legras|LinTrailers|Lück|Magyar|MEGA|Meierling|Meiller|Menci|Menke-Janzen|Merceron|Merker|Meusburger|Montenegro|Möslein|Müller-Mitteltal|NFP-Eurotrailer|Nooteboom|Orten|Orthaus|Pacton|Panav|PAVIC|Pezzaioli|Reisch|Renders|ROHR|Samro|Scheuerle|Schmidt|Schmitz Cargobull|Schrader|Schwarzmüller|SEKA|Sommer|Spier|Spitzer|Stas|Talson|Trailor|Van Eck|Vanhool|Volkswagen|Wackenhut|Wagner|Web-Trailer|Wecon|Wielton|ZASŁAW|Andere','','');
UNLOCK TABLES;

--
-- Table structure for table `oxy_fieldsets`
--

DROP TABLE IF EXISTS `oxy_fieldsets`;

CREATE TABLE `oxy_fieldsets` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_fieldsets`
--

LOCK TABLES `oxy_fieldsets` WRITE;
INSERT INTO `oxy_fieldsets` VALUES (1,'Cars','Cars Fieldset'),(3,'Motorcycles & ATVs','Motorcycles & ATVs Fieldset'),(5,'RVs','RVs Fieldset'),(6,'Parts & Accessories','Parts & Accessories Fieldset'),(7,'Machinery','Machinery'),(8,'Trucks','Trucks'),(9,'Small Trucks','Trucks up to 7.5 t'),(10,'Big Trucks','Trucks Over 7.5 t'),(11,'Semi-trailer Truck','Semi-trailer Truck'),(12,'Trailers','Trailers'),(13,'Semi-Trailers','Semi-Trailers');
UNLOCK TABLES;

--
-- Table structure for table `oxy_flagged_ips`
--

DROP TABLE IF EXISTS `oxy_flagged_ips`;

CREATE TABLE `oxy_flagged_ips` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_fortumo_products`
--

DROP TABLE IF EXISTS `oxy_fortumo_products`;

CREATE TABLE `oxy_fortumo_products` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `short_code` char(10) DEFAULT NULL,
  `secret` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_fortumo_return`
--

DROP TABLE IF EXISTS `oxy_fortumo_return`;

CREATE TABLE `oxy_fortumo_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(20) DEFAULT '0',
  `message` varchar(100) DEFAULT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `message_id` varchar(50) DEFAULT NULL,
  `keyword` varchar(50) DEFAULT NULL,
  `shortcode` int(10) DEFAULT NULL,
  `operator` varchar(40) DEFAULT NULL,
  `billing_type` varchar(2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `test` varchar(5) DEFAULT NULL,
  `sig` varchar(50) DEFAULT NULL,
  `entirepost` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_fortumo_settings`
--

DROP TABLE IF EXISTS `oxy_fortumo_settings`;

CREATE TABLE `oxy_fortumo_settings` (
  `currency` varchar(3) DEFAULT NULL,
  `test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_fortumo_settings`
--

LOCK TABLES `oxy_fortumo_settings` WRITE;
INSERT INTO `oxy_fortumo_settings` VALUES ('EUR',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_hipay_return`
--

DROP TABLE IF EXISTS `oxy_hipay_return`;

CREATE TABLE `oxy_hipay_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  `operation` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `time` varchar(130) DEFAULT NULL,
  `transid` varchar(130) DEFAULT NULL,
  `amount` varchar(130) DEFAULT NULL,
  `currency` varchar(130) DEFAULT NULL,
  `idformerchant` varchar(130) DEFAULT NULL,
  `merchantdatas` varchar(130) DEFAULT NULL,
  `emailClient` varchar(130) DEFAULT NULL,
  `subscriptionId` varchar(130) DEFAULT NULL,
  `refProduct` varchar(130) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_hipay_settings`
--

DROP TABLE IF EXISTS `oxy_hipay_settings`;

CREATE TABLE `oxy_hipay_settings` (
  `member_account` varchar(128) DEFAULT NULL,
  `merchant_password` varchar(100) DEFAULT NULL,
  `website_id` varchar(10) DEFAULT NULL,
  `locale` varchar(20) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `notification_email` varchar(100) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_hipay_settings`
--

LOCK TABLES `oxy_hipay_settings` WRITE;
INSERT INTO `oxy_hipay_settings` VALUES (NULL,NULL,NULL,'en_GB','EUR',NULL,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_icepay_ipn`
--

DROP TABLE IF EXISTS `oxy_icepay_ipn`;

CREATE TABLE `oxy_icepay_ipn` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `StatusCode` varchar(100) DEFAULT NULL,
  `Merchant` int(10) DEFAULT NULL,
  `OrderID` varchar(10) DEFAULT NULL,
  `PaymentID` int(10) DEFAULT NULL,
  `Reference` varchar(50) DEFAULT NULL,
  `TransactionID` varchar(50) DEFAULT NULL,
  `ConsumerName` varchar(100) DEFAULT NULL,
  `ConsumerAccountNumber` varchar(100) DEFAULT NULL,
  `ConsumerAddress` varchar(100) DEFAULT NULL,
  `ConsumerHouseNumber` varchar(10) DEFAULT NULL,
  `ConsumerPostCode` varchar(50) DEFAULT NULL,
  `ConsumerCity` varchar(100) DEFAULT NULL,
  `ConsumerCountry` varchar(100) DEFAULT NULL,
  `ConsumerEmail` varchar(200) DEFAULT NULL,
  `ConsumerPhoneNumber` varchar(50) DEFAULT NULL,
  `ConsumerIPAddress` varchar(50) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `Currency` varchar(3) DEFAULT NULL,
  `Duration` int(10) DEFAULT NULL,
  `Checksum` varchar(40) DEFAULT NULL,
  `PaymentMethod` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `oxy_icepay_settings`
--

DROP TABLE IF EXISTS `oxy_icepay_settings`;

CREATE TABLE `oxy_icepay_settings` (
  `merchantID` int(10) DEFAULT NULL,
  `secretCode` varchar(50) DEFAULT NULL,
  `ic_language` varchar(3) DEFAULT NULL,
  `ic_country` varchar(3) DEFAULT NULL,
  `ic_currency` varchar(3) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_icepay_settings`
--

LOCK TABLES `oxy_icepay_settings` WRITE;
INSERT INTO `oxy_icepay_settings` VALUES (NULL,NULL,NULL,NULL,NULL,'');
UNLOCK TABLES;

--
-- Table structure for table `oxy_ie_settings`
--

DROP TABLE IF EXISTS `oxy_ie_settings`;

CREATE TABLE `oxy_ie_settings` (
  `bulk_type` varchar(20) DEFAULT NULL,
  `bulk_template` int(2) DEFAULT NULL,
  `bulk_plan` int(2) DEFAULT NULL,
  `csv_column_separator` varchar(10) DEFAULT NULL,
  `csv_field_separator` varchar(10) DEFAULT NULL,
  `custom_page_id` int(2) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ie_settings`
--

LOCK TABLES `oxy_ie_settings` WRITE;
INSERT INTO `oxy_ie_settings` VALUES ('xml',0,1,',','\"',3);
UNLOCK TABLES;

--
-- Table structure for table `oxy_ie_templates`
--

DROP TABLE IF EXISTS `oxy_ie_templates`;

CREATE TABLE `oxy_ie_templates` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'ad',
  `purpose` varchar(10) DEFAULT 'import',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oxy_ie_templates_fields`
--

DROP TABLE IF EXISTS `oxy_ie_templates_fields`;

CREATE TABLE `oxy_ie_templates_fields` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `template_id` int(2) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `alias` varchar(40) DEFAULT NULL,
  `cdata` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_ie_templates_fields`
--

LOCK TABLES `oxy_ie_templates_fields` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_info`
--

DROP TABLE IF EXISTS `oxy_info`;

CREATE TABLE `oxy_info` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `code` varchar(50) NOT NULL,
  `content` text,
  `info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_info`
--

LOCK TABLES `oxy_info` WRITE;
INSERT INTO `oxy_info` VALUES ('eng','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('eng','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('eng','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('eng','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('eng','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('eng','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('eng','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('eng','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('eng','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('eng','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('eng','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('eng','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('eng','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('eng','password_recovery','','The message which appears on password recovery page.'),('eng','login','','Add here a message you want to appear on the login page'),('eng','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('eng','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('esp','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('esp','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('esp','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('esp','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('esp','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('esp','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('esp','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('esp','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('esp','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('esp','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('esp','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('esp','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('esp','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('esp','password_recovery','','The message which appears on password recovery page.'),('esp','login','','Add here a message you want to appear on the login page'),('esp','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('esp','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('french','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('french','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('french','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('french','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('french','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('french','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('french','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('french','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('french','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('french','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('french','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('french','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('french','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('french','password_recovery','','The message which appears on password recovery page.'),('french','login','','Add here a message you want to appear on the login page'),('french','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('french','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('italian','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('italian','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('italian','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('italian','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('italian','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('italian','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('italian','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('italian','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('italian','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('italian','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('italian','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('italian','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('italian','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('italian','password_recovery','','The message which appears on password recovery page.'),('italian','login','','Add here a message you want to appear on the login page'),('italian','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('italian','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('dutch','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('dutch','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('dutch','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('dutch','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('dutch','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('dutch','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('dutch','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('dutch','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('dutch','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('dutch','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('dutch','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('dutch','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('dutch','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('dutch','password_recovery','','The message which appears on password recovery page.'),('dutch','login','','Add here a message you want to appear on the login page'),('dutch','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('dutch','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('german','ad_publish_status','{if $nologin && $activation}{* IF LISTING IS PLACED WITHOUT LOGIN AND IT NEEDS ACTIVATION *}\r\nPlease note that your listing is not active! You will shortly receive an email with an activation link. Follow the email instruction to activate your listing.\r\n<br>\r\n\r\n{/if}\r\n{if $manual} {* IF PAYMENT IS REQUIRED AND CHOSEN PAYMENT IS MANUAL *}\r\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n\r\n{elseif $ad_pending}\r\n\r\nYour ad is pending and will be published after it will be verified by administrator!\r\n<br><br>\r\n{elseif !$nologin || !$activation}\r\n\r\nYour ad is published! You can view your listing <a href=\"{$details_link}\">here</a>!\r\n<br><br>\r\n{/if}\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is posted. The message can contain information about ad status.'),('german','ad_options_upgrade_status','{if $manual}\r\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br><br>\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}<br>\r\n{/if}\r\n\r\nYour ad upgrade details:<br>\r\n\r\nAd ID: <b>#{$ad_id}</b><br>\r\nAd upgrade status: <b>{$status}</b><br>\r\nInvoice no: <b>#{$invoice_no}</b><br>\r\nProcessor: <b>{$processor}</b><br>\r\n{if $featured}Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}: <b>{$featured_price}</b><br>{/if}\r\n{if $highlited}Highlighted Ad: <b>{$highlited_price}</b><br>{/if}\r\n{if $priority}Priority: <b>{$priority_name} {$priority_price}</b><br>{/if}\r\n{if $video}Video: <b>{$video_price}</b><br>{/if}\r\n{if $urgent}Urgent: <b>{$urgent_price}</b></br>{/if}\r\n{if $url}Website Link: <b>{$url_price}</b><br>{/if}\r\n\r\n{if $discount}Discount: <b>{$discount}</b><br>{/if}\r\nTotal: <b>{$amount_formatted}</b><br><br>\r\n\r\n{if !$nologin}\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>\r\n{/if}','The info message which appears after the ad is upgraded. The message can contain information about upgrade status.'),('german','subscription_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $plan_pending}\r\n\r\nYour subscription is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour subscription is active, you can publish ads now!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Subscription details:</b><br/>\r\n<br/>\r\nSubscription: <b>{$plan.name}</b><br/>\r\nPlan price: <b>{$plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n<br/>{/if}\r\nNumber of ads: <b>{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}{/if}</b><br/>\r\nSubscription time: <b>{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</b><br/>\r\nAllowed pictures: <b>{$plan.no_pictures}</b><br/>\r\nWords: <b>{if $plan.no_words}{$plan.no_words}{else}{$unlimited}{/if}</b><br/>\r\nAds availability: <b>{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the subscription is posted. The message can contain information about subscription status.'),('german','buy_store_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen to subscribe is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $pending}\r\n\r\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated<br/><br/>\r\n\r\n{else}\r\n\r\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/><br/>\r\n\r\n{/if}\r\n\r\n<br>\r\n<b>Dealer Page details:</b><br>\r\n<br>\r\nAmount: <b>{$amount_formatted}</b><br>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br>\r\nTotal: <b>{$amount_formatted}</b><br>\r\n{/if}\r\nProcessor: <b>{$processor}</b><br>\r\nDealer Page availability: <b>{if $days}{$days}{else}{$unlimited}{/if} days</b><br>\r\nStatus: <b>{$status}</b>\r\n<br>\r\n\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after the Dealer Page option is chosen and after passing payment. The message can contain information about Dealer Page option status.'),('german','bulk_uploads_info','Place here information regarding bulk uploads format.','Message which explains to users how to use bulk uploads feature.'),('german','password_recovery_mail_sent','An email has been sent to your email address with information how to recover your password.','The message the user gets after he submits for retrieving a lost password.'),('german','not_authorized','You are not authorized to view this page!<br /> \r\n\r\nPlease <a href=\"login.php\" class=\"info\">login</a> on your account, or if you do not have one, please <a href=\"register.php\" class=\"info\">register</a>!','The text which will appear if the person that browse a certain page does not have access to that page (for example access administrator settings pages without being logged as administrator)'),('german','password_recovery_key_invalid','You reached this page probably because you followed a link from a message which was sent to you with instructions to choose a password to access this site. However, that link is no longer valid. <br /> \r\n\r\nPlease submit your data again to recover your password!','The message shown to a user when trying to retrieve a lost password but the recovery key is invalid.'),('german','fortumo_info','Please send the code below to the number ::SHORT_CODE:::<br/> ::KEY:: <br/>You will be charged with: ::AMOUNT::','The message which appears when the user chooses to pay with Fortumo SMS payment.'),('german','fortumo_failed','The payment failed!','The SMS message which is sent back to user when the payment failed. Please limit to 16 characters!'),('german','fortumo_success','Payment successful!','The SMS message which is sent back to user when the payment succeeded. Please limit to 16 characters!'),('german','buy_credits_status','{if $manual}{*  ::::  Manual payment - edit and add payment method :::: *}\r\n\r\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:\r\n\r\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\r\n<br /><br />\r\n\r\n{elseif $credits_pending}\r\n\r\nYour credits purchase is pending and will be shortly be activated after being reviewed by administrator<br/><br/>\r\n\r\n{else}\r\n\r\nYour have successfully purchased extra credits!<br/><br/>\r\n\r\n{/if}\r\n\r\n<b>Credits package details:</b><br/>\r\n<br/>\r\nPackage name: <b>{$credits_plan.name}</b><br/>\r\nPrice: <b>{$credits_plan.price_curr}</b><br/>\r\n{if $discount}\r\nDiscount: <b>{$discount}</b><br/>\r\nTotal: <b>{$amount_formatted}</b><br/>\r\n{/if}\r\nNumber of credits: <b>{$credits_plan.no_credits}</b><br/>\r\nStatus: <b>{$status}</b>\r\n<br/>\r\n<a href=\"{$site_url}/useraccount.php\">Return to your account</a>','The info message which appears after a credits package is ordered. The message can contain information about the credits package status.'),('german','account_removal','Your account removal request was sent. Your account will be removed shortly by the site administrator!','The message which shows after a user requests an account removal and confirms it using an activation link received in an email.'),('german','password_recovery','','The message which appears on password recovery page.'),('german','login','','Add here a message you want to appear on the login page'),('german','2fa_info','Enable Two Factor Authentication to better secure your account. You will receive the One Time Password code required in the second step of authentication via SMS, and you can also use a mobile app like Google Authenticator to generate the required One Time Password.','The message which appears on Account Info page of the user account. Make sure you edit the information and explain properly how to use this option.'),('german','2fa_login','Your account has Two Factor Authentication enabled, please fill in the One Time Password below to complete the login process.','The message which appears on login page after the username and password is introduced and one time password is required ( when two factor authentication is enabled ).'),('eng','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('esp','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('french','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('italian','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('dutch','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('german','auto_repost','{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}','The message when auto reposting an ad'),('eng','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies'),('esp','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies'),('french','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies'),('italian','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies'),('dutch','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies'),('german','eu_cookie','This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our <a href=\"##SITE_URL##/content.php?code=eu_cookie\">cookie terms</a>.','The notification which will appear on top of your site informing that your site uses cookies');
UNLOCK TABLES;

--
-- Table structure for table `oxy_instamojo_return`
--

DROP TABLE IF EXISTS `oxy_instamojo_return`;

CREATE TABLE `oxy_instamojo_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_instamojo_return`
--

LOCK TABLES `oxy_instamojo_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_instamojo_settings`
--

DROP TABLE IF EXISTS `oxy_instamojo_settings`;

CREATE TABLE `oxy_instamojo_settings` (
  `instamojo_api_key` varchar(50) DEFAULT NULL,
  `instamojo_auth_token` varchar(50) DEFAULT NULL,
  `instamojo_salt` varchar(50) DEFAULT NULL,
  `instamojo_test` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_instamojo_settings`
--

LOCK TABLES `oxy_instamojo_settings` WRITE;
INSERT INTO `oxy_instamojo_settings` VALUES ('',NULL,NULL,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_invoice_settings`
--

DROP TABLE IF EXISTS `oxy_invoice_settings`;

CREATE TABLE `oxy_invoice_settings` (
  `enable_invoices` tinyint(1) DEFAULT '0',
  `seller_details` text,
  `invoice_logo` varchar(100) DEFAULT NULL,
  `user_fields` varchar(150) DEFAULT NULL,
  `custom_text` text,
  `filename` varchar(20) DEFAULT 'invoice',
  `show_vat` tinyint(1) DEFAULT '0',
  `vat_percent` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_invoice_settings`
--

LOCK TABLES `oxy_invoice_settings` WRITE;
INSERT INTO `oxy_invoice_settings` VALUES (1,'','logotrans.png','contact_name,email,address,phone,mgm_email,mgm_name,mgm_phone','','invoice',1,21);
UNLOCK TABLES;

--
-- Table structure for table `oxy_invoices`
--

DROP TABLE IF EXISTS `oxy_invoices`;

CREATE TABLE `oxy_invoices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `processor` varchar(40) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `payment_action` int(20) NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `tax` float DEFAULT '0',
  `seller_details` text,
  `invoice_logo` varchar(100) DEFAULT NULL,
  `user_details` varchar(150) DEFAULT NULL,
  `custom_text` text,
  `payment_details` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_invoices`
--

LOCK TABLES `oxy_invoices` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_klarna_return`
--

DROP TABLE IF EXISTS `oxy_klarna_return`;

CREATE TABLE `oxy_klarna_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_klarna_return`
--

LOCK TABLES `oxy_klarna_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_klarna_settings`
--

DROP TABLE IF EXISTS `oxy_klarna_settings`;

CREATE TABLE `oxy_klarna_settings` (
  `merchant_id` varchar(20) DEFAULT NULL,
  `sharedSecret` varchar(50) DEFAULT NULL,
  `test` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `terms_uri` varchar(200) DEFAULT NULL,
  `payment_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_klarna_settings`
--

LOCK TABLES `oxy_klarna_settings` WRITE;
INSERT INTO `oxy_klarna_settings` VALUES ('200','test','1','SEK','SE','se-se','',NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_languages`
--

DROP TABLE IF EXISTS `oxy_languages`;

CREATE TABLE `oxy_languages` (
  `id` varchar(20) NOT NULL,
  `code` varchar(2) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `characters_map` varchar(200) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '1',
  `order_no` int(2) DEFAULT '1',
  `direction` varchar(3) NOT NULL DEFAULT 'ltr',
  PRIMARY KEY (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_languages`
--

LOCK TABLES `oxy_languages` WRITE;
INSERT INTO `oxy_languages` VALUES ('afr','af','Afrikaans','afrikaans.gif',NULL,0,0,20,'ltr'),('arabic','ar','Arabic','sa.gif',NULL,0,0,9,'rtl'),('bg','bg','Bulgarian','bulgarian.gif',NULL,0,0,19,'ltr'),('danish','da','Danish','danish.gif',NULL,0,0,21,'ltr'),('dutch','nl','Dutch','dutch.gif',NULL,0,0,5,'ltr'),('eng','en','English','english.gif',NULL,0,1,1,'ltr'),('esp','es','Spanish','spanish.gif',NULL,0,0,2,'ltr'),('french','fr','French','french.gif',NULL,0,0,3,'ltr'),('german','de','German','german.gif',NULL,1,1,6,'ltr'),('greek','el','Greek','greek.gif',NULL,0,0,13,'ltr'),('hebrew','he','Hebrew','hebrew.gif',NULL,0,0,10,'ltr'),('hr','hr','Croatian','croatian.gif',NULL,0,0,15,'ltr'),('hu','hu','Hungarian','hungarian.gif',NULL,0,0,18,'ltr'),('italian','it','Italian','italian.gif',NULL,0,0,4,'ltr'),('lv','lv','Latvian','latvian.gif',NULL,0,0,17,'ltr'),('ms','ms','Malay','malay.gif',NULL,0,0,16,'ltr'),('nor','no','Norwegian','norwegian.gif',NULL,0,0,22,'ltr'),('polish','pl','Polish','polish.gif',NULL,0,0,14,'ltr'),('portuguese','pt','Portuguese','portuguese.gif',NULL,0,0,7,'ltr'),('ro','ro','Romanian','romanian.gif',NULL,0,0,12,'ltr'),('ru','ru','Russian','russian.gif',NULL,0,0,8,'ltr'),('tr','tr','Turkish','turkish.gif',NULL,0,0,11,'ltr');
UNLOCK TABLES;

--
-- Table structure for table `oxy_latest_visited`
--

DROP TABLE IF EXISTS `oxy_latest_visited`;

CREATE TABLE `oxy_latest_visited` (
  `title_german` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `show_extended` tinyint(1) DEFAULT '0',
  `no_extended` int(4) DEFAULT '100',
  `show_on_index` tinyint(1) DEFAULT '0',
  `show_on_search` tinyint(1) DEFAULT '1',
  `show_on_details` tinyint(1) DEFAULT '0',
  `days_keep` int(4) DEFAULT '60',
  `title_eng` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_latest_visited`
--

LOCK TABLES `oxy_latest_visited` WRITE;
INSERT INTO `oxy_latest_visited` VALUES ('Zuletzt besuchte Anzeigen',4,0,100,0,1,1,60,'Latest visited ads');
UNLOCK TABLES;

--
-- Table structure for table `oxy_latest_visited_ads`
--

DROP TABLE IF EXISTS `oxy_latest_visited_ads`;

CREATE TABLE `oxy_latest_visited_ads` (
  `id` int(10) NOT NULL,
  `ad_id` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  KEY `idx_id` (`id`),
  KEY `idx_ad_id` (`ad_id`),
  KEY `idx_date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_latest_visited_ads`
--

LOCK TABLES `oxy_latest_visited_ads` WRITE;
INSERT INTO `oxy_latest_visited_ads` VALUES (1,4,'2021-08-23 08:03:36'),(1,6,'2021-08-23 08:04:02'),(9,6,'2021-08-23 08:37:21'),(10,6,'2021-08-23 08:37:50'),(11,4,'2021-08-23 08:49:34'),(9,8,'2021-08-23 08:50:55'),(11,6,'2021-08-23 08:52:44'),(12,4,'2021-08-23 14:19:23'),(13,5,'2021-08-24 13:24:59'),(14,7,'2021-08-24 13:32:21'),(15,7,'2021-08-25 16:42:55'),(16,6,'2021-08-25 17:04:52'),(16,4,'2021-08-25 19:07:51'),(16,7,'2021-08-25 19:44:33'),(17,6,'2021-08-26 12:48:51'),(17,4,'2021-08-26 12:49:09'),(13,6,'2021-08-26 13:15:05'),(18,7,'2021-08-26 14:46:59'),(1,1,'2021-08-26 16:10:19'),(19,7,'2021-08-26 17:35:15'),(20,2,'2021-09-01 13:05:58'),(20,7,'2021-09-01 13:07:03'),(21,2,'2021-09-01 13:07:05'),(22,2,'2021-09-06 18:03:35'),(23,7,'2021-09-06 18:03:38'),(24,6,'2021-09-06 18:04:03'),(25,5,'2021-09-06 18:04:05'),(26,4,'2021-09-06 18:04:07'),(27,3,'2021-09-06 18:04:09'),(28,2,'2021-09-09 09:44:16'),(29,7,'2021-09-16 18:27:26'),(29,3,'2021-09-16 18:27:40'),(30,8,'2021-09-28 09:49:34'),(1,8,'2021-09-28 09:53:10'),(31,7,'2021-09-29 08:48:30'),(31,8,'2021-09-29 08:50:17'),(32,2,'2021-09-29 12:16:29'),(32,4,'2021-09-29 12:21:03'),(33,4,'2021-09-30 12:57:18'),(34,8,'2021-09-30 12:57:24'),(35,6,'2021-09-30 12:57:29'),(36,5,'2021-09-30 12:57:29'),(37,7,'2021-09-30 12:57:36'),(38,3,'2021-09-30 12:57:36'),(39,4,'2021-10-05 10:47:40'),(40,7,'2021-10-05 10:47:41'),(41,3,'2021-10-05 10:47:41'),(42,6,'2021-10-05 10:47:42'),(43,6,'2021-10-05 10:47:43'),(44,5,'2021-10-05 10:47:43'),(45,3,'2021-10-05 10:47:43'),(46,8,'2021-10-05 10:47:44'),(47,4,'2021-10-05 10:49:01'),(48,5,'2021-10-05 10:49:13'),(49,3,'2021-10-05 10:49:16'),(50,6,'2021-10-05 10:49:17'),(51,3,'2021-10-05 10:49:19'),(52,7,'2021-10-05 10:49:20'),(53,8,'2021-10-05 10:49:23'),(54,8,'2021-10-07 09:45:15'),(55,7,'2021-10-07 09:45:16'),(56,3,'2021-10-07 09:45:17'),(57,6,'2021-10-07 09:45:18'),(58,4,'2021-10-07 09:45:23'),(59,5,'2021-10-07 09:45:23'),(60,7,'2021-10-08 11:42:06'),(61,4,'2021-10-08 13:23:19'),(62,7,'2021-10-11 06:00:06'),(63,6,'2021-10-11 13:33:39'),(64,5,'2021-10-12 10:12:57'),(65,7,'2021-10-12 13:11:13'),(66,8,'2021-10-12 14:36:05'),(67,4,'2021-10-13 07:38:02'),(68,4,'2021-10-13 10:46:49'),(69,1,'2021-10-14 05:14:57'),(70,2,'2021-10-14 05:15:01'),(71,4,'2021-10-14 05:15:05'),(72,8,'2021-10-14 05:15:10'),(73,7,'2021-10-14 05:15:14'),(74,5,'2021-10-14 05:16:25'),(75,6,'2021-10-14 05:16:30'),(76,1,'2021-10-14 23:01:27'),(77,2,'2021-10-14 23:01:29'),(78,6,'2021-10-14 23:01:31'),(79,5,'2021-10-14 23:01:33'),(80,7,'2021-10-14 23:01:35'),(81,8,'2021-10-14 23:01:37'),(82,4,'2021-10-14 23:02:00'),(83,7,'2021-10-16 22:24:50'),(83,3,'2021-10-16 22:25:16'),(83,1,'2021-10-16 22:25:29'),(83,2,'2021-10-16 22:25:42'),(83,8,'2021-10-16 22:25:56'),(83,4,'2021-10-16 22:26:08'),(83,5,'2021-10-16 22:30:28'),(83,6,'2021-10-16 22:32:51'),(84,7,'2021-10-17 01:45:51');
UNLOCK TABLES;

--
-- Table structure for table `oxy_location_no_ads`
--

DROP TABLE IF EXISTS `oxy_location_no_ads`;

CREATE TABLE `oxy_location_no_ads` (
  `field` varchar(64) NOT NULL,
  `val` varchar(64) NOT NULL,
  `no` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_location_no_ads`
--

LOCK TABLES `oxy_location_no_ads` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_login_history`
--

DROP TABLE IF EXISTS `oxy_login_history`;

CREATE TABLE `oxy_login_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(60) DEFAULT NULL,
  `date_login` datetime DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `succeeded` tinyint(1) DEFAULT '0',
  `blocked` tinyint(1) DEFAULT '0',
  `otp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_auth_name` (`auth_name`),
  KEY `idx_date` (`date_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_login_history`
--

LOCK TABLES `oxy_login_history` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_mails`
--

DROP TABLE IF EXISTS `oxy_mails`;

CREATE TABLE `oxy_mails` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `code` varchar(50) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mails`
--

LOCK TABLES `oxy_mails` WRITE;
INSERT INTO `oxy_mails` VALUES ('eng','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('eng','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('eng','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('eng','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('eng','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('eng','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('eng','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('eng','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('eng','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('eng','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('eng','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('eng','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('eng','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('eng','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('eng','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('eng','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('eng','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('eng','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('eng','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('eng','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('eng','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('eng','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('eng','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('eng','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('eng','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('eng','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('eng','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('eng','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('eng','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('esp','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('esp','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('esp','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('esp','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('esp','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('esp','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('esp','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('esp','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('esp','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('esp','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('esp','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('esp','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('esp','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('esp','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('esp','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('esp','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('esp','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('esp','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('esp','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('esp','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('esp','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('esp','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('esp','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('esp','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('esp','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('esp','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('esp','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('esp','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('esp','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('french','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('french','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('french','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('french','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('french','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('french','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('french','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('french','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('french','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('french','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('french','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('french','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('french','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('french','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('french','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('french','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('french','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('french','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('french','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('french','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('french','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('french','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('french','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('french','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('french','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('french','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('french','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('french','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('french','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('italian','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('italian','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('italian','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('italian','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('italian','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('italian','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('italian','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('italian','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('italian','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('italian','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('italian','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('italian','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('italian','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('italian','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('italian','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('italian','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('italian','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('italian','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('italian','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('italian','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('italian','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('italian','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('italian','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('italian','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('italian','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('italian','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('italian','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('italian','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('italian','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('dutch','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('dutch','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('dutch','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('dutch','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('dutch','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('dutch','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('dutch','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('dutch','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('dutch','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('dutch','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('dutch','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('dutch','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('dutch','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('dutch','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('dutch','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('dutch','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('dutch','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('dutch','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('dutch','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('dutch','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('dutch','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('dutch','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('dutch','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('dutch','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('dutch','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('dutch','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('dutch','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('dutch','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('dutch','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('german','registration','Your account on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $activation}{*    ::# If the account needs activation    ::#  *}\nYou received this email because there has been a request for a registration with this account on {$site_name}<br/>\n{else}\nYour account on {$site_name} has been created.<br/>\n{/if}\n<br/>\n\nYour account information are:<br/>\n{if $enable_username}Username: <strong>{$username}</strong>{else}Email: <strong>{$email}</strong>{/if}{if $password}<br/>\nPassword: <strong>{$password}</strong>{/if}<br/>{if isset($phone) && $phone}Phone number: <strong>{$phone}</strong><br/>{/if}\n{if $user.affiliate}Affiliate id: <strong>{$affiliate_id}</strong><br/>\nAffiliate link: <strong>{$affiliate_link}</strong><br/>\n{/if}<br/>\n\n{if $activation==1}{*    ::# If the account needs activation    ::#  *}\nTo activate your account please go to the following link:<br/>\n{$link}<br/><br/>\n{elseif $activation==2}You should receive an SMS on your phone containing an activation code. If you skipped the activation process after registration, access the following link and enter the activation code in the box:<br/>\n{$link}<br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after registration with account information and account activation link if the case.'),('german','mailto','{$site_name} new message','Hello {$contact_name},<br/><br/>\n\n<strong>{$sender_name}</strong> is interested in your listing below: <br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nSender email: <br/>\n<font color=\"#2995b5\">{$sender_email}</font><br/><br/>\n\n\nSender phone: <br/>\n<font color=\"#2995b5\">{$sender_phone}</font><br/><br/>\n\n','The email sent to a listing owner when a guest fills in the contact user form attached to every ad.'),('german','recommend_ad','{$sender_name} recommended you this ad!','Hello <strong>{$name}</strong>,<br/><br/>\n\n<strong>{$sender_name}</strong> thought you would be interested in the following resource:<br/>\n{$ad_link}<br/><br/>\n\n{$message}<br/><br/>\n\nBest Regards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/><br/>\n','The email which is sent to the when a user or guest recommends an ad to a friend using the \"Share\" link on every ad details page.'),('german','password_recovery','Password recovery for {$site_name}','To initiate the process for resetting the password for your {$site_name} account, visit the link below:<br/><br/>\n\n{$link}<br/><br/>\n','The email which a user receives after initiating a password recovery process.'),('german','listing_expired','Your listing on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour listing with the id #{$ad_id} expired!<br/><br/>\n\nIf you want to renew your listing please go to your account \"Browse Listings\" section and use the \"Renew\" icon assigned to this ad, or use the following link: <br/>\n{$renew_link} <br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives after a listing expired.'),('german','listing_will_expire','Your listing on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your listing will expire in {$days_expire} days!<br/><br/>\n\nIf you want to renew your listing, you can renew it from your account after it expires, or if you want to renew it before it expires you can use the following link:<br/>\n{$renew_link}<br/><br/>\n\nTo view the content of your ad check the following link:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a listing owner receives before a listing expires.'),('german','admin_announce_pending','New {$processor} pending on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n{if $ad_id && $ad_pending} {* ---- announce pending listing -------- *}\n<tr><td>Pending Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n{/if}\n{if $plan.type==\"sub\" && $plan_pending} {* ---- announce pending subscription -------- *}\n<tr><td>Pending Plan:</td><td class=\"right\">#{$plan_name}</td></tr>\n{/if}\n{if $credits_pending} {* ---- announce pending credits package -------- *}\n<tr><td>Pending credits package:</td><td class=\"right\">#{$credits_plan_name}</td></tr>\n{/if}\n{if $upgrade}\n<tr><td>Pending Upgrades for Ad ID:</td><td class=\"right\">#{$ad_id}</td>\n{/if}\n{if $store}\n<tr><td>Pending Dealer Page for user:</td><td class=\"right\">#{$username}</td></tr>\n{/if}\n</table><br/><br/>\n','The email sent to administrator to notify a pending action: new ad, subscription, upgrade ad etc.'),('german','admin_new_account','New {if $user.affiliate}affiliate {/if}user registered on {$site_name}','A new {if $user.affiliate}affiliate {/if}user registered on <strong>{$site_name}</strong><br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Account Details</td></tr>\n{if $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>{else}<tr><td>Email:</td><td class=\"right\">{$email}</td></tr>{/if}\n<tr><td>Group:</td><td class=\"right\">{$group}</td></tr>\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n','The email which is sent to the administrator to notify a new user registered.'),('german','report_ad','Report Abusive Ad on {$site_name}','The following ad was reported as abusive:<br/>\n{$ad_link}<br/><br/>\n\nThe report was sent by:<br/>\nName: <strong>{$name}</strong><br/>\nEmail: <strong>{$email}</strong><br/>\nComments: {$message}<br/><br/>\n','The email sent to admin when someone reports an ad as abusive'),('german','ad_publish_status','Your listing on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $nologin && $activation}{* ------- Text which appears when the ad is placed without login and it requires activation -------- *}\n{if $activation==1}\nIMPORTANT! Your ad is not yet active. To activate your ad, click the link below or copy and paste the entire link into your web browser:<br/>\n{$activation_link}<br/>\n{else}\nIMPORTANT! Your listing requires SMS activation. You should have received a code via SMS. If you skipped this step after posting your listing, then in order to activate it, click on the link below and enter the activation code you received via SMS:<br/>\n{$activation_link}<br/>\n{/if}\n{/if}\n{if $manual}\nThe payment type you have chosen to post this listing is manual. This means that your ad will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $ad_pending}\nYour ad is pending and will be published after the administrator review!<br/>\n\n{elseif $active}\nYour ad is published!<br/>\n\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Ad Details</td></tr>\n<tr><td>ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Plan:</td><td class=\"right\">{$plan_name}</td></tr>\n{if $plan.amount}<tr><td>Plan amount:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $featured || $highlited || $priority || $video}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff;\">Options</td></tr>\n{if $featured}<tr><td>Featured</td><td class=\"right\">{$featured_price}</td></tr>{/if}\n{if $highlited}<tr><td>Highlighted</td><td class=\"right\">{$highlited_price}</td></tr>{/if}\n{if $priority}<tr><td>Priority</td><td class=\"right\">{$priority_name} - {$priority_price}</td></tr>{/if}\n{if $video}<tr><td>Video</td><td class=\"right\">{$video_price}</td></tr>{/if}{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>{/if}\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $amount}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>{/if}\n{/if}\n<tr><td>Status:</td><td class=\"right\">{$status}</td></tr>\n{if $amount}<tr><td>Invoice no:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\n{if $nologin && !$activation} {* send management link if posted without login *}\nYou can use the following link to manage your listing:<br/>\n{$details_link}<br/>\n{elseif !$nologin}\nView your listing details: <br/>\n{$details_link}<br/>\n{/if}\n<br/>\n\n{if $plan.type==\"sub\" && $new_subscription}  {* - details if new subscription - *}\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Plan name:</td><td class=\"right\">{$plan.name}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$plan.price_curr}</td></tr>\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n</table><br/><br/>\n{/if}\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the listing owner after the listing is posted. The email contains information about the ad status.'),('german','ad_options_upgrade_status','Listing upgrade status on {$site_name}','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\n{if $manual}\nThe payment type you have chosen for this upgrade is manual. This means that your upgrade features will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/><br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{/if}\n\nYour ad upgrade request has been registered. You can see below the status of your upgrade:<br/><br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Status</td></tr>\n<tr><td class=\"right\">Ad ID:</td><td>#{$ad_id}\n<tr><td class=\"right\">Ad upgrade status:</td><td>{$status}</td></tr>\n<tr><td class=\"right\">Invoice no:</td><td>#{$invoice_no}</td></tr>\n{if $amount}\n<tr><td class=\"right\">Processor:</td><td>{$processor}</td></tr>\n{/if}\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade options</td></tr>\n{if $featured}\n<tr><td>Feature Ad{if isset($featured_no_days) && $featured_no_days} {$featured_no_days} days{/if}:</td><td class=\"right\">{$featured_price}</td></tr>\n{/if}\n{if $highlited}\n<tr><td>Highlighted Ad:</td><td class=\"right\">{$highlited_price}</td></tr>\n{/if}\n{if $priority}\n<tr><td>Priority:</td><td class=\"right\">{$priority_name} {$priority_price}</td></tr>\n{/if}\n{if $video}\n<tr><td>Video:</td><td class=\"right\">{$video_price}</td></tr>\n{/if}\n{if $urgent}\n<tr><td>Urgent:</td><td class=\"right\">{$urgent_price}</td></tr>\n{/if}\n\n{if $url}\n<tr><td>Website Link:</td><td class=\"right\">{$url_price}</td></tr>\n{/if}\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n{/if}\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after a listing is upgraded. The email contains information about the upgrade status.'),('german','subscription_status','Your subscription on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen to subscribe is manual. This means that your subscription will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $plan_pending}\nYour subscription is pending and will be shortly activated by administrator.<br/>\n{else}\nYour subscription is active and you can start publishing ads.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Subscription Details</td></tr>\n<tr><td>Subscription:</td><td class=\"right\">{$plan.name}</td></tr>\n{if $plan_price}<tr><td>Plan price:</td><td class=\"right\">{$plan_price}</td></tr>{/if}\n{if $discount}<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Number of ads:</td><td class=\"right\">{if $plan.no_ads}{$plan.no_ads}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Subscription time:</td><td class=\"right\">{if $plan.subscription_time}{$plan.subscription_time}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Allowed pictures:</td><td class=\"right\">{$plan.no_pictures}</td></tr>\n<tr><td>Words:</td><td class=\"right\">{if $plan.no_words}{$plan.no_words}{else}{$unlimited}</td></tr>\n{/if}\n<tr><td>Ads availability:</td><td class=\"right\">{if $plan.no_days}{$plan.no_days}{else}{$unlimited}{/if} days</td></tr>\n{if $processor}<tr><td>Payment method:</td><td class=\"right\">{$processor}</td></tr>\n{/if}\n<tr><td>Plan status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a subscription is ordered. The email contains information about the subscription status.'),('german','subscription_expired','Your subscription on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\n{if $time_expired}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> expired!<br/><br/>\n{else}\n\nYour subscription with the id <strong>#{$subscription_id}</strong> reached the maximum number or ads allowed and was deactivated!\n<br/><br/>\n{/if}\n\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('german','subscription_will_expire','Your subscription on {$site_name} will expire','Hello {$contact_name},<br/><br/>\n\nThis is a notification message! Your subscription  with the id <strong>#{$subscription_id}</strong> will expire in {$days_expire} days!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives before a subscription expires.'),('german','store_expired','Your Dealer Page on {$site_name} expired','Hello {$contact_name},<br/><br/>\n\nYour Dealer Page feature expired! <br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives after the Dealer Page expires.'),('german','ad_options_expired','Your ad options on {$site_name} expired','Hello <strong>{$contact_name}</strong>,<br/><br/>\n\nYour following ad options for ad id #{$id} expired: {$expired_options}!<br/><br/>\n\nView the content of your ad: <br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which a user receives after a subcription expires.'),('german','buy_store_status','Your Dealer Page on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that Dealer Page option for your account will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $store_pending}\nYour account upgrade to enable Dealer Page is waiting for administrator verification. You will be notified when activated.<br/>\n\n{else}\nYour account has been upgraded. You will now have your own Dealer Page on our site where you can customize your own top banner!<br/>\n\n{/if}\n<br/>\n\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Dealer Page details:</td></tr>\n{if !$admin_activated}\n<tr><td>Amount:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}\n<tr><td>Processor:</td><td class=\"right\">{$processor}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>\n{/if}\n{/if}\n<tr><td>Dealer Page availability:</td><td class=\"right\">{if $days}{$days}{else}{$unlimited}{/if} days</td></tr>\n<tr><td>Dealer Page status:</td><td class=\"right\">{$status}</td></tr>\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to the user after choosing Dealer Page option for an account. The email contains information about the Dealer Page option status.'),('german','email_alert','{$site_name} {if $no>1}{$no} new listings{else}1 new listing{/if} for {$search}','Hello,<br/><br/>\n\nThere {if $no>1}are {$no} new listings{else}is 1 new listing{/if} for <strong>{$search}</strong>!<br/><br/>\n\nPlease click the following link to see the  new {if $no==1}listing{else}listings{/if} for your search:<br/><br/>\n\n{$link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email which the user receives when new listings appear for the alert search terms.'),('german','email_alert_confirmation','Your email alert for {$search}','Hello,<br/><br/>\n\nYou asked to be announced when something new comes up on <font color=\"#2995b5\">{$site_name}</font> for the following search:<br/>\n<strong>{$search}</strong><br/><br/>\n{if $confirmation}\nPlease confirm your email alert by clicking on the link below.<br/>\n\n{$confirmation_link}<br/><br/>\n{/if}\nIf you want to stop receiving email alerts please use the unsubscribe link below:<br/>\n\n{$unsubscribe_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The confirmation email which a user receives when choosing to subscribe for an email alert. This email will contain instructions how to activate the alert (is not already active) and how to disable the alert.'),('german','ad_options_upgrade_done','Your ad upgrade','Hello {$contact_name},<br/><br/>\n\nYour listing #{$ad_id} was successfully upgraded with the following options:<br/><br/>\n\n<table width=\"400\">\n<tr><td style=\"background: #2885b5; color: #fff; font-weight: bold;\">Upgrade Details</td></tr>\n{if $featured}<tr><td class=\"right\">Featured</td></tr>{/if}\n{if $highlited}<tr><td class=\"right\">Highlighted</td></tr>{/if}\n{if $video}<tr><td class=\"right\">Video Classifieds</td></tr>{/if}\n{if $priority}<tr><td class=\"right\">Priority: {$priority}</td></tr>{/if}\n{if $urgent}<tr><td class=\"right\">Urgent</td></tr>{/if}\n{if $url}<tr><td class=\"right\">Website Link</td></tr>{/if}\n</table><br/><br/>\n\nView your listing details page:<br/>\n{$details_link}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The info message which appears after the ad upgrade was accepted by administrator. The message will contain information about upgrade status.'),('german','admin_new_ad','New listing on {$site_name}','<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Details</td></tr>\n{if !$nologin && $enable_username}<tr><td>Username:</td><td class=\"right\">{$username}</td></tr>\n{else}<tr><td>Posted by:</td><td class=\"right\">{$email}{if $contact_name}, {$contact_name}{/if}</td></tr>\n{/if}\n<tr><td>Ad ID:</td><td class=\"right\">#{$ad_id}</td></tr>\n<tr><td>Listing Details:</td><td class=\"right\">{$details_link}</td></tr>\n</table><br/><br/>\n','The email sent to administrator to notify a new listing'),('german','reply','Message reply on {$site_name}','A new reply has been made on {$site_name}:<br/><br/>{$message}','The email which a user receives when a reply is made for a message'),('german','report_message','Message id {$id} reported as spam','The message id {$id} was reported as spam.','The message the administrator receives when a user reports a message as spam.'),('german','buy_credits_status','Your credits purchase on {$site_name}','Hello {$contact_name},<br/><br/>\n\n{if $manual}{*   ::::::   The user chosen a manual payment  :::::: *}\nThe payment type you have chosen is manual. This means that your credits purchase will remain pending until the payment is completed. To complete the payment please see below the payment details:<br/>\n{*  ------------ PLACE HERE THE BANK ACCOUNT, CHECK ADDRESS OR ANY OTHER METHOD TO PAY MANUALLY  ---------------- *}\n{elseif $credits_pending}\nYour credits purchase is pending and will be shortly activated by administrator.<br/>\n{else}\nYou have successfully purchased extra credits.<br/>\n{/if}\n<br/>\n<table width=\"400\">\n<tr><td colspan=\"2\" style=\"background: #2885b5; color: #fff; font-weight: bold;\">Credits package details</td></tr>\n<tr><td>Package name:</td><td class=\"right\">{$credits_plan.name}</td></tr>\n<tr><td>Price:</td><td class=\"right\">{$credits_plan.price_curr}</td></tr>\n{if $discount}\n<tr><td>Discount:</td><td class=\"right\">{$discount}</td></tr>\n<tr><td>Total:</td><td class=\"right\">{$amount_formatted}</td></tr>\n{/if}<tr><td>Number of credits:</td><td class=\"right\">{$credits_plan.no_credits}</td></tr>\n<tr><td>Package status:</td><td class=\"right\">{$status}</td></tr>\n{if $invoice_no}<tr><td>Invoice number:</td><td class=\"right\">#{$invoice_no}</td></tr>{/if}\n</table><br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The email sent to a user after a credits package is ordered. The email contains information about the credits package status.'),('german','account_removal','Account removal request','An account removal request was filed for your account. <br/><br/>\n\n<font color=\"f00\">Note that this action will result in the complete removal of your user account and user details from our site, as well as the complete removal of any listings added with this account!</font><br/><br/>\n\nTo confirm it, please click on the link below:<br/>\n{$removal_link}<br/><br/>\n\nIf you did not intended to remove your account please disregard this email.<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message sent to the user when the account removal is asked. It asks for confirmation for the removal process.'),('german','admin_account_removal','Account removal requested for user id #{$id}','An account removal was requested for user id #{$id}.<br/><br/>\n\n{if $enable_username}Username: {$user.username}{else}Email: {$user.email}{/if}<br/>\nContact name: {$user.contact_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the site administrator a request for an account removal.'),('german','admin_pending_edited','Listing #{$ad_id} was modified','Listing #{$ad_id} ({$ad_title}) was modified. You can review the listing with the following link:<br/><br/>\n\n{$review_link}<br/>\n','The message which announces the administrator that a listing was modified. Only used when Pending Edited option is enabled.'),('german','pending_edited','Your listing modifications were {$action}','Hello {$contact_name},<br/><br/>\n\nYour listing id #{$ad_id} ({$ad_title}) changes were {$action} by administrator:<br/><br/>\n\n{$details_link}\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message which announces the user that its modified listing was accepted or denied by the site administrator'),('german','new_auction_bid','New auction bid for your listing #{$ad_id} on {$site_name}','Hello {$contact_name},<br/><br/>\n\nA new bid was made for your listing #{$ad_id} ({$ad_title}):<br/><br/>\n\nBid: {$bid}<br/>\n\nName: {$sender_name}<br/>\nEmail: {$sender_email}<br/><br/>\n\nMessage: {$message}<br/>\n<br/>\nPosted by: {$sender_name}<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','The message that announces a new auction bid for a listing'),('eng','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('esp','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('french','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('italian','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('dutch','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('german','auto_renew','Listing auto renewed: {$title}','Hello {$contact_name},<br/><br/>\n\nYour listing \"{$title}\" was renewed.<br/>\n<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n','Notify the owner when their listing was renewed (Auto renew module).'),('eng','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.'),('esp','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.'),('french','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.'),('italian','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.'),('dutch','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.'),('german','auto_repost','New repost for listing #{$title}','Hello {$contact_name},<br/><br/>\n\nYour listing <a href=\"{$details_link}\">#{$title}</a> was reposted!<br/><br/>\n\nRegards,<br/>\n<font color=\"#2995b5\">{$administrator}</font><br/>\n{$site_url}<br/><br/>\n\n','The message sent when an auto repost is executed.');
UNLOCK TABLES;

--
-- Table structure for table `oxy_mails_settings`
--

DROP TABLE IF EXISTS `oxy_mails_settings`;

CREATE TABLE `oxy_mails_settings` (
  `html_mails` tinyint(1) DEFAULT '1',
  `use_smtp_auth` tinyint(1) DEFAULT '0',
  `smtp_server` varchar(40) DEFAULT NULL,
  `port` int(5) DEFAULT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `bcc_to` varchar(70) DEFAULT NULL,
  `send_using_admin_email` tinyint(1) DEFAULT '1',
  `encryption` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mails_settings`
--

LOCK TABLES `oxy_mails_settings` WRITE;
INSERT INTO `oxy_mails_settings` VALUES (1,0,'',25,'','','',1,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_makes_dep`
--

DROP TABLE IF EXISTS `oxy_makes_dep`;

CREATE TABLE `oxy_makes_dep` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `set_id` int(3) DEFAULT '0',
  KEY `id` (`id`),
  KEY `idx_lang_id` (`lang_id`),
  KEY `idx_set_id` (`set_id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_makes_dep`
--

LOCK TABLES `oxy_makes_dep` WRITE;
INSERT INTO `oxy_makes_dep` VALUES (1,'Abarth','eng',1),(2,'Acura','eng',1),(3,'Aixam','eng',1),(4,'Alfa Romeo','eng',1),(5,'Alpina','eng',1),(6,'Andere','eng',1),(7,'Artega','eng',1),(8,'Asia Motors','eng',1),(9,'Aston Martin','eng',1),(10,'Audi','eng',1),(11,'Austin','eng',1),(12,'Austin Healey','eng',1),(13,'BMW','eng',1),(14,'Bentley','eng',1),(15,'Borgward','eng',1),(16,'Brilliance','eng',1),(17,'Bugatti','eng',1),(18,'Buick','eng',1),(19,'Cadillac','eng',1),(20,'Casalini','eng',1),(21,'Caterham','eng',1),(22,'Chevrolet','eng',1),(23,'Chrysler','eng',1),(24,'Citroën','eng',1),(25,'Cobra','eng',1),(26,'Corvette','eng',1),(27,'Dacia','eng',1),(28,'Daewoo','eng',1),(29,'Daihatsu','eng',1),(30,'DeTomaso','eng',1),(31,'Dodge','eng',1),(32,'Ferrari','eng',1),(33,'Fiat','eng',1),(34,'Fisker','eng',1),(35,'Ford','eng',1),(36,'GMC','eng',1),(37,'Grecav','eng',1),(38,'Hamann','eng',1),(39,'Holden','eng',1),(40,'Honda','eng',1),(41,'Hummer','eng',1),(42,'Hyundai','eng',1),(43,'Infiniti','eng',1),(44,'Isuzu','eng',1),(45,'Iveco','eng',1),(46,'Jaguar','eng',1),(47,'Jeep','eng',1),(48,'KTM','eng',1),(49,'Kia','eng',1),(50,'Königsegg','eng',1),(51,'Lada','eng',1),(52,'Lamborghini','eng',1),(53,'Lancia','eng',1),(54,'Land Rover','eng',1),(55,'Landwind','eng',1),(56,'Lexus','eng',1),(57,'Ligier','eng',1),(58,'Lincoln','eng',1),(59,'Lotus','eng',1),(60,'MG','eng',1),(61,'MINI','eng',1),(62,'Mahindra','eng',1),(63,'Maserati','eng',1),(64,'Maybach','eng',1),(65,'Mazda','eng',1),(66,'McLaren','eng',1),(67,'Mercedes-Benz','eng',1),(68,'Microcar','eng',1),(69,'Mitsubishi','eng',1),(70,'Morgan','eng',1),(71,'NSU','eng',1),(72,'Nissan','eng',1),(73,'Oldsmobile','eng',1),(74,'Opel','eng',1),(75,'Pagani','eng',1),(76,'Peugeot','eng',1),(77,'Piaggio','eng',1),(78,'Plymouth','eng',1),(79,'Pontiac','eng',1),(80,'Porsche','eng',1),(81,'Proton','eng',1),(82,'Renault','eng',1),(83,'Rolls Royce','eng',1),(84,'Rover','eng',1),(85,'Ruf','eng',1),(86,'Saab','eng',1),(87,'Santana','eng',1),(88,'Seat','eng',1),(89,'Skoda','eng',1),(90,'Smart','eng',1),(91,'SpeedART','eng',1),(92,'Spyker','eng',1),(93,'Ssangyong','eng',1),(94,'Subaru','eng',1),(95,'Suzuki','eng',1),(96,'TECHART','eng',1),(97,'TVR','eng',1),(98,'Talbot','eng',1),(99,'Tata','eng',1),(100,'Tesla','eng',1),(101,'Toyota','eng',1),(102,'Trabant','eng',1),(103,'Triumph','eng',1),(104,'Volkswagen','eng',1),(105,'Volvo','eng',1),(106,'Wartburg','eng',1),(107,'Westfield','eng',1),(108,'Wiesmann','eng',1),(1,'Abarth','esp',1),(2,'Acura','esp',1),(3,'Aixam','esp',1),(4,'Alfa Romeo','esp',1),(5,'Alpina','esp',1),(6,'Andere','esp',1),(7,'Artega','esp',1),(8,'Asia Motors','esp',1),(9,'Aston Martin','esp',1),(10,'Audi','esp',1),(11,'Austin','esp',1),(12,'Austin Healey','esp',1),(13,'BMW','esp',1),(14,'Bentley','esp',1),(15,'Borgward','esp',1),(16,'Brilliance','esp',1),(17,'Bugatti','esp',1),(18,'Buick','esp',1),(19,'Cadillac','esp',1),(20,'Casalini','esp',1),(21,'Caterham','esp',1),(22,'Chevrolet','esp',1),(23,'Chrysler','esp',1),(24,'Citroën','esp',1),(25,'Cobra','esp',1),(26,'Corvette','esp',1),(27,'Dacia','esp',1),(28,'Daewoo','esp',1),(29,'Daihatsu','esp',1),(30,'DeTomaso','esp',1),(31,'Dodge','esp',1),(32,'Ferrari','esp',1),(33,'Fiat','esp',1),(34,'Fisker','esp',1),(35,'Ford','esp',1),(36,'GMC','esp',1),(37,'Grecav','esp',1),(38,'Hamann','esp',1),(39,'Holden','esp',1),(40,'Honda','esp',1),(41,'Hummer','esp',1),(42,'Hyundai','esp',1),(43,'Infiniti','esp',1),(44,'Isuzu','esp',1),(45,'Iveco','esp',1),(46,'Jaguar','esp',1),(47,'Jeep','esp',1),(48,'KTM','esp',1),(49,'Kia','esp',1),(50,'Königsegg','esp',1),(51,'Lada','esp',1),(52,'Lamborghini','esp',1),(53,'Lancia','esp',1),(54,'Land Rover','esp',1),(55,'Landwind','esp',1),(56,'Lexus','esp',1),(57,'Ligier','esp',1),(58,'Lincoln','esp',1),(59,'Lotus','esp',1),(60,'MG','esp',1),(61,'MINI','esp',1),(62,'Mahindra','esp',1),(63,'Maserati','esp',1),(64,'Maybach','esp',1),(65,'Mazda','esp',1),(66,'McLaren','esp',1),(67,'Mercedes-Benz','esp',1),(68,'Microcar','esp',1),(69,'Mitsubishi','esp',1),(70,'Morgan','esp',1),(71,'NSU','esp',1),(72,'Nissan','esp',1),(73,'Oldsmobile','esp',1),(74,'Opel','esp',1),(75,'Pagani','esp',1),(76,'Peugeot','esp',1),(77,'Piaggio','esp',1),(78,'Plymouth','esp',1),(79,'Pontiac','esp',1),(80,'Porsche','esp',1),(81,'Proton','esp',1),(82,'Renault','esp',1),(83,'Rolls Royce','esp',1),(84,'Rover','esp',1),(85,'Ruf','esp',1),(86,'Saab','esp',1),(87,'Santana','esp',1),(88,'Seat','esp',1),(89,'Skoda','esp',1),(90,'Smart','esp',1),(91,'SpeedART','esp',1),(92,'Spyker','esp',1),(93,'Ssangyong','esp',1),(94,'Subaru','esp',1),(95,'Suzuki','esp',1),(96,'TECHART','esp',1),(97,'TVR','esp',1),(98,'Talbot','esp',1),(99,'Tata','esp',1),(100,'Tesla','esp',1),(101,'Toyota','esp',1),(102,'Trabant','esp',1),(103,'Triumph','esp',1),(104,'Volkswagen','esp',1),(105,'Volvo','esp',1),(106,'Wartburg','esp',1),(107,'Westfield','esp',1),(108,'Wiesmann','esp',1),(1,'Abarth','french',1),(2,'Acura','french',1),(3,'Aixam','french',1),(4,'Alfa Romeo','french',1),(5,'Alpina','french',1),(6,'Andere','french',1),(7,'Artega','french',1),(8,'Asia Motors','french',1),(9,'Aston Martin','french',1),(10,'Audi','french',1),(11,'Austin','french',1),(12,'Austin Healey','french',1),(13,'BMW','french',1),(14,'Bentley','french',1),(15,'Borgward','french',1),(16,'Brilliance','french',1),(17,'Bugatti','french',1),(18,'Buick','french',1),(19,'Cadillac','french',1),(20,'Casalini','french',1),(21,'Caterham','french',1),(22,'Chevrolet','french',1),(23,'Chrysler','french',1),(24,'Citroën','french',1),(25,'Cobra','french',1),(26,'Corvette','french',1),(27,'Dacia','french',1),(28,'Daewoo','french',1),(29,'Daihatsu','french',1),(30,'DeTomaso','french',1),(31,'Dodge','french',1),(32,'Ferrari','french',1),(33,'Fiat','french',1),(34,'Fisker','french',1),(35,'Ford','french',1),(36,'GMC','french',1),(37,'Grecav','french',1),(38,'Hamann','french',1),(39,'Holden','french',1),(40,'Honda','french',1),(41,'Hummer','french',1),(42,'Hyundai','french',1),(43,'Infiniti','french',1),(44,'Isuzu','french',1),(45,'Iveco','french',1),(46,'Jaguar','french',1),(47,'Jeep','french',1),(48,'KTM','french',1),(49,'Kia','french',1),(50,'Königsegg','french',1),(51,'Lada','french',1),(52,'Lamborghini','french',1),(53,'Lancia','french',1),(54,'Land Rover','french',1),(55,'Landwind','french',1),(56,'Lexus','french',1),(57,'Ligier','french',1),(58,'Lincoln','french',1),(59,'Lotus','french',1),(60,'MG','french',1),(61,'MINI','french',1),(62,'Mahindra','french',1),(63,'Maserati','french',1),(64,'Maybach','french',1),(65,'Mazda','french',1),(66,'McLaren','french',1),(67,'Mercedes-Benz','french',1),(68,'Microcar','french',1),(69,'Mitsubishi','french',1),(70,'Morgan','french',1),(71,'NSU','french',1),(72,'Nissan','french',1),(73,'Oldsmobile','french',1),(74,'Opel','french',1),(75,'Pagani','french',1),(76,'Peugeot','french',1),(77,'Piaggio','french',1),(78,'Plymouth','french',1),(79,'Pontiac','french',1),(80,'Porsche','french',1),(81,'Proton','french',1),(82,'Renault','french',1),(83,'Rolls Royce','french',1),(84,'Rover','french',1),(85,'Ruf','french',1),(86,'Saab','french',1),(87,'Santana','french',1),(88,'Seat','french',1),(89,'Skoda','french',1),(90,'Smart','french',1),(91,'SpeedART','french',1),(92,'Spyker','french',1),(93,'Ssangyong','french',1),(94,'Subaru','french',1),(95,'Suzuki','french',1),(96,'TECHART','french',1),(97,'TVR','french',1),(98,'Talbot','french',1),(99,'Tata','french',1),(100,'Tesla','french',1),(101,'Toyota','french',1),(102,'Trabant','french',1),(103,'Triumph','french',1),(104,'Volkswagen','french',1),(105,'Volvo','french',1),(106,'Wartburg','french',1),(107,'Westfield','french',1),(108,'Wiesmann','french',1),(1,'Abarth','italian',1),(2,'Acura','italian',1),(3,'Aixam','italian',1),(4,'Alfa Romeo','italian',1),(5,'Alpina','italian',1),(6,'Andere','italian',1),(7,'Artega','italian',1),(8,'Asia Motors','italian',1),(9,'Aston Martin','italian',1),(10,'Audi','italian',1),(11,'Austin','italian',1),(12,'Austin Healey','italian',1),(13,'BMW','italian',1),(14,'Bentley','italian',1),(15,'Borgward','italian',1),(16,'Brilliance','italian',1),(17,'Bugatti','italian',1),(18,'Buick','italian',1),(19,'Cadillac','italian',1),(20,'Casalini','italian',1),(21,'Caterham','italian',1),(22,'Chevrolet','italian',1),(23,'Chrysler','italian',1),(24,'Citroën','italian',1),(25,'Cobra','italian',1),(26,'Corvette','italian',1),(27,'Dacia','italian',1),(28,'Daewoo','italian',1),(29,'Daihatsu','italian',1),(30,'DeTomaso','italian',1),(31,'Dodge','italian',1),(32,'Ferrari','italian',1),(33,'Fiat','italian',1),(34,'Fisker','italian',1),(35,'Ford','italian',1),(36,'GMC','italian',1),(37,'Grecav','italian',1),(38,'Hamann','italian',1),(39,'Holden','italian',1),(40,'Honda','italian',1),(41,'Hummer','italian',1),(42,'Hyundai','italian',1),(43,'Infiniti','italian',1),(44,'Isuzu','italian',1),(45,'Iveco','italian',1),(46,'Jaguar','italian',1),(47,'Jeep','italian',1),(48,'KTM','italian',1),(49,'Kia','italian',1),(50,'Königsegg','italian',1),(51,'Lada','italian',1),(52,'Lamborghini','italian',1),(53,'Lancia','italian',1),(54,'Land Rover','italian',1),(55,'Landwind','italian',1),(56,'Lexus','italian',1),(57,'Ligier','italian',1),(58,'Lincoln','italian',1),(59,'Lotus','italian',1),(60,'MG','italian',1),(61,'MINI','italian',1),(62,'Mahindra','italian',1),(63,'Maserati','italian',1),(64,'Maybach','italian',1),(65,'Mazda','italian',1),(66,'McLaren','italian',1),(67,'Mercedes-Benz','italian',1),(68,'Microcar','italian',1),(69,'Mitsubishi','italian',1),(70,'Morgan','italian',1),(71,'NSU','italian',1),(72,'Nissan','italian',1),(73,'Oldsmobile','italian',1),(74,'Opel','italian',1),(75,'Pagani','italian',1),(76,'Peugeot','italian',1),(77,'Piaggio','italian',1),(78,'Plymouth','italian',1),(79,'Pontiac','italian',1),(80,'Porsche','italian',1),(81,'Proton','italian',1),(82,'Renault','italian',1),(83,'Rolls Royce','italian',1),(84,'Rover','italian',1),(85,'Ruf','italian',1),(86,'Saab','italian',1),(87,'Santana','italian',1),(88,'Seat','italian',1),(89,'Skoda','italian',1),(90,'Smart','italian',1),(91,'SpeedART','italian',1),(92,'Spyker','italian',1),(93,'Ssangyong','italian',1),(94,'Subaru','italian',1),(95,'Suzuki','italian',1),(96,'TECHART','italian',1),(97,'TVR','italian',1),(98,'Talbot','italian',1),(99,'Tata','italian',1),(100,'Tesla','italian',1),(101,'Toyota','italian',1),(102,'Trabant','italian',1),(103,'Triumph','italian',1),(104,'Volkswagen','italian',1),(105,'Volvo','italian',1),(106,'Wartburg','italian',1),(107,'Westfield','italian',1),(108,'Wiesmann','italian',1),(1,'Abarth','dutch',1),(2,'Acura','dutch',1),(3,'Aixam','dutch',1),(4,'Alfa Romeo','dutch',1),(5,'Alpina','dutch',1),(6,'Andere','dutch',1),(7,'Artega','dutch',1),(8,'Asia Motors','dutch',1),(9,'Aston Martin','dutch',1),(10,'Audi','dutch',1),(11,'Austin','dutch',1),(12,'Austin Healey','dutch',1),(13,'BMW','dutch',1),(14,'Bentley','dutch',1),(15,'Borgward','dutch',1),(16,'Brilliance','dutch',1),(17,'Bugatti','dutch',1),(18,'Buick','dutch',1),(19,'Cadillac','dutch',1),(20,'Casalini','dutch',1),(21,'Caterham','dutch',1),(22,'Chevrolet','dutch',1),(23,'Chrysler','dutch',1),(24,'Citroën','dutch',1),(25,'Cobra','dutch',1),(26,'Corvette','dutch',1),(27,'Dacia','dutch',1),(28,'Daewoo','dutch',1),(29,'Daihatsu','dutch',1),(30,'DeTomaso','dutch',1),(31,'Dodge','dutch',1),(32,'Ferrari','dutch',1),(33,'Fiat','dutch',1),(34,'Fisker','dutch',1),(35,'Ford','dutch',1),(36,'GMC','dutch',1),(37,'Grecav','dutch',1),(38,'Hamann','dutch',1),(39,'Holden','dutch',1),(40,'Honda','dutch',1),(41,'Hummer','dutch',1),(42,'Hyundai','dutch',1),(43,'Infiniti','dutch',1),(44,'Isuzu','dutch',1),(45,'Iveco','dutch',1),(46,'Jaguar','dutch',1),(47,'Jeep','dutch',1),(48,'KTM','dutch',1),(49,'Kia','dutch',1),(50,'Königsegg','dutch',1),(51,'Lada','dutch',1),(52,'Lamborghini','dutch',1),(53,'Lancia','dutch',1),(54,'Land Rover','dutch',1),(55,'Landwind','dutch',1),(56,'Lexus','dutch',1),(57,'Ligier','dutch',1),(58,'Lincoln','dutch',1),(59,'Lotus','dutch',1),(60,'MG','dutch',1),(61,'MINI','dutch',1),(62,'Mahindra','dutch',1),(63,'Maserati','dutch',1),(64,'Maybach','dutch',1),(65,'Mazda','dutch',1),(66,'McLaren','dutch',1),(67,'Mercedes-Benz','dutch',1),(68,'Microcar','dutch',1),(69,'Mitsubishi','dutch',1),(70,'Morgan','dutch',1),(71,'NSU','dutch',1),(72,'Nissan','dutch',1),(73,'Oldsmobile','dutch',1),(74,'Opel','dutch',1),(75,'Pagani','dutch',1),(76,'Peugeot','dutch',1),(77,'Piaggio','dutch',1),(78,'Plymouth','dutch',1),(79,'Pontiac','dutch',1),(80,'Porsche','dutch',1),(81,'Proton','dutch',1),(82,'Renault','dutch',1),(83,'Rolls Royce','dutch',1),(84,'Rover','dutch',1),(85,'Ruf','dutch',1),(86,'Saab','dutch',1),(87,'Santana','dutch',1),(88,'Seat','dutch',1),(89,'Skoda','dutch',1),(90,'Smart','dutch',1),(91,'SpeedART','dutch',1),(92,'Spyker','dutch',1),(93,'Ssangyong','dutch',1),(94,'Subaru','dutch',1),(95,'Suzuki','dutch',1),(96,'TECHART','dutch',1),(97,'TVR','dutch',1),(98,'Talbot','dutch',1),(99,'Tata','dutch',1),(100,'Tesla','dutch',1),(101,'Toyota','dutch',1),(102,'Trabant','dutch',1),(103,'Triumph','dutch',1),(104,'Volkswagen','dutch',1),(105,'Volvo','dutch',1),(106,'Wartburg','dutch',1),(107,'Westfield','dutch',1),(108,'Wiesmann','dutch',1),(1,'Abarth','german',1),(2,'Acura','german',1),(3,'Aixam','german',1),(4,'Alfa Romeo','german',1),(5,'Alpina','german',1),(6,'Andere','german',1),(7,'Artega','german',1),(8,'Asia Motors','german',1),(9,'Aston Martin','german',1),(10,'Audi','german',1),(11,'Austin','german',1),(12,'Austin Healey','german',1),(13,'BMW','german',1),(14,'Bentley','german',1),(15,'Borgward','german',1),(16,'Brilliance','german',1),(17,'Bugatti','german',1),(18,'Buick','german',1),(19,'Cadillac','german',1),(20,'Casalini','german',1),(21,'Caterham','german',1),(22,'Chevrolet','german',1),(23,'Chrysler','german',1),(24,'Citroën','german',1),(25,'Cobra','german',1),(26,'Corvette','german',1),(27,'Dacia','german',1),(28,'Daewoo','german',1),(29,'Daihatsu','german',1),(30,'DeTomaso','german',1),(31,'Dodge','german',1),(32,'Ferrari','german',1),(33,'Fiat','german',1),(34,'Fisker','german',1),(35,'Ford','german',1),(36,'GMC','german',1),(37,'Grecav','german',1),(38,'Hamann','german',1),(39,'Holden','german',1),(40,'Honda','german',1),(41,'Hummer','german',1),(42,'Hyundai','german',1),(43,'Infiniti','german',1),(44,'Isuzu','german',1),(45,'Iveco','german',1),(46,'Jaguar','german',1),(47,'Jeep','german',1),(48,'KTM','german',1),(49,'Kia','german',1),(50,'Königsegg','german',1),(51,'Lada','german',1),(52,'Lamborghini','german',1),(53,'Lancia','german',1),(54,'Land Rover','german',1),(55,'Landwind','german',1),(56,'Lexus','german',1),(57,'Ligier','german',1),(58,'Lincoln','german',1),(59,'Lotus','german',1),(60,'MG','german',1),(61,'MINI','german',1),(62,'Mahindra','german',1),(63,'Maserati','german',1),(64,'Maybach','german',1),(65,'Mazda','german',1),(66,'McLaren','german',1),(67,'Mercedes-Benz','german',1),(68,'Microcar','german',1),(69,'Mitsubishi','german',1),(70,'Morgan','german',1),(71,'NSU','german',1),(72,'Nissan','german',1),(73,'Oldsmobile','german',1),(74,'Opel','german',1),(75,'Pagani','german',1),(76,'Peugeot','german',1),(77,'Piaggio','german',1),(78,'Plymouth','german',1),(79,'Pontiac','german',1),(80,'Porsche','german',1),(81,'Proton','german',1),(82,'Renault','german',1),(83,'Rolls Royce','german',1),(84,'Rover','german',1),(85,'Ruf','german',1),(86,'Saab','german',1),(87,'Santana','german',1),(88,'Seat','german',1),(89,'Skoda','german',1),(90,'Smart','german',1),(91,'SpeedART','german',1),(92,'Spyker','german',1),(93,'Ssangyong','german',1),(94,'Subaru','german',1),(95,'Suzuki','german',1),(96,'TECHART','german',1),(97,'TVR','german',1),(98,'Talbot','german',1),(99,'Tata','german',1),(100,'Tesla','german',1),(101,'Toyota','german',1),(102,'Trabant','german',1),(103,'Triumph','german',1),(104,'Volkswagen','german',1),(105,'Volvo','german',1),(106,'Wartburg','german',1),(107,'Westfield','german',1),(108,'Wiesmann','german',1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_manual_return`
--

DROP TABLE IF EXISTS `oxy_manual_return`;

CREATE TABLE `oxy_manual_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_manual_return`
--

LOCK TABLES `oxy_manual_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_mb_return`
--

DROP TABLE IF EXISTS `oxy_mb_return`;

CREATE TABLE `oxy_mb_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pay_to_email` varchar(128) DEFAULT NULL,
  `pay_from_email` varchar(128) DEFAULT NULL,
  `merchant_id` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `mb_transaction_id` varchar(50) DEFAULT NULL,
  `mb_amount` varchar(30) DEFAULT NULL,
  `mb_currency` varchar(10) DEFAULT NULL,
  `status` varchar(3) DEFAULT NULL,
  `md5sig` varchar(128) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `failed_reason_code` varchar(10) DEFAULT NULL,
  `sha2sig` varchar(100) DEFAULT NULL,
  `neteller_id` varchar(100) DEFAULT NULL,
  `merchant_fields` varchar(100) DEFAULT NULL,
  `entirepost` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mb_return`
--

LOCK TABLES `oxy_mb_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_mb_settings`
--

DROP TABLE IF EXISTS `oxy_mb_settings`;

CREATE TABLE `oxy_mb_settings` (
  `mb_email` varchar(128) DEFAULT NULL,
  `mb_secret` varchar(10) DEFAULT NULL,
  `mb_currency` char(3) DEFAULT NULL,
  `mb_language` char(3) DEFAULT NULL,
  `mb_pay_title` varchar(128) DEFAULT NULL,
  `mb_demo` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mb_settings`
--

LOCK TABLES `oxy_mb_settings` WRITE;
INSERT INTO `oxy_mb_settings` VALUES ('email@yoursite.com','','USD','EN','Classifieds Payment',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_messages`
--

DROP TABLE IF EXISTS `oxy_messages`;

CREATE TABLE `oxy_messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `from` int(10) DEFAULT NULL,
  `from_email` varchar(50) DEFAULT NULL,
  `from_phone` varchar(20) DEFAULT NULL,
  `to` int(10) DEFAULT NULL,
  `to_email` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `ad_id` int(10) DEFAULT NULL,
  `message` text,
  `report` tinyint(1) DEFAULT '0',
  `reply_to` int(10) DEFAULT '0',
  `starting` int(10) DEFAULT '0',
  `pending` tinyint(1) DEFAULT '0',
  `read` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_from` (`from`),
  KEY `idx_to` (`to`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_messages`
--

LOCK TABLES `oxy_messages` WRITE;
INSERT INTO `oxy_messages` VALUES (1,1,'','6384931313',1,'','2021-09-01 23:27:41','52.166.115.12',1,'Hi',0,0,0,1,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_mobile_settings`
--

DROP TABLE IF EXISTS `oxy_mobile_settings`;

CREATE TABLE `oxy_mobile_settings` (
  `enable_mobile_templates` tinyint(1) DEFAULT '0',
  `mobile_template` varchar(40) DEFAULT NULL,
  `enable_mobile_subdomain` tinyint(1) DEFAULT '0',
  `mobile_thmb_width` int(4) DEFAULT '65',
  `mobile_thmb_height` int(4) DEFAULT '50',
  `mobile_big_thmb_width` int(4) DEFAULT '250',
  `mobile_big_thmb_height` int(4) DEFAULT '220',
  `mobile_nopic` varchar(128) DEFAULT NULL,
  `mobile_big_nopic` varchar(128) DEFAULT NULL,
  `mobile_show_header` tinyint(1) DEFAULT '1',
  `mobile_header_pic` varchar(128) DEFAULT NULL,
  `mobile_header_pic_link` varchar(128) DEFAULT NULL,
  `mobile_ads_per_page` int(2) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mobile_settings`
--

LOCK TABLES `oxy_mobile_settings` WRITE;
INSERT INTO `oxy_mobile_settings` VALUES (1,'minimal_blue',0,65,50,250,220,'noimage_mobile.jpg','mobile_big_nopic.gif',0,'mobile_logo.png','',10);
UNLOCK TABLES;

--
-- Table structure for table `oxy_mobilpay_products`
--

DROP TABLE IF EXISTS `oxy_mobilpay_products`;

CREATE TABLE `oxy_mobilpay_products` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `service` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mobilpay_products`
--

LOCK TABLES `oxy_mobilpay_products` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_mobilpay_return`
--

DROP TABLE IF EXISTS `oxy_mobilpay_return`;

CREATE TABLE `oxy_mobilpay_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  `purchase` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `timestamp` varchar(30) DEFAULT NULL,
  `error` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mobilpay_return`
--

LOCK TABLES `oxy_mobilpay_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_mobilpay_settings`
--

DROP TABLE IF EXISTS `oxy_mobilpay_settings`;

CREATE TABLE `oxy_mobilpay_settings` (
  `mobilpay_signature` varchar(30) DEFAULT NULL,
  `mobilpay_certificate` varchar(100) DEFAULT NULL,
  `mobilpay_private_key` varchar(100) DEFAULT NULL,
  `mobilpay_test` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_mobilpay_settings`
--

LOCK TABLES `oxy_mobilpay_settings` WRITE;
INSERT INTO `oxy_mobilpay_settings` VALUES (NULL,NULL,NULL,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_models_dep`
--

DROP TABLE IF EXISTS `oxy_models_dep`;

CREATE TABLE `oxy_models_dep` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `dep` int(2) DEFAULT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(64) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `idx_lang_id` (`lang_id`),
  KEY `idx_dep` (`dep`)
) ENGINE=MyISAM AUTO_INCREMENT=1735 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_models_dep`
--

LOCK TABLES `oxy_models_dep` WRITE;
INSERT INTO `oxy_models_dep` VALUES (1,1,'eng','500'),(2,1,'eng','500C'),(3,1,'eng','Grande Punto'),(4,1,'eng','Punto Evo'),(5,2,'eng','MDX'),(6,2,'eng','NSX'),(7,2,'eng','RL'),(8,2,'eng','RSX'),(9,2,'eng','TL'),(10,2,'eng','TSX'),(11,3,'eng','City'),(12,3,'eng','Crossline'),(13,3,'eng','Roadline'),(14,3,'eng','Scouty R'),(15,4,'eng','8C'),(16,4,'eng','Alfa 145'),(17,4,'eng','Alfa 146'),(18,4,'eng','Alfa 147'),(19,4,'eng','Alfa 155'),(20,4,'eng','Alfa 156'),(21,4,'eng','Alfa 159'),(22,4,'eng','Alfa 164'),(23,4,'eng','Alfa 166'),(24,4,'eng','Alfa 33'),(25,4,'eng','Alfa 75'),(26,4,'eng','Alfa 90'),(27,4,'eng','Alfasud'),(28,4,'eng','Alfetta'),(29,4,'eng','Brera'),(30,4,'eng','Crosswagon'),(31,4,'eng','Giulia'),(32,4,'eng','Giulietta'),(33,4,'eng','GT'),(34,4,'eng','GTV'),(35,4,'eng','Junior'),(36,4,'eng','MiTo'),(37,4,'eng','Spider'),(38,4,'eng','Sprint'),(39,5,'eng','B10'),(40,5,'eng','B12'),(41,5,'eng','B3'),(42,5,'eng','B5'),(43,5,'eng','B6'),(44,5,'eng','B7'),(45,5,'eng','B8'),(46,5,'eng','D 10'),(47,5,'eng','D3'),(48,5,'eng','D5'),(49,5,'eng','Roadster S'),(50,5,'eng','XD3'),(51,7,'eng','GT'),(52,8,'eng','Rocsta'),(53,9,'eng','AR1'),(54,9,'eng','Cygnet'),(55,9,'eng','DB'),(56,9,'eng','DB7'),(57,9,'eng','DB9'),(58,9,'eng','DBS'),(59,9,'eng','Lagonda'),(60,9,'eng','Rapide'),(61,9,'eng','V12 Vantage'),(62,9,'eng','V8 Vantage'),(63,9,'eng','Vanquish'),(64,9,'eng','Virage'),(65,10,'eng','100'),(66,10,'eng','200'),(67,10,'eng','80'),(68,10,'eng','90'),(69,10,'eng','A1'),(70,10,'eng','A2'),(71,10,'eng','A3'),(72,10,'eng','A4'),(73,10,'eng','A4 Allroad'),(74,10,'eng','A5'),(75,10,'eng','A6'),(76,10,'eng','A6 Allroad'),(77,10,'eng','A7'),(78,10,'eng','A8'),(79,10,'eng','Cabriolet'),(80,10,'eng','Coupé'),(81,10,'eng','Q3'),(82,10,'eng','Q5'),(83,10,'eng','Q7'),(84,10,'eng','QUATTRO'),(85,10,'eng','R8'),(86,10,'eng','RS2'),(87,10,'eng','RS3'),(88,10,'eng','RS4'),(89,10,'eng','RS5'),(90,10,'eng','RS6'),(91,10,'eng','RS7'),(92,10,'eng','S2'),(93,10,'eng','S3'),(94,10,'eng','S4'),(95,10,'eng','S5'),(96,10,'eng','S6'),(97,10,'eng','S7'),(98,10,'eng','S8'),(99,10,'eng','SQ5'),(100,10,'eng','TT (All)'),(101,10,'eng','TT'),(102,10,'eng','TT RS'),(103,10,'eng','TTS'),(104,10,'eng','V8'),(105,13,'eng','Series 1 (All)'),(106,13,'eng','114'),(107,13,'eng','116'),(108,13,'eng','118'),(109,13,'eng','120'),(110,13,'eng','123'),(111,13,'eng','125'),(112,13,'eng','130'),(113,13,'eng','135'),(114,13,'eng','2002'),(115,13,'eng','Series 3 (All)'),(116,13,'eng','315'),(117,13,'eng','316'),(118,13,'eng','318'),(119,13,'eng','318 Gran Turismo'),(120,13,'eng','320'),(121,13,'eng','320 Gran Turismo'),(122,13,'eng','323'),(123,13,'eng','324'),(124,13,'eng','325'),(125,13,'eng','328'),(126,13,'eng','328 Gran Turismo'),(127,13,'eng','330'),(128,13,'eng','335'),(129,13,'eng','335 Gran Turismo'),(130,13,'eng','ActiveHybrid 3'),(131,13,'eng','Series 4 (All)'),(132,13,'eng','420'),(133,13,'eng','428'),(134,13,'eng','430'),(135,13,'eng','435'),(136,13,'eng','Series 5 (All)'),(137,13,'eng','518'),(138,13,'eng','520'),(139,13,'eng','520 Gran Turismo'),(140,13,'eng','523'),(141,13,'eng','524'),(142,13,'eng','525'),(143,13,'eng','528'),(144,13,'eng','530'),(145,13,'eng','530 Gran Turismo'),(146,13,'eng','535'),(147,13,'eng','535 Gran Turismo'),(148,13,'eng','540'),(149,13,'eng','545'),(150,13,'eng','550'),(151,13,'eng','550 Gran Turismo'),(152,13,'eng','ActiveHybrid 5'),(153,13,'eng','Series 6 (All)'),(154,13,'eng','628'),(155,13,'eng','630'),(156,13,'eng','633'),(157,13,'eng','635'),(158,13,'eng','640'),(159,13,'eng','645'),(160,13,'eng','650'),(161,13,'eng','Series 7 (All)'),(162,13,'eng','725'),(163,13,'eng','728'),(164,13,'eng','730'),(165,13,'eng','732'),(166,13,'eng','735'),(167,13,'eng','740'),(168,13,'eng','745'),(169,13,'eng','750'),(170,13,'eng','760'),(171,13,'eng','ActiveHybrid 7'),(172,13,'eng','840'),(173,13,'eng','850'),(174,13,'eng','i3'),(175,13,'eng','M Models (All)'),(176,13,'eng','M135'),(177,13,'eng','M3'),(178,13,'eng','M5'),(179,13,'eng','M6'),(180,13,'eng','X5 M'),(181,13,'eng','X6 M'),(182,13,'eng','Z3 M'),(183,13,'eng','Z4 M'),(184,13,'eng','Series X (All)'),(185,13,'eng','ActiveHybrid X6'),(186,13,'eng','X1'),(187,13,'eng','X3'),(188,13,'eng','X5'),(189,13,'eng','X5 M'),(190,13,'eng','X6'),(191,13,'eng','X6 M'),(192,13,'eng','Series Z (All)'),(193,13,'eng','Z1'),(194,13,'eng','Z3'),(195,13,'eng','Z3 M'),(196,13,'eng','Z4'),(197,13,'eng','Z4 M'),(198,13,'eng','Z8'),(199,14,'eng','Arnage'),(200,14,'eng','Azure'),(201,14,'eng','Brooklands'),(202,14,'eng','Continental (All)'),(203,14,'eng','Continental'),(204,14,'eng','Continental Flying Spur'),(205,14,'eng','Continental GT'),(206,14,'eng','Continental GTC'),(207,14,'eng','Continental Supersports'),(208,14,'eng','Eight'),(209,14,'eng','Mulsanne'),(210,14,'eng','Turbo R'),(211,14,'eng','Turbo RT'),(212,14,'eng','Turbo S'),(213,16,'eng','BC3'),(214,16,'eng','BS2'),(215,16,'eng','BS4'),(216,16,'eng','BS6'),(217,17,'eng','EB 110'),(218,17,'eng','Veyron'),(219,18,'eng','Century'),(220,18,'eng','Electra'),(221,18,'eng','Enclave'),(222,18,'eng','La Crosse'),(223,18,'eng','Le Sabre'),(224,18,'eng','Park Avenue'),(225,18,'eng','Regal'),(226,18,'eng','Riviera'),(227,18,'eng','Roadmaster'),(228,18,'eng','Skylark'),(229,19,'eng','Allante'),(230,19,'eng','ATS'),(231,19,'eng','BLS'),(232,19,'eng','CTS'),(233,19,'eng','Deville'),(234,19,'eng','Eldorado'),(235,19,'eng','Escalade'),(236,19,'eng','Fleetwood'),(237,19,'eng','Seville'),(238,19,'eng','SRX'),(239,19,'eng','STS'),(240,19,'eng','XLR'),(241,22,'eng','2500'),(242,22,'eng','Alero'),(243,22,'eng','Astro'),(244,22,'eng','Avalanche'),(245,22,'eng','Aveo'),(246,22,'eng','Beretta'),(247,22,'eng','Blazer'),(248,22,'eng','C1500'),(249,22,'eng','Camaro'),(250,22,'eng','Caprice'),(251,22,'eng','Captiva'),(252,22,'eng','Cavalier'),(253,22,'eng','Chevelle'),(254,22,'eng','Chevy Van'),(255,22,'eng','Citation'),(256,22,'eng','Colorado'),(257,22,'eng','Corsica'),(258,22,'eng','Cruze'),(259,22,'eng','El Camino'),(260,22,'eng','Epica'),(261,22,'eng','Evanda'),(262,22,'eng','Express'),(263,22,'eng','G'),(264,22,'eng','HHR'),(265,22,'eng','Impala'),(266,22,'eng','K1500'),(267,22,'eng','K30'),(268,22,'eng','Kalos'),(269,22,'eng','Lacetti'),(270,22,'eng','Lumina'),(271,22,'eng','Malibu'),(272,22,'eng','Matiz'),(273,22,'eng','Nubira'),(274,22,'eng','Orlando'),(275,22,'eng','Rezzo'),(276,22,'eng','S-10'),(277,22,'eng','Silverado'),(278,22,'eng','Spark'),(279,22,'eng','SSR'),(280,22,'eng','Suburban'),(281,22,'eng','Tahoe'),(282,22,'eng','Trailblazer'),(283,22,'eng','Trans Sport'),(284,22,'eng','Trax'),(285,22,'eng','Venture'),(286,22,'eng','Volt'),(287,23,'eng','300 M'),(288,23,'eng','300C'),(289,23,'eng','Aspen'),(290,23,'eng','Crossfire'),(291,23,'eng','Daytona'),(292,23,'eng','ES'),(293,23,'eng','Grand Voyager'),(294,23,'eng','GS'),(295,23,'eng','GTS'),(296,23,'eng','Imperial'),(297,23,'eng','Le Baron'),(298,23,'eng','Neon'),(299,23,'eng','New Yorker'),(300,23,'eng','Pacifica'),(301,23,'eng','PT Cruiser'),(302,23,'eng','Saratoga'),(303,23,'eng','Sebring'),(304,23,'eng','Stratus'),(305,23,'eng','Valiant'),(306,23,'eng','Viper'),(307,23,'eng','Vision'),(308,23,'eng','Voyager'),(309,24,'eng','2 CV'),(310,24,'eng','AX'),(311,24,'eng','Berlingo'),(312,24,'eng','BX'),(313,24,'eng','C-Crosser'),(314,24,'eng','C-Zero'),(315,24,'eng','C1'),(316,24,'eng','C2'),(317,24,'eng','C3'),(318,24,'eng','C3 Picasso'),(319,24,'eng','C4'),(320,24,'eng','C4 Aircross'),(321,24,'eng','C4 Picasso'),(322,24,'eng','C5'),(323,24,'eng','C6'),(324,24,'eng','C8'),(325,24,'eng','CX'),(326,24,'eng','DS'),(327,24,'eng','DS3'),(328,24,'eng','DS4'),(329,24,'eng','DS5'),(330,24,'eng','Evasion'),(331,24,'eng','Grand C4 Picasso'),(332,24,'eng','GSA'),(333,24,'eng','Jumper'),(334,24,'eng','Jumpy'),(335,24,'eng','Nemo'),(336,24,'eng','SAXO'),(337,24,'eng','SM'),(338,24,'eng','Visa'),(339,24,'eng','Xantia'),(340,24,'eng','XM'),(341,24,'eng','Xsara'),(342,24,'eng','Xsara Picasso'),(343,24,'eng','ZX'),(344,26,'eng','C1'),(345,26,'eng','C2'),(346,26,'eng','C3'),(347,26,'eng','C4'),(348,26,'eng','C5'),(349,26,'eng','C6'),(350,26,'eng','C7'),(351,26,'eng','Z06'),(352,26,'eng','ZR 1'),(353,27,'eng','Dokker'),(354,27,'eng','Duster'),(355,27,'eng','Lodgy'),(356,27,'eng','Logan'),(357,27,'eng','Logan Pick-Up'),(358,27,'eng','Pick Up'),(359,27,'eng','Sandero'),(360,28,'eng','Espero'),(361,28,'eng','Evanda'),(362,28,'eng','Kalos'),(363,28,'eng','Korando'),(364,28,'eng','Lacetti'),(365,28,'eng','Lanos'),(366,28,'eng','Leganza'),(367,28,'eng','Matiz'),(368,28,'eng','Musso'),(369,28,'eng','Nexia'),(370,28,'eng','Nubira'),(371,28,'eng','Rezzo'),(372,28,'eng','Tacuma'),(373,29,'eng','Applause'),(374,29,'eng','Charade'),(375,29,'eng','Charmant'),(376,29,'eng','Copen'),(377,29,'eng','Cuore'),(378,29,'eng','Feroza/Sportrak'),(379,29,'eng','Freeclimber'),(380,29,'eng','Gran Move'),(381,29,'eng','Hijet'),(382,29,'eng','MATERIA'),(383,29,'eng','Move'),(384,29,'eng','Rocky/Fourtrak'),(385,29,'eng','Sirion'),(386,29,'eng','Terios'),(387,29,'eng','TREVIS'),(388,29,'eng','YRV'),(389,30,'eng','Guarà'),(390,30,'eng','Pantera'),(391,31,'eng','Avenger'),(392,31,'eng','Caliber'),(393,31,'eng','Challenger'),(394,31,'eng','Charger'),(395,31,'eng','Dakota'),(396,31,'eng','Demon'),(397,31,'eng','Durango'),(398,31,'eng','Grand Caravan'),(399,31,'eng','Hornet'),(400,31,'eng','Journey'),(401,31,'eng','Magnum'),(402,31,'eng','Neon'),(403,31,'eng','Nitro'),(404,31,'eng','RAM'),(405,31,'eng','Stealth'),(406,31,'eng','Viper'),(407,32,'eng','208'),(408,32,'eng','246'),(409,32,'eng','250'),(410,32,'eng','275'),(411,32,'eng','288'),(412,32,'eng','308'),(413,32,'eng','328'),(414,32,'eng','330'),(415,32,'eng','348'),(416,32,'eng','360'),(417,32,'eng','365'),(418,32,'eng','400'),(419,32,'eng','412'),(420,32,'eng','456'),(421,32,'eng','458'),(422,32,'eng','512'),(423,32,'eng','550'),(424,32,'eng','575'),(425,32,'eng','599 GTB'),(426,32,'eng','612'),(427,32,'eng','750'),(428,32,'eng','California'),(429,32,'eng','Daytona'),(430,32,'eng','Dino GT4'),(431,32,'eng','Enzo Ferrari'),(432,32,'eng','F12'),(433,32,'eng','F355'),(434,32,'eng','F40'),(435,32,'eng','F430'),(436,32,'eng','F50'),(437,32,'eng','FF'),(438,32,'eng','LaFerrari'),(439,32,'eng','Mondial'),(440,32,'eng','Superamerica'),(441,32,'eng','Testarossa'),(442,33,'eng','124'),(443,33,'eng','126'),(444,33,'eng','127'),(445,33,'eng','130'),(446,33,'eng','131'),(447,33,'eng','500'),(448,33,'eng','500C'),(449,33,'eng','500L'),(450,33,'eng','Barchetta'),(451,33,'eng','Brava'),(452,33,'eng','Bravo'),(453,33,'eng','Cinquecento'),(454,33,'eng','Coupe'),(455,33,'eng','Croma'),(456,33,'eng','Dino'),(457,33,'eng','Doblo'),(458,33,'eng','Ducato'),(459,33,'eng','Fiorino'),(460,33,'eng','Freemont'),(461,33,'eng','Grande Punto'),(462,33,'eng','Idea'),(463,33,'eng','Linea'),(464,33,'eng','Marea'),(465,33,'eng','Marengo'),(466,33,'eng','Multipla'),(467,33,'eng','New Panda'),(468,33,'eng','Palio'),(469,33,'eng','Panda'),(470,33,'eng','Punto'),(471,33,'eng','Punto Evo'),(472,33,'eng','Qubo'),(473,33,'eng','Regata'),(474,33,'eng','Ritmo'),(475,33,'eng','Scudo'),(476,33,'eng','Sedici'),(477,33,'eng','Seicento'),(478,33,'eng','Spider Europa'),(479,33,'eng','Stilo'),(480,33,'eng','Strada'),(481,33,'eng','Tempra'),(482,33,'eng','Tipo'),(483,33,'eng','Ulysse'),(484,33,'eng','Uno'),(485,33,'eng','X 1/9'),(486,34,'eng','Karma'),(487,35,'eng','Aerostar'),(488,35,'eng','B-Max'),(489,35,'eng','Bronco'),(490,35,'eng','C-Max'),(491,35,'eng','Capri'),(492,35,'eng','Cougar'),(493,35,'eng','Courier'),(494,35,'eng','Crown'),(495,35,'eng','Econoline'),(496,35,'eng','Econovan'),(497,35,'eng','Edge'),(498,35,'eng','Escape'),(499,35,'eng','Escort'),(500,35,'eng','Excursion'),(501,35,'eng','Expedition'),(502,35,'eng','Explorer'),(503,35,'eng','Express'),(504,35,'eng','F 150'),(505,35,'eng','F 250'),(506,35,'eng','F 350'),(507,35,'eng','Fairlane'),(508,35,'eng','Falcon'),(509,35,'eng','Fiesta'),(510,35,'eng','Flex'),(511,35,'eng','Focus'),(512,35,'eng','Fusion'),(513,35,'eng','Galaxy'),(514,35,'eng','Granada'),(515,35,'eng','Grand C-Max'),(516,35,'eng','GT'),(517,35,'eng','Ka'),(518,35,'eng','Kuga'),(519,35,'eng','Maverick'),(520,35,'eng','Mercury'),(521,35,'eng','Mondeo'),(522,35,'eng','Mustang'),(523,35,'eng','Orion'),(524,35,'eng','Probe'),(525,35,'eng','Puma'),(526,35,'eng','Ranger'),(527,35,'eng','S-Max'),(528,35,'eng','Scorpio'),(529,35,'eng','Sierra'),(530,35,'eng','Sportka'),(531,35,'eng','Streetka'),(532,35,'eng','Taunus'),(533,35,'eng','Taurus'),(534,35,'eng','Thunderbird'),(535,35,'eng','Tourneo'),(536,35,'eng','Transit (All)'),(537,35,'eng','Transit'),(538,35,'eng','Transit Connect'),(539,35,'eng','Windstar'),(540,36,'eng','Acadia'),(541,36,'eng','Envoy'),(542,36,'eng','Safari'),(543,36,'eng','Savana'),(544,36,'eng','Sierra'),(545,36,'eng','Sonoma'),(546,36,'eng','Syclone'),(547,36,'eng','Typhoon'),(548,36,'eng','Vandura'),(549,36,'eng','Yukon'),(550,37,'eng','Sonique'),(551,40,'eng','Accord'),(552,40,'eng','Aerodeck'),(553,40,'eng','Civic'),(554,40,'eng','Concerto'),(555,40,'eng','CR-V'),(556,40,'eng','CR-Z'),(557,40,'eng','CRX'),(558,40,'eng','Element'),(559,40,'eng','FR-V'),(560,40,'eng','HR-V'),(561,40,'eng','Insight'),(562,40,'eng','Integra'),(563,40,'eng','Jazz'),(564,40,'eng','Legend'),(565,40,'eng','Logo'),(566,40,'eng','NSX'),(567,40,'eng','Odyssey'),(568,40,'eng','Prelude'),(569,40,'eng','S2000'),(570,40,'eng','Shuttle'),(571,40,'eng','Stream'),(572,41,'eng','H1'),(573,41,'eng','H2'),(574,41,'eng','H3'),(575,42,'eng','Accent'),(576,42,'eng','Atos'),(577,42,'eng','Azera'),(578,42,'eng','Coupe'),(579,42,'eng','Elantra'),(580,42,'eng','Excel'),(581,42,'eng','Galloper'),(582,42,'eng','Genesis'),(583,42,'eng','Getz'),(584,42,'eng','Grandeur'),(585,42,'eng','H 100'),(586,42,'eng','H 200'),(587,42,'eng','H-1'),(588,42,'eng','H-1 Starex'),(589,42,'eng','i10'),(590,42,'eng','i20'),(591,42,'eng','i30'),(592,42,'eng','i40'),(593,42,'eng','i50'),(594,42,'eng','ix20'),(595,42,'eng','ix35'),(596,42,'eng','ix55'),(597,42,'eng','Lantra'),(598,42,'eng','Matrix'),(599,42,'eng','Pony'),(600,42,'eng','S-Coupe'),(601,42,'eng','Santa Fe'),(602,42,'eng','Santamo'),(603,42,'eng','Sonata'),(604,42,'eng','Terracan'),(605,42,'eng','Trajet'),(606,42,'eng','Tucson'),(607,42,'eng','Veloster'),(608,42,'eng','Veracruz'),(609,42,'eng','XG 30'),(610,42,'eng','XG 350'),(611,43,'eng','EX35'),(612,43,'eng','EX37'),(613,43,'eng','FX'),(614,43,'eng','G35'),(615,43,'eng','G37'),(616,43,'eng','M30'),(617,43,'eng','M35'),(618,43,'eng','M37'),(619,43,'eng','Q45'),(620,43,'eng','QX56'),(621,44,'eng','Campo'),(622,44,'eng','D-Max'),(623,44,'eng','Gemini'),(624,44,'eng','Midi'),(625,44,'eng','PICK UP'),(626,44,'eng','Trooper'),(627,45,'eng','Massif'),(628,46,'eng','Daimler'),(629,46,'eng','E-Type'),(630,46,'eng','F-Type'),(631,46,'eng','MK II'),(632,46,'eng','S-Type'),(633,46,'eng','X-Type'),(634,46,'eng','XF'),(635,46,'eng','XJ'),(636,46,'eng','XJ12'),(637,46,'eng','XJ40'),(638,46,'eng','XJ6'),(639,46,'eng','XJ8'),(640,46,'eng','XJR'),(641,46,'eng','XJS'),(642,46,'eng','XJSC'),(643,46,'eng','XK'),(644,46,'eng','XKR'),(645,47,'eng','Cherokee'),(646,47,'eng','CJ'),(647,47,'eng','Comanche'),(648,47,'eng','Commander'),(649,47,'eng','Compass'),(650,47,'eng','Grand Cherokee'),(651,47,'eng','Patriot'),(652,47,'eng','Renegade'),(653,47,'eng','Wagoneer'),(654,47,'eng','Willys'),(655,47,'eng','Wrangler'),(656,48,'eng','X-BOW'),(657,49,'eng','Besta'),(658,49,'eng','Borrego'),(659,49,'eng','Carens'),(660,49,'eng','Carnival'),(661,49,'eng','cee\'d'),(662,49,'eng','cee\'d Sportswagon'),(663,49,'eng','Cerato'),(664,49,'eng','Clarus'),(665,49,'eng','Elan'),(666,49,'eng','Joice'),(667,49,'eng','K2500'),(668,49,'eng','K2700'),(669,49,'eng','Leo'),(670,49,'eng','Magentis'),(671,49,'eng','Mentor'),(672,49,'eng','Mini'),(673,49,'eng','Opirus'),(674,49,'eng','Optima'),(675,49,'eng','Picanto'),(676,49,'eng','Pregio'),(677,49,'eng','Pride'),(678,49,'eng','pro_cee\'d'),(679,49,'eng','Retona'),(680,49,'eng','Rio'),(681,49,'eng','Roadster'),(682,49,'eng','Rocsta'),(683,49,'eng','Sephia'),(684,49,'eng','Shuma'),(685,49,'eng','Sorento'),(686,49,'eng','Soul'),(687,49,'eng','Sportage'),(688,49,'eng','Venga'),(689,50,'eng','CCR'),(690,51,'eng','110'),(691,51,'eng','111'),(692,51,'eng','112'),(693,51,'eng','1200'),(694,51,'eng','2107'),(695,51,'eng','2110'),(696,51,'eng','2111'),(697,51,'eng','2112'),(698,51,'eng','Aleko'),(699,51,'eng','Forma'),(700,51,'eng','Kalina'),(701,51,'eng','Niva'),(702,51,'eng','Nova'),(703,51,'eng','Priora'),(704,51,'eng','Samara'),(705,52,'eng','Aventador'),(706,52,'eng','Countach'),(707,52,'eng','Diablo'),(708,52,'eng','Espada'),(709,52,'eng','Gallardo'),(710,52,'eng','Jalpa'),(711,52,'eng','LM'),(712,52,'eng','Miura'),(713,52,'eng','Murciélago'),(714,52,'eng','Urraco'),(715,53,'eng','Beta'),(716,53,'eng','Dedra'),(717,53,'eng','Delta'),(718,53,'eng','Flaminia'),(719,53,'eng','Flavia'),(720,53,'eng','Fulvia'),(721,53,'eng','Gamma'),(722,53,'eng','Kappa'),(723,53,'eng','Lybra'),(724,53,'eng','MUSA'),(725,53,'eng','Phedra'),(726,53,'eng','Prisma'),(727,53,'eng','Stratos'),(728,53,'eng','Thema'),(729,53,'eng','Thesis'),(730,53,'eng','Voyager'),(731,53,'eng','Ypsilon'),(732,53,'eng','Zeta'),(733,54,'eng','Defender'),(734,54,'eng','Discovery'),(735,54,'eng','Freelander'),(736,54,'eng','Range Rover'),(737,54,'eng','Range Rover Evoque'),(738,54,'eng','Range Rover Sport'),(739,54,'eng','Serie I'),(740,54,'eng','Serie II'),(741,54,'eng','Serie III'),(742,55,'eng','CV-9'),(743,55,'eng','S'),(744,55,'eng','SC2'),(745,55,'eng','SC4'),(746,56,'eng','CT 200h'),(747,56,'eng','ES Series (All)'),(748,56,'eng','ES 300'),(749,56,'eng','ES 330'),(750,56,'eng','ES 350'),(751,56,'eng','GS Series (All)'),(752,56,'eng','GS 250'),(753,56,'eng','GS 300'),(754,56,'eng','GS 350'),(755,56,'eng','GS 430'),(756,56,'eng','GS 450'),(757,56,'eng','GS 460'),(758,56,'eng','GX 470'),(759,56,'eng','IS Series (All)'),(760,56,'eng','IS 200'),(761,56,'eng','IS 220'),(762,56,'eng','IS 250'),(763,56,'eng','IS 300'),(764,56,'eng','IS 350'),(765,56,'eng','IS-F'),(766,56,'eng','LS Series (All)'),(767,56,'eng','LS 400'),(768,56,'eng','LS 430'),(769,56,'eng','LS 460'),(770,56,'eng','LS 600'),(771,56,'eng','LX Series (All)'),(772,56,'eng','LX 470'),(773,56,'eng','LX 570'),(774,56,'eng','RX Series (All)'),(775,56,'eng','RX 300'),(776,56,'eng','RX 330'),(777,56,'eng','RX 350'),(778,56,'eng','RX 400'),(779,56,'eng','RX 450'),(780,56,'eng','SC 400'),(781,56,'eng','SC 430'),(782,57,'eng','Ambra'),(783,57,'eng','Nova'),(784,57,'eng','Optima'),(785,57,'eng','X - Too'),(786,58,'eng','Aviator'),(787,58,'eng','Continental'),(788,58,'eng','LS'),(789,58,'eng','Mark'),(790,58,'eng','Navigator'),(791,58,'eng','Town Car'),(792,59,'eng','340 R'),(793,59,'eng','Cortina'),(794,59,'eng','Elan'),(795,59,'eng','Elise'),(796,59,'eng','Elite'),(797,59,'eng','Esprit'),(798,59,'eng','Europa'),(799,59,'eng','Evora'),(800,59,'eng','Excel'),(801,59,'eng','Exige'),(802,59,'eng','Super Seven'),(803,60,'eng','MGA'),(804,60,'eng','MGB'),(805,60,'eng','MGF'),(806,60,'eng','Midget'),(807,60,'eng','Montego'),(808,60,'eng','TD'),(809,60,'eng','TF'),(810,60,'eng','ZR'),(811,60,'eng','ZS'),(812,60,'eng','ZT'),(813,61,'eng','Cabrio Series (All)'),(814,61,'eng','Cooper Cabrio'),(815,61,'eng','Cooper D Cabrio'),(816,61,'eng','Cooper S Cabrio'),(817,61,'eng','Cooper SD Cabrio'),(818,61,'eng','John Cooper Works Cabrio'),(819,61,'eng','One Cabrio'),(820,61,'eng','Clubman Series (All)'),(821,61,'eng','Cooper Clubman'),(822,61,'eng','Cooper D Clubman'),(823,61,'eng','Cooper S Clubman'),(824,61,'eng','Cooper SD Clubman'),(825,61,'eng','John Cooper Works Clubman'),(826,61,'eng','One Clubman'),(827,61,'eng','One D Clubman'),(828,61,'eng','Clubvan'),(829,61,'eng','Countryman Series (All)'),(830,61,'eng','Cooper Countryman'),(831,61,'eng','Cooper D Countryman'),(832,61,'eng','Cooper S Countryman'),(833,61,'eng','Cooper SD Countryman'),(834,61,'eng','John Cooper Works Countryman'),(835,61,'eng','One Countryman'),(836,61,'eng','One D Countryman'),(837,61,'eng','Coupe Series (All)'),(838,61,'eng','Cooper Coupé'),(839,61,'eng','Cooper S Coupé'),(840,61,'eng','Cooper SD Coupé'),(841,61,'eng','John Cooper Works Coupé'),(842,61,'eng','MINI (All)'),(843,61,'eng','1000'),(844,61,'eng','1300'),(845,61,'eng','Cooper'),(846,61,'eng','Cooper D'),(847,61,'eng','Cooper S'),(848,61,'eng','Cooper SD'),(849,61,'eng','John Cooper Works'),(850,61,'eng','ONE'),(851,61,'eng','One D'),(852,61,'eng','Paceman Series (All)'),(853,61,'eng','Cooper D Paceman'),(854,61,'eng','Cooper Paceman'),(855,61,'eng','Cooper S Paceman'),(856,61,'eng','Cooper SD Paceman'),(857,61,'eng','John Cooper Works Paceman'),(858,61,'eng','Roadster Series (All)'),(859,61,'eng','Cooper Roadster'),(860,61,'eng','Cooper S Roadster'),(861,61,'eng','Cooper SD Roadster'),(862,61,'eng','John Cooper Works Roadster'),(863,63,'eng','222'),(864,63,'eng','224'),(865,63,'eng','228'),(866,63,'eng','3200'),(867,63,'eng','418'),(868,63,'eng','420'),(869,63,'eng','4200'),(870,63,'eng','422'),(871,63,'eng','424'),(872,63,'eng','430'),(873,63,'eng','Biturbo'),(874,63,'eng','Ghibli'),(875,63,'eng','GranCabrio'),(876,63,'eng','Gransport'),(877,63,'eng','Granturismo'),(878,63,'eng','Indy'),(879,63,'eng','Karif'),(880,63,'eng','MC12'),(881,63,'eng','Merak'),(882,63,'eng','Quattroporte'),(883,63,'eng','Shamal'),(884,63,'eng','Spyder'),(885,64,'eng','57'),(886,64,'eng','62'),(887,65,'eng','121'),(888,65,'eng','2'),(889,65,'eng','3'),(890,65,'eng','323'),(891,65,'eng','5'),(892,65,'eng','6'),(893,65,'eng','626'),(894,65,'eng','929'),(895,65,'eng','B series'),(896,65,'eng','Bongo'),(897,65,'eng','BT-50'),(898,65,'eng','CX-5'),(899,65,'eng','CX-7'),(900,65,'eng','CX-9'),(901,65,'eng','Demio'),(902,65,'eng','E series'),(903,65,'eng','Millenia'),(904,65,'eng','MPV'),(905,65,'eng','MX-3'),(906,65,'eng','MX-5'),(907,65,'eng','MX-6'),(908,65,'eng','Premacy'),(909,65,'eng','Protege'),(910,65,'eng','RX-6'),(911,65,'eng','RX-7'),(912,65,'eng','RX-8'),(913,65,'eng','Tribute'),(914,65,'eng','Xedos'),(915,66,'eng','MP4-12C'),(916,67,'eng','190'),(917,67,'eng','200'),(918,67,'eng','220'),(919,67,'eng','230'),(920,67,'eng','240'),(921,67,'eng','250'),(922,67,'eng','260'),(923,67,'eng','270'),(924,67,'eng','280'),(925,67,'eng','290'),(926,67,'eng','300'),(927,67,'eng','320'),(928,67,'eng','350'),(929,67,'eng','380'),(930,67,'eng','400'),(931,67,'eng','416'),(932,67,'eng','420'),(933,67,'eng','450'),(934,67,'eng','500'),(935,67,'eng','560'),(936,67,'eng','600'),(937,67,'eng','A-Klasse (All)'),(938,67,'eng','A 140'),(939,67,'eng','A 150'),(940,67,'eng','A 160'),(941,67,'eng','A 170'),(942,67,'eng','A 180'),(943,67,'eng','A 190'),(944,67,'eng','A 200'),(945,67,'eng','A 210'),(946,67,'eng','A 220'),(947,67,'eng','A 250'),(948,67,'eng','A 45 AMG'),(949,67,'eng','B-Klasse (All)'),(950,67,'eng','B 150'),(951,67,'eng','B 160'),(952,67,'eng','B 170'),(953,67,'eng','B 180'),(954,67,'eng','B 200'),(955,67,'eng','B 220'),(956,67,'eng','B 250'),(957,67,'eng','C-Klasse (All)'),(958,67,'eng','C 160'),(959,67,'eng','C 180'),(960,67,'eng','C 200'),(961,67,'eng','C 220'),(962,67,'eng','C 230'),(963,67,'eng','C 240'),(964,67,'eng','C 250'),(965,67,'eng','C 270'),(966,67,'eng','C 280'),(967,67,'eng','C 30 AMG'),(968,67,'eng','C 300'),(969,67,'eng','C 32 AMG'),(970,67,'eng','C 320'),(971,67,'eng','C 350'),(972,67,'eng','C 36 AMG'),(973,67,'eng','C 43 AMG'),(974,67,'eng','C 55 AMG'),(975,67,'eng','C 63 AMG'),(976,67,'eng','CE-Klasse (All)'),(977,67,'eng','CE 200'),(978,67,'eng','CE 220'),(979,67,'eng','CE 230'),(980,67,'eng','CE 280'),(981,67,'eng','CE 300'),(982,67,'eng','Citan'),(983,67,'eng','CL-Klasse (All)'),(984,67,'eng','CL 160'),(985,67,'eng','CL 180'),(986,67,'eng','CL 200'),(987,67,'eng','CL 220'),(988,67,'eng','CL 230'),(989,67,'eng','CL 320'),(990,67,'eng','CL 420'),(991,67,'eng','CL 500'),(992,67,'eng','CL 55 AMG'),(993,67,'eng','CL 600'),(994,67,'eng','CL 63 AMG'),(995,67,'eng','CL 65 AMG'),(996,67,'eng','CLA-Klasse (All)'),(997,67,'eng','CLA 180'),(998,67,'eng','CLA 200'),(999,67,'eng','CLA 220'),(1000,67,'eng','CLA 250'),(1001,67,'eng','CLC-Klasse (All)'),(1002,67,'eng','CLC 160'),(1003,67,'eng','CLC 180'),(1004,67,'eng','CLC 200'),(1005,67,'eng','CLC 220'),(1006,67,'eng','CLC 230'),(1007,67,'eng','CLC 250'),(1008,67,'eng','CLC 350'),(1009,67,'eng','CLK-Klasse (All)'),(1010,67,'eng','CLK 200'),(1011,67,'eng','CLK 220'),(1012,67,'eng','CLK 230'),(1013,67,'eng','CLK 240'),(1014,67,'eng','CLK 270'),(1015,67,'eng','CLK 280'),(1016,67,'eng','CLK 320'),(1017,67,'eng','CLK 350'),(1018,67,'eng','CLK 430'),(1019,67,'eng','CLK 500'),(1020,67,'eng','CLK 55 AMG'),(1021,67,'eng','CLK 63 AMG'),(1022,67,'eng','CLS-Klasse (All)'),(1023,67,'eng','CLS 250'),(1024,67,'eng','CLS 280'),(1025,67,'eng','CLS 300'),(1026,67,'eng','CLS 320'),(1027,67,'eng','CLS 350'),(1028,67,'eng','CLS 500'),(1029,67,'eng','CLS 55 AMG'),(1030,67,'eng','CLS 63 AMG'),(1031,67,'eng','E-Klasse (All)'),(1032,67,'eng','E 200'),(1033,67,'eng','E 220'),(1034,67,'eng','E 230'),(1035,67,'eng','E 240'),(1036,67,'eng','E 250'),(1037,67,'eng','E 260'),(1038,67,'eng','E 270'),(1039,67,'eng','E 280'),(1040,67,'eng','E 290'),(1041,67,'eng','E 300'),(1042,67,'eng','E 320'),(1043,67,'eng','E 350'),(1044,67,'eng','E 36 AMG'),(1045,67,'eng','E 400'),(1046,67,'eng','E 420'),(1047,67,'eng','E 430'),(1048,67,'eng','E 50'),(1049,67,'eng','E 500'),(1050,67,'eng','E 55 AMG'),(1051,67,'eng','E 60 AMG'),(1052,67,'eng','E 63 AMG'),(1053,67,'eng','G-Klasse (All)'),(1054,67,'eng','G 230'),(1055,67,'eng','G 240'),(1056,67,'eng','G 250'),(1057,67,'eng','G 270'),(1058,67,'eng','G 280'),(1059,67,'eng','G 290'),(1060,67,'eng','G 300'),(1061,67,'eng','G 320'),(1062,67,'eng','G 350'),(1063,67,'eng','G 400'),(1064,67,'eng','G 500'),(1065,67,'eng','G 55 AMG'),(1066,67,'eng','G 63 AMG'),(1067,67,'eng','G 65 AMG'),(1068,67,'eng','GL-Klasse (All)'),(1069,67,'eng','GL 320'),(1070,67,'eng','GL 350'),(1071,67,'eng','GL 420'),(1072,67,'eng','GL 450'),(1073,67,'eng','GL 500'),(1074,67,'eng','GL 55 AMG'),(1075,67,'eng','GL 63 AMG'),(1076,67,'eng','GLK-Klasse (All)'),(1077,67,'eng','GLK 200'),(1078,67,'eng','GLK 220'),(1079,67,'eng','GLK 250'),(1080,67,'eng','GLK 280'),(1081,67,'eng','GLK 300'),(1082,67,'eng','GLK 320'),(1083,67,'eng','GLK 350'),(1084,67,'eng','MB 100'),(1085,67,'eng','ML-Klasse (All)'),(1086,67,'eng','ML 230'),(1087,67,'eng','ML 250'),(1088,67,'eng','ML 270'),(1089,67,'eng','ML 280'),(1090,67,'eng','ML 300'),(1091,67,'eng','ML 320'),(1092,67,'eng','ML 350'),(1093,67,'eng','ML 400'),(1094,67,'eng','ML 420'),(1095,67,'eng','ML 430'),(1096,67,'eng','ML 450'),(1097,67,'eng','ML 500'),(1098,67,'eng','ML 55 AMG'),(1099,67,'eng','ML 63 AMG'),(1100,67,'eng','R-Klasse (All)'),(1101,67,'eng','R 280'),(1102,67,'eng','R 300'),(1103,67,'eng','R 320'),(1104,67,'eng','R 350'),(1105,67,'eng','R 500'),(1106,67,'eng','R 63 AMG'),(1107,67,'eng','S-Klasse (All)'),(1108,67,'eng','S 250'),(1109,67,'eng','S 260'),(1110,67,'eng','S 280'),(1111,67,'eng','S 300'),(1112,67,'eng','S 320'),(1113,67,'eng','S 350'),(1114,67,'eng','S 400'),(1115,67,'eng','S 420'),(1116,67,'eng','S 430'),(1117,67,'eng','S 450'),(1118,67,'eng','S 500'),(1119,67,'eng','S 55'),(1120,67,'eng','S 550'),(1121,67,'eng','S 600'),(1122,67,'eng','S 63 AMG'),(1123,67,'eng','S 65 AMG'),(1124,67,'eng','SL-Klasse (All)'),(1125,67,'eng','SL 280'),(1126,67,'eng','SL 300'),(1127,67,'eng','SL 320'),(1128,67,'eng','SL 350'),(1129,67,'eng','SL 380'),(1130,67,'eng','SL 420'),(1131,67,'eng','SL 450'),(1132,67,'eng','SL 500'),(1133,67,'eng','SL 55 AMG'),(1134,67,'eng','SL 560'),(1135,67,'eng','SL 60 AMG'),(1136,67,'eng','SL 600'),(1137,67,'eng','SL 63 AMG'),(1138,67,'eng','SL 65 AMG'),(1139,67,'eng','SL 70 AMG'),(1140,67,'eng','SL 73 AMG'),(1141,67,'eng','SLK-Klasse (All)'),(1142,67,'eng','SLK 200'),(1143,67,'eng','SLK 230'),(1144,67,'eng','SLK 250'),(1145,67,'eng','SLK 280'),(1146,67,'eng','SLK 300'),(1147,67,'eng','SLK 32 AMG'),(1148,67,'eng','SLK 320'),(1149,67,'eng','SLK 350'),(1150,67,'eng','SLK 55 AMG'),(1151,67,'eng','SLR'),(1152,67,'eng','SLS AMG'),(1153,67,'eng','Sprinter'),(1154,67,'eng','V-Klasse (All)'),(1155,67,'eng','V 200'),(1156,67,'eng','V 220'),(1157,67,'eng','V 230'),(1158,67,'eng','V 280'),(1159,67,'eng','Vaneo'),(1160,67,'eng','Vario'),(1161,67,'eng','Viano'),(1162,67,'eng','Vito'),(1163,68,'eng','DUÈ'),(1164,68,'eng','M.Go'),(1165,68,'eng','M-8'),(1166,68,'eng','MC1'),(1167,68,'eng','MC2'),(1168,69,'eng','3000 GT'),(1169,69,'eng','ASX'),(1170,69,'eng','Canter'),(1171,69,'eng','Carisma'),(1172,69,'eng','Colt'),(1173,69,'eng','Cordia'),(1174,69,'eng','Cosmos'),(1175,69,'eng','Diamante'),(1176,69,'eng','Eclipse'),(1177,69,'eng','Galant'),(1178,69,'eng','Galloper'),(1179,69,'eng','Grandis'),(1180,69,'eng','i-MiEV'),(1181,69,'eng','L200'),(1182,69,'eng','L300'),(1183,69,'eng','L400'),(1184,69,'eng','Lancer'),(1185,69,'eng','Mirage'),(1186,69,'eng','Montero'),(1187,69,'eng','Outlander'),(1188,69,'eng','Pajero'),(1189,69,'eng','Pajero Pinin'),(1190,69,'eng','Pick-up'),(1191,69,'eng','Santamo'),(1192,69,'eng','Sapporo'),(1193,69,'eng','Sigma'),(1194,69,'eng','Space Gear'),(1195,69,'eng','Space Runner'),(1196,69,'eng','Space Star'),(1197,69,'eng','Space Wagon'),(1198,69,'eng','Starion'),(1199,69,'eng','Tredia'),(1200,70,'eng','4/4'),(1201,70,'eng','Aero 8'),(1202,70,'eng','Plus 4'),(1203,70,'eng','Plus 8'),(1204,70,'eng','Roadster'),(1205,72,'eng','100 NX'),(1206,72,'eng','200 SX'),(1207,72,'eng','240 SX'),(1208,72,'eng','280 ZX'),(1209,72,'eng','300 ZX'),(1210,72,'eng','350Z'),(1211,72,'eng','370Z'),(1212,72,'eng','Almera'),(1213,72,'eng','Almera Tino'),(1214,72,'eng','Altima'),(1215,72,'eng','Armada'),(1216,72,'eng','Bluebird'),(1217,72,'eng','Cabstar'),(1218,72,'eng','Cargo'),(1219,72,'eng','Cherry'),(1220,72,'eng','Cube'),(1221,72,'eng','Evalia'),(1222,72,'eng','Frontier'),(1223,72,'eng','GT-R'),(1224,72,'eng','Interstar'),(1225,72,'eng','Juke'),(1226,72,'eng','King Cab'),(1227,72,'eng','Kubistar'),(1228,72,'eng','Laurel'),(1229,72,'eng','Leaf'),(1230,72,'eng','Maxima'),(1231,72,'eng','Micra'),(1232,72,'eng','Murano'),(1233,72,'eng','Navara'),(1234,72,'eng','Note'),(1235,72,'eng','NP 300'),(1236,72,'eng','NV200'),(1237,72,'eng','NV400'),(1238,72,'eng','Pathfinder'),(1239,72,'eng','Patrol'),(1240,72,'eng','PickUp'),(1241,72,'eng','Pixo'),(1242,72,'eng','Prairie'),(1243,72,'eng','Primastar'),(1244,72,'eng','Primera'),(1245,72,'eng','Qashqai'),(1246,72,'eng','Qashqai+2'),(1247,72,'eng','Quest'),(1248,72,'eng','Sentra'),(1249,72,'eng','Serena'),(1250,72,'eng','Silvia'),(1251,72,'eng','Skyline'),(1252,72,'eng','Sunny'),(1253,72,'eng','Terrano'),(1254,72,'eng','Tiida'),(1255,72,'eng','Titan'),(1256,72,'eng','Trade'),(1257,72,'eng','Urvan'),(1258,72,'eng','Vanette'),(1259,72,'eng','X-Trail'),(1260,73,'eng','Bravada'),(1261,73,'eng','Custom Cruiser'),(1262,73,'eng','Cutlass'),(1263,73,'eng','Delta 88'),(1264,73,'eng','Silhouette'),(1265,73,'eng','Supreme'),(1266,73,'eng','Toronado'),(1267,74,'eng','Adam'),(1268,74,'eng','Agila'),(1269,74,'eng','Ampera'),(1270,74,'eng','Antara'),(1271,74,'eng','Arena'),(1272,74,'eng','Ascona'),(1273,74,'eng','Astra'),(1274,74,'eng','Calibra'),(1275,74,'eng','Campo'),(1276,74,'eng','Cascada'),(1277,74,'eng','Cavalier'),(1278,74,'eng','Combo'),(1279,74,'eng','Commodore'),(1280,74,'eng','Corsa'),(1281,74,'eng','Diplomat'),(1282,74,'eng','Frontera'),(1283,74,'eng','GT'),(1284,74,'eng','Insignia'),(1285,74,'eng','Kadett'),(1286,74,'eng','Manta'),(1287,74,'eng','Meriva'),(1288,74,'eng','Mokka'),(1289,74,'eng','Monterey'),(1290,74,'eng','Monza'),(1291,74,'eng','Movano'),(1292,74,'eng','Nova'),(1293,74,'eng','Omega'),(1294,74,'eng','Pick Up Sportscap'),(1295,74,'eng','Rekord'),(1296,74,'eng','Senator'),(1297,74,'eng','Signum'),(1298,74,'eng','Sintra'),(1299,74,'eng','Speedster'),(1300,74,'eng','Tigra'),(1301,74,'eng','Vectra'),(1302,74,'eng','Vivaro'),(1303,74,'eng','Zafira'),(1304,74,'eng','Zafira Tourer'),(1305,76,'eng','1007'),(1306,76,'eng','104'),(1307,76,'eng','106'),(1308,76,'eng','107'),(1309,76,'eng','2008'),(1310,76,'eng','204'),(1311,76,'eng','205'),(1312,76,'eng','206'),(1313,76,'eng','207'),(1314,76,'eng','208'),(1315,76,'eng','3008'),(1316,76,'eng','301'),(1317,76,'eng','304'),(1318,76,'eng','305'),(1319,76,'eng','306'),(1320,76,'eng','307'),(1321,76,'eng','308'),(1322,76,'eng','309'),(1323,76,'eng','4007'),(1324,76,'eng','4008'),(1325,76,'eng','404'),(1326,76,'eng','405'),(1327,76,'eng','406'),(1328,76,'eng','407'),(1329,76,'eng','5008'),(1330,76,'eng','504'),(1331,76,'eng','505'),(1332,76,'eng','508'),(1333,76,'eng','604'),(1334,76,'eng','605'),(1335,76,'eng','607'),(1336,76,'eng','806'),(1337,76,'eng','807'),(1338,76,'eng','Bipper'),(1339,76,'eng','Bipper Tepee'),(1340,76,'eng','Boxer'),(1341,76,'eng','Expert'),(1342,76,'eng','Expert Tepee'),(1343,76,'eng','iOn'),(1344,76,'eng','J5'),(1345,76,'eng','Partner'),(1346,76,'eng','Partner Tepee'),(1347,76,'eng','RCZ'),(1348,76,'eng','TePee'),(1349,77,'eng','APE'),(1350,77,'eng','APE TM'),(1351,77,'eng','Porter'),(1352,78,'eng','Prowler'),(1353,79,'eng','6000'),(1354,79,'eng','Bonneville'),(1355,79,'eng','Fiero'),(1356,79,'eng','Firebird'),(1357,79,'eng','G6'),(1358,79,'eng','Grand-Am'),(1359,79,'eng','Grand-Prix'),(1360,79,'eng','GTO'),(1361,79,'eng','Montana'),(1362,79,'eng','Solstice'),(1363,79,'eng','Sunbird'),(1364,79,'eng','Sunfire'),(1365,79,'eng','Targa'),(1366,79,'eng','Trans Am'),(1367,79,'eng','Trans Sport'),(1368,79,'eng','Vibe'),(1369,80,'eng','356'),(1370,80,'eng','911 (All)'),(1371,80,'eng','911'),(1372,80,'eng','964'),(1373,80,'eng','991'),(1374,80,'eng','993'),(1375,80,'eng','996'),(1376,80,'eng','997'),(1377,80,'eng','912'),(1378,80,'eng','914'),(1379,80,'eng','924'),(1380,80,'eng','928'),(1381,80,'eng','944'),(1382,80,'eng','959'),(1383,80,'eng','962'),(1384,80,'eng','968'),(1385,80,'eng','Boxster'),(1386,80,'eng','Carrera GT'),(1387,80,'eng','Cayenne'),(1388,80,'eng','Cayman'),(1389,80,'eng','Panamera'),(1390,81,'eng','300 Serie'),(1391,81,'eng','400 Serie'),(1392,82,'eng','Alpine A110'),(1393,82,'eng','Alpine A310'),(1394,82,'eng','Alpine V6'),(1395,82,'eng','Avantime'),(1396,82,'eng','Captur'),(1397,82,'eng','Clio'),(1398,82,'eng','Coupe'),(1399,82,'eng','Espace'),(1400,82,'eng','Express'),(1401,82,'eng','Fluence'),(1402,82,'eng','Fuego'),(1403,82,'eng','Grand Espace'),(1404,82,'eng','Grand Modus'),(1405,82,'eng','Grand Scenic'),(1406,82,'eng','Kangoo'),(1407,82,'eng','Koleos'),(1408,82,'eng','Laguna'),(1409,82,'eng','Latitude'),(1410,82,'eng','Mascott'),(1411,82,'eng','Master'),(1412,82,'eng','Megane'),(1413,82,'eng','Modus'),(1414,82,'eng','P 1400'),(1415,82,'eng','R 11'),(1416,82,'eng','R 14'),(1417,82,'eng','R 18'),(1418,82,'eng','R 19'),(1419,82,'eng','R 20'),(1420,82,'eng','R 21'),(1421,82,'eng','R 25'),(1422,82,'eng','R 30'),(1423,82,'eng','R 4'),(1424,82,'eng','R 5'),(1425,82,'eng','R 6'),(1426,82,'eng','R 9'),(1427,82,'eng','Rapid'),(1428,82,'eng','Safrane'),(1429,82,'eng','Scenic'),(1430,82,'eng','Spider'),(1431,82,'eng','Trafic'),(1432,82,'eng','Twingo'),(1433,82,'eng','Twizy'),(1434,82,'eng','Vel Satis'),(1435,82,'eng','Wind'),(1436,82,'eng','ZOE'),(1437,83,'eng','Corniche'),(1438,83,'eng','Flying Spur'),(1439,83,'eng','Ghost'),(1440,83,'eng','Park Ward'),(1441,83,'eng','Phantom'),(1442,83,'eng','Silver Cloud'),(1443,83,'eng','Silver Dawn'),(1444,83,'eng','Silver Seraph'),(1445,83,'eng','Silver Shadow'),(1446,83,'eng','Silver Spirit'),(1447,83,'eng','Silver Spur'),(1448,84,'eng','100'),(1449,84,'eng','111'),(1450,84,'eng','114'),(1451,84,'eng','115'),(1452,84,'eng','200'),(1453,84,'eng','213'),(1454,84,'eng','214'),(1455,84,'eng','216'),(1456,84,'eng','218'),(1457,84,'eng','220'),(1458,84,'eng','25'),(1459,84,'eng','400'),(1460,84,'eng','414'),(1461,84,'eng','416'),(1462,84,'eng','418'),(1463,84,'eng','420'),(1464,84,'eng','45'),(1465,84,'eng','600'),(1466,84,'eng','618'),(1467,84,'eng','620'),(1468,84,'eng','623'),(1469,84,'eng','75'),(1470,84,'eng','800'),(1471,84,'eng','820'),(1472,84,'eng','825'),(1473,84,'eng','827'),(1474,84,'eng','City Rover'),(1475,84,'eng','Metro'),(1476,84,'eng','Montego'),(1477,84,'eng','SD'),(1478,84,'eng','Streetwise'),(1479,86,'eng','9-3'),(1480,86,'eng','9-4X'),(1481,86,'eng','9-5'),(1482,86,'eng','9-7X'),(1483,86,'eng','90'),(1484,86,'eng','900'),(1485,86,'eng','9000'),(1486,86,'eng','96'),(1487,86,'eng','99'),(1488,88,'eng','Alhambra'),(1489,88,'eng','Altea'),(1490,88,'eng','Arosa'),(1491,88,'eng','Cordoba'),(1492,88,'eng','Exeo'),(1493,88,'eng','Ibiza'),(1494,88,'eng','Inca'),(1495,88,'eng','Leon'),(1496,88,'eng','Malaga'),(1497,88,'eng','Marbella'),(1498,88,'eng','Mii'),(1499,88,'eng','Terra'),(1500,88,'eng','Toledo'),(1501,89,'eng','105'),(1502,89,'eng','120'),(1503,89,'eng','130'),(1504,89,'eng','135'),(1505,89,'eng','Citigo'),(1506,89,'eng','Fabia'),(1507,89,'eng','Favorit'),(1508,89,'eng','Felicia'),(1509,89,'eng','Forman'),(1510,89,'eng','Octavia'),(1511,89,'eng','Pick-up'),(1512,89,'eng','Praktik'),(1513,89,'eng','Rapid'),(1514,89,'eng','Roomster'),(1515,89,'eng','Superb'),(1516,89,'eng','Yeti'),(1517,90,'eng','Crossblade'),(1518,90,'eng','ForFour'),(1519,90,'eng','ForTwo'),(1520,90,'eng','Roadster'),(1521,92,'eng','C8'),(1522,92,'eng','C8 AILERON'),(1523,92,'eng','C8 DOUBLE 12 S'),(1524,92,'eng','C8 LAVIOLETTE SWB'),(1525,92,'eng','C8 SPYDER SWB'),(1526,93,'eng','Actyon'),(1527,93,'eng','Family'),(1528,93,'eng','Korando'),(1529,93,'eng','Kyron'),(1530,93,'eng','MUSSO'),(1531,93,'eng','REXTON'),(1532,93,'eng','Rodius'),(1533,94,'eng','B9 Tribeca'),(1534,94,'eng','Baja'),(1535,94,'eng','BRZ'),(1536,94,'eng','Forester'),(1537,94,'eng','Impreza'),(1538,94,'eng','Justy'),(1539,94,'eng','Legacy'),(1540,94,'eng','Libero'),(1541,94,'eng','OUTBACK'),(1542,94,'eng','SVX'),(1543,94,'eng','Trezia'),(1544,94,'eng','Tribeca'),(1545,94,'eng','Vivio'),(1546,94,'eng','XT'),(1547,94,'eng','XV'),(1548,95,'eng','Alto'),(1549,95,'eng','Baleno'),(1550,95,'eng','Cappuccino'),(1551,95,'eng','Carry'),(1552,95,'eng','Grand Vitara'),(1553,95,'eng','Ignis'),(1554,95,'eng','Jimny'),(1555,95,'eng','Kizashi'),(1556,95,'eng','Liana'),(1557,95,'eng','LJ'),(1558,95,'eng','SJ Samurai'),(1559,95,'eng','Splash'),(1560,95,'eng','Super-Carry'),(1561,95,'eng','Swift'),(1562,95,'eng','SX4'),(1563,95,'eng','SX4 S-Cross'),(1564,95,'eng','Vitara'),(1565,95,'eng','Wagon R+'),(1566,95,'eng','X-90'),(1567,97,'eng','Chimaera'),(1568,97,'eng','Griffith'),(1569,97,'eng','Tuscan'),(1570,98,'eng','Horizon'),(1571,98,'eng','Samba'),(1572,99,'eng','Indica'),(1573,99,'eng','Indigo'),(1574,99,'eng','Nano'),(1575,99,'eng','Safari'),(1576,99,'eng','Sumo'),(1577,99,'eng','Telcoline'),(1578,99,'eng','Telcosport'),(1579,99,'eng','Xenon'),(1580,101,'eng','4-Runner'),(1581,101,'eng','Auris'),(1582,101,'eng','Auris Touring Sports'),(1583,101,'eng','Avalon'),(1584,101,'eng','Avensis'),(1585,101,'eng','Avensis Verso'),(1586,101,'eng','Aygo'),(1587,101,'eng','Camry'),(1588,101,'eng','Carina'),(1589,101,'eng','Celica'),(1590,101,'eng','Corolla'),(1591,101,'eng','Corolla Verso'),(1592,101,'eng','Cressida'),(1593,101,'eng','Crown'),(1594,101,'eng','Dyna'),(1595,101,'eng','FJ'),(1596,101,'eng','GT86'),(1597,101,'eng','Hiace'),(1598,101,'eng','Highlander'),(1599,101,'eng','Hilux'),(1600,101,'eng','IQ'),(1601,101,'eng','Land Cruiser'),(1602,101,'eng','Lite-Ace'),(1603,101,'eng','MR 2'),(1604,101,'eng','Paseo'),(1605,101,'eng','Picnic'),(1606,101,'eng','Previa'),(1607,101,'eng','Prius'),(1608,101,'eng','Prius+'),(1609,101,'eng','RAV 4'),(1610,101,'eng','Sequoia'),(1611,101,'eng','Sienna'),(1612,101,'eng','Starlet'),(1613,101,'eng','Supra'),(1614,101,'eng','Tacoma'),(1615,101,'eng','Tercel'),(1616,101,'eng','Tundra'),(1617,101,'eng','Urban Cruiser'),(1618,101,'eng','Verso'),(1619,101,'eng','Verso-S'),(1620,101,'eng','Yaris'),(1621,102,'eng','601'),(1622,103,'eng','Dolomite'),(1623,103,'eng','Moss'),(1624,103,'eng','Spitfire'),(1625,103,'eng','TR3'),(1626,103,'eng','TR4'),(1627,103,'eng','TR5'),(1628,103,'eng','TR6'),(1629,103,'eng','TR7'),(1630,103,'eng','TR8'),(1631,104,'eng','181'),(1632,104,'eng','Amarok'),(1633,104,'eng','Beetle'),(1634,104,'eng','Bora'),(1635,104,'eng','Buggy'),(1636,104,'eng','Caddy'),(1637,104,'eng','CC'),(1638,104,'eng','Corrado'),(1639,104,'eng','Crafter'),(1640,104,'eng','Eos'),(1641,104,'eng','Fox'),(1642,104,'eng','Golf (All)'),(1643,104,'eng','Golf'),(1644,104,'eng','Golf Plus'),(1645,104,'eng','Iltis'),(1646,104,'eng','Jetta'),(1647,104,'eng','Karmann Ghia'),(1648,104,'eng','Käfer'),(1649,104,'eng','LT'),(1650,104,'eng','Lupo'),(1651,104,'eng','New Beetle'),(1652,104,'eng','Passat (All)'),(1653,104,'eng','Passat'),(1654,104,'eng','Passat CC'),(1655,104,'eng','Phaeton'),(1656,104,'eng','Polo'),(1657,104,'eng','Routan'),(1658,104,'eng','Santana'),(1659,104,'eng','Scirocco'),(1660,104,'eng','Sharan'),(1661,104,'eng','T1'),(1662,104,'eng','T2'),(1663,104,'eng','T3 (All)'),(1664,104,'eng','T3 Caravelle'),(1665,104,'eng','T3 Multivan'),(1666,104,'eng','T3 other'),(1667,104,'eng','T3 Kombi'),(1668,104,'eng','T4 (All)'),(1669,104,'eng','T4 California'),(1670,104,'eng','T4 Caravelle'),(1671,104,'eng','T4 Multivan'),(1672,104,'eng','T4 other'),(1673,104,'eng','T4 Kombi'),(1674,104,'eng','T5 (All)'),(1675,104,'eng','T5 California'),(1676,104,'eng','T5 Caravelle'),(1677,104,'eng','T5 Multivan'),(1678,104,'eng','T5 Shuttle'),(1679,104,'eng','T5 other'),(1680,104,'eng','T5 Kombi'),(1681,104,'eng','Taro'),(1682,104,'eng','Tiguan'),(1683,104,'eng','Touareg'),(1684,104,'eng','Touran'),(1685,104,'eng','up!'),(1686,104,'eng','Vento'),(1687,105,'eng','240'),(1688,105,'eng','244'),(1689,105,'eng','245'),(1690,105,'eng','262'),(1691,105,'eng','264'),(1692,105,'eng','340'),(1693,105,'eng','360'),(1694,105,'eng','440'),(1695,105,'eng','460'),(1696,105,'eng','480'),(1697,105,'eng','740'),(1698,105,'eng','744'),(1699,105,'eng','745'),(1700,105,'eng','760'),(1701,105,'eng','780'),(1702,105,'eng','850'),(1703,105,'eng','855'),(1704,105,'eng','940'),(1705,105,'eng','944'),(1706,105,'eng','945'),(1707,105,'eng','960'),(1708,105,'eng','965'),(1709,105,'eng','Amazon'),(1710,105,'eng','C30'),(1711,105,'eng','C70'),(1712,105,'eng','Polar'),(1713,105,'eng','S40'),(1714,105,'eng','S60'),(1715,105,'eng','S70'),(1716,105,'eng','S80'),(1717,105,'eng','S90'),(1718,105,'eng','V40'),(1719,105,'eng','V50'),(1720,105,'eng','V60'),(1721,105,'eng','V70'),(1722,105,'eng','V90'),(1723,105,'eng','XC 60'),(1724,105,'eng','XC 70'),(1725,105,'eng','XC 90'),(1726,106,'eng','311'),(1727,106,'eng','353'),(1728,108,'eng','MF 25'),(1729,108,'eng','MF 28'),(1730,108,'eng','MF 3'),(1731,108,'eng','MF 30'),(1732,108,'eng','MF 35'),(1733,108,'eng','MF 4'),(1734,108,'eng','MF 5'),(1,1,'esp','500'),(2,1,'esp','500C'),(3,1,'esp','Grande Punto'),(4,1,'esp','Punto Evo'),(5,2,'esp','MDX'),(6,2,'esp','NSX'),(7,2,'esp','RL'),(8,2,'esp','RSX'),(9,2,'esp','TL'),(10,2,'esp','TSX'),(11,3,'esp','City'),(12,3,'esp','Crossline'),(13,3,'esp','Roadline'),(14,3,'esp','Scouty R'),(15,4,'esp','8C'),(16,4,'esp','Alfa 145'),(17,4,'esp','Alfa 146'),(18,4,'esp','Alfa 147'),(19,4,'esp','Alfa 155'),(20,4,'esp','Alfa 156'),(21,4,'esp','Alfa 159'),(22,4,'esp','Alfa 164'),(23,4,'esp','Alfa 166'),(24,4,'esp','Alfa 33'),(25,4,'esp','Alfa 75'),(26,4,'esp','Alfa 90'),(27,4,'esp','Alfasud'),(28,4,'esp','Alfetta'),(29,4,'esp','Brera'),(30,4,'esp','Crosswagon'),(31,4,'esp','Giulia'),(32,4,'esp','Giulietta'),(33,4,'esp','GT'),(34,4,'esp','GTV'),(35,4,'esp','Junior'),(36,4,'esp','MiTo'),(37,4,'esp','Spider'),(38,4,'esp','Sprint'),(39,5,'esp','B10'),(40,5,'esp','B12'),(41,5,'esp','B3'),(42,5,'esp','B5'),(43,5,'esp','B6'),(44,5,'esp','B7'),(45,5,'esp','B8'),(46,5,'esp','D 10'),(47,5,'esp','D3'),(48,5,'esp','D5'),(49,5,'esp','Roadster S'),(50,5,'esp','XD3'),(51,7,'esp','GT'),(52,8,'esp','Rocsta'),(53,9,'esp','AR1'),(54,9,'esp','Cygnet'),(55,9,'esp','DB'),(56,9,'esp','DB7'),(57,9,'esp','DB9'),(58,9,'esp','DBS'),(59,9,'esp','Lagonda'),(60,9,'esp','Rapide'),(61,9,'esp','V12 Vantage'),(62,9,'esp','V8 Vantage'),(63,9,'esp','Vanquish'),(64,9,'esp','Virage'),(65,10,'esp','100'),(66,10,'esp','200'),(67,10,'esp','80'),(68,10,'esp','90'),(69,10,'esp','A1'),(70,10,'esp','A2'),(71,10,'esp','A3'),(72,10,'esp','A4'),(73,10,'esp','A4 Allroad'),(74,10,'esp','A5'),(75,10,'esp','A6'),(76,10,'esp','A6 Allroad'),(77,10,'esp','A7'),(78,10,'esp','A8'),(79,10,'esp','Cabriolet'),(80,10,'esp','Coupé'),(81,10,'esp','Q3'),(82,10,'esp','Q5'),(83,10,'esp','Q7'),(84,10,'esp','QUATTRO'),(85,10,'esp','R8'),(86,10,'esp','RS2'),(87,10,'esp','RS3'),(88,10,'esp','RS4'),(89,10,'esp','RS5'),(90,10,'esp','RS6'),(91,10,'esp','RS7'),(92,10,'esp','S2'),(93,10,'esp','S3'),(94,10,'esp','S4'),(95,10,'esp','S5'),(96,10,'esp','S6'),(97,10,'esp','S7'),(98,10,'esp','S8'),(99,10,'esp','SQ5'),(100,10,'esp','TT (All)'),(101,10,'esp','TT'),(102,10,'esp','TT RS'),(103,10,'esp','TTS'),(104,10,'esp','V8'),(105,13,'esp','Series 1 (All)'),(106,13,'esp','114'),(107,13,'esp','116'),(108,13,'esp','118'),(109,13,'esp','120'),(110,13,'esp','123'),(111,13,'esp','125'),(112,13,'esp','130'),(113,13,'esp','135'),(114,13,'esp','2002'),(115,13,'esp','Series 3 (All)'),(116,13,'esp','315'),(117,13,'esp','316'),(118,13,'esp','318'),(119,13,'esp','318 Gran Turismo'),(120,13,'esp','320'),(121,13,'esp','320 Gran Turismo'),(122,13,'esp','323'),(123,13,'esp','324'),(124,13,'esp','325'),(125,13,'esp','328'),(126,13,'esp','328 Gran Turismo'),(127,13,'esp','330'),(128,13,'esp','335'),(129,13,'esp','335 Gran Turismo'),(130,13,'esp','ActiveHybrid 3'),(131,13,'esp','Series 4 (All)'),(132,13,'esp','420'),(133,13,'esp','428'),(134,13,'esp','430'),(135,13,'esp','435'),(136,13,'esp','Series 5 (All)'),(137,13,'esp','518'),(138,13,'esp','520'),(139,13,'esp','520 Gran Turismo'),(140,13,'esp','523'),(141,13,'esp','524'),(142,13,'esp','525'),(143,13,'esp','528'),(144,13,'esp','530'),(145,13,'esp','530 Gran Turismo'),(146,13,'esp','535'),(147,13,'esp','535 Gran Turismo'),(148,13,'esp','540'),(149,13,'esp','545'),(150,13,'esp','550'),(151,13,'esp','550 Gran Turismo'),(152,13,'esp','ActiveHybrid 5'),(153,13,'esp','Series 6 (All)'),(154,13,'esp','628'),(155,13,'esp','630'),(156,13,'esp','633'),(157,13,'esp','635'),(158,13,'esp','640'),(159,13,'esp','645'),(160,13,'esp','650'),(161,13,'esp','Series 7 (All)'),(162,13,'esp','725'),(163,13,'esp','728'),(164,13,'esp','730'),(165,13,'esp','732'),(166,13,'esp','735'),(167,13,'esp','740'),(168,13,'esp','745'),(169,13,'esp','750'),(170,13,'esp','760'),(171,13,'esp','ActiveHybrid 7'),(172,13,'esp','840'),(173,13,'esp','850'),(174,13,'esp','i3'),(175,13,'esp','M Models (All)'),(176,13,'esp','M135'),(177,13,'esp','M3'),(178,13,'esp','M5'),(179,13,'esp','M6'),(180,13,'esp','X5 M'),(181,13,'esp','X6 M'),(182,13,'esp','Z3 M'),(183,13,'esp','Z4 M'),(184,13,'esp','Series X (All)'),(185,13,'esp','ActiveHybrid X6'),(186,13,'esp','X1'),(187,13,'esp','X3'),(188,13,'esp','X5'),(189,13,'esp','X5 M'),(190,13,'esp','X6'),(191,13,'esp','X6 M'),(192,13,'esp','Series Z (All)'),(193,13,'esp','Z1'),(194,13,'esp','Z3'),(195,13,'esp','Z3 M'),(196,13,'esp','Z4'),(197,13,'esp','Z4 M'),(198,13,'esp','Z8'),(199,14,'esp','Arnage'),(200,14,'esp','Azure'),(201,14,'esp','Brooklands'),(202,14,'esp','Continental (All)'),(203,14,'esp','Continental'),(204,14,'esp','Continental Flying Spur'),(205,14,'esp','Continental GT'),(206,14,'esp','Continental GTC'),(207,14,'esp','Continental Supersports'),(208,14,'esp','Eight'),(209,14,'esp','Mulsanne'),(210,14,'esp','Turbo R'),(211,14,'esp','Turbo RT'),(212,14,'esp','Turbo S'),(213,16,'esp','BC3'),(214,16,'esp','BS2'),(215,16,'esp','BS4'),(216,16,'esp','BS6'),(217,17,'esp','EB 110'),(218,17,'esp','Veyron'),(219,18,'esp','Century'),(220,18,'esp','Electra'),(221,18,'esp','Enclave'),(222,18,'esp','La Crosse'),(223,18,'esp','Le Sabre'),(224,18,'esp','Park Avenue'),(225,18,'esp','Regal'),(226,18,'esp','Riviera'),(227,18,'esp','Roadmaster'),(228,18,'esp','Skylark'),(229,19,'esp','Allante'),(230,19,'esp','ATS'),(231,19,'esp','BLS'),(232,19,'esp','CTS'),(233,19,'esp','Deville'),(234,19,'esp','Eldorado'),(235,19,'esp','Escalade'),(236,19,'esp','Fleetwood'),(237,19,'esp','Seville'),(238,19,'esp','SRX'),(239,19,'esp','STS'),(240,19,'esp','XLR'),(241,22,'esp','2500'),(242,22,'esp','Alero'),(243,22,'esp','Astro'),(244,22,'esp','Avalanche'),(245,22,'esp','Aveo'),(246,22,'esp','Beretta'),(247,22,'esp','Blazer'),(248,22,'esp','C1500'),(249,22,'esp','Camaro'),(250,22,'esp','Caprice'),(251,22,'esp','Captiva'),(252,22,'esp','Cavalier'),(253,22,'esp','Chevelle'),(254,22,'esp','Chevy Van'),(255,22,'esp','Citation'),(256,22,'esp','Colorado'),(257,22,'esp','Corsica'),(258,22,'esp','Cruze'),(259,22,'esp','El Camino'),(260,22,'esp','Epica'),(261,22,'esp','Evanda'),(262,22,'esp','Express'),(263,22,'esp','G'),(264,22,'esp','HHR'),(265,22,'esp','Impala'),(266,22,'esp','K1500'),(267,22,'esp','K30'),(268,22,'esp','Kalos'),(269,22,'esp','Lacetti'),(270,22,'esp','Lumina'),(271,22,'esp','Malibu'),(272,22,'esp','Matiz'),(273,22,'esp','Nubira'),(274,22,'esp','Orlando'),(275,22,'esp','Rezzo'),(276,22,'esp','S-10'),(277,22,'esp','Silverado'),(278,22,'esp','Spark'),(279,22,'esp','SSR'),(280,22,'esp','Suburban'),(281,22,'esp','Tahoe'),(282,22,'esp','Trailblazer'),(283,22,'esp','Trans Sport'),(284,22,'esp','Trax'),(285,22,'esp','Venture'),(286,22,'esp','Volt'),(287,23,'esp','300 M'),(288,23,'esp','300C'),(289,23,'esp','Aspen'),(290,23,'esp','Crossfire'),(291,23,'esp','Daytona'),(292,23,'esp','ES'),(293,23,'esp','Grand Voyager'),(294,23,'esp','GS'),(295,23,'esp','GTS'),(296,23,'esp','Imperial'),(297,23,'esp','Le Baron'),(298,23,'esp','Neon'),(299,23,'esp','New Yorker'),(300,23,'esp','Pacifica'),(301,23,'esp','PT Cruiser'),(302,23,'esp','Saratoga'),(303,23,'esp','Sebring'),(304,23,'esp','Stratus'),(305,23,'esp','Valiant'),(306,23,'esp','Viper'),(307,23,'esp','Vision'),(308,23,'esp','Voyager'),(309,24,'esp','2 CV'),(310,24,'esp','AX'),(311,24,'esp','Berlingo'),(312,24,'esp','BX'),(313,24,'esp','C-Crosser'),(314,24,'esp','C-Zero'),(315,24,'esp','C1'),(316,24,'esp','C2'),(317,24,'esp','C3'),(318,24,'esp','C3 Picasso'),(319,24,'esp','C4'),(320,24,'esp','C4 Aircross'),(321,24,'esp','C4 Picasso'),(322,24,'esp','C5'),(323,24,'esp','C6'),(324,24,'esp','C8'),(325,24,'esp','CX'),(326,24,'esp','DS'),(327,24,'esp','DS3'),(328,24,'esp','DS4'),(329,24,'esp','DS5'),(330,24,'esp','Evasion'),(331,24,'esp','Grand C4 Picasso'),(332,24,'esp','GSA'),(333,24,'esp','Jumper'),(334,24,'esp','Jumpy'),(335,24,'esp','Nemo'),(336,24,'esp','SAXO'),(337,24,'esp','SM'),(338,24,'esp','Visa'),(339,24,'esp','Xantia'),(340,24,'esp','XM'),(341,24,'esp','Xsara'),(342,24,'esp','Xsara Picasso'),(343,24,'esp','ZX'),(344,26,'esp','C1'),(345,26,'esp','C2'),(346,26,'esp','C3'),(347,26,'esp','C4'),(348,26,'esp','C5'),(349,26,'esp','C6'),(350,26,'esp','C7'),(351,26,'esp','Z06'),(352,26,'esp','ZR 1'),(353,27,'esp','Dokker'),(354,27,'esp','Duster'),(355,27,'esp','Lodgy'),(356,27,'esp','Logan'),(357,27,'esp','Logan Pick-Up'),(358,27,'esp','Pick Up'),(359,27,'esp','Sandero'),(360,28,'esp','Espero'),(361,28,'esp','Evanda'),(362,28,'esp','Kalos'),(363,28,'esp','Korando'),(364,28,'esp','Lacetti'),(365,28,'esp','Lanos'),(366,28,'esp','Leganza'),(367,28,'esp','Matiz'),(368,28,'esp','Musso'),(369,28,'esp','Nexia'),(370,28,'esp','Nubira'),(371,28,'esp','Rezzo'),(372,28,'esp','Tacuma'),(373,29,'esp','Applause'),(374,29,'esp','Charade'),(375,29,'esp','Charmant'),(376,29,'esp','Copen'),(377,29,'esp','Cuore'),(378,29,'esp','Feroza/Sportrak'),(379,29,'esp','Freeclimber'),(380,29,'esp','Gran Move'),(381,29,'esp','Hijet'),(382,29,'esp','MATERIA'),(383,29,'esp','Move'),(384,29,'esp','Rocky/Fourtrak'),(385,29,'esp','Sirion'),(386,29,'esp','Terios'),(387,29,'esp','TREVIS'),(388,29,'esp','YRV'),(389,30,'esp','Guarà'),(390,30,'esp','Pantera'),(391,31,'esp','Avenger'),(392,31,'esp','Caliber'),(393,31,'esp','Challenger'),(394,31,'esp','Charger'),(395,31,'esp','Dakota'),(396,31,'esp','Demon'),(397,31,'esp','Durango'),(398,31,'esp','Grand Caravan'),(399,31,'esp','Hornet'),(400,31,'esp','Journey'),(401,31,'esp','Magnum'),(402,31,'esp','Neon'),(403,31,'esp','Nitro'),(404,31,'esp','RAM'),(405,31,'esp','Stealth'),(406,31,'esp','Viper'),(407,32,'esp','208'),(408,32,'esp','246'),(409,32,'esp','250'),(410,32,'esp','275'),(411,32,'esp','288'),(412,32,'esp','308'),(413,32,'esp','328'),(414,32,'esp','330'),(415,32,'esp','348'),(416,32,'esp','360'),(417,32,'esp','365'),(418,32,'esp','400'),(419,32,'esp','412'),(420,32,'esp','456'),(421,32,'esp','458'),(422,32,'esp','512'),(423,32,'esp','550'),(424,32,'esp','575'),(425,32,'esp','599 GTB'),(426,32,'esp','612'),(427,32,'esp','750'),(428,32,'esp','California'),(429,32,'esp','Daytona'),(430,32,'esp','Dino GT4'),(431,32,'esp','Enzo Ferrari'),(432,32,'esp','F12'),(433,32,'esp','F355'),(434,32,'esp','F40'),(435,32,'esp','F430'),(436,32,'esp','F50'),(437,32,'esp','FF'),(438,32,'esp','LaFerrari'),(439,32,'esp','Mondial'),(440,32,'esp','Superamerica'),(441,32,'esp','Testarossa'),(442,33,'esp','124'),(443,33,'esp','126'),(444,33,'esp','127'),(445,33,'esp','130'),(446,33,'esp','131'),(447,33,'esp','500'),(448,33,'esp','500C'),(449,33,'esp','500L'),(450,33,'esp','Barchetta'),(451,33,'esp','Brava'),(452,33,'esp','Bravo'),(453,33,'esp','Cinquecento'),(454,33,'esp','Coupe'),(455,33,'esp','Croma'),(456,33,'esp','Dino'),(457,33,'esp','Doblo'),(458,33,'esp','Ducato'),(459,33,'esp','Fiorino'),(460,33,'esp','Freemont'),(461,33,'esp','Grande Punto'),(462,33,'esp','Idea'),(463,33,'esp','Linea'),(464,33,'esp','Marea'),(465,33,'esp','Marengo'),(466,33,'esp','Multipla'),(467,33,'esp','New Panda'),(468,33,'esp','Palio'),(469,33,'esp','Panda'),(470,33,'esp','Punto'),(471,33,'esp','Punto Evo'),(472,33,'esp','Qubo'),(473,33,'esp','Regata'),(474,33,'esp','Ritmo'),(475,33,'esp','Scudo'),(476,33,'esp','Sedici'),(477,33,'esp','Seicento'),(478,33,'esp','Spider Europa'),(479,33,'esp','Stilo'),(480,33,'esp','Strada'),(481,33,'esp','Tempra'),(482,33,'esp','Tipo'),(483,33,'esp','Ulysse'),(484,33,'esp','Uno'),(485,33,'esp','X 1/9'),(486,34,'esp','Karma'),(487,35,'esp','Aerostar'),(488,35,'esp','B-Max'),(489,35,'esp','Bronco'),(490,35,'esp','C-Max'),(491,35,'esp','Capri'),(492,35,'esp','Cougar'),(493,35,'esp','Courier'),(494,35,'esp','Crown'),(495,35,'esp','Econoline'),(496,35,'esp','Econovan'),(497,35,'esp','Edge'),(498,35,'esp','Escape'),(499,35,'esp','Escort'),(500,35,'esp','Excursion'),(501,35,'esp','Expedition'),(502,35,'esp','Explorer'),(503,35,'esp','Express'),(504,35,'esp','F 150'),(505,35,'esp','F 250'),(506,35,'esp','F 350'),(507,35,'esp','Fairlane'),(508,35,'esp','Falcon'),(509,35,'esp','Fiesta'),(510,35,'esp','Flex'),(511,35,'esp','Focus'),(512,35,'esp','Fusion'),(513,35,'esp','Galaxy'),(514,35,'esp','Granada'),(515,35,'esp','Grand C-Max'),(516,35,'esp','GT'),(517,35,'esp','Ka'),(518,35,'esp','Kuga'),(519,35,'esp','Maverick'),(520,35,'esp','Mercury'),(521,35,'esp','Mondeo'),(522,35,'esp','Mustang'),(523,35,'esp','Orion'),(524,35,'esp','Probe'),(525,35,'esp','Puma'),(526,35,'esp','Ranger'),(527,35,'esp','S-Max'),(528,35,'esp','Scorpio'),(529,35,'esp','Sierra'),(530,35,'esp','Sportka'),(531,35,'esp','Streetka'),(532,35,'esp','Taunus'),(533,35,'esp','Taurus'),(534,35,'esp','Thunderbird'),(535,35,'esp','Tourneo'),(536,35,'esp','Transit (All)'),(537,35,'esp','Transit'),(538,35,'esp','Transit Connect'),(539,35,'esp','Windstar'),(540,36,'esp','Acadia'),(541,36,'esp','Envoy'),(542,36,'esp','Safari'),(543,36,'esp','Savana'),(544,36,'esp','Sierra'),(545,36,'esp','Sonoma'),(546,36,'esp','Syclone'),(547,36,'esp','Typhoon'),(548,36,'esp','Vandura'),(549,36,'esp','Yukon'),(550,37,'esp','Sonique'),(551,40,'esp','Accord'),(552,40,'esp','Aerodeck'),(553,40,'esp','Civic'),(554,40,'esp','Concerto'),(555,40,'esp','CR-V'),(556,40,'esp','CR-Z'),(557,40,'esp','CRX'),(558,40,'esp','Element'),(559,40,'esp','FR-V'),(560,40,'esp','HR-V'),(561,40,'esp','Insight'),(562,40,'esp','Integra'),(563,40,'esp','Jazz'),(564,40,'esp','Legend'),(565,40,'esp','Logo'),(566,40,'esp','NSX'),(567,40,'esp','Odyssey'),(568,40,'esp','Prelude'),(569,40,'esp','S2000'),(570,40,'esp','Shuttle'),(571,40,'esp','Stream'),(572,41,'esp','H1'),(573,41,'esp','H2'),(574,41,'esp','H3'),(575,42,'esp','Accent'),(576,42,'esp','Atos'),(577,42,'esp','Azera'),(578,42,'esp','Coupe'),(579,42,'esp','Elantra'),(580,42,'esp','Excel'),(581,42,'esp','Galloper'),(582,42,'esp','Genesis'),(583,42,'esp','Getz'),(584,42,'esp','Grandeur'),(585,42,'esp','H 100'),(586,42,'esp','H 200'),(587,42,'esp','H-1'),(588,42,'esp','H-1 Starex'),(589,42,'esp','i10'),(590,42,'esp','i20'),(591,42,'esp','i30'),(592,42,'esp','i40'),(593,42,'esp','i50'),(594,42,'esp','ix20'),(595,42,'esp','ix35'),(596,42,'esp','ix55'),(597,42,'esp','Lantra'),(598,42,'esp','Matrix'),(599,42,'esp','Pony'),(600,42,'esp','S-Coupe'),(601,42,'esp','Santa Fe'),(602,42,'esp','Santamo'),(603,42,'esp','Sonata'),(604,42,'esp','Terracan'),(605,42,'esp','Trajet'),(606,42,'esp','Tucson'),(607,42,'esp','Veloster'),(608,42,'esp','Veracruz'),(609,42,'esp','XG 30'),(610,42,'esp','XG 350'),(611,43,'esp','EX35'),(612,43,'esp','EX37'),(613,43,'esp','FX'),(614,43,'esp','G35'),(615,43,'esp','G37'),(616,43,'esp','M30'),(617,43,'esp','M35'),(618,43,'esp','M37'),(619,43,'esp','Q45'),(620,43,'esp','QX56'),(621,44,'esp','Campo'),(622,44,'esp','D-Max'),(623,44,'esp','Gemini'),(624,44,'esp','Midi'),(625,44,'esp','PICK UP'),(626,44,'esp','Trooper'),(627,45,'esp','Massif'),(628,46,'esp','Daimler'),(629,46,'esp','E-Type'),(630,46,'esp','F-Type'),(631,46,'esp','MK II'),(632,46,'esp','S-Type'),(633,46,'esp','X-Type'),(634,46,'esp','XF'),(635,46,'esp','XJ'),(636,46,'esp','XJ12'),(637,46,'esp','XJ40'),(638,46,'esp','XJ6'),(639,46,'esp','XJ8'),(640,46,'esp','XJR'),(641,46,'esp','XJS'),(642,46,'esp','XJSC'),(643,46,'esp','XK'),(644,46,'esp','XKR'),(645,47,'esp','Cherokee'),(646,47,'esp','CJ'),(647,47,'esp','Comanche'),(648,47,'esp','Commander'),(649,47,'esp','Compass'),(650,47,'esp','Grand Cherokee'),(651,47,'esp','Patriot'),(652,47,'esp','Renegade'),(653,47,'esp','Wagoneer'),(654,47,'esp','Willys'),(655,47,'esp','Wrangler'),(656,48,'esp','X-BOW'),(657,49,'esp','Besta'),(658,49,'esp','Borrego'),(659,49,'esp','Carens'),(660,49,'esp','Carnival'),(661,49,'esp','cee\'d'),(662,49,'esp','cee\'d Sportswagon'),(663,49,'esp','Cerato'),(664,49,'esp','Clarus'),(665,49,'esp','Elan'),(666,49,'esp','Joice'),(667,49,'esp','K2500'),(668,49,'esp','K2700'),(669,49,'esp','Leo'),(670,49,'esp','Magentis'),(671,49,'esp','Mentor'),(672,49,'esp','Mini'),(673,49,'esp','Opirus'),(674,49,'esp','Optima'),(675,49,'esp','Picanto'),(676,49,'esp','Pregio'),(677,49,'esp','Pride'),(678,49,'esp','pro_cee\'d'),(679,49,'esp','Retona'),(680,49,'esp','Rio'),(681,49,'esp','Roadster'),(682,49,'esp','Rocsta'),(683,49,'esp','Sephia'),(684,49,'esp','Shuma'),(685,49,'esp','Sorento'),(686,49,'esp','Soul'),(687,49,'esp','Sportage'),(688,49,'esp','Venga'),(689,50,'esp','CCR'),(690,51,'esp','110'),(691,51,'esp','111'),(692,51,'esp','112'),(693,51,'esp','1200'),(694,51,'esp','2107'),(695,51,'esp','2110'),(696,51,'esp','2111'),(697,51,'esp','2112'),(698,51,'esp','Aleko'),(699,51,'esp','Forma'),(700,51,'esp','Kalina'),(701,51,'esp','Niva'),(702,51,'esp','Nova'),(703,51,'esp','Priora'),(704,51,'esp','Samara'),(705,52,'esp','Aventador'),(706,52,'esp','Countach'),(707,52,'esp','Diablo'),(708,52,'esp','Espada'),(709,52,'esp','Gallardo'),(710,52,'esp','Jalpa'),(711,52,'esp','LM'),(712,52,'esp','Miura'),(713,52,'esp','Murciélago'),(714,52,'esp','Urraco'),(715,53,'esp','Beta'),(716,53,'esp','Dedra'),(717,53,'esp','Delta'),(718,53,'esp','Flaminia'),(719,53,'esp','Flavia'),(720,53,'esp','Fulvia'),(721,53,'esp','Gamma'),(722,53,'esp','Kappa'),(723,53,'esp','Lybra'),(724,53,'esp','MUSA'),(725,53,'esp','Phedra'),(726,53,'esp','Prisma'),(727,53,'esp','Stratos'),(728,53,'esp','Thema'),(729,53,'esp','Thesis'),(730,53,'esp','Voyager'),(731,53,'esp','Ypsilon'),(732,53,'esp','Zeta'),(733,54,'esp','Defender'),(734,54,'esp','Discovery'),(735,54,'esp','Freelander'),(736,54,'esp','Range Rover'),(737,54,'esp','Range Rover Evoque'),(738,54,'esp','Range Rover Sport'),(739,54,'esp','Serie I'),(740,54,'esp','Serie II'),(741,54,'esp','Serie III'),(742,55,'esp','CV-9'),(743,55,'esp','S'),(744,55,'esp','SC2'),(745,55,'esp','SC4'),(746,56,'esp','CT 200h'),(747,56,'esp','ES Series (All)'),(748,56,'esp','ES 300'),(749,56,'esp','ES 330'),(750,56,'esp','ES 350'),(751,56,'esp','GS Series (All)'),(752,56,'esp','GS 250'),(753,56,'esp','GS 300'),(754,56,'esp','GS 350'),(755,56,'esp','GS 430'),(756,56,'esp','GS 450'),(757,56,'esp','GS 460'),(758,56,'esp','GX 470'),(759,56,'esp','IS Series (All)'),(760,56,'esp','IS 200'),(761,56,'esp','IS 220'),(762,56,'esp','IS 250'),(763,56,'esp','IS 300'),(764,56,'esp','IS 350'),(765,56,'esp','IS-F'),(766,56,'esp','LS Series (All)'),(767,56,'esp','LS 400'),(768,56,'esp','LS 430'),(769,56,'esp','LS 460'),(770,56,'esp','LS 600'),(771,56,'esp','LX Series (All)'),(772,56,'esp','LX 470'),(773,56,'esp','LX 570'),(774,56,'esp','RX Series (All)'),(775,56,'esp','RX 300'),(776,56,'esp','RX 330'),(777,56,'esp','RX 350'),(778,56,'esp','RX 400'),(779,56,'esp','RX 450'),(780,56,'esp','SC 400'),(781,56,'esp','SC 430'),(782,57,'esp','Ambra'),(783,57,'esp','Nova'),(784,57,'esp','Optima'),(785,57,'esp','X - Too'),(786,58,'esp','Aviator'),(787,58,'esp','Continental'),(788,58,'esp','LS'),(789,58,'esp','Mark'),(790,58,'esp','Navigator'),(791,58,'esp','Town Car'),(792,59,'esp','340 R'),(793,59,'esp','Cortina'),(794,59,'esp','Elan'),(795,59,'esp','Elise'),(796,59,'esp','Elite'),(797,59,'esp','Esprit'),(798,59,'esp','Europa'),(799,59,'esp','Evora'),(800,59,'esp','Excel'),(801,59,'esp','Exige'),(802,59,'esp','Super Seven'),(803,60,'esp','MGA'),(804,60,'esp','MGB'),(805,60,'esp','MGF'),(806,60,'esp','Midget'),(807,60,'esp','Montego'),(808,60,'esp','TD'),(809,60,'esp','TF'),(810,60,'esp','ZR'),(811,60,'esp','ZS'),(812,60,'esp','ZT'),(813,61,'esp','Cabrio Series (All)'),(814,61,'esp','Cooper Cabrio'),(815,61,'esp','Cooper D Cabrio'),(816,61,'esp','Cooper S Cabrio'),(817,61,'esp','Cooper SD Cabrio'),(818,61,'esp','John Cooper Works Cabrio'),(819,61,'esp','One Cabrio'),(820,61,'esp','Clubman Series (All)'),(821,61,'esp','Cooper Clubman'),(822,61,'esp','Cooper D Clubman'),(823,61,'esp','Cooper S Clubman'),(824,61,'esp','Cooper SD Clubman'),(825,61,'esp','John Cooper Works Clubman'),(826,61,'esp','One Clubman'),(827,61,'esp','One D Clubman'),(828,61,'esp','Clubvan'),(829,61,'esp','Countryman Series (All)'),(830,61,'esp','Cooper Countryman'),(831,61,'esp','Cooper D Countryman'),(832,61,'esp','Cooper S Countryman'),(833,61,'esp','Cooper SD Countryman'),(834,61,'esp','John Cooper Works Countryman'),(835,61,'esp','One Countryman'),(836,61,'esp','One D Countryman'),(837,61,'esp','Coupe Series (All)'),(838,61,'esp','Cooper Coupé'),(839,61,'esp','Cooper S Coupé'),(840,61,'esp','Cooper SD Coupé'),(841,61,'esp','John Cooper Works Coupé'),(842,61,'esp','MINI (All)'),(843,61,'esp','1000'),(844,61,'esp','1300'),(845,61,'esp','Cooper'),(846,61,'esp','Cooper D'),(847,61,'esp','Cooper S'),(848,61,'esp','Cooper SD'),(849,61,'esp','John Cooper Works'),(850,61,'esp','ONE'),(851,61,'esp','One D'),(852,61,'esp','Paceman Series (All)'),(853,61,'esp','Cooper D Paceman'),(854,61,'esp','Cooper Paceman'),(855,61,'esp','Cooper S Paceman'),(856,61,'esp','Cooper SD Paceman'),(857,61,'esp','John Cooper Works Paceman'),(858,61,'esp','Roadster Series (All)'),(859,61,'esp','Cooper Roadster'),(860,61,'esp','Cooper S Roadster'),(861,61,'esp','Cooper SD Roadster'),(862,61,'esp','John Cooper Works Roadster'),(863,63,'esp','222'),(864,63,'esp','224'),(865,63,'esp','228'),(866,63,'esp','3200'),(867,63,'esp','418'),(868,63,'esp','420'),(869,63,'esp','4200'),(870,63,'esp','422'),(871,63,'esp','424'),(872,63,'esp','430'),(873,63,'esp','Biturbo'),(874,63,'esp','Ghibli'),(875,63,'esp','GranCabrio'),(876,63,'esp','Gransport'),(877,63,'esp','Granturismo'),(878,63,'esp','Indy'),(879,63,'esp','Karif'),(880,63,'esp','MC12'),(881,63,'esp','Merak'),(882,63,'esp','Quattroporte'),(883,63,'esp','Shamal'),(884,63,'esp','Spyder'),(885,64,'esp','57'),(886,64,'esp','62'),(887,65,'esp','121'),(888,65,'esp','2'),(889,65,'esp','3'),(890,65,'esp','323'),(891,65,'esp','5'),(892,65,'esp','6'),(893,65,'esp','626'),(894,65,'esp','929'),(895,65,'esp','B series'),(896,65,'esp','Bongo'),(897,65,'esp','BT-50'),(898,65,'esp','CX-5'),(899,65,'esp','CX-7'),(900,65,'esp','CX-9'),(901,65,'esp','Demio'),(902,65,'esp','E series'),(903,65,'esp','Millenia'),(904,65,'esp','MPV'),(905,65,'esp','MX-3'),(906,65,'esp','MX-5'),(907,65,'esp','MX-6'),(908,65,'esp','Premacy'),(909,65,'esp','Protege'),(910,65,'esp','RX-6'),(911,65,'esp','RX-7'),(912,65,'esp','RX-8'),(913,65,'esp','Tribute'),(914,65,'esp','Xedos'),(915,66,'esp','MP4-12C'),(916,67,'esp','190'),(917,67,'esp','200'),(918,67,'esp','220'),(919,67,'esp','230'),(920,67,'esp','240'),(921,67,'esp','250'),(922,67,'esp','260'),(923,67,'esp','270'),(924,67,'esp','280'),(925,67,'esp','290'),(926,67,'esp','300'),(927,67,'esp','320'),(928,67,'esp','350'),(929,67,'esp','380'),(930,67,'esp','400'),(931,67,'esp','416'),(932,67,'esp','420'),(933,67,'esp','450'),(934,67,'esp','500'),(935,67,'esp','560'),(936,67,'esp','600'),(937,67,'esp','A-Klasse (All)'),(938,67,'esp','A 140'),(939,67,'esp','A 150'),(940,67,'esp','A 160'),(941,67,'esp','A 170'),(942,67,'esp','A 180'),(943,67,'esp','A 190'),(944,67,'esp','A 200'),(945,67,'esp','A 210'),(946,67,'esp','A 220'),(947,67,'esp','A 250'),(948,67,'esp','A 45 AMG'),(949,67,'esp','B-Klasse (All)'),(950,67,'esp','B 150'),(951,67,'esp','B 160'),(952,67,'esp','B 170'),(953,67,'esp','B 180'),(954,67,'esp','B 200'),(955,67,'esp','B 220'),(956,67,'esp','B 250'),(957,67,'esp','C-Klasse (All)'),(958,67,'esp','C 160'),(959,67,'esp','C 180'),(960,67,'esp','C 200'),(961,67,'esp','C 220'),(962,67,'esp','C 230'),(963,67,'esp','C 240'),(964,67,'esp','C 250'),(965,67,'esp','C 270'),(966,67,'esp','C 280'),(967,67,'esp','C 30 AMG'),(968,67,'esp','C 300'),(969,67,'esp','C 32 AMG'),(970,67,'esp','C 320'),(971,67,'esp','C 350'),(972,67,'esp','C 36 AMG'),(973,67,'esp','C 43 AMG'),(974,67,'esp','C 55 AMG'),(975,67,'esp','C 63 AMG'),(976,67,'esp','CE-Klasse (All)'),(977,67,'esp','CE 200'),(978,67,'esp','CE 220'),(979,67,'esp','CE 230'),(980,67,'esp','CE 280'),(981,67,'esp','CE 300'),(982,67,'esp','Citan'),(983,67,'esp','CL-Klasse (All)'),(984,67,'esp','CL 160'),(985,67,'esp','CL 180'),(986,67,'esp','CL 200'),(987,67,'esp','CL 220'),(988,67,'esp','CL 230'),(989,67,'esp','CL 320'),(990,67,'esp','CL 420'),(991,67,'esp','CL 500'),(992,67,'esp','CL 55 AMG'),(993,67,'esp','CL 600'),(994,67,'esp','CL 63 AMG'),(995,67,'esp','CL 65 AMG'),(996,67,'esp','CLA-Klasse (All)'),(997,67,'esp','CLA 180'),(998,67,'esp','CLA 200'),(999,67,'esp','CLA 220'),(1000,67,'esp','CLA 250'),(1001,67,'esp','CLC-Klasse (All)'),(1002,67,'esp','CLC 160'),(1003,67,'esp','CLC 180'),(1004,67,'esp','CLC 200'),(1005,67,'esp','CLC 220'),(1006,67,'esp','CLC 230'),(1007,67,'esp','CLC 250'),(1008,67,'esp','CLC 350'),(1009,67,'esp','CLK-Klasse (All)'),(1010,67,'esp','CLK 200'),(1011,67,'esp','CLK 220'),(1012,67,'esp','CLK 230'),(1013,67,'esp','CLK 240'),(1014,67,'esp','CLK 270'),(1015,67,'esp','CLK 280'),(1016,67,'esp','CLK 320'),(1017,67,'esp','CLK 350'),(1018,67,'esp','CLK 430'),(1019,67,'esp','CLK 500'),(1020,67,'esp','CLK 55 AMG'),(1021,67,'esp','CLK 63 AMG'),(1022,67,'esp','CLS-Klasse (All)'),(1023,67,'esp','CLS 250'),(1024,67,'esp','CLS 280'),(1025,67,'esp','CLS 300'),(1026,67,'esp','CLS 320'),(1027,67,'esp','CLS 350'),(1028,67,'esp','CLS 500'),(1029,67,'esp','CLS 55 AMG'),(1030,67,'esp','CLS 63 AMG'),(1031,67,'esp','E-Klasse (All)'),(1032,67,'esp','E 200'),(1033,67,'esp','E 220'),(1034,67,'esp','E 230'),(1035,67,'esp','E 240'),(1036,67,'esp','E 250'),(1037,67,'esp','E 260'),(1038,67,'esp','E 270'),(1039,67,'esp','E 280'),(1040,67,'esp','E 290'),(1041,67,'esp','E 300'),(1042,67,'esp','E 320'),(1043,67,'esp','E 350'),(1044,67,'esp','E 36 AMG'),(1045,67,'esp','E 400'),(1046,67,'esp','E 420'),(1047,67,'esp','E 430'),(1048,67,'esp','E 50'),(1049,67,'esp','E 500'),(1050,67,'esp','E 55 AMG'),(1051,67,'esp','E 60 AMG'),(1052,67,'esp','E 63 AMG'),(1053,67,'esp','G-Klasse (All)'),(1054,67,'esp','G 230'),(1055,67,'esp','G 240'),(1056,67,'esp','G 250'),(1057,67,'esp','G 270'),(1058,67,'esp','G 280'),(1059,67,'esp','G 290'),(1060,67,'esp','G 300'),(1061,67,'esp','G 320'),(1062,67,'esp','G 350'),(1063,67,'esp','G 400'),(1064,67,'esp','G 500'),(1065,67,'esp','G 55 AMG'),(1066,67,'esp','G 63 AMG'),(1067,67,'esp','G 65 AMG'),(1068,67,'esp','GL-Klasse (All)'),(1069,67,'esp','GL 320'),(1070,67,'esp','GL 350'),(1071,67,'esp','GL 420'),(1072,67,'esp','GL 450'),(1073,67,'esp','GL 500'),(1074,67,'esp','GL 55 AMG'),(1075,67,'esp','GL 63 AMG'),(1076,67,'esp','GLK-Klasse (All)'),(1077,67,'esp','GLK 200'),(1078,67,'esp','GLK 220'),(1079,67,'esp','GLK 250'),(1080,67,'esp','GLK 280'),(1081,67,'esp','GLK 300'),(1082,67,'esp','GLK 320'),(1083,67,'esp','GLK 350'),(1084,67,'esp','MB 100'),(1085,67,'esp','ML-Klasse (All)'),(1086,67,'esp','ML 230'),(1087,67,'esp','ML 250'),(1088,67,'esp','ML 270'),(1089,67,'esp','ML 280'),(1090,67,'esp','ML 300'),(1091,67,'esp','ML 320'),(1092,67,'esp','ML 350'),(1093,67,'esp','ML 400'),(1094,67,'esp','ML 420'),(1095,67,'esp','ML 430'),(1096,67,'esp','ML 450'),(1097,67,'esp','ML 500'),(1098,67,'esp','ML 55 AMG'),(1099,67,'esp','ML 63 AMG'),(1100,67,'esp','R-Klasse (All)'),(1101,67,'esp','R 280'),(1102,67,'esp','R 300'),(1103,67,'esp','R 320'),(1104,67,'esp','R 350'),(1105,67,'esp','R 500'),(1106,67,'esp','R 63 AMG'),(1107,67,'esp','S-Klasse (All)'),(1108,67,'esp','S 250'),(1109,67,'esp','S 260'),(1110,67,'esp','S 280'),(1111,67,'esp','S 300'),(1112,67,'esp','S 320'),(1113,67,'esp','S 350'),(1114,67,'esp','S 400'),(1115,67,'esp','S 420'),(1116,67,'esp','S 430'),(1117,67,'esp','S 450'),(1118,67,'esp','S 500'),(1119,67,'esp','S 55'),(1120,67,'esp','S 550'),(1121,67,'esp','S 600'),(1122,67,'esp','S 63 AMG'),(1123,67,'esp','S 65 AMG'),(1124,67,'esp','SL-Klasse (All)'),(1125,67,'esp','SL 280'),(1126,67,'esp','SL 300'),(1127,67,'esp','SL 320'),(1128,67,'esp','SL 350'),(1129,67,'esp','SL 380'),(1130,67,'esp','SL 420'),(1131,67,'esp','SL 450'),(1132,67,'esp','SL 500'),(1133,67,'esp','SL 55 AMG'),(1134,67,'esp','SL 560'),(1135,67,'esp','SL 60 AMG'),(1136,67,'esp','SL 600'),(1137,67,'esp','SL 63 AMG'),(1138,67,'esp','SL 65 AMG'),(1139,67,'esp','SL 70 AMG'),(1140,67,'esp','SL 73 AMG'),(1141,67,'esp','SLK-Klasse (All)'),(1142,67,'esp','SLK 200'),(1143,67,'esp','SLK 230'),(1144,67,'esp','SLK 250'),(1145,67,'esp','SLK 280'),(1146,67,'esp','SLK 300'),(1147,67,'esp','SLK 32 AMG'),(1148,67,'esp','SLK 320'),(1149,67,'esp','SLK 350'),(1150,67,'esp','SLK 55 AMG'),(1151,67,'esp','SLR'),(1152,67,'esp','SLS AMG'),(1153,67,'esp','Sprinter'),(1154,67,'esp','V-Klasse (All)'),(1155,67,'esp','V 200'),(1156,67,'esp','V 220'),(1157,67,'esp','V 230'),(1158,67,'esp','V 280'),(1159,67,'esp','Vaneo'),(1160,67,'esp','Vario'),(1161,67,'esp','Viano'),(1162,67,'esp','Vito'),(1163,68,'esp','DUÈ'),(1164,68,'esp','M.Go'),(1165,68,'esp','M-8'),(1166,68,'esp','MC1'),(1167,68,'esp','MC2'),(1168,69,'esp','3000 GT'),(1169,69,'esp','ASX'),(1170,69,'esp','Canter'),(1171,69,'esp','Carisma'),(1172,69,'esp','Colt'),(1173,69,'esp','Cordia'),(1174,69,'esp','Cosmos'),(1175,69,'esp','Diamante'),(1176,69,'esp','Eclipse'),(1177,69,'esp','Galant'),(1178,69,'esp','Galloper'),(1179,69,'esp','Grandis'),(1180,69,'esp','i-MiEV'),(1181,69,'esp','L200'),(1182,69,'esp','L300'),(1183,69,'esp','L400'),(1184,69,'esp','Lancer'),(1185,69,'esp','Mirage'),(1186,69,'esp','Montero'),(1187,69,'esp','Outlander'),(1188,69,'esp','Pajero'),(1189,69,'esp','Pajero Pinin'),(1190,69,'esp','Pick-up'),(1191,69,'esp','Santamo'),(1192,69,'esp','Sapporo'),(1193,69,'esp','Sigma'),(1194,69,'esp','Space Gear'),(1195,69,'esp','Space Runner'),(1196,69,'esp','Space Star'),(1197,69,'esp','Space Wagon'),(1198,69,'esp','Starion'),(1199,69,'esp','Tredia'),(1200,70,'esp','4/4'),(1201,70,'esp','Aero 8'),(1202,70,'esp','Plus 4'),(1203,70,'esp','Plus 8'),(1204,70,'esp','Roadster'),(1205,72,'esp','100 NX'),(1206,72,'esp','200 SX'),(1207,72,'esp','240 SX'),(1208,72,'esp','280 ZX'),(1209,72,'esp','300 ZX'),(1210,72,'esp','350Z'),(1211,72,'esp','370Z'),(1212,72,'esp','Almera'),(1213,72,'esp','Almera Tino'),(1214,72,'esp','Altima'),(1215,72,'esp','Armada'),(1216,72,'esp','Bluebird'),(1217,72,'esp','Cabstar'),(1218,72,'esp','Cargo'),(1219,72,'esp','Cherry'),(1220,72,'esp','Cube'),(1221,72,'esp','Evalia'),(1222,72,'esp','Frontier'),(1223,72,'esp','GT-R'),(1224,72,'esp','Interstar'),(1225,72,'esp','Juke'),(1226,72,'esp','King Cab'),(1227,72,'esp','Kubistar'),(1228,72,'esp','Laurel'),(1229,72,'esp','Leaf'),(1230,72,'esp','Maxima'),(1231,72,'esp','Micra'),(1232,72,'esp','Murano'),(1233,72,'esp','Navara'),(1234,72,'esp','Note'),(1235,72,'esp','NP 300'),(1236,72,'esp','NV200'),(1237,72,'esp','NV400'),(1238,72,'esp','Pathfinder'),(1239,72,'esp','Patrol'),(1240,72,'esp','PickUp'),(1241,72,'esp','Pixo'),(1242,72,'esp','Prairie'),(1243,72,'esp','Primastar'),(1244,72,'esp','Primera'),(1245,72,'esp','Qashqai'),(1246,72,'esp','Qashqai+2'),(1247,72,'esp','Quest'),(1248,72,'esp','Sentra'),(1249,72,'esp','Serena'),(1250,72,'esp','Silvia'),(1251,72,'esp','Skyline'),(1252,72,'esp','Sunny'),(1253,72,'esp','Terrano'),(1254,72,'esp','Tiida'),(1255,72,'esp','Titan'),(1256,72,'esp','Trade'),(1257,72,'esp','Urvan'),(1258,72,'esp','Vanette'),(1259,72,'esp','X-Trail'),(1260,73,'esp','Bravada'),(1261,73,'esp','Custom Cruiser'),(1262,73,'esp','Cutlass'),(1263,73,'esp','Delta 88'),(1264,73,'esp','Silhouette'),(1265,73,'esp','Supreme'),(1266,73,'esp','Toronado'),(1267,74,'esp','Adam'),(1268,74,'esp','Agila'),(1269,74,'esp','Ampera'),(1270,74,'esp','Antara'),(1271,74,'esp','Arena'),(1272,74,'esp','Ascona'),(1273,74,'esp','Astra'),(1274,74,'esp','Calibra'),(1275,74,'esp','Campo'),(1276,74,'esp','Cascada'),(1277,74,'esp','Cavalier'),(1278,74,'esp','Combo'),(1279,74,'esp','Commodore'),(1280,74,'esp','Corsa'),(1281,74,'esp','Diplomat'),(1282,74,'esp','Frontera'),(1283,74,'esp','GT'),(1284,74,'esp','Insignia'),(1285,74,'esp','Kadett'),(1286,74,'esp','Manta'),(1287,74,'esp','Meriva'),(1288,74,'esp','Mokka'),(1289,74,'esp','Monterey'),(1290,74,'esp','Monza'),(1291,74,'esp','Movano'),(1292,74,'esp','Nova'),(1293,74,'esp','Omega'),(1294,74,'esp','Pick Up Sportscap'),(1295,74,'esp','Rekord'),(1296,74,'esp','Senator'),(1297,74,'esp','Signum'),(1298,74,'esp','Sintra'),(1299,74,'esp','Speedster'),(1300,74,'esp','Tigra'),(1301,74,'esp','Vectra'),(1302,74,'esp','Vivaro'),(1303,74,'esp','Zafira'),(1304,74,'esp','Zafira Tourer'),(1305,76,'esp','1007'),(1306,76,'esp','104'),(1307,76,'esp','106'),(1308,76,'esp','107'),(1309,76,'esp','2008'),(1310,76,'esp','204'),(1311,76,'esp','205'),(1312,76,'esp','206'),(1313,76,'esp','207'),(1314,76,'esp','208'),(1315,76,'esp','3008'),(1316,76,'esp','301'),(1317,76,'esp','304'),(1318,76,'esp','305'),(1319,76,'esp','306'),(1320,76,'esp','307'),(1321,76,'esp','308'),(1322,76,'esp','309'),(1323,76,'esp','4007'),(1324,76,'esp','4008'),(1325,76,'esp','404'),(1326,76,'esp','405'),(1327,76,'esp','406'),(1328,76,'esp','407'),(1329,76,'esp','5008'),(1330,76,'esp','504'),(1331,76,'esp','505'),(1332,76,'esp','508'),(1333,76,'esp','604'),(1334,76,'esp','605'),(1335,76,'esp','607'),(1336,76,'esp','806'),(1337,76,'esp','807'),(1338,76,'esp','Bipper'),(1339,76,'esp','Bipper Tepee'),(1340,76,'esp','Boxer'),(1341,76,'esp','Expert'),(1342,76,'esp','Expert Tepee'),(1343,76,'esp','iOn'),(1344,76,'esp','J5'),(1345,76,'esp','Partner'),(1346,76,'esp','Partner Tepee'),(1347,76,'esp','RCZ'),(1348,76,'esp','TePee'),(1349,77,'esp','APE'),(1350,77,'esp','APE TM'),(1351,77,'esp','Porter'),(1352,78,'esp','Prowler'),(1353,79,'esp','6000'),(1354,79,'esp','Bonneville'),(1355,79,'esp','Fiero'),(1356,79,'esp','Firebird'),(1357,79,'esp','G6'),(1358,79,'esp','Grand-Am'),(1359,79,'esp','Grand-Prix'),(1360,79,'esp','GTO'),(1361,79,'esp','Montana'),(1362,79,'esp','Solstice'),(1363,79,'esp','Sunbird'),(1364,79,'esp','Sunfire'),(1365,79,'esp','Targa'),(1366,79,'esp','Trans Am'),(1367,79,'esp','Trans Sport'),(1368,79,'esp','Vibe'),(1369,80,'esp','356'),(1370,80,'esp','911 (All)'),(1371,80,'esp','911'),(1372,80,'esp','964'),(1373,80,'esp','991'),(1374,80,'esp','993'),(1375,80,'esp','996'),(1376,80,'esp','997'),(1377,80,'esp','912'),(1378,80,'esp','914'),(1379,80,'esp','924'),(1380,80,'esp','928'),(1381,80,'esp','944'),(1382,80,'esp','959'),(1383,80,'esp','962'),(1384,80,'esp','968'),(1385,80,'esp','Boxster'),(1386,80,'esp','Carrera GT'),(1387,80,'esp','Cayenne'),(1388,80,'esp','Cayman'),(1389,80,'esp','Panamera'),(1390,81,'esp','300 Serie'),(1391,81,'esp','400 Serie'),(1392,82,'esp','Alpine A110'),(1393,82,'esp','Alpine A310'),(1394,82,'esp','Alpine V6'),(1395,82,'esp','Avantime'),(1396,82,'esp','Captur'),(1397,82,'esp','Clio'),(1398,82,'esp','Coupe'),(1399,82,'esp','Espace'),(1400,82,'esp','Express'),(1401,82,'esp','Fluence'),(1402,82,'esp','Fuego'),(1403,82,'esp','Grand Espace'),(1404,82,'esp','Grand Modus'),(1405,82,'esp','Grand Scenic'),(1406,82,'esp','Kangoo'),(1407,82,'esp','Koleos'),(1408,82,'esp','Laguna'),(1409,82,'esp','Latitude'),(1410,82,'esp','Mascott'),(1411,82,'esp','Master'),(1412,82,'esp','Megane'),(1413,82,'esp','Modus'),(1414,82,'esp','P 1400'),(1415,82,'esp','R 11'),(1416,82,'esp','R 14'),(1417,82,'esp','R 18'),(1418,82,'esp','R 19'),(1419,82,'esp','R 20'),(1420,82,'esp','R 21'),(1421,82,'esp','R 25'),(1422,82,'esp','R 30'),(1423,82,'esp','R 4'),(1424,82,'esp','R 5'),(1425,82,'esp','R 6'),(1426,82,'esp','R 9'),(1427,82,'esp','Rapid'),(1428,82,'esp','Safrane'),(1429,82,'esp','Scenic'),(1430,82,'esp','Spider'),(1431,82,'esp','Trafic'),(1432,82,'esp','Twingo'),(1433,82,'esp','Twizy'),(1434,82,'esp','Vel Satis'),(1435,82,'esp','Wind'),(1436,82,'esp','ZOE'),(1437,83,'esp','Corniche'),(1438,83,'esp','Flying Spur'),(1439,83,'esp','Ghost'),(1440,83,'esp','Park Ward'),(1441,83,'esp','Phantom'),(1442,83,'esp','Silver Cloud'),(1443,83,'esp','Silver Dawn'),(1444,83,'esp','Silver Seraph'),(1445,83,'esp','Silver Shadow'),(1446,83,'esp','Silver Spirit'),(1447,83,'esp','Silver Spur'),(1448,84,'esp','100'),(1449,84,'esp','111'),(1450,84,'esp','114'),(1451,84,'esp','115'),(1452,84,'esp','200'),(1453,84,'esp','213'),(1454,84,'esp','214'),(1455,84,'esp','216'),(1456,84,'esp','218'),(1457,84,'esp','220'),(1458,84,'esp','25'),(1459,84,'esp','400'),(1460,84,'esp','414'),(1461,84,'esp','416'),(1462,84,'esp','418'),(1463,84,'esp','420'),(1464,84,'esp','45'),(1465,84,'esp','600'),(1466,84,'esp','618'),(1467,84,'esp','620'),(1468,84,'esp','623'),(1469,84,'esp','75'),(1470,84,'esp','800'),(1471,84,'esp','820'),(1472,84,'esp','825'),(1473,84,'esp','827'),(1474,84,'esp','City Rover'),(1475,84,'esp','Metro'),(1476,84,'esp','Montego'),(1477,84,'esp','SD'),(1478,84,'esp','Streetwise'),(1479,86,'esp','9-3'),(1480,86,'esp','9-4X'),(1481,86,'esp','9-5'),(1482,86,'esp','9-7X'),(1483,86,'esp','90'),(1484,86,'esp','900'),(1485,86,'esp','9000'),(1486,86,'esp','96'),(1487,86,'esp','99'),(1488,88,'esp','Alhambra'),(1489,88,'esp','Altea'),(1490,88,'esp','Arosa'),(1491,88,'esp','Cordoba'),(1492,88,'esp','Exeo'),(1493,88,'esp','Ibiza'),(1494,88,'esp','Inca'),(1495,88,'esp','Leon'),(1496,88,'esp','Malaga'),(1497,88,'esp','Marbella'),(1498,88,'esp','Mii'),(1499,88,'esp','Terra'),(1500,88,'esp','Toledo'),(1501,89,'esp','105'),(1502,89,'esp','120'),(1503,89,'esp','130'),(1504,89,'esp','135'),(1505,89,'esp','Citigo'),(1506,89,'esp','Fabia'),(1507,89,'esp','Favorit'),(1508,89,'esp','Felicia'),(1509,89,'esp','Forman'),(1510,89,'esp','Octavia'),(1511,89,'esp','Pick-up'),(1512,89,'esp','Praktik'),(1513,89,'esp','Rapid'),(1514,89,'esp','Roomster'),(1515,89,'esp','Superb'),(1516,89,'esp','Yeti'),(1517,90,'esp','Crossblade'),(1518,90,'esp','ForFour'),(1519,90,'esp','ForTwo'),(1520,90,'esp','Roadster'),(1521,92,'esp','C8'),(1522,92,'esp','C8 AILERON'),(1523,92,'esp','C8 DOUBLE 12 S'),(1524,92,'esp','C8 LAVIOLETTE SWB'),(1525,92,'esp','C8 SPYDER SWB'),(1526,93,'esp','Actyon'),(1527,93,'esp','Family'),(1528,93,'esp','Korando'),(1529,93,'esp','Kyron'),(1530,93,'esp','MUSSO'),(1531,93,'esp','REXTON'),(1532,93,'esp','Rodius'),(1533,94,'esp','B9 Tribeca'),(1534,94,'esp','Baja'),(1535,94,'esp','BRZ'),(1536,94,'esp','Forester'),(1537,94,'esp','Impreza'),(1538,94,'esp','Justy'),(1539,94,'esp','Legacy'),(1540,94,'esp','Libero'),(1541,94,'esp','OUTBACK'),(1542,94,'esp','SVX'),(1543,94,'esp','Trezia'),(1544,94,'esp','Tribeca'),(1545,94,'esp','Vivio'),(1546,94,'esp','XT'),(1547,94,'esp','XV'),(1548,95,'esp','Alto'),(1549,95,'esp','Baleno'),(1550,95,'esp','Cappuccino'),(1551,95,'esp','Carry'),(1552,95,'esp','Grand Vitara'),(1553,95,'esp','Ignis'),(1554,95,'esp','Jimny'),(1555,95,'esp','Kizashi'),(1556,95,'esp','Liana'),(1557,95,'esp','LJ'),(1558,95,'esp','SJ Samurai'),(1559,95,'esp','Splash'),(1560,95,'esp','Super-Carry'),(1561,95,'esp','Swift'),(1562,95,'esp','SX4'),(1563,95,'esp','SX4 S-Cross'),(1564,95,'esp','Vitara'),(1565,95,'esp','Wagon R+'),(1566,95,'esp','X-90'),(1567,97,'esp','Chimaera'),(1568,97,'esp','Griffith'),(1569,97,'esp','Tuscan'),(1570,98,'esp','Horizon'),(1571,98,'esp','Samba'),(1572,99,'esp','Indica'),(1573,99,'esp','Indigo'),(1574,99,'esp','Nano'),(1575,99,'esp','Safari'),(1576,99,'esp','Sumo'),(1577,99,'esp','Telcoline'),(1578,99,'esp','Telcosport'),(1579,99,'esp','Xenon'),(1580,101,'esp','4-Runner'),(1581,101,'esp','Auris'),(1582,101,'esp','Auris Touring Sports'),(1583,101,'esp','Avalon'),(1584,101,'esp','Avensis'),(1585,101,'esp','Avensis Verso'),(1586,101,'esp','Aygo'),(1587,101,'esp','Camry'),(1588,101,'esp','Carina'),(1589,101,'esp','Celica'),(1590,101,'esp','Corolla'),(1591,101,'esp','Corolla Verso'),(1592,101,'esp','Cressida'),(1593,101,'esp','Crown'),(1594,101,'esp','Dyna'),(1595,101,'esp','FJ'),(1596,101,'esp','GT86'),(1597,101,'esp','Hiace'),(1598,101,'esp','Highlander'),(1599,101,'esp','Hilux'),(1600,101,'esp','IQ'),(1601,101,'esp','Land Cruiser'),(1602,101,'esp','Lite-Ace'),(1603,101,'esp','MR 2'),(1604,101,'esp','Paseo'),(1605,101,'esp','Picnic'),(1606,101,'esp','Previa'),(1607,101,'esp','Prius'),(1608,101,'esp','Prius+'),(1609,101,'esp','RAV 4'),(1610,101,'esp','Sequoia'),(1611,101,'esp','Sienna'),(1612,101,'esp','Starlet'),(1613,101,'esp','Supra'),(1614,101,'esp','Tacoma'),(1615,101,'esp','Tercel'),(1616,101,'esp','Tundra'),(1617,101,'esp','Urban Cruiser'),(1618,101,'esp','Verso'),(1619,101,'esp','Verso-S'),(1620,101,'esp','Yaris'),(1621,102,'esp','601'),(1622,103,'esp','Dolomite'),(1623,103,'esp','Moss'),(1624,103,'esp','Spitfire'),(1625,103,'esp','TR3'),(1626,103,'esp','TR4'),(1627,103,'esp','TR5'),(1628,103,'esp','TR6'),(1629,103,'esp','TR7'),(1630,103,'esp','TR8'),(1631,104,'esp','181'),(1632,104,'esp','Amarok'),(1633,104,'esp','Beetle'),(1634,104,'esp','Bora'),(1635,104,'esp','Buggy'),(1636,104,'esp','Caddy'),(1637,104,'esp','CC'),(1638,104,'esp','Corrado'),(1639,104,'esp','Crafter'),(1640,104,'esp','Eos'),(1641,104,'esp','Fox'),(1642,104,'esp','Golf (All)'),(1643,104,'esp','Golf'),(1644,104,'esp','Golf Plus'),(1645,104,'esp','Iltis'),(1646,104,'esp','Jetta'),(1647,104,'esp','Karmann Ghia'),(1648,104,'esp','Käfer'),(1649,104,'esp','LT'),(1650,104,'esp','Lupo'),(1651,104,'esp','New Beetle'),(1652,104,'esp','Passat (All)'),(1653,104,'esp','Passat'),(1654,104,'esp','Passat CC'),(1655,104,'esp','Phaeton'),(1656,104,'esp','Polo'),(1657,104,'esp','Routan'),(1658,104,'esp','Santana'),(1659,104,'esp','Scirocco'),(1660,104,'esp','Sharan'),(1661,104,'esp','T1'),(1662,104,'esp','T2'),(1663,104,'esp','T3 (All)'),(1664,104,'esp','T3 Caravelle'),(1665,104,'esp','T3 Multivan'),(1666,104,'esp','T3 other'),(1667,104,'esp','T3 Kombi'),(1668,104,'esp','T4 (All)'),(1669,104,'esp','T4 California'),(1670,104,'esp','T4 Caravelle'),(1671,104,'esp','T4 Multivan'),(1672,104,'esp','T4 other'),(1673,104,'esp','T4 Kombi'),(1674,104,'esp','T5 (All)'),(1675,104,'esp','T5 California'),(1676,104,'esp','T5 Caravelle'),(1677,104,'esp','T5 Multivan'),(1678,104,'esp','T5 Shuttle'),(1679,104,'esp','T5 other'),(1680,104,'esp','T5 Kombi'),(1681,104,'esp','Taro'),(1682,104,'esp','Tiguan'),(1683,104,'esp','Touareg'),(1684,104,'esp','Touran'),(1685,104,'esp','up!'),(1686,104,'esp','Vento'),(1687,105,'esp','240'),(1688,105,'esp','244'),(1689,105,'esp','245'),(1690,105,'esp','262'),(1691,105,'esp','264'),(1692,105,'esp','340'),(1693,105,'esp','360'),(1694,105,'esp','440'),(1695,105,'esp','460'),(1696,105,'esp','480'),(1697,105,'esp','740'),(1698,105,'esp','744'),(1699,105,'esp','745'),(1700,105,'esp','760'),(1701,105,'esp','780'),(1702,105,'esp','850'),(1703,105,'esp','855'),(1704,105,'esp','940'),(1705,105,'esp','944'),(1706,105,'esp','945'),(1707,105,'esp','960'),(1708,105,'esp','965'),(1709,105,'esp','Amazon'),(1710,105,'esp','C30'),(1711,105,'esp','C70'),(1712,105,'esp','Polar'),(1713,105,'esp','S40'),(1714,105,'esp','S60'),(1715,105,'esp','S70'),(1716,105,'esp','S80'),(1717,105,'esp','S90'),(1718,105,'esp','V40'),(1719,105,'esp','V50'),(1720,105,'esp','V60'),(1721,105,'esp','V70'),(1722,105,'esp','V90'),(1723,105,'esp','XC 60'),(1724,105,'esp','XC 70'),(1725,105,'esp','XC 90'),(1726,106,'esp','311'),(1727,106,'esp','353'),(1728,108,'esp','MF 25'),(1729,108,'esp','MF 28'),(1730,108,'esp','MF 3'),(1731,108,'esp','MF 30'),(1732,108,'esp','MF 35'),(1733,108,'esp','MF 4'),(1734,108,'esp','MF 5'),(1,1,'french','500'),(2,1,'french','500C'),(3,1,'french','Grande Punto'),(4,1,'french','Punto Evo'),(5,2,'french','MDX'),(6,2,'french','NSX'),(7,2,'french','RL'),(8,2,'french','RSX'),(9,2,'french','TL'),(10,2,'french','TSX'),(11,3,'french','City'),(12,3,'french','Crossline'),(13,3,'french','Roadline'),(14,3,'french','Scouty R'),(15,4,'french','8C'),(16,4,'french','Alfa 145'),(17,4,'french','Alfa 146'),(18,4,'french','Alfa 147'),(19,4,'french','Alfa 155'),(20,4,'french','Alfa 156'),(21,4,'french','Alfa 159'),(22,4,'french','Alfa 164'),(23,4,'french','Alfa 166'),(24,4,'french','Alfa 33'),(25,4,'french','Alfa 75'),(26,4,'french','Alfa 90'),(27,4,'french','Alfasud'),(28,4,'french','Alfetta'),(29,4,'french','Brera'),(30,4,'french','Crosswagon'),(31,4,'french','Giulia'),(32,4,'french','Giulietta'),(33,4,'french','GT'),(34,4,'french','GTV'),(35,4,'french','Junior'),(36,4,'french','MiTo'),(37,4,'french','Spider'),(38,4,'french','Sprint'),(39,5,'french','B10'),(40,5,'french','B12'),(41,5,'french','B3'),(42,5,'french','B5'),(43,5,'french','B6'),(44,5,'french','B7'),(45,5,'french','B8'),(46,5,'french','D 10'),(47,5,'french','D3'),(48,5,'french','D5'),(49,5,'french','Roadster S'),(50,5,'french','XD3'),(51,7,'french','GT'),(52,8,'french','Rocsta'),(53,9,'french','AR1'),(54,9,'french','Cygnet'),(55,9,'french','DB'),(56,9,'french','DB7'),(57,9,'french','DB9'),(58,9,'french','DBS'),(59,9,'french','Lagonda'),(60,9,'french','Rapide'),(61,9,'french','V12 Vantage'),(62,9,'french','V8 Vantage'),(63,9,'french','Vanquish'),(64,9,'french','Virage'),(65,10,'french','100'),(66,10,'french','200'),(67,10,'french','80'),(68,10,'french','90'),(69,10,'french','A1'),(70,10,'french','A2'),(71,10,'french','A3'),(72,10,'french','A4'),(73,10,'french','A4 Allroad'),(74,10,'french','A5'),(75,10,'french','A6'),(76,10,'french','A6 Allroad'),(77,10,'french','A7'),(78,10,'french','A8'),(79,10,'french','Cabriolet'),(80,10,'french','Coupé'),(81,10,'french','Q3'),(82,10,'french','Q5'),(83,10,'french','Q7'),(84,10,'french','QUATTRO'),(85,10,'french','R8'),(86,10,'french','RS2'),(87,10,'french','RS3'),(88,10,'french','RS4'),(89,10,'french','RS5'),(90,10,'french','RS6'),(91,10,'french','RS7'),(92,10,'french','S2'),(93,10,'french','S3'),(94,10,'french','S4'),(95,10,'french','S5'),(96,10,'french','S6'),(97,10,'french','S7'),(98,10,'french','S8'),(99,10,'french','SQ5'),(100,10,'french','TT (All)'),(101,10,'french','TT'),(102,10,'french','TT RS'),(103,10,'french','TTS'),(104,10,'french','V8'),(105,13,'french','Series 1 (All)'),(106,13,'french','114'),(107,13,'french','116'),(108,13,'french','118'),(109,13,'french','120'),(110,13,'french','123'),(111,13,'french','125'),(112,13,'french','130'),(113,13,'french','135'),(114,13,'french','2002'),(115,13,'french','Series 3 (All)'),(116,13,'french','315'),(117,13,'french','316'),(118,13,'french','318'),(119,13,'french','318 Gran Turismo'),(120,13,'french','320'),(121,13,'french','320 Gran Turismo'),(122,13,'french','323'),(123,13,'french','324'),(124,13,'french','325'),(125,13,'french','328'),(126,13,'french','328 Gran Turismo'),(127,13,'french','330'),(128,13,'french','335'),(129,13,'french','335 Gran Turismo'),(130,13,'french','ActiveHybrid 3'),(131,13,'french','Series 4 (All)'),(132,13,'french','420'),(133,13,'french','428'),(134,13,'french','430'),(135,13,'french','435'),(136,13,'french','Series 5 (All)'),(137,13,'french','518'),(138,13,'french','520'),(139,13,'french','520 Gran Turismo'),(140,13,'french','523'),(141,13,'french','524'),(142,13,'french','525'),(143,13,'french','528'),(144,13,'french','530'),(145,13,'french','530 Gran Turismo'),(146,13,'french','535'),(147,13,'french','535 Gran Turismo'),(148,13,'french','540'),(149,13,'french','545'),(150,13,'french','550'),(151,13,'french','550 Gran Turismo'),(152,13,'french','ActiveHybrid 5'),(153,13,'french','Series 6 (All)'),(154,13,'french','628'),(155,13,'french','630'),(156,13,'french','633'),(157,13,'french','635'),(158,13,'french','640'),(159,13,'french','645'),(160,13,'french','650'),(161,13,'french','Series 7 (All)'),(162,13,'french','725'),(163,13,'french','728'),(164,13,'french','730'),(165,13,'french','732'),(166,13,'french','735'),(167,13,'french','740'),(168,13,'french','745'),(169,13,'french','750'),(170,13,'french','760'),(171,13,'french','ActiveHybrid 7'),(172,13,'french','840'),(173,13,'french','850'),(174,13,'french','i3'),(175,13,'french','M Models (All)'),(176,13,'french','M135'),(177,13,'french','M3'),(178,13,'french','M5'),(179,13,'french','M6'),(180,13,'french','X5 M'),(181,13,'french','X6 M'),(182,13,'french','Z3 M'),(183,13,'french','Z4 M'),(184,13,'french','Series X (All)'),(185,13,'french','ActiveHybrid X6'),(186,13,'french','X1'),(187,13,'french','X3'),(188,13,'french','X5'),(189,13,'french','X5 M'),(190,13,'french','X6'),(191,13,'french','X6 M'),(192,13,'french','Series Z (All)'),(193,13,'french','Z1'),(194,13,'french','Z3'),(195,13,'french','Z3 M'),(196,13,'french','Z4'),(197,13,'french','Z4 M'),(198,13,'french','Z8'),(199,14,'french','Arnage'),(200,14,'french','Azure'),(201,14,'french','Brooklands'),(202,14,'french','Continental (All)'),(203,14,'french','Continental'),(204,14,'french','Continental Flying Spur'),(205,14,'french','Continental GT'),(206,14,'french','Continental GTC'),(207,14,'french','Continental Supersports'),(208,14,'french','Eight'),(209,14,'french','Mulsanne'),(210,14,'french','Turbo R'),(211,14,'french','Turbo RT'),(212,14,'french','Turbo S'),(213,16,'french','BC3'),(214,16,'french','BS2'),(215,16,'french','BS4'),(216,16,'french','BS6'),(217,17,'french','EB 110'),(218,17,'french','Veyron'),(219,18,'french','Century'),(220,18,'french','Electra'),(221,18,'french','Enclave'),(222,18,'french','La Crosse'),(223,18,'french','Le Sabre'),(224,18,'french','Park Avenue'),(225,18,'french','Regal'),(226,18,'french','Riviera'),(227,18,'french','Roadmaster'),(228,18,'french','Skylark'),(229,19,'french','Allante'),(230,19,'french','ATS'),(231,19,'french','BLS'),(232,19,'french','CTS'),(233,19,'french','Deville'),(234,19,'french','Eldorado'),(235,19,'french','Escalade'),(236,19,'french','Fleetwood'),(237,19,'french','Seville'),(238,19,'french','SRX'),(239,19,'french','STS'),(240,19,'french','XLR'),(241,22,'french','2500'),(242,22,'french','Alero'),(243,22,'french','Astro'),(244,22,'french','Avalanche'),(245,22,'french','Aveo'),(246,22,'french','Beretta'),(247,22,'french','Blazer'),(248,22,'french','C1500'),(249,22,'french','Camaro'),(250,22,'french','Caprice'),(251,22,'french','Captiva'),(252,22,'french','Cavalier'),(253,22,'french','Chevelle'),(254,22,'french','Chevy Van'),(255,22,'french','Citation'),(256,22,'french','Colorado'),(257,22,'french','Corsica'),(258,22,'french','Cruze'),(259,22,'french','El Camino'),(260,22,'french','Epica'),(261,22,'french','Evanda'),(262,22,'french','Express'),(263,22,'french','G'),(264,22,'french','HHR'),(265,22,'french','Impala'),(266,22,'french','K1500'),(267,22,'french','K30'),(268,22,'french','Kalos'),(269,22,'french','Lacetti'),(270,22,'french','Lumina'),(271,22,'french','Malibu'),(272,22,'french','Matiz'),(273,22,'french','Nubira'),(274,22,'french','Orlando'),(275,22,'french','Rezzo'),(276,22,'french','S-10'),(277,22,'french','Silverado'),(278,22,'french','Spark'),(279,22,'french','SSR'),(280,22,'french','Suburban'),(281,22,'french','Tahoe'),(282,22,'french','Trailblazer'),(283,22,'french','Trans Sport'),(284,22,'french','Trax'),(285,22,'french','Venture'),(286,22,'french','Volt'),(287,23,'french','300 M'),(288,23,'french','300C'),(289,23,'french','Aspen'),(290,23,'french','Crossfire'),(291,23,'french','Daytona'),(292,23,'french','ES'),(293,23,'french','Grand Voyager'),(294,23,'french','GS'),(295,23,'french','GTS'),(296,23,'french','Imperial'),(297,23,'french','Le Baron'),(298,23,'french','Neon'),(299,23,'french','New Yorker'),(300,23,'french','Pacifica'),(301,23,'french','PT Cruiser'),(302,23,'french','Saratoga'),(303,23,'french','Sebring'),(304,23,'french','Stratus'),(305,23,'french','Valiant'),(306,23,'french','Viper'),(307,23,'french','Vision'),(308,23,'french','Voyager'),(309,24,'french','2 CV'),(310,24,'french','AX'),(311,24,'french','Berlingo'),(312,24,'french','BX'),(313,24,'french','C-Crosser'),(314,24,'french','C-Zero'),(315,24,'french','C1'),(316,24,'french','C2'),(317,24,'french','C3'),(318,24,'french','C3 Picasso'),(319,24,'french','C4'),(320,24,'french','C4 Aircross'),(321,24,'french','C4 Picasso'),(322,24,'french','C5'),(323,24,'french','C6'),(324,24,'french','C8'),(325,24,'french','CX'),(326,24,'french','DS'),(327,24,'french','DS3'),(328,24,'french','DS4'),(329,24,'french','DS5'),(330,24,'french','Evasion'),(331,24,'french','Grand C4 Picasso'),(332,24,'french','GSA'),(333,24,'french','Jumper'),(334,24,'french','Jumpy'),(335,24,'french','Nemo'),(336,24,'french','SAXO'),(337,24,'french','SM'),(338,24,'french','Visa'),(339,24,'french','Xantia'),(340,24,'french','XM'),(341,24,'french','Xsara'),(342,24,'french','Xsara Picasso'),(343,24,'french','ZX'),(344,26,'french','C1'),(345,26,'french','C2'),(346,26,'french','C3'),(347,26,'french','C4'),(348,26,'french','C5'),(349,26,'french','C6'),(350,26,'french','C7'),(351,26,'french','Z06'),(352,26,'french','ZR 1'),(353,27,'french','Dokker'),(354,27,'french','Duster'),(355,27,'french','Lodgy'),(356,27,'french','Logan'),(357,27,'french','Logan Pick-Up'),(358,27,'french','Pick Up'),(359,27,'french','Sandero'),(360,28,'french','Espero'),(361,28,'french','Evanda'),(362,28,'french','Kalos'),(363,28,'french','Korando'),(364,28,'french','Lacetti'),(365,28,'french','Lanos'),(366,28,'french','Leganza'),(367,28,'french','Matiz'),(368,28,'french','Musso'),(369,28,'french','Nexia'),(370,28,'french','Nubira'),(371,28,'french','Rezzo'),(372,28,'french','Tacuma'),(373,29,'french','Applause'),(374,29,'french','Charade'),(375,29,'french','Charmant'),(376,29,'french','Copen'),(377,29,'french','Cuore'),(378,29,'french','Feroza/Sportrak'),(379,29,'french','Freeclimber'),(380,29,'french','Gran Move'),(381,29,'french','Hijet'),(382,29,'french','MATERIA'),(383,29,'french','Move'),(384,29,'french','Rocky/Fourtrak'),(385,29,'french','Sirion'),(386,29,'french','Terios'),(387,29,'french','TREVIS'),(388,29,'french','YRV'),(389,30,'french','Guarà'),(390,30,'french','Pantera'),(391,31,'french','Avenger'),(392,31,'french','Caliber'),(393,31,'french','Challenger'),(394,31,'french','Charger'),(395,31,'french','Dakota'),(396,31,'french','Demon'),(397,31,'french','Durango'),(398,31,'french','Grand Caravan'),(399,31,'french','Hornet'),(400,31,'french','Journey'),(401,31,'french','Magnum'),(402,31,'french','Neon'),(403,31,'french','Nitro'),(404,31,'french','RAM'),(405,31,'french','Stealth'),(406,31,'french','Viper'),(407,32,'french','208'),(408,32,'french','246'),(409,32,'french','250'),(410,32,'french','275'),(411,32,'french','288'),(412,32,'french','308'),(413,32,'french','328'),(414,32,'french','330'),(415,32,'french','348'),(416,32,'french','360'),(417,32,'french','365'),(418,32,'french','400'),(419,32,'french','412'),(420,32,'french','456'),(421,32,'french','458'),(422,32,'french','512'),(423,32,'french','550'),(424,32,'french','575'),(425,32,'french','599 GTB'),(426,32,'french','612'),(427,32,'french','750'),(428,32,'french','California'),(429,32,'french','Daytona'),(430,32,'french','Dino GT4'),(431,32,'french','Enzo Ferrari'),(432,32,'french','F12'),(433,32,'french','F355'),(434,32,'french','F40'),(435,32,'french','F430'),(436,32,'french','F50'),(437,32,'french','FF'),(438,32,'french','LaFerrari'),(439,32,'french','Mondial'),(440,32,'french','Superamerica'),(441,32,'french','Testarossa'),(442,33,'french','124'),(443,33,'french','126'),(444,33,'french','127'),(445,33,'french','130'),(446,33,'french','131'),(447,33,'french','500'),(448,33,'french','500C'),(449,33,'french','500L'),(450,33,'french','Barchetta'),(451,33,'french','Brava'),(452,33,'french','Bravo'),(453,33,'french','Cinquecento'),(454,33,'french','Coupe'),(455,33,'french','Croma'),(456,33,'french','Dino'),(457,33,'french','Doblo'),(458,33,'french','Ducato'),(459,33,'french','Fiorino'),(460,33,'french','Freemont'),(461,33,'french','Grande Punto'),(462,33,'french','Idea'),(463,33,'french','Linea'),(464,33,'french','Marea'),(465,33,'french','Marengo'),(466,33,'french','Multipla'),(467,33,'french','New Panda'),(468,33,'french','Palio'),(469,33,'french','Panda'),(470,33,'french','Punto'),(471,33,'french','Punto Evo'),(472,33,'french','Qubo'),(473,33,'french','Regata'),(474,33,'french','Ritmo'),(475,33,'french','Scudo'),(476,33,'french','Sedici'),(477,33,'french','Seicento'),(478,33,'french','Spider Europa'),(479,33,'french','Stilo'),(480,33,'french','Strada'),(481,33,'french','Tempra'),(482,33,'french','Tipo'),(483,33,'french','Ulysse'),(484,33,'french','Uno'),(485,33,'french','X 1/9'),(486,34,'french','Karma'),(487,35,'french','Aerostar'),(488,35,'french','B-Max'),(489,35,'french','Bronco'),(490,35,'french','C-Max'),(491,35,'french','Capri'),(492,35,'french','Cougar'),(493,35,'french','Courier'),(494,35,'french','Crown'),(495,35,'french','Econoline'),(496,35,'french','Econovan'),(497,35,'french','Edge'),(498,35,'french','Escape'),(499,35,'french','Escort'),(500,35,'french','Excursion'),(501,35,'french','Expedition'),(502,35,'french','Explorer'),(503,35,'french','Express'),(504,35,'french','F 150'),(505,35,'french','F 250'),(506,35,'french','F 350'),(507,35,'french','Fairlane'),(508,35,'french','Falcon'),(509,35,'french','Fiesta'),(510,35,'french','Flex'),(511,35,'french','Focus'),(512,35,'french','Fusion'),(513,35,'french','Galaxy'),(514,35,'french','Granada'),(515,35,'french','Grand C-Max'),(516,35,'french','GT'),(517,35,'french','Ka'),(518,35,'french','Kuga'),(519,35,'french','Maverick'),(520,35,'french','Mercury'),(521,35,'french','Mondeo'),(522,35,'french','Mustang'),(523,35,'french','Orion'),(524,35,'french','Probe'),(525,35,'french','Puma'),(526,35,'french','Ranger'),(527,35,'french','S-Max'),(528,35,'french','Scorpio'),(529,35,'french','Sierra'),(530,35,'french','Sportka'),(531,35,'french','Streetka'),(532,35,'french','Taunus'),(533,35,'french','Taurus'),(534,35,'french','Thunderbird'),(535,35,'french','Tourneo'),(536,35,'french','Transit (All)'),(537,35,'french','Transit'),(538,35,'french','Transit Connect'),(539,35,'french','Windstar'),(540,36,'french','Acadia'),(541,36,'french','Envoy'),(542,36,'french','Safari'),(543,36,'french','Savana'),(544,36,'french','Sierra'),(545,36,'french','Sonoma'),(546,36,'french','Syclone'),(547,36,'french','Typhoon'),(548,36,'french','Vandura'),(549,36,'french','Yukon'),(550,37,'french','Sonique'),(551,40,'french','Accord'),(552,40,'french','Aerodeck'),(553,40,'french','Civic'),(554,40,'french','Concerto'),(555,40,'french','CR-V'),(556,40,'french','CR-Z'),(557,40,'french','CRX'),(558,40,'french','Element'),(559,40,'french','FR-V'),(560,40,'french','HR-V'),(561,40,'french','Insight'),(562,40,'french','Integra'),(563,40,'french','Jazz'),(564,40,'french','Legend'),(565,40,'french','Logo'),(566,40,'french','NSX'),(567,40,'french','Odyssey'),(568,40,'french','Prelude'),(569,40,'french','S2000'),(570,40,'french','Shuttle'),(571,40,'french','Stream'),(572,41,'french','H1'),(573,41,'french','H2'),(574,41,'french','H3'),(575,42,'french','Accent'),(576,42,'french','Atos'),(577,42,'french','Azera'),(578,42,'french','Coupe'),(579,42,'french','Elantra'),(580,42,'french','Excel'),(581,42,'french','Galloper'),(582,42,'french','Genesis'),(583,42,'french','Getz'),(584,42,'french','Grandeur'),(585,42,'french','H 100'),(586,42,'french','H 200'),(587,42,'french','H-1'),(588,42,'french','H-1 Starex'),(589,42,'french','i10'),(590,42,'french','i20'),(591,42,'french','i30'),(592,42,'french','i40'),(593,42,'french','i50'),(594,42,'french','ix20'),(595,42,'french','ix35'),(596,42,'french','ix55'),(597,42,'french','Lantra'),(598,42,'french','Matrix'),(599,42,'french','Pony'),(600,42,'french','S-Coupe'),(601,42,'french','Santa Fe'),(602,42,'french','Santamo'),(603,42,'french','Sonata'),(604,42,'french','Terracan'),(605,42,'french','Trajet'),(606,42,'french','Tucson'),(607,42,'french','Veloster'),(608,42,'french','Veracruz'),(609,42,'french','XG 30'),(610,42,'french','XG 350'),(611,43,'french','EX35'),(612,43,'french','EX37'),(613,43,'french','FX'),(614,43,'french','G35'),(615,43,'french','G37'),(616,43,'french','M30'),(617,43,'french','M35'),(618,43,'french','M37'),(619,43,'french','Q45'),(620,43,'french','QX56'),(621,44,'french','Campo'),(622,44,'french','D-Max'),(623,44,'french','Gemini'),(624,44,'french','Midi'),(625,44,'french','PICK UP'),(626,44,'french','Trooper'),(627,45,'french','Massif'),(628,46,'french','Daimler'),(629,46,'french','E-Type'),(630,46,'french','F-Type'),(631,46,'french','MK II'),(632,46,'french','S-Type'),(633,46,'french','X-Type'),(634,46,'french','XF'),(635,46,'french','XJ'),(636,46,'french','XJ12'),(637,46,'french','XJ40'),(638,46,'french','XJ6'),(639,46,'french','XJ8'),(640,46,'french','XJR'),(641,46,'french','XJS'),(642,46,'french','XJSC'),(643,46,'french','XK'),(644,46,'french','XKR'),(645,47,'french','Cherokee'),(646,47,'french','CJ'),(647,47,'french','Comanche'),(648,47,'french','Commander'),(649,47,'french','Compass'),(650,47,'french','Grand Cherokee'),(651,47,'french','Patriot'),(652,47,'french','Renegade'),(653,47,'french','Wagoneer'),(654,47,'french','Willys'),(655,47,'french','Wrangler'),(656,48,'french','X-BOW'),(657,49,'french','Besta'),(658,49,'french','Borrego'),(659,49,'french','Carens'),(660,49,'french','Carnival'),(661,49,'french','cee\'d'),(662,49,'french','cee\'d Sportswagon'),(663,49,'french','Cerato'),(664,49,'french','Clarus'),(665,49,'french','Elan'),(666,49,'french','Joice'),(667,49,'french','K2500'),(668,49,'french','K2700'),(669,49,'french','Leo'),(670,49,'french','Magentis'),(671,49,'french','Mentor'),(672,49,'french','Mini'),(673,49,'french','Opirus'),(674,49,'french','Optima'),(675,49,'french','Picanto'),(676,49,'french','Pregio'),(677,49,'french','Pride'),(678,49,'french','pro_cee\'d'),(679,49,'french','Retona'),(680,49,'french','Rio'),(681,49,'french','Roadster'),(682,49,'french','Rocsta'),(683,49,'french','Sephia'),(684,49,'french','Shuma'),(685,49,'french','Sorento'),(686,49,'french','Soul'),(687,49,'french','Sportage'),(688,49,'french','Venga'),(689,50,'french','CCR'),(690,51,'french','110'),(691,51,'french','111'),(692,51,'french','112'),(693,51,'french','1200'),(694,51,'french','2107'),(695,51,'french','2110'),(696,51,'french','2111'),(697,51,'french','2112'),(698,51,'french','Aleko'),(699,51,'french','Forma'),(700,51,'french','Kalina'),(701,51,'french','Niva'),(702,51,'french','Nova'),(703,51,'french','Priora'),(704,51,'french','Samara'),(705,52,'french','Aventador'),(706,52,'french','Countach'),(707,52,'french','Diablo'),(708,52,'french','Espada'),(709,52,'french','Gallardo'),(710,52,'french','Jalpa'),(711,52,'french','LM'),(712,52,'french','Miura'),(713,52,'french','Murciélago'),(714,52,'french','Urraco'),(715,53,'french','Beta'),(716,53,'french','Dedra'),(717,53,'french','Delta'),(718,53,'french','Flaminia'),(719,53,'french','Flavia'),(720,53,'french','Fulvia'),(721,53,'french','Gamma'),(722,53,'french','Kappa'),(723,53,'french','Lybra'),(724,53,'french','MUSA'),(725,53,'french','Phedra'),(726,53,'french','Prisma'),(727,53,'french','Stratos'),(728,53,'french','Thema'),(729,53,'french','Thesis'),(730,53,'french','Voyager'),(731,53,'french','Ypsilon'),(732,53,'french','Zeta'),(733,54,'french','Defender'),(734,54,'french','Discovery'),(735,54,'french','Freelander'),(736,54,'french','Range Rover'),(737,54,'french','Range Rover Evoque'),(738,54,'french','Range Rover Sport'),(739,54,'french','Serie I'),(740,54,'french','Serie II'),(741,54,'french','Serie III'),(742,55,'french','CV-9'),(743,55,'french','S'),(744,55,'french','SC2'),(745,55,'french','SC4'),(746,56,'french','CT 200h'),(747,56,'french','ES Series (All)'),(748,56,'french','ES 300'),(749,56,'french','ES 330'),(750,56,'french','ES 350'),(751,56,'french','GS Series (All)'),(752,56,'french','GS 250'),(753,56,'french','GS 300'),(754,56,'french','GS 350'),(755,56,'french','GS 430'),(756,56,'french','GS 450'),(757,56,'french','GS 460'),(758,56,'french','GX 470'),(759,56,'french','IS Series (All)'),(760,56,'french','IS 200'),(761,56,'french','IS 220'),(762,56,'french','IS 250'),(763,56,'french','IS 300'),(764,56,'french','IS 350'),(765,56,'french','IS-F'),(766,56,'french','LS Series (All)'),(767,56,'french','LS 400'),(768,56,'french','LS 430'),(769,56,'french','LS 460'),(770,56,'french','LS 600'),(771,56,'french','LX Series (All)'),(772,56,'french','LX 470'),(773,56,'french','LX 570'),(774,56,'french','RX Series (All)'),(775,56,'french','RX 300'),(776,56,'french','RX 330'),(777,56,'french','RX 350'),(778,56,'french','RX 400'),(779,56,'french','RX 450'),(780,56,'french','SC 400'),(781,56,'french','SC 430'),(782,57,'french','Ambra'),(783,57,'french','Nova'),(784,57,'french','Optima'),(785,57,'french','X - Too'),(786,58,'french','Aviator'),(787,58,'french','Continental'),(788,58,'french','LS'),(789,58,'french','Mark'),(790,58,'french','Navigator'),(791,58,'french','Town Car'),(792,59,'french','340 R'),(793,59,'french','Cortina'),(794,59,'french','Elan'),(795,59,'french','Elise'),(796,59,'french','Elite'),(797,59,'french','Esprit'),(798,59,'french','Europa'),(799,59,'french','Evora'),(800,59,'french','Excel'),(801,59,'french','Exige'),(802,59,'french','Super Seven'),(803,60,'french','MGA'),(804,60,'french','MGB'),(805,60,'french','MGF'),(806,60,'french','Midget'),(807,60,'french','Montego'),(808,60,'french','TD'),(809,60,'french','TF'),(810,60,'french','ZR'),(811,60,'french','ZS'),(812,60,'french','ZT'),(813,61,'french','Cabrio Series (All)'),(814,61,'french','Cooper Cabrio'),(815,61,'french','Cooper D Cabrio'),(816,61,'french','Cooper S Cabrio'),(817,61,'french','Cooper SD Cabrio'),(818,61,'french','John Cooper Works Cabrio'),(819,61,'french','One Cabrio'),(820,61,'french','Clubman Series (All)'),(821,61,'french','Cooper Clubman'),(822,61,'french','Cooper D Clubman'),(823,61,'french','Cooper S Clubman'),(824,61,'french','Cooper SD Clubman'),(825,61,'french','John Cooper Works Clubman'),(826,61,'french','One Clubman'),(827,61,'french','One D Clubman'),(828,61,'french','Clubvan'),(829,61,'french','Countryman Series (All)'),(830,61,'french','Cooper Countryman'),(831,61,'french','Cooper D Countryman'),(832,61,'french','Cooper S Countryman'),(833,61,'french','Cooper SD Countryman'),(834,61,'french','John Cooper Works Countryman'),(835,61,'french','One Countryman'),(836,61,'french','One D Countryman'),(837,61,'french','Coupe Series (All)'),(838,61,'french','Cooper Coupé'),(839,61,'french','Cooper S Coupé'),(840,61,'french','Cooper SD Coupé'),(841,61,'french','John Cooper Works Coupé'),(842,61,'french','MINI (All)'),(843,61,'french','1000'),(844,61,'french','1300'),(845,61,'french','Cooper'),(846,61,'french','Cooper D'),(847,61,'french','Cooper S'),(848,61,'french','Cooper SD'),(849,61,'french','John Cooper Works'),(850,61,'french','ONE'),(851,61,'french','One D'),(852,61,'french','Paceman Series (All)'),(853,61,'french','Cooper D Paceman'),(854,61,'french','Cooper Paceman'),(855,61,'french','Cooper S Paceman'),(856,61,'french','Cooper SD Paceman'),(857,61,'french','John Cooper Works Paceman'),(858,61,'french','Roadster Series (All)'),(859,61,'french','Cooper Roadster'),(860,61,'french','Cooper S Roadster'),(861,61,'french','Cooper SD Roadster'),(862,61,'french','John Cooper Works Roadster'),(863,63,'french','222'),(864,63,'french','224'),(865,63,'french','228'),(866,63,'french','3200'),(867,63,'french','418'),(868,63,'french','420'),(869,63,'french','4200'),(870,63,'french','422'),(871,63,'french','424'),(872,63,'french','430'),(873,63,'french','Biturbo'),(874,63,'french','Ghibli'),(875,63,'french','GranCabrio'),(876,63,'french','Gransport'),(877,63,'french','Granturismo'),(878,63,'french','Indy'),(879,63,'french','Karif'),(880,63,'french','MC12'),(881,63,'french','Merak'),(882,63,'french','Quattroporte'),(883,63,'french','Shamal'),(884,63,'french','Spyder'),(885,64,'french','57'),(886,64,'french','62'),(887,65,'french','121'),(888,65,'french','2'),(889,65,'french','3'),(890,65,'french','323'),(891,65,'french','5'),(892,65,'french','6'),(893,65,'french','626'),(894,65,'french','929'),(895,65,'french','B series'),(896,65,'french','Bongo'),(897,65,'french','BT-50'),(898,65,'french','CX-5'),(899,65,'french','CX-7'),(900,65,'french','CX-9'),(901,65,'french','Demio'),(902,65,'french','E series'),(903,65,'french','Millenia'),(904,65,'french','MPV'),(905,65,'french','MX-3'),(906,65,'french','MX-5'),(907,65,'french','MX-6'),(908,65,'french','Premacy'),(909,65,'french','Protege'),(910,65,'french','RX-6'),(911,65,'french','RX-7'),(912,65,'french','RX-8'),(913,65,'french','Tribute'),(914,65,'french','Xedos'),(915,66,'french','MP4-12C'),(916,67,'french','190'),(917,67,'french','200'),(918,67,'french','220'),(919,67,'french','230'),(920,67,'french','240'),(921,67,'french','250'),(922,67,'french','260'),(923,67,'french','270'),(924,67,'french','280'),(925,67,'french','290'),(926,67,'french','300'),(927,67,'french','320'),(928,67,'french','350'),(929,67,'french','380'),(930,67,'french','400'),(931,67,'french','416'),(932,67,'french','420'),(933,67,'french','450'),(934,67,'french','500'),(935,67,'french','560'),(936,67,'french','600'),(937,67,'french','A-Klasse (All)'),(938,67,'french','A 140'),(939,67,'french','A 150'),(940,67,'french','A 160'),(941,67,'french','A 170'),(942,67,'french','A 180'),(943,67,'french','A 190'),(944,67,'french','A 200'),(945,67,'french','A 210'),(946,67,'french','A 220'),(947,67,'french','A 250'),(948,67,'french','A 45 AMG'),(949,67,'french','B-Klasse (All)'),(950,67,'french','B 150'),(951,67,'french','B 160'),(952,67,'french','B 170'),(953,67,'french','B 180'),(954,67,'french','B 200'),(955,67,'french','B 220'),(956,67,'french','B 250'),(957,67,'french','C-Klasse (All)'),(958,67,'french','C 160'),(959,67,'french','C 180'),(960,67,'french','C 200'),(961,67,'french','C 220'),(962,67,'french','C 230'),(963,67,'french','C 240'),(964,67,'french','C 250'),(965,67,'french','C 270'),(966,67,'french','C 280'),(967,67,'french','C 30 AMG'),(968,67,'french','C 300'),(969,67,'french','C 32 AMG'),(970,67,'french','C 320'),(971,67,'french','C 350'),(972,67,'french','C 36 AMG'),(973,67,'french','C 43 AMG'),(974,67,'french','C 55 AMG'),(975,67,'french','C 63 AMG'),(976,67,'french','CE-Klasse (All)'),(977,67,'french','CE 200'),(978,67,'french','CE 220'),(979,67,'french','CE 230'),(980,67,'french','CE 280'),(981,67,'french','CE 300'),(982,67,'french','Citan'),(983,67,'french','CL-Klasse (All)'),(984,67,'french','CL 160'),(985,67,'french','CL 180'),(986,67,'french','CL 200'),(987,67,'french','CL 220'),(988,67,'french','CL 230'),(989,67,'french','CL 320'),(990,67,'french','CL 420'),(991,67,'french','CL 500'),(992,67,'french','CL 55 AMG'),(993,67,'french','CL 600'),(994,67,'french','CL 63 AMG'),(995,67,'french','CL 65 AMG'),(996,67,'french','CLA-Klasse (All)'),(997,67,'french','CLA 180'),(998,67,'french','CLA 200'),(999,67,'french','CLA 220'),(1000,67,'french','CLA 250'),(1001,67,'french','CLC-Klasse (All)'),(1002,67,'french','CLC 160'),(1003,67,'french','CLC 180'),(1004,67,'french','CLC 200'),(1005,67,'french','CLC 220'),(1006,67,'french','CLC 230'),(1007,67,'french','CLC 250'),(1008,67,'french','CLC 350'),(1009,67,'french','CLK-Klasse (All)'),(1010,67,'french','CLK 200'),(1011,67,'french','CLK 220'),(1012,67,'french','CLK 230'),(1013,67,'french','CLK 240'),(1014,67,'french','CLK 270'),(1015,67,'french','CLK 280'),(1016,67,'french','CLK 320'),(1017,67,'french','CLK 350'),(1018,67,'french','CLK 430'),(1019,67,'french','CLK 500'),(1020,67,'french','CLK 55 AMG'),(1021,67,'french','CLK 63 AMG'),(1022,67,'french','CLS-Klasse (All)'),(1023,67,'french','CLS 250'),(1024,67,'french','CLS 280'),(1025,67,'french','CLS 300'),(1026,67,'french','CLS 320'),(1027,67,'french','CLS 350'),(1028,67,'french','CLS 500'),(1029,67,'french','CLS 55 AMG'),(1030,67,'french','CLS 63 AMG'),(1031,67,'french','E-Klasse (All)'),(1032,67,'french','E 200'),(1033,67,'french','E 220'),(1034,67,'french','E 230'),(1035,67,'french','E 240'),(1036,67,'french','E 250'),(1037,67,'french','E 260'),(1038,67,'french','E 270'),(1039,67,'french','E 280'),(1040,67,'french','E 290'),(1041,67,'french','E 300'),(1042,67,'french','E 320'),(1043,67,'french','E 350'),(1044,67,'french','E 36 AMG'),(1045,67,'french','E 400'),(1046,67,'french','E 420'),(1047,67,'french','E 430'),(1048,67,'french','E 50'),(1049,67,'french','E 500'),(1050,67,'french','E 55 AMG'),(1051,67,'french','E 60 AMG'),(1052,67,'french','E 63 AMG'),(1053,67,'french','G-Klasse (All)'),(1054,67,'french','G 230'),(1055,67,'french','G 240'),(1056,67,'french','G 250'),(1057,67,'french','G 270'),(1058,67,'french','G 280'),(1059,67,'french','G 290'),(1060,67,'french','G 300'),(1061,67,'french','G 320'),(1062,67,'french','G 350'),(1063,67,'french','G 400'),(1064,67,'french','G 500'),(1065,67,'french','G 55 AMG'),(1066,67,'french','G 63 AMG'),(1067,67,'french','G 65 AMG'),(1068,67,'french','GL-Klasse (All)'),(1069,67,'french','GL 320'),(1070,67,'french','GL 350'),(1071,67,'french','GL 420'),(1072,67,'french','GL 450'),(1073,67,'french','GL 500'),(1074,67,'french','GL 55 AMG'),(1075,67,'french','GL 63 AMG'),(1076,67,'french','GLK-Klasse (All)'),(1077,67,'french','GLK 200'),(1078,67,'french','GLK 220'),(1079,67,'french','GLK 250'),(1080,67,'french','GLK 280'),(1081,67,'french','GLK 300'),(1082,67,'french','GLK 320'),(1083,67,'french','GLK 350'),(1084,67,'french','MB 100'),(1085,67,'french','ML-Klasse (All)'),(1086,67,'french','ML 230'),(1087,67,'french','ML 250'),(1088,67,'french','ML 270'),(1089,67,'french','ML 280'),(1090,67,'french','ML 300'),(1091,67,'french','ML 320'),(1092,67,'french','ML 350'),(1093,67,'french','ML 400'),(1094,67,'french','ML 420'),(1095,67,'french','ML 430'),(1096,67,'french','ML 450'),(1097,67,'french','ML 500'),(1098,67,'french','ML 55 AMG'),(1099,67,'french','ML 63 AMG'),(1100,67,'french','R-Klasse (All)'),(1101,67,'french','R 280'),(1102,67,'french','R 300'),(1103,67,'french','R 320'),(1104,67,'french','R 350'),(1105,67,'french','R 500'),(1106,67,'french','R 63 AMG'),(1107,67,'french','S-Klasse (All)'),(1108,67,'french','S 250'),(1109,67,'french','S 260'),(1110,67,'french','S 280'),(1111,67,'french','S 300'),(1112,67,'french','S 320'),(1113,67,'french','S 350'),(1114,67,'french','S 400'),(1115,67,'french','S 420'),(1116,67,'french','S 430'),(1117,67,'french','S 450'),(1118,67,'french','S 500'),(1119,67,'french','S 55'),(1120,67,'french','S 550'),(1121,67,'french','S 600'),(1122,67,'french','S 63 AMG'),(1123,67,'french','S 65 AMG'),(1124,67,'french','SL-Klasse (All)'),(1125,67,'french','SL 280'),(1126,67,'french','SL 300'),(1127,67,'french','SL 320'),(1128,67,'french','SL 350'),(1129,67,'french','SL 380'),(1130,67,'french','SL 420'),(1131,67,'french','SL 450'),(1132,67,'french','SL 500'),(1133,67,'french','SL 55 AMG'),(1134,67,'french','SL 560'),(1135,67,'french','SL 60 AMG'),(1136,67,'french','SL 600'),(1137,67,'french','SL 63 AMG'),(1138,67,'french','SL 65 AMG'),(1139,67,'french','SL 70 AMG'),(1140,67,'french','SL 73 AMG'),(1141,67,'french','SLK-Klasse (All)'),(1142,67,'french','SLK 200'),(1143,67,'french','SLK 230'),(1144,67,'french','SLK 250'),(1145,67,'french','SLK 280'),(1146,67,'french','SLK 300'),(1147,67,'french','SLK 32 AMG'),(1148,67,'french','SLK 320'),(1149,67,'french','SLK 350'),(1150,67,'french','SLK 55 AMG'),(1151,67,'french','SLR'),(1152,67,'french','SLS AMG'),(1153,67,'french','Sprinter'),(1154,67,'french','V-Klasse (All)'),(1155,67,'french','V 200'),(1156,67,'french','V 220'),(1157,67,'french','V 230'),(1158,67,'french','V 280'),(1159,67,'french','Vaneo'),(1160,67,'french','Vario'),(1161,67,'french','Viano'),(1162,67,'french','Vito'),(1163,68,'french','DUÈ'),(1164,68,'french','M.Go'),(1165,68,'french','M-8'),(1166,68,'french','MC1'),(1167,68,'french','MC2'),(1168,69,'french','3000 GT'),(1169,69,'french','ASX'),(1170,69,'french','Canter'),(1171,69,'french','Carisma'),(1172,69,'french','Colt'),(1173,69,'french','Cordia'),(1174,69,'french','Cosmos'),(1175,69,'french','Diamante'),(1176,69,'french','Eclipse'),(1177,69,'french','Galant'),(1178,69,'french','Galloper'),(1179,69,'french','Grandis'),(1180,69,'french','i-MiEV'),(1181,69,'french','L200'),(1182,69,'french','L300'),(1183,69,'french','L400'),(1184,69,'french','Lancer'),(1185,69,'french','Mirage'),(1186,69,'french','Montero'),(1187,69,'french','Outlander'),(1188,69,'french','Pajero'),(1189,69,'french','Pajero Pinin'),(1190,69,'french','Pick-up'),(1191,69,'french','Santamo'),(1192,69,'french','Sapporo'),(1193,69,'french','Sigma'),(1194,69,'french','Space Gear'),(1195,69,'french','Space Runner'),(1196,69,'french','Space Star'),(1197,69,'french','Space Wagon'),(1198,69,'french','Starion'),(1199,69,'french','Tredia'),(1200,70,'french','4/4'),(1201,70,'french','Aero 8'),(1202,70,'french','Plus 4'),(1203,70,'french','Plus 8'),(1204,70,'french','Roadster'),(1205,72,'french','100 NX'),(1206,72,'french','200 SX'),(1207,72,'french','240 SX'),(1208,72,'french','280 ZX'),(1209,72,'french','300 ZX'),(1210,72,'french','350Z'),(1211,72,'french','370Z'),(1212,72,'french','Almera'),(1213,72,'french','Almera Tino'),(1214,72,'french','Altima'),(1215,72,'french','Armada'),(1216,72,'french','Bluebird'),(1217,72,'french','Cabstar'),(1218,72,'french','Cargo'),(1219,72,'french','Cherry'),(1220,72,'french','Cube'),(1221,72,'french','Evalia'),(1222,72,'french','Frontier'),(1223,72,'french','GT-R'),(1224,72,'french','Interstar'),(1225,72,'french','Juke'),(1226,72,'french','King Cab'),(1227,72,'french','Kubistar'),(1228,72,'french','Laurel'),(1229,72,'french','Leaf'),(1230,72,'french','Maxima'),(1231,72,'french','Micra'),(1232,72,'french','Murano'),(1233,72,'french','Navara'),(1234,72,'french','Note'),(1235,72,'french','NP 300'),(1236,72,'french','NV200'),(1237,72,'french','NV400'),(1238,72,'french','Pathfinder'),(1239,72,'french','Patrol'),(1240,72,'french','PickUp'),(1241,72,'french','Pixo'),(1242,72,'french','Prairie'),(1243,72,'french','Primastar'),(1244,72,'french','Primera'),(1245,72,'french','Qashqai'),(1246,72,'french','Qashqai+2'),(1247,72,'french','Quest'),(1248,72,'french','Sentra'),(1249,72,'french','Serena'),(1250,72,'french','Silvia'),(1251,72,'french','Skyline'),(1252,72,'french','Sunny'),(1253,72,'french','Terrano'),(1254,72,'french','Tiida'),(1255,72,'french','Titan'),(1256,72,'french','Trade'),(1257,72,'french','Urvan'),(1258,72,'french','Vanette'),(1259,72,'french','X-Trail'),(1260,73,'french','Bravada'),(1261,73,'french','Custom Cruiser'),(1262,73,'french','Cutlass'),(1263,73,'french','Delta 88'),(1264,73,'french','Silhouette'),(1265,73,'french','Supreme'),(1266,73,'french','Toronado'),(1267,74,'french','Adam'),(1268,74,'french','Agila'),(1269,74,'french','Ampera'),(1270,74,'french','Antara'),(1271,74,'french','Arena'),(1272,74,'french','Ascona'),(1273,74,'french','Astra'),(1274,74,'french','Calibra'),(1275,74,'french','Campo'),(1276,74,'french','Cascada'),(1277,74,'french','Cavalier'),(1278,74,'french','Combo'),(1279,74,'french','Commodore'),(1280,74,'french','Corsa'),(1281,74,'french','Diplomat'),(1282,74,'french','Frontera'),(1283,74,'french','GT'),(1284,74,'french','Insignia'),(1285,74,'french','Kadett'),(1286,74,'french','Manta'),(1287,74,'french','Meriva'),(1288,74,'french','Mokka'),(1289,74,'french','Monterey'),(1290,74,'french','Monza'),(1291,74,'french','Movano'),(1292,74,'french','Nova'),(1293,74,'french','Omega'),(1294,74,'french','Pick Up Sportscap'),(1295,74,'french','Rekord'),(1296,74,'french','Senator'),(1297,74,'french','Signum'),(1298,74,'french','Sintra'),(1299,74,'french','Speedster'),(1300,74,'french','Tigra'),(1301,74,'french','Vectra'),(1302,74,'french','Vivaro'),(1303,74,'french','Zafira'),(1304,74,'french','Zafira Tourer'),(1305,76,'french','1007'),(1306,76,'french','104'),(1307,76,'french','106'),(1308,76,'french','107'),(1309,76,'french','2008'),(1310,76,'french','204'),(1311,76,'french','205'),(1312,76,'french','206'),(1313,76,'french','207'),(1314,76,'french','208'),(1315,76,'french','3008'),(1316,76,'french','301'),(1317,76,'french','304'),(1318,76,'french','305'),(1319,76,'french','306'),(1320,76,'french','307'),(1321,76,'french','308'),(1322,76,'french','309'),(1323,76,'french','4007'),(1324,76,'french','4008'),(1325,76,'french','404'),(1326,76,'french','405'),(1327,76,'french','406'),(1328,76,'french','407'),(1329,76,'french','5008'),(1330,76,'french','504'),(1331,76,'french','505'),(1332,76,'french','508'),(1333,76,'french','604'),(1334,76,'french','605'),(1335,76,'french','607'),(1336,76,'french','806'),(1337,76,'french','807'),(1338,76,'french','Bipper'),(1339,76,'french','Bipper Tepee'),(1340,76,'french','Boxer'),(1341,76,'french','Expert'),(1342,76,'french','Expert Tepee'),(1343,76,'french','iOn'),(1344,76,'french','J5'),(1345,76,'french','Partner'),(1346,76,'french','Partner Tepee'),(1347,76,'french','RCZ'),(1348,76,'french','TePee'),(1349,77,'french','APE'),(1350,77,'french','APE TM'),(1351,77,'french','Porter'),(1352,78,'french','Prowler'),(1353,79,'french','6000'),(1354,79,'french','Bonneville'),(1355,79,'french','Fiero'),(1356,79,'french','Firebird'),(1357,79,'french','G6'),(1358,79,'french','Grand-Am'),(1359,79,'french','Grand-Prix'),(1360,79,'french','GTO'),(1361,79,'french','Montana'),(1362,79,'french','Solstice'),(1363,79,'french','Sunbird'),(1364,79,'french','Sunfire'),(1365,79,'french','Targa'),(1366,79,'french','Trans Am'),(1367,79,'french','Trans Sport'),(1368,79,'french','Vibe'),(1369,80,'french','356'),(1370,80,'french','911 (All)'),(1371,80,'french','911'),(1372,80,'french','964'),(1373,80,'french','991'),(1374,80,'french','993'),(1375,80,'french','996'),(1376,80,'french','997'),(1377,80,'french','912'),(1378,80,'french','914'),(1379,80,'french','924'),(1380,80,'french','928'),(1381,80,'french','944'),(1382,80,'french','959'),(1383,80,'french','962'),(1384,80,'french','968'),(1385,80,'french','Boxster'),(1386,80,'french','Carrera GT'),(1387,80,'french','Cayenne'),(1388,80,'french','Cayman'),(1389,80,'french','Panamera'),(1390,81,'french','300 Serie'),(1391,81,'french','400 Serie'),(1392,82,'french','Alpine A110'),(1393,82,'french','Alpine A310'),(1394,82,'french','Alpine V6'),(1395,82,'french','Avantime'),(1396,82,'french','Captur'),(1397,82,'french','Clio'),(1398,82,'french','Coupe'),(1399,82,'french','Espace'),(1400,82,'french','Express'),(1401,82,'french','Fluence'),(1402,82,'french','Fuego'),(1403,82,'french','Grand Espace'),(1404,82,'french','Grand Modus'),(1405,82,'french','Grand Scenic'),(1406,82,'french','Kangoo'),(1407,82,'french','Koleos'),(1408,82,'french','Laguna'),(1409,82,'french','Latitude'),(1410,82,'french','Mascott'),(1411,82,'french','Master'),(1412,82,'french','Megane'),(1413,82,'french','Modus'),(1414,82,'french','P 1400'),(1415,82,'french','R 11'),(1416,82,'french','R 14'),(1417,82,'french','R 18'),(1418,82,'french','R 19'),(1419,82,'french','R 20'),(1420,82,'french','R 21'),(1421,82,'french','R 25'),(1422,82,'french','R 30'),(1423,82,'french','R 4'),(1424,82,'french','R 5'),(1425,82,'french','R 6'),(1426,82,'french','R 9'),(1427,82,'french','Rapid'),(1428,82,'french','Safrane'),(1429,82,'french','Scenic'),(1430,82,'french','Spider'),(1431,82,'french','Trafic'),(1432,82,'french','Twingo'),(1433,82,'french','Twizy'),(1434,82,'french','Vel Satis'),(1435,82,'french','Wind'),(1436,82,'french','ZOE'),(1437,83,'french','Corniche'),(1438,83,'french','Flying Spur'),(1439,83,'french','Ghost'),(1440,83,'french','Park Ward'),(1441,83,'french','Phantom'),(1442,83,'french','Silver Cloud'),(1443,83,'french','Silver Dawn'),(1444,83,'french','Silver Seraph'),(1445,83,'french','Silver Shadow'),(1446,83,'french','Silver Spirit'),(1447,83,'french','Silver Spur'),(1448,84,'french','100'),(1449,84,'french','111'),(1450,84,'french','114'),(1451,84,'french','115'),(1452,84,'french','200'),(1453,84,'french','213'),(1454,84,'french','214'),(1455,84,'french','216'),(1456,84,'french','218'),(1457,84,'french','220'),(1458,84,'french','25'),(1459,84,'french','400'),(1460,84,'french','414'),(1461,84,'french','416'),(1462,84,'french','418'),(1463,84,'french','420'),(1464,84,'french','45'),(1465,84,'french','600'),(1466,84,'french','618'),(1467,84,'french','620'),(1468,84,'french','623'),(1469,84,'french','75'),(1470,84,'french','800'),(1471,84,'french','820'),(1472,84,'french','825'),(1473,84,'french','827'),(1474,84,'french','City Rover'),(1475,84,'french','Metro'),(1476,84,'french','Montego'),(1477,84,'french','SD'),(1478,84,'french','Streetwise'),(1479,86,'french','9-3'),(1480,86,'french','9-4X'),(1481,86,'french','9-5'),(1482,86,'french','9-7X'),(1483,86,'french','90'),(1484,86,'french','900'),(1485,86,'french','9000'),(1486,86,'french','96'),(1487,86,'french','99'),(1488,88,'french','Alhambra'),(1489,88,'french','Altea'),(1490,88,'french','Arosa'),(1491,88,'french','Cordoba'),(1492,88,'french','Exeo'),(1493,88,'french','Ibiza'),(1494,88,'french','Inca'),(1495,88,'french','Leon'),(1496,88,'french','Malaga'),(1497,88,'french','Marbella'),(1498,88,'french','Mii'),(1499,88,'french','Terra'),(1500,88,'french','Toledo'),(1501,89,'french','105'),(1502,89,'french','120'),(1503,89,'french','130'),(1504,89,'french','135'),(1505,89,'french','Citigo'),(1506,89,'french','Fabia'),(1507,89,'french','Favorit'),(1508,89,'french','Felicia'),(1509,89,'french','Forman'),(1510,89,'french','Octavia'),(1511,89,'french','Pick-up'),(1512,89,'french','Praktik'),(1513,89,'french','Rapid'),(1514,89,'french','Roomster'),(1515,89,'french','Superb'),(1516,89,'french','Yeti'),(1517,90,'french','Crossblade'),(1518,90,'french','ForFour'),(1519,90,'french','ForTwo'),(1520,90,'french','Roadster'),(1521,92,'french','C8'),(1522,92,'french','C8 AILERON'),(1523,92,'french','C8 DOUBLE 12 S'),(1524,92,'french','C8 LAVIOLETTE SWB'),(1525,92,'french','C8 SPYDER SWB'),(1526,93,'french','Actyon'),(1527,93,'french','Family'),(1528,93,'french','Korando'),(1529,93,'french','Kyron'),(1530,93,'french','MUSSO'),(1531,93,'french','REXTON'),(1532,93,'french','Rodius'),(1533,94,'french','B9 Tribeca'),(1534,94,'french','Baja'),(1535,94,'french','BRZ'),(1536,94,'french','Forester'),(1537,94,'french','Impreza'),(1538,94,'french','Justy'),(1539,94,'french','Legacy'),(1540,94,'french','Libero'),(1541,94,'french','OUTBACK'),(1542,94,'french','SVX'),(1543,94,'french','Trezia'),(1544,94,'french','Tribeca'),(1545,94,'french','Vivio'),(1546,94,'french','XT'),(1547,94,'french','XV'),(1548,95,'french','Alto'),(1549,95,'french','Baleno'),(1550,95,'french','Cappuccino'),(1551,95,'french','Carry'),(1552,95,'french','Grand Vitara'),(1553,95,'french','Ignis'),(1554,95,'french','Jimny'),(1555,95,'french','Kizashi'),(1556,95,'french','Liana'),(1557,95,'french','LJ'),(1558,95,'french','SJ Samurai'),(1559,95,'french','Splash'),(1560,95,'french','Super-Carry'),(1561,95,'french','Swift'),(1562,95,'french','SX4'),(1563,95,'french','SX4 S-Cross'),(1564,95,'french','Vitara'),(1565,95,'french','Wagon R+'),(1566,95,'french','X-90'),(1567,97,'french','Chimaera'),(1568,97,'french','Griffith'),(1569,97,'french','Tuscan'),(1570,98,'french','Horizon'),(1571,98,'french','Samba'),(1572,99,'french','Indica'),(1573,99,'french','Indigo'),(1574,99,'french','Nano'),(1575,99,'french','Safari'),(1576,99,'french','Sumo'),(1577,99,'french','Telcoline'),(1578,99,'french','Telcosport'),(1579,99,'french','Xenon'),(1580,101,'french','4-Runner'),(1581,101,'french','Auris'),(1582,101,'french','Auris Touring Sports'),(1583,101,'french','Avalon'),(1584,101,'french','Avensis'),(1585,101,'french','Avensis Verso'),(1586,101,'french','Aygo'),(1587,101,'french','Camry'),(1588,101,'french','Carina'),(1589,101,'french','Celica'),(1590,101,'french','Corolla'),(1591,101,'french','Corolla Verso'),(1592,101,'french','Cressida'),(1593,101,'french','Crown'),(1594,101,'french','Dyna'),(1595,101,'french','FJ'),(1596,101,'french','GT86'),(1597,101,'french','Hiace'),(1598,101,'french','Highlander'),(1599,101,'french','Hilux'),(1600,101,'french','IQ'),(1601,101,'french','Land Cruiser'),(1602,101,'french','Lite-Ace'),(1603,101,'french','MR 2'),(1604,101,'french','Paseo'),(1605,101,'french','Picnic'),(1606,101,'french','Previa'),(1607,101,'french','Prius'),(1608,101,'french','Prius+'),(1609,101,'french','RAV 4'),(1610,101,'french','Sequoia'),(1611,101,'french','Sienna'),(1612,101,'french','Starlet'),(1613,101,'french','Supra'),(1614,101,'french','Tacoma'),(1615,101,'french','Tercel'),(1616,101,'french','Tundra'),(1617,101,'french','Urban Cruiser'),(1618,101,'french','Verso'),(1619,101,'french','Verso-S'),(1620,101,'french','Yaris'),(1621,102,'french','601'),(1622,103,'french','Dolomite'),(1623,103,'french','Moss'),(1624,103,'french','Spitfire'),(1625,103,'french','TR3'),(1626,103,'french','TR4'),(1627,103,'french','TR5'),(1628,103,'french','TR6'),(1629,103,'french','TR7'),(1630,103,'french','TR8'),(1631,104,'french','181'),(1632,104,'french','Amarok'),(1633,104,'french','Beetle'),(1634,104,'french','Bora'),(1635,104,'french','Buggy'),(1636,104,'french','Caddy'),(1637,104,'french','CC'),(1638,104,'french','Corrado'),(1639,104,'french','Crafter'),(1640,104,'french','Eos'),(1641,104,'french','Fox'),(1642,104,'french','Golf (All)'),(1643,104,'french','Golf'),(1644,104,'french','Golf Plus'),(1645,104,'french','Iltis'),(1646,104,'french','Jetta'),(1647,104,'french','Karmann Ghia'),(1648,104,'french','Käfer'),(1649,104,'french','LT'),(1650,104,'french','Lupo'),(1651,104,'french','New Beetle'),(1652,104,'french','Passat (All)'),(1653,104,'french','Passat'),(1654,104,'french','Passat CC'),(1655,104,'french','Phaeton'),(1656,104,'french','Polo'),(1657,104,'french','Routan'),(1658,104,'french','Santana'),(1659,104,'french','Scirocco'),(1660,104,'french','Sharan'),(1661,104,'french','T1'),(1662,104,'french','T2'),(1663,104,'french','T3 (All)'),(1664,104,'french','T3 Caravelle'),(1665,104,'french','T3 Multivan'),(1666,104,'french','T3 other'),(1667,104,'french','T3 Kombi'),(1668,104,'french','T4 (All)'),(1669,104,'french','T4 California'),(1670,104,'french','T4 Caravelle'),(1671,104,'french','T4 Multivan'),(1672,104,'french','T4 other'),(1673,104,'french','T4 Kombi'),(1674,104,'french','T5 (All)'),(1675,104,'french','T5 California'),(1676,104,'french','T5 Caravelle'),(1677,104,'french','T5 Multivan'),(1678,104,'french','T5 Shuttle'),(1679,104,'french','T5 other'),(1680,104,'french','T5 Kombi'),(1681,104,'french','Taro'),(1682,104,'french','Tiguan'),(1683,104,'french','Touareg'),(1684,104,'french','Touran'),(1685,104,'french','up!'),(1686,104,'french','Vento'),(1687,105,'french','240'),(1688,105,'french','244'),(1689,105,'french','245'),(1690,105,'french','262'),(1691,105,'french','264'),(1692,105,'french','340'),(1693,105,'french','360'),(1694,105,'french','440'),(1695,105,'french','460'),(1696,105,'french','480'),(1697,105,'french','740'),(1698,105,'french','744'),(1699,105,'french','745'),(1700,105,'french','760'),(1701,105,'french','780'),(1702,105,'french','850'),(1703,105,'french','855'),(1704,105,'french','940'),(1705,105,'french','944'),(1706,105,'french','945'),(1707,105,'french','960'),(1708,105,'french','965'),(1709,105,'french','Amazon'),(1710,105,'french','C30'),(1711,105,'french','C70'),(1712,105,'french','Polar'),(1713,105,'french','S40'),(1714,105,'french','S60'),(1715,105,'french','S70'),(1716,105,'french','S80'),(1717,105,'french','S90'),(1718,105,'french','V40'),(1719,105,'french','V50'),(1720,105,'french','V60'),(1721,105,'french','V70'),(1722,105,'french','V90'),(1723,105,'french','XC 60'),(1724,105,'french','XC 70'),(1725,105,'french','XC 90'),(1726,106,'french','311'),(1727,106,'french','353'),(1728,108,'french','MF 25'),(1729,108,'french','MF 28'),(1730,108,'french','MF 3'),(1731,108,'french','MF 30'),(1732,108,'french','MF 35'),(1733,108,'french','MF 4'),(1734,108,'french','MF 5'),(1,1,'italian','500'),(2,1,'italian','500C'),(3,1,'italian','Grande Punto'),(4,1,'italian','Punto Evo'),(5,2,'italian','MDX'),(6,2,'italian','NSX'),(7,2,'italian','RL'),(8,2,'italian','RSX'),(9,2,'italian','TL'),(10,2,'italian','TSX'),(11,3,'italian','City'),(12,3,'italian','Crossline'),(13,3,'italian','Roadline'),(14,3,'italian','Scouty R'),(15,4,'italian','8C'),(16,4,'italian','Alfa 145'),(17,4,'italian','Alfa 146'),(18,4,'italian','Alfa 147'),(19,4,'italian','Alfa 155'),(20,4,'italian','Alfa 156'),(21,4,'italian','Alfa 159'),(22,4,'italian','Alfa 164'),(23,4,'italian','Alfa 166'),(24,4,'italian','Alfa 33'),(25,4,'italian','Alfa 75'),(26,4,'italian','Alfa 90'),(27,4,'italian','Alfasud'),(28,4,'italian','Alfetta'),(29,4,'italian','Brera'),(30,4,'italian','Crosswagon'),(31,4,'italian','Giulia'),(32,4,'italian','Giulietta'),(33,4,'italian','GT'),(34,4,'italian','GTV'),(35,4,'italian','Junior'),(36,4,'italian','MiTo'),(37,4,'italian','Spider'),(38,4,'italian','Sprint'),(39,5,'italian','B10'),(40,5,'italian','B12'),(41,5,'italian','B3'),(42,5,'italian','B5'),(43,5,'italian','B6'),(44,5,'italian','B7'),(45,5,'italian','B8'),(46,5,'italian','D 10'),(47,5,'italian','D3'),(48,5,'italian','D5'),(49,5,'italian','Roadster S'),(50,5,'italian','XD3'),(51,7,'italian','GT'),(52,8,'italian','Rocsta'),(53,9,'italian','AR1'),(54,9,'italian','Cygnet'),(55,9,'italian','DB'),(56,9,'italian','DB7'),(57,9,'italian','DB9'),(58,9,'italian','DBS'),(59,9,'italian','Lagonda'),(60,9,'italian','Rapide'),(61,9,'italian','V12 Vantage'),(62,9,'italian','V8 Vantage'),(63,9,'italian','Vanquish'),(64,9,'italian','Virage'),(65,10,'italian','100'),(66,10,'italian','200'),(67,10,'italian','80'),(68,10,'italian','90'),(69,10,'italian','A1'),(70,10,'italian','A2'),(71,10,'italian','A3'),(72,10,'italian','A4'),(73,10,'italian','A4 Allroad'),(74,10,'italian','A5'),(75,10,'italian','A6'),(76,10,'italian','A6 Allroad'),(77,10,'italian','A7'),(78,10,'italian','A8'),(79,10,'italian','Cabriolet'),(80,10,'italian','Coupé'),(81,10,'italian','Q3'),(82,10,'italian','Q5'),(83,10,'italian','Q7'),(84,10,'italian','QUATTRO'),(85,10,'italian','R8'),(86,10,'italian','RS2'),(87,10,'italian','RS3'),(88,10,'italian','RS4'),(89,10,'italian','RS5'),(90,10,'italian','RS6'),(91,10,'italian','RS7'),(92,10,'italian','S2'),(93,10,'italian','S3'),(94,10,'italian','S4'),(95,10,'italian','S5'),(96,10,'italian','S6'),(97,10,'italian','S7'),(98,10,'italian','S8'),(99,10,'italian','SQ5'),(100,10,'italian','TT (All)'),(101,10,'italian','TT'),(102,10,'italian','TT RS'),(103,10,'italian','TTS'),(104,10,'italian','V8'),(105,13,'italian','Series 1 (All)'),(106,13,'italian','114'),(107,13,'italian','116'),(108,13,'italian','118'),(109,13,'italian','120'),(110,13,'italian','123'),(111,13,'italian','125'),(112,13,'italian','130'),(113,13,'italian','135'),(114,13,'italian','2002'),(115,13,'italian','Series 3 (All)'),(116,13,'italian','315'),(117,13,'italian','316'),(118,13,'italian','318'),(119,13,'italian','318 Gran Turismo'),(120,13,'italian','320'),(121,13,'italian','320 Gran Turismo'),(122,13,'italian','323'),(123,13,'italian','324'),(124,13,'italian','325'),(125,13,'italian','328'),(126,13,'italian','328 Gran Turismo'),(127,13,'italian','330'),(128,13,'italian','335'),(129,13,'italian','335 Gran Turismo'),(130,13,'italian','ActiveHybrid 3'),(131,13,'italian','Series 4 (All)'),(132,13,'italian','420'),(133,13,'italian','428'),(134,13,'italian','430'),(135,13,'italian','435'),(136,13,'italian','Series 5 (All)'),(137,13,'italian','518'),(138,13,'italian','520'),(139,13,'italian','520 Gran Turismo'),(140,13,'italian','523'),(141,13,'italian','524'),(142,13,'italian','525'),(143,13,'italian','528'),(144,13,'italian','530'),(145,13,'italian','530 Gran Turismo'),(146,13,'italian','535'),(147,13,'italian','535 Gran Turismo'),(148,13,'italian','540'),(149,13,'italian','545'),(150,13,'italian','550'),(151,13,'italian','550 Gran Turismo'),(152,13,'italian','ActiveHybrid 5'),(153,13,'italian','Series 6 (All)'),(154,13,'italian','628'),(155,13,'italian','630'),(156,13,'italian','633'),(157,13,'italian','635'),(158,13,'italian','640'),(159,13,'italian','645'),(160,13,'italian','650'),(161,13,'italian','Series 7 (All)'),(162,13,'italian','725'),(163,13,'italian','728'),(164,13,'italian','730'),(165,13,'italian','732'),(166,13,'italian','735'),(167,13,'italian','740'),(168,13,'italian','745'),(169,13,'italian','750'),(170,13,'italian','760'),(171,13,'italian','ActiveHybrid 7'),(172,13,'italian','840'),(173,13,'italian','850'),(174,13,'italian','i3'),(175,13,'italian','M Models (All)'),(176,13,'italian','M135'),(177,13,'italian','M3'),(178,13,'italian','M5'),(179,13,'italian','M6'),(180,13,'italian','X5 M'),(181,13,'italian','X6 M'),(182,13,'italian','Z3 M'),(183,13,'italian','Z4 M'),(184,13,'italian','Series X (All)'),(185,13,'italian','ActiveHybrid X6'),(186,13,'italian','X1'),(187,13,'italian','X3'),(188,13,'italian','X5'),(189,13,'italian','X5 M'),(190,13,'italian','X6'),(191,13,'italian','X6 M'),(192,13,'italian','Series Z (All)'),(193,13,'italian','Z1'),(194,13,'italian','Z3'),(195,13,'italian','Z3 M'),(196,13,'italian','Z4'),(197,13,'italian','Z4 M'),(198,13,'italian','Z8'),(199,14,'italian','Arnage'),(200,14,'italian','Azure'),(201,14,'italian','Brooklands'),(202,14,'italian','Continental (All)'),(203,14,'italian','Continental'),(204,14,'italian','Continental Flying Spur'),(205,14,'italian','Continental GT'),(206,14,'italian','Continental GTC'),(207,14,'italian','Continental Supersports'),(208,14,'italian','Eight'),(209,14,'italian','Mulsanne'),(210,14,'italian','Turbo R'),(211,14,'italian','Turbo RT'),(212,14,'italian','Turbo S'),(213,16,'italian','BC3'),(214,16,'italian','BS2'),(215,16,'italian','BS4'),(216,16,'italian','BS6'),(217,17,'italian','EB 110'),(218,17,'italian','Veyron'),(219,18,'italian','Century'),(220,18,'italian','Electra'),(221,18,'italian','Enclave'),(222,18,'italian','La Crosse'),(223,18,'italian','Le Sabre'),(224,18,'italian','Park Avenue'),(225,18,'italian','Regal'),(226,18,'italian','Riviera'),(227,18,'italian','Roadmaster'),(228,18,'italian','Skylark'),(229,19,'italian','Allante'),(230,19,'italian','ATS'),(231,19,'italian','BLS'),(232,19,'italian','CTS'),(233,19,'italian','Deville'),(234,19,'italian','Eldorado'),(235,19,'italian','Escalade'),(236,19,'italian','Fleetwood'),(237,19,'italian','Seville'),(238,19,'italian','SRX'),(239,19,'italian','STS'),(240,19,'italian','XLR'),(241,22,'italian','2500'),(242,22,'italian','Alero'),(243,22,'italian','Astro'),(244,22,'italian','Avalanche'),(245,22,'italian','Aveo'),(246,22,'italian','Beretta'),(247,22,'italian','Blazer'),(248,22,'italian','C1500'),(249,22,'italian','Camaro'),(250,22,'italian','Caprice'),(251,22,'italian','Captiva'),(252,22,'italian','Cavalier'),(253,22,'italian','Chevelle'),(254,22,'italian','Chevy Van'),(255,22,'italian','Citation'),(256,22,'italian','Colorado'),(257,22,'italian','Corsica'),(258,22,'italian','Cruze'),(259,22,'italian','El Camino'),(260,22,'italian','Epica'),(261,22,'italian','Evanda'),(262,22,'italian','Express'),(263,22,'italian','G'),(264,22,'italian','HHR'),(265,22,'italian','Impala'),(266,22,'italian','K1500'),(267,22,'italian','K30'),(268,22,'italian','Kalos'),(269,22,'italian','Lacetti'),(270,22,'italian','Lumina'),(271,22,'italian','Malibu'),(272,22,'italian','Matiz'),(273,22,'italian','Nubira'),(274,22,'italian','Orlando'),(275,22,'italian','Rezzo'),(276,22,'italian','S-10'),(277,22,'italian','Silverado'),(278,22,'italian','Spark'),(279,22,'italian','SSR'),(280,22,'italian','Suburban'),(281,22,'italian','Tahoe'),(282,22,'italian','Trailblazer'),(283,22,'italian','Trans Sport'),(284,22,'italian','Trax'),(285,22,'italian','Venture'),(286,22,'italian','Volt'),(287,23,'italian','300 M'),(288,23,'italian','300C'),(289,23,'italian','Aspen'),(290,23,'italian','Crossfire'),(291,23,'italian','Daytona'),(292,23,'italian','ES'),(293,23,'italian','Grand Voyager'),(294,23,'italian','GS'),(295,23,'italian','GTS'),(296,23,'italian','Imperial'),(297,23,'italian','Le Baron'),(298,23,'italian','Neon'),(299,23,'italian','New Yorker'),(300,23,'italian','Pacifica'),(301,23,'italian','PT Cruiser'),(302,23,'italian','Saratoga'),(303,23,'italian','Sebring'),(304,23,'italian','Stratus'),(305,23,'italian','Valiant'),(306,23,'italian','Viper'),(307,23,'italian','Vision'),(308,23,'italian','Voyager'),(309,24,'italian','2 CV'),(310,24,'italian','AX'),(311,24,'italian','Berlingo'),(312,24,'italian','BX'),(313,24,'italian','C-Crosser'),(314,24,'italian','C-Zero'),(315,24,'italian','C1'),(316,24,'italian','C2'),(317,24,'italian','C3'),(318,24,'italian','C3 Picasso'),(319,24,'italian','C4'),(320,24,'italian','C4 Aircross'),(321,24,'italian','C4 Picasso'),(322,24,'italian','C5'),(323,24,'italian','C6'),(324,24,'italian','C8'),(325,24,'italian','CX'),(326,24,'italian','DS'),(327,24,'italian','DS3'),(328,24,'italian','DS4'),(329,24,'italian','DS5'),(330,24,'italian','Evasion'),(331,24,'italian','Grand C4 Picasso'),(332,24,'italian','GSA'),(333,24,'italian','Jumper'),(334,24,'italian','Jumpy'),(335,24,'italian','Nemo'),(336,24,'italian','SAXO'),(337,24,'italian','SM'),(338,24,'italian','Visa'),(339,24,'italian','Xantia'),(340,24,'italian','XM'),(341,24,'italian','Xsara'),(342,24,'italian','Xsara Picasso'),(343,24,'italian','ZX'),(344,26,'italian','C1'),(345,26,'italian','C2'),(346,26,'italian','C3'),(347,26,'italian','C4'),(348,26,'italian','C5'),(349,26,'italian','C6'),(350,26,'italian','C7'),(351,26,'italian','Z06'),(352,26,'italian','ZR 1'),(353,27,'italian','Dokker'),(354,27,'italian','Duster'),(355,27,'italian','Lodgy'),(356,27,'italian','Logan'),(357,27,'italian','Logan Pick-Up'),(358,27,'italian','Pick Up'),(359,27,'italian','Sandero'),(360,28,'italian','Espero'),(361,28,'italian','Evanda'),(362,28,'italian','Kalos'),(363,28,'italian','Korando'),(364,28,'italian','Lacetti'),(365,28,'italian','Lanos'),(366,28,'italian','Leganza'),(367,28,'italian','Matiz'),(368,28,'italian','Musso'),(369,28,'italian','Nexia'),(370,28,'italian','Nubira'),(371,28,'italian','Rezzo'),(372,28,'italian','Tacuma'),(373,29,'italian','Applause'),(374,29,'italian','Charade'),(375,29,'italian','Charmant'),(376,29,'italian','Copen'),(377,29,'italian','Cuore'),(378,29,'italian','Feroza/Sportrak'),(379,29,'italian','Freeclimber'),(380,29,'italian','Gran Move'),(381,29,'italian','Hijet'),(382,29,'italian','MATERIA'),(383,29,'italian','Move'),(384,29,'italian','Rocky/Fourtrak'),(385,29,'italian','Sirion'),(386,29,'italian','Terios'),(387,29,'italian','TREVIS'),(388,29,'italian','YRV'),(389,30,'italian','Guarà'),(390,30,'italian','Pantera'),(391,31,'italian','Avenger'),(392,31,'italian','Caliber'),(393,31,'italian','Challenger'),(394,31,'italian','Charger'),(395,31,'italian','Dakota'),(396,31,'italian','Demon'),(397,31,'italian','Durango'),(398,31,'italian','Grand Caravan'),(399,31,'italian','Hornet'),(400,31,'italian','Journey'),(401,31,'italian','Magnum'),(402,31,'italian','Neon'),(403,31,'italian','Nitro'),(404,31,'italian','RAM'),(405,31,'italian','Stealth'),(406,31,'italian','Viper'),(407,32,'italian','208'),(408,32,'italian','246'),(409,32,'italian','250'),(410,32,'italian','275'),(411,32,'italian','288'),(412,32,'italian','308'),(413,32,'italian','328'),(414,32,'italian','330'),(415,32,'italian','348'),(416,32,'italian','360'),(417,32,'italian','365'),(418,32,'italian','400'),(419,32,'italian','412'),(420,32,'italian','456'),(421,32,'italian','458'),(422,32,'italian','512'),(423,32,'italian','550'),(424,32,'italian','575'),(425,32,'italian','599 GTB'),(426,32,'italian','612'),(427,32,'italian','750'),(428,32,'italian','California'),(429,32,'italian','Daytona'),(430,32,'italian','Dino GT4'),(431,32,'italian','Enzo Ferrari'),(432,32,'italian','F12'),(433,32,'italian','F355'),(434,32,'italian','F40'),(435,32,'italian','F430'),(436,32,'italian','F50'),(437,32,'italian','FF'),(438,32,'italian','LaFerrari'),(439,32,'italian','Mondial'),(440,32,'italian','Superamerica'),(441,32,'italian','Testarossa'),(442,33,'italian','124'),(443,33,'italian','126'),(444,33,'italian','127'),(445,33,'italian','130'),(446,33,'italian','131'),(447,33,'italian','500'),(448,33,'italian','500C'),(449,33,'italian','500L'),(450,33,'italian','Barchetta'),(451,33,'italian','Brava'),(452,33,'italian','Bravo'),(453,33,'italian','Cinquecento'),(454,33,'italian','Coupe'),(455,33,'italian','Croma'),(456,33,'italian','Dino'),(457,33,'italian','Doblo'),(458,33,'italian','Ducato'),(459,33,'italian','Fiorino'),(460,33,'italian','Freemont'),(461,33,'italian','Grande Punto'),(462,33,'italian','Idea'),(463,33,'italian','Linea'),(464,33,'italian','Marea'),(465,33,'italian','Marengo'),(466,33,'italian','Multipla'),(467,33,'italian','New Panda'),(468,33,'italian','Palio'),(469,33,'italian','Panda'),(470,33,'italian','Punto'),(471,33,'italian','Punto Evo'),(472,33,'italian','Qubo'),(473,33,'italian','Regata'),(474,33,'italian','Ritmo'),(475,33,'italian','Scudo'),(476,33,'italian','Sedici'),(477,33,'italian','Seicento'),(478,33,'italian','Spider Europa'),(479,33,'italian','Stilo'),(480,33,'italian','Strada'),(481,33,'italian','Tempra'),(482,33,'italian','Tipo'),(483,33,'italian','Ulysse'),(484,33,'italian','Uno'),(485,33,'italian','X 1/9'),(486,34,'italian','Karma'),(487,35,'italian','Aerostar'),(488,35,'italian','B-Max'),(489,35,'italian','Bronco'),(490,35,'italian','C-Max'),(491,35,'italian','Capri'),(492,35,'italian','Cougar'),(493,35,'italian','Courier'),(494,35,'italian','Crown'),(495,35,'italian','Econoline'),(496,35,'italian','Econovan'),(497,35,'italian','Edge'),(498,35,'italian','Escape'),(499,35,'italian','Escort'),(500,35,'italian','Excursion'),(501,35,'italian','Expedition'),(502,35,'italian','Explorer'),(503,35,'italian','Express'),(504,35,'italian','F 150'),(505,35,'italian','F 250'),(506,35,'italian','F 350'),(507,35,'italian','Fairlane'),(508,35,'italian','Falcon'),(509,35,'italian','Fiesta'),(510,35,'italian','Flex'),(511,35,'italian','Focus'),(512,35,'italian','Fusion'),(513,35,'italian','Galaxy'),(514,35,'italian','Granada'),(515,35,'italian','Grand C-Max'),(516,35,'italian','GT'),(517,35,'italian','Ka'),(518,35,'italian','Kuga'),(519,35,'italian','Maverick'),(520,35,'italian','Mercury'),(521,35,'italian','Mondeo'),(522,35,'italian','Mustang'),(523,35,'italian','Orion'),(524,35,'italian','Probe'),(525,35,'italian','Puma'),(526,35,'italian','Ranger'),(527,35,'italian','S-Max'),(528,35,'italian','Scorpio'),(529,35,'italian','Sierra'),(530,35,'italian','Sportka'),(531,35,'italian','Streetka'),(532,35,'italian','Taunus'),(533,35,'italian','Taurus'),(534,35,'italian','Thunderbird'),(535,35,'italian','Tourneo'),(536,35,'italian','Transit (All)'),(537,35,'italian','Transit'),(538,35,'italian','Transit Connect'),(539,35,'italian','Windstar'),(540,36,'italian','Acadia'),(541,36,'italian','Envoy'),(542,36,'italian','Safari'),(543,36,'italian','Savana'),(544,36,'italian','Sierra'),(545,36,'italian','Sonoma'),(546,36,'italian','Syclone'),(547,36,'italian','Typhoon'),(548,36,'italian','Vandura'),(549,36,'italian','Yukon'),(550,37,'italian','Sonique'),(551,40,'italian','Accord'),(552,40,'italian','Aerodeck'),(553,40,'italian','Civic'),(554,40,'italian','Concerto'),(555,40,'italian','CR-V'),(556,40,'italian','CR-Z'),(557,40,'italian','CRX'),(558,40,'italian','Element'),(559,40,'italian','FR-V'),(560,40,'italian','HR-V'),(561,40,'italian','Insight'),(562,40,'italian','Integra'),(563,40,'italian','Jazz'),(564,40,'italian','Legend'),(565,40,'italian','Logo'),(566,40,'italian','NSX'),(567,40,'italian','Odyssey'),(568,40,'italian','Prelude'),(569,40,'italian','S2000'),(570,40,'italian','Shuttle'),(571,40,'italian','Stream'),(572,41,'italian','H1'),(573,41,'italian','H2'),(574,41,'italian','H3'),(575,42,'italian','Accent'),(576,42,'italian','Atos'),(577,42,'italian','Azera'),(578,42,'italian','Coupe'),(579,42,'italian','Elantra'),(580,42,'italian','Excel'),(581,42,'italian','Galloper'),(582,42,'italian','Genesis'),(583,42,'italian','Getz'),(584,42,'italian','Grandeur'),(585,42,'italian','H 100'),(586,42,'italian','H 200'),(587,42,'italian','H-1'),(588,42,'italian','H-1 Starex'),(589,42,'italian','i10'),(590,42,'italian','i20'),(591,42,'italian','i30'),(592,42,'italian','i40'),(593,42,'italian','i50'),(594,42,'italian','ix20'),(595,42,'italian','ix35'),(596,42,'italian','ix55'),(597,42,'italian','Lantra'),(598,42,'italian','Matrix'),(599,42,'italian','Pony'),(600,42,'italian','S-Coupe'),(601,42,'italian','Santa Fe'),(602,42,'italian','Santamo'),(603,42,'italian','Sonata'),(604,42,'italian','Terracan'),(605,42,'italian','Trajet'),(606,42,'italian','Tucson'),(607,42,'italian','Veloster'),(608,42,'italian','Veracruz'),(609,42,'italian','XG 30'),(610,42,'italian','XG 350'),(611,43,'italian','EX35'),(612,43,'italian','EX37'),(613,43,'italian','FX'),(614,43,'italian','G35'),(615,43,'italian','G37'),(616,43,'italian','M30'),(617,43,'italian','M35'),(618,43,'italian','M37'),(619,43,'italian','Q45'),(620,43,'italian','QX56'),(621,44,'italian','Campo'),(622,44,'italian','D-Max'),(623,44,'italian','Gemini'),(624,44,'italian','Midi'),(625,44,'italian','PICK UP'),(626,44,'italian','Trooper'),(627,45,'italian','Massif'),(628,46,'italian','Daimler'),(629,46,'italian','E-Type'),(630,46,'italian','F-Type'),(631,46,'italian','MK II'),(632,46,'italian','S-Type'),(633,46,'italian','X-Type'),(634,46,'italian','XF'),(635,46,'italian','XJ'),(636,46,'italian','XJ12'),(637,46,'italian','XJ40'),(638,46,'italian','XJ6'),(639,46,'italian','XJ8'),(640,46,'italian','XJR'),(641,46,'italian','XJS'),(642,46,'italian','XJSC'),(643,46,'italian','XK'),(644,46,'italian','XKR'),(645,47,'italian','Cherokee'),(646,47,'italian','CJ'),(647,47,'italian','Comanche'),(648,47,'italian','Commander'),(649,47,'italian','Compass'),(650,47,'italian','Grand Cherokee'),(651,47,'italian','Patriot'),(652,47,'italian','Renegade'),(653,47,'italian','Wagoneer'),(654,47,'italian','Willys'),(655,47,'italian','Wrangler'),(656,48,'italian','X-BOW'),(657,49,'italian','Besta'),(658,49,'italian','Borrego'),(659,49,'italian','Carens'),(660,49,'italian','Carnival'),(661,49,'italian','cee\'d'),(662,49,'italian','cee\'d Sportswagon'),(663,49,'italian','Cerato'),(664,49,'italian','Clarus'),(665,49,'italian','Elan'),(666,49,'italian','Joice'),(667,49,'italian','K2500'),(668,49,'italian','K2700'),(669,49,'italian','Leo'),(670,49,'italian','Magentis'),(671,49,'italian','Mentor'),(672,49,'italian','Mini'),(673,49,'italian','Opirus'),(674,49,'italian','Optima'),(675,49,'italian','Picanto'),(676,49,'italian','Pregio'),(677,49,'italian','Pride'),(678,49,'italian','pro_cee\'d'),(679,49,'italian','Retona'),(680,49,'italian','Rio'),(681,49,'italian','Roadster'),(682,49,'italian','Rocsta'),(683,49,'italian','Sephia'),(684,49,'italian','Shuma'),(685,49,'italian','Sorento'),(686,49,'italian','Soul'),(687,49,'italian','Sportage'),(688,49,'italian','Venga'),(689,50,'italian','CCR'),(690,51,'italian','110'),(691,51,'italian','111'),(692,51,'italian','112'),(693,51,'italian','1200'),(694,51,'italian','2107'),(695,51,'italian','2110'),(696,51,'italian','2111'),(697,51,'italian','2112'),(698,51,'italian','Aleko'),(699,51,'italian','Forma'),(700,51,'italian','Kalina'),(701,51,'italian','Niva'),(702,51,'italian','Nova'),(703,51,'italian','Priora'),(704,51,'italian','Samara'),(705,52,'italian','Aventador'),(706,52,'italian','Countach'),(707,52,'italian','Diablo'),(708,52,'italian','Espada'),(709,52,'italian','Gallardo'),(710,52,'italian','Jalpa'),(711,52,'italian','LM'),(712,52,'italian','Miura'),(713,52,'italian','Murciélago'),(714,52,'italian','Urraco'),(715,53,'italian','Beta'),(716,53,'italian','Dedra'),(717,53,'italian','Delta'),(718,53,'italian','Flaminia'),(719,53,'italian','Flavia'),(720,53,'italian','Fulvia'),(721,53,'italian','Gamma'),(722,53,'italian','Kappa'),(723,53,'italian','Lybra'),(724,53,'italian','MUSA'),(725,53,'italian','Phedra'),(726,53,'italian','Prisma'),(727,53,'italian','Stratos'),(728,53,'italian','Thema'),(729,53,'italian','Thesis'),(730,53,'italian','Voyager'),(731,53,'italian','Ypsilon'),(732,53,'italian','Zeta'),(733,54,'italian','Defender'),(734,54,'italian','Discovery'),(735,54,'italian','Freelander'),(736,54,'italian','Range Rover'),(737,54,'italian','Range Rover Evoque'),(738,54,'italian','Range Rover Sport'),(739,54,'italian','Serie I'),(740,54,'italian','Serie II'),(741,54,'italian','Serie III'),(742,55,'italian','CV-9'),(743,55,'italian','S'),(744,55,'italian','SC2'),(745,55,'italian','SC4'),(746,56,'italian','CT 200h'),(747,56,'italian','ES Series (All)'),(748,56,'italian','ES 300'),(749,56,'italian','ES 330'),(750,56,'italian','ES 350'),(751,56,'italian','GS Series (All)'),(752,56,'italian','GS 250'),(753,56,'italian','GS 300'),(754,56,'italian','GS 350'),(755,56,'italian','GS 430'),(756,56,'italian','GS 450'),(757,56,'italian','GS 460'),(758,56,'italian','GX 470'),(759,56,'italian','IS Series (All)'),(760,56,'italian','IS 200'),(761,56,'italian','IS 220'),(762,56,'italian','IS 250'),(763,56,'italian','IS 300'),(764,56,'italian','IS 350'),(765,56,'italian','IS-F'),(766,56,'italian','LS Series (All)'),(767,56,'italian','LS 400'),(768,56,'italian','LS 430'),(769,56,'italian','LS 460'),(770,56,'italian','LS 600'),(771,56,'italian','LX Series (All)'),(772,56,'italian','LX 470'),(773,56,'italian','LX 570'),(774,56,'italian','RX Series (All)'),(775,56,'italian','RX 300'),(776,56,'italian','RX 330'),(777,56,'italian','RX 350'),(778,56,'italian','RX 400'),(779,56,'italian','RX 450'),(780,56,'italian','SC 400'),(781,56,'italian','SC 430'),(782,57,'italian','Ambra'),(783,57,'italian','Nova'),(784,57,'italian','Optima'),(785,57,'italian','X - Too'),(786,58,'italian','Aviator'),(787,58,'italian','Continental'),(788,58,'italian','LS'),(789,58,'italian','Mark'),(790,58,'italian','Navigator'),(791,58,'italian','Town Car'),(792,59,'italian','340 R'),(793,59,'italian','Cortina'),(794,59,'italian','Elan'),(795,59,'italian','Elise'),(796,59,'italian','Elite'),(797,59,'italian','Esprit'),(798,59,'italian','Europa'),(799,59,'italian','Evora'),(800,59,'italian','Excel'),(801,59,'italian','Exige'),(802,59,'italian','Super Seven'),(803,60,'italian','MGA'),(804,60,'italian','MGB'),(805,60,'italian','MGF'),(806,60,'italian','Midget'),(807,60,'italian','Montego'),(808,60,'italian','TD'),(809,60,'italian','TF'),(810,60,'italian','ZR'),(811,60,'italian','ZS'),(812,60,'italian','ZT'),(813,61,'italian','Cabrio Series (All)'),(814,61,'italian','Cooper Cabrio'),(815,61,'italian','Cooper D Cabrio'),(816,61,'italian','Cooper S Cabrio'),(817,61,'italian','Cooper SD Cabrio'),(818,61,'italian','John Cooper Works Cabrio'),(819,61,'italian','One Cabrio'),(820,61,'italian','Clubman Series (All)'),(821,61,'italian','Cooper Clubman'),(822,61,'italian','Cooper D Clubman'),(823,61,'italian','Cooper S Clubman'),(824,61,'italian','Cooper SD Clubman'),(825,61,'italian','John Cooper Works Clubman'),(826,61,'italian','One Clubman'),(827,61,'italian','One D Clubman'),(828,61,'italian','Clubvan'),(829,61,'italian','Countryman Series (All)'),(830,61,'italian','Cooper Countryman'),(831,61,'italian','Cooper D Countryman'),(832,61,'italian','Cooper S Countryman'),(833,61,'italian','Cooper SD Countryman'),(834,61,'italian','John Cooper Works Countryman'),(835,61,'italian','One Countryman'),(836,61,'italian','One D Countryman'),(837,61,'italian','Coupe Series (All)'),(838,61,'italian','Cooper Coupé'),(839,61,'italian','Cooper S Coupé'),(840,61,'italian','Cooper SD Coupé'),(841,61,'italian','John Cooper Works Coupé'),(842,61,'italian','MINI (All)'),(843,61,'italian','1000'),(844,61,'italian','1300'),(845,61,'italian','Cooper'),(846,61,'italian','Cooper D'),(847,61,'italian','Cooper S'),(848,61,'italian','Cooper SD'),(849,61,'italian','John Cooper Works'),(850,61,'italian','ONE'),(851,61,'italian','One D'),(852,61,'italian','Paceman Series (All)'),(853,61,'italian','Cooper D Paceman'),(854,61,'italian','Cooper Paceman'),(855,61,'italian','Cooper S Paceman'),(856,61,'italian','Cooper SD Paceman'),(857,61,'italian','John Cooper Works Paceman'),(858,61,'italian','Roadster Series (All)'),(859,61,'italian','Cooper Roadster'),(860,61,'italian','Cooper S Roadster'),(861,61,'italian','Cooper SD Roadster'),(862,61,'italian','John Cooper Works Roadster'),(863,63,'italian','222'),(864,63,'italian','224'),(865,63,'italian','228'),(866,63,'italian','3200'),(867,63,'italian','418'),(868,63,'italian','420'),(869,63,'italian','4200'),(870,63,'italian','422'),(871,63,'italian','424'),(872,63,'italian','430'),(873,63,'italian','Biturbo'),(874,63,'italian','Ghibli'),(875,63,'italian','GranCabrio'),(876,63,'italian','Gransport'),(877,63,'italian','Granturismo'),(878,63,'italian','Indy'),(879,63,'italian','Karif'),(880,63,'italian','MC12'),(881,63,'italian','Merak'),(882,63,'italian','Quattroporte'),(883,63,'italian','Shamal'),(884,63,'italian','Spyder'),(885,64,'italian','57'),(886,64,'italian','62'),(887,65,'italian','121'),(888,65,'italian','2'),(889,65,'italian','3'),(890,65,'italian','323'),(891,65,'italian','5'),(892,65,'italian','6'),(893,65,'italian','626'),(894,65,'italian','929'),(895,65,'italian','B series'),(896,65,'italian','Bongo'),(897,65,'italian','BT-50'),(898,65,'italian','CX-5'),(899,65,'italian','CX-7'),(900,65,'italian','CX-9'),(901,65,'italian','Demio'),(902,65,'italian','E series'),(903,65,'italian','Millenia'),(904,65,'italian','MPV'),(905,65,'italian','MX-3'),(906,65,'italian','MX-5'),(907,65,'italian','MX-6'),(908,65,'italian','Premacy'),(909,65,'italian','Protege'),(910,65,'italian','RX-6'),(911,65,'italian','RX-7'),(912,65,'italian','RX-8'),(913,65,'italian','Tribute'),(914,65,'italian','Xedos'),(915,66,'italian','MP4-12C'),(916,67,'italian','190'),(917,67,'italian','200'),(918,67,'italian','220'),(919,67,'italian','230'),(920,67,'italian','240'),(921,67,'italian','250'),(922,67,'italian','260'),(923,67,'italian','270'),(924,67,'italian','280'),(925,67,'italian','290'),(926,67,'italian','300'),(927,67,'italian','320'),(928,67,'italian','350'),(929,67,'italian','380'),(930,67,'italian','400'),(931,67,'italian','416'),(932,67,'italian','420'),(933,67,'italian','450'),(934,67,'italian','500'),(935,67,'italian','560'),(936,67,'italian','600'),(937,67,'italian','A-Klasse (All)'),(938,67,'italian','A 140'),(939,67,'italian','A 150'),(940,67,'italian','A 160'),(941,67,'italian','A 170'),(942,67,'italian','A 180'),(943,67,'italian','A 190'),(944,67,'italian','A 200'),(945,67,'italian','A 210'),(946,67,'italian','A 220'),(947,67,'italian','A 250'),(948,67,'italian','A 45 AMG'),(949,67,'italian','B-Klasse (All)'),(950,67,'italian','B 150'),(951,67,'italian','B 160'),(952,67,'italian','B 170'),(953,67,'italian','B 180'),(954,67,'italian','B 200'),(955,67,'italian','B 220'),(956,67,'italian','B 250'),(957,67,'italian','C-Klasse (All)'),(958,67,'italian','C 160'),(959,67,'italian','C 180'),(960,67,'italian','C 200'),(961,67,'italian','C 220'),(962,67,'italian','C 230'),(963,67,'italian','C 240'),(964,67,'italian','C 250'),(965,67,'italian','C 270'),(966,67,'italian','C 280'),(967,67,'italian','C 30 AMG'),(968,67,'italian','C 300'),(969,67,'italian','C 32 AMG'),(970,67,'italian','C 320'),(971,67,'italian','C 350'),(972,67,'italian','C 36 AMG'),(973,67,'italian','C 43 AMG'),(974,67,'italian','C 55 AMG'),(975,67,'italian','C 63 AMG'),(976,67,'italian','CE-Klasse (All)'),(977,67,'italian','CE 200'),(978,67,'italian','CE 220'),(979,67,'italian','CE 230'),(980,67,'italian','CE 280'),(981,67,'italian','CE 300'),(982,67,'italian','Citan'),(983,67,'italian','CL-Klasse (All)'),(984,67,'italian','CL 160'),(985,67,'italian','CL 180'),(986,67,'italian','CL 200'),(987,67,'italian','CL 220'),(988,67,'italian','CL 230'),(989,67,'italian','CL 320'),(990,67,'italian','CL 420'),(991,67,'italian','CL 500'),(992,67,'italian','CL 55 AMG'),(993,67,'italian','CL 600'),(994,67,'italian','CL 63 AMG'),(995,67,'italian','CL 65 AMG'),(996,67,'italian','CLA-Klasse (All)'),(997,67,'italian','CLA 180'),(998,67,'italian','CLA 200'),(999,67,'italian','CLA 220'),(1000,67,'italian','CLA 250'),(1001,67,'italian','CLC-Klasse (All)'),(1002,67,'italian','CLC 160'),(1003,67,'italian','CLC 180'),(1004,67,'italian','CLC 200'),(1005,67,'italian','CLC 220'),(1006,67,'italian','CLC 230'),(1007,67,'italian','CLC 250'),(1008,67,'italian','CLC 350'),(1009,67,'italian','CLK-Klasse (All)'),(1010,67,'italian','CLK 200'),(1011,67,'italian','CLK 220'),(1012,67,'italian','CLK 230'),(1013,67,'italian','CLK 240'),(1014,67,'italian','CLK 270'),(1015,67,'italian','CLK 280'),(1016,67,'italian','CLK 320'),(1017,67,'italian','CLK 350'),(1018,67,'italian','CLK 430'),(1019,67,'italian','CLK 500'),(1020,67,'italian','CLK 55 AMG'),(1021,67,'italian','CLK 63 AMG'),(1022,67,'italian','CLS-Klasse (All)'),(1023,67,'italian','CLS 250'),(1024,67,'italian','CLS 280'),(1025,67,'italian','CLS 300'),(1026,67,'italian','CLS 320'),(1027,67,'italian','CLS 350'),(1028,67,'italian','CLS 500'),(1029,67,'italian','CLS 55 AMG'),(1030,67,'italian','CLS 63 AMG'),(1031,67,'italian','E-Klasse (All)'),(1032,67,'italian','E 200'),(1033,67,'italian','E 220'),(1034,67,'italian','E 230'),(1035,67,'italian','E 240'),(1036,67,'italian','E 250'),(1037,67,'italian','E 260'),(1038,67,'italian','E 270'),(1039,67,'italian','E 280'),(1040,67,'italian','E 290'),(1041,67,'italian','E 300'),(1042,67,'italian','E 320'),(1043,67,'italian','E 350'),(1044,67,'italian','E 36 AMG'),(1045,67,'italian','E 400'),(1046,67,'italian','E 420'),(1047,67,'italian','E 430'),(1048,67,'italian','E 50'),(1049,67,'italian','E 500'),(1050,67,'italian','E 55 AMG'),(1051,67,'italian','E 60 AMG'),(1052,67,'italian','E 63 AMG'),(1053,67,'italian','G-Klasse (All)'),(1054,67,'italian','G 230'),(1055,67,'italian','G 240'),(1056,67,'italian','G 250'),(1057,67,'italian','G 270'),(1058,67,'italian','G 280'),(1059,67,'italian','G 290'),(1060,67,'italian','G 300'),(1061,67,'italian','G 320'),(1062,67,'italian','G 350'),(1063,67,'italian','G 400'),(1064,67,'italian','G 500'),(1065,67,'italian','G 55 AMG'),(1066,67,'italian','G 63 AMG'),(1067,67,'italian','G 65 AMG'),(1068,67,'italian','GL-Klasse (All)'),(1069,67,'italian','GL 320'),(1070,67,'italian','GL 350'),(1071,67,'italian','GL 420'),(1072,67,'italian','GL 450'),(1073,67,'italian','GL 500'),(1074,67,'italian','GL 55 AMG'),(1075,67,'italian','GL 63 AMG'),(1076,67,'italian','GLK-Klasse (All)'),(1077,67,'italian','GLK 200'),(1078,67,'italian','GLK 220'),(1079,67,'italian','GLK 250'),(1080,67,'italian','GLK 280'),(1081,67,'italian','GLK 300'),(1082,67,'italian','GLK 320'),(1083,67,'italian','GLK 350'),(1084,67,'italian','MB 100'),(1085,67,'italian','ML-Klasse (All)'),(1086,67,'italian','ML 230'),(1087,67,'italian','ML 250'),(1088,67,'italian','ML 270'),(1089,67,'italian','ML 280'),(1090,67,'italian','ML 300'),(1091,67,'italian','ML 320'),(1092,67,'italian','ML 350'),(1093,67,'italian','ML 400'),(1094,67,'italian','ML 420'),(1095,67,'italian','ML 430'),(1096,67,'italian','ML 450'),(1097,67,'italian','ML 500'),(1098,67,'italian','ML 55 AMG'),(1099,67,'italian','ML 63 AMG'),(1100,67,'italian','R-Klasse (All)'),(1101,67,'italian','R 280'),(1102,67,'italian','R 300'),(1103,67,'italian','R 320'),(1104,67,'italian','R 350'),(1105,67,'italian','R 500'),(1106,67,'italian','R 63 AMG'),(1107,67,'italian','S-Klasse (All)'),(1108,67,'italian','S 250'),(1109,67,'italian','S 260'),(1110,67,'italian','S 280'),(1111,67,'italian','S 300'),(1112,67,'italian','S 320'),(1113,67,'italian','S 350'),(1114,67,'italian','S 400'),(1115,67,'italian','S 420'),(1116,67,'italian','S 430'),(1117,67,'italian','S 450'),(1118,67,'italian','S 500'),(1119,67,'italian','S 55'),(1120,67,'italian','S 550'),(1121,67,'italian','S 600'),(1122,67,'italian','S 63 AMG'),(1123,67,'italian','S 65 AMG'),(1124,67,'italian','SL-Klasse (All)'),(1125,67,'italian','SL 280'),(1126,67,'italian','SL 300'),(1127,67,'italian','SL 320'),(1128,67,'italian','SL 350'),(1129,67,'italian','SL 380'),(1130,67,'italian','SL 420'),(1131,67,'italian','SL 450'),(1132,67,'italian','SL 500'),(1133,67,'italian','SL 55 AMG'),(1134,67,'italian','SL 560'),(1135,67,'italian','SL 60 AMG'),(1136,67,'italian','SL 600'),(1137,67,'italian','SL 63 AMG'),(1138,67,'italian','SL 65 AMG'),(1139,67,'italian','SL 70 AMG'),(1140,67,'italian','SL 73 AMG'),(1141,67,'italian','SLK-Klasse (All)'),(1142,67,'italian','SLK 200'),(1143,67,'italian','SLK 230'),(1144,67,'italian','SLK 250'),(1145,67,'italian','SLK 280'),(1146,67,'italian','SLK 300'),(1147,67,'italian','SLK 32 AMG'),(1148,67,'italian','SLK 320'),(1149,67,'italian','SLK 350'),(1150,67,'italian','SLK 55 AMG'),(1151,67,'italian','SLR'),(1152,67,'italian','SLS AMG'),(1153,67,'italian','Sprinter'),(1154,67,'italian','V-Klasse (All)'),(1155,67,'italian','V 200'),(1156,67,'italian','V 220'),(1157,67,'italian','V 230'),(1158,67,'italian','V 280'),(1159,67,'italian','Vaneo'),(1160,67,'italian','Vario'),(1161,67,'italian','Viano'),(1162,67,'italian','Vito'),(1163,68,'italian','DUÈ'),(1164,68,'italian','M.Go'),(1165,68,'italian','M-8'),(1166,68,'italian','MC1'),(1167,68,'italian','MC2'),(1168,69,'italian','3000 GT'),(1169,69,'italian','ASX'),(1170,69,'italian','Canter'),(1171,69,'italian','Carisma'),(1172,69,'italian','Colt'),(1173,69,'italian','Cordia'),(1174,69,'italian','Cosmos'),(1175,69,'italian','Diamante'),(1176,69,'italian','Eclipse'),(1177,69,'italian','Galant'),(1178,69,'italian','Galloper'),(1179,69,'italian','Grandis'),(1180,69,'italian','i-MiEV'),(1181,69,'italian','L200'),(1182,69,'italian','L300'),(1183,69,'italian','L400'),(1184,69,'italian','Lancer'),(1185,69,'italian','Mirage'),(1186,69,'italian','Montero'),(1187,69,'italian','Outlander'),(1188,69,'italian','Pajero'),(1189,69,'italian','Pajero Pinin'),(1190,69,'italian','Pick-up'),(1191,69,'italian','Santamo'),(1192,69,'italian','Sapporo'),(1193,69,'italian','Sigma'),(1194,69,'italian','Space Gear'),(1195,69,'italian','Space Runner'),(1196,69,'italian','Space Star'),(1197,69,'italian','Space Wagon'),(1198,69,'italian','Starion'),(1199,69,'italian','Tredia'),(1200,70,'italian','4/4'),(1201,70,'italian','Aero 8'),(1202,70,'italian','Plus 4'),(1203,70,'italian','Plus 8'),(1204,70,'italian','Roadster'),(1205,72,'italian','100 NX'),(1206,72,'italian','200 SX'),(1207,72,'italian','240 SX'),(1208,72,'italian','280 ZX'),(1209,72,'italian','300 ZX'),(1210,72,'italian','350Z'),(1211,72,'italian','370Z'),(1212,72,'italian','Almera'),(1213,72,'italian','Almera Tino'),(1214,72,'italian','Altima'),(1215,72,'italian','Armada'),(1216,72,'italian','Bluebird'),(1217,72,'italian','Cabstar'),(1218,72,'italian','Cargo'),(1219,72,'italian','Cherry'),(1220,72,'italian','Cube'),(1221,72,'italian','Evalia'),(1222,72,'italian','Frontier'),(1223,72,'italian','GT-R'),(1224,72,'italian','Interstar'),(1225,72,'italian','Juke'),(1226,72,'italian','King Cab'),(1227,72,'italian','Kubistar'),(1228,72,'italian','Laurel'),(1229,72,'italian','Leaf'),(1230,72,'italian','Maxima'),(1231,72,'italian','Micra'),(1232,72,'italian','Murano'),(1233,72,'italian','Navara'),(1234,72,'italian','Note'),(1235,72,'italian','NP 300'),(1236,72,'italian','NV200'),(1237,72,'italian','NV400'),(1238,72,'italian','Pathfinder'),(1239,72,'italian','Patrol'),(1240,72,'italian','PickUp'),(1241,72,'italian','Pixo'),(1242,72,'italian','Prairie'),(1243,72,'italian','Primastar'),(1244,72,'italian','Primera'),(1245,72,'italian','Qashqai'),(1246,72,'italian','Qashqai+2'),(1247,72,'italian','Quest'),(1248,72,'italian','Sentra'),(1249,72,'italian','Serena'),(1250,72,'italian','Silvia'),(1251,72,'italian','Skyline'),(1252,72,'italian','Sunny'),(1253,72,'italian','Terrano'),(1254,72,'italian','Tiida'),(1255,72,'italian','Titan'),(1256,72,'italian','Trade'),(1257,72,'italian','Urvan'),(1258,72,'italian','Vanette'),(1259,72,'italian','X-Trail'),(1260,73,'italian','Bravada'),(1261,73,'italian','Custom Cruiser'),(1262,73,'italian','Cutlass'),(1263,73,'italian','Delta 88'),(1264,73,'italian','Silhouette'),(1265,73,'italian','Supreme'),(1266,73,'italian','Toronado'),(1267,74,'italian','Adam'),(1268,74,'italian','Agila'),(1269,74,'italian','Ampera'),(1270,74,'italian','Antara'),(1271,74,'italian','Arena'),(1272,74,'italian','Ascona'),(1273,74,'italian','Astra'),(1274,74,'italian','Calibra'),(1275,74,'italian','Campo'),(1276,74,'italian','Cascada'),(1277,74,'italian','Cavalier'),(1278,74,'italian','Combo'),(1279,74,'italian','Commodore'),(1280,74,'italian','Corsa'),(1281,74,'italian','Diplomat'),(1282,74,'italian','Frontera'),(1283,74,'italian','GT'),(1284,74,'italian','Insignia'),(1285,74,'italian','Kadett'),(1286,74,'italian','Manta'),(1287,74,'italian','Meriva'),(1288,74,'italian','Mokka'),(1289,74,'italian','Monterey'),(1290,74,'italian','Monza'),(1291,74,'italian','Movano'),(1292,74,'italian','Nova'),(1293,74,'italian','Omega'),(1294,74,'italian','Pick Up Sportscap'),(1295,74,'italian','Rekord'),(1296,74,'italian','Senator'),(1297,74,'italian','Signum'),(1298,74,'italian','Sintra'),(1299,74,'italian','Speedster'),(1300,74,'italian','Tigra'),(1301,74,'italian','Vectra'),(1302,74,'italian','Vivaro'),(1303,74,'italian','Zafira'),(1304,74,'italian','Zafira Tourer'),(1305,76,'italian','1007'),(1306,76,'italian','104'),(1307,76,'italian','106'),(1308,76,'italian','107'),(1309,76,'italian','2008'),(1310,76,'italian','204'),(1311,76,'italian','205'),(1312,76,'italian','206'),(1313,76,'italian','207'),(1314,76,'italian','208'),(1315,76,'italian','3008'),(1316,76,'italian','301'),(1317,76,'italian','304'),(1318,76,'italian','305'),(1319,76,'italian','306'),(1320,76,'italian','307'),(1321,76,'italian','308'),(1322,76,'italian','309'),(1323,76,'italian','4007'),(1324,76,'italian','4008'),(1325,76,'italian','404'),(1326,76,'italian','405'),(1327,76,'italian','406'),(1328,76,'italian','407'),(1329,76,'italian','5008'),(1330,76,'italian','504'),(1331,76,'italian','505'),(1332,76,'italian','508'),(1333,76,'italian','604'),(1334,76,'italian','605'),(1335,76,'italian','607'),(1336,76,'italian','806'),(1337,76,'italian','807'),(1338,76,'italian','Bipper'),(1339,76,'italian','Bipper Tepee'),(1340,76,'italian','Boxer'),(1341,76,'italian','Expert'),(1342,76,'italian','Expert Tepee'),(1343,76,'italian','iOn'),(1344,76,'italian','J5'),(1345,76,'italian','Partner'),(1346,76,'italian','Partner Tepee'),(1347,76,'italian','RCZ'),(1348,76,'italian','TePee'),(1349,77,'italian','APE'),(1350,77,'italian','APE TM'),(1351,77,'italian','Porter'),(1352,78,'italian','Prowler'),(1353,79,'italian','6000'),(1354,79,'italian','Bonneville'),(1355,79,'italian','Fiero'),(1356,79,'italian','Firebird'),(1357,79,'italian','G6'),(1358,79,'italian','Grand-Am'),(1359,79,'italian','Grand-Prix'),(1360,79,'italian','GTO'),(1361,79,'italian','Montana'),(1362,79,'italian','Solstice'),(1363,79,'italian','Sunbird'),(1364,79,'italian','Sunfire'),(1365,79,'italian','Targa'),(1366,79,'italian','Trans Am'),(1367,79,'italian','Trans Sport'),(1368,79,'italian','Vibe'),(1369,80,'italian','356'),(1370,80,'italian','911 (All)'),(1371,80,'italian','911'),(1372,80,'italian','964'),(1373,80,'italian','991'),(1374,80,'italian','993'),(1375,80,'italian','996'),(1376,80,'italian','997'),(1377,80,'italian','912'),(1378,80,'italian','914'),(1379,80,'italian','924'),(1380,80,'italian','928'),(1381,80,'italian','944'),(1382,80,'italian','959'),(1383,80,'italian','962'),(1384,80,'italian','968'),(1385,80,'italian','Boxster'),(1386,80,'italian','Carrera GT'),(1387,80,'italian','Cayenne'),(1388,80,'italian','Cayman'),(1389,80,'italian','Panamera'),(1390,81,'italian','300 Serie'),(1391,81,'italian','400 Serie'),(1392,82,'italian','Alpine A110'),(1393,82,'italian','Alpine A310'),(1394,82,'italian','Alpine V6'),(1395,82,'italian','Avantime'),(1396,82,'italian','Captur'),(1397,82,'italian','Clio'),(1398,82,'italian','Coupe'),(1399,82,'italian','Espace'),(1400,82,'italian','Express'),(1401,82,'italian','Fluence'),(1402,82,'italian','Fuego'),(1403,82,'italian','Grand Espace'),(1404,82,'italian','Grand Modus'),(1405,82,'italian','Grand Scenic'),(1406,82,'italian','Kangoo'),(1407,82,'italian','Koleos'),(1408,82,'italian','Laguna'),(1409,82,'italian','Latitude'),(1410,82,'italian','Mascott'),(1411,82,'italian','Master'),(1412,82,'italian','Megane'),(1413,82,'italian','Modus'),(1414,82,'italian','P 1400'),(1415,82,'italian','R 11'),(1416,82,'italian','R 14'),(1417,82,'italian','R 18'),(1418,82,'italian','R 19'),(1419,82,'italian','R 20'),(1420,82,'italian','R 21'),(1421,82,'italian','R 25'),(1422,82,'italian','R 30'),(1423,82,'italian','R 4'),(1424,82,'italian','R 5'),(1425,82,'italian','R 6'),(1426,82,'italian','R 9'),(1427,82,'italian','Rapid'),(1428,82,'italian','Safrane'),(1429,82,'italian','Scenic'),(1430,82,'italian','Spider'),(1431,82,'italian','Trafic'),(1432,82,'italian','Twingo'),(1433,82,'italian','Twizy'),(1434,82,'italian','Vel Satis'),(1435,82,'italian','Wind'),(1436,82,'italian','ZOE'),(1437,83,'italian','Corniche'),(1438,83,'italian','Flying Spur'),(1439,83,'italian','Ghost'),(1440,83,'italian','Park Ward'),(1441,83,'italian','Phantom'),(1442,83,'italian','Silver Cloud'),(1443,83,'italian','Silver Dawn'),(1444,83,'italian','Silver Seraph'),(1445,83,'italian','Silver Shadow'),(1446,83,'italian','Silver Spirit'),(1447,83,'italian','Silver Spur'),(1448,84,'italian','100'),(1449,84,'italian','111'),(1450,84,'italian','114'),(1451,84,'italian','115'),(1452,84,'italian','200'),(1453,84,'italian','213'),(1454,84,'italian','214'),(1455,84,'italian','216'),(1456,84,'italian','218'),(1457,84,'italian','220'),(1458,84,'italian','25'),(1459,84,'italian','400'),(1460,84,'italian','414'),(1461,84,'italian','416'),(1462,84,'italian','418'),(1463,84,'italian','420'),(1464,84,'italian','45'),(1465,84,'italian','600'),(1466,84,'italian','618'),(1467,84,'italian','620'),(1468,84,'italian','623'),(1469,84,'italian','75'),(1470,84,'italian','800'),(1471,84,'italian','820'),(1472,84,'italian','825'),(1473,84,'italian','827'),(1474,84,'italian','City Rover'),(1475,84,'italian','Metro'),(1476,84,'italian','Montego'),(1477,84,'italian','SD'),(1478,84,'italian','Streetwise'),(1479,86,'italian','9-3'),(1480,86,'italian','9-4X'),(1481,86,'italian','9-5'),(1482,86,'italian','9-7X'),(1483,86,'italian','90'),(1484,86,'italian','900'),(1485,86,'italian','9000'),(1486,86,'italian','96'),(1487,86,'italian','99'),(1488,88,'italian','Alhambra'),(1489,88,'italian','Altea'),(1490,88,'italian','Arosa'),(1491,88,'italian','Cordoba'),(1492,88,'italian','Exeo'),(1493,88,'italian','Ibiza'),(1494,88,'italian','Inca'),(1495,88,'italian','Leon'),(1496,88,'italian','Malaga'),(1497,88,'italian','Marbella'),(1498,88,'italian','Mii'),(1499,88,'italian','Terra'),(1500,88,'italian','Toledo'),(1501,89,'italian','105'),(1502,89,'italian','120'),(1503,89,'italian','130'),(1504,89,'italian','135'),(1505,89,'italian','Citigo'),(1506,89,'italian','Fabia'),(1507,89,'italian','Favorit'),(1508,89,'italian','Felicia'),(1509,89,'italian','Forman'),(1510,89,'italian','Octavia'),(1511,89,'italian','Pick-up'),(1512,89,'italian','Praktik'),(1513,89,'italian','Rapid'),(1514,89,'italian','Roomster'),(1515,89,'italian','Superb'),(1516,89,'italian','Yeti'),(1517,90,'italian','Crossblade'),(1518,90,'italian','ForFour'),(1519,90,'italian','ForTwo'),(1520,90,'italian','Roadster'),(1521,92,'italian','C8'),(1522,92,'italian','C8 AILERON'),(1523,92,'italian','C8 DOUBLE 12 S'),(1524,92,'italian','C8 LAVIOLETTE SWB'),(1525,92,'italian','C8 SPYDER SWB'),(1526,93,'italian','Actyon'),(1527,93,'italian','Family'),(1528,93,'italian','Korando'),(1529,93,'italian','Kyron'),(1530,93,'italian','MUSSO'),(1531,93,'italian','REXTON'),(1532,93,'italian','Rodius'),(1533,94,'italian','B9 Tribeca'),(1534,94,'italian','Baja'),(1535,94,'italian','BRZ'),(1536,94,'italian','Forester'),(1537,94,'italian','Impreza'),(1538,94,'italian','Justy'),(1539,94,'italian','Legacy'),(1540,94,'italian','Libero'),(1541,94,'italian','OUTBACK'),(1542,94,'italian','SVX'),(1543,94,'italian','Trezia'),(1544,94,'italian','Tribeca'),(1545,94,'italian','Vivio'),(1546,94,'italian','XT'),(1547,94,'italian','XV'),(1548,95,'italian','Alto'),(1549,95,'italian','Baleno'),(1550,95,'italian','Cappuccino'),(1551,95,'italian','Carry'),(1552,95,'italian','Grand Vitara'),(1553,95,'italian','Ignis'),(1554,95,'italian','Jimny'),(1555,95,'italian','Kizashi'),(1556,95,'italian','Liana'),(1557,95,'italian','LJ'),(1558,95,'italian','SJ Samurai'),(1559,95,'italian','Splash'),(1560,95,'italian','Super-Carry'),(1561,95,'italian','Swift'),(1562,95,'italian','SX4'),(1563,95,'italian','SX4 S-Cross'),(1564,95,'italian','Vitara'),(1565,95,'italian','Wagon R+'),(1566,95,'italian','X-90'),(1567,97,'italian','Chimaera'),(1568,97,'italian','Griffith'),(1569,97,'italian','Tuscan'),(1570,98,'italian','Horizon'),(1571,98,'italian','Samba'),(1572,99,'italian','Indica'),(1573,99,'italian','Indigo'),(1574,99,'italian','Nano'),(1575,99,'italian','Safari'),(1576,99,'italian','Sumo'),(1577,99,'italian','Telcoline'),(1578,99,'italian','Telcosport'),(1579,99,'italian','Xenon'),(1580,101,'italian','4-Runner'),(1581,101,'italian','Auris'),(1582,101,'italian','Auris Touring Sports'),(1583,101,'italian','Avalon'),(1584,101,'italian','Avensis'),(1585,101,'italian','Avensis Verso'),(1586,101,'italian','Aygo'),(1587,101,'italian','Camry'),(1588,101,'italian','Carina'),(1589,101,'italian','Celica'),(1590,101,'italian','Corolla'),(1591,101,'italian','Corolla Verso'),(1592,101,'italian','Cressida'),(1593,101,'italian','Crown'),(1594,101,'italian','Dyna'),(1595,101,'italian','FJ'),(1596,101,'italian','GT86'),(1597,101,'italian','Hiace'),(1598,101,'italian','Highlander'),(1599,101,'italian','Hilux'),(1600,101,'italian','IQ'),(1601,101,'italian','Land Cruiser'),(1602,101,'italian','Lite-Ace'),(1603,101,'italian','MR 2'),(1604,101,'italian','Paseo'),(1605,101,'italian','Picnic'),(1606,101,'italian','Previa'),(1607,101,'italian','Prius'),(1608,101,'italian','Prius+'),(1609,101,'italian','RAV 4'),(1610,101,'italian','Sequoia'),(1611,101,'italian','Sienna'),(1612,101,'italian','Starlet'),(1613,101,'italian','Supra'),(1614,101,'italian','Tacoma'),(1615,101,'italian','Tercel'),(1616,101,'italian','Tundra'),(1617,101,'italian','Urban Cruiser'),(1618,101,'italian','Verso'),(1619,101,'italian','Verso-S'),(1620,101,'italian','Yaris'),(1621,102,'italian','601'),(1622,103,'italian','Dolomite'),(1623,103,'italian','Moss'),(1624,103,'italian','Spitfire'),(1625,103,'italian','TR3'),(1626,103,'italian','TR4'),(1627,103,'italian','TR5'),(1628,103,'italian','TR6'),(1629,103,'italian','TR7'),(1630,103,'italian','TR8'),(1631,104,'italian','181'),(1632,104,'italian','Amarok'),(1633,104,'italian','Beetle'),(1634,104,'italian','Bora'),(1635,104,'italian','Buggy'),(1636,104,'italian','Caddy'),(1637,104,'italian','CC'),(1638,104,'italian','Corrado'),(1639,104,'italian','Crafter'),(1640,104,'italian','Eos'),(1641,104,'italian','Fox'),(1642,104,'italian','Golf (All)'),(1643,104,'italian','Golf'),(1644,104,'italian','Golf Plus'),(1645,104,'italian','Iltis'),(1646,104,'italian','Jetta'),(1647,104,'italian','Karmann Ghia'),(1648,104,'italian','Käfer'),(1649,104,'italian','LT'),(1650,104,'italian','Lupo'),(1651,104,'italian','New Beetle'),(1652,104,'italian','Passat (All)'),(1653,104,'italian','Passat'),(1654,104,'italian','Passat CC'),(1655,104,'italian','Phaeton'),(1656,104,'italian','Polo'),(1657,104,'italian','Routan'),(1658,104,'italian','Santana'),(1659,104,'italian','Scirocco'),(1660,104,'italian','Sharan'),(1661,104,'italian','T1'),(1662,104,'italian','T2'),(1663,104,'italian','T3 (All)'),(1664,104,'italian','T3 Caravelle'),(1665,104,'italian','T3 Multivan'),(1666,104,'italian','T3 other'),(1667,104,'italian','T3 Kombi'),(1668,104,'italian','T4 (All)'),(1669,104,'italian','T4 California'),(1670,104,'italian','T4 Caravelle'),(1671,104,'italian','T4 Multivan'),(1672,104,'italian','T4 other'),(1673,104,'italian','T4 Kombi'),(1674,104,'italian','T5 (All)'),(1675,104,'italian','T5 California'),(1676,104,'italian','T5 Caravelle'),(1677,104,'italian','T5 Multivan'),(1678,104,'italian','T5 Shuttle'),(1679,104,'italian','T5 other'),(1680,104,'italian','T5 Kombi'),(1681,104,'italian','Taro'),(1682,104,'italian','Tiguan'),(1683,104,'italian','Touareg'),(1684,104,'italian','Touran'),(1685,104,'italian','up!'),(1686,104,'italian','Vento'),(1687,105,'italian','240'),(1688,105,'italian','244'),(1689,105,'italian','245'),(1690,105,'italian','262'),(1691,105,'italian','264'),(1692,105,'italian','340'),(1693,105,'italian','360'),(1694,105,'italian','440'),(1695,105,'italian','460'),(1696,105,'italian','480'),(1697,105,'italian','740'),(1698,105,'italian','744'),(1699,105,'italian','745'),(1700,105,'italian','760'),(1701,105,'italian','780'),(1702,105,'italian','850'),(1703,105,'italian','855'),(1704,105,'italian','940'),(1705,105,'italian','944'),(1706,105,'italian','945'),(1707,105,'italian','960'),(1708,105,'italian','965'),(1709,105,'italian','Amazon'),(1710,105,'italian','C30'),(1711,105,'italian','C70'),(1712,105,'italian','Polar'),(1713,105,'italian','S40'),(1714,105,'italian','S60'),(1715,105,'italian','S70'),(1716,105,'italian','S80'),(1717,105,'italian','S90'),(1718,105,'italian','V40'),(1719,105,'italian','V50'),(1720,105,'italian','V60'),(1721,105,'italian','V70'),(1722,105,'italian','V90'),(1723,105,'italian','XC 60'),(1724,105,'italian','XC 70'),(1725,105,'italian','XC 90'),(1726,106,'italian','311'),(1727,106,'italian','353'),(1728,108,'italian','MF 25'),(1729,108,'italian','MF 28'),(1730,108,'italian','MF 3'),(1731,108,'italian','MF 30'),(1732,108,'italian','MF 35'),(1733,108,'italian','MF 4'),(1734,108,'italian','MF 5'),(1,1,'dutch','500'),(2,1,'dutch','500C'),(3,1,'dutch','Grande Punto'),(4,1,'dutch','Punto Evo'),(5,2,'dutch','MDX'),(6,2,'dutch','NSX'),(7,2,'dutch','RL'),(8,2,'dutch','RSX'),(9,2,'dutch','TL'),(10,2,'dutch','TSX'),(11,3,'dutch','City'),(12,3,'dutch','Crossline'),(13,3,'dutch','Roadline'),(14,3,'dutch','Scouty R'),(15,4,'dutch','8C'),(16,4,'dutch','Alfa 145'),(17,4,'dutch','Alfa 146'),(18,4,'dutch','Alfa 147'),(19,4,'dutch','Alfa 155'),(20,4,'dutch','Alfa 156'),(21,4,'dutch','Alfa 159'),(22,4,'dutch','Alfa 164'),(23,4,'dutch','Alfa 166'),(24,4,'dutch','Alfa 33'),(25,4,'dutch','Alfa 75'),(26,4,'dutch','Alfa 90'),(27,4,'dutch','Alfasud'),(28,4,'dutch','Alfetta'),(29,4,'dutch','Brera'),(30,4,'dutch','Crosswagon'),(31,4,'dutch','Giulia'),(32,4,'dutch','Giulietta'),(33,4,'dutch','GT'),(34,4,'dutch','GTV'),(35,4,'dutch','Junior'),(36,4,'dutch','MiTo'),(37,4,'dutch','Spider'),(38,4,'dutch','Sprint'),(39,5,'dutch','B10'),(40,5,'dutch','B12'),(41,5,'dutch','B3'),(42,5,'dutch','B5'),(43,5,'dutch','B6'),(44,5,'dutch','B7'),(45,5,'dutch','B8'),(46,5,'dutch','D 10'),(47,5,'dutch','D3'),(48,5,'dutch','D5'),(49,5,'dutch','Roadster S'),(50,5,'dutch','XD3'),(51,7,'dutch','GT'),(52,8,'dutch','Rocsta'),(53,9,'dutch','AR1'),(54,9,'dutch','Cygnet'),(55,9,'dutch','DB'),(56,9,'dutch','DB7'),(57,9,'dutch','DB9'),(58,9,'dutch','DBS'),(59,9,'dutch','Lagonda'),(60,9,'dutch','Rapide'),(61,9,'dutch','V12 Vantage'),(62,9,'dutch','V8 Vantage'),(63,9,'dutch','Vanquish'),(64,9,'dutch','Virage'),(65,10,'dutch','100'),(66,10,'dutch','200'),(67,10,'dutch','80'),(68,10,'dutch','90'),(69,10,'dutch','A1'),(70,10,'dutch','A2'),(71,10,'dutch','A3'),(72,10,'dutch','A4'),(73,10,'dutch','A4 Allroad'),(74,10,'dutch','A5'),(75,10,'dutch','A6'),(76,10,'dutch','A6 Allroad'),(77,10,'dutch','A7'),(78,10,'dutch','A8'),(79,10,'dutch','Cabriolet'),(80,10,'dutch','Coupé'),(81,10,'dutch','Q3'),(82,10,'dutch','Q5'),(83,10,'dutch','Q7'),(84,10,'dutch','QUATTRO'),(85,10,'dutch','R8'),(86,10,'dutch','RS2'),(87,10,'dutch','RS3'),(88,10,'dutch','RS4'),(89,10,'dutch','RS5'),(90,10,'dutch','RS6'),(91,10,'dutch','RS7'),(92,10,'dutch','S2'),(93,10,'dutch','S3'),(94,10,'dutch','S4'),(95,10,'dutch','S5'),(96,10,'dutch','S6'),(97,10,'dutch','S7'),(98,10,'dutch','S8'),(99,10,'dutch','SQ5'),(100,10,'dutch','TT (All)'),(101,10,'dutch','TT'),(102,10,'dutch','TT RS'),(103,10,'dutch','TTS'),(104,10,'dutch','V8'),(105,13,'dutch','Series 1 (All)'),(106,13,'dutch','114'),(107,13,'dutch','116'),(108,13,'dutch','118'),(109,13,'dutch','120'),(110,13,'dutch','123'),(111,13,'dutch','125'),(112,13,'dutch','130'),(113,13,'dutch','135'),(114,13,'dutch','2002'),(115,13,'dutch','Series 3 (All)'),(116,13,'dutch','315'),(117,13,'dutch','316'),(118,13,'dutch','318'),(119,13,'dutch','318 Gran Turismo'),(120,13,'dutch','320'),(121,13,'dutch','320 Gran Turismo'),(122,13,'dutch','323'),(123,13,'dutch','324'),(124,13,'dutch','325'),(125,13,'dutch','328'),(126,13,'dutch','328 Gran Turismo'),(127,13,'dutch','330'),(128,13,'dutch','335'),(129,13,'dutch','335 Gran Turismo'),(130,13,'dutch','ActiveHybrid 3'),(131,13,'dutch','Series 4 (All)'),(132,13,'dutch','420'),(133,13,'dutch','428'),(134,13,'dutch','430'),(135,13,'dutch','435'),(136,13,'dutch','Series 5 (All)'),(137,13,'dutch','518'),(138,13,'dutch','520'),(139,13,'dutch','520 Gran Turismo'),(140,13,'dutch','523'),(141,13,'dutch','524'),(142,13,'dutch','525'),(143,13,'dutch','528'),(144,13,'dutch','530'),(145,13,'dutch','530 Gran Turismo'),(146,13,'dutch','535'),(147,13,'dutch','535 Gran Turismo'),(148,13,'dutch','540'),(149,13,'dutch','545'),(150,13,'dutch','550'),(151,13,'dutch','550 Gran Turismo'),(152,13,'dutch','ActiveHybrid 5'),(153,13,'dutch','Series 6 (All)'),(154,13,'dutch','628'),(155,13,'dutch','630'),(156,13,'dutch','633'),(157,13,'dutch','635'),(158,13,'dutch','640'),(159,13,'dutch','645'),(160,13,'dutch','650'),(161,13,'dutch','Series 7 (All)'),(162,13,'dutch','725'),(163,13,'dutch','728'),(164,13,'dutch','730'),(165,13,'dutch','732'),(166,13,'dutch','735'),(167,13,'dutch','740'),(168,13,'dutch','745'),(169,13,'dutch','750'),(170,13,'dutch','760'),(171,13,'dutch','ActiveHybrid 7'),(172,13,'dutch','840'),(173,13,'dutch','850'),(174,13,'dutch','i3'),(175,13,'dutch','M Models (All)'),(176,13,'dutch','M135'),(177,13,'dutch','M3'),(178,13,'dutch','M5'),(179,13,'dutch','M6'),(180,13,'dutch','X5 M'),(181,13,'dutch','X6 M'),(182,13,'dutch','Z3 M'),(183,13,'dutch','Z4 M'),(184,13,'dutch','Series X (All)'),(185,13,'dutch','ActiveHybrid X6'),(186,13,'dutch','X1'),(187,13,'dutch','X3'),(188,13,'dutch','X5'),(189,13,'dutch','X5 M'),(190,13,'dutch','X6'),(191,13,'dutch','X6 M'),(192,13,'dutch','Series Z (All)'),(193,13,'dutch','Z1'),(194,13,'dutch','Z3'),(195,13,'dutch','Z3 M'),(196,13,'dutch','Z4'),(197,13,'dutch','Z4 M'),(198,13,'dutch','Z8'),(199,14,'dutch','Arnage'),(200,14,'dutch','Azure'),(201,14,'dutch','Brooklands'),(202,14,'dutch','Continental (All)'),(203,14,'dutch','Continental'),(204,14,'dutch','Continental Flying Spur'),(205,14,'dutch','Continental GT'),(206,14,'dutch','Continental GTC'),(207,14,'dutch','Continental Supersports'),(208,14,'dutch','Eight'),(209,14,'dutch','Mulsanne'),(210,14,'dutch','Turbo R'),(211,14,'dutch','Turbo RT'),(212,14,'dutch','Turbo S'),(213,16,'dutch','BC3'),(214,16,'dutch','BS2'),(215,16,'dutch','BS4'),(216,16,'dutch','BS6'),(217,17,'dutch','EB 110'),(218,17,'dutch','Veyron'),(219,18,'dutch','Century'),(220,18,'dutch','Electra'),(221,18,'dutch','Enclave'),(222,18,'dutch','La Crosse'),(223,18,'dutch','Le Sabre'),(224,18,'dutch','Park Avenue'),(225,18,'dutch','Regal'),(226,18,'dutch','Riviera'),(227,18,'dutch','Roadmaster'),(228,18,'dutch','Skylark'),(229,19,'dutch','Allante'),(230,19,'dutch','ATS'),(231,19,'dutch','BLS'),(232,19,'dutch','CTS'),(233,19,'dutch','Deville'),(234,19,'dutch','Eldorado'),(235,19,'dutch','Escalade'),(236,19,'dutch','Fleetwood'),(237,19,'dutch','Seville'),(238,19,'dutch','SRX'),(239,19,'dutch','STS'),(240,19,'dutch','XLR'),(241,22,'dutch','2500'),(242,22,'dutch','Alero'),(243,22,'dutch','Astro'),(244,22,'dutch','Avalanche'),(245,22,'dutch','Aveo'),(246,22,'dutch','Beretta'),(247,22,'dutch','Blazer'),(248,22,'dutch','C1500'),(249,22,'dutch','Camaro'),(250,22,'dutch','Caprice'),(251,22,'dutch','Captiva'),(252,22,'dutch','Cavalier'),(253,22,'dutch','Chevelle'),(254,22,'dutch','Chevy Van'),(255,22,'dutch','Citation'),(256,22,'dutch','Colorado'),(257,22,'dutch','Corsica'),(258,22,'dutch','Cruze'),(259,22,'dutch','El Camino'),(260,22,'dutch','Epica'),(261,22,'dutch','Evanda'),(262,22,'dutch','Express'),(263,22,'dutch','G'),(264,22,'dutch','HHR'),(265,22,'dutch','Impala'),(266,22,'dutch','K1500'),(267,22,'dutch','K30'),(268,22,'dutch','Kalos'),(269,22,'dutch','Lacetti'),(270,22,'dutch','Lumina'),(271,22,'dutch','Malibu'),(272,22,'dutch','Matiz'),(273,22,'dutch','Nubira'),(274,22,'dutch','Orlando'),(275,22,'dutch','Rezzo'),(276,22,'dutch','S-10'),(277,22,'dutch','Silverado'),(278,22,'dutch','Spark'),(279,22,'dutch','SSR'),(280,22,'dutch','Suburban'),(281,22,'dutch','Tahoe'),(282,22,'dutch','Trailblazer'),(283,22,'dutch','Trans Sport'),(284,22,'dutch','Trax'),(285,22,'dutch','Venture'),(286,22,'dutch','Volt'),(287,23,'dutch','300 M'),(288,23,'dutch','300C'),(289,23,'dutch','Aspen'),(290,23,'dutch','Crossfire'),(291,23,'dutch','Daytona'),(292,23,'dutch','ES'),(293,23,'dutch','Grand Voyager'),(294,23,'dutch','GS'),(295,23,'dutch','GTS'),(296,23,'dutch','Imperial'),(297,23,'dutch','Le Baron'),(298,23,'dutch','Neon'),(299,23,'dutch','New Yorker'),(300,23,'dutch','Pacifica'),(301,23,'dutch','PT Cruiser'),(302,23,'dutch','Saratoga'),(303,23,'dutch','Sebring'),(304,23,'dutch','Stratus'),(305,23,'dutch','Valiant'),(306,23,'dutch','Viper'),(307,23,'dutch','Vision'),(308,23,'dutch','Voyager'),(309,24,'dutch','2 CV'),(310,24,'dutch','AX'),(311,24,'dutch','Berlingo'),(312,24,'dutch','BX'),(313,24,'dutch','C-Crosser'),(314,24,'dutch','C-Zero'),(315,24,'dutch','C1'),(316,24,'dutch','C2'),(317,24,'dutch','C3'),(318,24,'dutch','C3 Picasso'),(319,24,'dutch','C4'),(320,24,'dutch','C4 Aircross'),(321,24,'dutch','C4 Picasso'),(322,24,'dutch','C5'),(323,24,'dutch','C6'),(324,24,'dutch','C8'),(325,24,'dutch','CX'),(326,24,'dutch','DS'),(327,24,'dutch','DS3'),(328,24,'dutch','DS4'),(329,24,'dutch','DS5'),(330,24,'dutch','Evasion'),(331,24,'dutch','Grand C4 Picasso'),(332,24,'dutch','GSA'),(333,24,'dutch','Jumper'),(334,24,'dutch','Jumpy'),(335,24,'dutch','Nemo'),(336,24,'dutch','SAXO'),(337,24,'dutch','SM'),(338,24,'dutch','Visa'),(339,24,'dutch','Xantia'),(340,24,'dutch','XM'),(341,24,'dutch','Xsara'),(342,24,'dutch','Xsara Picasso'),(343,24,'dutch','ZX'),(344,26,'dutch','C1'),(345,26,'dutch','C2'),(346,26,'dutch','C3'),(347,26,'dutch','C4'),(348,26,'dutch','C5'),(349,26,'dutch','C6'),(350,26,'dutch','C7'),(351,26,'dutch','Z06'),(352,26,'dutch','ZR 1'),(353,27,'dutch','Dokker'),(354,27,'dutch','Duster'),(355,27,'dutch','Lodgy'),(356,27,'dutch','Logan'),(357,27,'dutch','Logan Pick-Up'),(358,27,'dutch','Pick Up'),(359,27,'dutch','Sandero'),(360,28,'dutch','Espero'),(361,28,'dutch','Evanda'),(362,28,'dutch','Kalos'),(363,28,'dutch','Korando'),(364,28,'dutch','Lacetti'),(365,28,'dutch','Lanos'),(366,28,'dutch','Leganza'),(367,28,'dutch','Matiz'),(368,28,'dutch','Musso'),(369,28,'dutch','Nexia'),(370,28,'dutch','Nubira'),(371,28,'dutch','Rezzo'),(372,28,'dutch','Tacuma'),(373,29,'dutch','Applause'),(374,29,'dutch','Charade'),(375,29,'dutch','Charmant'),(376,29,'dutch','Copen'),(377,29,'dutch','Cuore'),(378,29,'dutch','Feroza/Sportrak'),(379,29,'dutch','Freeclimber'),(380,29,'dutch','Gran Move'),(381,29,'dutch','Hijet'),(382,29,'dutch','MATERIA'),(383,29,'dutch','Move'),(384,29,'dutch','Rocky/Fourtrak'),(385,29,'dutch','Sirion'),(386,29,'dutch','Terios'),(387,29,'dutch','TREVIS'),(388,29,'dutch','YRV'),(389,30,'dutch','Guarà'),(390,30,'dutch','Pantera'),(391,31,'dutch','Avenger'),(392,31,'dutch','Caliber'),(393,31,'dutch','Challenger'),(394,31,'dutch','Charger'),(395,31,'dutch','Dakota'),(396,31,'dutch','Demon'),(397,31,'dutch','Durango'),(398,31,'dutch','Grand Caravan'),(399,31,'dutch','Hornet'),(400,31,'dutch','Journey'),(401,31,'dutch','Magnum'),(402,31,'dutch','Neon'),(403,31,'dutch','Nitro'),(404,31,'dutch','RAM'),(405,31,'dutch','Stealth'),(406,31,'dutch','Viper'),(407,32,'dutch','208'),(408,32,'dutch','246'),(409,32,'dutch','250'),(410,32,'dutch','275'),(411,32,'dutch','288'),(412,32,'dutch','308'),(413,32,'dutch','328'),(414,32,'dutch','330'),(415,32,'dutch','348'),(416,32,'dutch','360'),(417,32,'dutch','365'),(418,32,'dutch','400'),(419,32,'dutch','412'),(420,32,'dutch','456'),(421,32,'dutch','458'),(422,32,'dutch','512'),(423,32,'dutch','550'),(424,32,'dutch','575'),(425,32,'dutch','599 GTB'),(426,32,'dutch','612'),(427,32,'dutch','750'),(428,32,'dutch','California'),(429,32,'dutch','Daytona'),(430,32,'dutch','Dino GT4'),(431,32,'dutch','Enzo Ferrari'),(432,32,'dutch','F12'),(433,32,'dutch','F355'),(434,32,'dutch','F40'),(435,32,'dutch','F430'),(436,32,'dutch','F50'),(437,32,'dutch','FF'),(438,32,'dutch','LaFerrari'),(439,32,'dutch','Mondial'),(440,32,'dutch','Superamerica'),(441,32,'dutch','Testarossa'),(442,33,'dutch','124'),(443,33,'dutch','126'),(444,33,'dutch','127'),(445,33,'dutch','130'),(446,33,'dutch','131'),(447,33,'dutch','500'),(448,33,'dutch','500C'),(449,33,'dutch','500L'),(450,33,'dutch','Barchetta'),(451,33,'dutch','Brava'),(452,33,'dutch','Bravo'),(453,33,'dutch','Cinquecento'),(454,33,'dutch','Coupe'),(455,33,'dutch','Croma'),(456,33,'dutch','Dino'),(457,33,'dutch','Doblo'),(458,33,'dutch','Ducato'),(459,33,'dutch','Fiorino'),(460,33,'dutch','Freemont'),(461,33,'dutch','Grande Punto'),(462,33,'dutch','Idea'),(463,33,'dutch','Linea'),(464,33,'dutch','Marea'),(465,33,'dutch','Marengo'),(466,33,'dutch','Multipla'),(467,33,'dutch','New Panda'),(468,33,'dutch','Palio'),(469,33,'dutch','Panda'),(470,33,'dutch','Punto'),(471,33,'dutch','Punto Evo'),(472,33,'dutch','Qubo'),(473,33,'dutch','Regata'),(474,33,'dutch','Ritmo'),(475,33,'dutch','Scudo'),(476,33,'dutch','Sedici'),(477,33,'dutch','Seicento'),(478,33,'dutch','Spider Europa'),(479,33,'dutch','Stilo'),(480,33,'dutch','Strada'),(481,33,'dutch','Tempra'),(482,33,'dutch','Tipo'),(483,33,'dutch','Ulysse'),(484,33,'dutch','Uno'),(485,33,'dutch','X 1/9'),(486,34,'dutch','Karma'),(487,35,'dutch','Aerostar'),(488,35,'dutch','B-Max'),(489,35,'dutch','Bronco'),(490,35,'dutch','C-Max'),(491,35,'dutch','Capri'),(492,35,'dutch','Cougar'),(493,35,'dutch','Courier'),(494,35,'dutch','Crown'),(495,35,'dutch','Econoline'),(496,35,'dutch','Econovan'),(497,35,'dutch','Edge'),(498,35,'dutch','Escape'),(499,35,'dutch','Escort'),(500,35,'dutch','Excursion'),(501,35,'dutch','Expedition'),(502,35,'dutch','Explorer'),(503,35,'dutch','Express'),(504,35,'dutch','F 150'),(505,35,'dutch','F 250'),(506,35,'dutch','F 350'),(507,35,'dutch','Fairlane'),(508,35,'dutch','Falcon'),(509,35,'dutch','Fiesta'),(510,35,'dutch','Flex'),(511,35,'dutch','Focus'),(512,35,'dutch','Fusion'),(513,35,'dutch','Galaxy'),(514,35,'dutch','Granada'),(515,35,'dutch','Grand C-Max'),(516,35,'dutch','GT'),(517,35,'dutch','Ka'),(518,35,'dutch','Kuga'),(519,35,'dutch','Maverick'),(520,35,'dutch','Mercury'),(521,35,'dutch','Mondeo'),(522,35,'dutch','Mustang'),(523,35,'dutch','Orion'),(524,35,'dutch','Probe'),(525,35,'dutch','Puma'),(526,35,'dutch','Ranger'),(527,35,'dutch','S-Max'),(528,35,'dutch','Scorpio'),(529,35,'dutch','Sierra'),(530,35,'dutch','Sportka'),(531,35,'dutch','Streetka'),(532,35,'dutch','Taunus'),(533,35,'dutch','Taurus'),(534,35,'dutch','Thunderbird'),(535,35,'dutch','Tourneo'),(536,35,'dutch','Transit (All)'),(537,35,'dutch','Transit'),(538,35,'dutch','Transit Connect'),(539,35,'dutch','Windstar'),(540,36,'dutch','Acadia'),(541,36,'dutch','Envoy'),(542,36,'dutch','Safari'),(543,36,'dutch','Savana'),(544,36,'dutch','Sierra'),(545,36,'dutch','Sonoma'),(546,36,'dutch','Syclone'),(547,36,'dutch','Typhoon'),(548,36,'dutch','Vandura'),(549,36,'dutch','Yukon'),(550,37,'dutch','Sonique'),(551,40,'dutch','Accord'),(552,40,'dutch','Aerodeck'),(553,40,'dutch','Civic'),(554,40,'dutch','Concerto'),(555,40,'dutch','CR-V'),(556,40,'dutch','CR-Z'),(557,40,'dutch','CRX'),(558,40,'dutch','Element'),(559,40,'dutch','FR-V'),(560,40,'dutch','HR-V'),(561,40,'dutch','Insight'),(562,40,'dutch','Integra'),(563,40,'dutch','Jazz'),(564,40,'dutch','Legend'),(565,40,'dutch','Logo'),(566,40,'dutch','NSX'),(567,40,'dutch','Odyssey'),(568,40,'dutch','Prelude'),(569,40,'dutch','S2000'),(570,40,'dutch','Shuttle'),(571,40,'dutch','Stream'),(572,41,'dutch','H1'),(573,41,'dutch','H2'),(574,41,'dutch','H3'),(575,42,'dutch','Accent'),(576,42,'dutch','Atos'),(577,42,'dutch','Azera'),(578,42,'dutch','Coupe'),(579,42,'dutch','Elantra'),(580,42,'dutch','Excel'),(581,42,'dutch','Galloper'),(582,42,'dutch','Genesis'),(583,42,'dutch','Getz'),(584,42,'dutch','Grandeur'),(585,42,'dutch','H 100'),(586,42,'dutch','H 200'),(587,42,'dutch','H-1'),(588,42,'dutch','H-1 Starex'),(589,42,'dutch','i10'),(590,42,'dutch','i20'),(591,42,'dutch','i30'),(592,42,'dutch','i40'),(593,42,'dutch','i50'),(594,42,'dutch','ix20'),(595,42,'dutch','ix35'),(596,42,'dutch','ix55'),(597,42,'dutch','Lantra'),(598,42,'dutch','Matrix'),(599,42,'dutch','Pony'),(600,42,'dutch','S-Coupe'),(601,42,'dutch','Santa Fe'),(602,42,'dutch','Santamo'),(603,42,'dutch','Sonata'),(604,42,'dutch','Terracan'),(605,42,'dutch','Trajet'),(606,42,'dutch','Tucson'),(607,42,'dutch','Veloster'),(608,42,'dutch','Veracruz'),(609,42,'dutch','XG 30'),(610,42,'dutch','XG 350'),(611,43,'dutch','EX35'),(612,43,'dutch','EX37'),(613,43,'dutch','FX'),(614,43,'dutch','G35'),(615,43,'dutch','G37'),(616,43,'dutch','M30'),(617,43,'dutch','M35'),(618,43,'dutch','M37'),(619,43,'dutch','Q45'),(620,43,'dutch','QX56'),(621,44,'dutch','Campo'),(622,44,'dutch','D-Max'),(623,44,'dutch','Gemini'),(624,44,'dutch','Midi'),(625,44,'dutch','PICK UP'),(626,44,'dutch','Trooper'),(627,45,'dutch','Massif'),(628,46,'dutch','Daimler'),(629,46,'dutch','E-Type'),(630,46,'dutch','F-Type'),(631,46,'dutch','MK II'),(632,46,'dutch','S-Type'),(633,46,'dutch','X-Type'),(634,46,'dutch','XF'),(635,46,'dutch','XJ'),(636,46,'dutch','XJ12'),(637,46,'dutch','XJ40'),(638,46,'dutch','XJ6'),(639,46,'dutch','XJ8'),(640,46,'dutch','XJR'),(641,46,'dutch','XJS'),(642,46,'dutch','XJSC'),(643,46,'dutch','XK'),(644,46,'dutch','XKR'),(645,47,'dutch','Cherokee'),(646,47,'dutch','CJ'),(647,47,'dutch','Comanche'),(648,47,'dutch','Commander'),(649,47,'dutch','Compass'),(650,47,'dutch','Grand Cherokee'),(651,47,'dutch','Patriot'),(652,47,'dutch','Renegade'),(653,47,'dutch','Wagoneer'),(654,47,'dutch','Willys'),(655,47,'dutch','Wrangler'),(656,48,'dutch','X-BOW'),(657,49,'dutch','Besta'),(658,49,'dutch','Borrego'),(659,49,'dutch','Carens'),(660,49,'dutch','Carnival'),(661,49,'dutch','cee\'d'),(662,49,'dutch','cee\'d Sportswagon'),(663,49,'dutch','Cerato'),(664,49,'dutch','Clarus'),(665,49,'dutch','Elan'),(666,49,'dutch','Joice'),(667,49,'dutch','K2500'),(668,49,'dutch','K2700'),(669,49,'dutch','Leo'),(670,49,'dutch','Magentis'),(671,49,'dutch','Mentor'),(672,49,'dutch','Mini'),(673,49,'dutch','Opirus'),(674,49,'dutch','Optima'),(675,49,'dutch','Picanto'),(676,49,'dutch','Pregio'),(677,49,'dutch','Pride'),(678,49,'dutch','pro_cee\'d'),(679,49,'dutch','Retona'),(680,49,'dutch','Rio'),(681,49,'dutch','Roadster'),(682,49,'dutch','Rocsta'),(683,49,'dutch','Sephia'),(684,49,'dutch','Shuma'),(685,49,'dutch','Sorento'),(686,49,'dutch','Soul'),(687,49,'dutch','Sportage'),(688,49,'dutch','Venga'),(689,50,'dutch','CCR'),(690,51,'dutch','110'),(691,51,'dutch','111'),(692,51,'dutch','112'),(693,51,'dutch','1200'),(694,51,'dutch','2107'),(695,51,'dutch','2110'),(696,51,'dutch','2111'),(697,51,'dutch','2112'),(698,51,'dutch','Aleko'),(699,51,'dutch','Forma'),(700,51,'dutch','Kalina'),(701,51,'dutch','Niva'),(702,51,'dutch','Nova'),(703,51,'dutch','Priora'),(704,51,'dutch','Samara'),(705,52,'dutch','Aventador'),(706,52,'dutch','Countach'),(707,52,'dutch','Diablo'),(708,52,'dutch','Espada'),(709,52,'dutch','Gallardo'),(710,52,'dutch','Jalpa'),(711,52,'dutch','LM'),(712,52,'dutch','Miura'),(713,52,'dutch','Murciélago'),(714,52,'dutch','Urraco'),(715,53,'dutch','Beta'),(716,53,'dutch','Dedra'),(717,53,'dutch','Delta'),(718,53,'dutch','Flaminia'),(719,53,'dutch','Flavia'),(720,53,'dutch','Fulvia'),(721,53,'dutch','Gamma'),(722,53,'dutch','Kappa'),(723,53,'dutch','Lybra'),(724,53,'dutch','MUSA'),(725,53,'dutch','Phedra'),(726,53,'dutch','Prisma'),(727,53,'dutch','Stratos'),(728,53,'dutch','Thema'),(729,53,'dutch','Thesis'),(730,53,'dutch','Voyager'),(731,53,'dutch','Ypsilon'),(732,53,'dutch','Zeta'),(733,54,'dutch','Defender'),(734,54,'dutch','Discovery'),(735,54,'dutch','Freelander'),(736,54,'dutch','Range Rover'),(737,54,'dutch','Range Rover Evoque'),(738,54,'dutch','Range Rover Sport'),(739,54,'dutch','Serie I'),(740,54,'dutch','Serie II'),(741,54,'dutch','Serie III'),(742,55,'dutch','CV-9'),(743,55,'dutch','S'),(744,55,'dutch','SC2'),(745,55,'dutch','SC4'),(746,56,'dutch','CT 200h'),(747,56,'dutch','ES Series (All)'),(748,56,'dutch','ES 300'),(749,56,'dutch','ES 330'),(750,56,'dutch','ES 350'),(751,56,'dutch','GS Series (All)'),(752,56,'dutch','GS 250'),(753,56,'dutch','GS 300'),(754,56,'dutch','GS 350'),(755,56,'dutch','GS 430'),(756,56,'dutch','GS 450'),(757,56,'dutch','GS 460'),(758,56,'dutch','GX 470'),(759,56,'dutch','IS Series (All)'),(760,56,'dutch','IS 200'),(761,56,'dutch','IS 220'),(762,56,'dutch','IS 250'),(763,56,'dutch','IS 300'),(764,56,'dutch','IS 350'),(765,56,'dutch','IS-F'),(766,56,'dutch','LS Series (All)'),(767,56,'dutch','LS 400'),(768,56,'dutch','LS 430'),(769,56,'dutch','LS 460'),(770,56,'dutch','LS 600'),(771,56,'dutch','LX Series (All)'),(772,56,'dutch','LX 470'),(773,56,'dutch','LX 570'),(774,56,'dutch','RX Series (All)'),(775,56,'dutch','RX 300'),(776,56,'dutch','RX 330'),(777,56,'dutch','RX 350'),(778,56,'dutch','RX 400'),(779,56,'dutch','RX 450'),(780,56,'dutch','SC 400'),(781,56,'dutch','SC 430'),(782,57,'dutch','Ambra'),(783,57,'dutch','Nova'),(784,57,'dutch','Optima'),(785,57,'dutch','X - Too'),(786,58,'dutch','Aviator'),(787,58,'dutch','Continental'),(788,58,'dutch','LS'),(789,58,'dutch','Mark'),(790,58,'dutch','Navigator'),(791,58,'dutch','Town Car'),(792,59,'dutch','340 R'),(793,59,'dutch','Cortina'),(794,59,'dutch','Elan'),(795,59,'dutch','Elise'),(796,59,'dutch','Elite'),(797,59,'dutch','Esprit'),(798,59,'dutch','Europa'),(799,59,'dutch','Evora'),(800,59,'dutch','Excel'),(801,59,'dutch','Exige'),(802,59,'dutch','Super Seven'),(803,60,'dutch','MGA'),(804,60,'dutch','MGB'),(805,60,'dutch','MGF'),(806,60,'dutch','Midget'),(807,60,'dutch','Montego'),(808,60,'dutch','TD'),(809,60,'dutch','TF'),(810,60,'dutch','ZR'),(811,60,'dutch','ZS'),(812,60,'dutch','ZT'),(813,61,'dutch','Cabrio Series (All)'),(814,61,'dutch','Cooper Cabrio'),(815,61,'dutch','Cooper D Cabrio'),(816,61,'dutch','Cooper S Cabrio'),(817,61,'dutch','Cooper SD Cabrio'),(818,61,'dutch','John Cooper Works Cabrio'),(819,61,'dutch','One Cabrio'),(820,61,'dutch','Clubman Series (All)'),(821,61,'dutch','Cooper Clubman'),(822,61,'dutch','Cooper D Clubman'),(823,61,'dutch','Cooper S Clubman'),(824,61,'dutch','Cooper SD Clubman'),(825,61,'dutch','John Cooper Works Clubman'),(826,61,'dutch','One Clubman'),(827,61,'dutch','One D Clubman'),(828,61,'dutch','Clubvan'),(829,61,'dutch','Countryman Series (All)'),(830,61,'dutch','Cooper Countryman'),(831,61,'dutch','Cooper D Countryman'),(832,61,'dutch','Cooper S Countryman'),(833,61,'dutch','Cooper SD Countryman'),(834,61,'dutch','John Cooper Works Countryman'),(835,61,'dutch','One Countryman'),(836,61,'dutch','One D Countryman'),(837,61,'dutch','Coupe Series (All)'),(838,61,'dutch','Cooper Coupé'),(839,61,'dutch','Cooper S Coupé'),(840,61,'dutch','Cooper SD Coupé'),(841,61,'dutch','John Cooper Works Coupé'),(842,61,'dutch','MINI (All)'),(843,61,'dutch','1000'),(844,61,'dutch','1300'),(845,61,'dutch','Cooper'),(846,61,'dutch','Cooper D'),(847,61,'dutch','Cooper S'),(848,61,'dutch','Cooper SD'),(849,61,'dutch','John Cooper Works'),(850,61,'dutch','ONE'),(851,61,'dutch','One D'),(852,61,'dutch','Paceman Series (All)'),(853,61,'dutch','Cooper D Paceman'),(854,61,'dutch','Cooper Paceman'),(855,61,'dutch','Cooper S Paceman'),(856,61,'dutch','Cooper SD Paceman'),(857,61,'dutch','John Cooper Works Paceman'),(858,61,'dutch','Roadster Series (All)'),(859,61,'dutch','Cooper Roadster'),(860,61,'dutch','Cooper S Roadster'),(861,61,'dutch','Cooper SD Roadster'),(862,61,'dutch','John Cooper Works Roadster'),(863,63,'dutch','222'),(864,63,'dutch','224'),(865,63,'dutch','228'),(866,63,'dutch','3200'),(867,63,'dutch','418'),(868,63,'dutch','420'),(869,63,'dutch','4200'),(870,63,'dutch','422'),(871,63,'dutch','424'),(872,63,'dutch','430'),(873,63,'dutch','Biturbo'),(874,63,'dutch','Ghibli'),(875,63,'dutch','GranCabrio'),(876,63,'dutch','Gransport'),(877,63,'dutch','Granturismo'),(878,63,'dutch','Indy'),(879,63,'dutch','Karif'),(880,63,'dutch','MC12'),(881,63,'dutch','Merak'),(882,63,'dutch','Quattroporte'),(883,63,'dutch','Shamal'),(884,63,'dutch','Spyder'),(885,64,'dutch','57'),(886,64,'dutch','62'),(887,65,'dutch','121'),(888,65,'dutch','2'),(889,65,'dutch','3'),(890,65,'dutch','323'),(891,65,'dutch','5'),(892,65,'dutch','6'),(893,65,'dutch','626'),(894,65,'dutch','929'),(895,65,'dutch','B series'),(896,65,'dutch','Bongo'),(897,65,'dutch','BT-50'),(898,65,'dutch','CX-5'),(899,65,'dutch','CX-7'),(900,65,'dutch','CX-9'),(901,65,'dutch','Demio'),(902,65,'dutch','E series'),(903,65,'dutch','Millenia'),(904,65,'dutch','MPV'),(905,65,'dutch','MX-3'),(906,65,'dutch','MX-5'),(907,65,'dutch','MX-6'),(908,65,'dutch','Premacy'),(909,65,'dutch','Protege'),(910,65,'dutch','RX-6'),(911,65,'dutch','RX-7'),(912,65,'dutch','RX-8'),(913,65,'dutch','Tribute'),(914,65,'dutch','Xedos'),(915,66,'dutch','MP4-12C'),(916,67,'dutch','190'),(917,67,'dutch','200'),(918,67,'dutch','220'),(919,67,'dutch','230'),(920,67,'dutch','240'),(921,67,'dutch','250'),(922,67,'dutch','260'),(923,67,'dutch','270'),(924,67,'dutch','280'),(925,67,'dutch','290'),(926,67,'dutch','300'),(927,67,'dutch','320'),(928,67,'dutch','350'),(929,67,'dutch','380'),(930,67,'dutch','400'),(931,67,'dutch','416'),(932,67,'dutch','420'),(933,67,'dutch','450'),(934,67,'dutch','500'),(935,67,'dutch','560'),(936,67,'dutch','600'),(937,67,'dutch','A-Klasse (All)'),(938,67,'dutch','A 140'),(939,67,'dutch','A 150'),(940,67,'dutch','A 160'),(941,67,'dutch','A 170'),(942,67,'dutch','A 180'),(943,67,'dutch','A 190'),(944,67,'dutch','A 200'),(945,67,'dutch','A 210'),(946,67,'dutch','A 220'),(947,67,'dutch','A 250'),(948,67,'dutch','A 45 AMG'),(949,67,'dutch','B-Klasse (All)'),(950,67,'dutch','B 150'),(951,67,'dutch','B 160'),(952,67,'dutch','B 170'),(953,67,'dutch','B 180'),(954,67,'dutch','B 200'),(955,67,'dutch','B 220'),(956,67,'dutch','B 250'),(957,67,'dutch','C-Klasse (All)'),(958,67,'dutch','C 160'),(959,67,'dutch','C 180'),(960,67,'dutch','C 200'),(961,67,'dutch','C 220'),(962,67,'dutch','C 230'),(963,67,'dutch','C 240'),(964,67,'dutch','C 250'),(965,67,'dutch','C 270'),(966,67,'dutch','C 280'),(967,67,'dutch','C 30 AMG'),(968,67,'dutch','C 300'),(969,67,'dutch','C 32 AMG'),(970,67,'dutch','C 320'),(971,67,'dutch','C 350'),(972,67,'dutch','C 36 AMG'),(973,67,'dutch','C 43 AMG'),(974,67,'dutch','C 55 AMG'),(975,67,'dutch','C 63 AMG'),(976,67,'dutch','CE-Klasse (All)'),(977,67,'dutch','CE 200'),(978,67,'dutch','CE 220'),(979,67,'dutch','CE 230'),(980,67,'dutch','CE 280'),(981,67,'dutch','CE 300'),(982,67,'dutch','Citan'),(983,67,'dutch','CL-Klasse (All)'),(984,67,'dutch','CL 160'),(985,67,'dutch','CL 180'),(986,67,'dutch','CL 200'),(987,67,'dutch','CL 220'),(988,67,'dutch','CL 230'),(989,67,'dutch','CL 320'),(990,67,'dutch','CL 420'),(991,67,'dutch','CL 500'),(992,67,'dutch','CL 55 AMG'),(993,67,'dutch','CL 600'),(994,67,'dutch','CL 63 AMG'),(995,67,'dutch','CL 65 AMG'),(996,67,'dutch','CLA-Klasse (All)'),(997,67,'dutch','CLA 180'),(998,67,'dutch','CLA 200'),(999,67,'dutch','CLA 220'),(1000,67,'dutch','CLA 250'),(1001,67,'dutch','CLC-Klasse (All)'),(1002,67,'dutch','CLC 160'),(1003,67,'dutch','CLC 180'),(1004,67,'dutch','CLC 200'),(1005,67,'dutch','CLC 220'),(1006,67,'dutch','CLC 230'),(1007,67,'dutch','CLC 250'),(1008,67,'dutch','CLC 350'),(1009,67,'dutch','CLK-Klasse (All)'),(1010,67,'dutch','CLK 200'),(1011,67,'dutch','CLK 220'),(1012,67,'dutch','CLK 230'),(1013,67,'dutch','CLK 240'),(1014,67,'dutch','CLK 270'),(1015,67,'dutch','CLK 280'),(1016,67,'dutch','CLK 320'),(1017,67,'dutch','CLK 350'),(1018,67,'dutch','CLK 430'),(1019,67,'dutch','CLK 500'),(1020,67,'dutch','CLK 55 AMG'),(1021,67,'dutch','CLK 63 AMG'),(1022,67,'dutch','CLS-Klasse (All)'),(1023,67,'dutch','CLS 250'),(1024,67,'dutch','CLS 280'),(1025,67,'dutch','CLS 300'),(1026,67,'dutch','CLS 320'),(1027,67,'dutch','CLS 350'),(1028,67,'dutch','CLS 500'),(1029,67,'dutch','CLS 55 AMG'),(1030,67,'dutch','CLS 63 AMG'),(1031,67,'dutch','E-Klasse (All)'),(1032,67,'dutch','E 200'),(1033,67,'dutch','E 220'),(1034,67,'dutch','E 230'),(1035,67,'dutch','E 240'),(1036,67,'dutch','E 250'),(1037,67,'dutch','E 260'),(1038,67,'dutch','E 270'),(1039,67,'dutch','E 280'),(1040,67,'dutch','E 290'),(1041,67,'dutch','E 300'),(1042,67,'dutch','E 320'),(1043,67,'dutch','E 350'),(1044,67,'dutch','E 36 AMG'),(1045,67,'dutch','E 400'),(1046,67,'dutch','E 420'),(1047,67,'dutch','E 430'),(1048,67,'dutch','E 50'),(1049,67,'dutch','E 500'),(1050,67,'dutch','E 55 AMG'),(1051,67,'dutch','E 60 AMG'),(1052,67,'dutch','E 63 AMG'),(1053,67,'dutch','G-Klasse (All)'),(1054,67,'dutch','G 230'),(1055,67,'dutch','G 240'),(1056,67,'dutch','G 250'),(1057,67,'dutch','G 270'),(1058,67,'dutch','G 280'),(1059,67,'dutch','G 290'),(1060,67,'dutch','G 300'),(1061,67,'dutch','G 320'),(1062,67,'dutch','G 350'),(1063,67,'dutch','G 400'),(1064,67,'dutch','G 500'),(1065,67,'dutch','G 55 AMG'),(1066,67,'dutch','G 63 AMG'),(1067,67,'dutch','G 65 AMG'),(1068,67,'dutch','GL-Klasse (All)'),(1069,67,'dutch','GL 320'),(1070,67,'dutch','GL 350'),(1071,67,'dutch','GL 420'),(1072,67,'dutch','GL 450'),(1073,67,'dutch','GL 500'),(1074,67,'dutch','GL 55 AMG'),(1075,67,'dutch','GL 63 AMG'),(1076,67,'dutch','GLK-Klasse (All)'),(1077,67,'dutch','GLK 200'),(1078,67,'dutch','GLK 220'),(1079,67,'dutch','GLK 250'),(1080,67,'dutch','GLK 280'),(1081,67,'dutch','GLK 300'),(1082,67,'dutch','GLK 320'),(1083,67,'dutch','GLK 350'),(1084,67,'dutch','MB 100'),(1085,67,'dutch','ML-Klasse (All)'),(1086,67,'dutch','ML 230'),(1087,67,'dutch','ML 250'),(1088,67,'dutch','ML 270'),(1089,67,'dutch','ML 280'),(1090,67,'dutch','ML 300'),(1091,67,'dutch','ML 320'),(1092,67,'dutch','ML 350'),(1093,67,'dutch','ML 400'),(1094,67,'dutch','ML 420'),(1095,67,'dutch','ML 430'),(1096,67,'dutch','ML 450'),(1097,67,'dutch','ML 500'),(1098,67,'dutch','ML 55 AMG'),(1099,67,'dutch','ML 63 AMG'),(1100,67,'dutch','R-Klasse (All)'),(1101,67,'dutch','R 280'),(1102,67,'dutch','R 300'),(1103,67,'dutch','R 320'),(1104,67,'dutch','R 350'),(1105,67,'dutch','R 500'),(1106,67,'dutch','R 63 AMG'),(1107,67,'dutch','S-Klasse (All)'),(1108,67,'dutch','S 250'),(1109,67,'dutch','S 260'),(1110,67,'dutch','S 280'),(1111,67,'dutch','S 300'),(1112,67,'dutch','S 320'),(1113,67,'dutch','S 350'),(1114,67,'dutch','S 400'),(1115,67,'dutch','S 420'),(1116,67,'dutch','S 430'),(1117,67,'dutch','S 450'),(1118,67,'dutch','S 500'),(1119,67,'dutch','S 55'),(1120,67,'dutch','S 550'),(1121,67,'dutch','S 600'),(1122,67,'dutch','S 63 AMG'),(1123,67,'dutch','S 65 AMG'),(1124,67,'dutch','SL-Klasse (All)'),(1125,67,'dutch','SL 280'),(1126,67,'dutch','SL 300'),(1127,67,'dutch','SL 320'),(1128,67,'dutch','SL 350'),(1129,67,'dutch','SL 380'),(1130,67,'dutch','SL 420'),(1131,67,'dutch','SL 450'),(1132,67,'dutch','SL 500'),(1133,67,'dutch','SL 55 AMG'),(1134,67,'dutch','SL 560'),(1135,67,'dutch','SL 60 AMG'),(1136,67,'dutch','SL 600'),(1137,67,'dutch','SL 63 AMG'),(1138,67,'dutch','SL 65 AMG'),(1139,67,'dutch','SL 70 AMG'),(1140,67,'dutch','SL 73 AMG'),(1141,67,'dutch','SLK-Klasse (All)'),(1142,67,'dutch','SLK 200'),(1143,67,'dutch','SLK 230'),(1144,67,'dutch','SLK 250'),(1145,67,'dutch','SLK 280'),(1146,67,'dutch','SLK 300'),(1147,67,'dutch','SLK 32 AMG'),(1148,67,'dutch','SLK 320'),(1149,67,'dutch','SLK 350'),(1150,67,'dutch','SLK 55 AMG'),(1151,67,'dutch','SLR'),(1152,67,'dutch','SLS AMG'),(1153,67,'dutch','Sprinter'),(1154,67,'dutch','V-Klasse (All)'),(1155,67,'dutch','V 200'),(1156,67,'dutch','V 220'),(1157,67,'dutch','V 230'),(1158,67,'dutch','V 280'),(1159,67,'dutch','Vaneo'),(1160,67,'dutch','Vario'),(1161,67,'dutch','Viano'),(1162,67,'dutch','Vito'),(1163,68,'dutch','DUÈ'),(1164,68,'dutch','M.Go'),(1165,68,'dutch','M-8'),(1166,68,'dutch','MC1'),(1167,68,'dutch','MC2'),(1168,69,'dutch','3000 GT'),(1169,69,'dutch','ASX'),(1170,69,'dutch','Canter'),(1171,69,'dutch','Carisma'),(1172,69,'dutch','Colt'),(1173,69,'dutch','Cordia'),(1174,69,'dutch','Cosmos'),(1175,69,'dutch','Diamante'),(1176,69,'dutch','Eclipse'),(1177,69,'dutch','Galant'),(1178,69,'dutch','Galloper'),(1179,69,'dutch','Grandis'),(1180,69,'dutch','i-MiEV'),(1181,69,'dutch','L200'),(1182,69,'dutch','L300'),(1183,69,'dutch','L400'),(1184,69,'dutch','Lancer'),(1185,69,'dutch','Mirage'),(1186,69,'dutch','Montero'),(1187,69,'dutch','Outlander'),(1188,69,'dutch','Pajero'),(1189,69,'dutch','Pajero Pinin'),(1190,69,'dutch','Pick-up'),(1191,69,'dutch','Santamo'),(1192,69,'dutch','Sapporo'),(1193,69,'dutch','Sigma'),(1194,69,'dutch','Space Gear'),(1195,69,'dutch','Space Runner'),(1196,69,'dutch','Space Star'),(1197,69,'dutch','Space Wagon'),(1198,69,'dutch','Starion'),(1199,69,'dutch','Tredia'),(1200,70,'dutch','4/4'),(1201,70,'dutch','Aero 8'),(1202,70,'dutch','Plus 4'),(1203,70,'dutch','Plus 8'),(1204,70,'dutch','Roadster'),(1205,72,'dutch','100 NX'),(1206,72,'dutch','200 SX'),(1207,72,'dutch','240 SX'),(1208,72,'dutch','280 ZX'),(1209,72,'dutch','300 ZX'),(1210,72,'dutch','350Z'),(1211,72,'dutch','370Z'),(1212,72,'dutch','Almera'),(1213,72,'dutch','Almera Tino'),(1214,72,'dutch','Altima'),(1215,72,'dutch','Armada'),(1216,72,'dutch','Bluebird'),(1217,72,'dutch','Cabstar'),(1218,72,'dutch','Cargo'),(1219,72,'dutch','Cherry'),(1220,72,'dutch','Cube'),(1221,72,'dutch','Evalia'),(1222,72,'dutch','Frontier'),(1223,72,'dutch','GT-R'),(1224,72,'dutch','Interstar'),(1225,72,'dutch','Juke'),(1226,72,'dutch','King Cab'),(1227,72,'dutch','Kubistar'),(1228,72,'dutch','Laurel'),(1229,72,'dutch','Leaf'),(1230,72,'dutch','Maxima'),(1231,72,'dutch','Micra'),(1232,72,'dutch','Murano'),(1233,72,'dutch','Navara'),(1234,72,'dutch','Note'),(1235,72,'dutch','NP 300'),(1236,72,'dutch','NV200'),(1237,72,'dutch','NV400'),(1238,72,'dutch','Pathfinder'),(1239,72,'dutch','Patrol'),(1240,72,'dutch','PickUp'),(1241,72,'dutch','Pixo'),(1242,72,'dutch','Prairie'),(1243,72,'dutch','Primastar'),(1244,72,'dutch','Primera'),(1245,72,'dutch','Qashqai'),(1246,72,'dutch','Qashqai+2'),(1247,72,'dutch','Quest'),(1248,72,'dutch','Sentra'),(1249,72,'dutch','Serena'),(1250,72,'dutch','Silvia'),(1251,72,'dutch','Skyline'),(1252,72,'dutch','Sunny'),(1253,72,'dutch','Terrano'),(1254,72,'dutch','Tiida'),(1255,72,'dutch','Titan'),(1256,72,'dutch','Trade'),(1257,72,'dutch','Urvan'),(1258,72,'dutch','Vanette'),(1259,72,'dutch','X-Trail'),(1260,73,'dutch','Bravada'),(1261,73,'dutch','Custom Cruiser'),(1262,73,'dutch','Cutlass'),(1263,73,'dutch','Delta 88'),(1264,73,'dutch','Silhouette'),(1265,73,'dutch','Supreme'),(1266,73,'dutch','Toronado'),(1267,74,'dutch','Adam'),(1268,74,'dutch','Agila'),(1269,74,'dutch','Ampera'),(1270,74,'dutch','Antara'),(1271,74,'dutch','Arena'),(1272,74,'dutch','Ascona'),(1273,74,'dutch','Astra'),(1274,74,'dutch','Calibra'),(1275,74,'dutch','Campo'),(1276,74,'dutch','Cascada'),(1277,74,'dutch','Cavalier'),(1278,74,'dutch','Combo'),(1279,74,'dutch','Commodore'),(1280,74,'dutch','Corsa'),(1281,74,'dutch','Diplomat'),(1282,74,'dutch','Frontera'),(1283,74,'dutch','GT'),(1284,74,'dutch','Insignia'),(1285,74,'dutch','Kadett'),(1286,74,'dutch','Manta'),(1287,74,'dutch','Meriva'),(1288,74,'dutch','Mokka'),(1289,74,'dutch','Monterey'),(1290,74,'dutch','Monza'),(1291,74,'dutch','Movano'),(1292,74,'dutch','Nova'),(1293,74,'dutch','Omega'),(1294,74,'dutch','Pick Up Sportscap'),(1295,74,'dutch','Rekord'),(1296,74,'dutch','Senator'),(1297,74,'dutch','Signum'),(1298,74,'dutch','Sintra'),(1299,74,'dutch','Speedster'),(1300,74,'dutch','Tigra'),(1301,74,'dutch','Vectra'),(1302,74,'dutch','Vivaro'),(1303,74,'dutch','Zafira'),(1304,74,'dutch','Zafira Tourer'),(1305,76,'dutch','1007'),(1306,76,'dutch','104'),(1307,76,'dutch','106'),(1308,76,'dutch','107'),(1309,76,'dutch','2008'),(1310,76,'dutch','204'),(1311,76,'dutch','205'),(1312,76,'dutch','206'),(1313,76,'dutch','207'),(1314,76,'dutch','208'),(1315,76,'dutch','3008'),(1316,76,'dutch','301'),(1317,76,'dutch','304'),(1318,76,'dutch','305'),(1319,76,'dutch','306'),(1320,76,'dutch','307'),(1321,76,'dutch','308'),(1322,76,'dutch','309'),(1323,76,'dutch','4007'),(1324,76,'dutch','4008'),(1325,76,'dutch','404'),(1326,76,'dutch','405'),(1327,76,'dutch','406'),(1328,76,'dutch','407'),(1329,76,'dutch','5008'),(1330,76,'dutch','504'),(1331,76,'dutch','505'),(1332,76,'dutch','508'),(1333,76,'dutch','604'),(1334,76,'dutch','605'),(1335,76,'dutch','607'),(1336,76,'dutch','806'),(1337,76,'dutch','807'),(1338,76,'dutch','Bipper'),(1339,76,'dutch','Bipper Tepee'),(1340,76,'dutch','Boxer'),(1341,76,'dutch','Expert'),(1342,76,'dutch','Expert Tepee'),(1343,76,'dutch','iOn'),(1344,76,'dutch','J5'),(1345,76,'dutch','Partner'),(1346,76,'dutch','Partner Tepee'),(1347,76,'dutch','RCZ'),(1348,76,'dutch','TePee'),(1349,77,'dutch','APE'),(1350,77,'dutch','APE TM'),(1351,77,'dutch','Porter'),(1352,78,'dutch','Prowler'),(1353,79,'dutch','6000'),(1354,79,'dutch','Bonneville'),(1355,79,'dutch','Fiero'),(1356,79,'dutch','Firebird'),(1357,79,'dutch','G6'),(1358,79,'dutch','Grand-Am'),(1359,79,'dutch','Grand-Prix'),(1360,79,'dutch','GTO'),(1361,79,'dutch','Montana'),(1362,79,'dutch','Solstice'),(1363,79,'dutch','Sunbird'),(1364,79,'dutch','Sunfire'),(1365,79,'dutch','Targa'),(1366,79,'dutch','Trans Am'),(1367,79,'dutch','Trans Sport'),(1368,79,'dutch','Vibe'),(1369,80,'dutch','356'),(1370,80,'dutch','911 (All)'),(1371,80,'dutch','911'),(1372,80,'dutch','964'),(1373,80,'dutch','991'),(1374,80,'dutch','993'),(1375,80,'dutch','996'),(1376,80,'dutch','997'),(1377,80,'dutch','912'),(1378,80,'dutch','914'),(1379,80,'dutch','924'),(1380,80,'dutch','928'),(1381,80,'dutch','944'),(1382,80,'dutch','959'),(1383,80,'dutch','962'),(1384,80,'dutch','968'),(1385,80,'dutch','Boxster'),(1386,80,'dutch','Carrera GT'),(1387,80,'dutch','Cayenne'),(1388,80,'dutch','Cayman'),(1389,80,'dutch','Panamera'),(1390,81,'dutch','300 Serie'),(1391,81,'dutch','400 Serie'),(1392,82,'dutch','Alpine A110'),(1393,82,'dutch','Alpine A310'),(1394,82,'dutch','Alpine V6'),(1395,82,'dutch','Avantime'),(1396,82,'dutch','Captur'),(1397,82,'dutch','Clio'),(1398,82,'dutch','Coupe'),(1399,82,'dutch','Espace'),(1400,82,'dutch','Express'),(1401,82,'dutch','Fluence'),(1402,82,'dutch','Fuego'),(1403,82,'dutch','Grand Espace'),(1404,82,'dutch','Grand Modus'),(1405,82,'dutch','Grand Scenic'),(1406,82,'dutch','Kangoo'),(1407,82,'dutch','Koleos'),(1408,82,'dutch','Laguna'),(1409,82,'dutch','Latitude'),(1410,82,'dutch','Mascott'),(1411,82,'dutch','Master'),(1412,82,'dutch','Megane'),(1413,82,'dutch','Modus'),(1414,82,'dutch','P 1400'),(1415,82,'dutch','R 11'),(1416,82,'dutch','R 14'),(1417,82,'dutch','R 18'),(1418,82,'dutch','R 19'),(1419,82,'dutch','R 20'),(1420,82,'dutch','R 21'),(1421,82,'dutch','R 25'),(1422,82,'dutch','R 30'),(1423,82,'dutch','R 4'),(1424,82,'dutch','R 5'),(1425,82,'dutch','R 6'),(1426,82,'dutch','R 9'),(1427,82,'dutch','Rapid'),(1428,82,'dutch','Safrane'),(1429,82,'dutch','Scenic'),(1430,82,'dutch','Spider'),(1431,82,'dutch','Trafic'),(1432,82,'dutch','Twingo'),(1433,82,'dutch','Twizy'),(1434,82,'dutch','Vel Satis'),(1435,82,'dutch','Wind'),(1436,82,'dutch','ZOE'),(1437,83,'dutch','Corniche'),(1438,83,'dutch','Flying Spur'),(1439,83,'dutch','Ghost'),(1440,83,'dutch','Park Ward'),(1441,83,'dutch','Phantom'),(1442,83,'dutch','Silver Cloud'),(1443,83,'dutch','Silver Dawn'),(1444,83,'dutch','Silver Seraph'),(1445,83,'dutch','Silver Shadow'),(1446,83,'dutch','Silver Spirit'),(1447,83,'dutch','Silver Spur'),(1448,84,'dutch','100'),(1449,84,'dutch','111'),(1450,84,'dutch','114'),(1451,84,'dutch','115'),(1452,84,'dutch','200'),(1453,84,'dutch','213'),(1454,84,'dutch','214'),(1455,84,'dutch','216'),(1456,84,'dutch','218'),(1457,84,'dutch','220'),(1458,84,'dutch','25'),(1459,84,'dutch','400'),(1460,84,'dutch','414'),(1461,84,'dutch','416'),(1462,84,'dutch','418'),(1463,84,'dutch','420'),(1464,84,'dutch','45'),(1465,84,'dutch','600'),(1466,84,'dutch','618'),(1467,84,'dutch','620'),(1468,84,'dutch','623'),(1469,84,'dutch','75'),(1470,84,'dutch','800'),(1471,84,'dutch','820'),(1472,84,'dutch','825'),(1473,84,'dutch','827'),(1474,84,'dutch','City Rover'),(1475,84,'dutch','Metro'),(1476,84,'dutch','Montego'),(1477,84,'dutch','SD'),(1478,84,'dutch','Streetwise'),(1479,86,'dutch','9-3'),(1480,86,'dutch','9-4X'),(1481,86,'dutch','9-5'),(1482,86,'dutch','9-7X'),(1483,86,'dutch','90'),(1484,86,'dutch','900'),(1485,86,'dutch','9000'),(1486,86,'dutch','96'),(1487,86,'dutch','99'),(1488,88,'dutch','Alhambra'),(1489,88,'dutch','Altea'),(1490,88,'dutch','Arosa'),(1491,88,'dutch','Cordoba'),(1492,88,'dutch','Exeo'),(1493,88,'dutch','Ibiza'),(1494,88,'dutch','Inca'),(1495,88,'dutch','Leon'),(1496,88,'dutch','Malaga'),(1497,88,'dutch','Marbella'),(1498,88,'dutch','Mii'),(1499,88,'dutch','Terra'),(1500,88,'dutch','Toledo'),(1501,89,'dutch','105'),(1502,89,'dutch','120'),(1503,89,'dutch','130'),(1504,89,'dutch','135'),(1505,89,'dutch','Citigo'),(1506,89,'dutch','Fabia'),(1507,89,'dutch','Favorit'),(1508,89,'dutch','Felicia'),(1509,89,'dutch','Forman'),(1510,89,'dutch','Octavia'),(1511,89,'dutch','Pick-up'),(1512,89,'dutch','Praktik'),(1513,89,'dutch','Rapid'),(1514,89,'dutch','Roomster'),(1515,89,'dutch','Superb'),(1516,89,'dutch','Yeti'),(1517,90,'dutch','Crossblade'),(1518,90,'dutch','ForFour'),(1519,90,'dutch','ForTwo'),(1520,90,'dutch','Roadster'),(1521,92,'dutch','C8'),(1522,92,'dutch','C8 AILERON'),(1523,92,'dutch','C8 DOUBLE 12 S'),(1524,92,'dutch','C8 LAVIOLETTE SWB'),(1525,92,'dutch','C8 SPYDER SWB'),(1526,93,'dutch','Actyon'),(1527,93,'dutch','Family'),(1528,93,'dutch','Korando'),(1529,93,'dutch','Kyron'),(1530,93,'dutch','MUSSO'),(1531,93,'dutch','REXTON'),(1532,93,'dutch','Rodius'),(1533,94,'dutch','B9 Tribeca'),(1534,94,'dutch','Baja'),(1535,94,'dutch','BRZ'),(1536,94,'dutch','Forester'),(1537,94,'dutch','Impreza'),(1538,94,'dutch','Justy'),(1539,94,'dutch','Legacy'),(1540,94,'dutch','Libero'),(1541,94,'dutch','OUTBACK'),(1542,94,'dutch','SVX'),(1543,94,'dutch','Trezia'),(1544,94,'dutch','Tribeca'),(1545,94,'dutch','Vivio'),(1546,94,'dutch','XT'),(1547,94,'dutch','XV'),(1548,95,'dutch','Alto'),(1549,95,'dutch','Baleno'),(1550,95,'dutch','Cappuccino'),(1551,95,'dutch','Carry'),(1552,95,'dutch','Grand Vitara'),(1553,95,'dutch','Ignis'),(1554,95,'dutch','Jimny'),(1555,95,'dutch','Kizashi'),(1556,95,'dutch','Liana'),(1557,95,'dutch','LJ'),(1558,95,'dutch','SJ Samurai'),(1559,95,'dutch','Splash'),(1560,95,'dutch','Super-Carry'),(1561,95,'dutch','Swift'),(1562,95,'dutch','SX4'),(1563,95,'dutch','SX4 S-Cross'),(1564,95,'dutch','Vitara'),(1565,95,'dutch','Wagon R+'),(1566,95,'dutch','X-90'),(1567,97,'dutch','Chimaera'),(1568,97,'dutch','Griffith'),(1569,97,'dutch','Tuscan'),(1570,98,'dutch','Horizon'),(1571,98,'dutch','Samba'),(1572,99,'dutch','Indica'),(1573,99,'dutch','Indigo'),(1574,99,'dutch','Nano'),(1575,99,'dutch','Safari'),(1576,99,'dutch','Sumo'),(1577,99,'dutch','Telcoline'),(1578,99,'dutch','Telcosport'),(1579,99,'dutch','Xenon'),(1580,101,'dutch','4-Runner'),(1581,101,'dutch','Auris'),(1582,101,'dutch','Auris Touring Sports'),(1583,101,'dutch','Avalon'),(1584,101,'dutch','Avensis'),(1585,101,'dutch','Avensis Verso'),(1586,101,'dutch','Aygo'),(1587,101,'dutch','Camry'),(1588,101,'dutch','Carina'),(1589,101,'dutch','Celica'),(1590,101,'dutch','Corolla'),(1591,101,'dutch','Corolla Verso'),(1592,101,'dutch','Cressida'),(1593,101,'dutch','Crown'),(1594,101,'dutch','Dyna'),(1595,101,'dutch','FJ'),(1596,101,'dutch','GT86'),(1597,101,'dutch','Hiace'),(1598,101,'dutch','Highlander'),(1599,101,'dutch','Hilux'),(1600,101,'dutch','IQ'),(1601,101,'dutch','Land Cruiser'),(1602,101,'dutch','Lite-Ace'),(1603,101,'dutch','MR 2'),(1604,101,'dutch','Paseo'),(1605,101,'dutch','Picnic'),(1606,101,'dutch','Previa'),(1607,101,'dutch','Prius'),(1608,101,'dutch','Prius+'),(1609,101,'dutch','RAV 4'),(1610,101,'dutch','Sequoia'),(1611,101,'dutch','Sienna'),(1612,101,'dutch','Starlet'),(1613,101,'dutch','Supra'),(1614,101,'dutch','Tacoma'),(1615,101,'dutch','Tercel'),(1616,101,'dutch','Tundra'),(1617,101,'dutch','Urban Cruiser'),(1618,101,'dutch','Verso'),(1619,101,'dutch','Verso-S'),(1620,101,'dutch','Yaris'),(1621,102,'dutch','601'),(1622,103,'dutch','Dolomite'),(1623,103,'dutch','Moss'),(1624,103,'dutch','Spitfire'),(1625,103,'dutch','TR3'),(1626,103,'dutch','TR4'),(1627,103,'dutch','TR5'),(1628,103,'dutch','TR6'),(1629,103,'dutch','TR7'),(1630,103,'dutch','TR8'),(1631,104,'dutch','181'),(1632,104,'dutch','Amarok'),(1633,104,'dutch','Beetle'),(1634,104,'dutch','Bora'),(1635,104,'dutch','Buggy'),(1636,104,'dutch','Caddy'),(1637,104,'dutch','CC'),(1638,104,'dutch','Corrado'),(1639,104,'dutch','Crafter'),(1640,104,'dutch','Eos'),(1641,104,'dutch','Fox'),(1642,104,'dutch','Golf (All)'),(1643,104,'dutch','Golf'),(1644,104,'dutch','Golf Plus'),(1645,104,'dutch','Iltis'),(1646,104,'dutch','Jetta'),(1647,104,'dutch','Karmann Ghia'),(1648,104,'dutch','Käfer'),(1649,104,'dutch','LT'),(1650,104,'dutch','Lupo'),(1651,104,'dutch','New Beetle'),(1652,104,'dutch','Passat (All)'),(1653,104,'dutch','Passat'),(1654,104,'dutch','Passat CC'),(1655,104,'dutch','Phaeton'),(1656,104,'dutch','Polo'),(1657,104,'dutch','Routan'),(1658,104,'dutch','Santana'),(1659,104,'dutch','Scirocco'),(1660,104,'dutch','Sharan'),(1661,104,'dutch','T1'),(1662,104,'dutch','T2'),(1663,104,'dutch','T3 (All)'),(1664,104,'dutch','T3 Caravelle'),(1665,104,'dutch','T3 Multivan'),(1666,104,'dutch','T3 other'),(1667,104,'dutch','T3 Kombi'),(1668,104,'dutch','T4 (All)'),(1669,104,'dutch','T4 California'),(1670,104,'dutch','T4 Caravelle'),(1671,104,'dutch','T4 Multivan'),(1672,104,'dutch','T4 other'),(1673,104,'dutch','T4 Kombi'),(1674,104,'dutch','T5 (All)'),(1675,104,'dutch','T5 California'),(1676,104,'dutch','T5 Caravelle'),(1677,104,'dutch','T5 Multivan'),(1678,104,'dutch','T5 Shuttle'),(1679,104,'dutch','T5 other'),(1680,104,'dutch','T5 Kombi'),(1681,104,'dutch','Taro'),(1682,104,'dutch','Tiguan'),(1683,104,'dutch','Touareg'),(1684,104,'dutch','Touran'),(1685,104,'dutch','up!'),(1686,104,'dutch','Vento'),(1687,105,'dutch','240'),(1688,105,'dutch','244'),(1689,105,'dutch','245'),(1690,105,'dutch','262'),(1691,105,'dutch','264'),(1692,105,'dutch','340'),(1693,105,'dutch','360'),(1694,105,'dutch','440'),(1695,105,'dutch','460'),(1696,105,'dutch','480'),(1697,105,'dutch','740'),(1698,105,'dutch','744'),(1699,105,'dutch','745'),(1700,105,'dutch','760'),(1701,105,'dutch','780'),(1702,105,'dutch','850'),(1703,105,'dutch','855'),(1704,105,'dutch','940'),(1705,105,'dutch','944'),(1706,105,'dutch','945'),(1707,105,'dutch','960'),(1708,105,'dutch','965'),(1709,105,'dutch','Amazon'),(1710,105,'dutch','C30'),(1711,105,'dutch','C70'),(1712,105,'dutch','Polar'),(1713,105,'dutch','S40'),(1714,105,'dutch','S60'),(1715,105,'dutch','S70'),(1716,105,'dutch','S80'),(1717,105,'dutch','S90'),(1718,105,'dutch','V40'),(1719,105,'dutch','V50'),(1720,105,'dutch','V60'),(1721,105,'dutch','V70'),(1722,105,'dutch','V90'),(1723,105,'dutch','XC 60'),(1724,105,'dutch','XC 70'),(1725,105,'dutch','XC 90'),(1726,106,'dutch','311'),(1727,106,'dutch','353'),(1728,108,'dutch','MF 25'),(1729,108,'dutch','MF 28'),(1730,108,'dutch','MF 3'),(1731,108,'dutch','MF 30'),(1732,108,'dutch','MF 35'),(1733,108,'dutch','MF 4'),(1734,108,'dutch','MF 5'),(1,1,'german','500'),(2,1,'german','500C'),(3,1,'german','Grande Punto'),(4,1,'german','Punto Evo'),(5,2,'german','MDX'),(6,2,'german','NSX'),(7,2,'german','RL'),(8,2,'german','RSX'),(9,2,'german','TL'),(10,2,'german','TSX'),(11,3,'german','City'),(12,3,'german','Crossline'),(13,3,'german','Roadline'),(14,3,'german','Scouty R'),(15,4,'german','8C'),(16,4,'german','Alfa 145'),(17,4,'german','Alfa 146'),(18,4,'german','Alfa 147'),(19,4,'german','Alfa 155'),(20,4,'german','Alfa 156'),(21,4,'german','Alfa 159'),(22,4,'german','Alfa 164'),(23,4,'german','Alfa 166'),(24,4,'german','Alfa 33'),(25,4,'german','Alfa 75'),(26,4,'german','Alfa 90'),(27,4,'german','Alfasud'),(28,4,'german','Alfetta'),(29,4,'german','Brera'),(30,4,'german','Crosswagon'),(31,4,'german','Giulia'),(32,4,'german','Giulietta'),(33,4,'german','GT'),(34,4,'german','GTV'),(35,4,'german','Junior'),(36,4,'german','MiTo'),(37,4,'german','Spider'),(38,4,'german','Sprint'),(39,5,'german','B10'),(40,5,'german','B12'),(41,5,'german','B3'),(42,5,'german','B5'),(43,5,'german','B6'),(44,5,'german','B7'),(45,5,'german','B8'),(46,5,'german','D 10'),(47,5,'german','D3'),(48,5,'german','D5'),(49,5,'german','Roadster S'),(50,5,'german','XD3'),(51,7,'german','GT'),(52,8,'german','Rocsta'),(53,9,'german','AR1'),(54,9,'german','Cygnet'),(55,9,'german','DB'),(56,9,'german','DB7'),(57,9,'german','DB9'),(58,9,'german','DBS'),(59,9,'german','Lagonda'),(60,9,'german','Rapide'),(61,9,'german','V12 Vantage'),(62,9,'german','V8 Vantage'),(63,9,'german','Vanquish'),(64,9,'german','Virage'),(65,10,'german','100'),(66,10,'german','200'),(67,10,'german','80'),(68,10,'german','90'),(69,10,'german','A1'),(70,10,'german','A2'),(71,10,'german','A3'),(72,10,'german','A4'),(73,10,'german','A4 Allroad'),(74,10,'german','A5'),(75,10,'german','A6'),(76,10,'german','A6 Allroad'),(77,10,'german','A7'),(78,10,'german','A8'),(79,10,'german','Cabriolet'),(80,10,'german','Coupé'),(81,10,'german','Q3'),(82,10,'german','Q5'),(83,10,'german','Q7'),(84,10,'german','QUATTRO'),(85,10,'german','R8'),(86,10,'german','RS2'),(87,10,'german','RS3'),(88,10,'german','RS4'),(89,10,'german','RS5'),(90,10,'german','RS6'),(91,10,'german','RS7'),(92,10,'german','S2'),(93,10,'german','S3'),(94,10,'german','S4'),(95,10,'german','S5'),(96,10,'german','S6'),(97,10,'german','S7'),(98,10,'german','S8'),(99,10,'german','SQ5'),(100,10,'german','TT (All)'),(101,10,'german','TT'),(102,10,'german','TT RS'),(103,10,'german','TTS'),(104,10,'german','V8'),(105,13,'german','Series 1 (All)'),(106,13,'german','114'),(107,13,'german','116'),(108,13,'german','118'),(109,13,'german','120'),(110,13,'german','123'),(111,13,'german','125'),(112,13,'german','130'),(113,13,'german','135'),(114,13,'german','2002'),(115,13,'german','Series 3 (All)'),(116,13,'german','315'),(117,13,'german','316'),(118,13,'german','318'),(119,13,'german','318 Gran Turismo'),(120,13,'german','320'),(121,13,'german','320 Gran Turismo'),(122,13,'german','323'),(123,13,'german','324'),(124,13,'german','325'),(125,13,'german','328'),(126,13,'german','328 Gran Turismo'),(127,13,'german','330'),(128,13,'german','335'),(129,13,'german','335 Gran Turismo'),(130,13,'german','ActiveHybrid 3'),(131,13,'german','Series 4 (All)'),(132,13,'german','420'),(133,13,'german','428'),(134,13,'german','430'),(135,13,'german','435'),(136,13,'german','Series 5 (All)'),(137,13,'german','518'),(138,13,'german','520'),(139,13,'german','520 Gran Turismo'),(140,13,'german','523'),(141,13,'german','524'),(142,13,'german','525'),(143,13,'german','528'),(144,13,'german','530'),(145,13,'german','530 Gran Turismo'),(146,13,'german','535'),(147,13,'german','535 Gran Turismo'),(148,13,'german','540'),(149,13,'german','545'),(150,13,'german','550'),(151,13,'german','550 Gran Turismo'),(152,13,'german','ActiveHybrid 5'),(153,13,'german','Series 6 (All)'),(154,13,'german','628'),(155,13,'german','630'),(156,13,'german','633'),(157,13,'german','635'),(158,13,'german','640'),(159,13,'german','645'),(160,13,'german','650'),(161,13,'german','Series 7 (All)'),(162,13,'german','725'),(163,13,'german','728'),(164,13,'german','730'),(165,13,'german','732'),(166,13,'german','735'),(167,13,'german','740'),(168,13,'german','745'),(169,13,'german','750'),(170,13,'german','760'),(171,13,'german','ActiveHybrid 7'),(172,13,'german','840'),(173,13,'german','850'),(174,13,'german','i3'),(175,13,'german','M Models (All)'),(176,13,'german','M135'),(177,13,'german','M3'),(178,13,'german','M5'),(179,13,'german','M6'),(180,13,'german','X5 M'),(181,13,'german','X6 M'),(182,13,'german','Z3 M'),(183,13,'german','Z4 M'),(184,13,'german','Series X (All)'),(185,13,'german','ActiveHybrid X6'),(186,13,'german','X1'),(187,13,'german','X3'),(188,13,'german','X5'),(189,13,'german','X5 M'),(190,13,'german','X6'),(191,13,'german','X6 M'),(192,13,'german','Series Z (All)'),(193,13,'german','Z1'),(194,13,'german','Z3'),(195,13,'german','Z3 M'),(196,13,'german','Z4'),(197,13,'german','Z4 M'),(198,13,'german','Z8'),(199,14,'german','Arnage'),(200,14,'german','Azure'),(201,14,'german','Brooklands'),(202,14,'german','Continental (All)'),(203,14,'german','Continental'),(204,14,'german','Continental Flying Spur'),(205,14,'german','Continental GT'),(206,14,'german','Continental GTC'),(207,14,'german','Continental Supersports'),(208,14,'german','Eight'),(209,14,'german','Mulsanne'),(210,14,'german','Turbo R'),(211,14,'german','Turbo RT'),(212,14,'german','Turbo S'),(213,16,'german','BC3'),(214,16,'german','BS2'),(215,16,'german','BS4'),(216,16,'german','BS6'),(217,17,'german','EB 110'),(218,17,'german','Veyron'),(219,18,'german','Century'),(220,18,'german','Electra'),(221,18,'german','Enclave'),(222,18,'german','La Crosse'),(223,18,'german','Le Sabre'),(224,18,'german','Park Avenue'),(225,18,'german','Regal'),(226,18,'german','Riviera'),(227,18,'german','Roadmaster'),(228,18,'german','Skylark'),(229,19,'german','Allante'),(230,19,'german','ATS'),(231,19,'german','BLS'),(232,19,'german','CTS'),(233,19,'german','Deville'),(234,19,'german','Eldorado'),(235,19,'german','Escalade'),(236,19,'german','Fleetwood'),(237,19,'german','Seville'),(238,19,'german','SRX'),(239,19,'german','STS'),(240,19,'german','XLR'),(241,22,'german','2500'),(242,22,'german','Alero'),(243,22,'german','Astro'),(244,22,'german','Avalanche'),(245,22,'german','Aveo'),(246,22,'german','Beretta'),(247,22,'german','Blazer'),(248,22,'german','C1500'),(249,22,'german','Camaro'),(250,22,'german','Caprice'),(251,22,'german','Captiva'),(252,22,'german','Cavalier'),(253,22,'german','Chevelle'),(254,22,'german','Chevy Van'),(255,22,'german','Citation'),(256,22,'german','Colorado'),(257,22,'german','Corsica'),(258,22,'german','Cruze'),(259,22,'german','El Camino'),(260,22,'german','Epica'),(261,22,'german','Evanda'),(262,22,'german','Express'),(263,22,'german','G'),(264,22,'german','HHR'),(265,22,'german','Impala'),(266,22,'german','K1500'),(267,22,'german','K30'),(268,22,'german','Kalos'),(269,22,'german','Lacetti'),(270,22,'german','Lumina'),(271,22,'german','Malibu'),(272,22,'german','Matiz'),(273,22,'german','Nubira'),(274,22,'german','Orlando'),(275,22,'german','Rezzo'),(276,22,'german','S-10'),(277,22,'german','Silverado'),(278,22,'german','Spark'),(279,22,'german','SSR'),(280,22,'german','Suburban'),(281,22,'german','Tahoe'),(282,22,'german','Trailblazer'),(283,22,'german','Trans Sport'),(284,22,'german','Trax'),(285,22,'german','Venture'),(286,22,'german','Volt'),(287,23,'german','300 M'),(288,23,'german','300C'),(289,23,'german','Aspen'),(290,23,'german','Crossfire'),(291,23,'german','Daytona'),(292,23,'german','ES'),(293,23,'german','Grand Voyager'),(294,23,'german','GS'),(295,23,'german','GTS'),(296,23,'german','Imperial'),(297,23,'german','Le Baron'),(298,23,'german','Neon'),(299,23,'german','New Yorker'),(300,23,'german','Pacifica'),(301,23,'german','PT Cruiser'),(302,23,'german','Saratoga'),(303,23,'german','Sebring'),(304,23,'german','Stratus'),(305,23,'german','Valiant'),(306,23,'german','Viper'),(307,23,'german','Vision'),(308,23,'german','Voyager'),(309,24,'german','2 CV'),(310,24,'german','AX'),(311,24,'german','Berlingo'),(312,24,'german','BX'),(313,24,'german','C-Crosser'),(314,24,'german','C-Zero'),(315,24,'german','C1'),(316,24,'german','C2'),(317,24,'german','C3'),(318,24,'german','C3 Picasso'),(319,24,'german','C4'),(320,24,'german','C4 Aircross'),(321,24,'german','C4 Picasso'),(322,24,'german','C5'),(323,24,'german','C6'),(324,24,'german','C8'),(325,24,'german','CX'),(326,24,'german','DS'),(327,24,'german','DS3'),(328,24,'german','DS4'),(329,24,'german','DS5'),(330,24,'german','Evasion'),(331,24,'german','Grand C4 Picasso'),(332,24,'german','GSA'),(333,24,'german','Jumper'),(334,24,'german','Jumpy'),(335,24,'german','Nemo'),(336,24,'german','SAXO'),(337,24,'german','SM'),(338,24,'german','Visa'),(339,24,'german','Xantia'),(340,24,'german','XM'),(341,24,'german','Xsara'),(342,24,'german','Xsara Picasso'),(343,24,'german','ZX'),(344,26,'german','C1'),(345,26,'german','C2'),(346,26,'german','C3'),(347,26,'german','C4'),(348,26,'german','C5'),(349,26,'german','C6'),(350,26,'german','C7'),(351,26,'german','Z06'),(352,26,'german','ZR 1'),(353,27,'german','Dokker'),(354,27,'german','Duster'),(355,27,'german','Lodgy'),(356,27,'german','Logan'),(357,27,'german','Logan Pick-Up'),(358,27,'german','Pick Up'),(359,27,'german','Sandero'),(360,28,'german','Espero'),(361,28,'german','Evanda'),(362,28,'german','Kalos'),(363,28,'german','Korando'),(364,28,'german','Lacetti'),(365,28,'german','Lanos'),(366,28,'german','Leganza'),(367,28,'german','Matiz'),(368,28,'german','Musso'),(369,28,'german','Nexia'),(370,28,'german','Nubira'),(371,28,'german','Rezzo'),(372,28,'german','Tacuma'),(373,29,'german','Applause'),(374,29,'german','Charade'),(375,29,'german','Charmant'),(376,29,'german','Copen'),(377,29,'german','Cuore'),(378,29,'german','Feroza/Sportrak'),(379,29,'german','Freeclimber'),(380,29,'german','Gran Move'),(381,29,'german','Hijet'),(382,29,'german','MATERIA'),(383,29,'german','Move'),(384,29,'german','Rocky/Fourtrak'),(385,29,'german','Sirion'),(386,29,'german','Terios'),(387,29,'german','TREVIS'),(388,29,'german','YRV'),(389,30,'german','Guarà'),(390,30,'german','Pantera'),(391,31,'german','Avenger'),(392,31,'german','Caliber'),(393,31,'german','Challenger'),(394,31,'german','Charger'),(395,31,'german','Dakota'),(396,31,'german','Demon'),(397,31,'german','Durango'),(398,31,'german','Grand Caravan'),(399,31,'german','Hornet'),(400,31,'german','Journey'),(401,31,'german','Magnum'),(402,31,'german','Neon'),(403,31,'german','Nitro'),(404,31,'german','RAM'),(405,31,'german','Stealth'),(406,31,'german','Viper'),(407,32,'german','208'),(408,32,'german','246'),(409,32,'german','250'),(410,32,'german','275'),(411,32,'german','288'),(412,32,'german','308'),(413,32,'german','328'),(414,32,'german','330'),(415,32,'german','348'),(416,32,'german','360'),(417,32,'german','365'),(418,32,'german','400'),(419,32,'german','412'),(420,32,'german','456'),(421,32,'german','458'),(422,32,'german','512'),(423,32,'german','550'),(424,32,'german','575'),(425,32,'german','599 GTB'),(426,32,'german','612'),(427,32,'german','750'),(428,32,'german','California'),(429,32,'german','Daytona'),(430,32,'german','Dino GT4'),(431,32,'german','Enzo Ferrari'),(432,32,'german','F12'),(433,32,'german','F355'),(434,32,'german','F40'),(435,32,'german','F430'),(436,32,'german','F50'),(437,32,'german','FF'),(438,32,'german','LaFerrari'),(439,32,'german','Mondial'),(440,32,'german','Superamerica'),(441,32,'german','Testarossa'),(442,33,'german','124'),(443,33,'german','126'),(444,33,'german','127'),(445,33,'german','130'),(446,33,'german','131'),(447,33,'german','500'),(448,33,'german','500C'),(449,33,'german','500L'),(450,33,'german','Barchetta'),(451,33,'german','Brava'),(452,33,'german','Bravo'),(453,33,'german','Cinquecento'),(454,33,'german','Coupe'),(455,33,'german','Croma'),(456,33,'german','Dino'),(457,33,'german','Doblo'),(458,33,'german','Ducato'),(459,33,'german','Fiorino'),(460,33,'german','Freemont'),(461,33,'german','Grande Punto'),(462,33,'german','Idea'),(463,33,'german','Linea'),(464,33,'german','Marea'),(465,33,'german','Marengo'),(466,33,'german','Multipla'),(467,33,'german','New Panda'),(468,33,'german','Palio'),(469,33,'german','Panda'),(470,33,'german','Punto'),(471,33,'german','Punto Evo'),(472,33,'german','Qubo'),(473,33,'german','Regata'),(474,33,'german','Ritmo'),(475,33,'german','Scudo'),(476,33,'german','Sedici'),(477,33,'german','Seicento'),(478,33,'german','Spider Europa'),(479,33,'german','Stilo'),(480,33,'german','Strada'),(481,33,'german','Tempra'),(482,33,'german','Tipo'),(483,33,'german','Ulysse'),(484,33,'german','Uno'),(485,33,'german','X 1/9'),(486,34,'german','Karma'),(487,35,'german','Aerostar'),(488,35,'german','B-Max'),(489,35,'german','Bronco'),(490,35,'german','C-Max'),(491,35,'german','Capri'),(492,35,'german','Cougar'),(493,35,'german','Courier'),(494,35,'german','Crown'),(495,35,'german','Econoline'),(496,35,'german','Econovan'),(497,35,'german','Edge'),(498,35,'german','Escape'),(499,35,'german','Escort'),(500,35,'german','Excursion'),(501,35,'german','Expedition'),(502,35,'german','Explorer'),(503,35,'german','Express'),(504,35,'german','F 150'),(505,35,'german','F 250'),(506,35,'german','F 350'),(507,35,'german','Fairlane'),(508,35,'german','Falcon'),(509,35,'german','Fiesta'),(510,35,'german','Flex'),(511,35,'german','Focus'),(512,35,'german','Fusion'),(513,35,'german','Galaxy'),(514,35,'german','Granada'),(515,35,'german','Grand C-Max'),(516,35,'german','GT'),(517,35,'german','Ka'),(518,35,'german','Kuga'),(519,35,'german','Maverick'),(520,35,'german','Mercury'),(521,35,'german','Mondeo'),(522,35,'german','Mustang'),(523,35,'german','Orion'),(524,35,'german','Probe'),(525,35,'german','Puma'),(526,35,'german','Ranger'),(527,35,'german','S-Max'),(528,35,'german','Scorpio'),(529,35,'german','Sierra'),(530,35,'german','Sportka'),(531,35,'german','Streetka'),(532,35,'german','Taunus'),(533,35,'german','Taurus'),(534,35,'german','Thunderbird'),(535,35,'german','Tourneo'),(536,35,'german','Transit (All)'),(537,35,'german','Transit'),(538,35,'german','Transit Connect'),(539,35,'german','Windstar'),(540,36,'german','Acadia'),(541,36,'german','Envoy'),(542,36,'german','Safari'),(543,36,'german','Savana'),(544,36,'german','Sierra'),(545,36,'german','Sonoma'),(546,36,'german','Syclone'),(547,36,'german','Typhoon'),(548,36,'german','Vandura'),(549,36,'german','Yukon'),(550,37,'german','Sonique'),(551,40,'german','Accord'),(552,40,'german','Aerodeck'),(553,40,'german','Civic'),(554,40,'german','Concerto'),(555,40,'german','CR-V'),(556,40,'german','CR-Z'),(557,40,'german','CRX'),(558,40,'german','Element'),(559,40,'german','FR-V'),(560,40,'german','HR-V'),(561,40,'german','Insight'),(562,40,'german','Integra'),(563,40,'german','Jazz'),(564,40,'german','Legend'),(565,40,'german','Logo'),(566,40,'german','NSX'),(567,40,'german','Odyssey'),(568,40,'german','Prelude'),(569,40,'german','S2000'),(570,40,'german','Shuttle'),(571,40,'german','Stream'),(572,41,'german','H1'),(573,41,'german','H2'),(574,41,'german','H3'),(575,42,'german','Accent'),(576,42,'german','Atos'),(577,42,'german','Azera'),(578,42,'german','Coupe'),(579,42,'german','Elantra'),(580,42,'german','Excel'),(581,42,'german','Galloper'),(582,42,'german','Genesis'),(583,42,'german','Getz'),(584,42,'german','Grandeur'),(585,42,'german','H 100'),(586,42,'german','H 200'),(587,42,'german','H-1'),(588,42,'german','H-1 Starex'),(589,42,'german','i10'),(590,42,'german','i20'),(591,42,'german','i30'),(592,42,'german','i40'),(593,42,'german','i50'),(594,42,'german','ix20'),(595,42,'german','ix35'),(596,42,'german','ix55'),(597,42,'german','Lantra'),(598,42,'german','Matrix'),(599,42,'german','Pony'),(600,42,'german','S-Coupe'),(601,42,'german','Santa Fe'),(602,42,'german','Santamo'),(603,42,'german','Sonata'),(604,42,'german','Terracan'),(605,42,'german','Trajet'),(606,42,'german','Tucson'),(607,42,'german','Veloster'),(608,42,'german','Veracruz'),(609,42,'german','XG 30'),(610,42,'german','XG 350'),(611,43,'german','EX35'),(612,43,'german','EX37'),(613,43,'german','FX'),(614,43,'german','G35'),(615,43,'german','G37'),(616,43,'german','M30'),(617,43,'german','M35'),(618,43,'german','M37'),(619,43,'german','Q45'),(620,43,'german','QX56'),(621,44,'german','Campo'),(622,44,'german','D-Max'),(623,44,'german','Gemini'),(624,44,'german','Midi'),(625,44,'german','PICK UP'),(626,44,'german','Trooper'),(627,45,'german','Massif'),(628,46,'german','Daimler'),(629,46,'german','E-Type'),(630,46,'german','F-Type'),(631,46,'german','MK II'),(632,46,'german','S-Type'),(633,46,'german','X-Type'),(634,46,'german','XF'),(635,46,'german','XJ'),(636,46,'german','XJ12'),(637,46,'german','XJ40'),(638,46,'german','XJ6'),(639,46,'german','XJ8'),(640,46,'german','XJR'),(641,46,'german','XJS'),(642,46,'german','XJSC'),(643,46,'german','XK'),(644,46,'german','XKR'),(645,47,'german','Cherokee'),(646,47,'german','CJ'),(647,47,'german','Comanche'),(648,47,'german','Commander'),(649,47,'german','Compass'),(650,47,'german','Grand Cherokee'),(651,47,'german','Patriot'),(652,47,'german','Renegade'),(653,47,'german','Wagoneer'),(654,47,'german','Willys'),(655,47,'german','Wrangler'),(656,48,'german','X-BOW'),(657,49,'german','Besta'),(658,49,'german','Borrego'),(659,49,'german','Carens'),(660,49,'german','Carnival'),(661,49,'german','cee\'d'),(662,49,'german','cee\'d Sportswagon'),(663,49,'german','Cerato'),(664,49,'german','Clarus'),(665,49,'german','Elan'),(666,49,'german','Joice'),(667,49,'german','K2500'),(668,49,'german','K2700'),(669,49,'german','Leo'),(670,49,'german','Magentis'),(671,49,'german','Mentor'),(672,49,'german','Mini'),(673,49,'german','Opirus'),(674,49,'german','Optima'),(675,49,'german','Picanto'),(676,49,'german','Pregio'),(677,49,'german','Pride'),(678,49,'german','pro_cee\'d'),(679,49,'german','Retona'),(680,49,'german','Rio'),(681,49,'german','Roadster'),(682,49,'german','Rocsta'),(683,49,'german','Sephia'),(684,49,'german','Shuma'),(685,49,'german','Sorento'),(686,49,'german','Soul'),(687,49,'german','Sportage'),(688,49,'german','Venga'),(689,50,'german','CCR'),(690,51,'german','110'),(691,51,'german','111'),(692,51,'german','112'),(693,51,'german','1200'),(694,51,'german','2107'),(695,51,'german','2110'),(696,51,'german','2111'),(697,51,'german','2112'),(698,51,'german','Aleko'),(699,51,'german','Forma'),(700,51,'german','Kalina'),(701,51,'german','Niva'),(702,51,'german','Nova'),(703,51,'german','Priora'),(704,51,'german','Samara'),(705,52,'german','Aventador'),(706,52,'german','Countach'),(707,52,'german','Diablo'),(708,52,'german','Espada'),(709,52,'german','Gallardo'),(710,52,'german','Jalpa'),(711,52,'german','LM'),(712,52,'german','Miura'),(713,52,'german','Murciélago'),(714,52,'german','Urraco'),(715,53,'german','Beta'),(716,53,'german','Dedra'),(717,53,'german','Delta'),(718,53,'german','Flaminia'),(719,53,'german','Flavia'),(720,53,'german','Fulvia'),(721,53,'german','Gamma'),(722,53,'german','Kappa'),(723,53,'german','Lybra'),(724,53,'german','MUSA'),(725,53,'german','Phedra'),(726,53,'german','Prisma'),(727,53,'german','Stratos'),(728,53,'german','Thema'),(729,53,'german','Thesis'),(730,53,'german','Voyager'),(731,53,'german','Ypsilon'),(732,53,'german','Zeta'),(733,54,'german','Defender'),(734,54,'german','Discovery'),(735,54,'german','Freelander'),(736,54,'german','Range Rover'),(737,54,'german','Range Rover Evoque'),(738,54,'german','Range Rover Sport'),(739,54,'german','Serie I'),(740,54,'german','Serie II'),(741,54,'german','Serie III'),(742,55,'german','CV-9'),(743,55,'german','S'),(744,55,'german','SC2'),(745,55,'german','SC4'),(746,56,'german','CT 200h'),(747,56,'german','ES Series (All)'),(748,56,'german','ES 300'),(749,56,'german','ES 330'),(750,56,'german','ES 350'),(751,56,'german','GS Series (All)'),(752,56,'german','GS 250'),(753,56,'german','GS 300'),(754,56,'german','GS 350'),(755,56,'german','GS 430'),(756,56,'german','GS 450'),(757,56,'german','GS 460'),(758,56,'german','GX 470'),(759,56,'german','IS Series (All)'),(760,56,'german','IS 200'),(761,56,'german','IS 220'),(762,56,'german','IS 250'),(763,56,'german','IS 300'),(764,56,'german','IS 350'),(765,56,'german','IS-F'),(766,56,'german','LS Series (All)'),(767,56,'german','LS 400'),(768,56,'german','LS 430'),(769,56,'german','LS 460'),(770,56,'german','LS 600'),(771,56,'german','LX Series (All)'),(772,56,'german','LX 470'),(773,56,'german','LX 570'),(774,56,'german','RX Series (All)'),(775,56,'german','RX 300'),(776,56,'german','RX 330'),(777,56,'german','RX 350'),(778,56,'german','RX 400'),(779,56,'german','RX 450'),(780,56,'german','SC 400'),(781,56,'german','SC 430'),(782,57,'german','Ambra'),(783,57,'german','Nova'),(784,57,'german','Optima'),(785,57,'german','X - Too'),(786,58,'german','Aviator'),(787,58,'german','Continental'),(788,58,'german','LS'),(789,58,'german','Mark'),(790,58,'german','Navigator'),(791,58,'german','Town Car'),(792,59,'german','340 R'),(793,59,'german','Cortina'),(794,59,'german','Elan'),(795,59,'german','Elise'),(796,59,'german','Elite'),(797,59,'german','Esprit'),(798,59,'german','Europa'),(799,59,'german','Evora'),(800,59,'german','Excel'),(801,59,'german','Exige'),(802,59,'german','Super Seven'),(803,60,'german','MGA'),(804,60,'german','MGB'),(805,60,'german','MGF'),(806,60,'german','Midget'),(807,60,'german','Montego'),(808,60,'german','TD'),(809,60,'german','TF'),(810,60,'german','ZR'),(811,60,'german','ZS'),(812,60,'german','ZT'),(813,61,'german','Cabrio Series (All)'),(814,61,'german','Cooper Cabrio'),(815,61,'german','Cooper D Cabrio'),(816,61,'german','Cooper S Cabrio'),(817,61,'german','Cooper SD Cabrio'),(818,61,'german','John Cooper Works Cabrio'),(819,61,'german','One Cabrio'),(820,61,'german','Clubman Series (All)'),(821,61,'german','Cooper Clubman'),(822,61,'german','Cooper D Clubman'),(823,61,'german','Cooper S Clubman'),(824,61,'german','Cooper SD Clubman'),(825,61,'german','John Cooper Works Clubman'),(826,61,'german','One Clubman'),(827,61,'german','One D Clubman'),(828,61,'german','Clubvan'),(829,61,'german','Countryman Series (All)'),(830,61,'german','Cooper Countryman'),(831,61,'german','Cooper D Countryman'),(832,61,'german','Cooper S Countryman'),(833,61,'german','Cooper SD Countryman'),(834,61,'german','John Cooper Works Countryman'),(835,61,'german','One Countryman'),(836,61,'german','One D Countryman'),(837,61,'german','Coupe Series (All)'),(838,61,'german','Cooper Coupé'),(839,61,'german','Cooper S Coupé'),(840,61,'german','Cooper SD Coupé'),(841,61,'german','John Cooper Works Coupé'),(842,61,'german','MINI (All)'),(843,61,'german','1000'),(844,61,'german','1300'),(845,61,'german','Cooper'),(846,61,'german','Cooper D'),(847,61,'german','Cooper S'),(848,61,'german','Cooper SD'),(849,61,'german','John Cooper Works'),(850,61,'german','ONE'),(851,61,'german','One D'),(852,61,'german','Paceman Series (All)'),(853,61,'german','Cooper D Paceman'),(854,61,'german','Cooper Paceman'),(855,61,'german','Cooper S Paceman'),(856,61,'german','Cooper SD Paceman'),(857,61,'german','John Cooper Works Paceman'),(858,61,'german','Roadster Series (All)'),(859,61,'german','Cooper Roadster'),(860,61,'german','Cooper S Roadster'),(861,61,'german','Cooper SD Roadster'),(862,61,'german','John Cooper Works Roadster'),(863,63,'german','222'),(864,63,'german','224'),(865,63,'german','228'),(866,63,'german','3200'),(867,63,'german','418'),(868,63,'german','420'),(869,63,'german','4200'),(870,63,'german','422'),(871,63,'german','424'),(872,63,'german','430'),(873,63,'german','Biturbo'),(874,63,'german','Ghibli'),(875,63,'german','GranCabrio'),(876,63,'german','Gransport'),(877,63,'german','Granturismo'),(878,63,'german','Indy'),(879,63,'german','Karif'),(880,63,'german','MC12'),(881,63,'german','Merak'),(882,63,'german','Quattroporte'),(883,63,'german','Shamal'),(884,63,'german','Spyder'),(885,64,'german','57'),(886,64,'german','62'),(887,65,'german','121'),(888,65,'german','2'),(889,65,'german','3'),(890,65,'german','323'),(891,65,'german','5'),(892,65,'german','6'),(893,65,'german','626'),(894,65,'german','929'),(895,65,'german','B series'),(896,65,'german','Bongo'),(897,65,'german','BT-50'),(898,65,'german','CX-5'),(899,65,'german','CX-7'),(900,65,'german','CX-9'),(901,65,'german','Demio'),(902,65,'german','E series'),(903,65,'german','Millenia'),(904,65,'german','MPV'),(905,65,'german','MX-3'),(906,65,'german','MX-5'),(907,65,'german','MX-6'),(908,65,'german','Premacy'),(909,65,'german','Protege'),(910,65,'german','RX-6'),(911,65,'german','RX-7'),(912,65,'german','RX-8'),(913,65,'german','Tribute'),(914,65,'german','Xedos'),(915,66,'german','MP4-12C'),(916,67,'german','190'),(917,67,'german','200'),(918,67,'german','220'),(919,67,'german','230'),(920,67,'german','240'),(921,67,'german','250'),(922,67,'german','260'),(923,67,'german','270'),(924,67,'german','280'),(925,67,'german','290'),(926,67,'german','300'),(927,67,'german','320'),(928,67,'german','350'),(929,67,'german','380'),(930,67,'german','400'),(931,67,'german','416'),(932,67,'german','420'),(933,67,'german','450'),(934,67,'german','500'),(935,67,'german','560'),(936,67,'german','600'),(937,67,'german','A-Klasse (All)'),(938,67,'german','A 140'),(939,67,'german','A 150'),(940,67,'german','A 160'),(941,67,'german','A 170'),(942,67,'german','A 180'),(943,67,'german','A 190'),(944,67,'german','A 200'),(945,67,'german','A 210'),(946,67,'german','A 220'),(947,67,'german','A 250'),(948,67,'german','A 45 AMG'),(949,67,'german','B-Klasse (All)'),(950,67,'german','B 150'),(951,67,'german','B 160'),(952,67,'german','B 170'),(953,67,'german','B 180'),(954,67,'german','B 200'),(955,67,'german','B 220'),(956,67,'german','B 250'),(957,67,'german','C-Klasse (All)'),(958,67,'german','C 160'),(959,67,'german','C 180'),(960,67,'german','C 200'),(961,67,'german','C 220'),(962,67,'german','C 230'),(963,67,'german','C 240'),(964,67,'german','C 250'),(965,67,'german','C 270'),(966,67,'german','C 280'),(967,67,'german','C 30 AMG'),(968,67,'german','C 300'),(969,67,'german','C 32 AMG'),(970,67,'german','C 320'),(971,67,'german','C 350'),(972,67,'german','C 36 AMG'),(973,67,'german','C 43 AMG'),(974,67,'german','C 55 AMG'),(975,67,'german','C 63 AMG'),(976,67,'german','CE-Klasse (All)'),(977,67,'german','CE 200'),(978,67,'german','CE 220'),(979,67,'german','CE 230'),(980,67,'german','CE 280'),(981,67,'german','CE 300'),(982,67,'german','Citan'),(983,67,'german','CL-Klasse (All)'),(984,67,'german','CL 160'),(985,67,'german','CL 180'),(986,67,'german','CL 200'),(987,67,'german','CL 220'),(988,67,'german','CL 230'),(989,67,'german','CL 320'),(990,67,'german','CL 420'),(991,67,'german','CL 500'),(992,67,'german','CL 55 AMG'),(993,67,'german','CL 600'),(994,67,'german','CL 63 AMG'),(995,67,'german','CL 65 AMG'),(996,67,'german','CLA-Klasse (All)'),(997,67,'german','CLA 180'),(998,67,'german','CLA 200'),(999,67,'german','CLA 220'),(1000,67,'german','CLA 250'),(1001,67,'german','CLC-Klasse (All)'),(1002,67,'german','CLC 160'),(1003,67,'german','CLC 180'),(1004,67,'german','CLC 200'),(1005,67,'german','CLC 220'),(1006,67,'german','CLC 230'),(1007,67,'german','CLC 250'),(1008,67,'german','CLC 350'),(1009,67,'german','CLK-Klasse (All)'),(1010,67,'german','CLK 200'),(1011,67,'german','CLK 220'),(1012,67,'german','CLK 230'),(1013,67,'german','CLK 240'),(1014,67,'german','CLK 270'),(1015,67,'german','CLK 280'),(1016,67,'german','CLK 320'),(1017,67,'german','CLK 350'),(1018,67,'german','CLK 430'),(1019,67,'german','CLK 500'),(1020,67,'german','CLK 55 AMG'),(1021,67,'german','CLK 63 AMG'),(1022,67,'german','CLS-Klasse (All)'),(1023,67,'german','CLS 250'),(1024,67,'german','CLS 280'),(1025,67,'german','CLS 300'),(1026,67,'german','CLS 320'),(1027,67,'german','CLS 350'),(1028,67,'german','CLS 500'),(1029,67,'german','CLS 55 AMG'),(1030,67,'german','CLS 63 AMG'),(1031,67,'german','E-Klasse (All)'),(1032,67,'german','E 200'),(1033,67,'german','E 220'),(1034,67,'german','E 230'),(1035,67,'german','E 240'),(1036,67,'german','E 250'),(1037,67,'german','E 260'),(1038,67,'german','E 270'),(1039,67,'german','E 280'),(1040,67,'german','E 290'),(1041,67,'german','E 300'),(1042,67,'german','E 320'),(1043,67,'german','E 350'),(1044,67,'german','E 36 AMG'),(1045,67,'german','E 400'),(1046,67,'german','E 420'),(1047,67,'german','E 430'),(1048,67,'german','E 50'),(1049,67,'german','E 500'),(1050,67,'german','E 55 AMG'),(1051,67,'german','E 60 AMG'),(1052,67,'german','E 63 AMG'),(1053,67,'german','G-Klasse (All)'),(1054,67,'german','G 230'),(1055,67,'german','G 240'),(1056,67,'german','G 250'),(1057,67,'german','G 270'),(1058,67,'german','G 280'),(1059,67,'german','G 290'),(1060,67,'german','G 300'),(1061,67,'german','G 320'),(1062,67,'german','G 350'),(1063,67,'german','G 400'),(1064,67,'german','G 500'),(1065,67,'german','G 55 AMG'),(1066,67,'german','G 63 AMG'),(1067,67,'german','G 65 AMG'),(1068,67,'german','GL-Klasse (All)'),(1069,67,'german','GL 320'),(1070,67,'german','GL 350'),(1071,67,'german','GL 420'),(1072,67,'german','GL 450'),(1073,67,'german','GL 500'),(1074,67,'german','GL 55 AMG'),(1075,67,'german','GL 63 AMG'),(1076,67,'german','GLK-Klasse (All)'),(1077,67,'german','GLK 200'),(1078,67,'german','GLK 220'),(1079,67,'german','GLK 250'),(1080,67,'german','GLK 280'),(1081,67,'german','GLK 300'),(1082,67,'german','GLK 320'),(1083,67,'german','GLK 350'),(1084,67,'german','MB 100'),(1085,67,'german','ML-Klasse (All)'),(1086,67,'german','ML 230'),(1087,67,'german','ML 250'),(1088,67,'german','ML 270'),(1089,67,'german','ML 280'),(1090,67,'german','ML 300'),(1091,67,'german','ML 320'),(1092,67,'german','ML 350'),(1093,67,'german','ML 400'),(1094,67,'german','ML 420'),(1095,67,'german','ML 430'),(1096,67,'german','ML 450'),(1097,67,'german','ML 500'),(1098,67,'german','ML 55 AMG'),(1099,67,'german','ML 63 AMG'),(1100,67,'german','R-Klasse (All)'),(1101,67,'german','R 280'),(1102,67,'german','R 300'),(1103,67,'german','R 320'),(1104,67,'german','R 350'),(1105,67,'german','R 500'),(1106,67,'german','R 63 AMG'),(1107,67,'german','S-Klasse (All)'),(1108,67,'german','S 250'),(1109,67,'german','S 260'),(1110,67,'german','S 280'),(1111,67,'german','S 300'),(1112,67,'german','S 320'),(1113,67,'german','S 350'),(1114,67,'german','S 400'),(1115,67,'german','S 420'),(1116,67,'german','S 430'),(1117,67,'german','S 450'),(1118,67,'german','S 500'),(1119,67,'german','S 55'),(1120,67,'german','S 550'),(1121,67,'german','S 600'),(1122,67,'german','S 63 AMG'),(1123,67,'german','S 65 AMG'),(1124,67,'german','SL-Klasse (All)'),(1125,67,'german','SL 280'),(1126,67,'german','SL 300'),(1127,67,'german','SL 320'),(1128,67,'german','SL 350'),(1129,67,'german','SL 380'),(1130,67,'german','SL 420'),(1131,67,'german','SL 450'),(1132,67,'german','SL 500'),(1133,67,'german','SL 55 AMG'),(1134,67,'german','SL 560'),(1135,67,'german','SL 60 AMG'),(1136,67,'german','SL 600'),(1137,67,'german','SL 63 AMG'),(1138,67,'german','SL 65 AMG'),(1139,67,'german','SL 70 AMG'),(1140,67,'german','SL 73 AMG'),(1141,67,'german','SLK-Klasse (All)'),(1142,67,'german','SLK 200'),(1143,67,'german','SLK 230'),(1144,67,'german','SLK 250'),(1145,67,'german','SLK 280'),(1146,67,'german','SLK 300'),(1147,67,'german','SLK 32 AMG'),(1148,67,'german','SLK 320'),(1149,67,'german','SLK 350'),(1150,67,'german','SLK 55 AMG'),(1151,67,'german','SLR'),(1152,67,'german','SLS AMG'),(1153,67,'german','Sprinter'),(1154,67,'german','V-Klasse (All)'),(1155,67,'german','V 200'),(1156,67,'german','V 220'),(1157,67,'german','V 230'),(1158,67,'german','V 280'),(1159,67,'german','Vaneo'),(1160,67,'german','Vario'),(1161,67,'german','Viano'),(1162,67,'german','Vito'),(1163,68,'german','DUÈ'),(1164,68,'german','M.Go'),(1165,68,'german','M-8'),(1166,68,'german','MC1'),(1167,68,'german','MC2'),(1168,69,'german','3000 GT'),(1169,69,'german','ASX'),(1170,69,'german','Canter'),(1171,69,'german','Carisma'),(1172,69,'german','Colt'),(1173,69,'german','Cordia'),(1174,69,'german','Cosmos'),(1175,69,'german','Diamante'),(1176,69,'german','Eclipse'),(1177,69,'german','Galant'),(1178,69,'german','Galloper'),(1179,69,'german','Grandis'),(1180,69,'german','i-MiEV'),(1181,69,'german','L200'),(1182,69,'german','L300'),(1183,69,'german','L400'),(1184,69,'german','Lancer'),(1185,69,'german','Mirage'),(1186,69,'german','Montero'),(1187,69,'german','Outlander'),(1188,69,'german','Pajero'),(1189,69,'german','Pajero Pinin'),(1190,69,'german','Pick-up'),(1191,69,'german','Santamo'),(1192,69,'german','Sapporo'),(1193,69,'german','Sigma'),(1194,69,'german','Space Gear'),(1195,69,'german','Space Runner'),(1196,69,'german','Space Star'),(1197,69,'german','Space Wagon'),(1198,69,'german','Starion'),(1199,69,'german','Tredia'),(1200,70,'german','4/4'),(1201,70,'german','Aero 8'),(1202,70,'german','Plus 4'),(1203,70,'german','Plus 8'),(1204,70,'german','Roadster'),(1205,72,'german','100 NX'),(1206,72,'german','200 SX'),(1207,72,'german','240 SX'),(1208,72,'german','280 ZX'),(1209,72,'german','300 ZX'),(1210,72,'german','350Z'),(1211,72,'german','370Z'),(1212,72,'german','Almera'),(1213,72,'german','Almera Tino'),(1214,72,'german','Altima'),(1215,72,'german','Armada'),(1216,72,'german','Bluebird'),(1217,72,'german','Cabstar'),(1218,72,'german','Cargo'),(1219,72,'german','Cherry'),(1220,72,'german','Cube'),(1221,72,'german','Evalia'),(1222,72,'german','Frontier'),(1223,72,'german','GT-R'),(1224,72,'german','Interstar'),(1225,72,'german','Juke'),(1226,72,'german','King Cab'),(1227,72,'german','Kubistar'),(1228,72,'german','Laurel'),(1229,72,'german','Leaf'),(1230,72,'german','Maxima'),(1231,72,'german','Micra'),(1232,72,'german','Murano'),(1233,72,'german','Navara'),(1234,72,'german','Note'),(1235,72,'german','NP 300'),(1236,72,'german','NV200'),(1237,72,'german','NV400'),(1238,72,'german','Pathfinder'),(1239,72,'german','Patrol'),(1240,72,'german','PickUp'),(1241,72,'german','Pixo'),(1242,72,'german','Prairie'),(1243,72,'german','Primastar'),(1244,72,'german','Primera'),(1245,72,'german','Qashqai'),(1246,72,'german','Qashqai+2'),(1247,72,'german','Quest'),(1248,72,'german','Sentra'),(1249,72,'german','Serena'),(1250,72,'german','Silvia'),(1251,72,'german','Skyline'),(1252,72,'german','Sunny'),(1253,72,'german','Terrano'),(1254,72,'german','Tiida'),(1255,72,'german','Titan'),(1256,72,'german','Trade'),(1257,72,'german','Urvan'),(1258,72,'german','Vanette'),(1259,72,'german','X-Trail'),(1260,73,'german','Bravada'),(1261,73,'german','Custom Cruiser'),(1262,73,'german','Cutlass'),(1263,73,'german','Delta 88'),(1264,73,'german','Silhouette'),(1265,73,'german','Supreme'),(1266,73,'german','Toronado'),(1267,74,'german','Adam'),(1268,74,'german','Agila'),(1269,74,'german','Ampera'),(1270,74,'german','Antara'),(1271,74,'german','Arena'),(1272,74,'german','Ascona'),(1273,74,'german','Astra'),(1274,74,'german','Calibra'),(1275,74,'german','Campo'),(1276,74,'german','Cascada'),(1277,74,'german','Cavalier'),(1278,74,'german','Combo'),(1279,74,'german','Commodore'),(1280,74,'german','Corsa'),(1281,74,'german','Diplomat'),(1282,74,'german','Frontera'),(1283,74,'german','GT'),(1284,74,'german','Insignia'),(1285,74,'german','Kadett'),(1286,74,'german','Manta'),(1287,74,'german','Meriva'),(1288,74,'german','Mokka'),(1289,74,'german','Monterey'),(1290,74,'german','Monza'),(1291,74,'german','Movano'),(1292,74,'german','Nova'),(1293,74,'german','Omega'),(1294,74,'german','Pick Up Sportscap'),(1295,74,'german','Rekord'),(1296,74,'german','Senator'),(1297,74,'german','Signum'),(1298,74,'german','Sintra'),(1299,74,'german','Speedster'),(1300,74,'german','Tigra'),(1301,74,'german','Vectra'),(1302,74,'german','Vivaro'),(1303,74,'german','Zafira'),(1304,74,'german','Zafira Tourer'),(1305,76,'german','1007'),(1306,76,'german','104'),(1307,76,'german','106'),(1308,76,'german','107'),(1309,76,'german','2008'),(1310,76,'german','204'),(1311,76,'german','205'),(1312,76,'german','206'),(1313,76,'german','207'),(1314,76,'german','208'),(1315,76,'german','3008'),(1316,76,'german','301'),(1317,76,'german','304'),(1318,76,'german','305'),(1319,76,'german','306'),(1320,76,'german','307'),(1321,76,'german','308'),(1322,76,'german','309'),(1323,76,'german','4007'),(1324,76,'german','4008'),(1325,76,'german','404'),(1326,76,'german','405'),(1327,76,'german','406'),(1328,76,'german','407'),(1329,76,'german','5008'),(1330,76,'german','504'),(1331,76,'german','505'),(1332,76,'german','508'),(1333,76,'german','604'),(1334,76,'german','605'),(1335,76,'german','607'),(1336,76,'german','806'),(1337,76,'german','807'),(1338,76,'german','Bipper'),(1339,76,'german','Bipper Tepee'),(1340,76,'german','Boxer'),(1341,76,'german','Expert'),(1342,76,'german','Expert Tepee'),(1343,76,'german','iOn'),(1344,76,'german','J5'),(1345,76,'german','Partner'),(1346,76,'german','Partner Tepee'),(1347,76,'german','RCZ'),(1348,76,'german','TePee'),(1349,77,'german','APE'),(1350,77,'german','APE TM'),(1351,77,'german','Porter'),(1352,78,'german','Prowler'),(1353,79,'german','6000'),(1354,79,'german','Bonneville'),(1355,79,'german','Fiero'),(1356,79,'german','Firebird'),(1357,79,'german','G6'),(1358,79,'german','Grand-Am'),(1359,79,'german','Grand-Prix'),(1360,79,'german','GTO'),(1361,79,'german','Montana'),(1362,79,'german','Solstice'),(1363,79,'german','Sunbird'),(1364,79,'german','Sunfire'),(1365,79,'german','Targa'),(1366,79,'german','Trans Am'),(1367,79,'german','Trans Sport'),(1368,79,'german','Vibe'),(1369,80,'german','356'),(1370,80,'german','911 (All)'),(1371,80,'german','911'),(1372,80,'german','964'),(1373,80,'german','991'),(1374,80,'german','993'),(1375,80,'german','996'),(1376,80,'german','997'),(1377,80,'german','912'),(1378,80,'german','914'),(1379,80,'german','924'),(1380,80,'german','928'),(1381,80,'german','944'),(1382,80,'german','959'),(1383,80,'german','962'),(1384,80,'german','968'),(1385,80,'german','Boxster'),(1386,80,'german','Carrera GT'),(1387,80,'german','Cayenne'),(1388,80,'german','Cayman'),(1389,80,'german','Panamera'),(1390,81,'german','300 Serie'),(1391,81,'german','400 Serie'),(1392,82,'german','Alpine A110'),(1393,82,'german','Alpine A310'),(1394,82,'german','Alpine V6'),(1395,82,'german','Avantime'),(1396,82,'german','Captur'),(1397,82,'german','Clio'),(1398,82,'german','Coupe'),(1399,82,'german','Espace'),(1400,82,'german','Express'),(1401,82,'german','Fluence'),(1402,82,'german','Fuego'),(1403,82,'german','Grand Espace'),(1404,82,'german','Grand Modus'),(1405,82,'german','Grand Scenic'),(1406,82,'german','Kangoo'),(1407,82,'german','Koleos'),(1408,82,'german','Laguna'),(1409,82,'german','Latitude'),(1410,82,'german','Mascott'),(1411,82,'german','Master'),(1412,82,'german','Megane'),(1413,82,'german','Modus'),(1414,82,'german','P 1400'),(1415,82,'german','R 11'),(1416,82,'german','R 14'),(1417,82,'german','R 18'),(1418,82,'german','R 19'),(1419,82,'german','R 20'),(1420,82,'german','R 21'),(1421,82,'german','R 25'),(1422,82,'german','R 30'),(1423,82,'german','R 4'),(1424,82,'german','R 5'),(1425,82,'german','R 6'),(1426,82,'german','R 9'),(1427,82,'german','Rapid'),(1428,82,'german','Safrane'),(1429,82,'german','Scenic'),(1430,82,'german','Spider'),(1431,82,'german','Trafic'),(1432,82,'german','Twingo'),(1433,82,'german','Twizy'),(1434,82,'german','Vel Satis'),(1435,82,'german','Wind'),(1436,82,'german','ZOE'),(1437,83,'german','Corniche'),(1438,83,'german','Flying Spur'),(1439,83,'german','Ghost'),(1440,83,'german','Park Ward'),(1441,83,'german','Phantom'),(1442,83,'german','Silver Cloud'),(1443,83,'german','Silver Dawn'),(1444,83,'german','Silver Seraph'),(1445,83,'german','Silver Shadow'),(1446,83,'german','Silver Spirit'),(1447,83,'german','Silver Spur'),(1448,84,'german','100'),(1449,84,'german','111'),(1450,84,'german','114'),(1451,84,'german','115'),(1452,84,'german','200'),(1453,84,'german','213'),(1454,84,'german','214'),(1455,84,'german','216'),(1456,84,'german','218'),(1457,84,'german','220'),(1458,84,'german','25'),(1459,84,'german','400'),(1460,84,'german','414'),(1461,84,'german','416'),(1462,84,'german','418'),(1463,84,'german','420'),(1464,84,'german','45'),(1465,84,'german','600'),(1466,84,'german','618'),(1467,84,'german','620'),(1468,84,'german','623'),(1469,84,'german','75'),(1470,84,'german','800'),(1471,84,'german','820'),(1472,84,'german','825'),(1473,84,'german','827'),(1474,84,'german','City Rover'),(1475,84,'german','Metro'),(1476,84,'german','Montego'),(1477,84,'german','SD'),(1478,84,'german','Streetwise'),(1479,86,'german','9-3'),(1480,86,'german','9-4X'),(1481,86,'german','9-5'),(1482,86,'german','9-7X'),(1483,86,'german','90'),(1484,86,'german','900'),(1485,86,'german','9000'),(1486,86,'german','96'),(1487,86,'german','99'),(1488,88,'german','Alhambra'),(1489,88,'german','Altea'),(1490,88,'german','Arosa'),(1491,88,'german','Cordoba'),(1492,88,'german','Exeo'),(1493,88,'german','Ibiza'),(1494,88,'german','Inca'),(1495,88,'german','Leon'),(1496,88,'german','Malaga'),(1497,88,'german','Marbella'),(1498,88,'german','Mii'),(1499,88,'german','Terra'),(1500,88,'german','Toledo'),(1501,89,'german','105'),(1502,89,'german','120'),(1503,89,'german','130'),(1504,89,'german','135'),(1505,89,'german','Citigo'),(1506,89,'german','Fabia'),(1507,89,'german','Favorit'),(1508,89,'german','Felicia'),(1509,89,'german','Forman'),(1510,89,'german','Octavia'),(1511,89,'german','Pick-up'),(1512,89,'german','Praktik'),(1513,89,'german','Rapid'),(1514,89,'german','Roomster'),(1515,89,'german','Superb'),(1516,89,'german','Yeti'),(1517,90,'german','Crossblade'),(1518,90,'german','ForFour'),(1519,90,'german','ForTwo'),(1520,90,'german','Roadster'),(1521,92,'german','C8'),(1522,92,'german','C8 AILERON'),(1523,92,'german','C8 DOUBLE 12 S'),(1524,92,'german','C8 LAVIOLETTE SWB'),(1525,92,'german','C8 SPYDER SWB'),(1526,93,'german','Actyon'),(1527,93,'german','Family'),(1528,93,'german','Korando'),(1529,93,'german','Kyron'),(1530,93,'german','MUSSO'),(1531,93,'german','REXTON'),(1532,93,'german','Rodius'),(1533,94,'german','B9 Tribeca'),(1534,94,'german','Baja'),(1535,94,'german','BRZ'),(1536,94,'german','Forester'),(1537,94,'german','Impreza'),(1538,94,'german','Justy'),(1539,94,'german','Legacy'),(1540,94,'german','Libero'),(1541,94,'german','OUTBACK'),(1542,94,'german','SVX'),(1543,94,'german','Trezia'),(1544,94,'german','Tribeca'),(1545,94,'german','Vivio'),(1546,94,'german','XT'),(1547,94,'german','XV'),(1548,95,'german','Alto'),(1549,95,'german','Baleno'),(1550,95,'german','Cappuccino'),(1551,95,'german','Carry'),(1552,95,'german','Grand Vitara'),(1553,95,'german','Ignis'),(1554,95,'german','Jimny'),(1555,95,'german','Kizashi'),(1556,95,'german','Liana'),(1557,95,'german','LJ'),(1558,95,'german','SJ Samurai'),(1559,95,'german','Splash'),(1560,95,'german','Super-Carry'),(1561,95,'german','Swift'),(1562,95,'german','SX4'),(1563,95,'german','SX4 S-Cross'),(1564,95,'german','Vitara'),(1565,95,'german','Wagon R+'),(1566,95,'german','X-90'),(1567,97,'german','Chimaera'),(1568,97,'german','Griffith'),(1569,97,'german','Tuscan'),(1570,98,'german','Horizon'),(1571,98,'german','Samba'),(1572,99,'german','Indica'),(1573,99,'german','Indigo'),(1574,99,'german','Nano'),(1575,99,'german','Safari'),(1576,99,'german','Sumo'),(1577,99,'german','Telcoline'),(1578,99,'german','Telcosport'),(1579,99,'german','Xenon'),(1580,101,'german','4-Runner'),(1581,101,'german','Auris'),(1582,101,'german','Auris Touring Sports'),(1583,101,'german','Avalon'),(1584,101,'german','Avensis'),(1585,101,'german','Avensis Verso'),(1586,101,'german','Aygo'),(1587,101,'german','Camry'),(1588,101,'german','Carina'),(1589,101,'german','Celica'),(1590,101,'german','Corolla'),(1591,101,'german','Corolla Verso'),(1592,101,'german','Cressida'),(1593,101,'german','Crown'),(1594,101,'german','Dyna'),(1595,101,'german','FJ'),(1596,101,'german','GT86'),(1597,101,'german','Hiace'),(1598,101,'german','Highlander'),(1599,101,'german','Hilux'),(1600,101,'german','IQ'),(1601,101,'german','Land Cruiser'),(1602,101,'german','Lite-Ace'),(1603,101,'german','MR 2'),(1604,101,'german','Paseo'),(1605,101,'german','Picnic'),(1606,101,'german','Previa'),(1607,101,'german','Prius'),(1608,101,'german','Prius+'),(1609,101,'german','RAV 4'),(1610,101,'german','Sequoia'),(1611,101,'german','Sienna'),(1612,101,'german','Starlet'),(1613,101,'german','Supra'),(1614,101,'german','Tacoma'),(1615,101,'german','Tercel'),(1616,101,'german','Tundra'),(1617,101,'german','Urban Cruiser'),(1618,101,'german','Verso'),(1619,101,'german','Verso-S'),(1620,101,'german','Yaris'),(1621,102,'german','601'),(1622,103,'german','Dolomite'),(1623,103,'german','Moss'),(1624,103,'german','Spitfire'),(1625,103,'german','TR3'),(1626,103,'german','TR4'),(1627,103,'german','TR5'),(1628,103,'german','TR6'),(1629,103,'german','TR7'),(1630,103,'german','TR8'),(1631,104,'german','181'),(1632,104,'german','Amarok'),(1633,104,'german','Beetle'),(1634,104,'german','Bora'),(1635,104,'german','Buggy'),(1636,104,'german','Caddy'),(1637,104,'german','CC'),(1638,104,'german','Corrado'),(1639,104,'german','Crafter'),(1640,104,'german','Eos'),(1641,104,'german','Fox'),(1642,104,'german','Golf (All)'),(1643,104,'german','Golf'),(1644,104,'german','Golf Plus'),(1645,104,'german','Iltis'),(1646,104,'german','Jetta'),(1647,104,'german','Karmann Ghia'),(1648,104,'german','Käfer'),(1649,104,'german','LT'),(1650,104,'german','Lupo'),(1651,104,'german','New Beetle'),(1652,104,'german','Passat (All)'),(1653,104,'german','Passat'),(1654,104,'german','Passat CC'),(1655,104,'german','Phaeton'),(1656,104,'german','Polo'),(1657,104,'german','Routan'),(1658,104,'german','Santana'),(1659,104,'german','Scirocco'),(1660,104,'german','Sharan'),(1661,104,'german','T1'),(1662,104,'german','T2'),(1663,104,'german','T3 (All)'),(1664,104,'german','T3 Caravelle'),(1665,104,'german','T3 Multivan'),(1666,104,'german','T3 other'),(1667,104,'german','T3 Kombi'),(1668,104,'german','T4 (All)'),(1669,104,'german','T4 California'),(1670,104,'german','T4 Caravelle'),(1671,104,'german','T4 Multivan'),(1672,104,'german','T4 other'),(1673,104,'german','T4 Kombi'),(1674,104,'german','T5 (All)'),(1675,104,'german','T5 California'),(1676,104,'german','T5 Caravelle'),(1677,104,'german','T5 Multivan'),(1678,104,'german','T5 Shuttle'),(1679,104,'german','T5 other'),(1680,104,'german','T5 Kombi'),(1681,104,'german','Taro'),(1682,104,'german','Tiguan'),(1683,104,'german','Touareg'),(1684,104,'german','Touran'),(1685,104,'german','up!'),(1686,104,'german','Vento'),(1687,105,'german','240'),(1688,105,'german','244'),(1689,105,'german','245'),(1690,105,'german','262'),(1691,105,'german','264'),(1692,105,'german','340'),(1693,105,'german','360'),(1694,105,'german','440'),(1695,105,'german','460'),(1696,105,'german','480'),(1697,105,'german','740'),(1698,105,'german','744'),(1699,105,'german','745'),(1700,105,'german','760'),(1701,105,'german','780'),(1702,105,'german','850'),(1703,105,'german','855'),(1704,105,'german','940'),(1705,105,'german','944'),(1706,105,'german','945'),(1707,105,'german','960'),(1708,105,'german','965'),(1709,105,'german','Amazon'),(1710,105,'german','C30'),(1711,105,'german','C70'),(1712,105,'german','Polar'),(1713,105,'german','S40'),(1714,105,'german','S60'),(1715,105,'german','S70'),(1716,105,'german','S80'),(1717,105,'german','S90'),(1718,105,'german','V40'),(1719,105,'german','V50'),(1720,105,'german','V60'),(1721,105,'german','V70'),(1722,105,'german','V90'),(1723,105,'german','XC 60'),(1724,105,'german','XC 70'),(1725,105,'german','XC 90'),(1726,106,'german','311'),(1727,106,'german','353'),(1728,108,'german','MF 25'),(1729,108,'german','MF 28'),(1730,108,'german','MF 3'),(1731,108,'german','MF 30'),(1732,108,'german','MF 35'),(1733,108,'german','MF 4'),(1734,108,'german','MF 5');
UNLOCK TABLES;

--
-- Table structure for table `oxy_modules`
--

DROP TABLE IF EXISTS `oxy_modules`;

CREATE TABLE `oxy_modules` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `enabled` tinyint(1) DEFAULT '1',
  UNIQUE KEY `id` (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_modules`
--

LOCK TABLES `oxy_modules` WRITE;
INSERT INTO `oxy_modules` VALUES ('auto_renew','Auto Renew','Auto renew expired listings after a number of days.',1),('auto_repost','Auto Repost Ads','Paid feature to allow users to push their listings to the top of the search list a number of times at a specific interval.',1),('default_images','Default ads images for categories','This module allows you to configure different images to display when the listing has no photos for different categories. For example display an image containing a car for auto ads, a building for real estate ads and so on.',1),('eu_cookies','EU cookies regulation','Show a notification banner on your site which states that your site uses cookies, as European Union legislation requests.',1),('extra_visits','Extra Visits','Add extra false numbers of visits every time someone accesses a listing. A random number of visits between 1 and a configured value is added.',1),('latest_visited','Latest Visited','Shows the latest ads seen by the current visitor.',1),('similar_ads','Similar Ads','Shows a number of similar ads on listing details page.',1),('spam_prevention','Spam Prevention','Checks email and IP addresses against a spammers list from StopForumSpam.com, Abuseipdb.com or IPQualityScore.com',1),('suspend_user','Suspend user','Allows the administrator to suspend a user for a number of days. After the selected number of days, the user account will automatically reactivate.',1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_muthofun`
--

DROP TABLE IF EXISTS `oxy_muthofun`;

CREATE TABLE `oxy_muthofun` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_muthofun`
--

LOCK TABLES `oxy_muthofun` WRITE;
INSERT INTO `oxy_muthofun` VALUES ('',NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_muthofun_log`
--

DROP TABLE IF EXISTS `oxy_muthofun_log`;

CREATE TABLE `oxy_muthofun_log` (
  `success` int(1) DEFAULT '1',
  `message_id` varchar(30) DEFAULT NULL,
  `mobile_no` varchar(30) DEFAULT NULL,
  `error_message` varchar(200) DEFAULT NULL,
  `details` text,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_muthofun_log`
--

LOCK TABLES `oxy_muthofun_log` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_new_alerts`
--

DROP TABLE IF EXISTS `oxy_new_alerts`;

CREATE TABLE `oxy_new_alerts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alert_id` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `listings` text,
  PRIMARY KEY (`id`),
  KEY `idx_alert_id` (`alert_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_new_alerts`
--

LOCK TABLES `oxy_new_alerts` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_options`
--

DROP TABLE IF EXISTS `oxy_options`;

CREATE TABLE `oxy_options` (
  `object_id` int(2) NOT NULL,
  `option` varchar(20) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_expires` datetime DEFAULT NULL,
  KEY `idx_id` (`object_id`),
  KEY `idx_option` (`option`),
  KEY `idx_date` (`date_added`),
  KEY `idx_expires` (`date_expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_options`
--

LOCK TABLES `oxy_options` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_packages`
--

DROP TABLE IF EXISTS `oxy_packages`;

CREATE TABLE `oxy_packages` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT 'ad',
  `amount` float DEFAULT '0',
  `no_words` int(5) DEFAULT '0',
  `no_days` int(4) DEFAULT '0',
  `no_pictures` int(2) DEFAULT NULL,
  `photo_mandatory` tinyint(1) DEFAULT '0',
  `no_ads` int(3) DEFAULT '1',
  `subscription_time` int(5) DEFAULT '0',
  `html_editor` tinyint(1) NOT NULL DEFAULT '0',
  `groups` varchar(250) DEFAULT '0',
  `categories` text,
  `order_no` int(5) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `highlited` tinyint(1) DEFAULT '0',
  `priority` int(4) DEFAULT '0',
  `video` tinyint(1) DEFAULT '0',
  `urgent` tinyint(1) DEFAULT '0',
  `url` tinyint(1) DEFAULT '0',
  `allow` int(2) DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_packages`
--

LOCK TABLES `oxy_packages` WRITE;
INSERT INTO `oxy_packages` VALUES (1,'ad',0,1000,30,4,0,1,0,0,'0','0',1,0,0,0,0,0,0,0,1),(2,'sub',30,0,0,50,1,0,0,1,'1','0',2,1,1,1,0,0,0,0,1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_packages_lang`
--

DROP TABLE IF EXISTS `oxy_packages_lang`;

CREATE TABLE `oxy_packages_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) DEFAULT '',
  `description` text,
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_packages_lang`
--

LOCK TABLES `oxy_packages_lang` WRITE;
INSERT INTO `oxy_packages_lang` VALUES (1,'eng','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(1,'esp','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(1,'french','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(1,'italian','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(1,'dutch','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(1,'german','Free Ad Plan','Free listing with up to 100 words and 4 pictures.'),(2,'eng','Premium Ad Plan','Premium Ad with unlimited text description and photos. highlighted and featured.'),(2,'german','Premium-Anzeigenplan.','Premium-Anzeige mit unbegrenzter Textbeschreibung und Fotos. hervorgehoben und vorgestellt.&nbsp;');
UNLOCK TABLES;

--
-- Table structure for table `oxy_pagseguro_return`
--

DROP TABLE IF EXISTS `oxy_pagseguro_return`;

CREATE TABLE `oxy_pagseguro_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `reference` varchar(30) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `grossAmount` double DEFAULT NULL,
  `netAmount` double DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `areaCode` varchar(3) DEFAULT NULL,
  `number` varchar(30) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_pagseguro_return`
--

LOCK TABLES `oxy_pagseguro_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_pagseguro_settings`
--

DROP TABLE IF EXISTS `oxy_pagseguro_settings`;

CREATE TABLE `oxy_pagseguro_settings` (
  `pagseguro_email` varchar(50) DEFAULT NULL,
  `pagseguro_token` varchar(50) DEFAULT NULL,
  `pagseguro_currency` varchar(3) DEFAULT NULL,
  `pagseguro_item_name` varchar(40) DEFAULT NULL,
  `pagseguro_item_description` text,
  `pagseguro_test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_pagseguro_settings`
--

LOCK TABLES `oxy_pagseguro_settings` WRITE;
INSERT INTO `oxy_pagseguro_settings` VALUES (NULL,NULL,'BRL','Classified ads','Classified ads',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_paydunya_return`
--

DROP TABLE IF EXISTS `oxy_paydunya_return`;

CREATE TABLE `oxy_paydunya_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `response_code` varchar(5) DEFAULT NULL,
  `response_text` varchar(30) DEFAULT NULL,
  `hash` varchar(150) DEFAULT NULL,
  `token` varchar(40) DEFAULT NULL,
  `total_amount` varchar(20) DEFAULT NULL,
  `mode` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `receipt_url` varchar(150) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paydunya_return`
--

LOCK TABLES `oxy_paydunya_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_paydunya_settings`
--

DROP TABLE IF EXISTS `oxy_paydunya_settings`;

CREATE TABLE `oxy_paydunya_settings` (
  `master_key` varchar(50) DEFAULT NULL,
  `public_key` varchar(50) DEFAULT NULL,
  `private_key` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `test` tinyint(1) DEFAULT '0',
  `company_name` varchar(50) DEFAULT NULL,
  `tagline` varchar(50) DEFAULT NULL,
  `company_phone` varchar(50) DEFAULT NULL,
  `company_address` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `logo_url` varchar(50) DEFAULT NULL,
  `item_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paydunya_settings`
--

LOCK TABLES `oxy_paydunya_settings` WRITE;
INSERT INTO `oxy_paydunya_settings` VALUES (NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,'Classifieds ad');
UNLOCK TABLES;

--
-- Table structure for table `oxy_payfast_return`
--

DROP TABLE IF EXISTS `oxy_payfast_return`;

CREATE TABLE `oxy_payfast_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `m_payment_id` varchar(100) DEFAULT NULL,
  `pf_payment_id` varchar(100) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_description` varchar(250) DEFAULT NULL,
  `amount_gross` varchar(20) DEFAULT NULL,
  `amount_fee` varchar(20) DEFAULT NULL,
  `amount_net` varchar(20) DEFAULT NULL,
  `name_first` varchar(50) DEFAULT NULL,
  `name_last` varchar(50) DEFAULT NULL,
  `email_address` varchar(60) DEFAULT NULL,
  `merchant_id` varchar(60) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payfast_return`
--

LOCK TABLES `oxy_payfast_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_payfast_settings`
--

DROP TABLE IF EXISTS `oxy_payfast_settings`;

CREATE TABLE `oxy_payfast_settings` (
  `merchant_id` varchar(20) DEFAULT NULL,
  `merchant_key` varchar(50) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `demo` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payfast_settings`
--

LOCK TABLES `oxy_payfast_settings` WRITE;
INSERT INTO `oxy_payfast_settings` VALUES ('10000100','46f0cd694581a','Classifieds ad',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_payment_actions`
--

DROP TABLE IF EXISTS `oxy_payment_actions`;

CREATE TABLE `oxy_payment_actions` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT '0',
  `processor` varchar(30) DEFAULT NULL,
  `ukey` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `action` text,
  `post` text,
  `completed` tinyint(1) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `subscr_signup` tinyint(1) DEFAULT '0',
  `subscr_payment` tinyint(1) DEFAULT '0',
  `subscr_id` varchar(40) DEFAULT NULL,
  `tax` float DEFAULT '0',
  `affiliate_id` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ukey` (`ukey`),
  KEY `idx_amount` (`amount`),
  KEY `idx_date` (`date`),
  KEY `idx_user` (`user_id`),
  KEY `idx_processor` (`processor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payment_actions`
--

LOCK TABLES `oxy_payment_actions` WRITE;
INSERT INTO `oxy_payment_actions` VALUES (1,1,'free','2c75234426ac8ee51148f4778a47acf5',0,'a:17:{s:5:\"ad_id\";i:1;s:6:\"pkg_id\";s:1:\"1\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-03 20:19:51',0,0,NULL,0,NULL),(2,1,'free','40d002344d4432d96d07be315a27e819',0,'a:17:{s:5:\"ad_id\";i:2;s:6:\"pkg_id\";s:1:\"2\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-05 13:43:15',0,0,NULL,0,NULL),(3,1,'free','18412827cddc4b1083f6b053bb46c8bb',0,'a:17:{s:5:\"ad_id\";i:3;s:6:\"pkg_id\";s:1:\"3\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-12 15:29:59',0,0,NULL,0,NULL),(4,1,'paypal','df91e840cb196b5e4c7e4295557976ed',30,'a:17:{s:5:\"ad_id\";i:0;s:6:\"pkg_id\";i:4;s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:2:\"30\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','a:10:{s:8:\"business\";s:18:\"email@yoursite.com\";s:13:\"currency_code\";s:3:\"USD\";s:9:\"item_name\";s:12:\"YourSite.com\";s:2:\"rm\";s:1:\"2\";s:3:\"cmd\";s:7:\"_xclick\";s:7:\"charset\";s:5:\"UTF-8\";s:6:\"return\";s:105:\"https://www.getrent.live/payment_return/paypal.php?mode=success&amp;ukey=df91e840cb196b5e4c7e4295557976ed\";s:13:\"cancel_return\";s:104:\"https://www.getrent.live/payment_return/paypal.php?mode=cancel&amp;ukey=df91e840cb196b5e4c7e4295557976ed\";s:10:\"notify_url\";s:105:\"https://www.getrent.live/payment_return/paypal.php?mode=process&amp;ukey=df91e840cb196b5e4c7e4295557976ed\";s:6:\"amount\";s:5:\"30.00\";}',0,'2021-08-12 16:11:18',0,0,NULL,0,NULL),(5,1,'free','6737f8a4c9f62ec9b572c1d6d86e4697',0,'a:17:{s:5:\"ad_id\";i:0;s:6:\"pkg_id\";i:5;s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:2:\"30\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:5:\"DISCO\";}','s:0:\"\";',1,'2021-08-16 12:08:22',0,0,NULL,0,NULL),(6,2,'free','f19c5551c21b16e251be164afc8fadc2',0,'a:17:{s:5:\"ad_id\";i:4;s:6:\"pkg_id\";s:1:\"6\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-17 12:24:57',0,0,NULL,0,NULL),(7,2,'free','0c78e41202c0290fb259f9ddd25f34b8',0,'a:17:{s:5:\"ad_id\";i:5;s:6:\"pkg_id\";s:1:\"7\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-17 12:36:10',0,0,NULL,0,NULL),(8,2,'free','08065d73c16a73f551c50c11d59ba73b',0,'a:17:{s:5:\"ad_id\";i:6;s:6:\"pkg_id\";s:1:\"8\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-17 12:44:08',0,0,NULL,0,NULL),(9,1,'free','788a1206efa35b7fff6ec63634ee98e6',0,'a:17:{s:5:\"ad_id\";i:7;s:6:\"pkg_id\";s:1:\"5\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-17 14:22:46',0,0,NULL,0,NULL),(10,2,'free','fee5fbc063c373367126ef7808146f46',0,'a:17:{s:5:\"ad_id\";i:8;s:6:\"pkg_id\";s:1:\"9\";s:14:\"credits_pkg_id\";i:0;s:5:\"newad\";a:2:{s:5:\"value\";i:1;s:5:\"price\";i:0;}s:7:\"renewad\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"featured2\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"featured\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:9:\"highlited\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:8:\"priority\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"urgent\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"video\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:3:\"url\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:6:\"newpkg\";a:2:{s:5:\"value\";i:1;s:5:\"price\";s:1:\"0\";}s:8:\"renewpkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:14:\"new_creditspkg\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:5:\"store\";a:2:{s:5:\"value\";i:0;s:5:\"price\";i:0;}s:13:\"discount_code\";s:0:\"\";}','s:0:\"\";',1,'2021-08-23 08:48:04',0,0,NULL,0,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_payment_processors`
--

DROP TABLE IF EXISTS `oxy_payment_processors`;

CREATE TABLE `oxy_payment_processors` (
  `processor_name` varchar(50) DEFAULT NULL,
  `processor_title` varchar(100) DEFAULT NULL,
  `processor_code` varchar(20) DEFAULT NULL,
  `processor_table` varchar(30) DEFAULT NULL,
  `processor_class` varchar(30) DEFAULT NULL,
  `processor_ret_table` varchar(30) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '1',
  `manual` tinyint(1) DEFAULT '1',
  `free` tinyint(1) DEFAULT '0',
  `pending` tinyint(1) DEFAULT '0',
  `recurring` tinyint(1) DEFAULT '-1',
  `percent_tax` float DEFAULT '0',
  `fixed_tax` float DEFAULT '0',
  KEY `idx_code` (`processor_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payment_processors`
--

LOCK TABLES `oxy_payment_processors` WRITE;
INSERT INTO `oxy_payment_processors` VALUES ('PayPal','PayPal','paypal','paypal_settings','paypal','paypal_ipn',1,0,0,0,0,0,0),('2Checkout','2Checkout','2co','2co_settings','to_checkout','2co_return',0,0,0,0,-1,0,0),('Skrill','Skrill','mb','mb_settings','moneybookers','mb_return',0,0,0,0,-1,0,0),('Authorize.net SIM','Authorize.net','authorize','authorize_settings','authorize','authorize_return',0,0,0,0,-1,0,0),('ePay','Credit Card by ePay','epay','epay_settings','epay','epay_return',0,0,0,0,-1,0,0),('Manual Payment','Check','manual','','manual_payment','manual_return',1,1,0,1,-1,0,0),('Fortumo','Fortumo SMS payment','fortumo','fortumo_settings','fortumo','fortumo_return',0,0,0,0,-1,0,0),('ICEPAY','ICEPAY','icepay','icepay_settings','icepay','icepay_ipn',0,0,0,0,-1,0,0),('PayTPV','PayTPV','paytpv','paytpv_settings','paytpv','paytpv_return',0,0,0,0,-1,0,0),('Free','Free','free','','free','',1,0,1,0,-1,0,0),('Credits','Credits','credits','credits_settings','credits_payment','credits_return',0,0,1,0,-1,0,0),('Hipay','Hipay','hipay','hipay_settings','hipay','hipay_return',0,0,0,0,-1,0,0),('Payfast','PayFast','payfast','payfast_settings','payfast','payfast_return',0,0,0,0,-1,0,0),('Robokassa','Robokassa','robokassa','robokassa_settings','robokassa','robokassa_return',0,0,0,0,-1,0,0),('Klarna','Klarna','klarna','klarna_settings','klarna','klarna_return',0,0,0,0,-1,0,0),('Instamojo','Instamojo','instamojo','instamojo_settings','instamojo','instamojo_return',0,0,0,0,-1,0,0),('Pagseguro','Pagseguro','pagseguro','pagseguro_settings','pagseguro','pagseguro_return',0,0,0,0,-1,0,0),('CCBill','CCBill','ccbill','ccbill_settings','ccbill','ccbill_return',0,0,0,0,0,0,0),('PayU','PayU','payu','payu_settings','payu','payu_return',0,0,0,0,-1,0,0),('CinetPay','CinetPay','cinetpay','cinetpay_settings','cinetpay','cinetpay_return',0,0,0,0,0,0,0),('Stripe','Stripe','stripe','stripe_settings','stripe','stripe_return',0,0,0,0,-1,0,0),('Webxpay','Webxpay','webxpay','webxpay_settings','webxpay','webxpay_return',0,0,0,0,-1,0,0),('mobilPay','mobilPay','mobilpay','mobilpay_settings','mobilpay','mobilpay_return',0,0,0,0,-1,0,0),('EuPlatesc','EuPlatesc','euplatesc','euplatesc_settings','euplatesc','euplatesc_return',0,0,0,0,-1,0,0),('Paydunya','Paydunya','paydunya','paydunya_settings','ppaydunya','paydunya_return',0,0,0,0,-1,0,0),('aamarPay','aamarPay','aamarpay','aamarpay_settings','aamarpay','aamarpay_return',0,0,0,0,-1,0,0),('Ebanx','ebanx','ebanx','ebanx_settings','ebanx','ebanx_return',0,0,0,0,-1,0,0),('BitPay/BTCPay','BitPay','btcpay','btcpay_settings','btcpay','btcpay_return',0,0,0,0,-1,0,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_paypal_ipn`
--

DROP TABLE IF EXISTS `oxy_paypal_ipn`;

CREATE TABLE `oxy_paypal_ipn` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `item_name` varchar(130) DEFAULT NULL,
  `receiver_email` varchar(125) DEFAULT NULL,
  `item_number` varchar(130) DEFAULT '0',
  `quantity` smallint(6) DEFAULT '0',
  `invoice` varchar(25) DEFAULT '0',
  `custom` varchar(60) DEFAULT NULL,
  `payment_status` set('Completed','Pending','Failed','Denied') DEFAULT 'Failed',
  `pending_reason` set('echeck','intl','verify','address','upgrade','unilateral','other') DEFAULT 'other',
  `payment_gross` float DEFAULT '0',
  `payment_fee` float DEFAULT '0',
  `payment_type` set('echeck','instant') DEFAULT 'instant',
  `payment_date` varchar(50) DEFAULT '0',
  `txn_id` varchar(20) DEFAULT '0',
  `payer_email` varchar(125) DEFAULT NULL,
  `payer_status` set('verified','unverified','intl_verified') DEFAULT 'unverified',
  `txn_type` set('web_accept','cart','send_money','subscr_signup','subscr_cancel','subscr_failed','subscr_payment','subscr_eot') DEFAULT 'subscr_payment',
  `first_name` varchar(35) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `address_city` varchar(60) DEFAULT NULL,
  `address_street` varchar(60) DEFAULT NULL,
  `address_state` varchar(60) DEFAULT NULL,
  `address_zip` varchar(15) DEFAULT NULL,
  `address_country` varchar(60) DEFAULT NULL,
  `address_status` set('confirmed','unconfirmed') DEFAULT 'unconfirmed',
  `subscr_date` varchar(50) DEFAULT '0',
  `period1` varchar(20) DEFAULT 'UNK',
  `period2` varchar(20) DEFAULT 'UNK',
  `period3` varchar(20) DEFAULT 'UNK',
  `amount1` float DEFAULT '0',
  `amount2` float DEFAULT '0',
  `amount3` float DEFAULT '0',
  `recurring` tinyint(4) DEFAULT '1',
  `reattempt` tinyint(4) DEFAULT '0',
  `retry_at` varchar(50) DEFAULT NULL,
  `recur_times` smallint(6) DEFAULT '0',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `subscr_id` varchar(20) DEFAULT NULL,
  `entirepost` text,
  `paypal_verified` set('VERIFIED','INVALID') DEFAULT 'INVALID',
  `verify_sign` varchar(125) DEFAULT NULL,
  `mc_currency` varchar(20) DEFAULT 'USD',
  `mc_gross` float DEFAULT '0',
  `mc_amount1` float NOT NULL DEFAULT '0',
  `mc_amount2` float NOT NULL DEFAULT '0',
  `mc_amount3` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `txn_type` (`txn_type`),
  KEY `payment_status` (`payment_status`),
  KEY `pending_reason` (`pending_reason`),
  KEY `payer_status` (`payer_status`),
  KEY `payment_type` (`payment_type`),
  KEY `retry_at` (`retry_at`),
  KEY `receiver_email` (`receiver_email`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paypal_ipn`
--

LOCK TABLES `oxy_paypal_ipn` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_paypal_settings`
--

DROP TABLE IF EXISTS `oxy_paypal_settings`;

CREATE TABLE `oxy_paypal_settings` (
  `paypal_email` varchar(128) DEFAULT NULL,
  `paypal_currency` char(3) DEFAULT NULL,
  `paypal_pay_title` char(50) DEFAULT NULL,
  `paypal_demo` tinyint(1) DEFAULT '0',
  `paypal_lc` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paypal_settings`
--

LOCK TABLES `oxy_paypal_settings` WRITE;
INSERT INTO `oxy_paypal_settings` VALUES ('paypal@getrent.live','EUR','GetRent.live',0,'en');
UNLOCK TABLES;

--
-- Table structure for table `oxy_paytpv_return`
--

DROP TABLE IF EXISTS `oxy_paytpv_return`;

CREATE TABLE `oxy_paytpv_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(20) DEFAULT '0',
  `i` varchar(20) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `ret` varchar(50) DEFAULT NULL,
  `deserror` varchar(100) DEFAULT NULL,
  `TransactionType` int(3) DEFAULT NULL,
  `TransactionName` varchar(50) DEFAULT NULL,
  `CardCountry` varchar(50) DEFAULT NULL,
  `BankDateTime` datetime DEFAULT NULL,
  `Signature` varchar(50) DEFAULT NULL,
  `Order` varchar(50) DEFAULT NULL,
  `Response` varchar(50) DEFAULT NULL,
  `ErrorID` int(3) DEFAULT NULL,
  `ErrorDescription` int(100) DEFAULT NULL,
  `AuthCode` varchar(50) DEFAULT NULL,
  `Currency` varchar(3) DEFAULT NULL,
  `Amount` int(10) DEFAULT NULL,
  `AmountEur` int(10) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `AccountCode` varchar(50) DEFAULT NULL,
  `TpvID` int(5) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paytpv_return`
--

LOCK TABLES `oxy_paytpv_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_paytpv_settings`
--

DROP TABLE IF EXISTS `oxy_paytpv_settings`;

CREATE TABLE `oxy_paytpv_settings` (
  `paytpv_account` varchar(300) DEFAULT NULL,
  `paytpv_usercode` varchar(30) DEFAULT NULL,
  `paytpv_terminal` int(4) DEFAULT NULL,
  `paytpv_currency` varchar(3) DEFAULT NULL,
  `paytpv_password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_paytpv_settings`
--

LOCK TABLES `oxy_paytpv_settings` WRITE;
INSERT INTO `oxy_paytpv_settings` VALUES ('','',0,'EUR','');
UNLOCK TABLES;

--
-- Table structure for table `oxy_payu_return`
--

DROP TABLE IF EXISTS `oxy_payu_return`;

CREATE TABLE `oxy_payu_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `entirepost` text,
  `merchant_id` varchar(12) DEFAULT NULL,
  `state_pol` varchar(32) DEFAULT NULL,
  `risk` float DEFAULT NULL,
  `response_code_pol` varchar(255) DEFAULT NULL,
  `reference_sale` varchar(255) DEFAULT NULL,
  `reference_pol` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `payment_method` int(3) DEFAULT NULL,
  `payment_method_type` int(3) DEFAULT NULL,
  `installments_number` int(3) DEFAULT NULL,
  `value` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `additional_value` float DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `email_buyer` varchar(255) DEFAULT NULL,
  `cus` varchar(64) DEFAULT NULL,
  `pse_bank` varchar(255) DEFAULT NULL,
  `test` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `office_phone` varchar(20) DEFAULT NULL,
  `administrative_fee` float DEFAULT NULL,
  `administrative_fee_base` float DEFAULT NULL,
  `administrative_fee_tax` float DEFAULT NULL,
  `airline_code` varchar(4) DEFAULT NULL,
  `attempts` int(3) DEFAULT NULL,
  `authorization_code` varchar(12) DEFAULT NULL,
  `bank_id` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_country` varchar(2) DEFAULT NULL,
  `commision_pol` float DEFAULT NULL,
  `commision_pol_currency` varchar(3) DEFAULT NULL,
  `customer_number` varchar(10) DEFAULT NULL,
  `error_code_bank` varchar(255) DEFAULT NULL,
  `error_message_bank` varchar(255) DEFAULT NULL,
  `exchange_rate` float DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `nickname_buyer` varchar(150) DEFAULT NULL,
  `nickname_seller` varchar(150) DEFAULT NULL,
  `payment_method_id` int(10) DEFAULT NULL,
  `payment_request_state` varchar(32) DEFAULT NULL,
  `pseReference1` varchar(255) DEFAULT NULL,
  `pseReference2` varchar(255) DEFAULT NULL,
  `pseReference3` varchar(255) DEFAULT NULL,
  `response_message_pol` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(50) DEFAULT NULL,
  `shipping_country` varchar(2) DEFAULT NULL,
  `transaction_bank_id` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(36) DEFAULT NULL,
  `payment_method_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payu_return`
--

LOCK TABLES `oxy_payu_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_payu_settings`
--

DROP TABLE IF EXISTS `oxy_payu_settings`;

CREATE TABLE `oxy_payu_settings` (
  `payu_merchantId` varchar(128) DEFAULT NULL,
  `payu_accountId` varchar(100) DEFAULT NULL,
  `payu_apikey` varchar(50) DEFAULT NULL,
  `payu_description` text,
  `payu_currency` varchar(3) DEFAULT NULL,
  `payu_test` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_payu_settings`
--

LOCK TABLES `oxy_payu_settings` WRITE;
INSERT INTO `oxy_payu_settings` VALUES (NULL,NULL,NULL,NULL,'USD',0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_pending_edited`
--

DROP TABLE IF EXISTS `oxy_pending_edited`;

CREATE TABLE `oxy_pending_edited` (
  `ad_id` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `edited` text,
  `pictures_edited` text,
  `notification_sent` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_pending_edited`
--

LOCK TABLES `oxy_pending_edited` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_periodic`
--

DROP TABLE IF EXISTS `oxy_periodic`;

CREATE TABLE `oxy_periodic` (
  `type` varchar(30) DEFAULT NULL,
  `val` int(10) DEFAULT '0',
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_periodic`
--

LOCK TABLES `oxy_periodic` WRITE;
INSERT INTO `oxy_periodic` VALUES ('affiliates_payment',2,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_periodic_tasks`
--

DROP TABLE IF EXISTS `oxy_periodic_tasks`;

CREATE TABLE `oxy_periodic_tasks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `object_id` int(10) DEFAULT NULL,
  `listing_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `time` datetime NOT NULL,
  `extra` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_object` (`object_id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_listing` (`listing_id`),
  KEY `idx_type` (`type`),
  KEY `idx_time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_periodic_tasks`
--

LOCK TABLES `oxy_periodic_tasks` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_priorities`
--

DROP TABLE IF EXISTS `oxy_priorities`;

CREATE TABLE `oxy_priorities` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `price` double DEFAULT NULL,
  `order_no` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_order_no` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_priorities`
--

LOCK TABLES `oxy_priorities` WRITE;
INSERT INTO `oxy_priorities` VALUES (1,2,2),(2,1,1);
UNLOCK TABLES;

--
-- Table structure for table `oxy_priorities_lang`
--

DROP TABLE IF EXISTS `oxy_priorities_lang`;

CREATE TABLE `oxy_priorities_lang` (
  `id` int(4) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(50) DEFAULT NULL,
  KEY `idx_id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_priorities_lang`
--

LOCK TABLES `oxy_priorities_lang` WRITE;
INSERT INTO `oxy_priorities_lang` VALUES (1,'eng','Gold'),(2,'eng','Silver'),(1,'esp','Gold'),(2,'esp','Silver'),(1,'french','Gold'),(2,'french','Silver'),(1,'italian','Gold'),(2,'italian','Silver'),(1,'dutch','Gold'),(2,'dutch','Silver'),(1,'german','Gold'),(2,'german','Silver');
UNLOCK TABLES;

--
-- Table structure for table `oxy_regions`
--

DROP TABLE IF EXISTS `oxy_regions`;

CREATE TABLE `oxy_regions` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT '',
  `lang_id` varchar(20) DEFAULT 'eng',
  `dep` int(5) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`),
  KEY `idx_dep` (`dep`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_regions`
--

LOCK TABLES `oxy_regions` WRITE;
INSERT INTO `oxy_regions` VALUES (1,'AL','eng',1),(2,'AK','eng',1),(3,'AZ','eng',1),(4,'AR','eng',1),(5,'CA','eng',1),(6,'CO','eng',1),(7,'CT','eng',1),(8,'DE','eng',1),(9,'FL','eng',1),(10,'GA','eng',1),(11,'HI','eng',1),(12,'ID','eng',1),(13,'IL','eng',1),(14,'IN','eng',1),(15,'IA','eng',1),(16,'KS','eng',1),(17,'KY','eng',1),(18,'LA','eng',1),(19,'ME','eng',1),(20,'MD','eng',1),(21,'MA','eng',1),(22,'MI','eng',1),(23,'MN','eng',1),(24,'MS','eng',1),(25,'MO','eng',1),(26,'MT','eng',1),(27,'NE','eng',1),(28,'NV','eng',1),(29,'NH','eng',1),(30,'NJ','eng',1),(31,'NM','eng',1),(32,'NY','eng',1),(33,'NC','eng',1),(34,'ND','eng',1),(35,'OH','eng',1),(36,'OK','eng',1),(37,'OR','eng',1),(38,'PA','eng',1),(39,'RI','eng',1),(40,'SC','eng',1),(41,'SD','eng',1),(42,'TN','eng',1),(43,'TX','eng',1),(44,'UT','eng',1),(45,'VA','eng',1),(46,'VT','eng',1),(47,'WA','eng',1),(48,'WV','eng',1),(49,'WI','eng',1),(50,'WY','eng',1),(51,'Alberta','eng',2),(52,'British Columbia','eng',2),(53,'Manitoba','eng',2),(54,'New Brunswick','eng',2),(55,'Newfoundland and Labrador','eng',2),(56,'Northwest Territories','eng',2),(57,'Nova Scotia','eng',2),(58,'Nunavut','eng',2),(59,'Ontario','eng',2),(60,'Prince Edward Island','eng',2),(61,'Quebec','eng',2),(62,'Saskatchewan','eng',2),(63,'Yukon','eng',2),(64,'East England','eng',3),(65,'East Midlands','eng',3),(66,'London','eng',3),(67,'North East','eng',3),(68,'North West','eng',3),(69,'Ireland','eng',3),(70,'Scotland','eng',3),(71,'South East','eng',3),(72,'South West','eng',3),(73,'Wales','eng',3),(74,'West Midlands','eng',3),(75,'Yorks and Humber','eng',3),(76,'Álava','eng',4),(77,'Albacete','eng',4),(78,'Alicante','eng',4),(79,'Almería','eng',4),(80,'Asturias','eng',4),(81,'Ávila','eng',4),(82,'Badajoz','eng',4),(83,'Balears (Illas)','eng',4),(84,'Barcelona','eng',4),(85,'Burgos','eng',4),(86,'Cáceres','eng',4),(87,'Cádiz','eng',4),(88,'Cantabria','eng',4),(89,'Castellón','eng',4),(90,'Ceuta','eng',4),(91,'Ciudad Real','eng',4),(92,'Córdoba','eng',4),(93,'Coruña (La)','eng',4),(94,'Cuenca','eng',4),(95,'Gerona','eng',4),(96,'Granada','eng',4),(97,'Guadalajara','eng',4),(98,'Guipúzcua','eng',4),(99,'Huelva','eng',4),(100,'Huesca','eng',4),(101,'Jaén','eng',4),(102,'León','eng',4),(103,'Lérida','eng',4),(104,'Lugo','eng',4),(105,'Madrid','eng',4),(106,'Málaga','eng',4),(107,'Melilla','eng',4),(108,'Murcia','eng',4),(109,'Navarra','eng',4),(110,'Orense','eng',4),(111,'Palencia','eng',4),(112,'Palmas (Las)','eng',4),(113,'Pontevedra','eng',4),(114,'Rioja (La)','eng',4),(115,'Salamanca','eng',4),(116,'Segovia','eng',4),(117,'Sevilla','eng',4),(118,'Soria','eng',4),(119,'Tarragona','eng',4),(120,'Tenerife (Sta Cruz)','eng',4),(121,'Teruel','eng',4),(122,'Toledo','eng',4),(123,'Valencia','eng',4),(124,'Valladolid','eng',4),(125,'Vizcaya','eng',4),(126,'Zamora','eng',4),(127,'Zaragoza','eng',4),(128,'Alsace','eng',5),(129,'Aquitaine','eng',5),(130,'Auvergne','eng',5),(131,'Burgundy','eng',5),(132,'Brittany','eng',5),(133,'Centre','eng',5),(134,'Champagne-Ardenne','eng',5),(135,'Corsica','eng',5),(136,'Franche-Comté','eng',5),(137,'French Riviera','eng',5),(138,'Île-de-France','eng',5),(139,'Languedoc-Roussillon','eng',5),(140,'Limousin','eng',5),(141,'Lorraine','eng',5),(142,'Lower Normandy','eng',5),(143,'Midi-Pyrénées','eng',5),(144,'Nord-Pas-de-Calais','eng',5),(145,'Upper Normandy','eng',5),(146,'Poitou-Charentes','eng',5),(147,'Pays de la Loire','eng',5),(148,'Picardy','eng',5),(149,'Poitou-Charentes','eng',5),(150,'Provence-Alpes-Côte d\'Azur','eng',5),(151,'Rhône-Alpes','eng',5),(152,'Baden-Wurttemberg','eng',6),(153,'Bavaria','eng',6),(154,'Berlin','eng',6),(155,'Brandenburg','eng',6),(156,'Bremen','eng',6),(157,'Hamburg','eng',6),(158,'Hesse','eng',6),(159,'Lower Saxony','eng',6),(160,'Mecklenburg-Vorpommerr','eng',6),(161,'North Rhine-Westphalia','eng',6),(162,'Rhineland-Palatinate','eng',6),(163,'Saarland','eng',6),(164,'Saxony','eng',6),(165,'Saxony-Anhalt','eng',6),(166,'Schleswig-Holstein','eng',6),(167,'Burgenland','eng',7),(168,'Carinthia','eng',7),(169,'Lower Austria','eng',7),(170,'Salzburg','eng',7),(171,'Styria','eng',7),(172,'Tyrol','eng',7),(173,'Upper Austria','eng',7),(174,'Vienna','eng',7),(175,'Vorarlberg','eng',7),(1,'AL','esp',1),(2,'AK','esp',1),(3,'AZ','esp',1),(4,'AR','esp',1),(5,'CA','esp',1),(6,'CO','esp',1),(7,'CT','esp',1),(8,'DE','esp',1),(9,'FL','esp',1),(10,'GA','esp',1),(11,'HI','esp',1),(12,'ID','esp',1),(13,'IL','esp',1),(14,'IN','esp',1),(15,'IA','esp',1),(16,'KS','esp',1),(17,'KY','esp',1),(18,'LA','esp',1),(19,'ME','esp',1),(20,'MD','esp',1),(21,'MA','esp',1),(22,'MI','esp',1),(23,'MN','esp',1),(24,'MS','esp',1),(25,'MO','esp',1),(26,'MT','esp',1),(27,'NE','esp',1),(28,'NV','esp',1),(29,'NH','esp',1),(30,'NJ','esp',1),(31,'NM','esp',1),(32,'NY','esp',1),(33,'NC','esp',1),(34,'ND','esp',1),(35,'OH','esp',1),(36,'OK','esp',1),(37,'OR','esp',1),(38,'PA','esp',1),(39,'RI','esp',1),(40,'SC','esp',1),(41,'SD','esp',1),(42,'TN','esp',1),(43,'TX','esp',1),(44,'UT','esp',1),(45,'VA','esp',1),(46,'VT','esp',1),(47,'WA','esp',1),(48,'WV','esp',1),(49,'WI','esp',1),(50,'WY','esp',1),(51,'Alberta','esp',2),(52,'British Columbia','esp',2),(53,'Manitoba','esp',2),(54,'New Brunswick','esp',2),(55,'Newfoundland and Labrador','esp',2),(56,'Northwest Territories','esp',2),(57,'Nova Scotia','esp',2),(58,'Nunavut','esp',2),(59,'Ontario','esp',2),(60,'Prince Edward Island','esp',2),(61,'Quebec','esp',2),(62,'Saskatchewan','esp',2),(63,'Yukon','esp',2),(64,'East England','esp',3),(65,'East Midlands','esp',3),(66,'London','esp',3),(67,'North East','esp',3),(68,'North West','esp',3),(69,'Ireland','esp',3),(70,'Scotland','esp',3),(71,'South East','esp',3),(72,'South West','esp',3),(73,'Wales','esp',3),(74,'West Midlands','esp',3),(75,'Yorks and Humber','esp',3),(76,'Álava','esp',4),(77,'Albacete','esp',4),(78,'Alicante','esp',4),(79,'Almería','esp',4),(80,'Asturias','esp',4),(81,'Ávila','esp',4),(82,'Badajoz','esp',4),(83,'Balears (Illas)','esp',4),(84,'Barcelona','esp',4),(85,'Burgos','esp',4),(86,'Cáceres','esp',4),(87,'Cádiz','esp',4),(88,'Cantabria','esp',4),(89,'Castellón','esp',4),(90,'Ceuta','esp',4),(91,'Ciudad Real','esp',4),(92,'Córdoba','esp',4),(93,'Coruña (La)','esp',4),(94,'Cuenca','esp',4),(95,'Gerona','esp',4),(96,'Granada','esp',4),(97,'Guadalajara','esp',4),(98,'Guipúzcua','esp',4),(99,'Huelva','esp',4),(100,'Huesca','esp',4),(101,'Jaén','esp',4),(102,'León','esp',4),(103,'Lérida','esp',4),(104,'Lugo','esp',4),(105,'Madrid','esp',4),(106,'Málaga','esp',4),(107,'Melilla','esp',4),(108,'Murcia','esp',4),(109,'Navarra','esp',4),(110,'Orense','esp',4),(111,'Palencia','esp',4),(112,'Palmas (Las)','esp',4),(113,'Pontevedra','esp',4),(114,'Rioja (La)','esp',4),(115,'Salamanca','esp',4),(116,'Segovia','esp',4),(117,'Sevilla','esp',4),(118,'Soria','esp',4),(119,'Tarragona','esp',4),(120,'Tenerife (Sta Cruz)','esp',4),(121,'Teruel','esp',4),(122,'Toledo','esp',4),(123,'Valencia','esp',4),(124,'Valladolid','esp',4),(125,'Vizcaya','esp',4),(126,'Zamora','esp',4),(127,'Zaragoza','esp',4),(128,'Alsace','esp',5),(129,'Aquitaine','esp',5),(130,'Auvergne','esp',5),(131,'Burgundy','esp',5),(132,'Brittany','esp',5),(133,'Centre','esp',5),(134,'Champagne-Ardenne','esp',5),(135,'Corsica','esp',5),(136,'Franche-Comté','esp',5),(137,'French Riviera','esp',5),(138,'Île-de-France','esp',5),(139,'Languedoc-Roussillon','esp',5),(140,'Limousin','esp',5),(141,'Lorraine','esp',5),(142,'Lower Normandy','esp',5),(143,'Midi-Pyrénées','esp',5),(144,'Nord-Pas-de-Calais','esp',5),(145,'Upper Normandy','esp',5),(146,'Poitou-Charentes','esp',5),(147,'Pays de la Loire','esp',5),(148,'Picardy','esp',5),(149,'Poitou-Charentes','esp',5),(150,'Provence-Alpes-Côte d\'Azur','esp',5),(151,'Rhône-Alpes','esp',5),(152,'Baden-Wurttemberg','esp',6),(153,'Bavaria','esp',6),(154,'Berlin','esp',6),(155,'Brandenburg','esp',6),(156,'Bremen','esp',6),(157,'Hamburg','esp',6),(158,'Hesse','esp',6),(159,'Lower Saxony','esp',6),(160,'Mecklenburg-Vorpommerr','esp',6),(161,'North Rhine-Westphalia','esp',6),(162,'Rhineland-Palatinate','esp',6),(163,'Saarland','esp',6),(164,'Saxony','esp',6),(165,'Saxony-Anhalt','esp',6),(166,'Schleswig-Holstein','esp',6),(167,'Burgenland','esp',7),(168,'Carinthia','esp',7),(169,'Lower Austria','esp',7),(170,'Salzburg','esp',7),(171,'Styria','esp',7),(172,'Tyrol','esp',7),(173,'Upper Austria','esp',7),(174,'Vienna','esp',7),(175,'Vorarlberg','esp',7),(1,'AL','french',1),(2,'AK','french',1),(3,'AZ','french',1),(4,'AR','french',1),(5,'CA','french',1),(6,'CO','french',1),(7,'CT','french',1),(8,'DE','french',1),(9,'FL','french',1),(10,'GA','french',1),(11,'HI','french',1),(12,'ID','french',1),(13,'IL','french',1),(14,'IN','french',1),(15,'IA','french',1),(16,'KS','french',1),(17,'KY','french',1),(18,'LA','french',1),(19,'ME','french',1),(20,'MD','french',1),(21,'MA','french',1),(22,'MI','french',1),(23,'MN','french',1),(24,'MS','french',1),(25,'MO','french',1),(26,'MT','french',1),(27,'NE','french',1),(28,'NV','french',1),(29,'NH','french',1),(30,'NJ','french',1),(31,'NM','french',1),(32,'NY','french',1),(33,'NC','french',1),(34,'ND','french',1),(35,'OH','french',1),(36,'OK','french',1),(37,'OR','french',1),(38,'PA','french',1),(39,'RI','french',1),(40,'SC','french',1),(41,'SD','french',1),(42,'TN','french',1),(43,'TX','french',1),(44,'UT','french',1),(45,'VA','french',1),(46,'VT','french',1),(47,'WA','french',1),(48,'WV','french',1),(49,'WI','french',1),(50,'WY','french',1),(51,'Alberta','french',2),(52,'British Columbia','french',2),(53,'Manitoba','french',2),(54,'New Brunswick','french',2),(55,'Newfoundland and Labrador','french',2),(56,'Northwest Territories','french',2),(57,'Nova Scotia','french',2),(58,'Nunavut','french',2),(59,'Ontario','french',2),(60,'Prince Edward Island','french',2),(61,'Quebec','french',2),(62,'Saskatchewan','french',2),(63,'Yukon','french',2),(64,'East England','french',3),(65,'East Midlands','french',3),(66,'London','french',3),(67,'North East','french',3),(68,'North West','french',3),(69,'Ireland','french',3),(70,'Scotland','french',3),(71,'South East','french',3),(72,'South West','french',3),(73,'Wales','french',3),(74,'West Midlands','french',3),(75,'Yorks and Humber','french',3),(76,'Álava','french',4),(77,'Albacete','french',4),(78,'Alicante','french',4),(79,'Almería','french',4),(80,'Asturias','french',4),(81,'Ávila','french',4),(82,'Badajoz','french',4),(83,'Balears (Illas)','french',4),(84,'Barcelona','french',4),(85,'Burgos','french',4),(86,'Cáceres','french',4),(87,'Cádiz','french',4),(88,'Cantabria','french',4),(89,'Castellón','french',4),(90,'Ceuta','french',4),(91,'Ciudad Real','french',4),(92,'Córdoba','french',4),(93,'Coruña (La)','french',4),(94,'Cuenca','french',4),(95,'Gerona','french',4),(96,'Granada','french',4),(97,'Guadalajara','french',4),(98,'Guipúzcua','french',4),(99,'Huelva','french',4),(100,'Huesca','french',4),(101,'Jaén','french',4),(102,'León','french',4),(103,'Lérida','french',4),(104,'Lugo','french',4),(105,'Madrid','french',4),(106,'Málaga','french',4),(107,'Melilla','french',4),(108,'Murcia','french',4),(109,'Navarra','french',4),(110,'Orense','french',4),(111,'Palencia','french',4),(112,'Palmas (Las)','french',4),(113,'Pontevedra','french',4),(114,'Rioja (La)','french',4),(115,'Salamanca','french',4),(116,'Segovia','french',4),(117,'Sevilla','french',4),(118,'Soria','french',4),(119,'Tarragona','french',4),(120,'Tenerife (Sta Cruz)','french',4),(121,'Teruel','french',4),(122,'Toledo','french',4),(123,'Valencia','french',4),(124,'Valladolid','french',4),(125,'Vizcaya','french',4),(126,'Zamora','french',4),(127,'Zaragoza','french',4),(128,'Alsace','french',5),(129,'Aquitaine','french',5),(130,'Auvergne','french',5),(131,'Burgundy','french',5),(132,'Brittany','french',5),(133,'Centre','french',5),(134,'Champagne-Ardenne','french',5),(135,'Corsica','french',5),(136,'Franche-Comté','french',5),(137,'French Riviera','french',5),(138,'Île-de-France','french',5),(139,'Languedoc-Roussillon','french',5),(140,'Limousin','french',5),(141,'Lorraine','french',5),(142,'Lower Normandy','french',5),(143,'Midi-Pyrénées','french',5),(144,'Nord-Pas-de-Calais','french',5),(145,'Upper Normandy','french',5),(146,'Poitou-Charentes','french',5),(147,'Pays de la Loire','french',5),(148,'Picardy','french',5),(149,'Poitou-Charentes','french',5),(150,'Provence-Alpes-Côte d\'Azur','french',5),(151,'Rhône-Alpes','french',5),(152,'Baden-Wurttemberg','french',6),(153,'Bavaria','french',6),(154,'Berlin','french',6),(155,'Brandenburg','french',6),(156,'Bremen','french',6),(157,'Hamburg','french',6),(158,'Hesse','french',6),(159,'Lower Saxony','french',6),(160,'Mecklenburg-Vorpommerr','french',6),(161,'North Rhine-Westphalia','french',6),(162,'Rhineland-Palatinate','french',6),(163,'Saarland','french',6),(164,'Saxony','french',6),(165,'Saxony-Anhalt','french',6),(166,'Schleswig-Holstein','french',6),(167,'Burgenland','french',7),(168,'Carinthia','french',7),(169,'Lower Austria','french',7),(170,'Salzburg','french',7),(171,'Styria','french',7),(172,'Tyrol','french',7),(173,'Upper Austria','french',7),(174,'Vienna','french',7),(175,'Vorarlberg','french',7),(1,'AL','italian',1),(2,'AK','italian',1),(3,'AZ','italian',1),(4,'AR','italian',1),(5,'CA','italian',1),(6,'CO','italian',1),(7,'CT','italian',1),(8,'DE','italian',1),(9,'FL','italian',1),(10,'GA','italian',1),(11,'HI','italian',1),(12,'ID','italian',1),(13,'IL','italian',1),(14,'IN','italian',1),(15,'IA','italian',1),(16,'KS','italian',1),(17,'KY','italian',1),(18,'LA','italian',1),(19,'ME','italian',1),(20,'MD','italian',1),(21,'MA','italian',1),(22,'MI','italian',1),(23,'MN','italian',1),(24,'MS','italian',1),(25,'MO','italian',1),(26,'MT','italian',1),(27,'NE','italian',1),(28,'NV','italian',1),(29,'NH','italian',1),(30,'NJ','italian',1),(31,'NM','italian',1),(32,'NY','italian',1),(33,'NC','italian',1),(34,'ND','italian',1),(35,'OH','italian',1),(36,'OK','italian',1),(37,'OR','italian',1),(38,'PA','italian',1),(39,'RI','italian',1),(40,'SC','italian',1),(41,'SD','italian',1),(42,'TN','italian',1),(43,'TX','italian',1),(44,'UT','italian',1),(45,'VA','italian',1),(46,'VT','italian',1),(47,'WA','italian',1),(48,'WV','italian',1),(49,'WI','italian',1),(50,'WY','italian',1),(51,'Alberta','italian',2),(52,'British Columbia','italian',2),(53,'Manitoba','italian',2),(54,'New Brunswick','italian',2),(55,'Newfoundland and Labrador','italian',2),(56,'Northwest Territories','italian',2),(57,'Nova Scotia','italian',2),(58,'Nunavut','italian',2),(59,'Ontario','italian',2),(60,'Prince Edward Island','italian',2),(61,'Quebec','italian',2),(62,'Saskatchewan','italian',2),(63,'Yukon','italian',2),(64,'East England','italian',3),(65,'East Midlands','italian',3),(66,'London','italian',3),(67,'North East','italian',3),(68,'North West','italian',3),(69,'Ireland','italian',3),(70,'Scotland','italian',3),(71,'South East','italian',3),(72,'South West','italian',3),(73,'Wales','italian',3),(74,'West Midlands','italian',3),(75,'Yorks and Humber','italian',3),(76,'Álava','italian',4),(77,'Albacete','italian',4),(78,'Alicante','italian',4),(79,'Almería','italian',4),(80,'Asturias','italian',4),(81,'Ávila','italian',4),(82,'Badajoz','italian',4),(83,'Balears (Illas)','italian',4),(84,'Barcelona','italian',4),(85,'Burgos','italian',4),(86,'Cáceres','italian',4),(87,'Cádiz','italian',4),(88,'Cantabria','italian',4),(89,'Castellón','italian',4),(90,'Ceuta','italian',4),(91,'Ciudad Real','italian',4),(92,'Córdoba','italian',4),(93,'Coruña (La)','italian',4),(94,'Cuenca','italian',4),(95,'Gerona','italian',4),(96,'Granada','italian',4),(97,'Guadalajara','italian',4),(98,'Guipúzcua','italian',4),(99,'Huelva','italian',4),(100,'Huesca','italian',4),(101,'Jaén','italian',4),(102,'León','italian',4),(103,'Lérida','italian',4),(104,'Lugo','italian',4),(105,'Madrid','italian',4),(106,'Málaga','italian',4),(107,'Melilla','italian',4),(108,'Murcia','italian',4),(109,'Navarra','italian',4),(110,'Orense','italian',4),(111,'Palencia','italian',4),(112,'Palmas (Las)','italian',4),(113,'Pontevedra','italian',4),(114,'Rioja (La)','italian',4),(115,'Salamanca','italian',4),(116,'Segovia','italian',4),(117,'Sevilla','italian',4),(118,'Soria','italian',4),(119,'Tarragona','italian',4),(120,'Tenerife (Sta Cruz)','italian',4),(121,'Teruel','italian',4),(122,'Toledo','italian',4),(123,'Valencia','italian',4),(124,'Valladolid','italian',4),(125,'Vizcaya','italian',4),(126,'Zamora','italian',4),(127,'Zaragoza','italian',4),(128,'Alsace','italian',5),(129,'Aquitaine','italian',5),(130,'Auvergne','italian',5),(131,'Burgundy','italian',5),(132,'Brittany','italian',5),(133,'Centre','italian',5),(134,'Champagne-Ardenne','italian',5),(135,'Corsica','italian',5),(136,'Franche-Comté','italian',5),(137,'French Riviera','italian',5),(138,'Île-de-France','italian',5),(139,'Languedoc-Roussillon','italian',5),(140,'Limousin','italian',5),(141,'Lorraine','italian',5),(142,'Lower Normandy','italian',5),(143,'Midi-Pyrénées','italian',5),(144,'Nord-Pas-de-Calais','italian',5),(145,'Upper Normandy','italian',5),(146,'Poitou-Charentes','italian',5),(147,'Pays de la Loire','italian',5),(148,'Picardy','italian',5),(149,'Poitou-Charentes','italian',5),(150,'Provence-Alpes-Côte d\'Azur','italian',5),(151,'Rhône-Alpes','italian',5),(152,'Baden-Wurttemberg','italian',6),(153,'Bavaria','italian',6),(154,'Berlin','italian',6),(155,'Brandenburg','italian',6),(156,'Bremen','italian',6),(157,'Hamburg','italian',6),(158,'Hesse','italian',6),(159,'Lower Saxony','italian',6),(160,'Mecklenburg-Vorpommerr','italian',6),(161,'North Rhine-Westphalia','italian',6),(162,'Rhineland-Palatinate','italian',6),(163,'Saarland','italian',6),(164,'Saxony','italian',6),(165,'Saxony-Anhalt','italian',6),(166,'Schleswig-Holstein','italian',6),(167,'Burgenland','italian',7),(168,'Carinthia','italian',7),(169,'Lower Austria','italian',7),(170,'Salzburg','italian',7),(171,'Styria','italian',7),(172,'Tyrol','italian',7),(173,'Upper Austria','italian',7),(174,'Vienna','italian',7),(175,'Vorarlberg','italian',7),(1,'AL','dutch',1),(2,'AK','dutch',1),(3,'AZ','dutch',1),(4,'AR','dutch',1),(5,'CA','dutch',1),(6,'CO','dutch',1),(7,'CT','dutch',1),(8,'DE','dutch',1),(9,'FL','dutch',1),(10,'GA','dutch',1),(11,'HI','dutch',1),(12,'ID','dutch',1),(13,'IL','dutch',1),(14,'IN','dutch',1),(15,'IA','dutch',1),(16,'KS','dutch',1),(17,'KY','dutch',1),(18,'LA','dutch',1),(19,'ME','dutch',1),(20,'MD','dutch',1),(21,'MA','dutch',1),(22,'MI','dutch',1),(23,'MN','dutch',1),(24,'MS','dutch',1),(25,'MO','dutch',1),(26,'MT','dutch',1),(27,'NE','dutch',1),(28,'NV','dutch',1),(29,'NH','dutch',1),(30,'NJ','dutch',1),(31,'NM','dutch',1),(32,'NY','dutch',1),(33,'NC','dutch',1),(34,'ND','dutch',1),(35,'OH','dutch',1),(36,'OK','dutch',1),(37,'OR','dutch',1),(38,'PA','dutch',1),(39,'RI','dutch',1),(40,'SC','dutch',1),(41,'SD','dutch',1),(42,'TN','dutch',1),(43,'TX','dutch',1),(44,'UT','dutch',1),(45,'VA','dutch',1),(46,'VT','dutch',1),(47,'WA','dutch',1),(48,'WV','dutch',1),(49,'WI','dutch',1),(50,'WY','dutch',1),(51,'Alberta','dutch',2),(52,'British Columbia','dutch',2),(53,'Manitoba','dutch',2),(54,'New Brunswick','dutch',2),(55,'Newfoundland and Labrador','dutch',2),(56,'Northwest Territories','dutch',2),(57,'Nova Scotia','dutch',2),(58,'Nunavut','dutch',2),(59,'Ontario','dutch',2),(60,'Prince Edward Island','dutch',2),(61,'Quebec','dutch',2),(62,'Saskatchewan','dutch',2),(63,'Yukon','dutch',2),(64,'East England','dutch',3),(65,'East Midlands','dutch',3),(66,'London','dutch',3),(67,'North East','dutch',3),(68,'North West','dutch',3),(69,'Ireland','dutch',3),(70,'Scotland','dutch',3),(71,'South East','dutch',3),(72,'South West','dutch',3),(73,'Wales','dutch',3),(74,'West Midlands','dutch',3),(75,'Yorks and Humber','dutch',3),(76,'Álava','dutch',4),(77,'Albacete','dutch',4),(78,'Alicante','dutch',4),(79,'Almería','dutch',4),(80,'Asturias','dutch',4),(81,'Ávila','dutch',4),(82,'Badajoz','dutch',4),(83,'Balears (Illas)','dutch',4),(84,'Barcelona','dutch',4),(85,'Burgos','dutch',4),(86,'Cáceres','dutch',4),(87,'Cádiz','dutch',4),(88,'Cantabria','dutch',4),(89,'Castellón','dutch',4),(90,'Ceuta','dutch',4),(91,'Ciudad Real','dutch',4),(92,'Córdoba','dutch',4),(93,'Coruña (La)','dutch',4),(94,'Cuenca','dutch',4),(95,'Gerona','dutch',4),(96,'Granada','dutch',4),(97,'Guadalajara','dutch',4),(98,'Guipúzcua','dutch',4),(99,'Huelva','dutch',4),(100,'Huesca','dutch',4),(101,'Jaén','dutch',4),(102,'León','dutch',4),(103,'Lérida','dutch',4),(104,'Lugo','dutch',4),(105,'Madrid','dutch',4),(106,'Málaga','dutch',4),(107,'Melilla','dutch',4),(108,'Murcia','dutch',4),(109,'Navarra','dutch',4),(110,'Orense','dutch',4),(111,'Palencia','dutch',4),(112,'Palmas (Las)','dutch',4),(113,'Pontevedra','dutch',4),(114,'Rioja (La)','dutch',4),(115,'Salamanca','dutch',4),(116,'Segovia','dutch',4),(117,'Sevilla','dutch',4),(118,'Soria','dutch',4),(119,'Tarragona','dutch',4),(120,'Tenerife (Sta Cruz)','dutch',4),(121,'Teruel','dutch',4),(122,'Toledo','dutch',4),(123,'Valencia','dutch',4),(124,'Valladolid','dutch',4),(125,'Vizcaya','dutch',4),(126,'Zamora','dutch',4),(127,'Zaragoza','dutch',4),(128,'Alsace','dutch',5),(129,'Aquitaine','dutch',5),(130,'Auvergne','dutch',5),(131,'Burgundy','dutch',5),(132,'Brittany','dutch',5),(133,'Centre','dutch',5),(134,'Champagne-Ardenne','dutch',5),(135,'Corsica','dutch',5),(136,'Franche-Comté','dutch',5),(137,'French Riviera','dutch',5),(138,'Île-de-France','dutch',5),(139,'Languedoc-Roussillon','dutch',5),(140,'Limousin','dutch',5),(141,'Lorraine','dutch',5),(142,'Lower Normandy','dutch',5),(143,'Midi-Pyrénées','dutch',5),(144,'Nord-Pas-de-Calais','dutch',5),(145,'Upper Normandy','dutch',5),(146,'Poitou-Charentes','dutch',5),(147,'Pays de la Loire','dutch',5),(148,'Picardy','dutch',5),(149,'Poitou-Charentes','dutch',5),(150,'Provence-Alpes-Côte d\'Azur','dutch',5),(151,'Rhône-Alpes','dutch',5),(152,'Baden-Wurttemberg','dutch',6),(153,'Bavaria','dutch',6),(154,'Berlin','dutch',6),(155,'Brandenburg','dutch',6),(156,'Bremen','dutch',6),(157,'Hamburg','dutch',6),(158,'Hesse','dutch',6),(159,'Lower Saxony','dutch',6),(160,'Mecklenburg-Vorpommerr','dutch',6),(161,'North Rhine-Westphalia','dutch',6),(162,'Rhineland-Palatinate','dutch',6),(163,'Saarland','dutch',6),(164,'Saxony','dutch',6),(165,'Saxony-Anhalt','dutch',6),(166,'Schleswig-Holstein','dutch',6),(167,'Burgenland','dutch',7),(168,'Carinthia','dutch',7),(169,'Lower Austria','dutch',7),(170,'Salzburg','dutch',7),(171,'Styria','dutch',7),(172,'Tyrol','dutch',7),(173,'Upper Austria','dutch',7),(174,'Vienna','dutch',7),(175,'Vorarlberg','dutch',7),(1,'AL','german',1),(2,'AK','german',1),(3,'AZ','german',1),(4,'AR','german',1),(5,'CA','german',1),(6,'CO','german',1),(7,'CT','german',1),(8,'DE','german',1),(9,'FL','german',1),(10,'GA','german',1),(11,'HI','german',1),(12,'ID','german',1),(13,'IL','german',1),(14,'IN','german',1),(15,'IA','german',1),(16,'KS','german',1),(17,'KY','german',1),(18,'LA','german',1),(19,'ME','german',1),(20,'MD','german',1),(21,'MA','german',1),(22,'MI','german',1),(23,'MN','german',1),(24,'MS','german',1),(25,'MO','german',1),(26,'MT','german',1),(27,'NE','german',1),(28,'NV','german',1),(29,'NH','german',1),(30,'NJ','german',1),(31,'NM','german',1),(32,'NY','german',1),(33,'NC','german',1),(34,'ND','german',1),(35,'OH','german',1),(36,'OK','german',1),(37,'OR','german',1),(38,'PA','german',1),(39,'RI','german',1),(40,'SC','german',1),(41,'SD','german',1),(42,'TN','german',1),(43,'TX','german',1),(44,'UT','german',1),(45,'VA','german',1),(46,'VT','german',1),(47,'WA','german',1),(48,'WV','german',1),(49,'WI','german',1),(50,'WY','german',1),(51,'Alberta','german',2),(52,'British Columbia','german',2),(53,'Manitoba','german',2),(54,'New Brunswick','german',2),(55,'Newfoundland and Labrador','german',2),(56,'Northwest Territories','german',2),(57,'Nova Scotia','german',2),(58,'Nunavut','german',2),(59,'Ontario','german',2),(60,'Prince Edward Island','german',2),(61,'Quebec','german',2),(62,'Saskatchewan','german',2),(63,'Yukon','german',2),(64,'East England','german',3),(65,'East Midlands','german',3),(66,'London','german',3),(67,'North East','german',3),(68,'North West','german',3),(69,'Ireland','german',3),(70,'Scotland','german',3),(71,'South East','german',3),(72,'South West','german',3),(73,'Wales','german',3),(74,'West Midlands','german',3),(75,'Yorks and Humber','german',3),(76,'Álava','german',4),(77,'Albacete','german',4),(78,'Alicante','german',4),(79,'Almería','german',4),(80,'Asturias','german',4),(81,'Ávila','german',4),(82,'Badajoz','german',4),(83,'Balears (Illas)','german',4),(84,'Barcelona','german',4),(85,'Burgos','german',4),(86,'Cáceres','german',4),(87,'Cádiz','german',4),(88,'Cantabria','german',4),(89,'Castellón','german',4),(90,'Ceuta','german',4),(91,'Ciudad Real','german',4),(92,'Córdoba','german',4),(93,'Coruña (La)','german',4),(94,'Cuenca','german',4),(95,'Gerona','german',4),(96,'Granada','german',4),(97,'Guadalajara','german',4),(98,'Guipúzcua','german',4),(99,'Huelva','german',4),(100,'Huesca','german',4),(101,'Jaén','german',4),(102,'León','german',4),(103,'Lérida','german',4),(104,'Lugo','german',4),(105,'Madrid','german',4),(106,'Málaga','german',4),(107,'Melilla','german',4),(108,'Murcia','german',4),(109,'Navarra','german',4),(110,'Orense','german',4),(111,'Palencia','german',4),(112,'Palmas (Las)','german',4),(113,'Pontevedra','german',4),(114,'Rioja (La)','german',4),(115,'Salamanca','german',4),(116,'Segovia','german',4),(117,'Sevilla','german',4),(118,'Soria','german',4),(119,'Tarragona','german',4),(120,'Tenerife (Sta Cruz)','german',4),(121,'Teruel','german',4),(122,'Toledo','german',4),(123,'Valencia','german',4),(124,'Valladolid','german',4),(125,'Vizcaya','german',4),(126,'Zamora','german',4),(127,'Zaragoza','german',4),(128,'Alsace','german',5),(129,'Aquitaine','german',5),(130,'Auvergne','german',5),(131,'Burgundy','german',5),(132,'Brittany','german',5),(133,'Centre','german',5),(134,'Champagne-Ardenne','german',5),(135,'Corsica','german',5),(136,'Franche-Comté','german',5),(137,'French Riviera','german',5),(138,'Île-de-France','german',5),(139,'Languedoc-Roussillon','german',5),(140,'Limousin','german',5),(141,'Lorraine','german',5),(142,'Lower Normandy','german',5),(143,'Midi-Pyrénées','german',5),(144,'Nord-Pas-de-Calais','german',5),(145,'Upper Normandy','german',5),(146,'Poitou-Charentes','german',5),(147,'Pays de la Loire','german',5),(148,'Picardy','german',5),(149,'Poitou-Charentes','german',5),(150,'Provence-Alpes-Côte d\'Azur','german',5),(151,'Rhône-Alpes','german',5),(152,'Baden-Wurttemberg','german',6),(153,'Bavaria','german',6),(154,'Berlin','german',6),(155,'Brandenburg','german',6),(156,'Bremen','german',6),(157,'Hamburg','german',6),(158,'Hesse','german',6),(159,'Lower Saxony','german',6),(160,'Mecklenburg-Vorpommerr','german',6),(161,'North Rhine-Westphalia','german',6),(162,'Rhineland-Palatinate','german',6),(163,'Saarland','german',6),(164,'Saxony','german',6),(165,'Saxony-Anhalt','german',6),(166,'Schleswig-Holstein','german',6),(167,'Burgenland','german',7),(168,'Carinthia','german',7),(169,'Lower Austria','german',7),(170,'Salzburg','german',7),(171,'Styria','german',7),(172,'Tyrol','german',7),(173,'Upper Austria','german',7),(174,'Vienna','german',7),(175,'Vorarlberg','german',7);
UNLOCK TABLES;

--
-- Table structure for table `oxy_repost_settings`
--

DROP TABLE IF EXISTS `oxy_repost_settings`;

CREATE TABLE `oxy_repost_settings` (
  `price` double DEFAULT NULL,
  `groups` varchar(100) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_repost_settings`
--

LOCK TABLES `oxy_repost_settings` WRITE;
INSERT INTO `oxy_repost_settings` VALUES (5,'0');
UNLOCK TABLES;

--
-- Table structure for table `oxy_reposts`
--

DROP TABLE IF EXISTS `oxy_reposts`;

CREATE TABLE `oxy_reposts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `listing_id` int(10) NOT NULL,
  `no_reposts` int(2) NOT NULL,
  `repost_period` int(4) NOT NULL,
  `repost_period_um` varchar(3) DEFAULT 'h',
  `starting_hour` int(2) DEFAULT '-1',
  `ending_hour` int(2) DEFAULT '-1',
  `remaining_reposts` int(2) DEFAULT NULL,
  `last_reposted` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_listing` (`listing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_reposts`
--

LOCK TABLES `oxy_reposts` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_robokassa_return`
--

DROP TABLE IF EXISTS `oxy_robokassa_return`;

CREATE TABLE `oxy_robokassa_return` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `OutSum` varchar(100) DEFAULT NULL,
  `InvId` varchar(100) DEFAULT NULL,
  `SignatureValue` varchar(100) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_robokassa_return`
--

LOCK TABLES `oxy_robokassa_return` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_robokassa_settings`
--

DROP TABLE IF EXISTS `oxy_robokassa_settings`;

CREATE TABLE `oxy_robokassa_settings` (
  `login` varchar(20) DEFAULT NULL,
  `password1` varchar(50) DEFAULT NULL,
  `password2` varchar(50) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `encoding` varchar(10) DEFAULT NULL,
  `payment_desc` text,
  `test` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_robokassa_settings`
--

LOCK TABLES `oxy_robokassa_settings` WRITE;
INSERT INTO `oxy_robokassa_settings` VALUES (NULL,NULL,NULL,NULL,NULL,'utf8',NULL,0);
UNLOCK TABLES;

--
-- Table structure for table `oxy_rss`
--

DROP TABLE IF EXISTS `oxy_rss`;

CREATE TABLE `oxy_rss` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT '1',
  `enabled` tinyint(1) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `feedburner` varchar(250) DEFAULT NULL,
  `parameters` varchar(255) DEFAULT NULL,
  `no_items` int(2) DEFAULT NULL,
  `show_fields` text,
  `logo_field` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_rss`
--

LOCK TABLES `oxy_rss` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_rss_lang`
--

DROP TABLE IF EXISTS `oxy_rss_lang`;

CREATE TABLE `oxy_rss_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `short_title` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_rss_lang`
--

LOCK TABLES `oxy_rss_lang` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_rules`
--

DROP TABLE IF EXISTS `oxy_rules`;

CREATE TABLE `oxy_rules` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `category` text,
  `field` varchar(30) DEFAULT NULL,
  `selected_values` text,
  `second_field` varchar(30) DEFAULT NULL,
  `allowed_values` text,
  `required_field` varchar(30) DEFAULT NULL,
  `required_group` int(2) DEFAULT NULL,
  `error_message` varchar(250) DEFAULT NULL,
  `order_no` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_rules`
--

LOCK TABLES `oxy_rules` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_saved_searches`
--

DROP TABLE IF EXISTS `oxy_saved_searches`;

CREATE TABLE `oxy_saved_searches` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `search` text,
  `browser` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_date` (`date`),
  KEY `idx_ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_saved_searches`
--

LOCK TABLES `oxy_saved_searches` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_scheduled_imports`
--

DROP TABLE IF EXISTS `oxy_scheduled_imports`;

CREATE TABLE `oxy_scheduled_imports` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(3) DEFAULT NULL,
  `access_type` varchar(10) DEFAULT 'url',
  `template` int(3) DEFAULT NULL,
  `category_id` int(5) DEFAULT '0',
  `package_id` int(2) DEFAULT '0',
  `url` varchar(250) DEFAULT NULL,
  `ftp_server` varchar(250) DEFAULT NULL,
  `ftp_login` varchar(100) DEFAULT NULL,
  `ftp_password` varchar(50) DEFAULT NULL,
  `ftp_filename` varchar(100) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `use_id_as_unique_field` int(1) DEFAULT '0',
  `delete_inexisting` tinyint(1) DEFAULT '0',
  `only_download_inexisting` int(1) DEFAULT '0',
  `key` varchar(30) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_scheduled_imports`
--

LOCK TABLES `oxy_scheduled_imports` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_searches`
--

DROP TABLE IF EXISTS `oxy_searches`;

CREATE TABLE `oxy_searches` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lat` varchar(20) DEFAULT NULL,
  `long` varchar(20) DEFAULT NULL,
  `location_fields` varchar(200) DEFAULT NULL,
  `search_url` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_searches`
--

LOCK TABLES `oxy_searches` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `oxy_security_settings`
--

DROP TABLE IF EXISTS `oxy_security_settings`;

CREATE TABLE `oxy_security_settings` (
  `block_admin_attempts` tinyint(1) DEFAULT '0',
  `allowed_admin_attempts` int(2) DEFAULT '3',
  `block_admin_attempts_for` int(4) DEFAULT '1',
  `block_user_attempts` tinyint(1) DEFAULT '0',
  `allowed_user_attempts` int(1) DEFAULT '5',
  `block_user_attempts_for` int(4) DEFAULT '1',
  `enable_2fa` tinyint(1) DEFAULT '0',
  `2fa_site_title` varchar(100) DEFAULT NULL,
  `2fa_enable_sms` tinyint(1) DEFAULT '0',
  `2fa_phone_field` varchar(30) DEFAULT NULL,
  `admin_enable_2fa` tinyint(1) DEFAULT '0',
  `admin_2fa_secret` varchar(50) DEFAULT NULL,
  `admin_2fa_enable_sms` tinyint(1) DEFAULT '0',
  `admin_phone_number` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_security_settings`
--

LOCK TABLES `oxy_security_settings` WRITE;
INSERT INTO `oxy_security_settings` VALUES (0,3,1,0,5,1,0,NULL,0,NULL,0,NULL,0,NULL);
UNLOCK TABLES;

--
-- Table structure for table `oxy_seo_pages`
--

DROP TABLE IF EXISTS `oxy_seo_pages`;

CREATE TABLE `oxy_seo_pages` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `page` varchar(30) NOT NULL,
  `page_description` varchar(70) DEFAULT NULL,
  `title` text,
  `meta_description` text,
  `meta_keywords` text,
  `noindex` tinyint(1) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `oxy_seo_pages`
--

LOCK TABLES `oxy_seo_pages` WRITE;
INSERT INTO `oxy_seo_pages` VALUES ('eng','index','Site index page',NULL,NULL,NULL,0,1),('eng','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('eng','listings','Search page',NULL,NULL,NULL,2,3),('eng','contact_details','Contact details page ( mobile only )',NULL,NULL,NULL,0,4),('eng','login','Login page',NULL,NULL,NULL,0,5),('eng','register','User registration page',NULL,NULL,NULL,0,6),('eng','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun',NULL,NULL,NULL,0,7),('eng','recent_ads','Recent ads page',NULL,NULL,NULL,0,8),('eng','refine','Refine search page ( mobile only )',NULL,NULL,NULL,0,9),('eng','store','Dealer page',NULL,NULL,NULL,0,10),('eng','user_listings','Regular user page',NULL,NULL,NULL,0,11),('eng','notfound','Page not found',NULL,NULL,NULL,0,12),('eng','contact','Contact page',NULL,NULL,NULL,0,13),('eng','favorites','Favorites listings page',NULL,NULL,NULL,0,14),('eng','new_listing','New listing page',NULL,NULL,NULL,0,15),('eng','featured_ads','Featured listing page',NULL,NULL,NULL,0,16),('esp','index','Site index page','','','',0,1),('esp','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('esp','listings','Search page','','','',2,3),('esp','contact_details','Contact details page ( mobile only )','','','',0,4),('esp','login','Login page','','','',0,5),('esp','register','User registration page','','','',0,6),('esp','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun','','','',0,7),('esp','recent_ads','Recent ads page','','','',0,8),('esp','refine','Refine search page ( mobile only )','','','',0,9),('esp','store','Dealer page','','','',0,10),('esp','user_listings','Regular user page','','','',0,11),('esp','notfound','Page not found','','','',0,12),('esp','contact','Contact page','','','',0,13),('esp','favorites','Favorites listings page','','','',0,14),('esp','new_listing','New listing page','','','',0,15),('esp','featured_ads','Featured listing page','','','',0,16),('french','index','Site index page','','','',0,1),('french','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('french','listings','Search page','','','',2,3),('french','contact_details','Contact details page ( mobile only )','','','',0,4),('french','login','Login page','','','',0,5),('french','register','User registration page','','','',0,6),('french','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun','','','',0,7),('french','recent_ads','Recent ads page','','','',0,8),('french','refine','Refine search page ( mobile only )','','','',0,9),('french','store','Dealer page','','','',0,10),('french','user_listings','Regular user page','','','',0,11),('french','notfound','Page not found','','','',0,12),('french','contact','Contact page','','','',0,13),('french','favorites','Favorites listings page','','','',0,14),('french','new_listing','New listing page','','','',0,15),('french','featured_ads','Featured listing page','','','',0,16),('italian','index','Site index page','','','',0,1),('italian','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('italian','listings','Search page','','','',2,3),('italian','contact_details','Contact details page ( mobile only )','','','',0,4),('italian','login','Login page','','','',0,5),('italian','register','User registration page','','','',0,6),('italian','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun','','','',0,7),('italian','recent_ads','Recent ads page','','','',0,8),('italian','refine','Refine search page ( mobile only )','','','',0,9),('italian','store','Dealer page','','','',0,10),('italian','user_listings','Regular user page','','','',0,11),('italian','notfound','Page not found','','','',0,12),('italian','contact','Contact page','','','',0,13),('italian','favorites','Favorites listings page','','','',0,14),('italian','new_listing','New listing page','','','',0,15),('italian','featured_ads','Featured listing page','','','',0,16),('dutch','index','Site index page','','','',0,1),('dutch','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('dutch','listings','Search page','','','',2,3),('dutch','contact_details','Contact details page ( mobile only )','','','',0,4),('dutch','login','Login page','','','',0,5),('dutch','register','User registration page','','','',0,6),('dutch','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun','','','',0,7),('dutch','recent_ads','Recent ads page','','','',0,8),('dutch','refine','Refine search page ( mobile only )','','','',0,9),('dutch','store','Dealer page','','','',0,10),('dutch','user_listings','Regular user page','','','',0,11),('dutch','notfound','Page not found','','','',0,12),('dutch','contact','Contact page','','','',0,13),('dutch','favorites','Favorites listings page','','','',0,14),('dutch','new_listing','New listing page','','','',0,15),('dutch','featured_ads','Featured listing page','','','',0,16),('german','index','Site index page','','','',0,1),('german','details','Listing details page','%category_name - %title','%category_name %description','%category_name,%title,%description',0,2),('german','listings','Search page','','','',2,3),('german','contact_details','Contact details page ( mobile only )','','','',0,4),('german','login','Login page','','','',0,5),('german','register','User registration page','','','',0,6),('german','pre-submit','Pre-submit ad page (choice between login or post wihtout a user accoun','','','',0,7),('german','recent_ads','Recent ads page','','','',0,8),('german','refine','Refine search page ( mobile only )','','','',0,9),('german','store','Dealer page','','','',0,10),('german','user_listings','Regular user page','','','',0,11),('german','notfound','Page not found','','','',0,12),('german','contact','Contact page','','','',0,13),('german','favorites','Favorites listings page','','','',0,14),('german','new_listing','New listing page','','','',0,15),('german','featured_ads','Featured listing page','','','',0,16);
UNLOCK TABLES;

--
-- Table structure for table `oxy_seo_settings`
--

DROP TABLE IF EXISTS `oxy_seo_settings`;
CREATE TABLE `oxy_seo_settings` (
  `enable_mod_rewrite` tinyint(1) DEFAULT '0',
  `analytics_code` text,
  `sef_legacy_mode` tinyint(1) DEFAULT '0',
  `sef_links` text,
  `maximum_slug_width` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_seo_settings` WRITE;
INSERT INTO `oxy_seo_settings` VALUES (1,'',0,'{\"listings\":\"search\",\"user_listings\":\"users\",\"store\":\"store\",\"content\":\"content\",\"affiliate\":\"affiliate\",\"recent_ads\":\"recent_ads\",\"featured_ads\":\"featured_ads\",\"auctions\":\"auctions\",\"login\":\"login\",\"register\":\"register\",\"logout\":\"logout\",\"favorites\":\"favorites\",\"contact\":\"contact\",\"pre_submit\":\"pre_submit\",\"refine\":\"refine\",\"contact_details\":\"user-details\",\"new_listing\":\"new_listing\"}',0);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_settings`;
CREATE TABLE `oxy_settings` (
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_email` varchar(128) DEFAULT NULL,
  `contact_email` varchar(128) DEFAULT NULL,
  `users_delete_ads` tinyint(1) DEFAULT '0',
  `users_feature_ads` tinyint(1) DEFAULT '1',
  `register_captcha` tinyint(1) DEFAULT '1',
  `contact_captcha` tinyint(1) DEFAULT '1',
  `alerts_captcha` tinyint(1) DEFAULT '1',
  `login_captcha` tinyint(1) DEFAULT '0',
  `delete_login_older_than` int(4) DEFAULT NULL,
  `maps_default_long` double DEFAULT NULL,
  `maps_default_lat` double DEFAULT NULL,
  `maps_default_height` int(2) DEFAULT '4',
  `google_maps_api_key` varchar(50) DEFAULT NULL,
  `cron_simulator` tinyint(1) DEFAULT '1',
  `session_expires` int(8) DEFAULT '1440',
  `delete_expired` tinyint(1) DEFAULT '0',
  `days_del_expired` int(4) DEFAULT '30',
  `days_notify` int(1) DEFAULT '3',
  `send_mail_to_admin_when_pending` tinyint(1) DEFAULT '1',
  `send_mail_to_admin_when_new_ad` tinyint(1) DEFAULT '1',
  `send_mail_to_admin_when_registeres` tinyint(1) DEFAULT '1',
  `send_mail_to_user_when_posting_ads` tinyint(1) DEFAULT '1',
  `send_mail_to_user_when_expired` tinyint(1) DEFAULT '1',
  `send_mail_to_user_before_expires` tinyint(1) DEFAULT '1',
  `nologin_enabled` tinyint(1) DEFAULT '0',
  `nologin_activate_via_email` tinyint(1) DEFAULT '1',
  `nologin_activate_via_sms` tinyint(1) DEFAULT '0',
  `nologin_pending_listing` tinyint(1) DEFAULT '0',
  `nologin_allow_edit` tinyint(1) DEFAULT '1',
  `nologin_allow_delete` tinyint(1) DEFAULT '1',
  `nologin_extra_options` tinyint(1) DEFAULT '1',
  `nologin_image_verification` tinyint(1) DEFAULT '0',
  `internal_messaging` tinyint(1) DEFAULT '1',
  `enable_locations` tinyint(1) DEFAULT '0',
  `location_fields` varchar(100) DEFAULT NULL,
  `enable_subdomains` tinyint(1) DEFAULT '0',
  `subdomain_field` varchar(40) DEFAULT NULL,
  `enable_recaptcha` tinyint(1) DEFAULT '0',
  `recaptcha_public_key` varchar(50) DEFAULT NULL,
  `recaptcha_private_key` varchar(50) DEFAULT NULL,
  `contact_messages_pending` tinyint(1) DEFAULT '0',
  `users_can_ask_account_removal` tinyint(1) DEFAULT '0',
  `time_offset` int(5) DEFAULT '0',
  `enable_username` tinyint(1) DEFAULT '1',
  `contact_name_field` varchar(32) DEFAULT 'contact_name',
  `enable_affiliates` tinyint(1) DEFAULT '0',
  `accounts_session_timeout` int(6) DEFAULT '24',
  `map_type` varchar(10) DEFAULT 'gmaps'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_settings` WRITE;
INSERT INTO `oxy_settings` VALUES ('admin','af1b15e2bd09fb96f08e310cc2bd08d5','admin@getrent.live','admin@getrent.live',1,1,1,1,1,0,30,-83.022206,39.998264,4,'',1,0,0,30,3,1,1,1,1,1,1,0,1,0,1,0,0,0,0,1,0,'',0,'',0,'','',1,1,0,1,'contact_name',0,0,'gmaps');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_settings_lang`;
CREATE TABLE `oxy_settings_lang` (
  `lang_id` varchar(20) DEFAULT 'eng',
  `admin_name` varchar(128) DEFAULT NULL,
  `site_name` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_settings_lang` WRITE;
INSERT INTO `oxy_settings_lang` VALUES ('eng','Site Administrator','OXY'),('esp','Site Administrator','OXY'),('french','Site Administrator','OXY'),('italian','Site Administrator','OXY'),('dutch','Site Administrator','OXY'),('german','Site Administrator','OXY');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_similar_ads`;
CREATE TABLE `oxy_similar_ads` (
  `title_german` varchar(100) DEFAULT NULL,
  `no_ads` int(2) DEFAULT '4',
  `no_ads_on_row` int(2) DEFAULT '4',
  `match_category` tinyint(1) DEFAULT '1',
  `match_fields` varchar(100) DEFAULT NULL,
  `title_eng` varchar(100) DEFAULT NULL,
  `title_esp` varchar(100) DEFAULT NULL,
  `title_french` varchar(100) DEFAULT NULL,
  `title_italian` varchar(100) DEFAULT NULL,
  `title_dutch` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_similar_ads` WRITE;
INSERT INTO `oxy_similar_ads` VALUES ('Ähnliche Anzeigen',4,4,1,'make','Similar Ads','','','','');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_sitemap`;
CREATE TABLE `oxy_sitemap` (
  `enabled` tinyint(1) DEFAULT NULL,
  `write_categories` tinyint(1) DEFAULT '1',
  `write_listings` tinyint(1) DEFAULT '1',
  `write_custom_pages` tinyint(1) DEFAULT '1',
  `priority` double(4,2) DEFAULT NULL,
  `changefreq` varchar(20) DEFAULT NULL,
  `categories_priority` double(4,2) DEFAULT NULL,
  `categories_changefreq` varchar(20) DEFAULT NULL,
  `listings_priority` double(4,2) DEFAULT NULL,
  `listings_changefreq` varchar(20) DEFAULT NULL,
  `listings_no` int(10) DEFAULT NULL,
  `cp_priority` double(4,2) DEFAULT NULL,
  `cp_changefreq` varchar(20) DEFAULT NULL,
  `auto_write_freq` varchar(20) DEFAULT NULL,
  `extra_entries` longblob,
  `generated_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_sitemap` WRITE;
INSERT INTO `oxy_sitemap` VALUES (1,1,1,1,0.25,'monthly',0.50,'weekly',0.75,'daily',100,0.50,'weekly','daily',NULL,'2021-10-20 00:20:13');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_slugs`;
CREATE TABLE `oxy_slugs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `object_id` int(10) NOT NULL,
  `type` varchar(20) DEFAULT 'listing',
  `slug` text,
  PRIMARY KEY (`id`),
  KEY `idx_type` (`type`),
  KEY `idx_object_id` (`object_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_slugs` WRITE;
INSERT INTO `oxy_slugs` VALUES (1,1,'content','first-page-content'),(2,2,'content','affiliates'),(3,3,'content','bulk-uploads-help'),(10,4,'content','eu_cookie'),(13,1,'listing','b92aef'),(16,1,'user','df4a3c'),(17,2,'listing','1968-ford-mustang-gt350'),(23,4,'category','trucks'),(24,5,'category','rvs'),(25,7,'category','baumaschinen'),(26,3,'listing','buldozer'),(27,2,'user','spy01bro'),(28,4,'listing','jcb-4cx-baggerlader'),(29,5,'listing','volvo-l35b-z-pro'),(30,3,'user','adam'),(31,6,'listing','volvo-l35b-z-pro_1'),(32,7,'listing','1956-ford-f100'),(33,8,'listing','jcb-3cx-baggerlader'),(34,8,'category','small-trucks'),(35,9,'category','big-trucks'),(36,10,'category','sattelzugmaschinen'),(37,11,'category','trailers'),(38,12,'category','semi-trailers');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_sms_gateways`;
CREATE TABLE `oxy_sms_gateways` (
  `gateway_name` varchar(50) DEFAULT NULL,
  `gateway_title` varchar(50) DEFAULT NULL,
  `gateway_code` varchar(20) DEFAULT NULL,
  `gateway_table` varchar(30) DEFAULT NULL,
  `gateway_class` varchar(30) DEFAULT NULL,
  `gateway_ret_table` varchar(30) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_sms_gateways` WRITE;
INSERT INTO `oxy_sms_gateways` VALUES ('Clickatell','Clickatell','clickatell','clickatell','clickatell','clickatell_log',1),('BulkSMS','BulkSMS','bulksms','bulksms','bulksms','bulksms_log',0),('Experttexting','Experttexting','experttexting','experttexting','experttexting','experttexting_log',0),('Altiria','Altiria','altiria','altiria','altiria','altiria_log',0),('Muthofun','Muthofun','muthofun','muthofun','muthofun','muthofun_log',0);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_sms_gateways_settings`;
CREATE TABLE `oxy_sms_gateways_settings` (
  `sms_content` varchar(50) DEFAULT NULL,
  `type` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_sms_gateways_settings` WRITE;
INSERT INTO `oxy_sms_gateways_settings` VALUES ('Your activation code is: ',1);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_sp_ip_accesses`;
CREATE TABLE `oxy_sp_ip_accesses` (
  `ip` varchar(39) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `last_url` varchar(200) DEFAULT NULL,
  `count_same_url` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_sp_user_info`;
CREATE TABLE `oxy_sp_user_info` (
  `ip` varchar(39) DEFAULT NULL,
  `ip_details` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_spam_prevention`;
CREATE TABLE `oxy_spam_prevention` (
  `check_registration` int(1) DEFAULT '1',
  `check_contact_forms` int(1) DEFAULT '1',
  `check_comments` int(1) DEFAULT '1',
  `check_reviews` int(1) DEFAULT '1',
  `use_sfs` tinyint(1) DEFAULT '1',
  `use_abip` tinyint(1) DEFAULT '0',
  `use_ipqs` tinyint(1) DEFAULT '0',
  `abip_api_key` varchar(100) DEFAULT NULL,
  `abip_block_limit` int(3) DEFAULT '50',
  `sfs_block_tor_ips` int(1) DEFAULT '1',
  `sfs_block_networks` int(1) DEFAULT '0',
  `sfs_block_limit` int(3) DEFAULT '50',
  `ipqs_api_key` varchar(100) DEFAULT NULL,
  `ipqs_block` tinyint(1) DEFAULT '1',
  `ipqs_block_limit` int(3) DEFAULT '85',
  `ipqs_add_user_info` tinyint(1) DEFAULT '0',
  `ipqs_info_on_users_list` tinyint(1) DEFAULT '0',
  `ipqs_strictness` int(1) DEFAULT '1',
  `ipqs_public_access_points` tinyint(1) DEFAULT '1',
  `ipqs_lighter_penalties` tinyint(1) DEFAULT '0',
  `ipqs_timeout` int(2) DEFAULT '2',
  `ipqs_ip_fast` tinyint(1) DEFAULT '0',
  `ipqs_email_fast` tinyint(1) DEFAULT '0',
  `block_for` int(4) DEFAULT '1',
  `add_waiting_time` tinyint(1) DEFAULT '0',
  `waiting_time` int(2) DEFAULT '10',
  `waiting_groups` varchar(30) DEFAULT '0',
  `limit_accesses` tinyint(1) DEFAULT '0',
  `limit_acc_block_for` int(3) DEFAULT '1',
  `limit_acc_more_than_times` int(3) DEFAULT '100',
  `limit_acc_in_minutes` int(4) DEFAULT '1',
  `limit_acc_count_from_pages` varchar(40) DEFAULT NULL,
  `limit_same_page_accesses` tinyint(1) DEFAULT '0',
  `limit_spa_more_than_times` int(3) DEFAULT '10'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_spam_prevention` WRITE;
INSERT INTO `oxy_spam_prevention` VALUES (1,1,1,1,1,0,0,NULL,50,1,0,50,NULL,1,85,0,0,1,1,0,2,0,0,1,0,10,'0',0,1,100,1,NULL,0,10);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_spam_prevention_log`;
CREATE TABLE `oxy_spam_prevention_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `confidence_sfs` float DEFAULT NULL,
  `confidence_abip` float DEFAULT NULL,
  `confidence_ipqs` float DEFAULT NULL,
  `type` varchar(10) DEFAULT 'register',
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_stripe_return`;
CREATE TABLE `oxy_stripe_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `charge_id` varchar(100) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `customer` varchar(40) DEFAULT NULL,
  `livemode` varchar(5) DEFAULT NULL,
  `paid` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_stripe_settings`;
CREATE TABLE `oxy_stripe_settings` (
  `secret_key` varchar(100) DEFAULT NULL,
  `publishable_key` varchar(100) DEFAULT NULL,
  `endpoint_secret` varchar(64) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_stripe_settings` WRITE;
INSERT INTO `oxy_stripe_settings` VALUES (NULL,NULL,NULL,'Classifieds ad',NULL);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_suspend_user`;
CREATE TABLE `oxy_suspend_user` (
  `days` int(3) DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_suspend_user` WRITE;
INSERT INTO `oxy_suspend_user` VALUES (30);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_temp_import`;
CREATE TABLE `oxy_temp_import` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `succeeded` int(5) DEFAULT '0',
  `failed` int(5) DEFAULT '0',
  `json` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_tpl_colorschemes`;

CREATE TABLE `oxy_tpl_colorschemes` (
  `tpl` varchar(30) DEFAULT NULL,
  `colorscheme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_tpl_colorschemes` WRITE;
INSERT INTO `oxy_tpl_colorschemes` VALUES ('momentum','blue'),('momentum','red'),('momentum','green'),('momentum','dark_blue'),('momentum','forest'),('momentum','orange'),('momentum','anthracite'),('momentum','yellow'),('momentum','raspberry'),('flux','blue'),('flux','red'),('flux','yellow'),('flux','green'),('flux','simple_red'),('flux','simple_blue'),('flux','simple_green'),('flux','simple_orange'),('flux','sand'),('flux','terra_cota'),('flux','dark');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_user_fields`;
CREATE TABLE `oxy_user_fields` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `caption` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'textbox',
  `order_no` int(2) DEFAULT NULL,
  `is_numeric` tinyint(1) NOT NULL DEFAULT '0',
  `validation_type` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `min` int(10) DEFAULT '0',
  `max` int(10) DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `max_uploaded_size` int(6) DEFAULT '0',
  `extensions` varchar(100) DEFAULT NULL,
  `image_resize` varchar(20) DEFAULT NULL,
  `groups` varchar(100) DEFAULT NULL,
  `dep_id` int(4) DEFAULT '0',
  `other_val` tinyint(1) DEFAULT '0',
  `all_val` tinyint(1) DEFAULT '0',
  `read_only` tinyint(1) DEFAULT '0',
  `unique` tinyint(1) DEFAULT '0',
  `ext1` tinyint(1) DEFAULT '0',
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `admin_verification` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_user_fields` WRITE;
INSERT INTO `oxy_user_fields` VALUES (1,'username','username',1,0,'','40',0,0,1,0,0,'','','0',0,0,0,1,0,0,0,1,0),(2,'email','user_email',2,0,'','40',0,0,1,1,0,'','','0',0,0,0,1,0,0,0,1,0),(3,'password','password',9,0,'','40',0,0,1,0,0,'','','0',0,0,0,1,0,1,0,1,0),(4,'contact_name','textbox',3,0,'','40',0,0,1,1,0,'','','0',0,0,0,0,0,0,1,1,0),(5,'address','textbox',4,0,'','40',0,0,0,1,0,'','','0',0,0,0,0,0,0,1,1,0),(6,'phone','phone',5,0,'','40',0,0,1,1,0,'','','0',0,0,0,0,0,0,1,1,0),(7,'webpage','url',7,0,'','40',0,0,0,1,0,'','','0',0,0,0,0,0,0,1,0,0),(8,'terms','terms',8,0,'','70X10',0,0,1,0,0,'','','0',0,0,0,0,0,0,0,0,0),(9,'mgm_email','user_email',9,0,'','40',0,0,1,1,0,'','','-1',0,0,0,1,0,0,0,1,0),(10,'mgm_name','textbox',10,0,'','40',0,0,0,1,0,'','','-1',0,0,0,0,0,0,1,1,0),(11,'mgm_phone','phone',11,0,'','40',0,0,0,1,0,'','','-1',0,0,0,0,0,0,1,1,0);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_user_fields_lang`;
CREATE TABLE `oxy_user_fields_lang` (
  `id` int(3) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(128) NOT NULL,
  `top_str` varchar(128) DEFAULT NULL,
  `error_message` text,
  `error_message2` text,
  `info_message` text,
  `default_val` text,
  `prefix` varchar(64) DEFAULT NULL,
  `postfix` varchar(64) DEFAULT NULL,
  `elements` text,
  `date_format` varchar(30) DEFAULT NULL,
  KEY `idx_name` (`name`),
  KEY `idx_lang` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_user_fields_lang` WRITE;
INSERT INTO `oxy_user_fields_lang` VALUES (1,'eng','Username','','',NULL,'','','','','',''),(2,'eng','Email','','',NULL,'','','','','',''),(3,'eng','Password','','Please fill in your password!',NULL,'','','','','',''),(4,'eng','Contact Name','','Please fill in contact name!',NULL,'','','','','',''),(5,'eng','Address','','',NULL,'','','','','',''),(6,'eng','Phone','','Please fill in your phone number!',NULL,'','','','','',''),(7,'eng','Webpage','','',NULL,'','','','','',''),(8,'eng','Terms and Conditions','','Please read and agree to the site terms and conditions!',NULL,'I have read and agree with the Terms and Conditions.','Terms and conditions ...','','','',''),(9,'eng','Your Email Address','','Please fill in your email address. This will be used to manage your listing.',NULL,'','','','','',''),(10,'eng','Your Name','','',NULL,'','','','','',''),(11,'eng','Your Phone','','Please fill in your phone number!',NULL,'','','','','',''),(1,'esp','Username','','','','','','','','',''),(2,'esp','Email','','','','','','','','',''),(3,'esp','Password','','Please fill in your password!','','','','','','',''),(4,'esp','Contact Name','','Please fill in contact name!','','','','','','',''),(5,'esp','Address','','','','','','','','',''),(6,'esp','Phone','','Please fill in your phone number!','','','','','','',''),(7,'esp','Webpage','','','','','','','','',''),(8,'esp','Terms and Conditions','','Please read and agree to the site terms and conditions!','','I have read and agree with the Terms and Conditions.','Terms and conditions ...','','','',''),(9,'esp','Your Email Address','','Please fill in your email address. This will be used to manage your listing.','','','','','','',''),(10,'esp','Your Name','','','','','','','','',''),(11,'esp','Your Phone','','Please fill in your phone number!','','','','','','',''),(1,'french','Username','','','','','','','','',''),(2,'french','Email','','','','','','','','',''),(3,'french','Password','','Please fill in your password!','','','','','','',''),(4,'french','Contact Name','','Please fill in contact name!','','','','','','',''),(5,'french','Address','','','','','','','','',''),(6,'french','Phone','','Please fill in your phone number!','','','','','','',''),(7,'french','Webpage','','','','','','','','',''),(8,'french','Terms and Conditions','','Please read and agree to the site terms and conditions!','','I have read and agree with the Terms and Conditions.','Terms and conditions ...','','','',''),(9,'french','Your Email Address','','Please fill in your email address. This will be used to manage your listing.','','','','','','',''),(10,'french','Your Name','','','','','','','','',''),(11,'french','Your Phone','','Please fill in your phone number!','','','','','','',''),(1,'italian','Username','','','','','','','','',''),(2,'italian','Email','','','','','','','','',''),(3,'italian','Password','','Please fill in your password!','','','','','','',''),(4,'italian','Contact Name','','Please fill in contact name!','','','','','','',''),(5,'italian','Address','','','','','','','','',''),(6,'italian','Phone','','Please fill in your phone number!','','','','','','',''),(7,'italian','Webpage','','','','','','','','',''),(8,'italian','Terms and Conditions','','Please read and agree to the site terms and conditions!','','I have read and agree with the Terms and Conditions.','Terms and conditions ...','','','',''),(9,'italian','Your Email Address','','Please fill in your email address. This will be used to manage your listing.','','','','','','',''),(10,'italian','Your Name','','','','','','','','',''),(11,'italian','Your Phone','','Please fill in your phone number!','','','','','','',''),(1,'dutch','Username','','','','','','','','',''),(2,'dutch','Email','','','','','','','','',''),(3,'dutch','Password','','Please fill in your password!','','','','','','',''),(4,'dutch','Contact Name','','Please fill in contact name!','','','','','','',''),(5,'dutch','Address','','','','','','','','',''),(6,'dutch','Phone','','Please fill in your phone number!','','','','','','',''),(7,'dutch','Webpage','','','','','','','','',''),(8,'dutch','Terms and Conditions','','Please read and agree to the site terms and conditions!','','I have read and agree with the Terms and Conditions.','Terms and conditions ...','','','',''),(9,'dutch','Your Email Address','','Please fill in your email address. This will be used to manage your listing.','','','','','','',''),(10,'dutch','Your Name','','','','','','','','',''),(11,'dutch','Your Phone','','Please fill in your phone number!','','','','','','',''),(1,'german','Nutzername','','','','','','','','',''),(2,'german','Email','','','','','','','','',''),(3,'german','Passwort','','Bitte geben Sie Ihr Passwort ein!','','','','','','',''),(4,'german','Kontaktname','','Bitte Kontaktname eintragen!','','','','','','',''),(5,'german','Die Anschrift','','','','','','','','',''),(6,'german','Telefon','','Bitte geben Sie Ihre Telefonnummer ein!','','','','','','',''),(7,'german','Webpage','','','','','','','','',''),(8,'german','Geschäftsbedingungen','','Bitte lesen und akzeptieren Sie die Nutzungsbedingungen der Website!','','Ich habe die AGB gelesen und bin damit einverstanden.','Terms and conditions ...','','','',''),(9,'german','Ihre E-Mail-Adresse','','Bitte tragen Sie Ihre E-Mail-Adresse ein. Dies wird verwendet, um Ihren Eintrag zu verwalten.','','','','','','',''),(10,'german','Your Name','','','','','','','','',''),(11,'german','Your Phone','','Please fill in your phone number!','','','','','','','');
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_user_groups`;
CREATE TABLE `oxy_user_groups` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `auto_register` tinyint(1) DEFAULT '1',
  `activate_via_email` tinyint(1) DEFAULT '1',
  `activate_via_sms` tinyint(1) DEFAULT '0',
  `admin_verification` tinyint(1) DEFAULT '0',
  `post_ads` tinyint(1) DEFAULT '1',
  `store` tinyint(1) DEFAULT '0',
  `bulk_uploads` tinyint(1) DEFAULT '0',
  `listing_pending` tinyint(1) DEFAULT '0',
  `package_pending` tinyint(1) DEFAULT '0',
  `order_no` int(2) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `affiliates` tinyint(1) DEFAULT '0',
  `default_credits` int(4) DEFAULT '0',
  `affiliates_cookie_availability` int(4) DEFAULT '0',
  `affiliates_percentage` int(3) DEFAULT '0',
  `affiliates_payment_cycle` int(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `oxy_user_groups` WRITE;
INSERT INTO `oxy_user_groups` VALUES (1,1,1,0,0,1,0,0,1,1,1,1,0,0,0,0,0),(2,1,1,0,0,0,0,0,0,0,2,0,1,0,0,0,0);
UNLOCK TABLES;

DROP TABLE IF EXISTS `oxy_user_groups_lang`;
CREATE TABLE `oxy_user_groups_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) DEFAULT 'eng',
  `name` varchar(64) DEFAULT NULL,
  `description` text,
  KEY `idx_id` (`id`),
  KEY `idx_lang_id` (`lang_id`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_user_keys`;
CREATE TABLE `oxy_user_keys` (
  `user_id` int(10) DEFAULT NULL,
  `activation` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_users`;
CREATE TABLE `oxy_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group` int(3) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `activation` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `pending` tinyint(1) DEFAULT '0',
  `store` tinyint(1) NOT NULL DEFAULT '0',
  `store_banner` varchar(100) DEFAULT NULL,
  `bulk_uploads` tinyint(1) NOT NULL DEFAULT '0',
  `rating` double(4,2) NOT NULL DEFAULT '0.00',
  `language` varchar(30) DEFAULT 'eng',
  `auth_provider` varchar(30) DEFAULT NULL,
  `identity` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `webpage` varchar(100) DEFAULT NULL,
  `no_credits` double DEFAULT '0',
  `moderator` tinyint(1) DEFAULT '0',
  `sections` text,
  `affiliate` tinyint(1) DEFAULT '0',
  `user_info` text,
  `dealer_subdomain` varchar(30) DEFAULT NULL,
  `admin_verification` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `enable_2fa` tinyint(1) DEFAULT '0',
  `2fa_secret` varchar(50) DEFAULT NULL,
  `suspended` tinyint(1) DEFAULT '0',
  `date_unsuspend` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_users_packages`;
CREATE TABLE `oxy_users_packages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `package_id` int(2) NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_renew` datetime DEFAULT NULL,
  `ads_left` int(3) NOT NULL DEFAULT '0',
  `user_approved` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `subscr_id` varchar(30) DEFAULT NULL,
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `fixed` tinyint(1) NOT NULL DEFAULT '0',
  `allow` int(2) NOT NULL DEFAULT '0',
  `ip` varchar(39) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_date_start` (`date_start`),
  KEY `idx_date_end` (`date_end`),
  KEY `idx_active` (`active`),
  KEY `idx_pending` (`pending`),
  KEY `package_id` (`package_id`),
  KEY `user_approved` (`user_approved`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_version`;
CREATE TABLE `oxy_version` (
  `ver` int(2) NOT NULL DEFAULT '9',
  `subver` int(3) NOT NULL DEFAULT '8',
  `last_update` date DEFAULT NULL,
  `last_check` date DEFAULT NULL,
  `last_checked_version` varchar(100) DEFAULT NULL,
  `last_checked_bugfix` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_webxpay_return`;
CREATE TABLE `oxy_webxpay_return` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(255) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `order_refference_number` varchar(50) DEFAULT NULL,
  `date_time_transaction` datetime DEFAULT NULL,
  `payment_gateway_used` varchar(30) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `entirepost` text,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `ukey` (`ukey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_webxpay_settings`;
CREATE TABLE `oxy_webxpay_settings` (
  `public_key` text,
  `secret_key` varchar(50) DEFAULT NULL,
  `currency` varchar(3) DEFAULT 'LKR',
  `phone_field` varchar(20) DEFAULT 'phone',
  `nologin_phone_field` varchar(20) DEFAULT 'mgm_phone'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_whitelist_emails`;
CREATE TABLE `oxy_whitelist_emails` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `info` varchar(200) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_whitelist_ips`;
CREATE TABLE `oxy_whitelist_ips` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `info` varchar(200) DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `oxy_whitelist_phones`;
CREATE TABLE `oxy_whitelist_phones` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `info` varchar(200) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;