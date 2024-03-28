<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>private_site</id>
    <name>Private site</name>
    <description>Does not allow access to the site to guests, only logged in users can browse the site.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'private_site', `name`='Private site', `description` = 'Does not allow access to the site to guests, only logged in users can browse the site.', `enabled` = 1;
    </query>
</module>
