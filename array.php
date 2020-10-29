<?php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);
print_r($result);

//count
$a[0]=10;
$a[1]=60;
$a[2]=70;
$a[3]=100;
var_dump(count($a));
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

var_dump(count(null));
  //Recursive count
  $test=array('computer'=>array('mouse','board','usbdrive'), 
              'mobile'=> array('display','headphone','battery'));
			  echo count($test, COUNT_RECURSIVE);
			  
			  
		//reset	  
$array=['one','two','three'];
echo current($array);
next($array);
next($array);
echo current($array);
reset($array);
echo current($array);
//each
$food = array("bob", "fred", "jussi", "jouni", "egon", "marliese<br>"rating": 4");
$bar = each($food);
print_r($bar);
//
$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar = each($foo);
print_r($bar);
?>