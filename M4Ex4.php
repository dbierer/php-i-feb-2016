<?php 
// from Przemek Szewciow to All Participants:
$dayOfWeek = date('l');
if ($dayOfWeek === "Friday") {
    echo 'See you Monday';
} else {
    echo 'See you tomorrow'; 
}