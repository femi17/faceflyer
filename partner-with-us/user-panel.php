<div class="user-panel-body-left">
<div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
<p>You are on <?php echo $_SESSION['plan']; ?> plan</p>
<img class="mb-3 mt-2 user-info-img" alt="Merchant"
src="../assets/images/<?php echo merchantSignin($_SESSION['faceMerchant'], 'logo'); ?>">
<h6 class="text-black mb-2 text-gray-900"><?php echo merchantSignin($_SESSION['faceMerchant'], 'store_name'); ?></h6>
<p class="m-0">claims based on store</p>
<h3><?php echo count_claim_merchant('tasks', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name')) + count_claim_merchant('deals', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name')) + count_claim_merchant('cashback', 'approved', merchantSignin($_SESSION['faceMerchant'], 'store_name'))?></h3>
<p>&nbsp;</p>
<button type="button" onClick="window.location.href='logout'" class="btn btn-primary btn-block"><i class="icofont-logout"></i>
Logout</button>
</div>
<div class="user-panel-sidebar-link mb-4 bg-white rounded shadow-sm overflow-hidden">
<?php if($_SESSION['plan'] == "free"){ ?>
<a href="add-task"><i class="icofont-ticket"></i> Tasks</a>
<a href="#mc"><i class="icofont-fire"></i> Deals</a>
<a href="#mo"><i class="icofont-sale-discount"></i> Cashback</a>
<a href="pricing"><i class="icofont-license"></i> Upgrade Subscription</a>
<?php }else{ ?>
<a href="add-task"><i class="icofont-ticket"></i> Tasks</a>
<a href="add-deal"><i class="icofont-fire"></i> Deals</a>
<a href="add-cashback"><i class="icofont-sale-discount"></i> Cashback</a>
<a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="Cancel" id="deleteBtn" data-type="cancel"><i class="icofont-license"></i> Cancel Subscription</a><?php } ?>
</div>
</div>
