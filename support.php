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

<title>Faceflyer - Support</title>
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
<div class="bg-primary pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-7 text-center mx-auto my-4">
<!-- Title -->
<div class="mb-4">
<h1 class="display-4 text-white mb-0 font-weight-bold">How can we help?</h1>
</div>
<!-- End Title -->
<!-- Input -->
<form class="input-group input-group-lg input-group-borderless mb-4">
<div class="input-group-prepend">
<span class="input-group-text bg-white border-0" id="askQuestions">
<i class="icofont-search"></i>
</span>
</div>
<input type="search" class="form-control border-0 shadow-none pl-0"
placeholder="Ask a question" aria-label="Ask a question" aria-describedby="askQuestions">
</form>
<!-- End Input -->
<!-- Text/Links -->
<p class="text-white">
Popular help topics:
<a class="text-warning ml-1" href="#">tasks,</a>
<a class="text-warning ml-1" href="#">deals,</a>
<a class="text-warning ml-1" href="#">cashback,</a>
<a class="text-warning ml-1" href="#">account</a>
</p>
<!-- End Text/Links -->
</div>
</div>
</div>
</div>
<div class="section-padding">
<div class="container py-lg-4 mx-auto col-md-9">
<div class="row">
<!-- Main Content -->
<div class="col-md-6">
<div class="box border rounded bg-white mb-4">
<div class="p-4 d-flex align-items-center">
<i class="icofont-unique-idea display-4"></i>
<div class="ml-4">
<h5 class="text-gray-900 mb-3 mt-0">Help Forum</h5>
<p class="mb-0 text-muted">Find the answer to any question, from the basics all the way
to advanced ...!
...
</p>
</div>
</div>
<div class="overflow-hidden border-top d-flex align-items-center p-4">
<a class="d-block" href="#"> Osahan Deel Help Forum. </a>
<i class="icofont-scroll-right ml-auto text-primary"></i>
</div>
</div>
</div>
<div class="col-md-6">
<div class="box border rounded bg-white mb-4">
<div class="p-4 d-flex align-items-center">
<i class="icofont-safety display-4"></i>
<div class="ml-4">
<h5 class="text-gray-900 mb-3 mt-0">Safety Center
</h5>
<p class="mb-0 text-muted">Want to learn more about setting up and managing your team?
Look no further!
...
</p>
</div>
</div>
<div class="overflow-hidden border-top d-flex align-items-center p-4">
<a class="d-block" href="#"> Osahan Deel Safety Center. </a>
<i class="icofont-scroll-right ml-auto text-primary"></i>
</div>
</div>
</div>
</div>
<div class="row">
<!-- Main Content -->
<div class="col-md-12">
<div id="basics">
<!-- Title -->
<div class="mb-3 mt-4">
<h4 class="text-gray-900">Cash Back</h4>
</div>
<!-- End Title -->
<!-- Basics Accordion -->
<div id="basicsAccordion">
<!-- Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="basicsHeadingFour">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false"
aria-controls="basicsCollapseFour">
What is Cash back?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour"
data-parent="#basicsAccordion">
<div class="card-body border-top p-3 text-muted">
Cash back is way to reward you for every purchase made in a store online and offline. Cashback are determined by store owners in other to reward loyal customers. We have made it possible with faceflyer merchant, now stores can now reward you for every loyalty.
<br><br>
Find stores that offers cashback <a href="cashback">Find store</a>
</div>
</div>
</div>
<!-- End Card -->
<div class="box border rounded bg-white mb-2">
<div id="basicsHeadingOne">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed"
data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false"
aria-controls="basicsCollapseOne">
Why Didn’t I Earn FC from my Cash Back?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne"
data-parent="#basicsAccordion">
<div class="card-body border-top p-3 text-muted">
If you made a purchase and don’t see Cash Back in your account, it may be due to one of these reasons:<br><br>
<b>Shopping at a store that doesn't offer cashback</b>. Going to stores, especially ones that doesnt offer shopping rewards, deals or cashback, can result in you not earning cashback after every puchase. Please visit the cashback page to see list of stores that offers cashback and reward customers.<br><br>
<b>We couldn't verify your proof of purchase</b>. After reviewing or verifing the evidence, we could not come to a conclusion that an item have been bought from the store you are claiming cashback from<br><br>
<b>Cashback earned is lower</b>. To convert cashback after every purchase, you need the sum of N500 in cashback to earn 2fc. If you receive lower than N500 in cashback then you would not earn any FC <br><br>
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="basicsHeadingTwo">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false"
aria-controls="basicsCollapseTwo">
Returns, Cancellations & Exchanges
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo"
data-parent="#basicsAccordion">
<div class="card-body border-top p-3 text-muted">
All returns and cancellations are subject to each store’s specific policy. Returned or cancelled orders may void Cash Back and be deducted from your Coin Balance, depending on the store’s policy. If a store processes your exchanged order as a cancellation and a new transaction is created, the exchange may be treated as a cancelled order.
<br><br>
To ensure you receive Cash Back on exchanged orders, you can instead return the item and place an entirely new order at that store. Just make sure to start your shopping with Faceflyer.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="basicsHeadingThree">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#basicsCollapseThree"
aria-expanded="false" aria-controls="basicsCollapseThree">
How Can I Tell If I’m Earning Cash Back?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree"
data-parent="#basicsAccordion">
<div class="card-body border-top p-3 text-muted">
To earn Cash Back, you must signup on Faceflyer to see stores around you offering cashback.
<br><br>
Where to Find Your Cash Back
<br><br>
Your Cash Back is added to your coin Balance. We usually can’t report Cash Back immediately at the time of purchase because it takes time for the store to notify us that you placed an order. Depending on the store, this can take from a few hours to 3 days.

