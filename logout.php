<?php
session_start();

unset($_SESSION['facer']);

header('Location: ./');
exit;

?>
