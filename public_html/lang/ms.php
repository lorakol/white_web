<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Laman Utama';
$lng['navbar']['login'] = 'Log Masuk';
$lng['navbar']['logout'] = 'Log Keluar';
$lng['navbar']['recent_ads'] = 'Iklan Terbaru';
$lng['navbar']['register'] = 'Daftar';
$lng['navbar']['submit_ad'] = 'Letakkan Iklan';
$lng['navbar']['editad'] = 'Edit Iklan';
$lng['navbar']['my_account'] = 'Akaun Saya';
$lng['navbar']['administrator_panel'] = 'Panel Administrator';
$lng['navbar']['contact'] = 'Contact';
$lng['navbar']['password_recovery'] = 'Pulihkan Kata Laluan';
$lng['navbar']['renew_listing'] = 'Perbaharui Peneyenaraian Iklan';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Hantar';
$lng['general']['search'] = 'Cari';
$lng['general']['contact'] = 'Contact';
$lng['general']['activeads'] = 'iklan aktif';
$lng['general']['activead'] = 'iklan aktif';
$lng['general']['subcats'] = 'subkategori';
$lng['general']['subcat'] = 'subkategori';
$lng['general']['view_ads'] = 'Lihat Iklan';
$lng['general']['back'] = '&laquo; Kembali';
$lng['general']['goto'] = 'Lihat';
$lng['general']['page'] = 'Laman';
$lng['general']['of'] = 'daripada';
$lng['general']['other'] = 'Lain-lain';
$lng['general']['NA'] = 'Tiada';
$lng['general']['add'] = 'Tambah';
$lng['general']['delete_all'] = 'Padam Semua Yang Dipilih';
$lng['general']['action'] = 'Tindakan';
$lng['general']['edit'] = 'Edit';
$lng['general']['delete'] = 'Padam';
$lng['general']['total'] = 'Jumlah';
$lng['general']['min'] = 'Minimum';
$lng['general']['max'] = 'Maksimum';
$lng['general']['free'] = 'PERCUMA';
$lng['general']['not_authorized'] = 'Anda tidak dibenarkan untuk membuka laman ini!';
$lng['general']['access_restricted'] = 'Akses anda ke laman ini adalah terhad!';
$lng['general']['featured_ads'] = 'Iklan Featured';
$lng['general']['latest_ads'] = 'Iklan Terbaru';
$lng['general']['quick_search'] = 'Carian Pantas';
$lng['general']['go'] = 'Cari';
$lng['general']['unlimited'] = 'Tiada Had';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Fail dengan nama yang sama telah digunakan dan tidak boleh overwritten!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Anda tidak dibenarkan untuk muat naik fail yang melebihi  ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Dimensi imej terlalu besar! Sila muat naik fail dengan kelebaran maksimum ::MAX_FILE_WIDTH::px dan ketinggian maksimum ::MAX_FILE_HEIGHT::px!';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Fail ini tidak boleh dimuat naik!';
$lng['images']['errors']['no_file'] = 'Sila pilih fail untuk dimuat naik!';
$lng['images']['errors']['no_folder'] = 'Folder muat naik tidak wujud!';
$lng['images']['errors']['folder_not_writeable'] = 'Folder muat naik bukan jenis writable!';
$lng['images']['errors']['file_type_not_accepted'] = 'Fail yang dimuat naik bukan fail imej atau tidak dikenali!';
$lng['images']['errors']['error'] = 'Terdapat error ketika proses muat naik fail. Error yang dikesan adalah: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Folder untuk muat naik thumbnail tidak wujud!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Folder untuk muat naik thumbnail bukan jenis writable!';
$lng['images']['errors']['no_jpg_support'] = 'Tiada JPG support!';
$lng['images']['errors']['no_png_support'] = 'Tiada PNG support!';
$lng['images']['errors']['no_gif_support'] = 'Tiada GIF support!';
$lng['images']['errors']['jpg_create_error'] = 'Error ketika membina imej JPG daripada sumber!';
$lng['images']['errors']['png_create_error'] = 'Error ketika membina imej PNG daripada sumber!';
$lng['images']['errors']['gif_create_error'] = 'Error ketika membina imej GIF daripada sumber!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Log Masuk';
$lng['login']['logout'] = 'Log Keluar';
$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Kata Laluan';
$lng['login']['forgot_pass'] = 'Terlupa kata laluan?';
$lng['login']['click_here'] = 'Klik Sini';

$lng['login']['errors']['password_missing'] = 'Sila masukkan kata laluan anda!';
$lng['login']['errors']['username_missing'] = 'Sila masukkan username anda!';
$lng['login']['errors']['username_invalid'] = 'Username tidak sah!';
$lng['login']['errors']['invalid_username_pass'] = 'Username atau kata laluan tidak sah!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Log Keluar';
$lng['logout']['loggedout'] = 'Anda telah log keluar!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Daftar';
$lng['users']['repeat_password'] = 'Ulang Kata Laluan';
$lng['users']['image_verification_info'] = 'Sila masukkan teks yang dipaparkan dalam kotak di bawah.<br /> Aksara yang berkemungkinan adalah huruf kecil dari a hingga h dan angka dari 1 hingga 9.';
$lng['users']['already_logged_in'] = 'Anda telah log masuk!';
$lng['users']['select'] = 'Pilih';

