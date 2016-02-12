<?php
$days =      ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
$calendar =  [
    'Jan' => [
        1 => [ '',    '',    '',    '',    '',    1,     2],
        2 => [ 3,     4,     5,     6,     7,     8,     9],
        3 => [ 10,    11,    12,    13,    14,    15,    16],
    ],  
    'Feb' => [
        1 => [ 3,     4,     5,     6,     7,     8,     9],
        2 => [ 10,    11,    12,    13,    14,    15,    16],
    ],  
];

// what is the date associated with Weds of the 2nd week of January?
echo 'Weds of 2nd week of Jan = ' . $calendar['Jan'][2][3]; 