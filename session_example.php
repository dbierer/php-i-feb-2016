<?php 
session_start();
$count = (isset($_SESSION['count'])) ? (int) $_SESSION['count'] : 0;
echo '<h3>Session: ' . $count . '</h3>';
$_SESSION['count'] = ++$count;
phpinfo(INFO_VARIABLES);