<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'ΑΡΧΙΚΗ';
$lng['navbar']['login'] = 'ΕΙΣΟΔΟΣ';
$lng['navbar']['logout'] = 'ΕΞΟΔΟΣ';
$lng['navbar']['recent_ads'] = 'ΠΡΟΣΦΑΤΕΣ ΑΓΓΕΛΙΕΣ';
$lng['navbar']['register'] = 'ΕΓΓΡΑΦΗ';
$lng['navbar']['submit_ad'] = 'ΑΠΟΣΤΟΛΗ ΣΕ ΕΝΑ ΦΙΛΟ';
$lng['navbar']['editad'] = 'MΕΤΑΤΡΟΠΗ ΑΓΓΕΛΙΑΣ';
$lng['navbar']['my_account'] = 'Ο ΛΟΓΑΡΙΑΣΜΟΣ ΜΟΥ';
$lng['navbar']['administrator_panel'] = 'ΠΑΝΕΛ ΔΙΑΧΕΙΡΙΣΤΗ';
$lng['navbar']['contact'] = 'ΕΠΙΚΟΙΝΩΝΙΑ';
$lng['navbar']['password_recovery'] = 'ΑΝΑΚΤΗΣΗ ΤΟΥ Password';
$lng['navbar']['renew_listing'] = 'ΑΝΑΝΕΩΣΗ ΑΓΓΕΛΙΑΣ';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Αποστολή';
$lng['general']['search'] = 'Αναζήτηση';
$lng['general']['contact'] = 'Επικοινωνία';
$lng['general']['activeads'] = 'Ενεργές αγγελίες';
$lng['general']['activead'] = 'Ενεργή αγγελία';
$lng['general']['subcats'] = 'υποκατηγορίες';
$lng['general']['subcat'] = 'υποκατηγορία';
$lng['general']['view_ads'] = 'Δείτε αγγελίες';
$lng['general']['back'] = 'Επιστροφή';
$lng['general']['goto'] = 'Πηγαίνετε στην';
$lng['general']['page'] = 'Σελίδα';
$lng['general']['of'] = 'από';
$lng['general']['other'] = 'Άλλο';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Προσθήκη';
$lng['general']['delete_all'] = 'Ακυρώστε όλες τις επιλογές';
$lng['general']['action'] = 'Δράση';
$lng['general']['edit'] = 'Mετατροπή';
$lng['general']['delete'] = 'Ακύρωση';
$lng['general']['total'] = 'Συνολικά';
$lng['general']['min'] = 'Ελάχιστη';
$lng['general']['max'] = 'Μέγιστη';
$lng['general']['free'] = 'Δωρεάν';
$lng['general']['not_authorized'] = 'Δεν έχετε κατάλληλη εξουσιοδότηση για την προβολή αυτής της σελίδας!';
$lng['general']['access_restricted'] = 'Η \'πρόσβαση στην σελίδα είναι απαγορευμένη!';
$lng['general']['featured_ads'] = 'Αγγελίες πρώτης σελίδας';
$lng['general']['latest_ads'] = 'Πρόσφατες αγγελίες';
$lng['general']['quick_search'] = 'Ταχεία αναζήτηση';
$lng['general']['go'] = 'Μετάβαση';
$lng['general']['unlimited'] = 'Απεριόριστο';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Υπάρχει ένα αρχείο με το ίδιο όνομα και δεν δεν μπορεί να αντικατασταθεί!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Δεν έχετε την άδεια για να μεταφορτώσετε πιο μεγάλα αρχεία από ::MAX_FILE_UPLOAD_SIZE::K !'; // si prega di lasciare intatto il tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Οι διαστάσεις των εικόνων είναι πολύ μεγάλες! Παρακαλείστε να μεταφορτώσετε ένα αρχείο μέγιστο ::MAX_FILE_WIDTH::px και μέγιστο πλάτος ::MAX_FILE_HEIGHT::px ύψος !';  //si prega di lasciare intatto questo tag ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Το αρχείο δεν μπορεί να μεταφορτωθεί!';
$lng['images']['errors']['no_file'] = 'Παρακαλείστε να επιλέξετε ένα αρχείο προς μεταφόρτωση!';
$lng['images']['errors']['no_folder'] = 'Ο φάκελος δεν υπάρχει!';
$lng['images']['errors']['folder_not_writeable'] = 'Ο φάκελος είναι εγγράψιμος!';
$lng['images']['errors']['file_type_not_accepted'] = 'Ο τύπος του αρχείου που μεταφορτώσατε δεν είναι αρχείο εικόνας ή δεν υποστηρίζεται!';
$lng['images']['errors']['error'] = 'Πραγματοποιήθηκε σφάλμα κατά την μεταφόρτωση του αρχείου! Το\'σφάλμα είναι: ::ERROR::'; // Lasciare intatto questo tag ::ERROR::
$lng['images']['errors']['no_thmb_folder'] = 'Δεν υπάρχει εικονίδιο στον φάκελο μεταφόρτωσης!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Ο φάκελος εικονιδίων μεταφόρτωσης δεν είναι επαναγράψιμος!';
$lng['images']['errors']['no_jpg_support'] = 'Δεν υποστηρίζεται το αρχείο JPG!';
$lng['images']['errors']['no_png_support'] = 'Δεν υποστηρίζεται το αρχείο PNG!';
$lng['images']['errors']['no_gif_support'] = 'Δεν υποστηρίζεται το αρχείο GIF!';
$lng['images']['errors']['jpg_create_error'] = 'Σφάλμα κατά την δημιουργία της \'εικόνας JPG!';
$lng['images']['errors']['png_create_error'] = 'Σφάλμα κατά την δημιουργία της\'εικόνας PNG!';
$lng['images']['errors']['gif_create_error'] = 'Σφάλμα κατά την δημιουργία της\'εικόνας GIF!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Είσοδος';
$lng['login']['logout'] = 'Έξοδος';
$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Password';
$lng['login']['forgot_pass'] = 'Ξεχάσατε το password;';
$lng['login']['click_here'] = 'Πατήστε εδώ';

