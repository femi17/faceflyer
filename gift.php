<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(!$_SESSION['facer']){
header('Location: ../');
exit;
}

$get = mysqli_real_escape_string($connect, multiexplode(array("/","/"),$_SERVER['REQUEST_URI'],'gift'));

$split = explode('&',$get);

$word = "DATA";
$val = str_replace('-',' ',$split[0]);

$qsGift = mysqli_query($connect, "select * from reward where name = '$val'");
$rsGift = mysqli_fetch_assoc($qsGift);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">
<title>Faceflyer - Gift</title>
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="../assets/images/logo.png">
<!-- Custom fonts for this template-->
<link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
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

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
<!-- Content Wrapper -->
<div id="content-wrapper">
<!-- Main Content -->
<div id="content">
<!-- Topbar -->
<?php include 'header2.php'; ?>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<section class="offer-dedicated-body section-padding">
<div class="container">
<div class="row pt-lg-4">
<div class="col-lg-8">
<form action="../processGift" method="post">
<h3><?php echo $rsGift['name']; ?></h3>
<br><br>
<?php if($split[1] == "coin=1"){ ?>
<p style="color:#c00"><strong>You dont have enough coin for the value you chose</strong>. Please check and try again.</p>
<?php } ?>
<?php if($split[1] == "value=1"){ ?>
<p style="color:#c00"><strong>The value you entered is too low</strong>. Please check and try again.</p>
<?php } ?>
<?php if($split[1] == "buy=1"){ ?>
<p style="color:green"><strong>Your gift voucher is on it's way to your mailbox</strong>. We will notify you shortly.</p>
<?php } ?>
<?php if($split[1] == "buy=1"){ ?>
<p style="color:green"><strong>Your gift voucher is on it's way to your phone</strong>. We will notify you shortly.</p>
<?php } ?>
<?php if(strpos($val, $word) !== false){ ?>
<h6 class="mb-3 text-gray-800 font-weight-normal">Which would you like?</h6>
<div class="rating-checkbox mb-4">
<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-outline-secondary">
<input type="radio" name="choice" autocomplete="off" value="DATA" required>DATA
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="choice" autocomplete="off" value="Airtime" required>Airtime
</label>
</div>
</div>
<?php } ?>
<h6 class="mb-3 text-gray-800 font-weight-normal">How much would you like to get?</h6>
<div class="rating-checkbox mb-4">
<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-outline-secondary active">
<input type="radio" name="buy1" checked autocomplete="off" value="500">&#8358;500
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="buy1" autocomplete="off" value="1000">&#8358;1000
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="buy1" autocomplete="off" value="5000">&#8358;5000
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="buy1" autocomplete="off" value="10000">&#8358;10000
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="buy1" autocomplete="off" value="20000">&#8358;20000
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="buy1" autocomplete="off" value="50000">&#8358;50000
</label>
OR&nbsp;
<label class="btn buy_field btn-outline-secondary">
<input type="number" name="buy" autocomplete="off" placeholder="Set your own" value="" id="buy" style="border:none;width:90px">
</label>
</div>
</div>

<div class="offer-dedicated-body-left">
<div class="rounded bg-white shadow-sm p-4 mb-4 faq-user">
<h5 class="mb-4  text-gray-900">What to know</h5>
<div class="accordion" id="accordionExample">
<div class="faq-card">
<div class="faq-card-header" id="headingOne">
<h6 class="mb-0">
<button class="text-black" type="button" data-toggle="collapse" data-target="#collapseOne"
aria-expanded="true" aria-controls="collapseOne">
Description <i class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseOne" class="collapse" aria-labelledby="headingOne"
data-parent="#accordionExample">
<div class="faq-card-body">
<p><?php echo $rsGift['description']; ?></p>
</div>
</div>
</div>
<div class="faq-card">
<div class="faq-card-header" id="headingTwo">
<h6 class="mb-0">
<button class="text-black collapsed" type="button" data-toggle="collapse"
data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Redemption Details <i class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
data-parent="#accordionExample">
<div class="faq-card-body">
<p><?php echo $rsGift['details']; ?></p>
</div>
</div>
</div>
<div class="faq-card pb-0">
<div class="faq-card-header" id="headingThree">
<h6 class="mb-0">
<button class="text-black collapsed" type="button" data-toggle="collapse"
data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Where to redeem voucher. <i
class="icofont-plus"></i>
</button>
</h6>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
data-parent="#accordionExample">
<div class="faq-card-body">
<p><?php echo $rsGift['location']; ?></p>
</div>
</div>
</div>
</div>
</div>
<div id="note" style="display:none">
You need another <b><?php echo $rsGift['price'] - fetchData('users', $_SESSION['facer'], 'uID', 'coin'); ?> FC</b> to get this gift voucher
</div>
<input type="hidden" name="item" value="<?php echo $rsGift['name']; ?>">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'coin') >= $rsGift['price']){ ?>
<button type="submit" class="btn btn-md btn-primary ml-auto pull-right">Get Gift Voucher</button>
<?php }else{ ?>
<a class="btn btn-md btn-primary ml-auto pull-right" href="#note" id="little">Get Gift Voucher</a>
<?php } ?>
</div>
</form>
</div>
<div class="col-lg-4 order-first order-md-last" style="margin-bottom:30px;">
<div class="rounded bg-white shadow-sm mb-4 p-4 text-center">
<img class="img-fluid" src="../assets/images/<?php echo $rsGift['banner']; ?>"><br><br>
<h5 class="mb-3 text-gray-900"><?php echo $rsGift['name']; ?></h5>
<p class="mb-3 mt-2">from <?php echo $rsGift['price']; ?> FC
</p>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer2.php'; ?>

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
<script type="text/javascript">
$(function() {
$("#buy").keyup(function(){
$(".btn-outline-secondary").removeClass("active");
$(".buy").addClass("active");
});
});
</script>
</body>
</html>
