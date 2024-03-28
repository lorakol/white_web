<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Kezdőlap';
$lng['navbar']['login'] = 'Bejelentkezés';
$lng['navbar']['logout'] = 'Kijelentkezés';
$lng['navbar']['recent_ads'] = 'Hírdetések';
$lng['navbar']['register'] = 'Regisztráció';
$lng['navbar']['submit_ad'] = 'Hirdetés feladása';
$lng['navbar']['editad'] = 'Hirdetés szerkesztése';
$lng['navbar']['my_account'] = 'Fiókom';
$lng['navbar']['administrator_panel'] = 'Adminisztrációs Panel';
$lng['navbar']['contact'] = 'Kapcsolat';
$lng['navbar']['password_recovery'] = 'Jelszó frissítés';
$lng['navbar']['renew_listing'] = 'Hirdetés frissítése';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Bevitel';
$lng['general']['search'] = 'Keresés';
$lng['general']['contact'] = 'Kapcsolat';
$lng['general']['activeads'] = 'Akítv hirdetések';
$lng['general']['activead'] = 'Akítv hirdetés';
$lng['general']['subcats'] = 'alkategóriák';
$lng['general']['subcat'] = 'alkategória';
$lng['general']['view_ads'] = 'Hirdetések megtekintése';
$lng['general']['back'] = 'Vissza';
$lng['general']['goto'] = 'Ugrás';
$lng['general']['page'] = 'Oldal';
$lng['general']['of'] = '/';
$lng['general']['other'] = 'Egyéb';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Hozzáad';
$lng['general']['delete_all'] = 'Kijelölés törlése';
$lng['general']['action'] = 'Művelet';
$lng['general']['edit'] = 'Módosítás';
$lng['general']['delete'] = 'Törlés';
$lng['general']['total'] = 'Összesen';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'Ingyenes';
$lng['general']['not_authorized'] = 'Nincs jogosultsága az oldal megtekintéséhez!';
$lng['general']['access_restricted'] = 'Az oldal megtekintéséhez való hozzáférése megtagadva!';
$lng['general']['featured_ads'] = 'Kiemelt hirdetések';
$lng['general']['latest_ads'] = 'Legfrissebb hirdetések';
$lng['general']['quick_search'] = 'Gyors keresés';
$lng['general']['go'] = 'Ugrás';
$lng['general']['unlimited'] = 'Korlátlan';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Azonos nevű fájl már létezik és nem írható felül!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Nem jogosult nagyobb fájl feltöltésére, mint ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'A kép túl nagy méretű! Legfeljebb a következő méretű fájl tölthető fel ::MAX_FILE_WIDTH::px szélesség és maximum ::MAX_FILE_HEIGHT::px magasság !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'A fájl feltöltése nem sikerült!';
$lng['images']['errors']['no_file'] = 'Válassza ki a feltöltendő fájlt!';
$lng['images']['errors']['no_folder'] = 'A feltöltési könyvtár nem létezik!';
$lng['images']['errors']['folder_not_writeable'] = 'A feltöltési könyvtár nem írható!';
$lng['images']['errors']['file_type_not_accepted'] = 'A feltöltött fájl nem képfájl vagy nem támogatott formátum!';
$lng['images']['errors']['error'] = 'Hiba merült fel a fájl feltöltésekor. A hiba: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Az ikonfeltöltési könyvtár nem létezik!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Az ikonfeltöltési könyvtár nem írható!';
$lng['images']['errors']['no_jpg_support'] = 'A JPG nem támogatott!';
$lng['images']['errors']['no_png_support'] = 'A PNG nem támogatott!';
$lng['images']['errors']['no_gif_support'] = 'A GIF nem támogatott!';
$lng['images']['errors']['jpg_create_error'] = 'Hiba a forrásból történő JPG írás során!';
$lng['images']['errors']['png_create_error'] = 'Hiba a forrásból történő PNG írás során!';
$lng['images']['errors']['gif_create_error'] = 'Hiba a forrásból történő GIF írás során!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Bejelentkezés';
$lng['login']['logout'] = 'Kijelentkezés';
$lng['login']['username'] = 'Felhasználónév';
$lng['login']['password'] = 'Jelszó';
$lng['login']['forgot_pass'] = 'Elfelejtette a jelszavát?';
$lng['login']['click_here'] = 'Kattintson ide!';

$lng['login']['errors']['password_missing'] = 'Írja be a jelszavát!';
$lng['login']['errors']['username_missing'] = 'Írja be a felhasználónevét!';
$lng['login']['errors']['username_invalid'] = 'A felhasználónév nem létezik!';
$lng['login']['errors']['invalid_username_pass'] = 'Nem létező felhasználónév vagy jelszó!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Kijelentkezés';
$lng['logout']['loggedout'] = 'Kijelentkezett!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Regisztráció';
$lng['users']['repeat_password'] = 'Jelszó megismétlése';
$lng['users']['image_verification_info'] = 'Írja be a képen látott szöveget.<br /> A lehetséges karakterek betűk a-tól h-ig <br /> és számok 1-től 9-ig.';
$lng['users']['already_logged_in'] = 'Be van jelentkezve!';
$lng['users']['select'] = 'Válasszon';

$lng['users']['info']['activate_account'] = 'Egy e-mail-t küldtünk a címére. Kövesse az abban található utasításokat a fiókja aktiválásához.';
$lng['users']['info']['welcome_user'] = 'A fiókja elkészült. Kérem <a href="login.php"> jelentkezzen be </a> fiókjába!';
$lng['users']['info']['awaiting_admin_verification'] = 'A fiókja zárolva van és adminisztrátori hitelesítésre vár. E-mailben értesítjük, amint a fiókja aktiválásra kerül.';
$lng['users']['info']['account_info_updated'] = 'A fiókinformációi módosításra kerültek!';
$lng['users']['info']['password_changed'] = 'A jelszava megváltozott!';
$lng['users']['info']['account_activated'] = 'A fiókja aktiválásra került! Kérem <a href="login.php"> jelentkezzen be </a> fiókjába.';

