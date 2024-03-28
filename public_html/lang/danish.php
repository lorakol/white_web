<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Hjem';
$lng['navbar']['login'] = 'Log Ind';
$lng['navbar']['logout'] = 'Log Ud';
$lng['navbar']['recent_ads'] = 'Seneste Annoncer';
$lng['navbar']['register'] = 'Opret Konto';
$lng['navbar']['submit_ad'] = 'Opret Annonce';
$lng['navbar']['editad'] = 'Rediger Annonce';
$lng['navbar']['my_account'] = 'Min konto';
$lng['navbar']['administrator_panel'] = 'Administrator Panel';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Genopret Kodeord';
$lng['navbar']['renew_listing'] = 'Forny Annoncer';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Tilmeld';
$lng['general']['search'] = 'Søg';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['activeads'] = 'aktive Annoncer';
$lng['general']['activead'] = 'aktiv Annonce';
$lng['general']['subcats'] = 'Underkategorier';
$lng['general']['subcat'] = 'Underkategori';
$lng['general']['view_ads'] = 'Se Annoncer';
$lng['general']['back'] = 'Tilbage';
$lng['general']['goto'] = 'Gå til';
$lng['general']['page'] = 'Side';
$lng['general']['of'] = 'af';
$lng['general']['other'] = 'Andre';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Annonce';
$lng['general']['delete_all'] = 'Slet alle Valgte';
$lng['general']['action'] = 'Gennemfør';
$lng['general']['edit'] = 'Rediger';
$lng['general']['delete'] = 'Slet';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'Gratis';
$lng['general']['not_authorized'] = 'Du er ikke autoriseret til at se denne side!';
$lng['general']['access_restricted'] = 'Din adgang til denne side er begrænset!';
$lng['general']['featured_ads'] = 'Fremhævede Annoncer';
$lng['general']['latest_ads'] = 'Seneste Annoncer';
$lng['general']['quick_search'] = 'Hurtig Søgning';
$lng['general']['go'] = 'Go';
$lng['general']['unlimited'] = 'Ubegrænset';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'En fil med dette navn eksisterer allerede og kan ikke overskrives!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Du kan ikke oploade filer større end ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Billedets dimensioner er for store! Venligst opload en fil der er maximum ::MAX_FILE_WIDTH::px bred og maximum ::MAX_FILE_HEIGHT::px høj !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Denne fil kunne ikke oploades!';
$lng['images']['errors']['no_file'] = 'Venligst vælg en fil der skal uploades!';
$lng['images']['errors']['no_folder'] = 'Upload mappe eksiterer ikke!';
$lng['images']['errors']['folder_not_writeable'] = 'Upload mappe er ikke skrivbar!';
$lng['images']['errors']['file_type_not_accepted'] = 'Den uploadede fil type er ikke en billede fil eller er ikke understøttet!';
$lng['images']['errors']['error'] = 'Der er sket en fejl under upload af denne fil. Fejlen var: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Thumbnail upload mappe eksisterer ikke!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Thumbnail upload mappe er ikke skrivbar!';
$lng['images']['errors']['no_jpg_support'] = 'Ingen JPG support!';
$lng['images']['errors']['no_png_support'] = 'Ingen PNG support!';
$lng['images']['errors']['no_gif_support'] = 'Ingen GIF support!';
$lng['images']['errors']['jpg_create_error'] = 'Fejl i oprettelse af JPG billede fra kilde!';
$lng['images']['errors']['png_create_error'] = 'Fejl i oprettelse af PNG billede fra kilde!';
$lng['images']['errors']['gif_create_error'] = 'Fejl i oprettelse af GIF billede fra kilde!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Log Ind';
$lng['login']['logout'] = 'Log Ud';
$lng['login']['username'] = 'Brugernavn';
$lng['login']['password'] = 'Kodeord';
$lng['login']['forgot_pass'] = 'Glemt dit kodeord?';
$lng['login']['click_here'] = 'Klik Her';

$lng['login']['errors']['password_missing'] = 'Udfyld venligst dit kodeord!';
$lng['login']['errors']['username_missing'] = 'Udfyld venligst dit brugernavn!';
$lng['login']['errors']['username_invalid'] = 'Brugernavn er ikke korrekt!';
$lng['login']['errors']['invalid_username_pass'] = 'Forkert brugernavn eller kodeord!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Log Ud';
$lng['logout']['loggedout'] = 'Du er nu logget ud!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Opret en konto';
$lng['users']['repeat_password'] = 'Gentag kodeord';
$lng['users']['image_verification_info'] = 'Angiv venligst teksten, der er vist i billedet, i boksen nedenfor.<br /> De mulige karakterer er bogstaver fra a til h i små bogstaver<br /> og tal fra 1 til 9.';
$lng['users']['already_logged_in'] = 'Du er allerede logget ind!';
$lng['users']['select'] = 'Vælg';

$lng['users']['info']['activate_account'] = 'En email blev sendt til din konto. Venligst følg indstruktionerne til at aktivere din konto.';
$lng['users']['info']['welcome_user'] = 'Din konto blev oprettet. Venligst <a href="login.php">Log Ind</a> på din konto!';
$lng['users']['info']['awaiting_admin_verification'] = 'Din konto afventer godkendelse af en administrator. Du vil blive underrettet via email når din konto er godkendt og aktiveret.';
$lng['users']['info']['account_info_updated'] = 'Dine informationer blev updateret!';
$lng['users']['info']['password_changed'] = 'Dit kodeord blev ændret!';
$lng['users']['info']['account_activated'] = 'Din konto er nu aktiveret! Venligst <a href="login.php">Log Ind</a> på din konto.';

