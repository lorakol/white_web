<?php
	$config_db_server='localhost';
	$config_db_server_username='root';
	$config_db_server_password='root';
	$config_db_database='admin_oxy';
	$config_db_charset='utf8';
	$config_db_collation='utf8_general_ci';
	$config_table_prefix='oxy_';
	$config_live_site= 'http://127.0.0.1:8901'; //'https://www.getrent.live';
	$config_abs_path= '.'; //'/home/admin/web/server1.getrent.live/public_html';
	$config_demo=0;
	$config_debug=1;
	$config_data_set='cars';
	$config_admin_folder='admin';
	$config_vat_rates = [
		"Austria" => [
			"standard_rate" => 20,
			"reduced_rate" => 10,
			"reduced_rate_alt" => 13,
			"super_reduced_rate" => false
		],
		"Belgium" => [
			"standard_rate" => 21,
			"reduced_rate" => 12,
			"reduced_rate_alt" => 6,
			"super_reduced_rate" => false
		],
		"Bulgaria" => [
			"standard_rate" => 20,
			"reduced_rate" => 9,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Cyprus" => [
			"standard_rate" => 19,
			"reduced_rate" => 9,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Czech Republic" => [
			"standard_rate" => 21,
			"reduced_rate" => 15,
			"reduced_rate_alt" => 10,
			"super_reduced_rate" => false
		],
		"Denmark" => [
			"standard_rate" => 25,
			"reduced_rate" => false,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Germany" => [
			"standard_rate" => 19,
			"reduced_rate" => 7,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Estonia" => [
			"standard_rate" => 20,
			"reduced_rate" => 9,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Greece" => [
			"standard_rate" => 24,
			"reduced_rate" => 13,
			"reduced_rate_alt" => 6,
			"super_reduced_rate" => false
		],
		"Spain" => [
			"standard_rate" => 21,
			"reduced_rate" => 10,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => 4
		],
		"Finland" => [
			"standard_rate" => 24,
			"reduced_rate" => 14,
			"reduced_rate_alt" => 10,
			"super_reduced_rate" => false
		],
		"France" => [
			"standard_rate" => 20,
			"reduced_rate" => 10,
			"reduced_rate_alt" => 5.5,
			"super_reduced_rate" => 2.1
		],
		"Croatia" => [
			"standard_rate" => 25,
			"reduced_rate" => 13,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Italy" => [
			"standard_rate" => 22,
			"reduced_rate" => 10,
			"reduced_rate_alt" => 4,
			"super_reduced_rate" => false
		],
		"Latvia" => [
			"standard_rate" => 21,
			"reduced_rate" => 12,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Lithuania" => [
			"standard_rate" => 21,
			"reduced_rate" => 9,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Luxembourg" => [
			"standard_rate" => 17,
			"reduced_rate" => 14,
			"reduced_rate_alt" => 8,
			"super_reduced_rate" => 3
		],
		"Hungary" => [
			"standard_rate" => 27,
			"reduced_rate" => 18,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Ireland" => [
			"standard_rate" => 23,
			"reduced_rate" => 13.5,
			"reduced_rate_alt" => 9,
			"super_reduced_rate" => 4.8
		],
		"Malta" => [
			"standard_rate" => 18,
			"reduced_rate" => 7,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Netherlands" => [
			"standard_rate" => 21,
			"reduced_rate" => 6,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Poland" => [
			"standard_rate" => 23,
			"reduced_rate" => 8,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Portugal" => [
			"standard_rate" => 23,
			"reduced_rate" => 13,
			"reduced_rate_alt" => 6,
			"super_reduced_rate" => false
		],
		"Romania" => [
			"standard_rate" => 20,
			"reduced_rate" => 9,
			"reduced_rate_alt" => 5,
			"super_reduced_rate" => false
		],
		"Slovenia" => [
			"standard_rate" => 22,
			"reduced_rate" => 9.5,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Slovakia" => [
			"standard_rate" => 20,
			"reduced_rate" => 10,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],
		"Sweden" => [
			"standard_rate" => 25,
			"reduced_rate" => 12,
			"reduced_rate_alt" => 6,
			"super_reduced_rate" => false
		],
		"United Kingdom" => [
			"standard_rate" => 20,
			"reduced_rate" => 5,
			"reduced_rate_alt" => false,
			"super_reduced_rate" => false
		],

	];

?>
