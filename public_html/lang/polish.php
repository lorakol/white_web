<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Strona główna';
$lng['navbar']['login'] = 'Login';
$lng['navbar']['logout'] = 'Wyloguj';
$lng['navbar']['recent_ads'] = 'Najnowsze ogłoszenia';
$lng['navbar']['register'] = 'Rejestruj';
$lng['navbar']['submit_ad'] = 'Dodaj ogłoszenie';
$lng['navbar']['editad'] = 'Edytuj ogłoszenie';
$lng['navbar']['my_account'] = 'Moje konto';
$lng['navbar']['administrator_panel'] = 'Panel administratora';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Odzyskaj hasło';
$lng['navbar']['renew_listing'] = 'Renew Listing';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Wyślij';
$lng['general']['search'] = 'Szukaj';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['activeads'] = 'aktywnych ogłoszeń';
$lng['general']['activead'] = 'active ad';
$lng['general']['subcats'] = 'subcats';
$lng['general']['subcat'] = 'subcat';
$lng['general']['view_ads'] = 'View Ads';
$lng['general']['back'] = '&laquo; Wstecz';
$lng['general']['goto'] = 'Idź do';
$lng['general']['page'] = 'Strona';
$lng['general']['of'] = 'z';
$lng['general']['other'] = 'Inny';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Dodaj';
$lng['general']['delete_all'] = 'Usuń wszystkie wybrane';
$lng['general']['action'] = 'Działanie';
$lng['general']['edit'] = 'Edytuj';
$lng['general']['delete'] = 'Usuń';
$lng['general']['total'] = 'Wszystkich';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'Darmowy';
$lng['general']['not_authorized'] = 'Nie masz uprawnień, aby zobaczyć tę stronę!';
$lng['general']['access_restricted'] = 'Dostęp do tej strony został ograniczony!';
$lng['general']['featured_ads'] = 'Polecane';
$lng['general']['latest_ads'] = 'Najnowsze ogłoszenia';
$lng['general']['quick_search'] = 'Szukaj';
$lng['general']['go'] = 'Idź';
$lng['general']['unlimited'] = 'Nieograniczony';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Plik o tej samej nazwie już istnieje i nie może być nadpisany!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Nie wolno przesyłać pliki większe niż ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Wymiary obrazu są za duże! Proszę przesłać plik o maksymalnej ::MAX_FILE_WIDTH::px szerokości i maksymalnej ::MAX_FILE_HEIGHT::px wysokości !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Plik nie może być przesłany!';
$lng['images']['errors']['no_file'] = 'Proszę wybrać plik do wysłania!';
$lng['images']['errors']['no_folder'] = 'Folder wgrywania plików nie istnieje!';
$lng['images']['errors']['folder_not_writeable'] = 'Folder wgrywania plików nie jest zapisywalny!';
$lng['images']['errors']['file_type_not_accepted'] = 'Przesłany typ pliku nie jest plikiem obrazu lub nie jest on obsługiwany!';
$lng['images']['errors']['error'] = 'Nastąpił błąd podczas przesyłania pliku. Wystąpił błąd: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Floder miniaturek nie istnieje!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Floder miniaturek nie jest zapisywalny!';
$lng['images']['errors']['no_jpg_support'] = 'Brak wsparcia JPG!';
$lng['images']['errors']['no_png_support'] = 'Brak wsparcia PNG!';
$lng['images']['errors']['no_gif_support'] = 'Brak wsparcia GIF!';
$lng['images']['errors']['jpg_create_error'] = 'Błąd w tworzeniu obrazu JPG ze źródła!';
$lng['images']['errors']['png_create_error'] = 'Błąd w tworzeniu obrazu PNG ze źródła!';
$lng['images']['errors']['gif_create_error'] = 'Błąd w tworzeniu obrazu GIF ze źródła!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Login';
$lng['login']['logout'] = 'Wyloguj';
$lng['login']['username'] = 'Nazwa';
$lng['login']['password'] = 'Hasło';
$lng['login']['forgot_pass'] = 'Zapomniałeś hasło?';
$lng['login']['click_here'] = 'Kliknij tutaj';

$lng['login']['errors']['password_missing'] = 'Proszę wpisać swoje hasło!';
$lng['login']['errors']['username_missing'] = 'Prosimy o podanie nazwy użytkownika!';
$lng['login']['errors']['username_invalid'] = 'Nazwa użytkownika jest nieważna!';
$lng['login']['errors']['invalid_username_pass'] = 'Błędna nazwa użytkownika lub hasło!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Wyloguj się';
$lng['logout']['loggedout'] = 'Zostałeś wylogowany!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Rejestruj';
$lng['users']['repeat_password'] = 'Powtórz hasło';
$lng['users']['image_verification_info'] = 'Wpisz tekst widoczny na obrazku w polu poniżej.<br /> Możliwe są litery od a do h tylko małymi literami<br /> i numery od 1 do 9.';
$lng['users']['already_logged_in'] = 'Jesteś już zalogowany!';
$lng['users']['select'] = 'Wybierz';

