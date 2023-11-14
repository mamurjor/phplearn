<?php


$person_infos =array(
    "name" => "hadijaman",
    "address" => array(
        "house_no" => "10",
        "road_number" => "2",
        "area" => array(
            "one" =>1200
        ),
    ),
);

// var_dump($person_infos);
echo $person_infos["address"]["area"]["one"];


?>