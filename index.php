<?php
session_start();



if(isset($_SESSION['key'])){
    echo $_SESSION['key'];
}




?>