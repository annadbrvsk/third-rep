<?php
function beautifulDays($i, $j, $k)
{
    $count = 0;
    for ($a = $i; $a <= $j; $a++) {
        if (abs(intval(implode(array_reverse(str_split($a)))) - $a) % $k == 0){
            $count++;
        }
    }
    return $count;
}