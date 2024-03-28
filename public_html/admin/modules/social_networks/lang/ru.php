<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
$lng_sn['social_networks'] = 'Социальные сети';
$lng_sn['facebook_page_link']='Ваша <i>Facebook</i> Страница';
$lng_sn['twitter_account']='Ваша <i>Twitter</i> Учетная запись';
$lng_sn['fb_like_button']='Facebook <i>Like</i> Кнопка';
$lng_sn['tweet_button']='<i>Tweet</i> Кнопка';
$lng_sn['fb_recent_activity']='Facebook <i>Последние действия</i> Лента';
$lng_sn['fb_ra_width']='Ширина';
$lng_sn['fb_ra_height']='Высота';
$lng_sn['fb_ra_color']='Цветовая схема';
$lng_sn['fb_ra_show_recommendations']='Показать рекомендации';
$lng_sn['info']['fb_ra_show_recommendations']='Плагин заполнен действиями от друзей пользователя. Если не хватает активности друзей, 
чтобы заполнить плагин, он засыпается рекомендациями, если вы включите его.';
$lng_sn['fb_lb_layout']='Стили макета';
$lng_sn['fb_lb_show_faces']='Показывают Лица';
$lng_sn['fb_lb_width']='Ширина';
$lng_sn['fb_lb_action']='Команда для отображения';
$lng_sn['fb_lb_color']='Цветовая схема';
$lng_sn['fb_lb_locale'] = 'Facebook язык';
$lng_sn['info']['fb_lb_show_faces']='Покажите фотографии профиля ниже кнопки (Только стандартная компоновка)';
$lng_sn['tw_data_count']='Тип кнопки';
$lng_sn['tw_data_text']='Tweet текст';
$lng_sn['info']['tw_data_text']='Текст, отправляемый в твит. Убедитесь, что вы ограничить размер до 140 символов. 
Тег ##TITLE## будет заменен на Заголовок списка.';
$lng_sn["tweet_ads"] = "Tweet реклама при публикации";
$lng_sn['error']['enable_tweet_ads'] = 'Чтобы включить параметр «Включить рекламу», вы должны предоставить <br/>всю следующую информацию: секретный ключ потребителя, секрет потребителя, токен доступа и токен доступа.';
$lng_sn["tw_consumer_key"] = "Ключ потребителя";
$lng_sn["tw_consumer_secret"] = "Секрет потребителя";
$lng_sn["tw_access_token"] = "Токен доступа";
$lng_sn["tw_access_token_secret"] = "Секрет доступа к токенам";
$lng_sn['gplus_button'] = 'Google +1';
$lng_sn['gplus_size'] = 'Size';
$lng_sn['gplus_language'] = 'Язык';
$lng_sn['fb_like_box'] = 'Как Окно Facebook';
$lng_sn['fb_show_stream'] = 'Показать Поток';
$lng_sn['fb_show_header'] = 'Показать заголовок';
$lng_sn['info']['fb_lbox_show_faces']='Показать фотографии профиля в плагине';
$lng_sn['info']['fb_show_stream'] = 'Показать поток профиля для общедоступного профиля.';
$lng_sn['info']['fb_show_header'] = 'Показать на панели \'Find us on Facebook\' в верхней части. Отображается, 
только когда поток или лица присутствуют.';

$lng_sn['appid'] = 'Идентификатор приложения Facebook';

$lng_sn['gplus_page_link']='Ваша <i>Google+</i> Страница';
// ---------- version 8.4 ----------------
$lng_sn['comments'] = 'Комментарии Facebook';
$lng_sn['comments_no_posts'] = 'Количество постов';
// ---------- end version 8.4 ----------------

// ---------- version 8.5 ----------------

$lng_sn['enable_fb_post_ads'] = 'Включить рекламу на Facebook';
$lng_sn['fb_secret'] = 'Секрет Facebook';
$lng_sn['fb_access_token'] = 'Facebook токен доступа';
$lng_sn['fb_page_access_token'] = 'Токен доступа к странице Facebook';
$lng_sn['get_fb_access_token'] = 'Получите токен доступа к Facebook!';
$lng_sn['get_fb_page_access_token'] = 'Получите токен доступа к странице Facebook!';
$lng_sn['error']['enable_fb_post_ads'] = 'Чтобы включить рекламу на Facebook, вам необходимо предоставить следующую <br/>информацию: Facebook app id и Facebook Secret, а затем нажмите кнопку «Получить токен доступа к Facebook»!';
//$lng_sn['error']['get_fb_access_token'] = 'Чтобы получить доступ к токену, вам сначала нужно настроить идентификатор Facebook и секрет Facebook!';

$lng_sn['error']['curl_not_installed'] ='Этому модулю нужна библиотека cURL, установленная на Вашем сервере. Пожалуйста, <br/>попросите, чтобы администратор установил его для Вас!';
//$lng_sn['info']['fb_access_token_process_started'] = 'Начался процесс получения токена доступа!';

$lng_sn['access_token_helper'] = 'Помощник токена доступа';
$lng_sn['info']['access_token_helper'] = 'Следуйте следующим шагам, чтобы получить токен доступа к Facebook.';
$lng_sn['step1'] = '<b>Шаг1:</b> Доступ к следующему URL-адресу';
$lng_sn['step1_1'] = 'Выполните шаги и разрешения при необходимости. В конце вы увидите <b> длинный код Которые вам нужно <br/>будет скопировать и разместить в <em>Код</em> поле ниже. Если вместо кода вы видите<b>Ошибка Facebook, </b>остановиться и решить проблему, потом начать с шага 1 снова. Если Вы не знаете как решить проблему, 
 свяжитесь с нами и отправить нам сообщение об ошибке.';
