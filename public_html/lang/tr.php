<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Anasayfa';
$lng['navbar']['login'] = 'Giriş';
$lng['navbar']['logout'] = 'Çıkış';
$lng['navbar']['recent_ads'] = 'Son İlanlar';
$lng['navbar']['register'] = 'Kayıt';
$lng['navbar']['submit_ad'] = 'İlan Gönder';
$lng['navbar']['editad'] = 'İlanı Düzenle';
$lng['navbar']['my_account'] = 'Hesabım';
$lng['navbar']['administrator_panel'] = 'Yönetici Paneli';
$lng['navbar']['contact'] = 'İletişim';
$lng['navbar']['password_recovery'] = 'Şifre Kurtarma';
$lng['navbar']['renew_listing'] = 'İlan Yenile';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Gönder';
$lng['general']['search'] = 'Ara';
$lng['general']['contact'] = 'İletişim';
$lng['general']['activeads'] = 'aktif ilanlar';
$lng['general']['activead'] = 'aktif ilan';
$lng['general']['subcats'] = 'altkategoriler';
$lng['general']['subcat'] = 'altkategori';
$lng['general']['view_ads'] = 'İlanları Gör';
$lng['general']['back'] = '&laquo; Geri';
$lng['general']['goto'] = 'Git';
$lng['general']['page'] = 'Sayfa';
$lng['general']['of'] = 'toplam';
$lng['general']['other'] = 'Diğer';
$lng['general']['NA'] = 'Mevcut Değil';
$lng['general']['add'] = 'Ekle';
$lng['general']['delete_all'] = 'Tüm Seçilenleri Sil';
$lng['general']['action'] = 'Eylem';
$lng['general']['edit'] = 'Düzenle';
$lng['general']['delete'] = 'Sil';
$lng['general']['total'] = 'Toplam';
$lng['general']['min'] = 'En Düşük';
$lng['general']['max'] = 'En Yüksek';
$lng['general']['free'] = 'ÜCRETSİZ';
$lng['general']['not_authorized'] = 'Bu sayfayı görme yetkiniz bulunmuyor!';
$lng['general']['access_restricted'] = 'Bu sayfaya geçiş izniniz reddedildi!';
$lng['general']['featured_ads'] = 'Sponsor İlanlar';
$lng['general']['latest_ads'] = 'Son İlanlar';
$lng['general']['quick_search'] = 'Hızlı Arama';
$lng['general']['go'] = 'Git';
$lng['general']['unlimited'] = 'Sınırsız';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Aynı isme sahip bir dosya yüklenmiş durumda ve üzerine yazılamaz!';
$lng['images']['errors']['file_uploaded_too_big'] = ' ::MAX_FILE_UPLOAD_SIZE::K boyutundan fazla boyuta sahip resim yükleme izniniz bulunmuyor!'; // lütfen ::MAX_FILE_UPLOAD_SIZE:: etiketini boş bırakın
$lng['images']['errors']['file_dimmensions_too_big'] = 'Resim boyutları çok büyük! Lütfen maksimum ::MAX_FILE_WIDTH::px genişliğe ::MAX_FILE_HEIGHT::px yüksekliğe sahip dosya yükleyin!';  // lütfen ::MAX_FILE_WIDTH:: ve ::MAX_FILE_HEIGHT:: etiketlerini boş bırakın
$lng['images']['errors']['file_not_uploaded'] = 'Dosya yüklenemedi!';
$lng['images']['errors']['no_file'] = 'Lütfen yüklemek istediğiniz dosyayı seçin!';
$lng['images']['errors']['no_folder'] = 'Yükleme klasörü mevcut değil!';
$lng['images']['errors']['folder_not_writeable'] = 'Yükleme klasörü yazdırılabilir değil!';
$lng['images']['errors']['file_type_not_accepted'] = 'Yüklenilen dosya bir resim dosyası değil veya dosya formatı desteklenmiyor!';
$lng['images']['errors']['error'] = 'Dosya yüklenirken bir hata oluştu. Hata: ::ERROR::'; // lütfen ::ERROR:: etiketini boş bırakın
$lng['images']['errors']['no_thmb_folder'] = 'Thumbnail yükleme dosyası mevcut değil!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Thumbnail yükleme dosyası yazdırılabilir değil!';
$lng['images']['errors']['no_jpg_support'] = 'JPG formatı desteklenmiyor!';
$lng['images']['errors']['no_png_support'] = 'PNG formatı desteklenmiyor!';
$lng['images']['errors']['no_gif_support'] = 'GIF formatı desteklenmiyor!';
$lng['images']['errors']['jpg_create_error'] = 'Kaynaktan JPG resmi oluşturulurken hata oluştu!';
$lng['images']['errors']['png_create_error'] = 'Kaynaktan PNG resmi oluşturulurken hata oluştu!';
$lng['images']['errors']['gif_create_error'] = 'Kaynaktan GIF resmi oluşturulurken hata oluştu!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Giriş Yap';
$lng['login']['logout'] = 'Çıkış Yap';
$lng['login']['username'] = 'Kullanıcı adı';
$lng['login']['password'] = 'Şifre';
$lng['login']['forgot_pass'] = 'Şifremi unuttum';
$lng['login']['click_here'] = 'Buraya Tıklayın';

$lng['login']['errors']['password_missing'] = 'Lütfen şifrenizi buraya girin!';
$lng['login']['errors']['username_missing'] = 'Lütfen kullanıcı adınızı girin!';
$lng['login']['errors']['username_invalid'] = 'Kullanıcı adı geçersiz!';
$lng['login']['errors']['invalid_username_pass'] = 'Geçersiz kullanıcı adı veya şifre!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Çıkış Yap';
$lng['logout']['loggedout'] = 'Çıkış yaptınız!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Kayıt';
$lng['users']['repeat_password'] = 'Şifre Tekrarı';
$lng['users']['image_verification_info'] = 'Lütfen resimdeki a-h arasındaki küçük harfleri<br />ve 0-9 arasındaki numaraları girin.';
$lng['users']['already_logged_in'] = 'Giriş yaptınız!';
$lng['users']['select'] = 'Seç';

