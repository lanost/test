<?php
$date = date('Y-m-d H:i:s');
echo "IST:".$date;
echo "<br>";
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s');
echo "Europe/London:".$date;
echo "<br>";
date_default_timezone_set('UTC');
$date = date('Y-m-d H:i:s');
echo "UTC:".$date;
echo "<br>";
date_default_timezone_set('America/Chicago');
$date = date('Y-m-d H:i:s');
echo "America/Chicago:".$date;
echo "<br>";
/*Get the current time and print them in 'Y-m-d H:i:s' format for all the below timezones
IST
Europe/London (BST)
UTC
America/Chicago*/
