<?php
function getStatusValues() {
    return ['All', 'Cancelled', 'Complete', 'Held', 'Invoiced'];
}

function buildStatusOptions($selectedStatus) {
    $htmlOutput = "<select>\n"; // begin the output string
    $statuses = getStatusValues();

    foreach ($statuses as $key => $status) {
        $selected = $status == $selectedStatus ? ' selected' : '';
        $htmlOutput .= "\t<option value='$key'$selected>$status</option>\n";
    }

    // add HTML text to $htmlOutput
    $newStatus = 'Open';
    $selected = $newStatus == $selectedStatus ? ' selected' : '';
    $htmlOutput .= "\t<option value='". count($statuses) . "'$selected>$newStatus</option>\n";

    // when everything has been added, return the string
    $htmlOutput .= "</select>";
    return $htmlOutput;
}

echo buildStatusOptions('Complete');