$lng['users']['info']['activate_account'] = 'Email adresinizebir mail gönderildi. Hesabınızı aktive etmek için lütfen bu maildeki adımları takip edin.';
$lng['users']['info']['welcome_user'] = 'Hesabınız oluşturuldu. Lütfen <a href="login.php">Giriş</a> linkine tıklayarak hesabınıza giriş yapın!';
$lng['users']['info']['awaiting_admin_verification'] = 'Hesabınız yöneticinin onayını bekliyor. Hesabınız onaylandığında email ile bilgilendirileceksiniz.';
$lng['users']['info']['account_info_updated'] = 'Hesap bilginiz güncellendi!';
$lng['users']['info']['password_changed'] = 'Şifreniz değiştirildi!';
$lng['users']['info']['account_activated'] = 'Hesabınız aktive edildi! Lütfen <a href="login.php">giriş</a> linkine tıklayarak hesabınıza giriş yapın.';

$lng['users']['errors']['username_missing'] = 'Lütfen kullanıcı adınızı girin!';
$lng['users']['errors']['invalid_username'] = 'Geçersiz Kullanıcı Adı!';
$lng['users']['errors']['username_exists'] = 'Kullanıcı adı başkası tarafından kullanılıyor! Daha önce kayıt olduysanız lütfen giriş yapın!';
$lng['users']['errors']['email_missing'] = 'Lütfen email adresinizi girin!';
$lng['users']['errors']['invalid_email'] = 'Geçersiz email adresi!';
$lng['users']['errors']['passwords_dont_match'] = 'Şifreler eşleşmiyor!';
$lng['users']['errors']['email_exists'] = 'Email adresi başkası tarafından kullanılıyor! Hesabınız varsa lütfen giriş yapın!';
$lng['users']['errors']['password_missing'] = 'Lütfen şifrenizi girin!';
$lng['users']['errors']['invalid_validation_string'] = 'Geçersiz doğrulama kodu!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Geçersiz hesap veya aktivasyon anahtarı! Lütfen yöneticiyle iletişime geçin!';
$lng['users']['errors']['account_already_active'] = 'Hesabınız aktive edildi!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'İlan';
$lng['listings']['category'] = 'Kategori';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Fiyat';
$lng['listings']['ad_description'] = 'İlan Açıklaması';
$lng['listings']['title'] = 'Başlık';
$lng['listings']['description'] = 'Açıklama';
$lng['listings']['image'] = 'Resim';
$lng['listings']['words_left'] = 'kelime kaldı';
$lng['listings']['enter_photos'] = 'Fotoğraf Yükleyin';
$lng['listings']['ad_information'] = 'İlan Bilgisi';
$lng['listings']['free'] = 'ÜCRETSİZ';
$lng['listings']['details'] = 'Detaylar';
$lng['listings']['stock_no'] = 'Stok Numarası';
$lng['listings']['location'] = 'Konum';
$lng['listings']['contact_info'] = 'İrtibat Bilgisi';
$lng['listings']['email_seller'] = 'Satıcıya Email Gönder';
$lng['listings']['no_recent_ads'] = 'Yeni İlan Bulunmuyor';
$lng['listings']['no_ads'] = 'Bu kategoride ilan listelenmiyor';
$lng['listings']['added_on'] = 'Başlangıç';
$lng['listings']['send_mail'] = 'Kullanıcıya Mesaj Gönder';
$lng['listings']['details'] = 'Detaylar';
$lng['listings']['user'] = 'Kullanıcı';
$lng['listings']['price'] = 'Fiyat';
$lng['listings']['confirm_delete'] = 'Bu ilanı silmek istiyor musunuz?';
$lng['listings']['confirm_delete_all'] = 'Seçili ilanları silmek istiyor musunuz?';
$lng['listings']['all'] = 'Tüm İlanlar';
$lng['listings']['active_listings'] = 'Aktif İlanlar';
$lng['listings']['pending_listings'] = 'Onay Bekleyen İlanlar';
$lng['listings']['featured_listings'] = 'Sponsor İlanlar';
$lng['listings']['expired_listings'] = 'Sonlanmış İlanlar';
$lng['listings']['active'] = 'Aktif';
$lng['listings']['inactive'] = 'Pasif';
$lng['listings']['pending'] = 'Onay Bekleyen';
$lng['listings']['featured'] = 'Sponsor';
$lng['listings']['expired'] = 'Sonlanmış';
$lng['listings']['order_by_date'] = 'Tarihe Göre Sırala';
$lng['listings']['order_by_category'] = 'Kategoriye Göre Sırala';
$lng['listings']['order_by_make'] = 'Markaya Göre Sırala';
$lng['listings']['order_by_price'] = 'Fiyata Göre Sırala';
$lng['listings']['order_by_views'] = 'Hite Göre Sırala';
$lng['listings']['order_asc'] = 'Artan';
$lng['listings']['order_desc'] = 'Azalan';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Hit';
$lng['listings']['date'] = 'Tarih';
$lng['listings']['no_listings'] = 'İlan Bulunmuyor';
$lng['listings']['NA'] = 'Mevcut Değil';
$lng['listings']['no_such_id'] = 'İlan mevcut değil!';
$lng['listings']['mark_sold'] = 'Satıldı Olarak İşaretle';
$lng['listings']['mark_unsold'] = 'Satılmadı Olarak İşaretle';
$lng['listings']['sold'] = 'Satıldı';
$lng['listings']['feature'] = 'Sponsor';
$lng['listings']['expired_on'] = 'Sonlanma tarihi';
$lng['listings']['renew'] = 'Yenile';
$lng['listings']['print_page'] = 'Yazdır';
$lng['listings']['recommend_this'] = 'Paylaş';
$lng['listings']['more_listings'] = 'Bu kullanıcının diğer ilanları';
$lng['listings']['all_listings_for'] = 'Belirtilen için tüm ilanlar';
$lng['listings']['free_category'] = 'ÜCRETSİZ Kategori';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'İlan resmini silmek istiyor musunuz?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='kelime kotasına ulaşıldı! En fazla ::MAX:: kelime kullanabilirsiniz'; // lütfen ::MAX:: etikeni boş bırakın
$lng['listings']['errors']['badwords']='İlanınız yasaklı kelimeler içeriyor! Lütfen içeriğini gözden geçirin!';
$lng['listings']['errors']['title_missing']='Lütfen ilan başlığını girin!';
$lng['listings']['errors']['category_missing']='Lütfen bir kategori seçin!';
$lng['listings']['errors']['invalid_category']='Geçersiz kategori!';
$lng['listings']['errors']['package_missing']='Lütfen bir plan seçin!';
$lng['listings']['errors']['invalid_package']='Geçersiz plan!';
$lng['listings']['errors']['content_missing']='Lütfen ilan içeriğini girin!';
$lng['listings']['errors']['invalid_price']='Geçersiz fiyat!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'En Düşük Fiyat';
$lng['quick_search']['price_high'] = 'En Yüksek Fiyat';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Yeni İlan Gönder';
$lng['useraccount']['browse_your_listings'] = 'İlanları Yönet';
$lng['useraccount']['modify_account_info'] = 'Hesap Bilgisi';
$lng['useraccount']['order_history'] = 'Sipariş Geçmişi';
$lng['useraccount']['total_listings'] = 'Toplam İlan';
$lng['useraccount']['total_views'] = 'Toplam Hit';
$lng['useraccount']['active_listings'] = 'Aktif İlan';
$lng['useraccount']['pending_listings'] = 'Onay Bekleyen İlan';
$lng['useraccount']['last_login'] = 'Son Giriş';
$lng['useraccount']['last_login_ip'] = 'Son Giriş Yapılan IP';
$lng['useraccount']['expired_listings'] = 'Sonlanan İlan';
$lng['useraccount']['statistics'] = 'İstatistikler';
$lng['useraccount']['welcome'] = 'Hoşgeldin';
$lng['useraccount']['contact_name'] = 'İrtibat Adı';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Şifre';
$lng['useraccount']['repeat_password'] = 'Şifre Tekrarı';
$lng['useraccount']['change_password'] = 'Şifreyi Değiştir';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'to';
$lng['advanced_search']['price_min'] = 'Min Fiyat';
$lng['advanced_search']['price_max'] = 'Mak Fiyat';
$lng['advanced_search']['word'] = 'Anahtar Kelime';
$lng['advanced_search']['sort_by'] = 'Sıralama';
$lng['advanced_search']['sort_by_price'] = 'Fiyata Göre Sırala';
$lng['advanced_search']['sort_by_date'] = 'Tarihe Göre Sırala';
$lng['advanced_search']['sort_by_make'] = 'Markaya Göre Sırala';
$lng['advanced_search']['sort_descendant'] = 'Azalan Sıralama';
$lng['advanced_search']['sort_ascendant'] = 'Artan Sıralama';
$lng['advanced_search']['only_ads_with_pic'] = 'Sadece Resimli İlanlar';
$lng['advanced_search']['no_results'] = 'Aramanıza uygun ilan bulunamadı!';
$lng['advanced_search']['multiple_ads_matching'] = 'Aramanıza uygun ::NO_ADS:: ilan bulundu!'; // Lütfen ::NO_ADS:: etiketini boş bırakın
$lng['advanced_search']['single_ad_matching'] = 'Aramanıza uygun tek ilan bulundu!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'İsim';
$lng['contact']['subject'] = 'Konu';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Websayfası';
$lng['contact']['comments'] = 'Yorum';
$lng['contact']['message_sent'] = 'Mesajınız gönderildi!';
$lng['contact']['sending_message_failed'] = 'Mesaj gönderimi başarısız!';
$lng['contact']['mailto'] = 'Alıcı';

