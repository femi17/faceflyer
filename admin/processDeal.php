<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

$email = fetchData('merchant', $_POST['merchant'], 'store_name', 'email');
$name = mysqli_real_escape_string($connect, $_POST['name']);
$start = mysqli_real_escape_string($connect, $_POST['start_date']);
$end = mysqli_real_escape_string($connect, $_POST['end_date']);
$headline = mysqli_real_escape_string($connect, $_POST['headline']);
$category = mysqli_real_escape_string($connect, $_POST['category']);
$desc = mysqli_real_escape_string($connect, $_POST['description']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$coin = mysqli_real_escape_string($connect, $_POST['coin']);
$id = mysqli_real_escape_string($connect, $_POST['id']);

$date = date('Y-m-d g:ia');
$token = $_POST['token'];
$action = $_POST['action'];

if(fetchData('merchant', $_POST['merchant'], 'store_name', 'plan') == "basic"){
$post = 20;
}

$qs = mysqli_query($connect, "select * from monitor where store = '$email'");
$rs = mysqli_fetch_assoc($qs);

if(mysqli_num_rows($qs) > 0){
if($post == $rs['count']){
header('Location: add-deal?upgrade=1');
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

if($id){}else{
if(fetchData('merchant', $_POST['merchant'], 'store_name', 'plan') == "basic"){
if(mysqli_num_rows($qs) > 0){
mysqli_query($connect, "update monitor set count = count+1 where store = '$email'");
}else{
mysqli_query($connect, "insert into monitor set store = '$email', count = count+1");
}
}
}

if($id){
mysqli_query($connect, "update deals set name = '$name', start_date = '$start', end_date = '$end', headline = '$headline', category = '$category', description = '$desc', price = '$price', coin = '$coin', status = 'approved', date = '$date' where id = '$id'");
}else{
mysqli_query($connect, "insert into deals set store = '$email', name = '$name', start_date = '$start', end_date = '$end', headline = '$headline', category = '$category', description = '$desc', price = '$price', coin = '$coin', status = 'approved', date = '$date'");
}

header('Location: add-deal?add=1');
exit;
}else{

header('Location: add-deal?captcha=1');
exit;

}
