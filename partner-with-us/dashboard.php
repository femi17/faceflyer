<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceMerchant']){
header('Location: ./');
exit;
}

$qsDeal = mysqli_query($connect, "select * from deals where store = '{$_SESSION['faceMerchant']}' order by id desc");
$nsDeal = mysqli_num_rows($qsDeal);

$qsTask = mysqli_query($connect, "select * from tasks where store = '{$_SESSION['faceMerchant']}' order by id desc");
$nsTask = mysqli_num_rows($qsTask);

$qsCash = mysqli_query($connect, "select * from cashback where store = '{$_SESSION['faceMerchant']}' order by id desc");
$nsCash = mysqli_num_rows($qsCash);

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
<!-- Custom fonts for template-->
<link href="../assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for template-->
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
<!-- Custom styles for template-->
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
<nav class="navbar navbar-expand navbar-light bg-white osahan-deel-nav-top py-4">
<div class="container">
<a class="navbar-brand py-0 mr-2" href="../home"><img class="w-40" src="../assets/images/logo.png" alt="#"> <span
class="small ml-3">Home</span>
</a>
<a class="py-0 mr-2" href="pricing"> <span
class="small ml-3">Upgrade</span>
</a>
</div>
</nav>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<section class="user-panel-body py-5">
<div class="container">
<div class="row">
<div class="col-xl-3 col-sm-4">
<div class="user-panel-body-left">
<div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
<p>You are on <?php echo $_SESSION['plan']; ?> plan</p>

