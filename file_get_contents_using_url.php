<?php 
$contents = file_get_contents('http://google.com/');
$contents = str_replace('Google', 'Boogle', $contents);
echo $contents;
