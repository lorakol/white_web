<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>showcase</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'showcase';
DROP TABLE if exists `PREFIXshowcase_settings`;
ALTER TABLE `PREFIXads` drop `showcase`;
ALTER TABLE `PREFIXuser_groups` drop `showcase`;
delete from `PREFIXinfo` where code like 'showcase';
delete from `PREFIXoptions` where `option` like 'showcase';
    </query>
</module>
