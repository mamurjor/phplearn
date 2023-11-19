<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// username = "admin" and password = 123456


if($username=="admin" && $password=="123456"){
    echo "Login Success";

    $_SESSION['username']=$username;
    header("location: dashboard.php");


}
else{
    $msg="Sorry Something Missing";

    header("location: login.php?msg=$msg");
}





?>