<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

$email = $_POST['email'];
$name = explode('@',$email);

$subject = "You are invited to join faceflyer";
$message = 'Hi<br><br>
Have you heard about faceflyer? Well, '.fetchData('users', $_SESSION['facer'], 'uID', 'firstname').' thinks its a great way for you to explore and put cash back in your wallet.<br><br>
We feel the same way and that is why we would love you to sign up on faceflyer and take it for a spin.<br><br>
Follow the link to sign up today!
<center>
<a rel="nofollow" style="text-decoration:none" class="yiv4360069400ln-button" target="_blank" href="https://www.faceflyer.com/">Sign up now!</a>
</center><br><br>
We hope to see you soon.';

$from_email = 'no-reply@faceflyer.com';

send_mail($email, $subject, $message, $from_email, $name[0]);

header('Location: referral?invite=1');
exit;

?>
