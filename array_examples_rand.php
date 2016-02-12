<?php
$days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
// echo a random day of the week:
echo $days[array_rand($days)];
echo '<br>';
// alternatively:
// NOTE: need to use count($days) - 1 because count gives the max # elements
//       which could be past the end of the array!
echo $days[rand(0, count($days) - 1)];