<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

   
 

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);     
        
        
        /*
        
        $phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '7b4d71dbe6b3c9';
$phpmailer->Password = '548790113c2271';
        */

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
          
              $mail->Body    =  "Love phplearn"; 

            $mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

  



?>