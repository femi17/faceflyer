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

<title>Faceflyer - Tasks, Deals & Cashback</title>
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
<section class="user-panel-body section-padding">
<div class="container">
<div class="row py-lg-4">
<div class="col-xl-3 col-sm-4">
<div class="user-panel-body-left">
<div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'picture')){ ?>
<img class="mb-3 mt-2 user-info-img" src="assets/images/<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'picture'); ?>">
<?php }else{ ?>
<span class="p-3 user-info-img" style="border:1px solid #ccc"><span style="margin-bottom:20px;color:#000;height:50px;"><?php $first = fetchData('users', $_SESSION['facer'], 'uID', 'firstname'); echo $first[0]; ?><?php $last = fetchData('users', $_SESSION['facer'], 'uID', 'lastname'); echo $last[0]; ?></span></span>
<?php } ?>
<br><br>
<h6 class="text-black mb-2 text-gray-900"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'firstname'); ?>&nbsp;<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'lastname'); ?></h6>
<h3 class="mr-2 d-lg-inline text-gray-600"><b><?php echo number_format_short(fetchData('users', $_SESSION['facer'], 'uID', 'coin')); ?><span style="font-size:11px"> fc</span></b></h3>
<p>&nbsp;</p>
<button type="button" onClick="windows.location.href='logout'" class="btn btn-primary btn-block"><i class="icofont-logout"></i>
Logout</button>
<p class="mb-0 mt-3"><a href="dashboard">Dashboard</a></p>
</div>
</div>
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
FirstName
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="firstname"
placeholder="Enter your name" value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'firstname')?>" required="">
</div>
</div>
</div>

<div class="col-sm-4">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
LastName
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'lastname')?>" name="lastname"
placeholder="Enter your lastname" required="">
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-sm-4">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Phone Number
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'phone')?>" name="phone"
placeholder="Enter your phone number" required="">
</div>
</div>
</div>
<!-- End Input -->
</div>
<label class="form-label">
Birth date
</label>
<div class="row">
<!-- Input -->
<div class="col-md-6">
<div class="js-form-message">
<div class="form-group">
<select class="form-control custom-select" name="month">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'month')){ ?>
<option value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'month')?>"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'month')?></option>
<?php } ?>
<option value="">Select month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-md-2">
<div class="js-form-message">
<div class="form-group">
<select class="form-control custom-select" name="day">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'day')){ ?>
<option value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'day')?>"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'day')?></option>
<?php } ?>
<option value="">Select date</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12" >12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-md-2">
<div class="js-form-message">
<div class="form-group">
<select class="form-control custom-select" name="year">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'year')){ ?>
<option value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'year')?>"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'year')?></option>
<?php } ?>
<option value="">Select year</option>
<?php for($y=1940; $y<date('Y'); $y++){ ?>
<option value="<?php echo $y ?>"><?php echo $y ?></option>
<?php } ?>
</select>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-md-2">
<div class="js-form-message">
<div class="form-group">
<select class="form-control custom-select" name="gender">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'gender')){ ?>
<option value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'gender')?>"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'gender')?></option>
<?php } ?>
<option value="">Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
</div>
<!-- End Input -->
</div>
<div class="row">
<!-- Input -->
<div class="col-sm-6">
<div class="js-form-message">
<label id="emailLabel" class="form-label">
Email address
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="email" class="form-control" value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'email')?>" name="email" required>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-sm-6">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Location
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="location"
placeholder="Enter your location" value="<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'location')?>">
</div>
</div>
</div>

<div class="col-sm-6">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Picture [ size must be greater than <b>96px by 96px</b> ]
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
