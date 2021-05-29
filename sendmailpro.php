<?php
 include('Mail.php');

    $recipients = $_POST["mto"];

    $headers['From']    = $_POST["mfrom"];
    $headers['To']      = $_POST["mto"];
    $headers['Subject'] = $_POST["subject"];;

    $body = $_POST['msg'];

    $smtpinfo["host"] = "smtp.gmail.com";
    $smtpinfo["port"] = "587";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "vinodclinic";
    $smtpinfo["password"] = "vinodclinic";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);
?>