<?php
// count 1 to 10
echo '<hr>';
echo 'while loop';
echo '<hr>';

$i = 1;
while ($i <= 10) {
    echo $i++ . ' ';
}

echo '<hr>';
echo 'for loop';
echo '<hr>';
// from Cory Rickets to All Participants:
for ($i = 0; $i <=10; $i++) { echo $i;}
echo "<br />";
// from Rebecca Negron to All Participants:
for ($i=1; $i<=10; $i++){
    echo $i. ' ';
}
echo "<br />";


echo '<hr>';
echo 'do while loop';
echo '<hr>';
// from Wael Hamadelneil to All Participants:
$i = 1; 
do { 
    echo $i; 
} while($i < 9);
