<?php

if(isset($_GET['id'])){
     $id = $_GET['id'];

     
     require_once("config.php");

     $query = "DELETE FROM user WHERE id=$id";

    $sql= $conn->query($query);

    if($sql==true){
        header("location: showalluser.php?msg=Data Delete Done");
    }
    else{
        header("location: showalluser.php?msg=Sorry");
    }
}

?>

