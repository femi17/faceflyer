<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

// $id = $_GET['i'];
// $qs = mysqli_query($connect, "select * from rewards where id = '$id'");
// $rs = mysqli_fetch_assoc($qs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer</title>
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
<link rel="stylesheet" href="../assets/css/summernote.css"/>

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
<div class="col-xl-9 col-sm-8 order-first order-md-last" style="margin-bottom:30px;">
<div class="user-panel-body-right">
<div id="mc" class="user-panel-tab-view">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Add a reward</h5>
</div>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link" href="#profile">Details</a>
</li>
</ul>
</div>
<div id="profile">
<div class="row">
<div class="col-md-12">
<?php if($_GET['add']){ ?>
<p style="color:green"><strong>Reward uploaded successfully</strong></p>
<?php } ?>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
<div class="bg-white p-4 shadow-sm border-radius">
<form class="js-validate" action="processReward" method="post" enctype="multipart/form-data" id="reward-form">
<div class="row">
<!-- Input -->
<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Name of Reward
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="name"
placeholder="Shoprite Voucher" required="">
</div>
</div>
</div>
<!-- End Input -->

<!-- Input -->
<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Prices
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="price"
placeholder="500 FC" required="">
</div>
</div>
</div>

<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Upload reward banner [ optional ]
</label>
<div class="form-group">
<input type="file" class="form-control" name="banner">
</div>
</div>
</div>
<!-- End Input -->
</div>
<div class="row">
<!-- Input -->

<div class="col-md-12 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Description
<span class="text-danger">*</span>

</label>
<div class="form-group">
<textarea name="description" class="summernote" id="summernote" required></textarea>
</div>
</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Details
</label>
<div class="form-group">
<textarea name="content" class="summernote" id="summernote"></textarea>
</div>
</div>
</div>

<div class="col-md-12 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Location
</label>
<div class="form-group">
<textarea name="location" class="summernote" id="summernote"></textarea>
</div>
</div>
</div>
<!-- End Input -->
</div>

<div class="mb-0 pt-4 text-right">
<button type="reset" class="btn btn-link"> Cancel </button>
<?php if($_GET['i']){ ?>
<input type="hidden" name="id" value="<?php echo $_GET['i']; ?>">
<button type="submit" class="btn btn-primary"> Edit Task </button>
<?php }else{ ?>
<button type="submit" class="btn btn-primary"> Upload Reward </button>
<?php } ?>
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

<script src="../assets/js/summernote.js"></script>

<script src="../assets/js/custom.js"></script>


<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#reward-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'upload_reward'}).then(function(token) {
$('#reward-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#reward-form').prepend('<input type="hidden" name="action" value="upload_reward">');
$('#reward-form').unbind('submit').submit();
});;
});
});
</script>

</body>

</html>
