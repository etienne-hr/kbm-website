<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "etienneh.68@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an email from" . $name . ".\n\n" . $message;

    if (mail($mailTo, $subject, $txt, $headers)) {
        echo "Email successfully sent to $mailTo...";
    } else {
        echo "Email sending failed...";
    };
}
