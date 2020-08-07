<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>OTP Verification - Merchant</title>
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="assets/images/logo.png">
<!-- Custom fonts for this template-->
<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
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
<div class="text-center mb-5 login-main-left-header pt-5">
<img src="assets/images/logo.png" class="img-fluid w-40" alt="LOGO"><br><br>
<h5 class="mt-0 mb-3">Complete your Verification</h5>
<p>An OTP has been sent to your email<br> <?php echo $_GET['success']; ?> <a href="forgot-password">Change</a></p>
</div>
<form action="processOTP" method="post">
<div class="form-group otp-form">
<div class="row">
<div class="col-3 pl-2 pr-2">
<input type="text" maxlength="1" name="num1" id="num1" class="form-control">
</div>
<div class="col-3 pl-2 pr-2">
<input type="text" maxlength="1" name="num2" id="num2" class="form-control">
</div>
<div class="col-3 pl-2 pr-2">
<input type="text" maxlength="1" name="num3" id="num3" class="form-control">
</div>
<div class="col-3 pl-2 pr-2">
<input type="text" maxlength="1" name="num4" id="num4" class="form-control">
</div>
</div>
</div>
<button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Verify</button>
</form>
<div class="text-center mt-5">
<p class="light-gray">Haven’t Received the OTP? <a href="processForgotPass?t=<?php $_GET['success']; ?>">Resend</a></p>
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

<script>
$('body').on('keyup', '#num1',function(){
if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
$('#num2').focus();
}
})
$('body').on('keyup','#num2', function(){
if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
$('#num3').focus();
}
})
$('body').on('keyup','#num3', function(){
if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
$('#num4').focus();
}
})
</script>
</body>

</html>
