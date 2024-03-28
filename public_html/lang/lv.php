<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Sakums';
$lng['navbar']['login'] = 'Ienākt';
$lng['navbar']['logout'] = 'Iziet';
$lng['navbar']['recent_ads'] = 'Jaunākie sludinājumi';
$lng['navbar']['register'] = 'Reģistrēties';
$lng['navbar']['submit_ad'] = 'Pievienot sludinājumu';
$lng['navbar']['editad'] = 'Lasbot sludinājumu';
$lng['navbar']['my_account'] = 'Mans konts';
$lng['navbar']['administrator_panel'] = 'Administrācijas panelis';
$lng['navbar']['contact'] = 'Kontakti';
$lng['navbar']['password_recovery'] = 'Paroles atjaunošana';
$lng['navbar']['renew_listing'] = 'Atjaunot sludinājumu';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Pievienot';
$lng['general']['search'] = 'Meklēt';
$lng['general']['contact'] = 'Kontakti';
$lng['general']['activeads'] = 'aktīvie sludinājumi';
$lng['general']['activead'] = 'aktīvs sludinājums';
$lng['general']['subcats'] = 'Apakškategorijas';
$lng['general']['subcat'] = 'Apakškategorija';
$lng['general']['view_ads'] = 'Skatīt Sludinājumus';
$lng['general']['back'] = '&laquo; Atpakaļ';
$lng['general']['goto'] = 'Iet uz';
$lng['general']['page'] = 'Lapa';
$lng['general']['of'] = 'no';
$lng['general']['other'] = 'Cits';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Add';
$lng['general']['delete_all'] = 'Dzēst visu izvēlēto';
$lng['general']['action'] = 'Darbība';
$lng['general']['edit'] = 'Labot';
$lng['general']['delete'] = 'Dzēst';
$lng['general']['total'] = 'Kopā';
$lng['general']['min'] = 'No';
$lng['general']['max'] = 'Līdz';
$lng['general']['free'] = 'BEZMAKSAS';
$lng['general']['not_authorized'] = 'Tev nav atļaujas skatīt šo lapu!';
$lng['general']['access_restricted'] = 'Jūsu piekļuve šai lapai ir ierobežota!';
$lng['general']['featured_ads'] = 'Izceltie sludinājumi';
$lng['general']['latest_ads'] = 'Jaunākie sludinājumi';
$lng['general']['quick_search'] = 'Ātrā meklēšana';
$lng['general']['go'] = 'Aiziet';
$lng['general']['unlimited'] = 'Neierobežoti';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Fails ar tādu nosaukumu jau eksistē un nevar tikt pārrakstīts!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Tu nevar augšupielādēt failus lielākus par ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Dimensija sir par lielu! Faila pieļaujamie maksimālie izmēri ::MAX_FILE_WIDTH::px platums un ::MAX_FILE_HEIGHT::px augstums !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Failu nevar augšupielādēt!';
$lng['images']['errors']['no_file'] = 'Izvēlies failu, kuru augšupielādēt!';
$lng['images']['errors']['no_folder'] = 'Augšupielādes mape neeksistē!';
$lng['images']['errors']['folder_not_writeable'] = 'Augšupielādes mape nav pārrakstāma!';
$lng['images']['errors']['file_type_not_accepted'] = 'Augšupielādējamais fails nav fotogrāfija vai netiek atbalstīts!';
$lng['images']['errors']['error'] = 'Radās kļūda augšupeilādējot failu. Kļūda: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Sīkatēlu mape neeksistē!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Sīkatēlu mape nav pārrakstāma!';
$lng['images']['errors']['no_jpg_support'] = 'JPG neatbalsta!';
$lng['images']['errors']['no_png_support'] = 'PNG neatbalsta!';
$lng['images']['errors']['no_gif_support'] = 'GIF neatbalsta!';
$lng['images']['errors']['jpg_create_error'] = 'Kļūda veidojot JPG bildi!';
$lng['images']['errors']['png_create_error'] = 'Kļūda veidojot PNG bildi!';
$lng['images']['errors']['gif_create_error'] = 'Kļūda veidojot GIF bildi!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Ienākt';
$lng['login']['logout'] = 'Iziet';
$lng['login']['username'] = 'Lietotājvārds';
$lng['login']['password'] = 'Parole';
$lng['login']['forgot_pass'] = 'Aizmirsi paroli?';
$lng['login']['click_here'] = 'Spied te';

$lng['login']['errors']['password_missing'] = 'Ieraksti savu paroli!';
$lng['login']['errors']['username_missing'] = 'Ieraksti savu lietotājvārdu!';
$lng['login']['errors']['username_invalid'] = 'Lietotājvārds nav pareizs!';
$lng['login']['errors']['invalid_username_pass'] = 'Nepareizs lietotājvārds vai parole';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Iziet';
$lng['logout']['loggedout'] = 'Tu esi izgājis no sistēmas!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Reģistrēties';
$lng['users']['repeat_password'] = 'Atkārtot paroli';
$lng['users']['image_verification_info'] = 'Ievadi tekstu, kuru redzi attēlā.<br /> Uzģnerētie iespējamie simboli ir no a līdz h<br /> un cipari no 1 līdz 9.';
$lng['users']['already_logged_in'] = 'Tujau esi ielogojies!';
$lng['users']['select'] = 'Izvēlies';

