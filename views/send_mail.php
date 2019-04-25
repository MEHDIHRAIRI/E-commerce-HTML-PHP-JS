<?php
include('C:/wamp64/www/baz_art/views/mail.html');
    $mailto ="mehdihrairi6@gmail.com";
    $mailSub ="mail de confirmation";
    $mailMsg ="votre commande a ete confirmer merci ^^";
   require ('PHPMailer-master/PHPMailerAutoload.php');
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "mehdihrairi6@gmail.com";
   $mail ->Password = "tennis06061997mh";
   $mail ->SetFrom("mehdihrairi6@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   var_dump($mailto);
   var_dump($mailSub);
   var_dump($mailMsg);  

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

