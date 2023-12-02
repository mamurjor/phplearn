<?php

require_once("db/config.php");



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

$filename = $_FILES['catimage'];


$filedir = "image";

$url = fileUpload($exten,$filename);
$name= $_POST['name'];

$query  = "INSERT INTO category(name,image)
   VALUES('$name','$url')";
   
   $sql = $conn->query($query);
   
   if($sql){
 
            header("location: all-cat.php?msg=Save Done");

   }
   else{
    header("location: all-cat.php?msg=Save Not Done");
   }



?>