<?php
require_once "PHPMailer-5.2.26/PHPMailerAutoload.php";
require'./form.php';
if (isset($_POST['submit']))
{ ?><div id="note">
        Mail Sent. <a id="close">[close]</a>
    </div><?php } ?>
    <?php
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;// TCP port to connect to
        //echo $row['email'];
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        //$mail->Username = 'elreb7chich';          // SMTP username
        //$mail->Password = 'plataoplomo1994';
        $mail->Username = 'mehdihrairi6@gmail.com';          // SMTP username
        $mail->Password = 'tennis06061997mh';// SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
        $mail->Port = 587;
        $mail->setFrom('mehdihrairi6@gmail.com', 'Service commande Boutique BazArt');
        //$mail->addAddress('nour.khedher@esprit.tn ');
        //$mail->addAddress('elreb7chich@gmail.com ');
        $mail->addAddress($_POST['email']);// Add a recipient
        $mail->isHTML(true);  // Set email format to HTML
        $bodyContent = '<h1>Validation de Commande</h1>';
        $bodyContent = '<h2>Votre commande est validée</h2> <br> <br> <h3>Visitez Votre Compte sur Notre Site .</h3>';;
        $mail->Body = $bodyContent;
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } 
        
    
    

?>