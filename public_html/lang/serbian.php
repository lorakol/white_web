<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Početna';
$lng['navbar']['login'] = 'Prijavite se';
$lng['navbar']['logout'] = 'Odjavite se';
$lng['navbar']['recent_ads'] = 'Najnoviji Oglasi';
$lng['navbar']['register'] = 'Registrujte se';
$lng['navbar']['submit_ad'] = 'POSTAVITE OGLAS';
$lng['navbar']['editad'] = 'Izmenite oglas';
$lng['navbar']['my_account'] = 'Moj nalog';
$lng['navbar']['administrator_panel'] = 'Administratorski Panel';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Zaboravio/la sam lozinku';
$lng['navbar']['renew_listing'] = 'Obnovite oglas';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Postavite';
$lng['general']['search'] = 'Pretraži';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['activeads'] = 'aktivni oglasi';
$lng['general']['activead'] = 'aktivni oglas';
$lng['general']['subcats'] = 'podkategorije';
$lng['general']['subcat'] = 'podkategorija';
$lng['general']['view_ads'] = 'Pogledajte Oglase';
$lng['general']['back'] = '« Nazad';
$lng['general']['goto'] = 'Idite na';
$lng['general']['page'] = 'Stranica';
$lng['general']['of'] = 'od';
$lng['general']['other'] = 'Ostalo';
$lng['general']['paypal'] = 'PayPal';
$lng['general']['2co'] = '2Checkout';
$lng['general']['check'] = 'ček';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Dodajte';
$lng['general']['delete_all'] = 'Obrišite sve izabrano';
$lng['general']['action'] = 'Akcija';
$lng['general']['edit'] = 'Izmenite oglas';
$lng['general']['delete'] = 'Obrišite';
$lng['general']['total'] = 'Ukupno';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'BESPLATNO';
$lng['general']['not_authorized'] = 'Niste autorizovani da vidite ovu stranicu!';
$lng['general']['access_restricted'] = 'Pristup ovoj stranici je zabranjen!';
$lng['general']['featured_ads'] = 'Top Oglasi';
$lng['general']['latest_ads'] = 'Najnoviji Oglasi';
$lng['general']['quick_search'] = 'Brza pretraga';
$lng['general']['go'] = 'Idi';
$lng['general']['unlimited'] = 'Neograničeno';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Fajl sa ovim imenom već postoji i ne može biti zamenjen!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Nije vam dozvoljeno da postavljate fajlove veće od ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Dimenzije slike su prevelike! Postavite slike sa maksimalno ::MAX_FILE_WIDTH::px širine i ::MAX_FILE_HEIGHT::px visine!';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Fajl ne može biti postavljen!';
$lng['images']['errors']['no_file'] = 'Izaberite fajl za postavljanje!';
$lng['images']['errors']['no_folder'] = 'Folder za postavljanje ne postoji!';
$lng['images']['errors']['folder_not_writeable'] = 'Folder za postavljanje nije upisiv!';
$lng['images']['errors']['file_type_not_accepted'] = 'Postavljen fajl nije slika ili ovaj tip fajla nije podržan!';
$lng['images']['errors']['error'] = 'Desila se greška prilikom postavljanja fajla. Greška je: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Folder za postavljanje malih slika ne postoji!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Folder za postavljanje malih slika nije upisiv!';
$lng['images']['errors']['no_jpg_support'] = 'Nema podrške za JPG!';
$lng['images']['errors']['no_png_support'] = 'Nema podrške za PNG!';
$lng['images']['errors']['no_gif_support'] = 'Nema podrške za GIF!';
$lng['images']['errors']['jpg_create_error'] = 'Greška prilikom kreiranja JPG slike od izvora!';
$lng['images']['errors']['png_create_error'] = 'Greška prilikom kreiranja PNG slike od izvora!';
$lng['images']['errors']['gif_create_error'] = 'Greška prilikom kreiranja GIF slike od izvora!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Prijavite se';
$lng['login']['logout'] = 'Odjavite se';
$lng['login']['username'] = 'Korisničko ime';
$lng['login']['password'] = 'Lozinka';
$lng['login']['forgot_pass'] = 'Zaboravili ste lozinku?';
$lng['login']['click_here'] = 'Kliknite ovde';

$lng['login']['errors']['password_missing'] = 'Unesite svoju lozinku!';
$lng['login']['errors']['username_missing'] = 'Unesite svoje korisničko ime!';
$lng['login']['errors']['username_invalid'] = 'Korisničko ime je nevažeće!';
$lng['login']['errors']['invalid_username_pass'] = 'Nevažeće korisničko ime ili lozinka!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Odjavite se';
$lng['logout']['loggedout'] = 'Odjavljeni ste!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrujte se';
// $lng['users']['contact_name'] = 'Kontakt ime';
$lng['users']['email'] = 'Email';
$lng['users']['address'] = 'Adresa';
$lng['users']['password'] = 'Lozinka';
$lng['users']['repeat_password'] = 'Ponovite lozinku';
$lng['users']['image_verification_info'] = 'Unesite tekst prikazan na slici u polje ispod.<br /> Mogući karakteri su slova od a do z<br /> i brojevi od 1 do 9.';
$lng['users']['already_logged_in'] = 'Već ste prijavljeni!';
$lng['users']['select'] = 'Odaberite';

$lng['users']['info']['activate_account'] = 'Da bi potvrdili Vaš nalog, upravo smo Vam poslali e-mail za aktivaciju naloga. Molimo Vas da pratite uputstva za aktivaciju naloga.';
$lng['users']['info']['welcome_user'] = 'Vaš nalog je kreiran. Molimo vas da se prijavite na vaš nalog!';
$lng['users']['info']['awaiting_admin_verification'] = 'Vaš nalog je na čekanju i čeka na odobrenje Administratora. Bićete obavešteni putem emaila kada vaš nalog bude aktiviran.';
$lng['users']['info']['account_info_updated'] = 'Informacije na nalogu su ažurirane!';
$lng['users']['info']['password_changed'] = 'Vaša lozinka je promenjena!';
$lng['users']['info']['account_activated'] = 'Vaš nalog je aktiviran! Molimo vas da se <a href="login.html">prijavite na vaš nalog.';

