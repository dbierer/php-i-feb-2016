<?php 
function htmlList($array) 
{
    $output = '';
    $output .='<ul>';
    foreach ($array as $li) {
        $output .='<li>' . $li . '</li>';
    }
    $output .='</ul>';
    return $output;
}

echo htmlList(['A','B','C']);