$lng['users']['info']['activate_account'] = 'Vēstule tika nosūtīta uz norādīto e-pastu. Lūdzu seko instrukcijām, lai aktivizētu kontu.';
$lng['users']['info']['welcome_user'] = 'Konts tika izveidots. Lūdzu <a href="login.php">Ielogojies</a> savā kontā!';
$lng['users']['info']['awaiting_admin_verification'] = 'Tavs konts gaida administrācijas apstiprināšanu. Tev tiks nosūtīta vēstule, kad konts tiks aktivizēts.';
$lng['users']['info']['account_info_updated'] = 'Tava konta informācija tika atjaunināta!';
$lng['users']['info']['password_changed'] = 'Tava paroletika nomainīta!';
$lng['users']['info']['account_activated'] = 'Tavs konts tika aktivizēts! Lūdzu <a href="login.php">ielogojies</a> savā kontā.';

$lng['users']['errors']['username_missing'] = 'Lūdzu ieraksti lietotājvārdu!';
$lng['users']['errors']['invalid_username'] = 'Nepareizs lietotājvārds!';
$lng['users']['errors']['username_exists'] = 'Lietotājvārds jau eksistē! Lūdzuielogojies, ja tev jau ir konts!';
$lng['users']['errors']['email_missing'] = 'Lūdzu ievadi e-pasta adresi!';
$lng['users']['errors']['invalid_email'] = 'Nepareiza e-pasta adrese!';
$lng['users']['errors']['passwords_dont_match'] = 'Paroles nesakrīt!';
$lng['users']['errors']['email_exists'] = 'Šāds e-pasta jau tiek izmantots! Lūdzu ielogojies, ja tev jau ir konts!';
$lng['users']['errors']['password_missing'] = 'Lūdzu ievadiparoli!';
$lng['users']['errors']['invalid_validation_string'] = 'Nederīgs apstiprināšanas kods!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Kaut kas nav kārtība mēģini vēlreiz vai sazinies ar administrāciju!';
$lng['users']['errors']['account_already_active'] = 'Tavs konts jau ir aktivizēts!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Sludinājums';
$lng['listings']['category'] = 'Kategorija';
$lng['listings']['package'] = 'Plāns';
$lng['listings']['price'] = 'Cena';
$lng['listings']['ad_description'] = 'Sludinājuma apraksts';
$lng['listings']['title'] = 'Nosaukums';
$lng['listings']['description'] = 'Apraksts';
$lng['listings']['image'] = 'Bilde';
$lng['listings']['words_left'] = 'Atlikušie vārdi';
$lng['listings']['enter_photos'] = 'Ievietot fotogrāfijas';
$lng['listings']['ad_information'] = 'Sludinājuma informācija';
$lng['listings']['free'] = 'BEZMAKSAS';
$lng['listings']['details'] = 'Detaļas';
$lng['listings']['stock_no'] = 'Sludinājuma nr.';
$lng['listings']['location'] = 'Atrašanās vieta';
$lng['listings']['contact_info'] = 'Kontakt informācija';
$lng['listings']['email_seller'] = 'Nosūtīt vēstuli';
$lng['listings']['no_recent_ads'] = 'Nav jaunāko sludionājumu';
$lng['listings']['no_ads'] = 'Šajā kategorjā nav sludinājumu';
$lng['listings']['added_on'] = 'Pievienots';
$lng['listings']['send_mail'] = 'Sūtīt e-pastu lietotājam';
$lng['listings']['details'] = 'Detaļas';
$lng['listings']['user'] = 'Lietotājs';
$lng['listings']['price'] = 'Cena';
$lng['listings']['confirm_delete'] = 'Tiešām vēlies dzēst sludinājumu?';
$lng['listings']['confirm_delete_all'] = 'Tiešām vēlies dzēst izvēlētos sludinājumus?';
$lng['listings']['all'] = 'Visi sludinājumi';
$lng['listings']['active_listings'] = 'Aktīvi sludinājumi';
$lng['listings']['pending_listings'] = 'Sludinājumi gaidīšanā';
$lng['listings']['featured_listings'] = 'Izceltie sludinājumi';
$lng['listings']['expired_listings'] = 'Sludinājumiem beidzies termiņš';
$lng['listings']['active'] = 'Aktīvs';
$lng['listings']['inactive'] = 'Neaktīvs';
$lng['listings']['pending'] = 'Gaidīšanā';
$lng['listings']['featured'] = 'Izcelts';
$lng['listings']['expired'] = 'Beidzies termiņš';
$lng['listings']['order_by_date'] = 'Kārtot pēc datuma';
$lng['listings']['order_by_category'] = 'Kārtot pēc kategorijas';
$lng['listings']['order_by_make'] = 'Kārtot pēc ražotāja';
$lng['listings']['order_by_price'] = 'Kārtot pēc cenas';
$lng['listings']['order_by_views'] = 'Kārtot pēc skatījumiem';
$lng['listings']['order_asc'] = 'Augošā secība';
$lng['listings']['order_desc'] = 'Dilstošā secībā';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Hiti';
$lng['listings']['date'] = 'Datums';
$lng['listings']['no_listings'] = 'Nav sludinājumu';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Šis sludinājums neeksistē!';
$lng['listings']['mark_sold'] = 'Atzīmēt,kā pārdots';
$lng['listings']['mark_unsold'] = 'Noņēmt atzīmi, kā pārdots';
$lng['listings']['sold'] = 'Pārdots';
$lng['listings']['feature'] = 'Izcelts';
$lng['listings']['expired_on'] = 'Termiņš beigsies';
$lng['listings']['renew'] = 'Atjaonot';
$lng['listings']['print_page'] = 'Printēt';
$lng['listings']['recommend_this'] = 'Pastāstīt';
$lng['listings']['more_listings'] = 'Vairāk sludinājumu no šī lietotāja';
$lng['listings']['all_listings_for'] = 'Visi sludinājumi ';
$lng['listings']['free_category'] = 'Bezmaksas kategorija';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Tiešām vēlies dzēst sludinājuma fotogrāfiju?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Vārdu limits pārsniegts! Maksimālais vārdu skaits ::MAX:: vārdi'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Tavs sludinājums satur aizliegtus vārdus! Pārskati savu saturu!';
$lng['listings']['errors']['title_missing']='Ievadi sludinājuma nosaukumu!';
$lng['listings']['errors']['category_missing']='Kategorija!';
$lng['listings']['errors']['invalid_category']='Nepareiza kategorija!';
$lng['listings']['errors']['package_missing']='Sludinājuma tips!';
$lng['listings']['errors']['invalid_package']='Nepareizs sludinājuma tips!';
$lng['listings']['errors']['content_missing']='Lūdzu ievadi sludinājuma saturu!';
$lng['listings']['errors']['invalid_price']='Nepareiza cena!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Cena no';
$lng['quick_search']['price_high'] = 'Cena līdz';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Pievienot jaunu sludinājumu';
$lng['useraccount']['browse_your_listings'] = 'Mani sludinājumi';
$lng['useraccount']['modify_account_info'] = 'Konta informācija';
$lng['useraccount']['order_history'] = 'Darījumu vēsture';
$lng['useraccount']['total_listings'] = 'Sludinājumi kopā';
$lng['useraccount']['total_views'] = 'Hiti kopā';
$lng['useraccount']['active_listings'] = 'Aktīvi sludinājumi';
$lng['useraccount']['pending_listings'] = 'Sludinājumi gaidīšanā';
$lng['useraccount']['last_login'] = 'Pēdējo reizi biji';
$lng['useraccount']['last_login_ip'] = 'Pēdējo reizi biji no šādas IP';
$lng['useraccount']['expired_listings'] = 'Sludinājumiem beidzies termiņš';
$lng['useraccount']['statistics'] = 'Statistika';
$lng['useraccount']['welcome'] = 'Sveiki';
$lng['useraccount']['contact_name'] = 'Kontaktvārds';
$lng['useraccount']['email'] = 'E-pasts';
$lng['useraccount']['password'] = 'Parole';
$lng['useraccount']['repeat_password'] = 'Atkārtot paroli';
$lng['useraccount']['change_password'] = 'Mainīt paroli';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'to';
$lng['advanced_search']['price_min'] = 'Minimālā cena';
$lng['advanced_search']['price_max'] = 'Maksimālā cena';
$lng['advanced_search']['word'] = 'Atslēgvārds';
$lng['advanced_search']['sort_by'] = 'Kārtot pēc';
$lng['advanced_search']['sort_by_price'] = 'Kārtot pēc enas';
$lng['advanced_search']['sort_by_date'] = 'Kārtot pēc datuma';
$lng['advanced_search']['sort_by_make'] = 'Mārtot pēc ražotāja';
$lng['advanced_search']['sort_descendant'] = 'Kārtot dilstošā secībā';
$lng['advanced_search']['sort_ascendant'] = 'Kārtot augošā secībā';
$lng['advanced_search']['only_ads_with_pic'] = 'Tikai sludinājumi ar fotogrāfijām';
$lng['advanced_search']['no_results'] = 'Neviens sludinājums netika atrasts, tavam meklēšanas kritērijam!';
$lng['advanced_search']['multiple_ads_matching'] = 'Atrada ::NO_ADS:: sludinājumus, kas atbilst tavam meklēšanas kritērijam!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Nav sludinājuma, kas atbilstu tavam meklēšanas kritērijam!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Vārds';
$lng['contact']['subject'] = 'Tēma';
$lng['contact']['email'] = 'E-pasts';
$lng['contact']['webpage'] = 'Mājas lapa';
$lng['contact']['comments'] = 'Komentārs';
$lng['contact']['message_sent'] = 'Tava ziņa tika nosūtīta';
$lng['contact']['sending_message_failed'] = 'Ziņas peigāde atcelta!';
$lng['contact']['mailto'] = 'Epasts kam';

