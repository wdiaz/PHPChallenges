<?php
/**
 * Write a script that sums the values of an array.
 * Use array_pop or array_shift and argue why you used such function
 */

function summation($array)
{
    if(empty($array)) return 0;
    
    /**
     * array_pop is more efficient as it will pop the last value in the array.(Largest subindex)
     * This means that no re indexing will be required
     */
    $value = array_pop($array);
    return $value + summation($array);
}
printf("Sum: %s\n", summation([1,2,3,4,5]));