<?php
/*0$rawJSONGET = file_get_contents('php://input');
//Convert into PHP Array
$jsonData = json_decode($rawJSONGET, true);

//Convert into PHP DateTime
$startDate = new DateTime($jsonData['date']);
$endDate = new DateTime();
 $resultDays = ['Monday' => 0, 'Tuesday' => 0, 'Wednesday' => 0, 'Thursday' => 0, 'Friday' => 0, 'Saturday' => 0, 'Sunday' => 0];
 while($startDate <= $endDate ){
	 $timestamp = strtotime($startDate->format('d-m-Y')); 
  $weekDay = date('l', $timestamp); 
        $resultDays[$weekDay] = $resultDays[$weekDay] + 1;
		  $startDate->modify('+1 day'); 
    } 
	
   echo json_encode($resultDays);
0.*/
$date_from=('2019-10-16');
$date_from=strtotime($date_from);
$date_to=('2019-11-16');
$date_to=strtotime($date_to);
$finalData=[];
for ($i=$date_from; $i<= $date_to ; $i+=86400) {
   $finalData[date("y-m-d",$i)]=date('l',$i);
    //$date1=[date("y-m-d",$i)]; 
    //$date2=([date('l',$i)]);
    //echo "<pre>";
    //print_r(array_merge($date1,$date2));
	print_r (json_encode($finalData));
	}
?>