$lng['contact']['error']['name_missing'] = 'Ievadi savu vārdu!';
$lng['contact']['error']['subject_missing'] = 'Ievadi tēmu!';
$lng['contact']['error']['email_missing'] = 'Ievadi savu e-pastu!';
$lng['contact']['error']['invalid_email'] = 'Nepareiza e-pasta adrese!';
$lng['contact']['error']['comments_missing'] = 'Ievadi savu komentāru!';
$lng['contact']['error']['invalid_validation_number'] = 'Nepareizs apstiprināšanas kods!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'E-pasta adrese';
$lng['password_recovery']['new_password'] = 'Jaunā parole';
$lng['password_recovery']['repeat_new_password'] = 'Atkārtot jauno paroli';
$lng['password_recovery']['invalid_key'] = 'Nepareiza atslēga';

$lng['password_recovery']['email_missing'] = 'Ievadi savu e-pasta adresi!';
$lng['password_recovery']['invalid_email'] = 'Nepareiza e-pasta adrese';
$lng['password_recovery']['email_inexistent'] = 'Šāds e-pasts neeksistē';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Summa';
$lng['packages']['words'] = 'Vārdi';
$lng['packages']['days'] = 'Dienas';
$lng['packages']['pictures'] = 'Fotogrāfijas';
$lng['packages']['picture'] = 'Fotogrāfija';
$lng['packages']['available'] = 'Redzams';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Process';
$lng['order_history']['amount'] = 'Summa';
$lng['order_history']['completed'] = 'Pabeigts';
$lng['order_history']['not_completed'] = 'Nepabeigts';
$lng['order_history']['ad_no'] = 'Sludinājuma id';
$lng['order_history']['date'] = 'Datums';
$lng['order_history']['no_actions'] = 'Navdarījuma ierakstu';
$lng['order_history']['order_by_date'] = 'Kārtot pēc datuma';
$lng['order_history']['order_by_amount'] = 'Kārtot pēc summas';
$lng['order_history']['order_by_processor'] = 'Kārtot pēc processa';
$lng['order_history']['description'] = 'Apraksts';
$lng['order_history']['newad'] = 'Jauns sludinājums'; 
$lng['order_history']['renew'] = 'Atjaunot'; 
$lng['order_history']['featured'] = 'Izcelts sludinājums'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Kārtot pēc datuma';
$lng['order']['price'] = 'Kārtot pēc enas';
$lng['order']['title'] = 'Kārtot pēc nosaukuma';
$lng['order']['desc'] = 'Dilstošā secībā';
$lng['order']['asc'] = 'Augošā secībā';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Dalīties';
$lng['recommend']['your_name'] = 'Tavs vārds';
$lng['recommend']['your_email'] = 'Tavs e-pasts';
$lng['recommend']['friend_name'] = 'Drauga vārds';
$lng['recommend']['friend_email'] = 'Drauga e-pasts';
$lng['recommend']['message'] = 'Ziņa draugam';


