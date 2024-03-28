<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>claim_listing</id>
    <name>Claim listing</name>
    <description>For listings posted without a user account, allow owners to reclaim their listings. They will receive an email with an URL which can be used to edit or delete the listing.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'claim_listing', `name`='Claim listing', `description` = 'For listings posted without a user account, allow owners to reclaim their listings. They will receive an email with an URL which can be used to edit or delete the listing.', `enabled` = 1;
INSERT INTO `PREFIXmails` (`lang_id`, `code`, `subject`, `content`, `info`) VALUES ('##LANG##', 'claim_listing', 'Listing reclaimed: {$title}', 'Hello {$contact_name},((br/))((br/))\n\nYou can use the following link to manage your listing:((br/))\n{$details_link}((br/))\n((br/))\nRegards,((br/))\n((font color="#2995b5")){$administrator}((/font))((br/))\n{$site_url}((br/))((br/))\n', 'Resend to guests listing owners the email which contains their listings management link.');

    </query>
</module>