$lng['users']['errors']['username_missing'] = 'Unesite korisničko ime!';
$lng['users']['errors']['invalid_username'] = 'Nevažeće korisničko ime!';
$lng['users']['errors']['username_exists'] = 'Korisničko ime već postoji! Prijavite se ako već posedujete nalog!';
$lng['users']['errors']['email_missing'] = 'Unesite email adresu!';
$lng['users']['errors']['invalid_email'] = 'Nevažeća email adresa!';
$lng['users']['errors']['passwords_dont_match'] = 'Lozinke se ne slažu!';
$lng['users']['errors']['email_exists'] = 'Email adresa već postoji! Prijavite se ako već posedujete nalog!';
//$lng['users']['errors']['contact_name_missing'] = 'Unesite ime za kontakt!';
$lng['users']['errors']['password_missing'] = 'Unesite lozinku!';
$lng['users']['errors']['invalid_validation_string'] = 'Nevažeća validacija!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Nevažeći nalog ili aktivacioni ključ! Kontaktirajte Administratora!';
$lng['users']['errors']['account_already_active'] = 'Vaš nalog je već aktiviran!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Oglas';
$lng['listings']['category'] = 'Kategorija';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Cena';
$lng['listings']['ad_description'] = 'Opis Oglasa';
$lng['listings']['title'] = 'Naslov';
$lng['listings']['description'] = 'Opis';
$lng['listings']['image'] = 'Slika';
$lng['listings']['words_left'] = 'Preostalo reči';
$lng['listings']['enter_photos'] = 'Ubacite slike';
$lng['listings']['ad_information'] = 'Dodajte informacije';
$lng['listings']['free'] = 'BESPLATAN';
$lng['listings']['details'] = 'Detalji';
$lng['listings']['stock_no'] = 'Na lageru';
$lng['listings']['location'] = 'Lokacija';
$lng['listings']['contact_info'] = 'Kontakt Informacije';
$lng['listings']['email_seller'] = 'Pošalji poruku';
$lng['listings']['no_recent_ads'] = 'Nema oglasa';
$lng['listings']['no_ads'] = 'Nema oglasa za navedenu kategoriju';
$lng['listings']['added_on'] = 'Postavljen';
$lng['listings']['send_mail'] = 'Pošaljite email korisniku';
$lng['listings']['details'] = 'Detalji';
$lng['listings']['user'] = 'Korisnik';
$lng['listings']['price'] = 'Cena';
$lng['listings']['confirm_delete'] = 'Sigurni ste da želite obrisati oglas?';
$lng['listings']['confirm_delete_all'] = 'Sigurni ste da želite obrisati sve izabrane oglase?';
$lng['listings']['all'] = 'Svi oglasi';
$lng['listings']['active_listings'] = 'Aktivni oglasi';
$lng['listings']['pending_listings'] = 'Oglasi na čekanju';
$lng['listings']['featured_listings'] = 'Top Oglasi';
$lng['listings']['expired_listings'] = 'Istekli oglasi';
$lng['listings']['active'] = 'Aktivni';
$lng['listings']['inactive'] = 'Neaktivni';
$lng['listings']['pending'] = 'Na čekanju';
$lng['listings']['featured'] = 'Top Oglasi';
$lng['listings']['expired'] = 'Istekli';
$lng['listings']['order_by_date'] = 'po datumu';
$lng['listings']['order_by_category'] = 'po kategoriji';
$lng['listings']['order_by_make'] = 'po marki';
$lng['listings']['order_by_price'] = 'po ceni';
$lng['listings']['order_by_views'] = 'po pregledima';
$lng['listings']['order_asc'] = 'U usponu';
$lng['listings']['order_desc'] = 'U padu';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Pregleda';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Nema oglasa';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Ovaj oglas ne postoji!';
$lng['listings']['mark_sold'] = 'Markirajte kao prodato';
$lng['listings']['mark_unsold'] = 'Odmarkirajte kao prodato';
$lng['listings']['sold'] = 'Prodato';
$lng['listings']['feature'] = 'Karakteristike';
$lng['listings']['expired_on'] = 'Istekao';
$lng['listings']['renew'] = 'Obnovite';
$lng['listings']['print_page'] = 'Štampajte';
$lng['listings']['recommend_this'] = 'Podelite';
$lng['listings']['more_listings'] = 'Više oglasa od ovog korisnika';
$lng['listings']['all_listings_for'] = 'Svi oglasi za';
$lng['listings']['free_category'] = 'Besplatna kategorija';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Da li ste sigurni da želite obrisati ovu sliku sa oglasa?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Dostigli ste maksimalan broj reči! Ograničenje je ::MAX:: reči'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Vaš oglas sadrži zabranjene reči! Molimo vas da pregledate svoj sadržaj!';
$lng['listings']['errors']['title_missing']='Unesite naslov oglasa!';
$lng['listings']['errors']['category_missing']='Izaberite kategoriju!';
$lng['listings']['errors']['invalid_category']='Nevažeća kategorija!';
$lng['listings']['errors']['package_missing']='Izaberite plan!';
$lng['listings']['errors']['invalid_package']='Nevažeći plan!';
$lng['listings']['errors']['content_missing']='Unesite sadržaj vašeg oglasa!';
$lng['listings']['errors']['invalid_price']='Nevažeća cena!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Niža cena';
$lng['quick_search']['price_high'] = 'Viša cena';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Postavite novi oglas';
$lng['useraccount']['browse_your_listings'] = 'Moji oglasi';
$lng['useraccount']['modify_account_info'] = 'Moj Nalog';
$lng['useraccount']['order_history'] = 'Istorija plaćanja';
$lng['useraccount']['total_listings'] = 'Ukupno oglasa';
$lng['useraccount']['total_views'] = 'Ukupno pregleda';
$lng['useraccount']['active_listings'] = 'Aktivni oglasi';
$lng['useraccount']['pending_listings'] = 'Oglasi na čekanju';
$lng['useraccount']['last_login'] = 'Poslednja prijava';
$lng['useraccount']['last_login_ip'] = 'IP adresa sa poslednje prijave';
$lng['useraccount']['expired_listings'] = 'Oglasi koji su istekli';
$lng['useraccount']['statistics'] = 'Statistika';
$lng['useraccount']['welcome'] = 'Dobrodošli';
$lng['useraccount']['contact_name'] = 'Ime kontakta';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Lozinka';
$lng['useraccount']['repeat_password'] = 'Ponovite lozinku';
$lng['useraccount']['change_password'] = 'Promenite lozinku';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'do';
$lng['advanced_search']['price_min'] = 'Minimalna cena';
$lng['advanced_search']['price_max'] = 'Maksimalna cena';
$lng['advanced_search']['word'] = 'Ključna reč';
$lng['advanced_search']['sort_by'] = 'Poređajte';
$lng['advanced_search']['sort_by_price'] = 'po ceni';
$lng['advanced_search']['sort_by_date'] = 'po datumu';
$lng['advanced_search']['sort_by_make'] = 'po marki';
$lng['advanced_search']['sort_descendant'] = 'po padu';
$lng['advanced_search']['sort_ascendant'] = 'po usponu';
$lng['advanced_search']['only_ads_with_pic'] = 'Samo oglasi sa slikama';
$lng['advanced_search']['no_results'] = 'Nema oglasa koji odgovaraju vašoj pretrazi!';
$lng['advanced_search']['multiple ads_matching'] = 'Nema ::NO_ADS:: oglasa koji odgovaraju vašoj pretrazi!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Postoji jedan oglas koji odgovara vašoj pretrazi!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Ime';
$lng['contact']['subject'] = 'Naslov';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Web stranica';
$lng['contact']['comments'] = 'Komentar';
$lng['contact']['message_sent'] = 'Vaša poruka je poslata!';
$lng['contact']['sending_message_failed'] = 'Isporuka poruke nije uspela!';
$lng['contact']['mailto'] = 'Pošaljite email';

