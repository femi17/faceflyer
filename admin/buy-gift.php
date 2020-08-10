<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

$qsCoin = mysqli_query($connect, "select * from buy_gift order by id desc");
$nsCoin = mysqli_num_rows($qsCoin);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer</title>
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
<link rel="stylesheet" href="../assets/css/datatables.css">
<link rel="stylesheet" href="../assets/css/summernote.css"/>
<script src="../assets/js/jquery.min.js"></script>

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
<div class="col-xl-3 col-md-3 mb-4">
<div class="card border-left-warning border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Deals</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><h3><?php echo count_claim('deals', 'approved') ?></h3> people claim deals</div>
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
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim('tasks', 'approved') ?></h3> completes tasks</div>
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
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><?php echo count_claim('cashback', 'approved') ?></h3> people use store cashback</div>
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
<div class="col-md-12">
<div class="card border-left-success border-0 shadow-sm h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<p class="font-weight-bold text-secondary text-uppercase text-xs">Uploads</p>
<a href="uploads?p=tasks">
<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><span style="font-size:28px;"><?php echo count_all('tasks') ?></span> Tasks</div>
</a>
<a href="uploads?p=deals">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1"><span style="font-size:28px;"><?php echo count_all('deals') ?></span> Deals</div>
</a>
<a href="uploads?p=cashback">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1"><span style="font-size:28px;"><?php echo count_all('cashback') ?></span> Cashback</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="user-panel-body-right">
<div class="user-panel-tab-view mb-4">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Buy Gift</h5>
</div>
</div>
<div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>uID</th>
<th>Name</th>
<th>Phone</th>
<th>Voucher</th>
<th>Buy</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php for($t=0;$t<$nsCoin;$t++){
$rsCoin = mysqli_fetch_assoc($qsCoin);
?>
<tr id="tr<?php echo $rsCoin['id'] ?>">
<td><?php echo $rsCoin['uID'] ?></span><br><b><?php echo $rsCoin['coin'] ?></b></td>
<td><b><?php echo $rsCoin['name'] ?></b><br><span><?php echo $rsCoin['email'] ?></span></td>
<td><?php echo $rsCoin['phone'] ?></td>
<td><?php echo $rsCoin['voucher'] ?></td>
<td><?php echo $rsCoin['buy'] ?></td>
<td><?php echo date('F d, Y', strtotime($rsCoin['date'])); ?></td>
</tr>

<?php } ?>
</tbody>
</table>
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

<script src="../assets/js/datatables.js"></script>

<script src="../assets/js/summernote.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>

</html>