$lng['contact']['error']['name_missing'] = 'Lütfen adınızı girin!';
$lng['contact']['error']['subject_missing'] = 'Lütfen konuyu girin!';
$lng['contact']['error']['email_missing'] = 'Lütfen email adresini girin!';
$lng['contact']['error']['invalid_email'] = 'Geçersiz email adresi!';
$lng['contact']['error']['comments_missing'] = 'Lütfen yorumunuzu girin!';
$lng['contact']['error']['invalid_validation_number'] = 'Geçersiz doğrulama kodu!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Email adresi';
$lng['password_recovery']['new_password'] = 'Yeni Şifre';
$lng['password_recovery']['repeat_new_password'] = 'Yeni Şifre Tekrarı';
$lng['password_recovery']['invalid_key'] = 'Geçersiz Anahtar';

$lng['password_recovery']['email_missing'] = 'Lütfen email adresinizi girin!';
$lng['password_recovery']['invalid_email'] = 'Geçersiz email adresi';
$lng['password_recovery']['email_inexistent'] = 'Bu email adresiyle kayıtlı kullanıcı bulunmuyor';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Tutar';
$lng['packages']['words'] = 'Kelime';
$lng['packages']['days'] = 'Gün';
$lng['packages']['pictures'] = 'Resim';
$lng['packages']['picture'] = 'Resim';
$lng['packages']['available'] = 'Kullanılabilir';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Ödeme Yolu';
$lng['order_history']['amount'] = 'Tutar';
$lng['order_history']['completed'] = 'Tamamlandı';
$lng['order_history']['not_completed'] = 'Tamamlanmadı';
$lng['order_history']['ad_no'] = 'İlan id';
$lng['order_history']['date'] = 'Tarih';
$lng['order_history']['no_actions'] = 'Sipariş Kaydı Bulunmuyor';
$lng['order_history']['order_by_date'] = 'Tarihe Göre Sırala';
$lng['order_history']['order_by_amount'] = 'Tutara Göre Sırala';
$lng['order_history']['order_by_processor'] = 'Ödeme Yoluna Göre Sırala';
$lng['order_history']['description'] = 'Açıklama';
$lng['order_history']['newad'] = 'Yeni ilan'; 
$lng['order_history']['renew'] = 'Yenile'; 
$lng['order_history']['featured'] = 'Sponsor İlan'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Tarihe Göre Sırala';
$lng['order']['price'] = 'Fiyata Göre Sırala';
$lng['order']['title'] = 'Başlığa Göre Sırala';
$lng['order']['desc'] = 'Azalan';
$lng['order']['asc'] = 'Artan';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Bu ilanı paylaş';
$lng['recommend']['your_name'] = 'İsminiz';
$lng['recommend']['your_email'] = 'Email Adresiniz';
$lng['recommend']['friend_name'] = 'Arkadaşınızın Adı';
$lng['recommend']['friend_email'] = 'Arkadaşınızın Emaili';
$lng['recommend']['message'] = 'Arkadaşınıza mesajınız';


