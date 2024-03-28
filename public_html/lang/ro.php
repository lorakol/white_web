<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Acasa';
$lng['navbar']['login'] = 'Autentificare';
$lng['navbar']['logout'] = 'Iesire';
$lng['navbar']['recent_ads'] = 'Anunturi recente';
$lng['navbar']['register'] = 'Inregistrare';
$lng['navbar']['submit_ad'] = 'Adauga un anunt';
$lng['navbar']['editad'] = 'Modifica anuntul';
$lng['navbar']['my_account'] = 'Contul meu';
$lng['navbar']['administrator_panel'] = 'Panou de control';
$lng['navbar']['contact'] = 'Contact';
$lng['navbar']['password_recovery'] = 'Recuperare parola';
$lng['navbar']['renew_listing'] = 'Reinnoire anunt';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Submit';
$lng['general']['search'] = 'Cauta';
$lng['general']['contact'] = 'Contact';
$lng['general']['activeads'] = 'anunturi active';
$lng['general']['activead'] = 'anunt activ';
$lng['general']['subcats'] = 'subcategorii';
$lng['general']['subcat'] = 'subcategorie';
$lng['general']['view_ads'] = 'Vezi Anunturi';
$lng['general']['back'] = '&#171; Inapoi';
$lng['general']['goto'] = 'Mergi la';
$lng['general']['page'] = 'Pagina';
$lng['general']['of'] = 'din';
$lng['general']['other'] = 'Altceva';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Adauga';
$lng['general']['delete_all'] = 'Sterge tot ce am selectat';
$lng['general']['action'] = 'Actiune';
$lng['general']['edit'] = 'Modifica';
$lng['general']['delete'] = 'Sterge';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'de la';
$lng['general']['max'] = 'pana la';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = 'Nu sunteti autorizat sa accesati aceasta pagina!';
$lng['general']['access_restricted'] = 'Accesul catre aceasta pagina v-a fost restrictionat!';
$lng['general']['featured_ads'] = 'Anunturi promovate';
$lng['general']['latest_ads'] = 'Ultimele anunturi';
$lng['general']['quick_search'] = 'Cautare rapida';
$lng['general']['go'] = 'Du-te';
$lng['general']['unlimited'] = 'Nelimitat';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Un fisier cu acelasi nume exista deja si nu poate fi suprascris!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Nu puteti incarca fisiere mai mari de ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Dimensiunile imaginii sunt prea mari. Va rugam sa incarcati o imagine de maxim ::MAX_FILE_WIDTH::px latime si maxim ::MAX_FILE_HEIGHT::px inaltime !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Fisierul nu a putut fi incarcat!';
$lng['images']['errors']['no_file'] = 'Va rugam sa alegeti un fisier pentru a fi incarcat!';
$lng['images']['errors']['no_folder'] = 'Directorul de incarcare nu exista!';
$lng['images']['errors']['folder_not_writeable'] = 'Directorul de incarcare nu se poate scrie!';
$lng['images']['errors']['file_type_not_accepted'] = 'Fisierul incarcat nu este format imagine, ori este un format nesuportat!';
$lng['images']['errors']['error'] = 'S-a produs o eroare la incarcarea fisierului. Eroarea este: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Folderul pentru thumbnail-uri nu exista!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Folderul pentru thumbnail-uri nu are drepturi la scriere!';
$lng['images']['errors']['no_jpg_support'] = 'Formatul JPG nu este suportat!';
$lng['images']['errors']['no_png_support'] = 'Formatul PNG nu este suportat!';
$lng['images']['errors']['no_gif_support'] = 'Formatul GIF nu este suportat!';
$lng['images']['errors']['jpg_create_error'] = 'Eroare la creare imagine JPG din imaginea sursa!';
$lng['images']['errors']['png_create_error'] = 'Eroare la creare imagine PNG din imaginea sursa!';
$lng['images']['errors']['gif_create_error'] = 'Eroare la creare imagine GIF din imaginea sursa!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Autentificare';
$lng['login']['logout'] = 'Iesire';
$lng['login']['username'] = 'Utilizator';
$lng['login']['password'] = 'Parola';
$lng['login']['forgot_pass'] = 'Ati uitat parola?';
$lng['login']['click_here'] = 'Apasati aici';

$lng['login']['errors']['password_missing'] = 'Va rugam sa va introduceti parola!';
$lng['login']['errors']['username_missing'] = 'Va rugam sa va introduceti numele de utilizator!';
$lng['login']['errors']['username_invalid'] = 'Nume de utilizator invalid!';
$lng['login']['errors']['invalid_username_pass'] = 'Nume de utilizator si/sau parola invalide!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Iesire';
$lng['logout']['loggedout'] = 'Ati fost deautentificat cu succes!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Inregistrare';
$lng['users']['image_verification_info'] = 'Va rugam sa introduceti textul din imaginea de mai jos.<br /> Caracterele posibile sunt cele de la a la h, litere mici,<br /> precum si numere de la 1 la 9.';
$lng['users']['already_logged_in'] = 'Deja sunteti autentificat!';
$lng['users']['select'] = 'Selecteaza';
$lng['users']['info']['awaiting_admin_verification'] = 'Contul dumneavoastra asteapta verificarea administratorului. Veti fi informat printr-un email in momentul in care contul va fi activat.';
$lng['users']['info']['activate_account'] = 'Un email a fost trimis catre dumneavoastra. Va rugam sa urmati indicatiile cuprinse in acesta, pentru activarea contului.';
$lng['users']['info']['welcome_user'] = 'Contul dumneavoastra a fost creat. Va rugam <a href="login.php">Autentificati-va</a> in contul dumneavoastra!';
$lng['users']['info']['account_info_updated'] = 'Informatiile dumneavoastra au fost actualizate!';
$lng['users']['info']['password_changed'] = 'Parola dumneavoastra a fost schimbata!';
$lng['users']['info']['account_activated'] = 'Contul dumneavoastra a fost activat! Va rugam <a href="login.php">autentificati-va</a>.';

