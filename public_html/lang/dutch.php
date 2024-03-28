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
$lng['navbar']['login'] = 'Login'; 
$lng['navbar']['logout'] = 'Uitloggen'; 
$lng['navbar']['recent_ads'] = 'Recente Advertenties'; 
$lng['navbar']['register'] = 'Inschrijven'; 
$lng['navbar']['submit_ad'] = 'Verzenden Advertentie'; 
$lng['navbar']['editad'] = 'Advertentie bewerken';
$lng['navbar']['my_account'] = 'Mijn Account'; 
$lng['navbar']['administrator_panel'] = 'Beheerder Configuratiescherm';
$lng['navbar']['contact'] = 'Contact'; 
$lng['navbar']['password_recovery'] = 'Password Recovery'; 
$lng['navbar']['feature_listing'] = 'Functie lijst'; 
$lng['navbar']['renew_listing'] = 'Vernieuwen aanbieding';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Verzenden';
$lng['general']['search'] = 'Zoeken';
$lng['general']['contact'] = 'Contact';
$lng['general']['advanced_search'] = 'Uitgebreid zoeken'; 
$lng['general']['activeads'] = 'Actieve advertenties';
$lng['general']['activead'] = 'Actieve advertentie';
$lng['general']['subcats'] = 'subcats';
$lng['general']['subcat'] = 'subcat';
$lng['general']['view_ads'] = 'Bekijk de advertentie'; 
$lng['general']['back'] = 'Terug';
$lng['general']['goto'] = 'Ga naar';
$lng['general']['page'] = 'Pagina'; 
$lng['general']['of'] = 'van';
$lng['general']['other'] = 'Andere'; 
$lng['general']['NA'] = 'N/A'; 
$lng['general']['add'] = 'Toevoegen';
$lng['general']['delete_all'] = 'Verwijder alle geselcteerde'; 
$lng['general']['action'] = 'Actie'; 
$lng['general']['edit'] = 'Bewerken';
$lng['general']['delete'] = 'Verwijderen';
$lng['general']['total'] = 'Totaal';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'Gratis'; 
$lng['general']['not_authorized'] = 'U bent niet gemachtigd om deze pagina te bekijken!';  
$lng['general']['access_restricted'] = 'Uw toegang tot deze pagina is beperkt'; 
$lng['general']['featured_ads'] = 'Beste Ads';
$lng['general']['latest_ads'] = 'Nieuwe advertenties';
$lng['general']['quick_search'] = 'Snel zoeken'; 
$lng['general']['go'] = 'Ga naar';

// ---------------------- IMAGE CLASS ERRORS ---------------------
$lng['images']['errors']['file_exists_unwriteable'] = 'Een bestand met dezelfde naam bestaat al en kan niet worden overschreven!';
$lng['images']['errors']['file_uploaded_too_big'] = 'U bent niet toegestaan om bestanden te uploaden  die groter zijn dan ::MAX_FILE_UPLOAD_SIZE:: Kb !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Het dimensie van het te uploaden bestand is te groot! Bewerk de afbeelding, zodat het niet meer dan::MAX_FILE_WIDTH::px breed ::MAX_FILE_HEIGHT::px hood !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Het bestand kan niet worden geupload';
$lng['images']['errors']['no_file'] = 'Gelieve een bestand te kiezen om te uploaden';
$lng['images']['errors']['no_folder'] = 'Het geuploaded map bestaat niet!';
$lng['images']['errors']['folder_not_writeable'] = 'Geuploaded map niet overschrijfbaar!';
$lng['images']['errors']['file_type_not_accepted'] = 'Het geuploade bestand is geen beeldbestand of wordt niet ondersteund!';
$lng['images']['errors']['error'] = 'Er is een fout opgetreden bij het uploaden van het bestand. De fout is: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Thumbnail uploaden map bestaat niet!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Thumbnail uploaden map is niet schrijfbaar!';
$lng['images']['errors']['no_jpg_support'] = 'Geen JPG ondersteuning!';
$lng['images']['errors']['no_png_support'] = 'Geen PNG ondersteuning!';
$lng['images']['errors']['no_gif_support'] = '
Geen GIF ondersteuning!';
$lng['images']['errors']['jpg_create_error'] = 'Fout bij het maken van JPG-afbeelding van de bron!';
$lng['images']['errors']['png_create_error'] = 'Fout bij het maken van PNG-afbeelding van de brond!';
$lng['images']['errors']['gif_create_error'] = 'Fout bij het maken van GIF-afbeelding van de bron!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Login';
$lng['login']['logout'] = 'Uitloggen';
$lng['login']['username'] = 'Gebruikersnaam';
$lng['login']['password'] = 'Wachtwoord';
$lng['login']['forgot_pass'] = 'Wachtwoord vergeten?';
$lng['login']['click_here'] = 'Klik hier';