$lng['users']['info']['activate_account'] = 'Maklumat pengaktifan telah dihantar ke akaun email anda. Sila ikuti langkah-langkah yang diberikan untuk aktifkan akaun anda.';
$lng['users']['info']['welcome_user'] = 'Akaun anda telah dibina. Sila <a href="login.php">Log Masuk</a> ke akaun anda!';
$lng['users']['info']['awaiting_admin_verification'] = 'Akaun anda belum diluluskan dan sedang menunggu verifikasi daripada administrator. Anda akan dimaklumkan melalui email apabila akaun anda telah diaktifkan.';
$lng['users']['info']['account_info_updated'] = 'Maklumat akaun anda telah dikemaskini!';
$lng['users']['info']['password_changed'] = 'Kata laluan anda telah ditukar!';
$lng['users']['info']['account_activated'] = 'Akaun anda telah diaktifkan! Sila <a href="login.php">log masuk</a> ke akaun anda.';

$lng['users']['errors']['username_missing'] = 'Sila masukkan username!';
$lng['users']['errors']['invalid_username'] = 'Username Tidak Sah!';
$lng['users']['errors']['username_exists'] = 'Username telah digunakan! Sila log masuk jika anda sudah mempunyai akaun!';
$lng['users']['errors']['email_missing'] = 'Sila masukkan alamat email!';
$lng['users']['errors']['invalid_email'] = 'Alamat email tidak sah!';
$lng['users']['errors']['passwords_dont_match'] = 'Kata laluan tidak sepadan!';
$lng['users']['errors']['email_exists'] = 'Alamat email ini telah digunakan! Sila log masuk jika anda sudah mempunyai akaun!';
$lng['users']['errors']['password_missing'] = 'Sila masukkan kata laluan!';
$lng['users']['errors']['invalid_validation_string'] = 'String pengesahan tidak sah!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Akaun atau activation key tidak sah! Sila hubungi administrator!';
$lng['users']['errors']['account_already_active'] = 'Akaun anda telah diaktifkan!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Penyenaraian Iklan';
$lng['listings']['category'] = 'Kategori';
$lng['listings']['package'] = 'Pakej';
$lng['listings']['price'] = 'Harga';
$lng['listings']['ad_description'] = 'Deskripsi Iklan';
$lng['listings']['title'] = 'Tajuk';
$lng['listings']['description'] = 'Deskripsi';
$lng['listings']['image'] = 'Imej';
$lng['listings']['words_left'] = 'Baki Perkataan';
$lng['listings']['enter_photos'] = 'Masukkan Foto';
$lng['listings']['ad_information'] = 'Maklumat Iklan';
$lng['listings']['free'] = 'PERCUMA';
$lng['listings']['details'] = 'Penerangan';
$lng['listings']['stock_no'] = 'Bilangan Stok';
$lng['listings']['location'] = 'Lokasi';
$lng['listings']['contact_info'] = 'Contact Info';
$lng['listings']['email_seller'] = 'Email Penjual';
$lng['listings']['no_recent_ads'] = 'Tiada Iklan Terbaru';
$lng['listings']['no_ads'] = 'Tiada iklan disenaraikan dalam kategori ini';
$lng['listings']['added_on'] = 'Diiklankan pada';
$lng['listings']['send_mail'] = 'Hantar Email Kepada Pengguna';
$lng['listings']['details'] = 'Penerangan';
$lng['listings']['user'] = 'Pengguna';
$lng['listings']['price'] = 'Harga';
$lng['listings']['confirm_delete'] = 'Adakah anda pasti untuk padam penyenaraian ini?';
$lng['listings']['confirm_delete_all'] = 'Adakah anda pasti untuk padam penyenaraian yang dipilih?';
$lng['listings']['all'] = 'Semua Penyenaraian Iklan';
$lng['listings']['active_listings'] = 'Penyenaraian Aktif';
$lng['listings']['pending_listings'] = 'Penyenaraian Yang Belum Diluluskan';
$lng['listings']['featured_listings'] = 'Penyenaraian Featured';
$lng['listings']['expired_listings'] = 'Penyenaraian Luput';
$lng['listings']['active'] = 'Aktif';
$lng['listings']['inactive'] = 'Tidak Aktif';
$lng['listings']['pending'] = 'Belum Diluluskan';
$lng['listings']['featured'] = 'Featured';
$lng['listings']['expired'] = 'Luput';
$lng['listings']['order_by_date'] = 'Susun Mengikut Tarikh';
$lng['listings']['order_by_category'] = 'Susun Mengikut Kategori';
$lng['listings']['order_by_make'] = 'Susun Mengikut Jenama';
$lng['listings']['order_by_price'] = 'Susun Mengikut Harga';
$lng['listings']['order_by_views'] = 'Susun Mengikut Hits';
$lng['listings']['order_asc'] = 'Menaik';
$lng['listings']['order_desc'] = 'Menurun';
$lng['listings']['id'] = 'Nombor ID';
$lng['listings']['views'] = 'Hits';
$lng['listings']['date'] = 'Tarikh';
$lng['listings']['no_listings'] = 'Tiada Penyenaraian Iklan';
$lng['listings']['NA'] = 'Tiada';
$lng['listings']['no_such_id'] = 'Penyenaraian iklan ini tidak wujud!';
$lng['listings']['mark_sold'] = 'Tanda Sebagai Sold';
$lng['listings']['mark_unsold'] = 'Tidak Tanda Sebagai Sold';
$lng['listings']['sold'] = 'Telah Dijual';
$lng['listings']['feature'] = 'Featured';
$lng['listings']['expired_on'] = 'Luput Pada';
$lng['listings']['renew'] = 'Perbaharui';
$lng['listings']['print_page'] = 'Print';
$lng['listings']['recommend_this'] = 'Hebahkan';
$lng['listings']['more_listings'] = 'Lagi Penyenaraian iklan dari pengguna ini';
$lng['listings']['all_listings_for'] = 'Semua penyenaraian iklan untuk';
$lng['listings']['free_category'] = 'Kategori PERCUMA';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Adakah anda pasti untuk padam gambar iklan?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Telah melebihi kuota bilngan perkataan! Anda boleh memasukkan maksimum ::MAX:: patah perkataan'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Penyenaraian iklan anda mengandungi perkataan yang dilarang! Sila lihat semula kandungan anda!';
$lng['listings']['errors']['title_missing']='Sila masukkan tajuk untuk penyenaraian iklan anda!';
$lng['listings']['errors']['category_missing']='Sila pilih kategori!';
$lng['listings']['errors']['invalid_category']='Kategori tidak sah!';
$lng['listings']['errors']['package_missing']='Sila pilih pakej!';
$lng['listings']['errors']['invalid_package']='Pakej tidak sah!';
$lng['listings']['errors']['content_missing']='Sila masukkan kandungan untuk penyenaraian iklan anda!';
$lng['listings']['errors']['invalid_price']='Harga tidak sah!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Harga Rendah';
$lng['quick_search']['price_high'] = 'Harga Tinggi';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Letakkan Iklan Baru';
$lng['useraccount']['browse_your_listings'] = 'Penyenaraian Iklan Saya';
$lng['useraccount']['modify_account_info'] = 'Maklumat Akaun';
$lng['useraccount']['order_history'] = 'Rekod Tempahan';
$lng['useraccount']['total_listings'] = 'Jumlah Penyenaraian Iklan';
$lng['useraccount']['total_views'] = 'Jumlah Hits';
$lng['useraccount']['active_listings'] = 'Penyenaraian Aktif';
$lng['useraccount']['pending_listings'] = 'Penyenaraian Belum Diluluskan';
$lng['useraccount']['last_login'] = 'Log Masuk Terakhir';
$lng['useraccount']['last_login_ip'] = 'IP Log Masuk Terakhir';
$lng['useraccount']['expired_listings'] = 'Penyenaraian Luput';
$lng['useraccount']['statistics'] = 'Statistik';
$lng['useraccount']['welcome'] = 'Selamat Datang';
$lng['useraccount']['contact_name'] = 'Nama';
$lng['useraccount']['email'] = 'Email';
$lng['useraccount']['password'] = 'Kata Laluan';
$lng['useraccount']['repeat_password'] = 'Ulang Kata Laluan';
$lng['useraccount']['change_password'] = 'Tukar Kata Laluan';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'hingga';
$lng['advanced_search']['price_min'] = 'Harga Minimum';
$lng['advanced_search']['price_max'] = 'Harga Maksimum';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Susun Mengikut';
$lng['advanced_search']['sort_by_price'] = 'Susun Mengikut Harga';
$lng['advanced_search']['sort_by_date'] = 'Susun Mengikut Tarikh';
$lng['advanced_search']['sort_by_make'] = 'Susun Mengikut Jenama';
$lng['advanced_search']['sort_descendant'] = 'Susun Menurun';
$lng['advanced_search']['sort_ascendant'] = 'Susun Menaik';
$lng['advanced_search']['only_ads_with_pic'] = 'Iklan Bergambar Sahaja';
$lng['advanced_search']['no_results'] = 'Tiada penyenaraian iklan yang memenuhi carian anda!';
$lng['advanced_search']['multiple_ads_matching'] = 'Terdapat ::NO_ADS:: penyenaraian iklan yang memenuhi carian anda!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Terdapat satu penyenaraian iklan yang memenuhi carian anda!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nama';
$lng['contact']['subject'] = 'Perkara';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Laman Web';
$lng['contact']['comments'] = 'Komen';
$lng['contact']['message_sent'] = 'Mesej anda telah dihantar!';
$lng['contact']['sending_message_failed'] = 'Penghantaran mesej gagal!';
$lng['contact']['mailto'] = 'Email Kepada';

