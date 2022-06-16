<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here
    // найдем минимальное значение из массива 2
    $minB = min($b);
    // пойдем циклом от единицы до минимального значения в массиве 2
    $count = 0;
    foreach (range(1, $minB) as $value) {
        // внутри цикла будем проверять делится ли это число на все элементы из массива 1
        $flag = true;
        foreach ($a as $divider) {
            if ($value % $divider != 0) {
                $flag = false;
                break;
            }
        }
        // если делится, то записываем его во временный массив
        if ($flag == true) {
//            $c[] = $value; // добавляет элемент массива следующей цифрой
            $newFlag = true;
            foreach ($b as $bValue) { // идем циклом по массиву 2
                // проверяем, что числа из временного массива делят числа из массива 2
                if ($bValue % $value != 0) {
                    $newFlag = false;
                    break;
                }
            }
            if ($newFlag == true) {
                $count++;
            }
        }
        // счетчиком возвращаем количество таких чисел
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
