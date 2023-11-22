<?php

if(isset($_POST['name'])){

    require_once("db/config.php");

    $name = $_POST['name'];
   $usernmae = $_POST['usernmae'];
    $password = $_POST['password'];
   
   
   
   $query  = "INSERT INTO user(username,email,password,image)
   VALUES('$name','$usernmae','$password','')";
   
   $sql = $conn->query($query);
   
   if($sql){
       header("location: sign-up.php?msg=data Save Done");
   }
   else{
    header("location: sign-up.php?msg=data Save  Not Done");
   }
   

}
else{
    header("location: sign-up.php?msg=ai beta chor");
}





?>