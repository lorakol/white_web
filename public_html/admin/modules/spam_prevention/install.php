<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>spam_prevention</id>
    <name>Spam prevention</name>
    <description>Checks email and IP addresses against a spammers list from stopforumspam.com.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'spam_prevention', `name`='Spam Prevention', `description` = 'Checks email and IP addresses against a spammers list from StopForumSpam.com, Abuseipdb.com or IPQualityScore.com', `enabled` = 1;

DROP TABLE if exists `PREFIXspam_prevention`;
CREATE TABLE `PREFIXspam_prevention` (
  `check_registration` int(1) default 1,  
  `check_contact_forms` int(1) default 1,
  `check_comments` int(1) default 1,
  `check_reviews` int(1) default 1,
  `use_sfs` tinyint(1) default 1,
  `use_abip` tinyint(1) default 0,
  `use_ipqs` tinyint(1) default 0,
  `abip_api_key` varchar(100) default null,
  `abip_block_limit` int(3) default 50,
  `sfs_block_tor_ips` int(1) default 1,
  `sfs_block_networks` int(1) default 0,
  `sfs_block_limit` int(3) default 50,
  `ipqs_api_key` varchar(100) default null,
  `ipqs_block` tinyint(1) default 1,
  `ipqs_block_limit` int(3) default 85,
  `ipqs_add_user_info` tinyint(1) default 0,
  `ipqs_info_on_users_list` tinyint(1) default 0,
  `ipqs_strictness` int(1) default 1,
  `ipqs_public_access_points` tinyint(1) default 1,
  `ipqs_lighter_penalties` tinyint(1) default 0,
  `ipqs_timeout` int(2) default 2,
  `ipqs_ip_fast` tinyint(1) default 0,
  `ipqs_email_fast` tinyint(1) default 0,
  `block_for` int(4) default 1,
  `add_waiting_time` tinyint(1) default 0,
  `waiting_time` int(2) default 10,
  `waiting_groups` varchar(30) default '0',
  `limit_accesses` tinyint(1) default 0,
  `limit_acc_block_for` int(3) default 1,
  `limit_acc_more_than_times` int(3) default 100,
  `limit_acc_in_minutes` int(4) default 1,
  `limit_acc_count_from_pages` varchar(40),
  `limit_same_page_accesses` tinyint(1) default 0,
  `limit_spa_more_than_times` int(3) default 10
  ) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXspam_prevention` set `check_registration` = '1', `check_contact_forms`=1;

DROP TABLE if exists `PREFIXspam_prevention_log`;
CREATE TABLE `PREFIXspam_prevention_log` (
  `id` int(10) NOT NULL auto_increment,
  `date` datetime,
  `email` varchar(150),
  `ip` varchar(39),
  `confidence_sfs` float,
  `confidence_abip` float,
  `confidence_ipqs` float,
  `type` varchar(10) default 'register',
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM CHARSET=##CHARSET##;

DROP TABLE if exists `PREFIXsp_user_info`;
CREATE TABLE `PREFIXsp_user_info` (
  `ip` varchar(39),
  `ip_details` text
) ENGINE=MyISAM CHARSET=##CHARSET##;

DROP TABLE if exists `PREFIXsp_ip_accesses`;
CREATE TABLE `PREFIXsp_ip_accesses` (
  `ip` varchar(39),
  `time` datetime,
  `last_url` varchar(200),
  `count_same_url` int(3) default 0
) ENGINE=MyISAM CHARSET=##CHARSET##;

    </query>
</module>
