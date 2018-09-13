<?php
    require 'phpmailer/PHPMailerAutoload.php';

    //we need to create an instance of PHPMailer
    $mail = new PHPMailer();
     $visitor_email=$_POST['email'];
    //set where we are sending email
    $mail->addAddress('returnofking04@gmail.com', 'Senaid Bacinovic');

    //set who is sending an email
    //$mail->setFrom('', 'Admin at CPI');
   $mail->setFrom(' $visitor_email', 'Admin at CPI');

    //set subject
    $mail->Subject = "Test email!";

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>this is our email body</p><br><br><a href='http://google.com'>Google</a>";

    //include attachment
    $mail->addAttachment('fbcover.png', 'Facebook cover.png');

    //send an email
    if (!$mail->send())
        echo "Something wrong happened!";
    else
        echo "Mail sent";
?>
