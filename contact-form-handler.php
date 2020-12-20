


<?php
    if(isset($_POST['sendmail'])) {
        require '/phpmailer/PHPMailerAutoload.php';
        require '/phpmailer/credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom($_POST['email']);
        $mail->addAddress(EMAIL, 'Evon Dong Bing Bing');     // Add a recipient
        $mail->addReplyTo($_POST['email']); 
        
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = $_POST['message'];

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
?>