$lng['login']['errors']['password_missing'] = 'Vul uw wachtwoord!';
$lng['login']['errors']['username_missing'] = 'Vul uw gebruikersnaam!';
$lng['login']['errors']['username_invalid'] = ' De gebruikersnaam is ongeldig!';
$lng['login']['errors']['invalid_username_pass'] = 'Ongeldige gebruikersnaam of wachtwoord!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Uitloggen';
$lng['logout']['loggedout'] = 'U bent afgemeld!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Inschrijven';
$lng['users']['repeat_password'] = 'Herhaal wachtwoord';
$lng['users']['image_verification_info'] = 'Geef de swing weergeven in de afbeelding in het onderstaande formulier <br>De mogelijke tekens zijn letters van A tot H in geactiveerde vorm en de cijfers 0 tot met 9.';
$lng['users']['already_logged_in'] = 'U bent reeds ingelogd!';
$lng['users']['select'] = 'Selecteer';


$lng['users']['errors']['username_missing'] = 'Vul gebruikersnam!';
$lng['users']['errors']['invalid_username'] = 'Ongeldige gebruikersnaam!';
$lng['users']['errors']['username_exists'] = 'Gebruikersnaam bestaat al! Gelieve in te loggen als u al een account heeft!';
$lng['users']['errors']['email_missing'] = 'Vul email adres!';
$lng['users']['errors']['invalid_email'] = 'Email incorrect!';
$lng['users']['errors']['passwords_dont_match'] = 'Ongeldige wachtwoord!';
$lng['users']['errors']['email_exists'] = 'Het email adres bestaat al! Gelieve in te loggen als u al een account heeft!';
$lng['users']['errors']['password_missing'] = 'Vul wachtwoord!';
$lng['users']['errors']['password_not_match'] = 'Ongeldige wachtwoord!';
$lng['users']['errors']['invalid_validation_string'] = 'Ongeldige Validatie string!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Ongeldige account of activatie! Neem contact op met de beheerder!';
$lng['users']['errors']['account_already_active'] = 'Uw account is al actief!';

$lng['users']['info']['activate_account'] = 'Een email is verzonden naar uw account. Volgt de aanwijzingen om uw account te activeren.';
$lng['users']['info']['welcome_user'] = 'Uw account is aangemaakt. <a href="login.php">Login</a> naar uw account!';
$lng['users']['info']['account_info_updated'] = 'Uw account informatie is vernieuwd!';
$lng['users']['info']['password_changed'] = 'Uw wachtwoord is gewijzigd!';
$lng['users']['info']['account_activated'] = 'Uw account is geactiveerd! <a href="login.php">Login</a> naar uw account.';

