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
$lng['navbar']['login'] = 'Entra';
$lng['navbar']['logout'] = 'Esci';
$lng['navbar']['recent_ads'] = 'Annunci recenti';
$lng['navbar']['register'] = 'Registrati';
$lng['navbar']['submit_ad'] = 'Pubblica annuncio';
$lng['navbar']['editad'] = 'Modifica annuncio';
$lng['navbar']['my_account'] = 'My Account';
$lng['navbar']['administrator_panel'] = 'Pannello amministratore';
$lng['navbar']['contact'] = 'Contatto';
$lng['navbar']['password_recovery'] = 'Recupera la Password';
$lng['navbar']['renew_listing'] = 'Rinnova annuncio';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Invia';
$lng['general']['search'] = 'Cerca';
$lng['general']['contact'] = 'Contatto';
$lng['general']['activeads'] = 'Annunci attivi';
$lng['general']['activead'] = 'Annuncio attivo';
$lng['general']['subcats'] = 'sottocategorie';
$lng['general']['subcat'] = 'sottocategoria';
$lng['general']['view_ads'] = 'Guarda annunci';
$lng['general']['back'] = '&laquo; Indietro';
$lng['general']['goto'] = 'Vai a';
$lng['general']['page'] = 'Pagina';
$lng['general']['of'] = 'di';
$lng['general']['other'] = 'Altro';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Aggiungi';
$lng['general']['delete_all'] = 'Cancella tutte le selezioni';
$lng['general']['action'] = 'Azione';
$lng['general']['edit'] = 'Modifica';
$lng['general']['delete'] = 'Cancella';
$lng['general']['total'] = 'Totale';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'Gratuito';
$lng['general']['not_authorized'] = 'Non sei autorizzato a visualizzare questa pagina!';
$lng['general']['access_restricted'] = 'L\'accesso a questa pagina è ristretto!';
$lng['general']['featured_ads'] = 'Annunci in vetrina';
$lng['general']['latest_ads'] = 'Ultimi annunci';
$lng['general']['quick_search'] = 'Ricerca rapida';
$lng['general']['go'] = 'Go';
$lng['general']['unlimited'] = 'Illimitato';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Un file con lo stesso nome già esite e non può essere sovrascritto!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Non hai i permessi per caricare file più grandi di ::MAX_FILE_UPLOAD_SIZE::K !'; // si prega di lasciare intatto il tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Le dimensioni delle immagini sono troppo grandi! Si prega di caricare un file con il massimo ::MAX_FILE_WIDTH::px e larghezza massima ::MAX_FILE_HEIGHT::px altezza !';  //si prega di lasciare intatto questo tag ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Il file non può essere caricato!';
$lng['images']['errors']['no_file'] = 'Si prega di scegliere un file da caricare!';
$lng['images']['errors']['no_folder'] = 'La cartella non esiste!';
$lng['images']['errors']['folder_not_writeable'] = 'La cartella è scrivibile!';
$lng['images']['errors']['file_type_not_accepted'] = 'Il tipo di file caricato non è un file immagine o non è supportato!';
$lng['images']['errors']['error'] = 'Si è verificato un errore durante il caricamento del file! L\'errore è stato: ::ERROR::'; // Lasciare intatto questo tag ::ERROR::
$lng['images']['errors']['no_thmb_folder'] = 'La miniatura nella cartella upload non esiste!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Miniatura cartella upload è scrivibile!';
$lng['images']['errors']['no_jpg_support'] = 'Nessun supporto JPG!';
$lng['images']['errors']['no_png_support'] = 'Nessun supporto PNG!';
$lng['images']['errors']['no_gif_support'] = 'Nessun supporto GIF!';
$lng['images']['errors']['jpg_create_error'] = 'Errore durante la creazione dell\'immagine JPG!';
$lng['images']['errors']['png_create_error'] = 'Errore durante la creazione dell\'immagine PNG!';
$lng['images']['errors']['gif_create_error'] = 'Errore durante la creazione dell\'immagine GIF!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Entra';
$lng['login']['logout'] = 'Esci';
$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Password';
$lng['login']['forgot_pass'] = 'Hai dimenticato la password?';
$lng['login']['click_here'] = 'Clicca qui';

$lng['login']['errors']['password_missing'] = 'Si prega di compilare la tua password!';
$lng['login']['errors']['username_missing'] = 'Si prega di compilare il tuo nome utente!';
$lng['login']['errors']['username_invalid'] = 'Il nome utente non è valido!';
$lng['login']['errors']['invalid_username_pass'] = 'La username e la password non sono validi!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Esci';
$lng['logout']['loggedout'] = 'Arrivederci!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrati';
$lng['users']['repeat_password'] = 'Ripeti Password';
$lng['users']['image_verification_info'] = 'Inserisci il testo mostrato nell\'immagine sottostante.<br />I caratteri possibili sono le lettere da A ad H in minuscolo<br /> ed i numeri da 1 a 9.';
$lng['users']['already_logged_in'] = 'Sei già loggato!';
$lng['users']['select'] = 'Seleziona';

$lng['users']['info']['activate_account'] = 'Una e-mail è stata inviata al tuo account. Si prega di segiure le indicazioni per attivare l\'account !';
$lng['users']['info']['welcome_user'] = 'Il tuo account è stato creato. Accedi <a href="login.php">qui</a> per il tuo account!';
$lng['users']['info']['awaiting_admin_verification'] = 'Il tuo account è sospeso ed in attesa di verifica. Vi verrà notificato via e-mail quando il vostro account è attivo.';
$lng['users']['info']['account_info_updated'] = 'Le informazioni sul tuo account sono state aggiornate!';
$lng['users']['info']['password_changed'] = 'La tua password è stata cambiata!';
$lng['users']['info']['account_activated'] = 'Il tuo account è stato attivato! Accedi <a href="login.php">qui</a> per il tuo account.';