$lng['recommend']['error']['your_name_missing'] = 'Lütfen isminizi girin!';
$lng['recommend']['error']['your_email_missing'] = 'Lütfen email adresinizi girin!';
$lng['recommend']['error']['friend_name_missing'] = 'Lütfen arkadaşınızın adını girin!';
$lng['recommend']['error']['friend_email_missing'] = 'Lütfen arkadaşınızın emailini girin!';
$lng['recommend']['error']['invalid_email'] = 'Geçersiz email adresi';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'İlan';
$lng['stats']['general'] = 'Genel';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Abone Ol';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Durum';
$lng['general']['favourites'] = 'Favoriler';
$lng['general']['as'] = 'belirtilen şekilde';
$lng['general']['view'] = 'Gör';
$lng['general']['none'] = 'Hiçbiri';
$lng['general']['yes'] = 'evet';
$lng['general']['no'] = 'hayır';
$lng['general']['next'] = 'Sonraki &raquo;';
$lng['general']['finish'] = 'Bitir';
$lng['general']['download'] = 'İndir';
$lng['general']['remove'] = 'Kaldır';
$lng['general']['previous_page'] = '&laquo; Önceki';
$lng['general']['next_page'] = 'Sonraki &raquo;';
$lng['general']['items'] = 'öğe';
$lng['general']['active'] = 'Aktif';
$lng['general']['inactive'] = 'Pasif';
$lng['general']['expires'] = 'Sonlanacağı tarih';
$lng['general']['available'] = 'Kullanılabilir';
$lng['general']['cancel'] = 'İptal';
$lng['general']['never'] = 'Asla';
$lng['general']['asc'] = 'Artan';
$lng['general']['desc'] = 'Azalan';
$lng['general']['pending'] = 'Onay Bekleyen';
$lng['general']['upload'] = 'Yükle';
$lng['general']['processing'] = 'İşlem gerçekleştiriliyor, lütfen bekleyin ... ';
$lng['general']['help'] = 'Yardım';
$lng['general']['hide'] = 'Gizle';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Bu sınırlı özelliklere sahip örnek bir sürümdür. Belirtilen ayaraları değiştirme yetkiniz bulunmuyor!';
$lng['general']['check_all'] = 'Tümünü Seç';
$lng['general']['uncheck_all'] = 'Hiçbirini Seçme';
$lng['general']['all'] = 'Tümü';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Satıcı Sayfası';
$lng['users']['store_banner'] = 'Satıcı Sayfası Banner Resmi';
$lng['users']['waiting_mail_activation'] = 'Email aktivesyonu bekleniyor';
$lng['users']['waiting_admin_activation'] = 'Yönetici onayı bekleniyor';
$lng['users']['no_such_id'] = 'Bu kullanıcı nevcut değil.';

$lng['users']['info']['store_banner'] = 'Satıcı sayfanız için en üstte kullanacağınız resim.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Rapor Et';
$lng['listings']['report_reason'] = 'Rapor Nedeni';
$lng['listings']['meta_info'] = 'Meta Bilgi';
$lng['listings']['meta_keywords'] = 'Meta Anahtar Kelimeler';
$lng['listings']['meta_description'] = 'Meta Açıklama';
$lng['listings']['not_approved'] = 'Onaylanmadı';
$lng['listings']['approve'] = 'Onayla';
$lng['listings']['choose_payment_method'] = 'Ödeme yolunu seçin';