// ------------------ NEW AD -------------------
$lng['listings']['category'] = 'Categorie';
$lng['listings']['package'] = 'Plan';
$lng['listings']['make'] = 'Merk';
$lng['listings']['model'] = 'Model';
$lng['listings']['price'] = 'Prijs';
$lng['listings']['country'] = 'Land';
$lng['listings']['state'] = 'Staat';
$lng['listings']['city'] = 'Stad';
$lng['listings']['ad_description'] = 'Ad beschrijving';
$lng['listings']['title'] = 'Titel';
$lng['listings']['description'] = 'Beschrijving';
$lng['listings']['image'] = 'Afbeelding';
$lng['listings']['words_left'] = 'Woorden links';
$lng['listings']['enter_photos'] = 'Voer Fotos';
$lng['listings']['choose_payment_method'] = 'Kies betaal mogelijkheden';
$lng['listings']['ad_information'] = 'Informatie';
$lng['listings']['free'] = 'Gratis';
$lng['listings']['select_package'] = 'Kies een plan';
$lng['listings']['packages_details'] = 'Detalles';
$lng['listings']['select_make'] = 'Merk';
$lng['listings']['select_model'] = 'Model';
$lng['listings']['select_country'] = 'Land';
$lng['listings']['select_state'] = 'Stad';
$lng['listings']['other'] = 'Andere ';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['stock_no'] = '# Inventaris nr.';
$lng['listings']['location'] = 'Locatie';
$lng['listings']['contact_info'] = 'Contact informatie ';
$lng['listings']['email_seller'] = 'Email verkoper';
$lng['listings']['no_recent_ads'] = 'Geen recente advertenties';
$lng['listings']['no_ads'] = 'Geen advertentie voor deze categorie';
$lng['listings']['added_on'] = 'Toegevoegd op';
$lng['listings']['send_mail'] = 'Stuur E-mail naar gebruiker';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['user'] = 'Gebruikersnaam';
$lng['listings']['price'] = 'Prijs';
$lng['listings']['confirm_delete'] = 'Weet u zeker dat u de aanbieding wilt verwijderen?';
$lng['listings']['confirm_delete_all'] = 'Weet u zeker dat u de geselecteerde aanbieding wilt verwijderen?';
$lng['listings']['all'] = 'Alle aanbiedingen';
$lng['listings']['active_listings'] = 'Actieve aanbiedingen';
$lng['listings']['pending_listings'] = 'Aanbiedingen in afwachting';
$lng['listings']['featured_listings'] = 'Featured aanbiedingen';
$lng['listings']['pending_featured_listings'] = 'Featured aanbieding in afwachting';
$lng['listings']['expired_listings'] = 'Versterken aanbiedingen';
$lng['listings']['active'] = 'Actief';
$lng['listings']['inactive'] = 'Inactieve';
$lng['listings']['pending'] = 'In afwachting van';
$lng['listings']['featured'] = 'featured';
$lng['listings']['pending_featured'] = 'Featured in afwachting;(P)';
$lng['listings']['expired'] = 'Verstreken';
$lng['listings']['order_by_date'] = 'Sorteer op datum';
$lng['listings']['order_by_category'] = 'Sorteer op Categorie';
$lng['listings']['order_by_make'] = 'Sorteer op Fabricant';
$lng['listings']['order_by_price'] = 'Sorteer op Prijs';
$lng['listings']['order_by_views'] = 'Sorteer op aantal keren bekeken';
$lng['listings']['order_asc'] = 'Oplopend';
$lng['listings']['order_desc'] = 'Aflopend';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Aantal keren bekeken';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Geen aanbiedingen';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Er is geen aanbieding met id';
$lng['listings']['mark_sold'] = 'Markeer Verkocht';
$lng['listings']['mark_unsold'] = 'Markeer Beschikbaar';
$lng['listings']['feature'] = 'Featured';
$lng['listings']['sold'] = 'Verkocht';
$lng['listings']['expired_on'] = 'Vervallen op';
$lng['listings']['renew'] = 'Vernieuwen';
$lng['listings']['print_page'] = 'Print deze pagina';
$lng['listings']['recommend_this'] = 'Beveel deze';
$lng['listings']['more_listings'] = 'Meer aanbiedingen van deze gebruiker';
$lng['listings']['all_listings_for'] = 'Alle aanbiedingen voor';
$lng['listings']['free_category'] = 'Categorie Gratis';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Weet u zeker dat u de advertentie foto wilt verwijderen?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Woorden quotum overschreden! U kunt mazimaal ::MAX:: caracteres'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Uw vermelding bevat BADWORDS! Conroleer uw content';
$lng['listings']['errors']['title_missing']='Vul een titel voor je aanbieding!';
$lng['listings']['errors']['category_missing']='Kies een categorie!';
$lng['listings']['errors']['invalid_category']='Ongeldige categorie';
$lng['listings']['errors']['package_missing']='Kies een pakket!';
$lng['listings']['errors']['invalid_package']='Ongeldige pakket!';
$lng['listings']['errors']['content_missing']='Plaats een inhoud voor je aanbieding!';
$lng['listings']['errors']['invalid_price']='Prijs ongeldig!';
$lng['listings']['errors']['make_missing']='Vul maak!';
$lng['listings']['errors']['invalid_make']='Ongeldige Maak! Beoordeel de beschikbare of schrijf ons';
$lng['listings']['errors']['model_missing']='Kies Model!';
$lng['listings']['errors']['invalid_model']='Ongeldige Model! Beoordeel de beschikbare of schrijf ons';
$lng['listings']['errors']['invalid_country']='Ongeldige Land! Beoordeel de beschikbare of schrijf ons';
$lng['listings']['errors']['invalid_state']='Ongeldige Staat!';
$lng['listings']['errors']['user_missing']='Kies een gebruikernaam!';



// ------------------- ADVANCED SEARCH -----------------
$lng['adv_search']['make'] = 'Fabricant';
$lng['adv_search']['model'] = 'Model';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Laagste Prijs';
$lng['quick_search']['price_high'] = 'Prijs Hoog';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Verzenden nieuwe advertentie';
$lng['useraccount']['browse_your_listings'] = 'Bladeren in aanbiedings bestand';
$lng['useraccount']['modify_account_info'] = 'Wijzig account info';
$lng['useraccount']['order_history'] = 'Bestel Geschiedenis';
$lng['useraccount']['total_listings'] = 'Totaal aantal vermeldingen';
$lng['useraccount']['total_views'] = 'Totaal aantal keren bekeken';
$lng['useraccount']['active_listings'] = 'Actieve aanbiedingen';
$lng['useraccount']['pending_listings'] = 'Aanbiedingen in afwachting';
$lng['useraccount']['last_login'] = 'Laatste aanmelding';
$lng['useraccount']['last_login_ip'] = 'Laatste aanmelding IP';
$lng['useraccount']['expired_listings'] = 'Verstreken aanbiedingen';
$lng['useraccount']['statistics'] = 'Statistieken';
$lng['useraccount']['welcome'] = 'Welkom';
$lng['useraccount']['contact_name'] = 'Naam contact persoon';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['address'] = 'Adres';
$lng['useraccount']['phone'] = 'Telefoon';
$lng['useraccount']['mobile'] = 'Mobiel';
$lng['useraccount']['webpage'] = 'Website';
$lng['useraccount']['show_name'] = 'Toon contact naam';
$lng['useraccount']['show_phone'] = 'Toon telefoonnummer';
$lng['useraccount']['show_mobile'] = 'Toon Mobiele nummer';
$lng['useraccount']['password'] = 'Wachtwoord';
$lng['useraccount']['repeat_password'] = 'Herhaal Wachtwoord';
$lng['useraccount']['change_password'] = 'Wachtwoord Wijzigen';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = 'De PayPal transactie is geanuleerd!';
$lng['paypal']['invalid_paypal_transaction'] = 'Ongeldige PayPal transactie!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Betalen met 2Checkout!';
$lng['to_checkout']['invalid_2co_transaction'] = 'Ongeldige 2Checkout transactie!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'naar';
$lng['advanced_search']['price_min'] = 'Min Prijs';
$lng['advanced_search']['price_max'] = 'Max Prijs';
$lng['advanced_search']['word'] = 'Caracter';
$lng['advanced_search']['sort_by'] = 'Sorteer op';
$lng['advanced_search']['sort_by_price'] = 'Sorteer op Prijs';
$lng['advanced_search']['sort_by_date'] = 'Sorteer op Datum';
$lng['advanced_search']['sort_by_make'] = 'Sorteer op Fabricant';
$lng['advanced_search']['sort_descendant'] = 'Sorteer op Aflopend';
$lng['advanced_search']['sort_ascendant'] = 'Sorteer op Oplopend';
$lng['advanced_search']['only_ads_with_pic'] = 'Alleen advertenties met fotos';
$lng['advanced_search']['no_results'] = 'Geen aanbiedingen gevonden die overeenkomen met uw zoekopdracht!';
$lng['advanced_search']['multiple_ads_matching'] = 'Er zijn ::NO_ADS::aanbiedingen die voldoen aan uw zoekopdracht!';
$lng['advanced_search']['single_ad_mathing'] = 'Er is een aanbieding die aan uw zoekopdracht voldoet!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Naam';
$lng['contact']['subject'] = 'Onderwerp';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Website';
$lng['contact']['comments'] = 'Comments';
$lng['contact']['message_sent'] = 'Uw bericht is verzonden!';
$lng['contact']['sending_message_failed'] = 'Bericht levering mislukt!';
$lng['contact']['mailto'] = 'Email aan';