$lng['users']['errors']['username_missing'] = 'Si prega di compilare la username!';
$lng['users']['errors']['invalid_username'] = 'Nome utente non valido!';
$lng['users']['errors']['username_exists'] = 'Questo nome utente esiste già! Si prega di accedere se si ha già un account!';
$lng['users']['errors']['email_missing'] = 'Si prega di inserire l\'indirizzo e-mail!';
$lng['users']['errors']['invalid_email'] = 'Indirizzo e-mail non valido!';
$lng['users']['errors']['passwords_dont_match'] = 'Password non valida!';
$lng['users']['errors']['email_exists'] = 'Questo indirizzo e-mail esiste già! Si prega di accedere se si ha già un account!';
$lng['users']['errors']['password_missing'] = 'Si prega di inserire la password!';
$lng['users']['errors']['invalid_validation_string'] = 'Stringa di convalida non valida!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Account o chiave di attivazione non valida! Ci contatti per maggiori delucidazioni!';
$lng['users']['errors']['account_already_active'] = 'Il tuo account è già attivo!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Annuncio';
$lng['listings']['category'] = 'Categoria';
$lng['listings']['package'] = 'piano';
$lng['listings']['price'] = 'Prezzo';
$lng['listings']['ad_description'] = 'Descrizione annuncio';
$lng['listings']['title'] = 'Titolo';
$lng['listings']['description'] = 'Descrizione';
$lng['listings']['image'] = 'Immagine';
$lng['listings']['words_left'] = 'parole';
$lng['listings']['enter_photos'] = 'Inserisci foto';
$lng['listings']['ad_information'] = 'Informazione annuncio';
$lng['listings']['free'] = 'Gratuito';
$lng['listings']['details'] = 'Dettagli';
$lng['listings']['stock_no'] = 'Q.tà';
$lng['listings']['location'] = 'Posizione';
$lng['listings']['contact_info'] = 'contatto';
$lng['listings']['email_seller'] = 'E-mail venditore';
$lng['listings']['no_recent_ads'] = 'Nessun annuncio recente';
$lng['listings']['no_ads'] = 'Non ci sono annunci per questa categoria!';
$lng['listings']['added_on'] = 'Invia a';
$lng['listings']['send_mail'] = 'Invia e-mail a gli utenti';
$lng['listings']['details'] = 'Dettagli';
$lng['listings']['user'] = 'User';
$lng['listings']['price'] = 'Prezzo';
$lng['listings']['confirm_delete'] = 'Sei sicuro di voler cancellare l\'annuncio?';
$lng['listings']['confirm_delete_all'] = 'Sei sicuro di voler cancellare gli annunci selezionati?';
$lng['listings']['all'] = 'Tutti gli annunci';
$lng['listings']['active_listings'] = 'inserzioni in corso';
$lng['listings']['pending_listings'] = 'Inserzione in attesa';
$lng['listings']['featured_listings'] = 'Inserzioni in vetrina';
$lng['listings']['expired_listings'] = 'Inserzione scaduta';
$lng['listings']['active'] = 'Attivo';
$lng['listings']['inactive'] = 'Inattivo';
$lng['listings']['pending'] = 'In attesa';
$lng['listings']['featured'] = 'In vetrina';
$lng['listings']['expired'] = 'scaduta';
$lng['listings']['order_by_date'] = 'Ordina per data';
$lng['listings']['order_by_category'] = 'Ordina per categoria';
$lng['listings']['order_by_make'] = 'Ordina per marca';
$lng['listings']['order_by_price'] = 'Ordina per prezzo';
$lng['listings']['order_by_views'] = 'Ordina per visita';
$lng['listings']['order_asc'] = 'Crescente';
$lng['listings']['order_desc'] = 'Decrescente';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visite';
$lng['listings']['date'] = 'Data';
$lng['listings']['no_listings'] = 'Q.tà annunci';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Questo annunci non esiste!';
$lng['listings']['mark_sold'] = 'Segna come Venduto';
$lng['listings']['mark_unsold'] = 'Deseleziona al momento della vendita';
$lng['listings']['sold'] = 'Venduto';
$lng['listings']['feature'] = 'Caratterisitica';
$lng['listings']['expired_on'] = 'Data di scadenza';
$lng['listings']['renew'] = 'Rinnova';
$lng['listings']['print_page'] = 'Stampa';
$lng['listings']['recommend_this'] = 'Condividi';
$lng['listings']['more_listings'] = 'Altre inserzioni di questo utente';
$lng['listings']['all_listings_for'] = 'Tutti gli annunci di';
$lng['listings']['free_category'] = 'Categoria Gratuita';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Sei sicuro di voler eliminare l\'immagine di questo annuncio?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Parole in eccesso! Puoi scrivere al massimo ::MAX:: parole'; // lasciare intatto il tag ::MAX::
$lng['listings']['errors']['badwords']='La vove contiene parole proibite! Si prega di rivedere il contenuto!';
$lng['listings']['errors']['title_missing']='Si prega di inserire un titolo per il suo annuncio!';
$lng['listings']['errors']['category_missing']='Scegliere una categoria!';
$lng['listings']['errors']['invalid_category']='categoria non valida!';
$lng['listings']['errors']['package_missing']='Scegliere un piano!';
$lng['listings']['errors']['invalid_package']='Piano non valido!';
$lng['listings']['errors']['content_missing']='Si prega di inserire il contenuto per il tuo annuncio!';
$lng['listings']['errors']['invalid_price']='Prezzo non valido!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Prezzo Min';
$lng['quick_search']['price_high'] = 'Prezzo Max';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Pubblica un nuovo annuncio';
$lng['useraccount']['browse_your_listings'] = 'Gestisci gli annunci';
$lng['useraccount']['modify_account_info'] = 'Info Account';
$lng['useraccount']['order_history'] = 'Ordini storici';
$lng['useraccount']['total_listings'] = 'Totale annunci';
$lng['useraccount']['total_views'] = 'Totale visite';
$lng['useraccount']['active_listings'] = 'Annunci attivi';
$lng['useraccount']['pending_listings'] = 'Annunci in attesa';
$lng['useraccount']['last_login'] = 'Ultimo accesso';
$lng['useraccount']['last_login_ip'] = 'Ultimo accesso IP';
$lng['useraccount']['expired_listings'] = 'Annunci scaduti';
$lng['useraccount']['statistics'] = 'Statistiche';
$lng['useraccount']['welcome'] = 'Benvenuto';
$lng['useraccount']['contact_name'] = 'Nome contatto';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Password';
$lng['useraccount']['repeat_password'] = 'Repeti Password';
$lng['useraccount']['change_password'] = 'Cambia Password';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'a';
$lng['advanced_search']['price_min'] = 'Min Prezzo';
$lng['advanced_search']['price_max'] = 'Max Prezzo';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Ordina per';
$lng['advanced_search']['sort_by_price'] = 'Ordina per prezzo';
$lng['advanced_search']['sort_by_date'] = 'Ordina per data';
$lng['advanced_search']['sort_by_make'] = 'Ordina per marca';
$lng['advanced_search']['sort_descendant'] = 'Ordinamento Crescente';
$lng['advanced_search']['sort_ascendant'] = 'Ordinamento Decrescente';
$lng['advanced_search']['only_ads_with_pic'] = 'Solo annunci con foto';
$lng['advanced_search']['no_results'] = 'Non sono stati trovati annunci corrispondenti alla tua ricerca!';
$lng['advanced_search']['multiple_ads_matching'] = 'Non ci sono ::NO_ADS:: inserzioni che corrispondono alla tua ricerca!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Non è un annuncio che corrisponde alla tua ricerca!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nome';
$lng['contact']['subject'] = 'Oggetto';
$lng['contact']['email'] = 'E-mail';
$lng['contact']['webpage'] = 'Pagina web';
$lng['contact']['comments'] = 'Commenti';
$lng['contact']['message_sent'] = 'Il tuo messaggio è stato inviato!';
$lng['contact']['sending_message_failed'] = 'Invio e-mail non riuscito!';
$lng['contact']['mailto'] = 'Invia a';

