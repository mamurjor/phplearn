<?php

if(isset($_GET['id'])){


    $id = $_GET['id'];
    require_once('config.php');


    $query = "SELECT * FROM user WHERE id=$id ";

    $sql= $conn->query($query);
   $row =  $sql->fetch_assoc();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="update.php?id=<?php echo $row['id'];?>" method="post">

    <label for="username">User Name</label>
            <input type="text" name="username" value="<?php  echo $row['username'];?>" id="">
        <br>

        <label for="email">Email</label>

        <input type="text" name="email" value="<?php echo $row['email'];?>" id="">

        <button type="submit">Update </button>
      
        </form>
</body>
</html>