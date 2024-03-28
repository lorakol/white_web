<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Home';
$lng['navbar']['login'] = 'Anmelden';
$lng['navbar']['logout'] = 'Ausloggen';
$lng['navbar']['recent_ads'] = 'Aktuelle Inserate';
$lng['navbar']['register'] = 'Registrieren';
$lng['navbar']['submit_ad'] = 'Inserat aufgeben';
$lng['navbar']['editad'] = 'Inserat bearbeiten';
$lng['navbar']['my_account'] = 'Mein Konto';
$lng['navbar']['administrator_panel'] = 'Login-Verwaltung';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Passwort vergessen';
$lng['navbar']['feature_listing'] = 'VIP Inserate';
$lng['navbar']['renew_listing'] = 'Liste aktualisieren';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Senden';
$lng['general']['search'] = 'Suchen';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['advanced_search'] = 'Erweiterte Suche';
$lng['general']['activeads'] = 'Aktive Inserate';
$lng['general']['activead'] = 'Aktives Inserat';
$lng['general']['subcats'] = 'Unterkategorien';
$lng['general']['subcat'] = 'Unterkategorie';
$lng['general']['view_ads'] = 'Inserat ansehen';
$lng['general']['back'] = 'zurück';
$lng['general']['goto'] = 'gehe zu';
$lng['general']['page'] = 'Seite';
$lng['general']['of'] = 'von';
$lng['general']['other'] = 'Anderes';
$lng['general']['NA'] = 'nicht erhältlich';
$lng['general']['add'] = 'hinzufügen';
$lng['general']['delete_all'] = 'Gesamte Auswahl löschen';
$lng['general']['action'] = 'Aktion';
$lng['general']['edit'] = 'Bearbeiten';
$lng['general']['delete'] = 'Löschen';
$lng['general']['total'] = 'Gesamtpreis';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = 'Sie besitzen keine ausreichenden Rechte um diese Seite aufzurufen!';
$lng['general']['access_restricted'] = 'Diese Seite wurde eingeschränkt!';
$lng['general']['featured_ads'] = 'VIP Inserate';
$lng['general']['latest_ads'] = 'Neueste Inserate';
$lng['general']['quick_search'] = 'Schnelle Suche';
$lng['general']['go'] = 'Go';
$lng['general']['unlimited'] = 'Unbegrenzt';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Eine Datei mit dem gleichen Namen existiert bereits und kann deshalb nicht überschrieben werden!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Es ist leider nicht möglich, grössere Dateien als :MAX_FILE_UPLOAD_SIZE::K  zu übermitteln!'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Die Abmessungen des Bildes sind leider zu gross! Die Maximalgrösse beträgt ::MAX_FILE_WIDTH::px in der Breite und ::MAX_FILE_HEIGHT::px in der Höhe !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Die Datei konnte nicht hochgeladen werden!';
$lng['images']['errors']['no_file'] = 'Bitte wählen Sie eine Datei zum hochladen!';
$lng['images']['errors']['no_folder'] = 'Diese Datei existiert nicht!';
$lng['images']['errors']['folder_not_writeable'] = 'Dieser Ordner besitzt keine Schreibrechte!';
$lng['images']['errors']['file_type_not_accepted'] = 'Dieser Dateityp kann leider nicht hochgeladen werden!';
$lng['images']['errors']['error'] = 'Es gab einen Fehler während der Übertragung. Die Fehlermeldung lautet: ::ERROR::'; // svp laisse intacte ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Der Ordner für Thumbnails existiert nicht!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Der Ordner Thumbnail besitzt keine Schreibrechte!';
$lng['images']['errors']['no_jpg_support'] = 'JPG nicht kompatibel!';
$lng['images']['errors']['no_png_support'] = 'PNG nicht kompatibel!';
$lng['images']['errors']['no_gif_support'] = 'GIF nicht kompatibel!';
$lng['images']['errors']['jpg_create_error'] = 'Fehler in der JPG Erstellung!';
$lng['images']['errors']['png_create_error'] = 'Fehler in der PNG Erstellung!';
$lng['images']['errors']['gif_create_error'] = 'Fehler in der GIF Erstellung!';


// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Anmelden';
$lng['login']['logout'] = 'Ausloggen';
$lng['login']['username'] = 'Benutzername';
$lng['login']['password'] = 'Passwort';
$lng['login']['forgot_pass'] = 'Passwort vergessen? ';
$lng['login']['click_here'] = 'Hier klicken';

$lng['login']['errors']['password_missing'] = 'Bitte Passwort eingeben!';
$lng['login']['errors']['username_missing'] = 'Bitte Benutzername eingeben!';
$lng['login']['errors']['username_invalid'] = 'Ihr Benutzername ist ungültig!';
$lng['login']['errors']['invalid_username_pass'] = 'Ihr Benutzername oder Passwort ist ungültig!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Ausloggen';
$lng['logout']['loggedout'] = 'Sie sind ausgeloggt!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrieren';
$lng['users']['webpage'] = 'Webseite';
$lng['users']['repeat_password'] = 'Passwort erneut eingeben';
$lng['users']['image_verification_info'] = 'Bitte die untenstehende Zeichenzeile eingeben.<br> Grossbuchstaben von A-H und Nummern von 0-9.';
$lng['users']['already_logged_in'] = 'Sie sind zurzeit eingeloggt';
$lng['users']['select'] = 'Wählen';


