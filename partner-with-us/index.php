<?php
session_start();

if($_SESSION['faceMerchant']){
header('Location: dashboard');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Merchant - Faceflyer</title>
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

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand navbar-light bg-white osahan-deel-nav-top py-4">
<div class="container">
<a class="navbar-brand py-0 mr-2" href="home"><img class="w-40" src="../assets/images/logo.png" alt="#"> <span
class="small ml-3">Home</span>
</a>
</div>
</nav>
<div class="bg-white">
<div class="container">
<div class="row align-items-center py-2">
<div class="col-md-6">
<img src="../assets/images/merchant-page.png" class="img-fluid">
</div>
<div class="col-md-6 pl-lg-5">
<h1 class="text-primary font-weight-bold my-3">Be in the business <span class="font-weight-bold">of rewarding and retaining customers</span>
</h1>
<p class="lead mb-5">We make it easy for you to connect with your customers, offer unbeatable deals, and reward every loyalty by offering cash back on every purchase.
</p>
<div class="row">
<div class="col-md-3">
<div class="border p-3 rounded text-center mb-2">
<h5 class="font-weight-bold text-primary mb-1">Connect</h5>
</div>
</div>
<div class="col-md-3">
<div class="border p-3 rounded text-center mb-2">
<h5 class="font-weight-bold text-primary mb-1">Serve</h5>
</div>
</div>
<div class="col-md-3">
<div class="border p-3 rounded text-center mb-2">
<h5 class="font-weight-bold text-primary mb-1">Grow</h5>
</div>
</div>
<div class="col-md-3">
<div class="border p-3 rounded text-center mb-2">
<h5 class="font-weight-bold text-primary mb-1">Reward</h5>
<!-- <p class="mb-0 text-dark">Secs</p> -->
</div>
</div>
</div>
<div class="mt-4">
<div class="row">
<div class="col-md-6 pl-2">
<button onClick='window.location.href="sign-in"' class="btn btn-default btn-block btn-lg mt-4">Already a Merchant</button>
</div>
<div class="col-md-6 pl-2">
<button onClick='window.location.href="sign-up"' class="btn btn-primary btn-block btn-lg mt-4">Become a Merchant</button>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php include 'social.php'; ?>

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
