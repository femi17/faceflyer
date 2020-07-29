<?php
session_start();
require('../Connection/connect.php');
require_once('../fns.php');

if(!$_SESSION['faceflyer']){
header('Location: ./');
exit;
}

$id = $_GET['i'];
$qs = mysqli_query($connect, "select * from deals where id = '$id'");
$rs = mysqli_fetch_assoc($qs);

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
<?php include 'header.php'; ?>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<section class="user-panel-body section-padding">
<div class="container">
<div class="row py-lg-4">
<div class="col-xl-3 col-sm-4">
<?php include 'user-panel.php'; ?>
</div>
<div class="col-xl-9 col-sm-8 order-first order-md-last" style="margin-bottom:30px;">
<div class="user-panel-body-right">
<div id="mc" class="user-panel-tab-view">
<div class="shadow-sm rounded overflow-hidden mb-3">
<div class="p-4 bg-white">
<h5 class="mb-0 text-gray-900">Add a deal</h5>
</div>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link" href="#profile">Details</a>
</li>
</ul>
</div>
<div id="profile">
<div class="row">
<div class="col-md-12">
<?php if($_GET['add']){ ?>
<p style="color:green"><strong>Deal uploaded successfully</strong></p>
<?php } ?>
<?php if($_GET['upgrade']){ ?>
<p style="color:blue"><strong>You are only allowed 20 posts on this plan. Please upgrade to the premium plan to enjoy unlimited posts.</strong> <a href="pricing"><em>upgrade now</em></a> </p>
<?php } ?>
<?php if($_GET['error']){ ?>
<p style="color:#c00"><strong>Password not found</strong>. Please check and try again.</p>
<?php } ?>
<?php if($_GET['captcha']){ ?>
<p style="color:#c00"><strong>Captcha error</strong>. Please check and try again.</p>
<?php } ?>
<div class="bg-white p-4 shadow-sm border-radius">
<form class="js-validate" action="processDeal" method="post" id="deal-form">
<div class="row">
<!-- Input -->
<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Name of Deal
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="name" value="<?php echo $rs['name']; ?>"
placeholder="Get 100% money back" required>
</div>
</div>
</div>
<!-- End Input -->
<!-- Input -->
<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Start
<span class="text-danger">*</span>

</label>
<div class="form-group">
<input type="date" class="form-control" name="start_date" value="<?php echo $rs['start_date']; ?>">
</div>
</div>
</div>

<div class="col-md-4 col-sm-12">
<div class="js-form-message">
<label id="emailLabel" class="form-label">
End
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="date" class="form-control" value="<?php echo $rs['end_date']; ?>" name="end_date">
</div>
</div>
</div>
<!-- End Input -->
</div>
<div class="row">
<!-- Input -->
<div class="col-md-3 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Price
<span class="text-danger">*</span>

</label>
<div class="form-group">
<input type="number" class="form-control" name="price" value="<?php echo $rs['price']; ?>" placeholder="Price on deal">
</div>
</div>
</div>

<div class="col-md-6 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Headline
<span class="text-danger">*</span>

</label>
<div class="form-group">
<input type="text" class="form-control" name="headline" value="<?php echo $rs['headline']; ?>" placeholder="Buy 1 Get 1 Free">
</div>
</div>
</div>

<div class="col-md-3 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Category
<span class="text-danger">*</span>

</label>
<div class="form-group">
<select class="form-control" name="category" required>
<?php if($rs['category']){ ?>
<option value="<?php echo $rs['category']; ?>"><?php echo $rs['category']; ?></option>
<?php } ?>
<option value="">Choose Category</option>
<option value="Grocery">Grocery</option>
<option value="Medicine">Medicine</option>
<option value="Meal">Meal</option>
</select>
</div>
</div>
</div>

<div class="col-md-6 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Description
<span class="text-danger">*</span>

</label>
<div class="form-group">
<input type="text" class="form-control" name="description" value="<?php echo $rs['description']; ?>" placeholder="Amazing product to pick up, buy one and save on other" required>
</div>
</div>
</div>

<div class="col-md-3 col-sm-12">
<div class="js-form-message">
<label id="locationLabel" class="form-label">
Faceflyer Coin
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="number" class="form-control" name="coin" value="<?php echo $rs['coin']; ?>" placeholder="Coin earn" required>
</div>
</div>
</div>

<div class="col-md-3 col-sm-12">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Name of merchant
<span class="text-danger">*</span>
</label>
<div class="form-group">
<select class="form-control" name="merchant" required>
<?php if($rs['store']){ ?>
<option value="<?php echo fetchData('merchant', $rs['store'], 'email', 'store_name'); ?>"><?php echo fetchData('merchant', $rs['store'], 'email', 'store_name'); ?></option>
<?php } ?>
<option value="">Choose merchant</option>
<?php list_col('merchant', 'store_name', 'store_name'); ?>
</select>
</div>
</div>
</div>
<!-- End Input -->
</div>

<div class="mb-0 pt-4 text-right">
<button type="reset" class="btn btn-link"> Cancel </button>
<?php if($_GET['i']){ ?>
<input type="hidden" name="id" value="<?php echo $_GET['i']; ?>">
<button type="submit" class="btn btn-primary"> Edit Deal </button>
<?php }else{ ?>
<button type="submit" class="btn btn-primary"> Upload Deal </button>
<?php } ?>
</div>
</form>
</div>
</div>
</div>
</div>
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

<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#deal-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'upload_deal'}).then(function(token) {
$('#deal-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#deal-form').prepend('<input type="hidden" name="action" value="upload_deal">');
$('#deal-form').unbind('submit').submit();
});;
});
});
</script>

</body>

</html>
