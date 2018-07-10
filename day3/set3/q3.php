<?php
$date=date_create("15-07-2015 09:30:00");
date_modify($date,"+1 weeks");
echo date_format($date,"Y-m-d H:i:s");
echo "<br>";
date_modify($date,"+1 months");
echo date_format($date,"Y-m-d H:i:s");
echo "<br>";
date_modify($date,"+1 years");
echo date_format($date,"Y-m-d H:i:s");

echo "<br>";
date_modify($date,"+10 days");
echo date_format($date,"m/d/Y");

echo "<br>";
date_modify($date,"-3 days");
echo date_format($date,"d-m-Y");

echo "<br>";
date_modify($date,"-1 months");
echo date_format($date,"Y-m-d H:i:s");
?>
