<?php
require_once("config.php");

$myprepare_qeury = $conn->prepare("INSERT INTO user(username,email,password) VALUES(?,?,?)");

$myprepare_qeury->bind_param("sss",$name,$email,$password);

// i d s 

$name = "testparamname";
$email = "testparam@gmail.com";
$password = "testpraampass";
$myprepare_qeury->execute();
$myprepare_qeury->close();
$conn->close();

?>