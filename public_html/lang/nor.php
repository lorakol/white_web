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
$lng['navbar']['login'] = 'Logg inn';
$lng['navbar']['logout'] = 'Logg ut';
$lng['navbar']['recent_ads'] = 'Nyeste annonser';
$lng['navbar']['register'] = 'Registrer konto';
$lng['navbar']['submit_ad'] = 'Legg ut annonse';
$lng['navbar']['editad'] = 'Rediger annonse';
$lng['navbar']['my_account'] = 'Min konto';
$lng['navbar']['administrator_panel'] = 'Adminpanel';
$lng['navbar']['contact'] = 'Kontakt oss';
$lng['navbar']['password_recovery'] = 'Gjenopprett passord';
$lng['navbar']['renew_listing'] = 'Forny annonse';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Send inn';
$lng['general']['search'] = 'Søk';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['activeads'] = 'annonser';
$lng['general']['activead'] = 'annonse';
$lng['general']['subcats'] = 'underkategorier';
$lng['general']['subcat'] = 'underkategori';
$lng['general']['view_ads'] = 'Vis annonser';
$lng['general']['back'] = '&laquo; Tilbake';
$lng['general']['goto'] = 'Gå til';
$lng['general']['page'] = 'Side';
$lng['general']['of'] = 'av';
$lng['general']['other'] = 'Annet';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Legg til';
$lng['general']['delete_all'] = 'Slett alle valgte';
$lng['general']['action'] = 'Foreta endring';
$lng['general']['edit'] = 'Rediger';
$lng['general']['delete'] = 'Slett';
$lng['general']['total'] = 'Totalt';
$lng['general']['min'] = 'Minimun';
$lng['general']['max'] = 'Maksimum';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = 'Du er ikke autorisert til å se denne siden!';
$lng['general']['access_restricted'] = 'Din tilgang til denne siden var begrenset!';
$lng['general']['featured_ads'] = 'Profilerte annonser';
$lng['general']['latest_ads'] = 'Siste annonser';
$lng['general']['quick_search'] = 'Hurtigsøk';
$lng['general']['go'] = 'Gå';
$lng['general']['unlimited'] = 'Ubegrenset';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'En fil med samme navn finnes allerede og kan ikke overskrives!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Det er ikke tillatt å laste opp filer større enn ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Bildedimensjoner er for store! Vennligst last opp fil med maksimum ::MAX_FILE_WIDTH::px bredde og maksimum ::MAX_FILE_HEIGHT::px høyde !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Filen kunne ikke lastes opp!';
$lng['images']['errors']['no_file'] = 'Vennligst velg fil å laste opp!';
$lng['images']['errors']['no_folder'] = 'Opplastingsmappen finnes ikke!';
$lng['images']['errors']['folder_not_writeable'] = 'Opplastinsmappen er ikke skrivbar!';
$lng['images']['errors']['file_type_not_accepted'] = 'Den opplastede filtypen er ikke en bildefil eller støttes ikke!';
$lng['images']['errors']['error'] = 'Det har oppstått en feil ved å laste opp filen. Feilen som oppsto var: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Mappen for småbilder finnes ikke!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Opplastingsmappen for småbilder er ikke skrivbar!';
$lng['images']['errors']['no_jpg_support'] = 'JPG støttes ikke!';
$lng['images']['errors']['no_png_support'] = 'PNG støttes ikke!';
$lng['images']['errors']['no_gif_support'] = 'GIF støttes ikke!';
$lng['images']['errors']['jpg_create_error'] = 'Det oppsto en feil i å opprettte JPEG-bilde fra kilde!';
$lng['images']['errors']['png_create_error'] = 'Det oppsto en feil i å opprettte PNG-bilde fra kilde!';
$lng['images']['errors']['gif_create_error'] = 'Det oppsto en feil i å opprettte GIF-bilde fra kilde!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Logg inn';
$lng['login']['logout'] = 'Logg ut';
$lng['login']['username'] = 'Brukernavn';
$lng['login']['password'] = 'Passord';
$lng['login']['forgot_pass'] = 'Glemt ditt passord?';
$lng['login']['click_here'] = 'Trykk her for og tilbakestille passordet!';

$lng['login']['errors']['password_missing'] = 'Vennligst fyll inn passordet ditt!';
$lng['login']['errors']['username_missing'] = 'Vennligst fyll inn brukernavnet ditt!';
$lng['login']['errors']['username_invalid'] = 'Brukernavnet er ugyldig!';
$lng['login']['errors']['invalid_username_pass'] = 'Ugyldig brukernavn eller passord!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Logg ut';
$lng['logout']['loggedout'] = 'Du er nå utlogget!Velkommen igjen:-)';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrer';
$lng['users']['repeat_password'] = 'Gjenta passord';
$lng['users']['image_verification_info'] = 'Vennligst skriv inn teksten som vises i bildet i boksen nedenfor.<br /> Mulige tegn er bokstaver fra A til H i små bokstaver<br /> og tall fra 1 til 9.';
$lng['users']['already_logged_in'] = 'Du er allerede logget inn!';
$lng['users']['select'] = 'Velg';

$lng['users']['info']['activate_account'] = 'En e-post er sendt til kontoen din.Vennligst følg instruksjonen for å aktivere kontoen din.';
$lng['users']['info']['welcome_user'] = 'Din konto ble opprettet.<br> Vennligst <a href="login.php">logg inn</a> til din konto!';
$lng['users']['info']['awaiting_admin_verification'] = 'Din konto venter på administrator verifisering. Du vil bli varslet på e-post når kontoen er aktiv.';
$lng['users']['info']['account_info_updated'] = 'Din kontoinformasjon er oppdatert!';
$lng['users']['info']['password_changed'] = 'Ditt passord er endret!';
$lng['users']['info']['account_activated'] = 'Din konto er aktivert! Vennligst <a href="login.php">logg inn</a> til din konto.';

