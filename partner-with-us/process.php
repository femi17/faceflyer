<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

unset($_SESSION['facePlan']);
$email = merchantSignin($_SESSION['faceMerchant'], 'email');
$plan = base64_decode($_GET['t']);

if($plan == "freeplanonfaceflyermerchant"){

mysqli_query($connect, "update merchant set package = 'free', plan = 'free', next_pay = '', auth_code = '' where email = '$email'");

$subject = "Downgrade on plan";
$message = 'Hi '.merchantSignin($_SESSION['faceMerchant'], 'store_name').'<br><br>
You subscription to the free was successful.<br><br>
You can begin to enjoy and explore more on faceflyer';

$from_email = 'no-reply@faceflyer.com';

send_mail($email, $subject, $message, $from_email, merchantSignin($_SESSION['faceMerchant'], 'store_name'));

$_SESSION['package'] = "free";
$_SESSION['plan'] = "free";

header('Location: dashboard?plan=1');
exit;

}
elseif($plan == "basicplanonfaceflyermerchant"){
$_SESSION['facePlan'] = 'basic';
}
elseif($plan == "premiumplanonfaceflyermerchant"){
$_SESSION['facePlan'] = 'premium';
}

header('Location: processPayment');
exit;

?>
