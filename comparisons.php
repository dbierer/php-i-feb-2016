<?php
$a = '1';
$b = 1;
$c = 0;

var_dump($a == $b);
var_dump($a === $b);

echo '<pre>';
if ($b) {
    echo 'TRUE' . PHP_EOL;
} else {
    echo 'FALSE' . PHP_EOL;
}

if (-$b) {
    echo 'TRUE' . PHP_EOL;
} else {
    echo 'FALSE' . PHP_EOL;
}

if ($c) {
    echo 'TRUE' . PHP_EOL;
} else {
    echo 'FALSE' . PHP_EOL;
}

// from nicolae
echo PHP_EOL;
$a = 5;
$b = -2;
var_dump(-$a);
echo PHP_EOL;
var_dump(-$b);

