<?php
//array_search
$a1=array("a"=>"sony","b"=>"iphone","c"=>"samsung","c"=>"MI");
//print_r (array_search("iphone",$a1,true));
//array_shift
$a2=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"MI");
//echo array_shift($a2);
//print_r ($a);
//array_reverse
$a3=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"MI");
//print_r (array_reverse($a3));

//array_slice
$a4=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"MI");
//print_r(array_slice($a4,1,2,true));


//array_splice
$a=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"MI");
$a=array("a"=>"realme","b"=>"readme");
//print_r(array_splice($a5,0,4,$a6));
$a5=array("0"=>"sony","1"=>"iphone");
$a6=array("0"=>"realme","1"=>"readme");
array_splice($a5,1,0,$a6);
//print_r($a5);
//array_sum
$a7=[15,36,89];
//echo array_sum($a7);
$a8=array("a"=>26.2,"b"=>8.7,"c"=>0.9);
//echo array_sum($a8);

//array_unique
$a9=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"sony");
//print_r(array_unique($a9));

// array_unshift
$a10=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"boatrockers");
array_unshift($a10,"blue");
//print_r($a10);
//array_values
$a11=array("a"=>"sony","b"=>"iphone","c"=>"samsung","D"=>"boatrockers");
//print_r(array_values($a11));

//in_array
$a12=array("sony","iphone","samsung","boatrockers");

if(in_array("samsung",$a12))
{
	echo "match";
}
else
{
	echo "not match";
}


?>