$lng['contact']['error']['name_missing'] = 'Sila masukkan nama anda!';
$lng['contact']['error']['subject_missing'] = 'Sila masukkan perkara!';
$lng['contact']['error']['email_missing'] = 'Sila masukkan email anda!';
$lng['contact']['error']['invalid_email'] = 'Alamat email tidak sah!';
$lng['contact']['error']['comments_missing'] = 'Sila masukkan komen anda!';
$lng['contact']['error']['invalid_validation_number'] = 'Nombor pengesahan tidak sah!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Alamat email';
$lng['password_recovery']['new_password'] = 'Kata Laluan Baru';
$lng['password_recovery']['repeat_new_password'] = 'Ulang Kata Laluan Baru';
$lng['password_recovery']['invalid_key'] = 'Invalid Key';

$lng['password_recovery']['email_missing'] = 'Sila masukkan alamat email anda!';
$lng['password_recovery']['invalid_email'] = 'Alamat email tidak sah';
$lng['password_recovery']['email_inexistent'] = 'Tiada pengguna yang berdaftar dengan alamat email ini';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Jumlah';
$lng['packages']['words'] = 'Perkataan';
$lng['packages']['days'] = 'Hari';
$lng['packages']['pictures'] = 'Gambar';
$lng['packages']['picture'] = 'Gambar';
$lng['packages']['available'] = 'Boleh Diperolehi';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Pemproses';
$lng['order_history']['amount'] = 'Jumlah';
$lng['order_history']['completed'] = 'Selesai';
$lng['order_history']['not_completed'] = 'Tidak Selesai';
$lng['order_history']['ad_no'] = 'ID Penyenaraian Iklan';
$lng['order_history']['date'] = 'Tarikh';
$lng['order_history']['no_actions'] = 'Tiada Rekod Tempahan';
$lng['order_history']['order_by_date'] = 'Susun Mengikut Tarikh';
$lng['order_history']['order_by_amount'] = 'Susun Mengikut Jumlah';
$lng['order_history']['order_by_processor'] = 'Susun Mengikut Pemproses';
$lng['order_history']['description'] = 'Deskripsi';
$lng['order_history']['newad'] = 'Iklan Baru'; 
$lng['order_history']['renew'] = 'Perbaharui'; 
$lng['order_history']['featured'] = 'Iklan Featured'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Susun Mengikut Tarikh';
$lng['order']['price'] = 'Susun Mengikut Harga';
$lng['order']['title'] = 'Susun Mengikut Tajuk';
$lng['order']['desc'] = 'Menurun';
$lng['order']['asc'] = 'Menaik';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Hebahkan iklan ini';
$lng['recommend']['your_name'] = 'Nama Anda';
$lng['recommend']['your_email'] = 'Email Anda';
$lng['recommend']['friend_name'] = 'Nama Kawan';
$lng['recommend']['friend_email'] = 'Email Kawan';
$lng['recommend']['message'] = 'Mesej untuk kawan anda';


