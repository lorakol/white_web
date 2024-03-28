<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>promo</id>
    <name>Promote listings</name>
    <description>Send notifications to owners for listing that don't receive more than a number of visits in a period of time about how they can make their listings more visible.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'promo', `name`='Promote listings', `description` = 'Send notifications to owners for listing that don\'t receive more than a number of visits in a period of time about how they can make their listings more visible.', `enabled` = 1;

DROP TABLE if exists `PREFIXpromo_settings`;
CREATE TABLE `PREFIXpromo_settings` (
  `no_days` int(3) default 3,
  `no_visits` int(3) default 15
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXpromo_settings` set `no_days`=3, `no_visits`=15;

INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'promote_your_ad', 'Promote your listing on {$site_name}', 'Hello {$contact_name},((br/))((br/))\n\nYour listing "{$title}" received under {$no_visits} visits in the last {$no_days} days. We recommend you to improve your listing visibility by opting for one of the following extra options:\n\n((br/))((br/))\n((b))Featured ads((/b)) - appear on the upper side of the first page.\n\n((br/))((br/))\n((b))Prioritized ads((/b)) - appear on a search page on the top of the results.\n\n((br/))((br/))\n((b))Highlited ads((/b)) - appear on a search page colored differently in order to stand out.\n\n((br/))((br/))\n((b))Urgent ads((/b)) - appear on search pages marked with an Urgent tag.\n\n((br/))((br/))\n\n((b))Video classifieds((/b)) - allows you to add a video to your listing, and it is marked accordingly with a video icon in search pages.\n\n((br/))((br/))\n\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'Send notifications to owners for listing that don\'t receive more than a number of visits in a period of time about how they can make their listings more visible.');

    </query>
</module>


