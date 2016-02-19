<?php
echo date('Y-m-d H:i:s');
echo '<br>';

$start = time();
$stop = $start + 15;

while (time() < $stop) {
    echo '.';
    for ($x = 0; $x < 1000; $x++) {
        // do nothing
    }
}

echo date('Y-m-d H:i:s');
echo '<br>';
