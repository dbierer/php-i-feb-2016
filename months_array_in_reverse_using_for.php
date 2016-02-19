<?php
$months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
echo '<ul>';
// display months backwards
for ($m = 11; $m >= 0; $m--) {
    echo '<li>' . $months[$m];
}
echo '</ul>';
