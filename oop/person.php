<?php



class Person{
   
// Properties // variable 
// Method // function 

private $name;
public $cell;
public $fb_id;

public function __construct($name,$cell,$fb_id){
    $this->name=$name;
    $this->cell=$cell;
    $this->fb_id=$fb_id;
}



public function saveInfo($name,$cell,$fb_id){

    $this->name=$name;
    $this->cell=$cell;
    $this->fb_id=$fb_id;
   
}

public function getAddress(){

    return $this->name.$this->cell.$this->fb_id;
}



}

// $new_person_info = new Person();

// // echo $new_person_info->name."</br>";

// // echo $new_person_info->cell."</br>";

// // echo $new_person_info->fb_id;


// $new_person_info->saveInfo("badi","1111","hadijaman");



// echo $new_person_info->getAddress();

?>