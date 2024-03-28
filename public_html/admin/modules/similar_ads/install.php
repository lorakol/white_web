<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>similar_ads</id>
    <name>Similar Ads</name>
    <description>Shows a number of similar ads on listing details page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'similar_ads', `name`='Similar Ads', `description` = 'Shows a number of similar ads on listing details page.', `enabled` = 1;

DROP TABLE if exists `PREFIXsimilar_ads`;
CREATE TABLE `PREFIXsimilar_ads` (
  `title` varchar(200),
  `no_ads` int(2) default 4,
  `no_ads_on_row` int(2) default 4,
  `match_category` tinyint(1) default 1,
  `match_fields` varchar(100)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXsimilar_ads` set `title` = 'Similar Ads', `no_ads`=4, `no_ads_on_row` = 4, `match_category` = 1, `match_fields`='';
    </query>
</module>
