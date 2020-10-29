<?php

/**
 * @author Jay
 * @desc - Initial load file to initiate the MVC Pattern
 */

//Get the input from the user
//API -> Read Raw JSON data 
$rawJSONGET = file_get_contents('php://input');
//Convert into PHP Array
$jsonData = json_decode($rawJSONGET, true);


//Convert into PHP DateTime
$userDOB = new DateTime($jsonData['dob']);
$currentDate = new DateTime();

$age = $currentDate->format('Y') - $userDOB->format('Y');
$returnAry = ['age' => $age,'status' => 'Success' 'gender'=>'$gender'];

echo json_encode($returnAry);
?>