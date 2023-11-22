<?php

function ageCalculate($age){
    if($age>=18){       
        return true;
    }
    throw new Exception("tumi age hote hobe 18 er upore");   
}

try {

    ageCalculate(10);
    echo "your are voter";
}
catch (Exception $exp){
    echo $exp->getMessage();

}

// finally {
// echo "go next";
// }
// 10 example 
?>