$lng['users']['errors']['username_missing'] = 'Va rugam sa completati numele de utilizator!';
$lng['users']['errors']['invalid_username'] = 'Nume de utilizator incorect!';
$lng['users']['errors']['username_exists'] = 'Acest nume de utilizator este deja folosit! Va rugam sa va autentificati daca aveti deja un cont creat!';
$lng['users']['errors']['email_missing'] = 'Va rugam sa introduceti adresa de email!';
$lng['users']['errors']['invalid_email'] = 'Adresa de email incorecta!';
$lng['users']['errors']['passwords_dont_match'] = 'Parola nu se potriveste!';
$lng['users']['errors']['email_exists'] = 'Adresa de email este deja folosita! Va rugam sa va autentificati daca aveti deja un cont creat!';
$lng['users']['errors']['password_missing'] = 'Va rugam sa introduceti parola!';
$lng['users']['errors']['invalid_validation_string'] = 'Sir de caractere incorect!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Cont sau cheie de activare incorecte! Va rugam sa contactati administratorul!';
$lng['users']['errors']['account_already_active'] = 'Contul dumneavoastra este deja activat!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Anunt';
$lng['listings']['category'] = 'Categorie';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Pret';
$lng['listings']['ad_description'] = 'Descriere anunt';
$lng['listings']['title'] = 'Titlu';
$lng['listings']['description'] = 'Descriere';
$lng['listings']['image'] = 'Imagine';
$lng['listings']['words_left'] = 'Numar de cuvinte ramase';
$lng['listings']['enter_photos'] = 'Adauga fotografii';
$lng['listings']['ad_information'] = 'Informatii anunt';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['details'] = 'Detalii';
$lng['listings']['stock_no'] = 'Id anunt';
$lng['listings']['location'] = 'Locatie';
$lng['listings']['contact_info'] = 'Informatii de contact';
$lng['listings']['email_seller'] = 'Trimiteti un email vanzatorului!';
$lng['listings']['no_recent_ads'] = 'Nu sunt anunturi recente';
$lng['listings']['no_ads'] = 'Nu exista anunturi in aceasta categorie';
$lng['listings']['added_on'] = 'Adaugat pe';
$lng['listings']['send_mail'] = 'Trimite email utilizatorului';
$lng['listings']['details'] = 'Detalii';
$lng['listings']['user'] = 'Utilizator';
$lng['listings']['price'] = 'Pret';
$lng['listings']['confirm_delete'] = 'Sunteti sigur ca vreti sa stergeti anuntul?';
$lng['listings']['confirm_delete_all'] = 'Sunteti sigur ca doriti sa stergeti anunturile selectate?';
$lng['listings']['all'] = 'Toate anunturile';
$lng['listings']['active_listings'] = 'Anunturile active';
$lng['listings']['pending_listings'] = 'Anunturile in asteptare';
$lng['listings']['featured_listings'] = 'Anunturi promovate';
$lng['listings']['expired_listings'] = 'Anunturile expirate';
$lng['listings']['active'] = 'Activ';
$lng['listings']['inactive'] = 'Inactiv';
$lng['listings']['pending'] = 'In asteptare';
$lng['listings']['featured'] = 'Promovat';
$lng['listings']['expired'] = 'Expirat';
$lng['listings']['order_by_date'] = 'Sorteaza dupa data';
$lng['listings']['order_by_category'] = 'Sorteaza dupa Categorie';
$lng['listings']['order_by_make'] = 'Sorteaza dupa Marca';
$lng['listings']['order_by_price'] = 'Sorteaza dupa Pret';
$lng['listings']['order_by_views'] = 'Sorteaza dupa Accesari';
$lng['listings']['order_asc'] = 'Crescator';
$lng['listings']['order_desc'] = 'Descrescator';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Accesari';
$lng['listings']['date'] = 'Data';
$lng['listings']['no_listings'] = 'Nici un anunt';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Acest anunt nu exista!';
$lng['listings']['mark_sold'] = 'Marcheaza ca vandut';
$lng['listings']['mark_unsold'] = 'Demarcheaza ca vandut';
$lng['listings']['sold'] = 'Vandut';
$lng['listings']['feature'] = 'Promovat';
$lng['listings']['expired_on'] = 'Expirat pe';
$lng['listings']['renew'] = 'Reinnoieste';
$lng['listings']['print_page'] = 'Printeaza';
$lng['listings']['recommend_this'] = 'Share';
$lng['listings']['more_listings'] = 'Mai multe anunturi ale acestui utilizator';
$lng['listings']['all_listings_for'] = 'Toate anunturile pentru';
$lng['listings']['free_category'] = 'Categorie GRATIS';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Sunteti sigur ca vreti sa stergeti imaginea anuntului?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Prea multe cuvinte! Puteti scrie maxim ::MAX:: cuvinte'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Anuntul dumneavoastra contine cuvinte interzise! Va rugam sa va modificati continutul!';
$lng['listings']['errors']['title_missing']='Va rugam sa introduceti un titlu pentru anuntul dumneavoastra!';
$lng['listings']['errors']['category_missing']='Va rugam sa alegeti o categorie!';
$lng['listings']['errors']['invalid_category']='Categorie incorecta!';
$lng['listings']['errors']['package_missing']='Va rugam sa alegeti un plan!';
$lng['listings']['errors']['invalid_package']='Plan incorect!';
$lng['listings']['errors']['content_missing']='Va rugam sa introduceti continut anuntului dumneavoastra!';
$lng['listings']['errors']['invalid_price']='Pret incorect!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Pret minim';
$lng['quick_search']['price_high'] = 'Pret maxim';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Adauga un anunt';
$lng['useraccount']['browse_your_listings'] = 'Administrare anunturi';
$lng['useraccount']['modify_account_info'] = 'Informatii cont';
$lng['useraccount']['order_history'] = 'Istoric comenzi';
$lng['useraccount']['total_listings'] = 'Total anunturi';
$lng['useraccount']['total_views'] = 'Total accesari';
$lng['useraccount']['active_listings'] = 'Anunturi active';
$lng['useraccount']['pending_listings'] = 'Anunturi in asteptare';
$lng['useraccount']['last_login'] = 'Ultima autentificare';
$lng['useraccount']['last_login_ip'] = 'Ultimul IP de autentificare';
$lng['useraccount']['expired_listings'] = 'Anunturi expirate';
$lng['useraccount']['statistics'] = 'Statistici';
$lng['useraccount']['welcome'] = 'Bun venit';
$lng['useraccount']['contact_name'] = 'Nume de contact';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Parola';
$lng['useraccount']['repeat_password'] = 'Repetati parola';
$lng['useraccount']['change_password'] = 'Schimbati parola';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = '-';
$lng['advanced_search']['price_min'] = 'de la';
$lng['advanced_search']['price_max'] = 'pana la';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Ordoneaza dupa';
$lng['advanced_search']['sort_by_price'] = 'Ordoneaza dupa Pret';
$lng['advanced_search']['sort_by_date'] = 'Ordoneaza dupa Data';
$lng['advanced_search']['sort_by_make'] = 'Ordoneaza dupa Marca';
$lng['advanced_search']['sort_descendant'] = 'Ordoneaza descrescator';
$lng['advanced_search']['sort_ascendant'] = 'Ordoneaza crescator';
$lng['advanced_search']['only_ads_with_pic'] = 'Doar anunturi cu imagini';
$lng['advanced_search']['no_results'] = 'Nici un anunt nu a fost gasit care sa corespunda cautarii!';
$lng['advanced_search']['multiple_ads_matching'] = 'Exista ::NO_ADS:: anunturi care sa corespunda cautarii!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Nu exista anunturi care sa corespunda cautarii!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nume';
$lng['contact']['subject'] = 'Subiect';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Pagina Web';
$lng['contact']['comments'] = 'Comentarii';
$lng['contact']['message_sent'] = 'Mesajul a fost trimis!';
$lng['contact']['sending_message_failed'] = 'Livrarea mesajului a esuat!';
$lng['contact']['mailto'] = 'Trimite email catre';