$lng['users']['errors']['username_missing'] = 'Írja be a felhasználónevet!';
$lng['users']['errors']['invalid_username'] = 'Nem létező felhasználónév!';
$lng['users']['errors']['username_exists'] = 'A felhasználónév már létezik! Kérjük jelentkezzen be, ha már van fiókja!';
$lng['users']['errors']['email_missing'] = 'Írja be az e-mail címét!';
$lng['users']['errors']['invalid_email'] = 'Nem létező e-mail cím!';
$lng['users']['errors']['passwords_dont_match'] = 'A jelszó nem megfelelő!';
$lng['users']['errors']['email_exists'] = 'Az e-mail cím már használatban van! Kérjük jelentkezzen be, ha már van fiókja!';
$lng['users']['errors']['password_missing'] = 'Írja be a jelszót!';
$lng['users']['errors']['invalid_validation_string'] = 'Helytelen hitelesítő lánc!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Nem létező fiók vagy aktivációs kulcs! Lépjen kapcsolatba az adminisztrátorral!';
$lng['users']['errors']['account_already_active'] = 'A fiókja aktív!';



// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Hirdetés';
$lng['listings']['category'] = 'Kategória';
$lng['listings']['package'] = 'Hirdetői fiók';
$lng['listings']['price'] = 'Ár';
$lng['listings']['ad_description'] = 'Hirdetés Leírása';
$lng['listings']['title'] = 'Cím';
$lng['listings']['description'] = 'Leírás';
$lng['listings']['image'] = 'Kép';
$lng['listings']['words_left'] = 'szót írhat még';
$lng['listings']['enter_photos'] = 'Képek hozzáadása';
$lng['listings']['ad_information'] = 'Hirdetés Részletei';
$lng['listings']['free'] = 'Ingyenes';
$lng['listings']['details'] = 'Részletek';
$lng['listings']['stock_no'] = 'Azonosító';
$lng['listings']['location'] = 'Hely';
$lng['listings']['contact_info'] = 'Kapcsolatfelvétel a hirdetővel';
$lng['listings']['email_seller'] = 'E-mail küldése a hirdetőnek';
$lng['listings']['no_recent_ads'] = 'Nincs újabb hirdetés';
$lng['listings']['no_ads'] = 'Nincs hirdetés a kategóriában';
$lng['listings']['added_on'] = 'Feladva';
$lng['listings']['send_mail'] = 'Üzenet küldése a felhasználónak';
$lng['listings']['details'] = 'Részletek';
$lng['listings']['user'] = 'Felhasználó';
$lng['listings']['price'] = 'Ár';
$lng['listings']['confirm_delete'] = 'Biztos benne, hogy törli a hirdetést?';
$lng['listings']['confirm_delete_all'] = 'Biztos benne, hogy törli a választott hirdetést?';
$lng['listings']['all'] = 'Minden hirdetés';
$lng['listings']['active_listings'] = 'Aktív hirdetés(ek)';
$lng['listings']['pending_listings'] = 'Függő hirdetés(ek)';
$lng['listings']['featured_listings'] = 'Kiemelt hirdetés(ek)';
$lng['listings']['expired_listings'] = 'Lejárt hirdetés(ek)';
$lng['listings']['active'] = 'Aktív';
$lng['listings']['inactive'] = 'Inaktív';
$lng['listings']['pending'] = 'Függő';
$lng['listings']['featured'] = 'Kiemelt főoldalra';
$lng['listings']['expired'] = 'Lejárt';
$lng['listings']['order_by_date'] = 'Dátum szerinti rendezés';
$lng['listings']['order_by_category'] = 'Kategória szerinti rendezés';
$lng['listings']['order_by_make'] = 'Létrehozás szerinti rendezés';
$lng['listings']['order_by_price'] = 'Ár szerinti rendezés';
$lng['listings']['order_by_views'] = 'Nézettség szerinti rendezés';
$lng['listings']['order_asc'] = 'Növekvő';
$lng['listings']['order_desc'] = 'Csökkenő';
$lng['listings']['id'] = 'Azonosító';
$lng['listings']['views'] = 'Megtekintve';
$lng['listings']['date'] = 'Dátum';
$lng['listings']['no_listings'] = 'Nincs hirdetés';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'A hirdetés nem létezik!';
$lng['listings']['mark_sold'] = 'Kijelölés eladottként';
$lng['listings']['mark_unsold'] = 'Kijelölés feloldása eladottként';
$lng['listings']['sold'] = 'Eladva';
$lng['listings']['feature'] = 'Kiemelt';
$lng['listings']['expired_on'] = 'Lejár';
$lng['listings']['renew'] = 'Megújít';
$lng['listings']['print_page'] = 'Nyomtatás';
$lng['listings']['recommend_this'] = 'Ajánlás';
$lng['listings']['more_listings'] = 'A hirdető további hirdetései';
$lng['listings']['all_listings_for'] = 'Minden hirdetés';
$lng['listings']['free_category'] = 'Ingyenes kategória';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Biztosan törölni akarja a hozzáadott képet?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='A szavak száma túllépte a megengedettet! A hozzászólás maximális hossza ::MAX:: szó'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='A hirdetése tiltott szavakat tartalmaz! Módosítsa a tartalmat!';
$lng['listings']['errors']['title_missing']='Adjon címet a hirdetésnek!';
$lng['listings']['errors']['category_missing']='Válasszon kategóriát!';
$lng['listings']['errors']['invalid_category']='Helytelen kategória!';
$lng['listings']['errors']['package_missing']='Válasszon csomagot!';
$lng['listings']['errors']['invalid_package']='Helytelen csomag!';
$lng['listings']['errors']['content_missing']='Adjon tartalmat a hirdetésnek!';
$lng['listings']['errors']['invalid_price']='Helytelen ár!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Alacsony ár';
$lng['quick_search']['price_high'] = 'Magas ár';


// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Új hirdetés hozzáadása';
$lng['useraccount']['browse_your_listings'] = 'Hirdetés kezelő';
$lng['useraccount']['modify_account_info'] = 'Személyes beállítások';
$lng['useraccount']['order_history'] = 'Hirdetési előzmények';
$lng['useraccount']['total_listings'] = 'Összes hirdetés';
$lng['useraccount']['total_views'] = 'Összes megtekintés';
$lng['useraccount']['active_listings'] = 'Aktív hirdetés(ek)';
$lng['useraccount']['pending_listings'] = 'Függőben lévő hirdetés(ek)';
$lng['useraccount']['last_login'] = 'Utolsó bejelentkezés';
$lng['useraccount']['last_login_ip'] = 'Utolsó IP bejelentkezéskor';
$lng['useraccount']['expired_listings'] = 'Lejárt hirdetés(ek)';
$lng['useraccount']['statistics'] = 'Saját statisztika és csomag';
$lng['useraccount']['welcome'] = 'Üdvözöljük!';
$lng['useraccount']['contact_name'] = 'Kapcsolattartó neve';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Jelszó';
$lng['useraccount']['repeat_password'] = 'Jelszó megismétlése';
$lng['useraccount']['change_password'] = 'Jelszó megváltoztatása';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'és';
$lng['advanced_search']['price_min'] = 'Min ár';
$lng['advanced_search']['price_max'] = 'Max ár';
$lng['advanced_search']['word'] = 'Kulcsszó';
$lng['advanced_search']['sort_by'] = 'Rendezés';
$lng['advanced_search']['sort_by_price'] = 'Rendezés ár szerint';
$lng['advanced_search']['sort_by_date'] = 'Rendezés dátum szerint';
$lng['advanced_search']['sort_by_make'] = 'Rendezés feltöltés szerint';
$lng['advanced_search']['sort_descendant'] = 'Rendezés csökkenő sorrendben';
$lng['advanced_search']['sort_ascendant'] = 'Rendezés növekvő sorrendben';
$lng['advanced_search']['only_ads_with_pic'] = 'Csak képes hirdetések';
$lng['advanced_search']['no_results'] = 'Nem található a keresésének megfelelő hirdetés!';
$lng['advanced_search']['multiple_ads_matching'] = '::NO_ADS:: számú a keresésének megfelelő hirdetés található!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Egy a keresésének megfelelő hirdetés található!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Név';
$lng['contact']['subject'] = 'Tárgy';
$lng['contact']['email'] = 'E-mail';
$lng['contact']['webpage'] = 'Weboldal';
$lng['contact']['comments'] = 'Üzenet';
$lng['contact']['message_sent'] = 'Az üzenete elküldésre került!';
$lng['contact']['sending_message_failed'] = 'Az üzenet elküldése sikertelen!';
$lng['contact']['mailto'] = 'Üzenet küldése';

$lng['contact']['error']['name_missing'] = 'Írja be a nevét!';
$lng['contact']['error']['subject_missing'] = 'Írja be a tárgyat!';
$lng['contact']['error']['email_missing'] = 'Írja be az e-mail címét!';
$lng['contact']['error']['invalid_email'] = 'Helytelen e-mail cím!';
$lng['contact']['error']['comments_missing'] = 'Írja be az üzenetét!';
$lng['contact']['error']['invalid_validation_number'] = 'Helytelen hitelesítő szám!';


// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'E-mail cm';
$lng['password_recovery']['new_password'] = 'Új jelszó';
$lng['password_recovery']['repeat_new_password'] = 'AZ új jelszó megismétlése';
$lng['password_recovery']['invalid_key'] = 'Helytelen kulcs';

$lng['password_recovery']['email_missing'] = 'Írja be az e-mail címét!';
$lng['password_recovery']['invalid_email'] = 'Helytelen e-mail cím';
$lng['password_recovery']['email_inexistent'] = 'Nincs regisztrált felhasználó az adott e-mail címmel!';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Összeg';
$lng['packages']['words'] = 'Szó/hirdetés';
$lng['packages']['days'] = 'Napig';
$lng['packages']['pictures'] = 'db Kép feltöltése hirdetésenként';
$lng['packages']['picture'] = 'db Kép feltöltése hirdetésenként';
$lng['packages']['available'] = 'Megjelenés az oldalon:';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Folyamat';
$lng['order_history']['amount'] = 'Ár';
$lng['order_history']['completed'] = 'Kész';
$lng['order_history']['not_completed'] = 'Nincs kész';
$lng['order_history']['ad_no'] = 'Hirdetés azonosító';
$lng['order_history']['date'] = 'Dátum';
$lng['order_history']['no_actions'] = 'Nincsenek rendelési adatok';
$lng['order_history']['order_by_date'] = 'Dátum szerinti rendezés';
$lng['order_history']['order_by_amount'] = 'Ár szerinti rendezés';
$lng['order_history']['order_by_processor'] = 'Folyamat szerinti rendezés';
$lng['order_history']['description'] = 'Leírás';
$lng['order_history']['newad'] = 'Új hirdetés'; 
$lng['order_history']['renew'] = 'Frissítés'; 
$lng['order_history']['featured'] = 'Kiemelt hirdetés'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Dátum szerinti rendezés';
$lng['order']['price'] = 'Ár szerinti rendezés';
$lng['order']['title'] = 'Cím szerinti rendezés';
$lng['order']['desc'] = 'Csökkenő';
$lng['order']['asc'] = 'Növekvő';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Hirdetés ajánlása';
$lng['recommend']['your_name'] = 'Ön neve';
$lng['recommend']['your_email'] = 'E-mail címe';
$lng['recommend']['friend_name'] = 'Ismerősének neve';
$lng['recommend']['friend_email'] = 'Ismerősének e-mail címe';
$lng['recommend']['message'] = 'Üzenet küldése ismerősének';


