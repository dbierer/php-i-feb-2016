<?php 
// NOTE: please don't do this!!!
//       $a is now a "hidden" input
//       and also a "hidden" output
function whatever()
{
    global $a;
    $a = 'WHATEVER';
}

$a = 'TEST';

echo $a . PHP_EOL;

whatever();

echo $a . PHP_EOL;
