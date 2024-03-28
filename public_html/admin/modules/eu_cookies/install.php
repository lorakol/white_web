<?xml version="1.0" encoding="UTF-8"?>
<module>
    <id>eu_cookies</id>
    <name>EU cookies regulation</name>
    <description>Show a notification banner on your site which states that your site uses cookies, as European Union legislation requests.</description>
    <query>

INSERT INTO `PREFIXmodules` set `id` = 'eu_cookies', `name` = 'EU cookies regulation', `description` = 'Show a notification banner on your site which states that your site uses cookies, as European Union legislation requests.', `enabled` = 1;

DELETE FROM `PREFIXcustom_pages` where `code` = 'eu_cookie';

INSERT INTO `PREFIXcustom_pages` set `code` = 'eu_cookie', `navlink` = '0', `read_only` = 1, `order_no` ='';

INSERT INTO `PREFIXcustom_pages_lang` set `id`= '##LAST_ID##', `lang_id` = '##LANG##', `title` = 'Cookies policy', `content` = '((p))To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.((/p))((br/))\n((br/))\n((h3))What are cookies?((/h3))((br/))\n((br/))\n((p))A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don\'t have to keep re-entering them whenever you come back to the site or browse from one page to another.((/p))((br/))\n((br/))\n((h3))How do we use cookies?((/h3))((br/))\n((br/))\n((p))Our site uses cookies mainly to remember preferences you have about the site display:((/p))((br/))\n((br/))\n((ul))\n((li))default langauges - once you select a language on top right corner it will be remembered in a cookie until you change it again.((/li))\n((li))authentication credentials - in case you select \'Remember me\' option in Login page. If you select this option the login and encrypted password will be remembered in a cookie in your computer and used to authenticate you automatically.((/li))\n((li))the preference to display the mobile template while in non mobile environment and viceversa, the non mobile template while browsing with a mobile.((/li))\n((li))the list of listings you add to Listings Compare list((/li))\n	((li))the preference to show search page listings in list or gallery mode((/li))\n((li))((span style=\'color:#FF0000\'))******** Delete below if not applicable to your site **********((/span))((/li))\n((li))the choice you made about viewing the adult categories listings((/li))\n((li))the affiliate which brought you to our site.((/li))\n((/ul))((br/))\n((br/))\n((p))How to control cookies((/p))((br/))\n((br/))\n((p))You can ((strong))control and/or delete((/strong)) cookies as you wish - for details, see ((u))((a href=\'http://www.aboutcookies.org/\'))aboutcookies.org((/a))((/u)). You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.((/p))((br/))\n((br/))\n';


INSERT INTO `PREFIXinfo` set `lang_id` = '##LANG##',  `code` = 'eu_cookie', `content` = 'This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more about our ((a href=\"##SITE_URL##/content.php?code=eu_cookie\"))cookie terms((/a)).', `info` ='The notification which will appear on top of your site informing that your site uses cookies';



    </query>
</module>
