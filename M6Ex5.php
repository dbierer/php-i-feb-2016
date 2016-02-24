<?php
$course = ['Art101', 'Life Drawing', 'Prof McDonnegal'];
$fn     = __DIR__ . '/mycsvfile.csv';

$fh = fopen($fn, 'a');
fputcsv($fh, $course);
fclose($fh);
