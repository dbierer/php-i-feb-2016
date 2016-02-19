<?php 
$dayOfWeek = date('l');
if ($dayOfWeek === "Friday") {
    echo 'See you Monday';
} elseif ($dayOfWeek === 'Saturday' || $dayOfWeek === 'Sunday') {
    echo "Hey ... it's $dayOfWeek ... go home!!!";
} else {
    echo 'See you tomorrow'; 
}