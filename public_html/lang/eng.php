<?php
/*
	*
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Home';
$lng['navbar']['login'] = 'Sign In';
$lng['navbar']['logout'] = 'Sign Out';
$lng['navbar']['recent_ads'] = 'Recent Ads';
$lng['navbar']['register'] = 'Register';
$lng['navbar']['submit_ad'] = 'Post an Ad';
$lng['navbar']['editad'] = 'Edit Ad';
$lng['navbar']['my_account'] = 'My Account';
$lng['navbar']['administrator_panel'] = 'Administrator Panel';
$lng['navbar']['contact'] = 'Contact';
$lng['navbar']['password_recovery'] = 'Password Recovery';
$lng['navbar']['renew_listing'] = 'Renew Listing';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Submit';
$lng['general']['search'] = 'Search';
$lng['general']['contact'] = 'Contact';
$lng['general']['activeads'] = 'listings';
$lng['general']['activead'] = 'listing';
$lng['general']['subcats'] = 'subcats';
$lng['general']['subcat'] = 'subcat';
$lng['general']['view_ads'] = 'View Ads';
$lng['general']['back'] = '&laquo; Back';
$lng['general']['goto'] = 'Go to';
$lng['general']['page'] = 'Page';
$lng['general']['of'] = 'of';
$lng['general']['other'] = 'Other';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Add';
$lng['general']['delete_all'] = 'Delete All Selected';
$lng['general']['action'] = 'Action';
$lng['general']['edit'] = 'Edit';
$lng['general']['delete'] = 'Delete';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'FREE';
$lng['general']['not_authorized'] = 'You are not authorized to see this page!';
$lng['general']['access_restricted'] = 'Your access to this site was restricted!';
$lng['general']['featured_ads'] = 'Featured Ads';
$lng['general']['latest_ads'] = 'Latest Ads';
$lng['general']['quick_search'] = 'Quick Search';
$lng['general']['go'] = 'Go';
$lng['general']['unlimited'] = 'Unlimited';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'A file with the same name already exists and cannot be overwritten!';
$lng['images']['errors']['file_uploaded_too_big'] = 'You are not allowed to upload files bigger than ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'The image dimensions are too big! Please upload a file with maximum ::MAX_FILE_WIDTH::px width and maximum ::MAX_FILE_HEIGHT::px height !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'The file could not be uploaded!';
$lng['images']['errors']['no_file'] = 'Please choose a file to upload!';
$lng['images']['errors']['no_folder'] = 'Upload folder does not exist!';
$lng['images']['errors']['folder_not_writeable'] = 'Upload folder is not writable!';
$lng['images']['errors']['file_type_not_accepted'] = 'The uploaded file type is not a image file or is not supported!';
$lng['images']['errors']['error'] = 'There has been an error uploading the file. The error was: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Thumbnail upload folder does not exist!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Thumbnail upload folder is not writable!';
$lng['images']['errors']['no_jpg_support'] = 'No JPG support!';
$lng['images']['errors']['no_png_support'] = 'No PNG support!';
$lng['images']['errors']['no_gif_support'] = 'No GIF support!';
$lng['images']['errors']['jpg_create_error'] = 'Error in creating JPG image from source!';
$lng['images']['errors']['png_create_error'] = 'Error in creating PNG image from source!';
$lng['images']['errors']['gif_create_error'] = 'Error in creating GIF image from source!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Sign In';
$lng['login']['logout'] = 'Sign Out';
$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Password';
$lng['login']['forgot_pass'] = 'Forgot your password?';
$lng['login']['click_here'] = 'Click here to reset it!';

$lng['login']['errors']['password_missing'] = 'Please fill in your password!';
$lng['login']['errors']['username_missing'] = 'Please fill in your username!';
$lng['login']['errors']['username_invalid'] = 'The username is invalid!';
$lng['login']['errors']['invalid_username_pass'] = 'Invalid username or password!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Sign Out';
$lng['logout']['loggedout'] = 'You have been signed out!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Register';
$lng['users']['repeat_password'] = 'Repeat Password';
$lng['users']['image_verification_info'] = 'Please enter the text shown in the image in the box below.<br /> The possible characters are letters from a to h in lower case<br /> and the numbers from 1 to 9.';
$lng['users']['already_logged_in'] = 'You are already logged in!';
$lng['users']['select'] = 'Select';

$lng['users']['info']['activate_account'] = 'An email was sent to your account. Please follow the indications to activate your account.';
$lng['users']['info']['welcome_user'] = 'Your account was created. Please <a href="login.php">Sign In</a> to your account!';
$lng['users']['info']['awaiting_admin_verification'] = 'Your account is pending and waiting for administrator verification. You will be notified by email when your account is active.';
$lng['users']['info']['account_info_updated'] = 'Your account information was updated!';
$lng['users']['info']['password_changed'] = 'Your password was changed!';
$lng['users']['info']['account_activated'] = 'Your account was activated! Please <a href="login.php">sign in</a> to your account.';

$lng['users']['errors']['username_missing'] = 'Please fill in username!';
$lng['users']['errors']['invalid_username'] = 'Invalid Username!';
$lng['users']['errors']['username_exists'] = 'Username already exists! Please sign in if you already have an account!';
$lng['users']['errors']['email_missing'] = 'Please insert email address!';
$lng['users']['errors']['invalid_email'] = 'Invalid email address!';
$lng['users']['errors']['passwords_dont_match'] = 'Passwords don\'t match!';
$lng['users']['errors']['email_exists'] = 'The email address is already used! Please sign in if you already have an account!';
$lng['users']['errors']['password_missing'] = 'Please fill in password!';
$lng['users']['errors']['invalid_validation_string'] = 'Human verification failed!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Invalid account or activation key! Please contact the administrator!';
$lng['users']['errors']['account_already_active'] = 'Your account is already active!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Listing';
$lng['listings']['category'] = 'Category';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Price';
$lng['listings']['ad_description'] = 'Ad Description';
$lng['listings']['title'] = 'Title';
$lng['listings']['description'] = 'Description';
$lng['listings']['image'] = 'Image';
$lng['listings']['words_left'] = 'Words Left';
$lng['listings']['enter_photos'] = 'Enter Photos';
$lng['listings']['ad_information'] = 'Ad Information';
$lng['listings']['free'] = 'FREE';
$lng['listings']['details'] = 'Details';
$lng['listings']['stock_no'] = 'Stock No';
$lng['listings']['location'] = 'Location';
$lng['listings']['contact_info'] = 'Contact info';
$lng['listings']['email_seller'] = 'Contact seller';
$lng['listings']['no_recent_ads'] = 'No Recent Ads';
$lng['listings']['no_ads'] = 'No Ads listed for this category';
$lng['listings']['added_on'] = 'Posted';
$lng['listings']['send_mail'] = 'Send Email to User';
$lng['listings']['user'] = 'User';
$lng['listings']['price'] = 'Price';
$lng['listings']['confirm_delete'] = 'Are you sure you want to delete the listing?';
$lng['listings']['confirm_delete_all'] = 'Are you sure you want to delete selected listings?';
$lng['listings']['all'] = 'All Listings';
$lng['listings']['active_listings'] = 'Active Listings';
$lng['listings']['pending_listings'] = 'Pending Listings';
$lng['listings']['featured_listings'] = 'Featured Listings';
$lng['listings']['expired_listings'] = 'Expired Listings';
$lng['listings']['active'] = 'Active';
$lng['listings']['inactive'] = 'Inactive';
$lng['listings']['pending'] = 'Pending';
$lng['listings']['featured'] = 'Featured';
$lng['listings']['expired'] = 'Expired';
$lng['listings']['order_by_date'] = 'Sort by Date';
$lng['listings']['order_by_category'] = 'Sort by Category';
$lng['listings']['order_by_make'] = 'Sort by Make';
$lng['listings']['order_by_price'] = 'Sort by Price';
$lng['listings']['order_by_views'] = 'Sort by Visits';
$lng['listings']['order_asc'] = 'Ascending';
$lng['listings']['order_desc'] = 'Descending';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visits';
$lng['listings']['date'] = 'Date';
$lng['listings']['no_listings'] = 'No Listings';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'This listing does not exist!';
$lng['listings']['mark_sold'] = 'Mark As Sold';
$lng['listings']['mark_unsold'] = 'Unmark As Sold';
$lng['listings']['sold'] = 'Sold';
$lng['listings']['feature'] = 'Feature';
$lng['listings']['expired_on'] = 'Expired on';
$lng['listings']['renew'] = 'Renew';
$lng['listings']['print_page'] = 'Print';
$lng['listings']['recommend_this'] = 'Share';
$lng['listings']['more_listings'] = 'More listings from this user';
$lng['listings']['all_listings_for'] = 'All listings for';
$lng['listings']['free_category'] = 'FREE Category';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Are you sure you want to delete the ad picture?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Words quota exceeded! You can write maximum ::MAX:: words'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Your listing contains forbidden words: ::FORBIDDEN_WORDS_LIST::! Please review your content!';
$lng['listings']['errors']['title_missing']='Please fill in a title for your listing!';
$lng['listings']['errors']['category_missing']='Please choose a category!';
$lng['listings']['errors']['invalid_category']='Invalid category!';
$lng['listings']['errors']['package_missing']='Please choose a plan!';
$lng['listings']['errors']['invalid_package']='Invalid plan!';
$lng['listings']['errors']['content_missing']='Please insert a content for your listing!';
$lng['listings']['errors']['invalid_price']='Invalid price!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Price Low';
$lng['quick_search']['price_high'] = 'Price High';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Post a New Ad';
$lng['useraccount']['browse_your_listings'] = 'My Listings';
$lng['useraccount']['modify_account_info'] = 'Account Info';
$lng['useraccount']['order_history'] = 'Order History';
$lng['useraccount']['total_listings'] = 'Total Listings';
$lng['useraccount']['total_views'] = 'Total Visits';
$lng['useraccount']['active_listings'] = 'Active Listings';
$lng['useraccount']['pending_listings'] = 'Pending Listings';
$lng['useraccount']['last_login'] = 'Last Login';
$lng['useraccount']['last_login_ip'] = 'Last Login IP';
$lng['useraccount']['expired_listings'] = 'Expired Listings';
$lng['useraccount']['statistics'] = 'Statistics';
$lng['useraccount']['welcome'] = 'Welcome';
$lng['useraccount']['contact_name'] = 'Contact Name';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Password';
$lng['useraccount']['repeat_password'] = 'Repeat Password';
$lng['useraccount']['change_password'] = 'Change Password';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'to';
$lng['advanced_search']['price_min'] = 'Min Price';
$lng['advanced_search']['price_max'] = 'Max Price';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Sort By';
$lng['advanced_search']['sort_by_price'] = 'Sort By Price';
$lng['advanced_search']['sort_by_date'] = 'Sort By Date';
$lng['advanced_search']['sort_by_make'] = 'Sort By Make';
$lng['advanced_search']['sort_descendant'] = 'Sort Descending';
$lng['advanced_search']['sort_ascendant'] = 'Sort Ascending';
$lng['advanced_search']['only_ads_with_pic'] = 'Only Ads With Pictures';
$lng['advanced_search']['no_results'] = 'No listings were found to match your search!';
$lng['advanced_search']['multiple_ads_matching'] = 'There are ::NO_ADS:: listings that match your search!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'There is one listing that matches your search!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Name';
$lng['contact']['subject'] = 'Subject';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Webpage';
$lng['contact']['comments'] = 'Comments';
$lng['contact']['message_sent'] = 'Your message was sent!';
$lng['contact']['sending_message_failed'] = 'Message delivery failed!';
$lng['contact']['mailto'] = 'Email To';

$lng['contact']['error']['name_missing'] = 'Please fill in your name!';
$lng['contact']['error']['subject_missing'] = 'Please fill in a subject!';
$lng['contact']['error']['email_missing'] = 'Please fill in your email!';
$lng['contact']['error']['invalid_email'] = 'Invalid email address!';
$lng['contact']['error']['comments_missing'] = 'Please fill in your comments!';
$lng['contact']['error']['invalid_validation_number'] = 'Human verification failed!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email address';
$lng['password_recovery']['new_password'] = 'New Password';
$lng['password_recovery']['repeat_new_password'] = 'Repeat New Password';
$lng['password_recovery']['invalid_key'] = 'They key is invalid or has expired!';

$lng['password_recovery']['email_missing'] = 'Please fill in your email address!';
$lng['password_recovery']['invalid_email'] = 'Invalid email address';
$lng['password_recovery']['email_inexistent'] = 'There is no user registered with this email address';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Amount';
$lng['packages']['words'] = 'Words';
$lng['packages']['days'] = 'Days';
$lng['packages']['pictures'] = 'Pictures';
$lng['packages']['picture'] = 'Picture';
$lng['packages']['available'] = 'Available';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Processor';
$lng['order_history']['amount'] = 'Amount';
$lng['order_history']['completed'] = 'Completed';
$lng['order_history']['not_completed'] = 'Not Completed';
$lng['order_history']['ad_no'] = 'Listing id';
$lng['order_history']['date'] = 'Date';
$lng['order_history']['no_actions'] = 'No Order Records';
$lng['order_history']['order_by_date'] = 'Sort by Date';
$lng['order_history']['order_by_amount'] = 'Sort by Amount';
$lng['order_history']['order_by_processor'] = 'Sort by Processor';
$lng['order_history']['description'] = 'Description';
$lng['order_history']['newad'] = 'Newad';
$lng['order_history']['renew'] = 'Renew';
$lng['order_history']['featured'] = 'Feature Ad';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sort by Date';
$lng['order']['price'] = 'Sort by Price';
$lng['order']['title'] = 'Sort by Title';
$lng['order']['desc'] = 'Descending';
$lng['order']['asc'] = 'Ascending';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Share this ad';
$lng['recommend']['your_name'] = 'Your Name';
$lng['recommend']['your_email'] = 'Your Email';
$lng['recommend']['friend_name'] = 'Friend\'s Name';
$lng['recommend']['friend_email'] = 'Friend\'s Email';
$lng['recommend']['message'] = 'Message to your friend';


$lng['recommend']['error']['your_name_missing'] = 'Please fill in your name!';
$lng['recommend']['error']['your_email_missing'] = 'Please fill in your email!';
$lng['recommend']['error']['friend_name_missing'] = 'Please fill in your friend\'s name!';
$lng['recommend']['error']['friend_email_missing'] = 'Please fill in your friend\'s email!';
$lng['recommend']['error']['invalid_email'] = 'Invalid email address';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Listings';
$lng['stats']['general'] = 'General';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Subscribe';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favorites';
$lng['general']['as'] = 'as';
$lng['general']['view'] = 'View';
$lng['general']['none'] = 'None';
$lng['general']['yes'] = 'yes';
$lng['general']['no'] = 'no';
$lng['general']['next'] = 'Next &raquo;';
$lng['general']['finish'] = 'Finish';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Remove';
$lng['general']['previous_page'] = '&laquo; Previous';
$lng['general']['next_page'] = 'Next &raquo;';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Active';
$lng['general']['inactive'] = 'Inactive';
$lng['general']['expires'] = 'Expires on';
$lng['general']['available'] = 'Available';
$lng['general']['cancel'] = 'Cancel';
$lng['general']['never'] = 'Never';
$lng['general']['asc'] = 'Ascending';
$lng['general']['desc'] = 'Descending';
$lng['general']['pending'] = 'Pending';
$lng['general']['upload'] = 'Upload';
$lng['general']['processing'] = 'Processing, please wait ... ';
$lng['general']['help'] = 'Help';
$lng['general']['hide'] = 'Hide';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'This is a limited demo version. You are not allowed to modify certain settings!';
$lng['general']['check_all'] = 'Check All';
$lng['general']['uncheck_all'] = 'Uncheck All';
$lng['general']['all'] = 'All';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Dealer Page';
$lng['users']['store_banner'] = 'Dealer Page Banner';
$lng['users']['waiting_mail_activation'] = 'Waiting for email activation';
$lng['users']['waiting_admin_activation'] = 'Waiting for admin approval';
$lng['users']['no_such_id'] = 'This user user does not exist.';

$lng['users']['info']['store_banner'] = 'The image that will be used as top image for your dealer page.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Report';
$lng['listings']['report_reason'] = 'Report Reason';
$lng['listings']['meta_info'] = 'Meta Information';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Description';
$lng['listings']['not_approved'] = 'Not Approved';
$lng['listings']['approve'] = 'Approve';
$lng['listings']['choose_payment_method'] = 'Choose payment method';

$lng['listings']['choose_category'] = 'Choose Category';
$lng['listings']['choose_plan'] = 'Choose Plan';
$lng['listings']['enter_ad_details'] = 'Enter Ad Details';
$lng['listings']['ad_details'] = 'Ad Details';
$lng['listings']['add_photos'] = 'Add Photos';
$lng['listings']['ad_photos'] = 'Ad Photos';
$lng['listings']['edit_photos'] = 'Edit Photos';
$lng['listings']['extra_options'] = 'Extra Options';
$lng['listings']['review'] = 'Ad Review';
$lng['listings']['finish'] = 'Finish';
$lng['listings']['next_step'] = 'Next Step &raquo;';
$lng['listings']['included'] = 'Included';
$lng['listings']['finalize'] = 'Finalize';
$lng['listings']['zip'] = 'Zipcode';
$lng['listings']['add_to_favourites'] = 'Add to favorites';
$lng['listings']['confirm_add_to_fav'] = 'Warning! You are not logged in! The favorites list will be temporary!';
$lng['listings']['add_to_fav_done'] = 'The listing was added to favorites list!';
$lng['listings']['confirm_delete_favourite'] = 'Are you sure you want to delete the favorite ad?';
$lng['listings']['no_favourites'] = 'No Favorite Listings';
$lng['listings']['highlited'] = 'Highlighted';
$lng['listings']['priority'] = 'Priority';
$lng['listings']['video'] = 'Video Classifieds';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Pending Video';
$lng['listings']['video_code'] = 'Video Code';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = 'Approve Ad';
$lng['listings']['finalize_later'] = 'Finalize Later';
$lng['listings']['click_to_upload'] = 'Click to upload';
$lng['listings']['files_uploaded'] = ' Photo(s) uploaded of total ';
$lng['listings']['allowed'] = ' photos allowed!';
$lng['listings']['limit_reached'] = ' Limit of maximum photos reached!';
$lng['listings']['edit_options'] = 'Edit Ad Options';
$lng['listings']['view_store'] = 'View Dealer Page';
$lng['listings']['edit_ad_options'] = 'Edit Ad Options';
$lng['listings']['no_extra_options_selected'] = 'No extra options selected!';
$lng['listings']['highlited_listings'] = 'Highlighted Listings';
$lng['listings']['for_listing'] = 'for listing no ';
$lng['listings']['expires_on'] = 'Expires';
$lng['listings']['expired_on'] = 'Expired';
$lng['listings']['pending_ad'] = 'Pending Listing';
$lng['listings']['pending_highlited'] = 'Pending Highlighted';
$lng['listings']['pending_featured'] = 'Pending Featured';
$lng['listings']['pending_priority'] = 'Pending Priority';
$lng['listings']['enter_coupon'] = 'Enter discount code';
$lng['listings']['discount'] = 'Discount';
$lng['listings']['select_plan'] = 'Select Plan';
$lng['listings']['pending_subscription'] = 'Pending Subscription';
$lng['listings']['remove_favourite'] = 'Remove Favorite';

$lng['listings']['order_up'] = 'Order up';
$lng['listings']['order_down'] = 'Order down';

$lng['listings']['errors']['invalid_youtube_video'] = 'Invalid youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Subscribe';
$lng['useraccount']['no_package'] = 'No Ad Plan';
$lng['useraccount']['packages'] = 'Plans';
$lng['useraccount']['date_start'] = 'Date Start';
$lng['useraccount']['date_end'] = 'Date End';
$lng['useraccount']['remaining_ads'] = 'Remaining Ads';
$lng['useraccount']['account_type'] = 'Account type';
$lng['useraccount']['unfinished_listings'] = 'Unfinished Listings';
$lng['useraccount']['confirm_delete_subscription'] = 'Are you sure you want to remove this subscription?';
$lng['useraccount']['buy_store'] = 'Buy Dealer Page';
$lng['useraccount']['bulk_uploads'] = 'Bulk uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Subscription';
$lng['packages']['ads'] = 'Ads';
$lng['packages']['name'] = 'Name';
$lng['packages']['details'] = 'Details';
$lng['packages']['no_ads'] = 'Number of Ads';
$lng['packages']['subscription_time'] = 'Subscription Time';
$lng['packages']['no_pictures'] = 'Allowed Pictures';
$lng['packages']['no_words'] = 'Number of Words';
$lng['packages']['ads_availability'] = 'Ads Availability';
$lng['packages']['featured'] = 'Featured';
$lng['packages']['highlited'] = 'Highlighted';
$lng['packages']['priority'] = 'Priority';
$lng['packages']['video'] = 'Video Classifieds';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Subscription';
$lng['order_history']['post_listing'] = 'Post Listing';
$lng['order_history']['renew_listing'] = 'Renew Listing';
$lng['order_history']['feature_listing'] = 'Feature Listing';
$lng['order_history']['subscribe_to_package'] = 'Subscribe to Plan';
$lng['order_history']['complete_payment'] = 'Complete Payment';
$lng['order_history']['complete_payment_for'] = 'Complete Payment For';
$lng['order_history']['details'] = 'Details';
$lng['order_history']['subscription_no'] = 'Subscription No';
$lng['order_history']['highlited'] = 'Highlighte Ad';
$lng['order_history']['priority'] = 'Priority';
$lng['order_history']['video'] = 'Video Classifieds';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Please choose a plan!';
$lng['buy_package']['error']['choose_processor'] = 'Please choose the payment type!';
$lng['buy_package']['error']['invalid_processor'] = 'Invalid payment processor!';
$lng['buy_package']['error']['invalid_package'] = 'Invalid plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Invalid Paypal transaction!';
$lng['2co']['invalid_transaction'] = 'Invalid 2Checkout transaction!';
$lng['moneybookers']['invalid_transaction'] = 'Invalid Moneybookers transaction!';
$lng['authorize']['invalid_transaction'] = 'Invalid Authorize.net transaction!';
$lng['manual']['invalid_transaction'] = 'Invalid transaction!';

$lng['paypal']['transaction_canceled'] = 'Paypal transaction canceled!';
$lng['2co']['transaction_canceled'] = '2Checkout transaction canceled!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transaction canceled!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transaction canceled!';
$lng['manual']['transaction_canceled'] = 'Transaction canceled!';
$lng['epay']['transaction_canceled'] = 'ePay transaction canceled!';

$lng['payments']['transaction_already_processed'] = 'The transaction has already been processed!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Approve Subscription';
$lng['subscribe']['payment_method'] = 'Payment Method';
$lng['subscribe']['renew_subscription'] = 'Renew Subscription';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copy email: ';
$lng['bcc_mails']['from'] = 'From: ';
$lng['bcc_mails']['to'] = 'To: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Bulk upload status: ';
$lng['ie']['successfully'] = 'listings added successfully';
$lng['ie']['failed'] = 'failed';
$lng['ie']['uploaded_listings'] = 'Uploaded ads list:';
$lng['ie']['errors']['upload_import_file'] = 'Please upload the file to import from!';
$lng['ie']['errors']['incorrect_file_type'] = 'Incorrect file type! The file type must be: ';
$lng['ie']['errors']['could_not_open_file'] = 'Could not open file!';
$lng['ie']['errors']['choose_categ'] = 'Please choose a category!';
$lng['ie']['errors']['could_not_save_file'] = 'Could not download file: ';
$lng['ie']['errors']['required_field_missing'] = 'Required field missing: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Incorrect data elements count for row no: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Choose Dealer';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Area search';
$lng['areasearch']['all_locations'] = 'All locations';
$lng['areasearch']['exact_location'] = 'Exact location';
$lng['areasearch']['around'] = 'around';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Yes';
$lng['general']['No'] = 'No';
$lng['general']['or'] = 'or';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'by';
$lng['general']['close_window'] = 'Close Window';
$lng['general']['more_options'] = 'more options &raquo;';
$lng['general']['less_options'] = '&laquo; less options';
$lng['general']['send'] = 'Send';
$lng['general']['save'] = 'Save';
$lng['general']['for'] = 'for';
$lng['general']['to'] = 'to';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Mark As Rented';
$lng['listings']['mark_unrented'] = 'Unmark As Rented';
$lng['listings']['rented'] = 'Rented';
$lng['listings']['your_info'] = 'Your information';
//******
$lng['listings']['email'] = 'Your Email Address';
$lng['listings']['name'] = 'Your Name';

$lng['listings']['listing_deleted'] = 'Your listing was deleted!';
$lng['listings']['post_without_login'] = 'Post without login';
$lng['listings']['waiting_activation'] = 'Waiting for activation';
$lng['listings']['waiting_admin_approval'] = 'Waiting for administrator approval';
$lng['listings']['dont_need_account'] = 'Don\'t need an account? Post your ad without login!';
$lng['listings']['post_your_ad'] = 'Post your ad!';
$lng['listings']['posted'] = 'Posted';
$lng['listings']['select_subscription'] = 'Select Subscription';
$lng['listings']['choose_subscription'] = 'Choose Subscription';
$lng['listings']['inactive_listings'] = 'Inactive Listings';
//*********
$lng['listings']['error']['your_email_missing'] = 'Please fill in your email address. This will be used to manage your listing.';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Refine Search';
$lng['search']['refine_by_keyword'] = 'Refine by keyword';
$lng['search']['showing'] = 'Showing';
$lng['search']['more'] = 'More ...';
$lng['search']['less'] = 'Less ...';
$lng['search']['search_for'] = 'Search for';
$lng['search']['save_your_search'] = 'Save your search';
$lng['search']['save'] = 'Save';
$lng['search']['search_saved'] = 'Your search was saved!';
$lng['search']['must_login_to_save_search'] = 'You must sign in to your account to save your search!';
$lng['search']['view_search'] = 'View search';
$lng['search']['all_categories'] = 'All Categories';
$lng['search']['more_than'] = 'more than';
$lng['search']['less_than'] = 'less than';

$lng['search']['error']['cannot_save_empty_search'] = 'Your search does not contain any terms so it cannot be saved!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Saved Searches';
$lng['useraccount']['view_saved_searches'] = 'View Saved Searches';
$lng['useraccount']['no_saved_searches'] = 'No Saved Searches';
$lng['useraccount']['recurring'] = 'Recurring';
$lng['useraccount']['date_renew'] = 'Date renewed';
$lng['useraccount']['logged_in_as'] = 'You are logged in as ';
$lng['useraccount']['subscriptions'] = 'Subscriptions';

$lng['users']['activate_account'] = 'Activate Account';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Add Subscription';
$lng['subscriptions']['package'] = 'Subscription';
$lng['subscriptions']['remaining_ads'] = 'Remaining Ads';
$lng['subscriptions']['recurring'] = 'Recurring';
$lng['subscriptions']['date_start'] = 'Date Start';
$lng['subscriptions']['date_end'] = 'Date End';
$lng['subscriptions']['date_renew'] = 'Date Renew';
$lng['subscriptions']['confirm_delete'] = 'Are you sure you want to delete the subscription?';
$lng['subscriptions']['no_subscriptions'] = 'No Subscriptions';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'You don\'t have an account yet?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Enable recurring payments for this subscription';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'The following required fields are missing: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Buy Dealer Page';


$lng['images']['errors']['max_photos'] = 'Maximum photos uploaded!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email alert';
$lng['alerts']['email_alerts'] = 'Email alerts';
$lng['alerts']['no_alerts'] = 'No email alerts';
$lng['alerts']['view_email_alerts'] = 'View your Email alerts';
$lng['alerts']['send_email_alerts'] = 'Send Email alerts';
$lng['alerts']['immediately'] = 'Immediately';
$lng['alerts']['daily'] = 'Daily';
$lng['alerts']['weekly'] = 'Weekly';
$lng['alerts']['your_email'] = 'your email address';
$lng['alerts']['create_alert'] = 'Create email alert';
$lng['alerts']['email_alert_info'] = 'Subscribe to receive email alerts when new listings show up for this search:';
$lng['alerts']['alert_added'] = 'Your alert was created!';
$lng['alerts']['alert_added_activate'] = 'You will receive an email shortly on <b>::EMAIL::</b>. Please click the link in the email to activate your email alert!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Search in';
$lng['alerts']['keyword'] = 'keyword';
$lng['alerts']['frequency'] = 'Alert frequency';
$lng['alerts']['alert_activated'] = 'Your alert was activated! You will now start receiving emails for your alert.';
$lng['alerts']['alert_unsubscribed'] = 'Your alert was deleted!';
$lng['alerts']['started_on'] = 'Started On';
$lng['alerts']['no_terms_searched'] = 'There are no terms set for this search!';
$lng['alerts']['no_listings'] = 'No listings for this alert!';

$lng['alerts']['error']['email_required'] = 'Please enter an email address for your alert!';
$lng['alerts']['error']['invalid_email'] = 'Invalid alert email address!';
$lng['alerts']['error']['invalid_frequency'] = 'Invalid alert frequency!';
$lng['alerts']['error']['login_required'] = 'Please <a href="::LINK::">sign in</a> to be able to register an alert!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Please choose at least one search key except category!';
$lng['alerts']['error']['invalid_confirmation'] = 'Invalid alert confirmation!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Invalid unsubscribe request!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Loan Calculator';
$lng_loancalc['sale_price'] = 'Sale price';
$lng_loancalc['down_payment'] = 'Down payment';
$lng_loancalc['trade_in_value'] = 'Trade in value';
$lng_loancalc['loan_amount'] = 'Loan amount';
$lng_loancalc['sales_tax'] = 'Sales tax';
$lng_loancalc['interest_rate'] = 'Interest rate';
$lng_loancalc['loan_term'] = 'Loan term';
$lng_loancalc['months'] = 'months';
$lng_loancalc['years'] = 'years';
$lng_loancalc['or'] = 'or';
$lng_loancalc['monthly_payment'] = 'Monthly payment';
$lng_loancalc['calculate'] = 'Calculate';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comments';
$lng_comments['make_a_comment'] = 'Make a Comment';
$lng_comments['login_to_post'] = 'Please <a href="::LOGIN_LINK::">sign in</a> so you can post a comment.';

$lng_comments['name'] = 'Name';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Post Comment';

$lng_comments['error']['name_missing'] = 'Please enter your name!';
$lng_comments['error']['content_missing'] = 'Please enter comment!';
$lng_comments['error']['website_missing'] = 'Please enter website!';
$lng_comments['error']['email_missing'] = 'Please enter your email!';
$lng_comments['error']['listing_id_missing'] = 'Invalid comment entry!';

$lng_comments['error']['invalid_email'] = 'Invalid email address!';
$lng_comments['error']['invalid_website'] = 'Invalid website!';
$lng_comments['errors']['badwords'] = 'Your comment contains forbidden words! Please edit your message!';

$lng_comments['info']['comment_added'] = 'Your comment was added! Click <a id="newad">here</a> if you want to add another comment.';
$lng_comments['info']['comment_pending'] = 'Your comment is pending and waiting for administrator verification.';




// ----------------- end comments module --------------------


$lng['tb']['next'] = 'NEXT &raquo;';
$lng['tb']['prev'] = '&laquo; PREV';
$lng['tb']['close'] = 'CLOSE';
$lng['tb']['or_esc'] = 'or ESC Key';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Messages';
$lng['messages']['confirm_delete_all'] = 'Are you sure you want to delete selected messages?';
$lng['messages']['listing'] = 'Listing';
$lng['messages']['no_messages'] = 'No messages';
$lng['general']['reply'] = 'Reply to message';
$lng['messages']['message'] = 'Message';
$lng['messages']['from'] = 'From';
$lng['messages']['to'] = 'To';
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'View thread';
$lng['messages']['started_for_listing'] = 'Started for listing';
$lng['messages']['view_complete_message'] = 'View complete message here';
$lng['messages']['message_history'] = 'Message history';
$lng['messages']['yourself'] = 'You';
$lng['messages']['report_spam'] = 'Report as spam';
$lng['messages']['reported_as_spam'] = 'Reported as spam';
$lng['messages']['confirm_report_spam'] = 'Are you sure you want to report this message as spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Invalid listing id';
$lng['listings']['show_map'] = 'Show Map';
$lng['listings']['hide_map'] = 'Hide Map';
$lng['listings']['see_full_listing'] = 'See full listing';
$lng['listings']['list'] = 'List';
$lng['listings']['gallery'] = 'Gallery';
$lng['listings']['remove_fav_done'] = 'The listing was removed from favorites list!';
$lng['search']['high_no_results'] = 'The number of results for your search is very high. The listed results are limited to the most relevant of your results. Please refine your search further in order to decrease the number of results and get more relevant results!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'This email address is not permitted!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'You are not allowed to use this subscription anymore, the maximum number of usage is reached!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Choose location';
$lng['location']['choose'] = 'Choose';
$lng['location']['change'] = 'Change';
$lng['location']['all_locations'] = 'All locations';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Category';
$lng['location']['save_location'] = 'Save location';

$lng['credits']['credits'] = 'Credits';
$lng['credits']['credit'] = 'Credit';
$lng['credits']['pending_credits'] = 'Pending credits';
$lng['credits']['current_credits'] = 'Current credits';
$lng['credits']['one_credit_equals'] = 'One credit equals';
$lng['credits']['credits_amount'] = 'Credits amount';
$lng['credits']['buy_extra_credits'] = 'Buy extra credits';
$lng['credits']['credits_package'] = 'Credits package';
$lng['credits']['select_package'] = 'Select credits package';
$lng['credits']['choose_package'] = 'Choose package';
$lng['credits']['you_currently_have'] = 'You currently have ';
$lng['credits']['you_currently_have_no_credits'] = 'You currently have no credits ';
$lng['credits']['pay_using_credits'] = 'Pay using credits';
$lng['credits']['not_enough_credits'] = 'Not enough credits for this payment!';
$lng['credits']['scredits'] = 'credits';
$lng['credits']['scredit'] = 'credit';



$lng['order_history']['credits_purchase'] = 'Credits purchase';
$lng['order_history']['invalid_order'] = 'Invalid order!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Please wait while you\'re being redirected!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Please <a href="::LOGIN_LINK::">sign in</a> so you can view the contact information!';
$lng['listing']['no_contact_information'] = 'No contact information available.';


$lng['navbar']['register_as'] = 'Register as';
$lng['listings']['all_ads'] = 'All ads';
$lng['listings']['refine'] = 'Refine';
$lng['listings']['results'] = 'results';
$lng['listings']['photos'] = 'photos';
$lng['listings']['user_details'] = 'See user details';
$lng['listings']['back_to_details'] = 'Back to listing details';

$lng['listings']['post_free_ad'] = 'Post a Free Ad';

$lng['users']['username_available'] = 'The username is available!';
$lng['users']['username_not_available'] = 'Username not available!';

$lng['general']['not_found'] = 'The requested page was not found!';
$lng['general']['full_version'] = 'Full version';
$lng['general']['mobile_version'] = 'Mobile version';

$lng['failed'] = 'Failed';
$lng['remember_me'] = 'Remember me';

$lng['less_than_a_minute'] = 'less than a minute ago';
$lng['minute'] = 'minute';
$lng['minutes'] = 'minutes';
$lng['hour'] = 'hour';
$lng['hours'] = 'hours';
$lng['yesterday'] = 'Yesterday';
$lng['day'] = 'day';
$lng['days'] = 'days';
$lng['ago_postfix'] = ' ago';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------


// ------------------- version 8.01 ------------------

$lng['today'] = 'Today';
$lng['messages']['confirm_delete'] = 'Are you sure you want to delete this message?';
$lng['listings']['change_category'] = 'Change category';
$lng['listings']['change_plan'] = 'Select a different plan';
$lng['listings']['choose_active_subscription'] = 'Choose from your active subscriptions';


$lng['useraccount']['request_removal'] = 'Request account removal';
$lng['useraccount']['request_removal_now'] = 'Request removal now!';
$lng['useraccount']['removal_verification_sent'] = 'You will receive an email containing a verification link. Please click the link in order to confirm the removal request!';

$lng['contact']['message_waits_admin_aproval'] = 'Your message will be delivered once approved by administrator!';

$lng['general']['accept'] = 'Accept';
$lng['general']['decline'] = 'Decline';

$lng['general']['tax'] = 'Tax';
$lng['general']['total_with_tax'] = 'Total with tax';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'In category';

$lng['users']['user_info'] = 'User information';
$lng['users']['store_info'] = 'Store information';
$lng['users']['user_listings'] = 'All listings';

$lng['login']['errors']['invalid_email_pass'] = 'Invalid email or password!';
$lng['general']['or'] = 'or';
$lng['newad']['choose_a_new_plan'] = 'Choose a new plan';

$lng['listings']['no_extra_options_available'] = 'There are no extra options available!';

$lng['listings']['map'] = 'Map';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'result';

$lng['confirm_delete'] = 'Are you sure you want to delete the selected item?';
$lng['confirm_delete_all'] = 'Are you sure you want to delete the selected items?';

$lng['general']['show'] = 'Show';
$lng['general']['on_a_page'] = 'on a page';
$lng['general']['return'] = 'Return';

$lng['login']['register_for_free'] = 'Register for free!';
$lng['general']['sent'] = 'Sent';
$lng['general']['received'] = 'Received';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'You are not logged in!';
$lng['newad']['or_post_without_account'] = 'or continue posting without an account!';

$lng_comments['scomments'] = 'comments';
$lng_comments['scomment'] = 'comment';
$lng['general']['on'] = 'on';

$lng['affiliates']['last_payment'] = 'Last payment';
$lng['affiliates']['last_payment_date'] = 'Last payment date';
$lng['affiliates']['next_payment_date'] = 'Next payment date';
$lng['affiliates']['total_due'] = 'Total due';
$lng['affiliates']['total_payments'] = 'Total payments received';
$lng['affiliates']['revenue_history'] = 'Revenue history';
$lng['affiliates']['payments_history'] = 'Payments history';
$lng['affiliates']['pending_payment'] = 'Pending payment';
$lng['affiliates']['released'] = 'Released';
$lng['affiliates']['not_released'] = 'Not released';
$lng['affiliates']['paid'] = 'Paid';
$lng['affiliates']['not_paid'] = 'Not paid';

$lng['general']['no_items'] = 'No items';
$lng['useraccount']['amount_start'] = 'Amount from';
$lng['useraccount']['amount_end'] = 'Amount to';
$lng['not_allowed_to_post_ads'] = 'You are not allowed to post ads with this account!';

// ------------------- end version 8.01 ------------------



/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'The changes you make will remain pending until being reviewed by an administrator!';

$lng['useraccount']['auction'] = 'Auction';
$lng['useraccount']['add_auction'] = 'Add Auction';
$lng['useraccount']['remove_auction'] = 'Remove Auction';
$lng['useraccount']['auction_start_price'] = 'Start price';
$lng['useraccount']['starts_at'] = 'Starts at';
$lng['useraccount']['no_bids'] = 'No bids';
$lng['useraccount']['max_bid'] = 'Max bid';
$lng['useraccount']['enable'] = 'Enable';
$lng['useraccount']['disable'] = 'Disable';
$lng['useraccount']['error']['auction_start_price'] = 'Please enter auction starting price!';
$lng['useraccount']['info']['auction_added'] = 'The auction was successfully added!';
$lng['useraccount']['confirm_delete'] = 'Confirm delete action?';
$lng['useraccount']['place_bid'] = 'Place your bid!';
$lng['useraccount']['login_to_bid'] = 'Please login to place your bid!';
$lng['useraccount']['bid'] = 'Bid';
$lng['useraccount']['message_to_seller'] = 'Message to seller';
$lng['useraccount']['error']['enter_bid'] = 'Please enter your bid!';
$lng['useraccount']['error']['incorrect_bid'] = 'Invalid bid!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Your bid is smaller than starting price!';
$lng['useraccount']['bid_placed'] = 'Your bid was placed!';
$lng['useraccount']['placed_on'] = 'Placed on';
$lng['useraccount']['no_bids_for_auction'] = 'There are no bids for this auction!';

/* ------------------- end version 8.4 ----------------------- */


// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Click to view';
$lng['advanced_search']['clear_search'] = 'Clear search';
$lng['listings']['currency'] = 'Currency';
$lng['listings']['show_phone'] = 'Show phone';
$lng['listings']['make_public'] = 'Make public';

$lng['advanced_search']['only_ads_with_auction'] = 'Only Ads With Auctions';
$lng['security']['failed_login_attempts'] = 'Repeated failed login attempts';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Your account is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your account.';
$lng['users']['verification_code'] = 'Verification code';
$lng['users']['waiting_sms_activation'] = 'Waiting for SMS activation';
$lng['listings']['info']['sms_verification'] = 'Your listing is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your listing.';
$lng['listings']['activate_listing'] = 'Activate listing';
$lng['listings']['errors']['sms_invalid_activation'] = 'Invalid activation key!';
$lng['listings']['info']['listing_pending'] = 'Your listing is pending and waiting for administrator verification.';
$lng['listings']['info']['listing_activated'] = 'Your listing is activated!';
$lng['listings']['errors']['listing_already_active'] = 'Your listing is already active!';
$lng['listings']['errors']['invalid_phone'] = 'Invalid phone number!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Available for';
$lng['newad']['available_until_expires'] = 'Available until the listing expires';
$lng['newad']['view_info'] = 'View info';
$lng['users']['errors']['phone_not_permitted'] = 'This phone number is not permitted!';
$lng['invoice']['invoice'] = 'Invoice';
$lng['invoice']['invoice_no'] = 'Invoice no';
$lng['invoice']['bill_to'] = 'Bill to';
$lng['invoice']['qty'] = 'Qty';
$lng['invoice']['unit_price'] = 'Unit price';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Sale tax';
$lng['invoice']['new_listing'] = 'New listing';
$lng['invoice']['renew_listing'] = 'Listing renewal';
$lng['invoice']['featured_eo'] = 'Featured extra option for listing';
$lng['invoice']['highlited_eo'] = 'Highlited extra option for listing';
$lng['invoice']['priority_eo'] = 'Priority extra option for listing';
$lng['invoice']['video_eo'] = 'Video extra option for listing';
$lng['invoice']['new_credits_pkg'] = 'New credits plan purchase';
$lng['invoice']['store'] = 'Dealer page purchase';
$lng['invoice']['new_subscription'] = 'New subscription purchase';
$lng['invoice']['renew_subscription'] = 'Subscription renewal';
$lng['weeks'] = 'Weeks';
$lng['week'] = 'Week';
$lng['months'] = 'Months';
$lng['month'] = 'Month';
// --------------- end 8.10 --------------------


// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Show WhatsApp';
$lng['general']['to_top'] = 'Go to top';
$lng['quick_search']['location'] = 'Postcode or location';
$lng['listings']['see_all'] = 'See all ads &raquo;';
$lng['listings']['ads'] = 'ads';
$lng['listings']['user_since'] = 'User since';
$lng['listings']['contact_details'] = 'Contact details';
$lng['listings']['favourite'] = 'Favorite';
$lng['listings']['manage_ad'] = 'Manage your ad';
$lng['useraccount']['show_bids'] = 'Show bids';
$lng['listings']['report_abusive'] = 'Report abusive ad';
$lng['listings']['enable_auction'] = 'Enable auction';
$lng['invoice']['download'] = 'Download invoice';


$lng['register']['group'] = 'Account type';
$lng['register']['change_group'] = 'Change account type';
$lng['register']['select_group'] = 'Select group';

$lng['search']['private'] = 'Private owners';
$lng['search']['professional'] = 'Professionals';
$lng['search']['save_your_search2'] = 'Would you like to save your search?';
$lng['search']['save_search'] = 'Save search';
$lng['search']['refine_your_search'] = 'Refine your search';
$lng['search']['hide_refine'] = 'Hide refine';

$lng['listings']['view_all_featured'] = 'View all featured >>';
$lng['listings']['view_all_latest'] = 'View all recent >>';
$lng['listings']['view_all_auctions'] = 'View all auctions >>';
$lng['listings']['auctions'] = 'Auctions';
$lng['listings']['view_ads_from'] = 'View ads from';
$lng['location']['change_location'] = 'Change location';
// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Show email';
$lng['listings']['error']['photo_mandatory'] = 'Please upload at least one picture with your ad!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Call';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Phone';
$lng['contact']['error']['phone_or_email_missing'] = 'Please enter your email address or your phone number!';
$lng['general']['at'] = 'at';
$lng['general']['distance_from'] = 'distance from';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'The message contains forbidden language, please review it!';
$lng['listings']['downloading'] = 'Downloading pictures. Please wait...';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'added';
$lng['users']['repeat'] = 'Repeat';
$lng['users']['errors']['emails_dont_match'] = 'Email addresses don\'t match!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Username or Email';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Click to chat';
$lng['invoice']['price_includes_vat'] = 'The total price includes';
$lng['invoice']['vat'] = 'VAT';
$lng['general']['play'] = 'Play';
$lng['second'] = 'second';
$lng['seconds'] = 'seconds';
$lng['general']['you_must_wait'] = 'You must wait ';
$lng['general']['before_posting'] = ' before posting a new listing!';
$lng['listings']['select_category'] = '-- Select a category --';


