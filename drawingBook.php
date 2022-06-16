<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    // Write your code here
    if ($p == 1){
        return 0;
    }
    if ($p == $n){
        return 0;
    }
    if ($p < $n / 2){
        return (int)($p / 2);
    }
    // return ($n - 1) / $p;
    if ($n % 2 == 0){
        if ($n - $p == 1){
            return 1;
        }
        return (int)(($n - $p) / 2);
    }
    if ($p % 2 == 0){
        return (int)((($n - $p) - 1) / 2);
    }
    return (int)(($n - $p) / 2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);
