<?php
$start = new DateTime('2018-07-02');
$end = new DateTime('2018-07-09');
$end->modify('+1 day');
$interval=date_diff($start,$end);
$days = $interval->days;
$period = new DatePeriod($start, new DateInterval('P1D'), $end);
$holidays = array('2018-07-01');
foreach($period as $dt) {
    $curr = $dt->format('D');    
    if ($curr == 'Sat' || $curr == 'Sun') {
        $days--;
    }   
    elseif (in_array($dt->format('Y-m-d'), $holidays)) {
        $days--;
    }
}
echo $days; 
?>