$lng['recommend']['error']['your_name_missing'] = 'Ieraksti savu vārdu!';
$lng['recommend']['error']['your_email_missing'] = 'Ieraksti savu e-pastu!';
$lng['recommend']['error']['friend_name_missing'] = 'Ieraksti drauga vārdu!';
$lng['recommend']['error']['friend_email_missing'] = 'Ieraksti drauga e-pastu!';
$lng['recommend']['error']['invalid_email'] = 'Nepareiza e-pasta adrese';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Sludinājumi';
$lng['stats']['general'] = 'Galvenais';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Abonēt';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Statuss';
$lng['general']['favourites'] = 'Favorīti';
$lng['general']['as'] = 'kā';
$lng['general']['view'] = 'Skatīties';
$lng['general']['none'] = 'Neviens';
$lng['general']['yes'] = 'jā';
$lng['general']['no'] = 'nē';
$lng['general']['next'] = 'Tālāk &raquo;';
$lng['general']['finish'] = 'Gatavs';
$lng['general']['download'] = 'Lejupielādēt';
$lng['general']['remove'] = 'Aizvākt';
$lng['general']['previous_page'] = '&laquo; Atpakaļ';
$lng['general']['next_page'] = 'Tālāk &raquo;';
$lng['general']['items'] = 'vienības';
$lng['general']['active'] = 'Aktīvs';
$lng['general']['inactive'] = 'Neaktīvs';
$lng['general']['expires'] = 'Termiņš beigsies';
$lng['general']['available'] = 'Pieejams';
$lng['general']['cancel'] = 'Beigt';
$lng['general']['never'] = 'Nekad';
$lng['general']['asc'] = 'Augošā secībā';
$lng['general']['desc'] = 'Dilstošā secībā';
$lng['general']['pending'] = 'Gaidīšanā';
$lng['general']['upload'] = 'Augšupeilādēt';
$lng['general']['processing'] = 'Notiek process, lūdzu uzgaidi ... ';
$lng['general']['help'] = 'Palīdzība';
$lng['general']['hide'] = 'Slēpt';
$lng['general']['link'] = 'Adrese';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Šī ir limitēta demo versija!';
$lng['general']['check_all'] = 'Atzīmēt visu';
$lng['general']['uncheck_all'] = 'Noņemt atzīmēto';
$lng['general']['all'] = 'All';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Tirgotāja lapa';
$lng['users']['store_banner'] = 'Tirgotāja lapas banneris';
$lng['users']['waiting_mail_activation'] = 'Gaida e-pasta aktivizāciju';
$lng['users']['waiting_admin_activation'] = 'Gaida administrācijas apstiprināšanu';
$lng['users']['no_such_id'] = 'Šis lietotājs neeksistē.';

$lng['users']['info']['store_banner'] = 'Bilde kura tiks izmantota augšējai bildei tavai tirgotāja lapai.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Ziņot';
$lng['listings']['report_reason'] = 'Ziņošanas iemesls';
$lng['listings']['meta_info'] = 'Meta informācija';
$lng['listings']['meta_keywords'] = 'Meta atslēgvārdi';
$lng['listings']['meta_description'] = 'Meta Apraksts';
$lng['listings']['not_approved'] = 'Neapstiprināts';
$lng['listings']['approve'] = 'Apstiprināt';
$lng['listings']['choose_payment_method'] = 'Izvēlies maksājuma metodi';

