<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'דף ראשי';
$lng['navbar']['login'] = 'התחברות';
$lng['navbar']['logout'] = 'ניתוק';
$lng['navbar']['recent_ads'] = 'מודעות אחרונות';
$lng['navbar']['register'] = 'הרשמה';
$lng['navbar']['submit_ad'] = 'שליחת מודעה';
$lng['navbar']['editad'] = 'עריכת מודעה';
$lng['navbar']['my_account'] = 'החשבון שלי';
$lng['navbar']['administrator_panel'] = 'לוח בקרה';
$lng['navbar']['contact'] = 'צור קשר';
$lng['navbar']['password_recovery'] = 'שחזור סיסמה';
$lng['navbar']['renew_listing'] = 'חידוש מודעה';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'שליחה';
$lng['general']['search'] = 'חיפוש';
$lng['general']['contact'] = 'צור קשר';
$lng['general']['activeads'] = 'מודעות פעילות';
$lng['general']['activead'] = 'מודעה פעילה';
$lng['general']['subcats'] = 'תת קטגוריות';
$lng['general']['subcat'] = 'תת קטגוריה';
$lng['general']['view_ads'] = 'צפייה במודעות';
$lng['general']['back'] = 'חזרה «';
$lng['general']['goto'] = 'עבור אל';
$lng['general']['page'] = 'דף';
$lng['general']['of'] = 'מ-';
$lng['general']['other'] = 'אחר';
$lng['general']['NA'] = 'לא זמין';
$lng['general']['add'] = 'הוספה';
$lng['general']['delete_all'] = 'מחק פריטים שנבחרו';
$lng['general']['action'] = 'פעולה';
$lng['general']['edit'] = 'עריכה';
$lng['general']['delete'] = 'מחק';
$lng['general']['total'] = 'סך הכל';
$lng['general']['min'] = 'מינימום';
$lng['general']['max'] = 'מקסימום';
$lng['general']['free'] = 'חינם';
$lng['general']['not_authorized'] = 'אין לך הרשאה לצפייה בדף זה !';
$lng['general']['access_restricted'] = 'אין לך הרשאה לצפייה בדף זה!';
$lng['general']['featured_ads'] = 'מודעות ספיישל';
$lng['general']['latest_ads'] = 'מודעות אחרונות';
$lng['general']['quick_search'] = 'חיפוש מהיר';
$lng['general']['go'] = 'עבור';
$lng['general']['unlimited'] = 'לא מוגבל';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'קובץ באותו שם נמצא, לא ניתן להעלות או להחליפו !';
$lng['images']['errors']['file_uploaded_too_big'] = 'אין באפשרותך להעלות קובץ הגדול מ ::MAX_FILE_UPLOAD_SIZE:: ק"ב !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'התמונה גדולה מדי! נא להעלות קובץ רוחבו המירבי ::MAX_FILE_WIDTH:: פיקסלים ואורכו המירבי ::MAX_FILE_HEIGHT:: פיקסלים !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'העלאת התמונה נכשלה!';
$lng['images']['errors']['no_file'] = 'נא לבחור קובץ להעלאה!';
$lng['images']['errors']['no_folder'] = 'תיקיית  ההעלאה לא נמצאה !';
$lng['images']['errors']['folder_not_writeable'] = 'אין הרשאה לשימוש  !';
$lng['images']['errors']['file_type_not_accepted'] = 'קובץ זה אינו תמונה, או שהוא עדיין אינו נתמך !';
$lng['images']['errors']['error'] = 'אירעה שגיאה בהעלאת התמונה. השגיאה היא: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'קובץ התמונות אינו קיים !';
$lng['images']['errors']['thmb_folder_not_writeable'] = '  אין לך הרשאה להשתמש בתיקיית תמונות ממוזערות  !';
$lng['images']['errors']['no_jpg_support'] = 'אין תמיכה ל JPG !';
$lng['images']['errors']['no_png_support'] = 'אין תמיכה ל PNG !';
$lng['images']['errors']['no_gif_support'] = 'אין תמיכה ל GIF !';
$lng['images']['errors']['jpg_create_error'] = 'שגיאה ביצור התמונה JPG מהמקור !';
$lng['images']['errors']['png_create_error'] = 'שגיאה ביצור התמונה PNG מהמקור !';
$lng['images']['errors']['gif_create_error'] = 'שגיאה ביצור התמונה GIF מהמקור !';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'התחברות משתמש';
$lng['login']['logout'] = 'התנתקות';
$lng['login']['username'] = 'שם משתמש';
$lng['login']['password'] = 'סיסמא';
$lng['login']['forgot_pass'] = 'שכחתי סיסמא ؟';
$lng['login']['click_here'] = 'לחץ כאן';

