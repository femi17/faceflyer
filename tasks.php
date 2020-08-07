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

$totalEmpSQL = "SELECT * FROM tasks where status = 'approved' && end_date >= CURDATE() || status = 'approved' && end_date = '' order by rand()";

$allEmpResult = mysqli_query($connect, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);

$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;

$empSQL = "SELECT * FROM tasks where status = 'approved' && end_date >= CURDATE() || status = 'approved' && end_date = '' order by rand() LIMIT $startFrom, $showRecordPerPage";

$empResult = mysqli_query($connect, $empSQL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Tasks</title>
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

<section class="section-padding homepage-store-block">
<div class="container py-lg-4">
<div class="row">
<div class="col-xl-12">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-900">Top Tasks</h1>
</div>
</div>
<?php while ($row = mysqli_fetch_assoc($empResult)) { ?>
<div class="col-xl-3 col-sm-6" style="margin-bottom:25px;">
<div class="custom-card shadow-sm h-100 stor-card">
<a href="javascript:;" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $row['count']; ?> people fulfill" class="lock-badges-icon text-center"><i class="icofont-users"></i></a>
<div class="custom-card-image">
<a href="task-details/<?php echo $row['id']; ?>">
<img class="img-fluid item-img" src="assets/images/<?php echo $row['banner']; ?>">
</a>
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> <?php echo $row['coin']; ?></span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="task-details/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><?php echo $row['category']; ?></p>
<?php if($row['end_date']){ ?>
<p class="text-gray mb-0"><span class="text-warning"><i class="icofont-clock-time"></i> Time Left : <?php timeLeft($row['end_date']); ?></span></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
<div class="p-3 border-top">
<div class="custom-card-badge">
<a class="text-gray-900" href="task-details/<?php echo $row['id']; ?>">
<span class="badge badge-success"><i class="icofont-sale-discount"></i> OFFER</span> Complete task to earn <?php echo $row['coin']; ?> FC
</a>
</div>
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