$lng['contact']['error']['name_missing'] = 'Unesite svoje ime!';
$lng['contact']['error']['subject_missing'] = 'Unesite naslov!';
$lng['contact']['error']['email_missing'] = 'Unesite email adresu!';
$lng['contact']['error']['invalid_email'] = 'Nevažeća email adresa!';
$lng['contact']['error']['comments_missing'] = 'Unesite komentar!';
$lng['contact']['error']['invalid_validation_number'] = 'Nevažeći validacioni broj!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email adresa';
$lng['password_recovery']['new_password'] = 'Nova lozinka';
$lng['password_recovery']['repeat_new_password'] = 'Ponovite novu lozinku';
$lng['password_recovery']['invalid_key'] = 'Nevažeći ključ';

$lng['password_recovery']['email_missing'] = 'Unesite svoju email adresu!';
$lng['password_recovery']['invalid_email'] = 'Nevažeća email adresa';
$lng['password_recovery']['email_inexistent'] = 'Nema registrovanih korisnika sa ovom email adresom';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Iznos';
$lng['packages']['words'] = 'Reči';
$lng['packages']['days'] = 'Dana';
$lng['packages']['pictures'] = 'Slike';
$lng['packages']['picture'] = 'Slika';
$lng['packages']['available'] = 'Trajanje';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Obrađivanje';
$lng['order_history']['amount'] = 'Iznos';
$lng['order_history']['completed'] = 'Plaćeno';
$lng['order_history']['not_completed'] = 'Nije plaćeno';
$lng['order_history']['ad_no'] = 'ID oglasa';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Nema zapisa narudžbi';
$lng['order_history']['order_by_date'] = 'po datumu';
$lng['order_history']['order_by_amount'] = 'po iznosu';
$lng['order_history']['order_by_processor'] = 'Poređajte po obradi';
$lng['order_history']['description'] = 'Opis';
$lng['order_history']['newad'] = 'Novi oglas'; 
$lng['order_history']['renew'] = 'Obnoviti'; 
$lng['order_history']['featured'] = 'Top Oglas'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'po datumu';
$lng['order']['price'] = 'po ceni';
$lng['order']['title'] = 'po naslovu';
$lng['order']['desc'] = 'U padu';
$lng['order']['asc'] = 'U usponu';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Podelite ovaj oglas';
$lng['recommend']['your_name'] = 'Vaše ime';
$lng['recommend']['your_email'] = 'Vaš email';
$lng['recommend']['friend_name'] = 'Prijateljevo ime';
$lng['recommend']['friend_email'] = 'Prijateljeva email adresa';
$lng['recommend']['message'] = 'Poruka prijatelju';


$lng['recommend']['error']['your_name_missing'] = 'Unesite svoje ime!';
$lng['recommend']['error']['your_email_missing'] = 'Unesite svoju email adresu!';
$lng['recommend']['error']['friend_name_missing'] = 'Unesite prijateljevo ime!';
$lng['recommend']['error']['friend_email_missing'] = 'Unesite prijateljevu email adresu!';
$lng['recommend']['error']['invalid_email'] = 'Nevažeća email adresa';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Oglasi';
$lng['stats']['general'] = 'Generalno';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Pretplatite se';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Omiljeni oglasi';
$lng['general']['as'] = 'kao';
$lng['general']['view'] = 'Pogledajte';
$lng['general']['none'] = 'Ništa';
$lng['general']['yes'] = 'da';
$lng['general']['no'] = 'ne';
$lng['general']['next'] = 'Sledeće »';
$lng['general']['finish'] = 'Završite';
$lng['general']['download'] = 'Skinite';
$lng['general']['remove'] = 'Obrišite';
$lng['general']['previous_page'] = '« Prethodno';
$lng['general']['next_page'] = 'Sledeće »';
$lng['general']['items'] = 'stavke';
$lng['general']['active'] = 'Aktivan';
$lng['general']['inactive'] = 'Neaktivan';
$lng['general']['expires'] = 'Ističe';
$lng['general']['available'] = 'Na raspolaganju';
$lng['general']['cancel'] = 'Poništite';
$lng['general']['never'] = 'Nikada';
$lng['general']['asc'] = 'U usponu';
$lng['general']['desc'] = 'U padu';
$lng['general']['pending'] = 'Na čekanju';
$lng['general']['upload'] = 'Ubacite';
$lng['general']['processing'] = 'Obrađujem, pričekajte malo ... ';
$lng['general']['help'] = 'Pomoć';
$lng['general']['hide'] = 'Sakrijte';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Ovo je limitirana demo verzija. Nije vam dozvoljeno da modifikujete određena podešavanja!';
$lng['general']['check_all'] = 'Markirajte sve';
$lng['general']['uncheck_all'] = 'Odmarkirajte sve';
$lng['general']['all'] = 'Sve';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Dilerska stranica';
$lng['users']['store_banner'] = 'Baner dilerske stranice';
$lng['users']['waiting_mail_activation'] = 'čeka na email aktivaciju';
$lng['users']['waiting_admin_activation'] = 'čeka na odobrenje Administratora';
$lng['users']['no_such_id'] = 'Ovaj korisnik ne postoji.';

$lng['users']['info']['store_banner'] = 'Slika koja će biti korišćena na vrhu vaše dilerske stranice.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Prijavite nepravilan oglas';
$lng['listings']['report_reason'] = 'Razlog prijave';
$lng['listings']['meta_info'] = 'Meta informacije';
$lng['listings']['meta_keywords'] = 'Meta ključne reči';
$lng['listings']['meta_description'] = 'Meta opis';
$lng['listings']['not_approved'] = 'Nije odobren';
$lng['listings']['approve'] = 'Odobriti';
$lng['listings']['choose_payment_method'] = 'Izaberite metodu plaćanja';