$lng['users']['errors']['username_missing'] = 'Vennligst fyll inn brukernavn!';
$lng['users']['errors']['invalid_username'] = 'Ugyldig brukernavn!';
$lng['users']['errors']['username_exists'] = 'Brukernavn finnes allerede! Vennligst logg inn hvis du allerede har en konto!';
$lng['users']['errors']['email_missing'] = 'Vennligst skriv inn e-postadresse!';
$lng['users']['errors']['invalid_email'] = 'Ugyldig e-postadresse!';
$lng['users']['errors']['passwords_dont_match'] = 'Passordene stemmer ikke overens!';
$lng['users']['errors']['email_exists'] = 'E-postadressen er allerede i bruk! Vennligst logg inn hvis du allerede har en konto!';
$lng['users']['errors']['password_missing'] = 'Vennligst skriv inn passord!';
$lng['users']['errors']['invalid_validation_string'] = 'Ugyldig validerings streng!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Ugyldig konto eller aktiveringsnøkkel! Vennligst kontakt support!';
$lng['users']['errors']['account_already_active'] = 'Din konto er allerede aktivert!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Annonse';
$lng['listings']['category'] = 'Kategori';
$lng['listings']['package'] = 'Plantype';
$lng['listings']['price'] = 'Pris';
$lng['listings']['ad_description'] = 'Beskriv din annonse';
$lng['listings']['title'] = 'Tittel';
$lng['listings']['description'] = 'Beskrivelse';
$lng['listings']['image'] = 'Bilde';
$lng['listings']['words_left'] = 'Gjenstående ord';
$lng['listings']['enter_photos'] = 'Angi foto';
$lng['listings']['ad_information'] = 'Annonseinformasjon';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['details'] = 'Detaljer';
$lng['listings']['stock_no'] = 'Annonsenummer';
$lng['listings']['location'] = 'Lokasjon';
$lng['listings']['contact_info'] = 'Kontaktinformasjon';
$lng['listings']['email_seller'] = 'Kontakt selger';
$lng['listings']['no_recent_ads'] = 'Ingen nye annonser';
$lng['listings']['no_ads'] = 'Ingen annonser er oppført for denne kategorien';
$lng['listings']['added_on'] = 'Lagt inn den';
$lng['listings']['send_mail'] = 'Send epost til bruker';
$lng['listings']['user'] = 'Bruker';
$lng['listings']['price'] = 'Pris';
$lng['listings']['confirm_delete'] = 'Er du sikker på at du vil slette annonsen?';
$lng['listings']['confirm_delete_all'] = 'Er du sikker på at du vil slette valgte annonser?';
$lng['listings']['all'] = 'Alle annonser';
$lng['listings']['active_listings'] = 'Aktive annonser';
$lng['listings']['pending_listings'] = 'Ventende annonser';
$lng['listings']['featured_listings'] = 'Utvalgte annonser';
$lng['listings']['expired_listings'] = 'Utløpte annonser';
$lng['listings']['active'] = 'Aktiv';
$lng['listings']['inactive'] = 'Inaktiv';
$lng['listings']['pending'] = 'Ventende';
$lng['listings']['featured'] = 'Utvalgt';
$lng['listings']['expired'] = 'Utløpt';
$lng['listings']['order_by_date'] = 'Sorter etter dato';
$lng['listings']['order_by_category'] = 'Sorter etter kategori';
$lng['listings']['order_by_make'] = 'Sorter etter merke';
$lng['listings']['order_by_price'] = 'Sorter etter pris';
$lng['listings']['order_by_views'] = 'Sorter etter visninger';
$lng['listings']['order_asc'] = 'Stigende';
$lng['listings']['order_desc'] = 'Synkende';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visninger';
$lng['listings']['date'] = 'Dato';
$lng['listings']['no_listings'] = 'Ingen annonser';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Denne annonsen finnes ikke!';
$lng['listings']['mark_sold'] = 'Merk som solgt';
$lng['listings']['mark_unsold'] = 'Avmerk som solgt';
$lng['listings']['sold'] = 'Solgt';
$lng['listings']['feature'] = 'Feature';
$lng['listings']['expired_on'] = 'Utløpte den';
$lng['listings']['renew'] = 'Forny';
$lng['listings']['print_page'] = 'Skriv ut';
$lng['listings']['recommend_this'] = 'Del';
$lng['listings']['more_listings'] = 'Flere annonser fra denne brukeren';
$lng['listings']['all_listings_for'] = 'Alle annonser for';
$lng['listings']['free_category'] = 'GRATIS kategori';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Er du sikker på at du vil slette annonsebilde?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Ordkvote er overskredet! Du kan skrive maksimal ::MAX:: ord'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Din annonse inneholder forbudte ord! Vennligst se gjennom teksten din!';
$lng['listings']['errors']['title_missing']='Vennligst fyll inn en tittel for annonsen!';
$lng['listings']['errors']['category_missing']='Vennligst velg en kategori!';
$lng['listings']['errors']['invalid_category']='Ugyldig kategori!';
$lng['listings']['errors']['package_missing']='Vennligst velg pakke!';
$lng['listings']['errors']['invalid_package']='Ugyldig pakke!';
$lng['listings']['errors']['content_missing']='Vennligst sett inn innhold for annonsen!';
$lng['listings']['errors']['invalid_price']='Ugyldig pris!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Pris lav';
$lng['quick_search']['price_high'] = 'Pris høy';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Legg inn ny annonse';
$lng['useraccount']['browse_your_listings'] = 'Mine annonser';
$lng['useraccount']['modify_account_info'] = 'Kontoinformasjon';
$lng['useraccount']['order_history'] = 'Ordrehistorikk';
$lng['useraccount']['total_listings'] = 'Antall annonser';
$lng['useraccount']['total_views'] = 'Antall visninger';
$lng['useraccount']['active_listings'] = 'Aktive annonser';
$lng['useraccount']['pending_listings'] = 'Annonser på vent';
$lng['useraccount']['last_login'] = 'Sist innlogget';
$lng['useraccount']['last_login_ip'] = 'Sist innlogget fra IP adresse';
$lng['useraccount']['expired_listings'] = 'Utløpte annonser';
$lng['useraccount']['statistics'] = 'Statistikk';
$lng['useraccount']['welcome'] = 'Velkommen';
$lng['useraccount']['contact_name'] = 'Kontakt navn';
$lng['useraccount']['email'] = 'E-post';
$lng['useraccount']['password'] = 'Passord';
$lng['useraccount']['repeat_password'] = 'Gjenta passord';
$lng['useraccount']['change_password'] = 'Endre Passord';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'til';
$lng['advanced_search']['price_min'] = 'Minimum pris';
$lng['advanced_search']['price_max'] = 'Maksimum Pris';
$lng['advanced_search']['word'] = 'Skeord';
$lng['advanced_search']['sort_by'] = 'Sorter etter';
$lng['advanced_search']['sort_by_price'] = 'Sorter etter pris';
$lng['advanced_search']['sort_by_date'] = 'Sorter etter dato';
$lng['advanced_search']['sort_by_make'] = 'Sorter etter merke';
$lng['advanced_search']['sort_descendant'] = 'Sorter synkende';
$lng['advanced_search']['sort_ascendant'] = 'Sorter stigende';
$lng['advanced_search']['only_ads_with_pic'] = 'Kun annonser med foto';
$lng['advanced_search']['no_results'] = 'Ingen annonser ble funnet utfra ditt søk!';
$lng['advanced_search']['multiple_ads_matching'] = 'Det er ::NO_ADS:: annonser som passer ditt søk!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Det er en annonse som passer ditt søk!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Navn';
$lng['contact']['subject'] = 'Emne';
$lng['contact']['email'] = 'E-post';
$lng['contact']['webpage'] = 'Nettside';
$lng['contact']['comments'] = 'Melding';
$lng['contact']['message_sent'] = 'Din melding er sendt!';
$lng['contact']['sending_message_failed'] = 'Levering av melding mislyktes!';
$lng['contact']['mailto'] = 'Email To';