$lng['users']['errors']['username_missing'] = 'Venligst udfyld dit brugernavn!';
$lng['users']['errors']['invalid_username'] = 'Forkert brugernavn!';
$lng['users']['errors']['username_exists'] = 'Brugernavn eksisterer allerede! Venligst log ind hvis du allerede har en konto!';
$lng['users']['errors']['email_missing'] = 'Venligst udfyld din email adresse!';
$lng['users']['errors']['invalid_email'] = 'Forkert email adresse!';
$lng['users']['errors']['passwords_dont_match'] = 'Kodeord stemmer ikke!';
$lng['users']['errors']['email_exists'] = 'Email adressen eksisterer allerede! Venligst log ind hvis du allerede har en konto!';
$lng['users']['errors']['password_missing'] = 'Venligst udfyld et kodeord!';
$lng['users']['errors']['invalid_validation_string'] = 'Forkert validerings kode!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Forkert kodeord eller aktiverings kode! Kontakt venligst en administrator!';
$lng['users']['errors']['account_already_active'] = 'Din konto er allerede aktiv!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Annonce';
$lng['listings']['category'] = 'Kategori';
$lng['listings']['package'] = 'Pakke';
$lng['listings']['price'] = 'Pris';
$lng['listings']['ad_description'] = 'Tilføj beskrivelse';
$lng['listings']['title'] = 'Overskrift';
$lng['listings']['description'] = 'Beskrivelse';
$lng['listings']['image'] = 'Billede';
$lng['listings']['words_left'] = 'Ord tilbage';
$lng['listings']['enter_photos'] = 'Tilføj fotos';
$lng['listings']['ad_information'] = 'Annonce Information';
$lng['listings']['free'] = 'Gratis';
$lng['listings']['details'] = 'Detaljer';
$lng['listings']['stock_no'] = 'Lager Nummer';
$lng['listings']['location'] = 'Placering';
$lng['listings']['contact_info'] = 'Kontakt Info';
$lng['listings']['email_seller'] = 'Send Email sælger';
$lng['listings']['no_recent_ads'] = 'Ingen Seneste Annoncer';
$lng['listings']['no_ads'] = 'Ingen Annoncer i denne kategori';
$lng['listings']['added_on'] = 'Tilføjet';
$lng['listings']['send_mail'] = 'Send Email til Bruger';
$lng['listings']['details'] = 'Detaljer';
$lng['listings']['user'] = 'Bruger';
$lng['listings']['price'] = 'Pris';
$lng['listings']['confirm_delete'] = 'Er du sikker på du ønsker at slette denne annonce?';
$lng['listings']['confirm_delete_all'] = 'Er du sikker på du ønsker at slette de valgte annoncer?';
$lng['listings']['all'] = 'Alle Annoncer';
$lng['listings']['active_listings'] = 'Aktive Annoncer';
$lng['listings']['pending_listings'] = 'Afventende Annoncer';
$lng['listings']['featured_listings'] = 'Annoncer med Ekstra Visning';
$lng['listings']['expired_listings'] = 'Udløbede Annoncer';
$lng['listings']['active'] = 'Aktiv';
$lng['listings']['inactive'] = 'Deaktiv';
$lng['listings']['pending'] = 'Afventende';
$lng['listings']['featured'] = 'Ekstra visning';
$lng['listings']['expired'] = 'Udløbet';
$lng['listings']['order_by_date'] = 'Sorter via Dato';
$lng['listings']['order_by_category'] = 'Sorter via Kategori';
$lng['listings']['order_by_make'] = 'Sorter via Mærke';
$lng['listings']['order_by_price'] = 'Sorter via Pris';
$lng['listings']['order_by_views'] = 'Sorter via klik';
$lng['listings']['order_asc'] = 'Stigende';
$lng['listings']['order_desc'] = 'Faldende';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Klik';
$lng['listings']['date'] = 'Dato';
$lng['listings']['no_listings'] = 'Ingen Annoncer';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Denne annonce eksisterer ikke!';
$lng['listings']['mark_sold'] = 'Markér som Solgt';
$lng['listings']['mark_unsold'] = 'Markér som ikke Solgt';
$lng['listings']['sold'] = 'Solgt';
$lng['listings']['feature'] = 'Funktioner';
$lng['listings']['expired_on'] = 'Udløbet den';
$lng['listings']['renew'] = 'Forny';
$lng['listings']['print_page'] = 'Print';
$lng['listings']['recommend_this'] = 'Del';
$lng['listings']['more_listings'] = 'Flere annoncer fra denne bruger';
$lng['listings']['all_listings_for'] = 'Alle annoncer fra';
$lng['listings']['free_category'] = 'Gratis kategori';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Er du sikker på du ønsker at slette dette annonce billede?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Maximum ord overskredet! Du kan maximum skrive ::MAX:: ord'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Din annonce indeholder forbudte ord! Gennemse venligst din annonce tekst!';
$lng['listings']['errors']['title_missing']='Venligst udfyld en overskrift for din annonce!';
$lng['listings']['errors']['category_missing']='Vælg venligst en kategori!';
$lng['listings']['errors']['invalid_category']='Forkert kategori!';
$lng['listings']['errors']['package_missing']='Vælg venligst en pakke!';
$lng['listings']['errors']['invalid_package']='Forkert pakke!';
$lng['listings']['errors']['content_missing']='Udfyld venligst en beskrivelse for din annonce!';
$lng['listings']['errors']['invalid_price']='Forkert pris!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Lav pris';
$lng['quick_search']['price_high'] = 'Høj pris';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Opret en ny annonce';
$lng['useraccount']['browse_your_listings'] = 'Mine Annoncer';
$lng['useraccount']['modify_account_info'] = 'Konto Info';
$lng['useraccount']['order_history'] = 'Ordre Historik';
$lng['useraccount']['total_listings'] = 'Totale Annoncer';
$lng['useraccount']['total_views'] = 'Totale Klik';
$lng['useraccount']['active_listings'] = 'Aktive Annoncer';
$lng['useraccount']['pending_listings'] = 'Afventende Annoncer';
$lng['useraccount']['last_login'] = 'Sidste Login';
$lng['useraccount']['last_login_ip'] = 'Sidste Login IP';
$lng['useraccount']['expired_listings'] = 'Udløbede Annoncer';
$lng['useraccount']['statistics'] = 'Statistik';
$lng['useraccount']['welcome'] = 'Velkommen';
$lng['useraccount']['contact_name'] = 'Kontakt Navn';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Kodeord';
$lng['useraccount']['repeat_password'] = 'Gentag Kodeord';
$lng['useraccount']['change_password'] = 'Ændre Kodeord';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'til';
$lng['advanced_search']['price_min'] = 'Min Pris';
$lng['advanced_search']['price_max'] = 'Max Pris';
$lng['advanced_search']['word'] = 'Søgeord';
$lng['advanced_search']['sort_by'] = 'Sorter via';
$lng['advanced_search']['sort_by_price'] = 'Sorter via Pris';
$lng['advanced_search']['sort_by_date'] = 'Sorter via Dato';
$lng['advanced_search']['sort_by_make'] = 'Sorter via Mærke';
$lng['advanced_search']['sort_descendant'] = 'Sorter Faldende';
$lng['advanced_search']['sort_ascendant'] = 'Sorter Stigende';
$lng['advanced_search']['only_ads_with_pic'] = 'Kun Billede Annoncer';
$lng['advanced_search']['no_results'] = 'Ingen annoncer blev funder der matcher din søgning!';
$lng['advanced_search']['multiple_ads_matching'] = 'Der er  ::NO_ADS:: annoncer der matcher din søgning!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Der er en annonce der matcher din søgning!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Navn';
$lng['contact']['subject'] = 'Emne';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Webside';
$lng['contact']['comments'] = 'Kommentar';
$lng['contact']['message_sent'] = 'Din besked blev sendt!';
$lng['contact']['sending_message_failed'] = 'Din besked blev IKKE sendt!';
$lng['contact']['mailto'] = 'Email Til';

