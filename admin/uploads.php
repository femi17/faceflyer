<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

if($_GET['p']){
$p = mysqli_real_escape_string($connect, $_GET['p']);

$qsCoin = mysqli_query($connect, "select * from $p order by id desc");
$nsCoin = mysqli_num_rows($qsCoin);

}
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
<h5 class="mb-0 text-gray-900">All <?php echo ucfirst($p);?></h5>
</div>
</div>
<div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th></th>
<th>Store</th>
<th>Name</th>
<?php if($p == "cashback"){ ?>
<th>Spend</th>
<?php }else{ ?>
<th>Coin</th>
<?php } ?>
<th>Status</th>
<th>Date</th>
<th></th>
</tr>
</thead>
<tbody>
<?php for($t=0;$t<$nsCoin;$t++){
$rsCoin = mysqli_fetch_assoc($qsCoin);
?>
<tr>
<td><?php echo $t + 1; ?></td>
<td><span data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo fetchData('merchant', $rsCoin['store'], 'email', "store_name"); ?>"><?php echo $rsCoin['store'] ?></span></td>
<td><?php echo $rsCoin['name'] ?></td>
<?php if($p == "cashback"){ ?>
<td><?php echo $rsCoin['spend'] ?></td>
<?php }else{ ?>
<td><?php echo $rsCoin['coin'] ?></td>
<?php } ?>
<td><?php echo $rsCoin['status'] ?></td>
<td><?php echo date('F d, Y', strtotime($rsCoin['date'])); ?></b></span> </td>
<td>
<span data-target="#preview<?php echo $rsCoin['id'] ?>" data-toggle="modal">
<button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="preview"><i class="fa fa-eye"></i></button>
</span>
<button type="button" <?php if($p == "cashback"){ ?> onclick="window.location.href='add-cashback?i=<?php echo $rsCoin['id']; ?>'" <?php }elseif($p == "tasks"){ ?> onclick="window.location.href='add-task?i=<?php echo $rsCoin['id']; ?>'" <?php }else{ ?> onclick="window.location.href='add-deal?i=<?php echo $rsCoin['id']; ?>'" <?php } ?> class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="View upload"><i class="fa fa-edit"></i></button>
</td>
</tr>
<div class="modal animated fadeIn" id="preview<?php echo $rsCoin['id']; ?>" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="title" id="defaultModalLabel">Preview</h6>
</div>
<div class="modal-body">
<div class="row clearfix">
<div class="col-md-2"></div>
<?php if($p == "tasks"){ ?>
<div class="col-md-7" style="margin-bottom:20px;">
<div class="custom-card shadow-sm h-100 stor-card">
<div class="custom-card-image">
<a href="add-task?i=<?php echo $rsCoin['id']; ?>">
<img class="img-fluid item-img" src="../assets/images/<?php echo $rsCoin['banner']; ?>">
</a>
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> <?php echo $rsCoin['coin']; ?></span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="add-task?i=<?php echo $rsCoin['id']; ?>"><?php echo $rsCoin['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><?php echo $rsCoin['category']; ?></p>
<?php if($rsCoin['end_date']){ ?>
<p class="text-gray mb-0"><span class="text-warning"><i class="icofont-clock-time"></i> Time Left : <?php timeLeft($rsCoin['end_date']); ?></span></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
<div class="p-3 border-top">
<div class="custom-card-badge">
<a class="text-gray-900" href="add-task?i=<?php echo $rsCoin['id']; ?>">
<span class="badge badge-success"><i class="icofont-sale-discount"></i> OFFER</span> Complete task to earn <?php echo $rsCoin['coin']; ?> FC
</a>
</div>
</div>
</div>
</div>
<?php }elseif($p == "deals"){ ?>
<div class="col-sm-7">
<a href="add-deal?i=<?php echo $rsCoin['id']; ?>">
<?php if($rsCoin['start_date'] > date('Y-m-d')){ ?>
<div class="bg-white shadow-sm p-4 text-center h-100 border-radius lock-badges">
<?php if($rsCoin['start_date'] > date('Y-m-d')){ ?>
<a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Coming Soon <?php echo date('F d, Y', strtotime($rsCoin['start_date'])) ?>"
class="lock-badges-icon"><i class="icofont-clock-time"></i></a>
<?php } ?>
<?php }else{ ?>
<div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
<?php } ?>
<div class="all-coupon">
<img class="mb-3 user-cou-img" src="../assets/images/<?php echo merchantSignin($rsCoin['store'], 'logo'); ?>"
alt="merchant logo" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo merchantSignin($rsCoin['store'], 'store_name'); ?>">
<h4 class="mt-1 h5 text-gray-900"><?php echo $rsCoin['name']; ?></h4>
<p class="text-gray-900">&#8358;<?php echo number_format($rsCoin['price']); ?></p>
<h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal"><?php echo $rsCoin['headline']; ?></h6>
</div>
<div class="pull-left"><span class="badge badge-info"><i class="icofont-cc"></i> <?php echo $rsCoin['coin']; ?></span></div>
<div class="mb-0">
<?php if($rsCoin['end_date'] && date('Y-m-d') > $rsCoin['start_date']){ ?>
<p class="mb-0 text-gray-500"><i class="icofont-clock-time"></i> Ends <?php echo date('m.d.Y', strtotime($rsCoin['end_date']))?></p>
<?php }else{ ?>
<br>
<?php } ?>
</div>
</div>
</a>
</div>
<?php }else{ ?>
<div class="col-sm-7">
<div class="custom-card shadow-sm bg-white h-100">
<div class="custom-card-image">
<a href="add-cashback?i=<?php echo $rsCoin['id']; ?>">
<img class="img-fluid item-img" src="../assets/images/<?php echo $rsCoin['banner']; ?>">
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
<h6 class="mb-1"><a class="text-gray-900" href="add-cashback?i=<?php echo $rsCoin['id']; ?>"><?php echo $rsCoin['name']; ?></a></h6>
<p class="text-gray-500 mb-2"><i class="icofont-price"></i> <span
class="text-gray-600 font-weight-bold">₦<?php echo $rsCoin['spend']; ?></span></p>
</div>
<div class="custom-card-badge mt-2">
<span class="badge badge-success">OFFER</span> Earn 2 FC per ₦500
</div>
</div>
</div>
</div>
<?php } ?>
<div class="col-md-2"></div>
</div>
</div>
<div class="modal-footer">
<input type="hidden" class="form-control" id="store<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('merchant', $rsCoin['store'], 'email', 'store_name'); ?>">
<input type="hidden" class="form-control" id="merchant<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['store']; ?>">
<input type="hidden" class="form-control" id="module<?php echo $rsCoin['id'] ?>" value="<?php echo $p; ?>">
<input type="hidden" class="form-control" id="id<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['id']; ?>">
<input type="hidden" class="form-control" id="name<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['name']; ?>">
<button type="button" id="send<?php echo $rsCoin['id'] ?>" class="btn btn-primary">Approve</button>
<button type="button" id="sending<?php echo $rsCoin['id'] ?>" class="btn btn-success">processing... <i class="fa fa-spinner"></i></button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#sending<?php echo $rsCoin['id'] ?>").hide();
$("#send<?php echo $rsCoin['id'] ?>").on('click',(function() {

var moduleT = $('#module<?php echo $rsCoin['id'] ?>').val();
var name = $('#name<?php echo $rsCoin['id'] ?>').val();
var store = $('#store<?php echo $rsCoin['id'] ?>').val();
var merchant = $('#merchant<?php echo $rsCoin['id'] ?>').val();
var id = <?php echo $rsCoin['id'] ?>

$.ajax({
url: "approve.php",
type: "POST",
data:  {id:id, moduleT,moduleT, name:name, store:store, merchant:merchant},
beforeSend: function(){
$("#sending<?php echo $rsCoin['id'] ?>").show();
$("#send<?php echo $rsCoin['id'] ?>").hide();
},
success: function(data)
{
alert('approve successfully');
$('.table tr#tr<?php echo $rsCoin['id'] ?>').css('display', 'none');
$("#send<?php echo $rsCoin['id'] ?>").show();
$("#sending<?php echo $rsCoin['id'] ?>").hide();
$('#preview<?php echo $rsCoin['id']; ?>').modal('hide');
}
});
}));
});
</script>
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
