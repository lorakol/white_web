<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Home';
$lng['navbar']['login'] = 'Prijava';
$lng['navbar']['logout'] = 'Odjava';
$lng['navbar']['recent_ads'] = 'Zadnji oglasi';
$lng['navbar']['register'] = 'Register';
$lng['navbar']['submit_ad'] = 'Predaj oglas';
$lng['navbar']['editad'] = 'Uredi oglas';
$lng['navbar']['my_account'] = 'Moj račun';
$lng['navbar']['administrator_panel'] = 'Administratorska ploča';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Povrat lozinke';
$lng['navbar']['renew_listing'] = 'Obnovi oglas';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Podnesi';
$lng['general']['search'] = 'Traži';
$lng['general']['contact'] = 'Kontat';
$lng['general']['activeads'] = 'aktivni oglasi';
$lng['general']['activead'] = 'aktivni oglas';
$lng['general']['subcats'] = 'subcats';
$lng['general']['subcat'] = 'subcat';
$lng['general']['view_ads'] = 'pogledaj oglase';
$lng['general']['back'] = '« Natrag';
$lng['general']['goto'] = 'Idi na';
$lng['general']['page'] = 'Stranica';
$lng['general']['of'] = 'of';
$lng['general']['other'] = 'Drugo';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Dodaj';
$lng['general']['delete_all'] = 'Obriši sve izabrano';
$lng['general']['action'] = 'Action';
$lng['general']['edit'] = 'Edit';
$lng['general']['delete'] = 'Obriši';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'FREE';
$lng['general']['not_authorized'] = 'Niste ovlašteni da vidite ovu stranicu!';
$lng['general']['access_restricted'] = 'Vaš pristup ovoj stranici je zabranjen!';
$lng['general']['featured_ads'] = 'Istaknuti oglasi';
$lng['general']['latest_ads'] = 'Posljednji oglasi';
$lng['general']['quick_search'] = 'Brza pretraga';
$lng['general']['go'] = 'Idi';
$lng['general']['unlimited'] = 'Neograničen';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Datoteka sa istim imenom već postoji i nemože se prebrisati!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Nije vam dopušteno da učitate datoteku veću od ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Dimenzije slika su prevelike! Molimo učitajte datoteku maksimalne veličine ::MAX_FILE_WIDTH::px width and maximum ::MAX_FILE_HEIGHT::px height !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Datoteku nije moguće učitati!';
$lng['images']['errors']['no_file'] = 'Molimo odaberite datoteku za upload!';
$lng['images']['errors']['no_folder'] = 'Upload folder ne postoji!';
$lng['images']['errors']['folder_not_writeable'] = 'Upload folder is not writable!';
$lng['images']['errors']['file_type_not_accepted'] = 'Učitana datoteka nije slika ili datoteka nije podržana!';
$lng['images']['errors']['error'] = 'Nastao je error prilikom učitavanja datoteke.Error glasi: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Folder za minijaturne slike ne postoji!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Folder za minijaturne slike nema dopuštenje pisanja!';
$lng['images']['errors']['no_jpg_support'] = 'Podrška za JPG ne postoji!';
$lng['images']['errors']['no_png_support'] = 'Podrška za PNG ne postoji!';
$lng['images']['errors']['no_gif_support'] = 'Podrška za GIF ne postoji!';
$lng['images']['errors']['jpg_create_error'] = 'Error nemoguće napraviti JPG sliku od izvora!';
$lng['images']['errors']['png_create_error'] = 'Error nemoguće napraviti PNG sliku od izvora!';
$lng['images']['errors']['gif_create_error'] = 'Error nemoguće napraviti GIF sliku od izvora!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Prijava';
$lng['login']['logout'] = 'Odjava';
$lng['login']['username'] = 'Korisničko ime';
$lng['login']['password'] = 'Lozinka';
$lng['login']['forgot_pass'] = 'Zaboravili ste lozinku?';
$lng['login']['click_here'] = 'Klikni ovdje';

$lng['login']['errors']['password_missing'] = 'Molimo unesite lozinku!';
$lng['login']['errors']['username_missing'] = 'Molimo unesite korisničko ime!';
$lng['login']['errors']['username_invalid'] = 'Neispravno korisničko ime!';
$lng['login']['errors']['invalid_username_pass'] = 'Neispravno korisničko ime ili lozinka!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Odjava';
$lng['logout']['loggedout'] = 'Odjavljeni ste!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Register';
$lng['users']['repeat_password'] = 'Ponovi lozinku';
$lng['users']['image_verification_info'] = 'Molimo unesite text prikazan na slici ispod.<br /> The possible characters are letters from a to h in lower case<br /> and the numbers from 1 to 9.';
$lng['users']['already_logged_in'] = 'Već ste ulogirani!';
$lng['users']['select'] = 'Odaberi';

