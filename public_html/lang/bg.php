<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Начало';
$lng['navbar']['login'] = 'Вход';
$lng['navbar']['logout'] = 'Изход';
$lng['navbar']['recent_ads'] = 'Нови обяви';
$lng['navbar']['register'] = 'Регистрация';
$lng['navbar']['submit_ad'] = 'Публикувай обява';
$lng['navbar']['editad'] = 'Редактирай обява';
$lng['navbar']['my_account'] = 'Моят профил';
$lng['navbar']['administrator_panel'] = 'Администраторски панел';
$lng['navbar']['contact'] = 'Контакти';
$lng['navbar']['password_recovery'] = 'Забравена парола';
$lng['navbar']['renew_listing'] = 'Поднови обява';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Публикувай';
$lng['general']['search'] = 'Търси';
$lng['general']['contact'] = 'Контакт';
$lng['general']['activeads'] = 'Активни обяви';
$lng['general']['activead'] = 'Активна обява';
$lng['general']['subcats'] = 'подкатегории';
$lng['general']['subcat'] = 'подкатегория';
$lng['general']['view_ads'] = 'Виж обявите';
$lng['general']['back'] = '« Назад';
$lng['general']['goto'] = 'Напред';
$lng['general']['page'] = 'Страница';
$lng['general']['of'] = 'от';
$lng['general']['other'] = 'Други';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Добави обява';
$lng['general']['delete_all'] = 'Изтрий всички селектирани';
$lng['general']['action'] = 'Действие';
$lng['general']['edit'] = 'Редактирай';
$lng['general']['delete'] = 'Изтрий';
$lng['general']['total'] = 'Общо';
$lng['general']['min'] = 'Мин.';
$lng['general']['max'] = 'Макс.';
$lng['general']['free'] = 'Безплатно';
$lng['general']['not_authorized'] = 'Нямате достъп до тази страница!';
$lng['general']['access_restricted'] = 'Достъпът Ви до тази страница е ограничен!';
$lng['general']['featured_ads'] = 'Специални обяви';
$lng['general']['latest_ads'] = 'Последни обяви';
$lng['general']['quick_search'] = 'Бързо търсене';
$lng['general']['go'] = 'Напред';
$lng['general']['unlimited'] = 'Неограничен брой';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Файл със същото име вече съществува и не може да бъде записан!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Не може да публикувате снимка по голяма от ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Размерът на снимката е твърде голям! Моля публикувайте снимка с максимална ширина ::MAX_FILE_WIDTH::px  и максимална височина ::MAX_FILE_HEIGHT::px !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Файлът не може да бъде качен!';
$lng['images']['errors']['no_file'] = 'Моля изберете файл за качване!';
$lng['images']['errors']['no_folder'] = 'Целевата папка не съществува!';
$lng['images']['errors']['folder_not_writeable'] = 'В папката, не може да се записва!';
$lng['images']['errors']['file_type_not_accepted'] = 'Файлът, който искате да качите не е снимка или не се поддържа!';
$lng['images']['errors']['error'] = 'Грешка при качването на файла. Грешката е: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Целевата папка не съществува!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'В папката, не може да се записва!';
$lng['images']['errors']['no_jpg_support'] = 'Не се поддържа JPG формат!';
$lng['images']['errors']['no_png_support'] = 'Не се поддържа PNG формат!';
$lng['images']['errors']['no_gif_support'] = 'Не се поддържа GIF формат!';
$lng['images']['errors']['jpg_create_error'] = 'Грешка при създаване на JPG изображение!';
$lng['images']['errors']['png_create_error'] = 'Грешка при създаване на PNG изображение!';
$lng['images']['errors']['gif_create_error'] = 'Грешка при създаване на GIF изображение!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Вход';
$lng['login']['logout'] = 'Изход';
$lng['login']['username'] = 'Потребителско име';
$lng['login']['password'] = 'Парола';
$lng['login']['forgot_pass'] = 'Забравена парола?';
$lng['login']['click_here'] = 'Натисни тук';

$lng['login']['errors']['password_missing'] = 'Моля, въведете вашата парола!';
$lng['login']['errors']['username_missing'] = 'Моля, въведете вашето потребителско име!';
$lng['login']['errors']['username_invalid'] = 'Невалидно потребителско име!';
$lng['login']['errors']['invalid_username_pass'] = 'Невалидно потребителско име или парола!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Изход';
$lng['logout']['loggedout'] = 'Вие излязохте от профила си!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Регистър';
$lng['users']['repeat_password'] = 'Повтори паролата';
$lng['users']['image_verification_info'] = 'Моля, въведете текста от полето по-долу.<br /> Възможните символи са малки букви от латинската азбука от a до h и цифри от 1 до 9.';
$lng['users']['already_logged_in'] = 'Вече сте в профила си!';
$lng['users']['select'] = 'Избери';

$lng['users']['info']['activate_account'] = 'Изпратено ви е потвърждение на имейла. Моля, следвайте инструкциите в мейла, за да активирате регистрацията си.';
$lng['users']['info']['welcome_user'] = 'Вашият профил е създаден. Моля, натиснете <a href="login.php">Вход</a> за да влезете в профила си!';
$lng['users']['info']['awaiting_admin_verification'] = 'Вашата регистрация чака потвърждение от администратора. Ще бъдете уведомен по имейл, когато регистрацията Ви бъде активирана.';
$lng['users']['info']['account_info_updated'] = 'Информацията за Вашия профил беше актуализирана!';
$lng['users']['info']['password_changed'] = 'Паролата ви беше сменена!';
$lng['users']['info']['account_activated'] = 'Регистрацията Ви е активирана! Моля, натиснете <a href="login.php">Вход</a> за да влезете в профила си.';