$lng['login']['errors']['password_missing'] = 'נא להזין את הסיסמא !';
$lng['login']['errors']['username_missing'] = 'נא להזין שם משתמש !';
$lng['login']['errors']['username_invalid'] = 'שם משתמש אינו קיים !';
$lng['login']['errors']['invalid_username_pass'] = 'שם משתמש או סיסמא שגויים !';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'התנתקות';
$lng['logout']['loggedout'] = 'נותקת מחשבונך בהצלחה !';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'הרשמה';
$lng['users']['repeat_password'] = 'וודא סיסמא';
$lng['users']['image_verification_info'] = 'נא להזין את קוד האבטחה. <br /> מכיל את האותיות a עד h באותיות קטנות <br /> ומספרים מ  1 עד  9.';
$lng['users']['already_logged_in'] = 'התחברת בהצלחה !';
$lng['users']['select'] = 'בחירה';

$lng['users']['info']['activate_account'] = 'הודעה נשלחה לתיבת הדואר האלקטרוני שלך, נא לעין בהוראות על מנת לאשר את חשבונך.';
$lng['users']['info']['welcome_user'] = 'חשבונך נוצר בהצלחה. נא <a href="login.php">התחברות</a> לחשבונך.';
$lng['users']['info']['awaiting_admin_verification'] = 'חשבונך טרם הופעל. נא להמתין לאישור מנהל האתר, הודעה תשלח לאימייל שלך בעת אישור חשבונך .';
$lng['users']['info']['account_info_updated'] = 'פרטי החשבון נשמרו בהצלחה !';
$lng['users']['info']['password_changed'] = 'הסיסמא שונתה בהצלחה !';
$lng['users']['info']['account_activated'] = 'חשבונך הופעל בהצלחה. נא <a href="login.php">התחברות</a> לחשבונך.';

