<?php
$Data= file_get_contents('php://input');
$cnt = json_decode($Data, true);

function group_by($key, $arrRoom) {
    $result = array();

    foreach($arrRoom as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}

$output=[];

foreach($arrRoom as $room)
{    
  $output[ $room['RoomCode']][] =$room
}
echo '<pre>';
print_r ($output );
echo '</pre>';
?>