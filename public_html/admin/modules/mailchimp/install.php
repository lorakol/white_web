<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>mailchimp</id>
    <name>Mailchimp auto subscribe</name>
    <description>Add a new subscription to Mailchimp every time a user registers or a contact form is filled.</description>
    <query>
INSERT INTO `PREFIXmodules` set `id` = 'mailchimp', `name`='Mailchimp auto subscribe', `description` = 'Add a new subscription to Mailchimp every time a user registers or a contact form is filled.', `enabled` = 1;

DROP TABLE if exists `PREFIXmailchimp`;
CREATE TABLE `PREFIXmailchimp` (
  `api_key` varchar(50),
  `list_id` varchar(20),
  `subscribe_on_register` tinyint(1) default 1,
  `subscribe_on_contact` tinyint(1) default 1
) ENGINE=InnoDB CHARSET=##CHARSET##;

INSERT INTO `PREFIXmailchimp` set `subscribe_on_register` = 1;
    </query>
</module>