$lng_sn['step2'] = '<b>Шаг2:</b> Введите код, который вы скопировали в предыдущем шаге в <em>Код</em> поле ниже, 
затем нажмите кнопку <b> Получить токен доступа к Facebook</b>';
$lng_sn['step2_1']= '<b>Важно!</b> Код с шага 1 истекает через некоторое время. Если Вы не используете его на шаге 2 вовремя, <br/>Вы получите сообщение об ошибке. В этом случае просто повторите шаг 1 и получите новый код.';
$lng_sn['code']= 'Код';
$lng_sn['error']['code']= 'Введите код, который вы скопировали на предыдущем шаге!';
$lng_sn['info']['access_token_configured'] = 'Маркер доступа был настроен. Если вы хотите опубликовать свои данные в своем личном <br/>профиле Facebook, вы можете остановиться здесь. Если вы хотите, чтобы они были размещены на настроенной странице Facebook, <br/>выполните следующий шаг.';
$lng_sn['info']['page_access_token_configured'] = 'Маркер доступа был настроен. Вы можете вернуться к <em> Социальные сети</em> 
модуль настройки и включить после объявления на Facebook!';
$lng_sn['notice'] = 'Важно! Маркер доступа имеет дату истечения. Вы сможете увидеть его в <em>Социальные сети</em> модуль настройки рядом с полем маркера доступа. Когда он закончится вы будете уведомлены, и тогда вам нужно повторить этот процесс и продлевать его!';
$lng_sn['error']['user_access_token'] = 'Для этого действия требуется маркер доступа пользователя. Пожалуйста, заполните шаг 2!';
$lng_sn['pageid'] = 'Идентификатор страницы Facebook';
$lng_sn['info']['pageid'] = 'Если вы хотите, чтобы объявления, размещенные на странице Facebook, были настроены вверху в этой форме,<br/> 
Вашей страницы профиля Facebook, вам необходимо настроить идентификатор страницы Facebook и<br/> Токен доступа к странице Facebook. <br/>В противном случае оставить эти 2 варианта пустым';
$lng_sn['error']['pageid'] = 'Пожалуйста, введите идентификатор страницы Facebook!';
$lng_sn['step3'] = '<b>Шаг 3:</b> Не завершайте этот шаг, если вы хотите опубликовать его на своей странице личного профиля. <br/>Этот шаг позволит вам добавить списки на страницу, созданную из раздела «Страницы». Введите ниже идентификатор страницы Facebook <br/>(Если не заполнено) И затем нажмите <b>Получить токен доступа к странице Facebook</b>. <br/>
Вы можете получить идентификатор страницы Facebook из раздела «О себе» на странице Facebook, или вы можете использовать <br/>следующий сайт: <a href="http://findfacebookid.com/" rel="nofollow">http://findfacebookid.com/</a>';
$lng_sn['fb_share_button']='Facebook <i>Поделиться</i> кнопка';
// ---------- end version 8.5 ----------------
// ---------- version 8.10 ----------------
$lng_sn['youtube_link']='Ваш <i>Youtube</i> Канал';
$lng_sn['pinterest_link']='Ваш <i>Pinterest</i> Url';
$lng_sn['instagram_link']='Ваш <i>Instagram</i> Url';
$lng_sn['linkedin_link']='Ваш <i>Linkedin</i> Url';
// ---------- end version 8.10 ----------------
// ---------- version 9.2 ----------------
$lng_sn['fb_page_plugin']='Плагин Facebook-страницы';
$lng_sn['enable_fb_page_plugin']='Включить плагин Facebook-страницы';
$lng_sn['fb_pp_tabs']='Вкладки для отображения';
$lng_sn['fb_pp_hide_cover']='Скрыть обложку в заголовке';
$lng_sn['fb_pp_show_facepile']='Показать фотографии, когда друзья, как это';
$lng_sn['fb_pp_hide_cta']='Скрыть кнопку пользовательского вызова до действия (если доступно)';
$lng_sn['fb_pp_small_header']='Вместо этого используйте небольшой заголовок';
$lng_sn['error']['enable_fb_page_plugin'] = 'Вы должны настроить страницу Facebook, чтобы активировать этот плагин!';
$lng_sn['fb_height'] = 'Height';
// ---------- end version 9.2 ----------------

// ---------- version 9.8 ----------------
$lng_sn['pinterest_button']='Pinterest button';
$lng_sn['linkedin_button']='Linkedin button';

// ---------- end version 9.8 ----------------

// ---------- version 9.9 ----------------

$lng_sn['info']['appid'] = 'The following of the below features will need a Facebook APP Id: <b>Facebook Page Plugin</b>,<br/> <b>FaceBook like button</b>, <b>FaceBook Comments</b>, <b>Post Ads on FaceBook</b>';
$lng_sn['info']['access_token'] = 'Use the button <b>Get FaceBook Access Token</b> button in order to generate User Access Token and Page Access Token';
$lng_sn['error']['enter_field_for_token'] = 'Please enter the following required information: FaceBook App Id, Facebook Page Id, Facebook App secret';
// ---------- end version 9.9 ----------------

?>