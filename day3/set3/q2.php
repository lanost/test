<?php

$date=date_create("17-07-2015 17:07:28");

echo date_format($date,"Y-m-d H:i:s");
echo "<br>";
echo date_format($date,"H/i/s");
echo "<br>";
echo date_format($date,"H/i A");
echo "<br>";
echo date_format($date,"H:i A");
echo " on ";
echo date_format($date,"l jS  F Y");
?>
