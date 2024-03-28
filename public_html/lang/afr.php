<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Tuis';
$lng['navbar']['login'] = 'Teken In';
$lng['navbar']['logout'] = 'Teken Uit';
$lng['navbar']['recent_ads'] = 'Onlangse Advertensies';
$lng['navbar']['register'] = 'Registreer';
$lng['navbar']['submit_ad'] = 'Plaas n Advertensie';
$lng['navbar']['editad'] = 'Verander Asvertensie';
$lng['navbar']['my_account'] = 'My Rekening';
$lng['navbar']['administrator_panel'] = 'Administrateur Paneel';
$lng['navbar']['contact'] = 'Kontak';
$lng['navbar']['password_recovery'] = 'Wagwoord Herstel';
$lng['navbar']['renew_listing'] = 'Hernu Lys';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Stuur';
$lng['general']['search'] = 'Soek';
$lng['general']['contact'] = 'Kontak';
$lng['general']['activeads'] = 'aktiewe advertensies';
$lng['general']['activead'] = 'aktiewe advertensie';
$lng['general']['subcats'] = 'sub katte';
$lng['general']['subcat'] = 'sub katte';
$lng['general']['view_ads'] = 'Sien  Advertensie';
$lng['general']['back'] = '« Terug';
$lng['general']['goto'] = 'Gaan na';
$lng['general']['page'] = 'Bladsy';
$lng['general']['of'] = 'van';
$lng['general']['other'] = 'Ander';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Voeg';
$lng['general']['delete_all'] = 'Verwyder alle geselekteerde';
$lng['general']['action'] = 'Aksie';
$lng['general']['edit'] = 'Verander';
$lng['general']['delete'] = 'Verwyder';
$lng['general']['total'] = 'Totale';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Maksimum';
$lng['general']['free'] = 'Vry';
$lng['general']['not_authorized'] = 'Jy is nie toegelaat om hierdie bladsy te sien nie!';
$lng['general']['access_restricted'] = 'Jou toegang tot hierdie bladsy is beperk!';
$lng['general']['featured_ads'] = 'Voorgestelde Advertensie';
$lng['general']['latest_ads'] = 'Nuutste Advertensie';
$lng['general']['quick_search'] = 'Vinning Soek';
$lng['general']['go'] = 'Gaan';
$lng['general']['unlimited'] = 'Onbeperkte';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'N lêer met dieselfde naam bestaan reeds en kan nie oorskryf nie !';
$lng['images']['errors']['file_uploaded_too_big'] = 'Jy is nie toegelaat om te laai lêers groter as ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Die beeld dismensies is te groot! Asseblief oplaai n lêer met maksimun ::MAX_FILE_WIDTH::px wydte en maksimum ::MAX_FILE_HEIGHT::px hoogte!';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Die lêer kan nie oplaai word nie !';
$lng['images']['errors']['no_file'] = 'Asseblief kies n lêer om op te laai!';
$lng['images']['errors']['no_folder'] = 'Oplaai lêer bestaan nie!';
$lng['images']['errors']['folder_not_writeable'] = 'Oplaai lêer is nie skrybaar nie !';
$lng['images']['errors']['file_type_not_accepted'] = 'Die foto\'s lêer tipe is nie n beeld-lêer of word nie ondersteun nie!';
$lng['images']['errors']['error'] = 'Daar was n fout met die oplaai van die lêer. Die fout was: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Duim spyker opgelaai lêer bestaan nie!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Duim spyker oplaai lêer nie skryfbaar.!';
$lng['images']['errors']['no_jpg_support'] = 'Geen JPG ondersteun!';
$lng['images']['errors']['no_png_support'] = 'Geen PNG ondersteun!';
$lng['images']['errors']['no_gif_support'] = 'Geen GIF ondersteun!';
$lng['images']['errors']['jpg_create_error'] = 'n Fout in die skep van die JPG beeld van die bron';
$lng['images']['errors']['png_create_error'] = 'n Fout in die skep van die PING beeld van die bron!';
$lng['images']['errors']['gif_create_error'] = 'n Fout in die skep van die GIF beeld van die bron!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Teken In';
$lng['login']['logout'] = 'Teken Out';
$lng['login']['username'] = 'Gebruikernaam';
$lng['login']['password'] = 'Wagwoord';
$lng['login']['forgot_pass'] = 'Vergeet jou wagwoord?';
$lng['login']['click_here'] = 'Kliek Hier';

$lng['login']['errors']['password_missing'] = 'Asseblief vul in jou wagwoord!';
$lng['login']['errors']['username_missing'] = 'Asseblief vul in jou gebruiker naam!';
$lng['login']['errors']['username_invalid'] = 'Die gebruikersnaam is ongeldig!';
$lng['login']['errors']['invalid_username_pass'] = 'Die gebruiker of wagwoord naam is ongeldig!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Teken Uit';
$lng['logout']['loggedout'] = 'Jy het uit geteken!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registreer';
$lng['users']['repeat_password'] = 'Herhaal Wagwoord';
$lng['users']['image_verification_info'] = 'Tik Asseblief die teks wat in die beeld boks is hieronder .<br /> Dit moontlike karakters letters van h in kleinletters is<br /> en die nommers van 1 tot 9.';
$lng['users']['already_logged_in'] = 'Jy is reeds aangemeld!';
$lng['users']['select'] = 'Kies';

