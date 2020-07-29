<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}

$showRecordPerPage = 12;

if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;

$totalEmpSQL = "SELECT * FROM deals order by id desc";

$allEmpResult = mysqli_query($connect, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);

$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;

$empSQL = "SELECT * FROM deals order by id desc LIMIT $startFrom, $showRecordPerPage";

$empResult = mysqli_query($connect, $empSQL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - all Deals</title>
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
<div class="col-xl-12 text-center">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">All Deals</h1>
</div>
</div>
<?php while ($row = mysqli_fetch_assoc($empResult)) { ?>

<div class="col-xl-3 col-md-12 mb-4">
<a href="deal-details/<?php echo $row['id']; ?>">
<?php if($row['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($row['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($row['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $row['count']; ?> people fulfill" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="assets/images/<?php echo merchantSignin($row['store'], 'logo'); ?>"
alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($row['store'], 'store_name'); ?>">
<h4 class="mt-1 h5 text-gray-900"><?php echo $row['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($row['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $row['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $row['coin']; ?></span></div>
<div class="mb-0">
<?php if($row['end_date'] && date('Y-m-d') > $row['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($row['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
<br>
<div class="container">
<?php if($totalEmployee > 0){ ?>
<div style="float:left">
<p>Showing <?php echo $currentPage; ?> of <?php echo $totalEmployee; ?> entries</p>
</div>
<div style="float:right">
<nav aria-label="">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>
</div>
<?php } ?>
</div>
<br><br>
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
