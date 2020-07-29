<?php
session_start();
require('Connection/connect.php');
require_once('fns.php');

$row = $_POST['row'];
$rowperpage = 1;

// selecting posts
$query = 'SELECT * FROM tasks limit '.$row.','.$rowperpage;

$result = mysqli_query($connect,$query);

$html = '';

while($row = mysqli_fetch_array($result)){

$html = '<div class="col-xl-3 col-sm-6" id="post_'.$row['id'].'">
<div class="custom-card shadow-sm h-100 stor-card">
<div class="custom-card-image">
<a href="task-details/'.$row['id'].'">
<img class="img-fluid item-img" src="assets/images/'.$row['banner'].'">
</a>
<div class="store-star"><span class="badge badge-success"><i class="icofont-cc"></i> '.$row['coin'].'</span>
</div>
</div>
<div class="p-3">
<div class="custom-card-body">
<h6 class="mb-0"><a class="text-gray-900" href="task-details/'.$row['id'].'">'.$row['name'].'</a></h6>
<p class="text-gray-500 mb-2">'.$row['category'].'</p>
'.endDate('tasks',$row['id']).'
</div>
</div>
<div class="p-3 border-top">
<div class="custom-card-badge">
<a class="text-gray-900" href="task-details/'.$row['id'].'">
<span class="badge badge-success"><i class="icofont-sale-discount"></i> OFFER</span> Complete task to earn '.$row['coin'].' FC
</a>
</div>
</div>
</div>
</div>';

}

echo $html;
