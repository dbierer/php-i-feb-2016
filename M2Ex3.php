<?php
function formatStatus($status)    
{
    $valid_values = getStatusCodes();
    if (in_array(strtolower($status),$valid_values)) {
        return strtolower ($status);
    }
    return false;
}