<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>suspend_user</id>
    <name>Suspend user</name>
    <description>Allows the administrator to suspend a user for a number of days. After the selected number of days, the user account will automatically reactivate.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'suspend_user', `name` = 'Suspend user', `description` = 'Allows the administrator to suspend a user for a number of days. After the selected number of days, the user account will automatically reactivate.', `enabled` = 1;

DROP TABLE if exists `PREFIXsuspend_user`;
CREATE TABLE `PREFIXsuspend_user` (
  `days` int(3) default 3
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXsuspend_user` set `days`='3';
ALTER TABLE `PREFIXusers` add `suspended` tinyint(1) default 0;
ALTER TABLE `PREFIXusers` add `date_unsuspend` datetime default null;

	</query>
</module>
