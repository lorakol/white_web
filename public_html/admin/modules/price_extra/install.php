<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>price_extra</id>
    <name>Price extra configuration</name>
    <description>Extra price field configuration module which allows you to enable Negotiable checkbox, enable Free word instead of 0 price value, allow alternate tags like Please Contact or Swap/Trade. You can make different such configurations for different fieldsets.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'price_extra', `name` = 'Price extra configuration', `description` = 'Extra price field configuration module which allows you to enable Negotiable checkbox, enable Free word instead of 0 price value, allow alternate tags like Please Contact or Swap/Trade. You can make different such configurations for different fieldsets.', `enabled` = 1;

DROP TABLE if exists `PREFIXprice_extra_settings`;
CREATE TABLE `PREFIXprice_extra_settings` (
  `id` int(2) NOT NULL auto_increment,
  `fieldset` varchar(200),
  `use_negotiable` tinyint(1) default 0,
  `use_free` tinyint(1) default 0,
  `use_tags` tinyint(1) default 0,
  `use_extra_option1` tinyint(1) default 0,
  `use_extra_option2` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXprice_extra_settings` set `id` = 1, `fieldset` = 0, `use_negotiable` = 1, `use_free`=1, `use_tags`=1;

DROP TABLE if exists `PREFIXprice_extra_settings_lang`;
CREATE TABLE `PREFIXprice_extra_settings_lang` (
  `id` int(2) NOT NULL,
  `lang_id` varchar(20) default 'eng',
  `negotiable` varchar(40),
  `free` varchar(40),
  `tags` text,
  `extra_option1` varchar(40) default null,
  `extra_option2` varchar(40) default null
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXprice_extra_settings_lang` set `id` = 1, `lang_id`= '##LANG##', `negotiable` = 'Negotiable', `free`='Free', `tags`='Please Contact|Swap/Trade';

ALTER TABLE `PREFIXads` add `negotiable` tinyint(1) default 0;
ALTER TABLE `PREFIXads` add `price_tag` varchar(40);
ALTER TABLE `PREFIXads` add `extra_option1` tinyint(1) default 0;
ALTER TABLE `PREFIXads` add `extra_option2` tinyint(1) default 0;

DROP TABLE if exists `PREFIXprice_extra_offers`;
CREATE TABLE `PREFIXprice_extra_offers` (
  `id` int(10) NOT NULL auto_increment,
  `ad_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `offer` double,
  `currency` varchar(15),
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'new_offer', 'New offer for listing {$ad_title}', 'Hello {$contact_name},((br/))((br/))\n\nA new offer was made for your listing {$ad_title}:((br/))\nOffer: {$offer}((br/))\nOffered by: {$sender_name}, {$sender_email}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message that announces a new offer made for a listing');

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'offer_reply', 'Reply regarding your offer for listing {$ad_title}', 'Hello {$contact_name},((br/))((br/))\n\nYou received a reply for your offer regarding listing {$ad_title}:((br/))\nOffer: {$offer}((br/))\nMessage from seller: {$message}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message containing a reply for an offer made for a listing.');


    </query>
</module>