$lng['users']['errors']['username_missing'] = 'נא להזיו שם משתמש !';
$lng['users']['errors']['invalid_username'] = 'שם משתמש שגוי !';
$lng['users']['errors']['username_exists'] = 'שם המשתמש תפוס, אם אכן יש לך כבר חשבון קודם, נא להתחבר אליו !';
$lng['users']['errors']['email_missing'] = 'נא להזין דוא"ל !';
$lng['users']['errors']['invalid_email'] = 'דוא"ל שגוי !';
$lng['users']['errors']['passwords_dont_match'] = 'הסיסמאות אינן זהות  !';
$lng['users']['errors']['email_exists'] = 'דואר אלקטרוני זה כבר קיים במערכת!, אם אכן יש לך כבר חשבון קודם, נא להתחבר אליו.';
$lng['users']['errors']['password_missing'] = 'נא להזין סיסמא.';
$lng['users']['errors']['invalid_validation_string'] = 'קוד האבטחה אינו נכון !';
$lng['users']['errors']['invalid_account_or_activation'] = 'החשבון או קישור ההפעלה אינם נכונים, נא ליצור קשר עם מנהל האתר !';
$lng['users']['errors']['account_already_active'] = 'חשבונך כבר פעיל קודם !';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'מודעות';
$lng['listings']['category'] = 'קטגוריה';
$lng['listings']['package'] = 'חבילה';
$lng['listings']['price'] = 'מחיר';
$lng['listings']['ad_description'] = 'תאור מודעה';
$lng['listings']['title'] = 'כותרת';
$lng['listings']['description'] = 'תאור';
$lng['listings']['image'] = 'תמונה';
$lng['listings']['words_left'] = 'אותיות שנותרו';
$lng['listings']['enter_photos'] = 'בחר תמונה';
$lng['listings']['ad_information'] = 'פרטים על המודעה';
$lng['listings']['free'] = 'חינם';
$lng['listings']['details'] = 'פרטים';
$lng['listings']['stock_no'] = 'מס סחורה';
$lng['listings']['location'] = 'מיקום';
$lng['listings']['contact_info'] = 'פרטי יצירת קשר';
$lng['listings']['email_seller'] = 'פנייה למוכר';
$lng['listings']['no_recent_ads'] = 'אין מודעות חדשות';
$lng['listings']['no_ads'] = 'אין מודעות בקטגוריה זו';
$lng['listings']['added_on'] = 'תאריך פרסום המודעה';
$lng['listings']['send_mail'] = 'שליחת הודעה למשתמש';
$lng['listings']['details'] = 'פרטים';
$lng['listings']['user'] = 'משתמש';
$lng['listings']['price'] = 'מחיר';
$lng['listings']['confirm_delete'] = 'לאשר מחיקת מודעות? !';
$lng['listings']['confirm_delete_all'] = 'לאשר מחיקת מודעות נבחרות? !';
$lng['listings']['all'] = 'כל המודעות';
$lng['listings']['active_listings'] = 'מודעות פעילות';
$lng['listings']['pending_listings'] = 'מודעות ממתינות לאישור';
$lng['listings']['featured_listings'] = 'מודעות ספיישל';
$lng['listings']['expired_listings'] = 'מודעות פגה תקופתם';
$lng['listings']['active'] = 'פעילה';
$lng['listings']['inactive'] = 'לא פעילה';
$lng['listings']['pending'] = 'ממתינות לאישור';
$lng['listings']['featured'] = 'פרסום המודעה כ- ספיישל';
$lng['listings']['expired'] = 'פגה תקופתה';
$lng['listings']['order_by_date'] = 'סידור לפי תאריך';
$lng['listings']['order_by_category'] = 'סידור לפי קטגוריה';
$lng['listings']['order_by_make'] = 'סידור לפי סוג';
$lng['listings']['order_by_price'] = 'סידור לפי מחיר';
$lng['listings']['order_by_views'] = 'סידור לפי מספר צפיות';
$lng['listings']['order_asc'] = 'עולה';
$lng['listings']['order_desc'] = 'יורד';
$lng['listings']['id'] = 'מספר סידורי';
$lng['listings']['views'] = 'צפיות';
$lng['listings']['date'] = 'תאריך';
$lng['listings']['no_listings'] = 'אין מודעות';
$lng['listings']['NA'] = 'לא נמצא';
$lng['listings']['no_such_id'] = 'מודעה זו אינה קיימת !';
$lng['listings']['mark_sold'] = 'סימון המוצר כ- נמכר';
$lng['listings']['mark_unsold'] = 'הסרת סימון המוצר כ- נמכר';
$lng['listings']['sold'] = ' נמכר';
$lng['listings']['feature'] = 'תכונות';
$lng['listings']['expired_on'] = 'פג תוקפו ב';
$lng['listings']['renew'] = 'חידוש';
$lng['listings']['print_page'] = 'הדפסת דף';
$lng['listings']['recommend_this'] = 'שלח לחבר';
$lng['listings']['more_listings'] = 'עוד מודעות ממשתמש זה';
$lng['listings']['all_listings_for'] = 'כל המודעות ל';
$lng['listings']['free_category'] = 'קטגורייה חינמית';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'האם אתה בטוח במחיקת התמונה ؟';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='עברת את הרף המקסימלי למספר המילים, רף מקסימלי הוא: ::MAX:: מילה.'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='המודעה מכילה מילים אסורות, נא לערוך מחדש את תוכן המודעה.';
$lng['listings']['errors']['title_missing']='נא להזין כותרת למודעה !';
$lng['listings']['errors']['category_missing']='נא לבחור קטגוריה !';
$lng['listings']['errors']['invalid_category']='קטגוריה אינה מוכרת !';
$lng['listings']['errors']['package_missing']='נא לבחור חבילה !';
$lng['listings']['errors']['invalid_package']='חבילה אינה מוכרת  !';
$lng['listings']['errors']['content_missing']='נא להזין תוכן למודעה !';
$lng['listings']['errors']['invalid_price']='מחיר שגוי !';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'מחיר מינימלי';
$lng['quick_search']['price_high'] = 'מחיר מירבי';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'הוספת מודעה חדשה';
$lng['useraccount']['browse_your_listings'] = 'ניהול המודעות';
$lng['useraccount']['modify_account_info'] = 'פרטי החשבון';
$lng['useraccount']['order_history'] = 'היסטוריית הזמנות';
$lng['useraccount']['total_listings'] = 'סך כל המודעות';
$lng['useraccount']['total_views'] = 'סך כל הצפיות';
$lng['useraccount']['active_listings'] = 'מודעות פעילות';
$lng['useraccount']['pending_listings'] = 'מודעות ממתינות לאישור';
$lng['useraccount']['last_login'] = 'כניסה אחרונה היתה ב';
$lng['useraccount']['last_login_ip'] = 'IP הכניסה האחרונה מ';
$lng['useraccount']['expired_listings'] = 'מודעות שפג תוקפם';
$lng['useraccount']['statistics'] = 'סטטיסטיקה';
$lng['useraccount']['welcome'] = 'שלום';
$lng['useraccount']['contact_name'] = 'שם';
$lng['useraccount']['email'] = 'דואר אלקטרוני';
$lng['useraccount']['password'] = 'סיסמא';
$lng['useraccount']['repeat_password'] = 'אימות סיסמא';
$lng['useraccount']['change_password'] = 'שינוי סיסמא';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'עד';
$lng['advanced_search']['price_min'] = 'מחיר מינימלי';
$lng['advanced_search']['price_max'] = 'מחיר מירבי';
$lng['advanced_search']['word'] = 'מילים';
$lng['advanced_search']['sort_by'] = 'סידור לפי';
$lng['advanced_search']['sort_by_price'] = 'סידור לפי מחיר';
$lng['advanced_search']['sort_by_date'] = 'סידור לפי תאריך';
$lng['advanced_search']['sort_by_make'] = 'סידור לפי סוג';
$lng['advanced_search']['sort_descendant'] = 'סדר יורד';
$lng['advanced_search']['sort_ascendant'] = 'סדר עולה';
$lng['advanced_search']['only_ads_with_pic'] = 'מודעות בתמונות בלבד';
$lng['advanced_search']['no_results'] = 'לא נמצאו תוצאות תואמות לבקשתך !';
$lng['advanced_search']['multiple_ads_matching'] = 'אין ::NO_ADS:: תואמות לחיפוש שלך !'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'רק מודעה אחת תואמת את חיפושך !';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'שם';
$lng['contact']['subject'] = 'כותרת';
$lng['contact']['email'] = 'דוא"ל';
$lng['contact']['webpage'] = 'אתר אישי';
$lng['contact']['comments'] = 'תגובות';
$lng['contact']['message_sent'] = 'ההודעה נשלחה בהצלחה !';
$lng['contact']['sending_message_failed'] = 'נכשלה שליחת ההודעה !';
$lng['contact']['mailto'] = 'הודעה אל';

