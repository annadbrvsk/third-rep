<?php

/*
 * Complete the 'timeInWords' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER h
 *  2. INTEGER m
 */

function timeInWords($h, $m)
{
    // Write your code here
    $timeArray = ["zero", "one", 'two', "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen", "twenty", "twenty one", "twenty two", "twenty three", "twenty four", "twenty five", "twenty six", "twenty seven", "twenty eight", "twenty nine", "thirty"];
    if ($m <= 30) {
        if ($m == 0) {
            return $timeArray[$h] . " o' clock";
        }
        if ($m == 15) {
            return "quarter past " . $timeArray[$h];
        }
        if ($m == 30) {
            return "half past " . $timeArray[$h];
        }
        if ($m == 1) {
            return $timeArray[$m] . " minute past " . $timeArray[$h];
        }
        return $timeArray[$m] . " minutes past " . $timeArray[$h];
    } else {
        if ($m == 45) {
            return "quarter to " . $timeArray[$h + 1];
        }
        if ($m == 59) {
            return $timeArray[60 - $m] . " minute to " . $timeArray[$h + 1];
        }
        return $timeArray[60 - $m] . " minutes to " . $timeArray[$h + 1];
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$h = intval(trim(fgets(STDIN)));

$m = intval(trim(fgets(STDIN)));

$result = timeInWords($h, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
