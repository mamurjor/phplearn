<?php
 require_once("db/config.php");
session_start();

 $username = $_POST['username'];
 $password_user = md5($_POST['password']);

// testpraampass
// testparamname
 $query = "SELECT * FROM user where username ='$username' and password='$password_user'";
 $sql = $conn->query($query);
 
 // var_dump($sql);

 
 
 if($sql->num_rows>0){
     
   $rows=$sql->fetch_assoc();
     $_SESSION['username']=$username;
     $_SESSION['user_image']=$rows['image'];
    header("location: dashboard.php");
 }
 else{
    $msg="Sorry Something Missing";

    header("location: login.php?msg=$msg");
 }
 exit();

// username = "admin" and password = 123456








?>