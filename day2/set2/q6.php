<?php

function tri($num)
{
echo ($num>30)
?"greater than 30"
:($num>20
?"greater than 20<br>"
:($num>10
?"greater than 10<br>"
:"less than all"));
}


tri(15);

?>
