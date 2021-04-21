<?php

     $name = $_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message'];

     $email_from = '';
     $email_subject = "NEW FORM SUBMIT"
     $email_body = "USER NAME: $name.\n".
                        "USER EMAIL: $visitor_email.\n".
                              "USER MESSAGE: $message.\n";


    $to = "";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers)
    header("Location: index.html");

 ?>
