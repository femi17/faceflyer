<?php
if($_GET['rt']){
$otp = base64_decode($_GET['rt']);
$email = base64_decode($_GET['email']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Reset password - Merchant - Faceflyer</title>
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
<div class="text-center mr-0 mb-5 login-main-left-header pt-2">
<img src="assets/images/logo.png" class="img-fluid w-40" alt="LOGO"><br>
<h5 class="mt-3 mb-3">Reset password</h5>
<?php if($_GET['fields']){ ?>
<p style="color:#c00"><strong>All fields are required</strong>. Please check and try again.</p>
<?php } ?>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
<?php if($_GET['name']){ ?>
<p style="color:#c00"><strong>Store name or email already registered</strong>. Please check and try again.</p>
<?php } ?>
</div>
<form action="processReset" method="post"  id="reset-form">
<div class="form-group floating-label-form-group">
<label>OTP</label>
<input type="text" name="email" class="form-control" value="<?php $otp ?>" readonly>
</div>
<div class="form-group floating-label-form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="newPass" placeholder="Password" required>
<span toggle="#newPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<input type="hidden" name="email" value="<?php echo $email; ?>">
<button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Reset Password</button>
</form>
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
<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#reset-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'reset_user'}).then(function(token) {
$('#reset-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#reset-form').prepend('<input type="hidden" name="action" value="reset_user">');
$('#reset-form').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
