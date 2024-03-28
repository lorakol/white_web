<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>legacy_links_compat</id>
    <name>Legacy links compatibility</name>
    <description>Use this module if you had your site URLs indexed in the legacy format (prior to version 9.4), but you're using the new URL type. This module adds the functionality to support both URL types, legacy and current and also canonical URLs in order to avoid duplicate content issues.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'legacy_links_compat', `name`='Legacy links compatibility', `description` = 'Use this module if you had your site URLs indexed in the legacy format (prior to version 9.4), but you\'re using the new URL type. This module adds the functionality to support both URL types, legacy and current and also canonical URLs in order to avoid duplicate content issues.', `enabled` = 1;
    </query>
</module>
