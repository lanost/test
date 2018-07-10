<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach($color as $x => $x_value) 
{
   $color[$x]=strtoupper($x_value);
}

var_dump($color);
echo "<br>";
foreach($color as $x => $x_value) 
{
   $color[$x]=strtolower($x_value);
}
var_dump($color);

?>
