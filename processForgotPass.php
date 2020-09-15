<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if($_POST['email']){
$email = mysqli_real_escape_string($connect, $_POST['email']);
}else{
$email = mysqli_real_escape_string($connect, $_GET['t']);
}

$query= mysqli_query($connect, "select firstname, email from users where email = '$email'");
$foundUser = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);

if($foundUser > 0){

$otp = rand(0000,9999);

$subject = "Your Recovered Password";
$heading = "Password Recovery";
$message = 'Hello <strong>'.$row['firstname'].'</strong>,<br><br>
Please use the number below to reset your password.<br><br>
<strong>'.$otp.'</strong>';

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "update users set otp = '$otp' where email = '$email'");

send_mail($email, $subject, $message, $from_email, $row['firstname']);

header('Location: enter-otp?success='.$email);
exit;
}else{
header('Location: forgot-password?error=1');
exit;
}