$lng['users']['info']['activate_account'] = 'Email  je poslan na vaš račun. Molimo pratite upute da za aktivaciju vašeg računa.';
$lng['users']['info']['welcome_user'] = 'Vaš račun je napravljen. Molimo <a href="login.php">Prijava</a> na vaš račun!';
$lng['users']['info']['awaiting_admin_verification'] = 'Vaš račun čeka odobrenje administratora. Biti ćete obavješteni putem e-pošte kada se vaš korisnički račun aktivira.';
$lng['users']['info']['account_info_updated'] = 'Vaš korisnički račun je ažuriran!';
$lng['users']['info']['password_changed'] = 'Vaša lozinka je promjenjena!';
$lng['users']['info']['account_activated'] = 'Vaš korisnički račun je aktiviran! Molimo <a href="login.php">Prijava</a> na vaš korisnički računt.';

$lng['users']['errors']['username_missing'] = 'Unesite korisničko ime!';
$lng['users']['errors']['invalid_username'] = 'Pogrešno korisničko ime!';
$lng['users']['errors']['username_exists'] = 'Korisničko ime već postoji! Molimo prijavite se ako već imate korisnički račun!';
$lng['users']['errors']['email_missing'] = 'Unesite email adresu!';
$lng['users']['errors']['invalid_email'] = 'Pogrešna email adresa!';
$lng['users']['errors']['passwords_dont_match'] = 'Lozinke se ne podudaraju!';
$lng['users']['errors']['email_exists'] = 'Ova e-pošta se već koristi! Molimo prijavite se ako već imate korisnički račun!';
$lng['users']['errors']['password_missing'] = 'Molimo unesite lozinku!';
$lng['users']['errors']['invalid_validation_string'] = 'Neispravna valjanost niza!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Neispravan račun ili aktivacijski ključ! Molim kontaktirajte administratora!';
$lng['users']['errors']['account_already_active'] = 'Vaš korisnički račun je već aktivan!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Oglas';
$lng['listings']['category'] = 'Kategorija';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Cijena';
$lng['listings']['ad_description'] = 'Opis oglasa';
$lng['listings']['title'] = 'Naslov';
$lng['listings']['description'] = 'Opis';
$lng['listings']['image'] = 'Slika';
$lng['listings']['words_left'] = 'Riječi lijevo';
$lng['listings']['enter_photos'] = 'Unesi slike';
$lng['listings']['ad_information'] = 'Informacija oglasa';
$lng['listings']['free'] = 'BESPLATNO';
$lng['listings']['details'] = 'Detalji';
$lng['listings']['stock_no'] = 'Nema zaliha';
$lng['listings']['location'] = 'Lokacija';
$lng['listings']['contact_info'] = 'Kontakt Info';
$lng['listings']['email_seller'] = 'Email prodavača';
$lng['listings']['no_recent_ads'] = 'Nema zadnjih oglasa';
$lng['listings']['no_ads'] = 'Nema oglasa za ovu kategoriju';
$lng['listings']['added_on'] = 'Objavljeno na';
$lng['listings']['send_mail'] = 'Pošalji email korisniku';
$lng['listings']['details'] = 'Detlji';
$lng['listings']['user'] = 'Korisnik';
$lng['listings']['price'] = 'Cijena';
$lng['listings']['confirm_delete'] = 'Jeste li sigurni da želite pobrisati oglas?';
$lng['listings']['confirm_delete_all'] = 'Jeste li sigurni da želite pobrisati odabrani oglas?';
$lng['listings']['all'] = 'Kompletan oglas';
$lng['listings']['active_listings'] = 'Aktivni oglas';
$lng['listings']['pending_listings'] = 'Oglas u tijeku';
$lng['listings']['featured_listings'] = 'Istaknuti oglasi';
$lng['listings']['expired_listings'] = 'Istekli oglasi';
$lng['listings']['active'] = 'Aktivan';
$lng['listings']['inactive'] = 'Neaktivan';
$lng['listings']['pending'] = 'Na čekanju';
$lng['listings']['featured'] = 'Istaknut';
$lng['listings']['expired'] = 'Istekao';
$lng['listings']['order_by_date'] = 'Sortiraj po datumu';
$lng['listings']['order_by_category'] = 'Sortiraj po kategoriji';
$lng['listings']['order_by_make'] = 'Sortiraj po učinjenom';
$lng['listings']['order_by_price'] = 'Sortiraj po cijeni';
$lng['listings']['order_by_views'] = 'Sortiraj po broju posjeta';
$lng['listings']['order_asc'] = 'Uzlazni';
$lng['listings']['order_desc'] = 'Silazni';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Pogodaka';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Nema oglasa';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Ovaj oglas ne postoji!';
$lng['listings']['mark_sold'] = 'Označi kao prodano';
$lng['listings']['mark_unsold'] = 'Odznači kao prodano';
$lng['listings']['sold'] = 'Prodano';
$lng['listings']['feature'] = 'Oblik';
$lng['listings']['expired_on'] = 'Isteklo je';
$lng['listings']['renew'] = 'Obnovi';
$lng['listings']['print_page'] = 'Printaj';
$lng['listings']['recommend_this'] = 'Djeli';
$lng['listings']['more_listings'] = 'Više oglasa od ovog korisnika';
$lng['listings']['all_listings_for'] = 'Dodaj oglas za';
$lng['listings']['free_category'] = 'BESPLATNA kategorija';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Sigurno želite pobrisati sliku oglasa?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Kvota riječi je prekoračena! Maximum riječi ::MAX:: riječi'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Vaš oglas sadrži nedopuštene riječi! Molimo pregledajte sadržaj!';
$lng['listings']['errors']['title_missing']='Molim Vas da ispunite naslov za oglas!';
$lng['listings']['errors']['category_missing']='Odaberite kategoriju!';
$lng['listings']['errors']['invalid_category']='Pogrešna kategorija!';
$lng['listings']['errors']['package_missing']='Odaberite plan!';
$lng['listings']['errors']['invalid_package']='Pogrešan plan!';
$lng['listings']['errors']['content_missing']='Unesite sadržaj za vaš oglas!';
$lng['listings']['errors']['invalid_price']='Neispravna cijena!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Niska cijena';
$lng['quick_search']['price_high'] = 'Visoka cijena';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Objavi novi oglas';
$lng['useraccount']['browse_your_listings'] = 'Moji oglasi';
$lng['useraccount']['modify_account_info'] = 'Informacije računa';
$lng['useraccount']['order_history'] = 'Povijest narudzbi';
$lng['useraccount']['total_listings'] = 'Kompletni oglasi';
$lng['useraccount']['total_views'] = 'Ukupno posjeta';
$lng['useraccount']['active_listings'] = 'Aktivni oglasi';
$lng['useraccount']['pending_listings'] = 'Oglasi na čekanju';
$lng['useraccount']['last_login'] = 'Posljednji Login';
$lng['useraccount']['last_login_ip'] = 'IP adresa posljednjeg logina';
$lng['useraccount']['expired_listings'] = 'Istekli oglasi';
$lng['useraccount']['statistics'] = 'Statistika';
$lng['useraccount']['welcome'] = 'Dobrodošli';
$lng['useraccount']['contact_name'] = 'Kontakt ime';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Lozinka';
$lng['useraccount']['repeat_password'] = 'Ponovi lozinku';
$lng['useraccount']['change_password'] = 'Promjeni lozinku';

