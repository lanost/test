<?php
function palin($word)
{
$rev=strrev($word);
if(strcmp($word,$rev)==0)
{
echo "palindrome";
}
else
{
echo "not palindrome";
}
}



palin(dad);
?>
