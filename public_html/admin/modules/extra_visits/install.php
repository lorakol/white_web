<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>extra_visits</id>
    <name>Extra Visits</name>
    <description>Add extra false numbers of visits every time someone accesses a listing. A random number of visits between 1 and a configured value is added.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'extra_visits', `name` = 'Extra Visits', `description` = 'Add extra false numbers of visits every time someone accesses a listing. A random number of visits between 1 and a configured value is added.', `enabled` = 1;

DROP TABLE if exists `PREFIXev_settings`;
CREATE TABLE `PREFIXev_settings` (
  `no` int(2) default 10
) ENGINE=MyISAM;

INSERT INTO `PREFIXev_settings` set `no` = '10';
    </query>
</module>