$lng['users']['errors']['username_missing'] = 'Моля, въведете потребителско име!';
$lng['users']['errors']['invalid_username'] = 'Невалидно потребителско име!';
$lng['users']['errors']['username_exists'] = 'Съществуващо потребителско име. Използвайте Вход, ако вече сте регистриран!';
$lng['users']['errors']['email_missing'] = 'Моля, попълнете адрес на електронна поща!';
$lng['users']['errors']['invalid_email'] = 'Невалиден адрес на електронна поща!';
$lng['users']['errors']['passwords_dont_match'] = 'Невалидна парола!';
$lng['users']['errors']['email_exists'] = 'Този имейл вече е използван. Моля, влезте в профила си, ако вече сте регистриран!';
$lng['users']['errors']['password_missing'] = 'Моля, попълнете парола!';
$lng['users']['errors']['invalid_validation_string'] = 'Невалиден антиспам код!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Невалиден профил или активация!Моля,свържете се с Администратора!';
$lng['users']['errors']['account_already_active'] = 'Вашият профил вече е активен!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Обява';
$lng['listings']['category'] = 'Категория';
$lng['listings']['package'] = 'План';
$lng['listings']['price'] = 'Цена';
$lng['listings']['ad_description'] = 'Заглавие и описание на обявата';
$lng['listings']['title'] = 'Заглавие';
$lng['listings']['description'] = 'Описание';
$lng['listings']['image'] = 'Снимка';
$lng['listings']['words_left'] = 'думи остават';
$lng['listings']['enter_photos'] = 'Добавете снимки';
$lng['listings']['ad_information'] = 'Информация за обявата';
$lng['listings']['free'] = 'Безплатно';
$lng['listings']['details'] = 'Детайли';
$lng['listings']['stock_no'] = 'Обява No';
$lng['listings']['location'] = 'Местоположение';
$lng['listings']['contact_info'] = 'Информация за контакти';
$lng['listings']['email_seller'] = 'Изпрати имейл до продавача';
$lng['listings']['no_recent_ads'] = 'Номера на най-новите обяви';
$lng['listings']['no_ads'] = 'Номера на обяви в тази категория';
$lng['listings']['added_on'] = 'Публикувано на';
$lng['listings']['send_mail'] = 'Изпрати имейл на потребител';
$lng['listings']['details'] = 'Детайли';
$lng['listings']['user'] = 'Потребител';
$lng['listings']['price'] = 'Цена';
$lng['listings']['confirm_delete'] = 'Сигурен ли сте, че искате да изтриете обявата?';
$lng['listings']['confirm_delete_all'] = 'Сигурен ли сте, че искате да изтриете избраните обяви?';
$lng['listings']['all'] = 'Всички обяви';
$lng['listings']['active_listings'] = 'Активни обяви';
$lng['listings']['pending_listings'] = 'Чакащи одобрение обяви';
$lng['listings']['featured_listings'] = 'Препоръчани обяви';
$lng['listings']['expired_listings'] = 'Изтекли обяви';
$lng['listings']['active'] = 'Активна';
$lng['listings']['inactive'] = 'Неактивна';
$lng['listings']['pending'] = 'Чакаща одобрение';
$lng['listings']['featured'] = 'Препоръчана';
$lng['listings']['expired'] = 'С изтекъл срок';
$lng['listings']['order_by_date'] = 'Подреди по дата';
$lng['listings']['order_by_category'] = 'Подреди по категория';
$lng['listings']['order_by_make'] = 'Подреди по производител';
$lng['listings']['order_by_price'] = 'Подреди по цена';
$lng['listings']['order_by_views'] = 'Подреди по посещаемост';
$lng['listings']['order_asc'] = 'Възходящ';
$lng['listings']['order_desc'] = 'Низходящ';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Показвания';
$lng['listings']['date'] = 'Дата';
$lng['listings']['no_listings'] = 'Няма обяви';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Несъществуваща обява!';
$lng['listings']['mark_sold'] = 'Отбележи като продадено';
$lng['listings']['mark_unsold'] = 'Неотбелязано като продадено';
$lng['listings']['sold'] = 'Продадено';
$lng['listings']['feature'] = 'Особености';
$lng['listings']['expired_on'] = 'Изтича на';
$lng['listings']['renew'] = 'Обнови';
$lng['listings']['print_page'] = 'Отпечатай';
$lng['listings']['recommend_this'] = 'Сподели';
$lng['listings']['more_listings'] = 'Други обяви на този потребител';
$lng['listings']['all_listings_for'] = 'Всички обяви за';
$lng['listings']['free_category'] = 'FREE Категория';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Сигурни ли сте, че искате да изтриете снимката?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Надхвърлена квота на използвани думи!Можете да използвате максимум ::MAX:: думи'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Вашата обява съдържа забранени за употреба думи! Моля, редактирайте текста си!';
$lng['listings']['errors']['title_missing']='Моля въведете заглавие на вашата обява!';
$lng['listings']['errors']['category_missing']='Моля изберете категория!';
$lng['listings']['errors']['invalid_category']='Невалидна категория!';
$lng['listings']['errors']['package_missing']='Моля изберете план!';
$lng['listings']['errors']['invalid_package']='Невалиден план!';
$lng['listings']['errors']['content_missing']='Моля въведете съдържание за вашата обява!';
$lng['listings']['errors']['invalid_price']='Грешно изписана цена! Моля използвайте цифри';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Най-ниска цена';
$lng['quick_search']['price_high'] = 'Най-висока цена';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Публикувай нова обява';
$lng['useraccount']['browse_your_listings'] = 'Моите обяви';
$lng['useraccount']['modify_account_info'] = 'Инфо за профила';
$lng['useraccount']['order_history'] = 'Моите поръчки';
$lng['useraccount']['total_listings'] = 'Общо обяви';
$lng['useraccount']['total_views'] = 'Всички показвания';
$lng['useraccount']['active_listings'] = 'Активни обяви';
$lng['useraccount']['pending_listings'] = 'Чакащи одобрение обяви';
$lng['useraccount']['last_login'] = 'Последно влизане';
$lng['useraccount']['last_login_ip'] = 'Последно влизане от IP';
$lng['useraccount']['expired_listings'] = 'Изтекли обяви';
$lng['useraccount']['statistics'] = 'Статистика';
$lng['useraccount']['welcome'] = 'Добре дошли';
$lng['useraccount']['contact_name'] = 'Име за контакт';
$lng['useraccount']['email'] = 'Имейл';
$lng['useraccount']['password'] = 'Парола';
$lng['useraccount']['repeat_password'] = 'Повторете паролата';
$lng['useraccount']['change_password'] = 'Промени паролата';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'до';
$lng['advanced_search']['price_min'] = 'Минимална цена';
$lng['advanced_search']['price_max'] = 'Максимална цена';
$lng['advanced_search']['word'] = 'Ключови думи';
$lng['advanced_search']['sort_by'] = 'Сортирай по';
$lng['advanced_search']['sort_by_price'] = 'Сортирай по цена';
$lng['advanced_search']['sort_by_date'] = 'Сортирай по дата';
$lng['advanced_search']['sort_by_make'] = 'Сортирай по производител';
$lng['advanced_search']['sort_descendant'] = 'Сортирай по низходящ ред';
$lng['advanced_search']['sort_ascendant'] = 'Сортирай по възходящ ред';
$lng['advanced_search']['only_ads_with_pic'] = 'Само обяви със снимки';
$lng['advanced_search']['no_results'] = 'Няма обяви съвпадащи с вашето търсене!';
$lng['advanced_search']['multiple_ads_matching'] = 'Няма обяви,::NO_ADS::които съответстват на Вашето търсене!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Една обява съвпада с вашето търсене!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Име';
$lng['contact']['subject'] = 'Тема';
$lng['contact']['email'] = 'Имейл';
$lng['contact']['webpage'] = 'Уеб страница';
$lng['contact']['comments'] = 'Съобщение';
$lng['contact']['message_sent'] = 'Вашето съобщение е изпратено!';
$lng['contact']['sending_message_failed'] = 'Грешка при изпращане на съобщението!';
$lng['contact']['mailto'] = 'Имейл до';

