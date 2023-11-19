<?php

// H 
// h 
// i 
// s 
// a 

// echo "Now time is ".date("h:i:sa");
date_default_timezone_set("Asia/Dhaka");
//echo "Now time is ".date("h:i:sa");
   //$sefltime= mktime(10, 30, 00, 01, 02, 2024);

    
 // echo   date("Y-m-d h:i:sa",$sefltime);
//   $settime = strtotime("next Friday");
//   echo date("Y-m-d h:i:sa",$settime);

$starttime = strtotime("Friday");
$courseendtime = strtotime("+12 Months",$starttime);

// echo date("M d",$courseendtime);

//echo $courseendtime;

while($starttime<$courseendtime){
    echo date("Y M d",$starttime)."</br>";
    $starttime =  strtotime("+1 Months",$starttime);
}

?>