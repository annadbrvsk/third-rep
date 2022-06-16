<?php
//Given an array of integers, find the one that appears an odd number of times.
//
//There will always be only one integer that appears an odd number of times.

function findIt(array $seq) : int
{
    $count = array_count_values($seq);
    foreach ($count as $key => $value){
        if ($value % 2) {
            return $key;
        }
    }
}