$lng['contact']['error']['name_missing'] = 'Va rugam sa va introduceti numele!';
$lng['contact']['error']['subject_missing'] = 'Va rugam sa introduceti un subiect!';
$lng['contact']['error']['email_missing'] = 'Va rugam sa va introduceti adresa de email!';
$lng['contact']['error']['invalid_email'] = 'Adresa de email incorecta!';
$lng['contact']['error']['comments_missing'] = 'Va rugam sa introduceti un comentariu!';
$lng['contact']['error']['invalid_validation_number'] = 'Numar de validare incorect!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Adresa de E-mai';
$lng['password_recovery']['new_password'] = 'Parola noua';
$lng['password_recovery']['repeat_new_password'] = 'Repetati parola noua';
$lng['password_recovery']['invalid_key'] = 'Invalid Key';

$lng['password_recovery']['email_missing'] = 'Va rugam sa va introduceti adresa de email!';
$lng['password_recovery']['invalid_email'] = 'Adresa de email incorecta';
$lng['password_recovery']['email_inexistent'] = 'Nu exista utilizatori inregistrati cu aceasta adresa de email';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Suma';
$lng['packages']['words'] = 'Cuvinte';
$lng['packages']['days'] = 'Zile';
$lng['packages']['pictures'] = 'Imagini';
$lng['packages']['picture'] = 'Imagine';
$lng['packages']['available'] = 'Disponibil';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Processor';
$lng['order_history']['amount'] = 'Suma';
$lng['order_history']['completed'] = 'Completat';
$lng['order_history']['not_completed'] = 'Necompletat';
$lng['order_history']['ad_no'] = 'ID anunt';
$lng['order_history']['date'] = 'Data';
$lng['order_history']['no_actions'] = 'Nici o comanda';
$lng['order_history']['order_by_date'] = 'Ordoneaza dupa data';
$lng['order_history']['order_by_amount'] = 'Ordoneaza dupa suma';
$lng['order_history']['order_by_processor'] = 'Ordoneaza dupa tipul de plata';
$lng['order_history']['description'] = 'Descriere';
$lng['order_history']['newad'] = 'Anunt nou'; 
$lng['order_history']['renew'] = 'Reinnoieste'; 
$lng['order_history']['featured'] = 'Anunt promovat'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ordoneaza dupa Data';
$lng['order']['price'] = 'Ordoneaza dupa Pret';
$lng['order']['title'] = 'Ordoneaza dupa Titlu';
$lng['order']['desc'] = 'Descrescator';
$lng['order']['asc'] = 'Crescator';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Recomanda acest anunt';
$lng['recommend']['your_name'] = 'Numele dumneavoastra';
$lng['recommend']['your_email'] = 'Email-ul dumneavoastra';
$lng['recommend']['friend_name'] = 'Numele prietenului';
$lng['recommend']['friend_email'] = 'Emailul prietenului';
$lng['recommend']['message'] = 'Mesaj catre prietenul dumneavoastra';


$lng['recommend']['error']['your_name_missing'] = 'Va rugam introduceti-va numele!';
$lng['recommend']['error']['your_email_missing'] = 'Va rugam introduceti email-ul!';
$lng['recommend']['error']['friend_name_missing'] = 'Va rugam introduceti numele prietenului!';
$lng['recommend']['error']['friend_email_missing'] = 'Va rugam introduceti email-ul prietenului!';
$lng['recommend']['error']['invalid_email'] = 'Adresa de email incorecta';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Anunturi';
$lng['stats']['general'] = 'General';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Subscribe';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favorite';
$lng['general']['as'] = 'ca';
$lng['general']['view'] = 'Vezi';
$lng['general']['none'] = 'Nici unul';
$lng['general']['yes'] = 'da';
$lng['general']['no'] = 'nu';
$lng['general']['next'] = 'Next &#187;';
$lng['general']['finish'] = 'Finalizeaza';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Anuleaza';
$lng['general']['previous_page'] = '&#171; Pagina anterioara';
$lng['general']['next_page'] = 'Pagina urmatoare &#187;';
$lng['general']['items'] = 'obiecte';
$lng['general']['active'] = 'Activ';
$lng['general']['inactive'] = 'Inactiv';
$lng['general']['expires'] = 'Expira la';
$lng['general']['available'] = 'Valabil';
$lng['general']['cancel'] = 'Anuleaza';
$lng['general']['never'] = 'Niciodata';
$lng['general']['asc'] = 'Crescator';
$lng['general']['desc'] = 'Descrescator';
$lng['general']['pending'] = 'In asteptare';
$lng['general']['upload'] = 'Upload';
$lng['general']['processing'] = 'Se proceseaze, va rugam asteptati ... ';
$lng['general']['help'] = 'Ajutor';
$lng['general']['hide'] = 'Ascunde';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Aceasta este o versiune demo. Nu aveti voie sa modificati anumite optiuni!';
$lng['general']['check_all'] = 'Marcheaza toate';
$lng['general']['uncheck_all'] = 'Demarcheaza toate';
$lng['general']['all'] = 'Toate';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Pagina Dealer';
$lng['users']['store_banner'] = 'Banner pagina dealer';
$lng['users']['waiting_mail_activation'] = 'In asteptare pentru activare prin email';
$lng['users']['waiting_admin_activation'] = 'In asteptare pentru activarea de catre administrator';
$lng['users']['no_such_id'] = 'Acest utilizator nu exista.';

$lng['users']['info']['store_banner'] = 'Aceasta imagine va fi folosita ca imagine principala pentru pagina dealerului.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Raportati anunt';
$lng['listings']['report_reason'] = 'Motivul raportului';
$lng['listings']['meta_info'] = 'Informatii Meta';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Description';
$lng['listings']['not_approved'] = 'Neaprobat';
$lng['listings']['approve'] = 'Aproba';
$lng['listings']['choose_payment_method'] = 'Alegeti metoda de plata';