$lng['contact']['error']['name_missing'] = 'Vennligst skriv inn ditt navn!';
$lng['contact']['error']['subject_missing'] = 'Vennligst skriv inn ditt emne!';
$lng['contact']['error']['email_missing'] = 'Vennligst skriv inn din epost!';
$lng['contact']['error']['invalid_email'] = 'Ugyldig epost adresse!';
$lng['contact']['error']['comments_missing'] = 'Vennligst skriv inn din kommentarer!';
$lng['contact']['error']['invalid_validation_number'] = 'Ugyldig valideringsstreng!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Epost adresse';
$lng['password_recovery']['new_password'] = 'Nytt passord';
$lng['password_recovery']['repeat_new_password'] = 'Gjenta nytt passord';
$lng['password_recovery']['invalid_key'] = 'Aktiveringsnøkkelen er ugyldig eller utløpt!';

$lng['password_recovery']['email_missing'] = 'Vennligst skriv inn din epost adresse!';
$lng['password_recovery']['invalid_email'] = 'Ugyldig epost adresse';
$lng['password_recovery']['email_inexistent'] = 'Det finnes ingen bruker registrert med denne e-postadressen';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Beløp';
$lng['packages']['words'] = 'Ord';
$lng['packages']['days'] = 'Dager';
$lng['packages']['pictures'] = 'Bilder';
$lng['packages']['picture'] = 'Bilde';
$lng['packages']['available'] = 'Tilgjengelig';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Behandling';
$lng['order_history']['amount'] = 'Beløp';
$lng['order_history']['completed'] = 'Fullført';
$lng['order_history']['not_completed'] = 'Ikke fullført';
$lng['order_history']['ad_no'] = 'Annonse id';
$lng['order_history']['date'] = 'Dato';
$lng['order_history']['no_actions'] = 'Ingen ordre poster';
$lng['order_history']['order_by_date'] = 'Sorter etter dato';
$lng['order_history']['order_by_amount'] = 'Sorter etter pris';
$lng['order_history']['order_by_processor'] = 'Sorter etter behandler';
$lng['order_history']['description'] = 'Beskrivelse';
$lng['order_history']['newad'] = 'Ny annonse'; 
$lng['order_history']['renew'] = 'Fornye'; 
$lng['order_history']['featured'] = 'Utvalgt annonse'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sorter etter dato';
$lng['order']['price'] = 'Sorter etter pri';
$lng['order']['title'] = 'Sorter etter tittel';
$lng['order']['desc'] = 'Synkende';
$lng['order']['asc'] = 'Stigende';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Del denne annonse';
$lng['recommend']['your_name'] = 'Ditt navn';
$lng['recommend']['your_email'] = 'Din epost';
$lng['recommend']['friend_name'] = 'Din venn`s navn';
$lng['recommend']['friend_email'] = 'Din venn`s epost';
$lng['recommend']['message'] = 'Melding til din venn';