$lng['listings']['choose_category'] = 'Kategori Seçin';
$lng['listings']['choose_plan'] = 'Plan Seçin';
$lng['listings']['enter_ad_details'] = 'İlan Detaylarını Girin';
$lng['listings']['ad_details'] = 'İlan Detayları';
$lng['listings']['add_photos'] = 'Fotoğraf Ekle';
$lng['listings']['ad_photos'] = 'Fotoğraf Ekle';
$lng['listings']['edit_photos'] = 'Fotoğrafları Düzenle';
$lng['listings']['extra_options'] = 'Ekstra Seçenekler';
$lng['listings']['review'] = 'İlan Önizlemesi';
$lng['listings']['finish'] = 'Bitir';
$lng['listings']['next_step'] = 'Sonraki Adım &raquo;';
$lng['listings']['included'] = 'İçerilen';
$lng['listings']['finalize'] = 'Tamamla';
$lng['listings']['zip'] = 'Zip kodu';
$lng['listings']['add_to_favourites'] = 'Favorilerime ekle';
$lng['listings']['confirm_add_to_fav'] = 'Uyarı! Giriş yapmadınız! Favoriler listesi geçici şekilde barındırılacak!';
$lng['listings']['add_to_fav_done'] = 'İlan favorilerinize eklendi!';
$lng['listings']['confirm_delete_favourite'] = 'Bu ilanı favorilerinizden silmek istiyor musunuz?';
$lng['listings']['no_favourites'] = 'Favori İlan Bulunmuyor';
$lng['listings']['extra_options'] = 'Ekstra Seçenekler';
$lng['listings']['highlited'] = 'Renkli Arkaplan';
$lng['listings']['priority'] = 'Öncelikli Gösterim';
$lng['listings']['video'] = 'Videolu İlan';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Onay Bekleyen Video';
$lng['listings']['video_code'] = 'Video Kodu';
$lng['listings']['total'] = 'Toplam';
$lng['listings']['approve_ad'] = 'İlanı Onayla';
$lng['listings']['finalize_later'] = 'Daha Sonra Tamamla';
$lng['listings']['click_to_upload'] = 'Yüklemek İçin Tıklayın';
$lng['listings']['files_uploaded'] = ' fotoğraf yüklendi toplam ';
$lng['listings']['allowed'] = ' fotoğrafa izin veriliyor!';
$lng['listings']['limit_reached'] = ' Maksimum fotoğraf sayısına ulaşıldı!';
$lng['listings']['edit_options'] = 'İlan Seçeneklerini Düzenle';
$lng['listings']['view_store'] = 'Satıcı Sayfasını Gör';
$lng['listings']['edit_ad_options'] = 'İlan Seçeneklerini Düzenle';
$lng['listings']['no_extra_options_selected'] = 'Ekstra seçenek seçilmedi!';
$lng['listings']['highlited_listings'] = 'Renkli Arkaplan İlanlar';
$lng['listings']['for_listing'] = 'belirtilen ilan numarası için ';
$lng['listings']['expires_on'] = 'Bitiş Tarihi';
$lng['listings']['expired_on'] = 'Bittiği Tarih';
$lng['listings']['pending_ad'] = 'Onay Bekleyen İlan';
$lng['listings']['pending_highlited'] = 'Onay Bekleyen Arkaplan İlan';
$lng['listings']['pending_featured'] = 'Onay Bekleyen Sponsor İlan';
$lng['listings']['pending_priority'] = 'Onay Bekleyen Öncelikli Gösterim';
$lng['listings']['enter_coupon'] = 'İndirim kodunu girin';
$lng['listings']['discount'] = 'İndirim';
$lng['listings']['select_plan'] = 'Plan Seç';
$lng['listings']['pending_subscription'] = 'Onay Bekleyen Abonelik';
$lng['listings']['remove_favourite'] = 'Favorilerimden Kaldır';

$lng['listings']['order_up'] = 'Normal sırala';
$lng['listings']['order_down'] = 'Ters sırala';

$lng['listings']['errors']['invalid_youtube_video'] = 'Geçersiz youtube videosu!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abone Ol';
$lng['useraccount']['no_package'] = 'İlan Planı Yok';
$lng['useraccount']['packages'] = 'Planlar';
$lng['useraccount']['date_start'] = 'Başlama Tarihi';
$lng['useraccount']['date_end'] = 'Bitiş Tarihi';
$lng['useraccount']['remaining_ads'] = 'Kalan İlan Sayısı';
$lng['useraccount']['account_type'] = 'Hesap türü';
$lng['useraccount']['unfinished_listings'] = 'Tamamlanmamış İlan';
$lng['useraccount']['confirm_delete_subscription'] = 'Bu aboneliği silmek istiyor musunuz?';
$lng['useraccount']['buy_store'] = 'Satıcı Sayfası Satın Al';
$lng['useraccount']['bulk_uploads'] = 'Toplu Yüklemeler';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonelik';
$lng['packages']['ads'] = 'İlan';
$lng['packages']['name'] = 'İsim';
$lng['packages']['details'] = 'Detaylar';
$lng['packages']['no_ads'] = 'İlan Sayısı';
$lng['packages']['subscription_time'] = 'Abonelik Süresi';
$lng['packages']['no_pictures'] = 'İzin Verilen Resim Sayısı';
$lng['packages']['no_words'] = 'Kelime Sayısı';
$lng['packages']['ads_availability'] = 'İlan Geçerliliği';
$lng['packages']['featured'] = 'Sponsor';
$lng['packages']['highlited'] = 'Renkli Arka Plan';
$lng['packages']['priority'] = 'Öncelikli';
$lng['packages']['video'] = 'Video İlanları';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonelik';
$lng['order_history']['post_listing'] = 'İlan Gönder';
$lng['order_history']['renew_listing'] = 'İlan Yenile';
$lng['order_history']['feature_listing'] = 'Sposnor İlan Yap';
$lng['order_history']['subscribe_to_package'] = 'Plana Abone Ol';
$lng['order_history']['complete_payment'] = 'Ödemeyi Tamamla';
$lng['order_history']['complete_payment_for'] = 'Belirtilen İçin Ödemeyi Tamamla';
$lng['order_history']['details'] = 'Detaylar';
$lng['order_history']['subscription_no'] = 'Abonelik Numarası';
$lng['order_history']['highlited'] = 'Renkli Arka Plan İlanı';
$lng['order_history']['priority'] = 'Öncelikli Gösterim';
$lng['order_history']['video'] = 'Videolu İlan';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Lütfen bir plan seçin!';
$lng['buy_package']['error']['choose_processor'] = 'Lütfen ödeme yolunu seçin!';
$lng['buy_package']['error']['invalid_processor'] = 'Geçersiz ödeme yolu!';
$lng['buy_package']['error']['invalid_package'] = 'Geçersiz plan!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Geçersiz Paypal transferi!';
$lng['2co']['invalid_transaction'] = 'Geçersiz 2Checkout transferi!';
$lng['moneybookers']['invalid_transaction'] = 'Geçersiz Moneybookers transferi!';
$lng['authorize']['invalid_transaction'] = 'Geçersiz Authorize.net transferi!';
$lng['manual']['invalid_transaction'] = 'Geçersiz transfer!';