$lng['contact']['error']['name_missing'] = 'Udfyld venligst dit navn!';
$lng['contact']['error']['subject_missing'] = 'Udfyld venligst et emne!';
$lng['contact']['error']['email_missing'] = 'Udfyld venligst din email!';
$lng['contact']['error']['invalid_email'] = 'Ukorrekt email adresse!';
$lng['contact']['error']['comments_missing'] = 'Udfyld venligst en tekst!';
$lng['contact']['error']['invalid_validation_number'] = 'ukorrekt validerings nummer!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email adresse';
$lng['password_recovery']['new_password'] = 'Nyt Kodeord';
$lng['password_recovery']['repeat_new_password'] = 'Gentag Nyt Kodeord';
$lng['password_recovery']['invalid_key'] = 'Ukorrekt nøgle';

$lng['password_recovery']['email_missing'] = 'Udfyld venligst din email adresse!';
$lng['password_recovery']['invalid_email'] = 'Ukorrekt email adresse';
$lng['password_recovery']['email_inexistent'] = 'Der er ingen bruger tilmeldt med denne email adresse';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Beløb';
$lng['packages']['words'] = 'Ord';
$lng['packages']['days'] = 'Dage';
$lng['packages']['pictures'] = 'Billeder';
$lng['packages']['picture'] = 'Billede';
$lng['packages']['available'] = 'Varighed';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Behandlet';
$lng['order_history']['amount'] = 'Bløb';
$lng['order_history']['completed'] = 'Gennemført';
$lng['order_history']['not_completed'] = 'Ikke Gennemført';
$lng['order_history']['ad_no'] = 'Annonce id';
$lng['order_history']['date'] = 'Dato';
$lng['order_history']['no_actions'] = 'Ingen Ordre Registreret';
$lng['order_history']['order_by_date'] = 'Sorteret via Dato';
$lng['order_history']['order_by_amount'] = 'Sorteret via Beløb';
$lng['order_history']['order_by_processor'] = 'Sorter via Behandlet';
$lng['order_history']['description'] = 'Beskrivelse';
$lng['order_history']['newad'] = 'Ny Annonce'; 
$lng['order_history']['renew'] = 'Forny'; 
$lng['order_history']['featured'] = 'Ekstra visning'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sorter via Dato';
$lng['order']['price'] = 'Sorter via Pris';
$lng['order']['title'] = 'Sorter via Overskrift';
$lng['order']['desc'] = 'Faldende';
$lng['order']['asc'] = 'Stigende';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Del denne annonce';
$lng['recommend']['your_name'] = 'Dit Navn';
$lng['recommend']['your_email'] = 'Din Email';
$lng['recommend']['friend_name'] = 'Ven\'s Navn';
$lng['recommend']['friend_email'] = 'Ven\'s Email';
$lng['recommend']['message'] = 'Besked til din ven';


$lng['recommend']['error']['your_name_missing'] = 'Udfyld venligst dit navn!';
$lng['recommend']['error']['your_email_missing'] = 'Udfyld venligst din email!';
$lng['recommend']['error']['friend_name_missing'] = 'Udfyld venligst din Ven\'s navn!';
$lng['recommend']['error']['friend_email_missing'] = 'Udfyld venligst din ven\'s email!';
$lng['recommend']['error']['invalid_email'] = 'Ukorrekt email adresse';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Annoncer';
$lng['stats']['general'] = 'Generelt';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Tilmeld';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favoritter';
$lng['general']['as'] = 'som';
$lng['general']['view'] = 'Se';
$lng['general']['none'] = 'Ingen';
$lng['general']['yes'] = 'Ja';
$lng['general']['no'] = 'Nej';
$lng['general']['next'] = 'Næste;';
$lng['general']['finish'] = 'Færdig';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Slet';
$lng['general']['previous_page'] = 'Forrige';
$lng['general']['next_page'] = 'Næste;';
$lng['general']['items'] = 'Varer';
$lng['general']['active'] = 'Aktive';
$lng['general']['inactive'] = 'Inaktive';
$lng['general']['expires'] = 'Udløber den';
$lng['general']['available'] = 'Tilrådighed';
$lng['general']['cancel'] = 'Fortryd';
$lng['general']['never'] = 'Nyere';
$lng['general']['asc'] = 'Stigende';
$lng['general']['desc'] = 'Faldende';
$lng['general']['pending'] = 'Afventer';
$lng['general']['upload'] = 'Upload';
$lng['general']['processing'] = 'Behandler, Vent Venligst... ';
$lng['general']['help'] = 'Hjælp';
$lng['general']['hide'] = 'Skjul';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Dette er en begrænset demo version. Du er ikke godkendt til at modificere bestemte indstillinger!';
$lng['general']['check_all'] = 'Marker Alle';
$lng['general']['uncheck_all'] = 'Slet Alle Markerede';
$lng['general']['all'] = 'Alle';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Forhandler Side';
$lng['users']['store_banner'] = 'Forhandler Side Banner';
$lng['users']['waiting_mail_activation'] = 'Afventer email aktivering';
$lng['users']['waiting_admin_activation'] = 'Afventer admin Godkendelse';
$lng['users']['no_such_id'] = 'Denne bruger eksisterer ikke.';

$lng['users']['info']['store_banner'] = 'Billedet der vil bliver brugt som top billede på din forhandler side.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Rapporter Annonce';
$lng['listings']['report_reason'] = 'Begrund Rapportering';
$lng['listings']['meta_info'] = 'Meta Information';
$lng['listings']['meta_keywords'] = 'Meta Søgeord';
$lng['listings']['meta_description'] = 'Meta Beskrivelse';
$lng['listings']['not_approved'] = 'Ikke godkendt';
$lng['listings']['approve'] = 'Godkend';
$lng['listings']['choose_payment_method'] = 'Vælg betalings metode';

