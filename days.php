<?php
//$today=new DateTime('today');
//echo $today->format('d-m-y');
//$today->modify('+4 days');
//echo $today->format('d-m-y');
$end = new DateTime('today');
$fifteendaysago = date_create('15 days ago');
$fifteen= date_format($fifteendaysago, 'Y-m-d');
$begin = new DateTime($fifteen);
//print_r($end);

$interval = new DateInterval('P1D');
$period = new DatePeriod($begin, $interval, $end);
echo "<pre>";
//print_r($period);
$arraydate=[];
foreach ($period as $dt) {
    $arraydate[$dt->format("Y-m-d ")]=$dt->format("l");
    echo "<pre>";
   // print_r($arraydate);
}


$today=new Datetime('yesterday');
//echo $yesterday->format('y-m-d');
$today->modify('+4 days');
echo $today->format('y-m-d');
?>