Once the store confirms that you’ve made a purchase, we’ll add Cash Back to your account and notify you. At that point, the amount will be viewable in Coin Balance.
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Basics Accordion -->
</div>
<div id="syncing">
<!-- Title -->
<div class="mb-3 mt-5">
<h4 class="text-gray-900">Account & Settings</h4>
</div>
<!-- End Title -->
<!-- Syncing Accordion -->
<div id="syncingAccordion">
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="syncingHeadingOne">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3"
data-toggle="collapse" data-target="#syncingCollapseOne" aria-expanded="false"
aria-controls="syncingCollapseOne">
Updating your profile
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="syncingCollapseOne" class="collapse" aria-labelledby="syncingHeadingOne"
data-parent="#syncingAccordion">
<div class="card-body border-top p-3 text-muted">
Hi Facers, we would love to get to know you a bit better! Let’s start with your name…
<br><br>
You might be thinking why does Faceflyer need my name? Well actually, this information is of paramount importance if you redeem your FC for some of our most popular Gift Cards. Without providing your name some of your Gift Card orders cannot be fulfilled.
<br><br>
Additionally, it is important to set a unique Face Name. Something that says something about you! Let’s say you like gaming, you can choose something fun like jamesbond. Plus, it is very important to know your Swag Name because it will allow you to participate in many of our promotions on Facebook, Twitter, Instagram and also to refer friends!
<br><br>
All of these things and more can be completed in My Account!
<br><br>
How do I access and edit my My Account?
<br><br>
<ol>
<li>
On the top right of faceflyer.com you’ll see your Profile Picture, click it <?php if($_SESSION['facer']){ ?> or just click <a href="settings">here</a> <?php } ?>
</li>
<li>
Click on “My Settings”.
</li>
<li>
From here you can change your Full Name, Face ID/Name (if you didn’t already set it), Email, Password.
</li>
<li>
When you are satisfied with your changes click “Save Changes”.
</li>
<li>
That’s it.
</li>
</ol>
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="syncingHeadingTwo">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#syncingCollapseTwo" aria-expanded="false"
aria-controls="syncingCollapseTwo">
How do I change my photo?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="syncingCollapseTwo" class="collapse" aria-labelledby="syncingHeadingTwo"
data-parent="#syncingAccordion">
<div class="card-body border-top p-3 text-muted">
To update your photo on your account:
<br><br>
-Login to your account.
<br><br>
-Hover over your Name in the top right corner.
<br><br>
-Go to My Settings.
<br><br>
-You will then find a space to change your photo. Simply click on the "Picture" link. From there you may choose to upload the photo of your choice from your computer.
<br><br>
-Once you have selected the photo, click on the "save changes" button and your photo will appear.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="syncingHeadingThree">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#syncingCollapseThree"
aria-expanded="false" aria-controls="syncingCollapseThree">
I heard that you can be deactivated for having more than one account. Is that true?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="syncingCollapseThree" class="collapse" aria-labelledby="syncingHeadingThree"
data-parent="#syncingAccordion">
<div class="card-body border-top p-3 text-muted">
Yes, that is absolutely true. Please do not create more than one account. Doing so will result in deactivation.
You may not share multiple accounts with people in your household. This may result in deactivation.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="syncingHeadingFour">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#syncingCollapseFour"
aria-expanded="false" aria-controls="syncingCollapseFour">
There are multiple people in our home. Can we each have our own account?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="syncingCollapseFour" class="collapse" aria-labelledby="syncingHeadingFour"
data-parent="#syncingAccordion">
<div class="card-body border-top p-3 text-muted">
Each individual in your household may have their own account. It is against our terms of service to have more than one account per member.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="syncingHeadingFive">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#syncingCollapseFive"
aria-expanded="false" aria-controls="syncingCollapseFive">
I tried to access my account and I received a message that it has been deactivated. Why?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="syncingCollapseFive" class="collapse" aria-labelledby="syncingHeadingFive"
data-parent="#syncingAccordion">
<div class="card-body border-top p-3 text-muted">
There is a number of actions that Faceflyer considers cause for deactivation. These reasons include, but are not limited to, operating more than one Faceflyer account; using bots or other software designed to defraud Faceflyer in any way; posting verbiage, photos, or videos that encourage or teach other users to commit any action that violates our terms of use; posting inappropriately on our Facebook, Twitter, or any of our other social media sites.
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Syncing Accordion -->
</div>
<div id="account">
<!-- Title -->
<div class="mb-3 mt-5">
<h4 class="text-gray-900">Deals</h4>
</div>
<!-- End Title -->
<!-- Account Accordion -->
<div id="accountAccordion">
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="accountHeadingOne">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3"
data-toggle="collapse" data-target="#accountCollapseOne" aria-expanded="false"
aria-controls="accountCollapseOne">
I completed a deal and have not received credit, what can I do?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseOne" class="collapse show" aria-labelledby="accountHeadingOne"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
In order to have your activity track, please be sure to complete a deal posted directly on faceflyer.com, following all terms listed. We also recommend not using any third party software that may block our system's ability to track an order and reading the terms of the activity to ensure successful completion.
<br><br>
Be aware there are delays on deals, please do not submit a ticket before the full time has passed.
<br><br>
1. Proof of Completion: If you purchased a deal at a store, photo evidence is required to investigate. You must include a picture of your receipt.
<br><br>
2. Date of Completion: This date must be exact and match your proof of completion.
<br><br>
This information does not guarantee credit will be provided. Our team will investigate once information is received, this may take up 5 business days.
<br><br>
<b>
*We reserve the right to request receipts and photo proof of completed offers prior to or after the awarding of FC in order to verify with the applicable merchant that such deals are valid.
<br><br>
*Please note, there are times additional documentation may be requested on higher-paying offers. We are unable to accept a copy/paste of the confirmation.
</b>
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="accountHeadingTwo">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#accountCollapseTwo" aria-expanded="false"
aria-controls="accountCollapseTwo">
How do I delete my account?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="accountHeadingThree">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#accountCollapseThree"
aria-expanded="false" aria-controls="accountCollapseThree">
How do I change my account settings?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="accountHeadingFour">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#accountCollapseFour"
aria-expanded="false" aria-controls="accountCollapseFour">
I forgot my password. How do I reset it?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Account Accordion -->
</div>
<div id="privacy">
<!-- Title -->
<div class="mb-3 mt-5">
<h4 class="text-gray-900">Privacy</h4>
</div>
<!-- End Title -->
<!-- Privacy Accordion -->
<div id="privacyAccordion">
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="privacyHeadingOne">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3"
data-toggle="collapse" data-target="#privacyCollapseOne" aria-expanded="false"
aria-controls="privacyCollapseOne">
Can I specify my own private key?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseOne" class="collapse show" aria-labelledby="privacyHeadingOne"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="privacyHeadingTwo">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#privacyCollapseTwo" aria-expanded="false"
aria-controls="privacyCollapseTwo">
My files are missing! How do I get them back?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseTwo" class="collapse" aria-labelledby="privacyHeadingTwo"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="privacyHeadingThree">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#privacyCollapseThree"
aria-expanded="false" aria-controls="privacyCollapseThree">
How can I access my privacy data?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseThree" class="collapse" aria-labelledby="privacyHeadingThree"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="privacyHeadingFour">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#privacyCollapseFour"
aria-expanded="false" aria-controls="privacyCollapseFour">
How can I control if other search engines can link to my profile?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseFour" class="collapse" aria-labelledby="privacyHeadingFour"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Privacy Accordion -->
</div>
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
</body>

</html>
