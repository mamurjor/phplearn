<?php
 require_once("db/config.php");
session_start();

 $username = $_POST['username'];
 $password_user = $_POST['password'];

// testpraampass
// testparamname
 $query = "SELECT * FROM user where username ='$username' and password='$password_user'";
 $sql = $conn->query($query);
 
 // var_dump($sql);
 
 if($sql->num_rows>0){
     
     $_SESSION['username']=$username;
    header("location: dashboard.php");
 }
 else{
    $msg="Sorry Something Missing";

    header("location: login.php?msg=$msg");
 }
 exit();

// username = "admin" and password = 123456








?>