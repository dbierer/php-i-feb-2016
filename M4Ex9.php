<?php
ini_set('display_errors', 1);
// from Nicolae Crefelean to All Participants:
$empty_set = [1, 2, 3, 4];
$cards = [
    'Red' => $empty_set,
    'Blue' => $empty_set,
    'Green' => $empty_set,
    'Yellow' => $empty_set,
];

// sum of the value of all the cards in $cards
$sum = 0;
foreach ($cards as $value) {
    // you can use a function to produce the sum:
    $sum += array_sum($value);
    // or you can do this:
    // foreach ($value as $item) $sum += $item;
}

echo 'The sum of all the cards is ' . $sum;