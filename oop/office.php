<?php

require_once("person.php");


$admission_info = new Person("hadijaman","01746686868","fb/hadijaman");


echo $admission_info->getAddress();



?>