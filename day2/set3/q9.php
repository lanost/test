<?php
$string1="football";
$string2="footboll";

$pos = strspn($string1 ^ $string2, "\0");
echo "First difference at position".$pos.":\"".$string1[$pos]."\"v/s\"".$string2[$pos]."\"";
?>
