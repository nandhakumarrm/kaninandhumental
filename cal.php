<?php
$inData= file_get_contents('php://input');
$num = json_decode($inData, true);
$isOddOREven = ($num['num'] % 2 === 0);

$output = ["isOE" => (bool)$isOddOREven];

echo json_encode($output);
?>