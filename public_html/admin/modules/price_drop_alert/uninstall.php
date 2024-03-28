<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>price_drop_alert</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'price_drop_alert';
DROP TABLE `PREFIXprice_drop_alert`;
DELETE FROM `PREFIXmails` where `code` like 'price_drop_alert';
    </query>
</module>