$lng['contact']['error']['name_missing'] = 'Моля попълнете вашето име!';
$lng['contact']['error']['subject_missing'] = 'Моля попълнете тема!';
$lng['contact']['error']['email_missing'] = 'Моля попълнете вашият имейл!';
$lng['contact']['error']['invalid_email'] = 'Невалиден имейл адрес!';
$lng['contact']['error']['comments_missing'] = 'Моля попълнете вашите коментари!';
$lng['contact']['error']['invalid_validation_number'] = 'Невалиден код за валидност!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Имейл адрес';
$lng['password_recovery']['new_password'] = 'Нова парола';
$lng['password_recovery']['repeat_new_password'] = 'Повторете новата парола';
$lng['password_recovery']['invalid_key'] = 'Невалиден ключ за възстановяване на паролата';

$lng['password_recovery']['email_missing'] = 'Моля попълнете вашият имейл адрес!';
$lng['password_recovery']['invalid_email'] = 'Невалиден имейл адрес';
$lng['password_recovery']['email_inexistent'] = 'Няма регистрация с този имейл';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Сума';
$lng['packages']['words'] = 'думи за обява';
$lng['packages']['days'] = 'дни';
$lng['packages']['pictures'] = 'снимки';
$lng['packages']['picture'] = 'снимка';
$lng['packages']['available'] = 'Продължителност на абонамента:';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Плащане';
$lng['order_history']['amount'] = 'Сума';
$lng['order_history']['completed'] = 'Завършена';
$lng['order_history']['not_completed'] = 'Незавършена';
$lng['order_history']['ad_no'] = 'Номер на обява';
$lng['order_history']['date'] = 'Дата';
$lng['order_history']['no_actions'] = 'няма намерен запис';
$lng['order_history']['order_by_date'] = 'Сортирай по дата';
$lng['order_history']['order_by_amount'] = 'Сортирай по цена';
$lng['order_history']['order_by_processor'] = 'Сортирай по начин на плащане';
$lng['order_history']['description'] = 'Описание';
$lng['order_history']['newad'] = 'Нова обява'; 
$lng['order_history']['renew'] = 'Поднови'; 
$lng['order_history']['featured'] = 'Препоръчана обява'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Сортирай по дата';
$lng['order']['price'] = 'Сортирай по цена';
$lng['order']['title'] = 'Сортирай по заглавие';
$lng['order']['desc'] = 'Наличен';
$lng['order']['asc'] = 'Възходящ';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Сподели тази обява';
$lng['recommend']['your_name'] = 'Вашето име';
$lng['recommend']['your_email'] = 'Вашият имейл';
$lng['recommend']['friend_name'] = 'Име на приятел';
$lng['recommend']['friend_email'] = 'Имейл на приятел';
$lng['recommend']['message'] = 'Съобщение до приятел';


