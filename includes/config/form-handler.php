<?php


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "etienneh.68@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Vous avez eu un message de :" . " " . $name . " " . $lastname . "\n Mail :" . $mailFrom . "\n\n" . $message;

    if (mail($mailTo, $subject, $txt, $headers)) {
        echo "Email successfully sent to $mailTo...";
    } else {
        echo "Email sending failed...";
    };
}
