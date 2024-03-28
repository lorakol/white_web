<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>meta_extension</id>
    <name>Meta Extension</name>
    <description>Allows you to customize meta information for different search pages.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'meta_extension', `name`='Meta Extension', `description` = 'Allows you to customize meta information for different search pages.', `enabled` = 1;

DROP TABLE if exists `PREFIXmeta_extension`;
CREATE TABLE `PREFIXmeta_extension` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255),
  `meta_keywords` text,
  `meta_description` text,
  `search_terms` text,
  `search_terms_ext` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

    </query>
</module>
