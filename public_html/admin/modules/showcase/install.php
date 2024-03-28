<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>showcase</id>
    <name>Showcase</name>
    <description>Paid feature which allows users to make a selection of listings which will appear on their user page or dealer page in a special box above all listings.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'showcase', `name` = 'Showcase', `description` = 'Paid feature which allows users to make a selection of listings which will appear on their user page or dealer page in a special box above all listings.', `enabled` = 1;

DROP TABLE if exists `PREFIXshowcase_settings`;
CREATE TABLE `PREFIXshowcase_settings` (
  `no_on_page` int(3) default 6,
  `price` double
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXshowcase_settings` set `no_on_page` = '6', price='5';
ALTER TABLE `PREFIXads` add `showcase` tinyint(1) default 0;
ALTER TABLE `PREFIXuser_groups` add `showcase` int(1) default 0;

INSERT INTO `PREFIXinfo` (`lang_id`, `code`, `content`, `info`) VALUES ('##LANG##', 'showcase', 'Showcase feature was enabled for your account!', 'The message when enabling Showcase feature for an account');

	</query>
</module>
