<?php
/**
 * Write a scrip sums the values of an array in a binary mode
 */

function bsum($data, $start, $stop)
{
    if($start >= $stop) return 0;
    if($start == $stop-1) return $data[$start];
    $middle = ($start + $stop) / 2;
    $middle = floor($middle);
    return bsum($data, $start, $middle) + bsum($data, $middle, $stop);
}

printf("Sum: %s\n", bsum([1,2,3], 0, 3));