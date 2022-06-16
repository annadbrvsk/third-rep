<?php

/*
 * Complete the 'camelcase' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function camelcase($s) {
    // Write your code here
    return preg_match_all('/[A-Z]+/', $s) + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
