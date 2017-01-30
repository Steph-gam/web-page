<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "gamboastephanie@live.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if( mail($recipient, $subject, $formcontent, $mailheader) )
    {
        echo "<h2>Thank you for your comment</h2>";
    }
    else
    {
        echo "<h2>Sorry, there has been an error</h2>";
    }

?>
