<?php


class Messageinfo{

    const SUCCESS_MESSAGE ="Successfully Done";
    const ALERT_MESSAGE ="Something Wrong";



    public function SucessMessgae(){
        echo self::ALERT_MESSAGE;
    }
}

// ::
// scope resolution Operator (::)

//echo Messageinfo::SUCCESS_MESSAGE;

$new_messsage = new Messageinfo();

$new_messsage->SucessMessgae();

?>