$lng['contact']['error']['name_missing'] = 'נא להזין את השם !';
$lng['contact']['error']['subject_missing'] = 'נא להזין כותרת !';
$lng['contact']['error']['email_missing'] = 'נא להזין דוא"ל !';
$lng['contact']['error']['invalid_email'] = 'דוא"ל לא תקין !';
$lng['contact']['error']['comments_missing'] = 'נא לכתוב את התגובה !';
$lng['contact']['error']['invalid_validation_number'] = 'נא להזין את הסמלים והמספרים של קוד האבטחה כראוי !';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'דוא"ל';
$lng['password_recovery']['new_password'] = 'סיסמא חדשה';
$lng['password_recovery']['repeat_new_password'] = 'אימות סיסמה';
$lng['password_recovery']['invalid_key'] = 'הקוד שהיזנת שגוי';

$lng['password_recovery']['email_missing'] = 'נא להזין דוא"ל !';
$lng['password_recovery']['invalid_email'] = 'דוא"ל לא תקין !';
$lng['password_recovery']['email_inexistent'] = 'אין משתמש בדואר אלקטרוני שכזה !';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'מחיר';
$lng['packages']['words'] = 'מילים';
$lng['packages']['days'] = 'יום';
$lng['packages']['pictures'] = 'תמונות';
$lng['packages']['picture'] = 'תמונה';
$lng['packages']['available'] = 'זמין';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'מעבד';
$lng['order_history']['amount'] = 'מחיר';
$lng['order_history']['completed'] = 'תם בהצלחה';
$lng['order_history']['not_completed'] = 'פעולה לא הושלמה';
$lng['order_history']['ad_no'] = 'מספר מודעה';
$lng['order_history']['date'] = 'תאריך';
$lng['order_history']['no_actions'] = 'אין בקשות';
$lng['order_history']['order_by_date'] = 'סידור לפי תאריך';
$lng['order_history']['order_by_amount'] = 'סידור לפי מחיר';
$lng['order_history']['order_by_processor'] = 'סידור לפי מעבד';
$lng['order_history']['description'] = 'פרטים';
$lng['order_history']['newad'] = 'מודעה חדשה'; 
$lng['order_history']['renew'] = 'חידוש'; 
$lng['order_history']['featured'] = 'מודעת ספיישל'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'סידור לפי תאריך';
$lng['order']['price'] = 'סידור לפי מחיר';
$lng['order']['title'] = 'סידור לפי כותרת';
$lng['order']['desc'] = 'יורד';
$lng['order']['asc'] = 'עולה';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'שלח מודעה לחבר';
$lng['recommend']['your_name'] = 'השם שלך';
$lng['recommend']['your_email'] = 'הדואר האלקטרוני שלך';
$lng['recommend']['friend_name'] = 'שם החבר';
$lng['recommend']['friend_email'] = 'דוא"ל של החבר';
$lng['recommend']['message'] = 'תוכן ההודעה';


$lng['recommend']['error']['your_name_missing'] = 'נא להזין את שמך !';
$lng['recommend']['error']['your_email_missing'] = 'נא להזין את הדואר האלקטרוני שלך !';
$lng['recommend']['error']['friend_name_missing'] = 'נא להזין את שם החבר שלך !';
$lng['recommend']['error']['friend_email_missing'] = 'נא להזין דוא"ל לחבר שלך !';
$lng['recommend']['error']['invalid_email'] = 'דוא"ל אינו תקין !';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'מודעות';
$lng['stats']['general'] = 'ראשי';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'הרשמה';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'סטטוס';
$lng['general']['favourites'] = 'מועדפים';
$lng['general']['as'] = 'כמו';
$lng['general']['view'] = 'עיון';
$lng['general']['none'] = 'לא נמצא';
$lng['general']['yes'] = 'כן';
$lng['general']['no'] = 'לא';
$lng['general']['next'] = 'הבא »';
$lng['general']['finish'] = 'פג תוקפו';
$lng['general']['download'] = 'הורדה';
$lng['general']['remove'] = 'מחיקה';
$lng['general']['previous_page'] = '« הקודם';
$lng['general']['next_page'] = 'הבא »';
$lng['general']['items'] = 'כלים';
$lng['general']['active'] = 'מופעל';
$lng['general']['inactive'] = 'לא מופעל';
$lng['general']['expires'] = 'יסתיים ב';
$lng['general']['available'] = 'זמין';
$lng['general']['cancel'] = 'ביטול';
$lng['general']['never'] = 'לעולם';
$lng['general']['asc'] = 'יורד';
$lng['general']['desc'] = 'עולה';
$lng['general']['pending'] = 'ממתינות';
$lng['general']['upload'] = 'העלאה';
$lng['general']['processing'] = 'אנו מטפלים בבקשתך, נא להמתין ....';
$lng['general']['help'] = 'עזרה';
$lng['general']['hide'] = 'הסתרה';
$lng['general']['link'] = 'קישור';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'מהדורה זו נסיונית. יתכן שלא תוכל לשנה כמה הגדרות.';
$lng['general']['check_all'] = 'בחר הכל';
$lng['general']['uncheck_all'] = 'אי בחירת הכל';
$lng['general']['all'] = 'הכל';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'החנות הפרטית';
$lng['users']['store_banner'] = 'לוגו של דף החנות הפרטית';
$lng['users']['waiting_mail_activation'] = 'המתן לאישור בדוא"ל ';
$lng['users']['waiting_admin_activation'] = 'המתן לאישור מנהל האתר';
$lng['users']['no_such_id'] = 'משתמש זה לא קיים.';