$lng['listings']['choose_category'] = 'Izaberite kategoriju';
$lng['listings']['choose_plan'] = 'Izaberite plan';
$lng['listings']['enter_ad_details'] = 'Unesite detalje oglasa';
$lng['listings']['ad_details'] = 'Detalji oglasa';
$lng['listings']['add_photos'] = 'Dodajte slike';
$lng['listings']['ad_photos'] = 'Slike oglasa';
$lng['listings']['edit_photos'] = 'Izmenite slike';
$lng['listings']['extra_options'] = 'Ekstra opcije';
$lng['listings']['review'] = 'Pregled oglasa';
$lng['listings']['finish'] = 'Završiti';
$lng['listings']['next_step'] = 'Sledeći korak »';
$lng['listings']['included'] = 'Uključen';
$lng['listings']['finalize'] = 'Završiti';
$lng['listings']['zip'] = 'Zip kod';
$lng['listings']['add_to_favourites'] = 'Dodajte u omiljene oglase';
$lng['listings']['confirm_add_to_fav'] = 'Upozorenje! Niste prijavljeni! Lista omiljenih oglasa će biti samo privremena!';
$lng['listings']['add_to_fav_done'] = 'Oglas je dodat u listu omiljenih oglasa!';
$lng['listings']['confirm_delete_favourite'] = 'Da li ste sigurni da želite obrisati oglas sa liste omiljenih oglasa?';
$lng['listings']['no_favourites'] = 'Nema omiljenih oglasa';
$lng['listings']['extra_options'] = 'Ekstra opcije';
$lng['listings']['highlited'] = 'Naglašeni';
$lng['listings']['priority'] = 'Prioritet';
$lng['listings']['video'] = 'Video oglasi';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video na čekanju';
$lng['listings']['video_code'] = 'Video kod';
$lng['listings']['total'] = 'Ukupno';
$lng['listings']['approve_ad'] = 'Odobriti oglas';
$lng['listings']['finalize_later'] = 'Završiti kasnije';
$lng['listings']['click_to_upload'] = 'Kliknite za uvoz';
$lng['listings']['files_uploaded'] = ' Ukupno uveženih slika ';
$lng['listings']['allowed'] = ' dozvoljene slike!';
$lng['listings']['limit_reached'] = ' Dostignut je maksimalan broj slika!';
$lng['listings']['edit_options'] = 'Izmenite opcije oglasa';
$lng['listings']['view_store'] = 'Pregledajte dilersku stranicu';
$lng['listings']['edit_ad_options'] = 'Ekstra opcije';
$lng['listings']['no_extra_options_selected'] = 'Nema odabranih ekstra opcija!';
$lng['listings']['highlited_listings'] = 'Naglašeni oglasi';
$lng['listings']['for_listing'] = 'za oglas broj ';
$lng['listings']['expires_on'] = 'Ističe';
$lng['listings']['expired_on'] = 'Istekao';
$lng['listings']['pending_ad'] = 'Oglas na čekanju';
$lng['listings']['pending_highlited'] = 'Naglašeni na čekanju';
$lng['listings']['pending_featured'] = 'Top Oglasi na čekanju';
$lng['listings']['pending_priority'] = 'Prioritet na čekanju';
$lng['listings']['enter_coupon'] = 'Unesite kod popusta';
$lng['listings']['discount'] = 'Popust';
$lng['listings']['select_plan'] = 'Izaberite plan';
$lng['listings']['pending_subscription'] = 'Pretplata na čekanju';
$lng['listings']['remove_favourite'] = 'Uklonite omiljeno';

$lng['listings']['order_up'] = 'Poređajte gore';
$lng['listings']['order_down'] = 'Poređajte dole';

$lng['listings']['errors']['invalid_youtube_video'] = 'Nevažeći youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Pretplatite se';
$lng['useraccount']['no_package'] = 'Nema oglasnog plana';
$lng['useraccount']['packages'] = 'Planovi';
$lng['useraccount']['date_start'] = 'Datum početka';
$lng['useraccount']['date_end'] = 'Datum završetka';
$lng['useraccount']['remaining_ads'] = 'Preostalo oglasa';
$lng['useraccount']['account_type'] = 'Tip naloga';
$lng['useraccount']['unfinished_listings'] = 'Nezavršeni oglasi';
$lng['useraccount']['confirm_delete_subscription'] = 'Da li ste sigurni da želite ukloniti ovu pretplatu?';
$lng['useraccount']['buy_store'] = 'Kupite dilersku stranicu';
$lng['useraccount']['bulk_uploads'] = 'Masivni uvoz';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Pretplata';
$lng['packages']['ads'] = 'Oglasi';
$lng['packages']['name'] = 'Ime';
$lng['packages']['details'] = 'Detalji';
$lng['packages']['no_ads'] = 'Broj oglasa';
$lng['packages']['subscription_time'] = 'Trajanje pretplate';
$lng['packages']['no_pictures'] = 'Dozvoljeno slika';
$lng['packages']['no_words'] = 'Broj reči';
$lng['packages']['ads_availability'] = 'Vidljivost oglasa';
$lng['packages']['featured'] = 'Top Oglasi';
$lng['packages']['highlited'] = 'Naglašeni';
$lng['packages']['priority'] = 'Prioritet';
$lng['packages']['video'] = 'Video oglasi';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Pretplata';
$lng['order_history']['post_listing'] = 'Dodajte oglas';
$lng['order_history']['renew_listing'] = 'Obnavljanje oglasa';
$lng['order_history']['feature_listing'] = 'Top Oglasi';
$lng['order_history']['subscribe_to_package'] = 'Pretplatite se na plan';
$lng['order_history']['complete_payment'] = 'Izvrši uplatu';
$lng['order_history']['complete_payment_for'] = 'Izvršite uplata za :';
$lng['order_history']['details'] = 'Detalji';
$lng['order_history']['subscription_no'] = 'Pretplata broj';
$lng['order_history']['highlited'] = 'Naglašeni oglas';
$lng['order_history']['priority'] = 'Prioritet';
$lng['order_history']['video'] = 'Video oglasi';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Izaberite plan!';
$lng['buy_package']['error']['choose_processor'] = 'Izaberite tip plaćanja!';
$lng['buy_package']['error']['invalid_processor'] = 'Nevažeće obrađivanje plaćanja!';
$lng['buy_package']['error']['invalid_package'] = 'Nevažeći plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Nevažeća Paypal transakcija!';
$lng['2co']['invalid_transaction'] = 'Nevažeća 2Checkout transakcija!';
$lng['moneybookers']['invalid_transaction'] = 'Nevažeća Moneybookers transakcija!';
$lng['authorize']['invalid_transaction'] = 'Nevažeća Authorize.net transakcija!';
$lng['manual']['invalid_transaction'] = 'Nevažeća transakcija!';

$lng['paypal']['transaction_canceled'] = 'Paypal transakcija je poništena!';
$lng['2co']['transaction_canceled'] = '2Checkout transakcija je poništena!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transakcija je poništena!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transakcija je poništena!';
$lng['manual']['transaction_canceled'] = 'Transakcija je poništena!';
$lng['epay']['transaction_canceled'] = 'ePay transakcija je poništena!';

