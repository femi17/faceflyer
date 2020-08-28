<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$qsDeal = mysqli_query($connect, "select * from coin where module = 'deals' && uID = '{$_SESSION['facer']}' order by id desc");
$nsDeal = mysqli_num_rows($qsDeal);

$qsTask = mysqli_query($connect, "select * from coin where module = 'tasks' && uID = '{$_SESSION['facer']}' order by id desc");
$nsTask = mysqli_num_rows($qsTask);

$qsCash = mysqli_query($connect, "select * from coin where module = 'cashback' && uID = '{$_SESSION['facer']}' order by id desc");
$nsCash = mysqli_num_rows($qsCash);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - User Dashboard</title>
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
<!-- Hotjar Tracking Code for www.faceflyer.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1964395,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
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
<section class="user-panel-body py-5">
<div class="container">
<div class="row">
<div class="col-xl-3 col-sm-4">
<?php include 'user-panel.php'; ?>
</div>
<div class="col-xl-9 col-sm-8 order-first order-md-last" style="margin-bottom:30px;">
<?php if($_GET['plan']){ ?>
<p style="color:green"><strong>Your subscription was successful</strong></p>
<?php } ?>
<?php if($_GET['cancel']){ ?>
<p style="color:green"><strong>Your subscription was successfully cancelled</strong></p>
<?php } ?>
<div class="row">
<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-warning border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Deals</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><h3><?php echo count_claim_facer('deals', 'approved', $_SESSION['facer'])?></h3> deals claimed</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-danger border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tasks
</div>
<div class="row no-gutters align-items-center">
<div class="col-auto">
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_facer('tasks', 'approved', $_SESSION['facer'])?></h3> tasks completed</div>
</div>
</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-info border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cashback
</div>
<div class="row no-gutters align-items-center">
<div class="col-auto">
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_facer('cashback', 'approved', $_SESSION['facer'])?></h3> cashback used</div>
</div>
</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="user-panel-body-right">
<div id="mc" class="user-panel-tab-view mb-4">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Deals</h5>
</div>
</div>
<div>
<div class="row  align-items-center">
<div class="col-lg-12">
<?php if($nsDeal >= 3){ ?>
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php }elseif($nsDeal == 2){ ?>
<div class="owl-carousel owl-theme owl-carousel-two homepage-coupon-carousel">
<?php }else{ ?>
<div class="owl-carousel owl-theme owl-carousel-one homepage-coupon-carousel">
<?php } ?>
<?php if($nsDeal > 0){ ?>
<?php for($d=0; $d<$nsDeal; $d++){
$rsDeal = mysqli_fetch_assoc($qsDeal);
?>
<div class="item">
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo fetchData('merchant', $rsDeal['merchant'], 'store_name', 'logo'); ?>"
alt="merchant">
<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDeal['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format(fetchData('deals', $rsDeal['pID'], 'id', 'price')); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo fetchData('deals', $rsDeal['pID'], 'id', 'headline'); ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDeal['coin']; ?></span></div>
<div class="mb-0">
<?php if(fetchData('deals', $rsDeal['pID'], 'id', 'end_date')){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime(fetchData('deals', $rsDeal['pID'], 'id', 'end_date')))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</div>
<?php } ?>
<?php }else{ ?>
<p>You have not purchased any deal</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>

<div id="md" class="user-panel-tab-view mb-4">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Tasks</h5>
</div>
</div>
<div>
<div class="row  align-items-center">
<div class="col-lg-12">
<?php if($nsTask >= 3){ ?>
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php }elseif($nsTask == 2){ ?>
<div class="owl-carousel owl-theme owl-carousel-two homepage-coupon-carousel">
<?php }else{ ?>
<div class="owl-carousel owl-theme owl-carousel-one homepage-coupon-carousel">
<?php } ?>
<?php if($nsTask > 0){ ?>
<?php for($t=0; $t<$nsTask; $t++){
$rsTask = mysqli_fetch_assoc($qsTask);
?>
<div class="item">
<div class="custom-card shadow-sm h-100 stor-card">
<div class="custom-card-image">
<img class="img-fluid item-img" src="assets/images/<?php echo fetchData('tasks', $rsTask['pID'], 'id', 'banner'); ?>">
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> <?php echo $rsTask['coin']; ?></span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="javascript:;"><?php echo $rsTask['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><?php echo fetchData('tasks', $rsDeal['pID'], 'id', 'category'); ?></p>
<?php if(fetchData('tasks', $rsTask['pID'], 'id', 'end_date')){ ?>
<p class="text-gray mb-0"><span class="text-gold"><i class="icofont-clock-time"></i> Time Left : <?php timeLeft(fetchData('tasks', $rsTask['pID'], 'id', 'end_date')); ?></span></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
<div class="p-3 border-top">
<div class="custom-card-badge">
<span class="badge badge-success"><i class="icofont-sale-discount"></i> OFFER</span> Complete task to earn <?php echo $rsTask['coin']; ?> FC
</div>
</div>
</div>
</div>
<?php } ?>
<?php }else{ ?>
<p>No task has been completed</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>

<div id="mo" class="user-panel-tab-view mb-0">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Cashback</h5>
</div>
</div>
<div>
<div class="row  align-items-center">
<div class="col-lg-12">
<?php if($nsCash >= 3){ ?>
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php }elseif($nsCash == 2){ ?>
<div class="owl-carousel owl-theme owl-carousel-two homepage-coupon-carousel">
<?php }else{ ?>
<div class="owl-carousel owl-theme owl-carousel-one homepage-coupon-carousel">
<?php } ?>
<?php if($nsCash > 0){ ?>
<?php for($c=0; $c<$nsCash; $c++){
$rsCash = mysqli_fetch_assoc($qsCash);
?>
<div class="item">
<div class="custom-card shadow-sm bg-white h-100">
<div class="custom-card-image">
<img class="img-fluid item-img" src="assets/images/<?php echo fetchData('cashback', $rsTask['pID'], 'id', 'banner'); ?>">
<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
<svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor">
</path>
</svg>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-1"><a class="text-gray-900" href="javascript:;"><?php echo $rsCash['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><i class="icofont-price"></i> <span
class="text-gray-600 font-weight-bold">₦<?php echo fetchData('cashback', $rsTask['pID'], 'id', 'spend'); ?></span></p>
</div>
<div class="custom-card-badge mt-2">
<span class="badge badge-success">OFFER</span> Earn 2 FC per ₦500
</div>
</div>
</div>
</div>
<?php } ?>
<?php }else{ ?>
<p>No cashback have been claimed</p>
<?php } ?>
</div>
</div>
</div>
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

</div>
</div>

<?php include 'footer.php'; ?>
<!-- /.container-fluid -->
<!-- End of Main Content -->
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
