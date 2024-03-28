<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>multicurrency</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'multicurrency';
DROP TABLE if exists `PREFIXmulticurrency`;
ALTER TABLE `PREFIXads` drop `unit_price`;
ALTER TABLE `PREFIXauctions` drop `unit_starting_price`;
ALTER TABLE `PREFIXbids` drop `currency`;
ALTER TABLE `PREFIXbids` drop `unit_bid`;
    </query>
</module>