$lng['payments']['transaction_already_processed'] = 'Transakcija je već obrađena!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Odobriti pretplate';
$lng['subscribe']['payment_method'] = 'Metode plaćanja';
$lng['subscribe']['renew_subscription'] = 'Obnovite pretplatu';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopirajte email: ';
$lng['bcc_mails']['from'] = 'Od: ';
$lng['bcc_mails']['to'] = 'Za: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Status postavljanja: ';
$lng['ie']['successfully'] = 'Oglas je uspešno dodat';
$lng['ie']['failed'] = 'greška';
$lng['ie']['uploaded_listings'] = 'Lista postavljenih oglasa:';
$lng['ie']['errors']['upload_import_file'] = 'Otpremite datoteku za uvoz!';
$lng['ie']['errors']['incorrect_file_type'] = 'Nevažeći tip fajla! Tip fajla mora biti: ';
$lng['ie']['errors']['could_not_open_file'] = 'Fajl ne može biti otvoren!';
$lng['ie']['errors']['choose_categ'] = 'Izaberite kategoriju!';
$lng['ie']['errors']['could_not_save_file'] = 'Nije moguće preuzeti fajl: ';
$lng['ie']['errors']['required_field_missing'] = 'Zahtevana polja nedostaju: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Neispravni elementi: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Izaberite dilera';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Pretraga oblasti';
$lng['areasearch']['all_locations'] = 'Sve lokacije';
$lng['areasearch']['exact_location'] = 'Tačna lokacija';
$lng['areasearch']['around'] = 'oko';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Da';
$lng['general']['No'] = 'Ne';
$lng['general']['or'] = 'ili';
$lng['general']['in'] = 'u';
$lng['general']['by'] = 'po';
$lng['general']['close_window'] = 'Zatvorite prozor';
$lng['general']['more_options'] = 'više opcija »';
$lng['general']['less_options'] = '« manje opcija';
$lng['general']['send'] = 'Pošaljite';
$lng['general']['save'] = 'Sačuvajte';
$lng['general']['for'] = 'za';
$lng['general']['to'] = 'na';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Markirajte kao iznajmljeno';
$lng['listings']['mark_unrented'] = 'Odmarkirajte kao iznajmljeno';
$lng['listings']['rented'] = 'Iznajmljeno';
$lng['listings']['your_info'] = "Vaše informacije";
//******
$lng['listings']['email'] = "Vaša email adresa";
$lng['listings']['name'] = "Vaše ime";

$lng['listings']['listing_deleted'] = "Vaš oglas je obrisan!";
$lng['listings']['post_without_login'] = "Dodajte oglas bez prijavljivanja";
$lng['listings']['waiting_activation'] = 'čeka na aktivaciju';
$lng['listings']['waiting_admin_approval'] = 'čeka na odobrenje Administratora';
$lng['listings']['dont_need_account'] = 'Nije vam potreban nalog? Postavite oglas bez prijavljivanja!';
$lng['listings']['post_your_ad'] = '<b>POSTAVI OGLAS</b>';
$lng['listings']['posted'] = 'Postavljen';
$lng['listings']['select_subscription'] = 'Nastavi sa Postavljanjem Oglasa';
$lng['listings']['choose_subscription'] = 'Izaberite pretplatu';
$lng['listings']['inactive_listings'] = 'Neaktivni oglasi';
//*********
$lng['listings']['error']['your_email_missing'] = 'Molimo vas da unesete svoju email adresu. Biće korišćena za upravljanje oglasom.';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Kategorije i filteri';
$lng['search']['refine_by_keyword'] = 'Pretraži po ključnoj reči';
$lng['search']['showing'] = 'Pokazuje';
$lng['search']['more'] = 'Više ...';
$lng['search']['less'] = 'Manje ...';
$lng['search']['search_for'] = 'Tražim...';
$lng['search']['save_your_search'] = 'Sačuvajte pretragu';
$lng['search']['save'] = 'Sačuvajte';
$lng['search']['search_saved'] = 'Vaša pretraga je sačuvana!';
$lng['search']['must_login_to_save_search'] = 'Morate se prijaviti na nalog ako želite sačuvati pretragu!';
$lng['search']['view_search'] = 'Pogledajte pretragu';
$lng['search']['all_categories'] = 'Sve kategorije';
$lng['search']['more_than'] = 'više od';
$lng['search']['less_than'] = 'manje od';

$lng['search']['error']['cannot_save_empty_search'] = 'Vaša pretraga ne sadrži nikakve uslove i ne može biti sačuvana!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Sačuvane pretrage';
$lng['useraccount']['view_saved_searches'] = 'Pogledajte sačuvane pretrage';
$lng['useraccount']['no_saved_searches'] = 'Nema sačuvanih pretraga';
$lng['useraccount']['recurring'] = 'Ponavljanje';
$lng['useraccount']['date_renew'] = 'Datum obnavljanja';
$lng['useraccount']['logged_in_as'] = 'Prijavljeni ste kao ';
$lng['useraccount']['subscriptions'] = 'Pretplate';

$lng['users']['activate_account'] = 'Aktivirajte nalog';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Dodajte pretplatu';
$lng['subscriptions']['package'] = 'Pretplata';
$lng['subscriptions']['remaining_ads'] = 'Preostalo oglasa';
$lng['subscriptions']['recurring'] = 'Koji se ponavlja';
$lng['subscriptions']['date_start'] = 'Datum početka';
$lng['subscriptions']['date_end'] = 'Datum isteka';
$lng['subscriptions']['date_renew'] = 'Datum obnove';
$lng['subscriptions']['confirm_delete'] = 'Sigurno želite obrisati ovu pretplatu?';
$lng['subscriptions']['no_subscriptions'] = 'Nema pretplata';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = "Još nemate nalog?? ";

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Omogućiti periodično plaćanje za ovu pretplatu';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Sledeća zahtevana polja nisu popunjena: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Kupite dilersku stranicu';


