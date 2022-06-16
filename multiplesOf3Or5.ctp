<?php
function solution($number){
    $multiples = 0;
    for ($i = 3; $i < $number; $i++){
        if ($i % 3 == 0 || $i % 5 == 0){
            $multiples = $multiples + $i;
        }
    }
    return $multiples;
}