$lng['recommend']['error']['your_name_missing'] = 'Sila masukkan nama anda!';
$lng['recommend']['error']['your_email_missing'] = 'Sila masukkan email anda!';
$lng['recommend']['error']['friend_name_missing'] = 'Sila masukkan nama kawan anda!';
$lng['recommend']['error']['friend_email_missing'] = 'Sila masukkan email kawan anda!';
$lng['recommend']['error']['invalid_email'] = 'Alamat email tidak sah';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Penyenaraian Iklan';
$lng['stats']['general'] = 'General';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Langgan';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Kesukaan';
$lng['general']['as'] = 'sebagai';
$lng['general']['view'] = 'Lihat';
$lng['general']['none'] = 'Tiada';
$lng['general']['yes'] = 'ya';
$lng['general']['no'] = 'tidak';
$lng['general']['next'] = 'Seterusnya &raquo;';
$lng['general']['finish'] = 'Tamat';
$lng['general']['download'] = 'Muat Turun';
$lng['general']['remove'] = 'Keluarkan';
$lng['general']['previous_page'] = '&laquo; Sebelumnya';
$lng['general']['next_page'] = 'Seterusnya &raquo;';
$lng['general']['items'] = 'item';
$lng['general']['active'] = 'Aktif';
$lng['general']['inactive'] = 'Tidak Aktif';
$lng['general']['expires'] = 'Luput pada';
$lng['general']['available'] = 'Boleh Diperolehi';
$lng['general']['cancel'] = 'Batal';
$lng['general']['never'] = 'Tidak';
$lng['general']['asc'] = 'Menaik';
$lng['general']['desc'] = 'Menurun';
$lng['general']['pending'] = 'Belum Diluluskan';
$lng['general']['upload'] = 'Muat Naik';
$lng['general']['processing'] = 'Sedang diproses, sila tunggu ... ';
$lng['general']['help'] = 'Bantuan';
$lng['general']['hide'] = 'Jangan Paparkan';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Ini adalah versi demo yang terhad. Anda tidak dibenarkan untuk menukar setting tertentu!';
$lng['general']['check_all'] = 'Tandakan Semua';
$lng['general']['uncheck_all'] = 'Tidak Tandakan Semua';
$lng['general']['all'] = 'Semua';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Laman Peniaga';
$lng['users']['store_banner'] = 'Banner Laman Peniaga';
$lng['users']['waiting_mail_activation'] = 'Sedang menunggu pengaktifan email';
$lng['users']['waiting_admin_activation'] = 'Sedang menunggu kebenaran admin';
$lng['users']['no_such_id'] = 'Pengguna ini tidak wujud.';

$lng['users']['info']['store_banner'] = 'Imej yang akan digunakan sebagai imej teratas pada laman peniaga anda.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Laporkan Iklan Sebagai Tidak Mengikut Peraturan';
$lng['listings']['report_reason'] = 'Sebab Laporan';
$lng['listings']['meta_info'] = 'Meta Information';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Description';
$lng['listings']['not_approved'] = 'Tidak Diluluskan';
$lng['listings']['approve'] = 'Lulus';
$lng['listings']['choose_payment_method'] = 'Pilih kaedah bayaran';