$lng['listings']['choose_category'] = 'Vælg Kategori';
$lng['listings']['choose_plan'] = 'Vælg Pakke';
$lng['listings']['enter_ad_details'] = 'Skriv Annonce detaljer';
$lng['listings']['ad_details'] = 'Tilføj Detaljer';
$lng['listings']['add_photos'] = 'Tilføj fotos';
$lng['listings']['ad_photos'] = 'Annonce fotos';
$lng['listings']['edit_photos'] = 'Rediger fotos';
$lng['listings']['extra_options'] = 'Extra Valg';
$lng['listings']['review'] = 'Gennemse Annonce';
$lng['listings']['finish'] = 'Færdig';
$lng['listings']['next_step'] = 'Næste Trin';
$lng['listings']['included'] = 'Inkluderet';
$lng['listings']['finalize'] = 'Færdiggør';
$lng['listings']['zip'] = 'Postnummer';
$lng['listings']['add_to_favourites'] = 'Tilføj til favoritter';
$lng['listings']['confirm_add_to_fav'] = 'Advarsel! Du er ikke logget ind! Din favorit liste vil kun være midlertidig!';
$lng['listings']['add_to_fav_done'] = 'Annoncer blev tilføjet til din favorit liste!';
$lng['listings']['confirm_delete_favourite'] = 'Er du sikker på, du vil slette dine favorit annoncer?';
$lng['listings']['no_favourites'] = 'Ingen Favorit Annoncer';
$lng['listings']['extra_options'] = 'Extra Valg';
$lng['listings']['highlited'] = 'Fremhævet';
$lng['listings']['priority'] = 'Prioritet';
$lng['listings']['video'] = 'Video Annonce';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Afventende Videoer';
$lng['listings']['video_code'] = 'YouTube Link';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = 'Godkendte Annoncer';
$lng['listings']['finalize_later'] = 'Færdiggør senere';
$lng['listings']['click_to_upload'] = 'Klik for at oploade';
$lng['listings']['files_uploaded'] = ' Foto(s) oploaded af total antal ';
$lng['listings']['allowed'] = ' Fotos tilladt!';
$lng['listings']['limit_reached'] = ' Maximum begrænsning af fotos nået!';
$lng['listings']['edit_options'] = 'Rediger Annonce muligheder';
$lng['listings']['view_store'] = 'Se Forhandler Side';
$lng['listings']['edit_ad_options'] = 'Rediger Annonce muligheder';
$lng['listings']['no_extra_options_selected'] = 'Ingen extra muligheder valgt!';
$lng['listings']['highlited_listings'] = 'Fremhævede annoncer';
$lng['listings']['for_listing'] = 'for annonce nr. ';
$lng['listings']['expires_on'] = 'Udløber';
$lng['listings']['expired_on'] = 'Udløbet';
$lng['listings']['pending_ad'] = 'Afventende Annoncer';
$lng['listings']['pending_highlited'] = 'Afventende Fremhævede';
$lng['listings']['pending_featured'] = 'Afventende Ekstra Visning';
$lng['listings']['pending_priority'] = 'Afventende Prioriteret';
$lng['listings']['enter_coupon'] = 'Indtast Rabat Kode';
$lng['listings']['discount'] = 'Rabat';
$lng['listings']['select_plan'] = 'Vælg Pakke';
$lng['listings']['pending_subscription'] = 'Afventer Tilmelding';
$lng['listings']['remove_favourite'] = 'Fjern Favoritter';

$lng['listings']['order_up'] = 'Ordre op';
$lng['listings']['order_down'] = 'Ordre ned';

$lng['listings']['errors']['invalid_youtube_video'] = 'Ukorrekt youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonnér';
$lng['useraccount']['no_package'] = 'Ingen Annonce Pakke';
$lng['useraccount']['packages'] = 'Pakker';
$lng['useraccount']['date_start'] = 'Start Dato';
$lng['useraccount']['date_end'] = 'Slut Dato';
$lng['useraccount']['remaining_ads'] = 'Resterende Annoncer';
$lng['useraccount']['account_type'] = 'Kontotype';
$lng['useraccount']['unfinished_listings'] = 'Ufærdige Annoncer';
$lng['useraccount']['confirm_delete_subscription'] = 'Er du sikker på du ønsker at slette dette Abonnement?';
$lng['useraccount']['buy_store'] = 'Køb Forhandler Side';
$lng['useraccount']['bulk_uploads'] = 'Bulk Uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonnement';
$lng['packages']['ads'] = 'Annoncer';
$lng['packages']['name'] = 'Navn';
$lng['packages']['details'] = 'Detaljer';
$lng['packages']['no_ads'] = 'Antal af Annoncer';
$lng['packages']['subscription_time'] = 'Abonnements Tid';
$lng['packages']['no_pictures'] = 'Tilladte Billeder';
$lng['packages']['no_words'] = 'Antal Ord';
$lng['packages']['ads_availability'] = 'Annonce muligheder';
$lng['packages']['featured'] = 'Ekstra visning';
$lng['packages']['highlited'] = 'Fremhævet';
$lng['packages']['priority'] = 'Prioritet';
$lng['packages']['video'] = 'Video Annoncer';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Opret Annonce';
$lng['order_history']['renew_listing'] = 'Forny Annonce';
$lng['order_history']['feature_listing'] = 'Fremhævede Annonce';
$lng['order_history']['subscribe_to_package'] = 'Abonner på pakke';
$lng['order_history']['complete_payment'] = 'Udfør Betaling';
$lng['order_history']['complete_payment_for'] = 'Udfør Betaling for';
$lng['order_history']['details'] = 'Detaljer';
$lng['order_history']['subscription_no'] = 'Abonnements nr.';
$lng['order_history']['highlited'] = 'Fremhævede Annoncer';
$lng['order_history']['priority'] = 'Prioritet';
$lng['order_history']['video'] = 'Video Annoncer';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Vælg venligst en pakke!';
$lng['buy_package']['error']['choose_processor'] = 'Vælg venligst en betalingsmetode!';
$lng['buy_package']['error']['invalid_processor'] = 'Ugyldig betalingsmetode!';
$lng['buy_package']['error']['invalid_package'] = 'Ugyldig pakke!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ugyldig Paypal transaction!';
$lng['2co']['invalid_transaction'] = 'Ugyldig 2Checkout transaction!';
$lng['moneybookers']['invalid_transaction'] = 'Ugyldig Moneybookers transaction!';
$lng['authorize']['invalid_transaction'] = 'Ukorrekt Authorize.net transaction!';
$lng['manual']['invalid_transaction'] = 'Ukorrekt transaktion!';

