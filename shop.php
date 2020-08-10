<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$qsR = mysqli_query($connect, "select * from reward order by rand()");
$nsR = mysqli_num_rows($qsR);

?>
<!DOCTYPE html>
<html lang="en"

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Shop</title>
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
<div id="content-wrapper">
<!-- Main Content -->
<div id="content">
<!-- Topbar -->
<?php include 'header.php'; ?>
<!-- End of Topbar -->
<!-- Begin Page Content -->

<section class="section-padding homepage-coupon">
<div class="container">
<div class="homepage-search-title text-center">
<h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">Time for reward</h1>
<h5 class="mb-5 text-shadow text-gray-800 font-weight-normal"><em>Put cash back in your wallet!</em></h5>
</div>
<div class="row clearfix">
<?php for($r=0;$r<$nsR;$r++){
$rsR = mysqli_fetch_assoc($qsR);
?>
<div class="col-xl-3 col-sm-6" style="margin-bottom:20px;">
<div class="custom-card shadow-sm h-100 stor-card">
<div class="custom-card-image">
<a href="gift/<?php echo str_replace(' ','-',$rsR['name']); ?>">
<img class="img-fluid item-img" src="assets/images/<?php echo $rsR['banner']; ?>">
</a>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="gift/<?php echo str_replace(' ','-',$rsR['name']); ?>"><?php echo $rsR['name']; ?></a></h6>
<p class="text-gray-500 mb-2">from <?php echo $rsR['price']; ?> FC</p>
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
