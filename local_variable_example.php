<?php 
// NOTE: $a is defined in 2 places
// $a on line 6 is NOT tied to $a on line 9
function whatever()
{
    // local $a
    $a = 'WHATEVER';
}

function talksToTheOutside($x)
{
    return $x . ':TALKS';
}

// global $a
$a = 'TEST';
echo $a . PHP_EOL;

// NOTE: global $a is unaffected by local $a inside the function 
whatever();
echo $a . PHP_EOL;

// NOTE: doesn't affect global $a at all
talksToTheOutside($a);
echo $a . PHP_EOL;

// Global $a is reassigned to the output of the function
$a = talksToTheOutside($a);
echo $a . PHP_EOL;


