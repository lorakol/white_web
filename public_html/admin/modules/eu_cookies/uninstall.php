<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>acategories</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'eu_cookies';

DELETE FROM `PREFIXcustom_pages` where `code` = 'eu_cookie';

    </query>
</module>
