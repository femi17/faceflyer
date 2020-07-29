<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Sign up - Merchant - Faceflyer</title>
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="../assets/images/logo.png">
<!-- Custom fonts for this template-->
<link href="../assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="../assets/css/theme.css" rel="stylesheet">
<!-- Material Design Icons -->
<link href="../assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- Select2 CSS -->
<link href="../assets/css/select2-bootstrap.css" />
<link href="../assets/css/select2.min.css" rel="stylesheet" />
<!-- icofont -->
<link href="../assets/css/icofont.min.css" rel="stylesheet">
<!-- Owl Carousel -->
<link rel="stylesheet" href="../assets/css/owl.carousel.css">
<link rel="stylesheet" href="../assets/css/owl.theme.css">
<!-- Custom styles for this template-->
<link href="../assets/css/style.css" rel="stylesheet">
</head>

<body class="login-main-body">
<section class="login-main-wrapper">
<div class="container-fluid pl-0 pr-0">
<div class="row no-gutters">
<div class="col-md-12 p-5 bg-white full-height vertical-center">
<div class="login-main-left">
<div class="text-center mr-0 mb-5 login-main-left-header pt-2">
<img src="../assets/images/logo.png" class="img-fluid w-40" alt="LOGO"><br>
<h5 class="mt-3 mb-3">Grow and retain your customers</h5>
<p>Let us bring customers to your store</p>
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
<form action="processSignup" method="post"  id="signup-form">
<div class="form-group floating-label-form-group">
<label>Enter email address</label>
<input type="text" name="email" class="form-control" value="<?php $_GET['email'] ?>" placeholder="Enter email address" required>
</div>
<div class="form-group floating-label-form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="newPass" placeholder="Password" required>
<span toggle="#newPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group floating-label-form-group">
<label>Store Name</label>
<input type="text" name="store" class="form-control" placeholder="Store Name" value="<?php $_GET['name'] ?>" required>
</div>
<button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Sign Up</button>
</form>
<div class="text-center mt-5">
<p class="light-gray">Already have an Account? <a href="sign-in">Sign In</a></p>
</div>

</div>
</div>
</div>
</div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../assets/js/jquery.easing.min.js"></script>
<!-- select2 Js -->
<script src="../assets/js/select2.min.js"></script>
<!-- Owl Carousel -->
<script src="../assets/js/owl.carousel.js"></script>
<!-- Custom -->
<script src="../assets/js/custom.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#signup-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'signup_merchant'}).then(function(token) {
$('#signup-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#signup-form').prepend('<input type="hidden" name="action" value="signup_merchant">');
$('#signup-form').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
