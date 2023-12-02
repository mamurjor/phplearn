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

$exten = array("jpg","JPG","PNG","png");

$filename = $_FILES['productimage'];


$filedir = "image";

$url = fileUpload($exten,$filename);
$name= $_POST['name'];

$regular_price = $_POST['regular_price'];
$salse_price = $_POST['salse_price'];
$cat_id = $_POST['cat_id'];
$brand_id = $_POST['brand_id'];   



$query  = "INSERT INTO product
(name,regular_price,sale_price,cat_id,brand_id,feature_image)
   VALUES('$name',$regular_price,$salse_price,$cat_id,$brand_id,'$url')";

//    var_dump($query);
//    exit();
   
   $sql = $conn->query($query);
   
   if($sql){
 
            header("location: all-product.php?msg=Save Done");

   }
   else{
    header("location: all-product.php?msg=Save Not Done");
   }



?>