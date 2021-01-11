<?php
$GLOBALS['_ta_rp_key'] = '36a72767560c505d95afc9bcdfef4e6d';
$GLOBALS['_ta_reverse_proxy_id'] = 'ais103';

require 'bootloader_6d36fd464acabd505883bf888a790adf.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>