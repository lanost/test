<?php
function fact($num)
{
    $fac=1;
    for ($i=1; $i<=$num; $i++) {
        $fac=$fac*$i;
    }
    echo $fac;
}

fact(3);
/*7. Write a function to calculate the factorial of a number (non-negative integer). The function
accept the number as a argument.*/