$lng['paypal']['transaction_canceled'] = 'Paypal transferi iptal edildi!';
$lng['2co']['transaction_canceled'] = '2Checkout transferi iptal edildi!';
$lng['mb']['transaction_canceled'] = 'Moneybookers transferi iptal edildi!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net transferi iptal edildi!';
$lng['manual']['transaction_canceled'] = 'Transfer iptal edildi!';
$lng['epay']['transaction_canceled'] = 'ePay transferi iptal edildi!';

$lng['payments']['transaction_already_processed'] = 'Transfer işleme alınmış durumda!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Aboneliği Onayla';
$lng['subscribe']['payment_method'] = 'Ödeme Metodu';
$lng['subscribe']['renew_subscription'] = 'Aboneliği Yenile';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Kopya email: ';
$lng['bcc_mails']['from'] = 'Gönderen: ';
$lng['bcc_mails']['to'] = 'Alıcı: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Toplu yükleme durumu: ';
$lng['ie']['successfully'] = 'ilan başarıyla eklendi';
$lng['ie']['failed'] = 'başarısız oldu';
$lng['ie']['uploaded_listings'] = 'Yüklü ilan listesi:';
$lng['ie']['errors']['upload_import_file'] = 'Lütfen içe aktarımı yapılacak dosyayı seçin!';
$lng['ie']['errors']['incorrect_file_type'] = 'Geçersiz dosya türü! Dosya belirtilen formatta olmalı: ';
$lng['ie']['errors']['could_not_open_file'] = 'Dosya açılamadı!';
$lng['ie']['errors']['choose_categ'] = 'Lütfen bir kategori seçin!';
$lng['ie']['errors']['could_not_save_file'] = 'Dosya indirilemedi: ';
$lng['ie']['errors']['required_field_missing'] = 'Belirtilen alanlar boş: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Belirtilen dizi numarası için geçersiz veri sayısı: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Satıcı Seç';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Aranacak bölgeler';
$lng['areasearch']['all_locations'] = 'Tüm bölgeler';
$lng['areasearch']['exact_location'] = 'Bölgeye göre sınırla';
$lng['areasearch']['around'] = 'çevresinde';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Evet';
$lng['general']['No'] = 'Hayır';
$lng['general']['or'] = 'veya';
$lng['general']['in'] = 'kategori';
$lng['general']['by'] = 'tarafından';
$lng['general']['close_window'] = 'Pencereyi Kapat';
$lng['general']['more_options'] = 'daha fazla seçenek &raquo;';
$lng['general']['less_options'] = '&laquo; daha az seçenek';
$lng['general']['send'] = 'Gönder';
$lng['general']['save'] = 'Kaydet';
$lng['general']['for'] = 'için';
$lng['general']['to'] = 'kategori';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Kiralandı Olarak İşaretle';
$lng['listings']['mark_unrented'] = 'Kiralanmadı Olarak İşaretle';
$lng['listings']['rented'] = 'Kiralandı';
$lng['listings']['your_info'] = 'Bilginiz';
$lng['listings']['email'] = 'Email Adresiniz';
$lng['listings']['name'] = 'İsminiz';
$lng['listings']['listing_deleted'] = 'İlanınız silindi!';
$lng['listings']['post_without_login'] = 'Giriş yapmadan gönder';
$lng['listings']['waiting_activation'] = 'Aktivasyon onayı bekleniyor';
$lng['listings']['waiting_admin_approval'] = 'Yönetici onayı bekleniyor';
$lng['listings']['dont_need_account'] = 'Hesabınız yok mu? Giriş yapmadan ilan gönderin!';
$lng['listings']['post_your_ad'] = 'İlan gönderin!';
$lng['listings']['posted'] = 'Gönderildi';
$lng['listings']['select_subscription'] = 'Aboneliği Seçin';
$lng['listings']['choose_subscription'] = 'Aboneliği Seçin';
$lng['listings']['inactive_listings'] = 'Pasif İlanlar';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Aramayı Filtrele';
$lng['search']['refine_by_keyword'] = 'Anahtar kelimeye göre filtrele';
$lng['search']['showing'] = 'Gösteriliyor';
$lng['search']['more'] = 'Daha Fazla ...';
$lng['search']['less'] = 'Daha Az ...';
$lng['search']['search_for'] = 'Arama kelimesi';
$lng['search']['save_your_search'] = 'Aramanızı kaydedin';
$lng['search']['save'] = 'Kaydet';
$lng['search']['search_saved'] = 'Aramanız kaydedildi!';
$lng['search']['must_login_to_save_search'] = 'Aramanızı kaydedebilmeniz için hesabınıza giriş yapmış olmalısınız!';
$lng['search']['view_search'] = 'Aramayı gör';
$lng['search']['all_categories'] = 'Tüm Kategoriler';
$lng['search']['more_than'] = 'belirtilen değerden daha fazla';
$lng['search']['less_than'] = 'belirtilen değerden daha az';

$lng['search']['error']['cannot_save_empty_search'] = 'Aramanız herhangi bir koşul içermiyor bu nedenle kayıt edilemez!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Kaydedilmiş Aramalar';
$lng['useraccount']['view_saved_searches'] = 'Kaydedilmiş Aramaları Gör';
$lng['useraccount']['no_saved_searches'] = 'Kaydedilmiş Aramanız Yok';
$lng['useraccount']['recurring'] = 'Yenileme';
$lng['useraccount']['date_renew'] = 'Yenilendiği tarih';
$lng['useraccount']['logged_in_as'] = 'Giriş yaptığınız kullanıcı adı ';
$lng['useraccount']['subscriptions'] = 'Abonelikler';