$lng['listings']['choose_category'] = 'Alegeti categoria';
$lng['listings']['choose_plan'] = 'Alegeti planul';
$lng['listings']['enter_ad_details'] = 'Detalii anunt';
$lng['listings']['ad_details'] = 'Detali anunt';
$lng['listings']['add_photos'] = 'Adaugati imagini';
$lng['listings']['ad_photos'] = 'Imagini anunt';
$lng['listings']['edit_photos'] = 'Editare imagini';
$lng['listings']['extra_options'] = 'Extraoptiuni';
$lng['listings']['review'] = 'Verificare anunt';
$lng['listings']['finish'] = 'Sfarsit';
$lng['listings']['next_step'] = 'Pasul urmator &#187;';
$lng['listings']['included'] = 'Inclus';
$lng['listings']['finalize'] = 'Finalizeaza';
$lng['listings']['zip'] = 'Cod postal';
$lng['listings']['add_to_favourites'] = 'Adaugati la favorite';
$lng['listings']['confirm_add_to_fav'] = 'Atentie! Nu sunteti autentificat! Lista cu anunturi favorite nu va fi salvata';
$lng['listings']['add_to_fav_done'] = 'Anuntul a fost adaugat la lista cu favorite!';
$lng['listings']['confirm_delete_favourite'] = 'Sunteti sigur doriti sa stergeti acest anunt favorit?';
$lng['listings']['no_favourites'] = 'Nici un anunt favorit';
$lng['listings']['extra_options'] = 'Extraoptiuni';
$lng['listings']['highlited'] = 'Evidentiat';
$lng['listings']['priority'] = 'Prioritate';
$lng['listings']['video'] = 'Video Extern';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video in asteptare';
$lng['listings']['video_code'] = 'Cod Video';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = 'Aproba anunt';
$lng['listings']['finalize_later'] = 'Termin mai tarziu';
$lng['listings']['click_to_upload'] = 'Click pentru incarcare';
$lng['listings']['files_uploaded'] = ' Fotografii incarcate din totalul de ';
$lng['listings']['allowed'] = ' fotografii permise!';
$lng['listings']['limit_reached'] = ' S-a atins limita maxima de fotografii permise!';
$lng['listings']['edit_options'] = 'Modificati optiunile anuntului';
$lng['listings']['view_store'] = 'Vezi pagina dealer';
$lng['listings']['edit_ad_options'] = 'Modifica optiuni anunt';
$lng['listings']['no_extra_options_selected'] = 'Nici o extraoptiune selectata!';
$lng['listings']['highlited_listings'] = 'Anunturi evidentiate';
$lng['listings']['for_listing'] = 'pentru anuntul nr. ';
$lng['listings']['expires_on'] = 'Expira la';
$lng['listings']['expired_on'] = 'Expirat la';
$lng['listings']['pending_ad'] = 'Anunt in asteptare';
$lng['listings']['pending_highlited'] = ' Evidentiere in asteptare';
$lng['listings']['pending_featured'] = 'Promovare in asteptare';
$lng['listings']['pending_priority'] = 'Prioritate in curs de verificare';
$lng['listings']['enter_coupon'] = 'Introduceti codul de reducere';
$lng['listings']['discount'] = 'Reducere';
$lng['listings']['select_plan'] = 'Selecteaza Planul';
$lng['listings']['pending_subscription'] = 'Abonament in asteptare';
$lng['listings']['remove_favourite'] = 'Elimina anunt favorit';

$lng['listings']['order_up'] = 'Crescator';
$lng['listings']['order_down'] = 'Descrescator';

$lng['listings']['errors']['invalid_youtube_video'] = 'Video youtube invalid!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonati-va';
$lng['useraccount']['no_package'] = 'Nu ati ales un plan';
$lng['useraccount']['packages'] = 'Planuri';
$lng['useraccount']['date_start'] = 'Data de inceput';
$lng['useraccount']['date_end'] = 'Data de final';
$lng['useraccount']['remaining_ads'] = 'Anunturi ramase';
$lng['useraccount']['account_type'] = 'Tipul contului';
$lng['useraccount']['unfinished_listings'] = 'Anunturi nefinalizate';
$lng['useraccount']['confirm_delete_subscription'] = 'Sunteti sigur ca doriti sa nu mai fiti abonat?';
$lng['useraccount']['buy_store'] = 'Cumpara o pagina de dealer';
$lng['useraccount']['bulk_uploads'] = 'Incarcare bulk';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonament';
$lng['packages']['ads'] = 'Anunturi';
$lng['packages']['name'] = 'Nume';
$lng['packages']['details'] = 'Detalii';
$lng['packages']['no_ads'] = 'Numar anunturi';
$lng['packages']['subscription_time'] = 'Perioada abonament';
$lng['packages']['no_pictures'] = 'Numar maxim de imagini';
$lng['packages']['no_words'] = 'Numar de cuvinte';
$lng['packages']['ads_availability'] = 'Valabilitate anunt';
$lng['packages']['featured'] = 'Promovat';
$lng['packages']['highlited'] = 'Evidential';
$lng['packages']['priority'] = 'Prioritate';
$lng['packages']['video'] = 'Video Extern';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonament';
$lng['order_history']['post_listing'] = 'Adauga anunt';
$lng['order_history']['renew_listing'] = 'Reinnoieste anunt';
$lng['order_history']['feature_listing'] = 'Promovare anunt';
$lng['order_history']['subscribe_to_package'] = 'Abonament plan';
$lng['order_history']['complete_payment'] = 'Finalizeaza plata';
$lng['order_history']['complete_payment_for'] = 'Finalizeaza plata pentru';
$lng['order_history']['details'] = 'Detalii';
$lng['order_history']['subscription_no'] = 'Abonament nr';
$lng['order_history']['highlited'] = 'Evidentiere anunt';
$lng['order_history']['priority'] = 'Prioritate';
$lng['order_history']['video'] = 'Video Extern';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Va rugam sa alegeti un plan!';
$lng['buy_package']['error']['choose_processor'] = 'Va rugam sa alegeti un tip de plata!';
$lng['buy_package']['error']['invalid_processor'] = 'Tip de plata invalid!';
$lng['buy_package']['error']['invalid_package'] = 'Plan invalid!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Tranzactie Paypal invalida!';
$lng['2co']['invalid_transaction'] = 'Tranzactie 2Checkout invalida!';
$lng['moneybookers']['invalid_transaction'] = 'Tranzactie Moneybookers invalida!';
$lng['authorize']['invalid_transaction'] = 'Tranzactie Authorize.net invalida!';
$lng['manual']['invalid_transaction'] = 'Tranzactie invalida!';

$lng['paypal']['transaction_canceled'] = 'Tranzactie Paypal anulata!';
$lng['2co']['transaction_canceled'] = 'Tranzactie 2Checkout anulata!';
$lng['moneybookers']['transaction_canceled'] = 'Tranzactie Moneybookers anulata!';
$lng['authorize']['transaction_canceled'] = 'Tranzactie Authorize.net anulata!';
$lng['manual']['transaction_canceled'] = 'Tranzactie anulata!';
$lng['epay']['transaction_canceled'] = 'Tranzactie ePay anulata!';

