<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

$num1 = mysqli_real_escape_string($connect, $_POST['num1']);
$num2 = mysqli_real_escape_string($connect, $_POST['num2']);
$num3 = mysqli_real_escape_string($connect, $_POST['num3']);
$num4 = mysqli_real_escape_string($connect, $_POST['num4']);

$otp = $num1.$num2.$num3.$num4;

$query= mysqli_query($connect, "select otp, email from users where otp = '$otp'");
$foundUser = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);

if($foundUser > 0){

header('Location: reset-password?p='.base64_encode($row['email']).'&rt='.base64_encode($otp));
exit;
}else{
header('Location: forgot-password?error=1');
exit;
}

?>
