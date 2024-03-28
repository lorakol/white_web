<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>tag_cloud</id>
    <name>Tag Cloud</name>
    <description>Show the most searched words in a tag cloud.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'tag_cloud', `name`='Tag Cloud', `description` = 'Show the most searched words in a tag cloud.', `enabled` = 1;

DROP TABLE if exists `PREFIXtag_cloud`;
CREATE TABLE `PREFIXtag_cloud` (
  `title` varchar(200),
  `no_tags` int(3) default 50,
  `split_tags` tinyint(1) default 1,
  `period` int(3) default 30,
  `min_letters` int(3) default 3,
  `exclude` text default NULL
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXtag_cloud` set `title` = 'Popular Searches', `no_tags`=50, `period` = 30, `min_letters` = 3, `exclude` = '';

DROP TABLE if exists `PREFIXtag_cloud_searches`;
CREATE TABLE `PREFIXtag_cloud_searches` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `word` varchar(50) DEFAULT NULL,
  `date` timestamp,
  `no` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `no` (`no`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

    </query>
</module>
