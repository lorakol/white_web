<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>extra_visits</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'extra_visits';
DROP TABLE if exists `PREFIXev_settings`;
    </query>
</module>