$lng['recommend']['error']['your_name_missing'] = 'Vennligst skriv inn ditt navn!';
$lng['recommend']['error']['your_email_missing'] = 'Vennligst skriv inn din epost!';
$lng['recommend']['error']['friend_name_missing'] = 'Vennligst skriv inn din venn`s navn!';
$lng['recommend']['error']['friend_email_missing'] = 'Vennligst skriv inn din venn`s epost!';
$lng['recommend']['error']['invalid_email'] = 'Ugyldig epost adresse';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Annonseinfo';
$lng['stats']['general'] = 'Generelt';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Abonner';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favoritter';
$lng['general']['as'] = 'som';
$lng['general']['view'] = 'Vis';
$lng['general']['none'] = 'Ingen';
$lng['general']['yes'] = 'ja';
$lng['general']['no'] = 'nei';
$lng['general']['next'] = 'Neste &raquo;';
$lng['general']['finish'] = 'Ferdig';
$lng['general']['download'] = 'Last ned';
$lng['general']['remove'] = 'Fjern';
$lng['general']['previous_page'] = '&laquo; Forrige';
$lng['general']['next_page'] = 'Neste &raquo;';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Aktiv';
$lng['general']['inactive'] = 'Inaktiv';
$lng['general']['expires'] = 'Utløper den';
$lng['general']['available'] = 'Tilgjengelig';
$lng['general']['cancel'] = 'Avbryt';
$lng['general']['never'] = 'Aldri';
$lng['general']['asc'] = 'Stigende';
$lng['general']['desc'] = 'Synkende';
$lng['general']['pending'] = 'Venter';
$lng['general']['upload'] = 'Last opp';
$lng['general']['processing'] = 'Sluttfører, vennligst vent ... ';
$lng['general']['help'] = 'Hjelp';
$lng['general']['hide'] = 'Skjul';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Skrill (Tidligere Moneybookers)';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Dette er en begrenset demo-versjon. Du har ikke tillatelse til å endre enkelte innstillinger!';
$lng['general']['check_all'] = 'Merk alle';
$lng['general']['uncheck_all'] = 'Avmerk alle';
$lng['general']['all'] = 'Alle';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Forhandlerside';
$lng['users']['store_banner'] = 'Banner for forhandlerside';
$lng['users']['waiting_mail_activation'] = 'Venter på epost aktivering';
$lng['users']['waiting_admin_activation'] = 'Venter på admin godkjenning';
$lng['users']['no_such_id'] = 'Denne brukeren finnes ikke.';

$lng['users']['info']['store_banner'] = 'Bildet (logo) som vil bli brukt som toppbilde på din forhandlerside.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Rapporter';
$lng['listings']['report_reason'] = 'Årsak til rapportering';
$lng['listings']['meta_info'] = 'Meta informasjon';
$lng['listings']['meta_keywords'] = 'Meta søkeord';
$lng['listings']['meta_description'] = 'Meta beskrivelse';
$lng['listings']['not_approved'] = 'Ikke godkjent';
$lng['listings']['approve'] = 'Godkjent';
$lng['listings']['choose_payment_method'] = 'Velg betalingsmetode';

$lng['listings']['choose_category'] = 'Velg kategori';
$lng['listings']['choose_plan'] = 'Velg pakke';
$lng['listings']['enter_ad_details'] = 'Skriv inn annonsedetaljer';
$lng['listings']['ad_details'] = 'Annonsedetaljer';
$lng['listings']['add_photos'] = 'Legg til foto';
$lng['listings']['ad_photos'] = 'Legg til foto';
$lng['listings']['edit_photos'] = 'Rediger foto';
$lng['listings']['extra_options'] = 'Ekstra alternativer';
$lng['listings']['review'] = 'Forhåndsvisning av annonse';
$lng['listings']['finish'] = 'Ferdig';
$lng['listings']['next_step'] = 'Neste steg &raquo;';
$lng['listings']['included'] = 'Inkludert';
$lng['listings']['finalize'] = 'Fullfør';
$lng['listings']['zip'] = 'Postnummer';
$lng['listings']['add_to_favourites'] = 'Legg til i favoritter';
$lng['listings']['confirm_add_to_fav'] = 'Advarsel! Du er ikke logget inn! Favorittlisten vil være midlertidig!';
$lng['listings']['add_to_fav_done'] = 'Annonsen ble lagt til i favorittlisten!';
$lng['listings']['confirm_delete_favourite'] = 'Er du sikker på at du vil slette favoritt annonse?';
$lng['listings']['no_favourites'] = 'Ingen favoritt annonser';
$lng['listings']['highlited'] = 'Fremhevet';
$lng['listings']['priority'] = 'Prioritert';
$lng['listings']['video'] = 'Video annonser';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Ventende video';
$lng['listings']['video_code'] = 'Video kode';
$lng['listings']['total'] = 'Totalt';
$lng['listings']['approve_ad'] = 'Godkjenn annonse';
$lng['listings']['finalize_later'] = 'Ferdigstille senere';
$lng['listings']['click_to_upload'] = 'Trykk for å laste opp';
$lng['listings']['files_uploaded'] = ' Foto lastet opp av totalt ';
$lng['listings']['allowed'] = ' foto tillatt!';
$lng['listings']['limit_reached'] = ' Grensen på maksimum bilder er nådd!';
$lng['listings']['edit_options'] = 'Rediger annonse alternativer';
$lng['listings']['view_store'] = 'Se forhandlerside';
$lng['listings']['edit_ad_options'] = 'Rediger annonse alternativer';
$lng['listings']['no_extra_options_selected'] = 'Ingen ekstra alternativer er valgt!';
$lng['listings']['highlited_listings'] = 'Fremhevet annonser';
$lng['listings']['for_listing'] = 'for annonse no ';
$lng['listings']['expires_on'] = 'Utløper';
$lng['listings']['expired_on'] = 'Utløpt';
$lng['listings']['pending_ad'] = 'Annonser på vent';
$lng['listings']['pending_highlited'] = 'Fremhevet annonser på vent';
$lng['listings']['pending_featured'] = 'Utvalgte annonser på vent';
$lng['listings']['pending_priority'] = 'Prioriterte annonser på vent';
$lng['listings']['enter_coupon'] = 'Skriv inn rabattkode';
$lng['listings']['discount'] = 'Rabatt';
$lng['listings']['select_plan'] = 'Velg pakke';
$lng['listings']['pending_subscription'] = 'Abonnement på vent';
$lng['listings']['remove_favourite'] = 'Fjern favoritt';

$lng['listings']['order_up'] = 'Oppgradering';
$lng['listings']['order_down'] = 'Nedgradering';

