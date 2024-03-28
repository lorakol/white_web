<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>news</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'news';
DROP TABLE if exists `PREFIXnews_settings`;
DROP TABLE if exists `PREFIXnews`;
    </query>
</module>


