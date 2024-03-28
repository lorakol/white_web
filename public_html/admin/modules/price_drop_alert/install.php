<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>price_drop_alert</id>
    <name>Price drop alert</name>
    <description>Allow visitors to receive notifications when the price of a listing drops.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'price_drop_alert', `name`='Price drop alert', `description` = 'Allow visitors to receive notifications when the price of a listing drops.', `enabled` = 1;

DROP TABLE if exists `PREFIXprice_drop_alert`;
CREATE TABLE `PREFIXprice_drop_alert` (
  `id` int(10) NOT NULL auto_increment,
  `key` varchar(200),
  `user_id` int(7) default 0,
  `email` varchar(40) default null,
  `ad_id` int(7) not null,
  `init_price` double,
  `date` timestamp,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;


INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'price_drop_alert', 'Price drop alert on {$site_name}', 'Hello {$contact_name},((br/))((br/))\n\nThe price for the listing "{$title}" dropped from {$price_from} to {$price_to}.((br/))\nTo visit the listing click the following link: ((br/))\n{$details_link}((br/))\n((br/))\nIf you want to remove the price drop alert for this listing click on the following link:((br/))\n{$remove_link}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'Send notifications when the price for a listing drops.');

    </query>
</module>
