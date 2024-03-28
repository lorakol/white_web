<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>areasearch</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'areasearch';
DROP TABLE if exists `PREFIXzipcodes`;
DROP TABLE if exists `PREFIXareasearch_settings`;
    </query>
</module>
