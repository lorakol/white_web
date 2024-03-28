<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

$lng_sp['spam_prevention'] = 'Spam Prevention';
$lng_sp['spam_log'] = 'Spam Log';
$lng_sp['check_registration'] = 'Check registration email and IP addresses';
$lng_sp['check_contact_forms'] = 'Check contact forms email and IP addresses';
$lng_sp['check_comments'] = 'Check comments email and IP addresses';
$lng_sp['check_reviews'] = 'Check reviews email and IP addresses';
$lng_sp['block_tor_ips'] = 'Block Tor IP addresses';
$lng_sp['block_networks'] = 'Block some of the Internets most hostile spam friendly networks';
$lng_sp['block_limit'] = 'Minimum score limit';
$lng_sp['block_ip_after_attempt'] = 'Block ip after attempt for';
$lng_sp['unblock_all'] = 'Unblock all';
$lng_sp['whitelist_all'] = 'Add all to IPs Whitelist';
$lng_sp['mailto'] = 'Contact form';
$lng_sp['register'] = 'Registration';
$lng_sp['comments'] = 'Comments';
$lng_sp['reviews'] = 'Reviews';
$lng_sp['confidence'] = 'Score';
$lng_sp['confidence_from'] = 'Minimum score';
$lng_sp['confidence_to'] = 'Maximum score';
$lng_sp['confirm_unblock'] = 'Are you sure you want to unblock the selected ips or emails?';
$lng_sp['confirm_add_whitelist'] = 'Are you sure you want to add to whitelist the selected ips or emails?';


$lng_sp['check_agains_spamlist'] = 'check Email and IP agains spamlist';
$lng_sp['waiting_time'] = 'Waiting time';
$lng_sp['add_waiting_time'] = 'Add a waiting time before posting again';
$lng_sp['info']['add_waiting_time'] = 'Guests which post ads without an user account will be verified by IP address.';
$lng_sp['waiting_groups'] = 'Apply to user groups';

$lng_sp['post_ad'] = 'Ad posting';
$lng_sp['check_ip_only_agains_spamlist'] = 'check IP address agains spamlist';
$lng_sp['use_sfs'] = 'Use Stopforumspam.org';
$lng_sp['use_abip'] = 'Use Abuseipdb.com';
$lng_sp['api_key'] = 'API Key';
$lng_sp['error']['abip_api_key'] = 'You need to enter your Abuseipdb.com API Key';
$lng_sp['error']['ipqs_api_key'] = 'You need to enter your IPQualityScore.com API Key';

$lng_sp['use_ipqs'] = 'Use IPQualityScore.com';
$lng_sp['block'] = 'Block IPs and Emails';
$lng_sp['add_user_info'] = 'Add IP information to the user info box';
$lng_sp['strictness'] = 'Strictness';
$lng_sp['public_access_points'] = 'Allow public access points';
$lng_sp['lighter_penalties'] = 'Lighter penalties';
$lng_sp['timeout'] = 'SMTP timeout';
$lng_sp['fast_ip_check'] = 'Fast IP check';
$lng_sp['fast_email_check'] = 'Fast Email check';
$lng_sp['info']['strictness'] = 'How in depth (strict) do you want this query to be? Higher values take longer to process<br/> 
and may provide a higher false-positive rate. We recommend starting at 0, <br/>
the lowest strictness setting, and increasing to "1" or "2" depending on your levels of fraud. ';
$lng_sp['info']['ip_fast'] = 'When this parameter is enabled the API will not perform certain forensic checks <br/>
that take longer to process. Enabling this feature greatly increases the API speed <br/>
without much impact on accuracy. This option is intended for services that require <br/>
decision making in a time sensitive manner and can be used for any strictness level.';
$lng_sp['info']['public_access_points'] = 'Bypasses certain checks for IP addresses from education and research institutions,<br/>
schools, and some corporate connections to better accommodate audiences <br/>
that frequently use public connections. ';
$lng_sp['info']['lighter_penalties'] = 'Is your scoring too strict? Enable this setting to lower detection rates <br/>
and Fraud Scores for mixed quality IP addresses. If you experience any false-positives <br/>
with your traffic then enabling this feature will provide better results. ';
$lng_sp['info']['timeout'] = 'Maximum number of seconds to wait for a reply from a mail service provider. <br/>
Note that a large number will add delay to your page response.';
$lng_sp['info']['email_fast'] = 'When this parameter is enabled our API will not perform an SMTP check with the <br>
mail service provider, which greatly increases the API speed.';
$lng_sp['seconds'] = 'seconds';
$lng_sp['proxy'] = 'Proxy';
$lng_sp['vpn'] = 'VPN';
$lng_sp['tor'] = 'Tor';
$lng_sp['location'] = 'IP Location';
$lng_sp['score'] = 'IP Score';
$lng_sp['crawler'] = 'Crawler';
$lng_sp['mobile'] = 'Mobile';
$lng_sp['bot'] = 'Bot';
$lng_sp['isp'] = 'ISP';
$lng_sp['ip_check'] = 'IP check';
$lng_sp['email_check'] = 'Email check';

$lng_sp['limit_accesses_no'] = 'Limit number of accesses in a period of time';
$lng_sp['limit_accesses'] = 'Limit accesses';
$lng_sp['block_for'] = 'Block for';
$lng_sp['hours'] = 'hours';
$lng_sp['minutes'] = 'minute(s)';
$lng_sp['times'] = 'times';
$lng_sp['limit_acc_more_than_times'] = 'IPs with more than';
$lng_sp['limit_same_page_accesses_more_than_times'] = 'IPs which access consecutively same page more than';
$lng_sp['accesses_in'] = 'accesses in';
$lng_sp['times_in'] = 'times in';
$lng_sp['limit_acc_count_from_pages'] = 'Count accesses';
$lng_sp['on_all_pages'] = 'On all pages';
$lng_sp['on_pages'] = 'On pages';
$lng_sp['details'] = 'Listing details page';
$lng_sp['index'] = 'First page';
$lng_sp['listings'] = 'Search page';
$lng_sp['accesses_limit_reached'] = 'Accesses limit reached';
$lng_sp['same_page_accesses_limit_reached'] = 'Same page consecutive accesses limit reached';
$lng_sp['accesses'] = 'Accesses limit reached';
$lng_sp['sp_accesses'] = 'Same page consecutive accesses limit reached';
$lng_sp['ipqs_info_on_users_list'] = 'Show IP information to Users List table';
?>