$lng['login']['errors']['password_missing'] = 'Παρακαλώ πληκρολογήστε το password!';
$lng['login']['errors']['username_missing'] = 'Παρακαλώ πληκτρολογήστε το Username!';
$lng['login']['errors']['username_invalid'] = 'Το Username δεν είναι έγκυρο!';
$lng['login']['errors']['invalid_username_pass'] = 'Το Username και το password δεν είναι έγκυρα!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Έξοδος';
$lng['logout']['loggedout'] = 'Να πάτε στο καλό!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Εγγραφή';
$lng['users']['repeat_password'] = 'Επανάληψη Password';
$lng['users']['image_verification_info'] = 'Εισάγετε την λέξη που βλέπετε στην παρακάτω εικόνα.<br />Οι χαρακτήρες που χρησιμοποιούνται είναι τα μικρά γράμματα από A έως H <br /> και οι αριθμοί από 1 έως 9.';
$lng['users']['already_logged_in'] = 'Έχετε είδη πραγματοποιήσει είσοδο!';
$lng['users']['select'] = 'Επιλογή';

$lng['users']['info']['activate_account'] = 'Σας αποστείλαμε ένα e-mail στον λογαριασμό σας. Παρακαλείστε να ακολουθήσετε τις υποδείξεις για να ενεργοποιήσετε το λογαριασμό!';
$lng['users']['info']['welcome_user'] = 'Ο λογαριασμός σας δημιουργήθηκε. Πατήστε <a href="login.php">εδώ</a> για να εισέλθετε στο λογαριασμό σας!';
$lng['users']['info']['awaiting_admin_verification'] = 'Αναμονή για έγκριση του λογαριασμού σας. Θα σας αποσταλεί ένα e-mail για την επιβεβαίωση της ενεργοποίησης.';
$lng['users']['info']['account_info_updated'] = 'Οι πληροφορίες στον λογαριασμό σας ανανεώθηκαν!';
$lng['users']['info']['password_changed'] = 'Το password σας άλλαξε!';
$lng['users']['info']['account_activated'] = 'Ο λογαριασμός σας ενεργοποιήθηκε! Πατήστε <a href="login.php">εδώ</a> για εισαγωγή.';