$lng['users']['activate_account'] = 'Hesabı Aktive Et';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Abonelik Ekle';
$lng['subscriptions']['package'] = 'Abonelik';
$lng['subscriptions']['remaining_ads'] = 'Kalan Reklamlar';
$lng['subscriptions']['recurring'] = 'Yenileme';
$lng['subscriptions']['date_start'] = 'Başlama Tarihi';
$lng['subscriptions']['date_end'] = 'Bitiş Tarihi';
$lng['subscriptions']['date_renew'] = 'Yenileme Tarihi';
$lng['subscriptions']['confirm_delete'] = 'Bu aboneliği silmek istiyor musunuz?';
$lng['subscriptions']['no_subscriptions'] = 'Abonelik BUlunmuyor';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Hesabınız yok mu?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Bu abonelik için otomatik ödeme açık';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Belirtilen gerekli alanlar doldurulmadı: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Satıcı Sayfası Satın Al';


$lng['images']['errors']['max_photos'] = 'Maksimum fotoğraf sayısına ulaşıldı!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email uyarısı';
$lng['alerts']['email_alerts'] = 'Email uyarıları';
$lng['alerts']['no_alerts'] = 'Email uyarısı bulunmuyor';
$lng['alerts']['view_email_alerts'] = 'Email uyarılarımı gör';
$lng['alerts']['send_email_alerts'] = 'Email uyarılarını gönder';
$lng['alerts']['immediately'] = 'Hemen şimdi';
$lng['alerts']['daily'] = 'Günlük';
$lng['alerts']['weekly'] = 'Haftalık';
$lng['alerts']['your_email'] = 'email adresiniz';
$lng['alerts']['create_alert'] = 'Uyarı Oluştur';
$lng['alerts']['email_alert_info'] = 'Bu aramaya yeni ilan gönderildiğinde beni email ile bilgilendir.';
$lng['alerts']['alert_added'] = 'Uyarınız oluşturuldu!';
$lng['alerts']['alert_added_activate'] = '<b>::EMAIL::</b> adresinden kısa bir süre sonra mail alacaksınız. Email uyarınızı aktif hale getirmek için lütfen gelecek emaildeki aktivasyon linkine tıklayın!'; // ::EMAIL:: dizinini silmeyin !
$lng['alerts']['search_in'] = 'Arama yeri';
$lng['alerts']['keyword'] = 'anahtar kelime';
$lng['alerts']['frequency'] = 'Uyarı sıklığı';
$lng['alerts']['alert_activated'] = 'Uyarınız aktive edildi! Uyarılarınız için email almaya başlayacaksınız.';
$lng['alerts']['alert_unsubscribed'] = 'Uyarılarınız silindi!';
$lng['alerts']['started_on'] = 'Başlangıç';
$lng['alerts']['no_terms_searched'] = 'Bu arama için bir koşul ayarlanmadı!';
$lng['alerts']['no_listings'] = 'Bu uyarı için ilan bulunmuyor!';

$lng['alerts']['error']['email_required'] = 'Uyarınız için lütfen bir email adresi girin!';
$lng['alerts']['error']['invalid_email'] = 'Geçersiz email adresi!';
$lng['alerts']['error']['invalid_frequency'] = 'Geçersiz uyarı sıklığı!';
$lng['alerts']['error']['login_required'] = 'Bir uyarı kaydedebilmek için lütfen <a href="::LINK::">giriş yap</a> linkine tıklayın!'; // ::LINK:: dizinini silmeyin !
$lng['alerts']['error']['ask_adv_key'] = 'Lütfen kategori dışında bir anahtar kelime girin!';
$lng['alerts']['error']['invalid_confirmation'] = 'Geçersiz uyarı doğrulaması!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Geçersiz abonelik iptal isteği!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kredi Hesaplama';
$lng_loancalc['sale_price'] = 'Satış fiyatı';
$lng_loancalc['down_payment'] = 'Peşinat';
$lng_loancalc['trade_in_value'] = 'Ticari değer';
$lng_loancalc['loan_amount'] = 'Kredi miktarı';
$lng_loancalc['sales_tax'] = 'Satış vergileri';
$lng_loancalc['interest_rate'] = 'Faiz oranı';
$lng_loancalc['loan_term'] = 'Kredi süresi';
$lng_loancalc['months'] = 'ay';
$lng_loancalc['years'] = 'yıl';
$lng_loancalc['or'] = 'veya';
$lng_loancalc['monthly_payment'] = 'Aylık ödeme';
$lng_loancalc['calculate'] = 'Hesapla';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Yorumlar';
$lng_comments['make_a_comment'] = 'Yorum Yap';
$lng_comments['login_to_post'] = 'Yorum yapabilmek için lütfen <a href="::LOGIN_LINK::">giriş yapın</a>.';

$lng_comments['name'] = 'İsim';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Websitesi';
$lng_comments['submit_comment'] = 'Yorumu Gönder';

$lng_comments['error']['name_missing'] = 'Lütfen isminizi girin!';
$lng_comments['error']['content_missing'] = 'Lütfen yorumunuzu girin!';
$lng_comments['error']['website_missing'] = 'Lütfen websitenizi girin!';
$lng_comments['error']['email_missing'] = 'Lütfen email adresinizi girin!';
$lng_comments['error']['listing_id_missing'] = 'Geçersiz yorum girdisi!';

$lng_comments['error']['invalid_email'] = 'Geçersiz email adresi!';
$lng_comments['error']['invalid_website'] = 'Geçersiz websitesi!';
$lng_comments['errors']['badwords'] = 'Yorumunuz yasaklı kelimeler içeriyor! Lütfen mesajınızı düzeltin!';

