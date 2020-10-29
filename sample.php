<?php

$result=['nandhu'];
$array=[];
$array['status']="success";
$array['date']=date("Y-m-d");
$array['diff'] = date_diff(date_create($dateOfBirth), date_create($today));
$array['data']=$result;
echo json_encode($array);
?>
/*
$counter = 0;
$first = 1;
$second = 1;
echo $first."<br/>";
echo $second."<br/>";
while ($counter < 500) {
  $next = $first + $second;
  echo $next."<br/>";
  $counter++;
  $second=$first;
  $first=$next;
}
/*
$fibarray[2] = $fibarray[0] + $fibarray[1];
for ( $i=2; $i<=10; ++$i ) {
 $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
}
echo json_encode($fibarray);
*/
?> 