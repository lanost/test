<?php
$string="the quick brown fox jumps over the lazy dog.";

echo substr_replace($string, "That", 0, 3);
/*Write a PHP script to replace the first 'the' of the following string with 'That'.
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog.
*/
