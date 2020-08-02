<?php

date_default_timezone_set("Africa/Lagos");

require('PHPMailer/PHPMailerAutoload.php');

function merchantSignin($session,$return)
{
global $connect;
$query = "select * from merchant where email = '$session'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

return $row[$return];
}

//get file extension
function get_ext($key) {
$key=strtolower(substr(strrchr($key, "."), 1));
$key=str_replace("jpeg","jpg",$key);
return $key;
}

function list_col($tab, $col, $return)
{
global $connect;
$query = "select distinct $col from $tab order by $col";

$result = mysqli_query($connect, $query);
$num_result = mysqli_num_rows($result);
for($i=0; $i<$num_result; $i++)
{
$row = mysqli_fetch_array($result);
echo '<option value="'.$row[$return].'">'.$row[$return].'</option>';
}
}

function send_mail($to, $subject, $content, $sender_email, $name)
{

$mailcontent  = '<!DOCTYPE html><html lang="en-US">
<head>
<title>Faceflyer</title>
<style>
.yiv4360069400ln-button {font-family:Open Sans, sans-serif;color:#ffffff;font-size:14px;line-height:21px;background:#0091ff;display:inline-block;max-width:256px;text-align:center;border-radius:4px;text-transform:uppercase;border-top:14px solid #0091ff;border-bottom:14px solid #0091ff;border-left:28px solid #0091ff;border-right:28px solid #0091ff;margin:28px 14px;letter-spacing:1px;}
</style>
</head>
<div>
<div id="yiv5729889525wrapper" dir="ltr" style="background-color:#f7f7f7;margin:0;padding:70px 0 70px 0;width:100%;">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"><tr>
<td align="center" valign="top">
<div id="yiv5729889525template_header_image">
</div>
<table border="0" cellpadding="0" cellspacing="0" width="600" id="yiv5729889525template_container" style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px !important;">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="600" id="yiv5729889525template_header" style="background-color:#fff;border-radius:3px 3px 0 0 !important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:"Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;">
<tr>
</tr></table>

</td>
</tr>
<tr>
<td align="center" valign="top">

<table border="0" cellpadding="0" cellspacing="0" width="600" id="yiv5729889525template_body"><tr>
<td valign="top" id="yiv5729889525body_content" style="background-color:#ffffff;">

<table border="0" cellpadding="20" cellspacing="0" width="100%"><tr>
<td valign="top" style="padding:48px 48px 0;">
<div id="yiv5729889525body_content_inner" style="color:#636363;font-family:"Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;font-size:14px;line-height:150%;text-align:left;">

<p style="margin:0 0 16px;">'.$content.'</p>

<table id="yiv5729889525addresses" cellspacing="0" cellpadding="0" style="width:100%;vertical-align:top;margin-bottom:40px;padding:0;" border="0"><tr>
<td style="text-align:left;border:0;padding:0;" valign="top" width="50%">
<p style="display:block;font-family:"Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left;">Thanks,<br>
Team Faceflyer</p>

</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" valign="top">

<table border="0" cellpadding="10" cellspacing="0" width="600" id="yiv5729889525template_footer"><tr>
<td valign="top" style="padding:0;">
<table border="0" cellpadding="10" cellspacing="0" width="100%"><tr>
<td colspan="2" valign="middle" id="yiv5729889525credit" style="padding:0 48px 48px 48px;border:0;color:#c09bb9;font-family:Arial;font-size:12px;line-height:125%;text-align:center;">
<p><a href="http://faceflyer.com" target="_blank"><img src="http://faceflyer.com/assets/images/logo.png" style="vertical-align:middle" width="35" alt="Faceflyer LOGO"></a></p>
</td>
</tr></table>
</td>
</tr></table>

</td>
</tr>
</table>
</td>
</tr></table>
</div>
</div></html>';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($sender_email, 'Faceflyer');
//Set who the message is to be sent to
$mail->addAddress($to, $name);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $mailcontent;

//send the message, check for errors
$mail->send();

}

function number_format_short( $n, $precision = 1 ) {
if ($n < 900) {
// 0 - 900
$n_format = number_format($n, $precision);
$suffix = '';
} else if ($n < 900000) {
// 0.9k-850k
$n_format = number_format($n / 1000, $precision);
$suffix = 'K';
} else if ($n < 900000000) {
// 0.9m-850m
$n_format = number_format($n / 1000000, $precision);
$suffix = 'M';
} else if ($n < 900000000000) {
// 0.9b-850b
$n_format = number_format($n / 1000000000, $precision);
$suffix = 'B';
} else {
// 0.9t+
$n_format = number_format($n / 1000000000000, $precision);
$suffix = 'T';
}

// Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
// Intentionally does not affect partials, eg "1.50" -> "1.50"
if ( $precision > 0 ) {
$dotzero = '.' . str_repeat( '0', $precision );
$n_format = str_replace( $dotzero, '', $n_format );
}

return $n_format . $suffix;
}

function fetchData($tab, $user, $col, $return){
global $connect;
$qsPin =  mysqli_query($connect, "SELECT * FROM $tab WHERE $col = '$user'");
$rsPin = mysqli_fetch_assoc($qsPin);
return $rsPin[$return];
}

function fetchDataID($tab, $name, $nameval, $store, $merchant, $return){
global $connect;
$qsPin =  mysqli_query($connect, "SELECT * FROM $tab WHERE $name = '$nameval' && $store = '$merchant'");
$rsPin = mysqli_fetch_assoc($qsPin);
return $rsPin[$return];
}


function createThumbnail($sourcePath, $targetPath, $file_type, $thumbWidth, $thumbHeight){

if($file_type == "jpg" || $file_type == "jpeg"){
$source_imageJpg = imagecreatefromjpeg($sourcePath);
$source = $source_imageJpg;
}elseif($file_type == "png"){
$source_imagePng = imagecreatefrompng($sourcePath);
$source = $source_imagePng;
}elseif($file_type == "gif"){
$source_imageGif = imagecreatefromgif($sourcePath);
$source = $source_imageGif;
}

$width = imagesx($source);
$height = imagesy($source);

$tnumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
imagefilledrectangle($tnumbImage, 0, 0, $thumbWidth, $thumbWidth, imagecolorallocate($tnumbImage, 255, 255, 255));
imagecopyresampled($tnumbImage, $source, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

if($file_type == "jpg" || $file_type == "jpeg"){
if(imagejpeg($tnumbImage, $targetPath, 90)) {
imagedestroy($tnumbImage);
imagedestroy($source);
return TRUE;
}else {
return FALSE;
}
}
elseif($file_type == "png"){
if(imagepng($tnumbImage, $targetPath, 1)) {
imagedestroy($tnumbImage);
imagedestroy($source);
return TRUE;
}else {
return FALSE;
}
}elseif($file_type == "gif"){
if(imagegif($tnumbImage, $targetPath)) {
imagedestroy($tnumbImage);
imagedestroy($source);
return TRUE;
}else {
return FALSE;
}
}

}

function timeLeft($end_date){
//Convert to date
$date = strtotime($end_date);

//Calculate difference
$diff=$date-time();//time returns current time in seconds
$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
$hours=round(($diff-$days*60*60*24)/(60*60));

//Report
echo "$days days: $hours hrs";
}

function multiexplode($delimiters,$string,$currect_page) {
$ready = str_replace($delimiters, $delimiters[0], $string);
$url = explode($delimiters[0], $ready);
return $url[3];
}

function endDate($tab,$id){
global $connect;

$qs =  mysqli_query($connect, "SELECT * FROM $tab WHERE id = '$id'");
$rs = mysqli_fetch_assoc($qs);

if($rs['end_date']){
$val = '<p class="text-gray mb-0"><span class="text-warning"><i class="icofont-clock-time"></i> Time Left : '.timeLeft($rs['end_date']).'</span></p>';
}else{
$val = '<br>';
}
return $val;
}

function count_claim($module, $status){
global $connect;

$qs =  mysqli_query($connect, "SELECT * FROM coin WHERE module = '$module' && status = '$status'");
$ns = mysqli_num_rows($qs);
if($ns > 0){
return $ns;
}else{
return 0;
}
}

function count_claim_merchant($module, $status, $merchant){
global $connect;

$qs =  mysqli_query($connect, "SELECT * FROM coin WHERE module = '$module' && status = '$status' && merchant = '$merchant'");
$ns = mysqli_num_rows($qs);
if($ns > 0){
return $ns;
}else{
return 0;
}
}

function count_claim_facer($module, $status, $facer){
global $connect;

$qs =  mysqli_query($connect, "SELECT * FROM coin WHERE module = '$module' && status = '$status' && uID = '$facer'");
$ns = mysqli_num_rows($qs);
if($ns > 0){
return $ns;
}else{
return 0;
}
}

function count_all($module){
global $connect;

$qs =  mysqli_query($connect, "SELECT * FROM $module");
$ns = mysqli_num_rows($qs);

if($ns > 0){
return $ns;
}else{
return 0;
}
}

function  time_ago($tm, $rcs = 0){
$cur_tm = time();
$dif = $cur_tm-$tm;
$pds = array('second', 'minute', 'hour', 'day', 'week', 'month');
$lngh = array(1, 60, 3600, 86400, 604800, 2630880);
for($v = sizeof($lngh)-1;($v >= 0) && (($no = $dif/$lngh[$v])<=1); $v--);if($v < 0) $v = 0; $_tm= $cur_tm-($dif%$lngh[$v]);

$no = floor($no);
if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no, $pds[$v]);
if(($rcs == 1) && ($v >= 1) && (($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
return $x;

}

function find_query_task($search){

global $connect;

$qsPhase = mysqli_query($connect, "select * from tasks where name like '%$search%' || category like '%$search%'");
$nsPhase = mysqli_num_rows($qsPhase);

if($nsPhase > 0){

for($p=0; $p<$nsPhase; $p++){
$rsPhase = mysqli_fetch_assoc($qsPhase);

if(stristr($rsPhase['name'], $search)){
$div .= '
<li class="list-group-item">Found under task name:<br> <strong><a href="task-details/'. $rsPhase['id'].'">'.$rsPhase['name'].'</a></strong></li>';
}
if(stristr($rsPhase['category'], $search)){
$div .= '
<li class="list-group-item">Found under task category:<br> <strong><a href="task-details/'. $rsPhase['id'].'">'.$rsPhase['category'].'</a></strong></li>';
}
}
}else{
$div = '<li class="list-group-item">No <strong>'.$search.'</strong> found under Tasks</li>';
}
return $div;
}

function find_query_deal($search){

global $connect;

$qsPhase = mysqli_query($connect, "select * from deals where name like '%$search%' || category like '%$search%' || headline like '%$search%'");
$nsPhase = mysqli_num_rows($qsPhase);

if($nsPhase > 0){

for($p=0; $p<$nsPhase; $p++){
$rsPhase = mysqli_fetch_assoc($qsPhase);

if(stristr($rsPhase['name'], $search)){
$div .= '
<li class="list-group-item">Found under deal name:<br> <strong><a href="deal-details/'. $rsPhase['id'].'">'.$rsPhase['name'].'</a></strong></li>';
}
if(stristr($rsPhase['category'], $search)){
$div .= '
<li class="list-group-item">Found under deal category:<br> <strong><a href="deal-details/'. $rsPhase['id'].'">'.$rsPhase['category'].'</a></strong></li>';
}
if(stristr($rsPhase['headline'], $search)){
$div .= '
<li class="list-group-item">Found under task category:<br> <strong><a href="deal-details/'. $rsPhase['id'].'">'.$rsPhase['headline'].'</a></strong></li>';
}
}
}else{
$div = '<li class="list-group-item">No <strong>'.$search.'</strong> found under Deals</li>';
}
return $div;
}


function find_query_cashback($search){

global $connect;

$qsPhase = mysqli_query($connect, "select * from cashback where name like '%$search%'");
$nsPhase = mysqli_num_rows($qsPhase);

if($nsPhase > 0){

for($p=0; $p<$nsPhase; $p++){
$rsPhase = mysqli_fetch_assoc($qsPhase);

if(stristr($rsPhase['name'], $search)){
$div .= '
<li class="list-group-item">Found under cashback name:<br> <strong><a href="cashback-details/'. $rsPhase['id'].'">'.$rsPhase['name'].'</a></strong></li>';
}
}
}else{
$div = '<li class="list-group-item">No <strong>'.$search.'</strong> found under Cashback</li>';
}
return $div;
}

?>