$lng['paypal']['transaction_canceled'] = 'Paypal transaction canceled!';
$lng['2co']['transaction_canceled'] = '2Checkout transaction canceled!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transaction canceled!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transaction canceled!';
$lng['manual']['transaction_canceled'] = 'Transaction canceled!';
$lng['epay']['transaction_canceled'] = 'ePay transaction canceled!';

$lng['payments']['transaction_already_processed'] = 'Transaktionen er allerede blevet behandlet!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Godkend Abonnement';
$lng['subscribe']['payment_method'] = 'Betalings Måde';
$lng['subscribe']['renew_subscription'] = 'Forny Abonnement';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopier email: ';
$lng['bcc_mails']['from'] = 'Fra: ';
$lng['bcc_mails']['to'] = 'Til: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Bulk upload status: ';
$lng['ie']['successfully'] = 'Annoncer tilføjet';
$lng['ie']['failed'] = 'Fejl';
$lng['ie']['uploaded_listings'] = 'Uploaded annonce liste:';
$lng['ie']['errors']['upload_import_file'] = 'Opload venligst din import fil fra!';
$lng['ie']['errors']['incorrect_file_type'] = 'Ukorrekt fil type! Fil typen skal være: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kunne ikke åbne fil!';
$lng['ie']['errors']['choose_categ'] = 'Vælg venligst en Kategori!';
$lng['ie']['errors']['could_not_save_file'] = 'Kunne ikke downloade fil: ';
$lng['ie']['errors']['required_field_missing'] = 'Krævet Felt mangler: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Ukorrekt data elementer tæller for række nr: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Vælg forhandler';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Søg område';
$lng['areasearch']['all_locations'] = 'Alle områder';
$lng['areasearch']['exact_location'] = 'Specielt område';
$lng['areasearch']['around'] = 'omkring';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nej';
$lng['general']['or'] = 'eller';
$lng['general']['in'] = 'I';
$lng['general']['by'] = 'Ved';
$lng['general']['close_window'] = 'Luk Vindue';
$lng['general']['more_options'] = 'Flere muligheder';
$lng['general']['less_options'] = 'Færre muligheder';
$lng['general']['send'] = 'Send';
$lng['general']['save'] = 'Gem';
$lng['general']['for'] = 'for';
$lng['general']['to'] = 'til';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Markér som udlånt';
$lng['listings']['mark_unrented'] = 'Markér som ikke udlånt';
$lng['listings']['rented'] = 'Udlånt';
$lng['listings']['your_info'] = 'Dine informationer';
//******
$lng['listings']['email'] = 'Din Email Adresse';
$lng['listings']['name'] = 'Dit Navn';

$lng['listings']['listing_deleted'] = 'Dine annoncer blev slettet!';
$lng['listings']['post_without_login'] = 'Opret annonce uden login';
$lng['listings']['waiting_activation'] = 'Venter på aktivering';
$lng['listings']['waiting_admin_approval'] = 'Venter på administrator godkendelse';
$lng['listings']['dont_need_account'] = 'Ikke brug for en konto? Opret en annonce uden login!';
$lng['listings']['post_your_ad'] = 'Tilføj din annonce!';
$lng['listings']['posted'] = 'Tilføjet';
$lng['listings']['select_subscription'] = 'Vælg Abonnement';
$lng['listings']['choose_subscription'] = 'Vælg Abonnement';
$lng['listings']['inactive_listings'] = 'Inaktive Annoncer';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Udvid Søgning';
$lng['search']['refine_by_keyword'] = 'Udvid med søgeord';
$lng['search']['showing'] = 'Viser';
$lng['search']['more'] = 'Flere ...';
$lng['search']['less'] = 'Færre ...';
$lng['search']['search_for'] = 'Søg efter';
$lng['search']['save_your_search'] = 'Gem din søgning';
$lng['search']['save'] = 'Gem';
$lng['search']['search_saved'] = 'Din søgning blev gemt!';
$lng['search']['must_login_to_save_search'] = 'Du skal være logget ind for, at kunne gemme din søgning!';
$lng['search']['view_search'] = 'Gennemse søgning';
$lng['search']['all_categories'] = 'Alle Kategorier';
$lng['search']['more_than'] = 'Flere end';
$lng['search']['less_than'] = 'Mindre end';

$lng['search']['error']['cannot_save_empty_search'] = 'Din søgning må ikke indeholde nogen betingelser så den kan ikke gemmes!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Gemte søgninger';
$lng['useraccount']['view_saved_searches'] = 'Gennemse gemte søgninger';
$lng['useraccount']['no_saved_searches'] = 'Ingen gemte søgninger';
$lng['useraccount']['recurring'] = 'Tilbagevendende';
$lng['useraccount']['date_renew'] = 'Dato fornyet';
$lng['useraccount']['logged_in_as'] = 'Du er logget ind som ';
$lng['useraccount']['subscriptions'] = 'Abonnementer';

$lng['users']['activate_account'] = 'Aktiver konto';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Tilføj Abonnement';
$lng['subscriptions']['package'] = 'Abonnement';
$lng['subscriptions']['remaining_ads'] = 'Tilbageværende Annoncer';
$lng['subscriptions']['recurring'] = 'Tilbagevendende';
$lng['subscriptions']['date_start'] = 'Start Dato';
$lng['subscriptions']['date_end'] = 'Slut Dato';
$lng['subscriptions']['date_renew'] = 'Forny Dato';
$lng['subscriptions']['confirm_delete'] = 'Er du sikker på du ønsker at slette dit abonnement?';
$lng['subscriptions']['no_subscriptions'] = 'Ingen Abonnoementer';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Har du ikke en konto endnu?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'aktiver tilbageværende betalinger for dette abonnement';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Følgende krævede felter mangler: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Køb forhandler side';


