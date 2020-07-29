<?php
require('Connection/connect.php');

if($_GET['token']){
$token = mysqli_real_escape_string($connect, $_GET['token']);
$qs = mysqli_query($connect, "select * from users where token = '$token' && status = 'pending'");
if(mysqli_num_rows($qs) > 0){
$rs = mysqli_fetch_assoc($qs);
mysqli_query($connect, "update users set status = 'verified', coin = coin+5 where token = '$token'");
mysqli_query($connect, "update users set coin = coin+10 where uID = '{$rs['referral']}'");
mysqli_query($connect, "insert into activity_log set uID = '$uID', description = 'Email Verification', coin = '+5 FC', date = '$date'");
$verified = 1;
}else{
$verified = 2;
}
}else{
$verified = 3;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Faceflyer - Verify</title>
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="assets/images/logo.png">
<!-- Custom fonts for this template-->
<link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="assets/css/theme.css" rel="stylesheet">
<!-- Material Design Icons -->
<link href="assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- Select2 CSS -->
<link href="assets/css/select2-bootstrap.css" />
<link href="assets/css/select2.min.css" rel="stylesheet" />
<!-- icofont -->
<link href="assets/css/icofont.min.css" rel="stylesheet">
<!-- Owl Carousel -->
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<!-- Custom styles for this template-->
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login-main-body">
<section class="login-main-wrapper">
<div class="container-fluid pl-0 pr-0">
<div class="row no-gutters">
<div class="col-md-12 p-5 bg-white full-height vertical-center">
<div class="login-main-left">
<div class="text-center mb-5 login-main-left-header pt-0 mr-0">
<img src="assets/images/logo.png" class="img-fluid w-40" alt="LOGO">
<?php if($verified == 3){ ?>
<h5 class="mt-3 mb-3">You need to verify your email address</h5>
<p>A mail has been sent to the email you registered with.</p>
<p>Thank you.</p>
<?php }elseif($verified == 2){ ?>
<h5 class="mt-3 mb-3">Your email address has already been verified.</h5>
<p>Please procced to the sign in page and start earning faceflyer coin. <a href="./">Sign in Now!</a></p>
<p>Thank you.</p>
<?php }else{ ?>
<h5 class="mt-3 mb-3">Your email address has been verified successfully.</h5>
<p>Please procced to the sign in page and start earning faceflyer coin. <a href="./">Sign in Now!</a></p>
<p>Thank you.</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- select2 Js -->
<script src="assets/js/select2.min.js"></script>
<!-- Owl Carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- Custom -->
<script src="assets/js/custom.js"></script>
</body>

</html>
