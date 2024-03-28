<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>popular_ads</id>
    <name>Popular Ads</name>
    <description>Shows the most popular ads on the first page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'popular_ads', `name`='Popular Ads', `description` = 'Shows the most popular ads on the first page.', `enabled` = 1;

DROP TABLE if exists `PREFIXpopular_ads`;
CREATE TABLE `PREFIXpopular_ads` (
  `title` varchar(200),
  `no_ads` int(2) default 4
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXpopular_ads` set `title` = 'Popular Ads', `no_ads`=4;
    </query>
</module>
