<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceMerchant']){
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

<title>Settings - Merchant - Faceflyer</title>
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
<link rel="stylesheet" href="../assets/css/sweetalert.css"/>

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
<section class="user-panel-body section-padding">
<div class="container">
<div class="row py-lg-4">
<div class="col-xl-3 col-sm-4">
<?php include 'user-panel.php'; ?>
</div>
<div class="col-xl-9 col-sm-8">
<div class="user-panel-body-right">
<div id="mc" class="user-panel-tab-view">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Edit Basic Info</h5>
</div>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link" href="#profile">Profile</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#password">Change password</a>
</li>
</ul>
</div>
<div id="profile">
<div class="row">
<div class="col-md-12">
<?php if($_GET['profile']){ ?>
<p style="color:green"><strong>Profile updated successfully</strong></p>
<?php } ?>
<?php if($_GET['pass']){ ?>
<p style="color:green"><strong>Password updated successfully</strong></p>
<?php } ?>
<?php if($_GET['error']){ ?>
<p style="color:#c00"><strong>Password not found</strong>. Please check and try again.</p>
<?php } ?>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
<?php if($_GET['size']){ ?>
<p style="color:blue"><strong>Dimension error</strong>. Please size must greater than <b>96px by 96px</b>.</p>
<?php } ?>
<div class="bg-white p-4 shadow-sm border-radius">
<form class="js-validate" action="processProfile" method="post" id="profile-form" enctype="multipart/form-data">
<div class="row">
<!-- Input -->
<div class="col-sm-4">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Store Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="store_name" value="<?php echo merchantSignin($_SESSION['faceMerchant'], 'store_name'); ?>"
placeholder="Enter your store name" required="">
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-sm-4">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Phone Number
</label>
<div class="form-group">
<input type="text" class="form-control" name="phone" value="<?php echo merchantSignin($_SESSION['faceMerchant'], 'phone'); ?>"
placeholder="Enter your phone number">
</div>
</div>
</div>

<div class="col-sm-4">
<div class="js-form-message">
<label id="emailLabel" class="form-label">
Email address
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="email" class="form-control" value="<?php echo merchantSignin($_SESSION['faceMerchant'], 'email'); ?>" name="email" readonly>
</div>
</div>
</div>
<!-- End Input -->
</div>
<div class="row">
<!-- Input -->
<div class="col-sm-7">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Location
</label>
<div class="form-group">
<input type="text" class="form-control" name="location" value="<?php echo merchantSignin($_SESSION['faceMerchant'], 'location'); ?>" placeholder="Enter your location">
</div>
</div>
</div>
<div class="col-sm-5">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Logo [ size must be greater than <b>96px by 96px</b> ]
</label>
<div class="form-group">
<input type="file" class="form-control" name="logo">
</div>
</div>
</div>
<!-- End Input -->
</div>

<div class="mb-0 pt-4 text-right">
<button type="reset" class="btn btn-link"> Cancel </button>
<button type="submit" class="btn btn-primary"> Save Changes </button>
</div>
</form>
</div>
</div>
</div>
</div>
<br><br>
<div id="password">
<div class="row">
<div class="col-md-12">
<div class="bg-white p-4 shadow-sm border-radius">
<form action="processPass" method="post" id="password-form">
<div class="form-group floating-label-form-group enter-value">
<label>Enter Current Password</label>
<input type="password" name="current" class="form-control">
</div>
<div class="form-group floating-label-form-group enter-value">
<label>New Password</label>
<input type="password" name="new" class="form-control" id="newPass" placeholder="Password">
<span toggle="#newPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="mb-0 pt-4 text-right">
<button type="reset" class="btn btn-link"> Cancel </button>
<button type="submit" class="btn btn-primary"> Change Password </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
<?php include 'social.php'; ?>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded-circle" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

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
<script src="../assets/js/sweetalert.min.js"></script>

<script src="../assets/js/custom.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#profile-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'update_profile'}).then(function(token) {
$('#profile-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#profile-form').prepend('<input type="hidden" name="action" value="update_profile">');
$('#profile-form').unbind('submit').submit();
});;
});
});
</script>
<script>
$('#password-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'change_pass'}).then(function(token) {
$('#password-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#password-form').prepend('<input type="hidden" name="action" value="change_pass">');
$('#password-form').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
