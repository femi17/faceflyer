<?php
session_start();
require('../Connection/connect.php');

$date = date('Y-m-d');

$sql = mysqli_query($connect, "SELECT * FROM merchant");
$ns = mysqli_num_rows($sql);

for($c=0; $c<$ns; $c++){
$rs = mysqli_fetch_assoc($sql);

if($date == $rs['next_pay'] && $rs['auth_code'] == ""){

mysqli_query($connect, "update merchant set package = 'free', plan = 'free', next_pay = '' where id = '{$rs['id']}' && email = '{$rs['email']}'");

}else{

$qs = mysqli_query($connect, "SELECT * FROM merchant where next_pay = '{$rs['next_pay']}'");
$row = mysqli_fetch_assoc($qs);

if($row['plan'] == "basic"){
$amount =  299 * 100;
}elseif($row['plan'] == "premium"){
$amount =  599 * 100;
}

$monthly = "1 month";

$dater = $row['next_pay'];
$dater = strtotime(date("Y-m-d", strtotime($dater)) . " +".$monthly);
$dater = date("Y-m-d",$dater);

$result = array();
// Pass the customer's authorisation code, email and amount
$postdata =  array( 'authorization_code' => $row['auth_code'], 'email' => $row['email'], 'amount' => $amount);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.paystack.co/transaction/charge_authorization");
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
if($result){
if($result['data']){
if($result['data']['status'] == 'success'){

$price = $result['data']['amount'] / 100;

$sql = mysqli_query($connect, "update merchant set next_pay = '$dater' where id = '{$row['id']}' && email = '{$row['email']}'");

mysqli_query($connect, "insert into charge_back set email = '{$row['email']}', ref = '{$result['data']['reference']}', amount = '$price', date = '$date'");

}else{
echo "Transaction was not successful: Last gateway response was: ".$result['data']['gateway_response'];
}
}else{
echo $result['message'];
}

}else{
die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
}
}else{
die("Something went wrong while executing curl.");
}
}
}

?>
