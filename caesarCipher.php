<?php

/*
 * Complete the 'caesarCipher' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER k
 */

function caesarCipher($s, $k) {
    // Write your code here
    $newWord = "";
    $v = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    foreach (str_split($s) as $letter){
        if (array_search($letter, $v) === false){
            $newWord = $newWord.$letter;
            continue;
        }
        $letterIndex = array_search($letter, $v) + $k;
        if ($letterIndex > count($v)){
            $letterIndex = $letterIndex % count($v);
        }
        // echo $letterIndex.PHP_EOL;
        $newWord = $newWord.$v[$letterIndex];
        // echo array_search($letter, $v).PHP_EOL;
    }
    return $newWord;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s = rtrim(fgets(STDIN), "\r\n");

$k = intval(trim(fgets(STDIN)));

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
