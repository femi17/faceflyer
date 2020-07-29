<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

$unique = md5(date('U'));
$email = mysqli_real_escape_string($connect, $_POST['email']);
$pass = mysqli_real_escape_string($connect, $_POST['password']);
$hpass = md5($_POST['password']);
$store = mysqli_real_escape_string($connect, $_POST['store']);
$date = date('Y-m-d');
$token = $_POST['token'];
$action = $_POST['action'];

if(!$store || !$email || !$pass){
header('Location: sign-up?fields=1');
exit;
}

// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

// verify the response
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {

$qs = mysqli_query($connect, "select * from merchant where email = '$email' || store_name = '$store'");
if(mysqli_num_rows($qs) > 0){
header('Location: sign-up?name='.$store.'&email='.$email);
exit;
}

$subject = "Confirm your email address";
$message = 'Welcome to Faceflyer<br><br>
Please confirm your email address by clicking the button below.<br><br>
<center>
<a rel="nofollow" style="text-decoration:none" class="yiv4360069400ln-button" target="_blank" href="https://www.faceflyer.com/partner-with-us/verify-email?token='.$unique.'">Confirm email address</a>
</center><br><br>
Why? We need to be sure this is really you.';

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "insert into merchant set token = '$unique', store_name = '$store', email = '$email', password = '$hpass', status = 'pending', package = 'free', date = '$date'");

mysqli_query($connect, "insert into verify set token = '$unique'");

send_mail($email, $subject, $message, $from_email, $store);

header('Location: verify-email');
exit;

}else{

header('Location: sign-up?captcha=1');
exit;

}
