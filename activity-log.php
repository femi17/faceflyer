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

<title>Faceflyer - Cashback</title>
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
<!-- <section class="bg-gradient-primary section-padding">
<div class="container">
<div class="row py-lg-5">
<div class="col-md-6 mx-auto text-center">
<h6 class="text-uppercase text-warning mb-0">Sections</h6>
<h1 class="text-white mb-3">Membership</h1>
<h6 class="text-white-50 mb-0">Build a beautiful, modern website with flexible Bootstrap components
built from scratch.</h6>
</div>
</div>
</div>
</section> -->
<section class="offer-dedicated-body section-padding">
<div class="container">
<div class="row pt-lg-4">
<div class="col-lg-8">
<div class="offer-dedicated-body-left">
<div class="stastics-main rounded bg-white shadow-sm p-4 mb-4">
<h5 class="mb-4  text-gray-900">Try a Osahan Deel Membership</h5>
<div class="stastics-list-item">
<h6 class="seven-color text-primary font-weight-bold mb-4 pt-3 stastics-title pl-4"><span
class="stastics-action done bg-gradient-primary text-white"><i
class="icofont-check-alt"></i></span> Basic</h6>
<div class="stastics-list rounded p-4 mb-4 bg-light">
<div class="media align-items-center">
<img alt="Silver Tier" src="images/silver-tier.png" class="mr-4">
<div class="media-body">
<h5 class="mb-2">Silver</h5>
<p class="mb-3">Many desktop publishing packages and web page editors now use Lorem Ipsum
</p>
<h6 class="mb-0 text-danger"><i class="icofont-money"></i> $5,000</h6>
</div>
</div>
</div>
</div>
<div class="stastics-list-item">
<h6 class="seven-color text-primary font-weight-bold mb-4 pt-3 stastics-title pl-4"><span
class="stastics-action bg-white"></span> Professional </h6>
<div class="stastics-list rounded p-4 mb-4 bg-light">
<a href="#" class="text-success float-right">Upgrade</a>
<div class="media align-items-center">
<img alt="Silver Tier" src="images/gold-tier.png" class="mr-4">
<div class="media-body">
<h5 class="pt-0 mb-2">Gold</h5>
<p class="mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
roots in a piece </p>
<h6 class="mb-0 text-danger"><i class="icofont-money"></i> $5,000</h6>
</div>
</div>
</div>
</div>
<div class="stastics-list-item">
<h6 class="seven-color text-primary font-weight-bold mb-4 pt-3 stastics-title pl-4"><span
class="stastics-action bg-white"></span> Premier</h6>
<div class="stastics-list rounded p-4 bg-light">
<div class="media align-items-center">
<img alt="Silver Tier" src="images/silver-tier.png" class="mr-4">
<div class="media-body">
<h5 class="pt-0 mb-2">Silver</h5>
<p class="mb-3">The generated Lorem Ipsum is therefore always free from repetition, injected
humour
</p>
<h6 class="mb-0 text-danger"><i class="icofont-money"></i> $5,000</h6>
</div>
</div>
</div>
</div>
</div>
<div class="rounded bg-white shadow-sm p-4 upgrade-coin mb-4">
<div class="upgrade-coin-header clearfix">
<div class="float-left">
<h5 class="m-0"><i class="icofont-money"></i> $5,000</h5>
</div>
<div class="float-right text-right pt-1">
<h6 class="m-0"><i class="icofont-money"></i> $30,000</h6>
</div>
</div>
<div class="upgrade-coin-footer mt-3 mb-3">
<div class="upgrade-progress">
<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" style="width: 65%;"
role="progressbar" class="upgrade-progress-progress-bar orange-generator"></div>
</div>
</div>
<div class="upgrade-coin-header clearfix">
<div class="float-left">
<small class="seven-color">START</small>
</div>
<div class="float-right text-right">
<small class="seven-color">END</small>
</div>
</div>
</div>
<div class="rounded bg-white shadow-sm p-4 mb-4 faq-user">
<h5 class="mb-4  text-gray-900">FAQs</h5>
<div class="accordion" id="accordionExample">
<div class="faq-card">
<div class="faq-card-header" id="headingOne">
<h6 class="mb-0">
<button class="text-black" type="button" data-toggle="collapse" data-target="#collapseOne"
aria-expanded="true" aria-controls="collapseOne">
There are many variations of passages of Lorem Ipsum available. <i
class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
data-parent="#accordionExample">
<div class="faq-card-body">
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
cites of the word in classical literature, discovered the undoubtable source.</p>
</div>
</div>
</div>
<div class="faq-card">
<div class="faq-card-header" id="headingTwo">
<h6 class="mb-0">
<button class="text-black collapsed" type="button" data-toggle="collapse"
data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
It is a long established fact that a reader will be distracted by the readable content <i
class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
data-parent="#accordionExample">
<div class="faq-card-body">
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
cites of the word in classical literature, discovered the undoubtable source.</p>
</div>
</div>
</div>
<div class="faq-card pb-0">
<div class="faq-card-header" id="headingThree">
<h6 class="mb-0">
<button class="text-black collapsed" type="button" data-toggle="collapse"
data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Contrary to popular belief, Lorem Ipsum is not simply random text. <i
class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
data-parent="#accordionExample">
<div class="faq-card-body">
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
cites of the word in classical literature, discovered the undoubtable source.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="rounded bg-white shadow-sm mb-4 p-4 upgrade-coin">
<h5 class="mb-4  text-gray-900">Earning <a class="light-gray" href="#"><i
class="icofont-arrow-right light-gray float-right mt-1 icofont-1x"></i></a></h5>
<div class="upgrade-coin-header clearfix">
<div class="float-left">
<h6 class="m-0 text-primary"><i class="icofont-money"></i> $5,000</h6>
<small class="seven-color">START</small>
</div>
<div class="float-right text-right pt-1">
<h6 class="m-0 text-primary"><i class="icofont-money"></i> $30,000</h6>
<small class="seven-color">END</small>
</div>
</div>
<div class="upgrade-coin-footer mt-3 mb-2">
<div class="upgrade-progress">
<div class="upgrade-progress-progress-bar" role="progressbar" style="width: 65%;"
aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="rounded bg-white shadow-sm p-4 mb-4">
<h5 class="mb-3 text-gray-900">Top Offers</h5>
<p class="mb-4 p-0">Established fact that a reader will be distracted by the readable content of a
page when looking at its layout</p>
<div class="list-design-card active p-3">
<a href="#">
<span class="float-right text-info">60% OFF</span>
<div class="media">
<img class="mr-3" src="images/brand/3.png" alt="Generic placeholder image">
<div class="media-body">
<h6 class="mb-1 text-gray-900">MakeMyTrip</h6>
<p class="mb-0 text-gray-500">Ends in 18 days</p>
</div>
</div>
</a>
</div>
<div class="list-design-card active p-3">
<a href="#">
<span class="float-right text-info">50% OFF</span>
<div class="media">
<img class="mr-3" src="images/brand/5.png" alt="Generic placeholder image">
<div class="media-body">
<h6 class="mb-1 text-gray-900">Dominos</h6>
<p class="mb-0 text-gray-500">Ends in 1 days</p>
</div>
</div>
</a>
</div>
<div class="list-design-card active p-3 mb-0">
<a href="#">
<span class="float-right text-info">60% OFF</span>
<div class="media">
<img class="mr-3" src="images/brand/8.png" alt="Generic placeholder image">
<div class="media-body">
<h6 class="mb-1 text-gray-900">Amazon</h6>
<p class="mb-0 text-gray-500">Ends in 20 days</p>
</div>
</div>
</a>
</div>
</div>
<div class="rounded bg-white shadow-sm mb-4 p-4 text-center">
<img class="img-fluid" src="images/wallet-icon.png">
<h5 class="mb-3 text-gray-900">Free Shipping</h5>
<p class="mb-3 mt-2">Osahan Deel offers free shipping on most US Osahan Deel Goods orders of $34.99 or
more.
</p>
<a href="#" class="text-link text-danger">Up to 4.0% Cash Back</a>
</div>
<div class="user-panel-sidebar-link border mb-4 p-0 rounded overflow-hidden">
<a href="#" class="px-4 mb-1 shadow-sm py-3 d-flex align-items-center">Popular Stores
<i class="icofont-arrow-right light-gray ml-auto m-0 icofont-1x"></i></a>
<a href="#" class="px-4 mb-1 shadow-sm py-3 d-flex align-items-center">Popular Categories <i
class="icofont-arrow-right light-gray ml-auto m-0 icofont-1x"></i></a>
<a href="#" class="px-4 mb-1 shadow-sm py-3 d-flex align-items-center">International <i
class="icofont-arrow-right light-gray ml-auto m-0 icofont-1x"></i></a>
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
</body>

</html>
