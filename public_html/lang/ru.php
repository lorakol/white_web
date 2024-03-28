<?php
/*	
*		
* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)	
* version 9	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).	
*
*/
// ------------------ NAVBAR -------------------

$lng['navbar']['home'] = 'Главная';
$lng['navbar']['login'] = 'Вход';
$lng['navbar']['logout'] = 'Выход';
$lng['navbar']['recent_ads'] = 'Последние объявления';
$lng['navbar']['register'] = 'Регистрация';
$lng['navbar']['submit_ad'] = 'Добавить объявление';
$lng['navbar']['editad'] = 'Редактировать объявление';
$lng['navbar']['my_account'] = 'Мой аккаунт';
$lng['navbar']['administrator_panel'] = 'Панель администратора';
$lng['navbar']['contact'] = 'Сообщение администратору';
$lng['navbar']['password_recovery'] = 'Восстановление пароля';
$lng['navbar']['renew_listing'] = 'Обновить Объявление';
// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Готово';
$lng['general']['search'] = 'Поиск';
$lng['general']['contact'] = 'Сообщение автору';
$lng['general']['activeads'] = 'активных объявлений';
$lng['general']['activead'] = 'активное объявление';
$lng['general']['subcats'] = 'подразделов';
$lng['general']['subcat'] = 'подраздел';
$lng['general']['view_ads'] = 'Просмотр объявлений';
$lng['general']['back'] = '« Назад';
$lng['general']['goto'] = 'Перейти';
$lng['general']['page'] = 'Страница';
$lng['general']['of'] = 'из';
$lng['general']['other'] = 'Другое';
$lng['general']['NA'] = 'Недоступно';
$lng['general']['add'] = 'Добавить';
$lng['general']['delete_all'] = 'Удалить все выбранное';
$lng['general']['action'] = 'Действие';
$lng['general']['edit'] = 'Редактировать';
$lng['general']['delete'] = 'Удалить';
$lng['general']['total'] = 'Всего';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'БЕСПЛАТНО';
$lng['general']['not_authorized'] = 'Для просмотра этой страницы необходимо войти на сайт!';
$lng['general']['access_restricted'] = 'Вы не имеете прав доступа к этой странице!';
$lng['general']['featured_ads'] = 'Рекомендуемые объявления';
$lng['general']['latest_ads'] = 'Последние объявления';
$lng['general']['quick_search'] = 'Быстрый поиск';
$lng['general']['go'] = 'Вперёд';
$lng['general']['unlimited'] = 'Неограниченный';
// ---------------------- IMAGE CLASS ERRORS ---------------------
$lng['images']['errors']['file_exists_unwriteable'] = 'Файл с таким названием уже есть в системе, пожалуйста выберите другое!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Вы можете загружать файлы размером не более ::MAX_FILE_UPLOAD_SIZE::Кб!'; 
// пожалуйста, оставьте без изменений тег ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Слишком большой размер изображения! Пожалуйста уменьшите ширину изображения до ::MAX_FILE_WIDTH::px и высоту до ::MAX_FILE_HEIGHT::px!';  
// пожалуйста, оставьте без изменений теги ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Этот файл не может быть загружен!';
$lng['images']['errors']['no_file'] = 'Пожалуйста выберите файл для загрузки на сайт!';
$lng['images']['errors']['no_folder'] = 'Папка для загрузки не существует!';
$lng['images']['errors']['folder_not_writeable'] = 'Запись в папку загрузки запрещена!';
$lng['images']['errors']['file_type_not_accepted'] = 'Загружаемый Вами файл не является изображением, либо не поддерживается!';
$lng['images']['errors']['error'] = 'Во время загрузки произошла ошибка. Сообщение об ошибке: ::ERROR::'; 
// пожалуйста, оставьте без изменений тег ::ERROR:: 
$lng['images']['errors']['no_thmb_folder'] = 'Папка для загрузки миниатюр изображений не существует!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Запись в папку загрузки миниатюр изображений запрещена!';
$lng['images']['errors']['no_jpg_support'] = 'Файлы JPG не поддерживаются!';
$lng['images']['errors']['no_png_support'] = 'Файлы PNG не поддерживаются!';
$lng['images']['errors']['no_gif_support'] = 'Файлы GIF не поддерживаются!';
$lng['images']['errors']['jpg_create_error'] = 'Ошибка при создании изображения JPG!';
$lng['images']['errors']['png_create_error'] = 'Ошибка при создании изображения PNG!';
$lng['images']['errors']['gif_create_error'] = 'Ошибка при создании изображения GIF!';
// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Вход';
$lng['login']['logout'] = 'Выход';
$lng['login']['username'] = 'Логин';
$lng['login']['password'] = 'Пароль';
$lng['login']['forgot_pass'] = 'Забыли пароль или логин? Можно ';
$lng['login']['click_here'] = '<b>ВОССТАНОВИТЬ</b>';
$lng['login']['errors']['password_missing'] = 'Заполните поле Пароль!';
$lng['login']['errors']['username_missing'] = 'Заполните поле Логин!';
$lng['login']['errors']['username_invalid'] = 'Такого пользователя не существует!';
$lng['login']['errors']['invalid_username_pass'] = 'Неправильный логин или пароль!';
// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Выход';
$lng['logout']['loggedout'] = 'Вы вышли из своего аккаунта!';
// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Регистрация';
$lng['users']['repeat_password'] = 'Повторите пароль';
$lng['users']['image_verification_info'] = 'Пожалуйста введите символы с картинки.<br />Возможные значения - буквы латинского алфавита от a до h в нижнем регистре и цифры от 1 до 9.';
$lng['users']['already_logged_in'] = 'Вы уже вошли на сайт!';
$lng['users']['select'] = 'Выбрать';
$lng['users']['info']['activate_account'] = 'По указанному Вами адресу было выслано письмо с инструкциями по активации Вашего аккаунта.';
$lng['users']['info']['welcome_user'] = 'Ваш аккаунт создан. Вы можете <a href="login.php">войти</a> на Вашу персональную страницу!';
$lng['users']['info']['awaiting_admin_verification'] = 'Ваш аккаунт создан и ожидает подтверждения администратора сайта. Вы получите уведомление об активации аккаунта по электронной почте.';
$lng['users']['info']['account_info_updated'] = 'Информация в Вашем аккаунте изменена!';
$lng['users']['info']['password_changed'] = 'Ваш пароль изменён!';
$lng['users']['info']['account_activated'] = 'Ваш аккаунт был активирован администратором! Вы можете <a href="login.php">войти</a> на Вашу персональную страницу.';
$lng['users']['errors']['username_missing'] = 'Пожалуйста заполните поле Логин!';
$lng['users']['errors']['invalid_username'] = 'Недопустимый логин!';
$lng['users']['errors']['username_exists'] = 'Такой логин уже есть в системе! Если Вы его владелец, пожалуйста <a href="login.php">войдите</a>!';
$lng['users']['errors']['email_missing'] = 'Пожалуйста введите Ваш e-mail!';
$lng['users']['errors']['invalid_email'] = 'Некорректный e-mail!';
$lng['users']['errors']['passwords_dont_match'] = 'Пароль не подходит!';
$lng['users']['errors']['email_exists'] = 'Такой e-mail уже зарегистрирован! Если Вы его владелец, пожалуйста <a href="login.php">войдите</a>!';
$lng['users']['errors']['password_missing'] = 'Пожалуйста заполните поле Пароль!';
$lng['users']['errors']['invalid_validation_string'] = 'Строка проверки не совпадает!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Неправильный аккаунт, либо ключ активации! Пожалуйста свяжитесь с администратором!';
$lng['users']['errors']['account_already_active'] = 'Ваш аккаунт уже активирован!';
// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Объявление';
$lng['listings']['category'] = 'Раздел';
$lng['listings']['package'] = 'Пакет';
$lng['listings']['price'] = 'Стоимость';
$lng['listings']['ad_description'] = 'Описание объявления';
$lng['listings']['title'] = 'Заголовок объявления';
$lng['listings']['description'] = 'Описание';
$lng['listings']['image'] = 'Изображение';
$lng['listings']['words_left'] = 'слов осталось';
$lng['listings']['enter_photos'] = 'Выберите изображение';
$lng['listings']['ad_information'] = 'Детальная информация';
$lng['listings']['free'] = 'БЕСПЛАТНО';
$lng['listings']['details'] = 'Детальное описание';
$lng['listings']['stock_no'] = 'Номер';
$lng['listings']['location'] = 'Местоположение';
$lng['listings']['contact_info'] = 'Контактная информация';
$lng['listings']['email_seller'] = 'Связаться с автором объявления';
$lng['listings']['no_recent_ads'] = 'Свежих объявлений пока нет';
$lng['listings']['no_ads'] = 'В этом разделе объявлений пока нет';
$lng['listings']['added_on'] = 'Опубликовано';
$lng['listings']['send_mail'] = 'Написать автору объявления';
$lng['listings']['details'] = 'Детальное описание';
$lng['listings']['user'] = 'Пользователь';
$lng['listings']['price'] = 'Цена';
$lng['listings']['confirm_delete'] = 'Удалить это объявление?';
$lng['listings']['confirm_delete_all'] = 'Удалить все выбранные объявления?';
$lng['listings']['all'] = 'Все объявления';
$lng['listings']['active_listings'] = 'Активные объявления';
$lng['listings']['pending_listings'] = 'Объявления, ожидающие оплаты';
$lng['listings']['featured_listings'] = 'Рекомендуемые объявления';
$lng['listings']['expired_listings'] = 'Просроченные объявления';
$lng['listings']['active'] = 'Активное';
$lng['listings']['inactive'] = 'Неактивное';
$lng['listings']['pending'] = 'Неоплаченное';
$lng['listings']['featured'] = 'Рекомендуемое';
$lng['listings']['expired'] = 'Просрочено';
$lng['listings']['order_by_date'] = 'Сортировка по дате';
$lng['listings']['order_by_category'] = 'Сортировка по разделам';
$lng['listings']['order_by_make'] = 'Сортировка по производителям';
$lng['listings']['order_by_price'] = 'Сортировка по цене';
$lng['listings']['order_by_views'] = 'Сортировка по числу просмотров';
$lng['listings']['order_desc'] = 'В порядке уменьшения';
$lng['listings']['order_asc'] = 'В порядке увеличения';
$lng['listings']['id'] = 'Номер';
$lng['listings']['views'] = 'Число просмотров';
$lng['listings']['date'] = 'Дата';
$lng['listings']['no_listings'] = 'Нет объявлений';
$lng['listings']['NA'] = 'Недоступно';
$lng['listings']['no_such_id'] = 'Такого номера нет!';
$lng['listings']['mark_sold'] = 'Пометить как проданное';
$lng['listings']['mark_unsold'] = 'Снять отметку о продаже';
$lng['listings']['sold'] = 'Продано';
$lng['listings']['feature'] = 'Рекомендуемое';
$lng['listings']['expired_on'] = 'Оканчивается';
$lng['listings']['renew'] = 'Обновить';
$lng['listings']['print_page'] = 'Напечатать';
$lng['listings']['recommend_this'] = 'Поделиться';
$lng['listings']['more_listings'] = 'Все объявления этого пользователя';
$lng['listings']['all_listings_for'] = 'Все объявления пользователя';
$lng['listings']['free_category'] = 'БЕСПЛАТНЫЙ раздел';
// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Удалить изображения в этом объявлении?';
// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Пожалуйста используйте не более ::MAX:: слов для описания'; 
// пожалуйста, оставьте без изменений тег ::MAX::
$lng['listings']['errors']['badwords']='Ваше описание содержит слова, запрещенные для публикации! Пожалуйста исправьте!';
$lng['listings']['errors']['title_missing']='Пожалуйста заполните заголовок объявления!';
$lng['listings']['errors']['category_missing']='Пожалуйста выберите раздел!';
$lng['listings']['errors']['invalid_category']='Неправильный раздел!';
$lng['listings']['errors']['package_missing']='Пожалуйста выберите план размещения!';
$lng['listings']['errors']['invalid_package']='Неправильный план размещения!';
$lng['listings']['errors']['content_missing']='Пожалуйста заполните содержание Вашего объявления!';
$lng['listings']['errors']['invalid_price']='Неправильная цена!';
// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Цена менее';
$lng['quick_search']['price_high'] = 'Цена более';
// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Добавить объявление';
$lng['useraccount']['browse_your_listings'] = 'Управление объявлениями';
$lng['useraccount']['modify_account_info'] = 'Мой аккаунт';
$lng['useraccount']['order_history'] = 'Мои платежи';
$lng['useraccount']['total_listings'] = 'Всего объявлений';
$lng['useraccount']['total_views'] = 'Всего просмотров';
$lng['useraccount']['active_listings'] = 'Активные объявления';
$lng['useraccount']['pending_listings'] = 'Ожидающие активации';
$lng['useraccount']['last_login'] = 'Последний вход';
$lng['useraccount']['last_login_ip'] = 'С IP-адреса ';
$lng['useraccount']['expired_listings'] = 'Просроченные объявления';
$lng['useraccount']['statistics'] = 'Статистика';
$lng['useraccount']['welcome'] = 'Добро пожаловать';
$lng['useraccount']['contact_name'] = 'Ваше имя';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Новый пароль';
$lng['useraccount']['repeat_password'] = 'Повторите пароль';
$lng['useraccount']['change_password'] = 'Смена пароля';
// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = '';
$lng['advanced_search']['price_min'] = 'Мин. цена';
$lng['advanced_search']['price_max'] = 'Макс. цена';
$lng['advanced_search']['word'] = 'ключевое слово';
$lng['advanced_search']['sort_by'] = 'Сортировать по';
$lng['advanced_search']['sort_by_price'] = 'Сортировать по цене';
$lng['advanced_search']['sort_by_date'] = 'Сортировать по дате';
$lng['advanced_search']['sort_by_make'] = 'Сортировать по производителю';
$lng['advanced_search']['sort_descendant'] = 'Сортировать по убыванию';
$lng['advanced_search']['sort_ascendant'] = 'Сортировать по возрастанию';
$lng['advanced_search']['only_ads_with_pic'] = 'Только объявления с изображениями';
$lng['advanced_search']['no_results'] = 'Ничего не найдено! Попробуйте изменить условия поиска.';
$lng['advanced_search']['multiple_ads_matching'] = 'Найдено ::NO_ADS:: объявлений, удовлетворяющих условиям поиска!'; 
// Пожалуйста, оставьте ::NO_ADS:: Тег нетронутыми
$lng['advanced_search']['single_ad_matching'] = 'Найдено 1 объявление, удовлетворяющее условиям поиска!';
// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Ваше имя';
$lng['contact']['subject'] = 'Тема';
$lng['contact']['email'] = 'Ваш E-mail';
$lng['contact']['webpage'] = 'Веб сайт';
$lng['contact']['comments'] = 'Сообщение';
$lng['contact']['message_sent'] = 'Ваше сообщение отправлено!';
$lng['contact']['sending_message_failed'] = 'Не удалось отправить сообщение!';
$lng['contact']['mailto'] = 'Отправить';
$lng['contact']['error']['name_missing'] = 'Пожалуйста заполните Ваше имя!';
$lng['contact']['error']['subject_missing'] = 'Пожалуйста заполните тему сообщения!';
$lng['contact']['error']['email_missing'] = 'Пожалуйста заполните поле "E-mail"!';
$lng['contact']['error']['invalid_email'] = 'Неправильный E-mail!';
$lng['contact']['error']['comments_missing'] = 'Пожалуйста заполните поле "Сообщение"!';
$lng['contact']['error']['invalid_validation_number'] = 'Строка проверки не совпадает!';
// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Ваш E-mail';
$lng['password_recovery']['new_password'] = 'Новый пароль';
$lng['password_recovery']['repeat_new_password'] = 'Повторите пароль';
$lng['password_recovery']['invalid_key'] = 'Пароль не совпадает';
$lng['password_recovery']['email_missing'] = 'Пожалуйста заполните поле E-mail!';
$lng['password_recovery']['invalid_email'] = 'Неправильный E-mail';
$lng['password_recovery']['email_inexistent'] = 'Пользователь с таким E-mail не зарегистрирован на сайте';
// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Стоимость';
$lng['packages']['words'] = 'Слов';
$lng['packages']['days'] = 'Дней';
$lng['packages']['pictures'] = 'Изображений';
$lng['packages']['picture'] = 'Изображение';
$lng['packages']['available'] = 'Доступно';
// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Метод';
$lng['order_history']['amount'] = 'Стоимость';
$lng['order_history']['completed'] = 'Завершён';
$lng['order_history']['not_completed'] = 'Не завершён';
$lng['order_history']['ad_no'] = 'Номер объявления';
$lng['order_history']['date'] = 'Дата';
$lng['order_history']['no_actions'] = 'Нет записей о платежах';
$lng['order_history']['order_by_date'] = 'Сортировать по дате';
$lng['order_history']['order_by_amount'] = 'Сортировать по стоимости';
$lng['order_history']['order_by_processor'] = 'Сортировать по методу';
$lng['order_history']['description'] = 'Описание';
$lng['order_history']['newad'] = 'Новое объявление';
$lng['order_history']['renew'] = 'Обновить';
$lng['order_history']['featured'] = 'Рекомендуемое';
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Сортировать по дате';
$lng['order']['price'] = 'Сортировать по цене';
$lng['order']['title'] = 'Сортировать по заголовку';
$lng['order']['desc'] = 'по убыванию';
$lng['order']['asc'] = 'по возрастанию';
// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Послать другу';
$lng['recommend']['your_name'] = 'Ваше имя';
$lng['recommend']['your_email'] = 'Ваш E-mail';
$lng['recommend']['friend_name'] = 'Имя Вашего друга';
$lng['recommend']['friend_email'] = 'E-mail Вашего друга';
$lng['recommend']['message'] = 'Текст сообщения';
$lng['recommend']['error']['your_name_missing'] = 'Пожалуйста заполните Ваше имя!';
$lng['recommend']['error']['your_email_missing'] = 'Пожалуйста заполните Ваш E-mail!';
$lng['recommend']['error']['friend_name_missing'] = 'Пожалуйста заполните имя Вашего друга!';
$lng['recommend']['error']['friend_email_missing'] = 'Пожалуйста заполните E-mail Вашего друга!';
$lng['recommend']['error']['invalid_email'] = 'Неправильный E-mail';
// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Объявления';
$lng['stats']['general'] = 'Общая статистика';
// ----------------------------------------------////added to vers. 5.0//// ----------------------------------------------
// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Подписка';
// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Состояние';
$lng['general']['favourites'] = 'Мои закладки';
$lng['general']['as'] = 'как';
$lng['general']['view'] = 'Просмотр';
$lng['general']['none'] = 'нет';
$lng['general']['yes'] = 'да';
$lng['general']['no'] = 'нет';
$lng['general']['next'] = 'вперед »';
$lng['general']['finish'] = ' в конец';
$lng['general']['download'] = 'Загрузить';
$lng['general']['remove'] = 'Удалить';
$lng['general']['previous_page'] = '« назад';
$lng['general']['next_page'] = 'вперед »';
$lng['general']['items'] = 'объявлений';
$lng['general']['active'] = 'Активно';
$lng['general']['inactive'] = 'Неактивно';
$lng['general']['expires'] = 'Заканчивается';
$lng['general']['available'] = 'Доступно';
$lng['general']['cancel'] = 'Отменить';
$lng['general']['never'] = 'Никогда';
$lng['general']['desc'] = 'по убыванию';
$lng['general']['asc'] = 'по возрастанию';
$lng['general']['pending'] = 'ожидают активации';
$lng['general']['upload'] = 'Загрузить';
$lng['general']['processing'] = 'Пожалуйста подождите...';
$lng['general']['help'] = 'Помощь';
$lng['general']['hide'] = 'Скрыть';
$lng['general']['link'] = 'Ссылка';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Ограниченная демо-версия, некоторые параметры нельзя изменить!';
$lng['general']['check_all'] = 'Отметить всё';
$lng['general']['uncheck_all'] = 'Снять все отметки';
$lng['general']['all'] = 'Всё';
// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Страница дилера';
$lng['users']['store_banner'] = 'Баннер дилера';
$lng['users']['waiting_mail_activation'] = 'Ожидает активации по E-mail';
$lng['users']['waiting_admin_activation'] = 'Ожидает подтверждения администратора';
$lng['users']['no_such_id'] = 'Такой пользователь не существует.';
$lng['users']['info']['store_banner'] = 'Загрузите логотип или фото для своей страницы';
// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Пожаловаться';
$lng['listings']['report_reason'] = 'Причина жалобы';
$lng['listings']['meta_info'] = 'Мета-теги (для поисковых роботов)';
$lng['listings']['meta_keywords'] = 'Ключевые слова для поисковых систем';
$lng['listings']['meta_description'] = 'Описание для поисковых систем';
$lng['listings']['not_approved'] = 'Не подтверждено';
$lng['listings']['approve'] = 'Подтвердить';
$lng['listings']['choose_payment_method'] = 'Выберите метод платежа';
$lng['listings']['choose_category'] = 'Выбор раздела';
$lng['listings']['choose_plan'] = 'Выбор плана';
$lng['listings']['enter_ad_details'] = 'Ввод описания';
$lng['listings']['ad_details'] = 'Описание объявления';
$lng['listings']['add_photos'] = 'Добавление фото';
$lng['listings']['ad_photos'] = 'Изображения объявления';
$lng['listings']['edit_photos'] = 'Редактировать изображения';
$lng['listings']['extra_options'] = 'Доп. опции';
$lng['listings']['review'] = 'Предпросмотр';
$lng['listings']['finish'] = 'Готово';
$lng['listings']['next_step'] = 'Вперед »';
$lng['listings']['included'] = 'Включено';
$lng['listings']['finalize'] = 'Завершить';
$lng['listings']['zip'] = 'Почтовый Индекс';
$lng['listings']['add_to_favourites'] = 'В закладки';
$lng['listings']['confirm_add_to_fav'] = 'Внимание, Вы не авторизовались! Ваши закладки сохранятся только на время этого посещения!';
$lng['listings']['add_to_fav_done'] = 'Объявление добавлено в Ваши закладки!';
$lng['listings']['confirm_delete_favourite'] = 'Удалить закладку?';
$lng['listings']['no_favourites'] = 'Сохранённых закладок нет';
$lng['listings']['extra_options'] = 'Доп. опции';
$lng['listings']['highlited'] = 'Выделенное';
$lng['listings']['priority'] = 'Приоритет';
$lng['listings']['video'] = 'Объявление с видео';
$lng['listings']['short_video'] = 'Видео';
$lng['listings']['pending_video'] = 'Ожидает видео';
$lng['listings']['video_code'] = 'HTML код YouTube';
$lng['listings']['total'] = 'Всего';
$lng['listings']['approve_ad'] = 'Опубликовать';
$lng['listings']['finalize_later'] = 'Закончить позже';
$lng['listings']['click_to_upload'] = 'Нажмите для загрузки';
$lng['listings']['files_uploaded'] = ' фото загружено из';
$lng['listings']['allowed'] = ' доступных!';
$lng['listings']['limit_reached'] = ' Загружено максимальное количество изображений!';
$lng['listings']['edit_options'] = 'Редактировать опции объявления';
$lng['listings']['view_store'] = 'Посмотреть страницу продавца';
$lng['listings']['edit_ad_options'] = 'Платные возможности';
$lng['listings']['no_extra_options_selected'] = 'Опции не выбраны!';
$lng['listings']['highlited_listings'] = 'Выделенные объявления';
$lng['listings']['for_listing'] = 'Для объявления номер ';
$lng['listings']['expires_on'] = 'Оканчивается';
$lng['listings']['expired_on'] = 'Просрочено';
$lng['listings']['pending_ad'] = 'Неактивированные';
$lng['listings']['pending_highlited'] = 'Ожидает выделения';
$lng['listings']['pending_featured'] = 'Ожидает статуса рекомендуемое';
$lng['listings']['pending_priority'] = 'Ожидает приоритет';
$lng['listings']['enter_coupon'] = 'Введите код скидки';
$lng['listings']['discount'] = 'Скидка';
$lng['listings']['select_plan'] = 'Выбрать';
$lng['listings']['pending_subscription'] = 'Платная подписка';
$lng['listings']['remove_favourite'] = 'Удалить закладку';
$lng['listings']['order_up'] = 'Подвинуть влево';
$lng['listings']['order_down'] = 'Подвинуть вправо';
$lng['listings']['errors']['invalid_youtube_video'] = 'Некорректное youtube видео!';
// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Купить пакет';
$lng['useraccount']['no_package'] = 'Пакет не выбран';
$lng['useraccount']['packages'] = 'Пакеты';
$lng['useraccount']['date_start'] = 'Дата начала';
$lng['useraccount']['date_end'] = 'Дата окончания';
$lng['useraccount']['remaining_ads'] = 'Осталось объявлений';
$lng['useraccount']['account_type'] = 'Тип аккаунта';
$lng['useraccount']['unfinished_listings'] = 'Незаконченные объявления';
$lng['useraccount']['confirm_delete_subscription'] = 'Вы уверены, что хотите отказаться от пакета?';
$lng['useraccount']['buy_store'] = 'Купить страницу дилера';
$lng['useraccount']['bulk_uploads'] = 'Массовая загрузка';
// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Подписка';
$lng['packages']['ads'] = 'Объявления';
$lng['packages']['name'] = 'Имя';
$lng['packages']['details'] = 'Детальная информация';
$lng['packages']['no_ads'] = 'Количество объявлений';
$lng['packages']['subscription_time'] = 'Время подписки';
$lng['packages']['no_pictures'] = 'Доступно изображений';
$lng['packages']['no_words'] = 'Количество слов';
$lng['packages']['ads_availability'] = 'Доступность объявлений';
$lng['packages']['featured'] = 'Рекомендуемое';
$lng['packages']['highlited'] = 'Выделенное';
$lng['packages']['priority'] = 'Приоритет';
$lng['packages']['video'] = 'Объявление с видео';
// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Подписка';
$lng['order_history']['post_listing'] = 'Опубликовать объявление';
$lng['order_history']['renew_listing'] = 'Продлить объявление';
$lng['order_history']['feature_listing'] = 'Сделать рекомендуемым';
$lng['order_history']['subscribe_to_package'] = 'Подписаться на пакет';
$lng['order_history']['complete_payment'] = 'Оплатить';
$lng['order_history']['complete_payment_for'] = 'Заплатить за';
$lng['order_history']['details'] = 'Детальная информация';
$lng['order_history']['subscription_no'] = 'Подписка номер';
$lng['order_history']['highlited'] = 'Выделенное';
$lng['order_history']['priority'] = 'Приоритет';
$lng['order_history']['video'] = 'Объявление с видео';
// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Выберите пакет!';
$lng['buy_package']['error']['choose_processor'] = 'Выберите метод платежа!';
$lng['buy_package']['error']['invalid_processor'] = 'Неправильный платёжный оператор!';
$lng['buy_package']['error']['invalid_package'] = 'Неправильный пакет!';
// -------------------- PAYMENTS ------------------
$lng['paypal']['invalid_transaction'] = 'Неудачный перевод Paypal!';
$lng['2co']['invalid_transaction'] = 'Неудачный перевод 2Checkout!';
$lng['moneybookers']['invalid_transaction'] = 'Неудачный перевод Moneybookers!';
$lng['authorize']['invalid_transaction'] = 'Неудачный перевод Authorize.net!';
$lng['manual']['invalid_transaction'] = 'Неудачный перевод!';
$lng['paypal']['transaction_canceled'] = 'Перевод Paypal отменён!';
$lng['2co']['transaction_canceled'] = 'Перевод 2Checkout отменён!';
$lng['moneybookers']['transaction_canceled'] = 'Перевод Moneybookers отменён!';
$lng['authorize']['transaction_canceled'] = 'Перевод Authorize.net отменён!';
$lng['manual']['transaction_canceled'] = 'Перевод отменён!';
$lng['epay']['transaction_canceled'] = 'Перевод ePay отменён!';
$lng['payments']['transaction_already_processed'] = 'Перевод уже сделан!';
// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Подтвердить подписку';
$lng['subscribe']['payment_method'] = 'Метод платежа';
$lng['subscribe']['renew_subscription'] = 'Обновить подписку';
// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Отправить копию: ';
$lng['bcc_mails']['from'] = 'От кого: ';
$lng['bcc_mails']['to'] = 'Кому: ';
// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Статус массовой загрузки: ';
$lng['ie']['successfully'] = 'Объявления успешно добавлены';
$lng['ie']['failed'] = 'ошибка';
$lng['ie']['uploaded_listings'] = 'Список загруженных объявлений:';
$lng['ie']['errors']['upload_import_file'] = 'Пожалуйста загрузите файл для импорта!';
$lng['ie']['errors']['incorrect_file_type'] = 'Некорректный тип файла! Доступные типы файлов: ';
$lng['ie']['errors']['could_not_open_file'] = 'Не удалось открыть файл!';
$lng['ie']['errors']['choose_categ'] = 'Выберите раздел!';
$lng['ie']['errors']['could_not_save_file'] = 'Не удалось загрузить файл: ';
$lng['ie']['errors']['required_field_missing'] = 'Отсутствует необходимое поле: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Некорректный тип данных в ряду номер: ';
// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Выберите дилера';
// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Поиск по региону';
$lng['areasearch']['all_locations'] = 'Все регионы';
$lng['areasearch']['exact_location'] = 'Указать регион';
$lng['areasearch']['around'] = 'окрестности';
// ------------------- end vers 5.0 -----------------
// ------------------- vers 6.0 -----------------
// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Да';
$lng['general']['No'] = 'Нет';
$lng['general']['or'] = 'или';
$lng['general']['in'] = 'в';
$lng['general']['by'] = 'от';
$lng['general']['close_window'] = 'Закрыть окно';
$lng['general']['more_options'] = 'больше опций »';
$lng['general']['less_options'] = '« меньше опций';
$lng['general']['send'] = 'Отправить';
$lng['general']['save'] = 'Сохранить';
$lng['general']['for'] = 'для';
$lng['general']['to'] = 'в';
// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Пометить как Сдано';
$lng['listings']['mark_unrented'] = 'Снять отметку Сдано';
$lng['listings']['rented'] = 'Сдано';
$lng['listings']['your_info'] = 'Ваша информация';
$lng['listings']['email'] = 'Ваш E-mail';
$lng['listings']['name'] = 'Ваше имя';
$lng['listings']['listing_deleted'] = 'Ваше объявление удалено!';
$lng['listings']['post_without_login'] = 'Опубликовать без регистрации';
$lng['listings']['waiting_activation'] = 'Ожидает активации';
$lng['listings']['waiting_admin_approval'] = 'Ожидает подтверждения администратора';
$lng['listings']['dont_need_account'] = 'Не хотите регистрироваться? Опубликуйте без регистрации!';
$lng['listings']['post_your_ad'] = 'Опубликуйте Ваше объявление!';
$lng['listings']['posted'] = 'Опубликовано';
$lng['listings']['select_subscription'] = 'Выберите подписку';
$lng['listings']['choose_subscription'] = 'Выберите подписку';
$lng['listings']['inactive_listings'] = 'Неактивные объявления';
// -------------------- search -------------------
$lng['search']['refine_search'] = 'Критерии отбора';
$lng['search']['refine_by_keyword'] = 'Отбор по ключевому слову';
$lng['search']['showing'] = 'Показывается';
$lng['search']['more'] = 'Больше ...';
$lng['search']['less'] = 'Меньше ...';
$lng['search']['search_for'] = 'Искать';
$lng['search']['save_your_search'] = 'Сохранить параметры поиска';
$lng['search']['save'] = 'Сохранить';
$lng['search']['search_saved'] = 'Ваш поиск сохранен!';
$lng['search']['must_login_to_save_search'] = 'Для сохранения поиска необходимо войти на сайт!';
$lng['search']['view_search'] = 'Просмотр поиска';
$lng['search']['all_categories'] = 'Все разделы';
$lng['search']['more_than'] = 'от';
$lng['search']['less_than'] = 'до';
$lng['search']['error']['cannot_save_empty_search'] = 'Вы не выбрали критерии поиска,- нечего сохранять!';
// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Мои поиски';
$lng['useraccount']['view_saved_searches'] = 'Просмотр сохранённых поисков';
$lng['useraccount']['no_saved_searches'] = 'Сохранённых поисков нет';
$lng['useraccount']['recurring'] = 'Текущий';
$lng['useraccount']['date_renew'] = 'Дата обновлена';
$lng['useraccount']['logged_in_as'] = 'Вы вошли как ';
$lng['useraccount']['subscriptions'] = 'Подписки';
$lng['users']['activate_account'] = 'Активировать аккаунт';
// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Добавить подписку';
$lng['subscriptions']['package'] = 'Пакет';
$lng['subscriptions']['remaining_ads'] = 'Осталось объявлений';
$lng['subscriptions']['recurring'] = 'Текущая';
$lng['subscriptions']['date_start'] = 'Дата начала';
$lng['subscriptions']['date_end'] = 'Дата окончания';
$lng['subscriptions']['date_renew'] = 'Дата обновления';
$lng['subscriptions']['confirm_delete'] = 'Действительно удалить подписку?';
$lng['subscriptions']['no_subscriptions'] = 'Подписок нет';
// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'У Вас нет аккаунта?';
// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Включить периодические платежи за подписку';
// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Были пропущены следующие необходимые поля: ';
// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Покупка страницы дилера';
$lng['images']['errors']['max_photos'] = 'Загружено максимальное количество изображений!';
// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Подписаться на уведомления';
$lng['alerts']['email_alerts'] = 'Мои уведомления';
$lng['alerts']['no_alerts'] = 'Вы не подписаны на уведомления';
$lng['alerts']['view_email_alerts'] = 'Посмотреть Мои уведомления';
$lng['alerts']['send_email_alerts'] = 'Отправлять уведомления';
$lng['alerts']['immediately'] = 'Немедленно';
$lng['alerts']['daily'] = 'Ежедневно';
$lng['alerts']['weekly'] = 'Еженедельно';
$lng['alerts']['your_email'] = 'Ваш E-mail';
$lng['alerts']['create_alert'] = 'Подписаться';
$lng['alerts']['email_alert_info'] = 'Получение уведомлений о появлении на сайте объявлений, удовлетворяющих условиям поиска.';
$lng['alerts']['alert_added'] = 'Вы подписались на рассылку уведомлений!';
$lng['alerts']['alert_added_activate'] = 'На адрес <b>::EMAIL::</b> отправлено сообщение. Для активации подписки нажмите на ссылку в сообщении!'; 
// DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Искать в';
$lng['alerts']['keyword'] = 'ключевое слово';
$lng['alerts']['frequency'] = 'Частота уведомлений';
$lng['alerts']['alert_activated'] = 'Подписка активирована! При появлении объявлений, удовлетворяющих условиям поиска, Вам будет отправлено уведомление.';$lng['alerts']['alert_unsubscribed'] = 'Подписка удалена!';
$lng['alerts']['started_on'] = 'Начало';
$lng['alerts']['no_terms_searched'] = 'Для этого набора условий ничего не найдено!';
$lng['alerts']['no_listings'] = 'Объявлений, удовлетворяющих условиям подписки нет!';
$lng['alerts']['error']['email_required'] = 'Введите E-mail для уведомлений!';
$lng['alerts']['error']['invalid_email'] = 'Некорректный E-mail!';
$lng['alerts']['error']['invalid_frequency'] = 'Неправильная частота рассылки!';
$lng['alerts']['error']['login_required'] = 'Чтобы подписаться на уведомления, пожалуйста <a href="::LINK::">войдите</a> на сайт!'; 
// DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Выберите, пожалуйста, хотя бы одно условие поиска помимо раздела!';
$lng['alerts']['error']['invalid_confirmation'] = 'Некорректное подтверждение подписки!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Некорректный запрос на удаление подписки!';
// ---------------- loancalculator module -------------------
$lng_loancalc['loancalc'] = 'Кредитный калькулятор';
$lng_loancalc['sale_price'] = 'Цена продажи';
$lng_loancalc['down_payment'] = 'Первоначальный взнос';
$lng_loancalc['trade_in_value'] = 'В зачёт стоимости';
$lng_loancalc['loan_amount'] = 'Величина займа';
$lng_loancalc['sales_tax'] = 'Обслуживание кредита';
$lng_loancalc['interest_rate'] = 'Банковский процент';
$lng_loancalc['loan_term'] = 'Длительность кредита';
$lng_loancalc['months'] = 'месяца';
$lng_loancalc['years'] = 'года';
$lng_loancalc['or'] = 'или';
$lng_loancalc['monthly_payment'] = 'Ежемесячный платеж';
$lng_loancalc['calculate'] = 'Подсчитать';
// ---------------- end loancalculator module -------------------
// ----------------- comments module --------------------
$lng_comments['comments'] = 'Комментарии';
$lng_comments['make_a_comment'] = 'Комментировать';
$lng_comments['login_to_post'] = 'Комментарии доступны только <a href="::LOGIN_LINK::">зарегистрированным</a> пользователям.';
$lng_comments['name'] = 'Имя';
$lng_comments['email'] = 'E-mail';
$lng_comments['website'] = 'Веб сайт';
$lng_comments['submit_comment'] = 'Опубликовать';
$lng_comments['error']['name_missing'] = 'Пожалуйста введите Ваше имя!';
$lng_comments['error']['content_missing'] = 'Пожалуйста заполните содержания комментария!';
$lng_comments['error']['website_missing'] = 'Пожалуйста введите веб сайт!';
$lng_comments['error']['email_missing'] = 'Пожалуйста введите Ваш E-mail!';
$lng_comments['error']['listing_id_missing'] = 'Некорректный комментарий!';
$lng_comments['error']['invalid_email'] = 'Некорректный E-mail!';
$lng_comments['error']['invalid_website'] = 'Некорректный веб сайт!';
$lng_comments['errors']['badwords'] = 'Ваш комментарий содержит запрещенные на сайте слова! Пожалуйста исправьте сообщение!';
$lng_comments['info']['comment_added'] = 'Ваш комментарий добавлен! Нажмите <a id="newad">тут</a>, если хотите добавить ещё один.';
$lng_comments['info']['comment_pending'] = 'Ваш комментарий ожидает подтверждения администратора.';
// ----------------- end comments module --------------------// -------------
$lng['tb']['next'] = 'вперед »';
$lng['tb']['prev'] = '« назад';
$lng['tb']['close'] = 'Закрыть';
$lng['tb']['or_esc'] = 'или ESC';
// ------------------- end vers 6.0 -----------------
// ------------------- vers 7.0 -----------------
// ------------------- messages -----------------
$lng['useraccount']['messages'] = 'Сообщения';
$lng['messages']['confirm_delete_all'] = 'Вы действительно хотите удалить выбранные сообщения?';
$lng['messages']['listing'] = 'Список';
$lng['messages']['no_messages'] = 'Нет сообщений';
$lng['general']['reply'] = 'Ответить на сообщение';
$lng['messages']['message'] = 'Сообщение';
$lng['messages']['from'] = 'От';
$lng['messages']['to'] = 'Для';
$lng['messages']['on'] = 'На';
$lng['messages']['view_thread'] = 'Просмотр темы';
$lng['messages']['started_for_listing'] = 'Начато для Списка';
$lng['messages']['view_complete_message'] = 'Посмотреть полное сообщение здесь';
$lng['messages']['message_history'] = 'История сообщений';
$lng['messages']['yourself'] = 'Вы';
$lng['messages']['report_spam'] = 'Сообщить о спаме';
$lng['messages']['reported_as_spam'] = 'Сообщается как спам';
$lng['messages']['confirm_report_spam'] = 'Вы уверены что хотите сообщить об этом сообщении как о спаме?';
// ------------------- listings -----------------
$lng['listings']['invalid'] = 'Недопустимый идентификатор Списка';
$lng['listings']['show_map'] = 'Показать карту';
$lng['listings']['hide_map'] = 'Скрыть карту';
$lng['listings']['see_full_listing'] = 'Просмотреть полный список';
$lng['listings']['list'] = 'Список';
$lng['listings']['gallery'] = 'Галерея';
$lng['listings']['remove_fav_done'] = 'Список был удален из списка избранных!';
$lng['search']['high_no_results'] = 'Количество результатов для вашего поиска очень велико.  Перечисленные результаты ограничены наиболее релевантными результатами.  Уточните результаты поиска чтобы уменьшить количество результатов и получить более релевантные результаты!';
// ------------------- users -----------------
$lng['users']['errors']['email_not_permitted'] = 'Этот адрес электронной почты не разрешен!';
// ------------------- listing plans -----------------
$lng['subscriptions']['max_usage_reached'] = 'Вам больше не разрешается использовать эту подписку достигнуто максимальное количество использования!';// ------------------- end vers 7.0 -----------------
// ------------------- version 7.05 ------------------
$lng['location']['choose_location'] = 'Выберите местоположение';
$lng['location']['choose'] = 'Выбрать';
$lng['location']['change'] = 'Изменить';
$lng['location']['all_locations'] = 'Все места';
// ----------------- end version 7.05 ----------------
// ------------------- version 7.06 ------------------
$lng['alerts']['category'] = ' Раздел';
$lng['location']['save_location'] = 'Сохранить местоположение';
$lng['credits']['credits'] = 'Кредиты';
$lng['credits']['credit'] = 'Кредит';
$lng['credits']['pending_credits'] = 'Ожидаемые кредиты';
$lng['credits']['current_credits'] = 'Текущие кредиты';
$lng['credits']['one_credit_equals'] = 'Один кредит равен';
$lng['credits']['credits_amount'] = 'Сумма кредита';
$lng['credits']['buy_extra_credits'] = 'Купить дополнительные кредиты';
$lng['credits']['credits_package'] = 'Кредитный пакет';
$lng['credits']['select_package'] = 'Выбрать пакет кредитов';
$lng['credits']['choose_package'] = 'Выберите пакет';
$lng['credits']['you_currently_have'] = 'В настоящее время у вас есть ';
$lng['credits']['you_currently_have_no_credits'] = 'У вас сейчас нет кредитов '
;$lng['credits']['pay_using_credits'] = 'Платить с использованием кредитов';
$lng['credits']['not_enough_credits'] = 'Недостаточно кредитов для этого платежа!';
$lng['credits']['scredits'] = 'кредиты';
$lng['credits']['scredit'] = 'кредит';
$lng['order_history']['credits_purchase'] = 'Покупка кредитов';
$lng['order_history']['invalid_order'] = 'Неверный заказ!';
// ------------------- end version 7.06 ------------------
// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Подождите пока вы будете перенаправлены!';
// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Будьте добры! <a href="::LOGIN_LINK::">войдите в систему</a> потом вы можете просмотреть контактную информацию!';$lng['listing']['no_contact_information'] = 'Контактная информация отсутствует.';
$lng['navbar']['register_as'] = 'Зарегистрируйтесь как';
$lng['listings']['all_ads'] = 'Все объявления';
$lng['listings']['refine'] = 'Улучшить';
$lng['listings']['results'] = 'Результаты';
$lng['listings']['photos'] = 'фотографий';
$lng['listings']['user_details'] = 'Сведения о пользователе';
$lng['listings']['back_to_details'] = 'Вернуться к списку деталей';
$lng['listings']['post_free_ad'] = 'Разместить бесплатное объявление';
$lng['users']['username_available'] = 'Имя пользователя доступно!';
$lng['users']['username_not_available'] = 'Имя пользователя не доступно!';
$lng['general']['not_found'] = 'Запрошенная страница не найдена!';
$lng['general']['full_version'] = 'Полная версия';
$lng['general']['mobile_version'] = 'Мобильная версия';
$lng['failed'] = 'Не удалось';
$lng['remember_me'] = 'Запомни меня';
$lng['less_than_a_minute'] = 'меньше минуты назад';
$lng['minute'] = 'минута';
$lng['minutes'] = 'минут';
$lng['hour'] = 'час';
$lng['hours'] = 'часов';
$lng['yesterday'] = 'Вчера';
$lng['day'] = 'день';
$lng['days'] = 'дней';
$lng['ago_postfix'] = ' тому назад';
$lng['ago_prefix'] = '';
// ------------------- end version 7.08 ------------------
// ------------------- version 8.01 ------------------
$lng['today'] = 'Today';
$lng['messages']['confirm_delete'] = 'Вы уверены что хотите удалить это сообщение?';
$lng['listings']['change_category'] = 'Изменить категорию';
$lng['listings']['change_plan'] = 'Выберите другой план';
$lng['listings']['choose_active_subscription'] = 'Выберите из своей активной подписки';
$lng['useraccount']['request_removal'] = 'Удаление учетной записи';
$lng['useraccount']['request_removal_now'] = 'Запросите удаление сейчас!';
$lng['useraccount']['removal_verification_sent'] = 'Вы получите электронное письмо содержащее ссылку для проверки.  Пожалуйста нажмите на ссылку чтобы подтвердить запрос на удаление!';
$lng['contact']['message_waits_admin_aproval'] = 'Ваше сообщение будет отправлено после его одобрения администратором!';
$lng['general']['accept'] = 'Согласиться';
$lng['general']['decline'] = 'Отказаться';
$lng['general']['tax'] = 'Налог';
$lng['general']['total_with_tax'] = 'Всего с налогом';
$lng['navbar']['rss'] = 'RSS';
$lng['general']['in_category'] = 'В категории';
$lng['users']['user_info'] = 'Информация о пользователе';
$lng['users']['store_info'] = 'Информация о магазине';
$lng['users']['user_listings'] = 'Все объявления';
$lng['login']['errors']['invalid_email_pass'] = 'Неправильный адрес электронной почты или пароль!';
$lng['general']['or'] = 'или';
$lng['newad']['choose_a_new_plan'] = 'Выберите новый план';
$lng['listings']['no_extra_options_available'] = 'Дополнительные опции недоступны!';
$lng['listings']['map'] = 'Карта';
$lng['users']['affiliate'] = 'Партнер';
$lng['users']['affiliate_id'] = 'Идентификатор партнера';
$lng['users']['affiliate_link'] = 'Партнерская ссылка';
$lng['users']['affiliate_paypal_email'] = 'Партнерская учетная запись PayPal';
$lng['users']['info']['affiliate_paypal_email'] = 'Вы получите здесь деньги, заработанные с вашего аккаунта партнера';
$lng['users']['errors']['affiliate_paypal_email'] = 'Пожалуйста, введите свой аккаунт PayPal! Вы получите здесь деньги, заработанные на вашем партнерском аккаунте';
$lng['listings']['result'] = 'результат';
$lng['confirm_delete'] = 'Вы уверены, что хотите удалить выбранный элемент?';
$lng['confirm_delete_all'] = 'Вы действительно хотите удалить выбранные элементы?';
$lng['general']['show'] = 'Показать';
$lng['general']['on_a_page'] = 'на странице';
$lng['general']['return'] = 'Вернуться';
$lng['login']['register_for_free'] = 'Зарегистрироваться бесплатно!';
$lng['general']['sent'] = 'Отправленный';
$lng['general']['received'] = 'Полученный';
$lng['messages']['spam'] = 'Спам';
$lng['newad']['not_logged_in'] = 'Вы не вошли!';
$lng['newad']['or_post_without_account'] = 'или продолжить публикацию без счета!';
$lng_comments['scomments'] = 'коментарии';
$lng_comments['scomment'] = 'коментарий';
$lng['general']['on'] = 'на';
$lng['affiliates']['last_payment'] = 'Последний платеж';
$lng['affiliates']['last_payment_date'] = 'Дата последнего платежа';
$lng['affiliates']['next_payment_date'] = 'Следующая дата оплаты';
$lng['affiliates']['total_due'] = 'Общая сумма';
$lng['affiliates']['total_payments'] = 'Всего полученных платежей';
$lng['affiliates']['revenue_history'] = 'История дохода';
$lng['affiliates']['payments_history'] = 'Платежная история';
$lng['affiliates']['pending_payment'] = 'Ожидаемый платеж';
$lng['affiliates']['released'] = 'Выпущенный';
$lng['affiliates']['not_released'] = 'Не выпущено';
$lng['affiliates']['paid'] = 'Оплаченный';
$lng['affiliates']['not_paid'] = 'Не оплачен';
$lng['general']['no_items'] = 'Нет товаров';
$lng['useraccount']['amount_start'] = 'Сумма от';
$lng['useraccount']['amount_end'] = 'Сумма к';
$lng['not_allowed_to_post_ads'] = 'Нельзя опубликовать объявления с этим аккаунтом!';
// ------------------- end version 8.01 ------------------
/* ------------------- version 8.4 ----------------------- */
$lng['listings']['info']['listing_pending_edited'] = 'Изменения, внесенные вами, будут оставаться на рассмотрении до тех пор, пока они не будут рассмотрены администратором!';
$lng['useraccount']['auction'] = 'Аукцион';
$lng['useraccount']['add_auction'] = 'Добавить аукцион';
$lng['useraccount']['remove_auction'] = 'Удалить аукцион';
$lng['useraccount']['auction_start_price'] = 'Стартовая цена';
$lng['useraccount']['starts_at'] = 'Начинается с';
$lng['useraccount']['no_bids'] = 'Нет ставок';
$lng['useraccount']['max_bid'] = 'Максимальная ставка';
$lng['useraccount']['enable'] = 'Включить';
$lng['useraccount']['disable'] = 'Отключать';
$lng['useraccount']['error']['auction_start_price'] = 'Пожалуйста, введите стартовую цену аукциона!';
$lng['useraccount']['info']['auction_added'] = 'Аукцион был успешно добавлен!';
$lng['useraccount']['confirm_delete'] = 'Подтвердить удаление?';
$lng['useraccount']['place_bid'] = 'Пожалуйста, сделай ставку!';
$lng['useraccount']['login_to_bid'] = 'Пожалуйста, войдите, чтобы сделать ставку!';
$lng['useraccount']['bid'] = 'Ставка';
$lng['useraccount']['message_to_seller'] = 'Сообщение продавцу';
$lng['useraccount']['error']['enter_bid'] = 'Пожалуйста, введите свою ставку!';
$lng['useraccount']['error']['incorrect_bid'] = 'Недопустимая ставка!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Ваша ставка меньше стартовой цены!';
$lng['useraccount']['bid_placed'] = 'Ваша ставка была размещена!';
$lng['useraccount']['placed_on'] = 'Размещены на';
$lng['useraccount']['no_bids_for_auction'] = 'На этот аукцион нет ставок!';
/* ------------------- end version 8.4 ----------------------- */
// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Нажмите, чтобы посмотреть';
$lng['advanced_search']['clear_search'] = 'Очистить поиск';
$lng['listings']['currency'] = 'Валюта';
$lng['listings']['show_phone'] = 'Показать телефон';
$lng['listings']['make_public'] = 'Опубликовать';
$lng['advanced_search']['only_ads_with_auction'] = 'Только объявления с аукционами';
$lng['security']['failed_login_attempts'] = 'Повторные неудачные попытки входа в систему';
// --------------- end  8.5 --------------------
// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Ваша учетная запись в настоящее время неактивна! Вскоре вы получите SMS-сообщение с кодом подтверждения. Введите код в поле ниже, чтобы активировать свою учетную запись.';
$lng['users']['verification_code'] = 'Код подтверждения';
$lng['users']['waiting_sms_activation'] = 'Ожидание активации SMS';
$lng['listings']['info']['sms_verification'] = 'Ваша запись в настоящее время неактивна! Вскоре вы получите SMS-сообщение с кодом подтверждения. Введите код в поле ниже, чтобы активировать свою запись.';
$lng['listings']['activate_listing'] = 'Активировать объявление';
$lng['listings']['errors']['sms_invalid_activation'] = 'Недействительный ключ активации!';
$lng['listings']['info']['listing_pending'] = 'Ваша публикация находится в ожидании и ожидает проверки администратора.';
$lng['listings']['info']['listing_activated'] = 'Ваше объявление активировано!';
$lng['listings']['errors']['listing_already_active'] = 'Ваша запись уже активна!';
$lng['listings']['errors']['invalid_phone'] = 'Неправильный номер телефона!';
// ---------------  8.7 --------------------
// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Доступны для';
$lng['newad']['available_until_expires'] = 'Доступно до истечения срока действия объявления';
$lng['newad']['view_info'] = 'Просмотр информации';
$lng['users']['errors']['phone_not_permitted'] = 'Этот номер телефона не допускается!';
$lng['invoice']['invoice'] = 'Счет-Фактура';
$lng['invoice']['invoice_no'] = 'Нет Счет-Фактуры';
$lng['invoice']['bill_to'] = 'Законопроект о';
$lng['invoice']['qty'] = 'Кол-во';
$lng['invoice']['unit_price'] = 'Цена за единицу';
$lng['invoice']['subtotal'] = 'Промежуточная сумма';
$lng['invoice']['sale_tax'] = 'Налог с продаж';
$lng['invoice']['new_listing'] = 'Новый список';
$lng['invoice']['renew_listing'] = 'Обновление списка';
$lng['invoice']['featured_eo'] = 'Рекомендуемый дополнительный вариант для размещения';
$lng['invoice']['highlited_eo'] = 'Выделите дополнительные опции для объявлений';
$lng['invoice']['priority_eo'] = 'Приоритет дополнительный вариант для объявлений';
$lng['invoice']['video_eo'] = 'Видео дополнительный вариант для объявлений';
$lng['invoice']['new_credits_pkg'] = 'Приобретение новых кредитов';
$lng['invoice']['store'] = 'Покупка страницы дилера';
$lng['invoice']['new_subscription'] = 'Новая покупка подписки';
$lng['invoice']['renew_subscription'] = 'Продление подписки';
$lng['weeks'] = 'Недели';
$lng['week'] = 'Неделя';
$lng['months'] = 'Месяцы';
$lng['month'] = 'Месяц';
// --------------- end 8.10 --------------------
// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Показать WhatsApp';
$lng['general']['to_top'] = 'Перейти к началу страницы';
$lng['quick_search']['location'] = 'Почтовый индекс или местоположение';
$lng['listings']['see_all'] = 'Просмотреть все объявления »';
$lng['listings']['ads'] = 'Объявления';
$lng['listings']['user_since'] = 'Пользователь с тех пор';
$lng['listings']['contact_details'] = 'Контактная информация';
$lng['listings']['favourite'] = 'Избранный';
$lng['listings']['manage_ad'] = 'Управляйте своим объявлением';
$lng['useraccount']['show_bids'] = 'Показать ставки';
$lng['listings']['report_abusive'] = 'Сообщить об оскорбительном объявлении';
$lng['listings']['enable_auction'] = 'Включить аукцион';
$lng['invoice']['download'] = 'Скачать счет-фактуру';
$lng['register']['group'] = 'Тип учетной записи';
$lng['register']['change_group'] = 'Изменить тип учетной записи';
$lng['register']['select_group'] = 'Выбрать группу';
$lng['search']['private'] = 'Частные владельцы';
$lng['search']['professional'] = 'Профессионалы';
$lng['search']['save_your_search2'] = 'Вы хотите сохранить свой поиск?';
$lng['search']['save_search'] = 'Сохранить поиск';
$lng['search']['refine_your_search'] = 'Уточнить поиск';
$lng['search']['hide_refine'] = 'Скрыть уточнение';
$lng['listings']['view_all_featured'] = 'Просмотреть все >>';
$lng['listings']['view_all_latest'] = 'Просмотреть все последние >>';
$lng['listings']['view_all_auctions'] = 'Смотреть все аукционы >>';
$lng['listings']['auctions'] = 'Аукционы';
$lng['listings']['view_ads_from'] = 'Просмотр объявлений с';
$lng['location']['change_location'] = 'Изменить местоположение';
// --------------- end 9.1 --------------------
// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Показать адрес электронной почты';
$lng['listings']['error']['photo_mandatory'] = 'Загрузите хотя бы одно изображение с вашим объявлением!';
// --------------- end 9.2 --------------------
// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Телефонный вызов';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Телефон';
$lng['contact']['error']['phone_or_email_missing'] = 'Введите свой адрес электронной почты или номер телефона!';
$lng['general']['at'] = 'в';
$lng['general']['distance_from'] = 'расстояние от';
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