// ------------------- Advanced Seaarch -----------------
$lng['advanced_search']['to'] = 'za';
$lng['advanced_search']['price_min'] = 'Min Cijena';
$lng['advanced_search']['price_max'] = 'Max Cijena';
$lng['advanced_search']['word'] = 'Riječ';
$lng['advanced_search']['sort_by'] = 'Poredaj po';
$lng['advanced_search']['sort_by_price'] = 'Poredaj po Cijeni';
$lng['advanced_search']['sort_by_date'] = 'Poredaj po Datumu';
$lng['advanced_search']['sort_by_make'] = 'Poredaj po uratku';
$lng['advanced_search']['sort_descendant'] = 'Poredaj silazno';
$lng['advanced_search']['sort_ascendant'] = 'Poredaj uzlazno';
$lng['advanced_search']['only_ads_with_pic'] = 'Samo oglasi sa slikama';
$lng['advanced_search']['no_results'] = 'Nema pronađenih oglasa koji odgovaraju vašem upitu!';
$lng['advanced_search']['multiple_ads_matching'] = 'Nema pronađenih ::NO_ADS:: oglasa koji odgovaraju vašem upitu!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Postoji jedan oglas koji odgovara vašem upitu!';

// ------------------- Contact -----------------
$lng['contact']['name'] = 'Ime';
$lng['contact']['subject'] = 'Predmet';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'WebStranica';
$lng['contact']['comments'] = 'Komentari';
$lng['contact']['message_sent'] = 'Vaša poruka je poslana!';
$lng['contact']['sending_message_failed'] = 'Dostava poruke nije uspjela!';
$lng['contact']['mailto'] = 'Email za';

$lng['contact']['error']['name_missing'] = 'Unesite svoje ime!';
$lng['contact']['error']['subject_missing'] = 'Unesite predmet!';
$lng['contact']['error']['email_missing'] = 'Unesite Vaš email!';
$lng['contact']['error']['invalid_email'] = 'Neispravna email adresa!';
$lng['contact']['error']['comments_missing'] = 'Unesite svoj komentar!';
$lng['contact']['error']['invalid_validation_number'] = 'Neispravan broj valjanosti!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email adresa';
$lng['password_recovery']['new_password'] = 'Nova lozinka';
$lng['password_recovery']['repeat_new_password'] = 'Ponovi novu lozinku';
$lng['password_recovery']['invalid_key'] = 'Neispravan ključ';

