<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>banners_location</id>
    <name>Banners Location</name>
    <description>Allows configuring banners for a certain location only.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'banners_location', `name`='Banners Location', `description` = 'Allows configuring banners for a certain location only.', `enabled` = 1;

DROP TABLE if exists `PREFIXbanners_location`;
CREATE TABLE `PREFIXbanners_location` (
  `location_field` varchar(40),
  `display_any` tinyint(1) default 1
) ENGINE=MyISAM;

INSERT INTO `PREFIXbanners_location` set `location_field` = '';

ALTER TABLE `PREFIXbanners` add `location` TEXT;

    </query>
</module>