$lng['users']['errors']['username_missing'] = 'Bitte Ihren Benutzernamen eingeben!';
$lng['users']['errors']['invalid_username'] = 'Ungültiger Benutzername!';
$lng['users']['errors']['username_exists'] = 'Dieser Benutzername existiert bereits! Loggen Sie sich ein, falls Sie bereits ein Konto bei uns besitzen!';
$lng['users']['errors']['email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['users']['errors']['invalid_email'] = 'Diese E-Mail Adresse ist ungültig!';
$lng['users']['errors']['passwords_dont_match'] = 'Das Passwort ist nicht korrekt!';
$lng['users']['errors']['email_exists'] = 'Diese E-Mail Adresse existiert bereits! Bitte loggen Sie sich ein, falls Sie bereits ein Konto bei uns besitzen!';
$lng['users']['errors']['password_missing'] = 'Bitte Ihr Passwort eingeben!';
$lng['users']['errors']['password_not_match'] = 'Das Passwort stimmt nicht überein!';
$lng['users']['errors']['invalid_validation_string'] = 'Der Validierungscode ist nicht korrekt!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Konto oder Aktivierungscode ist nicht korrekt! Bitte kontaktieren Sie den Administrator!';
$lng['users']['errors']['account_already_active'] = 'Ihr Konto ist bereits aktiv!';

$lng['users']['info']['activate_account'] = 'Eine E-Mail wurde an Sie versendet. Bitte befolgen Sie die Anweisungen, um Ihr Konto zu aktivieren.';
$lng['users']['info']['welcome_user'] = 'Ihr Konto wurde erstellt. Bitte hier <a href="login.php">Einloggen</a>!';
$lng['users']['info']['account_info_updated'] = 'Die Informationen Ihres Kontos wurde aktualisiert!';
$lng['users']['info']['password_changed'] = 'Ihr Passwort wurde geändert!';
$lng['users']['info']['account_activated'] = 'Ihr Konto wurde aktiviert! Bitte hier <a href="login.php">einloggen</a>.';



// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Inserate';
$lng['listings']['category'] = 'Kategorie';
$lng['listings']['package'] = 'Paket';
$lng['listings']['price'] = 'Preis';
$lng['listings']['country'] = 'Land';
$lng['listings']['state'] = 'Region';
$lng['listings']['city'] = 'Stadt';
$lng['listings']['ad_description'] = 'Inseratbeschreibung';
$lng['listings']['title'] = 'Titel';
$lng['listings']['description'] = 'Beschreibung';
$lng['listings']['image'] = 'Bild';
$lng['listings']['words_left'] = 'verbleibende Worte';
$lng['listings']['enter_photos'] = 'Fotos hochladen';
$lng['listings']['choose_payment_method'] = 'Zahlungsmethode auswählen';
$lng['listings']['ad_information'] = 'Informationen übers Inserat';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['select_package'] = 'Paket auswählen';
$lng['listings']['packages_details'] = 'Details des Paketes';
$lng['listings']['select_country'] = 'Land auswählen';
$lng['listings']['select_state'] = 'Region auswählen';
$lng['listings']['other'] = 'Anderes';
$lng['listings']['details'] = 'Details';
$lng['listings']['stock_no'] = 'Ref. Inserat';
$lng['listings']['location'] = 'Ort';
$lng['listings']['contact_info'] = 'Kontakt Info';
$lng['listings']['email_seller'] = 'Benutzer kontaktieren';
$lng['listings']['no_recent_ads'] = 'Kein aktuelles Inserat';
$lng['listings']['no_ads'] = 'Kein Inserat in dieser Kategorie';
$lng['listings']['added_on'] = 'Erstellt am';
$lng['listings']['send_mail'] = 'E-Mail an Benutzer senden';
$lng['listings']['details'] = 'Details';
$lng['listings']['user'] = 'Benutzer';
$lng['listings']['price'] = 'Preis';
$lng['listings']['confirm_delete'] = 'Sind Sie sicher, dass Sie dieses Inserat löschen wollen?';
$lng['listings']['confirm_delete_all'] = 'Sind Sie sicher, dass Sie alle Inserate löschen wollen?';
$lng['listings']['all'] = 'Alle Inserate';
$lng['listings']['active_listings'] = 'Aktive Inserate';
$lng['listings']['pending_listings'] = 'Inserate in Bearbeitung';
$lng['listings']['featured_listings'] = 'VIP Inserate';
$lng['listings']['pending_featured_listings'] = 'VIP Inserate in Bearbeitung';
$lng['listings']['expired_listings'] = 'abgelaufene Anzeigen';
$lng['listings']['active'] = 'Aktiv';
$lng['listings']['inactive'] = 'Inaktiv';
$lng['listings']['pending'] = 'In Bearbeitung';
$lng['listings']['featured'] = 'VIP';
$lng['listings']['pending_featured'] = 'VIP (P)';
$lng['listings']['expired'] = 'abgelaufen';

$lng['listings']['order_by_date'] = 'nach Datum sortieren';
$lng['listings']['order_by_category'] = 'nach Kategorie sortieren';
$lng['listings']['order_by_price'] = 'nach Preis sortieren';
$lng['listings']['order_by_views'] = 'nach Besuch sortieren';
$lng['listings']['order_asc'] = 'Aufsteigend';
$lng['listings']['order_desc'] = 'Absteigend';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Besucht';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Kein Inserat';
$lng['listings']['NA'] = 'nicht erhältlich';
$lng['listings']['no_such_id'] = 'Kein Inserat unter dieser ID';
$lng['listings']['mark_sold'] = 'als verkauft markieren';
$lng['listings']['mark_unsold'] = 'als nicht verkauft markieren';
$lng['listings']['feature'] = 'VIP';
$lng['listings']['sold'] = 'Verkauft';
$lng['listings']['expired_on'] = 'abgelaufen am';

$lng['listings']['renew'] = 'Neu veröffentlichen';

$lng['listings']['print_page'] = 'Seite drucken';
$lng['listings']['recommend_this'] = 'Weiter Empfehlen';
$lng['listings']['more_listings'] = 'Mehr Inserate von diesem Benutzer';
$lng['listings']['all_listings_for'] = 'Alle Inserate für';
$lng['listings']['free_category'] = 'Kategorie GRATIS';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Sind Sie sicher, dass Sie dieses Bild löschen wollen?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Maximale Anzahl der Worte überschritten! Sie können maximal ::MAX:: Zeichen eingeben'; // please leave intact the tag ::MAX:: 
$lng['listings']['errors']['badwords']='Ihr Inserat enthält nicht erlaubte Begriffe! Wir bitten Sie, diese zu vermeiden!';
$lng['listings']['errors']['title_missing']='Bitte den Titel Ihres Inserats angeben!';
$lng['listings']['errors']['category_missing']='Wählen Sie bitte eine Kategorie!';
$lng['listings']['errors']['invalid_category']='Kategorie ungültig!';
$lng['listings']['errors']['package_missing']='Bitte ein Inserat-Paket auswählen!';
$lng['listings']['errors']['invalid_package']='Package ungültig!';
$lng['listings']['errors']['content_missing']='Bitte die Beschreibung Ihres Inserates eingeben!';
$lng['listings']['errors']['invalid_price']='Preis ungültig!';
$lng['listings']['errors']['invalid_country']='Land ungültig!';
$lng['listings']['errors']['invalid_state']='Region ungültig!';
$lng['listings']['errors']['user_missing']='Bitte Benutzer für das Inserat wählen!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Preis Min.';
$lng['quick_search']['price_high'] = 'Preis Max.';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Neues Inserat erstellen';
$lng['useraccount']['browse_your_listings'] = 'Meine Inserate';
$lng['useraccount']['modify_account_info'] = 'Mein Konto bearbeiten';
$lng['useraccount']['order_history'] = 'Meine Bestellübersicht';
$lng['useraccount']['total_listings'] = 'Alle Inserate';
$lng['useraccount']['total_views'] = 'Alle Aufrufe';
$lng['useraccount']['active_listings'] = 'Aktive Inserate';
$lng['useraccount']['pending_listings'] = 'Inserate in Bearbeitung';
$lng['useraccount']['last_login'] = 'Letzter Login';
$lng['useraccount']['last_login_ip'] = 'Letzte Login IP';
$lng['useraccount']['expired_listings'] = 'Abgelaufene Inserate';
$lng['useraccount']['statistics'] = 'Statistik';
$lng['useraccount']['welcome'] = 'Willkommen';
$lng['useraccount']['contact_name'] = 'Benutzer';
$lng['useraccount']['email'] = 'E-Mail';
$lng['useraccount']['address'] = 'Adresse';
$lng['useraccount']['phone'] = 'Telefon';
$lng['useraccount']['mobile'] = 'Handy';
$lng['useraccount']['webpage'] = 'Persönliche Webseite';
$lng['useraccount']['show_name'] = 'Benutzername anzeigen';
$lng['useraccount']['show_phone'] = 'Telefon anzeigen';
$lng['useraccount']['show_mobile'] = 'Handynummer anzeigen';
$lng['useraccount']['password'] = 'Passwort';
$lng['useraccount']['repeat_password'] = 'Passwort erneut eingeben';
$lng['useraccount']['change_password'] = 'Passwort ändern';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = 'Ihre Paypal Transaktion wurde widerrufen!';
$lng['paypal']['invalid_paypal_transaction'] = 'Ungültige Paypal Transaktion!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Mit 2Checkout bezahlen!';
$lng['to_checkout']['invalid_2co_transaction'] = 'Ungültige 2Checkout Transaktion!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'bis';
$lng['advanced_search']['price_min'] = 'Preis Min';
$lng['advanced_search']['price_max'] = 'Preis Max';
$lng['advanced_search']['word'] = 'Suchen';
$lng['advanced_search']['sort_by'] = 'Sortieren nach';
$lng['advanced_search']['sort_by_price'] = 'nach Preis sortieren';
$lng['advanced_search']['sort_by_date'] = 'nach Datum sortieren';
$lng['advanced_search']['sort_descendant'] = 'Absteigend';
$lng['advanced_search']['sort_Aufsteigend'] = 'Aufsteigend';
$lng['advanced_search']['only_ads_with_pic'] = 'Nur Inserate mit Bild';
$lng['advanced_search']['no_results'] = 'Kein Inserat entspricht Ihrer Suche!';
$lng['advanced_search']['multiple_ads_matching'] = '::NO_ADS:: Inserate entsprechen Ihrer Suche!';
$lng['advanced_search']['single_ad_matching'] = 'Ein Inserat entspricht Ihrer Suche!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Name';
$lng['contact']['subject'] = 'Betreff';
$lng['contact']['email'] = 'E-Mail';
$lng['contact']['webpage'] = 'Webseite';
$lng['contact']['comments'] = 'Bemerkungen';
$lng['contact']['message_sent'] = 'Ihre Nachricht wurde versendet!';
$lng['contact']['sending_message_failed'] = 'Nachricht nicht versendet';
$lng['contact']['mailto'] = 'Versenden an';

$lng['contact']['error']['name_missing'] = 'Bitte Ihren Namen eingeben!';
$lng['contact']['error']['subject_missing'] = 'Bitte Betreff eingeben!';
$lng['contact']['error']['email_missing'] = 'Bitte E-Mail Adresse eingeben!';
$lng['contact']['error']['invalid_email'] = 'E-Mail Adresse ungültig!';
$lng['contact']['error']['comments_missing'] = 'Bitte Ihre Bemerkungen eingeben!';
$lng['contact']['error']['invalid_validation_number'] = 'Validierungsnummer ungültig!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'E-Mail';
$lng['password_recovery']['new_password'] = 'Neues Passwort';
$lng['password_recovery']['repeat_new_password'] = 'Neues Passwort erneut eingeben';
$lng['password_recovery']['invalid_key'] = 'Schlüssel ungültig';

$lng['password_recovery']['email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['password_recovery']['invalid_email'] = 'E-Mail Adresse ungültig';
$lng['password_recovery']['email_inexistent'] = 'Kein Benutzer unter dieser E-Mail Adresse angemeldet';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Betrag';
$lng['packages']['words'] = 'Worte pro Anzeige (Beschreibungstext)';
$lng['packages']['days'] = 'Tage';
$lng['packages']['pictures'] = 'Bilder pro Anzeige';
$lng['packages']['picture'] = 'Bild pro Anzeige';
$lng['packages']['available'] = 'Anzeigenlaufzeit';
$lng['packages']['featured'] = 'VIP Inserate';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Zahlungsart';
$lng['order_history']['amount'] = 'Betrag';
$lng['order_history']['completed'] = 'erledigt';
$lng['order_history']['not_completed'] = 'nicht erledigt';
$lng['order_history']['ad_no'] = 'Inserat ID';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Kein Bestellungen vorhanden';
$lng['order_history']['order_by_date'] = 'nach Datum sortieren';
$lng['order_history']['order_by_amount'] = 'nach Betrag sortieren';
$lng['order_history']['order_by_processor'] = 'nach Zahlungsart sortieren';

// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Preis für VIP Inserate';
$lng['featuread']['choose_payment_method'] = 'Zahlungsmethode wählen';
$lng['featuread']['feature_your_ad'] = 'VIP Inserat einfügen';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Preis für das Inserat erneut publizieren';
$lng['renew']['choose_payment_method'] = 'Zahlungsmethode auswählen';
$lng['renew']['renew_your_ad'] = 'Inserat erneut aufgeben';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'nach Datum sortieren';
$lng['order']['price'] = 'nach Preis sortieren';
$lng['order']['title'] = 'nach Titel sortieren';
$lng['order']['desc'] = 'Absteigend';
$lng['order']['asc'] = 'Aufsteigend';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Dieses Inserat weiter empfehlen';
$lng['recommend']['your_name'] = 'Ihr Name';
$lng['recommend']['your_email'] = 'Ihre E-Mail Adresse';
$lng['recommend']['friend_name'] = 'Name des Empfängers';
$lng['recommend']['friend_email'] = 'E-Mail des Empfängers';
$lng['recommend']['message'] = 'Ihre persönliche Nachricht';


$lng['recommend']['error']['your_name_missing'] = 'Bitte Ihren Namen eingeben!';
$lng['recommend']['error']['your_email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['recommend']['error']['friend_name_missing'] = 'Bitte den Namen des Empfängers eingeben!';
$lng['recommend']['error']['friend_email_missing'] = 'Bitte die E-Mail Adresse des Empfängers eingeben!';
$lng['recommend']['error']['invalid_email'] = 'Ungültige E-Mail Adresse!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Inserate';
$lng['stats']['general'] = 'Übersicht';

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Abonnement';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favoriten';
$lng['general']['as'] = 'als';
$lng['general']['view'] = 'aufrufe';
$lng['general']['none'] = 'keine';
$lng['general']['yes'] = 'Ja';
$lng['general']['no'] = 'Nein';
$lng['general']['next'] = 'Nächste';
$lng['general']['finish'] = 'Beenden';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Entfernen';
$lng['general']['previous_page'] = '« Vorige Seite';
$lng['general']['next_page'] = 'Nächste Seite »';
$lng['general']['items'] = 'Artikel';
$lng['general']['active'] = 'Aktive';
$lng['general']['inactive'] = 'Inaktive';
$lng['general']['expires'] = 'Gültig bis';
$lng['general']['available'] = 'Erhältlich';
$lng['general']['cancel'] = 'Abbrechen';
$lng['general']['never'] = 'Nie';
$lng['general']['asc'] = 'aufsteigend';
$lng['general']['desc'] = 'absteigend';
$lng['general']['pending'] = 'auf Freischaltung wartend';
$lng['general']['upload'] = 'Hochladen';
$lng['general']['processing'] = 'In Bearbeitung, bitte warten ... ';
$lng['general']['help'] = 'Hilfe';
$lng['general']['hide'] = 'verstecken';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['check_all'] = 'Alle aktivieren';
$lng['general']['uncheck_all'] = 'Alle deaktivieren';
$lng['general']['all'] = 'Alle';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Händler Seite';
$lng['users']['store_banner'] = 'Banner für Ihre Händler Seite';
$lng['users']['waiting_mail_activation'] = 'Warte auf E-Mail-Aktivierung';
$lng['users']['waiting_admin_activation'] = 'Warte auf Aktivierung des Webmaster';
$lng['users']['no_such_id'] = 'Dieser Benutzer existiert nicht.';

$lng['users']['info']['store_banner'] = '<br>Das Bild/Banner, wird für Ihre Händler Seite verwendet.';

// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Verstoß melden';
$lng['listings']['report_reason'] = 'Verstoß Grund';
$lng['listings']['meta_info'] = 'Meta Information';
$lng['listings']['meta_keywords'] = 'Meta Schlüsselworte';
$lng['listings']['meta_description'] = 'Meta Beschreibung';
$lng['listings']['not_approved'] = 'Abgelaufen';
$lng['listings']['approve'] = 'Erneuern';
$lng['listings']['choose_payment_method'] = 'Wählen Sie eine Zahlungsmethode';

$lng['listings']['choose_category'] = 'Kategorie auswählen';
$lng['listings']['choose_plan'] = 'Paket auswählen';
$lng['listings']['enter_ad_details'] = 'Text und Details';
$lng['listings']['ad_details'] = 'Inserat Details';
$lng['listings']['add_photos'] = 'Fotos';
$lng['listings']['ad_photos'] = 'Fotos hochladen';
$lng['listings']['edit_photos'] = 'Fotos bearbeiten';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['review'] = 'Vorschau';
$lng['listings']['finish'] = 'Beenden';
$lng['listings']['next_step'] = 'Nächster Schritt';
$lng['listings']['included'] = 'Inbegriffen';
$lng['listings']['finalize'] = 'Abschliessen';
$lng['listings']['zip'] = 'PLZ';
$lng['listings']['add_to_favourites'] = 'Zu Favoriten hinzufügen';
$lng['listings']['confirm_add_to_fav'] = 'Warnung! Sie sind nicht angemeldet! Die Favoritenliste kann nicht für Ihren nächsten Besuch gespeichert werden!';
$lng['listings']['add_to_fav_done'] = 'Das Inserat wird in Ihre Favoritenliste aufgenommen!';
$lng['listings']['confirm_delete_favourite'] = 'Sind Sie sicher, dass Sie die Anzeige aus Ihrer Favoritenliste löschen möchten?';
$lng['listings']['no_favourites'] = 'Keine Inserate';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['highlited'] = 'Highlited (farblich hervorgehoben)';
$lng['listings']['priority'] = 'Priorität';
$lng['listings']['video'] = 'Video Inserat';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Das Video ist noch nicht freigeschaltet';
$lng['listings']['video_code'] = 'Video Code';
$lng['listings']['total'] = 'Gesamtpreis';
$lng['listings']['approve_ad'] = 'Abschliessen';
$lng['listings']['finalize_later'] = 'Später Abschliessen';
$lng['listings']['click_to_upload'] = 'Klicken Sie zum Hochladen';
$lng['listings']['files_uploaded'] = ' Foto(s) Hochgeladen ';
$lng['listings']['allowed'] = ' Fotos erlaubt!';
$lng['listings']['limit_reached'] = ' Das Limit der maximal erlaubten Bilder ist erreicht!';
$lng['listings']['edit_options'] = 'Bearbeiten der Optionen';
$lng['listings']['view_store'] = 'Händler Seite aufrufen';
$lng['listings']['edit_ad_options'] = 'Bearbeiten der Anzeigen Optionen';
$lng['listings']['no_extra_options_selected'] = 'Keine zusätzlichen Optionen ausgewählt!';
$lng['listings']['highlited_listings'] = 'Highlitrd (farblich hervorgehobene Anzeige)';
$lng['listings']['for_listing'] = 'für die Aufnahme nicht ';
$lng['listings']['expires_on'] = 'Läuft ab am';
$lng['listings']['expired_on'] = 'abgelaufen';
$lng['listings']['pending_ad'] = 'Warteliste';
$lng['listings']['pending_highlited'] = 'Highlited (farblich hervor gehoben) wartet auf freischaltung';
$lng['listings']['pending_featured'] = 'VIP Inserat wartet auf freischaltung';
$lng['listings']['pending_priority'] = 'Priority wartet auf freischaltung';
$lng['listings']['enter_coupon'] = 'Geben Sie Ihren Rabatt-Code ein';
$lng['listings']['discount'] = 'Rabatt-Code';
$lng['listings']['select_plan'] = 'Paket auswählen';
$lng['listings']['pending_subscription'] = 'Auf freischaltung wartendes Abonnement';
$lng['listings']['remove_favourite'] = 'Anzeige aus Favoriten löschen';

$lng['listings']['order_up'] = 'Aufsteigend';
$lng['listings']['order_down'] = 'Absteigend';


$lng['listings']['errors']['invalid_youtube_video'] = 'Ungültiger youtube video link!';


// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonnement';
$lng['useraccount']['no_package'] = 'Kein Paket';
$lng['useraccount']['packages'] = 'Pakete';
$lng['useraccount']['date_start'] = 'Start Datum';
$lng['useraccount']['date_end'] = 'End Datum'; 
$lng['useraccount']['remaining_ads'] = 'Restliche Inserate';
$lng['useraccount']['account_type'] = 'Account-Typ';
$lng['useraccount']['unfinished_listings'] = 'Unvollendete Eingabe';
$lng['useraccount']['confirm_delete_subscription'] = 'Sind Sie sicher, dass Sie dieses Abonnement entfernen möchten?';
$lng['useraccount']['buy_store'] = 'Händler Seite kaufen';
$lng['useraccount']['bulk_uploads'] = 'Inserate Importieren';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abo Laufzeit';
$lng['packages']['ads'] = 'Inserate';
$lng['packages']['name'] = 'Name';
$lng['packages']['details'] = 'Details';
$lng['packages']['no_ads'] = 'Anzahl der Inserate';
$lng['packages']['subscription_time'] = 'Abonnement Zeit';
$lng['packages']['no_pictures'] = 'Anzahl der Bilder';
$lng['packages']['no_words'] = 'Anzahl der Wörter';
$lng['packages']['ads_availability'] = 'Inserat Verfügbarkeit';
$lng['packages']['featured'] = 'VIP Inserat'; 
$lng['packages']['highlited'] = 'Highlited (farblich hervorgehoben)';
$lng['packages']['priority'] = 'Priorität';
$lng['packages']['video'] = 'Video Inserat';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Eintrag erzeugen';
$lng['order_history']['renew_listing'] = 'Eintrag verlängern';
$lng['order_history']['feature_listing'] = 'Eintrag aufwerten';
$lng['order_history']['subscribe_to_package'] = 'Paket Abonnement';
$lng['order_history']['complete_payment'] = 'Bezahlung abschließen';
$lng['order_history']['complete_payment_for'] = 'Bezahlung abschließen für';
$lng['order_history']['details'] = 'Details';
$lng['order_history']['subscription_no'] = 'Kein Abonnement';
$lng['order_history']['highlited'] = 'Farblich hervorgehobene Inserate';
$lng['order_history']['priority'] = 'Priorität';
$lng['order_history']['video'] = 'Video Inserate';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Bitte wählen Sie ein Abonnement aus!';
$lng['buy_package']['error']['choose_processor'] = 'Bitte wählen Sie die Zahlungsart!';
$lng['buy_package']['error']['invalid_processor'] = 'Ungültige Zahlung!';
$lng['buy_package']['error']['invalid_package'] = 'Ungültiges Abonnement!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ungültige  Paypal Transaktion!';
$lng['2co']['invalid_transaction'] = 'Ungültige  2Checkout Transaktion!';
$lng['moneybookers']['invalid_transaction'] = 'Ungültige  Moneybookers Transaktion!';
$lng['authorize']['invalid_transaction'] = 'Ungültige Authorize.net  Transaktion!';
$lng['manual']['invalid_transaction'] = 'Ungültige Transaktion!';

$lng['paypal']['transaction_canceled'] = 'Paypal Transaktion abgebrochen!';
$lng['2co']['transaction_canceled'] = '2Checkout Transaktion abgebrochen!';
$lng['moneybookers']['transaction_canceled'] = 'Moneybookers Transaktion abgebrochen!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net Transaktion abgebrochen!';
$lng['manual']['transaction_canceled'] = 'Transaktion abgebrochen!';

$lng['payments']['transaction_already_processed'] = 'Die Transaktion wurde bereits verarbeitet!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Abonnement bestellen';
$lng['subscribe']['payment_method'] = 'Zahlungsart';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'E-Mail Kopie: ';
$lng['bcc_mails']['from'] = 'Von: ';
$lng['bcc_mails']['to'] = 'An: ';

// -------------------- bulk uploads ----------------
$lng['ie']['bulk_upload_status'] = 'Import status: ';
$lng['ie']['successfully'] = 'wurde erfolgreich hinzugefügt';
$lng['ie']['failed'] = 'nicht';
$lng['ie']['uploaded_listings'] = 'Hochgeladene Dateien anzeigen:';
$lng['ie']['errors']['upload_import_file'] = 'Bitte wählen Sie die Datei zum importieren aus!';
$lng['ie']['errors']['incorrect_file_type'] = 'Falscher Dateityp! Der Dateityp muss: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kann die Datei nicht öffnen!';
$lng['ie']['errors']['choose_categ'] = 'Bitte wählen Sie eine Kategorie aus!';
$lng['ie']['errors']['could_not_save_file'] = 'Es konnte keine Datei heruntergeladen werden: ';
$lng['ie']['errors']['required_field_missing'] = 'Erforderliches Feld fehlt: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Falscher Zählstand in Reihe Nummer: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Ortssuche';
$lng['areasearch']['all_locations'] = 'Alle Orte';
$lng['areasearch']['exact_location'] = 'Genauer Ort';
$lng['areasearch']['around'] = 'ungefähr';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Händler wählen';


// ------------------- end vers 5.0 -----------------



// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nein';
$lng['general']['or'] = 'oder';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'nach';
$lng['general']['close_window'] = 'Fenster schliessen';
$lng['general']['more_options'] = 'Mehr Optionen »';
$lng['general']['less_options'] = '« Weniger Optionen';
$lng['general']['send'] = 'Senden';
$lng['general']['save'] = 'Sichern';
$lng['general']['for'] = 'für';
$lng['general']['to'] = 'in der Kategorie'; 

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Markieren als gemietet';
$lng['listings']['mark_unrented'] = 'Markierung "als gemietet" aufheben';
$lng['listings']['rented'] = 'Gemietet';
$lng['listings']['your_info'] = 'Ihre Informationen';
$lng['listings']['email'] = 'Ihre E-Mail Adresse';
$lng['listings']['name'] = 'Ihr Name';
$lng['listings']['listing_deleted'] = 'Ihr Inserat würde gelöscht!';
$lng['listings']['post_without_login'] = 'Ohne login inserieren';
$lng['listings']['waiting_activation'] = 'Auf Aktivierung warten';
$lng['listings']['waiting_admin_approval'] = 'Auf Freigabe durch Administrator warten';
$lng['listings']['dont_need_account'] = 'Benötigen Sie keinen account? Inserieren Sie ohne sich einzuloggen!';
$lng['listings']['post_your_ad'] = 'Veröffentlichen Sie Ihr Inserat!';
$lng['listings']['posted'] = 'Veröffentlicht';
$lng['listings']['select_subscription'] = 'Abonnement auswählen';
$lng['listings']['choose_subscription'] = 'Abonnement auswählen';
$lng['listings']['inactive_listings'] = 'Inaktive Inserate';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Suche filtern';
$lng['search']['refine_by_keyword'] = 'Nach Schlagwort filtern';
$lng['search']['showing'] = 'zeigend';
$lng['search']['more'] = 'Mehr ...';
$lng['search']['less'] = 'Weniger ...';
$lng['search']['search_for'] = 'Suche nach';
$lng['search']['save_your_search'] = 'Sichern Sie Ihre Suche';
$lng['search']['save'] = 'Sichern';
$lng['search']['search_saved'] = 'Ihre Suche wurde gesichert!';
$lng['search']['must_login_to_save_search'] = 'Sie müssen sich einloggen, um Ihre Suche zu sichern!';
$lng['search']['view_search'] = 'Suche ansehen';
$lng['search']['all_categories'] = 'Alle Kategorien';
$lng['search']['more_than'] = 'mehr als';
$lng['search']['less_than'] = 'weniger als';

$lng['search']['error']['cannot_save_empty_search'] = 'Ihre Suche beinhaltet keine Angaben und kann daher nicht gesichert werden!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Gesicherte Suche';
$lng['useraccount']['view_saved_searches'] = 'Gesicherte Suche ansehen';
$lng['useraccount']['no_saved_searches'] = 'Keine gesicherte Suche';
$lng['useraccount']['recurring'] = 'Wiederkehrend';
$lng['useraccount']['date_renew'] = 'Datum erneuert';
$lng['useraccount']['logged_in_as'] = 'Sie sind eingeloggt als ';
$lng['useraccount']['subscriptions'] = 'Meine Abonnements';

$lng['users']['activate_account'] = 'Account aktivieren';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Abonnement hinzufügen';
$lng['subscriptions']['package'] = 'Paket';
$lng['subscriptions']['remaining_ads'] = 'Verbleibende Inserate';
$lng['subscriptions']['recurring'] = 'Wiederkehrend';
$lng['subscriptions']['date_start'] = 'Start-Datum'; 
$lng['subscriptions']['date_end'] = 'End-Datum'; 
$lng['subscriptions']['date_renew'] = 'Verlängert'; 
$lng['subscriptions']['confirm_delete'] = 'Sind Sie sicher, dass Sie das Abonnement löschen wollen?';
$lng['subscriptions']['no_subscriptions'] = 'Kein Abonnement';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Noch keinen account?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Wiederkehrende Zahlung für dieses Abonnement aktivieren';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Die folgenden Felder müssen ausgefüllt sein: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Händlerseite kaufen';


$lng['images']['errors']['max_photos'] = 'Maximale Anzahl von Fotos erreicht!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-Mail Benachrichtigung';
$lng['alerts']['email_alerts'] = 'E-Mail Benachrichtigungen';
$lng['alerts']['no_alerts'] = 'Keine E-Mail Benachrichtigungen';
$lng['alerts']['view_email_alerts'] = 'E-Mail Benachrichtigungen ansehen';
$lng['alerts']['send_email_alerts'] = 'E-Mail Benachrichtigungen senden';
$lng['alerts']['immediately'] = 'Sofort';
$lng['alerts']['daily'] = 'Täglich';
$lng['alerts']['weekly'] = 'Wöchentlich';
$lng['alerts']['your_email'] = 'Ihre E-Mail Adresse';
$lng['alerts']['create_alert'] = 'E-Mail Benachrichtigung erstellen';
$lng['alerts']['email_alert_info'] = 'E-Mail Benachrichtigungen erhalten, wenn neue Inserate für diese Suche eingestellt werden.';
$lng['alerts']['alert_added'] = 'Ihre E-Mail Benachrichtigung wurde erstellt!';
$lng['alerts']['alert_added_activate'] = 'Sie erhalten in Kürze eine E-Mail an: <b>::EMAIL::</b>. Bitte klicken Sie auf den Link in dieser E-Mail, um Ihre E-Mail Benachrichtigung zu aktivieren!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Suchen in';
$lng['alerts']['keyword'] = 'Schlagwort';
$lng['alerts']['frequency'] = 'Häufigkeit der E-Mail Benachrichtigungen';
$lng['alerts']['alert_activated'] = 'Ihre E-Mail Benachrichtigungen wurden aktiviert! Ab jetzt erhalten Sie die gewünschten E-Mail Benachrichtigungen.';
$lng['alerts']['alert_unsubscribed'] = 'Ihre E-Mail Benachrichtigung wurde gelöscht!';
$lng['alerts']['started_on'] = 'Gestartet am';
$lng['alerts']['no_terms_searched'] = 'Für diese Suche sind keine Inhalte vorhanden!';
$lng['alerts']['no_listings'] = 'Keine Einträge für diese Benachrichtigung!';

$lng['alerts']['error']['email_required'] = 'Bitte geben Sie eine E-Mail Adresse für Ihre E-Mail Benachrichtigung an!';
$lng['alerts']['error']['invalid_email'] = 'Falsche E-Mail Adresse!';
$lng['alerts']['error']['invalid_frequency'] = 'Falsche Häufigkeit für E-Mail Benachrichtigungen!';
$lng['alerts']['error']['login_required'] = 'Bitte <a href="::LINK::">loggen Sie sich ein</a> um eine E-Mail Benachrichtigung anzulegen!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Please choose at least one search key except category!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ungültige E-Mail Benachrichtigungs Bestätigung!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ungültige Abmeldungsanfrage!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kreditrechner';
$lng_loancalc['sale_price'] = 'Verkaufspreis';
$lng_loancalc['down_payment'] = 'Anzahlung';
$lng_loancalc['trade_in_value'] = 'Wiederverkaufswert/Restwert';
$lng_loancalc['loan_amount'] = 'Darlehensbetrag';
$lng_loancalc['sales_tax'] = 'Umsatzsteuer';
$lng_loancalc['interest_rate'] = 'Zinssatz';
$lng_loancalc['loan_term'] = 'Laufzeit';
$lng_loancalc['months'] = 'Monate';
$lng_loancalc['years'] = 'Jahre';
$lng_loancalc['or'] = 'oder';
$lng_loancalc['monthly_payment'] = 'Monatliche Zahlung';
$lng_loancalc['calculate'] = 'Berechnen';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Kommentare';
$lng_comments['make_a_comment'] = 'Geben Sie einen Kommentar ab';
$lng_comments['login_to_post'] = 'Bitte <a href="::LOGIN_LINK::">loggen Sie sich ein,</a> um einen Kommentar abzugeben.';

$lng_comments['name'] = 'Name';
$lng_comments['email'] = 'E-Mail';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Kommentar senden';

$lng_comments['error']['name_missing'] = 'Bitte geben Sie Ihren Namen ein!';
$lng_comments['error']['content_missing'] = 'Bitte geben Sie einen Kommentar ab!';
$lng_comments['error']['website_missing'] = 'Bitte geben Sie eine Webseite an!';
$lng_comments['error']['email_missing'] = 'Bitte geben Sie Ihre E-Mail Adresse an!';
$lng_comments['error']['listing_id_missing'] = 'Ungültiger Eintrag!';

$lng_comments['error']['invalid_email'] = 'Ungültige E-Mail Adresse!';
$lng_comments['error']['invalid_website'] = 'Ungültige Webseite!';
$lng_comments['errors']['badwords'] = 'Ihr Kommentar enthält nicht erlaubte Wörter! Bitte ändern Sie Ihren Kommentar!';

$lng_comments['info']['comment_added'] = 'Ihr Kommentar wurde hinzugefügt! Klicken Sie <a id="newad">hier,</a> falls Sie einen weiteren Kommentar hinzufügen möchten.';
$lng_comments['info']['comment_pending'] = 'Ihr Kommentar wartet auf die Freigabe durch den Administrator.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Nächste »';
$lng['tb']['prev'] = '« Zurück';
$lng['tb']['close'] = 'Schliessen';
$lng['tb']['or_esc'] = 'oder ESC-Taste';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Nachrichten'; 
$lng['messages']['confirm_delete_all'] = 'Sind Sie sicher das Sie alle Nachrichten löschen wollen?';
$lng['messages']['listing'] = 'Anzeige'; 
$lng['messages']['no_messages'] = 'Keine Nachrichten';
$lng['general']['reply'] = 'Auf Nachricht antworten';
$lng['messages']['message'] = 'Nachricht'; 
$lng['messages']['from'] = 'Von'; 
$lng['messages']['to'] = 'An'; 
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'Thread ansehen';
$lng['messages']['started_for_listing'] = 'Gestartet für die Auflistung';
$lng['messages']['view_complete_message'] = 'Vollständige Nachricht hier anzeigen';
$lng['messages']['message_history'] = 'Nachrichtenverlauf';
$lng['messages']['yourself'] = 'Sie';
$lng['messages']['report_spam'] = 'Als Spam melden';
$lng['messages']['reported_as_spam'] = 'Als Spam gemeldet';
$lng['messages']['confirm_report_spam'] = 'Möchten Sie diese Nachricht wirklich als Spam melden?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Falsche Anzeigen ID'; 
$lng['listings']['show_map'] = 'Karte anzeigen'; 
$lng['listings']['hide_map'] = 'Karte verbergen'; 
$lng['listings']['see_full_listing'] = 'Ganze Anzeige zeigen'; 
$lng['listings']['list'] = 'Liste'; 
$lng['listings']['gallery'] = 'Fotos'; 
$lng['listings']['remove_fav_done'] = 'Die Anzeige wurde aus Ihrer Favoritenliste gelöscht!'; 
$lng['search']['high_no_results'] = 'Die Anzahl der Suchergebnisse für Ihre Suche ist sehr hoch. Die angezeigten Ergebnisse wurden auf die Anzeigen mit den meisten Übereinstimmungen beschränkt. Bitte verfeinern sie Ihre Suche um die Anzahl der ermittelten Anzeigen zu verkleinern und ein genaueres Ergebnis zu erhalten!'; 

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Diese E-Mail Adresse ist nicht erlaubt!'; 

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Sie dürfen diese Abonnement nicht erneut nutzen, die Anzahl der maximal erlaubten Nutzungen für diese Abo ist erreicht!'; 

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Ort wählen';
$lng['location']['choose'] = 'Wählen';
$lng['location']['change'] = 'Veränderung';
$lng['location']['all_locations'] = 'alle Orte';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategorie';
$lng['location']['save_location'] = 'Sicherer Ort';

$lng['credits']['credits'] = 'Gutschriften';
$lng['credits']['credit'] = 'Gutschrift';
$lng['credits']['pending_credits'] = 'Ausstehende Gutschriften';
$lng['credits']['current_credits'] = 'Aktuelles Guthaben';
$lng['credits']['one_credit_equals'] = 'Ein Gutschrift ist gleich';
$lng['credits']['credits_amount'] = 'Guthabenbetrag';
$lng['credits']['buy_extra_credits'] = 'Kaufen Sie zusätzliche Gutschriften';
$lng['credits']['credits_package'] = 'Gutschriften-Paket';
$lng['credits']['select_package'] = 'Gutschriften-Paket auswählen';
$lng['credits']['choose_package'] = 'Paket wählen';
$lng['credits']['you_currently_have'] = 'Sie haben derzeit ';
$lng['credits']['you_currently_have_no_credits'] = 'Sie haben derzeit keine Gutschriften ';
$lng['credits']['pay_using_credits'] = 'Bezahlen mit Guthaben';
$lng['credits']['not_enough_credits'] = 'Nicht genügend Guthaben für diese Zahlung!';
$lng['credits']['scredits'] = 'gutschriften';
$lng['credits']['scredit'] = 'gutschrift';



$lng['order_history']['credits_purchase'] = 'Gutschriften kaufen';
$lng['order_history']['invalid_order'] = 'Ungültige Bestellung!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Bitte warten Sie, während Sie umgeleitet werden!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Bitte <a href="::LOGIN_LINK::">melden Sie sich an<a>, damit Sie die Kontaktinformationen einsehen können!';
$lng['listing']['no_contact_information'] = 'Keine Kontaktdaten vorhanden.';


$lng['navbar']['register_as'] = 'Registrieren als';
$lng['listings']['all_ads'] = 'Alle Anzeigen';
$lng['listings']['refine'] = 'Raffinieren';
$lng['listings']['results'] = 'werte';
$lng['listings']['photos'] = 'fotos';
$lng['listings']['user_details'] = 'Siehe Benutzerdetails';
$lng['listings']['back_to_details'] = 'Zurück zu den Angebotsdetails';

$lng['listings']['post_free_ad'] = 'Kostenlose Anzeige aufgeben';

$lng['users']['username_available'] = 'Der Benutzername ist verfügbar!';
$lng['users']['username_not_available'] = 'Benutzername nicht verfügbar!';

$lng['general']['not_found'] = 'Die angeforderte Seite wurde nicht gefunden!';
$lng['general']['full_version'] = 'Full version';
$lng['general']['mobile_version'] = 'Mobile version';
$lng['failed'] = 'Gescheitert';
$lng['remember_me'] = 'Behalte mich in Erinnerung';

$lng['less_than_a_minute'] = 'vor weniger als einer Minute';
$lng['minute'] = 'minute';
$lng['minutes'] = 'minuten';
$lng['hour'] = 'stunde';
$lng['hours'] = 'stunden';
$lng['yesterday'] = 'Gestern';
$lng['day'] = 'Tag';
$lng['days'] = 'Tage';
$lng['ago_postfix'] = ' vor';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Heute';
$lng['messages']['confirm_delete'] = 'Möchten Sie diese Nachricht wirklich löschen?';
$lng['listings']['change_category'] = 'Kategorie ändern';
$lng['listings']['change_plan'] = 'Wählen Sie einen anderen Plan aus';
$lng['listings']['choose_active_subscription'] = 'Wählen Sie aus Ihren aktiven Abonnements';


$lng['useraccount']['request_removal'] = 'Kontoentfernung beantragen';
$lng['useraccount']['request_removal_now'] = 'Jetzt Entfernung beantragen!';
$lng['useraccount']['removal_verification_sent'] = 'Sie erhalten eine E-Mail mit einem Bestätigungslink. Bitte klicken Sie auf den Link, um den Entfernungsantrag zu bestätigen!';

$lng['contact']['message_waits_admin_aproval'] = 'Ihre Nachricht wird zugestellt, sobald sie vom Administrator genehmigt wurde!';

$lng['general']['accept'] = 'Akzeptieren';
$lng['general']['decline'] = 'Ablehnen';

$lng['general']['tax'] = 'Steuer';
$lng['general']['total_with_tax'] = 'Gesamt mit Steuern';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'In Kategorie';

$lng['users']['user_info'] = 'Nutzerinformation';
$lng['users']['store_info'] = 'Information speichern';
$lng['users']['user_listings'] = 'Alle Angebote';

$lng['login']['errors']['invalid_email_pass'] = 'Ungültige E-Mail oder Passwort!';
$lng['general']['or'] = 'oder';
$lng['newad']['choose_a_new_plan'] = 'Wählen Sie einen neuen Plan';

$lng['listings']['no_extra_options_available'] = 'Es sind keine zusätzlichen Optionen verfügbar!';

$lng['listings']['map'] = 'Map';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'ergebnis';

$lng['confirm_delete'] = 'Möchten Sie das ausgewählte Element wirklich löschen?';
$lng['confirm_delete_all'] = 'Möchten Sie die ausgewählten Elemente wirklich löschen?';

$lng['general']['show'] = 'Show';
$lng['general']['on_a_page'] = 'auf einer Seite';
$lng['general']['return'] = 'Return';

$lng['login']['register_for_free'] = 'Kostenlos registrieren!';
$lng['general']['sent'] = 'Gesendet';
$lng['general']['received'] = 'Allgemein';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Du bist nicht eingeloggt!';
$lng['newad']['or_post_without_account'] = 'oder poste weiter ohne Account!';

$lng_comments['scomments'] = 'Bemerkungen';
$lng_comments['scomment'] = 'kommentar';
$lng['general']['on'] = 'ein';

$lng['affiliates']['last_payment'] = 'Letzte Zahlung';
$lng['affiliates']['last_payment_date'] = 'Letztes Zahlungsdatum';
$lng['affiliates']['next_payment_date'] = 'Nächstes Zahlungsdatum';
$lng['affiliates']['total_due'] = 'Gesamtbetrag fällig';
$lng['affiliates']['total_payments'] = 'Gesamtzahl der erhaltenen Zahlungen';
$lng['affiliates']['revenue_history'] = 'Umsatzhistorie';
$lng['affiliates']['payments_history'] = 'Zahlungsverlauf';
$lng['affiliates']['pending_payment'] = 'Ausstehende Zahlung';
$lng['affiliates']['released'] = 'Freigegeben';
$lng['affiliates']['not_released'] = 'Nicht veröffentlicht';
$lng['affiliates']['paid'] = 'Bezahlt';
$lng['affiliates']['not_paid'] = 'Nicht bezahlt';

$lng['general']['no_items'] = 'Keine Gegenstände';
$lng['useraccount']['amount_start'] = 'Betrag von';
$lng['useraccount']['amount_end'] = 'Betragen';
$lng['not_allowed_to_post_ads'] = 'Sie dürfen mit diesem Konto keine Anzeigen schalten!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Die von Ihnen vorgenommenen Änderungen bleiben ausstehend, bis sie von einem Administrator überprüft werden!';

$lng['useraccount']['auction'] = 'Auktion';
$lng['useraccount']['add_auction'] = 'Auktion hinzufügen';
$lng['useraccount']['remove_auction'] = 'Auktion entfernen';
$lng['useraccount']['auction_start_price'] = 'Startpreis';
$lng['useraccount']['starts_at'] = 'Startet um';
$lng['useraccount']['no_bids'] = 'Keine Gebote';
$lng['useraccount']['max_bid'] = 'Höchstgebot';
$lng['useraccount']['enable'] = 'Aktivieren';
$lng['useraccount']['disable'] = 'Deaktivieren';
$lng['useraccount']['error']['auction_start_price'] = 'Bitte Auktionsstartpreis eingeben!';
$lng['useraccount']['info']['auction_added'] = 'Die Auktion wurde erfolgreich hinzugefügt!';
$lng['useraccount']['confirm_delete'] = 'Löschaktion bestätigen?';
$lng['useraccount']['place_bid'] = 'Geben Sie Ihr Gebot ab!';
$lng['useraccount']['login_to_bid'] = 'Bitte loggen Sie sich ein, um Ihr Gebot abzugeben!';
$lng['useraccount']['bid'] = 'Gebot';
$lng['useraccount']['message_to_seller'] = 'Nachricht an den Verkäufer';
$lng['useraccount']['error']['enter_bid'] = 'Bitte geben Sie Ihr Gebot ein!';
$lng['useraccount']['error']['incorrect_bid'] = 'Ungültiges Gebot!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Ihr Gebot ist kleiner als der Startpreis!';
$lng['useraccount']['bid_placed'] = 'Ihr Gebot wurde abgegeben!';
$lng['useraccount']['placed_on'] = 'Platziert auf';
$lng['useraccount']['no_bids_for_auction'] = 'Für diese Auktion liegen keine Gebote vor!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Klicke zum Zeigen';
$lng['advanced_search']['clear_search'] = 'Saubere Suche';
$lng['listings']['currency'] = 'Währung';
$lng['listings']['show_phone'] = 'Telefon anzeigen';
$lng['listings']['make_public'] = 'Veröffentlichen';

$lng['advanced_search']['only_ads_with_auction'] = 'Nur Anzeigen mit Auktionen';
$lng['security']['failed_login_attempts'] = 'Wiederholte fehlgeschlagene Anmeldeversuche';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Ihr Konto ist derzeit inaktiv! Sie erhalten in Kürze eine SMS mit einem Bestätigungscode. Geben Sie den Code in das Feld unten ein, um Ihr Konto zu aktivieren.';
$lng['users']['verification_code'] = 'Verifizierungs-Schlüssel';
$lng['users']['waiting_sms_activation'] = 'Warten auf SMS-Aktivierung';
$lng['listings']['info']['sms_verification'] = 'Ihr Eintrag ist derzeit inaktiv! Sie erhalten in Kürze eine SMS mit einem Bestätigungscode. Geben Sie den Code in das Feld unten ein, um Ihren Eintrag zu aktivieren.';
$lng['listings']['activate_listing'] = 'Eintrag aktivieren';
$lng['listings']['errors']['sms_invalid_activation'] = 'Ungültiger Aktivierungsschlüssel!';
$lng['listings']['info']['listing_pending'] = 'Ihr Eintrag ist ausstehend und wartet auf die Bestätigung durch den Administrator.';
$lng['listings']['info']['listing_activated'] = 'Ihr Eintrag ist aktiviert!';
$lng['listings']['errors']['listing_already_active'] = 'Ihr Eintrag ist bereits aktiv!';
$lng['listings']['errors']['invalid_phone'] = 'Ungültige Telefonnummer!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Verfügbar für';
$lng['newad']['available_until_expires'] = 'Verfügbar bis das Angebot abläuft';
$lng['newad']['view_info'] = 'Informationen anzeigen';
$lng['users']['errors']['phone_not_permitted'] = 'Diese Telefonnummer ist nicht zulässig!';
$lng['invoice']['invoice'] = 'Rechnung';
$lng['invoice']['invoice_no'] = 'Rechnungsnummer';
$lng['invoice']['bill_to'] = 'Gesetzesentwurf für';
$lng['invoice']['qty'] = 'Quantität';
$lng['invoice']['unit_price'] = 'Einzelpreis';
$lng['invoice']['subtotal'] = 'Zwischensumme';
$lng['invoice']['sale_tax'] = 'Verkaufssteuer';
$lng['invoice']['new_listing'] = 'Neue Auflistung';
$lng['invoice']['renew_listing'] = 'Erneuerung des Eintrags';
$lng['invoice']['featured_eo'] = 'Empfohlene zusätzliche Option für die Auflistung';
$lng['invoice']['highlited_eo'] = 'Hervorgehobene zusätzliche Option für die Auflistung';
$lng['invoice']['priority_eo'] = 'Priorität zusätzliche Option für die Auflistung';
$lng['invoice']['video_eo'] = 'Zusätzliche Videooption für die Auflistung';
$lng['invoice']['new_credits_pkg'] = 'Kauf eines neuen Credits-Plans';
$lng['invoice']['store'] = 'Kauf auf der Händlerseite';
$lng['invoice']['new_subscription'] = 'Neuer Abonnementkauf';
$lng['invoice']['renew_subscription'] = 'Abo-Verlängerung';
$lng['weeks'] = 'Wochen';
$lng['week'] = 'Woche';
$lng['months'] = 'Monate';
$lng['month'] = 'Monat';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'WhatsApp anzeigen';
$lng['general']['to_top'] = 'Zur Spitze gehen';
$lng['quick_search']['location'] = 'Postleitzahl oder Ort';
$lng['listings']['see_all'] = 'Alle Anzeigen ansehen &raquo;';
$lng['listings']['ads'] = 'Anzeigen';
$lng['listings']['user_since'] = 'Benutzer seit';
$lng['listings']['contact_details'] = 'Kontaktdetails';
$lng['listings']['favourite'] = 'Favorit';
$lng['listings']['manage_ad'] = 'Verwalten Sie Ihre Anzeige';
$lng['useraccount']['show_bids'] = 'Gebote anzeigen';
$lng['listings']['report_abusive'] = 'Missbräuchliche Anzeige melden';
$lng['listings']['enable_auction'] = 'Auktion aktivieren';
$lng['invoice']['download'] = 'Download Rechnung';


$lng['register']['group'] = 'Konto Typ';
$lng['register']['change_group'] = 'Kontotyp ändern';
$lng['register']['select_group'] = 'Wähle die Gruppe';

$lng['search']['private'] = 'Privatbesitzer';
$lng['search']['professional'] = 'Profis';
$lng['search']['save_your_search2'] = 'Möchten Sie Ihre Suche speichern?';
$lng['search']['save_search'] = 'Sichere Suche';
$lng['search']['refine_your_search'] = 'Verfeinere deine Suche';
$lng['search']['hide_refine'] = 'Verfeinern ausblenden';

$lng['listings']['view_all_featured'] = 'Alle vorgestellten ansehen >>';
$lng['listings']['view_all_latest'] = 'Alle aktuellen anzeigen >>';
$lng['listings']['view_all_auctions'] = 'Alle Auktionen ansehen >>';
$lng['listings']['auctions'] = 'Auktionen';
$lng['listings']['view_ads_from'] = 'Anzeigen ansehen von';
$lng['location']['change_location'] = 'Den_Ort_wechseln';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'E-Mail anzeigen';
$lng['listings']['error']['photo_mandatory'] = 'Bitte laden Sie mindestens ein Bild zu Ihrer Anzeige hoch!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Forderung';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Telefon';
$lng['contact']['error']['phone_or_email_missing'] = 'Bitte geben Sie Ihre E-Mail-Adresse oder Ihre Telefonnummer ein!';
$lng['general']['at'] = 'bei';
$lng['general']['distance_from'] = 'Entfernung von';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'Die Nachricht enthält verbotene Sprache, bitte überprüfen Sie sie!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'zusätzlich';
$lng['users']['repeat'] = 'Wiederholen';
$lng['users']['errors']['emails_dont_match'] = 'E-Mail-Adressen stimmen nicht überein!';
$lng['listings']['pending_bump'] = 'Ausstehender Stoß';
$lng['login']['username_or_email'] = 'Benutzername oder E-Mail-Adresse';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Klicken Sie hier, um zu chatten';
$lng['invoice']['price_includes_vat'] = 'Der Gesamtpreis beinhaltet';
$lng['invoice']['vat'] = 'VAT';
$lng['general']['play'] = 'Spielen';
$lng['second'] = 'sekunde';
$lng['seconds'] = 'sekunden';
$lng['general']['you_must_wait'] = 'Du musst warten ';
$lng['general']['before_posting'] = ' bevor Sie ein neues Inserat veröffentlichen!';
$lng['listings']['select_category'] = '-- Wählen Sie eine Kategorie --';


$lng['login']['errors']['account_not_activated'] = 'Ihr Konto wurde nicht aktiviert. Bitte verwenden Sie die Aktivierungs-URL, die Sie in Ihrem E-Mail-Konto erhalten haben.';
$lng['login']['errors']['banned_account'] = 'Ihr Konto wurde gesperrt!';
$lng['login']['errors']['suspended_account'] = 'Dein Konto wurde gesperrt bis ';

$lng['general']['back_to_site'] = 'Zurück zur Website';
// --------------- end 9.6 --------------------

// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Anzeige dringend machen';
$lng['order_history']['url'] = 'Website Link';
$lng['listings']['pending_urgent'] = 'Ausstehend Dringend';
$lng['listings']['pending_url'] = 'Ausstehender Website-Link';
$lng['listings']['error']['invalid_url'] = 'Ungültiger Website-Link';
$lng['listings']['urgent'] = 'Dringend';
$lng['listings']['url'] = 'Website Link';
$lng['listings']['site_url'] = 'Geben Sie Ihren Website-Link ein';
$lng['listings']['priorities_listings'] = 'Priorisierte Einträge';
$lng['listings']['urgent_listings'] = 'Dringende Einträge';
$lng['listings']['video_listings'] = 'Videoeinträge';
$lng['listings']['url_listings'] = 'Website-Link-Listen';
$lng['listings']['view_example'] = 'Beispiel ansehen';
// --------------- end 9.7 --------------------

// --------------- 9.8 --------------------
$lng['packages']['html_editor'] = 'HTML-Editor';
$lng['iyzico']['invalid_transaction'] = 'Fehlgeschlagene Zahlungstransaktion!';
$lng['users']['errors']['account_already_activated'] = 'Das Konto wurde bereits aktiviert und wartet auf die Verifizierung durch den Administrator!';
$lng['now'] = 'Jetzt';
$lng['listings']['updated'] = 'Aktualisiert';
$lng['listings']['auto_repost'] = 'Selbstrepost';
$lng['contact']['contact_via_email'] = 'Email';
// --------------- end 9.8 --------------------

// --------------- 9.9 --------------------
$lng['users']['info']['slug'] = 'Sie können den URL-Teil der Händlerseite bearbeiten, der Ihre Händlerseite von anderen unterscheidet.';
$lng['users']['slug'] = 'URL-Slug für Händlerseite';
$lng['users']['errors']['slug_already_used'] = 'Diese Schnecke ist bereits verwendet, bitte wählen Sie eine andere aus!';
$lng['users']['store_url'] = 'URL der Händlerseite';
$lng['users']['slug_available'] = 'Schnecke ist verfügbar!';
$lng['general']['settings'] = 'Einstellung';
$lng['payments']['invalid_transaction'] = 'Ungültige Transaktion!';
$lng['listings']['requires_admin_verification'] = 'Erfordert Administratorbestätigung';
$lng['listings']['waiting_for_admin_verification'] = 'Warten auf Administratorbestätigung';
$lng['users']['info']['your_account_has_admin_verification_fields'] = 'Ihre Kontoinformationen enthalten Daten, die eine Administratorbestätigung benötigen!';

$lng['listings']['edit_image_title'] = 'Bildtitel bearbeiten';
$lng['listings']['crop'] = 'Bild zuschneiden';
$lng['listings']['rotate_left'] = 'Bild nach links drehen';
$lng['listings']['rotate_right'] = 'Bild nach rechts drehen';
$lng['listings']['login_to_bid'] = 'Bitte <a href="::LOGIN_LINK::">melden Sie sich an<a>, um zu bieten';

$lng_comments['edit_comment'] = 'Kommentar bearbeiten';
$lng['listings']['select_subcategory'] = '-- Wähle eine Unterkategorie --';
$lng['listings']['crop_image'] = 'Bild zuschneiden';
$lng['messages']['mark_as_read'] = 'Als gelesen markieren';
$lng['messages']['mark_as_not_read'] = 'Als nicht gelesen markieren';


$lng['useraccount']['2fa'] = 'Zwei-Faktor-Authentifizierung';
$lng['useraccount']['enable_2fa'] = 'Aktivieren Sie die Zwei-Faktor-Authentifizierung';
$lng['useraccount']['2fa_secret'] = 'Geheimschlüssel für die Zwei-Faktor-Authentifizierung';
$lng['useraccount']['info']['qr_code'] = 'Verwenden Sie diesen QR-Code, um die App für die Zwei-Faktor-Authentifizierung einzurichten (z. B. die mobile Google Authenticator-App).';
$lng['useraccount']['settings_saved'] = 'Ihre Einstellungen wurden gespeichert!';
$lng['general']['regenerate'] = 'Regenerieren';

$lng['login']['2step_verification'] = '2. Schritt Bestätigung (einmaliges Passwort)';
$lng['login']['enter_otp'] = 'Einmaliges Passwort:';
$lng['login']['enter_otp_sms'] = 'Soeben wurde Ihnen ein OTP zugesandt.';
$lng['login']['your_otp_sms'] = "Ihr OTP ist: ";
$lng['login']['error']['invalid_code'] = "Ungültiger Code!";
$lng['login']['error']['2fa_unknown_error'] = 'Beim Login ist ein Fehler aufgetreten, bitte versuchen Sie es erneut!';
$lng['listings']['errors']['invalid_url'] = 'Ungültige URL!';
$lng['newad']['contact_options'] = 'Kontaktmöglichkeiten';
$lng['newad']['contact_via_email'] = 'Kontakt per E-Mail aktivieren';
$lng['listings']['disable_email_contact'] = 'E-Mail-Kontakt deaktivieren';
$lng['listings']['enable_email_contact'] = 'E-Mail-Kontakt aktivieren';
$lng['listings']['email_contact_on'] = 'E-Mail-Kontakt EIN';
$lng['listings']['email_contact_off'] = 'E-Mail-Kontakt AUS';
$lng['listings']['s_priority'] = 'priorität';

// --------------- end 9.9 --------------------

//Extra
$lng['general']['postalcode'] = 'Postleitzahl';
$lng['general']['tax'] = 'MwSt.';
$lng['general']['taxbrut'] = 'Brutto';
$lng['general']['taxnet'] = 'Netto';


?>