$lng['users']['info']['activate_account'] = 'n E-Pos was gestuur na jou rekening. Volg asseblief die aanwysings om jou rekening te aktiveer.';
$lng['users']['info']['welcome_user'] = 'Jou rekening is geskep. Asseblief <a href="login.php">Teken In</a> jou rekening!';
$lng['users']['info']['awaiting_admin_verification'] = 'Jou rekening is in afwagting en wag vir die verifikasie van die administrateur. Jy sal per e-pos inkennis gestel word wanner jou rekening aktief is.';
$lng['users']['info']['account_info_updated'] = 'Jou rekening inligting is opgedateer!';
$lng['users']['info']['password_changed'] = 'Jou wagwoord was verander!';
$lng['users']['info']['account_activated'] = 'Jou rekening is geaktiveer! Asseblief <a href="login.php">Teken In</a> jou rekening.';

$lng['users']['errors']['username_missing'] = 'Vul asseblief in jou gebruikersnaam!';
$lng['users']['errors']['invalid_username'] = 'Ongeldig gebruiker naam!';
$lng['users']['errors']['username_exists'] = 'Gebruikersnaam bestaan reeds! Teken asseblief in as jy reeds n rekening het!';
$lng['users']['errors']['email_missing'] = 'Vul in asseblief e-pos adres !';
$lng['users']['errors']['invalid_email'] = 'Ongeldig e-pos adres!';
$lng['users']['errors']['passwords_dont_match'] = 'Wagwoord ooreenstem nie!';
$lng['users']['errors']['email_exists'] = 'Die e-pos adress is reeds in gebruik! Teken asseblief in as jy reeds n rekening het!';
$lng['users']['errors']['password_missing'] = 'Vul asseblief in jou kontak naam!';
$lng['users']['errors']['invalid_validation_string'] = 'Ongeldig validering reeks!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Ongeldig rekening of aktivering sleutel! Kontak asseblief administrateur!';
$lng['users']['errors']['account_already_active'] = 'Jou rekening is reeds aktief!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Lys';
$lng['listings']['category'] = 'Kategrorie';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Prys';
$lng['listings']['ad_description'] = 'Voeg Beskrywing';
$lng['listings']['title'] = 'Titel';
$lng['listings']['description'] = 'Beskrywing';
$lng['listings']['image'] = 'Beeld';
$lng['listings']['words_left'] = 'Woorde Links';
$lng['listings']['enter_photos'] = 'In sit Foto\'s';
$lng['listings']['ad_information'] = 'Voeg Inligting';
$lng['listings']['free'] = 'Verniet';
$lng['listings']['details'] = 'Besonderhede';
$lng['listings']['stock_no'] = 'Voorraad Nommer ';
$lng['listings']['location'] = 'Plek';
$lng['listings']['contact_info'] = 'Kontak Inligting';
$lng['listings']['email_seller'] = 'E-pos Verkoper';
$lng['listings']['no_recent_ads'] = 'Geen Onlangse Advertensies';
$lng['listings']['no_ads'] = 'Geen advertensies gelys vir hierdie kategorie';
$lng['listings']['added_on'] = 'Gepos Op';
$lng['listings']['send_mail'] = 'Stuur e-pos na gebruiker';
$lng['listings']['details'] = 'Besonderhede';
$lng['listings']['user'] = 'Gebruiker';
$lng['listings']['price'] = 'Prys';
$lng['listings']['confirm_delete'] = 'Is jy seker jy wil die lys verwyder?';
$lng['listings']['confirm_delete_all'] = 'Is jy seker jy wil die gekieste lys verwyder?';
$lng['listings']['all'] = 'Alle Lyste';
$lng['listings']['active_listings'] = 'Aktiewe Lyste';
$lng['listings']['pending_listings'] = 'Hangende Lyste';
$lng['listings']['featured_listings'] = 'Voorgestlde Lyste';
$lng['listings']['expired_listings'] = 'Vervalde Lyste';
$lng['listings']['active'] = 'Aktiewe';
$lng['listings']['inactive'] = 'Onaktiewe';
$lng['listings']['pending'] = 'Hangede';
$lng['listings']['featured'] = 'Voorgestelde';
$lng['listings']['expired'] = 'Verval';
$lng['listings']['order_by_date'] = 'Sorteer by Datum';
$lng['listings']['order_by_category'] = 'Sorteer by Kategorie';
$lng['listings']['order_by_make'] = 'Sorteer by Maak';
$lng['listings']['order_by_price'] = 'Sorteer by Prys';
$lng['listings']['order_by_views'] = 'Sorteer by Sienings';
$lng['listings']['order_asc'] = 'Stygende';
$lng['listings']['order_desc'] = 'Dalende';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Besoekers';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Geen Lyste';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Hierdie lys bestaan nie!';
$lng['listings']['mark_sold'] = 'Merk as Verkoop';
$lng['listings']['mark_unsold'] = 'Onmerk as Verkoop';
$lng['listings']['sold'] = 'Verkoop';
$lng['listings']['feature'] = 'Verskynsel';
$lng['listings']['expired_on'] = 'Verval op';
$lng['listings']['renew'] = 'Hernu';
$lng['listings']['print_page'] = 'Print';
$lng['listings']['recommend_this'] = 'Deel';
$lng['listings']['more_listings'] = 'Meer lys van hierdie gebruiker';
$lng['listings']['all_listings_for'] = 'Alle lyste vir';
$lng['listings']['free_category'] = 'GRATIS KATEGORIE';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Is jy seker jy wil die advertensie foto verwyder?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Woorde deel oorskry! Jy kan skry maksimum ::MAX:: words'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Jou lys bevat verbode woorde! Asseblief hersien jou inhoud!';
$lng['listings']['errors']['title_missing']='Vul asseblief n titel vir jou lyste!';
$lng['listings']['errors']['category_missing']='Asseblief kies jou kategorie!';
$lng['listings']['errors']['invalid_category']='Ongeldig kategorie!';
$lng['listings']['errors']['package_missing']='Asseblief kies n plan!';
$lng['listings']['errors']['invalid_package']='Ongeldig plan !';
$lng['listings']['errors']['content_missing']='Asseblief voeg n inhoud vir jou aanbieding lyste!';
$lng['listings']['errors']['invalid_price']='Ongeldig prys!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Lae Prys';
$lng['quick_search']['price_high'] = 'Hoë Prys';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Pos n nuwe advertensie';
$lng['useraccount']['browse_your_listings'] = 'My Lyste';
$lng['useraccount']['modify_account_info'] = 'Rekening Inligting';
$lng['useraccount']['order_history'] = 'Bestel Geskiedenis';
$lng['useraccount']['total_listings'] = 'Totale Lyste';
$lng['useraccount']['total_views'] = 'Totale Besoekers';
$lng['useraccount']['active_listings'] = 'Aktiewe lyste';
$lng['useraccount']['pending_listings'] = 'Hangende lyste';
$lng['useraccount']['last_login'] = 'Laaste Teken In';
$lng['useraccount']['last_login_ip'] = 'Laaste Teken In IP';
$lng['useraccount']['expired_listings'] = 'Vervallen Lyste';
$lng['useraccount']['statistics'] = 'Statistiek';
$lng['useraccount']['welcome'] = 'Welkom';
$lng['useraccount']['contact_name'] = 'Kontak Naam';
$lng['useraccount']['email'] = 'E-pos';
$lng['useraccount']['password'] = 'Wagwoord';
$lng['useraccount']['repeat_password'] = 'Herhaal Wagwoord';
$lng['useraccount']['change_password'] = 'Verander Wagwoord';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'to';
$lng['advanced_search']['price_min'] = 'Min Prys';
$lng['advanced_search']['price_max'] = 'Max Prys';
$lng['advanced_search']['word'] = 'Sleutel Woord';
$lng['advanced_search']['sort_by'] = 'Sorteer By';
$lng['advanced_search']['sort_by_price'] = 'Sorteer By Prys';
$lng['advanced_search']['sort_by_date'] = 'Sorteer By Datum';
$lng['advanced_search']['sort_by_make'] = 'Sorteer By Maak';
$lng['advanced_search']['sort_descendant'] = 'Sorteer Afstammeling';
$lng['advanced_search']['sort_ascendant'] = 'Sorteer Stygende';
$lng['advanced_search']['only_ads_with_pic'] = 'Slegs advertensies met Prente';
$lng['advanced_search']['no_results'] = 'Geen lyste is gevind om jou soektog te pas!';
$lng['advanced_search']['multiple_ads_matching'] = 'Daar is ::NO_ADS:: lyste wat ooreenstem met jou soektog!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Daar is n lys wat ooreenstem met jou soektog!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Naam';
$lng['contact']['subject'] = 'Onderwerp';
$lng['contact']['email'] = 'E-pos';
$lng['contact']['webpage'] = 'Web Blad';
$lng['contact']['comments'] = 'Kommentaar';
$lng['contact']['message_sent'] = 'Jou boodskap is gestuur!';
$lng['contact']['sending_message_failed'] = 'Boodskap aflewering het misluk!';
$lng['contact']['mailto'] = 'E-pos na';

