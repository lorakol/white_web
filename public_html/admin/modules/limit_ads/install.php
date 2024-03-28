<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>limit_ads</id>
    <name>Limit ads per account</name>
    <description>Limit the number of total ads posted for an account. When maximum of allowed ads is reached the older ads will be deleted.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'limit_ads', `name` = 'Limit ads per account', `description` = 'Limit the number of total ads posted for an account. When maximum of allowed ads is reached the older ads will be deleted.', `enabled` = 1;

DROP TABLE if exists `PREFIXlimit_settings`;
CREATE TABLE `PREFIXlimit_settings` (
  `max_ads` int(3) default 20,
  `exclude_prioritized` tinyint(1) default 0
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXlimit_settings` set `max_ads` = 20;
    </query>
</module>
