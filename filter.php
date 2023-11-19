<?php


$text = "<h1>  Allah Mohan</h1> ";

// var_dump($text);
// echo $text;

//ECHO filter_var($text, FILTER_SANITIZE_STRING);


$course_fee = "32000D";


if(!filter_var($course_fee, FILTER_VALIDATE_INT)==false){
    echo "This is Integer";
}
else{
    echo "This is not Integer";
}

?>