$lng['contact']['error']['name_missing'] = 'Asseblief vul in jou naam!';
$lng['contact']['error']['subject_missing'] = 'Asseblief vul in jou onderwerp!';
$lng['contact']['error']['email_missing'] = 'Asseblief vul in jou e-pos!';
$lng['contact']['error']['invalid_email'] = 'Ongeldige e-pos!';
$lng['contact']['error']['comments_missing'] = 'Asseblief vul in jou kommentaar!';
$lng['contact']['error']['invalid_validation_number'] = 'Ongedige validering aantal!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'E-pos Adres';
$lng['password_recovery']['new_password'] = 'Nuwe Wagwoord';
$lng['password_recovery']['repeat_new_password'] = 'Herhaal Newe Wagwoord';
$lng['password_recovery']['invalid_key'] = 'Ongeldige Sleutel';

$lng['password_recovery']['email_missing'] = 'Asseblief vul in jou e-pos adres!';
$lng['password_recovery']['invalid_email'] = 'Ongeldige e-pos adres';
$lng['password_recovery']['email_inexistent'] = 'Daar is geen gebruiker geregistreer met hierdie e-pos adres nie';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Bedrag';
$lng['packages']['words'] = 'Woorde';
$lng['packages']['days'] = 'Dae';
$lng['packages']['pictures'] = 'Prente';
$lng['packages']['picture'] = 'Prent';
$lng['packages']['available'] = 'Beskikbaar';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Verwerker';
$lng['order_history']['amount'] = 'Bedrag';
$lng['order_history']['completed'] = 'Voltooi';
$lng['order_history']['not_completed'] = 'Nie Voltooi';
$lng['order_history']['ad_no'] = 'Lyste Aanbieding id';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Geen Bestel Rekords';
$lng['order_history']['order_by_date'] = 'Sorteer by Datum';
$lng['order_history']['order_by_amount'] = 'Sorteer by Bedrag';
$lng['order_history']['order_by_processor'] = 'Sorteer by Verwerker';
$lng['order_history']['description'] = 'Description';
$lng['order_history']['newad'] = 'Newad'; 
$lng['order_history']['renew'] = 'Hernu'; 
$lng['order_history']['featured'] = 'Kenmerk Advertensie'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sort by Datum';
$lng['order']['price'] = 'Sort by Prys';
$lng['order']['title'] = 'Sort by Titel';
$lng['order']['desc'] = 'Dalende';
$lng['order']['asc'] = 'Stygende';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Deel hierdie advertensie';
$lng['recommend']['your_name'] = 'Jou Naam';
$lng['recommend']['your_email'] = 'Jou E-pos';
$lng['recommend']['friend_name'] = 'Vriend\'e Naam';
$lng['recommend']['friend_email'] = 'Vriend\'e E-pos';
$lng['recommend']['message'] = 'Boodskap na jou vriend';


