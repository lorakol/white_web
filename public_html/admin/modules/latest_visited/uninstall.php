<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>latest_visited</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'latest_visited';
DROP TABLE if exists `PREFIXlatest_visited`;
DROP TABLE if exists `PREFIXlatest_visited_ads`;
    </query>
</module>
