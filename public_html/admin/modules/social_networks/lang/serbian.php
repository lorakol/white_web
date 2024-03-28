<?php
$lng_sn['social_networks'] = 'Društvene Mreže';
$lng_sn['facebook_page_link']='Vaša <i>Facebook</i> Stranica';
$lng_sn['twitter_account']='Vaš <i>Twitter</i> Nalog';

$lng_sn['fb_like_button']='Facebook <i>Sviða mi se</i> dugme';
$lng_sn['tweet_button']='<i>Tweet</i> dugme';
$lng_sn['fb_recent_activity']='Facebook <i>Nedavna Aktivnost</i> dodatak';

$lng_sn['fb_ra_width']='Širina';
$lng_sn['fb_ra_height']='Visina';
$lng_sn['fb_ra_color']='Šeme Boja';
$lng_sn['fb_ra_show_recommendations']='Prikaži preporuke';
$lng_sn['info']['fb_ra_show_recommendations']='Ovaj dodatak je popunjen sa aktivnostima korisnikovih prijatelja. Ako nema dovoljno aktivnosti prijatelja da popune dodatak onda æe biti popunjen sa preporukama, ako ga omoguæite.';

$lng_sn['fb_lb_layout']='Stil Izgleda';
$lng_sn['fb_lb_show_faces']='Prikaži Lica';
$lng_sn['fb_lb_width']='Širina';
$lng_sn['fb_lb_action']='Forsiran prikaz';
$lng_sn['fb_lb_color']='Šeme Boja';
$lng_sn['fb_lb_locale'] = 'Jezik';

$lng_sn['info']['fb_lb_show_faces']='Prikaži profilne slike ispod dugmeta (samo standardan izgled)';

$lng_sn['tw_data_count']='Tip Dugmeta';
$lng_sn['tw_data_text']='Tweet tekst';
$lng_sn['info']['tw_data_text']='Tekst poslat kao tweet. Postavite limit na 140 karaktera. Tag ##Naslov## æe biti zamenjen naslovom oglasa.';

$lng_sn["tweet_ads"] = "Tweet-uj oglase kada se postave";
$lng_sn['error']['enable_tweet_ads'] = 'Da bi ste omoguæili Tweet-uj Oglase morate dostaviti sledeæe informacije: Consumer Key, Consumer Secret, Access token and Access token secret!';
$lng_sn["tw_consumer_key"] = "Consumer Key";
$lng_sn["tw_consumer_secret"] = "Consumer Secret";
$lng_sn["tw_access_token"] = "Access token";
$lng_sn["tw_access_token_secret"] = "Access token secret";

$lng_sn['gplus_button'] = 'Google +1';
$lng_sn['gplus_size'] = 'Velièina';
$lng_sn['gplus_language'] = 'Jezik';

$lng_sn['fb_like_box'] = 'Facebook Sviða mi se Box';
$lng_sn['fb_show_stream'] = 'Prikaži Stream';
$lng_sn['fb_show_header'] = 'Prikaži header';

$lng_sn['info']['fb_lbox_show_faces']='Prikaži profilne slike u dodatku';
$lng_sn['info']['fb_show_stream'] = 'Prikaži stream za javni profil.';
$lng_sn['info']['fb_show_header'] = 'Prikaži \'Pronaði nas na Facebook-u\' bar na vrhu. Prikazuje se samo kada je stream ili lice prisutno.';

$lng_sn['appid'] = 'Facebook app id';

$lng_sn['gplus_page_link']='Your <i>Google+</i> Page';

// ---------- version 8.4 ----------------
$lng_sn['comments'] = 'Facebook comments';
$lng_sn['comments_no_posts'] = 'Number of Posts';

// ---------- end version 8.4 ----------------


// ---------- version 8.5 ----------------

$lng_sn['enable_fb_post_ads'] = 'Enable Post Ads on Facebook';
$lng_sn['fb_secret'] = 'Facebook Secret';
$lng_sn['fb_access_token'] = 'Facebook Access Token';
$lng_sn['fb_page_access_token'] = 'Facebook Page Access Token';
$lng_sn['get_fb_access_token'] = 'Get Facebook Access Token!';
$lng_sn['get_fb_page_access_token'] = 'Get Facebook Page Access Token!';
$lng_sn['error']['enable_fb_post_ads'] = 'To enable Post ads on Facebook you need to provide the following information: Facebook app id and Facebook Secret and then click on "Get Facebook access token" button!';
//$lng_sn['error']['get_fb_access_token'] = 'To be able to get the access token you first need to configure a Facebook App id and Facebook Secret!';