$lng['listings']['choose_category'] = 'Pilih Kategori';
$lng['listings']['choose_plan'] = 'Pilih Pakej';
$lng['listings']['enter_ad_details'] = 'Masukkan Penerangan Iklan';
$lng['listings']['ad_details'] = 'Penerangan Iklan';
$lng['listings']['add_photos'] = 'Tambah Foto';
$lng['listings']['ad_photos'] = 'Foto Iklan';
$lng['listings']['edit_photos'] = 'Edit Foto';
$lng['listings']['extra_options'] = 'Option Tambahan';
$lng['listings']['review'] = 'Review Iklan';
$lng['listings']['finish'] = 'Tamat';
$lng['listings']['next_step'] = 'Langkah Seterusnya &raquo;';
$lng['listings']['included'] = 'Termasuk';
$lng['listings']['finalize'] = 'Finalize';
$lng['listings']['zip'] = 'Poskod';
$lng['listings']['add_to_favourites'] = 'Jadikan sebagai kesukaan';
$lng['listings']['confirm_add_to_fav'] = 'Amaran! Anda belum log masuk! Fungsi kesukaan adalah sementara sahaja!';
$lng['listings']['add_to_fav_done'] = 'Penyenaraian iklan telah ditambah ke senarai kesukaan anda!';
$lng['listings']['confirm_delete_favourite'] = 'Adakah anda pasti untuk padam iklan kesukaan anda';
$lng['listings']['no_favourites'] = 'Tiada Penyenarain Iklan Kesukaan';
$lng['listings']['extra_options'] = 'Option Tambahan';
$lng['listings']['highlited'] = 'Highlighted';
$lng['listings']['priority'] = 'Diutamakan';
$lng['listings']['video'] = 'Iklan Bervideo';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video Belum Diluluskan';
$lng['listings']['video_code'] = 'Kod Video';
$lng['listings']['total'] = 'Jumlah';
$lng['listings']['approve_ad'] = 'Luluskan Iklan';
$lng['listings']['finalize_later'] = 'Finalize Kemudian';
$lng['listings']['click_to_upload'] = 'Klik untuk muat naik';
$lng['listings']['files_uploaded'] = ' Jumlah foto yang dimuat naik ';
$lng['listings']['allowed'] = ' foto dibenarkan!';
$lng['listings']['limit_reached'] = ' Had maksimum foto telah dicapai!';
$lng['listings']['edit_options'] = 'Edit Option Iklan';
$lng['listings']['view_store'] = 'Lihat Laman Peniaga';
$lng['listings']['edit_ad_options'] = 'Edit Option Iklan';
$lng['listings']['no_extra_options_selected'] = 'Tiada option tambahan dipilih!';
$lng['listings']['highlited_listings'] = 'Penyenaraian Iklan Highlighted';
$lng['listings']['for_listing'] = 'untuk penyenaraian iklan yang ke-';
$lng['listings']['expires_on'] = 'Luput';
$lng['listings']['expired_on'] = 'Telah Luput';
$lng['listings']['pending_ad'] = 'Penyenaraian Iklan Belum Diluluskan';
$lng['listings']['pending_highlited'] = 'Iklan Highlighted Belum Diluluskan';
$lng['listings']['pending_featured'] = 'Iklan Featured Belum Diluluskan';
$lng['listings']['pending_priority'] = 'Keutamaan Belum Diluluskan';
$lng['listings']['enter_coupon'] = 'Masukkan kod diskaun';
$lng['listings']['discount'] = 'Diskaun';
$lng['listings']['select_plan'] = 'Pilih Pakej';
$lng['listings']['pending_subscription'] = 'Langganan Belum Diluluskan';
$lng['listings']['remove_favourite'] = 'Keluarkan Iklan Kesukaan';

$lng['listings']['order_up'] = 'Naikkan tempahan';
$lng['listings']['order_down'] = 'Turunkan tempahan';