$lng['users']['info']['activate_account'] = 'E-mail został wysłany na E-mail podany przy rejestracji. Należy postępować zgodnie ze wskazówkami, aby aktywować konto.';
$lng['users']['info']['welcome_user'] = 'Twoje konto zostało utworzone. proszę wejść na <a href="login.php">Login</a> aby uzyskać dostęp do swojego konta!';
$lng['users']['info']['awaiting_admin_verification'] = 'Twoje konto czeka na weryfikację administratora. Zostaniesz powiadomiony e-mailem, gdy konto jest aktywne.';
$lng['users']['info']['account_info_updated'] = 'Informacje o Twoim koncie zostały zaktualizowane!';
$lng['users']['info']['password_changed'] = 'Twoje hasło zostało zmienione!';
$lng['users']['info']['account_activated'] = 'Twoje konto zostało aktywowane. proszę wejść na <a href="login.php">Login</a> aby uzyskać dostęp do swojego konta!';

$lng['users']['errors']['username_missing'] = 'Proszę podać nazwę użytkownika!';
$lng['users']['errors']['invalid_username'] = 'Nieprawidłowa nazwa użytkownika!';
$lng['users']['errors']['username_exists'] = 'Nazwa użytkownika już istnieje! Zaloguj się, jeśli masz już konto!';
$lng['users']['errors']['email_missing'] = 'Proszę podać adres e-mail!';
$lng['users']['errors']['invalid_email'] = 'Nieprawidłowy adres e-mail!';
$lng['users']['errors']['passwords_dont_match'] = 'Hasła nie pasują do siebie!';
$lng['users']['errors']['email_exists'] = 'Adres e-mail jest już używany! Zaloguj się, jeśli masz już konto!';
$lng['users']['errors']['password_missing'] = 'Proszę wpisać hasło!';
$lng['users']['errors']['invalid_validation_string'] = 'Nieprawidłowy ciąg walidacji!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Nieprawidłowe konto lub klucz aktywacyjny! Skontaktuj się z administratorem!';
$lng['users']['errors']['account_already_active'] = 'Twoje konto jest już aktywne!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Ogłoszenia';
$lng['listings']['category'] = 'Kategoria';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Cena';
$lng['listings']['ad_description'] = 'Treść ogłoszenia';
$lng['listings']['title'] = 'Tytuł';
$lng['listings']['description'] = 'Opis';
$lng['listings']['image'] = 'Zdjęcie';
$lng['listings']['words_left'] = 'Pozostało słów';
$lng['listings']['enter_photos'] = 'Dodaj zdjęcia';
$lng['listings']['ad_information'] = 'Informacje';
$lng['listings']['free'] = 'Darmowy';
$lng['listings']['details'] = 'Szczególy';
$lng['listings']['stock_no'] = 'Nr';
$lng['listings']['location'] = 'Lokalizacja';
$lng['listings']['contact_info'] = 'Informacje kontaktowe';
$lng['listings']['email_seller'] = 'Sprzedawca E-mail';
$lng['listings']['no_recent_ads'] = 'Brak nowych Ogłoszeń';
$lng['listings']['no_ads'] = 'Brak ogłoszeń wymienionych w tej kategorii';
$lng['listings']['added_on'] = 'Dodany';
$lng['listings']['send_mail'] = 'Wyślij e-mail do użytkownika';
$lng['listings']['details'] = 'Szczegóły';
$lng['listings']['user'] = 'Użytkownik';
$lng['listings']['price'] = 'Cena';
$lng['listings']['confirm_delete'] = 'Czy na pewno chcesz usunąć wpis?';
$lng['listings']['confirm_delete_all'] = 'Czy na pewno chcesz usunąć wybrane oferty?';
$lng['listings']['all'] = 'Wszystkie ogłoszenia';
$lng['listings']['active_listings'] = 'Aktywne ogłoszenia';
$lng['listings']['pending_listings'] = 'Ogłoszenia w trakcie';
$lng['listings']['featured_listings'] = 'Polecane ogłoszenia';
$lng['listings']['expired_listings'] = 'Wygaśnięte ogłoszenia';
$lng['listings']['active'] = 'Aktywne';
$lng['listings']['inactive'] = 'Nie aktywne';
$lng['listings']['pending'] = 'W trakcie';
$lng['listings']['featured'] = 'Polecane';
$lng['listings']['expired'] = 'Wygaśnięte';
$lng['listings']['order_by_date'] = 'Sortuj według daty';
$lng['listings']['order_by_category'] = 'Sortuj według kategorii';
$lng['listings']['order_by_make'] = 'Sortuj według Producent';
$lng['listings']['order_by_price'] = 'Sortuj według Ceny';
$lng['listings']['order_by_views'] = 'Sortuj według Odsłon';
$lng['listings']['order_asc'] = 'Rosnąco';
$lng['listings']['order_desc'] = 'Malejąco';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Odsłony';
$lng['listings']['date'] = 'Data';
$lng['listings']['no_listings'] = 'Brak ogłoszeń';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'To ogłoszenie nie istnieje!';
$lng['listings']['mark_sold'] = 'Oznacz jako sprzedane';
$lng['listings']['mark_unsold'] = 'Odznacz jako sprzedane';
$lng['listings']['sold'] = 'Sprzedane';
$lng['listings']['feature'] = 'Polecane';
$lng['listings']['expired_on'] = 'Upłynął w dniu';
$lng['listings']['renew'] = 'Odnów';
$lng['listings']['print_page'] = 'Drukuj';
$lng['listings']['recommend_this'] = 'Poleć';
$lng['listings']['more_listings'] = 'Więcej ofert od tego użytkownika';
$lng['listings']['all_listings_for'] = 'Wszytkie ogłowsznia dla';
$lng['listings']['free_category'] = 'Darmowa kategoria';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Czy na pewno chcesz usunąć zdjęcie ogłoszenia?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Słowa przekroczone! Możesz wpisać maksymalnie ::MAX:: słów'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Ogłoszenie zawiera zakazane słowa! Proszę sprawdzić zawartość!';
$lng['listings']['errors']['title_missing']='Proszę podać tytuł ogłoszenia!';
$lng['listings']['errors']['category_missing']='Proszę wybrać kategorię!';
$lng['listings']['errors']['invalid_category']='Nieprawidłowa kategoria!';
$lng['listings']['errors']['package_missing']='Wybierz plan!';
$lng['listings']['errors']['invalid_package']='Nieprawidłowy plan!';
$lng['listings']['errors']['content_missing']='Proszę wpisać treść ogłoszenia!';
$lng['listings']['errors']['invalid_price']='Nieprawidłowa cena!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Cena Min';
$lng['quick_search']['price_high'] = 'Cena Max';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Dodaj nowe ogłoszenie';
$lng['useraccount']['browse_your_listings'] = 'Moje ogłoszenia';
$lng['useraccount']['modify_account_info'] = 'Informacje o koncie';
$lng['useraccount']['order_history'] = 'Historia zamówień';
$lng['useraccount']['total_listings'] = 'Wszystkie Ogłoszenia';
$lng['useraccount']['total_views'] = 'Wszystkie odsłony';
$lng['useraccount']['active_listings'] = 'Aktywne ogłoszenia';
$lng['useraccount']['pending_listings'] = 'Ogłoszenia w trakcie';
$lng['useraccount']['last_login'] = 'Ostatnie logowanie';
$lng['useraccount']['last_login_ip'] = 'Ostatnie logowanie IP';
$lng['useraccount']['expired_listings'] = 'Ogłoszenia wygaśniete';
$lng['useraccount']['statistics'] = 'Statystyki';
$lng['useraccount']['welcome'] = 'Witaj';
$lng['useraccount']['contact_name'] = 'Imię i nazwisko';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Hasło';
$lng['useraccount']['repeat_password'] = 'Powtórz hasło';
$lng['useraccount']['change_password'] = 'Zmień hasło';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'do';
$lng['advanced_search']['price_min'] = 'Cena Min';
$lng['advanced_search']['price_max'] = 'Cena Max';
$lng['advanced_search']['word'] = 'Słowo';
$lng['advanced_search']['sort_by'] = 'Sortuj według';
$lng['advanced_search']['sort_by_price'] = 'Sortuj według Ceny';
$lng['advanced_search']['sort_by_date'] = 'Sortuj według Daty';
$lng['advanced_search']['sort_by_make'] = 'Sortuj według Producenta';
$lng['advanced_search']['sort_descendant'] = 'Sortuj malejąco';
$lng['advanced_search']['sort_ascendant'] = 'Sortuj rosnąco';
$lng['advanced_search']['only_ads_with_pic'] = 'Tylko oferty z zdjęciem';
$lng['advanced_search']['no_results'] = 'Brak ofert według kryteriów wyszukiwania!';
$lng['advanced_search']['multiple_ads_matching'] = 'Są ::NO_ADS:: Lista pasujących do Twojego wyszukiwania!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Istnieje jeden wpis, że kryteria wyszukiwania!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Imię i Nazwisko';
$lng['contact']['subject'] = 'Temat';
$lng['contact']['email'] = 'E-mail';
$lng['contact']['webpage'] = 'Strona internetowa';
$lng['contact']['comments'] = 'Treść wiadomości';
$lng['contact']['message_sent'] = 'Twoja wiadomość została wysłana!';
$lng['contact']['sending_message_failed'] = 'Dostarczenie wiadomości nie powiodło się!';
$lng['contact']['mailto'] = 'E-mail do';

