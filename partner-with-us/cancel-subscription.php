<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$email = merchantSignin($_SESSION['faceMerchant'], 'email');

mysqli_query($connect, "update merchant set auth_code = '' where email = '$email'");

$subject = "Cancel Subscription";
$message = 'Hi '.merchantSignin($_SESSION['faceMerchant'], 'store_name').'<br><br>
You subscription was successful cancelled on faceflyer.<br><br>
Subscribe to a plan to enjoy and explore more on faceflyer';

$from_email = 'no-reply@faceflyer.com';

send_mail($email, $subject, $message, $from_email, merchantSignin($_SESSION['faceMerchant'], 'store_name'));

?>
