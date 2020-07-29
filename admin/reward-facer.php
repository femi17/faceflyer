<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$name = $_POST['name'];
$coin = $_POST['coin'];
$store = $_POST['store'];
$module = $_POST['moduleT'];
$title = $_POST['title'];
$id = $_POST['id'];
$uID = $_POST['uID'];
$date = date('Y-m-d');

$from_email = 'no-reply@faceflyer.com';

mysqli_query($connect, "update coin set status = 'approved' where id = '$id'");

mysqli_query($connect, "update users set coin = coin+$coin where uID = '$uID'");

mysqli_query($connect, "update $module set count = count+1 where name = '$title' && store = '$store'");

mysqli_query($connect, "insert into activity_log set uID = '$uID', description = 'Earned faceflyer coin', coin = '".$coin." FC', date = '$date'");

send_mail($email, $subject, $message, $from_email, $name);

?>
