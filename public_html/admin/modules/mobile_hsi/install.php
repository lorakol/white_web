<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>mobile_hsi</id>
    <name>Mobile home screen icon</name>
    <description>This module allows you to configure a mobile home screen icon. When your users will save your website link on their home screen for quick access, these icons will be used for that purpose.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'mobile_hsi', `name`='Mobile home screen icon', `description` = 'This module allows you to configure a mobile home screen icon. When your users will save your website link on their home screen for quick access, these icons will be used for that purpose.', `enabled` = 1;

DROP TABLE if exists `PREFIXmobile_hsi`;
CREATE TABLE `PREFIXmobile_hsi` (
  `icon60` varchar(50),
  `icon76` varchar(50),
  `icon120` varchar(50),
  `icon152` varchar(50),
  `icon180` varchar(50),
  `icon128` varchar(50),
  `icon192` varchar(50)
) ENGINE=MyISAM;

insert into `PREFIXmobile_hsi` set `icon60`='';

    </query>
</module>