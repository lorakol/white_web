<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>linkify</id>
    <name>Linkify</name>
    <description>Transforms on the fly urls contained in listings description in links.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'linkify', `name`='Linkify', `description` = 'Transforms on the fly urls contained in listings description in links.', `enabled` = 1;


DROP TABLE if exists `PREFIXlinkify_settings`;
CREATE TABLE `PREFIXlinkify_settings` (
  `all` tinyint(1) default 1,
  `featured` tinyint(1) default 0,
  `prioritized` tinyint(1) default 0,
  `groups` varchar(20) default null
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXlinkify_settings` set `all`='1';
    </query>
</module>
