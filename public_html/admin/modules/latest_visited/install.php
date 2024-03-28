<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>latest_visited</id>
    <name>Latest Visited</name>
    <description>Shows the latest ads seen by the current visitor.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'latest_visited', `name`='Latest Visited', `description` = 'Shows the latest ads seen by the current visitor.', `enabled` = 1;

DROP TABLE if exists `PREFIXlatest_visited`;
CREATE TABLE `PREFIXlatest_visited` (
  `title` varchar(200),
  `no_ads` int(2) default 4,
  `show_extended` tinyint(1) default 0, 
  `no_extended` int(4) default 100,
  `show_on_index` tinyint(1) default 0,
  `show_on_search` tinyint(1) default 1,
  `show_on_details` tinyint(1) default 0,
  `days_keep` int(4) default 60
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXlatest_visited` set `title` = 'Latest Visited', `no_ads`=4;

DROP TABLE if exists `PREFIXlatest_visited_ads`;
CREATE TABLE `PREFIXlatest_visited_ads` (
  `id` int(10) NOT NULL,
  `ad_id` int(10),
  `date` datetime,
  KEY `idx_id` (`id`),
  KEY `idx_ad_id` (`ad_id`),
  KEY `idx_date` (`date`)
);

    </query>
</module>
