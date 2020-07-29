<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

$uniqueID = date('U');
$uID = $_SESSION['facer'];
$module = mysqli_real_escape_string($connect, $_POST['module']);
$name = mysqli_real_escape_string($connect, $_POST['name']);
$merchant = mysqli_real_escape_string($connect, $_POST['merchant']);
$pID = mysqli_real_escape_string($connect, fetchDataID($module, 'name', $name, 'store', fetchData('merchant', $merchant, 'store_name', 'email'), 'id'));
$coin = fetchDataID($module, 'name', $name, 'store', fetchData('merchant', $merchant, 'store_name', 'email'), 'coin');
$dateC = $_POST['date'];
$comment = mysqli_real_escape_string($connect, $_POST['comment']);

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

if(is_uploaded_file($_FILES['evidence']['tmp_name'])) {

$image = $_FILES['evidence']['tmp_name'];
$image_part = $_FILES['evidence']['name'];

$file = $uniqueID;
$ext = get_ext($image_part);

$evidence = $file.".".$ext;

$small_thumbnail_path = "./assets/evidence/";
$small_thumbnail = $small_thumbnail_path . $file.".".$ext;

$thumb1 = move_uploaded_file($image, $small_thumbnail);

}

$subject = "Reward coin";
$message = 'Hi Admin<br><br>
Please confirm the request below.<br><br>
<h3>Module: '.$module.'</h3><br>
<h3>Name: '.$name.' ('.$pID.')</h3><br>
<h3>Merchant: '.$merchant.'</h3><br>
<h3>Date Requested: '.$date.'</h3>';

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "insert into coin set uID = '$uID', pID = '$pID', module = '$module', name = '$name', merchant = '$merchant', evidence = '$evidence', date_completed = '$dateC', comment = '$comment', status = 'pending', coin = '$coin', date = '$date'");

send_mail('coin@faceflyer.com', $subject, $message, $from_email, 'Femi');

header('Location: coin?reward=1');
exit;

}else{

header('Location: ./?captcha=1');
exit;

}
