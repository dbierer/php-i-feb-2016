<?php
$valueA = 'B';
$valueB = 'A';

if ($valueA > $valueB)
    echo 'A is greater than B';
    $valueB = $valueA;
    echo 'The value for B has changed';
    
var_dump($valueA, $valueB);

// depending on what the author of the code wanted to do
// maybe should be this:
if ($valueA > $valueB) {
    echo 'A is greater than B';
    $valueB = $valueA;
    echo 'The value for B has changed';
}

// or ... maybe they really wanted this:
if ($valueA > $valueB) {
    echo 'A is greater than B';
} else {
    $valueB = $valueA;
    echo 'The value for B has changed';
}

// or ... another possibility
if ($valueA > $valueB) 
    echo 'A is greater than B';
$valueB = $valueA;
echo 'The value for B has changed';

