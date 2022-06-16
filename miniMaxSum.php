<?php


/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
    // Write your code here
    $sum = 0;
    foreach ($arr as $value) {
        $sum = $value + $sum;
    }
    min($arr);
    max($arr);
    echo $sum - min($arr);
    echo " ";
    echo $sum - max($arr);
//    echo  min($arr)." ".max($arr);
}
$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
