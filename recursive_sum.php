<?php
/**
 * Write a program that sum the values of an array. 
 * Use Recursion
 */

function summation($a, $n)
{
    if($n-1 == 0) return $a[$n-1];
    return $a[$n-1] + summation($a, $n-1);
}
$a = [1,2,3,4,5];
printf("Sum: %s\n", summation($a, count($a)));