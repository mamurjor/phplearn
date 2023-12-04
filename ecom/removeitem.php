<?php
session_start();
$proid = $_GET['id'];
unset($_SESSION['cart'][$proid ]);
header("location: cart.php?msg=Remove Item");

?>