$lng['login']['errors']['account_not_activated'] = 'Your account was not activated. Please use the activation URL you received in your email account.';
$lng['login']['errors']['banned_account'] = 'Your account was banned!';
$lng['login']['errors']['suspended_account'] = 'Your account was suspended until ';

$lng['general']['back_to_site'] = 'Back to site';

// --------------- end 9.6 --------------------

// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Make ad Urgent';
$lng['order_history']['url'] = 'Website Link';
$lng['listings']['pending_urgent'] = 'Pending Urgent';
$lng['listings']['pending_url'] = 'Pending Website Link';
$lng['listings']['error']['invalid_url'] = 'Invalid Website Link';
$lng['listings']['urgent'] = 'Urgent';
$lng['listings']['url'] = 'Website Link';
$lng['listings']['site_url'] = 'Enter your Website Link';
$lng['listings']['priorities_listings'] = 'Prioritized Listings';
$lng['listings']['urgent_listings'] = 'Urgent Listings';
$lng['listings']['video_listings'] = 'Video Listings';
$lng['listings']['url_listings'] = 'Website Link Listings';
$lng['listings']['view_example'] = 'View example';
// --------------- end 9.7 --------------------


// --------------- 9.8 --------------------
$lng['packages']['html_editor'] = 'HTML editor';
$lng['iyzico']['invalid_transaction'] = 'Failed payment transaction!';
$lng['users']['errors']['account_already_activated'] = 'The account has already been activated and is waiting for administrator verification!';
$lng['now'] = 'Now';
$lng['listings']['updated'] = 'Updated';
$lng['listings']['auto_repost'] = 'Auto Repost';
$lng['contact']['contact_via_email'] = 'Email';
// --------------- end 9.8 --------------------

