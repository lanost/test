<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($a);
var_dump($a);

echo "<br>";
ksort($a);
var_dump($a);

echo "<br>";
arsort($a);
var_dump($a);

echo "<br>";
krsort($a);
var_dump($a);
?>
