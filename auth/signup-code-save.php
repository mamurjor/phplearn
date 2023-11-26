<?php
require_once("db/config.php");


 $code= $_POST['code'];





$query = "UPDATE user SET status ='Approved'  WHERE code=$code ";

// var_dump($query);
// exit();

$sql = $conn->query($query);

if($sql==true){
    header("location: login.php?msg=verify done");
}
else{
    header("location: sign-up.php?msg=verify Not Done");
}
?>