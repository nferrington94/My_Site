<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'nferrington94@gmail.com';

    $email_subject = $subject;

    $email_body =   $fname.
                    $lname.
                    $message.;

    $to = "nferrington94@gmail.com";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-to: $visitor_email \r\n";

    ?>