$lng['contact']['error']['name_missing'] = 'Podaj swoje imię!';
$lng['contact']['error']['subject_missing'] = 'Proszę wpisać  temat!';
$lng['contact']['error']['email_missing'] = 'Proszę podać e-mail!';
$lng['contact']['error']['invalid_email'] = 'Nieprawidłowy adres email!';
$lng['contact']['error']['comments_missing'] = 'Proszę wpisać treść wiadomośći!';
$lng['contact']['error']['invalid_validation_number'] = 'Błędny numer walidacji!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Adres E-mail';
$lng['password_recovery']['new_password'] = 'Nowe hasło';
$lng['password_recovery']['repeat_new_password'] = 'Powtórz nowe hasło';
$lng['password_recovery']['invalid_key'] = 'Nieprawidłowy klucz';

$lng['password_recovery']['email_missing'] = 'Proszę podać adres e-mail!';
$lng['password_recovery']['invalid_email'] = 'Nieprawidłowy adres email!';
$lng['password_recovery']['email_inexistent'] = 'Nie ma użytkownika zarejestrowanego pod tym adresem e-mail';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Ilość';
$lng['packages']['words'] = 'Słowa';
$lng['packages']['days'] = 'Dni';
$lng['packages']['pictures'] = 'Zdjęć';
$lng['packages']['picture'] = 'Zdjęcie';
$lng['packages']['available'] = 'Dostępny';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Rodzaj';
$lng['order_history']['amount'] = 'Kwota';
$lng['order_history']['completed'] = 'Zakończony';
$lng['order_history']['not_completed'] = 'Nie zakończony';
$lng['order_history']['ad_no'] = 'Ogłoszenie id';
$lng['order_history']['date'] = 'Data';
$lng['order_history']['no_actions'] = 'Brak informacji o Zamówieniu';
$lng['order_history']['order_by_date'] = 'Sortuj według daty';
$lng['order_history']['order_by_amount'] = 'Sortuj według Kwoty';
$lng['order_history']['order_by_processor'] = 'Sortuj według Rodzaju';
$lng['order_history']['description'] = 'Opis';
$lng['order_history']['newad'] = 'Nowe ogłoszenia'; 
$lng['order_history']['renew'] = 'Odnów'; 
$lng['order_history']['featured'] = 'Polecane ogłoszenia'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Sortuj według daty';
$lng['order']['price'] = 'Sortuj według ceny';
$lng['order']['title'] = 'Sortuj według nazwy';
$lng['order']['desc'] = 'Malejąco';
$lng['order']['asc'] = 'Rosnąco';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Poleć to ogłoszenie';
$lng['recommend']['your_name'] = 'Twoje Imię i nazwisko';
$lng['recommend']['your_email'] = 'Twój E-mail';
$lng['recommend']['friend_name'] = 'Imię i nazwisko przyjaciela';
$lng['recommend']['friend_email'] = 'E-mail przyjaciela';
$lng['recommend']['message'] = 'Wiadomość do twojego przyjaciela';