$lng['recommend']['error']['your_name_missing'] = 'Asseblief vul in jou naam!';
$lng['recommend']['error']['your_email_missing'] = 'Asseblief vul in jou e-pos';
$lng['recommend']['error']['friend_name_missing'] = 'Asseblief vul in jou vriend\'e naam!';
$lng['recommend']['error']['friend_email_missing'] = 'Asseblief vul in jou vriend\'e e-pos!';
$lng['recommend']['error']['invalid_email'] = 'Ongeldig e-pos adres';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Lyste';
$lng['stats']['general'] = 'Algemene';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Teken In';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Gunsteling';
$lng['general']['as'] = 'as';
$lng['general']['view'] = 'Sien';
$lng['general']['none'] = 'Geen';
$lng['general']['yes'] = 'ja';
$lng['general']['no'] = 'nee';
$lng['general']['next'] = 'Volgede »';
$lng['general']['finish'] = 'Klaar';
$lng['general']['download'] = 'Aflaai';
$lng['general']['remove'] = 'Verwyder';
$lng['general']['previous_page'] = '« Vorige';
$lng['general']['next_page'] = 'Volgende »';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Aktiewe';
$lng['general']['inactive'] = 'In Aktiewe';
$lng['general']['expires'] = 'Verval on';
$lng['general']['available'] = 'Beskikbaar';
$lng['general']['cancel'] = 'Kanselleer';
$lng['general']['never'] = 'Nooit';
$lng['general']['asc'] = 'Stygende';
$lng['general']['desc'] = 'Dalende';
$lng['general']['pending'] = 'Hangende';
$lng['general']['upload'] = 'Oplaai';
$lng['general']['processing'] = 'Inwerking, asseblief wag ... ';
$lng['general']['help'] = 'Help';
$lng['general']['hide'] = 'Wegsteek';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Dit is n beperk demo weergawe. U word nie toegelaat om sekere instellings te verander nie!';
$lng['general']['check_all'] = 'Maak Seker Alle';
$lng['general']['uncheck_all'] = 'Ontmerk Alle';
$lng['general']['all'] = 'Alle';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Handelaar Bladsy';
$lng['users']['store_banner'] = 'Handelaar Bladsy Banner';
$lng['users']['waiting_mail_activation'] = 'Wag vir e-pos aktivering';
$lng['users']['waiting_admin_activation'] = 'Wag vir administrateur goedkeuring';
$lng['users']['no_such_id'] = 'Die gebruiker gebruiker bestaan nie.';

$lng['users']['info']['store_banner'] = 'Die prent wat gebruik word as n boonste beeld vir jou handelaar bladsy.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Reppporteer Advertensie';
$lng['listings']['report_reason'] = 'Repporteer Rede';
$lng['listings']['meta_info'] = 'Meta Inligting';
$lng['listings']['meta_keywords'] = 'Meta Sleutewoorde';
$lng['listings']['meta_description'] = 'Meta Beskrywing';
$lng['listings']['not_approved'] = 'Nie Goedgekeur';
$lng['listings']['approve'] = 'Goedgekeur';
$lng['listings']['choose_payment_method'] = 'Kies betaling metode';

