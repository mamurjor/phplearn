<?php 


$ip_address = "127.0.02";

if(filter_var($ip_address, FILTER_VALIDATE_IP)){
    echo "perfect User";
}
else{
    echo "Chor user";
}

?>