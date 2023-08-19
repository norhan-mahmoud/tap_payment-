<?php 

$data['amount']=1;
$data['currency']='USD';
$data['customer']['first_name']="nourhan";
$data['customer']['email']="nourhan@gmail.com";
$data['customer']['phone']['country_code']=20;
$data['customer']['phone']['number']=1100000000;
$data['source']['id']="src_card";
$data['redirect']['url']='http://localhost/test_tap';
$headers= [
    'Content-Type: application/json',
    'Authorization: Bearer sk_test_###############' ,
];
$ch = curl_init();
$url='https://api.tap.company/v2/charges';
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$out = curl_exec($ch);
curl_close($ch);
$response = json_decode($out);
 
header("Location:".$response->transaction->url, true, 301);



?>