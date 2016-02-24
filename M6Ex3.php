<?php
$fileName = 'shakespeare.txt';
echo "<h1>Displaying $fileName</h1>";
$array = file($fileName);
foreach ($array as $line) {
    echo '<br>' . $line[2];
    // alternatively:
    // substr($line, 2, 1);
}

echo '<hr>';

// alternative when using large files
$fh = fopen($fileName, 'r');
while(!feof($fh)) {
    $line = fgets($fh);
    echo '<br>' . substr($line, 2, 1);
}
fclose($fh);