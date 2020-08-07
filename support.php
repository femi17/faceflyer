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
<link href="assets/css/whatsapp.css" rel="stylesheet">

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
<!-- <form class="input-group input-group-lg input-group-borderless mb-4">
<div class="input-group-prepend">
<span class="input-group-text bg-white border-0" id="askQuestions">
<i class="icofont-search"></i>
</span>
</div>
<input type="search" class="form-control border-0 shadow-none pl-0"
placeholder="Ask a question" aria-label="Ask a question" aria-describedby="askQuestions">
</form> -->
<!-- End Input -->
<!-- Text/Links -->
<p class="text-white">
Popular help topics:
<a class="text-warning ml-1" href="#privacy">tasks,</a>
<a class="text-warning ml-1" href="#account">deals,</a>
<a class="text-warning ml-1" href="#basics">cashback,</a>
<a class="text-warning ml-1" href="#syncing">account</a>
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
<div class="col-md-12">
<div id="Overview">
<!-- Title -->
<div class="mb-3 mt-5">
<h4 class="text-gray-900">Faceflyer Overview</h4>
</div>
<!-- End Title -->
<!-- Privacy Accordion -->
<div id="overviewAccordion">
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingOne">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3"
data-toggle="collapse" data-target="#overviewCollapseOne" aria-expanded="false"
aria-controls="overviewCollapseOne">
What is Faceflyer.com?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseOne" class="collapse" aria-labelledby="overviewHeadingOne"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
Faceflyer.com is the leading destination for earning real rewards for things you do online or on your phone. At home or on the go, you can conveniently earn coin (called FC) when you:  Shop your at favorite stores, Complete a task. FC can be redeemed easily for DATA, Airtime, gift cards, and shopping vouchers e.t.c.
<br><br>
Membership is free. So are the gift cards and vouchers!. Join Today!
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingSix">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#overviewCollapseSix"
aria-expanded="false" aria-controls="overviewCollapseSix">
Can I transfer FC to a friend?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseSix" class="collapse" aria-labelledby="overviewHeadingSix"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
FC are the web's premier digital naira. Accumulate at your own pace and redeem them for exclusive Faceflyer.com valuable rewards, including hundreds of brand name Gift Cards and thousands of local deals.
<br><br>
The FC you accumulate in your account must be redeemed within two years from the date of issuance, after which time they will be null and void. Accounts that have not been logged into for six months or more are deemed inactive and FC earned in these accounts are null and void.
<br><br>
In some instances, members may request re-crediting of expired points. Such requests will be subject to our posted Terms of Use. Requests may be made via the Faceflyer Contact Center by visiting: http://faceflyer.com/contact-us
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingTwo">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#overviewCollapseTwo" aria-expanded="false"
aria-controls="overviewCollapseTwo">
Can I redeem my FC for cash?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseTwo" class="collapse" aria-labelledby="overviewHeadingTwo"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
At this time, we do not offer a direct exchange of your FC for cash.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingThree">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#overviewCollapseThree"
aria-expanded="false" aria-controls="overviewCollapseThree">
Can Teenagers Use Faceflyer?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseThree" class="collapse" aria-labelledby="overviewHeadingThree"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
Yes. Teenagers can use Faceflyer. The minimum age requirement to join Faceflyer is 13 years. Faceflyer encourages minors, 13 years of age or older, to seek their parent or guardian's permission before registering.
<br><br>
Most teenagers use Faceflyer as a way to earn free gift cards, buy DATA and Airtime.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingFour">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#overviewCollapseFour"
aria-expanded="false" aria-controls="overviewCollapseFour">
Can I transfer FC to a friend?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseFour" class="collapse" aria-labelledby="overviewHeadingFour"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
At this time, the option to transfer FC to another account is not available.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="overviewHeadingFive">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#overviewCollapseFive"
aria-expanded="false" aria-controls="overviewCollapseFive">
Can I transfer FC to a friend?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="overviewCollapseFive" class="collapse" aria-labelledby="overviewHeadingFive"
data-parent="#overviewAccordion">
<div class="card-body border-top p-3 text-muted">
Watch: Entertainment news, cooking techniques/recipes and technology trends are just some of the things you can learn about while watching videos. You will earn FC as well!
<br><br>
Shop & Earn: Who doesn’t love to shop? But what if you could combine the thrill of shopping with the thrill of earning FC, all conveniently in one place? At Shop & Earn, you’ll find over 700 of your favorite retailers, all offering a FC rebate for every naira you spend.
<br><br>
Visit the How It Works page for more information on how to start accumulating!
</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Privacy Accordion -->
</div>
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
<div id="accountCollapseOne" class="collapse" aria-labelledby="accountHeadingOne"
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
I cannot find a particular deal to complete?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
If you're looking for a specific deal from a store and can't find it, then it may have been temporarily removed. Only deals that are currently available from our partners are shown at the deals page.
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
I get a message that no deals are available.
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
In some cases, there may be no deals available in your area or region. We are working hard to add new deals every day, so please check back at a later date.
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
Can I claim the same deal multiple times in the same week?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
Yes! All deals can be claimed more than once as long as the deal was fulfilled.
</div>
</div>
</div>
<!-- End Card -->
<!-- Card -->
<div class="box border rounded bg-white mb-2">
<div id="accountHeadingFive">
<h5 class="mb-0">
<button
class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3"
data-toggle="collapse" data-target="#accountCollapseFive"
aria-expanded="false" aria-controls="accountCollapseFive">
Can deals run out before the expiration date?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="accountCollapseFive" class="collapse" aria-labelledby="accountHeadingFive"
data-parent="#accountAccordion">
<div class="card-body border-top p-3 text-muted">
Unfortunately, yes.  Quantities are limited for all deals, so popular offers can run out quickly. To ensure that the deal is still available, please check deal details before purchasing and upload your receipt as soon as possible once you have made the qualifying purchase.</div>
</div>
</div>
<!-- End Card -->
</div>
<!-- End Account Accordion -->
</div>
<div id="privacy">
<!-- Title -->
<div class="mb-3 mt-5">
<h4 class="text-gray-900">Tasks</h4>
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
What are Tasks?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseOne" class="collapse" aria-labelledby="privacyHeadingOne"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Tasks is another way to earn FC on faceflyer.com. In general it is just way of helping a business or store achieve result by watching a video, subscribing to a channel, follow, likes, playing a game e.t.c
<br><br>
There are FC attached to each task created, once you complete a task and submit evidence of you doing the tasks, you immediately earn the FC attached to the task
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
Can i create a Task?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseTwo" class="collapse" aria-labelledby="privacyHeadingTwo"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
Yes! you can, if you have a product or services you want us to help you promote or bring in front of other Facers. You task created shows on the task page and landing page of faceflyer.com
<br><br>
To create a task you need to be a faceflyer merchant. click <a href="partner-with-us/">here</a> to learn more about being a merchant
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
How much FC can i earn on task?
<span class="card-btn-arrow">
<span class="icofont-rounded-down"></span>
</span>
</button>
</h5>
</div>
<div id="privacyCollapseThree" class="collapse" aria-labelledby="privacyHeadingThree"
data-parent="#privacyAccordion">
<div class="card-body border-top p-3 text-muted">
FC attached to a task are been determined by the merchant who created them. To earn a lot of FC you need to complete more tasks.
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