$lng['images']['errors']['max_photos'] = 'Maximum fotos oploaded!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email alarm';
$lng['alerts']['email_alerts'] = 'Email alarmer';
$lng['alerts']['no_alerts'] = 'Ingen email alarmer';
$lng['alerts']['view_email_alerts'] = 'Se dine Email alarmer';
$lng['alerts']['send_email_alerts'] = 'Send Email alarmer';
$lng['alerts']['immediately'] = 'øjblikkelig';
$lng['alerts']['daily'] = 'Dagligt';
$lng['alerts']['weekly'] = 'Ugentligt';
$lng['alerts']['your_email'] = 'Din email adresse';
$lng['alerts']['create_alert'] = 'Opret en alarm';
$lng['alerts']['email_alert_info'] = 'Modtag en email alarm når en ny annonce bliver oprettet for denne søgning.';
$lng['alerts']['alert_added'] = 'Din email alarm oprettet!';
$lng['alerts']['alert_added_activate'] = 'Du vil modtage en email om kort tid på <b>::EMAIL::</b>. Klik venligst på linket i emailen for at aktivere din email alarm!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Søg i';
$lng['alerts']['keyword'] = 'Søgeord';
$lng['alerts']['frequency'] = 'Alarm hyppighed';
$lng['alerts']['alert_activated'] = 'Din alarm blev aktiveret! Du vil nu begynde at modtage emails alarmer.';
$lng['alerts']['alert_unsubscribed'] = 'Din alarm blev slettet!';
$lng['alerts']['started_on'] = 'Startet den';
$lng['alerts']['no_terms_searched'] = 'Der er ikke sat nogen betingelser for denne søgning!';
$lng['alerts']['no_listings'] = 'Ingen annoncer for denne alarm!';

$lng['alerts']['error']['email_required'] = 'Indtast venligst en email adresse for din alarm!';
$lng['alerts']['error']['invalid_email'] = 'Ukorrekt email adresse!';
$lng['alerts']['error']['invalid_frequency'] = 'Ukorrekt alarm hyppighed!';
$lng['alerts']['error']['login_required'] = 'Venligst <a href="::LINK::">Log Ind</a> For at registrere en alarm!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Vælg venligst minimum et søgeord, bortset fra kategori!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ukorrekt alarm bekræftelse!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ukorrekt afmeldings forespørgsel!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Låne beregner';
$lng_loancalc['sale_price'] = 'Salgs pris';
$lng_loancalc['down_payment'] = 'Afdrag';
$lng_loancalc['trade_in_value'] = 'Bytte værdi';
$lng_loancalc['loan_amount'] = 'Låne beløb';
$lng_loancalc['sales_tax'] = 'Salgs moms';
$lng_loancalc['interest_rate'] = 'Rente';
$lng_loancalc['loan_term'] = 'Låne betingelser';
$lng_loancalc['months'] = 'Måneder';
$lng_loancalc['years'] = 'År';
$lng_loancalc['or'] = 'eller';
$lng_loancalc['monthly_payment'] = 'Månedlig betaling';
$lng_loancalc['calculate'] = 'Beregn';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Kommentar';
$lng_comments['make_a_comment'] = 'Skriv en kommentar';
$lng_comments['login_to_post'] = 'Venligst <a href="::LOGIN_LINK::">Log Ind</a> Så du kan skrive en kommentar.';

$lng_comments['name'] = 'Navn';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Webside';
$lng_comments['submit_comment'] = 'Skriv kommentar';

$lng_comments['error']['name_missing'] = 'Skriv venligst dit navn!';
$lng_comments['error']['content_missing'] = 'Skriv venligst din kommentar!';
$lng_comments['error']['website_missing'] = 'Please enter webside!';
$lng_comments['error']['email_missing'] = 'Skriv venligst din email!';
$lng_comments['error']['listing_id_missing'] = 'Ukorrekt kommentar!';

$lng_comments['error']['invalid_email'] = 'Ukorrekt email adresse!';
$lng_comments['error']['invalid_website'] = 'Ukorrekt webside!';
$lng_comments['errors']['badwords'] = 'Din kommentar indeholder forbudte ord! Ret venligst din kommentar!';

$lng_comments['info']['comment_added'] = 'Din kommentar blev tilføjet! Klik <a id="newad">her</a> Hvis du ønsker at tilføje endnu en kommentar.';
$lng_comments['info']['comment_pending'] = 'Din kommentar afventer administrator godkendelse.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'Næste;';
$lng['tb']['prev'] = 'Forrige';
$lng['tb']['close'] = 'LUK';
$lng['tb']['or_esc'] = 'eller tryk ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Beskeder';
$lng['messages']['confirm_delete_all'] = 'Er du sikker på du ønsker at slette de velgte beskeder?';
$lng['messages']['listing'] = 'Annoncer';
$lng['messages']['no_messages'] = 'Ingen beskeder';
$lng['general']['reply'] = 'Besvar besked';
$lng['messages']['message'] = 'Besked';
$lng['messages']['from'] = 'Fra';
$lng['messages']['to'] = 'Til';
$lng['messages']['on'] = 'den';
$lng['messages']['view_thread'] = 'Se tråd';
$lng['messages']['started_for_listing'] = 'Started for annonce';
$lng['messages']['view_complete_message'] = 'Læs hele beskeden her';
$lng['messages']['message_history'] = 'Besked historik';
$lng['messages']['yourself'] = 'Dig';
$lng['messages']['report_spam'] = 'Rapporter som spam';
$lng['messages']['reported_as_spam'] = 'Rapporteret som spam';
$lng['messages']['confirm_report_spam'] = 'Er du sikker på du ønsker at rapportere denne besked som spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Ukorrekt annonce id';
$lng['listings']['show_map'] = 'Vis Kort';
$lng['listings']['hide_map'] = 'Skjul Kort';
$lng['listings']['see_full_listing'] = 'Se hele annoncen';
$lng['listings']['list'] = 'Vis';
$lng['listings']['gallery'] = 'Fotos';
$lng['listings']['remove_fav_done'] = 'Denne annonce blev fjernet fra din favorit liste!';
$lng['search']['high_no_results'] = 'Antallet af resultater for din søgning er meget højt. Antallet af resultater derfor begrænset til de mest relevante. Venligst præciser din søgning yderligere for at begrænse antallet af resultater og få mere relevante resultater!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Denne email adresse er ikke tilladt!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Dit abonnement tillader dig ikke længere at bruge dette abonnement, maximum brugen er nået!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Vælg placering';
$lng['location']['choose'] = 'Vælg';
$lng['location']['change'] = 'Ændre';
$lng['location']['all_locations'] = 'Alle placeringer';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategori';
$lng['location']['save_location'] = 'Gem placering';

$lng['credits']['credits'] = 'Kredits';
$lng['credits']['credit'] = 'Kredit';
$lng['credits']['pending_credits'] = 'Afventende Kredits';
$lng['credits']['current_credits'] = 'Nuværende Kredits';
$lng['credits']['one_credit_equals'] = 'én Kredit  er lig med';
$lng['credits']['credits_amount'] = 'Kredits beløb';
$lng['credits']['buy_extra_credits'] = 'Køb extra Kredits';
$lng['credits']['credits_package'] = 'Kredits pakke';
$lng['credits']['select_package'] = 'Vælg Kredits pakke';
$lng['credits']['choose_package'] = 'Vælg pakke';
$lng['credits']['you_currently_have'] = 'Du har på nuværende tidspunkt ';
$lng['credits']['you_currently_have_no_credits'] = 'Du har på nuværende tidspunkt ingen Kredits ';
$lng['credits']['pay_using_credits'] = 'Betal med Kredits';
$lng['credits']['not_enough_credits'] = 'Ikke nok kredits til denne betaling!';
$lng['credits']['scredits'] = 'Kredits';
$lng['credits']['scredit'] = 'Kredit';



