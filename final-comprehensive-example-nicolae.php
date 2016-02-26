<!DOCTYPE html>
<html>
<head>
<title>PHP I Recap</title>
<style>
body {
    font-family: Arial;
    font-size: 12px;
}
td {
    border: 1px solid #444;
    margin: 0;
    padding: 3px;
    text-align: center;
}
th {
    background-color: #ddd;
    border: 1px solid #444;
    padding: 0.5em;
}
.congrats {
    font-size: 16px;
    color: #070;
    font-weight: bold;
}
</style>
</head>
<body>
<?php
/**
 * The code here covers most of the PHP I Course Material.
 * It doesn't incorporate the best coding practices,
 * as its purpose is both to be easy to read and cover
 * the acquired knowledge in a single file.
 */

define('TITLE', 'fopen() Modes');
$ftitl = [
    'Mode',
    'Operation',
    'Purpose',
    'Pointer',
    'File does not exist',
    'File exists',
    'Content if exists'
];
$foper = [
    'o' => 'open',
    'c' => 'create'
];
$fprps = [
    'ro' => 'read-only',
    'rw' => 'read-write',
    'wo' => 'write-only'
];
$fpntr = [
    'b' => 'beginning',
    'e' => 'end'
];
$fnext = [
    'e' => 'fails with error',
    'c' => 'tries to create'
];
$fexst = [
    '-' => '-',
    'e' => 'logs an error'
];
$fcont = [
    '-' => 'n/a',
    'i' => 'remains intact',
    't' => 'gets truncated'
];

/**
 * Outputs a one-line message and a line break.
 *
 * @param string $text The message
 */
function message($text, $css = '') {
    if (strlen($css)) {
        echo "<span class='$css'>$text</span><br>\n";
    } else {
        echo $text . "<br>\n";
    }
}

/**
 * Returns the fopen() Modes
 *
 * @return HTML
 */
function fopenModes() {
    global $ftitl, $foper, $fprps, $fpntr, $fnext, $fexst, $fcont;
    $count = 1;
    $modes = [
        'r'  => ['o', 'ro', 'b', 'e', '-', 'i'],
        'r+' => ['o', 'rw', 'b', 'e', '-', 'i'],
        'w'  => ['o', 'wo', 'b', 'c', '-', 't'],
        'w+' => ['o', 'rw', 'b', 'c', '-', 't'],
        'a'  => ['o', 'wo', 'e', 'c', '-', 'i'],
        'a+' => ['o', 'rw', 'e', 'c', '-', 'i'],
        'x'  => ['c', 'wo', 'b', 'c', 'e', '-'],
        'x+' => ['c', 'rw', 'b', 'c', 'e', '-'],
        'c'  => ['o', 'wo', 'b', 'c', '-', 'i'], // as of PHP 5.2.6
        'c+' => ['o', 'rw', 'b', 'c', '-', 'i'], // as of PHP 5.2.6
    ];
    $fopenModes = "<table>\n\t<tr>\n\t\t<td>&nbsp;</td>\n";
    foreach ($ftitl as $title) {
        $fopenModes .= "\t\t<th>$title</th>\n";
    }
    $fopenModes .= "\t</tr>\n";
    foreach ($modes as $mode => $data) {
        $fopenModes .= "\t<tr>\n";
        $fopenModes .= "\t\t<td>" . $count . "</td>\n";
        $fopenModes .= "\t\t<td>" . $mode . "</td>\n";
        $fopenModes .= "\t\t<td>" . $foper[$data[0]] . "</td>\n";
        $fopenModes .= "\t\t<td>" . $fprps[$data[1]] . "</td>\n";
        $fopenModes .= "\t\t<td>" . $fpntr[$data[2]] . "</td>\n";
        $fopenModes .= "\t\t<td>" . $fnext[$data[3]] . "</td>\n";
        $fopenModes .= "\t\t<td>" . $fexst[$data[4]] . "</td>\n";
        $fopenModes .= "\t\t<td>" . $fcont[$data[5]] . "</td>\n";
        $fopenModes .= "\t</tr>\n";
        $count++;
    }
    $fopenModes .= "</table>\n";
    return $fopenModes;
}

/**
 * Returns the number of lines in a file.
 *
 * @param string $file Name of the file
 * @param string $method (optional) Defaults to 'safe', alternative is 'quick'
 * @return integer The number of lines
 */
