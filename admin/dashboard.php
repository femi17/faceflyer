<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

$qsCoin = mysqli_query($connect, "select * from coin where status = 'pending' order by id desc");
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
<h5 class="mb-0 text-gray-900">Coin Claims</h5>
</div>
</div>
<div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>uID</th>
<th>Module</th>
<th>Name</th>
<th>Merchant</th>
<th>Evidence</th>
<th>Coin</th>
<th></th>
</tr>
</thead>
<tbody>
<?php for($t=0;$t<$nsCoin;$t++){
$rsCoin = mysqli_fetch_assoc($qsCoin);
?>
<tr id="tr<?php echo $rsCoin['id'] ?>">
<td><span data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo fetchData('users', $rsCoin['uID'], 'uID', "firstname"); ?>&nbsp;<?php echo fetchData('users', $rsCoin['uID'], 'uID', "lastname"); ?>"><?php echo $rsCoin['uID'] ?></span></td>
<td><?php echo $rsCoin['module'] ?></td>
<td><?php echo $rsCoin['name'] ?></td>
<td><?php echo $rsCoin['merchant'] ?></td>
<td><a href="../assets/evidence/<?php echo $rsCoin['evidence'] ?>" target="_blank"><?php echo $rsCoin['evidence'] ?></a></td>
<td><?php echo $rsCoin['coin'] ?><br> <span><b><?php echo date('F d, Y', strtotime($rsCoin['date'])); ?></b></span> </td>
<td><span data-target="#mailFacer<?php echo $rsCoin['id'] ?>" data-toggle="modal">
<button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mail Facer"><i class="fa fa-times"></i></button>
</span>
<span data-target="#rewardFacer<?php echo $rsCoin['id'] ?>" data-toggle="modal">
<button type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reward Facer"><i class="fa fa-check"></i></button>
</span>
</td>
</tr>

<div class="modal animated fadeIn" id="rewardFacer<?php echo $rsCoin['id']; ?>" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="title" id="defaultModalLabel">Reward Facer</h6>
</div>
<div class="modal-body">
<div class="row clearfix">
<div class="col-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="text" class="form-control" id="email<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('users', $rsCoin['uID'], 'uID', 'email'); ?>" />
</div>
</div>
<div class="col-12">
<div class="form-group form-group-default">
<label>Subject</label>
<input type="text" class="form-control" value="You just earned <?php echo $rsCoin['coin'] ?>fc" id="subject<?php echo $rsCoin['id'] ?>" >
</div>
</div>
<div class="col-12">
<div class="form-group form-group-default">
<label>Message</label>
<textarea name="message" class="summernote" id="message<?php echo $rsCoin['id'] ?>">Hi <?php echo fetchData('users', $rsCoin['uID'], 'uID', 'firstname'); ?>,<br><br>We are happy to inform you that you just earned <h3><?php echo $rsCoin['coin'] ?><span style="font-size:11px">fc</span></h3> on your recent <?php if($rsCoin['module'] == 'deals' || $rsCoin['module'] == 'cashback'){ ?> purchase <?php }else{ ?> completion <?php } ?> of <b><?php echo $rsCoin['name']; ?></b>.<br><br>You have a total of <h3><?php echo fetchData('users', $rsCoin['uID'], 'uID', 'coin') + $rsCoin['coin']; ?><span style="font-size:11px">fc</span></h3><br>Keep earning with the everyday things you do both online and offline. <br><br>Thank you<br>Femi<br>Faceflyer </textarea>
</div>
</div>
</div>
<input type="hidden" class="form-control" id="name<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('users', $rsCoin['uID'], 'uID', 'firstname'); ?>">
<input type="hidden" class="form-control" id="coin<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['coin'] ?>">
<input type="hidden" class="form-control" id="module<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['module'] ?>">
<input type="hidden" class="form-control" id="title<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['name'] ?>">
<input type="hidden" class="form-control" id="store<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('merchant', $rsCoin['merchant'], 'store_name', 'email'); ?>">
<input type="hidden" class="form-control" id="uID<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['uID']; ?>">
</div>
<div class="modal-footer">
<button type="button" id="send<?php echo $rsCoin['id'] ?>" class="btn btn-primary">Send Mail</button>
<button type="button" id="sending<?php echo $rsCoin['id'] ?>" class="btn btn-success">Sending... <i class="fa fa-spinner"></i></button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#sending<?php echo $rsCoin['id'] ?>").hide();
$("#send<?php echo $rsCoin['id'] ?>").on('click',(function() {

var email = $('#email<?php echo $rsCoin['id'] ?>').val();
var subject = $('#subject<?php echo $rsCoin['id'] ?>').val();
var name = $('#nameApp<?php echo $rsCoin['id'] ?>').val();
var uID = $('#uID<?php echo $rsCoin['id'] ?>').val();
var coin = $('#coin<?php echo $rsCoin['id'] ?>').val();
var store = $('#store<?php echo $rsCoin['id'] ?>').val();
var moduleT = $('#module<?php echo $rsCoin['id'] ?>').val();
var title = $('#title<?php echo $rsCoin['id'] ?>').val();
var message = $('#message<?php echo $rsCoin['id'] ?>').summernote('code');
var id = <?php echo $rsCoin['id'] ?>

$.ajax({
url: "reward-facer.php",
type: "POST",
data:  {email:email, subject:subject, message:message, name:name, id:id, uID:uID, coin:coin, store:store, moduleT,moduleT, title:title},
beforeSend: function(){
$("#sending<?php echo $rsCoin['id'] ?>").show();
$("#send<?php echo $rsCoin['id'] ?>").hide();
},
success: function(data)
{
alert('Message successfully sent');
$('.table tr#tr<?php echo $rsCoin['id'] ?>').css('display', 'none');
$("#send<?php echo $rsCoin['id'] ?>").show();
$("#sending<?php echo $rsCoin['id'] ?>").hide();
$('#rewardFacer<?php echo $rsCoin['id']; ?>').modal('hide');
}
});
}));
});
</script>

