<?php

/* 
    We have to put the PHPMailer namespaces at the top of the page.
*/

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

/* 
    We have to require the path to the PHPMailer classes.
*/

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* 
    We have to require the config.php file to use our Gmail account login details.
*/

require 'config.php';

function sendMail($email, $subject, $message)
{

    // Creating a new PHPMailer Object.

    $mail = new PHPMailer(true);

    // Using the SMTP protocol to send the email.

    $mail->isSMTP();

    /* 
        Setting the SMTP property to true, so we can use our Gmail login
        details to send the mail.
    */

    $mail->SMTPAuth = true;

    /* 
        Setting the Host property to the MAILHOST value that we have
        defined in the config file.
    */

    $mail->Host = MAILHOST;

    /* 
        Setting the Username Property to the USERNAME value that we have
        defined in the config file.
    */

    $mail->Username = USERNAME;

    /* 
        Setting the Password Property to the PASSWORD value that we have
        defined in the config file.
    */

    $mail->Password = PASSWORD;

    /* 
        By setting SMTPSecure to PHPMailer::ENCRYPTION_STRATTLS, we are telling
        PHPMailer to use the STARTTLS encryption method when connecting to the 
        SMTP server. This helps ensure that the communication between your PHP
        application and the SMTP server is encrypted, adding a layer of security 
        to your email sending process.
    */

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    // TCP port to connect with the GMAIL SMTP Server.

    $mail->Port = 587;

    /* 
        Who is sending the email. Again we use the constants that we define
        in the config file.
    */

    $mail->setFrom(SEND_FORM, SEND_FROM_NAME);

    /* 
        Where the email goes. We use the $email function's parameter that
        holds the email address that we type in the email input field.
    */

    $mail->addAddress($email);

    /* 
        By setting $mail->IsHTML(true), we inform PHPMailer that the email
        message we are constructing will include HTML Markup.
        This is important when we want to send emails with HTML formatting,
        which allow us to include things like hpyerlinks, images, formatting,
        and other HTML elements in our email content.
    */

    $mail->isHTML(true);

    // Assigning the incoming subject to the $mail->Subject property.

    $mail->Subject = $subject;

    // Assigning the incoming message to the $mail->Body property.

    $mail->Body = $message;

    /* 
        When we set $mail->AltBody, we are providing a plain text alternative
        to the HTML version of our email.
        This is important for compatibility with email clients that may not
        support or display HTML content.
        In such cases, the email client will display the plain text content
        instead of the HTML content.
    */

    $mail->AltBody = $message;

    /* And last we send the email. */

    if (!$mail->send()) {
        return "Email not send. Please try again.";
    } else {
        return "success";
    }
}
