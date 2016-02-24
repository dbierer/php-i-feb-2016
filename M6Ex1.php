<?php 
$yourName = 'Doug';
$fileName = __DIR__ . '/name.txt';
$fh = fopen($fileName, 'w');
if (!$fh) {
    // some sort of proper relocation or exit
    header('Location: /');
    exit;
}
fwrite($fh, $yourName);
fclose($fh);

