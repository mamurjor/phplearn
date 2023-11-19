<?php 


$person_email = "hadij,,.laman@gmail.com";

 $person_email = filter_var($person_email,FILTER_SANITIZE_EMAIL);




if(filter_var($person_email,FILTER_VALIDATE_EMAIL)){
    echo "Perfect";
}
else{
    echo "sorry";
}


?>