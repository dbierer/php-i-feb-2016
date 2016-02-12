<?php
//from Nicolae Crefelean to All Participants:
$fun = array('Programming', 'in', 'PHP', 'is', 'fun!');
echo $fun[2];
echo '<br>' . PHP_EOL;

//from Przemek Szewciow to All Participants:
$array = ['Programming', 'in', 'PHP', 'is', 'fun!'];
echo $array[2];
echo '<br>' . PHP_EOL;
$array = [1=>'Programming', 'in', 'PHP', 'is', 'fun!'];
echo '<br>' . PHP_EOL;
echo $array[3];

// using explode()
$array = explode(' ', 'Programming in PHP is fun!');
echo '<br>' . PHP_EOL;
echo $array[2];
