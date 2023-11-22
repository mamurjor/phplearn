<?php


// trait PersonInfo{
//     // mehtod or property 
// }


trait PersonInfo{
    public function GetName(){
        echo "hadijaman";
    }
}

trait Person_otehrs{
    public function getinfo(){
        echo "</br>allah Mahan";
    }
}


class Admission{
use PersonInfo;
use Person_otehrs;
}


$ad = new Admission();
$ad->GetName();
$ad->getinfo();

?>