$lng['listings']['choose_category'] = 'Kies kategorie';
$lng['listings']['choose_plan'] = 'Kies Plan';
$lng['listings']['enter_ad_details'] = 'Tik in advertensie besonderhede';
$lng['listings']['ad_details'] = 'Advertensie Besonderhede';
$lng['listings']['add_photos'] = 'Voeg Fotos';
$lng['listings']['ad_photos'] = 'Advertensie Fotos';
$lng['listings']['edit_photos'] = 'Verander Fotos';
$lng['listings']['extra_options'] = 'Ekstra Opsies';
$lng['listings']['review'] = 'Advertensie Hersiening';
$lng['listings']['finish'] = 'Klaar';
$lng['listings']['next_step'] = 'Volgende Stap »';
$lng['listings']['included'] = 'Ingesluit';
$lng['listings']['finalize'] = 'Finaliseer';
$lng['listings']['zip'] = 'Poskode';
$lng['listings']['add_to_favourites'] = 'Voeg by gunstelinge';
$lng['listings']['confirm_add_to_fav'] = 'Waarskuwing! Jy is nie aangemeld nie! Die lys van gunstelinge sal tydelik wees!';
$lng['listings']['add_to_fav_done'] = 'Die lys was by die gunstelinge lys bygevoeg!';
$lng['listings']['confirm_delete_favourite'] = 'Is jy seker jy wil die gunsteling advertensie verwyder?';
$lng['listings']['no_favourites'] = 'Geen Gunsteling Lyste';
$lng['listings']['extra_options'] = 'Ekstra Opsies';
$lng['listings']['highlited'] = 'Hoë Verligte';
$lng['listings']['priority'] = 'Prioriteit';
$lng['listings']['video'] = 'Video Geclassifieerd';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Hangende Video';
$lng['listings']['video_code'] = 'Video Kode';
$lng['listings']['total'] = 'Totale';
$lng['listings']['approve_ad'] = 'GoedKeur Advertensie';
$lng['listings']['finalize_later'] = 'Finaliseer Later';
$lng['listings']['click_to_upload'] = 'Kliek vir oplaai';
$lng['listings']['files_uploaded'] = ' Foto(s) oplaai van totale ';
$lng['listings']['allowed'] = ' Fotos toegelaat!';
$lng['listings']['limit_reached'] = ' Perke van maksimum fotos bereik!';
$lng['listings']['edit_options'] = 'Verander Advertensie Opsies';
$lng['listings']['view_store'] = 'Kyk na Handelaar bladsy';
$lng['listings']['edit_ad_options'] = 'Verander Advertensie Opsies';
$lng['listings']['no_extra_options_selected'] = 'Geen ekstra opsies is gekies!';
$lng['listings']['highlited_listings'] = 'Hoegeligde Lyste';
$lng['listings']['for_listing'] = 'vir lyste no nee ';
$lng['listings']['expires_on'] = 'Verval';
$lng['listings']['expired_on'] = 'Vervalde';
$lng['listings']['pending_ad'] = 'Hangende Lys';
$lng['listings']['pending_highlited'] = 'Hangende Hoeligde';
$lng['listings']['pending_featured'] = 'Hangende Voorgestelde';
$lng['listings']['pending_priority'] = 'Hangende Prioriteit';
$lng['listings']['enter_coupon'] = 'Tik in Afslag kode';
$lng['listings']['discount'] = 'Afslag';
$lng['listings']['select_plan'] = 'Kies Plan';
$lng['listings']['pending_subscription'] = 'Hangende Subskripsie';
$lng['listings']['remove_favourite'] = 'Verwyder Gunstelings';

$lng['listings']['order_up'] = 'Bestel op';
$lng['listings']['order_down'] = 'Bestel af';

$lng['listings']['errors']['invalid_youtube_video'] = 'Ongeldige youtube video!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Teken In';
$lng['useraccount']['no_package'] = 'Geen Advertensie Plan';
$lng['useraccount']['packages'] = 'Planne';
$lng['useraccount']['date_start'] = 'Datum Begin';
$lng['useraccount']['date_end'] = 'Datum Einde';
$lng['useraccount']['remaining_ads'] = 'Oorblywende Advertensies';
$lng['useraccount']['account_type'] = 'Rekening Tipe';
$lng['useraccount']['unfinished_listings'] = 'Onafgehandelde lyste';
$lng['useraccount']['confirm_delete_subscription'] = 'Is jy seker jy wil hierdie inskrywing verwyder?';
$lng['useraccount']['buy_store'] = 'Koop Handelaars Bladsy';
$lng['useraccount']['bulk_uploads'] = 'Grootmaat Oplaai';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Inskrywing';
$lng['packages']['ads'] = 'Advertensies';
$lng['packages']['name'] = 'Naam';
$lng['packages']['details'] = 'Besonderhede';
$lng['packages']['no_ads'] = 'Aantal van Advertensies';
$lng['packages']['subscription_time'] = 'Inskrywing Tyd';
$lng['packages']['no_pictures'] = 'Toegelaat Prente';
$lng['packages']['no_words'] = 'Aantal van Woorde';
$lng['packages']['ads_availability'] = 'Advertensies Beskikbaarheid';
$lng['packages']['featured'] = 'Voorgestelde';
$lng['packages']['highlited'] = 'Boegeligte';
$lng['packages']['priority'] = 'Prioriteit';
$lng['packages']['video'] = 'Video Geclassifieerde';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Subskripsie';
$lng['order_history']['post_listing'] = 'Pos Lyste';
$lng['order_history']['renew_listing'] = 'Hernu Lyste';
$lng['order_history']['feature_listing'] = 'Verskynsel Lyste';
$lng['order_history']['subscribe_to_package'] = 'Subskripsie na Plan';
$lng['order_history']['complete_payment'] = 'Voltooi Betaling';
$lng['order_history']['complete_payment_for'] = 'Voltooi Betaling Vir';
$lng['order_history']['details'] = 'Besonderhede';
$lng['order_history']['subscription_no'] = 'Subskripsie No';
$lng['order_history']['highlited'] = 'Boeligte Advertensie';
$lng['order_history']['priority'] = 'Prioriteit';
$lng['order_history']['video'] = 'Video Gekassifieerde';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Asseblief kies n plan!';
$lng['buy_package']['error']['choose_processor'] = 'Asseblief kies tipe betaling!';
$lng['buy_package']['error']['invalid_processor'] = 'Ongeldige betaling verwerker!';
$lng['buy_package']['error']['invalid_package'] = 'Ongeldige plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ongeldige Paypal transaksie!';
$lng['2co']['invalid_transaction'] = 'Ongeldige 2Checkout transaksie!';
$lng['moneybookers']['invalid_transaction'] = 'Ongeldige Moneybookers transaksie!';
$lng['authorize']['invalid_transaction'] = 'Ongeldige Authorize.net transaksie!';
$lng['manual']['invalid_transaction'] = 'Ongeldige Transaksie!';

