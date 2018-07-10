<?php
function lp(int $yr)
{
 if($yr==" ")
 {
     echo "Script Usage:
php Script1.php {date}
date - Year you want to check";
 }
else if( (0 == $yr % 4) and (0 != $yr % 100) or (0 == $yr % 400) )
{
echo "leap year";
}
else
{
echo "not leap year";
}



}
