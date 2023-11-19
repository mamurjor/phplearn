<?php

$getjsondata = '{"name":"hadijaman","email":"hadijaman@gmail.com","cell":"0174686868"}';


$convert = json_decode($getjsondata);

foreach ($convert as $key => $value){
    echo $key."=$value</br>";
    
}


?>