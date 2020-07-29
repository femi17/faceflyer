<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');
define("RECAPTCHA_V3_SECRET_KEY", '6LcNS7AZAAAAAH8jx9ciYgzjMJpGRj_ifwP4nNPR');

$store = mysqli_real_escape_string($connect, $_POST['store_name']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$location = mysqli_real_escape_string($connect, $_POST['location']);

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

if(is_uploaded_file($_FILES['logo']['tmp_name'])) {

$image = $_FILES['logo']['tmp_name'];
$image_part = $_FILES['logo']['name'];

$data = getimagesize($image);
$width = $data[0];
$height = $data[1];

$file = merchantSignin($_SESSION['faceMerchant'], 'store_name');
$ext = get_ext($image_part);

$logo = $file.".".$ext;

$small_thumbnail_path = "../assets/images/";
$small_thumbnail = $small_thumbnail_path . $file.".".$ext;

if($width < 96 || $height < 96){
header('Location: settings?size=1');
exit;
}

unlink($small_thumbnail_path.merchantSignin($_SESSION['faceMerchant'], 'logo'));

$thumb1 = move_uploaded_file($image, $small_thumbnail);

mysqli_query($connect, "update merchant set logo = '$logo' where email = '".merchantSignin($_SESSION['faceMerchant'], 'email')."'");

}

mysqli_query($connect, "update merchant set store_name = '$store', phone = '$phone', location = '$location' where email = '".merchantSignin($_SESSION['faceMerchant'], 'email')."'");

header('Location: settings?profile=1');
exit;
}else{

header('Location: settings?captcha=1');
exit;

}
