<?php


// $list = array("f","r","p","t","z","d","a");

// //$list = array("20","10","1","4");

// //sort($list);
// rsort($list);
// foreach($list as $single){
//     echo $single."</br>";
// }



$person_infos = array(
    'person_name' => "hadijaman",
    'perosn_cell' => "01746686868",
    'person_address' => "mirpur",
    "a"               => "a",
    "z"               => "z",
);

//asort($person_infos);
//arsort($person_infos);
// ksort($person_infos);
krsort($person_infos);
foreach($person_infos as $key => $value){
    echo $key."</br>";
}

?>