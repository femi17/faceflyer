<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

if(isset($_POST['view'])){

if($_POST["view"] != '')
{
$update_query = "update notification set status = 'read' where uID = '{$_SESSION['facer']}'";
mysqli_query($connect, $update_query);
}

$query = "SELECT * FROM notification where uID = '{$_SESSION['facer']}' ORDER BY id DESC LIMIT 5";
$result = mysqli_query($connect, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
$output .= '
<a class="dropdown-item d-flex align-items-center" href="javascript:;">
<div class="mr-3">
<div class="icon-circle">
<img class="img-fluid w-40" width="50" src="../assets/images/logo.png">
</div>
</div>
<div>
<div class="small text-gray-500-500">'.time_ago(strtotime($row['date'])) ." ago".'</div>
<span class="font-weight-bold">'.$row['notification'].'</span>
</div>
</a>
';
}
}
else{
$output .= '<a class="dropdown-item text-center small text-gray-500-500" href="javascript:;">No Alerts</a>
';
}

$status_query = "SELECT * FROM notification WHERE status = 'unread' && uID = '{$_SESSION['facer']}'";
$result_query = mysqli_query($connect, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
'notification' => $output,
'unseen_notification'  => $count
);

echo json_encode($data);
}

?>
