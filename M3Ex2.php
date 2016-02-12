<?php
$a = 5;
$b = '2day';
//math operator
echo $a + $b; // 7
echo '<br />';
//string operator
echo $a . $b; // "52day";
// tests
$c = '3times3';
echo '<br />';
echo $a + $c;
$d = 'R2D2';
echo '<br />';
echo $a + $d;
$e = '6.18is3.14plus3';
echo '<br />';
echo $a + $e;
$f = '3.14equalsPi';
echo '<br />';
echo $a + $f;
/**
 * Conclusion: in math operations, the PHP interpreter
 * will work with non-numeric variables, but it will
 * use them only if it finds numbers starting with
 * the first character of the strings. It will recognize
 * both int and float values and it will ignore
 * the rest of the string, even if it has more numbers.
 */
echo '<br />';
echo $a + '123E-10';
echo '<br />';
echo $a + (int) 12.6;

