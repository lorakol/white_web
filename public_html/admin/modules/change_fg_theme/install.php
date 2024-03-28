<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>change_fg_theme</id>
    <name>Change foreground theme</name>
    <description>Allow users to select a default theme from their user accounts.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'change_fg_theme', `name` = 'Change Foreground Theme', `description` = 'Allow users to select a default theme from their user accounts.', `enabled` = 1;

DROP TABLE if exists `PREFIXcfgth_templates`;
CREATE TABLE `PREFIXcfgth_templates` (
  `id` int(3) not null auto_increment,
  `template_name` varchar(30),
  `template_code` varchar(30),
  `has_colorschemes` tinyint(1) default 0,
  `has_dark_mode` tinyint(1) default 0,
  `has_first_page_type` tinyint(1) default 1,
  `max_cat_per_row` int(2) default 3,
  `active` tinyint(1) default 1,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Flux', `template_code`='flux', `max_cat_per_row`=6, `has_colorschemes`=1, `has_dark_mode`=1, `has_first_page_type`=0;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Momentum', `template_code`='momentum', `max_cat_per_row`=3, `has_colorschemes`=1;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Platinum', `template_code`='platinum', `max_cat_per_row`=3;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Spring', `template_code`='spring', `max_cat_per_row`=3;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Zen', `template_code`='zen', `max_cat_per_row`=3;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Organic', `template_code`='organic', `max_cat_per_row`=3;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Orange', `template_code`='orange', `max_cat_per_row`=3;
INSERT INTO `PREFIXcfgth_templates` set `template_name` = 'Light', `template_code`='light', `max_cat_per_row`=3;

DROP TABLE if exists `PREFIXcfgth_user_templates`;
CREATE TABLE `PREFIXcfgth_user_templates` (
  `user_id` int(7) not null,
  `template` varchar(30) default 'flux',
  `template_colorscheme` varchar(30) default null,
  `first_page_type` tinyint(1) default 2,
  `ads_per_page` int(3) default 20,
  `dark_mode` tinyint(1) default 0
) ENGINE=MyISAM CHARSET=##CHARSET##;

    </query>
</module>