$lng['password_recovery']['email_missing'] = 'Unesite svoju email adresu!';
$lng['password_recovery']['invalid_email'] = 'Neispravna email adresa';
$lng['password_recovery']['email_inexistent'] = 'Nema korisnika sa navedenom email adresom!';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Iznos';
$lng['packages']['words'] = 'Riječi';
$lng['packages']['days'] = 'Dani';
$lng['packages']['pictures'] = 'Slike';
$lng['packages']['picture'] = 'Slika';
$lng['packages']['available'] = 'Dostupno';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Radim';
$lng['order_history']['amount'] = 'Iznos';
$lng['order_history']['completed'] = 'Dovršeno';
$lng['order_history']['not_completed'] = 'Nedovršeno';
$lng['order_history']['ad_no'] = 'Oglas id';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Nepostoji zapis narudzbe';
$lng['order_history']['order_by_date'] = 'Poredaj po datumu';
$lng['order_history']['order_by_amount'] = 'Poredaj po iznosu';
$lng['order_history']['order_by_processor'] = 'Poredaj po Procesu';
$lng['order_history']['description'] = 'Opis';
$lng['order_history']['newad'] = 'Novi oglas'; 
$lng['order_history']['renew'] = 'Obnovi'; 
$lng['order_history']['featured'] = 'IStaknuti oglas'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Poredaj po datumu';
$lng['order']['price'] = 'Poredaj po cijeni';
$lng['order']['title'] = 'Poredaj po nazivu';
$lng['order']['desc'] = 'Silazno';
$lng['order']['asc'] = 'Uzlazno';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Podjeli ovaj oglas';
$lng['recommend']['your_name'] = 'Vaše ime';
$lng['recommend']['your_email'] = 'Vaš email';
$lng['recommend']['friend_name'] = 'Ime\ prijetelja';
$lng['recommend']['friend_email'] = 'Email\ prijatelja';
$lng['recommend']['message'] = 'Poruka prijatelju';


$lng['recommend']['error']['your_name_missing'] = 'Please fill in your name!';
$lng['recommend']['error']['your_email_missing'] = 'Please fill in your email!';
$lng['recommend']['error']['friend_name_missing'] = 'Please fill in your friend\'s name!';
$lng['recommend']['error']['friend_email_missing'] = 'Please fill in your friend\'s email!';
$lng['recommend']['error']['invalid_email'] = 'Invalid email address';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Oglasi';
$lng['stats']['general'] = 'Općenito';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Pretplati se';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favoriti';
$lng['general']['as'] = 'kao';
$lng['general']['view'] = 'Pogled';
$lng['general']['none'] = 'Niti jedan';
$lng['general']['yes'] = 'da';
$lng['general']['no'] = 'ne';
$lng['general']['next'] = 'Slijedeći »';
$lng['general']['finish'] = 'Završi';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Makni';
$lng['general']['previous_page'] = '« Predhodno';
$lng['general']['next_page'] = 'Sljedeće »';
$lng['general']['items'] = 'predmeti';
$lng['general']['active'] = 'Activan';
$lng['general']['inactive'] = 'Neaktivan';
$lng['general']['expires'] = 'Ističe';
$lng['general']['available'] = 'Dostupno';
$lng['general']['cancel'] = 'Otkaži';
$lng['general']['never'] = 'Nikada';
$lng['general']['asc'] = 'Uzlazno';
$lng['general']['desc'] = 'Silazno';
$lng['general']['pending'] = 'Na čekanju';
$lng['general']['upload'] = 'Upload';
$lng['general']['processing'] = 'Radim, molim pričekajte ... ';
$lng['general']['help'] = 'Pomoć';
$lng['general']['hide'] = 'Sakrij';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Ovo je demo verzija. Nije Vam dopušteno da mijenjate određene postavke!';
$lng['general']['check_all'] = 'Označi sve';
$lng['general']['uncheck_all'] = 'Odznači sve';
$lng['general']['all'] = 'Sve';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Stranica prodavača';
$lng['users']['store_banner'] = 'Banner prodavača';
$lng['users']['waiting_mail_activation'] = 'Čekam aktivaciju e-pošte';
$lng['users']['waiting_admin_activation'] = 'Čekam dopuštenje administratora';
$lng['users']['no_such_id'] = 'Ovaj korisnik nepostoji.';

$lng['users']['info']['store_banner'] = 'Slika koja će se koristiti za stranicu prodavača.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Prijavi oglas';
$lng['listings']['report_reason'] = 'Razlog prijave';
$lng['listings']['meta_info'] = 'Meta informacije';
$lng['listings']['meta_keywords'] = 'Meta Ključne riječi';
$lng['listings']['meta_description'] = 'Meta Opis';
$lng['listings']['not_approved'] = 'Nije odobreno';
$lng['listings']['approve'] = 'Odobri';
$lng['listings']['choose_payment_method'] = 'Odaberi metodu plačanja';

