<?php
$data = file_get_contents("products.json");
$data = json_decode($data, true);
$reqData = file_get_contents('php://input');
$jsonData = json_decode($reqData, true);
$filterData = [];
$responseData =[];
$type=[];
$expected=array_filter($data,function($var) use ($type){
    return ($var['']==$type);
});
echo json_encode($expected);
?>