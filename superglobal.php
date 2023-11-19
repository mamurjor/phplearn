<?php


$GLOBALS;
// $_SERVER;
// $_REQUEST;
// $_POST;
// $_GET;
// $_FILES;
// $_ENV;
// $_SESSION;
// $_COOKIE

$person_name = "hadijaman";

function getName(){
    // global $person_name;
    echo $GLOBALS['person_name'];
}

getName();

?>