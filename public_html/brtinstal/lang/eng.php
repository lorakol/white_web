<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

$lng['install']='Install';
$lng['database_information']='Database Information';
$lng['database_server']='Database Server';
$lng['mysql_username']='MySQL Username';
$lng['mysql_password']='MySQL Password';
$lng['mysql_database_name']='MySQL Database Name';
$lng['create_database']='Create Database';
$lng['tables_prefix']='Tables Prefix';

$lng['step']='Step';
$lng['of']='of';
$lng['file_permissions_check']='File Permissions Check';
$lng['writeable']='Writable';
$lng['unwriteable']='Unwritable';
$lng['recheck']='Recheck';
$lng['next']='Next';
$lng['back']='Back';
$lng['finish']='Finish';

$lng['file']='File/Folder';
$lng['state']='State';
$lng['mod_needed']='Permission Needed';

$lng['site_information']='Site Information';
$lng['site_name']='Site Name';
$lng['url']='Site URL';
$lng['path']='Script Path';
$lng['admin_username']='Admin Username';
$lng['admin_password']='Admin Password';
$lng['confirm_password']='Confirm Password';
$lng['admin_email']='Admin Email';
$lng['script_installed']='Congratulations! ::SCRIPT_TITLE:: is installed!';
$lng['view_site']='View Site';

$lng['initial_data_set'] = 'Initial data set';
$lng['none'] = 'None';
$lng['data-general'] = 'General classifieds data set';
$lng['data-cars'] = 'Auto classifieds data set';
$lng['data-estate'] = 'Real estate data set';
$lng['data-boats'] = 'Boats data set';

$lng['info']['file_permissions_check']=' In order for the script to function correctly it needs to be able to access or write to certain files or folders.<br/>
If you see "Unwriteable" you need to change the permissions on the file or folder to the values at the right ( for 666 you need to have Read and Write permissions for everybody (Owner, Group and Others), and for 777 you need to have Read, Write and Execute for everybody.)';
$lng['info']['cgi_file_permissions_check']=' In order for the script to function correctly it needs to be able to access or write to certain files or folders.<br/>
If you see "Unwriteable" you need to change the permissions on the file or folder to the values at the right ( for 644 you need to have Read and Write permissions for the Owner and Read permissions for Group and Other, and for 755 you need to have Read, Write and Execute for Owner and Read and Execute for Group and Other.)';

$lng['info']['database_information']='Please fill in the following fields with MySQL data taken from your hosting account. All fields marked with * are required.';

$lng['info']['database_server']='Usually this is <b>localhost</b>';
$lng['info']['mysql_username']='The username given by the hosting. You might need to create this user from your hosting web control panel.';
$lng['info']['mysql_password']='The password for the MySQL account.';
$lng['info']['mysql_database_name']='The database name given by the hosting. You might need to create this database from your hosting web control panel and then to give full rights for the MySQL user you entered above to this database.';
$lng['info']['create_database']='Check this if you have not created the database yet and you have the right to create tables with the MySQL user you use.';
$lng['info']['tables_prefix']='Some hosts allow only one database per account. Use table prefix in this case you need to install multiple scripts on your database.';
$lng['info']['initial_data_set'] = 'The initial data the script is installed with. Depending on what you choose, different categories and custom fields will be added.';

$lng['info']['site_name']='The name of your site. e.g. ::SCRIPT_TITLE:: Demo Site';
$lng['info']['url']='The URL for your site. The script automatically detects your URL, so if you are not sure leave the URL as it is.';
$lng['info']['path']='The path for your files. The script automatically detects your path, so if you are not sure leave it as it is.';
$lng['info']['admin_username']='The username with administrator rights. Default username is "admin".';
$lng['info']['admin_password']='The password for administrator user. Default password is "admin"';
$lng['info']['confirm_password']='';
$lng['info']['admin_email']='The email where all messages for administrator will be sent.';
$lng['info']['security_notice']='<b>For security reasons please do the following:</b><br>
<span class="security">Remove the "install" folder. </span><br>
<span class="security">Change permissions for the file config.php to 444.</span>';

$lng['info']['script_installed']='You can now view your site by clicking on "View Site" button. You can change settings to your script by logging in to your <b>administrator account</b>. You can see below the settings for your site:';


$lng['errors']['db_server_missing']='Please fill in database server!';
$lng['errors']['db_user_missing']='Please fill in MySQL User';
$lng['errors']['db_missing']='Please fill in MySQL Database Name';
$lng['errors']['url_missing']='Please fill in the URL for your site!';
$lng['errors']['path_missing']='Please fill in the path to your files!';
$lng['errors']['admin_email_missing']='Please fill in the admin email';
$lng['errors']['passwords_dont_match']='Admin passwords don\'t match!';

$lng['errors']['cannot_connect_to_db']='Cannot connect to MySQL server: ';
$lng['errors']['failed_to_use_db']='Failed to use database: ';
$lng['errors']['failed_to_create_db']='Failed to create database: ';


$lng['errors']['cannot_write_config_file']='Cannot write config file. Please check if the file is writeable!';


$lng['database_charset'] = 'Database charset';
$lng['database_collation'] = 'Database collation';
$lng['initial_data'] = 'Initial data';
$lng['server_configuration'] = 'Server configuration check';

$lng['info']['db_charset'] = 'If your language needs other charset than UTF-8, please choose it now. Changing the charset for the database will not be possible after installation.';
$lng['info']['server_configuration'] = '';

$lng['php_version'] = 'PHP Version';
$lng['mysql_version'] = 'MySQL Version';
$lng['gd_lib'] = 'GD Graphics Library';
$lng['register_globals'] = 'register_globals';
$lng['on'] = 'On';
$lng['off'] = 'Off';
$lng['not_installed'] = 'Not installed';
$lng['configuration_ok'] = 'Your server configuration is fit for installing the script. Please proceed to the following installation steps!';
$lng['configuration_not_ok'] = 'Your server configuration is not fit for installing the script. Please fix the following before moving forward:';
$lng['configuration_warning'] = 'Your server configuration is fit for installing the script, but there are the following warning messages:';

$lng['error']['gd_version'] = '<b>GD Graphics Library</b> is not installed! This is used for operations with images, like creating thumbnails. This library is needed for the script to function correctly.';
$lng['error']['register_globals'] = '<b>register_globals</b> <i>php.ini</i> variable is <b>On</b>. We strongly recommend you for security reasons to set it <span id="green">Off</span>.<br/><p style="color: #999 !important;">The script will run without this modification. For technical information about the security implications <br/>of register_globals, please see <a href="http://www.php.net/manual/en/security.globals.php">this</a> PHP.net page.</p>';

$lng['languages'] = 'Languages';
$lng['installed_languages'] = 'Installed languages';
$lng['info']['installed_languages'] = 'Choose from the supported languages below the ones that you will use the script with. You must choose at least one language.';
$lng['errors']['language_missing'] = 'Please choose at least one language!';

?>