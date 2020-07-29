<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$email = $_POST['emailApp'];
$subject = $_POST['subjectApp'];
$message = $_POST['messageApp'];
$name = $_POST['nameApp'];
$id = $_POST['id'];
$uID = $_POST['uID'];
$date = date('Y-m-d');

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "update coin set status = 'rejected' where id = '$id'");

mysqli_query($connect, "insert into activity_log set uID = '$uID', description = 'coin rejected', coin = '0 FC', date = '$date'");

send_mail($email, $subject, $message, $from_email, $name);

?>
