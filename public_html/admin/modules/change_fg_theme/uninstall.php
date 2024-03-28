<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>change_fg_th</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'change_fg_theme';
DROP TABLE if exists `PREFIXcfgth_settings`;
DROP TABLE if exists `PREFIXcfgth_user_templates`;
    </query>
</module>
