<?php 


if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}else{
    echo "Have no data in username Cookie";
}


?>