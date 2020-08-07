<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - How it works</title>
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
<div class="bg-primary pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-7 text-center mx-auto my-4">
<!-- Title -->
<div class="mb-4">
<h1 class="display-4 text-white mb-0 font-weight-bold">How it works</h1>
</div>
<!-- End Title -->
</div>
</div>
</div>
</div>
<div class="section-padding">
<div class="container py-lg-4 mx-auto col-md-9">
<div class="row">
<!-- Main Content -->
<div class="col-md-4">
<div class="box border rounded bg-white mb-4">
<div class="p-4 d-flex align-items-center">
<i class="icofont-laptop-alt display-4"></i>
<div class="ml-4">
<h5 class="text-gray-900 mb-3 mt-0">Join Faceflyer</h5>
<p class="mb-0 text-muted">Sign up to find amazing deals, tasks and cashback around you
</p>
</div>
</div>
<div class="overflow-hidden align-items-center p-2"></div>
</div>
</div>
<div class="col-md-4">
<div class="box border rounded bg-white mb-4">
<div class="p-4 d-flex align-items-center">
<i class="icofont-safety display-4"></i>
<div class="ml-4">
<h5 class="text-gray-900 mb-3 mt-0">Earn Coin</h5>
<p class="mb-0 text-muted">Complete Task, shop Deals,and earn Cashback on every purchase
</p>
</div>
</div>
<div class="overflow-hidden align-items-center p-2"></div>
</div>
</div>
<div class="col-md-4">
<div class="box border rounded bg-white mb-4">
<div class="p-4 d-flex align-items-center">
<i class="icofont-cc display-4"></i>
<div class="ml-4">
<h5 class="text-gray-900 mb-3 mt-0">Get free stuff</h5>
<p class="mb-0 text-muted">Earn coin for each completed task, or shopping. Use coin to buy vouchers, gift cards, DATA e.t.c
</p>
</div>
</div>
</div>
</div>
</div>
<br><br>
<div align="center">
<?php if($_SESSION['facer']){ ?>
<button type="button" onclick="window.location.href='home'" class="btn btn-primary" name="button">Start earning FC coin</button>
<?php }else{ ?>
<button type="button" onclick="window.location.href='sign-up'" class="btn btn-primary" name="button">Sign up and start earning FC coin</button>
<?php } ?>
</div>
<br><br>
<div class="desktop">
<ul class="list-group list-group-horizontal">
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Shop Online & Offline</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Watch Videos</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Subscription</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Discover Amazing deals</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Share, Follow, Likes</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Play Games</li>
</ul>
</div>
<div class="mobile">
<ul class="list-group">
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Shop Online & Offline</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Watch Videos</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Subscription</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Discover Amazing deals</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Share, Follow, Likes</li>
<li class="col-md-2 list-group-item"><i class="ml-2 icofont-star text-danger mr-2"></i>Play Games</li>
</ul>
</div>
</div>
</div>
</div>
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
</body>

</html>
