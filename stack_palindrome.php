<?php

/**
 * Write a script that determines if a script is palindrome or not
 * Use Stack (LIFO) structure
 */

$stack = new SplStack();

$phrase = 'racecar';
$length = strlen($phrase);
for($i=0; $i < $length; $i++) {
    $stack->add($i, $phrase[$i]);
}

$counter = -1;
// Assuming phrase is a palindrome
$isPalindrome = true;

/**
 * Implementing loop as iterator. 
 * it also also be implemented as pop( or shift ....)
 */
$stack->rewind();
while($stack->valid()) {
    $letterFromPhrase = $phrase[++$counter];
    $letterFromStack = $stack->current();
    if($letterFromPhrase != $letterFromStack) {
        $isPalindrome = false;
        break;
    }
    $stack->next();
}

printf("Phrase: %s is %s a palindrome\n", $phrase, (! $isPalindrome) ? 'NOT' : '');