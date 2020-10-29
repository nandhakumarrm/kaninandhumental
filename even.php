<?php
$Data= file_get_contents('php://input');
$cnt = json_decode($Data, true);
$count=($cnt['cn']);

$arry = [];
for($x = 1; $x <=$count ; $x++){
 $arry[] = ['cnt' => $x];
}
 $final=json_encode($arry);
 echo $final;
?>
  