$lng['contact']['error']['name_missing'] = 'Inserisci il tuo nome!';
$lng['contact']['error']['subject_missing'] = 'Si prega di inserire l\'oggetto!';
$lng['contact']['error']['email_missing'] = 'Si prega di inserire la sua e-mail!';
$lng['contact']['error']['invalid_email'] = 'Indirizzo e-mail non valido!';
$lng['contact']['error']['comments_missing'] = 'Si prega di inserire il commento!';
$lng['contact']['error']['invalid_validation_number'] = 'Stringa convalida non valida!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Indirizzo e-mail';
$lng['password_recovery']['new_password'] = 'Nuova password';
$lng['password_recovery']['repeat_new_password'] = 'Ripeti nuova Password';
$lng['password_recovery']['invalid_key'] = 'Chiave non valida';

$lng['password_recovery']['email_missing'] = 'Inserisci il tuo indirizzo e-mail!';
$lng['password_recovery']['invalid_email'] = 'Indirizzo e-mail non valido';
$lng['password_recovery']['email_inexistent'] = 'Non esite nessun utente con questo indirizzo e-mail!';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Importo';
$lng['packages']['words'] = 'Parole';
$lng['packages']['days'] = 'Giorni';
$lng['packages']['pictures'] = 'Immagini';
$lng['packages']['picture'] = 'Immagine';
$lng['packages']['available'] = 'Disponibile';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Processore';
$lng['order_history']['amount'] = 'Importo';
$lng['order_history']['completed'] = 'Completato';
$lng['order_history']['not_completed'] = 'Non completato';
$lng['order_history']['ad_no'] = 'Annuncio id';
$lng['order_history']['date'] = 'Data';
$lng['order_history']['no_actions'] = 'Q.tà ordini registrati';
$lng['order_history']['order_by_date'] = 'Ordina pre data';
$lng['order_history']['order_by_amount'] = 'Ordina per importo';
$lng['order_history']['order_by_processor'] = 'Ordina per processore';
$lng['order_history']['description'] = 'Descrizione';
$lng['order_history']['newad'] = 'Nuovo annuncio'; 
$lng['order_history']['renew'] = 'Rinnova'; 
$lng['order_history']['featured'] = 'Caratteristica annunci'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ordina per data';
$lng['order']['price'] = 'Ordina per prezzo';
$lng['order']['title'] = 'Ordina per titolo';
$lng['order']['desc'] = 'Decrescente';
$lng['order']['asc'] = 'Crescente';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Condividi annuncio';
$lng['recommend']['your_name'] = 'Il tuo nome';
$lng['recommend']['your_email'] = 'La tua e-mail';
$lng['recommend']['friend_name'] = 'Nome amico';
$lng['recommend']['friend_email'] = 'E-mail amico';
$lng['recommend']['message'] = 'Messaggio per il tuo amico';


$lng['recommend']['error']['your_name_missing'] = 'Inserisci il tuo nome!';
$lng['recommend']['error']['your_email_missing'] = 'Inserisci la tua e-mail!';
$lng['recommend']['error']['friend_name_missing'] = 'Inserisci il nome del tuo amico!';
$lng['recommend']['error']['friend_email_missing'] = 'Inserisci la e-mail del tuo amico!';
$lng['recommend']['error']['invalid_email'] = 'Indirizzo e-mail non valido';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Annunci';
$lng['stats']['general'] = 'Generale';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Iscriviti';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Stato';
$lng['general']['favourites'] = 'Preferiti';
$lng['general']['as'] = 'come';
$lng['general']['view'] = 'Visualizza';
$lng['general']['none'] = 'Nessuno';
$lng['general']['yes'] = 'si';
$lng['general']['no'] = 'no';
$lng['general']['next'] = 'Successivo &raquo;';
$lng['general']['finish'] = 'Fine';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Rimuovi';
$lng['general']['previous_page'] = '&laquo; Precedente';
$lng['general']['next_page'] = 'Successivo &raquo;';
$lng['general']['items'] = 'auto';
$lng['general']['active'] = 'Attivo';
$lng['general']['inactive'] = 'Inattivo';
$lng['general']['expires'] = 'Scade il';
$lng['general']['available'] = 'Disponibile';
$lng['general']['cancel'] = 'Annulla';
$lng['general']['never'] = 'Mai';
$lng['general']['asc'] = 'Crescente';
$lng['general']['desc'] = 'Decrescente';
$lng['general']['pending'] = 'In attesa';
$lng['general']['upload'] = 'Carica';
$lng['general']['processing'] = 'In elaborazione, attendere prego ... ';
$lng['general']['help'] = 'Aiuto';
$lng['general']['hide'] = 'Nascondi';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Questa è una versione limitata. Non ti è consentito di modificare alcune impostazioni!';
$lng['general']['check_all'] = 'Seleziona tutti';
$lng['general']['uncheck_all'] = 'Deseleziona tutti';
$lng['general']['all'] = 'Tutti';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Pagina concessionario';
$lng['users']['store_banner'] = 'Banner pagina concessionario';
$lng['users']['waiting_mail_activation'] = 'In attesa di attivazione e-mail.';
$lng['users']['waiting_admin_activation'] = 'In attesa di approvazione.';
$lng['users']['no_such_id'] = 'Questo utente non esiste.';

$lng['users']['info']['store_banner'] = 'L\'immagine che verrà usata come immagine in alto per la pagina rivenditore.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Annunci offensivo';
$lng['listings']['report_reason'] = 'Report problema';
$lng['listings']['meta_info'] = 'Meta informazioni';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Descrizione';
$lng['listings']['not_approved'] = 'Non approvato';
$lng['listings']['approve'] = 'Approvato';
$lng['listings']['choose_payment_method'] = 'Scegli il metodo di pagamento';