$lng['paypal']['transaction_canceled'] = 'Paypal transaksie gekanselleer!';
$lng['2co']['transaction_canceled'] = '2Checkout transaksie gekanselleer!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transaksie gekanselleer!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transaksie gekanselleer!';
$lng['manual']['transaction_canceled'] = 'Transaksie Gekanselleer!';
$lng['epay']['transaction_canceled'] = 'ePay transaksie gekanselleer!';

$lng['payments']['transaction_already_processed'] = 'Die transaksie is reeds geproesseer!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Goedkeuring Inskrywing';
$lng['subscribe']['payment_method'] = 'Betaling Metode';
$lng['subscribe']['renew_subscription'] = 'Hernu Inskrywing';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopieer e-pos: ';
$lng['bcc_mails']['from'] = 'Van: ';
$lng['bcc_mails']['to'] = 'Na: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Bulk oplaai status: ';
$lng['ie']['successfully'] = 'lyste bygevoeg suksesvol';
$lng['ie']['failed'] = 'failed';
$lng['ie']['uploaded_listings'] = 'Oplaai advertensies lys:';
$lng['ie']['errors']['upload_import_file'] = 'Asseblief oplaai die lêer om invoer van!';
$lng['ie']['errors']['incorrect_file_type'] = 'Verkeerde lêertipe! Die lêer tipe moet wees: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kan lêer nie oopmaak nie!';
$lng['ie']['errors']['choose_categ'] = 'Asseblief kies n kategorie!';
$lng['ie']['errors']['could_not_save_file'] = 'Kon nie lêer aflaai nie: ';
$lng['ie']['errors']['required_field_missing'] = 'Vereiste veld onbreek: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Verkeerde data telling in ry no: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Kies Handelaars';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Gebied soek';
$lng['areasearch']['all_locations'] = 'Alle plekke';
$lng['areasearch']['exact_location'] = 'Presiese plekke';
$lng['areasearch']['around'] = 'rondom';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nee';
$lng['general']['or'] = 'of';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'by';
$lng['general']['close_window'] = 'Sluit Venster';
$lng['general']['more_options'] = 'meer opsies »';
$lng['general']['less_options'] = '« minder opsies';
$lng['general']['send'] = 'Stuur';
$lng['general']['save'] = 'Stoor';
$lng['general']['for'] = 'vir';
$lng['general']['to'] = 'aan';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Merk As Gehuurde';
$lng['listings']['mark_unrented'] = 'Ontmerk As Gehuurde';
$lng['listings']['rented'] = 'Gehuur';
$lng['listings']['your_info'] = 'Jou Inligting';
//******
$lng['listings']['email'] = 'Jou e-posadres';
$lng['listings']['name'] = 'Jou Naam';

$lng['listings']['listing_deleted'] = 'Jou aanbieding is verwyder!';
$lng['listings']['post_without_login'] = 'Pos sonder aanteken';
$lng['listings']['waiting_activation'] = 'Wag vir die aktivering';
$lng['listings']['waiting_admin_approval'] = 'Wag vir goedkeuring deur die administrateur';
$lng['listings']['dont_need_account'] = 'Hoef nie n rekening? Plaas jou advertensie sonder aanteken!';
$lng['listings']['post_your_ad'] = 'Pos jou advertensie!';
$lng['listings']['posted'] = 'Gepos';
$lng['listings']['select_subscription'] = 'Kies Subskripsie';
$lng['listings']['choose_subscription'] = 'Kies Subskripsie';
$lng['listings']['inactive_listings'] = 'In Aktiewe Lyste';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Verfyn Soek';
$lng['search']['refine_by_keyword'] = 'Verfyn by sleutelwoorde';
$lng['search']['showing'] = 'Wys';
$lng['search']['more'] = 'Meer ...';
$lng['search']['less'] = 'Minder ...';
$lng['search']['search_for'] = 'Soek vir';
$lng['search']['save_your_search'] = 'Stoor jou soek';
$lng['search']['save'] = 'Stoor';
$lng['search']['search_saved'] = 'Jou soek was gestoor!';
$lng['search']['must_login_to_save_search'] = 'Jy moet inteken jou rekening om jou soektog te red!';
$lng['search']['view_search'] = 'Vertoon Soek';
$lng['search']['all_categories'] = 'Alle Kategorieë';
$lng['search']['more_than'] = 'meer as';
$lng['search']['less_than'] = 'minder as';

