<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$ref = $_GET['reference'];
$date = date('Y-m-d');
$email = merchantSignin($_SESSION['faceMerchant'], 'email');

$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/' . rawurlencode($ref);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
$ch, CURLOPT_HTTPHEADER, [
'Authorization: Bearer sk_test_1eb21d21f2343674435b21c5e86ab8c4a40ac9bf']
);
$request = curl_exec($ch);
curl_close($ch);

if ($request) {
$result = json_decode($request, true);
if($result){
if($result['data']){
if($result['data']['status'] == 'success'){

$amount = $result['data']['amount'] / 100;
$e_date =  date('Y-m-d', strtotime("1 month"));

mysqli_query($connect, "insert into payment set email = '$email', amount = '$amount', ref = '$ref', date = '$date'");

mysqli_query($connect, "update merchant set package = 'subscribed', plan = '{$_SESSION['facePlan']}', next_pay = '$e_date', auth_code = '{$result['data']['authorization']['authorization_code']}' where email = '$email'");

$subject = "Upgrade Successful";
$message = 'Hi '.merchantSignin($_SESSION['faceMerchant'], 'store_name').'<br><br>
You subscription to the '.$_SESSION['facePlan'].' was successful.<br><br>
You can begin to enjoy and explore more on faceflyer';

$from_email = 'no-reply@faceflyer.com';

send_mail($email, $subject, $message, $from_email, merchantSignin($_SESSION['faceMerchant'], 'store_name'));

$_SESSION['package'] = "subscribed";
$_SESSION['plan'] = $_SESSION['facePlan'];
unset($_SESSION['facePlan']);

header('Location: dashboard?plan=1');
exit;

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