$lng['listings']['errors']['invalid_youtube_video'] = 'Video Youtube tidak sah!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Langgan';
$lng['useraccount']['no_package'] = 'Tiada Pakej Iklan';
$lng['useraccount']['packages'] = 'Pakej';
$lng['useraccount']['date_start'] = 'Tarikh Mula';
$lng['useraccount']['date_end'] = 'Tarikh Tamat';
$lng['useraccount']['remaining_ads'] = 'Baki Iklan';
$lng['useraccount']['account_type'] = 'Jenis akaun';
$lng['useraccount']['unfinished_listings'] = 'Penyenaraian Iklan Tidak Lengkap';
$lng['useraccount']['confirm_delete_subscription'] = 'Adakah anda pasti untuk keluarkan langganan ini?';
$lng['useraccount']['buy_store'] = 'Beli Laman Peniaga';
$lng['useraccount']['bulk_uploads'] = 'Muat naik pukal';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Langganan';
$lng['packages']['ads'] = 'Iklan';
$lng['packages']['name'] = 'Nama';
$lng['packages']['details'] = 'Penerangan';
$lng['packages']['no_ads'] = 'Bilangan Iklan';
$lng['packages']['subscription_time'] = 'Tempoh Langganan';
$lng['packages']['no_pictures'] = 'Gambar Dibenarkan';
$lng['packages']['no_words'] = 'Bilangan Perkataan';
$lng['packages']['ads_availability'] = 'Availabiliti Iklan';
$lng['packages']['featured'] = 'Featured';
$lng['packages']['highlited'] = 'Highlighted';
$lng['packages']['priority'] = 'Diutamakan';
$lng['packages']['video'] = 'Iklan Bervideo';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Langganan';
$lng['order_history']['post_listing'] = 'Letakkan Penyenaraian Iklan';
$lng['order_history']['renew_listing'] = 'Perbaharui Penyenaraian Iklan';
$lng['order_history']['feature_listing'] = 'Penyenaraian Featured';
$lng['order_history']['subscribe_to_package'] = 'Langgani Pakej Ini';
$lng['order_history']['complete_payment'] = 'Lengkapkan Pembayaran';
$lng['order_history']['complete_payment_for'] = 'Lengkapkan Pembayaran Untuk';
$lng['order_history']['details'] = 'Penerangan';
$lng['order_history']['subscription_no'] = 'Nombor Langganan';
$lng['order_history']['highlited'] = 'Iklan Highlighted';
$lng['order_history']['priority'] = 'Diutamakan';
$lng['order_history']['video'] = 'Iklan Bervideo';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Sila pilih pakej!';
$lng['buy_package']['error']['choose_processor'] = 'Sila pilih kaedah pembayaran!';
$lng['buy_package']['error']['invalid_processor'] = 'Pemproses pembayaran tidak sah!';
$lng['buy_package']['error']['invalid_package'] = 'Pakej tidak sah!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transaksi Paypal tidak sah!';
$lng['2co']['invalid_transaction'] = 'Transaksi 2Checkout tidak sah!';
$lng['moneybookers']['invalid_transaction'] = 'Transaksi Moneybookers tidak sah!';
$lng['authorize']['invalid_transaction'] = 'Transaksi Authorize.net tidak sah!';
$lng['manual']['invalid_transaction'] = 'Transaksi tidak sah!';

$lng['paypal']['transaction_canceled'] = 'Transaksi Paypal dibatalkan!';
$lng['2co']['transaction_canceled'] = 'Transaksi 2Checkout dibatalkan!';
$lng['mb']['transaction_canceled'] = 'Transaksi Moneybookers dibatalkan!';
$lng['authorize']['transaction_canceled'] = 'Transaksi Authorize.net dibatalkan!';
$lng['manual']['transaction_canceled'] = 'Transaksi dibatalkan!';
$lng['epay']['transaction_canceled'] = 'Transaksi ePay dibatalkan!';

$lng['payments']['transaction_already_processed'] = 'Transaksi telah diproses!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Luluskan Langganan';
$lng['subscribe']['payment_method'] = 'Kaedah Pembayaran';
$lng['subscribe']['renew_subscription'] = 'Perbaharui Langganan';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Salin email: ';
$lng['bcc_mails']['from'] = 'Daripada: ';
$lng['bcc_mails']['to'] = 'Kepada: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Status muat naik pukal: ';
$lng['ie']['successfully'] = 'penyenaraian iklan telah berjaya ditambah';
$lng['ie']['failed'] = 'gagal';
$lng['ie']['uploaded_listings'] = 'Senarai iklan telah dimuat naik:';
$lng['ie']['errors']['upload_import_file'] = 'Sila muat naik fail pada fungsi <b>import daripada</b>!';
$lng['ie']['errors']['incorrect_file_type'] = 'Jenis fail tidak tepat! Fail mesti daripada jenis: ';
$lng['ie']['errors']['could_not_open_file'] = 'Fail tidak dapat dibuka!';
$lng['ie']['errors']['choose_categ'] = 'Sila pilih kategori!';
$lng['ie']['errors']['could_not_save_file'] = 'Fail tidak dapat dimuat naik: ';
$lng['ie']['errors']['required_field_missing'] = 'Field yang diperlukan tidak dapat dikesan: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Pengiraan element data tidak tepat untuk baris yang ke-';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Pilih Peniaga';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Cari kawasan';
$lng['areasearch']['all_locations'] = 'Semua lokasi';
$lng['areasearch']['exact_location'] = 'Lokasi Yang Tepat';
$lng['areasearch']['around'] = 'sekitar';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ya';
$lng['general']['No'] = 'Tidak';
$lng['general']['or'] = 'atau';
$lng['general']['in'] = 'dalam';
$lng['general']['by'] = 'daripada';
$lng['general']['close_window'] = 'Tutup Window';
$lng['general']['more_options'] = 'lagi option &raquo;';
$lng['general']['less_options'] = '&laquo; kurangkan option';
$lng['general']['send'] = 'Hantar';
$lng['general']['save'] = 'Simpan';
$lng['general']['for'] = 'untuk';
$lng['general']['to'] = 'kepada';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Tandakan Sebagai Rented';
$lng['listings']['mark_unrented'] = 'Tidak Tandakan Sebagai Rented';
$lng['listings']['rented'] = 'Rented';
$lng['listings']['your_info'] = 'Maklumat anda';
//******
$lng['listings']['email'] = 'Alamat Email Anda';
$lng['listings']['name'] = 'Nama Anda';

