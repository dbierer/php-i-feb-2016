<?php
// from Doug Sak to All Participants:
define('MESSAGE', 'Favorite color is ');
$colorchoice = 'blue';
if ($colorchoice == 'red') {
    echo MESSAGE . "red";
} elseif ($colorchoice == 'green') {
    echo MESSAGE . "green";
} elseif ($colorchoice == 'blue') {
    echo MESSAGE . "blue";
} elseif ($colorchoice == 'orange') {
    echo MESSAGE . "orange";
} elseif ($colorchoice == 'yellow') {
    echo MESSAGE . "yellow";
} else {
    echo "There isn't a favorite color";
}  

echo '<br>' . PHP_EOL;

// from Przemek Szewciow to All Participants:
switch ($colorChoice) {
    case "red":
        echo 'do this1';
        break;
    case "blue":
        echo 'do this2';
        break;
    case "yellow":
        echo 'do this3';
        break;
    // and other cases for remaining colors
    default:
   echo 'have a coffee';
}