$lng['recommend']['error']['your_name_missing'] = 'Podaj swoje imię!';
$lng['recommend']['error']['your_email_missing'] = 'Proszę podać e-mail!';
$lng['recommend']['error']['friend_name_missing'] = 'Podaj imię przyjaciela!';
$lng['recommend']['error']['friend_email_missing'] = 'Podaj e-mail przyjaciela!';
$lng['recommend']['error']['invalid_email'] = 'Błędny adres e-mail';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Ogłoszenia';
$lng['stats']['general'] = 'Ogólny';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Subskrybować';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Ulubione';
$lng['general']['as'] = 'jako';
$lng['general']['view'] = 'Zobacz';
$lng['general']['none'] = 'Żaden';
$lng['general']['yes'] = 'tak';
$lng['general']['no'] = 'nie';
$lng['general']['next'] = 'Dalej &raquo;';
$lng['general']['finish'] = 'Koniec';
$lng['general']['download'] = 'Pobierz';
$lng['general']['remove'] = 'Usunąć';
$lng['general']['previous_page'] = '&laquo; Wstecz';
$lng['general']['next_page'] = 'Dalej &raquo;';
$lng['general']['items'] = 'ogłoszeń';
$lng['general']['active'] = 'Aktywne';
$lng['general']['inactive'] = 'Nie aktywne';
$lng['general']['expires'] = 'Wygasa w';
$lng['general']['available'] = 'Dostępne';
$lng['general']['cancel'] = 'Anuluj';
$lng['general']['never'] = 'Nigdy';
$lng['general']['asc'] = 'Rosnąco';
$lng['general']['desc'] = 'Malejąco';
$lng['general']['pending'] = 'W trakcie';
$lng['general']['upload'] = 'Prześlij';
$lng['general']['processing'] = 'Processing, please wait ... ';
$lng['general']['help'] = 'Pomoc';
$lng['general']['hide'] = 'Ukryj';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Jest to ograniczona wersja demo. Nie masz uprawnień do zmiany niektórych ustawień!';
$lng['general']['check_all'] = 'Zaznacz wszystko';
$lng['general']['uncheck_all'] = 'Odznacz wszystko';
$lng['general']['all'] = 'Wszystko';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Strona sprzedawcy';
$lng['users']['store_banner'] = 'Baner strony sprzedawcy';
$lng['users']['waiting_mail_activation'] = 'Oczekiwanie na e-mail aktywacyjny';
$lng['users']['waiting_admin_activation'] = 'Oczekiwanie na zgode administratora';
$lng['users']['no_such_id'] = 'Ten użytkownik nie istnieje.';