function getLines($file, $method = 'safe') {
    $lines = 0;
    if (file_exists($file)) {
        if (is_readable($file)) {
            switch ($method) {
                case 'quick':
                    break;
                default:
                    $target = fopen($file, 'r');
                    if ($target) {
                        while (!feof($target)) {
                            $str = fgets($target);
                            $lines++;
                        }
                        fclose($target);
                    }
            }
        } else {
            message('ERROR: The file cannot be read.');
        }
    } else {
        message('ERROR: The file does not exist.');
    }
    return $lines;
}

/**
 * Returns the measuring unit as multiples of bytes.
 *
 * @param integer $value File size
 */
function bytes($value) {
    $output = "Bytes";
    $prefix = '';
    $val = $value;
    $kilo = 1024;
    $mega = 1024 * 1024;
    if ($value >= $kilo) {
        $prefix = "K";
        $val /= $kilo;
    } elseif ($value >= $mega) {
        $prefix = "M";
        $val /= $kilo;
    }
    return $value . ' ' . $prefix . $output;
}

/**
 * Gets the full names of the countries in JSON format
 * and stores them in a local cache. It returns FALSE
 * if an error is encountered.
 *
 * @return array Country list
 */
function getCountries() {
    $local_cache = __DIR__ . '/country-cache.json';
    $online_url = 'http://country.io/names.json';
    if (file_exists($local_cache)) {
        $result = @file_get_contents($local_cache);
        return json_decode($result, TRUE);
    } else {
        $context = stream_context_create([
            'http' => [
                'timeout' => 2
            ]
        ]);
        $result = @file_get_contents($online_url, true, $context);
        if ($result) {
            @file_put_contents($local_cache, $result);
            return json_decode($result, TRUE);
        } else {
            return FALSE;
        }
    }
}

/**
 * Returns the current country based on the IP
 * or (boolean) FALSE if an error is encountered.
 *
 * @return string Name of the current country
 */
function getMyCountry() {
    $countryList = getCountries();
    $local_cache = __DIR__ . '/my-country.txt';
    $online_url = "http://ipinfo.io/country";
    if (count($countryList)) {
        if (isset($_SESSION['country'])) {
            $country = $_SESSION['country'];
            return $countryList[$_SESSION['country']];
        } else {
            $context = stream_context_create([
                'http' => [
                    'timeout' => 2
                ]
            ]);
            $country = trim(@file_get_contents($online_url, true, $context));
            if ($country) {
                $_SESSION['country'] = $country;
                return $countryList[$country];
            } else {
                return FALSE;
            }
        }
    } else {
        return FALSE;
    }
}

$recap = [
    'variables',
    'constants',
    'assignment',
    'incrementation',
    'concatenation',
    'string operations',
    'arrays',
    'multi-dimensional arrays',
    'if-else',
    'for',
    'foreach',
    'while',
    'functions (without parameters, with parameters, with optional parameters)',
    'scope',
    'file operations (reading and writing)',
    'mixing HTML with PHP',
    'forms',
    'cookies',
    'sessions'
];

session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}

if (isset($_SESSION['name'])) {

    $count = count($recap);

    message("Congratulations for completing the course, " . $_SESSION['name'] . "!", 'congrats');
    $my_country = getMyCountry();
    if ($my_country) {
        message("I hope everything's great in " . $my_country . ". :)", 'congrats');
    }

    echo "<h2>This file consists of a PHP I Foundations Course recap ($count items)</h2>\n";
    echo "<ul>\n";
    for ($i=0; $i < $count; $i++) {
        echo "\t<li>" . $recap[$i] . "</li>\n";
    }
    echo "</ul>\n";

    echo "<h2>File stats</h2>\n";
    message("<b>Name:</b> " . basename(__FILE__));
    $filesize = number_format(filesize(__FILE__));
    message("<b>Size:</b> " . bytes($filesize));
    message("<b>Lines of code:</b> " . getLines(__FILE__));

    echo "<h2>" . TITLE . "</h2>\n";
    echo fopenModes();
} else {
    echo "<h1>Welcome</h1>\n";
    echo "<form action='" . basename(__FILE__) . "' method='post'>\n";
    echo "<h2>Please enter your name<br>\n";
    echo "<input type='text' name='name'>\n";
    echo "<input type='submit' value='Submit'>\n";
    echo "</form>\n";
}

?>
</body>
</html>