$lng['images']['errors']['max_photos'] = 'Postavljen je maksimalan broj slika!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email obaveštenje';
$lng['alerts']['email_alerts'] = 'Email obaveštenja';
$lng['alerts']['no_alerts'] = 'Nema email obaveštenja';
$lng['alerts']['view_email_alerts'] = 'Pogledaj email obaveštenja';
$lng['alerts']['send_email_alerts'] = 'Pošaljite email obaveštenja';
$lng['alerts']['immediately'] = 'Odmah';
$lng['alerts']['daily'] = 'Dnevno';
$lng['alerts']['weekly'] = 'Nedeljno';
$lng['alerts']['your_email'] = 'vaša email adresa';
$lng['alerts']['create_alert'] = 'Kreirajte obaveštenje';
$lng['alerts']['email_alert_info'] = 'Primite email obaveštenje kada se pojavi novi oglas za ovu pretragu.';
$lng['alerts']['alert_added'] = 'Vaše obaveštenje je kreirano!';
$lng['alerts']['alert_added_activate'] = 'Uskoro će vam stići email na <b>::EMAIL::</b>. Kliknite na link u email-u kako bi ste aktivirali email obaveštenja!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Pretražite u';
$lng['alerts']['keyword'] = 'ključna reč';
$lng['alerts']['frequency'] = 'Frekvencija obaveštenja';
$lng['alerts']['alert_activated'] = 'Vaše obaveštenje je aktivirano! Sada će vam stizati email-ovi za vaša obaveštenja.';
$lng['alerts']['alert_unsubscribed'] = 'Vaše obaveštenje je obrisano!';
$lng['alerts']['started_on'] = 'Započeto';
$lng['alerts']['no_terms_searched'] = 'Nema postavljenih uslova za ovu pretragu!';
$lng['alerts']['no_listings'] = 'Nema oglasa za ovo obaveštenje!';

$lng['alerts']['error']['email_required'] = 'Unesite email adresu za primanje vaših obaveštenja!';
$lng['alerts']['error']['invalid_email'] = 'Nevažeća email adresa za primanje obaveštenja!';
$lng['alerts']['error']['invalid_frequency'] = 'Nevažeća frekvencija obaveštenja!';
$lng['alerts']['error']['login_required'] = 'Molimo vas da se <a href="::LINK::">prijavite</a> ako želite primati obaveštenja!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Odaberite bar jednu reč za pretragu, osim kategorije!';
$lng['alerts']['error']['invalid_confirmation'] = 'Nevažeća potvrda obaveštenja!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Nevažeći zahtev za odjavljivanje pretplate!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kalkulator kredita';
$lng_loancalc['sale_price'] = 'Prodajna cena';
$lng_loancalc['down_payment'] = 'Učešće';
$lng_loancalc['trade_in_value'] = 'Valuta';
$lng_loancalc['loan_amount'] = 'Iznos kredita';
$lng_loancalc['sales_tax'] = 'Porez na promet';
$lng_loancalc['interest_rate'] = 'Kamatna stopa';
$lng_loancalc['loan_term'] = 'Trajanje kredita';
$lng_loancalc['months'] = 'meseci';
$lng_loancalc['years'] = 'godina';
$lng_loancalc['or'] = 'ili';
$lng_loancalc['monthly_payment'] = 'Mesečno plaćanje';
$lng_loancalc['calculate'] = 'Izračunajte';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Komentari';
$lng_comments['make_a_comment'] = 'Komentarišite';
$lng_comments['login_to_post'] = 'Molimo vas da se <a href="::LOGIN_LINK::">prijavite</a> ako želite komentarisati.';

$lng_comments['name'] = 'Ime';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Websajt';
$lng_comments['submit_comment'] = 'Pošaljite komentar';

$lng_comments['error']['name_missing'] = 'Unesite svoje ime!';
$lng_comments['error']['content_missing'] = 'Unesite komentar!';
$lng_comments['error']['website_missing'] = 'Unesite link ka websajtu!';
$lng_comments['error']['email_missing'] = 'Unesite email adresu!';
$lng_comments['error']['listing_id_missing'] = 'Nevažeći unos komentara!';

$lng_comments['error']['invalid_email'] = 'Nevažeća email adresa!';
$lng_comments['error']['invalid_website'] = 'Nevažeći link ka websajtu!';
$lng_comments['errors']['badwords'] = 'Vaš komentar sadrži zabranjene reči! Molimo vas da izmenite svoju poruku!';

$lng_comments['info']['comment_added'] = 'Vaš komentar je dodat! Kliknite <a id="newad">ovde</a> ako želite dodati još komentara.';
$lng_comments['info']['comment_pending'] = 'Vaš komentar je na čekanju i čeka na odobrenje Administratora.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'SLEDEćI »';
$lng['tb']['prev'] = '« PRETHODNI';
$lng['tb']['close'] = 'ZATVORI';
$lng['tb']['or_esc'] = 'ili ESC taster';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Poruke';
$lng['messages']['confirm_delete_all'] = 'Da li ste sigurni da želite obrisati izabrane poruke?';
$lng['messages']['listing'] = 'Oglas';
$lng['messages']['no_messages'] = 'Nema poruka';
$lng['general']['reply'] = 'Odgovorite na poruku';
$lng['messages']['message'] = 'Poruka';
$lng['messages']['from'] = 'Od';
$lng['messages']['to'] = 'Za';
$lng['messages']['on'] = 'Na';
$lng['messages']['view_thread'] = 'Pogledajte temu';
$lng['messages']['started_for_listing'] = 'Započeto za oglas';
$lng['messages']['view_complete_message'] = 'Pogledajte ovde celu poruku';
$lng['messages']['message_history'] = 'Istorija poruka';
$lng['messages']['yourself'] = 'Ja';
$lng['messages']['report_spam'] = 'Prijavite kao spam';
$lng['messages']['reported_as_spam'] = 'Prijavljena kao spam';
$lng['messages']['confirm_report_spam'] = 'Da li ste sigurni da želite prijaviti ovu poruku kao spam?';


// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Nevažeći ID oglasa';
$lng['listings']['show_map'] = 'Prikaži mapu';
$lng['listings']['hide_map'] = 'Sakrij mapu';
$lng['listings']['see_full_listing'] = 'Vidite ceo oglas';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Slike';
$lng['listings']['remove_fav_done'] = 'Oglas je uklonjen sa liste omiljenih oglasa!';
$lng['search']['high_no_results'] = 'Broj rezultata za pretragu je veoma visok. Navedeni rezultati su ograničeni na najsličnije oglase. Precizirajte pretragu u cilju smanjenja broja rezultata!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Ova email adresa nije dozvoljena!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Nije vam više dozvoljeno da koristite ovu pretplatu, dostignut je maksimalan broj upotrebe!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Izaberite lokaciju';
$lng['location']['choose'] = 'Izaberite';
$lng['location']['change'] = 'Promenite';
$lng['location']['all_locations'] = 'Sve lokacije';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategorija';
$lng['location']['save_location'] = 'Sačuvajte lokaciju';