$lng['users']['info']['store_banner'] = 'Obraz, który będzie używany jako najlepsze zdjęcie na swojej stronie sprzedawcy.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Zgłoś';
$lng['listings']['report_reason'] = 'Powód';
$lng['listings']['meta_info'] = 'Informacje Meta';
$lng['listings']['meta_keywords'] = 'Słowa kluczowe';
$lng['listings']['meta_description'] = 'Opis Meta';
$lng['listings']['not_approved'] = 'Niezatwierdzono';
$lng['listings']['approve'] = 'Zatwierdzono';
$lng['listings']['choose_payment_method'] = 'Wybierz sposób płatności';

$lng['listings']['choose_category'] = 'Wybierz kategorię';
$lng['listings']['choose_plan'] = 'Wybierz plan';
$lng['listings']['enter_ad_details'] = 'Wpisz Szczegóły ogłoszenia';
$lng['listings']['ad_details'] = 'Szczegóły ogłoszenia';
$lng['listings']['add_photos'] = 'Dodaj zdjęcia';
$lng['listings']['ad_photos'] = 'Zdjęcia głoszenia';
$lng['listings']['edit_photos'] = 'Edytuj zdjęcia';
$lng['listings']['extra_options'] = 'Dodatkowe opcje';
$lng['listings']['review'] = 'Podgląd';
$lng['listings']['finish'] = 'Koniec';
$lng['listings']['next_step'] = 'Następny etap &raquo;';
$lng['listings']['included'] = 'Dołączone';
$lng['listings']['finalize'] = 'Sfinalizować';
$lng['listings']['zip'] = 'Post Code';
$lng['listings']['add_to_favourites'] = 'Dodaj do ulubionych';
$lng['listings']['confirm_add_to_fav'] = 'Uwaga! Nie jesteś zalogowany!Ulubione będą tymczasowe!';
$lng['listings']['add_to_fav_done'] = 'Wpis został dodany do ulubionych!';
$lng['listings']['confirm_delete_favourite'] = 'Czy na pewno chcesz usunąć ulubione ogłoszenia?';
$lng['listings']['no_favourites'] = 'Brak ulubionych ogłoszeń';
$lng['listings']['extra_options'] = 'Dodatkowe opcje';
$lng['listings']['highlited'] = 'Wyróżnione';
$lng['listings']['priority'] = 'Priorytet';
$lng['listings']['video'] = 'Wideo Ogłoszenia';
$lng['listings']['short_video'] = 'Wideo';
$lng['listings']['pending_video'] = 'Wideo w trakcie';
$lng['listings']['video_code'] = 'Kod Wideo';
$lng['listings']['total'] = 'Wszystkich';
$lng['listings']['approve_ad'] = 'Zatwierdź ogłoszenie';
$lng['listings']['finalize_later'] = 'Finalizacja później';
$lng['listings']['click_to_upload'] = 'Kliknij, aby przesłać';
$lng['listings']['files_uploaded'] = ' Zdjęcie (a) przesłane z całości ';
$lng['listings']['allowed'] = ' zdjęcia zabronione!';
$lng['listings']['limit_reached'] = ' Limit maksymalnej ilości zdjęć osiągnięty!';
$lng['listings']['edit_options'] = 'Edytuj opcje';
$lng['listings']['view_store'] = 'Zobacz stronę sprzredawcy';
$lng['listings']['edit_ad_options'] = 'Edytuj opcje ogłoszenia';
$lng['listings']['no_extra_options_selected'] = 'Bez dodatkowych wybranych opcji!';
$lng['listings']['highlited_listings'] = 'Wyróżnione ogłoszenia';
$lng['listings']['for_listing'] = 'w wykazie nie ';
$lng['listings']['expires_on'] = 'Wygasa';
$lng['listings']['expired_on'] = 'Wygasło';
$lng['listings']['pending_ad'] = 'Ogłoszenia w trakcie';
$lng['listings']['pending_highlited'] = 'Wyróżnione w trakcie';
$lng['listings']['pending_featured'] = 'Polecone w trakcie';
$lng['listings']['pending_priority'] = 'Priorytet w trakcie';
$lng['listings']['enter_coupon'] = 'Wpisz kod zniżki';
$lng['listings']['discount'] = 'Zniżka';
$lng['listings']['select_plan'] = 'Wybierz plan';
$lng['listings']['pending_subscription'] = 'Subskrypcja w trakcie';
$lng['listings']['remove_favourite'] = 'Usuń ulubione';

