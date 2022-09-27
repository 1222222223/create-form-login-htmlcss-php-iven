<?php
    $name            = $_POST['name'];
    $visitor_email   = $_POST['email'];
    $messege         = $_POST['messege'];


    $email_from = 'EromaTutorialsSacode@gmail.com';

    $email_subject = "Now Form Submission";

    $emai_body = "User Name : $name.\n".
                    "User Email : $visitor_email.\n".
                        "User Messege : $messege.\n";







            $to = "avinash6252@gmail.com";
            $headers = "Form: $email_form \r\n";
            $headers = "Reply-To: $visitor_email \r\n";
            mail($to, $email_subject, $email_body, $headers);

            header("Location: index.html");
?>