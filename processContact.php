<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$date = date('Y-m-d');
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

$subject = $_POST['subject'];
$message = '<b>Name: '.$name.'</b><br>
<b>Email: '.$email.'</b>
<b>Phone: '.$phone.'</b>
<b>Message: '.$msg.'</b>
<b>Date: '.$date.'</b>';

$from_email = 'no-reply@faceflyer.com';

send_mail('face@faceflyer.com', $subject, $message, $from_email, 'faceflyer');

header('Location: contact-us?sent=1');
exit;

}else{

header('Location: sign-up?captcha=1');
exit;

}
