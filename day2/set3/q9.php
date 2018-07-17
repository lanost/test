<?php
$string1="football";
$string2="footboll";

$pos = strspn($string1 ^ $string2, "\0");
echo "First difference at position".$pos.":\"".$string1[$pos]."\"v/s\"".$string2[$pos]."\"";
/*Write a PHP script to find first character that is different between two strings.
String1 : 'football'

String2 : 'footboll'
Expected Result : First difference between two strings at position 5: "a" vs "o"*/
