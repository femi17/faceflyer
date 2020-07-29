<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

if(!$_SESSION['faceMerchant']){
header('Location: ./');
exit;
}

$uniqueID = date('U');
$email = merchantSignin($_SESSION['faceMerchant'], 'email');
$name = mysqli_real_escape_string($connect, $_POST['name']);
$spend = mysqli_real_escape_string($connect, $_POST['spend']);
$desc = mysqli_real_escape_string($connect, $_POST['content']);
$id = mysqli_real_escape_string($connect, $_POST['id']);

$date = date('Y-m-d g:ia');
$token = $_POST['token'];
$action = $_POST['action'];

if($_SESSION['plan'] == "basic"){
$post = 20;
}

$qs = mysqli_query($connect, "select * from monitor where store = '$email'");
$rs = mysqli_fetch_assoc($qs);

if(mysqli_num_rows($qs) > 0){
if($post == $rs['count']){
header('Location: add-cashback?upgrade=1');
exit;
}
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

if(is_uploaded_file($_FILES['banner']['tmp_name'])) {

$image = $_FILES['banner']['tmp_name'];
$image_part = $_FILES['banner']['name'];

$file = $uniqueID;
$ext = get_ext($image_part);

$banner = $file.".".$ext;

$small_thumbnail_path = "../assets/images/";
$small_thumbnail = $small_thumbnail_path . $file.".".$ext;

unlink($small_thumbnail_path.fetchData('cashback', $id, 'id', 'banner'));

$thumb1 = move_uploaded_file($image, $small_thumbnail);

if($id){

mysqli_query($connect, "update cashback set banner = '$banner' where id = '$id'");

}
}

if($id){

}else{
if($_SESSION['plan'] == "basic"){
if(mysqli_num_rows($qs) > 0){
mysqli_query($connect, "update monitor set count = count+1 where store = '$email'");
}else{
mysqli_query($connect, "insert into monitor set store = '$email', count = count+1");
}
}
}

if($id){
mysqli_query($connect, "update cashback set name = '$name', spend = '$spend', description = '$desc', status = 'pending', date = '$date' where id = '$id'");
}else{
mysqli_query($connect, "insert into cashback set store = '$email', name = '$name', spend = '$spend', description = '$desc', status = 'pending', date = '$date', banner = '$banner'");
}

header('Location: add-cashback?add=1');
exit;
}else{

header('Location: add-cashback?captcha=1');
exit;

}
