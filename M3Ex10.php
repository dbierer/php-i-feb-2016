<?php
// from Nicolae Crefelean to All Participants:
$empty_set = [1, 2, 3, 4];
$sets = [
    'Red' => $empty_set,
    'Blue' => $empty_set,
    'Green' => $empty_set,
    'Yellow' => $empty_set,
];
// optomizes memory
unset($empty_set);
echo '<pre>';
var_dump($sets);

// here's an alternative

$sets = [
    'Red' => range(1,4),
    'Blue' => range(1,4),
    'Green' => range(1,4),
    'Yellow' => range(1,4),
];

var_dump($sets);
