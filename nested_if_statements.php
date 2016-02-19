<?php
//$amount = 123.45;
$state  = 'NY';
$cost   = 0;

if (!empty($amount)) {
    if ($state == 'NY') {
        $cost = $amount * 1.0789;
    } else {
        $cost = $amount * 1.0925;
    }
    echo $cost;
} else {
    echo 'Amount is not set!' . PHP_EOL;
}
