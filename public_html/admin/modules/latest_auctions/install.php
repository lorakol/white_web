<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>latest_auctions</id>
    <name>Latest Auctions</name>
    <description>Shows the latest ads which have auctions enabled on the first page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'latest_auctions', `name`='Latest Auctions', `description` = 'Shows the latest ads which have auctions enabled on the first page.', `enabled` = 1;

DROP TABLE if exists `PREFIXlatest_auctions`;
CREATE TABLE `PREFIXlatest_auctions` (
  `title` varchar(200),
  `no_ads` int(2) default 10
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXlatest_auctions` set `title` = 'Latest Auctions', `no_ads`=10;
    </query>
</module>
