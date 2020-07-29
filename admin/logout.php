<?php
session_start();

unset($_SESSION['faceflyer']);

header('Location: ./');
exit;

?>
