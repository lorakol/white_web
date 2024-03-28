<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>adisclaimer</id>
    <name>Adult disclaimer</name>
    <description>Show an adult content disclaimer for the whole site.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'adisclaimer', `name` = 'Adult Disclaimer', `description` = 'Show an adult content disclaimer for the whole site.', `enabled` = 1;

DROP TABLE if exists `PREFIXad_settings`;
CREATE TABLE `PREFIXad_settings` (
  `cookie_availability` int(3) default 30,
  `disclaimer` text
) ENGINE=MyISAM CHARSET=##CHARSET##;

INSERT INTO `PREFIXad_settings` set `disclaimer` = 'WARNING! ADULT ONLY CONTENT, MUST BE 21+ ((br))((br))ATTNENTION! this section BELOW contains ADULT sexual content, including pictorial nudity and some adult language. It is to be enter only by adult personal who confirm they are 21 years of age or older (and is not considered to be a minor in his/her state of residence) and who live in a community or local jurisdiction where nude pictures and explicit adult materials are not prohibited by law. By accessing this website section, you are confirming to us that you meet the above qualifications.((br))((br))I confirm that I am 21 years of age or older (and am not considered to be a minor in my state of residence) and that I am not located in a community or local jurisdiction where nude pictures or explicit adult materials are prohibited by any law. I agree to report any illegal services or activities which violate the Terms of Use.((br))((br))I have read and agree to this disclaimer as well as the Terms of Use.((br))';
    </query>
</module>
