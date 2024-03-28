<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>auto_repost</id>
    <name>Auto Repost Ads</name>
    <description>Paid feature to allow users to push their listings to the top of the search list a number of times at a specific interval.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'auto_repost', `name` = 'Auto Repost Ads', `description` = 'Paid feature to allow users to push their listings to the top of the search list a number of times at a specific interval.', `enabled` = 1;

DROP TABLE if exists `PREFIXrepost_settings`;
CREATE TABLE `PREFIXrepost_settings` (
  `price` double,
  `groups` varchar(100) default '0'
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXrepost_settings` set `price` = '5';

DROP TABLE if exists `PREFIXreposts`;
CREATE TABLE `PREFIXreposts` (
  `id` int(10) NOT NULL auto_increment,
  `listing_id` int(10) not null,
  `no_reposts` int(2) NOT NULL,
  `repost_period` int(4) NOT NULL,
  `repost_period_um` varchar(3) default 'h',
  `starting_hour` int(2) default -1,
  `ending_hour` int(2) default -1,
  `remaining_reposts` int(2),
  `last_reposted` datetime,
  `active` tinyint(1) default 0,
  PRIMARY KEY  (`id`),
  KEY `idx_listing` (`listing_id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXinfo` (`lang_id`, `code`, `content`, `info`) VALUES ('##LANG##', 'auto_repost', '{if !$pending}Your auto repost request was registered!{else}Your auto repost request is pending and it will be activated after being reviewed by the administrator!{/if}', 'The message when auto reposting an ad');

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'auto_repost', 'New repost for listing #{$title}', 'Hello {$contact_name},((br/))((br/))\n\nYour listing ((a href="{$details_link}"))#{$title}((/a)) was reposted!((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n\n', 'The message sent when an auto repost is executed.');

    </query>
</module>
