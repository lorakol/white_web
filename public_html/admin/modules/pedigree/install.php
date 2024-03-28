<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>pedigree</id>
    <name>Pedigree Field</name>
    <description>Add pedigree field to your classifieds.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'pedigree', `name` = 'Pedigree Field', `description` = 'Add pedigree field to your classifieds.', `enabled` = 1;

DROP TABLE if exists `PREFIXpedigree_settings`;
CREATE TABLE `PREFIXpedigree_settings` (
  `sire_field` varchar(40),
  `dam_field` varchar(40)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXpedigree_settings` set `sire_field` = 'Sire\'s name', `dam_field` = 'Dam\'s name';


    </query>
</module>
