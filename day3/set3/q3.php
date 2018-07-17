<?php
$date=date_create("15-07-2015 09:30:00");
date_modify($date, "+1 weeks");
echo date_format($date, "Y-m-d H:i:s");
echo "<br>";
date_modify($date, "+1 months");
echo date_format($date, "Y-m-d H:i:s");
echo "<br>";
date_modify($date, "+1 years");
echo date_format($date, "Y-m-d H:i:s");

echo "<br>";
date_modify($date, "+10 days");
echo date_format($date, "m/d/Y");

echo "<br>";
date_modify($date, "-3 days");
echo date_format($date, "d-m-Y");

echo "<br>";
date_modify($date, "-1 months");
echo date_format($date, "Y-m-d H:i:s");
/*$input = '15-07-2015 09:30:00';
Use DateTime
Print the time exactly one week after the above date and print it in the format 'Y-m-d H:i:s'
Print the time exactly one month after the above date and print it in the format 'Y-m-d H:i:s'
Print the time exactly one year after the above date and print it in the format 'Y-m-d H:i:s'
(Make use of "modify" function of DateTime)
Add 10 days to the above date and print it in the format 'm/d/Y'
(Make use of DateInterval)
Subtract 3 days to the above date and print it in the format 'd-m-Y'
Print the time one month before the above date and print it in the format 'Y-m-d H:i:s'*/
