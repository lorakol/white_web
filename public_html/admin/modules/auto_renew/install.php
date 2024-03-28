<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>auto_renew</id>
    <name>Auto Renew</name>
    <description>Auto renew expired listings after a number of days.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'auto_renew', `name` = 'Auto Renew', `description` = 'Auto renew expired listings after a number of days.', `enabled` = 1;

DROP TABLE if exists `PREFIXar_settings`;
CREATE TABLE `PREFIXar_settings` (
  `days` int(2) default 2,
  `plans` varchar(200) default '0'
) ENGINE=MyISAM;

INSERT INTO `PREFIXar_settings` set `days` = '2';

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'auto_renew', 'Listing auto renewed: {$title}', 'Hello {$contact_name},((br/))((br/))\n\nYour listing "{$title}" was renewed.((br/))\n((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'Notify the owner when their listing was renewed (Auto renew module).');

    </query>
</module>
