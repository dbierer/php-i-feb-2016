<?php
$a = '0';
var_dump($a);
echo '<br>';
$a = (int) $a;
var_dump($a);
echo '<br>';
$a = $a + 0.0;
var_dump($a);
echo gettype($a);