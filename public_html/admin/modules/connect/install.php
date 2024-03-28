<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>connect</id>
    <name>Connect with 3rd party accounts</name>
    <description>Allow login using Facebook, Google and OpenID accounts.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'connect', `name`='Connect with 3rd party accounts', `description` = 'Allow login using Facebook, Google and OpenID accounts.', `enabled` = 1;

DROP TABLE if exists `PREFIXconnect_settings`;
CREATE TABLE `PREFIXconnect_settings` (
  `enable_facebook_login` tinyint(1) default 1,
  `enable_google_login` tinyint(1) default 1,
  `google_client_id` varchar(100),
  `enable_openid_login` tinyint(1) default 1,
  `facebook_app_id` varchar(100),
  `contact_field` varchar(100),
  `group_id` int(2) default 1
) ENGINE=MyISAM CHARSET=##CHARSET##;
INSERT INTO `PREFIXconnect_settings` set `enable_facebook_login`=0, `enable_google_login`=1, `enable_openid_login`=1, `facebook_app_id`='', `contact_field`='contact_name', `group_id`='1';

ALTER TABLE `PREFIXusers` add `auth_provider` varchar(30);
ALTER TABLE `PREFIXusers` add `identity` varchar(100);

    </query>
</module>
