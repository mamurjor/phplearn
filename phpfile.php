<?php 

// echo readfile("message.txt");
// echo $mymessage;
//$filelength = filesize("message.txt");
// ECHO $filelength;
// EXIT();

$mymessage=fopen("message.txt","r") or die(" ami pari nai.");

// echo fgetc($mymessage);
// while(!feof($mymessage)){
//     echo fgets($mymessage);
// }

while(!feof($mymessage)){
    echo fgetc($mymessage);
}

fclose($mymessage);

?>