$lng['listings']['choose_category'] = 'Scegli la categoria';
$lng['listings']['choose_plan'] = 'Scegli il piano';
$lng['listings']['enter_ad_details'] = 'Inserisci i dettagli dell\'annuncio';
$lng['listings']['ad_details'] = 'Dettagli inserzione';
$lng['listings']['add_photos'] = 'Aggiungi immagini';
$lng['listings']['ad_photos'] = 'Immagini annuncio';
$lng['listings']['edit_photos'] = 'Modifica foto';
$lng['listings']['extra_options'] = 'Opzioni extra';
$lng['listings']['review'] = 'Rivedi annuncio';
$lng['listings']['finish'] = 'Fine';
$lng['listings']['next_step'] = 'Prossimo passo &raquo;';
$lng['listings']['included'] = 'Incluso';
$lng['listings']['finalize'] = 'Concludi';
$lng['listings']['zip'] = 'CAP';
$lng['listings']['add_to_favourites'] = 'Aggiungi ai preferiti';
$lng['listings']['confirm_add_to_fav'] = 'Attenzione! Lei non è loggato! L\'aggiunta ai preferiti sarà temporanea!';
$lng['listings']['add_to_fav_done'] = 'L\'annuncio è stato inserito nel tuo elenco dei preferiti!';
$lng['listings']['confirm_delete_favourite'] = 'Sei sicuro di voler eliminare questo annuncio preferito?';
$lng['listings']['no_favourites'] = 'Annunci preferiti';
$lng['listings']['extra_options'] = 'Opzioni extra';
$lng['listings']['highlited'] = 'Evidenziati';
$lng['listings']['priority'] = 'Priorità';
$lng['listings']['video'] = 'Annunci video';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video in attesa';
$lng['listings']['video_code'] = 'Codice video';
$lng['listings']['total'] = 'Totale';
$lng['listings']['approve_ad'] = 'Approva annuncio';
$lng['listings']['finalize_later'] = 'Concludi dopo';
$lng['listings']['click_to_upload'] = 'Clicca per caricare';
$lng['listings']['files_uploaded'] = ' Foto caricate in totale ';
$lng['listings']['allowed'] = ' foto consentite!';
$lng['listings']['limit_reached'] = 'Limite di foto raggiunto!';
$lng['listings']['edit_options'] = 'Modifica opzioni';
$lng['listings']['view_store'] = 'Vedi pagina concessionario';
$lng['listings']['edit_ad_options'] = 'Modifica opzioni annuncio';
$lng['listings']['no_extra_options_selected'] = 'Nessuna opzione extra selezionata!';
$lng['listings']['highlited_listings'] = 'Annunci evidenziati';
$lng['listings']['for_listing'] = 'per la lista n. ';
$lng['listings']['expires_on'] = 'Scadenza';
$lng['listings']['expired_on'] = 'Scaduta';
$lng['listings']['pending_ad'] = 'Annunci in attesa';
$lng['listings']['pending_highlited'] = 'Evidenziati in attesa';
$lng['listings']['pending_featured'] = 'Vetrina in attesa';
$lng['listings']['pending_priority'] = 'Priorità in attesa';
$lng['listings']['enter_coupon'] = 'Inserisci il codice di sconto';
$lng['listings']['discount'] = 'Sconto';
$lng['listings']['select_plan'] = 'Seleziona piano';
$lng['listings']['pending_subscription'] = 'In attesa di abbonamento';
$lng['listings']['remove_favourite'] = 'Rimuovi dai preferiti';

$lng['listings']['order_up'] = 'Ordina sù';
$lng['listings']['order_down'] = 'Ordina giù';

$lng['listings']['errors']['invalid_youtube_video'] = 'Video Youtube non valido!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Iscriviti';
$lng['useraccount']['no_package'] = 'Nessun piano di annunci';
$lng['useraccount']['packages'] = 'Piani';
$lng['useraccount']['date_start'] = 'Data di inizio';
$lng['useraccount']['date_end'] = 'Data di fine';
$lng['useraccount']['remaining_ads'] = 'Annunci rimanenti';
$lng['useraccount']['account_type'] = 'Tipo di account';
$lng['useraccount']['unfinished_listings'] = 'Annunci incompiuti';
$lng['useraccount']['confirm_delete_subscription'] = 'Sei sicuro di voler rimuovere questo abbonamento?';
$lng['useraccount']['buy_store'] = 'Acquista pagina concessionario';
$lng['useraccount']['bulk_uploads'] = 'Quantità di uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abbonamento';
$lng['packages']['ads'] = 'Annunci';
$lng['packages']['name'] = 'Nome';
$lng['packages']['details'] = 'Dettagli';
$lng['packages']['no_ads'] = 'Numero di annunci';
$lng['packages']['subscription_time'] = 'Abbonamento tempo';
$lng['packages']['no_pictures'] = 'Immagini consentite';
$lng['packages']['no_words'] = 'Numero di parole';
$lng['packages']['ads_availability'] = 'Annunci disponibili';
$lng['packages']['featured'] = 'Vetrina';
$lng['packages']['highlited'] = 'Evideziati';
$lng['packages']['priority'] = 'Priorità';
$lng['packages']['video'] = 'Annunci video';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abbonamento';
$lng['order_history']['post_listing'] = 'Post Annunci';
$lng['order_history']['renew_listing'] = 'Annunci rinnovati';
$lng['order_history']['feature_listing'] = 'Annunci in vetrina';
$lng['order_history']['subscribe_to_package'] = 'Sottoscrizione piano';
$lng['order_history']['complete_payment'] = 'Pagamenti completati';
$lng['order_history']['complete_payment_for'] = 'Pagamneti completati per';
$lng['order_history']['details'] = 'Dettagli';
$lng['order_history']['subscription_no'] = 'N. abbonamenti';
$lng['order_history']['highlited'] = 'Annunci evidenziati';
$lng['order_history']['priority'] = 'Priorità';
$lng['order_history']['video'] = 'Annunci video';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Scegliere un piano!';
$lng['buy_package']['error']['choose_processor'] = 'Scegliere il tipo di pagamento!';
$lng['buy_package']['error']['invalid_processor'] = 'Elaborazione dei pagamenti non valido!';
$lng['buy_package']['error']['invalid_package'] = 'Piano non valido!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transazione PayPal non valida!';
$lng['2co']['invalid_transaction'] = 'Transazione 2co non valida!';
$lng['moneybookers']['invalid_transaction'] = 'Transazione moneybookers non valida!';
$lng['authorize']['invalid_transaction'] = 'Transazione authorize non valida!';
$lng['manual']['invalid_transaction'] = 'Transazione non valida!';

$lng['paypal']['transaction_canceled'] = 'Transazione Paypal annullata!';
$lng['2co']['transaction_canceled'] = 'Transazione 2co annullata!';
$lng['moneybookers']['transaction_canceled'] = 'Transazione moneybookers annullata!';
$lng['authorize']['transaction_canceled'] = 'Transazione authorize annullata!';
$lng['manual']['transaction_canceled'] = 'Transazione annullata!';
$lng['epay']['transaction_canceled'] = 'Transazione epay annullata!';

