<?php


interface MycoreFuction{


    public function DataSave();


}

class Dataoperation implements MycoreFuction{

    public function DataSave(){
        echo "Done";
    }
}


$dbop = new Dataoperation();

$dbop->DataSave();

?>