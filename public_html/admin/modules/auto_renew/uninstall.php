<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>auto_renew</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'auto_renew';
DROP TABLE if exists `PREFIXar_settings`;
DELETE FROM `PREFIXmails` where `code` like 'auto_renew';
    </query>
</module>
