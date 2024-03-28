<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>browse_make</id>
    <name>Browse by Car Make</name>
    <description>Display a box where users can browse listings by makes.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'browse_make', `name`='Browse by Make', `description` = 'Display a box where users can browse listings by makes.', `enabled` = 1;

DROP TABLE if exists `PREFIXbrowse_make`;
CREATE TABLE `PREFIXbrowse_make` (
  `title` varchar(200),
  `no_rows` int(2) default 3,
  `type` varchar(10) default 'double',
  `field_id` int(4)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXbrowse_make` set `title` = 'Browse by Make', `no_rows`=3, `type` = 'single';
    </query>
</module>
