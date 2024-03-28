<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>bump</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'bump';
DROP TABLE if exists `PREFIXbump_settings`;
delete from `PREFIXinfo` where code like 'bump_your_ad';
    </query>
</module>
