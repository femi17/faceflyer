<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

$reward = str_replace(' ','-',$_POST['item']);
$word = "DATA";

if(strpos($_POST['item'], $word) !== false){
$choice = $_POST['choice'];
}

if($_POST['buy']){
$buy = $_POST['buy'];
}else{
$buy = $_POST['buy1'];
}

if($buy < 500){
header('Location: gift/'.$reward.'&value=1');
exit;
}

if(!fetchData('users', $_SESSION['facer'], 'uID', 'firstname') || !fetchData('users', $_SESSION['facer'], 'uID', 'lastname') || !fetchData('users', $_SESSION['facer'], 'uID', 'phone') || !fetchData('users', $_SESSION['facer'], 'uID', 'email')){

header('Location: settings?update=1');
exit;
}

if(fetchData('users', $_SESSION['facer'], 'uID', 'coin') < $buy){
header('Location: gift/'.$reward.'&coin=1');
exit;
}

$uID = $_SESSION['facer'];
$name = fetchData('users', $_SESSION['facer'], 'uID', 'firstname')." ".fetchData('users', $_SESSION['facer'], 'uID', 'lastname');
$email = fetchData('users', $_SESSION['facer'], 'uID', 'email');
$phone = fetchData('users', $_SESSION['facer'], 'uID', 'phone');
$coin = fetchData('users', $_SESSION['facer'], 'uID', 'coin');
$date = date('Y-m-d');

mysqli_query($connect, "insert into buy_gift set uID = '$uID', name = '$name', email = '$email', phone = '$phone', voucher = '{$_POST['item']}', choice = '$choice', buy = '$buy', coin = '$coin', date = '$date'");

mysqli_query($connect, "update users set coin = coin-$buy where uID = '$uID'");

$subject = "Buy Reward";
$message = 'Hi Admin<br><br>
Please procure the request below.<br><br>
<h3>Voucher: '.$_POST['item'].'</h3><br>
<h3>Name: '.$name.' ('.$uID.')</h3><br>
<h3>Email: '.$email.'</h3><br>
<h3>Date Requested: '.$date.'</h3>';

$from_email = 'no-reply@faceflyer.com';

send_mail('femi@faceflyer.com', $subject, $message, $from_email, 'Femi');

if(strpos($_POST['item'], $word) !== false){
header('Location: gift/'.$reward.'&card=1');
exit;
}else{
header('Location: gift/'.$reward.'&buy=1');
exit;
}

?>