$lng['listings']['choose_category'] = 'Kategoriju';
$lng['listings']['choose_plan'] = 'Sludinājuma tips';
$lng['listings']['enter_ad_details'] = 'Sludinājuma detaļas';
$lng['listings']['ad_details'] = 'Sludinājuma detaļas';
$lng['listings']['add_photos'] = 'Pievienot fotogrāfijas';
$lng['listings']['ad_photos'] = 'Sludinājuma fotogrāfijas';
$lng['listings']['edit_photos'] = 'Labot fotogrāfijas';
$lng['listings']['extra_options'] = 'Ekstra opcijas';
$lng['listings']['review'] = 'Sludinājuma priekšskats';
$lng['listings']['finish'] = 'Gatavs';
$lng['listings']['next_step'] = 'Nākamais solis &raquo;';
$lng['listings']['included'] = 'Iekļauts';
$lng['listings']['finalize'] = 'Pabeigt';
$lng['listings']['zip'] = 'Pasta indeks';
$lng['listings']['add_to_favourites'] = 'Pievienot favorītiem';
$lng['listings']['confirm_add_to_fav'] = 'Uzmanību, tu neesi ielogojies! Favorītu saraksts būs pagaidu!';
$lng['listings']['add_to_fav_done'] = 'Sludinājums tika pievienots favorītu sarakstam!';
$lng['listings']['confirm_delete_favourite'] = 'Tiešām vēlies dzēst favorīta sludinājumu?';
$lng['listings']['no_favourites'] = 'Nav favorītu sludinājumu';
$lng['listings']['extra_options'] = 'Extra opcijas';
$lng['listings']['highlited'] = 'Iezīmēts';
$lng['listings']['priority'] = 'Prioritāte';
$lng['listings']['video'] = 'Video sludinājumi';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video gaidīšanā';
$lng['listings']['video_code'] = 'Video kods';
$lng['listings']['total'] = 'Kopā';
$lng['listings']['approve_ad'] = 'Apstiprināt sludinājumu';
$lng['listings']['finalize_later'] = 'Pabeigt vēlāk';
$lng['listings']['click_to_upload'] = 'Spied, lai augšupielādētu';
$lng['listings']['files_uploaded'] = ' fotogrāfijas no ';
$lng['listings']['allowed'] = ' atļautajām!';
$lng['listings']['limit_reached'] = ' Maksimālo fotogrāfiju limits ir izsmelts!';
$lng['listings']['edit_options'] = 'Labot sludinājuma opcijas';
$lng['listings']['view_store'] = 'Skatīt tirgotāja lapu';
$lng['listings']['edit_ad_options'] = 'Labot sludinājuma opcijas';
$lng['listings']['no_extra_options_selected'] = 'Ekstra opcijas nav izvēlētas!';
$lng['listings']['highlited_listings'] = 'Iezīmēti sludinājumi';
$lng['listings']['for_listing'] = 'sludinājumam ';
$lng['listings']['expires_on'] = 'Beigsies termiņš';
$lng['listings']['expired_on'] = 'Beidzās termiņš';
$lng['listings']['pending_ad'] = 'Sludinājums gaidīšanā';
$lng['listings']['pending_highlited'] = 'Iezīmēšana gaidīšanā';
$lng['listings']['pending_featured'] = 'Izcelšana gaidīšanā';
$lng['listings']['pending_priority'] = 'Prioritāte gaidīšanā';
$lng['listings']['enter_coupon'] = 'Ievadi atlaides kodu';
$lng['listings']['discount'] = 'Atlaide';
$lng['listings']['select_plan'] = 'Izvēlies sludinājuma tipu';
$lng['listings']['pending_subscription'] = 'Abonēšana gaidīšanā';
$lng['listings']['remove_favourite'] = 'Aizvākt favorītu';

$lng['listings']['order_up'] = 'Uz augšu';
$lng['listings']['order_down'] = 'Uz leju';