$lng['credits']['credits'] = 'Kredita';
$lng['credits']['credit'] = 'Kredit';
$lng['credits']['pending_credits'] = 'Krediti na čekanju';
$lng['credits']['current_credits'] = 'Trenutno kredita';
$lng['credits']['one_credit_equals'] = 'Jedasn kredit je jadnako';
$lng['credits']['credits_amount'] = 'Iznos kredita';
$lng['credits']['buy_extra_credits'] = 'Kupite ekstra kredita';
$lng['credits']['credits_package'] = 'Kreditni paket';
$lng['credits']['select_package'] = 'Izaberite kreditni paket';
$lng['credits']['choose_package'] = 'Izaberite paket';
$lng['credits']['you_currently_have'] = 'Trenutno imate ';
$lng['credits']['you_currently_have_no_credits'] = 'Trenutno nemate kredita ';
$lng['credits']['pay_using_credits'] = 'Plati kreditima';
$lng['credits']['not_enough_credits'] = 'Nema dosta kredita za ovu kupovinu!';
$lng['credits']['scredits'] = 'kredita';
$lng['credits']['scredit'] = 'kredit';



$lng['order_history']['credits_purchase'] = 'Kupovina kredita';
$lng['order_history']['invalid_order'] = 'Nevažeća narudžba!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Pričekajte dok ne budete preusmereni!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Molimo vas da se <a href="::LOGIN_LINK::">prijavite</a> ako želite pogledati kontakt informacije!';
$lng['listing']['no_contact_information'] = 'Kontakt informacije nisu dostupne.';


$lng['navbar']['register_as'] = 'Registrujte se kao';
$lng['listings']['all_ads'] = 'Svi oglasi';
$lng['listings']['refine'] = 'Prečisti';
$lng['listings']['results'] = 'rezultati';
$lng['listings']['photos'] = 'slike';
$lng['listings']['user_details'] = 'Kontakt Informacije';
$lng['listings']['back_to_details'] = 'Nazad na detalje oglasa';

$lng['listings']['post_free_ad'] = 'Postavite besplatno oglas';

$lng['users']['username_available'] = 'Korisničko ime je dostupno!';
$lng['users']['username_not_available'] = 'Korisničko ime nije dostupno!';

$lng['general']['not_found'] = 'Zahtevana stranica nije pronađena!';
$lng['general']['full_version'] = 'Cela verzija';
$lng['general']['mobile_version'] = 'Mobilna verzija';

$lng['failed'] = 'Neuspelo';
$lng['remember_me'] = 'Zapamti me';

$lng['less_than_a_minute'] = "pre jedne minute";
$lng['minute'] = "minut";
$lng['minutes'] = "minute";
$lng['hour'] = "sat";
$lng['hours'] = "sati";
$lng['yesterday'] = "Juče";
$lng['day'] = "dan";
$lng['days'] = "dana";
$lng['ago_postfix'] = " pre";
$lng['ago_prefix'] = "";

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = "Danas";
$lng['messages']['confirm_delete'] = 'Da li ste sigurni da zelite da obrisete ovu poruku?';
$lng['listings']['change_category'] = 'Promeni kategoriju';
$lng['listings']['change_plan'] = 'Izaberite drugi plan';
$lng['listings']['choose_active_subscription'] = 'Choose from your active subscriptions';


$lng['useraccount']['request_removal'] = 'Request account removal';
$lng['useraccount']['request_removal_now'] = 'Request removal now!';
$lng['useraccount']['removal_verification_sent'] = 'You will receive an email containing a verification link. Please click the link in order to confirm the removal request!';

$lng['contact']['message_waits_admin_aproval'] = 'Your message will be delivered once approved by administrator!';

$lng['general']['accept'] = "Prihvatam";
$lng['general']['decline'] = "Ne prihvatam";

$lng['general']['tax'] = 'Tax';
$lng['general']['total_with_tax'] = 'Total with tax';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'U kategoriji';

$lng['users']['user_info'] = 'User information';
$lng['users']['store_info'] = 'Store information';
$lng['users']['user_listings'] = 'Svi Oglasi';

$lng['login']['errors']['invalid_email_pass'] = 'Pogresan email ili lozinka!';
$lng['general']['or'] = 'or';
$lng['newad']['choose_a_new_plan'] = 'Izaberite novi plan';

$lng['listings']['no_extra_options_available'] = 'Nema dostupnih extra opcija!';

$lng['listings']['map'] = 'Mapa';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'rezultat';

$lng['confirm_delete'] = 'Are you sure you want to delete the selected item?';
$lng['confirm_delete_all'] = 'Are you sure you want to delete the selected items?';

$lng['general']['show'] = 'Prikazi';
$lng['general']['on_a_page'] = 'na strani';
$lng['general']['return'] = 'Povratak';

$lng['login']['register_for_free'] = "Naravi nalog BESPLATNO!";
$lng['general']['sent'] = 'Sent';
$lng['general']['received'] = 'Received';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = "Niste prijavljeni !";
$lng['newad']['or_post_without_account'] = "ili nastavite bez prijave na vas nalog!";

$lng_comments['scomments'] = 'komentari';
$lng_comments['scomment'] = 'komentar';
$lng['general']['on'] = 'za';

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
$lng['home_search_h1'] = 'Beogradski Oglasi';
$lng['home_search_h2'] = 'Sve na jednom mestu...';
$lng['nemas_nalog'] = 'Nemaš nalog ?';

$lng['naziv_kategorija'] = 'Najnovini Oglasi';


$lng['searach_placeholder2'] = 'Grad,lokacija..';
$lng['searach_placeholder'] = 'Tražim...';


$lng['post_heading'] = 'Postavi Svoj Oglas';
$lng['post_detail'] = 'Postavite besplatno oglas na sajt...';

$lng['create_heading'] = 'Upravljaj Oglasima';
$lng['create_detail'] = 'Upravljaj sa svojim oglasima...';

$lng['create_fav'] = 'Lista Omiljenih Oglasa';
$lng['create_fav_detail'] = 'Napravi listu omiljenih oglasa...';


$lng['safity_tips'] = 'Saveti za Kupce';

$lng['tip1'] = 'Sretni se sa prodavcem na javnom mestu.';
$lng['tip2'] = 'Proveri da li je stvar koju kupuješ onakva kako je opisana u oglasu.';
$lng['tip3'] = 'Koristi kurirske službe za dostavu kupljenih stvari.';

$lng['sell_quikly'] = 'Saveti za brzu prodaju';

$lng['post_tip1'] = 'Koristite kratak naslov i opis oglasa.';
$lng['post_tip2'] = 'Postavite Vaš oglas u odgovarajuću kategoriju.';
$lng['post_tip3'] = 'Postavite lepo vidljive slike Vašeg oglasa.';
$lng['post_tip4'] = 'Proverite sve stavke pre objave oglasa.';
$lng['post_tip5'] = 'Želimo ti srećnu prodaju.';