$lng['users']['errors']['username_missing'] = 'Παρακαλώ εισάγετε το username!';
$lng['users']['errors']['invalid_username'] = 'Μην έγκυρο username!';
$lng['users']['errors']['username_exists'] = 'Αυτό το username υπάρχει είδη! Παρακαλείστε να εισέλθετε με τον είδη υπάρχοντα λογαριασμό!';
$lng['users']['errors']['email_missing'] = 'Παρακαλώ να εισάγετε την διεύθυνση e-mail!';
$lng['users']['errors']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['users']['errors']['passwords_dont_match'] = 'Μη έγκυρο Password!';
$lng['users']['errors']['email_exists'] = 'Αυτή η διεύθυνση e-mail υπάρχει είδη! Παρακαλείστε να εισέλθετε με τον είδη υπάρχοντα λογαριασμό!';
$lng['users']['errors']['password_missing'] = 'Παρακαλώ εισάγετε το password!';
$lng['users']['errors']['invalid_validation_string'] = 'Μη έγκυρη γραμμή επικύρωσης!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Μη έγκυρος λογαριασμός ή κλειδί ενεγοποίησης! Επικοινωνήστε μαζί μας!';
$lng['users']['errors']['account_already_active'] = 'Ο λογαριασμός σας είναι είδη ενεργός!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Αγγελία';
$lng['listings']['category'] = 'Κατηγορία';
$lng['listings']['package'] = 'Πακέτο';
$lng['listings']['price'] = 'Τιμή';
$lng['listings']['ad_description'] = 'Περιγραφή αγγελίας';
$lng['listings']['title'] = 'Tίτλος';
$lng['listings']['description'] = 'Περιγραφή';
$lng['listings']['image'] = 'Εικόνα';
$lng['listings']['words_left'] = 'λέξεις';
$lng['listings']['enter_photos'] = 'Εισαγωγή φωτογραφίας';
$lng['listings']['ad_information'] = 'Πληροφορία αγγελίας';
$lng['listings']['free'] = 'Δωρεάν';
$lng['listings']['details'] = 'Πληροφορίες';
$lng['listings']['stock_no'] = 'Q.t';
$lng['listings']['location'] = 'Θέση';
$lng['listings']['contact_info'] = 'Επικοινωνία';
$lng['listings']['email_seller'] = 'E-mail πωλητή';
$lng['listings']['no_recent_ads'] = 'Καμία πρόσφατη αγγελία';
$lng['listings']['no_ads'] = 'Δεν υπάρχουν αγγελίες σε αυτή την κατηγορία!';
$lng['listings']['added_on'] = 'Αποστολή σε';
$lng['listings']['send_mail'] = 'Αποστολή e-mail σε χρήστες';
$lng['listings']['details'] = 'Λεπτομέρειες';
$lng['listings']['user'] = 'Χρήστης';
$lng['listings']['price'] = 'Τιμή';
$lng['listings']['confirm_delete'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε την αγγελία;';
$lng['listings']['confirm_delete_all'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε τις επιλεγμμένες αγγελίες;';
$lng['listings']['all'] = 'Όλες οι αγγελίες';
$lng['listings']['active_listings'] = 'Ενεργές αγγελίες';
$lng['listings']['pending_listings'] = 'Αγγελίες σε αναμονή';
$lng['listings']['featured_listings'] = 'Αγγελίες πρώτης σελίδας';
$lng['listings']['expired_listings'] = 'Ληγμένες αγγελίες';
$lng['listings']['active'] = 'Ενεργή';
$lng['listings']['inactive'] = 'Ανενεργή';
$lng['listings']['pending'] = 'Σε αναμονή';
$lng['listings']['featured'] = 'Στην πρώτη σελίδα';
$lng['listings']['expired'] = 'scaduta';
$lng['listings']['order_by_date'] = 'Ordina per data';
$lng['listings']['order_by_category'] = 'Κατηγοριοποίηση ανά κατηγορία';
$lng['listings']['order_by_make'] = 'Κατηγοριοποίηση ανά μάρκα';
$lng['listings']['order_by_price'] = 'Κατηγοριοποίηση ανά τιμή';
$lng['listings']['order_by_views'] = 'Κατηγοριοποίηση ανά προβολές';
$lng['listings']['order_asc'] = 'Αύξουσα';
$lng['listings']['order_desc'] = 'Φθίνουσα';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Προβολές';
$lng['listings']['date'] = 'Ημερομηνία';
$lng['listings']['no_listings'] = 'Καμία αγγελία';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Δεν υπάρχει!';
$lng['listings']['mark_sold'] = 'Σηματοδότηση ως Πουλημένο';
$lng['listings']['mark_unsold'] = 'Αποεπιλογή κατά την πώληση';
$lng['listings']['sold'] = 'Πουλήθηκε';
$lng['listings']['feature'] = 'Χαρακτηριστικό';
$lng['listings']['expired_on'] = 'Ημερομηνία λήξης';
$lng['listings']['renew'] = 'Ενημέρωση';
$lng['listings']['print_page'] = 'Εκτύπωση';
$lng['listings']['recommend_this'] = 'Προτείνετέ το';
$lng['listings']['more_listings'] = 'Άλλες αγγελίες αυτού του χρήστη';
$lng['listings']['all_listings_for'] = 'Όλες οι αγγελίες του';
$lng['listings']['free_category'] = 'Κατηγορία Δωρεάν';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Είστε σίγουρος πως θέλετε να σβήσετε την εικόνα αυτής της αγγελίας;';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Υπέρβαση αριθμού λέξεων! Μπορείτε να γράψετε το μέγιστο ::MAX:: λέξεις'; // lasciare intatto il tag ::MAX::
$lng['listings']['errors']['badwords']='Εντόπισα απαγορευμένες λέξεις! Καταγράφω το IP σου και σε περίπτωση επανάληψης θα μηνυθείς!';
$lng['listings']['errors']['title_missing']='Παρακαλώ εισάγετε τίτλο για την αγγελία σας!';
$lng['listings']['errors']['category_missing']='Επιλέξτε μια κατηγορία!';
$lng['listings']['errors']['invalid_category']='Μη έγκυρη κατηγορία!';
$lng['listings']['errors']['package_missing']='Απουσία πακέτου!';
$lng['listings']['errors']['invalid_package']='Μη έγκυρο πακέτο!';
$lng['listings']['errors']['content_missing']='Παρακαλώ εισάγετε το περιεχόμενο της αγγελίας σας!';
$lng['listings']['errors']['invalid_price']='Μη έγκυρη τιμή!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Ελάχιστη Τιμή';
$lng['quick_search']['price_high'] = 'Μέγιστη Τιμή';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Δημιουργία αγγελίας';
$lng['useraccount']['browse_your_listings'] = 'Διαχείριση αγγελιών';
$lng['useraccount']['modify_account_info'] = 'Πληροφορίες λογαριασμού';
$lng['useraccount']['order_history'] = 'Ιστορικο παραγγελιων';
$lng['useraccount']['total_listings'] = 'Ολικές αγγελίες';
$lng['useraccount']['total_views'] = 'Ολικές προβολές';
$lng['useraccount']['active_listings'] = 'Ενεργές αγγελίες';
$lng['useraccount']['pending_listings'] = 'Αγγελίες σε αναμονή';
$lng['useraccount']['last_login'] = 'Τελευταία είσοδος';
$lng['useraccount']['last_login_ip'] = 'Τελευταία είσοδος IP';
$lng['useraccount']['expired_listings'] = 'Ληγμένες αγγελίες';
$lng['useraccount']['statistics'] = 'Στατιστικά';
$lng['useraccount']['welcome'] = 'Καλώς Ήρθατε';
$lng['useraccount']['contact_name'] = 'Όνομα επαφής';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Password';
$lng['useraccount']['repeat_password'] = 'Επανάληψη Password';
$lng['useraccount']['change_password'] = 'Αλλαγή Password';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'σε';
$lng['advanced_search']['price_min'] = 'Ελάχιστη Τιμή';
$lng['advanced_search']['price_max'] = 'Mέγιστη τιμή';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Ταξινόμηση κατά';
$lng['advanced_search']['sort_by_price'] = 'Ταξινόμηση τιμής';
$lng['advanced_search']['sort_by_date'] = 'Ταξινόμηση ημερομηνίας';
$lng['advanced_search']['sort_by_make'] = 'Ταξινόμηση Μάρκας';
$lng['advanced_search']['sort_descendant'] = 'Ταξινόμηση Αύξουσα';
$lng['advanced_search']['sort_ascendant'] = 'Ταξινόμηση Φθίνουσα';
$lng['advanced_search']['only_ads_with_pic'] = 'Μόνο αγγελίες με φωτογραφίες';
$lng['advanced_search']['no_results'] = 'Δεν βρέθηκαν αγγελίες που αντιστοιχούν στην αναζήτησή σας!';
$lng['advanced_search']['multiple_ads_matching'] = 'Δεν υπάρχουν αγγελίες ::NO_ADS:: που αντιστοιχούν στην αναζήτησή σας!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Δεν είναι αγγελία που αντιστοιχεί στην αναζήτησή σας!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Όνομα';
$lng['contact']['subject'] = 'Αντικείμενο';
$lng['contact']['email'] = 'E-mail';
$lng['contact']['webpage'] = 'Σελίδα web';
$lng['contact']['comments'] = 'Σχόλια';
$lng['contact']['message_sent'] = 'Το μήνυμά σας απεστάλλει!';
$lng['contact']['sending_message_failed'] = 'Η αποστολή του e-mail δεν ήταν εφικτή!';
$lng['contact']['mailto'] = 'Αποστολή σε';

$lng['contact']['error']['name_missing'] = 'Εισάγετε το ονομά σας!';
$lng['contact']['error']['subject_missing'] = 'Εισλαγετε το αντικειμένο!';
$lng['contact']['error']['email_missing'] = 'Παρακαλείστε να εισάγετε το e-mail σας!';
$lng['contact']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['contact']['error']['comments_missing'] = 'Εισάγετε σχόλιο!';
$lng['contact']['error']['invalid_validation_number'] = 'Μη έγκυρος αριθμός επικύρωσης!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Διεύθυνση e-mail';
$lng['password_recovery']['new_password'] = 'Νέο password';
$lng['password_recovery']['repeat_new_password'] = 'Επαναλάβετε νέο Password';
$lng['password_recovery']['invalid_key'] = 'Μη έγκυρο κλειδί';

$lng['password_recovery']['email_missing'] = 'Εισάγετε την νέα διεύθυνση e-mail!';
$lng['password_recovery']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail';
$lng['password_recovery']['email_inexistent'] = 'Δεν υπάρχει χρήστης με αυτή την διεύθυνση e-mail!';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Ποσό';
$lng['packages']['words'] = 'Λέξεις';
$lng['packages']['days'] = 'Ημέρες';
$lng['packages']['pictures'] = 'Εικόνες';
$lng['packages']['picture'] = 'Εικόνα';
$lng['packages']['available'] = 'Διαθέσιμο';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Επεξεργαστής';
$lng['order_history']['amount'] = 'Ποσό';
$lng['order_history']['completed'] = 'Ολοκληρώθηκε';
$lng['order_history']['not_completed'] = 'Δεν ολοκληρώθηκε';
$lng['order_history']['ad_no'] = 'Αγγελία id';
$lng['order_history']['date'] = 'Ημερομηνία';
$lng['order_history']['no_actions'] = 'Q.t εγγεγραμμένες αγγελίες';
$lng['order_history']['order_by_date'] = 'Ταξινόμηση κατά ημερομηνία';
$lng['order_history']['order_by_amount'] = 'Ταξινόμηση κατά ποσό';
$lng['order_history']['order_by_processor'] = 'Ταξινόμηση κατά επεξεργαστή';
$lng['order_history']['description'] = 'Περιγραφή';
$lng['order_history']['newad'] = 'Nέα αγγελία'; 
$lng['order_history']['renew'] = 'Ενημέρωση'; 
$lng['order_history']['featured'] = 'Χαρακτηριτικά αγγελιών'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ταξινόμηση κατά ημερομηνία';
$lng['order']['price'] = 'Ταξινόμηση κατά τιμή';
$lng['order']['title'] = 'Ταξινόμηση κατά τίτλο';
$lng['order']['desc'] = 'Φθίνουσα';
$lng['order']['asc'] = 'Αύξουσα';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Πρότεινε αγγελία';
$lng['recommend']['your_name'] = 'Το όνομά σας';
$lng['recommend']['your_email'] = 'Το e-mail σας';
$lng['recommend']['friend_name'] = 'Όνομα φίλου';
$lng['recommend']['friend_email'] = 'E-mail φίλου';
$lng['recommend']['message'] = 'Mήνυμα για το φίλο σας';


$lng['recommend']['error']['your_name_missing'] = 'Εισάγετε το ονομά σας!';
$lng['recommend']['error']['your_email_missing'] = 'Εισάγετε το e-mail σας!';
$lng['recommend']['error']['friend_name_missing'] = 'Εισάγετε το όνομα του φίλου σας!';
$lng['recommend']['error']['friend_email_missing'] = 'Εισάγετε το e-mail του φίλου σας!';
$lng['recommend']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Aγγελίες';
$lng['stats']['general'] = 'Γενικά';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Εγγραφή';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Κατάσταση';
$lng['general']['favourites'] = 'ΑΓΑΠΗΜΕΝΑ';
$lng['general']['as'] = 'ως';
$lng['general']['view'] = 'Προβλήθει';
$lng['general']['none'] = 'Κανένα';
$lng['general']['yes'] = 'ναι';
$lng['general']['no'] = 'όχι';
$lng['general']['next'] = 'Επόμενο';
$lng['general']['finish'] = 'Τέλος';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Αφαίρεση';
$lng['general']['previous_page'] = 'Προηγούμενη σελίδα';
$lng['general']['next_page'] = 'Επόμενη σελίδα';
$lng['general']['items'] = 'auto';
$lng['general']['active'] = 'Ενεργό';
$lng['general']['inactive'] = 'Ανενεργό';
$lng['general']['expires'] = 'Λήγει στις';
$lng['general']['available'] = 'Διαθέσιμο';
$lng['general']['cancel'] = 'Κατάργηση';
$lng['general']['never'] = 'Ποτέ';
$lng['general']['asc'] = 'Αύξουσα';
$lng['general']['desc'] = 'Φθίνουσα';
$lng['general']['pending'] = 'Σε αναμονή';
$lng['general']['upload'] = 'upload';
$lng['general']['processing'] = 'Υπό επεξεργασία, παρακαλώ περιμένετε ... ';
$lng['general']['help'] = 'Βοήθεια';
$lng['general']['hide'] = 'Κρύψε';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Αυτή είναι μια έκδοση με περιορισμούς. Δεν επιτρέπεται η μετατροπή κάποιων ρυθμίσεων!';
$lng['general']['check_all'] = 'Επιλογή όλων';
$lng['general']['uncheck_all'] = 'Αποεπιλογή όλων';
$lng['general']['all'] = 'Όλες';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Σελίδα μεταπωλητή';
$lng['users']['store_banner'] = 'Banner σελίδας μεταπωλητή';
$lng['users']['waiting_mail_activation'] = 'Σε αναμονή ενεργοποίησης e-mail.';
$lng['users']['waiting_admin_activation'] = 'Σε αναμονή έγκρισης.';
$lng['users']['no_such_id'] = 'Αυτός ο χρήστης δεν υπάρχει.';

$lng['users']['info']['store_banner'] = 'Η εικόνα που θα χρησιμοποιηθεί ως εικόνα στο επάνω μέρος της σελίδας μεταπωλητή.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Αναφορά προσβλητικής αγγελίας';
$lng['listings']['report_reason'] = 'Αναφορά προβλήματος';
$lng['listings']['meta_info'] = 'Meta πληροφορίες';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Περιγραφή';
$lng['listings']['not_approved'] = 'Δεν εγκρίθηκε';
$lng['listings']['approve'] = 'Εκρίθηκε';
$lng['listings']['choose_payment_method'] = 'Επιλογή της μεθόδου πληρωμής';

$lng['listings']['choose_category'] = 'Επιλέξτε κατηγορία';
$lng['listings']['choose_plan'] = 'Επιλέξτε το πακέτο';
$lng['listings']['enter_ad_details'] = 'Εισαγωγή των λεπτομερειών της αγγελίας';
$lng['listings']['ad_details'] = 'Λεπτομέρειες εισαγωγής';
$lng['listings']['add_photos'] = 'Προσθήκη εικόνων';
$lng['listings']['ad_photos'] = 'Εικόνες αγγελίας';
$lng['listings']['edit_photos'] = 'Μετατροπή φωτογραφίας';
$lng['listings']['extra_options'] = 'Εxtra επιλογές';
$lng['listings']['review'] = 'Ξαναδείτε αγγελία';
$lng['listings']['finish'] = 'Τέλος';
$lng['listings']['next_step'] = 'Επόμενο βήμα;';
$lng['listings']['included'] = 'Συμπεριλαμβανόμενο';
$lng['listings']['finalize'] = 'Ολοκλήρωσε';
$lng['listings']['zip'] = 'Τ.Κ';
$lng['listings']['add_to_favourites'] = 'Προσθήκη στα αγαπημένα';
$lng['listings']['confirm_add_to_fav'] = 'Προσοχή! Δεν πραγματοποιήσατε εισαγωγή! Η προσθήκη στα αγαπημένα θα είναι προσωρινή!';
$lng['listings']['add_to_fav_done'] = 'Η αγγελία εισήχθει στον κατάλογο των αγαπημένων σας!';
$lng['listings']['confirm_delete_favourite'] = 'Είστε βέβαιος πως θέλετε να σβήσετε αυτή την αγαπημένη αγγελία;';
$lng['listings']['no_favourites'] = 'Αγαπημένες αγγελίες';
$lng['listings']['extra_options'] = 'Επιπλέον επιλογές';
$lng['listings']['highlited'] = 'Υπογραμμισμένα';
$lng['listings']['priority'] = 'Προτεραιότητα';
$lng['listings']['video'] = 'Αγγλίες video';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video σε αναμονή';
$lng['listings']['video_code'] = 'Κωδικός video';
$lng['listings']['total'] = 'Ολικό';
$lng['listings']['approve_ad'] = 'Έγκριση αγγελίας';
$lng['listings']['finalize_later'] = 'Ολοκληρώστε μετά';
$lng['listings']['click_to_upload'] = 'Κλικάρετε για upload';
$lng['listings']['files_uploaded'] = ' Ολικές φωτογραφίες σε upload';
$lng['listings']['allowed'] = ' επιτρεπόμενες φωτογραφίες!';
$lng['listings']['limit_reached'] = 'Οριο φωτογραφιών πλήρες!';
$lng['listings']['edit_options'] = 'Mετατροπή επιλογών';
$lng['listings']['view_store'] = 'Δείτε σελίδα μεταπωλητή';
$lng['listings']['edit_ad_options'] = 'Mετατροπή επιλογών αγγελίας';
$lng['listings']['no_extra_options_selected'] = 'Καμία επιλεγμένη επιλογή extra!';
$lng['listings']['highlited_listings'] = 'Προβαλόμενες αγγελίες';
$lng['listings']['for_listing'] = 'για την αγγελία αρ. ';
$lng['listings']['expires_on'] = 'Λήγει στις';
$lng['listings']['expired_on'] = 'Έληξε';
$lng['listings']['pending_ad'] = 'Αγγελίες σε αναμονή';
$lng['listings']['pending_highlited'] = 'Υπογραμμισμένες σε αναμονή';
$lng['listings']['pending_featured'] = 'Πρώτη σελίδα σε αναμονή';
$lng['listings']['pending_priority'] = 'Προτεραιότητα σε αναμονή';
$lng['listings']['enter_coupon'] = 'Εισάγετε τον κωδικό κουπονιού';
$lng['listings']['discount'] = 'Έκπτωση';
$lng['listings']['select_plan'] = 'Επιλογή πακέτου';
$lng['listings']['pending_subscription'] = 'Σε αναμονή για την συνδρομή';
$lng['listings']['remove_favourite'] = 'Αφαίρεση από τα αγαπημένα';

$lng['listings']['order_up'] = 'Παραγγελία επάνω';
$lng['listings']['order_down'] = 'Παραγγελία κάτω';

$lng['listings']['errors']['invalid_youtube_video'] = 'Μη έγκυρο Video Youtube!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Εγγραφή';
$lng['useraccount']['no_package'] = 'Κανένα πακέτο αγγελιών';
$lng['useraccount']['packages'] = 'Πακέτα';
$lng['useraccount']['date_start'] = 'Ημερομηνία έναρξης';
$lng['useraccount']['date_end'] = 'Ημεομηνία λήξης';
$lng['useraccount']['remaining_ads'] = 'Εναπομένουσες αγγελίες';
$lng['useraccount']['account_type'] = 'Τύπος λογαριασμού';
$lng['useraccount']['unfinished_listings'] = 'Ατελείς αγγελίες';
$lng['useraccount']['confirm_delete_subscription'] = 'Είστε σίγουροι ότι θέλετε να αφαιρέσετε αυτή την συνδρομή;?';
$lng['useraccount']['buy_store'] = 'Aγορά καταστήματος';
$lng['useraccount']['bulk_uploads'] = 'Χύμα uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Συνδρομή';
$lng['packages']['ads'] = 'Aγγελίες';
$lng['packages']['name'] = 'Όνομα';
$lng['packages']['details'] = 'Λεπτομέρειες';
$lng['packages']['no_ads'] = 'Αριθμός αγγελιών';
$lng['packages']['subscription_time'] = 'Χρόνος συνδρομής';
$lng['packages']['no_pictures'] = 'Επιτρεπόμενες εικόνες';
$lng['packages']['no_words'] = 'Αριθμός λέξεων';
$lng['packages']['ads_availability'] = 'Διαθέσιμες αγγελίες';
$lng['packages']['featured'] = 'Πρώτη σελίδα';
$lng['packages']['highlited'] = 'Υπογραμμισμένες';
$lng['packages']['priority'] = 'Προτεραιότητα';
$lng['packages']['video'] = 'Αγγελίες video';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Συνδρομή';
$lng['order_history']['post_listing'] = 'Post Aγγελιών';
$lng['order_history']['renew_listing'] = 'Ενημερωμένες αγγελίες';
$lng['order_history']['feature_listing'] = 'Αγγελίες ππρώτης σελίδας';
$lng['order_history']['subscribe_to_package'] = 'Συνδρομή πακέτου';
$lng['order_history']['complete_payment'] = 'Ολοκλήρωση πληρωμών';
$lng['order_history']['complete_payment_for'] = 'Ολοκλήρωση πληρωμών για';
$lng['order_history']['details'] = 'Λεπτομέρειες';
$lng['order_history']['subscription_no'] = 'Α. συνδρομών';
$lng['order_history']['highlited'] = 'Υπογραμμισμένες αγγελίες';
$lng['order_history']['priority'] = 'Προτεραιότητα';
$lng['order_history']['video'] = 'Aγγελίες video';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Επιλογή πακέτου!';
$lng['buy_package']['error']['choose_processor'] = 'Επιλέξτε ένα τύπο πληρωμής!';
$lng['buy_package']['error']['invalid_processor'] = 'Μη έγκυρη επεξεργασία των πληρωμών!';
$lng['buy_package']['error']['invalid_package'] = 'Μη έγκυρο πακέτο!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή PayPal!';
$lng['2co']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή 2co!';
$lng['moneybookers']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή moneybookers!';
$lng['authorize']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή authorize!';
$lng['manual']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή!';

$lng['paypal']['transaction_canceled'] = 'Ακύρωση συναλλαγής Paypal!';
$lng['2co']['transaction_canceled'] = 'Ακύρωση συναλλαγής 2co!';
$lng['moneybookers']['transaction_canceled'] = 'Ακύρωση συναλλαγής moneybookers!';
$lng['authorize']['transaction_canceled'] = 'Ακύρωση συναλλαγής authorize!';
$lng['manual']['transaction_canceled'] = 'Ακύρωση συναλλαγής!';
$lng['epay']['transaction_canceled'] = 'Ακύρωση συναλλαγής epay!';

$lng['payments']['transaction_already_processed'] = 'Η διαδικασία έχει είδη πραγματοποιηθεί!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Έγκριση συνδρομής';
$lng['subscribe']['payment_method'] = 'Τρόπος πληρωμής';
$lng['subscribe']['renew_subscription'] = 'Ανανέωση συνδρομής';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Αντίγραφο e-mail: ';
$lng['bcc_mails']['from'] = 'Από: ';
$lng['bcc_mails']['to'] = 'προς: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Κατάσταση ομαδικής φόρτωσης: ';
$lng['ie']['successfully'] = '[Επιτυχία προσθήκης αγγελίας';
$lng['ie']['failed'] = 'Fallito';
$lng['ie']['uploaded_listings'] = 'Φορτωμένες αγγελίες:';
$lng['ie']['errors']['upload_import_file'] = 'Παρακαλείστε να φορτώσετε τον αρχείο εισαγωγής από!';
$lng['ie']['errors']['incorrect_file_type'] = 'λανθασμένος τύπος αρχείου! Ο τύπος αρχείου θα πρέπει να είναι: ';
$lng['ie']['errors']['could_not_open_file'] = 'Αδυναμία ανοίγματος του αρχείου!';
$lng['ie']['errors']['choose_categ'] = 'Επιλέξτε μια κατηγορία!';
$lng['ie']['errors']['could_not_save_file'] = 'αδυναμία φόρτωσης αρχείου: ';
$lng['ie']['errors']['required_field_missing'] = 'Λείπουν υποχρεωτικά πεδία: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Εσφαλμένος αρισθμός στοιχείων: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Επιλέξτε πωλητή';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Περιοχή αναζήτησης';
$lng['areasearch']['all_locations'] = 'Όλες οι τοποθεσίες';
$lng['areasearch']['exact_location'] = 'Σωστή θέση';
$lng['areasearch']['around'] = 'γύρω';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ναι';
$lng['general']['No'] = 'Όχι';
$lng['general']['or'] = 'ή';
$lng['general']['in'] = 'σε';
$lng['general']['by'] = 'από';
$lng['general']['close_window'] = 'Κλείστε το παράθυρο';
$lng['general']['more_options'] = 'Περισσότερες επιλογές';
$lng['general']['less_options'] = 'Λιγότερες επιλογές';
$lng['general']['send'] = 'Αποστολή';
$lng['general']['save'] = 'Αποθήκευση';
$lng['general']['for'] = 'για';
$lng['general']['to'] = 'στην';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Σηματοδοτήστε το σαν νοίκι';
$lng['listings']['mark_unrented'] = 'Αποεπιλέξτε το από νοίκι';
$lng['listings']['rented'] = 'Νοικιασμένο';
$lng['listings']['your_info'] = 'Οι πληροφορίες σας';
$lng['listings']['email'] = 'Το e-mail σας';
$lng['listings']['name'] = 'Το όνομά σας';
$lng['listings']['listing_deleted'] = 'Η αγγελία σας σβήστηκε!';
$lng['listings']['post_without_login'] = 'Δώστε σχόλιο χωρίς εγγραφή';
$lng['listings']['waiting_activation'] = 'Αναμονή για την εγγραφή';
$lng['listings']['waiting_admin_approval'] = 'Σε αναμονή για έγκριση διαχειριστή';
$lng['listings']['dont_need_account'] = 'Δεν είναι αναγκαίος ένας λογαριασμός! Εισάγετε την αγγελία σας χωρίς να πραγματοποιήσετε την είσοδο στο σύστημα!';
$lng['listings']['post_your_ad'] = 'Pubblica il tuo annuncio!';
$lng['listings']['posted'] = 'Απεστάλλει';
$lng['listings']['select_subscription'] = 'Επιλογή πακέτου';
$lng['listings']['choose_subscription'] = 'Επιλογή πακέτου';
$lng['listings']['inactive_listings'] = 'Μη ενεργή αγγελία';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Περισσότερα φίλτρα αναζήτησης';
$lng['search']['refine_by_keyword'] = 'Φίλτρα για τις λέξεις κλειδιά';
$lng['search']['showing'] = 'Αποτελέσματα';
$lng['search']['more'] = 'Περισσότερα';
$lng['search']['less'] = 'Λιγότερα';
$lng['search']['search_for'] = 'Αναζήτηση για';
$lng['search']['save_your_search'] = 'Αποθήκευση αναζήτησης';
$lng['search']['save'] = 'Αποθήκευση';
$lng['search']['search_saved'] = 'Η αναζήτησή σας αποθηκεύθηκε!';
$lng['search']['must_login_to_save_search'] = 'Αναγκαία η πρόσβαση στο λογαριασμό σας για την αποθήκευση της έρευνας!';
$lng['search']['view_search'] = 'Προβολή έρευνας';
$lng['search']['all_categories'] = 'Όλες οι κατηγορίες';
$lng['search']['more_than'] = 'περισσότερο απο';
$lng['search']['less_than'] = 'λιγότερο από';

$lng['search']['error']['cannot_save_empty_search'] = 'Η αναζήτησή σας δεν εμπεριέχει όρους ώστε να καθίσταται δυνατή η αποθηκευσή της!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Αποθηκευμένες αναζητήσεις';
$lng['useraccount']['view_saved_searches'] = 'Δείτε αποθηκευμένες αναζητήσεις';
$lng['useraccount']['no_saved_searches'] = 'Καμία αναζήτηση δεν αποθηκεύθηκε';
$lng['useraccount']['recurring'] = 'recurring';
$lng['useraccount']['date_renew'] = 'Ημερομηνία ανανέωσης';
$lng['useraccount']['logged_in_as'] = 'Κάνατε εισαγωγή ως';
$lng['useraccount']['subscriptions'] = 'Εγγραφές';

$lng['users']['activate_account'] = 'Ενεργοποίηση λογαριασμού';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Προσθήκη συνδρομής';
$lng['subscriptions']['package'] = 'Συνδρομή';
$lng['subscriptions']['remaining_ads'] = 'Εναπομείναντες αγγελίες';
$lng['subscriptions']['recurring'] = 'recurring';
$lng['subscriptions']['date_start'] = 'Ημερομηνία έναρξης';
$lng['subscriptions']['date_end'] = 'Ημερομηνία λήξης';
$lng['subscriptions']['date_renew'] = 'Ημερομηνία ανανέωσης';
$lng['subscriptions']['confirm_delete'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε την συνδρομή;';
$lng['subscriptions']['no_subscriptions'] = 'Καμία εγγραφή';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Δεν έχετε λογαριασμό;';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Ενεργοποίηση πληρωμών για την εγγραφή';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Τα ακόλουθα υποχρεωτικά πεδία λείπουν: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Αγοράστε σελίδα πωλητή';


$lng['images']['errors']['max_photos'] = 'Upload max foto!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Ειδοποίηση e-mail';
$lng['alerts']['email_alerts'] = 'Ειδοποίηση e-mail';
$lng['alerts']['no_alerts'] = 'Καμία ειδοποίηση e-mail';
$lng['alerts']['view_email_alerts'] = 'Προβολή των ειδοποιήσεων e-mail';
$lng['alerts']['send_email_alerts'] = 'Αποστολή ειδοποιήσεων e-mail';
$lng['alerts']['immediately'] = 'Άμεσα';
$lng['alerts']['daily'] = 'Αυθημερόν';
$lng['alerts']['weekly'] = 'Εβδομαδιαία';
$lng['alerts']['your_email'] = 'Η διεύθυνση e-mail σας';
$lng['alerts']['create_alert'] = 'Δημιουργία προειδοποίησης';
$lng['alerts']['email_alert_info'] = 'Θα λάβετε ειδοποιήσεις στο e-mail σας, σχετικά με την αναζήτηση που κάνατε.';
$lng['alerts']['alert_added'] = 'Η ειδοποίησή σας καταχωρήθηκε!';
$lng['alerts']['alert_added_activate'] = 'Θα σας αποσταλεί ένα e-mail στην διεύθυνση <b>::EMAIL::</b>. Ακολουθήστ ετι ςοδηγίες για να ενεργοποιήσετε την υπηρεσία Προειδοποίησης'; // Non eliminare ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Αναζήτηση σε';
$lng['alerts']['keyword'] = 'λέξεις κλειδιά';
$lng['alerts']['frequency'] = 'Συχνότητα προειδοποιήσεων';
$lng['alerts']['alert_activated'] = 'Η προειδοποίησή σας σας ενεργοποιήθηκε! Θα βρούμ ετο γρηγορότερο ότι ψάχνετε.';
$lng['alerts']['alert_unsubscribed'] = 'La tua segnalazione  stata eliminata!';
$lng['alerts']['started_on'] = 'έναρξη στις';
$lng['alerts']['no_terms_searched'] = 'Δεν υπάρχουν όροι σε αυτή την κατηγορία!';
$lng['alerts']['no_listings'] = 'Καμία αγγελία για αυτή την προειδοποίηση!';

$lng['alerts']['error']['email_required'] = 'Εισάγετε την διεύθυνση e-mail για αυτή την προειδοποίηση!';
$lng['alerts']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['alerts']['error']['invalid_frequency'] = 'Μη έγκυρη συχνότητα alert!';
$lng['alerts']['error']['login_required'] = 'Παραγαλείστε να <a href="::LINK::">πραγματοποιήσετε πρόσβαση</a> γι αν αλάβετε τις προειδοποιήσεις!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Παρακαλείστε να επιλέξετε τουλάχιστον ένα κλειδί έρευνας με εξαίρεση την κατηγορία!';
$lng['alerts']['error']['invalid_confirmation'] = 'Μη έγκυρη επιβεβαίωση προειδοποίησης!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Μη έγκυρη αίτηση ακύρωσης συνδρομής!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Υπολογισμός δανείου';
$lng_loancalc['sale_price'] = 'Τιμή πώλησης';
$lng_loancalc['down_payment'] = 'Προκαταβολή';
$lng_loancalc['trade_in_value'] = 'Ανταλλαγές σε ονομαστικούς όρους';
$lng_loancalc['loan_amount'] = 'Ποσό δανείου';
$lng_loancalc['sales_tax'] = 'Φόρος πώλησης';
$lng_loancalc['interest_rate'] = 'Τόκοι';
$lng_loancalc['loan_term'] = 'Δάνειο μεγάλης διάρκειας';
$lng_loancalc['months'] = 'Mήνας';
$lng_loancalc['years'] = 'έτος';
$lng_loancalc['or'] = '0';
$lng_loancalc['monthly_payment'] = 'Μηνιαία πληρωμή';
$lng_loancalc['calculate'] = 'Υπολογισμός';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Σχόλια';
$lng_comments['make_a_comment'] = 'Προσθέστε ένα σχόλιο';
$lng_comments['login_to_post'] = 'Παρακαλείστε να <a href="::LOGIN_LINK::">εισέλθετε στο σύστημα </a> για να αφήσετε ένα σχόλιο.';

$lng_comments['name'] = 'Όνομα';
$lng_comments['email'] = 'E-mail';
$lng_comments['website'] = 'Ιστοσελίδα';
$lng_comments['submit_comment'] = 'Δημοσιεύεστε το σχόλιο';

$lng_comments['error']['name_missing'] = 'Εισάγετε το όνομά σας!';
$lng_comments['error']['content_missing'] = 'Εισάγετε το σχολιό σας!';
$lng_comments['error']['website_missing'] = 'Εισάγετε την ιστοσελίδα σας!';
$lng_comments['error']['email_missing'] = 'Εισάγετε το e-mail σας!';
$lng_comments['error']['listing_id_missing'] = 'Μη έγκυρο σχόλιο!';

$lng_comments['error']['invalid_email'] = 'Μη έγκυρο e-mail!';
$lng_comments['error']['invalid_website'] = 'Μη έγκυρη διεύθυνση ιστοσελίδας!';
$lng_comments['errors']['badwords'] = 'Το σχολιό σου περιέχει υβριστικές λέξεις! Άλλαξε το σχολιό σου και μην γίνεσαι μαλάκας!';

$lng_comments['info']['comment_added'] = 'Το σχολιό σας προστέθηκε! Πατήστε <a id="newad">εδώ</a> αν επιθυμείτε να προσθέσετε ένα άλλο σχόλιο.';
$lng_comments['info']['comment_pending'] = 'Το σχόλιό σας βρίσκεται σε αναμονή επιβεβαίωσης.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Επόμενη;';
$lng['tb']['prev'] = 'Προηγούμενη';
$lng['tb']['close'] = 'Κλείσε';
$lng['tb']['or_esc'] = 'ή ESC Key';

// ------------------- end vers 6.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Choose location';
$lng['location']['choose'] = 'Choose';
$lng['location']['change'] = 'Change';
$lng['location']['all_locations'] = 'All locations';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Κατηγορία';
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
