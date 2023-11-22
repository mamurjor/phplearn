<?php


require_once("config.php");





$query = "CREATE TABLE product(
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price float
)";


$sql= $conn->query($query);

if($sql){
    echo "Table Done";
}
else{
    echo "Sorry";
}
?>