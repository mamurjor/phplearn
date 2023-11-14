<?php


function getFullName($firstName,$lastName){
   
   
    $fullName = $firstName.$lastName;
    return $fullName;
}

function PriceCalculate($price=0,$qty=0 ){
  
    $total_price = $price*$qty;
    return $total_price;
}


?>