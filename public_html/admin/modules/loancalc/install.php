<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>loancalc</id>
    <name>Loan Calculator</name>
    <description>Adds a loan calculator on details page</description>
    <query>
INSERT INTO `PREFIXmodules` set `id`= 'loancalc', `name` = 'Loan Calculator', `description` = 'Adds a Loan Calculator to details page', `enabled` = 1;

DROP TABLE if exists `PREFIXloancalc_settings`;
CREATE TABLE `PREFIXloancalc_settings` (
  `title` varchar(200),
  `categories_list` text,
  `use_trade_in` tinyint(1) default 1,
  `default_down` double default 0,
  `default_ir` double default 0,
  `default_term` double default 0,
  `default_tax` double default 0,
  `description` text,
  `currency` varchar(10) default '$'
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXloancalc_settings` set `title`='Loan Calculator', `categories_list` = '', `use_trade_in` = 1, `default_down` = 0, `default_ir` = 0, `default_term` = 24, `default_tax` = 0, `description`= '', `currency`='$';
    </query>
</module>