$lng['order_history']['credits_purchase'] = 'Kredits køb';
$lng['order_history']['invalid_order'] = 'Ukorrekt ordre!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Vent venligst imens du bliver omstillet!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Venligst <a href="::LOGIN_LINK::">Log Ind</a> så du kan se kontakt information!';
$lng['listing']['no_contact_information'] = 'Ingen kontakt information tilrådighed.';


$lng['navbar']['register_as'] = 'Register som';
$lng['listings']['all_ads'] = 'Alle annoncer';
$lng['listings']['refine'] = 'Raffinér';
$lng['listings']['results'] = 'resultater';
$lng['listings']['photos'] = 'fotos';
$lng['listings']['user_details'] = 'Se bruger detaljer';
$lng['listings']['back_to_details'] = 'Tilbage til annonce detaljer';

$lng['listings']['post_free_ad'] = 'Opret en gratis Annonce';

$lng['users']['username_available'] = 'Bruger navnet er tilrådighed!';
$lng['users']['username_not_available'] = 'Brugernavnet er ikke til rådighed!';

$lng['general']['not_found'] = 'Den forespurgte side blev ikke fundet!';
$lng['general']['full_version'] = 'Fuld version';
$lng['general']['mobile_version'] = 'Mobil version';

$lng['failed'] = 'Fejl';
$lng['remember_me'] = 'Husk mig';

$lng['less_than_a_minute'] = 'Mindre end 1 minut siden';
$lng['minute'] = 'minut';
$lng['minutes'] = 'minutter';
$lng['hour'] = 'tiem';
$lng['hours'] = 'timer';
$lng['yesterday'] = 'igår';
$lng['day'] = 'dag';
$lng['days'] = 'dage';
$lng['ago_postfix'] = ' siden';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'I dag';
$lng['messages']['confirm_delete'] = 'Er du sikker på at du vil slette denne besked?';
$lng['listings']['change_category'] = 'Skift kategori';
$lng['listings']['change_plan'] = 'Vælg en anden pakke';
$lng['listings']['choose_active_subscription'] = 'Vælg fra dine aktive tilmeldinger';


$lng['useraccount']['request_removal'] = 'Anmod om kontosletning';
$lng['useraccount']['request_removal_now'] = 'Anmod om sletning nu!';
$lng['useraccount']['removal_verification_sent'] = 'Du vil modtage en email med et verifikationslink. Klik venligst på linket for at bekræfte anmodningen om sletning.!';

$lng['contact']['message_waits_admin_aproval'] = 'Din besked vil blive leveret efter godkendelse af administrator!';

$lng['general']['accept'] = 'Acceptér';
$lng['general']['decline'] = 'Afvis';

$lng['general']['tax'] = 'Skat';
$lng['general']['total_with_tax'] = 'Total med skat';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'Indenfor kategori';

$lng['users']['user_info'] = 'brugerinformation';
$lng['users']['store_info'] = 'forretningsinformation';
$lng['users']['user_listings'] = 'Alle annoncer';

$lng['login']['errors']['invalid_email_pass'] = 'Ugyldig email eller kodeord!';
$lng['general']['or'] = 'eller';
$lng['newad']['choose_a_new_plan'] = 'Vælg en ny pakke';

$lng['listings']['no_extra_options_available'] = 'Der er ikke yderligere muligheder tilgængelige!';

$lng['listings']['map'] = 'Kort';

$lng['users']['affiliate'] = 'Partner';
$lng['users']['affiliate_id'] = 'Partner id';
$lng['users']['affiliate_link'] = 'Partner link';
$lng['users']['affiliate_paypal_email'] = 'Partner PayPalkonto';
$lng['users']['info']['affiliate_paypal_email'] = 'Du vil modtage det beløb du har optjent med din partnerkonto her';
$lng['users']['errors']['affiliate_paypal_email'] = 'Angiv venligst din PayPalkonto! Du vil modtage det beløb du har optjent med din partnerkonto her';

$lng['listings']['result'] = 'resultat';

$lng['confirm_delete'] = 'Er du sikker på at du vil slette det valgte?';
$lng['confirm_delete_all'] = 'Er du sikker på at du vil slette de valgte?';

$lng['general']['show'] = 'Vis';
$lng['general']['on_a_page'] = 'på en side';
$lng['general']['return'] = 'Retur';

$lng['login']['register_for_free'] = 'Opret gratis!';
$lng['general']['sent'] = 'Sendt';
$lng['general']['received'] = 'Modtaget';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Du er ikke logget ind!';
$lng['newad']['or_post_without_account'] = 'eller fortsæt uden at logge ind!';

$lng_comments['scomments'] = 'kommentarer';
$lng_comments['scomment'] = 'Kommentar';
$lng['general']['on'] = 'på';

$lng['affiliates']['last_payment'] = 'Seneste betaling';
$lng['affiliates']['last_payment_date'] = 'Seneste betalingsdato';
$lng['affiliates']['next_payment_date'] = 'Kommende betalingsdato';
$lng['affiliates']['total_due'] = 'Total udestående';
$lng['affiliates']['total_payments'] = 'Total betalinger modtaget';
$lng['affiliates']['revenue_history'] = 'Omsætningshistorik';
$lng['affiliates']['payments_history'] = 'Betalingshistorik';
$lng['affiliates']['pending_payment'] = 'Ventende betaling';
$lng['affiliates']['released'] = 'Frigivet';
$lng['affiliates']['not_released'] = 'Ikke frigivet';
$lng['affiliates']['paid'] = 'Betalt';
$lng['affiliates']['not_paid'] = 'Ikke betalt';

$lng['general']['no_items'] = 'Ingen varer';
$lng['useraccount']['amount_start'] = 'Beløb fra';
$lng['useraccount']['amount_end'] = 'Beløb til';
$lng['not_allowed_to_post_ads'] = 'Du har ikke tilladelse til at oprette annoncer med denne konto!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Ændringerne du foretager vil afvente godkendelse af en administrator!';

