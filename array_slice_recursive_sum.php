<?php
/*
 * Write a program that sums the values of an array.
 * Do not pass sub indices or indices. Use array_slice or array_splice
 */

function summation($array)
{
    if(empty($array)) return 0;
    $value = $array[0];
    array_splice($array, 0 ,1);
    return $value + summation($array);
}
printf("Sum: %s\n", summation([1,2,3,4,5]));