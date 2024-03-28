<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>price_extra</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'price_extra';
DROP TABLE if exists `PREFIXprice_extra_settings`;
DROP TABLE if exists `PREFIXprice_extra_settings_lang`;
ALTER TABLE `PREFIX`ads delete `negotiable`;
ALTER TABLE `PREFIX`ads delete `price_tag`;
ALTER TABLE `PREFIX`ads delete `extra_option1`;
ALTER TABLE `PREFIX`ads delete `extra_option2`;
DROP TABLE `PREFIXprice_extra_offers`;
DELETE FROM `PREFIXmails` where `code` like 'new_offer';
DELETE FROM `PREFIXmails` where `code` like 'offer_reply';

    </query>
</module>