<div class="modal animated fadeIn" id="mailFacer<?php echo $rsCoin['id']; ?>" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="title" id="defaultModalLabel">Mail Facer</h6>
</div>
<div class="modal-body">
<div class="row clearfix">
<div class="col-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="text" class="form-control" id="emailApp<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('users', $rsCoin['uID'], 'uID', 'email'); ?>" />
</div>
</div>
<div class="col-12">
<div class="form-group form-group-default">
<label>Subject</label>
<input type="text" class="form-control" value="Evidence could not be verified" id="subjectApp<?php echo $rsCoin['id'] ?>" >
</div>
</div>
<div class="col-12">
<div class="form-group form-group-default">
<label>Message</label>
<textarea name="message" class="summernote" id="messageApp<?php echo $rsCoin['id'] ?>">Hi <?php echo fetchData('users', $rsCoin['uID'], 'uID', 'firstname'); ?>,<br><br>We regret to inform you that we could not verify your <?php if($rsCoin['module'] == 'deals' || $rsCoin['module'] == 'cashback'){ ?> purchase <?php }else{ ?> completion <?php } ?> of <b><?php echo $rsCoin['name']; ?></b>.<br><br>However you can send also another evidence to help further investigate.<br><br>Thank you<br>Femi<br>Faceflyer </textarea>
</div>
</div>
</div>
<input type="hidden" class="form-control" id="nameApp<?php echo $rsCoin['id'] ?>" value="<?php echo fetchData('users', $rsCoin['uID'], 'uID', 'firstname'); ?>">
<input type="hidden" class="form-control" id="uID<?php echo $rsCoin['id'] ?>" value="<?php echo $rsCoin['uID']; ?>">
</div>
<div class="modal-footer">
<button type="button" id="sendMsg<?php echo $rsCoin['id'] ?>" class="btn btn-primary">Send Mail</button>
<button type="button" id="sendingMsg<?php echo $rsCoin['id'] ?>" class="btn btn-success">Sending... <i class="fa fa-spinner"></i></button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#sendingMsg<?php echo $rsCoin['id'] ?>").hide();
$("#sendMsg<?php echo $rsCoin['id'] ?>").on('click',(function() {

var emailApp = $('#emailApp<?php echo $rsCoin['id'] ?>').val();
var subjectApp = $('#subjectApp<?php echo $rsCoin['id'] ?>').val();
var nameApp = $('#nameApp<?php echo $rsCoin['id'] ?>').val();
var uID = $('#uID<?php echo $rsCoin['id'] ?>').val();
var messageApp = $('#messageApp<?php echo $rsCoin['id'] ?>').summernote('code');
var id = <?php echo $rsCoin['id'] ?>

$.ajax({
url: "mail-facer.php",
type: "POST",
data:  {emailApp:emailApp, subjectApp:subjectApp, messageApp:messageApp, nameApp:nameApp, id:id, uID:uID},
beforeSend: function(){
$("#sendingMsg<?php echo $rsCoin['id'] ?>").show();
$("#sendMsg<?php echo $rsCoin['id'] ?>").hide();
},
success: function(data)
{
alert('Message successfully sent');
$('.table tr#tr<?php echo $rsCoin['id'] ?>').css('display', 'none');
$("#sendMsg<?php echo $rsCoin['id'] ?>").show();
$("#sendingMsg<?php echo $rsCoin['id'] ?>").hide();
$('#mailFacer<?php echo $rsCoin['id']; ?>').modal('hide');
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
