<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Dashboard - Merchant - Faceflyer</title>
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
<div class="py-5 bg-gray-600">
<div class="container">
<div class="row">
<div class="col-md-12 text-center py-lg-5">
<h1 class="text-white font-weight-light mt-0">Find the <span class="font-weight-bold">right plan</span><br>
for your store and business</h1>
</div>
</div>
</div>
</div>
<div class="section-padding osahan-pricing">
<div class="container">
<div class="row py-lg-4">
<div class="col-lg-4 col-md-6 mb-md-2">
<div class="shadow-sm bg-white rounded">
<!-- Header -->
<header class="card-header bg-white border-bottom text-center py-4">
<h4 class="h6 text-danger mb-2">Free</h4>
<span>Use it for free and upgrade<br> as you grow</span>
<span class="d-block">
<span class="display-4 text-gray-900 font-weight-bold">
<span class="small">&#8358;</span>0
</span>
<span class="d-block text-secondary">Forever</span>
</span>
</header>
<!-- End Header -->
<!-- Content -->
<div class="card-body p-4">
<ul class="list-group list-group-flush mb-4">
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> Task</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> 3 Post</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-danger mr-1"></i> Deals</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-danger mr-1"></i> Cashback</li>
</ul>
<?php if($_SESSION['plan'] == "free"){ ?>
<button type="button" class="btn btn-block btn-light" disabled tabindex="0">Subscribed</button>
<?php }else{ ?>
<button type="button" onClick="window.location.href='process?tk=frti&t=<?php echo base64_encode('freeplanonfaceflyermerchant')?>'" class="btn btn-block btn-danger" tabindex="0">Subscribe</button>
<?php  } ?>
</div>
<!-- End Content -->
</div>
</div>
<div class="col-lg-4 col-md-6 mb-md-2">
<div class="shadow-sm bg-white rounded">
<!-- Header -->
<header class="card-header bg-white border-bottom text-center py-4">
<h4 class="h6 text-warning mb-2">Basic</h4>
<span>Sufficient for small stores<br> and growing businesses</span>
<span class="d-block">
<span class="display-4 text-gray-900 font-weight-bold">
<span class="small">&#8358;</span>299
</span>
<span class="d-block text-secondary">Per Month</span>
</span>
</header>
<!-- End Header -->
<!-- Content -->
<div class="card-body p-4">
<ul class="list-group list-group-flush mb-4">
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> Task</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> 20 Post</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-success mr-1"></i> Deals</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-success mr-1"></i> Cashback</li>
</ul>
<?php if($_SESSION['plan'] == "basic"){ ?>
<button type="button" class="btn btn-block btn-light" disabled tabindex="0">Subscribed</button>
<?php }else{ ?>
<button type="button" onClick="window.location.href='process?tk=pyt&t=<?php echo base64_encode('basicplanonfaceflyermerchant')?>'" class="btn btn-block btn-danger" tabindex="0">Subscribe</button>
<?php } ?>
</div>
<!-- End Content -->
</div>
</div>
<div class="col-lg-4 col-md-6 mb-md-2">
<div class="shadow-sm bg-white rounded">
<!-- Header -->
<header class="card-header bg-white border-bottom text-center py-4">
<h4 class="h6 text-success mb-2">Premium</h4>
<span>For stores and businesses with<br> heavy traffic and customers</span>
<span class="d-block">
<span class="display-4 text-gray-900 font-weight-bold">
<span class="small">&#8358;</span>599
</span>
<span class="d-block text-secondary">Per Month</span>
</span>
</header>
<!-- End Header -->
<!-- Content -->
<div class="card-body p-4">
<ul class="list-group list-group-flush mb-4">
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> Task</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-check-circled text-success mr-1"></i> Unlimited Post</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-success mr-1"></i> Deals</li>
<li class="list-group-item py-2 px-0 border-0"><i
class="icofont-close-circled text-success mr-1"></i> Cashback</li>
</ul>
<?php if($_SESSION['plan'] == "premium"){ ?>
<button type="button" class="btn btn-block btn-light" disabled tabindex="0">Subscribed</button>
<?php }else{ ?>
<button type="button" onClick="window.location.href='process?tk=ulw&t=<?php echo base64_encode('premiumplanonfaceflyermerchant')?>'" class="btn btn-block btn-danger" tabindex="0">Subscribe</button>
<?php } ?>
</div>
<!-- End Content -->
</div>
</div>
</div>
</div>
</div>
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
<script src="../assets/js/custom.js"></script>

</body>
</html>
