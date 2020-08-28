<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faceflyer - A complete customer reward system, earn faceflyer coin each time you complete a task, shop deals at a store, or get cash back on every purchase from your favorite store">

<title>Faceflyer - Contact Us</title>
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
<!-- Hotjar Tracking Code for www.faceflyer.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1964395,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
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
<div class="section-padding bg-gradient-primary">
<div class="container">
<div class="row align-items-center py-4">
<div class="col-md-6">
<h1 class="text-white display-4 font-weight-bold">How can<br />Faceflyer team <span
class="text-warning">help</span> You?</h1>
<h5 class="mb-2 text-white-50 font-weight-light">We'd love to talk about how we can help you.
</h5>
</div>
<div class="col-md-6 p-5">
<img src="assets/images/contact.png" alt="contact" />
</div>
</div>
</div>
</div>
<div class="section-padding osahan-contact-form">
<div class="container py-lg-4">
<div class="row d-flex align-items-center">
<div class="col-md-6">
<div class="p-4 bg-white shadow-sm mr-lg-4 rounded overflow-hidden"><iframe width="100%" height="455"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9435427818244!2d3.3030152932485426!3d6.5288151026880215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e56e86a6173%3A0xc4c20c8410bab4c8!2zNsKwMzEnNDMuNiJOIDPCsDE4JzE5LjciRQ!5e0!3m2!1sen!2sng!4v1596141823477!5m2!1sen!2sng"
frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
</div>
<div class="col-md-6">
<div class="mb-4">
<?php if($_GET['sent']){ ?>
<p style="color:green"><strong>Enquiry has been sent. Thank you!</strong></p>
<?php } ?>
<h4 class="font-weight-light text-gray-900 mt-3">Tell us about <span
class="font-weight-bold">yourself</span></h4>
<p class="text-muted">Whether you have questions or you would just like to say hello, contact us.
</p>
</div>
<form action="processContact" method="post" id="contact-form">
<div class="form-row">
<div class="col">
<div class="form-group">
<label class="mb-1">YOUR NAME <small class="text-danger">*</small></label>
<div class="position-relative icon-form-control">
<input placeholder="John Doe" name="name" type="text" class="form-control" required>
</div>
</div>
</div>
<div class="col">
<div class="form-group">
<label class="mb-1">YOUR EMAIL ADDRESS <small class="text-danger">*</small></label>
<div class="position-relative icon-form-control">
<input placeholder="youremail@gmail.com" name="email" type="text" class="form-control" required>
</div>
</div>
</div>
</div>
<div class="form-row">
<div class="col">
<div class="form-group">
<label class="mb-1">SUBJECT <small class="text-danger">*</small></label>
<div class="position-relative icon-form-control">
<input placeholder="I want to join faceflyer" name="subject" type="text" class="form-control" required>
</div>
</div>
</div>
<div class="col">
<div class="form-group">
<label class="mb-1">YOUR PHONE NUMBER <small class="text-danger">*</small></label>
<div class="position-relative icon-form-control">
<input placeholder="08000000000" name="phone" type="text" class="form-control" required>
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="mb-1">HOW CAN WE HELP YOU? <small class="text-danger">*</small></label>
<div class="position-relative">
<textarea class="form-control pt-3" rows="4" name="message"
placeholder="Hi there, I would like to ..."></textarea>
</div>
</div>
<div class="d-flex align-items-center mt-4">
<button class="btn btn-primary text-uppercas" type="submit"> Submit </button>
<label class="m-0 pl-4 text-black-50">We'll get back to you in 1-2 business days.
</label>
</div>
</form>
</div>
</div>
</div>
</div>
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
<script src="https://www.google.com/recaptcha/api.js?render=6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy"></script>
<script>
$('#contact-form').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('6LcNS7AZAAAAAHeOWW2bDxQCH3nSYF13kaYUa0Sy', {action: 'enquiry'}).then(function(token) {
$('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
$('#contact-form').prepend('<input type="hidden" name="action" value="enquiry">');
$('#contact-form').unbind('submit').submit();
});;
});
});
</script>
</body>

</html>
