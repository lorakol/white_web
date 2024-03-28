<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>comments</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'comments';
DROP TABLE if exists `PREFIXcomments_settings`;
DROP TABLE if exists `PREFIXcomments`;

DELETE FROM `PREFIXmails` where `code` like 'new_comment';

    </query>
</module>