$lng['listings']['errors']['invalid_youtube_video'] = 'Nepareizs youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonēšana';
$lng['useraccount']['no_package'] = 'Nav sludinājuma tips';
$lng['useraccount']['packages'] = 'Sludinājuma tipi';
$lng['useraccount']['date_start'] = 'Sākuma datums';
$lng['useraccount']['date_end'] = 'Beigu datums';
$lng['useraccount']['remaining_ads'] = 'Atlikušie sludinājumi';
$lng['useraccount']['account_type'] = 'Konta tips';
$lng['useraccount']['unfinished_listings'] = 'Nepabeigti sludinājumi';
$lng['useraccount']['confirm_delete_subscription'] = 'Tiešām vēlies aizvākt šo abonēšanu';
$lng['useraccount']['buy_store'] = 'Pirkt tirgotāja lapu';
$lng['useraccount']['bulk_uploads'] = 'Masu augšupielādes';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonēšana';
$lng['packages']['ads'] = 'Sludinājumi';
$lng['packages']['name'] = 'Vārds';
$lng['packages']['details'] = 'Detaļas';
$lng['packages']['no_ads'] = 'Sludinājumu skaits';
$lng['packages']['subscription_time'] = 'Abonēšanas laiks';
$lng['packages']['no_pictures'] = 'Atļautās fotogrāfijas';
$lng['packages']['no_words'] = 'Vārdu skaits';
$lng['packages']['ads_availability'] = 'Sludinājumu pieejamība';
$lng['packages']['featured'] = 'Izcelts';
$lng['packages']['highlited'] = 'Iezīmēts';
$lng['packages']['priority'] = 'Prioritāte';
$lng['packages']['video'] = 'Video Sludinājumi';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonēšana';
$lng['order_history']['post_listing'] = 'Publicēt sludinājumu';
$lng['order_history']['renew_listing'] = 'Atjaunot sludinājumu';
$lng['order_history']['feature_listing'] = 'Izcelt sludinājumu';
$lng['order_history']['subscribe_to_package'] = 'Abonēt sludinājuma tipu';
$lng['order_history']['complete_payment'] = 'Pabeigt apmaksu';
$lng['order_history']['complete_payment_for'] = 'Pabeigt maksājumu';
$lng['order_history']['details'] = 'Detaļas';
$lng['order_history']['subscription_no'] = 'Abonēšanas numurs';
$lng['order_history']['highlited'] = 'Iezīmēts sludinājums';
$lng['order_history']['priority'] = 'Prioritāte';
$lng['order_history']['video'] = 'Video Sludinājumi';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Izvēlies sludinājumu tipu!';
$lng['buy_package']['error']['choose_processor'] = 'Izvēlies maksājuma tipu!';
$lng['buy_package']['error']['invalid_processor'] = 'Nepareizs maksājuma process!';
$lng['buy_package']['error']['invalid_package'] = 'Nepareizs sludinājuma tips!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Nepareiza Paypal transakcija!';
$lng['2co']['invalid_transaction'] = 'Nepareiza 2Checkout transakcija!';
$lng['moneybookers']['invalid_transaction'] = 'Nepareiza Moneybookers transakcijan!';
$lng['authorize']['invalid_transaction'] = 'Nepareiza Authorize.net transakcija!';
$lng['manual']['invalid_transaction'] = 'Nepareiza transakcija!';

$lng['paypal']['transaction_canceled'] = 'Paypal transakcija atcelta!';
$lng['2co']['transaction_canceled'] = '2Checkout transakcija atcelta!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transakcija atcelta!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transakcija atcelta!';
$lng['manual']['transaction_canceled'] = 'Transakcija atcelta!';
$lng['epay']['transaction_canceled'] = 'ePay transakcija atcelta!';

$lng['payments']['transaction_already_processed'] = 'Transakcija jau tika veikta!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Apstiprināt abonēšanu';
$lng['subscribe']['payment_method'] = 'Maksāšanas metode';
$lng['subscribe']['renew_subscription'] = 'Atjaunot abonēšanu';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopēt e-pastu: ';
$lng['bcc_mails']['from'] = 'No: ';
$lng['bcc_mails']['to'] = 'Uz: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Masu augšupielādes statuss: ';
$lng['ie']['successfully'] = 'sludinājumi pievienoti';
$lng['ie']['failed'] = 'atcelts';
$lng['ie']['uploaded_listings'] = 'Augšupielādēto sludinājumu saraksts:';
$lng['ie']['errors']['upload_import_file'] = 'Augšupielādē failu, kuru importēt!';
$lng['ie']['errors']['incorrect_file_type'] = 'Nepareizs faila tips! Faila tipam jābūt: ';
$lng['ie']['errors']['could_not_open_file'] = 'Nevar atvērt failu!';
$lng['ie']['errors']['choose_categ'] = 'Izvēlies kategoriju!';
$lng['ie']['errors']['could_not_save_file'] = 'Nevar lejupielādēt failu: ';
$lng['ie']['errors']['required_field_missing'] = 'Fails pazudis: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Nepareizi datu elemnti rindai nr: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Izvēlies dīleri';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Vietas meklēšana';
$lng['areasearch']['all_locations'] = 'Visas atrašanās vietas';
$lng['areasearch']['exact_location'] = 'Tieša atrašnās vieta';
$lng['areasearch']['around'] = 'aptuveni';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Jā';
$lng['general']['No'] = 'Nē';
$lng['general']['or'] = 'vai';
$lng['general']['in'] = 'iekš';
$lng['general']['by'] = 'no';
$lng['general']['close_window'] = 'Aizvērt logu';
$lng['general']['more_options'] = 'Vairāk opcijas &raquo;';
$lng['general']['less_options'] = '&laquo; mazāk opcijas';
$lng['general']['send'] = 'Sūtīt';
$lng['general']['save'] = 'Saglabāt';
$lng['general']['for'] = 'priekš';
$lng['general']['to'] = 'kam';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Atzīmēt kā izīrēts';
$lng['listings']['mark_unrented'] = 'Noņemt atzīmi, kā izīrēts';
$lng['listings']['rented'] = 'Izīrēts';
$lng['listings']['your_info'] = 'Tava informācija';
//******
$lng['listings']['email'] = 'Tava e-pasta adrese';
$lng['listings']['name'] = 'Tavs vārds';