$lng['recommend']['error']['your_name_missing'] = 'Írja ne a nevét!';
$lng['recommend']['error']['your_email_missing'] = 'Írja be az e-mail címét!';
$lng['recommend']['error']['friend_name_missing'] = 'Írja be ismerősének nevét!';
$lng['recommend']['error']['friend_email_missing'] = 'Írja be ismerősének e-mail címnét!';
$lng['recommend']['error']['invalid_email'] = 'Helytelen e-mail cím';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Hirdetések Listája';
$lng['stats']['general'] = 'Általános Információk';



// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Előfizetés';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Állapot';
$lng['general']['favourites'] = 'Kedvencek';
$lng['general']['as'] = 'szerint';
$lng['general']['view'] = 'Megtekint';
$lng['general']['none'] = 'Nincs';
$lng['general']['yes'] = 'igen';
$lng['general']['no'] = 'nem';
$lng['general']['next'] = 'Következő';
$lng['general']['finish'] = 'Vége';
$lng['general']['download'] = 'Letöltés';
$lng['general']['remove'] = 'Eltávolítás';
$lng['general']['previous_page'] = 'Előző';
$lng['general']['next_page'] = 'Következő';
$lng['general']['items'] = 'hirdetés';
$lng['general']['active'] = 'Aktív';
$lng['general']['inactive'] = 'Inaktív';
$lng['general']['expires'] = 'Lejár';
$lng['general']['available'] = 'Hozzáférhető';
$lng['general']['cancel'] = 'Változtat';
$lng['general']['never'] = 'Soha';
$lng['general']['asc'] = 'Növekvő';
$lng['general']['desc'] = 'Csökkenő';
$lng['general']['pending'] = 'Függő';
$lng['general']['upload'] = 'Feltöltés';
$lng['general']['processing'] = 'Folyamatban, kérjük várjon ... ';
$lng['general']['help'] = 'Segítség';
$lng['general']['hide'] = 'Elrejtés';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Ez egy limitált bemutató verzió. Nincs jogosultsága bizonyos beállítások megváltoztatásához!';
$lng['general']['check_all'] = 'Összes kijelölése';
$lng['general']['uncheck_all'] = 'Kijelölés megszüntetése';
$lng['general']['all'] = 'Összes';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Nagykereskedői oldala';
$lng['users']['store_banner'] = 'Nagykereskedői banner';
$lng['users']['waiting_mail_activation'] = 'Várakozás az e-mail aktiválásra.';
$lng['users']['waiting_admin_activation'] = 'Várakozás az adminisztrátori megerősítésre';
$lng['users']['no_such_id'] = 'Ilyen felhasználó nem létezik.';

$lng['users']['info']['store_banner'] = 'A kép, amit a nagykereskedő oldalán főképként alkalmaz.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Sértő/Spam hirdetés jelentése';
$lng['listings']['report_reason'] = 'Jelentés oka';
$lng['listings']['meta_info'] = 'Meta információ';
$lng['listings']['meta_keywords'] = 'Meta szavak';
$lng['listings']['meta_description'] = 'Meta leírás';
$lng['listings']['not_approved'] = 'Nem engedélyezett';
$lng['listings']['approve'] = 'Engedély';
$lng['listings']['choose_payment_method'] = 'Válasszon fizetési módot';

