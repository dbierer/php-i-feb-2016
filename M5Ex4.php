<?php
function getStatusValues()
{
    return ['All','Complete','Cancelled','Held','Invoiced','Open'];
}

function buildStatusValues($arr)
{
    // NOTE: you might need to account for a selected value!
    $html = "<select name='status'>"; 
    foreach($arr as $item) { 
        $html .= "<option>$item</option>";
    } 
    $html .= "</select>"; 
    return $html;
} 

echo buildStatusValues(getStatusValues());