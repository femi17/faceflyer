<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$qsDeal = mysqli_query($connect, "select * from deals where status = 'approved' && end_date >= CURDATE() || status = 'approved' && end_date = '' order by rand() limit 0,12");
$nsDeal = mysqli_num_rows($qsDeal);

$qsTask = mysqli_query($connect, "select * from tasks where status = 'approved' &&  CURDATE() <= end_date || status = 'approved' && end_date = '' order by rand() limit 0,12");
$nsTask = mysqli_num_rows($qsTask);

$qsCash = mysqli_query($connect, "select * from cashback where status = 'approved' order by rand() limit 0,4");
$nsCash = mysqli_num_rows($qsCash);

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
<script data-ad-client="ca-pub-2411535938940450" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Faceflyer Leaderboard -->
<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-2411535938940450"
data-ad-slot="1634923446"
data-ad-format="auto"
data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<section class="section-padding homepage-store-block">
<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">Tasks</h1>
<?php if($nsTask > 4){ ?>
<a href="tasks" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fa fa-eye fa-sm text-white-50"></i> View All</a>
<?php } ?>
</div>
<div class="row  align-items-center">
<?php
for($t=0; $t<$nsTask; $t++){
$rsTask = mysqli_fetch_assoc($qsTask);
?>
<?php if($rsTask['end_date'] && $rsTask['end_date'] >= date('Y-m-d') || !$rsTask['end_date']){ ?>
<div class="col-xl-3 col-sm-6" style="margin-bottom:20px;">
<div class="custom-card shadow-sm h-100 stor-card">
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsTask['count']; ?> people fulfill" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<div class="custom-card-image">
<a href="task-details/<?php echo $rsTask['id']; ?>">
<img class="img-fluid item-img" src="assets/images/<?php echo $rsTask['banner']; ?>">
</a>
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> <?php echo $rsTask['coin']; ?></span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="task-details/<?php echo $rsTask['id']; ?>"><?php echo $rsTask['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><?php echo $rsTask['category']; ?></p>
<?php if($rsTask['end_date']){ ?>
<p class="text-gray mb-0"><span class="text-warning"><i class="icofont-clock-time"></i> Time Left : <?php timeLeft($rsTask['end_date']); ?></span></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
<div class="p-3 border-top">
<div class="custom-card-badge">
<a class="text-gray-900" href="task-details/<?php echo $rsTask['id']; ?>">
<span class="badge badge-success"><i class="icofont-sale-discount"></i> OFFER</span> Complete task to earn <?php echo $rsTask['coin']; ?> FC
</a>
</div>
</div>
</div>
</div>
<?php } } ?>
</div>
</div>
</section>

<section class="section-padding homepage-coupon">
<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">Deals</h1>
<?php if($nsDeal > 4){ ?>
<a href="deals" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fa fa-eye fa-sm text-white-50"></i> View All</a>
<?php } ?>
</div>
<div class="row align-items-center">
<?php if($nsDeal <= 3){
for($d=0; $d<$nsDeal; $d++){
$rsDeal = mysqli_fetch_assoc($qsDeal);
?>
<div class="col-xl-3 col-sm-6">
<a href="deal-details/<?php echo $rsDeal['id']; ?>">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<span data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDeal['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></span>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<span data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsDeal['count']; ?> people bought" class="lock-badges-icon text-center"><i class="icofont-users"></i></span>
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
<?php } }else{ ?>
<div class="col-lg-12">
<div class="owl-carousel owl-theme owl-carousel-four homepage-coupon-carousel">
<?php for($d=0; $d<$nsDeal; $d++){
$rsDeal = mysqli_fetch_assoc($qsDeal);
?>
<div class="item">
<a href="deal-details/<?php echo $rsDeal['id']; ?>">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsDeal['start_date'] > date('Y-m-d')){ ?>
<span data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsDeal['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></span>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<span data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsDeal['count']; ?> people bought" class="lock-badges-icon text-center"><i class="icofont-users"></i></span>
<?php } ?>

<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($rsDeal['store'], 'logo'); ?>" alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsDeal['store'], 'store_name'); ?>">

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
<?php } ?>
</div>
</div>
</section>

<section class="section-padding homepage-rest-block">
<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">Cashback</h1>
<?php if($nsCash > 4){ ?>
<a href="cashback" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fa fa-eye fa-sm text-white-50"></i> View All</a>
<?php } ?>
</div>
<div class="row">
<?php for($c=0; $c<$nsCash; $c++){
$rsCash = mysqli_fetch_assoc($qsCash);
?>
<div class="col-xl-3 col-sm-6">
<div class="custom-card shadow-sm bg-white h-100">
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $rsCash['count']; ?> people bought" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<div class="custom-card-image">
<a href="cashback-details/<?php echo $rsCash['id']; ?>">
<img class="img-fluid item-img" src="assets/images/<?php echo $rsCash['banner']; ?>">
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
<h6 class="mb-1"><a class="text-gray-900" href="cashback-details/<?php echo $rsCash['id']; ?>"><?php echo $rsCash['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><i class="icofont-price"></i> <span
class="text-gray-600 font-weight-bold">₦<?php echo $rsCash['spend']; ?></span><span
class="text-gray-600 font-weight-bold" style="float:right"><i class="icofont-building"></i> <?php echo merchantSignin($rsCash['store'], 'store_name'); ?></span></p>
</div>
<div class="custom-card-badge mt-2">
<span class="badge badge-success">OFFER</span> Earn 2 FC per ₦500
</div>
</div>
</div>
</div>
<?php } ?>
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
