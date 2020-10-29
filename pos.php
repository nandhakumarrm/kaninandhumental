<?php
//$getData = file_get_contents('php://input');
//$input = json_decode($getData, true);
//$winter = new DateTime('2010-12-21', new DateTimeZone('America/New_York'));
//$summer = new DateTime('2008-06-21', new DateTimeZone('America/New_York'));

//echo $winter->getOffset() . "\n";
//echo $summer->getOffset() . "\n";
//$date = new DateTime();
//echo $date->getTimestamp();
//$date = date_create();
//echo date_timestamp_get($date);
/*
echo strtotime("now"), "<br>";
echo strtotime("10 September 2020"), "<br>";
echo strtotime("+1 day"), "<br>";
echo strtotime("+1 week"), "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
echo strtotime("next Thursday"), "<br>";
echo strtotime("last Monday"), "<br>";
*/
//echo date('Y-M-D',time());
date_default_timezone_set('America/New_York');
echo date('Y-m-d \a\t h:i',time());
?>