<img class="mb-3 mt-2 user-info-img" alt="merchant"
src="../assets/images/<?php echo merchantSignin($_SESSION['faceMerchant'], 'logo'); ?>">
<h6 class="text-black mb-2 text-gray-900"><?php echo merchantSignin($_SESSION['faceMerchant'], 'store_name'); ?></h6>
<p class="m-0">claims based on store</p>
<p>&nbsp;</p>
<button type="button" onClick="window.location.href='logout'" class="btn btn-primary btn-block"><i class="icofont-logout"></i>
Logout</button>
<p class="mb-0 mt-3"><a href="settings">Edit Profile</a></p>
</div>
<div class="user-panel-sidebar-link mb-4 bg-white rounded shadow-sm overflow-hidden">
<a href="#md"><i class="icofont-ticket"></i> Tasks</a>
<a href="#mc"><i class="icofont-fire"></i> Deals</a>
<a href="#mo"><i class="icofont-sale-discount"></i> Cashback</a>
<a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="Cancel" id="deleteBtn" data-type="cancel"><i class="icofont-license"></i> Cancel Subscription</a>
</div>
</div>
</div>
<div class="col-xl-9 col-sm-8 order-first order-md-last" style="margin-bottom:30px;">
<?php if($_GET['plan']){ ?>
<p style="color:green"><strong>Your subscription was successful</strong></p>
<?php } ?>
<?php if($_GET['cancel']){ ?>
<p style="color:green"><strong>Your subscription was successfully cancelled</strong></p>
<?php } ?>
<div class="row">
<?php if($_SESSION['package'] == "free"){ ?>
<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-primary border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Tasks</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('tasks', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> people completed task</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-success border-0 shadow-sm h-100 py-2">
<div class="card-body">
<a href="pricing">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
explore and do more</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Upgrade</div>
</div>
</div>
</a>
</div>
</div>
</div>
<?php } ?>
<?php if($_SESSION['plan'] == "basic"){ ?>
<div class="col-xl-3 col-md-3 mb-4">
<div class="card border-left-warning border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Deals</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('deals', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> people claim deals</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-3 mb-4">
<div class="card border-left-danger border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tasks
</div>
<div class="row no-gutters align-items-center">
<div class="col-auto">
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('tasks', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> completed tasks</div>
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

<div class="col-xl-3 col-md-3 mb-4">
<div class="card border-left-info border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cashback
</div>
<div class="row no-gutters align-items-center">
<div class="col-auto">
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('cashback', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> people use your store cashback</div>
</div>
<div class="col">
<div class="progress progress-sm mr-2">
<div class="progress-bar bg-info" role="progressbar"
style="width: 50%" aria-valuenow="50" aria-valuemin="0"
aria-valuemax="100"></div>
</div>
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

<div class="col-xl-3 col-md-3 mb-4">
<div class="card border-left-success border-0 shadow-sm h-100 py-2">
<div class="card-body">
<a href="pricing">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
Feel first class go premium now</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Upgrade</div>
</div>
</div>
</a>
</div>
</div>
</div>
<?php } ?>
<?php if($_SESSION['plan'] == "premium"){ ?>
<div class="col-xl-4 col-md-4 mb-4">
<div class="card border-left-warning border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Deals</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('deals', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> people claim deals</div>
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
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('tasks', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> completed tasks</div>
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
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim_merchant('cashback', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3> people use your store cashback</div>
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

<?php } ?>
</div>
<div class="user-panel-body-right">
<?php if($_SESSION['package'] == "subscribed"){ ?>
<div id="mc" class="user-panel-tab-view mb-4">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Deals <span style="float:right;font-size:13px;"><a href="add-deal">Add a deal</a></span></h5>
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
<a href="add-deal?i=<?php echo $rsDeal['id']; ?>">
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsDeal['count']; ?> people fulfill"
class="lock-badges-icon"><i class="icofont-users"></i></a>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="../assets/images/<?php echo merchantSignin($_SESSION['faceMerchant'], 'logo'); ?>"
alt="merchant">
<h4 class="mt-1 h5 text-gray-900"><?php echo $rsDeal['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsDeal['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsDeal['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsDeal['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsDeal['end_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsDeal['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php } ?>
<?php }else{ ?>
<p>No deal have been uploaded</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
<div id="md" class="user-panel-tab-view mb-4">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Tasks <span style="float:right;font-size:13px;"><a href="add-task">Add a task</a></span></h5>
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
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsTask['count']; ?> people fulfill" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<div class="custom-card-image">
<a href="add-task?i=<?php echo $rsTask['id']; ?>">
<img class="img-fluid item-img" src="../assets/images/<?php echo $rsTask['banner']; ?>">
</a>
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> <?php echo $rsTask['coin']; ?></span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="add-task?i=<?php echo $rsTask['id']; ?>"><?php echo $rsTask['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><?php echo $rsTask['category']; ?></p>
<?php if($rsTask['end_date']){ ?>
<p class="text-gray mb-0"><span class="text-gold"><i class="icofont-clock-time"></i> Time Left : 2
days: 3 Hrs</span></p>
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
<p>No deal have been uploaded</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
<?php if($_SESSION['package'] == "subscribed"){ ?>
<div id="mo" class="user-panel-tab-view mb-0">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Cashback <span style="float:right;font-size:13px;"><a href="add-cashback">Add cashback</a></span></h5>
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
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsCash['count']; ?> people fulfill" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<div class="custom-card-image">
<a href="add-cashback?i=<?php echo $rsCash['id']; ?>">
<img class="img-fluid item-img" src="../assets/images/<?php echo $rsCash['banner']; ?>">
</a>
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
<h6 class="mb-1"><a class="text-gray-900" href="add-cashback?i=<?php echo $rsCash['id']; ?>"><?php echo $rsCash['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><i class="icofont-price"></i> <span
class="text-gray-600 font-weight-bold">₦<?php echo $rsCash['spend']; ?></span></p>
</div>
<div class="custom-card-badge mt-2">
<span class="badge badge-success">OFFER</span> Earn 2 FC per ₦500
</div>
</div>
</div>
</div>
<?php } ?>
<?php }else{ ?>
<p>No deal have been uploaded</p>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
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

</body>

</html>
