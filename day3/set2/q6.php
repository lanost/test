<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($color as $x => $x_value) {
    $color[$x]=strtoupper($x_value);
}

var_dump($color);
echo "<br>";
foreach ($color as $x => $x_value) {
    $color[$x]=strtolower($x_value);
}
var_dump($color);
/*Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red )
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )*/
