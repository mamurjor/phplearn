<?php

require_once("db/config.php");
session_start();

function fileUpload($type=array("jpg","JPG","png","PNG"),$filename){
    $file_extension= $type;
    $filebase_name =  basename($filename['name']);    
    $file_array_name = explode(".",$filebase_name);    
    
    $file_size = $filename['size'];
    
    
    if(in_array($file_array_name[1],$file_extension)){
      
    
            $file_destination = "studentimage/".time().basename($filename['name']);
            $file_tmp_name = $filename['tmp_name'];
            move_uploaded_file($file_tmp_name,$file_destination);
            return $file_destination;
    
    }
    else{
        return "not supported";
    }
}

$exten = array("jpg","JPG","PNG");

$filename = $_FILES['userimage'];

$filedir = "image";

$url = fileUpload($exten,$filename);
$username =  $_SESSION['username'];
$query = "UPDATE user SET image ='$url'  WHERE username='$username'";

$sql = $conn->query($query);

if($sql==true){
   
    $_SESSION['user_image']= $url;
    header("location: user-profile.php?msg= done");
}
else{
   
    header("location: user-profile.php?msg= Not Done");
}

?>