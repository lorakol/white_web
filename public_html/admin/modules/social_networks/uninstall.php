<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>social_networks</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'social_networks';
DROP TABLE `PREFIXsocial_networks_settings`;
DELETE FROM `PREFIXmails` where `code` like 'facebook_access_token_will_expire';

    </query>
</module>