$lng['recommend']['error']['your_name_missing'] = 'Моля попълнете вашето име';
$lng['recommend']['error']['your_email_missing'] = 'Моля попълнете вашият имейл!';
$lng['recommend']['error']['friend_name_missing'] = 'Моля попълнете името на вашият приятел!';
$lng['recommend']['error']['friend_email_missing'] = 'Моля попълнете имейла на вашият приятел!';
$lng['recommend']['error']['invalid_email'] = 'Невалиден имейл адрес';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Обяви';
$lng['stats']['general'] = 'Общи';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Абонамент';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Статус';
$lng['general']['favourites'] = 'Предпочитани';
$lng['general']['as'] = 'as';
$lng['general']['view'] = 'Виж';
$lng['general']['none'] = 'Без';
$lng['general']['yes'] = 'Да';
$lng['general']['no'] = 'Не';
$lng['general']['next'] = 'Следващ »';
$lng['general']['finish'] = 'Край';
$lng['general']['download'] = 'Изтегли';
$lng['general']['remove'] = 'Премести';
$lng['general']['previous_page'] = '«Назад';
$lng['general']['next_page'] = 'Напред »';
$lng['general']['items'] = 'позиции';
$lng['general']['active'] = 'Активен';
$lng['general']['inactive'] = 'Неактивен';
$lng['general']['expires'] = 'Изтича на';
$lng['general']['available'] = 'Наличен';
$lng['general']['cancel'] = 'Отмени';
$lng['general']['never'] = 'Никога';
$lng['general']['asc'] = 'Възходящ';
$lng['general']['desc'] = 'Низходящ';
$lng['general']['pending'] = 'Чакащи одобрение';
$lng['general']['upload'] = 'Качване';
$lng['general']['processing'] = 'Обработване, моля изчакайте ... ';
$lng['general']['help'] = 'Помощ';
$lng['general']['hide'] = 'Скрий';
$lng['general']['link'] = 'Връзка';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Това е ограничена демо версия. Не се позволява промяната на определени параметри!';
$lng['general']['check_all'] = 'Маркирай всички';
$lng['general']['uncheck_all'] = 'Размаркирай всички';
$lng['general']['all'] = 'Всички';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Дилър страница';
$lng['users']['store_banner'] = 'Банер на дилър страница';
$lng['users']['waiting_mail_activation'] = 'Очаква активиране по имейл';
$lng['users']['waiting_admin_activation'] = 'Очаква одобрение от администратор';
$lng['users']['no_such_id'] = 'Несъществуващ потребител';

$lng['users']['info']['store_banner'] = 'Изображение, което ще бъде използвано като топ изображение на дилър страница ви.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Съобщи за некоректна обява';
$lng['listings']['report_reason'] = 'Съобщи причина';
$lng['listings']['meta_info'] = 'Мета информация';
$lng['listings']['meta_keywords'] = 'Мета ключови думи';
$lng['listings']['meta_description'] = 'Мета описание';
$lng['listings']['not_approved'] = 'Неодобрен';
$lng['listings']['approve'] = 'Одобрен';
$lng['listings']['choose_payment_method'] = 'Избери метод на плащане';

