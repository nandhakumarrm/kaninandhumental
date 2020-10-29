
<?php

$Data=file_get_contents('php://input');
$num=json_decode($Data,true);
$fib=($num['num']);
$a=0;
$b=1;
for($i=0; $i <=$fib ; $i++)
	{
    $c=$a+$b;
    $output=["isFibbo"=>$c];
    $a=$b;
    $b=$c;
	if($fib===0)
    $arr=json_encode($output);
    echo($arr);   
}
?>