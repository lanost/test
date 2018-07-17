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
/*Write a PHP script to sort the following associative array
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key*/
