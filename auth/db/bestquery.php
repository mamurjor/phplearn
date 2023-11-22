<?php

require_once("config.php");

$myquery = $conn->prepare("INSERT INTO user(username,email,password)VALUES(?,?,?)");

$myquery->bind_param("sss",$username,$email,$password);

$username="hadijaman";
$email = "hadijaman@gmail.com";
$password = "111111";

$myquery->execute();

echo "Data Save Done ";

$myquery->close();
$conn->close();


?>