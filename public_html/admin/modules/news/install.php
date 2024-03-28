<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>news</id>
    <name>News</name>
    <description>News module</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'news', `name` = 'News', `description` = 'News module. Shows a short version for a number of news on the first page.', `enabled` = 1;

DROP TABLE if exists `PREFIXnews_settings`;
CREATE TABLE `PREFIXnews_settings` (
  `news_on_first_page` int(2) default 2,
  `news_on_each_page` int(2) default 4,
  `title` varchar(100),
  `page_title` varchar(200),
  `meta_keywords` text,
  `meta_description` text
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXnews_settings` set `news_on_first_page` = 3, `news_on_each_page` = 5, `title` = 'Latest News';


DROP TABLE if exists `PREFIXnews`;
CREATE TABLE `PREFIXnews` (
  `id` int(20) NOT NULL auto_increment,
  `order_no` int(3) default null,
  `lang_id` varchar(20) default 'eng',
  `title` varchar(200),
  `image` varchar(100),
  `summary` text,
  `content` text,
  `date` timestamp,
  `active` tinyint(1) default 1,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM CHARSET=##CHARSET## AUTO_INCREMENT=1;
    </query>
</module>
