<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$search = $_POST['search'];

if($_POST['module']){
$mod = $_POST['module'];
}else{
$mod = "all";
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
<div id="content-wrapper">
<!-- Main Content -->
<div id="content">
<!-- Topbar -->
<?php include 'header.php'; ?>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<section class="section-padding homepage-search-block position-relative">
<div class="container">
<div class="row">
<div class="col-lg-8 mx-auto pt-lg-5">
<div class="homepage-search-title text-center">
<h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">Tasks, Deals & Cashback</h1>
<h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">Earn FC when you complete a <em>task</em>, shop <em>deals</em> at a store, or with <em>cashback</em> from purchase at your favorite <em>store</em> !</h5>
</div>

<div class="homepage-search-form">
<form class="form-noborder" method="post" action="search">
<div class="form-row">
<div class="col-lg-3 col-md-3 col-sm-12 form-group">
<div class="location-dropdown">
<i class="icofont-location-arrow"></i>
<select name="module" class="custom-select form-control-lg">
<option value=""> All </option>
<option value="Tasks"> Tasks </option>
<option value="Deals"> Deals </option>
<option value="Cashback"> Cashback </option>
</select>
</div>
</div>
<div class="col-lg-7 col-md-7 col-sm-12 form-group">
<input type="text" name="search" placeholder="Search for tasks, deals, & cashback…"
class="form-control border-0 form-control-lg shadow-sm">
</div>
<div class="col-lg-2 col-md-2 col-sm-12 form-group">
<button type="submit"
class="btn btn-primary btn-block btn-lg btn-gradient shadow-sm"><i
class="icofont-search"></i></button>
</div>
</div>
</form>
</div>

</div>
</div>
</div>
</section>

<div class="container">
<div id="leadboard" align="center">
<img src="assets/images/leaderboard.jpeg" alt="ads" class="img-fluid" />
</div>
</div>

<section class="section-padding homepage-rest-block">
<div class="container">
<?php if($mod == "all"){ ?>
<ul class="list-group">
<?php echo find_query_task($search); ?>
</ul>
<ul class="list-group">
<?php echo find_query_deal($search); ?>
</ul>
<ul class="list-group">
<?php echo find_query_cashback($search); ?>
</ul>
<?php }elseif($mod == "Tasks"){ ?>
<ul class="list-group">
<?php echo find_query_task($search); ?>
</ul>
<?php }elseif($mod == "Deals"){ ?>
<ul class="list-group">
<?php echo find_query_deal($search); ?>
</ul>
<?php }elseif($mod == "Cashback"){ ?>
<ul class="list-group">
<?php echo find_query_cashback($search); ?>
</ul>
<?php } ?>
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
<i class="fa fa-angle-up"></i>
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

</body>

</html>