$lng['listings']['choose_category'] = 'Категория';
$lng['listings']['choose_plan'] = 'Избери план';
$lng['listings']['enter_ad_details'] = 'Детайли';
$lng['listings']['ad_details'] = 'Детайли на обявата';
$lng['listings']['add_photos'] = 'Снимки';
$lng['listings']['ad_photos'] = 'Снимки на обявата';
$lng['listings']['edit_photos'] = 'Редактирай снимките';
$lng['listings']['extra_options'] = 'Допълнителни опции';
$lng['listings']['review'] = 'Преглед на обявата';
$lng['listings']['finish'] = 'Край';
$lng['listings']['next_step'] = 'Следваща стъпка »';
$lng['listings']['included'] = 'Включен';
$lng['listings']['finalize'] = 'Активирай';
$lng['listings']['zip'] = 'Пощенски код';
$lng['listings']['add_to_favourites'] = 'Прибави към предпочитани';
$lng['listings']['confirm_add_to_fav'] = 'Внимание ! Не сте в профила си!Списъкът с предпочитани няма да бъде запазен!';
$lng['listings']['add_to_fav_done'] = 'Обявата беше добавена в списъка с предпочитани!';
$lng['listings']['confirm_delete_favourite'] = 'Сигурен ли сте, че искате да изтриете тази обява от Предпочитани?';
$lng['listings']['no_favourites'] = 'Няма намерени предпочитани обяви';
$lng['listings']['extra_options'] = 'Допълнителни опции';
$lng['listings']['highlited'] = 'Оцветена обява';
$lng['listings']['priority'] = 'С приоритет';
$lng['listings']['video'] = 'Видео обяви';
$lng['listings']['short_video'] = 'Видео';
$lng['listings']['pending_video'] = 'Чакащо одобрение видео';
$lng['listings']['video_code'] = 'Видео код';
$lng['listings']['total'] = 'Общо';
$lng['listings']['approve_ad'] = 'Одобрявам обява';
$lng['listings']['finalize_later'] = 'Приключи по-късно';
$lng['listings']['click_to_upload'] = 'Кликнете, за да качите';
$lng['listings']['files_uploaded'] = ' качени снимки от ';
$lng['listings']['allowed'] = ' позволени снимки!';
$lng['listings']['limit_reached'] = 'Достигнат е лимита на броя разрешени снимки!';
$lng['listings']['edit_options'] = 'Редактиране на опции за обявата';
$lng['listings']['view_store'] = 'Виж дилърската страница';
$lng['listings']['edit_ad_options'] = 'Редактирай допълнителните опции на обявата';
$lng['listings']['no_extra_options_selected'] = 'Не са избрани допълнителни опции!';
$lng['listings']['highlited_listings'] = 'Специални обяви';
$lng['listings']['for_listing'] = 'за обява No ';
$lng['listings']['expires_on'] = 'Изтича на';
$lng['listings']['expired_on'] = 'Изтекла на';
$lng['listings']['pending_ad'] = 'Чакаща одобрение обява';
$lng['listings']['pending_highlited'] = 'Чакаща одобрение одобрение обява';
$lng['listings']['pending_featured'] = 'Чакаща одобрение препоръчана обява';
$lng['listings']['pending_priority'] = 'Чакаща одобрение обява с приоритет';
$lng['listings']['enter_coupon'] = 'Въведете код за отстъпка';
$lng['listings']['discount'] = 'Отстъпка';
$lng['listings']['select_plan'] = 'Избери';
$lng['listings']['pending_subscription'] = 'Чакащ одобрение абонамент';
$lng['listings']['remove_favourite'] = 'Премести Предпочетен';

$lng['listings']['order_up'] = 'Подреди по-напред';
$lng['listings']['order_down'] = 'Подреди по-назад';

$lng['listings']['errors']['invalid_youtube_video'] = 'Невалидно youtube видео!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Абонирай се';
$lng['useraccount']['no_package'] = 'Нямате абонаменти за публикуване на обяви';
$lng['useraccount']['packages'] = 'Планове';
$lng['useraccount']['date_start'] = 'Начална дата';
$lng['useraccount']['date_end'] = 'Крайна дата';
$lng['useraccount']['remaining_ads'] = 'Оставащи обяви';
$lng['useraccount']['account_type'] = 'Тип на профила';
$lng['useraccount']['unfinished_listings'] = 'Незавършени обяви';
$lng['useraccount']['confirm_delete_subscription'] = 'Сигурен ли сте , че искате да изтриете този абонамент?';
$lng['useraccount']['buy_store'] = 'Купи дилър страница';
$lng['useraccount']['bulk_uploads'] = 'Масово публикуване';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Абонамент';
$lng['packages']['ads'] = 'Обяви';
$lng['packages']['name'] = 'Име';
$lng['packages']['details'] = 'Детайли';
$lng['packages']['no_ads'] = 'Брой на обявите';
$lng['packages']['subscription_time'] = 'Продължителност на абонамента';
$lng['packages']['no_pictures'] = 'Брой позволени снимки';
$lng['packages']['no_words'] = 'Брой думи';
$lng['packages']['ads_availability'] = 'Продължителност на обявите';
$lng['packages']['featured'] = 'Препоръчани';
$lng['packages']['highlited'] = 'Оцветени';
$lng['packages']['priority'] = 'С приоритет';
$lng['packages']['video'] = 'Видео обяви';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Абонамент';
$lng['order_history']['post_listing'] = 'Публикувани обяви';
$lng['order_history']['renew_listing'] = 'Подновени обяви';
$lng['order_history']['feature_listing'] = 'Препоръчани обяви';
$lng['order_history']['subscribe_to_package'] = 'Абонирай се за абонаментен план';
$lng['order_history']['complete_payment'] = 'Завърши плащането';
$lng['order_history']['complete_payment_for'] = 'Завърши плащането за';
$lng['order_history']['details'] = 'Детайли';
$lng['order_history']['subscription_no'] = 'Абонамент No';
$lng['order_history']['highlited'] = 'Оцветени обяви';
$lng['order_history']['priority'] = 'Приоритет';
$lng['order_history']['video'] = 'Видео обяви';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Моля, изберете план!';
$lng['buy_package']['error']['choose_processor'] = 'Моля, изберете метод за плащане!';
$lng['buy_package']['error']['invalid_processor'] = 'Невалиден метод за плащане!';
$lng['buy_package']['error']['invalid_package'] = 'Невалиден план!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Невалидна Paypal транзакция!';
$lng['2co']['invalid_transaction'] = 'Невалидна 2Checkout транзакция!';
$lng['moneybookers']['invalid_transaction'] = 'Невалидна Moneybookers транзакция!';
$lng['authorize']['invalid_transaction'] = 'Невалидна Authorize.net транзакция!';
$lng['manual']['invalid_transaction'] = 'Невалидна транзакция!';

$lng['paypal']['transaction_canceled'] = 'Анулирана Paypal транзакция!';
$lng['2co']['transaction_canceled'] = 'Анулирана 2Checkout транзакция!';
$lng['mb']['transaction_canceled'] = 'Анулирана Moneybookers транзакция!';
$lng['authorize']['transaction_canceled'] = 'Анулирана Authorize.net !';
$lng['manual']['transaction_canceled'] = 'Анулирана транзакция!';
$lng['epay']['transaction_canceled'] = 'Анулирана ePay транзакция!';

