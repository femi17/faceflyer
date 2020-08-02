<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ../');
exit;
}

$id = mysqli_real_escape_string($connect, multiexplode(array("/","/"),$_SERVER['REQUEST_URI'],'task-details'));

$qsTask = mysqli_query($connect, "select * from tasks where id = '$id' && end_date > CURDATE() || end_date = '' && id = '$id'");
$rsTask = mysqli_fetch_assoc($qsTask);

if(mysqli_num_rows($qsTask) <= 0){
header('Location: ../404');
exit;
}

$qsDeal = mysqli_query($connect, "select * from deals where end_date > CURDATE() || end_date = '' order by rand() limit 0,1");
$rsDeal = mysqli_fetch_assoc($qsDeal);

$qsCash = mysqli_query($connect, "select * from cashback order by rand() limit 0,1");
$rsCash = mysqli_fetch_assoc($qsCash);

$qs = mysqli_query($connect, "select * from tasks where end_date > CURDATE() && id <> '{$rsTask['id']}' || end_date = '' && id <> '{$rsTask['id']}' order by rand() limit 0,4");
$ns = mysqli_num_rows($qs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Details on deal</title>
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
<?php include 'header2.php'; ?>
<!-- End of Topbar -->
<br><br>
<div class="container">
<div id="leadboard" align="center">
<img src="../assets/images/leaderboard.jpeg" alt="ads" class="img-fluid" />
</div>
</div>
<!-- Begin Page Content -->
<section class="offer-dedicated-body section-padding">
<div class="container">
<div class="row pt-lg-4">
<div class="col-xl-8 col-sm-12">
<div class="offer-dedicated-body-left">
<div class="shadow-sm rounded overflow-hidden mb-4">
<div class="bg-white coupon-deal-detail-main">
<div class="coupon-deal-detail-main-block">
<img class="img-fluid coupon-deal-detail-main-img"
src="../assets/images/<?php echo $rsTask['banner'] ?>">
<div class="got-badge">
<img class="user-cou-img" src="../assets/images/<?php echo merchantSignin($rsTask['store'], 'logo'); ?>" alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsTask['store'], 'store_name'); ?>">
</div>
</div>
<div class="coupon-deal-detail-main-body p-4">
<h3 class="pr-lg-5 mb-3 text-gray-900"><?php echo $rsTask['name'] ?>
<span class="badge badge-danger ml-2"><?php echo $rsTask['coin'] ?> FC
</span>
</h3>
<h6 class="coupon-deal-detail-main-body-p font-weight-light pr-lg-5 text-secondary">
<?php echo $rsTask['description'] ?></h6>
<p class="mb-0 mt-4 font-weight-light text-gray-500"><i
class="icofont-users-alt-4 text-danger mr-2"></i> <?php echo $rsTask['count'] ?> People completed task
<?php if($rsTask['end_date'] && $rsTask['end_date'] > date('Y-m-d')){ ?>
<i class="ml-4 icofont-clock-time text-danger mr-2"></i> Ends <?php echo date('m.d.Y', strtotime($rsTask['end_date']))?></p>
<?php }else{ ?>
<i class="ml-4 icofont-clock-time text-danger mr-2"></i> This tasks has ended
<?php } ?>
&nbsp;&nbsp;
<i class="icofont-tasks text-danger mr-2"></i> <?php echo $rsTask['category']; ?>
</div>
</div>
<div
class="custom-nav coupon-deal-detail-main-footer bg-white border-top d-flex align-items-center px-4">
<ul class="nav">
<li class="nav-item">
<a href="#pc" class="nav-link active">Popular Tasks</a>
</li>
</ul>
<span class="ml-auto">
<button type="button" onclick="window.location.href='../coin'" class="btn btn-primary btn-sm shadow-sm"> Claim Coin </button>
</span>
</div>
</div>
<div id="pc" class="bg-white shadow-sm rounded mb-4 popular-stores-accordion">
<h5 class="mb-4 pt-4 pl-4 pr-4 text-gray-900">Popular Tasks</h5>
<div class="accordion" id="accordionExample">
<div class="popular-stores-card">
<div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo"
data-parent="#accordionExample">
<div class="popular-stores-card-body p-4">
<div class="row">
<?php for($d=0;$d<$ns;$d++){
$rs = mysqli_fetch_assoc($qs);
?>
<div class="col-lg-6 col-sm-12 my-2">
<div class="border-radius bg-white popular-stores-card-offer p-3">
<a href="../task-details/<?php echo $rs['id']; ?>">
<div class="media align-items-center">
<img alt="Generic placeholder image"
src="../assets/images/<?php echo $rs['banner']; ?>" class="mr-3">
<div class="media-body">
<div class="custom-card-body">
<h6 class="mb-0">
<a class="text-gray-900" href="../task-details/<?php echo $rs['id']; ?>"><?php echo $rs['name']; ?></a></h6>
<p class="text-gray-500 mb-2"> <?php echo $rs['category']; ?></p>
</div>
<div class="custom-card-badge">
<span class="badge badge-warning"><i
class="icofont-sale-discount"></i> OFFER</span> <?php echo $rs['coin']; ?> FC
</div>
</div>
</div>
</a>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-xl-4 col-sm-12">
<div class="bg-white shadow-sm rounded p-4 mb-4">
<h5 class="mb-4 text-gray-900">Useful Tips</h5>
<p>Task are done outside of <b>faceflyer</b>. Read the description on how best to complete this task</p>
<ul class="dot-list">
<li>Once task has been completed, click to claim <a href="coin">coin</a> attached to this task. Upload evidence of you completing the task</li>
<li>Evidence will be verified and coin added to your account</a>
</li>
<li>Please read the <a href="terms">T&C</a> to learn more.</li>
</ul>
</div>
<div class="bg-white shadow-sm rounded mb-4">
<div class="gold-members p-4">
<a href="../deal-details/<?php echo $rsDeal['id']; ?>">
<div class="media">
<img class="mr-3" src="../assets/images/<?php echo merchantSignin($rsDeal['store'], 'logo'); ?>" alt="Generic placeholder image">
<div class="media-body">
<div class="custom-card-body">
<h6 class="mb-3">
<a class="text-gray-900" href="../deal-details/<?php echo $rsDeal['id']; ?>"><?php echo $rsDeal['name']; ?></a></h6>
<?php if($rsDeal['end_date']){ ?>
<p class="text-gray-500"><i class="icofont-clock-time"></i> Ends in <?php timeLeft($rsDeal['end_date']); ?>
</p>
<?php } ?>
</div>
<div class="custom-card-footer d-flex align-items-center">
<span class="text-gray-900"><i class="icofont-sale-discount"></i> <?php echo $rsDeal['coin']; ?> FC</span><a class="btn btn-sm btn-white ml-auto" href="../deal-details/<?php echo $rsDeal['id']; ?>">Get Offer</a>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="bg-white shadow-sm rounded mb-4">
<div class="gold-members p-4">
<a href="../cashback-details/<?php echo $rsCash['id']; ?>">
<div class="media">
<img class="mr-3" src="../assets/images/<?php echo $rsCash['banner']; ?>" alt="merchant">
<div class="media-body">
<div class="custom-card-body">
<h6 class="mb-3">
<a class="text-gray-900" href="../cashback-details/<?php echo $rsCash['id']; ?>"><?php echo $rsCash['name']; ?></a></h6>
<p class="text-gray-500"><i class="icofont-building-alt"></i> <?php echo merchantSignin($rsCash['store'], 'store_name'); ?>
</p>
</div>
<div class="custom-card-footer d-flex align-items-center">
<a class="btn btn-sm btn-white ml-auto" href="../cashback-details/<?php echo $rsCash['id']; ?>">Get Offer</a>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer2.php'; ?>

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
<!-- Logout Modal-->

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
