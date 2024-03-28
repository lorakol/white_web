<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>banners_location</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'banners_location';
DROP TABLE if exists `PREFIXbanners_location`;
ALTER TABLE `PREFIXbanners` drop `location`;

    </query>
</module>