$lng['listings']['listing_deleted'] = 'Tavs sludinājums tika dzēsts!';
$lng['listings']['post_without_login'] = 'Publicēt bez reģistrācijas';
$lng['listings']['waiting_activation'] = 'Gaida aktivizāciju';
$lng['listings']['waiting_admin_approval'] = 'Gaida administrācijas apstiprināšanu';
$lng['listings']['dont_need_account'] = 'Nevēlies reģistrēties? Publicē sludinājumu tāpat!';
$lng['listings']['post_your_ad'] = 'Pievienot sludinājumu!';
$lng['listings']['posted'] = 'Pievienots';
$lng['listings']['select_subscription'] = 'Izvēlies abonēšanu';
$lng['listings']['choose_subscription'] = 'Izvēlies abonēšanu';
$lng['listings']['inactive_listings'] = 'Neaktīvi sludinājumi';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Izvērstā meklēšana';
$lng['search']['refine_by_keyword'] = 'Izvērstā meklēšana ar atslēgas vārdu';
$lng['search']['showing'] = 'Rāda';
$lng['search']['more'] = 'Vairāk ...';
$lng['search']['less'] = 'Mazāk ...';
$lng['search']['search_for'] = 'Meklēt';
$lng['search']['save_your_search'] = 'Saglabāt meklēšanu';
$lng['search']['save'] = 'Saglabāt';
$lng['search']['search_saved'] = 'Tava meklēšana tika saglabāta!';
$lng['search']['must_login_to_save_search'] = 'Tev ir jāielogojas savā kontā,lai saglabātu meklēšanu!';
$lng['search']['view_search'] = 'Skatīt meklēšanu';
$lng['search']['all_categories'] = 'Visas kategorijas';
$lng['search']['more_than'] = 'vairāk par';
$lng['search']['less_than'] = 'mazāk par';

$lng['search']['error']['cannot_save_empty_search'] = 'Jūsu meklēšana nevar tikt saglabāta!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Saglabātās meklēšanas';
$lng['useraccount']['view_saved_searches'] = 'Skatīt saglabātās meklēšanas';
$lng['useraccount']['no_saved_searches'] = 'Nav saglabāto meklēšanu';
$lng['useraccount']['recurring'] = 'Atkārtojas';
$lng['useraccount']['date_renew'] = 'Atjaunošanas datums';
$lng['useraccount']['logged_in_as'] = 'Tu esi ienācis kā ';
$lng['useraccount']['subscriptions'] = 'Abonēšana';

$lng['users']['activate_account'] = 'Aktīvs konts';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Pievienot abonēšanu';
$lng['subscriptions']['package'] = 'Abonēšana';
$lng['subscriptions']['remaining_ads'] = 'Atlikušie sludinājumi';
$lng['subscriptions']['recurring'] = 'Atkārtojas';
$lng['subscriptions']['date_start'] = 'Sākuma datums';
$lng['subscriptions']['date_end'] = 'Beigu datums';
$lng['subscriptions']['date_renew'] = 'Atjaunošanas datums';
$lng['subscriptions']['confirm_delete'] = 'Tiešām vēlies dzēst abonēšanu?';
$lng['subscriptions']['no_subscriptions'] = 'Nekas nav abonēts';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Tev vēl nav konta?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Iespējot regulāros maksājumus par šo abonementu';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Sekojoši obligātie lauki ir pazuduši: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Pirkt tirgotāja lapu';


$lng['images']['errors']['max_photos'] = 'Fotogrāfiju maksimālais skaits ir sasniegts!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-pasta ziņojums';
$lng['alerts']['email_alerts'] = 'E-pasta ziņojumi';
$lng['alerts']['no_alerts'] = 'Nav e-pasta ziņojumu';
$lng['alerts']['view_email_alerts'] = 'Skatīt tavus e-pasta ziņojumus';
$lng['alerts']['send_email_alerts'] = 'Sūtīt e-pasta ziņojumus';
$lng['alerts']['immediately'] = 'Nekavējoties';
$lng['alerts']['daily'] = 'Reizi dienā';
$lng['alerts']['weekly'] = 'Reizi nedēļā';
$lng['alerts']['your_email'] = 'tava e-pasta adrese';
$lng['alerts']['create_alert'] = 'Izveidot ziņojumu';
$lng['alerts']['email_alert_info'] = 'Saņemt e-pasta paziņojumu, kad ir parādījies jauns sludinājums šai meklēšanai.';
$lng['alerts']['alert_added'] = 'Tavs ziņojums tika izveidots!';
$lng['alerts']['alert_added_activate'] = 'Tulīt tu saņemsi e-pastu uz <b>::EMAIL::</b>. Uzspied uz adreses e-pastā, lai aktivizētu e-pasta ziņojumus!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Meklēt';
$lng['alerts']['keyword'] = 'atslēgvārds';
$lng['alerts']['frequency'] = 'Ziņojuma biežums';
$lng['alerts']['alert_activated'] = 'Tvas ziņojums tika aktivizēts! Tagat tu saņemsi e-pasta ziņojumus savā e-pastā.';
$lng['alerts']['alert_unsubscribed'] = 'Tavs ziņojums tika dzēsts!';
$lng['alerts']['started_on'] = 'Sākās';
$lng['alerts']['no_terms_searched'] = 'Nav sakritību šai meklēšanai!';
$lng['alerts']['no_listings'] = 'Nav sludinājumu šim ziņpjumam!';