$lng['contact']['error']['name_missing'] = 'Vul uw Naam!';
$lng['contact']['error']['subject_missing'] = 'Vul aub een onderwerp!';
$lng['contact']['error']['email_missing'] = 'Vul uw Email!';
$lng['contact']['error']['invalid_email'] = 'Ongeldige Email!';
$lng['contact']['error']['comments_missing'] = 'Vul uw commentaar!';
$lng['contact']['error']['invalid_validation_number'] = 'Ongeldige validatie nummer';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email';
$lng['password_recovery']['new_password'] = 'Nieuwe wachtwoord';
$lng['password_recovery']['repeat_new_password'] = 'Herhaal nieuwe wachtwoord';
$lng['password_recovery']['invalid_key'] = 'Ongeldige activatie nummer';

$lng['password_recovery']['email_missing'] = 'Vul Email adres!';
$lng['password_recovery']['invalid_email'] = 'Ongeldige Email';
$lng['password_recovery']['email_inexistent'] = 'Er is geen geregistreerde gebruiker met dit e-mailadres'; 

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Aantal';
$lng['packages']['words'] = 'Words';
$lng['packages']['days'] = 'Dagen';
$lng['packages']['pictures'] = 'Fotos';
$lng['packages']['picture'] = 'Afbeelding';
$lng['packages']['available'] = 'Beschikbaar';
$lng['packages']['featured'] = 'Featured';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Betaling processor';
$lng['order_history']['amount'] = 'Aantal';
$lng['order_history']['completed'] = 'Voltooid';
$lng['order_history']['not_completed'] = 'Niet ingevuld';
$lng['order_history']['ad_no'] = 'Aanbiedings ID';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Geen Bestel Records';
$lng['order_history']['order_by_date'] = 'Sorteer op datum';
$lng['order_history']['order_by_amount'] = 'Sorteer op Bedrag';
$lng['order_history']['order_by_processor'] = 'Sorteer op processor';

// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Prijs voor uw advertentie';
$lng['featuread']['choose_payment_method'] = 'Kies betalingsmethode';
$lng['featuread']['feature_your_ad'] = 'Feature je advertentie';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Prijs voor het verlengen';
$lng['renew']['choose_payment_method'] = 'Kies betalingsmethode';
$lng['renew']['renew_your_ad'] = 'Vernieuw je ad';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sorteer op datum';
$lng['order']['price'] = 'Sorteer op prijs';
$lng['order']['title'] = 'Sorteer op Titel';
$lng['order']['desc'] = 'Sorteer op Hoogste';
$lng['order']['asc'] = 'Sorteer op Laagste';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Beveel advertentie';
$lng['recommend']['your_name'] = 'Uw Naam';
$lng['recommend']['your_email'] = 'Uw Email';
$lng['recommend']['friend_name'] = 'Vriends naam';
$lng['recommend']['friend_email'] = 'Vriend email';
$lng['recommend']['message'] = 'Bericht aan uw vriend';


$lng['recommend']['error']['your_name_missing'] = 'Vul uw naam!';
$lng['recommend']['error']['your_email_missing'] = 'Vul uw Email!';
$lng['recommend']['error']['friend_name_missing'] = 'Vul naam van uw vriend!';
$lng['recommend']['error']['friend_email_missing'] = 'Vul Email van uw vriend!';
$lng['recommend']['error']['invalid_email'] = 'Email incorrect!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Lijst';
$lng['stats']['general'] = 'Algemeen';


// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Registreren';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favorieten';
$lng['general']['as'] = 'als';
$lng['general']['view'] = 'Bekijken';
$lng['general']['none'] = 'Geen';
$lng['general']['yes'] = 'ja';
$lng['general']['no'] = 'nee';
$lng['general']['next'] = 'Volgende';
$lng['general']['finish'] = 'Klaar';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Verwijderen';
$lng['general']['previous_page'] = '&laquo; Vorige';
$lng['general']['next_page'] = 'Volgende &raquo;';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Actief';
$lng['general']['inactive'] = 'Niet actief';
$lng['general']['expires'] = 'Vervaldatum';
$lng['general']['available'] = 'Beschikbaar';
$lng['general']['cancel'] = 'Opheffen';
$lng['general']['never'] = 'Nooit';
$lng['general']['asc'] = 'Oplopend';
$lng['general']['desc'] = 'Aflopend';
$lng['general']['pending'] = 'Wachtend';
$lng['general']['upload'] = 'Uploaden';
$lng['general']['processing'] = 'Verwerken, momentje ... ';
$lng['general']['help'] = 'Help';
$lng['general']['hide'] = 'Verstoppen';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Niet mogelijk, dit is een beperkte demo versie!';
$lng['general']['check_all'] = 'Alles aanvinken';
$lng['general']['uncheck_all'] = 'Alles uitvinken';
$lng['general']['all'] = 'Alles';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Gebruikerspagina';
$lng['users']['store_banner'] = 'Gebruikerspagina Advertentie';
$lng['users']['waiting_mail_activation'] = 'Wachten op email activering';
$lng['users']['waiting_admin_activation'] = 'Wachten op toestemming van de webmaster';
$lng['users']['no_such_id'] = 'Deze gebruikers is niet aanwezig in de database.';

$lng['users']['info']['store_banner'] = 'De foto die als topfoto van de gebruikerspagina gebruikt moet worden.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Rapporteren';
$lng['listings']['report_reason'] = 'Geef reden op';
$lng['listings']['meta_info'] = 'Meta Informatie';
$lng['listings']['meta_keywords'] = 'Meta Trefwoorden';
$lng['listings']['meta_description'] = 'Meta Beschrijving';
$lng['listings']['not_approved'] = 'Niet toegestaan';
$lng['listings']['approve'] = 'Toestaan';
$lng['listings']['choose_payment_method'] = 'Kies betaalmethode';

$lng['listings']['choose_category'] = 'Kies Categorie';
$lng['listings']['choose_plan'] = 'Kies Abonnement';
$lng['listings']['enter_ad_details'] = 'Advertentie details';
$lng['listings']['ad_details'] = 'Advertentie Details';
$lng['listings']['add_photos'] = 'Foto\'s Toevoegen';
$lng['listings']['ad_photos'] = 'Foto\'s Advertentie';
$lng['listings']['edit_photos'] = 'Foto\'s Aanpassen';
$lng['listings']['extra_options'] = 'Extra Opties';
$lng['listings']['review'] = 'Overzicht toevoegen';
$lng['listings']['finish'] = 'Klaar';
$lng['listings']['next_step'] = 'Volgende stap';
$lng['listings']['included'] = 'Inclusief';
$lng['listings']['finalize'] = 'Afmaken';
$lng['listings']['zip'] = 'Postcode';
$lng['listings']['add_to_favourites'] = 'Favorieten';
$lng['listings']['confirm_add_to_fav'] = 'Let op! U bent niet ingelogd! De opgeslagen favorieten zijn tijdelijk!';
$lng['listings']['add_to_fav_done'] = 'De advertentie is aan de favorieten toegevoegd!';
$lng['listings']['confirm_delete_favourite'] = 'Wilt u de advertentie verwijderen uit de favorieten?';
$lng['listings']['no_favourites'] = 'Er zijn nog geen favoriete advertenties geselecteerd!';
$lng['listings']['extra_options'] = 'Extra Opties';
$lng['listings']['highlited'] = 'Geaccentueerd';
$lng['listings']['priority'] = 'Voorrang';
$lng['listings']['video'] = 'Video Advertenties';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video nog niet goedgekeurd';
$lng['listings']['video_code'] = 'Video Code';
$lng['listings']['total'] = 'Totaal';
$lng['listings']['approve_ad'] = 'Advertentie Goedkeuren';
$lng['listings']['finalize_later'] = 'Later afmaken';
$lng['listings']['click_to_upload'] = 'Klik om te uploaden';
$lng['listings']['files_uploaded'] = ' Totaal aantal foto\'s geupload ';
$lng['listings']['allowed'] = ' foto\'s beschikbaar!';
$lng['listings']['limit_reached'] = ' Maximum aantal foto\'s geplaatst!';
$lng['listings']['edit_options'] = 'Advertentie opties bewerken';
$lng['listings']['view_store'] = 'Meer advertenties van deze gebruiker';
$lng['listings']['edit_ad_options'] = 'Advertentie opties bewerken';
$lng['listings']['no_extra_options_selected'] = 'Geen extra opties geselecteerd!';
$lng['listings']['highlited_listings'] = 'Geaccentueerde Advertenties';
$lng['listings']['for_listing'] = 'voor advertentie nummer ';
$lng['listings']['expires_on'] = 'Vervalt';
$lng['listings']['expired_on'] = 'Vervallen';
$lng['listings']['pending_ad'] = 'Advertentie nog niet goedgekeurd';
$lng['listings']['pending_highlited'] = 'Geaccentueerd nog niet goedgekeurd';
$lng['listings']['pending_featured'] = 'Topbestemming nog niet goedgekeurd';
$lng['listings']['pending_priority'] = 'Voorrang nog niet goedgekeurd';
$lng['listings']['enter_coupon'] = 'Geef kortings code';
$lng['listings']['discount'] = 'Korting';
$lng['listings']['select_plan'] = 'Selecteer Abonnement';
$lng['listings']['pending_subscription'] = 'Inschrijving nog niet goedgekeurd';
$lng['listings']['remove_favourite'] = 'Verwijder Favorieten';

