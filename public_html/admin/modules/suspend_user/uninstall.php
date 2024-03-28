<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>suspend_user</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'suspend_user';
DROP TABLE if exists `PREFIXsuspend_user`;
ALTER TABLE `PREFIXusers` drop `suspended`;
ALTER TABLE `PREFIXusers` drop `date_unsuspend`;
    </query>
</module>
