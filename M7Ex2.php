<?php
$html  ='<html>';
$html .= '<head>';
$html .= '</head>';
$html .= '<body>';

// HTML form
$html .= '<form>';
$html .= '<table border=1>';

// username input
$html .= '<tr>';
$html .= '<th>Username</th>';
$html .= '<td><input type="text" name="username" /></td>';
$html .= '</tr>';

// password input
$html .= '<tr>';
$html .= '<th>Password</th>';
$html .= '<td><input type="password name="password"></td>';
$html .= '</tr>';

// password input
$html .= '<tr>';
$html .= '<th>&nbsp;</th>';
$html .= '<td><input type="submit" value="Login"></td>';
$html .= '</tr>';

$html .= '</table>';
$html .= '</form>';
$html .= '</body>';
$html .= '</html>';
echo $html;