$lng['listings']['errors']['invalid_youtube_video'] = 'Ugyldig youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonnere';
$lng['useraccount']['no_package'] = 'Ingen annonseplan';
$lng['useraccount']['packages'] = 'Planpakker';
$lng['useraccount']['date_start'] = 'Startdato';
$lng['useraccount']['date_end'] = 'Sluttdato';
$lng['useraccount']['remaining_ads'] = 'Gjenstående annonser';
$lng['useraccount']['account_type'] = 'Kontotype';
$lng['useraccount']['unfinished_listings'] = 'Påbegynte annonser';
$lng['useraccount']['confirm_delete_subscription'] = 'Er du sikker på at du vil fjerne dette abonnementet?';
$lng['useraccount']['buy_store'] = 'Kjøp forhandlerside';
$lng['useraccount']['bulk_uploads'] = 'Masseopplasting';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonnement';
$lng['packages']['ads'] = 'Annonser';
$lng['packages']['name'] = 'Navn';
$lng['packages']['details'] = 'Detaljer';
$lng['packages']['no_ads'] = 'Antall annonser';
$lng['packages']['subscription_time'] = 'Abonnement tid';
$lng['packages']['no_pictures'] = 'Tillatte foto';
$lng['packages']['no_words'] = 'Antall ord';
$lng['packages']['ads_availability'] = 'Annonser tilgjengelig';
$lng['packages']['featured'] = 'Utvalgt';
$lng['packages']['highlited'] = 'Fremhevet';
$lng['packages']['priority'] = 'Prioritert';
$lng['packages']['video'] = 'Video annonser';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Legg inn annonse';
$lng['order_history']['renew_listing'] = 'Forny annonse';
$lng['order_history']['feature_listing'] = 'Utvalgt annonse';
$lng['order_history']['subscribe_to_package'] = 'Abboner på pakke';
$lng['order_history']['complete_payment'] = 'Betaling fullført';
$lng['order_history']['complete_payment_for'] = 'Betaling fullført for';
$lng['order_history']['details'] = 'Detaljer';
$lng['order_history']['subscription_no'] = 'Abbonement nummer';
$lng['order_history']['highlited'] = 'Fremhevet annonse';
$lng['order_history']['priority'] = 'Prioritert';
$lng['order_history']['video'] = 'Video annonser';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Vennligst velg pakke!';
$lng['buy_package']['error']['choose_processor'] = 'Vennligst velg betalingstype!';
$lng['buy_package']['error']['invalid_processor'] = 'Ugyldig betalingsbehandler!';
$lng['buy_package']['error']['invalid_package'] = 'Ugyldig pakke!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ugyldig Paypal transaksjonen!';
$lng['2co']['invalid_transaction'] = 'Ugyldig 2Checkout transaksjon!';
$lng['moneybookers']['invalid_transaction'] = 'Ugyldig Skrill transaksjon!';
$lng['authorize']['invalid_transaction'] = 'Ugyldig Authorize.net transaksjon!';
$lng['manual']['invalid_transaction'] = 'Ugyldig transaksjon!';

$lng['paypal']['transaction_canceled'] = 'Paypal transaksjon kansellert!';
$lng['2co']['transaction_canceled'] = '2Checkout transaksjon kansellert!';
$lng['mb']['transaction_canceled'] = 'Skrill transaksjon kansellert!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transaksjon kansellert!';
$lng['manual']['transaction_canceled'] = 'Transaksjonen er kansellert!';
$lng['epay']['transaction_canceled'] = 'ePay transaksjon kansellert!';

$lng['payments']['transaction_already_processed'] = 'Transaksjonen har allerede blitt behandlet!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Godkjenn abonnement';
$lng['subscribe']['payment_method'] = 'Betalingsmåte';
$lng['subscribe']['renew_subscription'] = 'Forny abonnement';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopier epost: ';
$lng['bcc_mails']['from'] = 'Fra: ';
$lng['bcc_mails']['to'] = 'Til: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Status på masseopplasting: ';
$lng['ie']['successfully'] = 'annonser suksessfullt lagt til';
$lng['ie']['failed'] = 'mislyktes';
$lng['ie']['uploaded_listings'] = 'Opplastede annonseliste:';
$lng['ie']['errors']['upload_import_file'] = 'Vennligst last opp filen som skal importeres fra!';
$lng['ie']['errors']['incorrect_file_type'] = 'Feil filtype! Filtypen må være: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kunne ikke åpne filen!';
$lng['ie']['errors']['choose_categ'] = 'Vennligst velg en kategori!';
$lng['ie']['errors']['could_not_save_file'] = 'Kan ikke laste ned filen: ';
$lng['ie']['errors']['required_field_missing'] = 'Obligatorisk felt mangler: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Uriktige dataelementer teller for rad mangler eller er feil: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Velg forhandler';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Områdesøk';
$lng['areasearch']['all_locations'] = 'Alle lokasjoner';
$lng['areasearch']['exact_location'] = 'Nøyaktig lokasjon';
$lng['areasearch']['around'] = 'rundt';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nei';
$lng['general']['or'] = 'eller';
$lng['general']['in'] = 'i';
$lng['general']['by'] = 'av';
$lng['general']['close_window'] = 'Lukk vindu';
$lng['general']['more_options'] = 'flere alternativer &raquo;';
$lng['general']['less_options'] = '&laquo; mindre alternativer';
$lng['general']['send'] = 'Send';
$lng['general']['save'] = 'Lagre';
$lng['general']['for'] = 'for';
$lng['general']['to'] = 'til';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Merk som utleid';
$lng['listings']['mark_unrented'] = 'Avmerk som utleid';
$lng['listings']['rented'] = 'Utleid';
$lng['listings']['your_info'] = 'Din informasjon';
//******
$lng['listings']['email'] = 'Din e-post adresse';
$lng['listings']['name'] = 'Ditt navn';