$lng['payments']['transaction_already_processed'] = 'Транзакцията е извършена!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Потвърди абонамента';
$lng['subscribe']['payment_method'] = 'Метод на плащане';
$lng['subscribe']['renew_subscription'] = 'Поднови абонамента';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Копирай имейла: ';
$lng['bcc_mails']['from'] = 'От: ';
$lng['bcc_mails']['to'] = 'За: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Статус Масово публикуване: ';
$lng['ie']['successfully'] = 'успешно прибавени обяви';
$lng['ie']['failed'] = 'неуспешно';
$lng['ie']['uploaded_listings'] = 'Списък с качени обяви:';
$lng['ie']['errors']['upload_import_file'] = 'Моля качете файл за импорт!';
$lng['ie']['errors']['incorrect_file_type'] = 'Некоректен тип файл!Файлът трябва да е : ';
$lng['ie']['errors']['could_not_open_file'] = 'Файлът не може да бъде отворен!';
$lng['ie']['errors']['choose_categ'] = 'Моля, изберете категория!';
$lng['ie']['errors']['could_not_save_file'] = 'Не можете да изтеглите файл: ';
$lng['ie']['errors']['required_field_missing'] = 'Търсеният файл липсва: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Некоректни данни в ред No: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Избери дилър';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Търси по район';
$lng['areasearch']['all_locations'] = 'Всички локации';
$lng['areasearch']['exact_location'] = 'Определена локация';
$lng['areasearch']['around'] = 'около';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Да';
$lng['general']['No'] = 'Не';
$lng['general']['or'] = 'или';
$lng['general']['in'] = 'в';
$lng['general']['by'] = 'чрез';
$lng['general']['close_window'] = 'Затвори прозорец';
$lng['general']['more_options'] = 'с повече опции »';
$lng['general']['less_options'] = '« с по-малко опции';
$lng['general']['send'] = 'Изпрати';
$lng['general']['save'] = 'Запази';
$lng['general']['for'] = 'за';
$lng['general']['to'] = 'до';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Отбележи като нает';
$lng['listings']['mark_unrented'] = 'Отхвърли като нает';
$lng['listings']['rented'] = 'Нает';
$lng['listings']['your_info'] = 'Лична информация';
//******
$lng['listings']['email'] = 'Вашият имейл адрес';
$lng['listings']['name'] = 'Вашето име';

$lng['listings']['listing_deleted'] = 'Вашите обяви бяха изтрити!';
$lng['listings']['post_without_login'] = 'Публикувай без регистрация';
$lng['listings']['waiting_activation'] = 'Очаква активиране';
$lng['listings']['waiting_admin_approval'] = 'Очаква одобрение от администратор';
$lng['listings']['dont_need_account'] = 'Публикувайте обява без регистрация!';
$lng['listings']['post_your_ad'] = 'Публикувайте обявата си!';
$lng['listings']['posted'] = 'Публикувани';
$lng['listings']['select_subscription'] = 'Select Subscription';
$lng['listings']['choose_subscription'] = 'Choose Subscription';
$lng['listings']['inactive_listings'] = 'Неактивни обяви';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Детайлно търсене';
$lng['search']['refine_by_keyword'] = 'Уточни чрез ключова дума';
$lng['search']['showing'] = 'Показване';
$lng['search']['more'] = 'Повече ...';
$lng['search']['less'] = 'По-малко ...';
$lng['search']['search_for'] = 'Търси';
$lng['search']['save_your_search'] = 'Запази търсенето';
$lng['search']['save'] = 'Запази';
$lng['search']['search_saved'] = 'Търсенето Ви беше запазено!';
$lng['search']['must_login_to_save_search'] = 'Трябва да влезете в профила си, за да запазите търсенето си!';
$lng['search']['view_search'] = 'Резултати от търсенето';
$lng['search']['all_categories'] = 'Всички категории';
$lng['search']['more_than'] = 'повече от';
$lng['search']['less_than'] = 'по-малко от';

$lng['search']['error']['cannot_save_empty_search'] = 'Търсенето Ви не съдържа никакви данни и не може да бъде запазено!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Запазени търсения';
$lng['useraccount']['view_saved_searches'] = 'Виж запазените търсения';
$lng['useraccount']['no_saved_searches'] = 'Няма запазени търсения';
$lng['useraccount']['recurring'] = 'Повтарящ се';
$lng['useraccount']['date_renew'] = 'Подновена от дата';
$lng['useraccount']['logged_in_as'] = 'Здравейте,';
$lng['useraccount']['subscriptions'] = 'Абонаменти';

$lng['users']['activate_account'] = 'Активен профил';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Добави абонамент';
$lng['subscriptions']['package'] = 'Абонамент';
$lng['subscriptions']['remaining_ads'] = 'Оставащи обяви';
$lng['subscriptions']['recurring'] = 'Подновяващ се';
$lng['subscriptions']['date_start'] = 'Начална дата';
$lng['subscriptions']['date_end'] = 'Крайна дата';
$lng['subscriptions']['date_renew'] = 'Дата на подновяване';
$lng['subscriptions']['confirm_delete'] = 'Сигурни ли сте, че искате да премахнете този абонамент?';
$lng['subscriptions']['no_subscriptions'] = 'Няма абонаменти';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = ' Нямате профил? Регистрирайте се безплатно!';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Разреши автоматично плащане за подновяване на този абонамент';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Следните избрани файлове липсват: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Купи дилър страница';


