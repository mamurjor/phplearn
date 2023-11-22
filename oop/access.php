<?php


class A{
    protected $name;


    public function __construct($name){

        $this->name=$name;
    }

    public function __destruct(){
        echo "This is Person Name this parent Class {$this->name}";
    }
}

class B extends A{
  

    public function getNamebyp(){
        return $this->name;
    }



}


$new_b  = new B("jaman");

echo $new_b->getNamebyp()."</br>";



?>