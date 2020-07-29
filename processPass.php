<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

$current = mysqli_real_escape_string($connect, md5($_POST['current']));
$new = mysqli_real_escape_string($connect, md5($_POST['new']));

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

$qs = mysqli_query($connect, "select * from users where uID = '".$_SESSION['facer']."' && password = '$current'");

if(mysqli_num_rows($qs) > 0){

mysqli_query($connect, "update users where set password = '$new' where uID = '".$_SESSION['facer']."'");

header('Location: settings?pass=1');
exit;
}else{

header('Location: settings?error=1');
exit;
}
}else{

header('Location: sign-in?captcha=1');
exit;

}