$lng['payments']['transaction_already_processed'] = 'Tranzactia a fost deja procesata!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Aproba abonament';
$lng['subscribe']['payment_method'] = 'Metoda de plata';
$lng['subscribe']['renew_subscription'] = 'Reinnoieste abonament';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Email copie: ';
$lng['bcc_mails']['from'] = 'De la: ';
$lng['bcc_mails']['to'] = 'Catre: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Raport importare anunturi: ';
$lng['ie']['successfully'] = 'anunturi adaugate cu succes';
$lng['ie']['failed'] = 'esuate';
$lng['ie']['uploaded_listings'] = 'Lista anunturi adaugate:';
$lng['ie']['errors']['upload_import_file'] = 'Va rugam sa uploadati fisierul pentru import de date!';
$lng['ie']['errors']['incorrect_file_type'] = 'Tip de fisier incorect. Fisierul trebuie sa fie: ';
$lng['ie']['errors']['could_not_open_file'] = 'Nu s-a putut deschide fisierul!';
$lng['ie']['errors']['choose_categ'] = 'Va rugam sa alegeti categoria!';
$lng['ie']['errors']['could_not_save_file'] = 'Nu s-a putus salva fisierul: ';
$lng['ie']['errors']['required_field_missing'] = 'Campuri obligatorii lipsa: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Numar de campuri incorect pentru linia: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Alegeti Dealer';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Cautare dupa zona';
$lng['areasearch']['all_locations'] = 'Toate locatiile';
$lng['areasearch']['exact_location'] = 'Locatie exacta';
$lng['areasearch']['around'] = 'in jur';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Da';
$lng['general']['No'] = 'Nu';
$lng['general']['or'] = 'sau';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'de';
$lng['general']['close_window'] = 'Inchide Fereastra';
$lng['general']['more_options'] = 'mai multe optiuni &#187;';
$lng['general']['less_options'] = '&#171; mai putine optiuni';
$lng['general']['send'] = 'Trimite';
$lng['general']['save'] = 'Salveaza';
$lng['general']['for'] = 'pentru';
$lng['general']['to'] = 'la';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Marcheaza ca inchiriat';
$lng['listings']['mark_unrented'] = 'Demarcheaza ca inchiriat';
$lng['listings']['rented'] = 'Inchiriat';
$lng['listings']['your_info'] = 'Informatiile tale';
$lng['listings']['email'] = 'Adresa ta de e-mail';
$lng['listings']['name'] = 'Numele tau';
$lng['listings']['listing_deleted'] = 'Anuntul tau a fost sters!';
$lng['listings']['post_without_login'] = 'Adauga anunt fara autentificare';
$lng['listings']['waiting_activation'] = 'Asteapta activare';
$lng['listings']['waiting_admin_approval'] = 'Asteapta aprobarea administratorului';
$lng['listings']['dont_need_account'] = 'Nu doriti sa va inregistrati? Adaugati un anunt fara autentificare! Atentie insa! Nu veti mai putea modifica anuntul dupa ce l-ati postat!';
$lng['listings']['post_your_ad'] = 'Adauga anuntul tau!';
$lng['listings']['posted'] = 'Adaugat';
$lng['listings']['select_subscription'] = 'Selecteaza abonament';
$lng['listings']['choose_subscription'] = 'Alege abonament';
$lng['listings']['inactive_listings'] = 'Anunturi inactive';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Cautare avansata';
$lng['search']['refine_by_keyword'] = 'Filtreaza';
$lng['search']['showing'] = 'Showing';
$lng['search']['more'] = 'Mai multe ...';
$lng['search']['less'] = 'Mai putine ...';
$lng['search']['search_for'] = 'Cauta';
$lng['search']['save_your_search'] = 'Salveaza-mi cautarea';
$lng['search']['save'] = 'Salveaza';
$lng['search']['search_saved'] = 'Cautarea a fost salvata!';
$lng['search']['must_login_to_save_search'] = 'Trebuie sa fiti autentificat ca sa puteti salva cautarea!';
$lng['search']['view_search'] = 'Vazi cautare';
$lng['search']['all_categories'] = 'Toate categoriile';
$lng['search']['more_than'] = 'mai mult decat';
$lng['search']['less_than'] = 'mai putin decat';

$lng['search']['error']['cannot_save_empty_search'] = 'Cautarea dumneavoastra nu contine nici un criteriu si nu poate fi salvata!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Cautari salvate';
$lng['useraccount']['view_saved_searches'] = 'Vezi cautari salvate';
$lng['useraccount']['no_saved_searches'] = 'Nici o cautare salvata';
$lng['useraccount']['recurring'] = 'Automat';
$lng['useraccount']['date_renew'] = 'Data reinnoire';
$lng['useraccount']['logged_in_as'] = 'Sunteti autentificat ca si ';
$lng['useraccount']['subscriptions'] = 'Abonamente';

$lng['users']['activate_account'] = 'Activeaza cont';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Adauga abonament';
$lng['subscriptions']['package'] = 'Abonament';
$lng['subscriptions']['remaining_ads'] = 'Anunturi ramase';
$lng['subscriptions']['recurring'] = 'Automat';
$lng['subscriptions']['date_start'] = 'Data inceput';
$lng['subscriptions']['date_end'] = 'Data sfarsit';
$lng['subscriptions']['date_renew'] = 'Data reinnoire';
$lng['subscriptions']['confirm_delete'] = 'Sunteti sigur ca vreti sa stergi abonamentul?';
$lng['subscriptions']['no_subscriptions'] = 'Nici un abonament';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Inca nu aveti un cont?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Activeaza plata automata pentru acest abonament';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Urmatoarele campuri obligatorii nu au fost completate: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Cumparati pagina de dealer';


$lng['images']['errors']['max_photos'] = 'Maximul de imagini a fost incarcat!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Atentionare prin E-mail';
$lng['alerts']['email_alerts'] = 'Atentionari prin Email';
$lng['alerts']['no_alerts'] = 'Nici o atentionare prin email';
$lng['alerts']['view_email_alerts'] = 'Vedeti atentionarile dvs prin email';
$lng['alerts']['send_email_alerts'] = 'Trimiteti atentionari prin email';
$lng['alerts']['immediately'] = 'Imediat';
$lng['alerts']['daily'] = 'Zilnic';
$lng['alerts']['weekly'] = 'Saptamanal';
$lng['alerts']['your_email'] = 'adresa dvs de email';
$lng['alerts']['create_alert'] = 'Creati atentionare';
$lng['alerts']['email_alert_info'] = 'Primiti atentionari prin email cand apar anunturi care corespund cautarii.';
$lng['alerts']['alert_added'] = 'Atentionarea a fost creata!';
$lng['alerts']['alert_added_activate'] = 'Veti primi in cel mai scurt timp un email pe adresa <b>::EMAIL::</b>. Va rugam sa dati click pe linkul din email pentru a activa atentionarea prin email!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Cauta in';
$lng['alerts']['keyword'] = 'keyword';
$lng['alerts']['frequency'] = 'Frecventa de atentionare';
$lng['alerts']['alert_activated'] = 'Atentionarea dumneavoastra a fost activata! De acum veti primi atentionari conform cerintelor.';
$lng['alerts']['alert_unsubscribed'] = 'Atentionarea a fost eliminata!';
$lng['alerts']['started_on'] = 'Inceputa pe';
$lng['alerts']['no_terms_searched'] = 'Nu sunt stabilite criterii pentru aceasta cautare!';
$lng['alerts']['no_listings'] = 'Nu exista anunturi pentru aceasta atentionare!';

