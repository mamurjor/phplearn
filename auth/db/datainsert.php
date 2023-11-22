<?php

require_once("config.php");

$query = "INSERT INTO user(username,email,password)
VALUES('TESTNAME','TEST@AMGILC.COM','12122')";

$sql = $conn->query($query);

if($sql==true){
    echo $conn->insert_id;
}
else{
    echo "sorry";
}




?>