$lng['listings']['order_up'] = 'Order op';
$lng['listings']['order_down'] = 'Order neer';

$lng['listings']['errors']['invalid_youtube_video'] = 'Youtube Video niet goed!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Registreren';
$lng['useraccount']['no_package'] = 'Geen Abonnement';
$lng['useraccount']['packages'] = 'Abonnementen';
$lng['useraccount']['date_start'] = 'Startdatum';
$lng['useraccount']['date_end'] = 'Einddatum';
$lng['useraccount']['remaining_ads'] = 'Aantal nog te plaatsen advertenties';
$lng['useraccount']['account_type'] = 'Type Abbonnement';
$lng['useraccount']['unfinished_listings'] = 'Advertenties nog niet klaar';
$lng['useraccount']['confirm_delete_subscription'] = 'Wilt u deze advertentie verwijderen?';
$lng['useraccount']['buy_store'] = 'Koop gebruikerspagina';
$lng['useraccount']['bulk_uploads'] = 'Bulk uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonnement';
$lng['packages']['ads'] = 'Advertenties';
$lng['packages']['name'] = 'Naam';
$lng['packages']['details'] = 'Details';
$lng['packages']['no_ads'] = 'Aantal Advertenties';
$lng['packages']['subscription_time'] = 'Duur Abonnement';
$lng['packages']['no_pictures'] = 'Aantal foto\'s';
$lng['packages']['no_words'] = 'Aantal woorden';
$lng['packages']['ads_availability'] = 'Aantal advertenties beschikbaar';
$lng['packages']['featured'] = 'Topbestemming';
$lng['packages']['highlited'] = 'Geaccentueerd';
$lng['packages']['priority'] = 'Voorrang';
$lng['packages']['video'] = 'Video Advertenties';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Advertentie Plaatsen';
$lng['order_history']['renew_listing'] = 'Advertentie vernieuwen';
$lng['order_history']['feature_listing'] = 'Topbestemming';
$lng['order_history']['subscribe_to_package'] = 'Abonnement';
$lng['order_history']['complete_payment'] = 'Betaling verwerkt';
$lng['order_history']['complete_payment_for'] = 'Verwerk betaling voor';
$lng['order_history']['details'] = 'Details';
$lng['order_history']['subscription_no'] = 'Abonnement Nummer';
$lng['order_history']['highlited'] = 'Geaccentueerde Advertentie';
$lng['order_history']['priority'] = 'Voorrang';
$lng['order_history']['video'] = 'Video Advertenties';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Kies een Abonnement!';
$lng['buy_package']['error']['choose_processor'] = 'Kies betalingsmogelijkheid!';
$lng['buy_package']['error']['invalid_processor'] = 'Geen geldige betalingsmogelijkheid!';
$lng['buy_package']['error']['invalid_package'] = 'Ongeldig abonnement!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ongeldige Paypal betaling!';
$lng['2co']['invalid_transaction'] = 'Ongeldige 2Checkout betaling!';
$lng['moneybookers']['invalid_transaction'] = 'Ongeldige Moneybookers betaling!';
$lng['authorize']['invalid_transaction'] = 'Ongeldige Authorize.net betaling!';
$lng['manual']['invalid_transaction'] = 'Ongeldige betaling!';

$lng['paypal']['transaction_canceled'] = 'Paypal betaling ongeldig!';
$lng['2co']['transaction_canceled'] = '2Checkout betaling ongeldig!';
$lng['moneybookers']['transaction_canceled'] = 'Moneybookers betaling ongeldig!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net betaling ongeldig!';
$lng['manual']['transaction_canceled'] = 'Betaling ongeldig!';

