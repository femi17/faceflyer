<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$email =  merchantSignin($_SESSION['faceMerchant'], 'email');
if($_SESSION['facePlan'] == "basic"){
$amount =  299 * 100;
}elseif($_SESSION['facePlan'] == "premium"){
$amount =  599 * 100;
}
$callback_url = 'http://faceflyer.com/partner-with-us/callback.php';

$result = array();
//Set other parameters as keys in the $postdata array
$postdata =  array('email' => $email, 'amount' => $amount, 'callback_url' => $callback_url);
$url = "https://api.paystack.co/transaction/initialize";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
'Authorization: Bearer sk_test_1eb21d21f2343674435b21c5e86ab8c4a40ac9bf',
'Content-Type: application/json',

];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec ($ch);

curl_close ($ch);

if ($request) {
$result = json_decode($request, true);

header('Location:'.$result['data']['authorization_url']);
exit;
}

?>