$lng['payments']['transaction_already_processed'] = 'L\'operazione è già stato elaborata!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Approva abbonamento';
$lng['subscribe']['payment_method'] = 'Metodo di pagamento';
$lng['subscribe']['renew_subscription'] = 'Rinnova abbonamento';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copia e-mail: ';
$lng['bcc_mails']['from'] = 'Da: ';
$lng['bcc_mails']['to'] = 'a: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Stato caricamneto collettivo: ';
$lng['ie']['successfully'] = 'Annunci aggiunto con successo';
$lng['ie']['failed'] = 'Fallito';
$lng['ie']['uploaded_listings'] = 'Annunci caricati:';
$lng['ie']['errors']['upload_import_file'] = 'Si prega di caricare il file da importare da!';
$lng['ie']['errors']['incorrect_file_type'] = 'tipo di file non corretto! Il tipo di file deve essere: ';
$lng['ie']['errors']['could_not_open_file'] = 'Impossibile aprire il file!';
$lng['ie']['errors']['choose_categ'] = 'Scegliere una categoria!';
$lng['ie']['errors']['could_not_save_file'] = 'file impossibile da caricare: ';
$lng['ie']['errors']['required_field_missing'] = 'Campi obbligatori mancanti: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Numero elementi errati: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Scegli il concessionario';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Area di ricerca';
$lng['areasearch']['all_locations'] = 'Tutte le località';
$lng['areasearch']['exact_location'] = 'Ubicazione esatta';
$lng['areasearch']['around'] = 'intorno';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Si';
$lng['general']['No'] = 'No';
$lng['general']['or'] = 'o';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'da';
$lng['general']['close_window'] = 'Chiudi';
$lng['general']['more_options'] = 'Più opzioni &raquo;';
$lng['general']['less_options'] = '&laquo; Meno opzioni';
$lng['general']['send'] = 'Invia';
$lng['general']['save'] = 'Salva';
$lng['general']['for'] = 'per';
$lng['general']['to'] = 'a';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Segna come affitto';
$lng['listings']['mark_unrented'] = 'Deseleziona come affitto';
$lng['listings']['rented'] = 'Affitto';
$lng['listings']['your_info'] = 'Le tue informazioni';
$lng['listings']['email'] = 'Il tuo indirizzo e-mail';
$lng['listings']['name'] = 'Il tuo nome';
$lng['listings']['listing_deleted'] = 'Il tuo annuncio è stato eliminato!';
$lng['listings']['post_without_login'] = 'Commenta senza registrarti';
$lng['listings']['waiting_activation'] = 'Attesa per l\'attivazione del';
$lng['listings']['waiting_admin_approval'] = 'In attesa di approvazione';
$lng['listings']['dont_need_account'] = 'Non è necessario un account! Inserisci il tuo annuncio senza effettuare il login!';
$lng['listings']['post_your_ad'] = 'Pubblica annuncio!';
$lng['listings']['posted'] = 'Inviato';
$lng['listings']['select_subscription'] = 'Seleziona abbonamento';
$lng['listings']['choose_subscription'] = 'Scegli abbonamento';
$lng['listings']['inactive_listings'] = 'Annuncio non attivo';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Filtra la ricerca';
$lng['search']['refine_by_keyword'] = 'Filtra con le parole chiave';
$lng['search']['showing'] = 'Risultati';
$lng['search']['more'] = 'Più ...';
$lng['search']['less'] = 'Meno ...';
$lng['search']['search_for'] = 'Cerca per';
$lng['search']['save_your_search'] = 'Salva la ricerca';
$lng['search']['save'] = 'Salva';
$lng['search']['search_saved'] = 'La tua ricerca è stata slavata!';
$lng['search']['must_login_to_save_search'] = 'Necessario accedere al tuo account per salvare la ricerca !';
$lng['search']['view_search'] = 'Visualizza ricerca';
$lng['search']['all_categories'] = 'Tutte le categorie';
$lng['search']['more_than'] = 'più di';
$lng['search']['less_than'] = 'meno di';

$lng['search']['error']['cannot_save_empty_search'] = 'La tua ricerca non contiene termini tali da poterla salvare!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Ricerche salvate';
$lng['useraccount']['view_saved_searches'] = 'Vedi ricerche salvate';
$lng['useraccount']['no_saved_searches'] = 'Nessuna ricerca salvata';
$lng['useraccount']['recurring'] = 'ricorrenti';
$lng['useraccount']['date_renew'] = 'Data rinnovato';
$lng['useraccount']['logged_in_as'] = 'Sei autenticato come';
$lng['useraccount']['subscriptions'] = 'Iscrizioni';

$lng['users']['activate_account'] = 'Attiva account';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Aggiungi abbonamento';
$lng['subscriptions']['package'] = 'Abbonamento';
$lng['subscriptions']['remaining_ads'] = 'Annunci rimanenti';
$lng['subscriptions']['recurring'] = 'ricorrrenti';
$lng['subscriptions']['date_start'] = 'Data inizio';
$lng['subscriptions']['date_end'] = 'Data fine';
$lng['subscriptions']['date_renew'] = 'Data rinnovo';
$lng['subscriptions']['confirm_delete'] = 'Sei sicuro di voler cancellare l\'abbonamento?';
$lng['subscriptions']['no_subscriptions'] = 'Nessuna iscrizione';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Non hai ancora il tuo account?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Abilita pagamenti ricorrenti per la sottoscrizione';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'I seguenti campi obbligatori sono mancanti: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Acquista pagina concessionario';


$lng['images']['errors']['max_photos'] = 'Upload max foto!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Avviso e-mail';
$lng['alerts']['email_alerts'] = 'Avvisi e-mail';
$lng['alerts']['no_alerts'] = 'Nessun avviso e-mail';
$lng['alerts']['view_email_alerts'] = 'Visualizza i tuoi avvisi e-mail';
$lng['alerts']['send_email_alerts'] = 'Invia avvisi e-mail';
$lng['alerts']['immediately'] = 'Immediatamente';
$lng['alerts']['daily'] = 'Al giorno';
$lng['alerts']['weekly'] = 'Settimanale';
$lng['alerts']['your_email'] = 'Il tuo indirizzo e-mail';
$lng['alerts']['create_alert'] = 'Crea avviso';
$lng['alerts']['email_alert_info'] = 'Riceverai novità sulla tua e-mail, per la ricerca che hai fatto.';
$lng['alerts']['alert_added'] = 'La tua segnalazione è stata creata!';
$lng['alerts']['alert_added_activate'] = 'Verrà inviata una e-mail all\'indirizzo <b>::EMAIL::</b>. Segui le istruzioni per attivare il tuo servizio di Avviso'; // Non eliminare ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Cerca in';
$lng['alerts']['keyword'] = 'parole chiave';
$lng['alerts']['frequency'] = 'Frequenza avvisi';
$lng['alerts']['alert_activated'] = 'Il tuo avviso è stato attivato! Troveremo al più presto quello che cerchi.';
$lng['alerts']['alert_unsubscribed'] = 'La tua segnalazione è stata eliminata!';
$lng['alerts']['started_on'] = 'È iniziato il';
$lng['alerts']['no_terms_searched'] = 'Non ci sono termini fissati per questa ricerca!';
$lng['alerts']['no_listings'] = 'Nessun annuncio per questo avviso!';

