<?php
$date1 = date_create("17-03-2015 17:07:28"); 
$date2 = date_create("07/04/2015 09:00:00"); 

if($date1>$date2)
{
echo date_format($date1,"d-m-Y H:i:s");
}
else
{
echo date_format($date2,"d-m-Y H:i:s");
}

?>
