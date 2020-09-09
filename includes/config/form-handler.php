<?php

// include '.\includes\recaptcha\autoload.php';
if (isset($_POST['submit'])) {
    //recaptcha


    // if (isset($_POST['g-recaptcha-response'])) {
    //     $recaptcha = new \ReCaptcha\ReCaptcha('6LeqBsoZAAAAAHyb6B2QeGHu601NBfSuqzeTAoNY');
    //     $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    //     if ($resp->isSuccess()) {
    //         echo '<pre>';
    //         var_dump('valide');
    //         echo '</pre>';
    //     } else {
    //         $errors = $resp->getErrorCodes();
    //         echo '<pre>';
    //         var_dump('captcha invalide');
    //         echo '</pre>';
    //     }
    // } else {
    //     echo '<pre>';
    //     var_dump('nn rempli');
    //     echo '</pre>';
    // }
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