$lng['listings']['choose_category'] = 'Válasszon kategóriát';
$lng['listings']['choose_plan'] = 'Válasszon csomagot';
$lng['listings']['enter_ad_details'] = 'Hirdetési adatok bevitele';
$lng['listings']['ad_details'] = 'Hirdetési adatok';
$lng['listings']['add_photos'] = 'Kép hozzáadása';
$lng['listings']['ad_photos'] = 'Hirdetés kép';
$lng['listings']['edit_photos'] = 'Kép szerkesztése';
$lng['listings']['extra_options'] = 'Kiemelési opciók';
$lng['listings']['review'] = 'Előnézet';
$lng['listings']['finish'] = 'Befejezés';
$lng['listings']['next_step'] = 'Következő lépés';
$lng['listings']['included'] = 'Tartalmaz';
$lng['listings']['finalize'] = 'Befejezés';
$lng['listings']['zip'] = 'Iránytószám';
$lng['listings']['add_to_favourites'] = 'Kedvencekhez ad';
$lng['listings']['confirm_add_to_fav'] = 'Figyelem! Nincs bejelentkezve! A kedvencek listája ideiglenes lesz!';
$lng['listings']['add_to_fav_done'] = 'A hirdetés hozzáadva a kedvencek listához!';
$lng['listings']['confirm_delete_favourite'] = 'Biztosan törölni akarja a kedvenceket?';
$lng['listings']['no_favourites'] = 'Nincs kedvenc hirdetés';
$lng['listings']['extra_options'] = 'Kiemelési opciók';
$lng['listings']['highlited'] = 'Színes háttér';
$lng['listings']['priority'] = 'Előre helyezett';
$lng['listings']['video'] = 'Videó hirdetés';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Függő videó';
$lng['listings']['video_code'] = 'Videó kód';
$lng['listings']['total'] = 'Teljes';
$lng['listings']['approve_ad'] = 'Hirdetés megerősítése';
$lng['listings']['finalize_later'] = 'Befejezés később';
$lng['listings']['click_to_upload'] = 'Kattintson a feltöltésre';
$lng['listings']['files_uploaded'] = ' Összesen kép feltöltve ';
$lng['listings']['allowed'] = 'képek engedélyezve!';
$lng['listings']['limit_reached'] = ' Elérte az engedélyezett maximális számú képet!';
$lng['listings']['edit_options'] = 'Opciók szerkesztése';
$lng['listings']['view_store'] = 'Partnerünk további hirdetései';
$lng['listings']['edit_ad_options'] = 'Hirdetési opciók szerkesztése';
$lng['listings']['no_extra_options_selected'] = 'Nem választott ki kiemelési opciót!';
$lng['listings']['highlited_listings'] = 'Szines kiemelt listázás';
$lng['listings']['for_listing'] = 'Listázási szám';
$lng['listings']['expires_on'] = 'Lejárat';
$lng['listings']['expired_on'] = 'Lejárt';
$lng['listings']['pending_ad'] = 'Függő hirdetés';
$lng['listings']['pending_highlited'] = 'Függő háttér kiemelés';
$lng['listings']['pending_featured'] = 'Függő kiemelt';
$lng['listings']['pending_priority'] = 'Függő előre helyezések';
$lng['listings']['enter_coupon'] = 'Írja be a kedvezmény kódot';
$lng['listings']['discount'] = 'Kedvezmény';
$lng['listings']['select_plan'] = 'Csomag választás';
$lng['listings']['pending_subscription'] = 'Függő előfizetés';
$lng['listings']['remove_favourite'] = 'Kedvencek kiürítése';

$lng['listings']['order_up'] = 'Rendezés fel';
$lng['listings']['order_down'] = 'Rendezés le';

$lng['listings']['errors']['invalid_youtube_video'] = 'Helytelen youtube videó!';


// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Csomagváltás';
$lng['useraccount']['no_package'] = 'Nincs hirdetési csomag';
$lng['useraccount']['packages'] = 'Csomagok';
$lng['useraccount']['date_start'] = 'Kezdő dátum';
$lng['useraccount']['date_end'] = 'Befejező dátum';
$lng['useraccount']['remaining_ads'] = 'Fennmaradó hirdetések';
$lng['useraccount']['account_type'] = 'Fiók típusa';
$lng['useraccount']['unfinished_listings'] = 'Befejezetlen hirdetés(ek)';
$lng['useraccount']['confirm_delete_subscription'] = 'Biztosan törli ezt az előfizetést?';
$lng['useraccount']['buy_store'] = 'Partner oldal előfizetés';
$lng['useraccount']['bulk_uploads'] = 'Tömeges feltöltés';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Előfizetés';
$lng['packages']['ads'] = 'Hirdetések';
$lng['packages']['name'] = 'Név';
$lng['packages']['details'] = 'Adatok';
$lng['packages']['no_ads'] = 'Hirdetések száma';
$lng['packages']['subscription_time'] = 'Előfizetés ideje';
$lng['packages']['no_pictures'] = 'Engedélyezett képek';
$lng['packages']['no_words'] = 'Szavak száma';
$lng['packages']['ads_availability'] = 'Hirdetés érvényessége';
$lng['packages']['featured'] = 'Kiemelt';
$lng['packages']['highlited'] = 'Színes háttér';
$lng['packages']['priority'] = 'Előre helyezett';
$lng['packages']['video'] = 'Videó hirdetés';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Előfizetés';
$lng['order_history']['post_listing'] = 'Hirdetés küldése';
$lng['order_history']['renew_listing'] = 'Hirdetés megújítása';
$lng['order_history']['feature_listing'] = 'Kiemelt hirdetés';
$lng['order_history']['subscribe_to_package'] = 'Előfizetés a csomagra';
$lng['order_history']['complete_payment'] = 'Fizetés befejezése';
$lng['order_history']['complete_payment_for'] = 'Fizetés befejezése';
$lng['order_history']['details'] = 'Adatok';
$lng['order_history']['subscription_no'] = 'Fizetés száma';
$lng['order_history']['highlited'] = 'Színes hátteres hirdetés';
$lng['order_history']['priority'] = 'Előre helyezett';
$lng['order_history']['video'] = 'Videó hirdetés';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Válasszon egy csomagot!';
$lng['buy_package']['error']['choose_processor'] = 'Válasszon fizetési típust!';
$lng['buy_package']['error']['invalid_processor'] = 'Helytelen fizetési folyamat!';
$lng['buy_package']['error']['invalid_package'] = 'Helytelen csomag!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Helytelen Paypal tranzakció!';
$lng['2co']['invalid_transaction'] = 'Helytelen 2Checkout tranzakció!';
$lng['moneybookers']['invalid_transaction'] = 'Helytelen Moneybookers tranzakció!';
$lng['authorize']['invalid_transaction'] = 'Helytelen Authorize.net tranzakció!';
$lng['manual']['invalid_transaction'] = 'Helytelen tranzakció!';

