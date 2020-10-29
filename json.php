<?php
//associtive array
$age = array("kani"=>23, "jagan"=>25, "Jothi"=>56 ,"vijay"=>28);
echo json_encode($age);
//index array
$mobileName =array("apple iphone","sony","samsung");
echo"<pre>";
echo json_encode($mobileName);
echo"</pre>";

//json_decode function 
$age = '{"kani":23,"jagan":25,"Jothi":56,"vijay":28}';
var_dump(json_decode($age ,true));

// decoded values PHP object
$name = '{"kani":23,"jagan":24,"Jothi":56,"vijay":28}';
 
 $obj=json_decode($name);
 echo"<pre>";
 echo $obj->kani;
 echo $obj->jagan;
 echo $obj->Jothi;
 echo $obj->vijay;
 echo"</pre>";
 
 //associtive array
 $name = '{"kani":23,"jagan":24,"Jothi":56,"vijay":28}';
 
 $obj=json_decode($name,true);
 echo $obj["kani"];
 echo $obj["jagan"];
 echo $obj["Jothi"];
 echo $obj["vijay"];
// looping through object array

$name = '{"kani":23,"jagan":24,"Jothi":56,"vijay":28}';
 
 $obj=json_decode($name);
 foreach($obj as $key=>$value)
 {
	 echo $key . " => " . $value ."<br>";
 }
 // looping through associtive array
 $name = '{"kani":23,"jagan":24,"Jothi":56,"vijay":28}';
 
 $obj=json_decode($name);
 foreach($obj as $key=>$value)
 {
	 echo $key . " => " . $value ."<br>";
 }
?>