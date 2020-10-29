<?php
$Data= file_get_contents('php://input');
$num = json_decode($Data, true);
$fib = ($num['num']);
$f1=0;
$s2=1;
for($i = 0; $i< $fib; $i++)    //1+ 1 =2 ,1+2 =3, 2+3 =5 ,3+5 =8,8+5=13, 8+13=21 13+21= 34
{
$t3 = $f1 + $s2;
$output=["isFibbo" =>$t3];
$f1 = $s2;
$s2 = $t3;
echo json_encode($output);
  }
 ?>