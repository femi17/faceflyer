<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$qsDeal = mysqli_query($connect, "select * from deals where end_date > CURDATE() || end_date = '' order by rand() limit 0,4");
$nsDeal = mysqli_num_rows($qsDeal);

$qsDealCat1 = mysqli_query($connect, "select * from deals where category = 'Grocery' && end_date > CURDATE() || category = 'Grocery' && end_date = '' order by rand() limit 0,12");
$nsDealCat1 = mysqli_num_rows($qsDealCat1);

$qsDealCat2 = mysqli_query($connect, "select * from deals where category = 'Medicine' && end_date > CURDATE() || category = 'Medicine' && end_date = '' order by rand() limit 0,12");
$nsDealCat2 = mysqli_num_rows($qsDealCat2);

$qsDealCat3 = mysqli_query($connect, "select * from deals where category = 'Meal' && end_date > CURDATE() || category = 'Meal' && end_date = '' order by rand() limit 0,12");
$nsDealCat3 = mysqli_num_rows($qsDealCat3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Deals</title>
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
<section class="section-padding">
<div class="container">
<div class="row pt-lg-4">
<div class="col-md-2"></div>
<div class="col-md-8">
<div id="slider" class="carousel slide" data-ride="carousel" data-interval="5000">

<div class="carousel-inner">

<div class="carousel-item active">
<img class="img-fluid" src="assets/images/imageTwo11367.jpg" alt="">
</div>

<div class="carousel-item">
<img class="img-fluid" src="assets/images/imageTwo11675.jpg" alt="">
</div>

<div class="carousel-item">
<img class="img-fluid" src="assets/images/imageTwo11688.jpg" alt="">
</div>

</div>
<div class="d-none d-md-block">
<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</section>

<section class="section-padding">
<div class="container">
<div class="row pt-lg-4">
<?php for($d=0; $d<$nsDeal; $d++){
$rsDeal = mysqli_fetch_assoc($qsDeal);
?>
<div class="col-xl-3 col-md-12 mb-4">
<a href="deal-details/<?php echo $rsDeal['id']; ?>">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDeal['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($rsDeal['store'], 'logo'); ?>"
alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsDeal['store'], 'store_name'); ?>">
<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDeal['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsDeal['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsDeal['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDeal['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsDeal['end_date'] && date('Y-m-d') > $rsDeal['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsDeal['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php } ?>
</div>
</div>
</section>

<section class="section-padding pt-0">
<div class="container">
<div class="row">
<div class="col-xl-12 text-center">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">All Deals</h1>
<a href="all-deals" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-eye fa-sm text-white-50"></i> View All</a>
</div>
</div>
<div class="col-xl-3 col-md-12 mb-4">
<div class="bg-danger shadow-sm p-4 text-center h-100 border-radius d-flex align-items-center">
<span>
<img src="assets/images/grocery.png"><br><br>
<h6 class="text-center m-0 w-100 text-white font-weight-bold">Grocery Stores</h6>
</span>
</div>

</div>
<div class="col-xl-9 col-md-12 mb-4">
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php for($dc1=0; $dc1<$nsDealCat1; $dc1++){
$rsDealCat1 = mysqli_fetch_assoc($qsDealCat1);
?>
<div class="item">
<a href="deal-details/<?php echo $rsDealCat1['id']; ?>">
<?php if($rsDealCat1['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDealCat1['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDealCat1['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($rsDealCat1['store'], 'logo'); ?>" alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsDealCat1['store'], 'store_name'); ?>">

<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDealCat1['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsDealCat1['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsDealCat1['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDealCat1['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsDealCat1['end_date'] && date('Y-m-d') > $rsDealCat1['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsDealCat1['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php } ?>
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-xl-3 col-md-12 mb-4">
<div class="bg-primary shadow-sm p-4 text-center h-100 border-radius d-flex align-items-center">
<span>
<img src="assets/images/pharmacy.png"><br><br>
<h6 class="text-center m-0 w-100 text-white font-weight-bold">Pharmacies</h6>
</span>
</div>
</div>
<?php if($nsDealCat2 > 0) { ?>
<div class="col-xl-9 col-md-12 mb-4">
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php for($dc2=0; $dc2<$nsDealCat2; $dc2++){
$rsDealCat2 = mysqli_fetch_assoc($qsDealCat2);
?>
<div class="item">
<a href="deal-details/<?php echo $rsDealCat2['id']; ?>">
<?php if($rsDealCat2['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDealCat2['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDealCat2['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($rsDealCat2['store'], 'logo'); ?>" alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsDealCat2['store'], 'store_name'); ?>">

<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDealCat2['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsDealCat2['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsDealCat2['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDealCat2['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsDealCat2['end_date'] && date('Y-m-d') > $rsDealCat2['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsDealCat2['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php } ?>
</div>
</div>
</div>
<?php }else{ ?>
<p align="center" style="color:#c00; margin-left:120px; margin-top:30px">No deal in this category</p>
<?php } ?>
</div>
<div class="row mt-3">
<div class="col-xl-3 col-md-12 mb-4">
<div class="bg-info shadow-sm p-4 text-center h-100 border-radius d-flex align-items-center">
<span>
<img src="assets/images/eatery.png"><br><br>
<h6 class="text-center m-0 w-100 text-white font-weight-bold">Eateries</h6>
</span></div>
</div>

<?php if($nsDealCat3 > 0) { ?>
<div class="col-xl-9 col-md-12 mb-4">
<div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
<?php for($dc3=0; $dc3<$nsDealCat3; $dc3++){
$rsDealCat3 = mysqli_fetch_assoc($qsDealCat3);
?>
<div class="item">
<a href="deal-details/<?php echo $rsDealCat3['id']; ?>">
<?php if($rsDealCat3['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDealCat3['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDealCat3['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($rsDealCat3['store'], 'logo'); ?>" alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsDealCat3['store'], 'store_name'); ?>">

<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDealCat3['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsDealCat3['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsDealCat3['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDealCat3['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsDealCat3['end_date'] && date('Y-m-d') > $rsDealCat3['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsDealCat3['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php } ?>
</div>
</div>
</div>
<?php }else{ ?>
<p align="center" style="color:#c00; margin-left:120px; margin-top:30px">No deal in this category</p>
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
