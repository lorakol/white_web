<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>social_networks</id>
    <name>Social networks</name>
    <description>Add to your site: Facebook Like or Share buttons, Facebook comments, Facebook recent activity, Tweet all ads automatically, Tweet buttons, Twitter follow button, Facebook page link</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'social_networks', `name`='Social networks', `description` = 'Add to your site: Facebook Like or Share buttons, Facebook comments, Facebook recent activity, Tweet all ads automatically, Tweet buttons, Twitter follow button, Facebook page link', `enabled` = 1;

DROP TABLE if exists `PREFIXsocial_networks_settings`;
CREATE TABLE `PREFIXsocial_networks_settings` (
  `facebook_page_link` varchar(200) default null,
  `twitter_account` varchar(50) default null,
  `enable_fb_like_button` tinyint(1) default 1,
  `enable_tweet_button` tinyint(1) default 1,
  `enable_gplus_button` tinyint(1) default 1,
  `enable_fb_page_plugin` tinyint(1) default 0,
  `enable_fb_comments` tinyint(1) default 0,
  `enable_pinterest_button` tinyint(1) default 0,
  `enable_linkedin_button` tinyint(1) default 0,
  `fb_lb_layout` varchar(15) default 'button_count',
  `fb_lb_show_faces` tinyint(1) default 0,
  `fb_lb_width` int(3) default 300,
  `fb_lb_action` varchar(15) default 'like',
  `fb_lb_color` varchar(10) default 'light',
  `fb_lb_locale` varchar(10) default 'en_US',
  `fb_comments_posts` int(2) default 5,
  `fb_comments_color` varchar(10) default 'light',
  `fb_pp_tabs` varchar(100) default 'timeline',
  `fb_pp_width` int(3) default 380,
  `fb_pp_height` int(3) default 500,
  `fb_pp_hide_cover` tinyint(1) default 0,
  `fb_pp_show_facepile` tinyint(1) default 1,
  `fb_pp_hide_cta` tinyint(1) default 0,
  `fb_pp_small_header` tinyint(1) default 0,
  `tw_data_count` varchar(15) default 'none',
  `tw_data_text` varchar(200) default null,
  `tweet_ads` tinyint(1) default 0,
  `tw_consumer_key` varchar(30) default null,
  `tw_consumer_secret` varchar(50) default null,
  `tw_access_token` varchar(50) default null,
  `tw_access_token_secret` varchar(50) default null,
  `gplus_size` varchar(30) default 'medium',
  `gplus_language` varchar(10) default 'en-US',
  `fb_appid` varchar(100),
  `fb_pageid` varchar(100),
  `fb_post_ads` tinyint(1) default 0,
  `fb_secret` varchar(100),
  `fb_access_token` text,
  `fb_access_token_expires` datetime,
  `fb_page_access_token` text,
  `gplus_page_link` varchar(200) default null,
  `enable_fb_share_button` tinyint(1) default 0,
  `fb_sb_layout` varchar(15) default 'button_count',
  `youtube_link` varchar(200) default null,
  `pinterest_link` varchar(200) default null,
  `instagram_link` varchar(200) default null,
  `linkedin_link` varchar(200) default null
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXsocial_networks_settings` set `tw_data_text`='##TITLE##';

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'facebook_access_token_will_expire', 'Your Facebook access token will expire', 'The Facebook access token configured in Social Networks module settings will expire in less than 3 days. Please generate a new one from the module settings!', 'Notifies the administrator when the Facebook access token from Social Networks module is about to expire.');

    </query>
</module>
