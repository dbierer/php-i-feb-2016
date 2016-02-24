<?php
// gets list of all php files in current dir
$dir = __DIR__;
$list = glob($dir . '/*.php');
echo '<ul>';
foreach ($list as $file) {
    echo '<li>' . $file . '</li>';
}
echo '</ul>';
