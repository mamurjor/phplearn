<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label for="Username">User Name</label>

<input type="text" name="username">

<button type="submit"> Submit</button>

    </form>

    <?PHP
    
    IF($_SERVER['REQUEST_METHOD']=="POST"){
      $username =  $_REQUEST['username'];
      
    //   IF(empty($username)){
    //       echo "ai beta input field puron koro";
    //   }
    //   else{
    //       echo $username;
    //   }

    if(!empty($username)){
        echo $username;
    }
    else{
        echo "ai beta fazil form purn koro age";
    }
    }
    else{
        echo "tumra method holo get change mehtod ";
    }
    
    
    ?>


</body>
</html>