$lng_sn['error']['curl_not_installed'] ='This module needs cURL library installed on your server. Please ask an administrator to install it for you!';
//$lng_sn['info']['fb_access_token_process_started'] = 'The process to get the access token has started!';

$lng_sn['access_token_helper'] = 'Access Token Helper';
$lng_sn['info']['access_token_helper'] = 'Please follow the next steps in order to get the Facebook access token.';
$lng_sn['step1'] = '<b>Step1:</b> Access the following URL ';
$lng_sn['step1_1'] = 'Follow the steps and allow the permissions as required. At the end you will see a <b>long code</b> which you will need to copy and place in the <em>Code</em> box below.<br/>If instead of the code you see a <b>Facebook error</b>, stop and solve the problem, then begin from Step 1 again. If you don\'t know how to solve the problem contact us and send us the error message.';
$lng_sn['step2'] = '<b>Step2:</b> Enter the code you copied in the previous step in the <em>Code</em> box below, then click the button <b>Get Facebook Access Token</b>';
$lng_sn['step2_1']='<b>Important!</b> The code from Step 1 expires after a short while. If you don\'t use it in Step 2 in time you will receive an error that the code is expired. In this case just repeat Step 1 and get a new code.';
$lng_sn['code']='Code';
$lng_sn['error']['code']='Please enter the Code you copied in the previous step!';
$lng_sn['info']['access_token_configured'] = 'The access token was configured. If you want to post the listings to your Facebook personal profile you can stop here. If you want them posted on the configured Facebook Page then follow the next step.';
$lng_sn['info']['page_access_token_configured'] = 'The access token was configured. You can return to <em>Social Networks</em> module settings and enable Post ads on Facebook!';
$lng_sn['notice'] = 'Important! The access token has an expiration date. You will be able to see it in <em>Social Networks</em> module settings next to the access token box. When it will expire you will be notified, and then you need to repeat this process and renew it!';

$lng_sn['error']['user_access_token'] = 'User access token is required for this action. Please complete Step 2!';
$lng_sn['pageid'] = 'Facebook Page ID';
$lng_sn['info']['pageid'] = 'If you want the ads posted on the Facebook Page you configured upper in this form instead<br/> of your Facebook profile page, then you need to configure Facebook Page ID and<br/> Facebook Page Access Token. Otherwise leave these 2 options blank';

$lng_sn['error']['pageid'] = 'Please enter the Facebook Page ID!';

$lng_sn['step3'] = '<b>Step3:</b> Do not complete this step if you want to post on your personal profile page. This step will allow you to add the listings to a page created from Pages section.<br/>Enter below the Facebook Page ID ( if not filled in ) and then click <b>Get Facebook Page Access Token</b>.<br/>You can get the Facebook Page ID from the About section of your Facebook Page, or you can use the following site: <a href="http://findfacebookid.com/" rel="nofollow">http://findfacebookid.com/</a>';

$lng_sn['fb_share_button']='Facebook <i>Share</i> button';
// ---------- end version 8.5 ----------------

// ---------- version 8.10 ----------------

$lng_sn['youtube_link']='Your <i>Youtube</i> Channel';
$lng_sn['pinterest_link']='Your <i>Pinterest</i> Url';
$lng_sn['instagram_link']='Your <i>Instagram</i> Url';
$lng_sn['linkedin_link']='Your <i>Linkedin</i> Url';

// ---------- end version 8.10 ----------------

// ---------- version 9.2 ----------------
$lng_sn['fb_page_plugin']='Facebook Page Plugin';
$lng_sn['enable_fb_page_plugin']='Enable Facebook Page Plugin';

$lng_sn['fb_pp_tabs']='Tabs to render';
$lng_sn['fb_pp_hide_cover']='Hide cover photo in the header';
$lng_sn['fb_pp_show_facepile']='Show profile photos when friends like this';
$lng_sn['fb_pp_hide_cta']='Hide the custom call to action button (if available)';
$lng_sn['fb_pp_small_header']='Use the small header instead';

$lng_sn['error']['enable_fb_page_plugin'] = 'You must configure a Facebook Page in order to activate this plugin!';
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