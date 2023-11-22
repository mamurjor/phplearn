<?php 



abstract class Databaseoperation{

    abstract protected  function DataSave(); 
    abstract public function DataGetAll();
    abstract public function DataGetByID($id);
    abstract public function DataDelete($id);
    // abstract public function DatasingleShow($id);
    // abstract public function Update($id);

}



?>