$lng['alerts']['error']['email_required'] = 'Inserisci il tuo indirizzo e-mail per questa segnalazione!';
$lng['alerts']['error']['invalid_email'] = 'Indirizzo e-mail non valido!';
$lng['alerts']['error']['invalid_frequency'] = 'Frequenza alert non valida!';
$lng['alerts']['error']['login_required'] = 'Si prega di <a href="::LINK::">loggarsi</a> per ricevere gli avvisi!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Si prega di scegliere almeno una chiave di ricerca ad eccezione della categoria!';
$lng['alerts']['error']['invalid_confirmation'] = 'Conferma avviso non valida!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Sottoscrizione richiesta non valida!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calcolo finanziamento';
$lng_loancalc['sale_price'] = 'Prezzo di vendita';
$lng_loancalc['down_payment'] = 'Acconto';
$lng_loancalc['trade_in_value'] = 'Scambi in termini di valore';
$lng_loancalc['loan_amount'] = 'Importo del prestito';
$lng_loancalc['sales_tax'] = 'Imposta sulle vendite';
$lng_loancalc['interest_rate'] = 'Tasso di interesse';
$lng_loancalc['loan_term'] = 'Prestito a lungo termine';
$lng_loancalc['months'] = 'Mese';
$lng_loancalc['years'] = 'anno';
$lng_loancalc['or'] = '0';
$lng_loancalc['monthly_payment'] = 'Pagamento mensile';
$lng_loancalc['calculate'] = 'Calcola';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Commenti';
$lng_comments['make_a_comment'] = 'Fare un commento';
$lng_comments['login_to_post'] = 'Si prega di <a href="::LOGIN_LINK::">laggarsi</a> per fare un commento.';

$lng_comments['name'] = 'Nome';
$lng_comments['email'] = 'E-mail';
$lng_comments['website'] = 'Sito web';
$lng_comments['submit_comment'] = 'Pubblica commento';

$lng_comments['error']['name_missing'] = 'Inserisci il tuo nome!';
$lng_comments['error']['content_missing'] = 'Inserisci il tuo commento!';
$lng_comments['error']['website_missing'] = 'Inserisci il tuo sito!';
$lng_comments['error']['email_missing'] = 'Inserisci la tua e-mail!';
$lng_comments['error']['listing_id_missing'] = 'Commento non valido!';

$lng_comments['error']['invalid_email'] = 'Indirizzo e-mail non valido!';
$lng_comments['error']['invalid_website'] = 'Indirizzo web non valido!';
$lng_comments['errors']['badwords'] = 'Il tuo commento contiene parole proibite! Modifica il tuo messaggio!';

$lng_comments['info']['comment_added'] = 'Il tuo commento è stato aggiunto! Clicca <a id="newad">qui</a> se si desidera aggiungere un altro commento.';
$lng_comments['info']['comment_pending'] = 'Il tuo commento è in attesa di verifica.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Successivo &raquo;';
$lng['tb']['prev'] = '&laquo; Precedente';
$lng['tb']['close'] = 'Chiudi';
$lng['tb']['or_esc'] = 'o ESC Key';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Messaggi';
$lng['messages']['confirm_delete_all'] = 'Sei sicuro di voler eliminare i messaggi selezionati?';
$lng['messages']['listing'] = 'Annuncio';
$lng['messages']['no_messages'] = 'Nessun messaggio';
$lng['general']['reply'] = 'Rispondi al messaggio';
$lng['messages']['message'] = 'Messaggio';
$lng['messages']['from'] = 'Da';
$lng['messages']['to'] = 'Per';
$lng['messages']['on'] = 'A';
$lng['messages']['view_thread'] = 'Visualizza discussione';
$lng['messages']['started_for_listing'] = 'Iniziato per annuncio';
$lng['messages']['view_complete_message'] = 'Visualizza messaggio completo qui';
$lng['messages']['message_history'] = 'Cronologia messaggi';
$lng['messages']['yourself'] = 'Te';
$lng['messages']['report_spam'] = 'Segnala come spam';
$lng['messages']['reported_as_spam'] = 'Segnalato come spam';
$lng['messages']['confirm_report_spam'] = 'Sei sicuro di voler segnalare questo messaggio  come spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Questo id annuncio non è valido';
$lng['listings']['show_map'] = 'Visualizza Mappa';
$lng['listings']['hide_map'] = 'Nascondi mappa';
$lng['listings']['see_full_listing'] = 'Vedi annuncio completo';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'L\'annuncio è stata rimossa  dalla  lista dei  preferiti!';
$lng['search']['high_no_results'] = 'Il numero di risultati per la tua ricerca è molto elevato. I risultati elencati sono limitati  ai più rilevanti dei risultati. Si prega di raffinare ulteriormente la ricerca, al fine di diminuire il numero di risultati e di ottenere risultati più pertinenti!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Questo indirizzo e-mail non è permesso!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Non siete autorizzati a utilizzare questo  abbonamento  più, il numero massimo di utilizzo è raggiunto!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Scegli la locazione';
$lng['location']['choose'] = 'Scegli';
$lng['location']['change'] = 'Cambiare';
$lng['location']['all_locations'] = 'Tutti i luoghi';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = '';
$lng['location']['save_location'] = 'Salvare luogo';

$lng['credits']['credits'] = 'Crediti';
$lng['credits']['credit'] = 'Credito';
$lng['credits']['pending_credits'] = 'Crediti in sospeso';
$lng['credits']['current_credits'] = 'Crediti correnti';
$lng['credits']['one_credit_equals'] = 'Un credito pari a ';
$lng['credits']['credits_amount'] = 'Crediti importo';
$lng['credits']['buy_extra_credits'] = 'Acquistare crediti extra';
$lng['credits']['credits_package'] = 'Pacchetto crediti';
$lng['credits']['select_package'] = 'Selezionare pacchetto crediti';
$lng['credits']['choose_package'] = 'Scegli il pacchetto';
$lng['credits']['you_currently_have'] = 'Attualmente si dispone ';
$lng['credits']['you_currently_have_no_credits'] = 'Al momento non hai crediti ';
$lng['credits']['pay_using_credits'] = 'Pagare con crediti';
$lng['credits']['not_enough_credits'] = 'Crediti insufficienti per il pagamento!';
$lng['credits']['scredits'] = 'crediti';
$lng['credits']['scredit'] = 'credito';



