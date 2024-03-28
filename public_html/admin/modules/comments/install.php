<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>comments</id>
    <name>Comments</name>
    <description>Comments system for listing details page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'comments', `name` = 'Comments', `description` = 'Comments system for listing details page.', `enabled` = 1;

DROP TABLE if exists `PREFIXcomments_settings`;
CREATE TABLE `PREFIXcomments_settings` (
  `require_login` tinyint(1) default 0,
  `admin_verification` tinyint(1) default 2,
  `comments_on_page` int(2) default 20,
  `badwords_check` tinyint(1) default '1',
  `html_editor` tinyint(1) default 1,
  `allowed_html` varchar(250),
  `logo_field` varchar(50),
  `use_name` tinyint(1) default 1,
  `use_email` tinyint(1) default 2,
  `use_website` tinyint(1) default 0,
  `captcha` tinyint(1) default 0,
  `allow_owner_delete` tinyint(1) default 0,
  `allow_owner_edit` tinyint(1) default 0,
  `allow_owner_activate` tinyint(1) default 0,
  `categories` text,
  `terms` text
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXcomments_settings` set `require_login` = 0, `admin_verification` = 0, `comments_on_page` = 20, `badwords_check` = 1, `html_editor` = 1, `allowed_html` = 'b,br,center,div,em,span,p,i,u,font,strong', `logo_field` = '', `use_email` = 2, `use_website` = 0, `captcha` = 0, `terms`= '', categories='0';


DROP TABLE if exists `PREFIXcomments`;
CREATE TABLE `PREFIXcomments` (
  `id` int(10) NOT NULL auto_increment,
  `listing_id` int(10),
  `user_id` int(10),
  `name` varchar(50),
  `email` varchar(50),
  `website` varchar(50),
  `ip` varchar(39),
  `content` text,
  `date` timestamp,
  `active` tinyint(1) default 1,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`),
  KEY `active` (`active`),
  KEY `user_id` (`user_id`),
  KEY `listing_id` (`listing_id`)
) ENGINE=MyISAM CHARSET=##CHARSET## AUTO_INCREMENT=1 ;

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'new_comment', 'New comment for listing #{$ad_id}', 'Hello {$contact_name},((br/))((br/))\n\nYou have a new comment for listing #{$ad_id}:((br/))\n{$details_link}((br/))((br/))\n\n{if $sender_name}((b))Sender name:((/b)) {$sender_name}((br/))\n{/if}{if $sender_email}((b))Sender email:((/b)) {$sender_email}((br/))\n{/if}((b))Message:((/b)) {$message}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n\n', 'The message that announces a new comment');

    </query>
</module>