<div class="wptwa-container wptwa-round-toggle-on-mobile">
<div class="wptwa-box wptwa-js-ready">
<div class="wptwa-description">
<p>Faceflyer Help Center. Click to chat below on WhatsApp or send us an email at <a href="mailto:support@faceflyer.com">[email&#160;protected]</a></p>
</div>
<span class="wptwa-close"></span>
<div class="wptwa-people" style="max-height: 561px;">

<a href="https://web.whatsapp.com/send?phone=2348160599149&amp;text=Hi%2C%20i%20have%20a%20question%20about%20your%20service" class="wptwa-account wptwa-clearfix clicktocon" target="_blank">
<div class="wptwa-face"><img src="assets/images/logo.png" onerror="this.style.display='none'"></div>
<div class="wptwa-info">
<span class="wptwa-title">Customer Service</span>
<span class="wptwa-name">Taiwo Johnson</span>
</div>
</a>
</div>
</div>
<div class="wptwa-toggle">
<svg class="WhatsApp" width="20px" height="20px" viewBox="0 0 90 90">
<use xlink:href="#wptwa-logo">
</use>
</svg>
<span class="wptwa-text">Help</span></div>
<div class="wptwa-mobile-close"><span>Close and go back to page</span></div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="wptwa-logo">
<path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
</symbol>
</svg>
<script>
jQuery(document).ready(function(){

jQuery('.wptwa-toggle, .wptwa-close').click(function(){
if ( !jQuery('.wptwa-container').hasClass("wptwa-show")) {
jQuery('.wptwa-container').addClass('wptwa-show');
} else {
jQuery('.wptwa-container').removeClass('wptwa-show');
}
});
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
isMobile = true;
}
if( isMobile ){
jQuery(".clicktocon").each(function() {
// get href attr
hrefattr = jQuery(this).attr('href');
hrefattr = hrefattr.replace('https://web.whatsapp.com/send?', 'https://api.whatsapp.com/send?');
jQuery(this).attr("href", hrefattr);
//alert(hrefattr);
});

}
});
</script>
</body>

</html>