$lng['users']['info']['store_banner'] = 'התמונה שתישתש כלוגו לדף החנות הפרטית בראש הדף.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'דווח על מודעה אסורה';
$lng['listings']['report_reason'] = 'סיבת הדיווח';
$lng['listings']['meta_info'] = 'פרטי  מילות מפתח';
$lng['listings']['meta_keywords'] = 'מילות מפתח';
$lng['listings']['meta_description'] = 'תיאור מילות מפתח';
$lng['listings']['not_approved'] = 'לא מאושר';
$lng['listings']['approve'] = 'מאושר';
$lng['listings']['choose_payment_method'] = 'בחירת דרך תשלום';

$lng['listings']['choose_category'] = 'בחר קטגוריה';
$lng['listings']['choose_plan'] = 'בחר חבילה';
$lng['listings']['enter_ad_details'] = 'נא להזין פרטים למודעה';
$lng['listings']['ad_details'] = 'פרטי המודעה';
$lng['listings']['add_photos'] = 'הוספת תמונה';
$lng['listings']['ad_photos'] = 'תמונות המודעה';
$lng['listings']['edit_photos'] = 'עריכת תמונות';
$lng['listings']['extra_options'] = 'הגדרות נוספות';
$lng['listings']['review'] = 'תצוגה מקדימה של מודעה';
$lng['listings']['finish'] = 'סיום';
$lng['listings']['next_step'] = 'הצעד הבא »';
$lng['listings']['included'] = 'זמין';
$lng['listings']['finalize'] = 'צעד אחרון';
$lng['listings']['zip'] = 'כתובת ZIP';
$lng['listings']['add_to_favourites'] = 'הוסף למועדפים';
$lng['listings']['confirm_add_to_fav'] = 'התראה! עדיין לא התחברת למערכת ! רשימת המועדפים תהיה זמנית בלבד !';
$lng['listings']['add_to_fav_done'] = 'מודעה זו הוספה בהצלחה למועדפים !';
$lng['listings']['confirm_delete_favourite'] = 'האם אתה בטוח בכך שברצונך להסיר את המודעות מהמועדפים؟';
$lng['listings']['no_favourites'] = 'אין מודעות ברשימת המועדפים שלך !';
$lng['listings']['extra_options'] = 'אפשרויות נוספות';
$lng['listings']['highlited'] = 'בולטת';
$lng['listings']['priority'] = 'עדיפות';
$lng['listings']['video'] = 'מודעות וידאו';
$lng['listings']['short_video'] = 'וידאו';
$lng['listings']['pending_video'] = 'וידאו ממתין';
$lng['listings']['video_code'] = 'קוד וידאו';
$lng['listings']['total'] = 'סך הכל';
$lng['listings']['approve_ad'] = 'אישור מודעה';
$lng['listings']['finalize_later'] = 'להשלים מאוחר יותר';
$lng['listings']['click_to_upload'] = 'לחץ להעלאה';
$lng['listings']['files_uploaded'] = ' תמונות שהועלאו מסך כל התמונות ';
$lng['listings']['allowed'] = ' תמונות מותרות !';
$lng['listings']['limit_reached'] = ' הגעת למספר המרבי של התמונות!';
$lng['listings']['edit_options'] = 'עריכת הגדרות המודעה';
$lng['listings']['view_store'] = 'הצגת דף המוכר';
$lng['listings']['edit_ad_options'] = 'עריכת הגדרות המודעה';
$lng['listings']['no_extra_options_selected'] = 'לא נבחרו הגדרות נוספות!';
$lng['listings']['highlited_listings'] = 'מודעות בולטות';
$lng['listings']['for_listing'] = 'המספר למודעה ';
$lng['listings']['expires_on'] = 'מסתיים';
$lng['listings']['expired_on'] = 'הסתיים';
$lng['listings']['pending_ad'] = 'מודעות ממתינות';
$lng['listings']['pending_highlited'] = 'מודעות בולטות ממתינות';
$lng['listings']['pending_featured'] = 'מודעות ספיישל ממתינות';
$lng['listings']['pending_priority'] = 'מודעות חשובות ממתינות';
$lng['listings']['enter_coupon'] = 'שובר הנחה';
$lng['listings']['discount'] = 'הנחה';
$lng['listings']['select_plan'] = 'בחר חבילה';
$lng['listings']['pending_subscription'] = 'המנוי ממתין';
$lng['listings']['remove_favourite'] = 'מחיקת מועדפים';

