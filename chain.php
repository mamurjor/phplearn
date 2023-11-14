<?php

$currentd_Day = date("D");
// echo $currentd_Day;

// if($currentd_Day=="Sun"){
//     echo "This is Sunday. 10% Discuont";
// }
// elseif($currentd_Day=="Mon"){
//     echo "This is Monday and Get 15% Discount";
// }
// elseif($currentd_Day=="Tue"){
//     echo "This is Tuesday and Get 16% Discount";
// }
// elseif($currentd_Day=="Wed"){
//     echo "This is Wed and Get 18% Discount";
// }
// else{
//     echo "Normaly 2% Discount";
// }

switch($currentd_Day){
    case $currentd_Day=="Sun":
        echo "This is Sunday, 10% Discount";
        break;
    case $currentd_Day=="Mon":
        echo "This is Monday and Get 15% Discount";
        break;
    case $currentd_Day=="Tue":
        echo "This is Tuesday and Get 16% Discount";
        break;
    case $currentd_Day=="Wed":
        echo "This is Wed and Get 18% Discount";
        break;
    
    default:
    echo "Normaly 2% Discount";

}

// 10 Example 



?>