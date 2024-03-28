<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>dealers_page</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'dealers_page';
DROP TABLE `PREFIXdealers_page_settings`;
DELETE FROM `PREFIXcustom_pages` where `code` = 'dealers_page';
    </query>
</module>