$lng_comments['info']['comment_added'] = 'Yorumunuz eklendi! Başka bir yorum eklemek için lütfen <a id="newad">buraya tıklayın</a>.';
$lng_comments['info']['comment_pending'] = 'Yorumunuz yönetici onayından sonra yayınlanacaktır.';

// ----------------- end comments module --------------------


// -------------
$lng['tb']['next'] = 'SONRAKİ &raquo;';
$lng['tb']['prev'] = '&laquo; ÖNCEKİ';
$lng['tb']['close'] = 'KAPAT';
$lng['tb']['or_esc'] = 'veya ESC Tuşu';


// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mesaj';
$lng['messages']['confirm_delete_all'] = 'Seçilen mesajları silmek istediğinize eminmisiniz?';
$lng['messages']['listing'] = 'Liste';
$lng['messages']['no_messages'] = 'Mesaj yok';
$lng['general']['reply'] = 'Mesaja cevap ver';
$lng['messages']['message'] = 'Mesaj';
$lng['messages']['from'] = 'İtibaren';
$lng['messages']['to'] = 'için';
$lng['messages']['on'] = 'doğru';
$lng['messages']['view_thread'] = 'Görmek';
$lng['messages']['started_for_listing'] = 'Tüm mesaj listesi';
$lng['messages']['view_complete_message'] = 'Mesajın tümünü görüntüle';
$lng['messages']['message_history'] = 'Mesaj geçmişi';
$lng['messages']['yourself'] = 'sen';
$lng['messages']['report_spam'] = 'Spam olarak bildir';
$lng['messages']['reported_as_spam'] = 'Spam olrak raporla';
$lng['messages']['confirm_report_spam'] = 'Spam olarak bu mesajı rapor etmek istediğinizden emin misiniz?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Gerçersiz ilan numarası';
$lng['listings']['show_map'] = 'Harita Göster';
$lng['listings']['hide_map'] = 'Harita Gizle';
$lng['listings']['see_full_listing'] = 'Tüm listeye bak';
$lng['listings']['list'] = 'Liste';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'İlan favoriler listesinden çıkartıldı!';
$lng['search']['high_no_results'] = 'Arama sonuçları sayısı çok fazladır. Sonuç sayısını azaltmak ve daha ilgili sonuçlar almak için Aramanızı detaylandırın Lütfen!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Bu e-posta adresine izin verilmez!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Abonelik sayısına ulaşıldı, abonelik izin verilemez!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Konum Seçiniz';
$lng['location']['choose'] = 'Seç';
$lng['location']['change'] = 'Değiştir';
$lng['location']['all_locations'] = 'Tüm Konumlar';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategori';
$lng['location']['save_location'] = 'Konumu Kaydet';

$lng['credits']['credits'] = 'Kredi';
$lng['credits']['credit'] = 'Kredi';
$lng['credits']['pending_credits'] = 'Bekleyen kredi';
$lng['credits']['current_credits'] = 'Olan Kredi';
$lng['credits']['one_credit_equals'] = 'Bir kredi';
$lng['credits']['credits_amount'] = 'Kredi tutarı';
$lng['credits']['buy_extra_credits'] = 'Extra kredi satın al';
$lng['credits']['credits_package'] = 'Kredi paketi';
$lng['credits']['select_package'] = 'Kredi paketi seçin';
$lng['credits']['choose_package'] = 'Paketi seçin';
$lng['credits']['you_currently_have'] = 'Şuanda var';
$lng['credits']['you_currently_have_no_credits'] = 'Şuanda kredi var';
$lng['credits']['pay_using_credits'] = 'Kredisi kullanarak ödeme';
$lng['credits']['not_enough_credits'] = 'Bu ödeme için yeterli kredi!';
$lng['credits']['scredits'] = 'Kredi';
$lng['credits']['scredit'] = 'Kredi';



$lng['order_history']['credits_purchase'] = 'Kredi satın';
$lng['order_history']['invalid_order'] = 'Geçersiz sipariş!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Yönlendiriliyorsunuz lütfen bekleyin!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'İletişim bilgilerini görebilmek için lütfen <a href="::LOGIN_LINK::">giriş</a> yapınız!';
$lng['listing']['no_contact_information'] = 'İlgili kişi bilgileri.';


$lng['navbar']['register_as'] = 'Kayıt Ol';
$lng['listings']['all_ads'] = 'Tüm ilanlar';
$lng['listings']['refine'] = 'Detaylı Arama';
$lng['listings']['results'] = 'Sonuçlar';
$lng['listings']['photos'] = 'Fotoğraf';
$lng['listings']['user_details'] = 'Kullanıcı Ayrıntıları';
$lng['listings']['back_to_details'] = 'İlan detayları için yedekleyin';

$lng['listings']['post_free_ad'] = 'İlan Gönder';

$lng['users']['username_available'] = 'Kullanıcı adı kullanılıyor!';
$lng['users']['username_not_available'] = 'Kullanıcı adı alabilirsiniz!';

$lng['general']['not_found'] = 'İstenen sayfa bulunamadı!';
$lng['general']['full_version'] = 'Full versiyon';
$lng['general']['mobile_version'] = 'Mobil versiyon';
$lng['failed'] = 'Başarısız';
$lng['remember_me'] = 'Beni hatırla';

$lng['less_than_a_minute'] = 'Bir dakika önce';
$lng['minute'] = 'dakika';
$lng['minutes'] = 'dakika';
$lng['hour'] = 'saat';
$lng['hours'] = 'saat';
$lng['yesterday'] = 'dün';
$lng['day'] = 'gün';
$lng['days'] = 'gün';
$lng['ago_postfix'] = ' önce';
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