$lng['paypal']['transaction_canceled'] = 'Paypal tranzakció törölve!';
$lng['2co']['transaction_canceled'] = '2Checkout tranzakció törölve!';
$lng['mb']['transaction_canceled'] = 'Moneybookers tranzakció törölve!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net tranzakció törölve!';
$lng['manual']['transaction_canceled'] = 'tranzakció törölve!';
$lng['epay']['transaction_canceled'] = 'ePay tranzakció törölve!';

$lng['payments']['transaction_already_processed'] = 'A tranzakció folyamatban!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Előfizetés megerősítése';
$lng['subscribe']['payment_method'] = 'Fizetési mód';
$lng['subscribe']['renew_subscription'] = 'Előfizetés frissítése';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'E-mail másolása: ';
$lng['bcc_mails']['from'] = 'Feladó: ';
$lng['bcc_mails']['to'] = 'Címzett: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Tömeges feltöltési státusz: ';
$lng['ie']['successfully'] = 'Hirdetés sikeresen hozzáadva';
$lng['ie']['failed'] = 'Meghiúsult';
$lng['ie']['uploaded_listings'] = 'Hirdetési lista feltöltés:';
$lng['ie']['errors']['upload_import_file'] = 'Töltse fel a fájlt, amiből importálni kíván!';
$lng['ie']['errors']['incorrect_file_type'] = 'Helytelen fájltípus! A fájltípus a következő lehet: ';
$lng['ie']['errors']['could_not_open_file'] = 'A fájl nem nyitható meg!';
$lng['ie']['errors']['choose_categ'] = 'Válasszon kategóriát!';
$lng['ie']['errors']['could_not_save_file'] = 'A fájl nem tölthet: ';
$lng['ie']['errors']['required_field_missing'] = 'A szükséges fájl hiányzik: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Helytelen adat a következő sorban: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Válasszon nagykereskedőt';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Keresési terület';
$lng['areasearch']['all_locations'] = 'Minden helyszín';
$lng['areasearch']['exact_location'] = 'Pontos helyszín';
$lng['areasearch']['around'] = 'körül';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Igen';
$lng['general']['No'] = 'Nem';
$lng['general']['or'] = 'vagy';
$lng['general']['in'] = '';
$lng['general']['by'] = 'by';
$lng['general']['close_window'] = 'Ablak bezárása';
$lng['general']['more_options'] = 'Részletes keresés';
$lng['general']['less_options'] = 'Vissza';
$lng['general']['send'] = 'Küldés';
$lng['general']['save'] = 'Mentés';
$lng['general']['for'] = '';
$lng['general']['to'] = '';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Megjlelölés kiadottként';
$lng['listings']['mark_unrented'] = 'Kiadottkénti megjelölés feloldása';
$lng['listings']['rented'] = 'Kiadva';
$lng['listings']['your_info'] = 'Az ön információi';
$lng['listings']['email'] = 'Az ön e-mail címe';
$lng['listings']['name'] = 'Az ön neve';
$lng['listings']['listing_deleted'] = 'A hirdetés törölve!';
$lng['listings']['post_without_login'] = 'Gyors hirdetésfeladás';
$lng['listings']['waiting_activation'] = 'Várakozás az aktiválásra';
$lng['listings']['waiting_admin_approval'] = 'Várakozás az adminisztrátori megerősítésre';
$lng['listings']['dont_need_account'] = 'Nem szeretne regisztrálni? Semmi probléma! <br>Adja fel hirdetését <b>regisztráció nélkül</b>, egyszerűen és ingyen!<br><br><b>Ha regisztrálna, akkor az alábbi előnyökben részesülne:</b><br>- Bármikor szerkeszthetné, törölhetné hirdetéseit<br>- Üzeneteket küldhetne és fogadhatna';
$lng['listings']['post_your_ad'] = 'Adja fel hirdetését!';
$lng['listings']['posted'] = 'Feladva';
$lng['listings']['select_subscription'] = 'Előfizetés kiválasztása';
$lng['listings']['choose_subscription'] = 'Előfizetés választása';
$lng['listings']['inactive_listings'] = 'Inaktív hirdetés';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Részletes keresés';
$lng['search']['refine_by_keyword'] = 'Keresés kulcsszóra';
$lng['search']['showing'] = 'Mutat';
$lng['search']['more'] = 'Több ...';
$lng['search']['less'] = 'Kevesebb ...';
$lng['search']['search_for'] = 'Keresés';
$lng['search']['save_your_search'] = 'Keresés mentése';
$lng['search']['save'] = 'Mentés';
$lng['search']['search_saved'] = 'A keresés elmentve!';
$lng['search']['must_login_to_save_search'] = 'Be kell jelentkeznie a fiókjába a keresés mentéséhez!';
$lng['search']['view_search'] = 'Keresés megtekintése';
$lng['search']['all_categories'] = 'Minden kategória';
$lng['search']['more_than'] = 'Több mint';
$lng['search']['less_than'] = 'Kevesebb mint';

$lng['search']['error']['cannot_save_empty_search'] = 'A keresése nem tartalmaz feltételt, ezért nem menthető!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Mentett keresések';
$lng['useraccount']['view_saved_searches'] = 'Mentett keresések megtekintése';
$lng['useraccount']['no_saved_searches'] = 'Nincs mentett keresés';
$lng['useraccount']['recurring'] = 'Visszatérés';
$lng['useraccount']['date_renew'] = 'Megújítás dátuma';
$lng['useraccount']['logged_in_as'] = 'Üdvözöljük  ';
$lng['useraccount']['subscriptions'] = 'Előfizetések';

