<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>auto_repost</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'auto_repost';
DROP TABLE if exists `PREFIXrepost_settings`;
DROP TABLE if exists `PREFIXreposts`;
delete from `PREFIXinfo` where code like 'auto_repost';
DELETE FROM `PREFIXmails` where `code` like 'auto_repost';
    </query>
</module>