$lng['listings']['order_up'] = 'Order up';
$lng['listings']['order_down'] = 'Order down';

$lng['listings']['errors']['invalid_youtube_video'] = 'Nieprawidłowe youtube wideo!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonament';
$lng['useraccount']['no_package'] = 'Brak planu ogoszeń';
$lng['useraccount']['packages'] = 'Plan';
$lng['useraccount']['date_start'] = 'Data rozpoczęcia';
$lng['useraccount']['date_end'] = 'Data zakończnia';
$lng['useraccount']['remaining_ads'] = 'Pozostałe ogłoszenia';
$lng['useraccount']['account_type'] = 'Typ konta';
$lng['useraccount']['unfinished_listings'] = 'Niezakończone ogłoszenia';
$lng['useraccount']['confirm_delete_subscription'] = 'Czy na pewno chcesz usunąć ten abonament?';
$lng['useraccount']['buy_store'] = 'Kup strone sprzedawcy';
$lng['useraccount']['bulk_uploads'] = 'Zbiorcze przesyłanie';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonament';
$lng['packages']['ads'] = 'Ogłoszenia';
$lng['packages']['name'] = 'Nazwa';
$lng['packages']['details'] = 'Szczegóły';
$lng['packages']['no_ads'] = 'Liczba ogłoszeń';
$lng['packages']['subscription_time'] = 'Okres trwania abonamentu';
$lng['packages']['no_pictures'] = 'Ilość zdjęć';
$lng['packages']['no_words'] = 'Ilość słów';
$lng['packages']['ads_availability'] = 'Dostępność ogłoszenia';
$lng['packages']['featured'] = 'Polecane';
$lng['packages']['highlited'] = 'Wyróżnione';
$lng['packages']['priority'] = 'Priorytet';
$lng['packages']['video'] = 'Wideo ogłoszenia';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonament';
$lng['order_history']['post_listing'] = 'Dodane ogłoszenia';
$lng['order_history']['renew_listing'] = 'Odnowione ogłószenia';
$lng['order_history']['feature_listing'] = 'Polecane ogłoszneia';
$lng['order_history']['subscribe_to_package'] = 'Zapisany się do planu';
$lng['order_history']['complete_payment'] = 'Płatność kompletna';
$lng['order_history']['complete_payment_for'] = 'Płatność kompletna za';
$lng['order_history']['details'] = 'Szczegóły';
$lng['order_history']['subscription_no'] = 'Abonament nr';
$lng['order_history']['highlited'] = 'Wyróznione ogłoszenie';
$lng['order_history']['priority'] = 'Priorytet';
$lng['order_history']['video'] = 'Wideo ogłoszenia';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Wybierz plan!';
$lng['buy_package']['error']['choose_processor'] = 'Proszę wybrać rodzaj płatności!';
$lng['buy_package']['error']['invalid_processor'] = 'Nieprawidłowy system płatności!';
$lng['buy_package']['error']['invalid_package'] = 'Nieprawidłowy plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Nieprawidłowa transakcja PayPal!';
$lng['2co']['invalid_transaction'] = 'Nieprawidłowa transakcja 2Checkout!';
$lng['moneybookers']['invalid_transaction'] = 'Nieprawidłowa transakcja Moneybookers!';
$lng['authorize']['invalid_transaction'] = 'Nieprawidłowa transakcja Authorize.net!';
$lng['manual']['invalid_transaction'] = 'Nieprawidłowa transakcja!';

$lng['paypal']['transaction_canceled'] = 'Transakcja Paypal odwołana!';
$lng['2co']['transaction_canceled'] = 'Transakcja 2Checkout odwołana!';
$lng['mb']['transaction_canceled'] = 'Transakcja Moneybookers odwołana!';
$lng['authorize']['transaction_canceled'] = 'Transakcja Authorize.net odwołana!';
$lng['manual']['transaction_canceled'] = 'Transakcja odwołana!';
$lng['epay']['transaction_canceled'] = 'Transakcja ePay odwołana!';