$lng['listings']['choose_category'] = 'Odaberi kategoriju';
$lng['listings']['choose_plan'] = 'Odaberi plan';
$lng['listings']['enter_ad_details'] = 'Unesi detalje oglasa';
$lng['listings']['ad_details'] = 'Detalji oglasa';
$lng['listings']['add_photos'] = 'Dodaj slike';
$lng['listings']['ad_photos'] = 'Slike oglase';
$lng['listings']['edit_photos'] = 'Editiraj slike';
$lng['listings']['extra_options'] = 'Extra Opcije';
$lng['listings']['review'] = 'Pregled oglasa';
$lng['listings']['finish'] = 'Završi';
$lng['listings']['next_step'] = 'Sljedeći korak »';
$lng['listings']['included'] = 'Uračunato';
$lng['listings']['finalize'] = 'Dovrši';
$lng['listings']['zip'] = 'Poštanski broj';
$lng['listings']['add_to_favourites'] = 'Dodaj u favorite';
$lng['listings']['confirm_add_to_fav'] = 'Upozorenje! Niste ulogirani! Lista favorita će biti privremena!';
$lng['listings']['add_to_fav_done'] = 'Oglas je dodan za favoritnu listu!';
$lng['listings']['confirm_delete_favourite'] = 'Jeste li sigurni da želite pobrisati favoritni oglas?';
$lng['listings']['no_favourites'] = 'Nema favoritnih oglasa';
$lng['listings']['extra_options'] = 'Extra Opcije';
$lng['listings']['highlited'] = 'Izdvojeno';
$lng['listings']['priority'] = 'Prioritet';
$lng['listings']['video'] = 'Video mali oglasi';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video na čekanju';
$lng['listings']['video_code'] = 'Video Code';
$lng['listings']['total'] = 'Sveukupno';
$lng['listings']['approve_ad'] = 'Odobri oglas';
$lng['listings']['finalize_later'] = 'Dovrši kasnije';
$lng['listings']['click_to_upload'] = 'Klikni za upload';
$lng['listings']['files_uploaded'] = ' Ukupno uploadano slika ';
$lng['listings']['allowed'] = ' dozvoljeno slika!';
$lng['listings']['limit_reached'] = ' Dostignut maximum broj slika!';
$lng['listings']['edit_options'] = 'Uredi oglas Options';
$lng['listings']['view_store'] = 'View Dealer Stranica';
$lng['listings']['edit_ad_options'] = 'Uredi opcije oglas';
$lng['listings']['no_extra_options_selected'] = 'Nisu odabrane dodatne opcije!';
$lng['listings']['highlited_listings'] = 'Istaknuti oglasi';
$lng['listings']['for_listing'] = 'za oglas br ';
$lng['listings']['expires_on'] = 'Ističe';
$lng['listings']['expired_on'] = 'Istekao';
$lng['listings']['pending_ad'] = 'Oglas na čekanju';
$lng['listings']['pending_highlited'] = 'Čekam Isataknuto';
$lng['listings']['pending_featured'] = 'Čekam Isataknuto';
$lng['listings']['pending_priority'] = 'Čekam prioritet';
$lng['listings']['enter_coupon'] = 'Unesi kod za popust';
$lng['listings']['discount'] = 'Popust';
$lng['listings']['select_plan'] = 'Odaberi plan';
$lng['listings']['pending_subscription'] = 'Čekam na pretplatu';
$lng['listings']['remove_favourite'] = 'Makni favorite';

$lng['listings']['order_up'] = 'Redosljed gore';
$lng['listings']['order_down'] = 'Redosljed dolje';

