<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>default_images</id>
    <name>Default ads images for categories</name>
    <description>This module allows you to configure different images to display when the listing has no photos for different categories. For example display an image containing a car for auto ads, a building for real estate ads and so on.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'default_images', `name`='Default ads images for categories', `description` = 'This module allows you to configure different images to display when the listing has no photos for different categories. For example display an image containing a car for auto ads, a building for real estate ads and so on.', `enabled` = 1;

DROP TABLE if exists `PREFIXdefault_images`;
CREATE TABLE `PREFIXdefault_images` (
  `category_id` int(3) not null,
  `thmb` varchar(50) not null,
  `big_thmb` varchar(50) not null,
  `thmb_mobile` varchar(50) not null,
  `big_thmb_mobile` varchar(50) not null
) ENGINE=MyISAM;
    </query>
</module>