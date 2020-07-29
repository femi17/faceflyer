<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-light shadow-sm topbar osahan-top-main">
<!-- Sidebar Toggle (Topbar) -->
<a class="navbar-brand" href="home">
<img class="img-fluid w-40" src="../assets/images/logo.png">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="../home"><i class="fa fa-home"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="../tasks"><span>Tasks</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="../deals"><span>Deals</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="../cashback"><span>Cashback</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="../shop">Shop</a>
</li>
</ul>
</div>
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto flex-direction-row">
<!-- Nav Item - Search Dropdown (Visible Only XS) -->

<li class="nav-item  redeem">
<a class="nav-link" href="../coin">Coin</a>
</li>
<div class="topbar-divider d-none d-sm-block"></div>
<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-bell fa-fw"></i>
<!-- Counter - Alerts -->
<span class="badge badge-danger badge-counter"></span>
</a>
<!-- Dropdown - Alerts -->
<div class="dropdown-list dropdown-menu dropdown-menu-right border-0 shadow-sm animated--grow-in"
aria-labelledby="alertsDropdown">
<h6 class="dropdown-header">
Alerts Center
</h6>
<div class="notify">

</div>
<!-- <a class="dropdown-item text-center small text-gray-500-500" href="#">Show All Alerts</a> -->
</div>
</li>
<!-- Nav Item - Messages -->
<div class="topbar-divider d-none d-sm-block"></div>
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle pr-0" href="#" id="userDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<h3 class="mr-2 d-lg-inline text-gray-600"><b><?php echo number_format_short(fetchData('users', $_SESSION['facer'], 'uID', 'coin')); ?><span style="font-size:11px"> fc</span></b></h3>
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'picture')){ ?>
<img class="img-profile rounded-circle" src="../assets/images/<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'picture'); ?>">
<?php }else{ ?>
<span class="img-profile rounded-circle" style="border:1px solid #ccc"><span style="padding-left:6px;position:absolute;margin-top:4px;color:#000"><?php $first = fetchData('users', $_SESSION['facer'], 'uID', 'firstname'); echo $first[0]; ?><?php $last = fetchData('users', $_SESSION['facer'], 'uID', 'lastname'); echo $last[0]; ?></span></span>
<?php } ?>
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow-sm border-0 animated--grow-in"
aria-labelledby="userDropdown">
<a class="dropdown-item" href="../dashboard">
<i class="fa fa-database fa-sm fa-fw mr-2 text-gray-500-400"></i>
Dashboard
</a>
<a class="dropdown-item" href="../settings">
<i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-500-400"></i>
Settings
</a>
<a class="dropdown-item" href="../activity-log">
<i class="fa fa-list fa-sm fa-fw mr-2 text-gray-500-400"></i>
Activity Log
</a>
<a class="dropdown-item" href="../referral">
<i class="fa fa-users fa-sm fa-fw mr-2 text-gray-500-400"></i>
Refer & Earn
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="../logout">
<i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500-400"></i>
Logout
</a>
</div>
</li>
</ul>
</nav>
