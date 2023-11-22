<?php

require_once("config.php");



$query = "insert into user (username,email,password)
values('name','email','passwrd');";


$query .= "insert into user (username,email,password)
values('hadi','hadi@gmail.com','122');";

$query .= "insert into user (username,email,password)
values('jaman','jaman@gmail.com','122');";

$query .= "insert into product (name,price)
values('wpfullstack','32000')";


if($conn->multi_query($query)==true){
    echo "Done";
}
else{
    echo "Sorry";
}


?>