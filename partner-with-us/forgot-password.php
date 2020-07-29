<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Forgot Password - Merchant - Faceflyer</title>
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
<div class="text-center mb-5 login-main-left-header pt-0 mr-0">
<img src="../assets/images/logo.png" class="img-fluid w-40" alt="LOGO">
<h5 class="mt-3 mb-3">It happens to us all</h5>
<p>Enter your email, and get back in no time</p>
<?php if($_GET['error']){ ?>
<p style="color:#c00"><strong>Email not found</strong>. Please check and try again.</p>
<?php } ?>
</div>
<form action="processForgotPass" method="post" id="forgot-form">
<div class="form-group floating-label-form-group enter-value">
<label>Enter email address</label>
<input type="text" name="email" value="<?php echo $_GET['error']; ?>" class="form-control"
placeholder="Enter email address">
</div>
<div class="mt-4">
<div class="row">
<div class="col-12 pl-2">
<button type="submit" class="btn btn-primary btn-block btn-lg">Recover Password</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-5">
<p class="light-gray">Remember Login? <a href="sign-in">Sign In</a></p>
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

</body>

</html>
