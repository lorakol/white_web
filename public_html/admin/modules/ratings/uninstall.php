<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>ratings</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'ratings';
ALTER TABLE `PREFIXusers` delete `no_ratings`;
ALTER TABLE `PREFIXads` delete `no_ratings`;
DROP TABLE if exists `PREFIXuser_ratings`;
DROP TABLE if exists `PREFIXratings`;
DROP TABLE if exists `PREFIXratings_settings`;
    </query>
</module>
