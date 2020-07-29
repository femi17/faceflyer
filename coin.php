<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Redeem Faceflyer Coin</title>
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


<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
<!-- Topbar -->
<?php include 'header.php'; ?>

<!-- End of Topbar -->
<!-- Begin Page Content -->
<section class="bg-gradient-primary section-padding">
<div class="container">
<div class="row py-lg-5">
<div class="col-md-6 mx-auto text-center">
<h1 class="text-white mb-3">Redeem your faceflyer coin</h1>
<h6 class="text-white-50 mb-0">Show evidence of purchase or completed task and get reward ASAP</h6>
</div>
</div>
</div>
</section>
<section class="section-padding">
<div class="container">
<div class="row py-lg-4">
<form method="post" action="processCoin" enctype="multipart/form-data" id="coin">
<div class="col-md-10 mx-auto text-center">
<div class="text-left rating-review-select-page">
<h4 class="mb-4 text-gray-900">Earn Coin</h4>
<?php if($_GET['reward']){ ?>
<p style="color:green"><strong>You request has been sent in</strong>. We will review and reward you ASAP.</p>
<?php } ?>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
<h6 class="mb-3 text-gray-800 font-weight-normal">Tell us which of these did you complete recently?</h6>
<div class="rating-checkbox mb-4">
<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-outline-secondary">
<input type="radio" name="module" autocomplete="off" value="tasks"> <img class="img-fluid"
src="assets/images/1.png"><br>Tasks
</label>
<label class="btn btn-outline-secondary active">
<input type="radio" name="module" checked="" autocomplete="off" value="deals"> <img class="img-fluid"
src="assets/images/2.png"><br>Deal
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="module" autocomplete="off" value="cashback"> <img class="img-fluid"
src="assets/images/3.png"><br>Cashback
</label>
</div>
</div>

<div class="row">
<!-- Input -->
<div class="col-sm-3">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Enter name of task, deal or cashback" required />
</div>
</div>
</div>
<div class="col-sm-3">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Name of merchant
<span class="text-danger">*</span>
</label>
<div class="form-group">
<select class="form-control" name="merchant" required>
<option value="">Choose merchant</option>
<?php list_col('merchant', 'store_name', 'store_name'); ?>
</select>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-sm-3">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Evidence
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="file" class="form-control" name="evidence" required>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Date completed
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="date" class="form-control" name="date" required>
</div>
</div>
</div>
<!-- End Input -->
</div>
<div class="form-group">
<label>Your Comment [optional]</label>
<textarea class="form-control" name="comment" rows="6"></textarea>
</div>
<div class="form-group text-right">
<button type="submit" class="btn btn-primary"> Get Reward </button>
</div>
</div>
</div>
</form>
</div>
</div>
</section>

<?php include 'footer.php'; ?>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded-circle" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

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
$('#coin').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'get_coin'}).then(function(token) {
$('#coin').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#coin').prepend('<input type="hidden" name="action" value="get_coin">');
$('#coin').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
