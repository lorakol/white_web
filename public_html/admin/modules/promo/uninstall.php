<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>promo</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'promo';
DROP TABLE `PREFIXpromo_settings`;
DELETE FROM `PREFIXmails` where `code` like 'promote_your_ad';
    </query>
</module>