$lng['images']['errors']['max_photos'] = 'Максимум качени снимки!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Имейл известяване';
$lng['alerts']['email_alerts'] = 'Имейл известия';
$lng['alerts']['no_alerts'] = 'Няма имейл известия';
$lng['alerts']['view_email_alerts'] = 'Виж своите имейл съобщения';
$lng['alerts']['send_email_alerts'] = 'Изпрати имейл съобщение';
$lng['alerts']['immediately'] = 'Веднага';
$lng['alerts']['daily'] = 'Дневно';
$lng['alerts']['weekly'] = 'Седмично';
$lng['alerts']['your_email'] = 'вашият имейл адрес';
$lng['alerts']['create_alert'] = 'създай известие';
$lng['alerts']['email_alert_info'] = 'Получаване на съобщение по имейл при публикуване на нова обява по това търсене.';
$lng['alerts']['alert_added'] = 'Вашето известие беше създадено!';
$lng['alerts']['alert_added_activate'] = 'Скоро ще получите имейл на  <b>::EMAIL::</b>. Моля, кликнете върху линка в имейла, за да активирате имейл известяването!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Търси в';
$lng['alerts']['keyword'] = 'ключова дума';
$lng['alerts']['frequency'] = 'Честота на известяването';
$lng['alerts']['alert_activated'] = 'Вашето известие беше създадено! Сега ще започнете да получавате имейли, съответстващи на Вашето известие.';
$lng['alerts']['alert_unsubscribed'] = 'Вашето известие беше изтрито!';
$lng['alerts']['started_on'] = 'Стартира на';
$lng['alerts']['no_terms_searched'] = 'Няма термини, отговарящи на търсенето!';
$lng['alerts']['no_listings'] = 'Няма обяви по тези критерии!';

$lng['alerts']['error']['email_required'] = 'Моля, отбележете имейл адрес за своето известие!';
$lng['alerts']['error']['invalid_email'] = 'Невалиден имейл адрес за известяване!';
$lng['alerts']['error']['invalid_frequency'] = 'Невалиден период на известията!';
$lng['alerts']['error']['login_required'] = 'Моля <a href="::LINK::">регистрирайте се</a> за да можете да публикувате известие!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Моля, изберете поне един бутон за търсене, с изключение на категория!';
$lng['alerts']['error']['invalid_confirmation'] = 'Невалидно потвърждение!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Невалидно искане за отписване!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Ипотечен калкулатор';
$lng_loancalc['sale_price'] = 'Продажна цена';
$lng_loancalc['down_payment'] = 'Първоначална вноска';
$lng_loancalc['trade_in_value'] = 'Обратно изкупуване';
$lng_loancalc['loan_amount'] = 'Сума на заема';
$lng_loancalc['sales_tax'] = 'Такси при продажба';
$lng_loancalc['interest_rate'] = 'Лихвен процент';
$lng_loancalc['loan_term'] = 'Срок на заема';
$lng_loancalc['months'] = 'месеца';
$lng_loancalc['years'] = 'години';
$lng_loancalc['or'] = 'или';
$lng_loancalc['monthly_payment'] = 'Месечно плащане';
$lng_loancalc['calculate'] = 'Изчисли';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Коментари';
$lng_comments['make_a_comment'] = 'Направи коментар';
$lng_comments['login_to_post'] = 'Моля <a href="::LOGIN_LINK::">влезте в профила си</a> за да може да коментирате.';

$lng_comments['name'] = 'Име';
$lng_comments['email'] = 'Имейл';
$lng_comments['website'] = 'Уеб сайт';
$lng_comments['submit_comment'] = 'Публикувай коментар';

$lng_comments['error']['name_missing'] = 'Моля въведете вашето име!';
$lng_comments['error']['content_missing'] = 'Моля въведете коментар!';
$lng_comments['error']['website_missing'] = 'Моля въведете уеб сайт';
$lng_comments['error']['email_missing'] = 'Моля въведете вашият имейл!';
$lng_comments['error']['listing_id_missing'] = 'Невалиден коментар!';

$lng_comments['error']['invalid_email'] = 'Невалиден имейл адрес!';
$lng_comments['error']['invalid_website'] = 'Невалиден уеб сайт!';
$lng_comments['errors']['badwords'] = 'Вашият коментар съдържа забранени думи! Моля, редактирайте вашето съобщение!';

