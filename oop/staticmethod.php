<?php



class Person extends ex{

    public static  $name="hadi jaman self";
    public static function getInfo(){
       echo Parent::$name;
    }
}

 //$object = new Person();

 //$object->getInfo();

 //echo $object->name;

Person::getInfo();

//echo Person::$name;

?>