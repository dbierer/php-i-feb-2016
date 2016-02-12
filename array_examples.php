<?php
// makes the numbering start with 1
// NOTE: using PHP 5.4+ short array syntax = []
$months = [1 => 'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

echo 'March is abbreviated: ' . $months[2];
echo '<pre>';
var_dump($months);
echo '</pre>';

// emulates a data structure
$profile = array(
    'firstName' => 'Fred',
    'lastName' => 'Flintstone',
    'address' => '301 Cobblestone Way',
    'city' => 'Bedrock',
    'payments' => ['2011-01-12', '2012-07-16'],
);

echo '<br>';
echo 'Welcome ' . $profile['firstName'] . ' ' . $profile['lastName'];

echo '<br>';
$test_array = array(
    'val1' => 'value1',
    'val2' => 'value2'
);
var_dump($test_array);
$test_array[] = 'value3';
var_dump($test_array);