$lng['order_history']['credits_purchase'] = 'Acquisto crediti';
$lng['order_history']['invalid_order'] = 'Ordine non valido!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Per favore attendi che sei stato reindirizzato!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Per favore <a href="::LOGIN_LINK::">entra</a> per visualizzare le informazioni di contatto!';
$lng['listing']['no_contact_information'] = 'Informazioni di contatto non disponibile';


$lng['navbar']['register_as'] = 'Registrarsi come';
$lng['listings']['all_ads'] = 'Tutti gli annunci';
$lng['listings']['refine'] = 'Raffinare';
$lng['listings']['results'] = 'risultati';
$lng['listings']['photos'] = 'foto';
$lng['listings']['user_details'] = 'Vedi dettagli dell\'utente';
$lng['listings']['back_to_details'] = 'Torna ai dettagli dell\'annuncio';

$lng['listings']['post_free_ad'] = 'Inserisci un annuncio gratuito';

$lng['users']['username_available'] = 'Il nome utente � disponibile!';
$lng['users']['username_not_available'] = 'Il nome utente non � disponibile!';

$lng['general']['not_found'] = 'La pagina richiesta non � stata trovata!';
$lng['general']['full_version'] = 'Versione completa';
$lng['general']['mobile_version'] = 'Versione mobile';
$lng['failed'] = 'Mancato';
$lng['remember_me'] = 'Ricordami';

$lng['less_than_a_minute'] = 'meno di un minuto fa';
$lng['minute'] = 'minuto';
$lng['minutes'] = 'minuti';
$lng['hour'] = 'ora';
$lng['hours'] = 'ore';
$lng['yesterday'] = 'Ieri';
$lng['day'] = 'giorno';
$lng['days'] = 'giorni';
$lng['ago_postfix'] = ' fa';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Oggi';
$lng['messages']['confirm_delete'] = 'Sei sicuro di voler eliminare questo messaggio?';
$lng['listings']['change_category'] = 'Cambia categoria';
$lng['listings']['change_plan'] = 'Selezionare un piano diverso';
$lng['listings']['choose_active_subscription'] = 'Scegliere tra le vostre sottoscrizioni attive';


$lng['useraccount']['request_removal'] = 'Richiedere la rimozione conto';
$lng['useraccount']['request_removal_now'] = 'Richiedere la rimozione ora!';
$lng['useraccount']['removal_verification_sent'] = 'Riceverai una e-mail contenente un link di verifica. Si prega di fare clic sul link per confermare la richiesta di rimozione!';

$lng['contact']['message_waits_admin_aproval'] = 'Il tuo messaggio sar� consegnato una volta approvati da un amministratore!';

$lng['general']['accept'] = 'Accettare';
$lng['general']['decline'] = 'Declino';

$lng['general']['tax'] = 'Tasse';
$lng['general']['total_with_tax'] = 'Totale con tasse';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'Nella categoria';

$lng['users']['user_info'] = 'Informazioni utente';
$lng['users']['store_info'] = 'Informazioni negozio';
$lng['users']['user_listings'] = 'Tutti gli annunci';

$lng['login']['errors']['invalid_email_pass'] = 'E-mail o password non validi!';
$lng['general']['or'] = 'o';
$lng['newad']['choose_a_new_plan'] = 'Scegliere un nuovo piano';

$lng['listings']['no_extra_options_available'] = 'Non ci sono opzioni extra disponibili!';

$lng['listings']['map'] = 'Mappa';

$lng['users']['affiliate'] = 'Affiliato';
$lng['users']['affiliate_id'] = 'Affiliato id';
$lng['users']['affiliate_link'] = 'Link affiliato';
$lng['users']['affiliate_paypal_email'] = 'Conto affiliato Paypal';
$lng['users']['info']['affiliate_paypal_email'] = 'Riceverai qui il denaro guadagnato con il tuo account di affiliazione';
$lng['users']['errors']['affiliate_paypal_email'] = 'Inserisci il tuo conto PayPal! Riceverai qui il denaro guadagnato con il tuo account di affiliazione';

$lng['listings']['result'] = 'risultato';

$lng['confirm_delete'] = 'Sei sicuro di voler eliminare l\'elemento selezionato?';
$lng['confirm_delete_all'] = 'Sei sicuro di voler cancellare gli elementi selezionati?';

$lng['general']['show'] = 'Mostrare';
$lng['general']['on_a_page'] = 'su una pagina';
$lng['general']['return'] = 'Ritorno';

$lng['login']['register_for_free'] = 'Registrati gratis!';
$lng['general']['sent'] = 'Inviato';
$lng['general']['received'] = 'Ricevuto';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Non sei loggato!';
$lng['newad']['or_post_without_account'] = 'o continuare la pubblicazione senza un account!';

$lng_comments['scomments'] = 'commenti';
$lng_comments['scomment'] = 'commento';
$lng['general']['on'] = 'su';

$lng['affiliates']['last_payment'] = 'Ultimo pagamento';
$lng['affiliates']['last_payment_date'] = 'Ultima data di pagamento';
$lng['affiliates']['next_payment_date'] = 'Prossima data di pagamento';
$lng['affiliates']['total_due'] = 'Totale dovuto';
$lng['affiliates']['total_payments'] = 'Il totale dei pagamenti ricevuti';
$lng['affiliates']['revenue_history'] = 'Storia entrate';
$lng['affiliates']['payments_history'] = 'Storia pagamenti';
$lng['affiliates']['pending_payment'] = 'Pagamento in attesa';
$lng['affiliates']['released'] = 'Rilasciato';
$lng['affiliates']['not_released'] = 'Non rilasciato';
$lng['affiliates']['paid'] = 'Pagato';
$lng['affiliates']['not_paid'] = 'Non pagato';

$lng['general']['no_items'] = 'Non ci sono articoli';
$lng['useraccount']['amount_start'] = 'Importo da';
$lng['useraccount']['amount_end'] = 'Importo da';
$lng['not_allowed_to_post_ads'] = 'Non ti � permesso di pubblicare annunci di questo utente!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Le modifiche apportate saranno sospese in attesa di essere esaminato da un amministratore!';

