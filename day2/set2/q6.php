<?php
function Tri($num)
{
    echo ($num>30)
    ?"greater than 30"
    :($num>20
    ?"greater than 20<br>"
    :($num>10
    ?"greater than 10<br>"
    :"less than all"));
}
Tri(15);
/*Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary
operator*/