$lng['listings']['listing_deleted'] = 'Penyenaraian iklan anda telah dipadam!';
$lng['listings']['post_without_login'] = 'Letakkan iklan tanpa log masuk';
$lng['listings']['waiting_activation'] = 'Sedang menunggu untuk diaktifkan';
$lng['listings']['waiting_admin_approval'] = 'Sedang menunggu kelulusan administrator';
$lng['listings']['dont_need_account'] = 'Tidak perlukan akaun? Letakkan iklan tanpa perlu log masuk!';
$lng['listings']['post_your_ad'] = 'Letakkan iklan anda!';
$lng['listings']['posted'] = 'Iklan telah diletakkan';
$lng['listings']['select_subscription'] = 'Pilih Langganan';
$lng['listings']['choose_subscription'] = 'Pilih Langganan';
$lng['listings']['inactive_listings'] = 'Penyenaraian Iklan Tidak Aktif';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Perincikan Hasil Carian';
$lng['search']['refine_by_keyword'] = 'Perincikan mengikut keyword';
$lng['search']['showing'] = 'Memaparkan';
$lng['search']['more'] = 'Lagi ...';
$lng['search']['less'] = 'Kurangkan ...';
$lng['search']['search_for'] = 'Hasil carian untuk';
$lng['search']['save_your_search'] = 'Simpan hasil carian anda';
$lng['search']['save'] = 'Simpan';
$lng['search']['search_saved'] = 'Hasil carian anda telah disimpan!';
$lng['search']['must_login_to_save_search'] = 'Anda perlu log masuk ke akaun untuk menyimpan hasil carian!';
$lng['search']['view_search'] = 'Lihat hasil carian';
$lng['search']['all_categories'] = 'Semua Kategori';
$lng['search']['more_than'] = 'lebih daripada';
$lng['search']['less_than'] = 'kurang daripada';

$lng['search']['error']['cannot_save_empty_search'] = 'Hasil carian yang tidak mengandungi apa yang dicari tidak boleh disimpan!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Hasil Carian Telah Disimpan';
$lng['useraccount']['view_saved_searches'] = 'Lihat Hasil Carian Yang Telah Disimpan';
$lng['useraccount']['no_saved_searches'] = 'Tiada Hasil Carian Yang Telah Disimpan';
$lng['useraccount']['recurring'] = 'Berulang';
$lng['useraccount']['date_renew'] = 'Tarikh perbaharui';
$lng['useraccount']['logged_in_as'] = 'Anda telah log masuk sebagai ';
$lng['useraccount']['subscriptions'] = 'Langganan';

$lng['users']['activate_account'] = 'Aktifkan Akaun';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Tambah Langganan';
$lng['subscriptions']['package'] = 'Langganan';
$lng['subscriptions']['remaining_ads'] = 'Baki Iklan';
$lng['subscriptions']['recurring'] = 'Berulang';
$lng['subscriptions']['date_start'] = 'Tarikh Mula';
$lng['subscriptions']['date_end'] = 'Tarikh Tamat';
$lng['subscriptions']['date_renew'] = 'Tarikh Perbaharui';
$lng['subscriptions']['confirm_delete'] = 'Adakah anda pasti untuk padam langganan ini?';
$lng['subscriptions']['no_subscriptions'] = 'Tiada Langganan';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Anda masih tidak mempunyai akaun?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Membenarkan pembayaran berulang untuk langganan ini';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Field berikut tidak dapat dikesan: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Beli Laman Peniaga';


$lng['images']['errors']['max_photos'] = 'Bilangan maksimum foto yang dimuat naik telah dicapai!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Email alert';
$lng['alerts']['email_alerts'] = 'Email alert';
$lng['alerts']['no_alerts'] = 'Tiada email alert';
$lng['alerts']['view_email_alerts'] = 'Lihat email alert anda';
$lng['alerts']['send_email_alerts'] = 'Hantar email alert';
$lng['alerts']['immediately'] = 'Segera';
$lng['alerts']['daily'] = 'Harian';
$lng['alerts']['weekly'] = 'Mingguan';
$lng['alerts']['your_email'] = 'alamat email anda';
$lng['alerts']['create_alert'] = 'Bina Email Alert';
$lng['alerts']['email_alert_info'] = 'Terima email alert apabila penyenaraian baru untuk carian ini diperolehi.';
$lng['alerts']['alert_added'] = 'Email alert anda telah disediakan!';
$lng['alerts']['alert_added_activate'] = 'Anda akan menerima email berkenaan dengan <b>::EMAIL::</b> sebentar lagi. Sila klik pada link yang terdapat pada email itu untuk aktifkan email alert anda!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Cari dalam';
$lng['alerts']['keyword'] = 'keyword';
$lng['alerts']['frequency'] = 'Kekerapan email alert';
$lng['alerts']['alert_activated'] = 'Email alert anda telah diaktifkan! Anda akan menerima email alert mulai sekarang.';
$lng['alerts']['alert_unsubscribed'] = 'Email alert anda telah dipadam!';
$lng['alerts']['started_on'] = 'Mula pada';
$lng['alerts']['no_terms_searched'] = 'Tiada term ditetapkan untuk carian ini!';
$lng['alerts']['no_listings'] = 'Tiada penyenaraian iklan untuk email alert ini!';

