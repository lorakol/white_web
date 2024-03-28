<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>pedigree</id>
    <query>
DELETE FROM `PREFIXmodules` where `id` like 'pedigree';
DROP TABLE if exists `PREFIXpedigree_settings`;
DELETE FROM `PREFIXfields` where `type` like 'pedigree';
DELETE FROM `PREFIXuser_fields` where `type` like 'pedigree';
ALTER TABLE `PREFIXads` drop pedigree_s;
ALTER TABLE `PREFIXads` drop pedigree_d;
ALTER TABLE `PREFIXads` drop pedigree_ss;
ALTER TABLE `PREFIXads` drop pedigree_sd;
ALTER TABLE `PREFIXads` drop pedigree_ds;
ALTER TABLE `PREFIXads` drop pedigree_dd;
    </query>
</module>
