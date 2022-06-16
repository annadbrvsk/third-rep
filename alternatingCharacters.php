<?php

/*
 * Complete the 'alternatingCharacters' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function alternatingCharacters($s) {
    // Write your code here
    $count = 0;
    for($i = 0; $i < strlen($s) - 1; $i++){
        if($s[$i] == $s[$i+1]){
            $count++;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = alternatingCharacters($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