$lng['listings']['listing_deleted'] = 'Din annonse er slettet!';
$lng['listings']['post_without_login'] = 'Legg inn annonse uten innlogging';
$lng['listings']['waiting_activation'] = 'Venter på aktivering';
$lng['listings']['waiting_admin_approval'] = 'Venter på godkjenning fra staff';
$lng['listings']['dont_need_account'] = 'Trenger ikke en konto? Legg inn annonsen uten innlogging!';
$lng['listings']['post_your_ad'] = 'Legg inn din annonse!';
$lng['listings']['posted'] = 'Annonse lagt ut';
$lng['listings']['select_subscription'] = 'Velg abonnement';
$lng['listings']['choose_subscription'] = 'Velg abonnement';
$lng['listings']['inactive_listings'] = 'Inaktive annonser';
//*********
$lng['listings']['error']['your_email_missing'] = 'Fyll inn din e-postadresse. Dette vil bli brukt til å administrere annonser.';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Spesifiser søk';
$lng['search']['refine_by_keyword'] = 'Spesifiser etter søkeord';
$lng['search']['showing'] = 'Viser';
$lng['search']['more'] = 'Mer ...';
$lng['search']['less'] = 'Mindre ...';
$lng['search']['search_for'] = 'Søk etter';
$lng['search']['save_your_search'] = 'Lagre søket';
$lng['search']['save'] = 'Lagre';
$lng['search']['search_saved'] = 'Ditt søk er lagret!';
$lng['search']['must_login_to_save_search'] = 'Du må logge deg inn på kontoen din for å lagre søket!';
$lng['search']['view_search'] = 'Vis søk';
$lng['search']['all_categories'] = 'Alle kategorier';
$lng['search']['more_than'] = 'mer enn';
$lng['search']['less_than'] = 'mindre enn';

$lng['search']['error']['cannot_save_empty_search'] = 'Ditt søk inneholder ingen vilkår slik at det ikke kan lagres!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Lagrede søk';
$lng['useraccount']['view_saved_searches'] = 'Vis lagrede søk';
$lng['useraccount']['no_saved_searches'] = 'Ingen lagrede søk';
$lng['useraccount']['recurring'] = 'Periodisk';
$lng['useraccount']['date_renew'] = 'Dato fornyet';
$lng['useraccount']['logged_in_as'] = 'Du er logget inn som ';
$lng['useraccount']['subscriptions'] = 'Abonnementer';

$lng['users']['activate_account'] = 'Aktiver konto';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Legg til abonnement';
$lng['subscriptions']['package'] = 'Abonnement';
$lng['subscriptions']['remaining_ads'] = 'Gjenstående annonser';
$lng['subscriptions']['recurring'] = 'Periodisk';
$lng['subscriptions']['date_start'] = 'Startdato';
$lng['subscriptions']['date_end'] = 'Sluttdato';
$lng['subscriptions']['date_renew'] = 'Dato fornyet';
$lng['subscriptions']['confirm_delete'] = 'Er du sikker på at du vil slette abonnementet?';
$lng['subscriptions']['no_subscriptions'] = 'Ingen abonnementer';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Har du fortsatt ikke konto hos oss?<br>Registrer deg under hvor det står Registrer konto!';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Aktiver gjentakende betalinger for dette abonnementet';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Følgende obligatoriske felter mangler: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Kjøp forhandlerside';


$lng['images']['errors']['max_photos'] = 'Maksimum foto lastet opp!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-postvarsel';
$lng['alerts']['email_alerts'] = 'E-postvarslinger';
$lng['alerts']['no_alerts'] = 'Ingen e-postvarslinger';
$lng['alerts']['view_email_alerts'] = 'Vis dine epostvarslinger';
$lng['alerts']['send_email_alerts'] = 'Send epostvarslinger';
$lng['alerts']['immediately'] = 'Umiddelbart';
$lng['alerts']['daily'] = 'Daglig';
$lng['alerts']['weekly'] = 'Ukentlig';
$lng['alerts']['your_email'] = 'Din e-post adresse';
$lng['alerts']['create_alert'] = 'Opprett e-postvarsel';
$lng['alerts']['email_alert_info'] = 'Motta e-postvarsler når nye annonser kommer for dette søket.';
$lng['alerts']['alert_added'] = 'Din varsling er opprettet!';
$lng['alerts']['alert_added_activate'] = 'Du vil motta en e-post om kort tid på <b>::EMAIL::</b>. Vennligst klikk på linken i e-posten for å aktivere ditt e-postvarsel!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Søk i';
$lng['alerts']['keyword'] = 'søkeord';
$lng['alerts']['frequency'] = 'Varsel frekvens';
$lng['alerts']['alert_activated'] = 'Ditt varsel er aktivert! Du vil nå begynne å motta e-post for ditt ønskede varsel.';
$lng['alerts']['alert_unsubscribed'] = 'Ditt varsel er slettet!';
$lng['alerts']['started_on'] = 'Startet ved';
$lng['alerts']['no_terms_searched'] = 'Det er ingen vilkår som er satt for dette søket!';
$lng['alerts']['no_listings'] = 'Ingen annonser for dette varselet!';

$lng['alerts']['error']['email_required'] = 'Skriv inn en e-postadresse for din varsling!';
$lng['alerts']['error']['invalid_email'] = 'Ugyldig varslings e-postadresse!';
$lng['alerts']['error']['invalid_frequency'] = 'Ugyldig varsling frekvens!';
$lng['alerts']['error']['login_required'] = 'Vennligst <a href="::LINK::">logg inn</a> på for å kunne registrere et varsel!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Vennligst velg minst ét søkenøkkel unntatt kategori!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ugyldig varslingsbekreftelse!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ugyldig forespørsel på oppsigelse!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Lånekalkulator';
$lng_loancalc['sale_price'] = 'Salgspris';
$lng_loancalc['down_payment'] = 'Nedbetaling';
$lng_loancalc['trade_in_value'] = 'Innbytteverdi';
$lng_loancalc['loan_amount'] = 'Lånebeløp';
$lng_loancalc['sales_tax'] = 'Merverdiavgift';
$lng_loancalc['interest_rate'] = 'Rentesats';
$lng_loancalc['loan_term'] = 'Lånets løpetid';
$lng_loancalc['months'] = 'måneder';
$lng_loancalc['years'] = 'år';
$lng_loancalc['or'] = 'eller';
$lng_loancalc['monthly_payment'] = 'Månedlig betaling';
$lng_loancalc['calculate'] = 'Beregn (Estimert beløp)';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Kommentarer';
$lng_comments['make_a_comment'] = 'Skriv en kommentar';
$lng_comments['login_to_post'] = 'Vennligst <a href="::LOGIN_LINK::">logg inn</a> så du kan poste kommentar';

