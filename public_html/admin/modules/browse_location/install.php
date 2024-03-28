<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>browse_location</id>
    <name>Browse by Location</name>
    <description>Display a box where users can view locations and browse listings by location.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'browse_location', `name`='Browse by Location', `description` = 'Display a box where users can view locations and browse listings by location.', `enabled` = 1;

DROP TABLE if exists `PREFIXbrowse_location`;
CREATE TABLE `PREFIXbrowse_location` (
  `title` varchar(200),
  `no_rows` int(2) default 3,
  `type` varchar(10) default 'double',
  `field_id` int(4)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXbrowse_location` set `title` = 'Browse by Location', `no_rows`=3, `type` = 'double';
    </query>
</module>
