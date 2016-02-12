<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// 3rd param if TRUE == case insensitive
define('CONSTANT', 'TEST', true);
echo CONSTANT;
echo PHP_EOL;
echo Constant;

define('PI', 22/7);
echo PI;
echo PHP_EOL;

echo __FILE__ . ':' . __LINE__;
echo PHP_EOL;
