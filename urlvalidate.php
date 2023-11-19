<?php


$url = "https://www.facebook.com/hadijaman";


$url = filter_var($url, FILTER_SINITIZE_URL);


if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "Perfect";
}
else{
    echo "Sorry";
}

?>