$lng['alerts']['error']['email_required'] = 'Sila masukkan alamat email untuk email alert anda!';
$lng['alerts']['error']['invalid_email'] = 'Alamat email untuk menerima email alert tidak sah!';
$lng['alerts']['error']['invalid_frequency'] = 'Kekerapan email alert tidak sah!';
$lng['alerts']['error']['login_required'] = 'Sila <a href="::LINK::">log masuk</a> untuk daftar email alert!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Sila pilih sekurang-kurangnya satu search key selain kategori!';
$lng['alerts']['error']['invalid_confirmation'] = 'Pengesahan email alert tidak sah!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Permohonan untuk membatalkan langganan tidak sah!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kalkulator Pinjaman';
$lng_loancalc['sale_price'] = 'Harga jualan';
$lng_loancalc['down_payment'] = 'Bayaran pendahuluan';
$lng_loancalc['trade_in_value'] = 'Nilai trade in';
$lng_loancalc['loan_amount'] = 'Jumlah pinjaman';
$lng_loancalc['sales_tax'] = 'Cukai jualan';
$lng_loancalc['interest_rate'] = 'Interest rate';
$lng_loancalc['loan_term'] = 'Tempoh pinjaman';
$lng_loancalc['months'] = 'bulan';
$lng_loancalc['years'] = 'tahun';
$lng_loancalc['or'] = 'atau';
$lng_loancalc['monthly_payment'] = 'Bayaran bulanan';
$lng_loancalc['calculate'] = 'Kira';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Komen';
$lng_comments['make_a_comment'] = 'Letakkan komen';
$lng_comments['login_to_post'] = 'Sila <a href="::LOGIN_LINK::">log masuk</a> untuk membolehkan anda meletak komen.';

$lng_comments['name'] = 'Nama';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Laman Web';
$lng_comments['submit_comment'] = 'Letakkan Komen';

$lng_comments['error']['name_missing'] = 'Sila masukkan nama anda!';
$lng_comments['error']['content_missing'] = 'Sila letakkan komen anda!';
$lng_comments['error']['website_missing'] = 'Sila masukkan laman web!';
$lng_comments['error']['email_missing'] = 'Sila masukkan email anda!';
$lng_comments['error']['listing_id_missing'] = 'Komen tidak sah!';

$lng_comments['error']['invalid_email'] = 'Alamat email tidak sah!';
$lng_comments['error']['invalid_website'] = 'Laman web tidak sah!';
$lng_comments['errors']['badwords'] = 'Komen anda mengandungi perkataan yang dilarang! Sila edit komen anda!';

$lng_comments['info']['comment_added'] = 'Komen anda telah dimasukkan! Klik <a id="newad">sini</a> jika anda ingin menambah satu lagi komen.';
$lng_comments['info']['comment_pending'] = 'Komen anda belum diluluskan dan sedang menunggu verifikasi administrator.';

// ----------------- end comments module --------------------


$lng['tb']['next'] = 'SETERUSNYA &raquo;';
$lng['tb']['prev'] = '&laquo; SEBELUMNYA';
$lng['tb']['close'] = 'TUTUP';
$lng['tb']['or_esc'] = 'atau butang ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mesej';
$lng['messages']['confirm_delete_all'] = 'Adakah anda pasti untuk padam mesej yang dipilih?';
$lng['messages']['listing'] = 'Penyenaraian iklan';
$lng['messages']['no_messages'] = 'Tiada mesej';
$lng['general']['reply'] = 'Balas mesej';
$lng['messages']['message'] = 'Mesej';
$lng['messages']['from'] = 'Daripada';
$lng['messages']['to'] = 'Kepada';
$lng['messages']['on'] = 'Pada';
$lng['messages']['view_thread'] = 'Lihat turutan mesej';
$lng['messages']['started_for_listing'] = 'Dimulakan untuk penyenaraian iklan';
$lng['messages']['view_complete_message'] = 'Lihat mesej yang lengkap di sini';
$lng['messages']['message_history'] = 'Rekod mesej';
$lng['messages']['yourself'] = 'Anda';
$lng['messages']['report_spam'] = 'Laporkan sebagai spam';
$lng['messages']['reported_as_spam'] = 'Telah dilaporkan sebagai spam';
$lng['messages']['confirm_report_spam'] = 'Adakah anda pasti untuk laporkan mesej ini sebagai spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'ID penyenaraian iklan tidak sah';
$lng['listings']['show_map'] = 'Paparkan Peta';
$lng['listings']['hide_map'] = 'Tidak Paparkan Peta';
$lng['listings']['see_full_listing'] = 'Lihat penyenaraian penuh';
$lng['listings']['list'] = 'Senarai';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'Penyenaraian iklan telah dikeluarkan daripada senarai iklan kesukaan!';
$lng['search']['high_no_results'] = 'Bilangan hasil carian anda terlalu tinggi. Hasil carian yang disenaraikan telah dihadkan kepada hasil carian yang paling relevan. Sila perincikan hasil carian untuk kurangkan bilangan hasil carian seterusnya mendapatkan hasil carian yang lebih relevan!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Alamat email ini tidak dibenarkan!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Anda tidak dibenarkan untuk menggunakan langganan ini lagi, penggunaan telah mencapai had maksimum!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Pilih lokasi';
$lng['location']['choose'] = 'Pilih';
$lng['location']['change'] = 'Tukar';
$lng['location']['all_locations'] = 'Semua lokasi';

// ----------------- end version 7.05 ----------------

// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategori';
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
