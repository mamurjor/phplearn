<?php





$person_infos= array("hadijaman","01746686868","Mirpur-10",5000,"adf");
// indexed 
// associative 
// multidimensional 

//  var_dump($person_infos);
// print_r($person_infos);

// echo $person_infos[0]."</br>";
// echo $person_infos[1]."</br>";
// echo $person_infos[3]."</br>";

$count =  count($person_infos);

foreach($person_infos as $single_value){
    echo $single_value."</br>";
}





?>