$lng['alerts']['error']['email_required'] = 'Ievadi e-pasta adresi ziņojumiem!';
$lng['alerts']['error']['invalid_email'] = 'Nepareizs ziņijumu saņemšanas e-pasts!';
$lng['alerts']['error']['invalid_frequency'] = 'Nepareizs ziņojumu biežums!';
$lng['alerts']['error']['login_required'] = 'Lūdzu <a href="::LINK::">ielogojies</a> , lai varētu reģistrēt ziņojumu!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Lūdzu, izvēlieties vismaz vienu meklēšanas atslēgvārdu, izņemot kategoriju!';
$lng['alerts']['error']['invalid_confirmation'] = 'Nepareiza ziņijuma apstiprināšana!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Nederīgs abonēšanas atcelšanas pieprasījums!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Līzinga kalkulators';
$lng_loancalc['sale_price'] = 'Cena';
$lng_loancalc['down_payment'] = 'Pirmā iemaksa';
$lng_loancalc['trade_in_value'] = 'Tirdzniecības vērtība';
$lng_loancalc['loan_amount'] = 'Līzinga summa';
$lng_loancalc['sales_tax'] = 'Nodokļi';
$lng_loancalc['interest_rate'] = 'Procentu likme';
$lng_loancalc['loan_term'] = 'Līzinga termiņš';
$lng_loancalc['months'] = 'mēneši';
$lng_loancalc['years'] = 'gadi';
$lng_loancalc['or'] = 'vai';
$lng_loancalc['monthly_payment'] = 'Ikmēneša maksājums';
$lng_loancalc['calculate'] = 'Aprēķināt';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Komentāri';
$lng_comments['make_a_comment'] = 'Izveidot komentāru';
$lng_comments['login_to_post'] = 'Lūdzu <a href="::LOGIN_LINK::">ielogojies</a>, lai varētu pievienot komentāru.';

$lng_comments['name'] = 'Vārds';
$lng_comments['email'] = 'E-pasts';
$lng_comments['website'] = 'Mājas lapa';
$lng_comments['submit_comment'] = 'Pievienot komentāru';

$lng_comments['error']['name_missing'] = 'Lūdzu ievadi savu vārdu!';
$lng_comments['error']['content_missing'] = 'Lūdzu ievadi komentāru!';
$lng_comments['error']['website_missing'] = 'Lūdzu ievadi mājas lapu!';
$lng_comments['error']['email_missing'] = 'Lūdzu ievadi e-pastu!';
$lng_comments['error']['listing_id_missing'] = 'Nepareizs komentāra saturs!';

$lng_comments['error']['invalid_email'] = 'Nepareiza e-pasta adrese!';
$lng_comments['error']['invalid_website'] = 'Nepareiza mājas lapa!';
$lng_comments['errors']['badwords'] = 'Tavs komentārs satur aizliegtus vārdus! Izlabo savu komentāru!';

$lng_comments['info']['comment_added'] = 'Komentārs tika pievienots! Spied <a id="newad">šeit</a>, ja vēlies pievienot vēl.';
$lng_comments['info']['comment_pending'] = 'Tavs komentārs gaida administrācijas apstiprināšanu.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'TĀLĀK &raquo;';
$lng['tb']['prev'] = '&laquo; ATPAKAĻ';
$lng['tb']['close'] = 'AIZVĒRT';
$lng['tb']['or_esc'] = 'vai ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Vēstules';
$lng['messages']['confirm_delete_all'] = 'Tiešām vēlies dzēst izvēlētās vēstules?';
$lng['messages']['listing'] = 'Sludinājums';
$lng['messages']['no_messages'] = 'Nav vēstuļu';
$lng['general']['reply'] = 'Atbildēt';
$lng['messages']['message'] = 'Ziņa';
$lng['messages']['from'] = 'No';
$lng['messages']['to'] = 'Kam';
$lng['messages']['on'] = 'Uz';
$lng['messages']['view_thread'] = 'Skatīt ierakstu';
$lng['messages']['started_for_listing'] = 'Sākās sludinājumam';
$lng['messages']['view_complete_message'] = 'Skatīt pilnu ziņu te';
$lng['messages']['message_history'] = 'Ziņu vēsture';
$lng['messages']['yourself'] = 'Tu';
$lng['messages']['report_spam'] = 'Ziņot par spamu';
$lng['messages']['reported_as_spam'] = 'Ziņots par spamu';
$lng['messages']['confirm_report_spam'] = 'Tiešām vēlies ziņot šo vēstuli kā spamu?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Nepareizs sludinājuma id';
$lng['listings']['show_map'] = 'Rādīt karti';
$lng['listings']['hide_map'] = 'Slēpt karti';
$lng['listings']['see_full_listing'] = 'Skatīt visu sludinājumu';
$lng['listings']['list'] = 'Saraksts';
$lng['listings']['gallery'] = 'Fotogrāfijas';
$lng['listings']['remove_fav_done'] = 'Sludinājums tika aizvākts no favorītu saraksta!';
$lng['search']['high_no_results'] = 'Jūsu meklēšanas rezultātu skaits ir ļoti liels. Ir izlasīti svarīgākie rezultāti no tavas meklēšanas. Lūdzu pamainiet meklēšanas kritērijus, lai iegūtu mazāku un precīzāku meklēšanas rezultātu!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Šī e-pasta adrese nav atļauta!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Jums nav atļauts izmantot šo abonementu vairs, maksimālais lietošanas skaits ir sasniegts!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Izvēlies atrašanās vietu';
$lng['location']['choose'] = 'Izvēlies';
$lng['location']['change'] = 'Mainīt';
$lng['location']['all_locations'] = 'Visas atrašanās vietas';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategori';
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
