<?php
session_start();

unset($_SESSION['faceMerchant']);
unset($_SESSION['package']);

header('Location: ./');
exit;

?>