$lng['alerts']['error']['email_required'] = 'Va rugam sa introduceti o adresa de email pentru atentionarea dumneavoastra!';
$lng['alerts']['error']['invalid_email'] = 'Adresa de email pentru atentionare invalida!';
$lng['alerts']['error']['invalid_frequency'] = 'Frecventa de atentionare incorecta!';
$lng['alerts']['error']['login_required'] = 'Va rugam <a href="::LINK::">autentificati-va</a> pentru a putea sa adaugati o atentionare!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Va rugam sa alegeti cel putin un criteriu de cautare, exceptand categoria!';
$lng['alerts']['error']['invalid_confirmation'] = 'Confirmare de alerta invalida!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Cerere de dezabonare invalida!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calculator Imprumut';
$lng_loancalc['sale_price'] = 'Pret vanzare';
$lng_loancalc['down_payment'] = 'Avans';
$lng_loancalc['trade_in_value'] = 'Trade in value';
$lng_loancalc['loan_amount'] = 'Suma imprumut';
$lng_loancalc['sales_tax'] = 'Taxa vanzare';
$lng_loancalc['interest_rate'] = 'Interest rate';
$lng_loancalc['loan_term'] = 'Termen imprumut';
$lng_loancalc['months'] = 'luni';
$lng_loancalc['years'] = 'ani';
$lng_loancalc['or'] = 'sau';
$lng_loancalc['monthly_payment'] = 'Plata lunara';
$lng_loancalc['calculate'] = 'Calculeaza';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comentarii';
$lng_comments['make_a_comment'] = 'Comentati';
$lng_comments['login_to_post'] = 'Va rugam <a href="::LOGIN_LINK::">autentificati-va</a> pentru a putea lasa un comentariu.';

$lng_comments['name'] = 'Nume';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Pagina Web';
$lng_comments['submit_comment'] = 'Plaseaza comentariu';

$lng_comments['error']['name_missing'] = 'Va rugam sa va introduceti numele!';
$lng_comments['error']['content_missing'] = 'Va rugam sa introduceti comentariul!';
$lng_comments['error']['website_missing'] = 'Va rugam sa introduceti adresa paginii Web!';
$lng_comments['error']['email_missing'] = 'Va rugam sa introduceti emailul!';
$lng_comments['error']['listing_id_missing'] = 'Comentariu invalid!';

$lng_comments['error']['invalid_email'] = 'Adresa de email incorecta!';
$lng_comments['error']['invalid_website'] = 'Pagina Web incorecta!';
$lng_comments['errors']['badwords'] = 'Comentariul dumneavoastra contine cuvinte interzise. Va rugam sa modificati continutul!';

$lng_comments['info']['comment_added'] = 'Comentariul a fost adaugat! Click <a id="newad">aici</a> daca doriti sa mai adaugati un comentariu.';
$lng_comments['info']['comment_pending'] = 'Comentariul dumneavoastra asteapta aprobarea administratorului pentru a fi publicat.';

// ----------------- end comments module --------------------

$lng['tb']['next'] = 'Inainte &raquo;';
$lng['tb']['prev'] = '&laquo; Inapoi';
$lng['tb']['close'] = 'Inchide';
$lng['tb']['or_esc'] = 'sau tasta ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mesaje';
$lng['messages']['confirm_delete_all'] = 'Sunteti sigur ca doriti sa stergeti mesajele selectate?';
$lng['messages']['listing'] = 'Anunt';
$lng['messages']['no_messages'] = 'Numar mesaje';
$lng['general']['reply'] = 'Raspundeti la mesaj';
$lng['messages']['message'] = 'Mesaj';
$lng['messages']['from'] = 'De la';
$lng['messages']['to'] = 'Catre';
$lng['messages']['on'] = 'La data';
$lng['messages']['view_thread'] = 'Vezi thread';
$lng['messages']['started_for_listing'] = 'Inceput pentru anuntul';
$lng['messages']['view_complete_message'] = 'Vezi mesajul complet aici';
$lng['messages']['message_history'] = 'Istoric mesaje';
$lng['messages']['yourself'] = 'Tine';
$lng['messages']['report_spam'] = 'Raporteaza ca spam';
$lng['messages']['reported_as_spam'] = 'Reportat ca spam';
$lng['messages']['confirm_report_spam'] = 'Sunteti sigur ca doriti sa raportati acest mesaj ca spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Id anunt inexistent';
$lng['listings']['show_map'] = 'Arata harta';
$lng['listings']['hide_map'] = 'Ascunde harta';
$lng['listings']['see_full_listing'] = 'Vezi intregul anunt';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'Anuntul a fost sters din lista de favorite!';
$lng['search']['high_no_results'] = 'Numarul de rezultate pentru cautarea dvs este foarte mare. Rezultatele listate sunt limitate la cele mai relevante. Va rugam sa adaugati noi parametri la cautarea dvs pentru a micsora numarul de rezultate si a imbunatati cautarea dvs!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Aceasta adresa de email nu este permisa!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Nu mai puteti folosi acest tip de plan, ati atins numarul maxim de folosiri!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Alege locatie';
$lng['location']['choose'] = 'Alege';
$lng['location']['change'] = 'Schimba';
$lng['location']['all_locations'] = 'Toate locatiile';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = '';
$lng['location']['save_location'] = 'Salveaza locatia';

$lng['credits']['credits'] = 'Credite';
$lng['credits']['credit'] = 'Credit';
$lng['credits']['pending_credits'] = 'Credite in asteptare';
$lng['credits']['current_credits'] = 'Numar de credite';
$lng['credits']['one_credit_equals'] = 'Un credit inseamna';
$lng['credits']['credits_amount'] = 'Suma echivalenta creditelor';
$lng['credits']['buy_extra_credits'] = 'Cumpara credite';
$lng['credits']['credits_package'] = 'Pachet de credite';
$lng['credits']['select_package'] = 'Selecteaza pachetul de credite';
$lng['credits']['choose_package'] = 'Alege pachetul';
$lng['credits']['you_currently_have'] = 'In contul tau sunt ';
$lng['credits']['you_currently_have_no_credits'] = 'In acest moment nu ai credite ';
$lng['credits']['pay_using_credits'] = 'Plateste cu credite';
$lng['credits']['not_enough_credits'] = 'Nu sunt suficiente credite pentru aceasta plata!';
$lng['credits']['scredits'] = 'credite';
$lng['credits']['scredit'] = 'credit';



$lng['order_history']['credits_purchase'] = 'Cumparare credite';
$lng['order_history']['invalid_order'] = 'Comanda invalida!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Va rugam asteptati cat timp sunteti redirectat!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Va rugam sa <a href="::LOGIN_LINK::">va logati</a> pentru a putea vedea informatiile de contact!';
$lng['listing']['no_contact_information'] = 'No contact information available.';


$lng['navbar']['register_as'] = 'Inregistreaza-te ca';
$lng['listings']['all_ads'] = 'Toate anunturile';
$lng['listings']['refine'] = 'Filtreaza';
$lng['listings']['results'] = 'rezultatele';
$lng['listings']['photos'] = 'imagini';
$lng['listings']['user_details'] = 'Vezi detaliile utilizatorului';
$lng['listings']['back_to_details'] = 'Inapoi la anunt';

$lng['listings']['post_free_ad'] = 'Adauga anunt gratis';

$lng['users']['username_available'] = 'Numele de utilizator este liber!';
$lng['users']['username_not_available'] = 'Numele de utilizator nu este liber!';

$lng['general']['not_found'] = 'Pagina accesata nu a putut fi gasita!';
$lng['general']['full_version'] = 'Versiunea full';
$lng['general']['mobile_version'] = 'Versiunea pentru mobile';
$lng['failed'] = 'Nereusit';
$lng['remember_me'] = 'Tine-ma minte';

