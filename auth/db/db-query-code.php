<?php


// $conn = new mysqli("localhost", "root", "");

// if($conn==true){
//     echo "Db Connection Done";
// }
// else{
//     echo "Sorry Not Connect";
// }


//  $conn = mysqli_connect("localhost","root","");

//  if($conn){
//      echo "Success";
//  }
//  else{
//      echo "Sorry";
//  }

// $conn = new mysqli("localhost","root","","phplearn_ecom");

// if($conn){
//     echo "Success";

// }
// else{
//     echo "Sorry";
// }



$conn = mysqli_connect("localhost","root","","phplearn_ecom");

if($conn){
    echo "Succerss";
}
else{
    echo "Sorry";
}




// db create 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplearn_ecom";


// $conn = new mysqli($servername,$username,$password);

$conn = mysqli_connect($servername,$username,$password);
$dbdrop = "DROP DATABASE ajaxcrud";
$dbcreate = "CREATE DATABASE phplearn_ecom";


$sql = mysqli_query($conn,$dbdrop);

// $sql=$conn->query($dbcreate);

if($sql==true){
    echo "db deelte done";
}
else{
    echo "Sorry";
}


$query  = 'INSERT INTO user(username,email,password,image)
VALUES("HADI","hadijaman@gamil.com","1111","")';

?>