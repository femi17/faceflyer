<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

$uniqueID = date('U');
$name = mysqli_real_escape_string($connect, $_POST['name']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$desc = mysqli_real_escape_string($connect, $_POST['description']);
$details = mysqli_real_escape_string($connect, $_POST['content']);
$loc = mysqli_real_escape_string($connect, $_POST['location']);
// $id = mysqli_real_escape_string($connect, $_POST['id']);
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

if(is_uploaded_file($_FILES['banner']['tmp_name'])) {

$image = $_FILES['banner']['tmp_name'];
$image_part = $_FILES['banner']['name'];

$file = $uniqueID;
$ext = get_ext($image_part);

$banner = $file.".".$ext;

$small_thumbnail_path = "../assets/images/";
$small_thumbnail = $small_thumbnail_path . $file.".".$ext;

// unlink($small_thumbnail_path.fetchData('reward', $id, 'id', 'banner'));

$thumb1 = move_uploaded_file($image, $small_thumbnail);

// if($id){
//
// mysqli_query($connect, "update re set banner = '$banner' where id = '$id'");
//
// }
}

mysqli_query($connect, "insert into reward set name = '$name', price = '$price',  description = '$desc', details = '$details', location = '$loc', banner = '$banner'");

header('Location: reward?add=1');
exit;
}else{

header('Location: reward?captcha=1');
exit;

}