$lng['listings']['errors']['invalid_youtube_video'] = 'Invalid youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Pretplati se';
$lng['useraccount']['no_package'] = 'Oglas nema plana';
$lng['useraccount']['packages'] = 'Planovi';
$lng['useraccount']['date_start'] = 'Datum početka';
$lng['useraccount']['date_end'] = 'Datum kraja';
$lng['useraccount']['remaining_ads'] = 'Preostali oglasi';
$lng['useraccount']['account_type'] = 'Vrsta računa';
$lng['useraccount']['unfinished_listings'] = 'Nedovršeni oglasi';
$lng['useraccount']['confirm_delete_subscription'] = 'Jeste li sigurni da želite ukloniti ovu pretplatu?';
$lng['useraccount']['buy_store'] = 'Kupi ';
$lng['useraccount']['bulk_uploads'] = 'Skupni upload';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Pretplata';
$lng['packages']['ads'] = 'Oglasi';
$lng['packages']['name'] = 'Ime';
$lng['packages']['details'] = 'Detalji';
$lng['packages']['no_ads'] = 'Broj oglasa';
$lng['packages']['subscription_time'] = 'Vrijeme pretplate';
$lng['packages']['no_pictures'] = 'Dozvoljene slike';
$lng['packages']['no_words'] = 'Broj riječi';
$lng['packages']['ads_availability'] = 'Dostupnost oglasa';
$lng['packages']['featured'] = 'Privlačan';
$lng['packages']['highlited'] = 'Istaknut';
$lng['packages']['priority'] = 'Prioriet';
$lng['packages']['video'] = 'Video Oglasi';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Pretplata';
$lng['order_history']['post_listing'] = 'Objavi oglas';
$lng['order_history']['renew_listing'] = 'Obnovi oglas';
$lng['order_history']['feature_listing'] = 'Privlačan oglas';
$lng['order_history']['subscribe_to_package'] = 'Pretplati se za plan';
$lng['order_history']['complete_payment'] = 'Dovrši plačanje';
$lng['order_history']['complete_payment_for'] = 'Dovrši plačanje za';
$lng['order_history']['details'] = 'Detalji';
$lng['order_history']['subscription_no'] = 'Pretplata Ne';
$lng['order_history']['highlited'] = 'Istaknuti oglas';
$lng['order_history']['priority'] = 'Prioritet';
$lng['order_history']['video'] = 'Video Oglasi';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Odaberite plan!';
$lng['buy_package']['error']['choose_processor'] = 'Odaberite način plačanja!';
$lng['buy_package']['error']['invalid_processor'] = 'Neispravan način plačanja!';
$lng['buy_package']['error']['invalid_package'] = 'Neispravan plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Neispravna PayPal transakcija!';
$lng['2co']['invalid_transaction'] = 'Neispravna 2Checkout transakcija!';
$lng['moneybookers']['invalid_transaction'] = 'Neispravna Moneybookers transakcija!';
$lng['authorize']['invalid_transaction'] = 'Neispravna Authorize.net transakcija!';
$lng['manual']['invalid_transaction'] = 'Neispravna transakcija!';

$lng['paypal']['transaction_canceled'] = 'Paypal transakcija otkazana!';
$lng['2co']['transaction_canceled'] = '2Checkout transakcija otkazana!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transaction canceled!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transakcija otkazana!';
$lng['manual']['transaction_canceled'] = 'Transakcija otkazana!';
$lng['epay']['transaction_canceled'] = 'ePay transakcija otkazana!';

$lng['payments']['transaction_already_processed'] = 'Ova transakcija je već procesuirana!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Odobri pretplatu';
$lng['subscribe']['payment_method'] = 'Metoda plačanja';
$lng['subscribe']['renew_subscription'] = 'Obnovi pretplatu';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copy email: ';
$lng['bcc_mails']['from'] = 'Od: ';
$lng['bcc_mails']['to'] = 'Za: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Status masovne pohrane: ';
$lng['ie']['successfully'] = 'oglasi uspješno dodani';
$lng['ie']['failed'] = 'neuspjeo';
$lng['ie']['uploaded_listings'] = 'pohrana oglasa:';
$lng['ie']['errors']['upload_import_file'] = 'Učitajte datoteke da ih unesete!';
$lng['ie']['errors']['incorrect_file_type'] = 'Pogrešan tip datoteke! Vrsta datoteke mora biti: ';
$lng['ie']['errors']['could_not_open_file'] = 'Nemoguće otvoriti datoteku!';
$lng['ie']['errors']['could_not_save_file'] = 'Nemoguće skinuti datoteku: ';
$lng['ie']['errors']['required_field_missing'] = 'Potreban unos nedostaje: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Netočni elementi datoteke koji se odnose na red: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Odaberi prodavača';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Pregledaj područje';
$lng['areasearch']['all_locations'] = 'Sva područja';
$lng['areasearch']['exact_location'] = 'Točno područje';
$lng['areasearch']['around'] = 'približno';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Da';
$lng['general']['No'] = 'Ne';
$lng['general']['or'] = 'ili';
$lng['general']['in'] = 'u';
$lng['general']['by'] = 'pored';
$lng['general']['close_window'] = 'Zatvori prozor';
$lng['general']['more_options'] = 'više opcija »';
$lng['general']['less_options'] = '« manje opcija';
$lng['general']['send'] = 'Pošalji';
$lng['general']['save'] = 'Spremi';
$lng['general']['for'] = 'za';
$lng['general']['to'] = 'na';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Označi kao iznajmljeno';
$lng['listings']['mark_unrented'] = 'Odznači kao iznajmljeno';
$lng['listings']['rented'] = 'Iznajmljeno';
$lng['listings']['your_info'] = 'Vaše informacije';
//******
$lng['listings']['email'] = 'Vaša email adresa';
$lng['listings']['name'] = 'Vaše ime';

