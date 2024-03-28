<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>video_ads</id>
    <name>Video Ads</name>
    <description>Shows a number of video ads on the first page, and a link towards an all video ads page.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'video_ads', `name`='Video Ads', `description` = 'Shows a number of video ads on the first page, and a link towards an all video ads page.', `enabled` = 1;

DROP TABLE if exists `PREFIXvideo_ads`;
CREATE TABLE `PREFIXvideo_ads` (
  `title` varchar(200),
  `no_ads` int(2) default 10
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXvideo_ads` set `title` = 'Video Ads', `no_ads`=10;
    </query>
</module>
