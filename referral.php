<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ./');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Earn faceflyer coin each time you complete a task, shop at your favorite store. A complete customer reward system">

<title>Faceflyer - Cashback</title>
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
<section class="py-5 bg-gradient-primary">
<div class="container">
<div class="row py-5">
<div class="col-md-10 mx-auto text-center">
<!-- Button trigger modal -->
<div class="p-lg-5">
<div class="row">
<div class="col-md-8 mx-auto">
<?php if($_GET['invite']){ ?>
<p style="color:green"><strong>You invite was sent successfully</strong></p>
<?php } ?>
<br>
<h1 class="text-white mb-4 mt-2 text-center">Earn <span class="text-warning">10</span> faceflyer coin<br>on every referral</h1>
<form class="pt-3 referal-flow-form mb-4" action="processInvite" method="post">
<div class="input-group">
<input type="email" required class="form-control" name="" placeholder="Enter email ID of your friend">
<div class="input-group-append">
<button class="btn btn-warning" type="submit">
Invite
</button>
</div>
</div>
</form>
<p class="pt-3 text-white text-center">Invite Using</p>
<div class="social-white text-center mb-5">
<a href="https://www.facebook.com/sharer.php?u=https://www.faceflyer.com/" target="_blank"><i class="icofont-facebook"></i></a>
<a class="ml-4 mr-4" href="https://twitter.com/intent/tweet?text=Join me on faceflyer&amp;url=https://www.faceflyer.com/" target="_blank"><i class="icofont-twitter"></i></a>
<a class="mr-4" href="https://www.instagram.com/" target="_blank"><i class="icofont-instagram"></i></a>
<a href="https://web.whatsapp.com/" target="_blank"><i class="icofont-whatsapp"></i></a>
</div>
<div class="text-center">
<span class="copy-link">
Faceflyer ID:<span style="display: none" id="copy"><?php echo $_SESSION['facer']; ?></span> <b><?php echo $_SESSION['facer']; ?></b> <a onclick="copyToClipboard('#copy')" class="ml-3 text-warning" href="JavaScript:;"><i class="fa fa-x2 fa-copy"></i> Copy ID</a>
</span>
<script>
function copyToClipboard(element) {
var $temp = $("<input>");
alert('Copied');
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
}

</script>
</div>
</div>
</div>
</div>
</div>
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