// --------------- 9.9 --------------------
$lng['users']['info']['slug'] = 'You can edit the Dealer Page URL part which differentiate your Dealer Page from others.';
$lng['users']['slug'] = 'Dealer Page URL Slug';
$lng['users']['errors']['slug_already_used'] = 'This slug is already used, please choose a different one!';
$lng['users']['store_url'] = 'Dealer Page URL';
$lng['users']['slug_available'] = 'Slug is available!';
$lng['general']['settings'] = 'Settings';
$lng['payments']['invalid_transaction'] = 'Invalid transaction!';
$lng['listings']['requires_admin_verification'] = 'Requires admin verification';
$lng['listings']['waiting_for_admin_verification'] = 'Waiting for admin verification';
$lng['users']['info']['your_account_has_admin_verification_fields'] = 'Your account information contains data which need administrator verification!';

$lng['listings']['edit_image_title'] = 'Edit image title';
$lng['listings']['crop'] = 'Crop image';
$lng['listings']['rotate_left'] = 'Rotate image left';
$lng['listings']['rotate_right'] = 'Rotate image right';
$lng['listings']['login_to_bid'] = 'Please <a href="::LOGIN_LINK::">sign in</a> to bid';

$lng_comments['edit_comment'] = 'Edit Comment';
$lng['listings']['select_subcategory'] = '-- Select a subcategory --';
$lng['listings']['crop_image'] = 'Crop image';
$lng['messages']['mark_as_read'] = 'Mark as read';
$lng['messages']['mark_as_not_read'] = 'Mark as not read';


