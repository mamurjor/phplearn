<?php

function mynumber(){
   static $qty = 1;
    echo $qty."</br>";
    $qty+=1;

}


mynumber();
mynumber();
mynumber();


?>