$lng['listings']['order_up'] = 'סידור למעלה';
$lng['listings']['order_down'] = 'סידור למטה';

$lng['listings']['errors']['invalid_youtube_video'] = 'וידאו Youtube אינו ידוע!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'בחר חבילה';
$lng['useraccount']['no_package'] = 'אין חבילות למודעות';
$lng['useraccount']['packages'] = 'חבילות';
$lng['useraccount']['date_start'] = 'תאריך התחלה';
$lng['useraccount']['date_end'] = 'תאריך סיום';
$lng['useraccount']['remaining_ads'] = 'מודעות שנותרו';
$lng['useraccount']['account_type'] = 'סוג חשבון';
$lng['useraccount']['unfinished_listings'] = 'מודעות לא גמורות';
$lng['useraccount']['confirm_delete_subscription'] = 'האם אתה בטוח מהסרת המנוי ؟';
$lng['useraccount']['buy_store'] = 'קניית דף הסוחר';
$lng['useraccount']['bulk_uploads'] = 'העלאה כוללות';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'מנוי';
$lng['packages']['ads'] = 'פרסומות';
$lng['packages']['name'] = 'שם';
$lng['packages']['details'] = 'פרטים';
$lng['packages']['no_ads'] = 'מספר פרסומת';
$lng['packages']['subscription_time'] = 'זמן המנוי';
$lng['packages']['no_pictures'] = 'תמונות מותרות';
$lng['packages']['no_words'] = 'מספר מילים';
$lng['packages']['ads_availability'] = 'זמינות המודעות';
$lng['packages']['featured'] = 'ספיישל';
$lng['packages']['highlited'] = 'בולט';
$lng['packages']['priority'] = 'חשוב';
$lng['packages']['video'] = 'וידאו';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'מנוי';
$lng['order_history']['post_listing'] = 'פרסום מודעה';
$lng['order_history']['renew_listing'] = 'חידוש מודעה';
$lng['order_history']['feature_listing'] = 'מודעות ספיישל';
$lng['order_history']['subscribe_to_package'] = 'השתתפות במנוי';
$lng['order_history']['complete_payment'] = 'תשלומים שנקלטו';
$lng['order_history']['complete_payment_for'] = 'תשלומים שנקלטו ל';
$lng['order_history']['details'] = 'פרטים';
$lng['order_history']['subscription_no'] = 'מספר מנוי';
$lng['order_history']['highlited'] = 'בולט';
$lng['order_history']['priority'] = 'חשוב';
$lng['order_history']['video'] = 'וידאו';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'נא לבחור בחבילה !';
$lng['buy_package']['error']['choose_processor'] = 'נא לבחור בדרך תשלום !';
$lng['buy_package']['error']['invalid_processor'] = 'תהליך התשלום  שגוי !';
$lng['buy_package']['error']['invalid_package'] = 'החבילה שגויה !';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'תהליך התשלום ב Paypal אינה נכונה !';
$lng['2co']['invalid_transaction'] = 'תהליך התשלום ב 2Checkout אינה נכונה !';
$lng['moneybookers']['invalid_transaction'] = 'תהליך התשלום ב Moneybookers אינה נכונה !';
$lng['authorize']['invalid_transaction'] = 'תהליך התשלום ב Authorize.net אינה נכונהة !';
$lng['manual']['invalid_transaction'] = 'תהליך התשלום אינו נכון !';

$lng['paypal']['transaction_canceled'] = 'העסק בוטלה ב Paypal !';
$lng['2co']['transaction_canceled'] = 'העסק בוטלה ב 2Checkout !';
$lng['moneybookers']['transaction_canceled'] = 'העסק בוטלה ב Moneybookers !';
$lng['authorize']['transaction_canceled'] = 'העסק בוטלה ב Authorize.net !';
$lng['manual']['transaction_canceled'] = 'העסק בוטלה ב !';
$lng['epay']['transaction_canceled'] = 'העסק בוטלה ב ePay !';