$lng['payments']['transaction_already_processed'] = 'De betaling is al verwerkt!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Abonnement goedkeuren';
$lng['subscribe']['payment_method'] = 'Betalinh=gs wijze';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopieer email adres: ';
$lng['bcc_mails']['from'] = 'Van: ';
$lng['bcc_mails']['to'] = 'Naar: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Status bulk upload: ';
$lng['ie']['successfully'] = 'advertentie(s) succesvol geplaatst';
$lng['ie']['failed'] = 'niet gelukt';
$lng['ie']['uploaded_listings'] = 'Lijst met geuploade advertenties:';
$lng['ie']['errors']['upload_import_file'] = 'Bestand uploaden!';
$lng['ie']['errors']['incorrect_file_type'] = 'Geen juist bestandstype! Bestandstype moet zijn: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kan het bestand niet openen!';
$lng['ie']['errors']['choose_categ'] = 'Kies een categorie!';
$lng['ie']['errors']['could_not_save_file'] = 'Kan het bestand niet downloaden: ';
$lng['ie']['errors']['required_field_missing'] = 'Verplicht veld niet ingevuld: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Onvolledige data informatie in rij nummer: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Kies gebruiker';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Zoek omgeving';
$lng['areasearch']['all_locations'] = 'Alle locaties';
$lng['areasearch']['exact_location'] = 'Exacte locaties';
$lng['areasearch']['around'] = 'om';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nee';
$lng['general']['or'] = 'of';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'door';
$lng['general']['close_window'] = 'Sluit venster';
$lng['general']['more_options'] = 'Meer zoekopties &raquo;';
$lng['general']['less_options'] = '&laquo; Minder zoekopties';
$lng['general']['send'] = 'Verzenden';
$lng['general']['save'] = 'Opslaan';
$lng['general']['for'] = 'voor';
$lng['general']['to'] = '-';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Geef aan als Verhuurd';
$lng['listings']['mark_unrented'] = 'Geef aan als niet Verhuurd';
$lng['listings']['rented'] = 'Verhuurd';
$lng['listings']['your_info'] = 'Uw informatie';
$lng['listings']['email'] = 'Uw Email Adres';
$lng['listings']['name'] = 'Uw Naam';
$lng['listings']['listing_deleted'] = 'Uw advertentie is verwijderd!';
$lng['listings']['post_without_login'] = 'Advertentie plaatsen zonder in te loggen';
$lng['listings']['waiting_activation'] = 'Wachten op activering';
$lng['listings']['waiting_admin_approval'] = 'Wachten op toestemming webmaster';
$lng['listings']['dont_need_account'] = 'Geen abonnement? Plaats uw advertentie zonder te registreren!';
$lng['listings']['post_your_ad'] = 'Plaats uw advertentie!';
$lng['listings']['posted'] = 'Geplaatst';
$lng['listings']['select_subscription'] = 'Selecteer Abonnement';
$lng['listings']['choose_subscription'] = 'Kies Abonnement';
$lng['listings']['inactive_listings'] = 'Advertentie niet actief';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Uitgebreid zoeken';
$lng['search']['refine_by_keyword'] = 'Trefwoord';
$lng['search']['showing'] = 'Tonen';
$lng['search']['more'] = 'Meer ...';
$lng['search']['less'] = 'Minder ...';
$lng['search']['search_for'] = 'Zoeken';
$lng['search']['save_your_search'] = 'Zoekgegevens Opslaan';
$lng['search']['save'] = 'Opslaan';
$lng['search']['search_saved'] = 'Zoekgegevens opgeslagen!';
$lng['search']['must_login_to_save_search'] = 'Inloggen om uw zoekgegevens op te slaan!';
$lng['search']['view_search'] = 'Bekijk zoekresultaten';
$lng['search']['all_categories'] = 'Alle Categorien';
$lng['search']['more_than'] = 'meer dan';
$lng['search']['less_than'] = 'minder dan';

$lng['search']['error']['cannot_save_empty_search'] = 'Uw zoekopdracht bevat geen gegevens en kan daarom niet worden opgeslagen!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Opgeslagen zoekgegevens';
$lng['useraccount']['view_saved_searches'] = 'Bekijk opgeslagen zoekgegevens';
$lng['useraccount']['no_saved_searches'] = 'Geen opgeslagen zoekgegevens';
$lng['useraccount']['recurring'] = 'Terugkerend';
$lng['useraccount']['date_renew'] = 'Datum vernieuwd';
$lng['useraccount']['logged_in_as'] = 'Ingelogd als ';
$lng['useraccount']['subscriptions'] = 'Abonnementen';

$lng['users']['activate_account'] = 'Activeer Account';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Abonnement Toevoegen';
$lng['subscriptions']['package'] = 'Abonnement';
$lng['subscriptions']['remaining_ads'] = 'Aantal beschikbare advertenties';
$lng['subscriptions']['recurring'] = 'Terugkerend';
$lng['subscriptions']['date_start'] = 'Start datum';
$lng['subscriptions']['date_end'] = 'Eind datum';
$lng['subscriptions']['date_renew'] = 'Datum vernieuwen';
$lng['subscriptions']['confirm_delete'] = 'Weet u zeker dat u het abonnement wilt verwijderen?';
$lng['subscriptions']['no_subscriptions'] = 'Geen Abonnementen';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'U heeft nog geen abonnement?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Automatische betaling voor dit abonnement';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'De volgende verplichte velden zijn nog niet ingevuld: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Gebruikerspagina';