$lng['search']['error']['cannot_save_empty_search'] = 'Jou soektog bevat nie engige termyn nie kan nie gered word nie!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Stoor Soektog';
$lng['useraccount']['view_saved_searches'] = 'Vertoon Stoor Soektog';
$lng['useraccount']['no_saved_searches'] = 'Geen gestoorde Soektog';
$lng['useraccount']['recurring'] = 'Herhalende';
$lng['useraccount']['date_renew'] = 'Datum hernu';
$lng['useraccount']['logged_in_as'] = 'Jy is aangeteken as ';
$lng['useraccount']['subscriptions'] = 'Subskripsies';

$lng['users']['activate_account'] = 'Aktiveer Rekening';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Voeg Subskripsies';
$lng['subscriptions']['package'] = 'Subskripsies';
$lng['subscriptions']['remaining_ads'] = 'Oorblywende Advertensies';
$lng['subscriptions']['recurring'] = 'Oorblywende';
$lng['subscriptions']['date_start'] = 'Datum Begin';
$lng['subscriptions']['date_end'] = 'Datum Einde';
$lng['subscriptions']['date_renew'] = 'Datum Hernu';
$lng['subscriptions']['confirm_delete'] = 'Is jy seker jy wil die subskripsies verwyder?';
$lng['subscriptions']['no_subscriptions'] = 'Geen Subskripsies';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Jy het nog nie n rekening nie?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Aktiveer herhalende betalings vir hierdie subskripsie';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Die volgende vereiste velde ontbreek: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Koop Handelaars Bladsy';


$lng['images']['errors']['max_photos'] = 'Maksimum fotos opgelaai!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-pos waarsku';
$lng['alerts']['email_alerts'] = 'E-pos waarskuwing';
$lng['alerts']['no_alerts'] = 'Geen e-pos waarskuwins';
$lng['alerts']['view_email_alerts'] = 'Sien jou E-pos waarskuwins';
$lng['alerts']['send_email_alerts'] = 'Stuur E-pos waarskuwins';
$lng['alerts']['immediately'] = 'Dadelik';
$lng['alerts']['daily'] = 'Daaglikes';
$lng['alerts']['weekly'] = 'Weeklikse';
$lng['alerts']['your_email'] = 'Jou e-pos adres';
$lng['alerts']['create_alert'] = 'Skep waarsku';
$lng['alerts']['email_alert_info'] = 'Ontvang e-pos kennisgewings wanneer nuwe lys toon vir die soektog.';
$lng['alerts']['alert_added'] = 'Jou waarskuwing is geskep!';
$lng['alerts']['alert_added_activate'] = 'Jy sal n e-pos ontvang binnekort op <b>::EMAIL::</b>. Aseblief kliek op die skakel in die e-pos jou e-pos waarskuwing te aktiveer!'; // Moet nie Vewyder ::EMAIL:: reeks !
$lng['alerts']['search_in'] = 'Soek in';
$lng['alerts']['keyword'] = 'sleutelwoord';
$lng['alerts']['frequency'] = 'Waarskuwing frekwensie';
$lng['alerts']['alert_activated'] = 'Jou waarskuwing is geaktiveer! Jy sal nou begin met die ontvangs van e-pos vir jou waarskuwing.';
$lng['alerts']['alert_unsubscribed'] = 'Jou waarskuwing was geskrap!';
$lng['alerts']['started_on'] = 'Begin Op';
$lng['alerts']['no_terms_searched'] = 'Daar is geen voorwaardes stel vir hierdie soektog nie!';
$lng['alerts']['no_listings'] = 'Geen lyste vir hierdie waarskuwing!';

$lng['alerts']['error']['email_required'] = 'Vul asseblief n e-pos adres vir jou waarskuwing!';
$lng['alerts']['error']['invalid_email'] = 'Ongeldige waarskuwing e-pos adres!';
$lng['alerts']['error']['invalid_frequency'] = 'Ongeldige waarskuwing frekwensie!';
$lng['alerts']['error']['login_required'] = 'Aseblief <a href="::LINK::">teken in</a> om waarskuwing te registreer!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Kies asseblief ten minste een soek sleutel behalwe kategorie!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ongelde waarskuwing bevestig!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ongelde uitteken versoek!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Lening Sakrekenaar';
$lng_loancalc['sale_price'] = 'Verkoopprys';
$lng_loancalc['down_payment'] = 'Af te Betaal';
$lng_loancalc['trade_in_value'] = 'Handel in waarde';
$lng_loancalc['loan_amount'] = 'Leningsbedrag';
$lng_loancalc['sales_tax'] = 'Verkope BTW-';
$lng_loancalc['interest_rate'] = 'Rentekoers';
$lng_loancalc['loan_term'] = 'Leningstermyn';
$lng_loancalc['months'] = 'maande';
$lng_loancalc['years'] = 'jare';
$lng_loancalc['or'] = 'of';
$lng_loancalc['monthly_payment'] = 'Maandelikse betaling';
$lng_loancalc['calculate'] = 'Bereken';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Kommentaar';
$lng_comments['make_a_comment'] = 'Maak n kommentaar';
$lng_comments['login_to_post'] = 'Asseblief <a href="::LOGIN_LINK::">teken in</a> sodat jy kan pos n kommentaar.';

