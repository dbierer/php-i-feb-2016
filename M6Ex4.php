<?php
$path = __DIR__;
$list = glob($path . '/*');
echo '<pre>';
foreach ($list as $fn) {
    printf('<br>%40s : %08d : %08d', 
            basename($fn), 
            filesize($fn), 
            count(file($fn)));
}
echo '</pre>';
