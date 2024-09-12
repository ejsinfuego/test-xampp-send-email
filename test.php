<?php
 echo "Hello World!";
 $to_email = "receiver@gmail.com";
 $subject = "Simple Email Testing via PHP";
 $body = "Hello, This is a test if xampp email is working or not";
 $headers = "From: this is a testttt";

 if (mail($to_email, $subject, $body, $headers)) {
   echo "Email successfully sent to: $to_email";
 } else {
   echo "Email sending failed.";
 }