$lng['payments']['transaction_already_processed'] = 'Twoja tranzakcja jest przetwarzana';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Zatwierdz Abonament';
$lng['subscribe']['payment_method'] = 'Sposób płatności';
$lng['subscribe']['renew_subscription'] = 'Odnów Abonament';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'E-mail: ';
$lng['bcc_mails']['from'] = 'Od: ';
$lng['bcc_mails']['to'] = 'Do: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Zbiorcze przesyłanie status: ';
$lng['ie']['successfully'] = 'Lista pomyślnie dodana';
$lng['ie']['failed'] = 'Niepowodzenie';
$lng['ie']['uploaded_listings'] = 'Przesłane lista ogłoszeń:';
$lng['ie']['errors']['upload_import_file'] = 'Proszę przesłać plik do importu!';
$lng['ie']['errors']['incorrect_file_type'] = 'Nieprawidłowy typ pliku! Typ pliku musi być: ';
$lng['ie']['errors']['could_not_open_file'] = 'Nie można otworzyć pliku!';
$lng['ie']['errors']['choose_categ'] = 'Proszę wybrać kategorię!';
$lng['ie']['errors']['could_not_save_file'] = 'Nie można pobrać pliku: ';
$lng['ie']['errors']['required_field_missing'] = 'Brakuje wymaganego pola: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Błędne dane: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Wybierz sprzedawce';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Obszar wyszukiwania';
$lng['areasearch']['all_locations'] = 'Wszystkie lokalizacje';
$lng['areasearch']['exact_location'] = 'Dokładna lokalizacja';
$lng['areasearch']['around'] = 'Przypuszczalna lokalizacja';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Tak';
$lng['general']['No'] = 'Nie';
$lng['general']['or'] = 'lub';
$lng['general']['in'] = ' w';
$lng['general']['by'] = 'przez';
$lng['general']['close_window'] = 'Zamknij okno';
$lng['general']['more_options'] = 'więcej opcji &raquo;';
$lng['general']['less_options'] = '&laquo; mniej opcji';
$lng['general']['send'] = 'Wyślij';
$lng['general']['save'] = 'Zapisz';
$lng['general']['for'] = 'dla';
$lng['general']['to'] = 'do';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Oznacz jako wynajęte';
$lng['listings']['mark_unrented'] = 'Odznacz jako wynajęte';
$lng['listings']['rented'] = 'Wynajęty';
$lng['listings']['your_info'] = 'Twoje informacje';
//******
$lng['listings']['email'] = 'Twój e-mail';
$lng['listings']['name'] = 'Twoje Imię';

$lng['listings']['listing_deleted'] = 'Twoje ogłoszenie zostało usunięte!';
$lng['listings']['post_without_login'] = 'Dodaj bez logowania';
$lng['listings']['waiting_activation'] = 'Oczekiwanie na aktywację';
$lng['listings']['waiting_admin_approval'] = 'Oczekiwanie na akceptację administratora';
$lng['listings']['dont_need_account'] = 'Nie potrzebujesz konta? Dodaj ogłoszenie bez logowania!';
$lng['listings']['post_your_ad'] = 'Zamieść swoje ogłoszenia!';
$lng['listings']['posted'] = 'Wysłany';
$lng['listings']['select_subscription'] = 'Wybierz abonament';
$lng['listings']['choose_subscription'] = 'Wybierz abonament';
$lng['listings']['inactive_listings'] = 'Nie aktywne ogłoszenia';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Opcje wyszukiwania';
$lng['search']['refine_by_keyword'] = 'Sortuj według słów kluczowych';
$lng['search']['showing'] = 'Pokaż';
$lng['search']['more'] = 'Więcej ...';
$lng['search']['less'] = 'Mniej ...';
$lng['search']['search_for'] = 'Szukaj';
$lng['search']['save_your_search'] = 'Zapisz swoje wyszukiwanie';
$lng['search']['save'] = 'Zapisz';
$lng['search']['search_saved'] = 'Twoje wyszukiwanie zostało zapisane!';
$lng['search']['must_login_to_save_search'] = 'Musisz zalogować się do swojego konta, aby zapisać wyszukiwania!';
$lng['search']['view_search'] = 'Zobacz wyszukiwania';
$lng['search']['all_categories'] = 'Wszystkie kategorie';
$lng['search']['more_than'] = 'ponad';
$lng['search']['less_than'] = 'mniej niż';

$lng['search']['error']['cannot_save_empty_search'] = 'Twoje wyszukiwanie nie zawiera żadnych warunków, więc nie może być zapisane!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Zapisane wyszukiwania';
$lng['useraccount']['view_saved_searches'] = 'Zobacz zapisane wyszukiwania';
$lng['useraccount']['no_saved_searches'] = 'Brek zapisanych wyszukiwań';
$lng['useraccount']['recurring'] = 'Powtarzające się';
$lng['useraccount']['date_renew'] = 'Data odnowienia';
$lng['useraccount']['logged_in_as'] = 'Jesteś zalogowany jako ';
$lng['useraccount']['subscriptions'] = 'Abonament';

$lng['users']['activate_account'] = 'Aktywuj konto';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Dodaj Abonament';
$lng['subscriptions']['package'] = 'Abonament';
$lng['subscriptions']['remaining_ads'] = 'Pozostałe ogłoszenia';
$lng['subscriptions']['recurring'] = 'Powtarzające się';
$lng['subscriptions']['date_start'] = 'Data rozpoczęcia';
$lng['subscriptions']['date_end'] = 'Data zakończenia';
$lng['subscriptions']['date_renew'] = 'Data odnowienia';
$lng['subscriptions']['confirm_delete'] = 'Czy na pewno chcesz usunąć abonament?';
$lng['subscriptions']['no_subscriptions'] = 'Brak abonamntu';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Nie masz jeszcze konta <b>The Best Adwerts</b>?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Włącz powtarzającą się płatności za ten abonament';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Następujące pola wymagane brakuje: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Kup strone sprzedającego';