$lng['listings']['listing_deleted'] = 'Vaš oglas je obrisan!';
$lng['listings']['post_without_login'] = 'Objavi bez logiranja';
$lng['listings']['waiting_activation'] = 'Čekaj aktivaciju';
$lng['listings']['waiting_admin_approval'] = 'Čekam odobrenje administraora';
$lng['listings']['dont_need_account'] = 'Neželite račun? Objavite oglas bez logiranja!';
$lng['listings']['post_your_ad'] = 'Objavite vaš oglas!';
$lng['listings']['posted'] = 'Objavljeno';
$lng['listings']['select_subscription'] = 'Odaberi pretplatu';
$lng['listings']['choose_subscription'] = 'Izaberi pretplatu';
$lng['listings']['inactive_listings'] = 'Neaktivni oglasi';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Pročisti pretragu';
$lng['search']['refine_by_keyword'] = 'Pročistiti po ključnim riječima';
$lng['search']['showing'] = 'Pokazuje';
$lng['search']['more'] = 'Više ...';
$lng['search']['less'] = 'Manje ...';
$lng['search']['search_for'] = 'Traži';
$lng['search']['save_your_search'] = 'Spremi pretragu';
$lng['search']['save'] = 'Spremi';
$lng['search']['search_saved'] = 'Vaša pretraga je spremljena!';
$lng['search']['must_login_to_save_search'] = 'Morate biti ulogirani da spremite vašu pretragu!';
$lng['search']['view_search'] = 'Pogledaj pretragu';
$lng['search']['all_categories'] = 'Sve kategorije';
$lng['search']['more_than'] = 'više od';
$lng['search']['less_than'] = 'manje od';

$lng['search']['error']['cannot_save_empty_search'] = 'vaša pretraga ne sadrži nikakve uvjete, stoga se nemože spremiti!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Spremljene pretrage';
$lng['useraccount']['view_saved_searches'] = 'Pogledaj spremljene pretrage';
$lng['useraccount']['no_saved_searches'] = 'Nema spremljenih pretraga';
$lng['useraccount']['recurring'] = 'Ponavljajući';
$lng['useraccount']['date_renew'] = 'Datum obnove';
$lng['useraccount']['logged_in_as'] = 'Ulogirani ste kao ';
$lng['useraccount']['subscriptions'] = 'Pretplate';

$lng['users']['activate_account'] = 'Aktivni račun';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Dodaj pretplatu';
$lng['subscriptions']['package'] = 'Pretplata';
$lng['subscriptions']['remaining_ads'] = 'Preostali oglasi';
$lng['subscriptions']['recurring'] = 'Ponavljajući';
$lng['subscriptions']['date_start'] = 'Datum početka';
$lng['subscriptions']['date_end'] = 'Datum kraja';
$lng['subscriptions']['date_renew'] = 'Datum obnove';
$lng['subscriptions']['confirm_delete'] = 'Sigurno želite pobrisati pretplatu?';
$lng['subscriptions']['no_subscriptions'] = 'Nema pretplata';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Još nemate račun?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Omogući ponavljajuća palčanja za ovu pretplatu';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Sljedeća polja nedostaju: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Kupi stranicu prodavača';


$lng['images']['errors']['max_photos'] = 'Maximum upload slika!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email upozorenje';
$lng['alerts']['email_alerts'] = 'Email upozorenja';
$lng['alerts']['no_alerts'] = 'No email upozorenje';
$lng['alerts']['view_email_alerts'] = 'Pogledajte Vaša email upozorenja';
$lng['alerts']['send_email_alerts'] = 'Pošalji Email upozorenja';
$lng['alerts']['immediately'] = 'Odmah';
$lng['alerts']['daily'] = 'Dnevno';
$lng['alerts']['weekly'] = 'Tjedno';
$lng['alerts']['your_email'] = 'vaša email adresa';
$lng['alerts']['create_alert'] = 'Stvori upozorenje';
$lng['alerts']['email_alert_info'] = 'Primi email upozorenje kada stigne novi oglas za ovaj upit.';
$lng['alerts']['alert_added'] = 'Vaše upozorenje je napravljeno!';
$lng['alerts']['alert_added_activate'] = 'You will receive an email shortly on <b>::EMAIL::</b>. Please click the link in the email to activate your email alert!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Traži u';
$lng['alerts']['keyword'] = 'ključna riječ';
$lng['alerts']['frequency'] = 'Upozorenje frekvencije';
$lng['alerts']['alert_activated'] = 'Vaše upozorenje je aktivirano! Od sada ćete primati obavijesti za vaša upozorenja.';
$lng['alerts']['alert_unsubscribed'] = 'Vaše upozorenje je obrisano!';
$lng['alerts']['started_on'] = 'Počelo na';
$lng['alerts']['no_terms_searched'] = 'Nema postavljenih uvjeta za ovu pretragu!';
$lng['alerts']['no_listings'] = 'Nema oglasa za ovo upozorenje!';

