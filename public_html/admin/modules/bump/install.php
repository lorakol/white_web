<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>bump</id>
    <name>Bump Ads</name>
    <description>Paid feature to allow users to push their listings to the top of the search list for a period of time.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'bump', `name` = 'Bump Ads', `description` = 'Paid feature to allow users to push their listings to the top of the search list for a period of time.', `enabled` = 1;

DROP TABLE if exists `PREFIXbump_settings`;
CREATE TABLE `PREFIXbump_settings` (
  `duration` int(3) default 3,
  `change_posting_date` int(1) default 1,
  `price` double
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXbump_settings` set `duration` = '3';

INSERT INTO `PREFIXinfo` (`lang_id`, `code`, `content`, `info`) VALUES ('##LANG##', 'bump_your_ad', 'Your listing was bumped to top!', 'The message when bumping an ad');
    </query>
</module>
