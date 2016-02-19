<?php
$amount = 123.45;
$message = ($amount > 100) ? 'BEST CUSTOMER' : 'PLEASE BUY MORE';
echo $message;

// setting defaults
$test = ($amount) ?: 'Unknown';
var_dump($test);

// new in PHP 7 ... doesn't complain about unset array keys or undefined variables
unset($amount);
$test = $amount ?? $data['name'] ?? $_GET['amount'] ?? 'Unknown';
var_dump($test);
