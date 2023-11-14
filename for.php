<?php
// $post=20;
// $init=0;
// while($init<=$post){
//    echo  "This is my Post".$init."</br>";
//     $init++;
// }
// for(start_obosta; condition; increment/decrement){

// }

$info =array("hadijaman","010746686868","01","012255","phplearn");

$count_array_value = count($info);


// var_dump($info);

// echo $info[0]."</br>";
// echo $info[1]."</br>";
// echo $info[2]."</br>";
// echo $info[3]."</br>";

for($i=0;$i<$count_array_value; $i++ ){
    // echo $i."</br>";
    echo $info[$i]."</br>";
}
?>