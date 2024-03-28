<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>dealers_page</id>
    <name>List Dealers Page</name>
    <description>Creates a page where all dealers are listed.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'dealers_page', `name`='List Dealers Page', `description` = 'Creates a page where all dealers are listed.', `enabled` = 1;

DROP TABLE if exists `PREFIXdealers_page_settings`;
CREATE TABLE `PREFIXdealers_page_settings` (
  `all_with_store` tinyint(1) default 1,
  `only_to_logged_users` tinyint(1) default 0,
  `groups` varchar(20) default null,
  `link_to_navbar` tinyint(1) default 1,
  `logo_field` varchar(50),
  `name_field` varchar(50) default 'contact_name',
  `details_fields` varchar(200),
  `group_on_categories` tinyint(1) default 0,
  `category_field` varchar(40) default null,
  `categories_on_row` tinyint(1) default 3,
  `search_fields` varchar(200),
  `title` varchar(200),
  `meta_keywords` text,
  `meta_description` text,
  `enable_map_search` tinyint(1) default 0,
  `map_visible` tinyint(1) default 0,
  `search_location_fields` varchar(100),
  `stores_order_by` varchar(30) default "registration_date",
  `stores_order_dir` varchar(4) default "desc"
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXdealers_page_settings` set `all_with_store`=1, `stores_order_by`='registration_date', `stores_order_dir`="desc";

DELETE FROM `PREFIXcustom_pages` where `code` = 'dealers_page';

INSERT INTO `PREFIXcustom_pages` set `code` = 'dealers_page', `type`=2, `navlink` = '1', `read_only` = 1, `order_no` ='', `blank`=0, `hreflink`='##LIVE_SITE##/modules/dealers_page/dealers.php', `active`=1;

INSERT INTO `PREFIXcustom_pages_lang` set `id`= '##LAST_ID##', `lang_id` = '##LANG##', `title` = 'Dealers';

CREATE TABLE `PREFIXdealers_page_categories` (
  `category_name` varchar(40),
  `image` varchar(50) default null
);

    </query>
</module>
