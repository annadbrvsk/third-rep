<?php

/*
 * Complete the 'bonAppetit' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY bill
 *  2. INTEGER k
 *  3. INTEGER b
 */

function bonAppetit($bill, $k, $b) {
    // Write your code here
    foreach ($bill as $value) {
        if ($value == $k) {
            unset($bill[$value]);
        }
    }
    $total = array_sum($bill) / 2;
    if ($total < $b) {
        echo $b - $total;
    }
    echo "Bon Appetit";
    }

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