$lng_comments['info']['comment_added'] = 'Коментарът е добавен! Натиснете <a id="newad">тук,</a> ако искате да добавите нов коментар.';
$lng_comments['info']['comment_pending'] = 'Вашето съобщение изчаква одобрение от администратор.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'Напред »';
$lng['tb']['prev'] = '« Назад';
$lng['tb']['close'] = 'Затвори';
$lng['tb']['or_esc'] = 'или ESC клавиш';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Съобщения';
$lng['messages']['confirm_delete_all'] = 'Сигурни ли сте, че искате да изтриете избраните съобщения?';
$lng['messages']['listing'] = 'Обява';
$lng['messages']['no_messages'] = 'Няма съобщения';
$lng['general']['reply'] = 'Отговор на съобщението';
$lng['messages']['message'] = 'Съобщение';
$lng['messages']['from'] = 'От';
$lng['messages']['to'] = 'До';
$lng['messages']['on'] = 'На';
$lng['messages']['view_thread'] = 'Проследяване на кореспонденцията';
$lng['messages']['started_for_listing'] = 'Относно обява';
$lng['messages']['view_complete_message'] = 'Преглед на цялото съобщение';
$lng['messages']['message_history'] = 'История на съобщенията';
$lng['messages']['yourself'] = 'Вие';
$lng['messages']['report_spam'] = 'Докладвай за спам';
$lng['messages']['reported_as_spam'] = 'Докладвай като спам';
$lng['messages']['confirm_report_spam'] = 'Сигурни ли сте, че искате да докладвате това съобщение като спам?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Невалидно id на обявата';
$lng['listings']['show_map'] = 'Покажи карта';
$lng['listings']['hide_map'] = 'Скрий карта';
$lng['listings']['see_full_listing'] = 'Виж цялата обява';
$lng['listings']['list'] = 'Покажи като списък';
$lng['listings']['gallery'] = 'Покажи като галерия';
$lng['listings']['remove_fav_done'] = 'Обявата беше отделена от листа с предпочитани!';
$lng['search']['high_no_results'] = 'Резултатите от търсенето ви са многобройни. Изброените резултати са най-близо до търсенето Ви. Моля, прецизирайте търсенето си, за да намалите броя на намерените обяви и получите максимално точни резултати!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Използването на този имейл не е разрешено!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Не може да използвате повече този абонамент, достигнали сте максимума обяви за този план!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Избери локация';
$lng['location']['choose'] = 'Избери';
$lng['location']['change'] = 'Промени';
$lng['location']['all_locations'] = 'Всички локации';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Category';
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

$lng['today'] = 'Днес';
$lng['messages']['confirm_delete'] = 'Сигурни ли сте, че искате да изтриете това съобщение?';
$lng['listings']['change_category'] = 'Смяна на категория';
$lng['listings']['change_plan'] = 'Избери различен план';
$lng['listings']['choose_active_subscription'] = 'Избери от твоите активни абонаменти';


$lng['useraccount']['request_removal'] = 'Поискай премахване на профила';
$lng['useraccount']['request_removal_now'] = 'Поискай премахване на профила сега!';
$lng['useraccount']['removal_verification_sent'] = 'Ще получите email, съдържащ верифициращ линк. Моля, кликнете на линка, за да потвърдите заявката за премахване на профила!';

$lng['contact']['message_waits_admin_aproval'] = 'Вашето съобщение ще бъде доставено, след като бъде одобрено от администратор!';

$lng['general']['accept'] = 'Приемам';
$lng['general']['decline'] = 'Отхвърлям';

$lng['general']['tax'] = 'данък';
$lng['general']['total_with_tax'] = 'Всичко с данък';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'В категория';

$lng['users']['user_info'] = 'Информация за потребителя';
$lng['users']['store_info'] = 'Информация за магазина';
$lng['users']['user_listings'] = 'Всички обяви';

$lng['login']['errors']['invalid_email_pass'] = 'Невалиден email или парола!';
$lng['general']['or'] = 'или';
$lng['newad']['choose_a_new_plan'] = 'Избери нов план';

$lng['listings']['no_extra_options_available'] = 'Няма налични екстра опции!';

$lng['listings']['map'] = 'Карта';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'резултат';

$lng['confirm_delete'] = 'Сигурни ли сте,чеискате да изтриете избраните?';
$lng['confirm_delete_all'] = 'Сигурни ли сте,чеискате да изтриете избраните?';

$lng['general']['show'] = 'Покажи';
$lng['general']['on_a_page'] = 'на страница';
$lng['general']['return'] = 'Назад';

$lng['login']['register_for_free'] = 'Безплатна регистрация!';
$lng['general']['sent'] = 'Изпратен';
$lng['general']['received'] = 'Получен';
$lng['messages']['spam'] = 'Спам';

$lng['newad']['not_logged_in'] = 'Не сте влезли в профила си!';
$lng['newad']['or_post_without_account'] = 'или продължете публикуването без профил!';

$lng_comments['scomments'] = 'коментари';
$lng_comments['scomment'] = 'коментар';
$lng['general']['on'] = 'на';

$lng['affiliates']['last_payment'] = 'Последни плащания';
$lng['affiliates']['last_payment_date'] = 'Дата на последно плащане';
$lng['affiliates']['next_payment_date'] = 'Дата за следващо плащане';
$lng['affiliates']['total_due'] = 'Общо дължимо';
$lng['affiliates']['total_payments'] = 'Получени общо плащания';
$lng['affiliates']['revenue_history'] = 'История на приходите';
$lng['affiliates']['payments_history'] = 'История на плащанията';
$lng['affiliates']['pending_payment'] = 'В очакване на плащане';
$lng['affiliates']['released'] = 'Издаден';
$lng['affiliates']['not_released'] = 'Неиздаден';
$lng['affiliates']['paid'] = 'Платени';
$lng['affiliates']['not_paid'] = 'Неплатени';

$lng['general']['no_items'] = 'No items';
$lng['useraccount']['amount_start'] = 'Сума от';
$lng['useraccount']['amount_end'] = 'Сума до';
$lng['not_allowed_to_post_ads'] = 'Не сте оторизирани да публикувате обяви с този профил!';

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