$lng['payments']['transaction_already_processed'] = 'התשלום כבר נקלט קודם !';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'אישור מנוי';
$lng['subscribe']['payment_method'] = 'דרך תשלום';
$lng['subscribe']['renew_subscription'] = 'חידוש מנוי';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'העתקת דוא"ל : ';
$lng['bcc_mails']['from'] = 'מ: ';
$lng['bcc_mails']['to'] = 'אל: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'מצב העלאה כוללת: ';
$lng['ie']['successfully'] = 'מודעות נוספו בהצלחה';
$lng['ie']['failed'] = 'נכשל';
$lng['ie']['uploaded_listings'] = 'מודעות שהועלאו : ';
$lng['ie']['errors']['upload_import_file'] = 'נא להעלות את הקובץ על מנת לייבא ממנו !';
$lng['ie']['errors']['incorrect_file_type'] = 'סוג קובץ שגוי, או שהוא עדיין לא נתמך: ';
$lng['ie']['errors']['could_not_open_file'] = 'נכשל בפתיחת הקובץ !';
$lng['ie']['errors']['choose_categ'] = 'נא לבחור קטגוריה !';
$lng['ie']['errors']['could_not_save_file'] = 'נכשל בשמירת הקובץ !';
$lng['ie']['errors']['required_field_missing'] = 'אחד או יותר משדות החובה חסרים : ';
$lng['ie']['errors']['incorrect_data_count'] = 'סוג המידע שהוקלד אינו נכון : ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'בחר מוכר';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'אזור חיפוש';
$lng['areasearch']['all_locations'] = 'כל המקומות';
$lng['areasearch']['exact_location'] = 'מקום ספציפי';
$lng['areasearch']['around'] = 'מסביב';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'כן';
$lng['general']['No'] = 'לא';
$lng['general']['or'] = 'או';
$lng['general']['in'] = 'ב';
$lng['general']['by'] = 'על ידי';
$lng['general']['close_window'] = 'סגור חלון';
$lng['general']['more_options'] = 'אפשרויות נוספות »';
$lng['general']['less_options'] = 'פחות אפשרויות «';
$lng['general']['send'] = 'שליחה';
$lng['general']['save'] = 'שמירה';
$lng['general']['for'] = 'ל';
$lng['general']['to'] = 'אל';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'סמן כמושכר';
$lng['listings']['mark_unrented'] = 'אל תשמן כמושכר';
$lng['listings']['rented'] = 'השכרה הושלמה';
$lng['listings']['your_info'] = 'הפרטים שלך';
$lng['listings']['email'] = 'הדואר האלקטרוני שלך';
$lng['listings']['name'] = 'השם שלך';
$lng['listings']['listing_deleted'] = 'מודעתך נמחקה !';
$lng['listings']['post_without_login'] = 'פרסום מודעה בלי הרשמה';
$lng['listings']['waiting_activation'] = 'ממתין לאישור';
$lng['listings']['waiting_admin_approval'] = 'ממתין לאישור מנהל האתר';
$lng['listings']['dont_need_account'] = 'לא מעוניין בפתיחת חשבון ؟ אז תפרסם מודעה בלי הרשמה !';
$lng['listings']['post_your_ad'] = 'פרסם מודעה!';
$lng['listings']['posted'] = 'מודעתך פורסמה';
$lng['listings']['select_subscription'] = 'בחר סוג מנוי';
$lng['listings']['choose_subscription'] = 'בחר סוג מנוי';
$lng['listings']['inactive_listings'] = 'מודעות לא פעילות';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'חיפוש ממוקד';
$lng['search']['refine_by_keyword'] = 'חיפוש ממוקד לפי מילות מפתח';
$lng['search']['showing'] = 'הצגה';
$lng['search']['more'] = 'יותר...';
$lng['search']['less'] = 'פחות...';
$lng['search']['search_for'] = 'חיפוש על';
$lng['search']['save_your_search'] = 'שמור הגדרות החיפוש';
$lng['search']['save'] = 'שמירה';
$lng['search']['search_saved'] = 'הגדרות החיפוש נשמרו!';
$lng['search']['must_login_to_save_search'] = 'חייב להתחבר לפני שמירת הגדרות החיפוש!';
$lng['search']['view_search'] = 'הצגת חיפוש';
$lng['search']['all_categories'] = 'כל הקטגוריות';
$lng['search']['more_than'] = 'יותר מ';
$lng['search']['less_than'] = 'פחות מ';

$lng['search']['error']['cannot_save_empty_search'] = 'הגדרות החיפוש לא נושאות שום פרטים. לכן אי אפשר לשמור הגדרות !';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'הגדרות חיפוש שמורות';
$lng['useraccount']['view_saved_searches'] = 'הצגת הגדרות חיפוש שמורות';
$lng['useraccount']['no_saved_searches'] = 'אין הגדרות חיפוש שמורות';
$lng['useraccount']['recurring'] = 'חוזר';
$lng['useraccount']['date_renew'] = 'תאריך חידוש';
$lng['useraccount']['logged_in_as'] = 'התחברת תחת שם ';
$lng['useraccount']['subscriptions'] = 'מנויים';

$lng['users']['activate_account'] = 'אישור חשבון';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'הוספת מנוי';
$lng['subscriptions']['package'] = 'חבילה';
$lng['subscriptions']['remaining_ads'] = 'מודעות שנותרי';
$lng['subscriptions']['recurring'] = 'חוזר';
$lng['subscriptions']['date_start'] = 'תאריך התחלה';
$lng['subscriptions']['date_end'] = 'תאריך סיום';
$lng['subscriptions']['date_renew'] = 'תאריך חידוש';
$lng['subscriptions']['confirm_delete'] = 'האם אתה בטוח במחיקת המנויים ؟';
$lng['subscriptions']['no_subscriptions'] = 'אין מנוי';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'אין ברשותך חשבון ؟ הירשם חינם !';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'הפעל מנגון גבייה חוזרת למנוי.';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'שדות חובה חסרים : ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'רכישת דף סוחר';


