<?php
  use PHPMailer\PHPMailer\PHPMailer; 

  use PHPMailer\PHPMailer\Exception;
  
if(isset($_POST['name'])){       
     
    
require 'PHPMailer/src/Exception.php';    
require 'PHPMailer/src/PHPMailer.php';    
require 'PHPMailer/src/SMTP.php';
require_once("db/config.php");

$name = $_POST['name'];
$usernmae = $_POST['usernmae'];
$password= md5($_POST['password']);


/*
username and email unique check 

*/


$query = "SELECT * FROM user where username='$name' or email='$usernmae'";
$sql = $conn->query($query);

// var_dump($sql);

if($sql->num_rows>0){

    header("location: sign-up.php?msg=this is username and email already entry");

}

else{
    
   $code = rand(1,1000000);
   
   $query  = "INSERT INTO user(username,email,password,image,code)
   VALUES('$name','$usernmae','$password','',$code)";
   
   $sql = $conn->query($query);
   
   if($sql){


// mail send start 
        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);     
  
        try {
            $mail->isSMTP(); // using SMTP protocol                                 
            $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP host as gmail 
            $mail->SMTPAuth = true;  // enable smtp authentication                             
            $mail->Username = '7b4d71dbe6b3c9';  // sender gmail host              
            $mail->Password = '548790113c2271'; // sender gmail host password   
            $mail->SMTPSecure = 'tls';  // for encrypted connection                           
            $mail->Port = 2525;   // port for SMTP     
            $mail->isHTML(true); 
            $mail->setFrom('hadijaman@gmail.com', "Sender"); // sender's email and name
            $mail->addAddress("mamurjorbd@gmail.com", "HADIJAMAN");  // receiver's email and name
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
            $mail->Subject = 'Email verification From phplern';
            $mail->Body    =  $code; 
            $mail->send();

            //echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

// mail send end 






       header("location: usercodeupdate.php");
   }
   else{
    header("location: sign-up.php?msg=data Save  Not Done");
   }
   

}
}



   
else{
    header("location: sign-up.php?msg=ai beta chor");
}





?>