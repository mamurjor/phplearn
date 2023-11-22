<?php
require_once("config.php");

$id = $_GET['id'];

echo $username= $_POST['username']."</br>";
echo $email= $_POST['email'];





$query = "UPDATE user SET username ='$username' ,  email='$email' WHERE id=$id ";

// var_dump($query);
// exit();

$sql = $conn->query($query);

if($sql==true){
    header("location: showalluser.php?msg=uddate Done");
}
else{
    header("location: showalluser.php?msg=uddate Not Done");
}
?>