$lng['less_than_a_minute'] = 'mai putin de un minut';
$lng['minute'] = 'minut';
$lng['minutes'] = 'minute';
$lng['hour'] = 'ora';
$lng['hours'] = 'ore';
$lng['yesterday'] = 'Ieri';
$lng['day'] = 'zi';
$lng['days'] = 'zile';
$lng['ago_postfix'] = '';
$lng['ago_prefix'] = 'Acum ';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Astazi';
$lng['messages']['confirm_delete'] = 'Sunteti sigur ca doriti sa stergeti mesajul?';
$lng['listings']['change_category'] = 'Schimba categoria';
$lng['listings']['change_plan'] = 'Alege alt plan';
$lng['listings']['choose_active_subscription'] = 'Alege din abonamentele active';


$lng['useraccount']['request_removal'] = 'Cere stergerea contului';
$lng['useraccount']['request_removal_now'] = 'Cere stergerea contului acum!';
$lng['useraccount']['removal_verification_sent'] = 'Veti primi un mesaj continand un link de verificare. Accesati linkul pentru a confirma cererea de stergere a contului!';

$lng['contact']['message_waits_admin_aproval'] = 'Mesajul dvs va fi trimis dupa ce va fi verificat de catre administrator!';

$lng['general']['accept'] = 'Accepta';
$lng['general']['decline'] = 'Refuza';

$lng['general']['tax'] = 'Taxa';
$lng['general']['total_with_tax'] = 'Total cu taxa';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'In categorie';

$lng['users']['user_info'] = 'Informatii despre utilizator';
$lng['users']['store_info'] = 'Informatii despre dealer';
$lng['users']['user_listings'] = 'Toate anunturile';

$lng['login']['errors']['invalid_email_pass'] = 'E-mail sau parola invalida!';
$lng['general']['or'] = 'sau';
$lng['newad']['choose_a_new_plan'] = 'Alege un plan nou';

$lng['listings']['no_extra_options_available'] = 'Nu sunt extraoptiuni selectate!';

$lng['listings']['map'] = 'Harta';

$lng['users']['affiliate'] = 'Afiliat';
$lng['users']['affiliate_id'] = 'Id afiliat';
$lng['users']['affiliate_link'] = 'Link afiliat';
$lng['users']['affiliate_paypal_email'] = 'Cont PayPal atasat contului de afiliat';
$lng['users']['info']['affiliate_paypal_email'] = 'In acest cont PayPal veti primi banii castigati cu contul afiliat.';
$lng['users']['errors']['affiliate_paypal_email'] = 'Va rog introduceti contul de PayPal! In acest cont PayPal veti primi banii castigati cu contul afiliat!';

$lng['listings']['result'] = 'rezultat';

$lng['confirm_delete'] = 'Sunteti siguri ca vreti sa stergeti elementul selectat?';
$lng['confirm_delete_all'] = 'Sunteti siguri ca vreti sa stergeti elementele selectate?';

$lng['general']['show'] = 'Arata';
$lng['general']['on_a_page'] = 'pe o pagina';
$lng['general']['return'] = 'Inapoi';

$lng['login']['register_for_free'] = 'Inregistreaza-te gratis!';
$lng['general']['sent'] = 'Trimis';
$lng['general']['received'] = 'Primit';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Nu sunteti logat!';
$lng['newad']['or_post_without_account'] = 'sau posteaza anunt fara cont!';

$lng_comments['scomments'] = 'comentarii';
$lng_comments['scomment'] = 'comentariu';
$lng['general']['on'] = 'pentru';

$lng['affiliates']['last_payment'] = 'Ultima plata';
$lng['affiliates']['last_payment_date'] = 'Data ultimei plati';
$lng['affiliates']['next_payment_date'] = 'Data urmatoarei plati';
$lng['affiliates']['total_due'] = 'Total datorat';
$lng['affiliates']['total_payments'] = 'Total plati primite';
$lng['affiliates']['revenue_history'] = 'Istoric castiguri';
$lng['affiliates']['payments_history'] = 'Istoric plati';
$lng['affiliates']['pending_payment'] = 'Plata in asteptare';
$lng['affiliates']['released'] = 'Eliberata';
$lng['affiliates']['not_released'] = 'Ne-eliberata';
$lng['affiliates']['paid'] = 'Platita';
$lng['affiliates']['not_paid'] = 'Ne-platita';

$lng['general']['no_items'] = 'Nici un element';
$lng['useraccount']['amount_start'] = 'Suma de la';
$lng['useraccount']['amount_end'] = 'Suma pana la';
$lng['not_allowed_to_post_ads'] = 'Nu sunteti autorizati sa adaugati anunturi folosind acest cont!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Modificarile vor ramane in asteptare pana vor fi revizuite de un administrator!';

$lng['useraccount']['auction'] = 'Licitatie';
$lng['useraccount']['add_auction'] = 'Addauga licitatie';
$lng['useraccount']['remove_auction'] = 'Sterge licitatie';
$lng['useraccount']['auction_start_price'] = 'Pret start';
$lng['useraccount']['starts_at'] = 'Incepe de la';
$lng['useraccount']['no_bids'] = 'Nr oferte';
$lng['useraccount']['max_bid'] = 'Oferta max';
$lng['useraccount']['enable'] = 'Activeaza';
$lng['useraccount']['disable'] = 'Dezactiveaza';
$lng['useraccount']['error']['auction_start_price'] = 'Va rugam introduceti pretul de pornire!';
$lng['useraccount']['info']['auction_added'] = 'Lcitatia a fost adaugata cu succes!';
$lng['useraccount']['confirm_delete'] = 'Confirmati stergere?';
$lng['useraccount']['place_bid'] = 'Adauga oferta!';
$lng['useraccount']['login_to_bid'] = 'Va rugam sa va logati pentru a face o oferta!';
$lng['useraccount']['bid'] = 'Oferta';
$lng['useraccount']['message_to_seller'] = 'Mesaj catre vanzator';
$lng['useraccount']['error']['enter_bid'] = 'Introduceti oferta dvs!';
$lng['useraccount']['error']['incorrect_bid'] = 'Oferta invalida!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Oferta dvs este mai mica decat pretul de pornire!';
$lng['useraccount']['bid_placed'] = 'Oferta dvs a fost adaugata!';
$lng['useraccount']['placed_on'] = 'Adaugata la';
$lng['useraccount']['no_bids_for_auction'] = 'Nu sunt oferte pentru aceasta licitatie!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Click pentru vizualizare';
$lng['advanced_search']['clear_search'] = 'Sterge cautarea';
$lng['listings']['currency'] = 'Moneda';
$lng['listings']['show_phone'] = 'Arata telefonul';
$lng['listings']['make_public'] = 'Fa public';

