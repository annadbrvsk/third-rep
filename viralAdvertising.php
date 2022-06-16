<?php

/*
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    // Write your code here
    $peopleCount = 5;
    $peopleLikesCount = 0;
    for ($i=0; $i < $n; $i++){
        $a = (int)($peopleCount / 2);
        $peopleLikesCount += $a;
        $peopleCount = $a * 3;
    }
    return $peopleLikesCount;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
