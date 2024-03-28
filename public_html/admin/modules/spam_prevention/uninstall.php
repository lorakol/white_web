<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>spam_prevention</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'spam_prevention';
DROP TABLE if exists `PREFIXspam_prevention`;
DROP TABLE if exists `PREFIXspam_log`;
DROP TABLE if exists `PREFIXsp_user_info`;
DROP TABLE if exists `PREFIXsp_ip_accesses`;
    </query>
</module>
