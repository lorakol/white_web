<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>tag_cloud</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'tag_cloud';
DROP TABLE if exists `PREFIXtag_cloud`;
DROP TABLE if exists `PREFIXtag_cloud_searches`;
    </query>
</module>
