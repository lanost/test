<?php
$cities=array("Itanagar","Dispur","Patna","Panaji","Raipur","Gandhinagar","Srinagar","Bangalore");

for($i=0;$i<count($cities);$i++)
{
echo $cities[$i];
if($i!==count($cities)-1)
{
echo ",";
}
}
echo "<br>";
array_push($cities,"Thiruvananthapuram", "Bhopal", "Mumbai", "Bangalore", "Raipur");
sort($cities);

for($i=0;$i<count($cities);$i++)
{
echo $cities[$i];
if($i!==count($cities)-1)
{
echo ",";
}
}
?>