$lng['alerts']['error']['email_required'] = 'Unesite svoju email adresu za vaše obavijesti!';
$lng['alerts']['error']['invalid_email'] = 'Neispravano upozorenje email adresa!';
$lng['alerts']['error']['invalid_frequency'] = 'Neispravno upozorenje frekvencije!';
$lng['alerts']['error']['login_required'] = 'Molimo <a href="::LINK::">Prijavi se</a> da možete objaviti upozorenje!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Odaberite najmanje jednu riječ za pretraživanje u kategoriji!';
$lng['alerts']['error']['invalid_confirmation'] = 'Neispravno upozorenje potvrde!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Neispravan zahtjev za otkazivanjem pretplate!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kreditni kalkulator';
$lng_loancalc['sale_price'] = 'Prodajna cijena';
$lng_loancalc['down_payment'] = 'Kapara';
$lng_loancalc['trade_in_value'] = 'Vrijednost za trgovinu';
$lng_loancalc['loan_amount'] = 'Iznos kredita';
$lng_loancalc['sales_tax'] = 'Porez na promet';
$lng_loancalc['interest_rate'] = 'Kamatna stopa';
$lng_loancalc['loan_term'] = 'Pojam zajma';
$lng_loancalc['months'] = 'mjeseci';
$lng_loancalc['years'] = 'godine';
$lng_loancalc['or'] = 'ili';
$lng_loancalc['monthly_payment'] = 'Mjesečne otplate';
$lng_loancalc['calculate'] = 'Izračun';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Komentari';
$lng_comments['make_a_comment'] = 'Objavi komentar';
$lng_comments['login_to_post'] = 'Molimo <a href="::LOGIN_LINK::">prijavite se</a> da možete objaviti komentar.';

$lng_comments['name'] = 'Ime';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Webstranica';
$lng_comments['submit_comment'] = 'Objavi Komentar';

$lng_comments['error']['name_missing'] = 'Unesite svoje ime!';
$lng_comments['error']['content_missing'] = 'Unesite svoj komentar!';
$lng_comments['error']['website_missing'] = 'Unesite svoju webstranicu!';
$lng_comments['error']['email_missing'] = 'Please enter your email!';
$lng_comments['error']['listing_id_missing'] = 'Netočan unos komentara!';

$lng_comments['error']['invalid_email'] = 'Netočna email adresa!';
$lng_comments['error']['invalid_website'] = 'Neočna webstranica!';
$lng_comments['errors']['badwords'] = 'Vaš komentar sadrži zabranjene riječi! Pregledajte svoj komentar !!';

$lng_comments['info']['comment_added'] = 'Vaš komentar je dodan! Klikni <a id="newad">ovdje</a> ako želite dodati komentar.';
$lng_comments['info']['comment_pending'] = 'Vaš komentar čeka odobrenje administratora.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'NEXT »';
$lng['tb']['prev'] = '« PREV';
$lng['tb']['close'] = 'CLOSE';
$lng['tb']['or_esc'] = 'or ESC Key';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Poruke';
$lng['messages']['confirm_delete_all'] = 'Sigurno želite obrisati odabrene poruke?';
$lng['messages']['listing'] = 'Oglasi';
$lng['messages']['no_messages'] = 'Nema poruka';
$lng['general']['reply'] = 'Odgovori na poruku';
$lng['messages']['message'] = 'Poruka';
$lng['messages']['from'] = 'Od';
$lng['messages']['to'] = 'Za';
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'Prikaz niza';
$lng['messages']['started_for_listing'] = 'Započeo uvrštavanje';
$lng['messages']['view_complete_message'] = 'Kompletnu poruku pogledaj ovdje';
$lng['messages']['message_history'] = 'Povijest poruka';
$lng['messages']['yourself'] = 'Ti';
$lng['messages']['report_spam'] = 'Prijava spama';
$lng['messages']['reported_as_spam'] = 'Prijavi kao spam';
$lng['messages']['confirm_report_spam'] = 'Jeste li sigurni da želite prijaviti ovu poruku kao spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Invalid listing id';
$lng['listings']['show_map'] = 'Prikaži mapu';
$lng['listings']['hide_map'] = 'Sakrij mapu';
$lng['listings']['see_full_listing'] = 'Pogledaj cjeloviti popis';
$lng['listings']['list'] = 'Popis';
$lng['listings']['gallery'] = 'Slike';
$lng['listings']['remove_fav_done'] = 'Popis je maknut sa favorit liste!';
$lng['search']['high_no_results'] = 'Broj rezultata za vaše oretraživanje je jako visoko. Navedeni rezultati su ograničeni na najrelevantnije za svoje rezultate. Molimo suzite pretraživanje dalje kako bi se smanjio broj rezultata i dobiti više relevantnih rezultata!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Ovaj email nije dopušten';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Više Vam nije dopušteno da koristite ovu pretplatu, iskoristili ste max broj!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Odaberite područje';
$lng['location']['choose'] = 'Odaberi';
$lng['location']['change'] = 'Promjeni';
$lng['location']['all_locations'] = 'Sva područja';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategorija';
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
