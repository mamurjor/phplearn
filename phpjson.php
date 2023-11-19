<?php 



// json_encode()
// json_decode()


$person_list = array(

    "name" => "hadijaman",
    "email" => "hadijaman@gmail.com",
    "cell" => "0174686868"
);

$convert_json = json_encode($person_list);

 echo $convert_json;

$post = '{
    "userId": 1,
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
  }';

$convert_toarray = json_decode($post);
 
echo $convert_toarray->userId."</br>";
echo $convert_toarray->id."</br>";
echo $convert_toarray->title."</br>";
echo $convert_toarray->body."</br>";


var_dump($convert_toarray);

?>