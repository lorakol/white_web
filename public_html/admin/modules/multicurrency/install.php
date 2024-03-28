<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>multicurrency</id>
    <name>MultiCurrency</name>
    <description>Allows correct price sorting and displaying prices in different currencies when using listing prices with multiple currencies. The prices are calculated according to defined ratios between the currencies defined in the system.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'multicurrency', `name` = 'MultiCurrency', `description` = 'Allows correct price sorting and displaying prices in different currencies when using listing prices with multiple currencies. The prices are calculated according to defined ratios between the currencies defined in the system.', `enabled` = 1;

DROP TABLE if exists `PREFIXmulticurrency`;
CREATE TABLE `PREFIXmulticurrency` (
	`id` int(2) NOT NULL auto_increment,
	`currency` varchar(10),
	`default` tinyint(1) default 0,
	`ratio` float,
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

ALTER TABLE `PREFIXads` add `unit_price` float default -1;

ALTER TABLE `PREFIXauctions` ADD `unit_starting_price` DOUBLE AFTER `starting_price` ;
ALTER TABLE `PREFIXbids` ADD `currency` VARCHAR( 20 ) AFTER `bid`;
ALTER TABLE `PREFIXbids` ADD `unit_bid` DOUBLE AFTER `bid` ;

    </query>
</module>
