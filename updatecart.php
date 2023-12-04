<?php
session_start();

$proid = $_POST['pro_id'];
$_SESSION['cart'][$proid]['qty'] = $_POST['qty'];

header("location: cart.php?msg=Cart Update Done");

?>