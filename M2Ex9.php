<?php
$a = 2;
echo $a++ . '<br />'; // echos 2 but $a == 3
echo --$a . '<br />'; // echos 2 but $a == 2
echo $a . '<br />';   // echos 1 val $a == 1
$a = 4;
$b = 2;
echo ++$a * ($a++ + --$b); // 5 * (5 + 1) = 30
