<?php
function palin($word)
{
    $word1 = str_replace(' ', '', $word);
    $rev=strrev($word1);
    if (strcmp($word1, $rev)==0) {
        echo "palindrome";
    } else {
        echo "not palindrome";
    }
}



palin("nurses run");
/*9. Write a PHP function that checks whether a passed string is palindrome or not?
A palindrome is word, phrase, or sequence that reads the same backward as forward, e.g.,
madam or nurses run.*/
