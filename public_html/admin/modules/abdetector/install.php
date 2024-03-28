<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>abdetector</id>
    <name>Adblock Detector</name>
    <description>Detects browsers which use Adblocker.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'abdetector', `name` = 'Adblock Detector', `description` = 'Detects browsers which use Adblocker.', `enabled` = 1;

DROP TABLE if exists `PREFIXabd_settings`;
CREATE TABLE `PREFIXabd_settings` (
  `block_ab_sites` tinyint(1) default 1,
  `message` text
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXabd_settings` set `block_ab_sites` = '1', `message` = '';
    </query>
</module>
