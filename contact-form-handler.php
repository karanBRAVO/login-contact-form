<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $to = "xpresskaran98@gmail.com";

    $email_subject = "New Form Submission";

    $txt = "User Name = " . $name . "\r\nUser EMAIL = " . $visitor_email . "\r\nUser Message = " . $message;
    $headers = "From: xpresskaran98@gmail.com" . "\r\n".

    $headers .= "Reply-To: $visitor_email \r\n";

    if ($visitor_email!=NULL){
        mail($to, $email_subject, $txt, $headers);
    }
    header("Location: index.html");
?>