$lng_comments['name'] = 'Naam';
$lng_comments['email'] = 'E-pos';
$lng_comments['website'] = 'Web Werf';
$lng_comments['submit_comment'] = 'Pos Kommentaar';

$lng_comments['error']['name_missing'] = 'Asseblief tik jou naam!';
$lng_comments['error']['content_missing'] = 'Asseblief tik jou kommertaar!';
$lng_comments['error']['website_missing'] = 'Asseblief tik jou webwerf!';
$lng_comments['error']['email_missing'] = 'Asseblief tik in jou e-pos!';
$lng_comments['error']['listing_id_missing'] = 'Ongeldige kommentaar inskrywing!';

$lng_comments['error']['invalid_email'] = 'Ongeldige e-pos adres!';
$lng_comments['error']['invalid_website'] = 'Ongeldige webwerf!';
$lng_comments['errors']['badwords'] = 'Jou kommentaar bevat verbode woorde! Asseblief verander jou boodskap!';

$lng_comments['info']['comment_added'] = 'Jou kommentaar is bygevoeg! Kliek <a id="newad">here</a> hier as u wil nog meer kommentaar gee.';
$lng_comments['info']['comment_pending'] = 'Jou kommentaar is afwagting en wag vir die verifkasie van die administrateur.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'VOLGENDE »';
$lng['tb']['prev'] = '« VORIGE';
$lng['tb']['close'] = 'GESLUIT';
$lng['tb']['or_esc'] = 'of ESC Sleutel';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'BOODSKAPPE';
$lng['messages']['confirm_delete_all'] = 'Is jy seker jy wil geselekteerde boodskappe te verwyder?';
$lng['messages']['listing'] = 'Lyste';
$lng['messages']['no_messages'] = 'Geen boodskappe';
$lng['general']['reply'] = 'Antwoord na boodskappe';
$lng['messages']['message'] = 'Boodskap';
$lng['messages']['from'] = 'Van';
$lng['messages']['to'] = 'Aan';
$lng['messages']['on'] = 'Op';
$lng['messages']['view_thread'] = 'Kyk thread';
$lng['messages']['started_for_listing'] = 'Begin lys';
$lng['messages']['view_complete_message'] = 'Vertoon voltooi boodskap hier';
$lng['messages']['message_history'] = 'Boodskap Geskiedenis';
$lng['messages']['yourself'] = 'U';
$lng['messages']['report_spam'] = 'Rapporteer gemorspos';
$lng['messages']['reported_as_spam'] = 'Rapporteer as gemorspos';
$lng['messages']['confirm_report_spam'] = 'Is jy seker jy wil hierdie boodskap as gemorspos aan te meld?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Ongeldige  lys id';
$lng['listings']['show_map'] = 'Toon Kaart';
$lng['listings']['hide_map'] = 'Versteek die Kaart';
$lng['listings']['see_full_listing'] = 'Sien vollende lys';
$lng['listings']['list'] = 'Lys';
$lng['listings']['gallery'] = 'Foto\'s';
$lng['listings']['remove_fav_done'] = 'Die aanbieding is verwyder van die lys van gunstelinge!';
$lng['search']['high_no_results'] = 'Die getal van die uitslae vir jou soektog is baie hoog. Die lys uitslae beperk tot die mees toepaslik van u uitslae. Asseblief herdefinieer u soektog verder ten einde die aantal uitslae te verminder en meer uitslae te kry!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Hierdie e-pos adres word nie toelaatbaar nie!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Jy is nie toegelaat om hierdie inskrywing te gebruik nie, is die maksimum aantak van gebruik bereik!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Kies n Plek';
$lng['location']['choose'] = 'Choose';
$lng['location']['change'] = 'Change';
$lng['location']['all_locations'] = 'Alle Plekke';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategorie';
$lng['location']['save_location'] = 'Stoor Kategorie';

$lng['credits']['credits'] = 'Kredieste';
$lng['credits']['credit'] = 'Krediet';
$lng['credits']['pending_credits'] = 'Hangende Kredieste';
$lng['credits']['current_credits'] = 'Huidige Kredieste';
$lng['credits']['one_credit_equals'] = 'Een krediet gelyk is aan';
$lng['credits']['credits_amount'] = 'Krediete Bedrag';
$lng['credits']['buy_extra_credits'] = 'Koop ekstra krediente';
$lng['credits']['credits_package'] = 'Krediete Pakket';
$lng['credits']['select_package'] = 'Kies krediete pakket';
$lng['credits']['choose_package'] = 'Kies pakket';
$lng['credits']['you_currently_have'] = 'U het tans ';
$lng['credits']['you_currently_have_no_credits'] = 'U het tans geen krediete ';
$lng['credits']['pay_using_credits'] = 'Betalen met behulp van kreniete';
$lng['credits']['not_enough_credits'] = 'Nie genoeg krediete vir die betaling!';
$lng['credits']['scredits'] = 'Krediete';
$lng['credits']['scredit'] = 'Krediet';



$lng['order_history']['credits_purchase'] = 'Krediete Koop';
$lng['order_history']['invalid_order'] = 'Ongeldige Bestelling!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Asseblief wag\U word aangestuur!';

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
