<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Faceflyer</title>
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
<div class="col-md-6 p-5 text-white">
<img src="assets/images/logo.png" class="img-fluid w-40" alt="LOGO">

<h3 class="mt-3 mb-3">You have been shopping, <br>now it is time we reward<br>you for every purchase</h3>
<p>Earn coin for everyday thing you do online and offline</p>
<p>tasks | deals | cashback</p>
<br>
<h4 class="mt-3 mb-3">Make your Business <br>Boom as a<br> Faceflyer Merchant</h4>
<p>connect | serve | grow | reward</p>
<button type="button" onclick="window.location.href='partner-with-us/'" class="btn btn-primary btn">Sign Up</button>
</div>
<div class="col-md-6 bg-white vertical-center">
<div class="login-main-left">
<div class="text-center mb-3 login-main-left-header pt-0 mr-0">
<h5 class="mt-3 mb-3">Put cash back in your wallet</h5>
<p>Earn each time your complete a task or shop <i class="fa fa-smile"></i></p>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
</div>
<br>
<form action="processSignin" method="post" id="signin-form">
<?php if($_GET['error']){ ?>
<div class="form-group floating-label-form-group enter-value">
<label>Enter email address</label>
<input type="text" name="email" class="form-control is-invalid" value="<?php echo $_GET['error']; ?>"
placeholder="Enter email address">
<div class="invalid-feedback form-error pr-4 mr-2">Not registered!</div>
</div>
<?php }else{ ?>
<div class="form-group floating-label-form-group enter-value">
<label>Enter email address</label>
<input type="text" name="email" value="<?php echo $_GET['error']?>" class="form-control"
placeholder="Enter email address">
</div>
<?php } ?>
<div class="form-group floating-label-form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="newPass" placeholder="Password">
<span toggle="#newPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="mt-4">
<div class="row">
<div class="col-12 pl-2">
<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-5">
<p class="light-gray"><a href="forgot-password">Forgot your password? </a></p>
<p class="light-gray">Don’t have an account? <a href="sign-up">Sign Up</a></p>
<br>
<ul class="list-inline mb-0">
<li class="list-inline-item">
<a class="border rounded p-2" href="#">
<span class="icofont-facebook"></span>
</a>
</li>
<li class="list-inline-item">
<a class="border rounded p-2" href="#">
<span class="icofont-instagram"></span>
</a>
</li>
<li class="list-inline-item">
<a class="border rounded p-2" href="#">
<span class="icofont-twitter"></span>
</a>
</li>
</ul>
<br><br>
<p><a href="how-it-works">How it works</a> | <a href="about-us">About us</a> | <a href="contact-us">Advertise with us</a> | <a href="contact-us">Contact us</a></p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- <?php include 'footer.php'; ?> -->

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
$('#signin-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'signin_user'}).then(function(token) {
$('#signin-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#signin-form').prepend('<input type="hidden" name="action" value="signin_user">');
$('#signin-form').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