$lng['images']['errors']['max_photos'] = 'מספר מקסימלי של תמונות שהועלאו !';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'התראה בדוא"ל';
$lng['alerts']['email_alerts'] = 'התראות בדוא"ל';
$lng['alerts']['no_alerts'] = 'אין התראות בדוא"ל';
$lng['alerts']['view_email_alerts'] = 'צפייה  בהתראות בדוא"ל';
$lng['alerts']['send_email_alerts'] = 'שליחת התראות בדוא"ל';
$lng['alerts']['immediately'] = 'מיידי';
$lng['alerts']['daily'] = 'יומי';
$lng['alerts']['weekly'] = 'שבועי';
$lng['alerts']['your_email'] = 'הדואר האלקטרוני שלך';
$lng['alerts']['create_alert'] = 'יצירת התראה';
$lng['alerts']['email_alert_info'] = 'קבלת התראה בדואר אלקטרוני כאשר מוצגת פרסומת שתואמת את הגדרות החיפוש שלי.';
$lng['alerts']['alert_added'] = 'התראה נוצרה.';
$lng['alerts']['alert_added_activate'] = '  אתה אמור לקבל דוא"ל עכשיו <b>::EMAIL::</b>. נא להקליק על קישור זה  על מנת לאשר קבלת התראות לתיבת המייל שלך !'; 
$lng['alerts']['search_in'] = 'חיפוש ב';
$lng['alerts']['keyword'] = 'מילות מפתח';
$lng['alerts']['frequency'] = 'תדר התראות';
$lng['alerts']['alert_activated'] = 'שרות קבלת התראות הופעל בהצלחה. מהיום אתה אמור לקבל התראות למייל שלך.';
$lng['alerts']['alert_unsubscribed'] = 'ההתראה נמחקה!';
$lng['alerts']['started_on'] = 'התחיל ב';
$lng['alerts']['no_terms_searched'] = 'אין מונחים שהוגדרו לחיפוש זה!';
$lng['alerts']['no_listings'] = 'אין מודעות שתואמות התראה זו!';

$lng['alerts']['error']['email_required'] = 'נא להזין דוא"ל על מנת לקבל התראות!';
$lng['alerts']['error']['invalid_email'] = 'דוא"ל להתראה שגוי!';
$lng['alerts']['error']['invalid_frequency'] = 'תדר התראה שגוי!';
$lng['alerts']['error']['login_required'] = 'נא <a href="::LINK::">להתחבר</a> על מנת ליצור התראה חדשה !';
$lng['alerts']['error']['ask_adv_key'] = 'נא להזין מיל מפתח אחת לפחות חוץ מהקטגוריות!';
$lng['alerts']['error']['invalid_confirmation'] = 'אימות התראה שגוי!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'בקשה ביטול  המנוי אינה נכונה!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'חישוב הלוואה';
$lng_loancalc['sale_price'] = 'מחיר מכירה';
$lng_loancalc['down_payment'] = 'מקדמה';
$lng_loancalc['trade_in_value'] = 'סחור בערך שלו';
$lng_loancalc['loan_amount'] = 'סכום הלוואה';
$lng_loancalc['sales_tax'] = 'מס קנייה';
$lng_loancalc['interest_rate'] = 'ריבית';
$lng_loancalc['loan_term'] = 'תקופת הלוואה';
$lng_loancalc['months'] = 'חודשים';
$lng_loancalc['years'] = 'שנים';
$lng_loancalc['or'] = 'או';
$lng_loancalc['monthly_payment'] = 'תשלומים חודשיים';
$lng_loancalc['calculate'] = 'חשב';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'תגובות';
$lng_comments['make_a_comment'] = 'הגב';
$lng_comments['login_to_post'] = 'נא <a href="::LOGIN_LINK::">להתחבר</a> על מנת להגב.';

$lng_comments['name'] = 'שם';
$lng_comments['email'] = 'דוא"ל';
$lng_comments['website'] = 'אתר אינטרנט';
$lng_comments['submit_comment'] = 'שליחת תגובה';

$lng_comments['error']['name_missing'] = 'נא להזין את השם שלך!';
$lng_comments['error']['content_missing'] = 'נא להזין תוכן!';
$lng_comments['error']['website_missing'] = 'נא להזין שם אתר אינטרנט!';
$lng_comments['error']['email_missing'] = 'נא להזין דוא"ל!';
$lng_comments['error']['listing_id_missing'] = 'תגובה אינה נכונה!';

$lng_comments['error']['invalid_email'] = 'דוא"ל שגוי!';
$lng_comments['error']['invalid_website'] = 'אתר אינטרנט שגוי!';
$lng_comments['errors']['badwords'] = 'התגובה שלך מכילה מילים אסורות. נא לערוך אותן מייד!';

$lng_comments['info']['comment_added'] = 'תגובתך פורסמה בהצלחה. הקלק <a id="newad">פה</a> לשליחת תגובה נוספת.';
$lng_comments['info']['comment_pending'] = 'תגובתך נקלטה. ממתינה לאישור מנהל התאר.';

// ----------------- end comments module --------------------

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
$lng['listings']['gallery'] = 'Photos';
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

$lng['alerts']['category'] = ' קטגוריה';
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
$lng['location']['change_location'] = 'Change_location';

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


?>
