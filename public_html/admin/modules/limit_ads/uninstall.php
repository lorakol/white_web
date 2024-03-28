<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>limit_ads</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'limit_ads';
DROP TABLE if exists `PREFIXlimit_settings`;
    </query>
</module>