$lng['users']['activate_account'] = 'Aktív fiók';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Előfizetés hozzáadása';
$lng['subscriptions']['package'] = 'Csomag';
$lng['subscriptions']['remaining_ads'] = 'Fennmaradó hirdetések';
$lng['subscriptions']['recurring'] = 'Visszatérés';
$lng['subscriptions']['date_start'] = 'Kezdő dátum';
$lng['subscriptions']['date_end'] = 'Befejező dátum';
$lng['subscriptions']['date_renew'] = 'Dátum megújítása';
$lng['subscriptions']['confirm_delete'] = 'Biztosan törölni kívánja az előfizetést?';
$lng['subscriptions']['no_subscriptions'] = 'Nincs előfizetés';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Ön még nem regisztrált?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Engedélyezze a rendszeres előfizetésének a kifizetését';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'A következő szükséges mezők hiányoznak: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Partner oldal vásárlása';


$lng['images']['errors']['max_photos'] = 'Maximális számú kép feltöltve!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Hirdetés figyelő';
$lng['alerts']['email_alerts'] = 'Hirdetés figyelő';
$lng['alerts']['no_alerts'] = 'Nincs E-mail értesítés';
$lng['alerts']['view_email_alerts'] = 'E-mail értesítések megtekintése';
$lng['alerts']['send_email_alerts'] = 'E-mail értesítések küldése';
$lng['alerts']['immediately'] = 'Azonnal';
$lng['alerts']['daily'] = 'Naponta';
$lng['alerts']['weekly'] = 'Hetente';
$lng['alerts']['your_email'] = 'Az ön e-mail címe';
$lng['alerts']['create_alert'] = 'Felíratkozás';
$lng['alerts']['email_alert_info'] = 'Küldjön értesítést, ha a keresett kifejezésre, hirdetést adnak fel!';
$lng['alerts']['alert_added'] = 'A értesítés létrehozva!';
$lng['alerts']['alert_added_activate'] = 'Hamarosan e-mailt fog kapni <b>::EMAIL::</b>. Kérjük kattintson az e-mailre, hogy aktiválja az e-mail értesítését!'; // NE törölje ::EMAIL:: lánc !
$lng['alerts']['search_in'] = 'Keresés';
$lng['alerts']['keyword'] = 'Kulcsszó';
$lng['alerts']['frequency'] = 'Értesítés gyakorisága';
$lng['alerts']['alert_activated'] = 'Az értesítése aktiválásra került! Mostantól értesítő e-maileket fog kapni.';
$lng['alerts']['alert_unsubscribed'] = 'Az értesítése törlésre került!';
$lng['alerts']['started_on'] = 'Kezdődik';
$lng['alerts']['no_terms_searched'] = 'Nincsenek keresési feltételek beállítva!';
$lng['alerts']['no_listings'] = 'Nincs hirdetés ehhez az értesítéshez!';

$lng['alerts']['error']['email_required'] = 'Írja be az e-mail címét az értesítéshez!';
$lng['alerts']['error']['invalid_email'] = 'Helytelen értesítési e-mail cím!';
$lng['alerts']['error']['invalid_frequency'] = 'Helytelen értesítési gyakoriság!';
$lng['alerts']['error']['login_required'] = 'Kérem <a href="::LINK::">jelentkezzen be</a> hogy értesítést állíthasson be!'; // Ne törölje ::LINK:: lánc !
$lng['alerts']['error']['ask_adv_key'] = 'Válasszon legalább egy keresési gombot a kategóriákból!';
$lng['alerts']['error']['invalid_confirmation'] = 'Helytelen értesítés megerősítés!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Helytelen leiratkozó kérelem!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kölcsön kalkulátor';
$lng_loancalc['sale_price'] = 'Eladási ár';
$lng_loancalc['down_payment'] = 'Foglaló';
$lng_loancalc['trade_in_value'] = 'Forgalmi érték';
$lng_loancalc['loan_amount'] = 'Kölcsön összeg';
$lng_loancalc['sales_tax'] = 'Kereskedelmi adó';
$lng_loancalc['interest_rate'] = 'Kamat';
$lng_loancalc['loan_term'] = 'Kölcsön futamidő';
$lng_loancalc['months'] = 'hónap';
$lng_loancalc['years'] = 'év';
$lng_loancalc['or'] = 'vagy';
$lng_loancalc['monthly_payment'] = 'Havi részlet';
$lng_loancalc['calculate'] = 'Számol';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Hozzászólások';
$lng_comments['make_a_comment'] = 'Kérdezzen az eladotól';
$lng_comments['login_to_post'] = 'Kérjük <a href="::LOGIN_LINK::">jelentkezzen be</a> a hozzászolás küldéséhez.';

$lng_comments['name'] = 'Név';
$lng_comments['email'] = 'E-mail';
$lng_comments['website'] = 'Weboldal';
$lng_comments['submit_comment'] = 'Küldés';

$lng_comments['error']['name_missing'] = 'Írja be a nevét!';
$lng_comments['error']['content_missing'] = 'Írja be a  hozzászólását!';
$lng_comments['error']['website_missing'] = 'Írja be a weboldalát!';
$lng_comments['error']['email_missing'] = 'Írja be a e-mail címét!';
$lng_comments['error']['listing_id_missing'] = 'Helytelen hozzászolás tartalom!';

$lng_comments['error']['invalid_email'] = 'Helytelen e-mail cím!';
$lng_comments['error']['invalid_website'] = 'Helytelen weboldal!';
$lng_comments['errors']['badwords'] = 'A hozzászolása tiltott szavakat tartalmaz! Kérjük írja át üzenetét!';

$lng_comments['info']['comment_added'] = 'Hozzászólása elküldve! Kattintson <a id="newad">ide</a> ha további hozzászolást szeretne küldeni.';
$lng_comments['info']['comment_pending'] = 'A hozzászólás függőben van és adminisztrátori engedélyezésre vár.';

