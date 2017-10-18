<?php
/**
 * Write a function that determines if a string is a palindrome
 * Recursive Solution Only
 */
function isPalindrome($str) {
    if(strlen($str) <= 1) return true;
    $first = $str[0];
    $last = substr($str, -1, 1);
    return $first == $last && isPalindrome(substr($str,1, strlen($str)-2));
}

printf("racecar: %s\n", isPalindrome('racecar'));
