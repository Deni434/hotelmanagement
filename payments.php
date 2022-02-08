<?php
$enableSandbox = true;

$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'db_hor'
];

$paypalConfig = [
	'email' => 'example@mail.com',
	'return_url' => 'http://localhost/HotelPALAZZO/payment-cancelled.html',
	'cancel_url' => 'http://localhost/HotelPALAZZO/payment-cancelled.html',
	'notify_url' => 'http://localhost/HotelPALAZZO/payments.php'
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
require_once 'admin/connect.php';
$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
 $itemName =  $fetch['room_type'];
$itemAmount =  $fetch['price'];

					}
			

require 'functions.php';


if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {
	
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[$key] = stripslashes($value);
	}

	
	$data['business'] = $paypalConfig['email'];

	
	$data['return'] = stripslashes($paypalConfig['return_url']);
	$data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
	$data['notify_url'] = stripslashes($paypalConfig['notify_url']);

	
	$data['item_name'] = $itemName;
	$data['amount'] = $itemAmount;
	$data['currency_code'] = 'EUR';


	$queryString = http_build_query($data);

	
	header('location:' . $paypalUrl . '?' . $queryString);
	exit();

} else {
	
	$db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

	
	$data = [
		'item_name' => $_POST['item_name'],
		'item_number' => $_POST['item_number'],
		'payment_status' => $_POST['payment_status'],
		'payment_amount' => $_POST['mc_gross'],
		'payment_currency' => $_POST['mc_currency'],
		'txn_id' => $_POST['txn_id'],
		'receiver_email' => $_POST['receiver_email'],
		'payer_email' => $_POST['payer_email'],
		'custom' => $_POST['custom'],
	];

	
	if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) {
		if (addPayment($data) !== false) {
		
		}
	}
}