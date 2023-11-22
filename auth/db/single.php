<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

require_once("config.php");


$query = "SELECT * FROM user where id=$id";

$result = $conn->query($query);

$rows = $result->fetch_assoc();
// var_dump($rows);
// exit();
// var_dump($query);
// exit();



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
    <h1><?php echo $rows['username'];?></h1>
    <p><?php echo $rows['email'];?></p>
</body>
</html>