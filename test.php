<?php
/*$data = file_get_contents("products.json");
$data = json_decode($data, true);
$reqData = file_get_contents('php://input');
$jsonData = json_decode($reqData, true);
$filterData = [];
$responseData = [];
$max_value = max($json["products"]);
foreach ($data as $datavalue) {
    if ($jsonData['type'] == $datavalue['type']||) {
        $filterData[] = $datavalue;
    }
}

if (!empty($filterData)) {
    $responseData = array("status" => "true", "data" => $filterData);

} else {
    $responseData = array("status" => "false", "data" => $filterData);
}
echo json_encode($responseData);
*/
$data = file_get_contents("products.json");
$data = json_decode($data, true);
$jsondata=file_get_contents('php://input');
$input=json_decode($jsondata,true);
//$input=[ "type"=>"dairy"];
$srchKey=key($input);
next($input);
$srchKey2=key($input);
//$filters=["title","type","description","productId","height","width","price","rating"];
$outputData=[];
//echo "<pre>";print_r($data); echo"</pre>";
foreach($data as $key=>$val){
    if($val[$srchKey]==$input[$srchKey] && $val[$srchKey2]==$input[$srchKey2]){
        $outputData[]=$val;
    }
}
echo json_encode($outputData);
?>