$lng['useraccount']['auction'] = 'Auktion';
$lng['useraccount']['add_auction'] = 'Tilføj Auktion';
$lng['useraccount']['remove_auction'] = 'Fjern Auktion';
$lng['useraccount']['auction_start_price'] = 'Startpris';
$lng['useraccount']['starts_at'] = 'Starter på';
$lng['useraccount']['no_bids'] = 'Ingen bud';
$lng['useraccount']['max_bid'] = 'Maxbud';
$lng['useraccount']['enable'] = 'Aktivér';
$lng['useraccount']['disable'] = 'Inaktivér';
$lng['useraccount']['error']['auction_start_price'] = 'Angiv venligst auktionens startpris!';
$lng['useraccount']['info']['auction_added'] = 'Auktionen blev tilføjet succesfuldt!';
$lng['useraccount']['confirm_delete'] = 'Bekræft sletning af auktionen?';
$lng['useraccount']['place_bid'] = 'Byd!';
$lng['useraccount']['login_to_bid'] = 'Log venligst ind for at byde!';
$lng['useraccount']['bid'] = 'Bud';
$lng['useraccount']['message_to_seller'] = 'Besked til sælger';
$lng['useraccount']['error']['enter_bid'] = 'Angiv venligst dit bud!';
$lng['useraccount']['error']['incorrect_bid'] = 'Ugyldigt bud!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Dit bud er lavere en startprisen!';
$lng['useraccount']['bid_placed'] = 'Dit bud er registreret!';
$lng['useraccount']['placed_on'] = 'Registreret på';
$lng['useraccount']['no_bids_for_auction'] = 'Der er ingen bud på denne auktion!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Klik for at se';
$lng['advanced_search']['clear_search'] = 'Nulstil søgning';
$lng['listings']['currency'] = 'Valuta';
$lng['listings']['show_phone'] = 'Vis telefonnummer';
$lng['listings']['make_public'] = 'Gør offentlig';

$lng['advanced_search']['only_ads_with_auction'] = 'Kun annoncer med auktioner';
$lng['security']['failed_login_attempts'] = 'Gentagne fejlede loginforsøg';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Din konto er i øjeblikket inaktiv! Du vil snarest modtage en SMS besked indeholdende en verifikationskode. Angiv koden i boksen nedenfor, for at aktivere din konto.';
$lng['users']['verification_code'] = 'Verifikationskode';
$lng['users']['waiting_sms_activation'] = 'Afventer SMS aktivering';
$lng['listings']['info']['sms_verification'] = 'Din annonce er i øjeblikket inaktiv. Du vil snarest modtage en SMS besked indeholdende en verifikationskode. Angiv koden i boksen nedenfor, for at aktivere din annonce.';
$lng['listings']['activate_listing'] = 'Aktivér annonce';
$lng['listings']['errors']['sms_invalid_activation'] = 'Ugyldig aktiveringskode!';
$lng['listings']['info']['listing_pending'] = 'Din annonce afventer verifikation af en administrator.';
$lng['listings']['info']['listing_activated'] = 'Din annoncer er aktiveret!';
$lng['listings']['errors']['listing_already_active'] = 'Din annonce er allerede aktiv!';
$lng['listings']['errors']['invalid_phone'] = 'Ugyldigt telefonnummer!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Tilgængelig for';
$lng['newad']['available_until_expires'] = 'Tilgængelig indtil annoncen udløber';
$lng['newad']['view_info'] = 'Se information';
$lng['users']['errors']['phone_not_permitted'] = 'Dette telefonnummer er ikke tilladt!';
$lng['invoice']['invoice'] = 'Faktura';
$lng['invoice']['invoice_no'] = 'Fakturanummer';
$lng['invoice']['bill_to'] = 'Regning til';
$lng['invoice']['qty'] = 'Mængde';
$lng['invoice']['unit_price'] = 'Stykpris';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Moms';
$lng['invoice']['new_listing'] = 'Ny annonce';
$lng['invoice']['renew_listing'] = 'Fornyelse af annonce';
$lng['invoice']['featured_eo'] = 'Ekstra visning';
$lng['invoice']['highlited_eo'] = 'Fremhævet annonce';
$lng['invoice']['priority_eo'] = 'Prioriteret annonce';
$lng['invoice']['video_eo'] = 'Videoannonce';
$lng['invoice']['new_credits_pkg'] = 'New credits plan purchase';
$lng['invoice']['store'] = 'Forhandlerside';
$lng['invoice']['new_subscription'] = 'Ny tilmelding';
$lng['invoice']['renew_subscription'] = 'Fornyelse af tilmelding';
$lng['weeks'] = 'Uger';
$lng['week'] = 'Uge';
$lng['months'] = 'Måneder';
$lng['month'] = 'Måned';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Vis WhatsApp';
$lng['general']['to_top'] = 'Gå til toppen';
$lng['quick_search']['location'] = 'Postnummer eller by';
$lng['listings']['see_all'] = 'Se alle annoncer »';
$lng['listings']['ads'] = 'annoncer';
$lng['listings']['user_since'] = 'Bruger siden';
$lng['listings']['contact_details'] = 'Kontaktoplysninger';
$lng['listings']['favourite'] = 'Favorit';
$lng['listings']['manage_ad'] = 'Administrer din annonce';
$lng['useraccount']['show_bids'] = 'Vis bud';
$lng['listings']['report_abusive'] = 'Rapporter annonce';
$lng['listings']['enable_auction'] = 'Aktiver auktion';
$lng['invoice']['download'] = 'Download faktura';


$lng['register']['group'] = 'Kontotype';
$lng['register']['change_group'] = 'Skift kontotype';
$lng['register']['select_group'] = 'Vælg gruppe';

$lng['search']['private'] = 'Private ejere';
$lng['search']['professional'] = 'Professionelle';
$lng['search']['save_your_search2'] = 'Vil du gemme din søgning?';
$lng['search']['save_search'] = 'Gem søgning';
$lng['search']['refine_your_search'] = 'Rediger din søgning';
$lng['search']['hide_refine'] = 'Skjul redigering';

$lng['listings']['view_all_featured'] = 'Vis alle annoncer med Ekstra Visning>>';
$lng['listings']['view_all_latest'] = 'Vis alle seneste >>';
$lng['listings']['view_all_auctions'] = 'Vis alle auktioner >>';
$lng['listings']['auctions'] = 'Auktioner';
$lng['listings']['view_ads_from'] = 'Vis annoncer fra';
$lng['location']['change_location'] = 'Skift lokation';

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