$lng['images']['errors']['max_photos'] = 'Maximum aantal foto\'s gebruikt!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Advertentie Melding';
$lng['alerts']['email_alerts'] = 'Advertentie Meldingen';
$lng['alerts']['no_alerts'] = 'Geen advertentie meldingen';
$lng['alerts']['view_email_alerts'] = 'Bekijk uw advertentie meldingen';
$lng['alerts']['send_email_alerts'] = 'Verstuur advertentie meldingen';
$lng['alerts']['immediately'] = 'Nu versturen';
$lng['alerts']['daily'] = 'Dagelijks';
$lng['alerts']['weekly'] = 'Wekelijks';
$lng['alerts']['your_email'] = 'uw email adres';
$lng['alerts']['create_alert'] = 'Versturen';
$lng['alerts']['email_alert_info'] = 'Ontvang een email bericht als er een nieuwe advertentie wordt geplaatst die voldoet aan deze zoekopdracht.';
$lng['alerts']['alert_added'] = 'Uw advertentie melding is aangemaakt!';
$lng['alerts']['alert_added_activate'] = 'U ontvangt een email op: <b>::EMAIL::</b>. Klik op de link in deze email om de Advertentie Melding te activeren!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Zoek in';
$lng['alerts']['keyword'] = 'trefwoord';
$lng['alerts']['frequency'] = 'Advertentie Melding frequentie:';
$lng['alerts']['alert_activated'] = 'De Advertentie Melding is geactiveerd! U ontvangt nu berichten voor de Advertentie Meldingen.';
$lng['alerts']['alert_unsubscribed'] = 'De Advertentie Melding is verwijderd!';
$lng['alerts']['started_on'] = 'Gestart op';
$lng['alerts']['no_terms_searched'] = 'Er zijn geen details opgegeven voor deze zoekopdracht!';
$lng['alerts']['no_listings'] = 'Er zijn geen advertenties voor deze Advertentie Melding!';

$lng['alerts']['error']['email_required'] = 'Email adres voor uw Advertentie Melding!';
$lng['alerts']['error']['invalid_email'] = 'Ongeldig email adres voor uw Advertentie Melding!';
$lng['alerts']['error']['invalid_frequency'] = 'Ongeldige Advertentie Melding frequentie van ontvangst!';
$lng['alerts']['error']['login_required'] = '<a href="::LINK::">Inloggen</a> om een Advertentie Melding op te zetten!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Minstens 1 zoekgegevens opgeven!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ongeldige bevestiging voor Advertentie Melding!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ongeldig verzoek om een Advertentie Melding te verwijderen!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Hypotheek Berekenen';
$lng_loancalc['sale_price'] = 'Verkoopprijs';
$lng_loancalc['down_payment'] = 'Aanbetaling';
$lng_loancalc['trade_in_value'] = 'Handelswaarde';
$lng_loancalc['loan_amount'] = 'Hypotheekbedrag';
$lng_loancalc['sales_tax'] = 'Verkoop belasting';
$lng_loancalc['interest_rate'] = 'Rentepercentage';
$lng_loancalc['loan_term'] = 'Hypotheek looptijd';
$lng_loancalc['months'] = 'maanden';
$lng_loancalc['years'] = 'jaren';
$lng_loancalc['or'] = 'of';
$lng_loancalc['monthly_payment'] = 'Maandelijkse betaling';
$lng_loancalc['calculate'] = 'Bereken';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comments';
$lng_comments['make_a_comment'] = 'Plaats een beoordeling';
$lng_comments['login_to_post'] = ' <a href="::LOGIN_LINK::">Inloggen</a> om een reactie te plaatsen.';

$lng_comments['name'] = 'Naam';
$lng_comments['email'] = 'Email Adres';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Plaats Beoordeling';

$lng_comments['error']['name_missing'] = 'Uw Naam!';
$lng_comments['error']['content_missing'] = 'Beoordeling!';
$lng_comments['error']['website_missing'] = 'Website URL!';
$lng_comments['error']['email_missing'] = 'Email Adres!';
$lng_comments['error']['listing_id_missing'] = 'Geen geldige invoer!';

$lng_comments['error']['invalid_email'] = 'Ongeldig email adres!';
$lng_comments['error']['invalid_website'] = 'Ongeldige website URL!';
$lng_comments['errors']['badwords'] = 'De reactie bevat geblokkeerde woorden! Pas het bericht aan!';

$lng_comments['info']['comment_added'] = 'Uw beoordeling is geplaatst! Klik <a id="newad">hier</a> om nog een beoordeling te plaatsen.';
$lng_comments['info']['comment_pending'] = 'Uw beoordeling wacht op toestemming van de webmaster.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Volgende &raquo;';
$lng['tb']['prev'] = '&laquo; Vorige';
$lng['tb']['close'] = 'CLOSE';
$lng['tb']['or_esc'] = 'of ESC-toets';

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

$lng['alerts']['category'] = ' Categorie';
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
