<?php
// from nicolae
// WARNING: 36th or bigger takes more execution time for the recursive method
$nth_number = 35;

echo "<h4>Number $nth_number in the Fibonacci sequence</h4>";

function getNthFibonacci($nth) {
    $start_time = time();
    $fibo = [1 => 0, 1];
    if ($nth > 2) {
        $count = 2; // numbers already in the series
        do {
            $fibo[] = end($fibo) + prev($fibo);
            $count++;
        } while ($count < $nth);
        $value = end($fibo);
    } else {
        $value = $fibo[$nth];
    }
    return $value . " (" . (time() - $start_time) . " seconds)";
}

function getNthFiboRec($nth) {
    $start_time = time();
    if ($nth < 3) {
        $fibo = $nth - 1;
    } else {
        $fibo = getNthFiboRec($nth - 2) + getNthFiboRec($nth - 1);
    }
    return $fibo . " (" . (time() - $start_time) . " seconds)";
}

echo 'do-while: ' . getNthFibonacci($nth_number) . '<br>';
echo 'recursive: ' . getNthFiboRec($nth_number);
