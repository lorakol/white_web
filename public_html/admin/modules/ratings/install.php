<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>ratings</id>
    <name>Ratings and reviews</name>
    <description>Rating and review system for listings or users.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id`= 'ratings', `name` = 'Ratings and reviews', `description` = 'Rating and review system for listings or users.', `enabled` = 1;

CREATE TABLE `PREFIXratings_settings` (
  `allow` tinyint(1) default 1,
  `require_login` tinyint(1) default 0,
  `rate_listings` tinyint(1) default 0,
  `rate_users` tinyint(1) default 1,
  `enable_reviews` tinyint(1) default 1,
  `groups` varchar(30) default '0',
  `cannot_rate_oneself` tinyint(1) default 1,
  `admin_verification` tinyint(1) default 0,
  `badwords_check` tinyint(1) default '1',
  `html_editor` tinyint(1) default 1,
  `allowed_html` varchar(250),
  `logo_field` varchar(50),
  `use_name` tinyint(1) default 1,
  `use_title` tinyint(1) default 1,
  `use_email` tinyint(1) default 2,
  `use_website` tinyint(1) default 0,
  `captcha` tinyint(1) default 0,
  `terms` text,
  `ar_enable_reviews` tinyint(1) default 1,
  `ar_admin_verification` tinyint(1) default 0,
  `ar_badwords_check` tinyint(1) default '1',
  `ar_html_editor` tinyint(1) default 1,
  `ar_allowed_html` varchar(250),
  `ar_logo_field` varchar(50),
  `ar_use_name` tinyint(1) default 1,
  `ar_use_title` tinyint(1) default 1,
  `ar_use_email` tinyint(1) default 2,
  `ar_use_website` tinyint(1) default 0,
  `ar_captcha` tinyint(1) default 0,
  `ar_terms` text,
  `no_on_page` int(2) default 10,
  `ar_no_on_page` int(2) default 10,
  `enable_latest_listing_reviews` tinyint(1) default 0,
  `no_latest_listing_reviews` int(3) default 15,
  `latest_listing_reviews_title` varchar(200) default null,
  `enable_latest_user_reviews` tinyint(1) default 0,
  `no_latest_user_reviews` int(3) default 15,
  `latest_user_reviews_title` varchar(200) default null
) CHARSET=##CHARSET##;

INSERT INTO `PREFIXratings_settings` set `allow` = 1, `require_login` = 1, `rate_listings` = 0, `rate_users` = 1, `cannot_rate_oneself` = 1, `enable_reviews` = 1, `admin_verification` = 0, `badwords_check` = 1, `html_editor` = 1, `allowed_html` = 'b,br,center,div,em,span,p,i,u,font,strong', `logo_field` = '', `use_email` = 2, `use_website` = 0, `captcha` = 0, `terms`= '', `ar_allowed_html` = 'b,br,center,div,em,span,p,i,u,font,strong';

ALTER TABLE `PREFIXusers` add `no_ratings` int(5) default 0;
ALTER TABLE `PREFIXads` add `no_ratings` int(5) default 0;

CREATE TABLE `PREFIXuser_ratings` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime,
  `user_id` int(5),
  `rating` int(1),
  `title` varchar(250),
  `name` varchar(100),
  `email` varchar(100),
  `website` varchar(50),
  `content` text,
  `ip` varchar(39),
  `poster_id` int(10),
  `active` int(1) default 0,
  PRIMARY KEY  (id)
) CHARSET=##CHARSET##;

CREATE TABLE `PREFIXratings` (
  `id` int(11) NOT NULL auto_increment,
  `date` datetime,
  `ad_id` int(5),
  `rating` int(1),
  `ip` varchar(39),
  `title` varchar(250),
  `name` varchar(100),
  `email` varchar(100),
  `website` varchar(50),
  `content` text,
  `poster_id` int(10),
  `active` int(1) default 0,
  PRIMARY KEY  (id)
) CHARSET=##CHARSET##;

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'new_review', 'New review for your account on {$site_name}', 'Hello {$contact_name},((br/))((br/))\n\nA new review was added for your account:((br/))((br/))\n\n{$message}((br/))\nPosted by: {$sender_name}((br/))\nRated with: {$rating}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message that announces a new rating and review for a user account');

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'admin_new_review', 'New pending review on {$site_name}', 'A new review was added for {$contact_name}:((br/))((br/))\n\n{$message}((br/))\nPosted by: {$sender_name}((br/))\nRated with: {$rating}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message that announces the site administrator for a new pending rating and review for a user account');

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'new_ad_review', 'New review for your listing #{$ad_id} on {$site_name}', 'Hello {$contact_name},((br/))((br/))\n\nA new review was added for your listing #{$ad_id} ({$ad_title}):((br/))((br/))\n\n{$message}((br/))\nPosted by: {$sender_name}((br/))\nRated with: {$rating}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message that announces a new rating and review for a listing');

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES
('##LANG##', 'admin_new_ad_review', 'New pending ad review on {$site_name}', 'A new review was added for ad #{$ad_id}:((br/))((br/))\n\n{$message}((br/))\nPosted by: {$sender_name}((br/))\nRated with: {$rating}((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'The message that announces the site administrator for a new pending rating and review for a listing');

   </query>
</module>
