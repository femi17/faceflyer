<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6Ld8h60ZAAAAAE4MTmxiOZql2m5eg67KvsEZO-Jc');

$email = mysqli_real_escape_string($connect, $_POST['email']);
$hpass = md5($_POST['password']);
$otp = $_POST['otp'];
$token = $_POST['token'];
$action = $_POST['action'];

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

$query = mysqli_query($connect, "select * from users where email = '$email' && otp = '$otp'");
$foundUser = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);

if($foundUser > 0){

$_SESSION['facer'] = $row['email'];

mysqli_query($connect, "update users set password = '$hpass', otp = '' where email = '$email'");

header('Location: home');
exit;
}else{

header('Location: ./?error='.$email);
exit;
}
}else{

header('Location: reset-password?captcha=1');
exit;

}