$lng['advanced_search']['only_ads_with_auction'] = 'Numai anunturi cu licitatii';
$lng['security']['failed_login_attempts'] = 'Autentificari esuate repetate';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Contul dvs este inactiv! Veti primi in curand un SMS continand un cod de verificare. Introduceti codul in casuta de mai jos pentru a activa contul.';
$lng['users']['verification_code'] = 'Cod de verificare';
$lng['users']['waiting_sms_activation'] = 'Asteptand activare SMS';
$lng['listings']['info']['sms_verification'] = 'Anuntul dvs este inactiv! Veti primi in curand un SMS continand un cod de verificare. Introduceti codul in casuta de mai jos pentru a activa anuntul.';
$lng['listings']['activate_listing'] = 'Activeaza anunt';
$lng['listings']['errors']['sms_invalid_activation'] = 'Cheie de activare invalida!';
$lng['listings']['info']['listing_pending'] = 'Anuntul dvs este in asteptare pentru a fi verificat de administrator.';
$lng['listings']['info']['listing_activated'] = 'Anuntul dvs a fost activat!';
$lng['listings']['errors']['listing_already_active'] = 'Anuntul dvs este deja activ!';
$lng['listings']['errors']['invalid_phone'] = 'Numar de telefon invalid!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Valabil pentru';
$lng['newad']['available_until_expires'] = 'Valabil pana la expirarea anuntului';
$lng['newad']['view_info'] = 'Vezi info';
$lng['users']['errors']['phone_not_permitted'] = 'Acest numar de telefon nu este permis!';
$lng['invoice']['invoice'] = 'Factura';
$lng['invoice']['invoice_no'] = 'Nr. factura';
$lng['invoice']['bill_to'] = 'Facturat catre';
$lng['invoice']['qty'] = 'Cant';
$lng['invoice']['unit_price'] = 'Pret bucata';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Taxa';
$lng['invoice']['new_listing'] = 'Anunt nou';
$lng['invoice']['renew_listing'] = 'Reinnoire anunt';
$lng['invoice']['featured_eo'] = 'Optiune extra Anunt promovat';
$lng['invoice']['highlited_eo'] = 'Optiune extra Anunt evidentiat';
$lng['invoice']['priority_eo'] = 'Optiune extra Anunt prioritizat';
$lng['invoice']['video_eo'] = 'Optiune extra Anunt video';
$lng['invoice']['new_credits_pkg'] = 'Cumparare pachet de credite';
$lng['invoice']['store'] = 'Cumparare Pagina dealer';
$lng['invoice']['new_subscription'] = 'Cumparare abonament';
$lng['invoice']['renew_subscription'] = 'Reinnoire abonament';
$lng['weeks'] = 'Saptamani';
$lng['week'] = 'Saptamana';
$lng['months'] = 'Luni';
$lng['month'] = 'Luna';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Arata WhatsApp';
$lng['general']['to_top'] = 'Mergi sus';
$lng['quick_search']['location'] = 'Cod postal sau locatie';
$lng['listings']['see_all'] = 'Vezi toate &raquo;';
$lng['listings']['ads'] = 'anunturi';
$lng['listings']['user_since'] = 'Utilizator de la';
$lng['listings']['contact_details'] = 'Detalii contact';
$lng['listings']['favourite'] = 'Favorite';
$lng['listings']['manage_ad'] = 'Administrare anunt';
$lng['useraccount']['show_bids'] = 'Arata oferte';
$lng['listings']['report_abusive'] = 'Raporteaza';
$lng['listings']['enable_auction'] = 'Activeaza licitatie';
$lng['invoice']['download'] = 'Descarca factura';


$lng['register']['group'] = 'Tip cont';
$lng['register']['change_group'] = 'Schimba tipul de cont';
$lng['register']['select_group'] = 'Alege grup';

$lng['search']['private'] = 'Persoane private';
$lng['search']['professional'] = 'Firme';
$lng['search']['save_your_search2'] = 'Doresti sa salvezi cautarea?';
$lng['search']['save_search'] = 'Salveaza cautarea';
$lng['search']['refine_your_search'] = 'Filtre cautare';
$lng['search']['hide_refine'] = 'Ascunde filtre';

$lng['listings']['view_all_featured'] = 'Vezi toate promovate >>';
$lng['listings']['view_all_latest'] = 'Vezi toate recente >>';
$lng['listings']['view_all_auctions'] = 'Vezi toate licitatiile >>';
$lng['listings']['auctions'] = 'Licitatii';
$lng['listings']['view_ads_from'] = 'Vezi anunturi din';
$lng['location']['change_location'] = 'Schimba locatia';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Arata email';
$lng['listings']['error']['photo_mandatory'] = 'Incarcati cel putin o imagine pentru anunt!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Suna';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Telefon';
$lng['contact']['error']['phone_or_email_missing'] = 'Introduceti adresa de email sau numarul de telefon!';
$lng['general']['at'] = 'la';
$lng['general']['distance_from'] = 'distanta de';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'Mesajul contine cuvinte interzise!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'adaugat';
$lng['users']['repeat'] = 'Repeta';
$lng['users']['errors']['emails_dont_match'] = 'Adresele de email nu se potrivesc!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Nume utilizator sau email';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Click to chat';
$lng['invoice']['price_includes_vat'] = 'Pretul total include';
$lng['invoice']['vat'] = 'TVA';
$lng['general']['play'] = 'Play';
$lng['second'] = 'secunda';
$lng['seconds'] = 'secunde';
$lng['general']['you_must_wait'] = 'Trebuie sa astepti ';
$lng['general']['before_posting'] = ' inainte de a posta un nou anunt!';
$lng['listings']['select_category'] = '-- Alege o categorie --';


$lng['login']['errors']['account_not_activated'] = 'Contul tau nu este activ. Foloseste linkul de activare primit in email.';
$lng['login']['errors']['banned_account'] = 'Contul tau a fost banat!';
$lng['login']['errors']['suspended_account'] = 'Contul tau a fost suspendat pana la ';

$lng['general']['back_to_site'] = 'Inapoi la site';
// --------------- end 9.6 --------------------

// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Marcheaza URGENT';
$lng['order_history']['url'] = 'Link website';
$lng['listings']['pending_urgent'] = 'Urgent in asteptare';
$lng['listings']['pending_url'] = 'Link website in asteptare';
$lng['listings']['error']['invalid_url'] = 'Link website invalid';
$lng['listings']['urgent'] = 'Urgent';
$lng['listings']['url'] = 'Link website';
$lng['listings']['site_url'] = 'Introduceti linkul websiteului';
$lng['listings']['priorities_listings'] = 'Anunturi prioritizate';
$lng['listings']['urgent_listings'] = 'Anunturi urgente';
$lng['listings']['video_listings'] = 'Anunturi cu video';
$lng['listings']['url_listings'] = 'Anunturi cu link website';
$lng['listings']['view_example'] = 'Vezi exemplu';
// --------------- end 9.7 --------------------

// --------------- 9.8 --------------------
$lng['packages']['html_editor'] = 'Editor HTML';
$lng['iyzico']['invalid_transaction'] = 'Plata esuata!';
$lng['users']['errors']['account_already_activated'] = 'Contul a fost deja activat si asteapta verificarea de catre administrator!';
$lng['now'] = 'Acum';
$lng['listings']['updated'] = 'Actualizat';
$lng['listings']['auto_repost'] = 'Repostare automata';
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