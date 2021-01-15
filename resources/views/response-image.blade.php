<?php

$link = $_POST["url"];
function curl($urltwitter){
    
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://35.247.182.190:3000/generateimagetext");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
            "url=$urltwitter");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
    
  
  }
  
  $curl = curl($link);
  
  // mengubah JSON menjadi array
  $data = json_decode($curl, TRUE);

http_response_code(200);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

echo(json_encode($data, TRUE));

exit;
?>