$lng['useraccount']['2fa'] = 'Two Factor Authentication';
$lng['useraccount']['enable_2fa'] = 'Enable Two Factor Authentication';
$lng['useraccount']['2fa_secret'] = 'Two Factor Authentication secret key';
$lng['useraccount']['info']['qr_code'] = 'Use this QR code in order to setup the app for Two Factor Authentication ( for example Google Authenticator mobile app )';
$lng['useraccount']['settings_saved'] = 'Your settings were saved!';
$lng['general']['regenerate'] = 'Regenerate';

$lng['login']['2step_verification'] = '2nd Step verification (One Time Password)';
$lng['login']['enter_otp'] = 'One Time Password:';
$lng['login']['enter_otp_sms'] = 'An OTP was just sent to you a moment ago.';
$lng['login']['your_otp_sms'] = "Your OTP is: ";
$lng['login']['error']['invalid_code'] = "Invalid code!";
$lng['login']['error']['2fa_unknown_error'] = 'There was an error in the login process, please try again!';
$lng['listings']['errors']['invalid_url'] = 'Invalid URL!';
$lng['newad']['contact_options'] = 'Contact options';
$lng['newad']['contact_via_email'] = 'Enable contact via Email';
$lng['listings']['disable_email_contact'] = 'Disable Email contact';
$lng['listings']['enable_email_contact'] = 'Enable Email contact';
$lng['listings']['email_contact_on'] = 'Email contact ON';
$lng['listings']['email_contact_off'] = 'Email contact OFF';
$lng['listings']['s_priority'] = 'priority';

// --------------- end 9.9 --------------------


//Extra
$lng['general']['postalcode'] = 'Zip';
$lng['general']['tax'] = 'VAT';
$lng['general']['taxbrut'] = 'Gross';
$lng['general']['taxnet'] = 'Net';

?>
