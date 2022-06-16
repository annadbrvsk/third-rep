<?php
function divisors($n) {
    // your code here
    $count = 0;
    for($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $count++;
        }
    }
    return $count;
}