<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_GET['hub_verify_token'])){
  if($_GET['hub_verify_token'] === 'my_verify_token'){
    echo $_GET['hub_challenge'];
    return true;
  } 
  else{
    echo 'Invalid Verify Token';
    return false;
  }
}
$input = json_decode(file_get_contents('php://input'), true);
 
if(isset($input['entry'][0]['messaging'][0]['sender']['id'])){
 
  $sender = $input['entry'][0]['messaging'][0]['sender']['id'];
  $message = $input['entry'][0]['messaging'][0]['message']['text'];
 
  $url = 'https://graph.facebook.com/v2.16/me/messages?access_token=EAAM6OJjbpLsBAIcBfBY2EZAK645crvR3X1snnKZBHBCJdZB8GnZC8j8uTUfjZCdIwFiAdieNtdZB74IdC7jI9XD2J6cjzgrZCFcqpRlWZAQxPtGj8Uf5dXZBy2EwcJl6clWn9tZAZBDriZCZCIhc2cW1ZAcwhGuSEQr0ABwFPiGNnRb5RpESU5MZBpIZB10M';
 
  $ch = curl_init($url);
 
  $jsonData = '{
      "recipient":{
      "id":"' . $sender . '"
    },';
 
  $message_chuan_hoa = mb_strtolower($message);
 
  if(strpos($message_chuan_hoa, 'xin chào') !== false || strpos($message_chuan_hoa, 'chào') !== false ){
    $jsonData.= '"message":{
        "text":"Chào anh!"
      }
    }';
  }
 
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
   
  if(!empty($message)){
    $result = curl_exec($ch);
  }
}
if(strpos($message_chuan_hoa, 'đang làm gì') !== false ){
    $jsonData.= '"message":{
        "text":"EM không biết! anh đoán đi :p!"
      }  F
    }';
  }
  if(strpos($message_chuan_hoa, 'phim') !== false ){
    $jsonData.= '"message":{
        "text":"Phim gì?"
      }
    }';
  }
