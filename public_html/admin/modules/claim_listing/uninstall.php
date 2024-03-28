<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>claim_listing</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'claim_listing';
DELETE FROM `PREFIXmails` where `code` like 'claim_listing';
    </query>
</module>