// ----------------- end comments module --------------------

// ----------------- pictures module --------------------

$lng['tb']['next'] = 'KÖVETKEZŐ';
$lng['tb']['prev'] = 'ELŐZŐ';
$lng['tb']['close'] = 'BEZÁR';
$lng['tb']['or_esc'] = 'vagy ESC gomb';


$lng['listings']['invalid'] = 'Helytelen hirdetési id';

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Üzenetek';
$lng['messages']['confirm_delete_all'] = 'Biztosan törli a kijelölt üzeneteket?';
$lng['messages']['listing'] = 'Hirdetés';
$lng['messages']['no_messages'] = 'Nincs üzenet';
$lng['general']['reply'] = 'Válasz az üzenetre';
$lng['messages']['message'] = 'Üzenet';
$lng['messages']['from'] = 'Feladó';
$lng['messages']['to'] = 'Címzett';
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'Téma megtekintése';
$lng['messages']['started_for_listing'] = 'Inditott hirdetés';
$lng['messages']['view_complete_message'] = 'Teljes üzenet megtekintése itt';
$lng['messages']['message_history'] = 'Üzenet története';
$lng['messages']['yourself'] = 'Ön';
$lng['messages']['report_spam'] = 'Jelentés spamként';
$lng['messages']['reported_as_spam'] = 'Spamként megjelölve';
$lng['messages']['confirm_report_spam'] = 'Biztosan szeretné jelenteni ezt az üzenetet hogy spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Érvénytelen hirdetés azonosító';
$lng['listings']['show_map'] = 'Térkép megjelenítése';
$lng['listings']['hide_map'] = 'Térkép elrejtése';
$lng['listings']['see_full_listing'] = 'Teljes lista nézése';
$lng['listings']['list'] = 'Lista nézet';
$lng['listings']['gallery'] = 'Galéria nézet';
$lng['listings']['remove_fav_done'] = 'A lista eltávolításra került a kedvencek listából!';
$lng['search']['high_no_results'] = 'A keresésre a találatok száma nagyon magas. Csak a relevánsabb eredmények felsorolása. Kérjük, pontosítsa a keresést tovább csökkentve a találatok számát, a minél több releváns találatokért!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Ez az email cím nem megengedett!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Ön nem használhatja tovább ezt az előfizetést, a maximális számú használatot elérte!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Válasszon helyet';
$lng['location']['choose'] = 'Válasszon';
$lng['location']['change'] = 'Módositás';
$lng['location']['all_locations'] = 'Összes megye';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = 'Kategória';
$lng['location']['save_location'] = 'Hely mentése';

$lng['credits']['credits'] = 'Kredit';
$lng['credits']['credit'] = 'Kredit';
$lng['credits']['pending_credits'] = 'Várakozó kreditek';
$lng['credits']['current_credits'] = 'Jelenlegi kreditek';
$lng['credits']['one_credit_equals'] = 'Egy kredit egyenlő';
$lng['credits']['credits_amount'] = 'Kredit összeg';
$lng['credits']['buy_extra_credits'] = 'Kredit vásárlás';
$lng['credits']['credits_package'] = 'Kredit csomag';
$lng['credits']['select_package'] = 'Válasszon kredit csomagot';
$lng['credits']['choose_package'] = 'Kiválasztott kredit';
$lng['credits']['you_currently_have'] = 'Ön jelenleg ';
$lng['credits']['you_currently_have_no_credits'] = 'Önnek jelenleg nincs kreditje ';
$lng['credits']['pay_using_credits'] = 'Fizessen kredittel';
$lng['credits']['not_enough_credits'] = 'Nincs elég kreditje ehhez!!';
$lng['credits']['scredits'] = 'Kreditek';
$lng['credits']['scredit'] = 'Kredit';



$lng['order_history']['credits_purchase'] = 'Kredit vásárlás';
$lng['order_history']['invalid_order'] = 'Érvénytelen!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Kérem várjon, átirányítjuk!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Kérjük <a href="::LOGIN_LINK::">jelentkezzen be</a> így megtekintheti az elérhetőségeinket!';
$lng['listing']['no_contact_information'] = 'Nincs rendelkezésre álló kapcsolat!';


$lng['navbar']['register_as'] = 'Regisztráljon';
$lng['listings']['all_ads'] = 'Minden hirdetés';
$lng['listings']['refine'] = 'Célzott';
$lng['listings']['results'] = 'eredmények';
$lng['listings']['photos'] = 'képek';
$lng['listings']['user_details'] = 'Nézze a felhasználói adatokat';
$lng['listings']['back_to_details'] = 'Visszalépés a Részletes adatokhoz';

$lng['listings']['post_free_ad'] = 'Adjon fel ingyenes apróhirdetést';

$lng['users']['username_available'] = 'A felhasználónév elérhető!';
$lng['users']['username_not_available'] = 'Felhasználónév nem elérhető!';

$lng['general']['not_found'] = 'A keresett oldal nem található!';
$lng['general']['full_version'] = 'Teljes verzió';
$lng['general']['mobile_version'] = 'Mobil verzió';
$lng['failed'] = 'Sikertelen';
$lng['remember_me'] = 'Emlékezzen rám';

$lng['less_than_a_minute'] = 'kevesebb mint egy perce';
$lng['minute'] = 'perc';
$lng['minutes'] = 'percel';
$lng['hour'] = 'óra';
$lng['hours'] = 'órával';
$lng['yesterday'] = 'Tegnap';
$lng['day'] = 'nap';
$lng['days'] = 'nappal';
$lng['ago_postfix'] = ' ezelőtt';
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