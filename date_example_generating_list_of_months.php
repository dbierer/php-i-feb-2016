<?php 
function listMonths()
{
    echo strftime('M', time());
}
function test($a)
{
    return $a;
}

echo date('Y-m-d H:i:s');
echo '<br>';
echo strtoupper('this string is no longer lowercase');
echo '<br>';
echo (ctype_alpha('Is this a string?')) ? 'YES' : 'NO';
ini_set('display_errors', 0);
echo 'NO Warning';
echo '<br>';
test();
echo '<br>';
echo 'Warnings are On';
echo '<br>';
ini_set('display_errors', 1);
test();

echo '<br>';
echo 'Array of months';
echo listMonths();