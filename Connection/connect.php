<?php

$host_name = "localhost";
$database = "faceflyer";
$user_name = "faceflyer";
$password = "#Faceflyer3019@";
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>Failed to connect to mysqli: '.mysqli_connect_error().'</p>');
} else {

}

?>
