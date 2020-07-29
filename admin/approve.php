<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$module = $_POST['moduleT'];
$name = $_POST['name'];
$store = $_POST['store'];
$merchant = $_POST['merchant'];
$id = $_POST['id'];

$subject = $name ."has been approved";
$message = 'Hi '.$store.'<br><br>
You post <b>'.$name.'</b> has been approved and is currently showing on faceflyer.<br><br>
Thank you for using faceflyer.';

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "update $module set status = 'approved' where id = '$id'");

send_mail($merchant, $subject, $message, $from_email, $store);

?>
