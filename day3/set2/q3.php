<?php
$color = array('white', 'green', 'red', 'blue', 'black');

for($i=array_search("red",$color);$i<count($color);$i++)
{
$color[$i]=$color[$i+1];
}

array_pop($color);

for($i=0;$i<count($color);$i++)
{
echo $color[$i]."<br>";

}
?>
