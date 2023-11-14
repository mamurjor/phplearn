<?php




$person_infos = array(
    'person_name' => "hadijaman",
    'perosn_cell' => "01746686868",
    'person_address' => "Mirpur-10"
);

// var_dump($person_infos);

// echo count($person_infos);
// echo $person_infos['person_name'];
// echo $person_infos['perosn_cell'];

foreach($person_infos as $single_key => $single_value){

    echo $single_value."</br>";
}


?>