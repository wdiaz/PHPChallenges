<?php
/**
 * Write a script that determines if a word is palindrome or not
 * Use Arrays
 */

$phrase = 'racecar';
$phraseArray = str_split($phrase);
$reversedArray = array_reverse($phraseArray);
$isPalindrome = false;
if($phraseArray == $reversedArray) {
    $isPalindrome = true;
}
printf("Phrase: %s is %s a palindrome\n", $phrase, (! $isPalindrome) ? 'NOT' : '');
