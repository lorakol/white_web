<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>latest_auctions</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'latest_auctions';
DROP TABLE if exists `PREFIXlatest_auctions`;
    </query>
</module>
