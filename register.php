<?php

    require 'phpMailer/PHPMailer.php';
    require 'phpMailer/SMTP.php';
    require 'phpMailer/Exception.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception; 
    
    require 'User.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    
    $success = '';
    //gets POST Params
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    //creates new User Object
    $new_user = new User();
    $new_user->set_first_name($first_name);
    $new_user->set_last_name($last_name);
    $new_user->set_country($country);
    $new_user->set_phone($phone);
    $new_user->set_email($email);

    //gets body of Email from User class
    $email_body = $new_user->get_email_body();
    
    
    //creates new phpMailer Object
    $mail = new PHPMailer(true);   
      try{
          //configures PHPMailer Object
        $mail->IsSMTP();
        
        //GMAIL config
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the server
        $mail->Host = 'tls://smtp.gmail.com:587';   // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "orcamhometaskemail@gmail.com";  // GMAIL username
        $mail->Password   = "Welcome123!";            // GMAIL password
        //End Gmail

        $mail->From       = "orcamhometaskemail@gmail.com";
        $mail->FromName   = "Batsheva Kahan";
        $mail->Subject    = "Registration Email";
        $mail->Body  = $email_body;

        $mail->AddAddress("orcamhometaskemail@gmail.com");
        
        //Sends Email
        $mail->Send();
        echo "Message has been sent successfully";
      }
      catch(Exception $ex){
          error_log($ex);
          echo "Server Error - Please try again later!";
      }
        $mail->smtpClose();
    }

    
    //returns email status to client
    //echo $success;
//}