$lng_comments['name'] = 'Navn';
$lng_comments['email'] = 'E-post';
$lng_comments['website'] = 'Nettside';
$lng_comments['submit_comment'] = 'Legg inn kommentar';

$lng_comments['error']['name_missing'] = 'Vennligst skriv inn ditt navn!';
$lng_comments['error']['content_missing'] = 'Vennligst skriv inn din kommentar!';
$lng_comments['error']['website_missing'] = 'Vennligst skriv inn din nettside!';
$lng_comments['error']['email_missing'] = 'Vennligst skriv inn din epost adresse!';
$lng_comments['error']['listing_id_missing'] = 'Ugyldig kommentar oppføring!';

$lng_comments['error']['invalid_email'] = 'Ugyldig e-postadresse!';
$lng_comments['error']['invalid_website'] = 'Ugylsig nettside!';
$lng_comments['errors']['badwords'] = 'Din kommentar inneholder forbudte ord! Vennligst rediger din melding!';

$lng_comments['info']['comment_added'] = 'Din kommentar ble lagt til! Trykk <a id="newad">her</a> hvis du ønsker og legge til en annen kommentar.';
$lng_comments['info']['comment_pending'] = 'Din kommentar venter på staff verifisering.';




// ----------------- end comments module --------------------


$lng['tb']['next'] = 'NESTE &raquo;';
$lng['tb']['prev'] = '&laquo; FORRIGE';
$lng['tb']['close'] = 'Lukk';
$lng['tb']['or_esc'] = 'eller trykk ESC på tastaturet';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Meldinger';
$lng['messages']['confirm_delete_all'] = 'Er du sikker på at du vil slette valgte meldinger?';
$lng['messages']['listing'] = 'Annonse';
$lng['messages']['no_messages'] = 'Ingen meldinger';
$lng['general']['reply'] = 'Svar på melding';
$lng['messages']['message'] = 'Melding';
$lng['messages']['from'] = 'Fra';
$lng['messages']['to'] = 'Til';
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'Vis tråd';
$lng['messages']['started_for_listing'] = 'Startet for annonse';
$lng['messages']['view_complete_message'] = 'Vis hele meldingen her';
$lng['messages']['message_history'] = 'Meldingshistorie';
$lng['messages']['yourself'] = 'Du';
$lng['messages']['report_spam'] = 'Rapporter som spam';
$lng['messages']['reported_as_spam'] = 'Rapportert som spam';
$lng['messages']['confirm_report_spam'] = 'Er du sikker på at du vil rapportere denne meldingen som spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Ugyldig annonse ID';
$lng['listings']['show_map'] = 'Vis kart';
$lng['listings']['hide_map'] = 'Skjul kart';
$lng['listings']['see_full_listing'] = 'Se full annonse';
$lng['listings']['list'] = 'Listevisning';
$lng['listings']['gallery'] = 'Fotovisning';
$lng['listings']['remove_fav_done'] = 'Annonsen ble fjernet fra favorittliste!';
$lng['search']['high_no_results'] = 'Antall søkeresultater er svært høy. De oppførte resultatene er begrenset til de mest relevante resultatene dine. Vennligst avgrens søket ytterligere for å redusere antallet resultater og få mer relevante resultater!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Denne e-postadressen er ikke tillatt!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Du har ikke tillatelse til å bruke dette abonnementet lenger, da det maksimale antallet er nådd!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Velg plassering';
$lng['location']['choose'] = 'Velg';
$lng['location']['change'] = 'Endre';
$lng['location']['all_locations'] = 'Alle plasseringer';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategori';
$lng['location']['save_location'] = 'Lagre lokasjon';

$lng['credits']['credits'] = 'Kreditter';
$lng['credits']['credit'] = 'Kreditt';
$lng['credits']['pending_credits'] = 'Ventende kreditter';
$lng['credits']['current_credits'] = 'Nåværende kreditter';
$lng['credits']['one_credit_equals'] = 'En likeverdig kreditt';
$lng['credits']['credits_amount'] = 'Kredittbeløp';
$lng['credits']['buy_extra_credits'] = 'Kjøp ekstra kreditter';
$lng['credits']['credits_package'] = 'Kredittpakke';
$lng['credits']['select_package'] = 'Velg kreditt pakke';
$lng['credits']['choose_package'] = 'Velg pakke';
$lng['credits']['you_currently_have'] = 'Du har for øyeblikket ';
$lng['credits']['you_currently_have_no_credits'] = 'Du har for øyeblikket ingen kreditt ';
$lng['credits']['pay_using_credits'] = 'Betal med kreditt';
$lng['credits']['not_enough_credits'] = 'Ikke nok kreditt for denne betalingen!';
$lng['credits']['scredits'] = 'Kreditter';
$lng['credits']['scredit'] = 'Kreditt';



$lng['order_history']['credits_purchase'] = 'Kjøp av kreditter';
$lng['order_history']['invalid_order'] = 'Ugyldig ordre!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Vennligst vent mens du blir omdirigert!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Vennligst <a href="::LOGIN_LINK::">logg inn</a> slik at du kan se kontaktinformasjonen!';
$lng['listing']['no_contact_information'] = 'Ingen kontaktinformasjon er tilgjengelig.';


