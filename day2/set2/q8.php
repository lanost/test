<?php
function prime($num)
{
    $flag=1;
    for ($i=2; $i<=$num/2; $i++) {
        if (($num%$i)==0) {
            $flag=0;
        }
    }

    if ($flag==0) {
        echo "not prime";
    } else {
        echo "prime";
    }
}


prime(9);
/*Write a function to check a number is prime or not*/
