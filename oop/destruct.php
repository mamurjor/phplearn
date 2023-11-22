<?php

class person{
    public $name;
    public $cell;
    public $fb_id;


    public function __construct($name,$cell,$fb_id){
        $this->name=$name;
        $this->cell=$cell;
        $this->fb_id=$fb_id;

    }

    public function __destruct(){
        echo  "person Name is {$this->name} </br> my cell number is {$this->cell} </br>
        {$this->fb_id}";
    }

}


?>