$lng['save_ad'] = 'Sačuvaj Oglas';
$lng['rmv_fav'] = 'Izbaci Oglas';
$lng['share_ad'] = 'Podeli Oglas';
$lng['report'] = 'Prijavi Oglas';
$lng['send_message'] = 'Pošalji Poruku';
$lng['refine_submit_btn'] = 'OK';

$lng['sell_h'] = 'Imate nešto za prodaju ?';
$lng['sell_d'] = 'Prodaj stvari koje ti ne trebaju i kupi nešto što ti treba !';

$lng['featured'] = 'TOP Oglas';
$lng['sold'] = 'Prodato';
$lng['rented'] = 'Iznajmljeno';


$lng['contact_seller_detail'] = 'Kontakt';





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
$lng['useraccount']['message_to_seller'] = 'Kontaktiraj prodavca';
$lng['useraccount']['error']['enter_bid'] = 'Please enter your bid!';
$lng['useraccount']['error']['incorrect_bid'] = 'Invalid bid!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Your bid is smaller than starting price!';
$lng['useraccount']['bid_placed'] = 'Your bid was placed!';
$lng['useraccount']['placed_on'] = 'Placed on';
$lng['useraccount']['no_bids_for_auction'] = 'There are no bids for this auction!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Klikni da vidiš';
$lng['advanced_search']['clear_search'] = 'Obriši pretragu';
$lng['listings']['currency'] = 'Valuta';
$lng['listings']['show_phone'] = 'Pozovite';
$lng['listings']['make_public'] = 'Postavi javno';

$lng['advanced_search']['only_ads_with_auction'] = 'Only Ads With Auctions';
$lng['security']['failed_login_attempts'] = 'Repeated failed login attempts';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Vaš nalog je trenutno neaktivan! Uskoro cete dobiti SMS poruku koja sadrži verifikacioni kod. Unesite aktivacioni kod u polje ispod.';
$lng['users']['verification_code'] = 'Verifikacioni kod';
$lng['users']['waiting_sms_activation'] = 'Sacekajte SMS poruku za aktivaciju';
$lng['listings']['info']['sms_verification'] = 'Vaš oglas je trenutno neaktivan! Uskoro ćete dobiti SMS poruku koja sadrži verifikacioni kod. Unesite šifru u polje ispod kako biste aktivirali svoj oglas.';
$lng['listings']['activate_listing'] = 'Aktivirajte oglas';
$lng['listings']['errors']['sms_invalid_activation'] = 'Neispravan aktivacioni kod!';
$lng['listings']['info']['listing_pending'] = 'Vaš oglas je u toku i čeka se odobrenje administratora.';
$lng['listings']['info']['listing_activated'] = 'Vaš oglas je aktivan!';
$lng['listings']['errors']['listing_already_active'] = 'Vaš oglas je vec aktivan!';
$lng['listings']['errors']['invalid_phone'] = 'Pogresan broj telefona!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Dostupno za';
$lng['newad']['available_until_expires'] = 'Dostupan do isteka oglasa';
$lng['newad']['view_info'] = 'Prikaz informacija';
$lng['users']['errors']['phone_not_permitted'] = 'Ovaj broj telefona nije dozvoljen!';
$lng['invoice']['invoice'] = 'Faktura';
$lng['invoice']['invoice_no'] = 'Faktura br.';
$lng['invoice']['bill_to'] = 'Račun za';
$lng['invoice']['qty'] = 'Količina';
$lng['invoice']['unit_price'] = 'Cena po kolicini';
$lng['invoice']['subtotal'] = 'Ukupno';
$lng['invoice']['sale_tax'] = 'Porez na promet';
$lng['invoice']['new_listing'] = 'Novi oglas';
$lng['invoice']['renew_listing'] = 'Obnavljanje oglasa';
$lng['invoice']['featured_eo'] = 'Opcija TOP oglasa';
$lng['invoice']['highlited_eo'] = 'Opcija za Istaknut oglas';
$lng['invoice']['priority_eo'] = 'Prioretnioglas';
$lng['invoice']['video_eo'] = 'Opcija za Video oglas';
$lng['invoice']['new_credits_pkg'] = 'Novi plan za placanje';
$lng['invoice']['store'] = 'Radnja';
$lng['invoice']['new_subscription'] = 'New subscription purchase';
$lng['invoice']['renew_subscription'] = 'Obnova placanja';
$lng['weeks'] = 'Nedelje';
$lng['week'] = 'Nedelja';
$lng['months'] = 'Meseci';
$lng['month'] = 'Mesec';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Prikazi WhatsApp';
$lng['general']['to_top'] = 'Na vrh';
$lng['quick_search']['location'] = 'Poštanski broj ili lokacija';
$lng['listings']['see_all'] = 'Pogledaj sve oglase &raquo;';
$lng['listings']['ads'] = 'oglasa';
$lng['listings']['user_since'] = 'Registrovan';
$lng['listings']['contact_details'] = 'Kontakt detalji';
$lng['listings']['favourite'] = 'Omiljeni';
$lng['listings']['manage_ad'] = 'Upravljajte svojim oglasom';
$lng['useraccount']['show_bids'] = 'Pogledajte ponude';
$lng['listings']['report_abusive'] = 'Prijavite zloupotrebu oglasa';
$lng['listings']['enable_auction'] = 'Omogucite aukciju';
$lng['invoice']['download'] = 'Preuzimite fakture';


$lng['register']['group'] = 'Tip naloga';
$lng['register']['change_group'] = 'Promenite tip naloga';
$lng['register']['select_group'] = 'Izaberite grupu';

$lng['search']['private'] = 'Privatno lice';
$lng['search']['professional'] = 'Pravno lice';
$lng['search']['save_your_search2'] = 'Da li želite da sačuvate pretragu?';
$lng['search']['save_search'] = 'Sačuvajte pretragu';
$lng['search']['refine_your_search'] = 'Detaljna Pretraga';
$lng['search']['hide_refine'] = 'Zatvori ';

$lng['listings']['view_all_featured'] = 'Pogledajte sve Top Oglase >>';
$lng['listings']['view_all_latest'] = 'Pogledajte najnovije Oglase >>';
$lng['listings']['view_all_auctions'] = 'Pogledajte sve aukcije >>';
$lng['listings']['auctions'] = 'Aukcije';
$lng['listings']['view_ads_from'] = 'Pogledajte oglase iz';
$lng['location']['change_location'] = 'Promena lokacije';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Prikaži email';
$lng['listings']['error']['photo_mandatory'] = 'Molimo da otpremite barem jednu sliku sa vašim oglasom!';
// --------------- end 9.2 --------------------


// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Prikaži email';
$lng['listings']['error']['photo_mandatory'] = 'Please upload at least one picture with your ad!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Pozovi';
$lng['listings']['sms'] = 'Posalji SMS';
$lng['contact']['phone'] = 'Telefon';
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