$lng['useraccount']['auction'] = 'Asta';
$lng['useraccount']['add_auction'] = 'Aggiungere asta';
$lng['useraccount']['remove_auction'] = 'Rimuovere l\'asta';
$lng['useraccount']['auction_start_price'] = 'Prezzo iniziare';
$lng['useraccount']['starts_at'] = 'Comincia a';
$lng['useraccount']['no_bids'] = 'Numero di offerte';
$lng['useraccount']['max_bid'] = 'Offerta massima';
$lng['useraccount']['enable'] = 'Attivare';
$lng['useraccount']['disable'] = 'Disattivare';
$lng['useraccount']['error']['auction_start_price'] = 'Inserisci asta prezzo di partenza!';
$lng['useraccount']['info']['auction_added'] = 'L\'asta � stata inserita correttamente';
$lng['useraccount']['confirm_delete'] = 'Confermare eliminazione?';
$lng['useraccount']['place_bid'] = 'Inserire la tua offerta!';
$lng['useraccount']['login_to_bid'] = 'Prego accedere per inserire la tua offerta!';
$lng['useraccount']['bid'] = 'Offerta';
$lng['useraccount']['message_to_seller'] = 'Messaggio al venditore';
$lng['useraccount']['error']['enter_bid'] = 'Inserisci la tua offerta!';
$lng['useraccount']['error']['incorrect_bid'] = 'Offerta non valida!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'L\'offerta � pi� piccolo di prezzo di partenza!';
$lng['useraccount']['bid_placed'] = 'La tua offerta � stata posta!';
$lng['useraccount']['placed_on'] = 'Posto su';
$lng['useraccount']['no_bids_for_auction'] = 'Non ci sono offerte per questa asta!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Clicca per vedere';
$lng['advanced_search']['clear_search'] = 'Elimina ricerca';
$lng['listings']['currency'] = 'Moneta';
$lng['listings']['show_phone'] = 'Mostra telefono';
$lng['listings']['make_public'] = 'Rendere pubblico';

$lng['advanced_search']['only_ads_with_auction'] = 'Solo annunci con le aste';
$lng['security']['failed_login_attempts'] = 'Ripetuti tentativi di accesso non riusciti';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Il tuo account è attualmente inattivo! Presto riceverai un SMS contenente un codice di verifica. Inserisci il codice nella casella qui sotto per attivare il tuo account.';
$lng['users']['verification_code'] = 'Codice di verifica';
$lng['users']['waiting_sms_activation'] = 'In attesa di attivazione SMS';
$lng['listings']['info']['sms_verification'] = 'La tua inserzione è attualmente inattiva! Presto riceverai un SMS contenente un codice di verifica. Inserisci il codice nella casella qui sotto per attivare la tua inserzione.';
$lng['listings']['activate_listing'] = 'Attiva inserzione';
$lng['listings']['errors']['sms_invalid_activation'] = 'Chiave di attivazione non valida!';
$lng['listings']['info']['listing_pending'] = 'La tua inserzione è in sospeso e in attesa di verifica da parte dell\'amministratore.';
$lng['listings']['info']['listing_activated'] = 'La tua inserzione è attivata!';
$lng['listings']['errors']['listing_already_active'] = 'La tua inserzione è già attiva!';
$lng['listings']['errors']['invalid_phone'] = 'Numero di telefono non valido!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Disponibile per';
$lng['newad']['available_until_expires'] = 'Disponibile fino alla scadenza dell\'inserzione';
$lng['newad']['view_info'] = 'Visualizza informazioni';
$lng['users']['errors']['phone_not_permitted'] = 'Questo numero di telefono non è permesso!';
$lng['invoice']['invoice'] = 'Fattura';
$lng['invoice']['invoice_no'] = 'Fattura n';
$lng['invoice']['bill_to'] = 'Fatturare a';
$lng['invoice']['qty'] = 'Quantità';
$lng['invoice']['unit_price'] = 'Prezzo unitario';
$lng['invoice']['subtotal'] = 'totale parziale';
$lng['invoice']['sale_tax'] = 'Tassa di vendita';
$lng['invoice']['new_listing'] = 'Nuova inserizione';
$lng['invoice']['renew_listing'] = 'Rinnovo dell\'inserzione';
$lng['invoice']['featured_eo'] = 'Opzione extra in vetrina per annunci';
$lng['invoice']['highlited_eo'] = 'Opzione extra evidenziato per annunci';
$lng['invoice']['priority_eo'] = 'Opzione extra priorit� per annunci';
$lng['invoice']['video_eo'] = 'Opzione extra video per annunci';
$lng['invoice']['new_credits_pkg'] = 'Nuovo piano di crediti acquistato';
$lng['invoice']['store'] = 'Acquisto della pagina del rivenditore';
$lng['invoice']['new_subscription'] = 'Nuovo acquisto dell\'abbonamento';
$lng['invoice']['renew_subscription'] = 'Rinnovo dell\'iscrizione';
$lng['weeks'] = 'Settimane';
$lng['week'] = 'Settimana';
$lng['months'] = 'Mesi';
$lng['month'] = 'Mese';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Mostra WhatsApp';
$lng['general']['to_top'] = 'Vai all\'inizio';
$lng['quick_search']['location'] = 'Codice postale o posizione';
$lng['listings']['see_all'] = 'Visualizza tutti gli annunci &raquo;';
$lng['listings']['ads'] = 'Annunci';
$lng['listings']['user_since'] = 'Utente da';
$lng['listings']['contact_details'] = 'Dettagli del contatto';
$lng['listings']['favourite'] = 'Preferito';
$lng['listings']['manage_ad'] = 'Manage your ad';
$lng['useraccount']['show_bids'] = 'Mostra offerte';
$lng['listings']['report_abusive'] = 'Segnala un annuncio offensivo';
$lng['listings']['enable_auction'] = 'Abilita l\'asta';
$lng['invoice']['download'] = 'Scarica la fattura';


$lng['register']['group'] = 'Tipo di account';
$lng['register']['change_group'] = 'Cambia tipo di account';
$lng['register']['select_group'] = 'Seleziona gruppo';

$lng['search']['private'] = 'Proprietari privati';
$lng['search']['professional'] = 'Professionisti';
$lng['search']['save_your_search2'] = 'Vuoi salvare la tua ricerca?';
$lng['search']['save_search'] = 'Salva ricerca';
$lng['search']['refine_your_search'] = 'Perfeziona la tua ricerca';
$lng['search']['hide_refine'] = 'Nascondi ricerca dettagliata';

$lng['listings']['view_all_featured'] = 'Visualizza tutti in vetrina >>';
$lng['listings']['view_all_latest'] = 'Visualizza tutti i recenti >>';
$lng['listings']['view_all_auctions'] = 'Visualizza tutte le aste >>';
$lng['listings']['auctions'] = 'Aste';
$lng['listings']['view_ads_from'] = 'Visualizza annunci da';
$lng['location']['change_location'] = 'Cambia posizione';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Mostra email';
$lng['listings']['error']['photo_mandatory'] = 'Si prega di caricare almeno una foto con il tuo annuncio!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Chiamata';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Telefono';
$lng['contact']['error']['phone_or_email_missing'] = 'Per favore inserisci il tuo indirizzo e-mail o il tuo numero di telefono!';
$lng['general']['at'] = 'a';
$lng['general']['distance_from'] = 'distanza da';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'Il messaggio contiene parole proibite, per favore controlla!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'aggiunto';
$lng['users']['repeat'] = 'Ripetere';
$lng['users']['errors']['emails_dont_match'] = 'Gli indirizzi email non corrispondono!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Nome utente o email';
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