$lng['navbar']['register_as'] = 'Registrer som';
$lng['listings']['all_ads'] = 'Alle annonser';
$lng['listings']['refine'] = 'Spesifiser';
$lng['listings']['results'] = 'resultater';
$lng['listings']['photos'] = 'foto';
$lng['listings']['user_details'] = 'Se brukerdetaljer';
$lng['listings']['back_to_details'] = 'Tilbake til annonseinformasjon';

$lng['listings']['post_free_ad'] = 'Sett inn en gratis annonse';

$lng['users']['username_available'] = 'Brukernavnet er tilgjengelig!';
$lng['users']['username_not_available'] = 'Brukernavnet ikke tilgjengelig!';

$lng['general']['not_found'] = 'Den forespurte siden ble ikke funnet!';
$lng['general']['full_version'] = 'Fullversjon';
$lng['general']['mobile_version'] = 'Mobilversjon';

$lng['failed'] = 'Mislyktes';
$lng['remember_me'] = 'Husk meg';

$lng['less_than_a_minute'] = 'mindre enn ett minutt siden';
$lng['minute'] = 'minutt';
$lng['minutes'] = 'minutter';
$lng['hour'] = 'time';
$lng['hours'] = 'timer';
$lng['yesterday'] = 'I går';
$lng['day'] = 'dag';
$lng['days'] = 'dager';
$lng['ago_postfix'] = ' siden';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------


// ------------------- version 8.01 ------------------

$lng['today'] = 'I dag';
$lng['messages']['confirm_delete'] = 'Er du sikker på at du vil slette denne meldingen?';
$lng['listings']['change_category'] = 'Endre kategori';
$lng['listings']['change_plan'] = 'Velg en annen pakke';
$lng['listings']['choose_active_subscription'] = 'Velg fra dine aktive abonnementer';


$lng['useraccount']['request_removal'] = 'Forespørsel om fjerning av konto';
$lng['useraccount']['request_removal_now'] = 'Send inn forespørsel om kontofjerning nå!';
$lng['useraccount']['removal_verification_sent'] = 'Du vil motta en e-post med en bekreftelseslenke. Vennligst klikk på linken for å bekrefte forespørsel om fjerning!';

$lng['contact']['message_waits_admin_aproval'] = 'Din melding vil bli levert når den er godkjent av staff!';

$lng['general']['accept'] = 'Aksepter';
$lng['general']['decline'] = 'Avslå';

$lng['general']['tax'] = 'Skatt';
$lng['general']['total_with_tax'] = 'Totalt inkludert skatt';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'I kategori';

$lng['users']['user_info'] = 'Brukerinformasjon';
$lng['users']['store_info'] = 'Butikkinformasjon';
$lng['users']['user_listings'] = 'Alle annonser';

$lng['login']['errors']['invalid_email_pass'] = 'Ugyldig epost eller passord!';
$lng['general']['or'] = 'eller';
$lng['newad']['choose_a_new_plan'] = 'Velg en ny pakke';

$lng['listings']['no_extra_options_available'] = 'Det er ingen ekstra alternativer tilgjengelig!';

$lng['listings']['map'] = 'Kart';

$lng['users']['affiliate'] = 'Partner';
$lng['users']['affiliate_id'] = 'Partner id';
$lng['users']['affiliate_link'] = 'Partnerlink';
$lng['users']['affiliate_paypal_email'] = 'Partner PayPal konto';
$lng['users']['info']['affiliate_paypal_email'] = 'Du vil motta dine inntjente inntekter fra oss på denne PayPal kontoen';
$lng['users']['errors']['affiliate_paypal_email'] = 'Skriv inn din PayPal-konto! Du vil motta dine inntjente inntekter fra oss på denne PayPal kontoen';

$lng['listings']['result'] = 'resultater';

$lng['confirm_delete'] = 'Er du sikker på at du vil slette det valgte elementet?';
$lng['confirm_delete_all'] = 'Er du sikker på at du vil slette de valgte elementene?';

$lng['general']['show'] = 'Vis';
$lng['general']['on_a_page'] = 'på en side';
$lng['general']['return'] = 'Gå tilbake';

$lng['login']['register_for_free'] = 'Registrer deg gratis!';
$lng['general']['sent'] = 'Sendt';
$lng['general']['received'] = 'Mottatt';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Du er ikke logget inn!';
$lng['newad']['or_post_without_account'] = 'eller fortsett å legge inn annonse uten konto!';

$lng_comments['scomments'] = 'kommentarer';
$lng_comments['scomment'] = 'kommentar';
$lng['general']['on'] = 'på';

$lng['affiliates']['last_payment'] = 'Siste betaling';
$lng['affiliates']['last_payment_date'] = 'Siste betalingsdato';
$lng['affiliates']['next_payment_date'] = 'Neste betalingsdato';
$lng['affiliates']['total_due'] = 'Total inntekt';
$lng['affiliates']['total_payments'] = 'Totalt mottatte betalinger';
$lng['affiliates']['revenue_history'] = 'Omsetningshistorikk';
$lng['affiliates']['payments_history'] = 'Betalingshistorikk';
$lng['affiliates']['pending_payment'] = 'Betaling på vent';
$lng['affiliates']['released'] = 'Frigjort';
$lng['affiliates']['not_released'] = 'Ikke frigjort';
$lng['affiliates']['paid'] = 'Betalt';
$lng['affiliates']['not_paid'] = 'Ikke betalt';

$lng['general']['no_items'] = 'Ingen eksemplarer';
$lng['useraccount']['amount_start'] = 'Beløp fra';
$lng['useraccount']['amount_end'] = 'Beløp til';
$lng['not_allowed_to_post_ads'] = 'Du har ikke tillatelse til å legge inn annonser med denne kontoen!';

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
