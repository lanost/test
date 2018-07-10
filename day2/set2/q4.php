<?php
$url="http://www.w3resource.com/php-exercises/php-basic-exercises.php";

$pats = explode('/',$url);

echo "Scheme:".$pats[0]."<br>";

echo "host:".$pats[2]."<br>";

echo sizeof($pats);
for($i=3;$i<sizeof($pats);$i++)
{
$path=$path."/".(string)$pats[$i];
}

echo "path:".$path;
?>
