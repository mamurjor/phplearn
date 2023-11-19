<?php


// $userlistopen = fopen("userlist.txt","w");

$userlistopen = fopen("userlist.txt","a");
$username ="hadijaman";
$password ="1234569852";

fwrite($userlistopen,$username);

fwrite($userlistopen,$password);
   

fclose($userlistopen);


?>