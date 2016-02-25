<?php 
$count = (isset($_COOKIE['count'])) ? (int) $_COOKIE['count'] : 0;
echo '<h3>Cookie: ' . $count . '</h3>';
setcookie('count', ++$count, time()+300);
phpinfo(INFO_VARIABLES);