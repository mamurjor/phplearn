<?php

require_once("abstract.php");
class DatabaseManage extends Databaseoperation{

    public function DataSave(){
        echo "Data Save Done";
    }

    public function DataGetAll(){
        echo "Dave";
    }
    public function DataGetByID($id){
        echo "Data";
    }

    public function DataDelete($id){
        echo "Done";
    }

}



?>