$lng['images']['errors']['max_photos'] = 'Maksymalna ilość zdjęć została dodana!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Powiadomienie e-mail';
$lng['alerts']['email_alerts'] = 'Powiadomiania e-mail';
$lng['alerts']['no_alerts'] = 'Brak powiadomianien e-mail';
$lng['alerts']['view_email_alerts'] = 'Zobacz powiadomiania e-mail';
$lng['alerts']['send_email_alerts'] = 'Wyślij powiadomiania e-mail';
$lng['alerts']['immediately'] = 'Natychmiast';
$lng['alerts']['daily'] = 'Co dziennie';
$lng['alerts']['weekly'] = 'Co tydzień';
$lng['alerts']['your_email'] = 'twój e-mail adres';
$lng['alerts']['create_alert'] = 'Stwórz Powiadomiania';
$lng['alerts']['email_alert_info'] = 'Otrzymuj powiadomienia e-mail o nowych ogłoszeniach, które pojawiają się w tej kategorii.';
$lng['alerts']['alert_added'] = 'Twoje powiadomienia zostały utworzone';
$lng['alerts']['alert_added_activate'] = 'Otrzymasz e-mail na <b>::EMAIL::</b>. Kliknij na link w e-mailu, aby aktywować powiadomienia!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Szukaj w';
$lng['alerts']['keyword'] = 'słowo kluczowe';
$lng['alerts']['frequency'] = 'Częstotliwość powiadomień';
$lng['alerts']['alert_activated'] = 'Twój wpis został aktywowany! Będziesz teraz otrzymywać e-maile z powiadomieniami.';
$lng['alerts']['alert_unsubscribed'] = 'Twoje powiadomienia zostału usunięte!';
$lng['alerts']['started_on'] = 'Rozpoczęła się';
$lng['alerts']['no_terms_searched'] = 'Nie ma żadnych terminów określonych dla tego wyszukiwania!';
$lng['alerts']['no_listings'] = 'Brak ogłoszeń tla tego powiadomienia';

$lng['alerts']['error']['email_required'] = 'Proszę podać adres e-mail do powiadomień!';
$lng['alerts']['error']['invalid_email'] = 'Nieprawidłowy adres e-mail!';
$lng['alerts']['error']['invalid_frequency'] = 'Nieprawidłowa częstotliwość powiadomień!';
$lng['alerts']['error']['login_required'] = 'Prosze <a href="::LINK::">Login</a> , aby móc zarejestrować powiadomienia!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Please choose at least one search key except category!';
$lng['alerts']['error']['invalid_confirmation'] = 'Nieprawidłowa kunfiguracja powiadmomienia!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Nieprawidłowe żądanie wypisania!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kalkulator kredytu';
$lng_loancalc['sale_price'] = 'Cena sprzedaży';
$lng_loancalc['down_payment'] = 'Depozyt';
$lng_loancalc['trade_in_value'] = 'Handel wartości';
$lng_loancalc['loan_amount'] = 'Kwota kredytu';
$lng_loancalc['sales_tax'] = 'Podatek';
$lng_loancalc['interest_rate'] = 'Stopa procentowa';
$lng_loancalc['loan_term'] = 'Okres kredytowania';
$lng_loancalc['months'] = 'Miesięcy';
$lng_loancalc['years'] = 'Lat';
$lng_loancalc['or'] = 'lub';
$lng_loancalc['monthly_payment'] = 'Miesięczne płatnośći';
$lng_loancalc['calculate'] = 'Oblicz';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comments';
$lng_comments['make_a_comment'] = 'Make a Comment';
$lng_comments['login_to_post'] = 'Please <a href="::LOGIN_LINK::">sign in</a> so you can post a comment.';

$lng_comments['name'] = 'Name';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Post Comment';

$lng_comments['error']['name_missing'] = 'Please enter your name!';
$lng_comments['error']['content_missing'] = 'Please enter comment!';
$lng_comments['error']['website_missing'] = 'Please enter website!';
$lng_comments['error']['email_missing'] = 'Please enter your email!';
$lng_comments['error']['listing_id_missing'] = 'Invalid comment entry!';

$lng_comments['error']['invalid_email'] = 'Invalid email address!';
$lng_comments['error']['invalid_website'] = 'Invalid website!';
$lng_comments['errors']['badwords'] = 'Your comment contains forbidden words! Please edit your message!';

$lng_comments['info']['comment_added'] = 'Your comment was added! Click <a id="newad">here</a> if you want to add another comment.';
$lng_comments['info']['comment_pending'] = 'Your comment is pending and waiting for administrator verification.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'NEXT &raquo;';
$lng['tb']['prev'] = '&laquo; PREV';
$lng['tb']['close'] = 'CLOSE';
$lng['tb']['or_esc'] = 'or ESC Key';

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

$lng['alerts']['category'] = ' Kategoria';
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
