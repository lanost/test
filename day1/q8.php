<?php
$input = array('PHP', 'is', 'a', 'widely-used', 'open', 'source', 'general-purpose', 'scripting', 'language');
foreach ($input as $value)
{
$string=$string.$value." ";
}
echo $string;
echo "<br>";

echo str_replace(" ","-",$string);
echo "<br>";
echo str_replace("-"," ",$string);
?>
