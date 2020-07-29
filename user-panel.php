<div class="user-panel-body-left">
<div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
<?php if(fetchData('users', $_SESSION['facer'], 'uID', 'picture')){ ?>
<img class="mb-3 mt-2 user-info-img" src="assets/images/<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'picture'); ?>">
<?php }else{ ?>
<span class="p-3 user-info-img" style="border:1px solid #ccc"><span style="margin-bottom:20px;color:#000;height:50px;"><?php $first = fetchData('users', $_SESSION['facer'], 'uID', 'firstname'); echo $first[0]; ?><?php $last = fetchData('users', $_SESSION['facer'], 'uID', 'lastname'); echo $last[0]; ?></span></span>
<?php } ?>
<br><br>
<h6 class="text-black mb-2 text-gray-900"><?php echo fetchData('users', $_SESSION['facer'], 'uID', 'firstname'); ?>&nbsp;<?php echo fetchData('users', $_SESSION['facer'], 'uID', 'lastname'); ?></h6>
<h3 class="mr-2 d-lg-inline text-gray-600"><b><?php echo number_format_short(fetchData('users', $_SESSION['facer'], 'uID', 'coin')); ?><span style="font-size:11px"> fc</span></b></h3>
<p>&nbsp;</p>
<button type="button" onClick="windows.location.href='logout'" class="btn btn-primary btn-block"><i class="icofont-logout"></i>
Logout</button>
<p class="mb-0 mt-3"><a href="settings">Edit Profile</a></p>
</div>
<div class="user-panel-sidebar-link mb-4 bg-white rounded shadow-sm overflow-hidden">
<a href="#md"><i class="icofont-ticket"></i> Tasks</a>
<a href="#mc"><i class="icofont-fire"></i> Deals</a>
<a href="#mo"><i class="icofont-sale-discount"></i> Cashback</a>
</div>
</div>
