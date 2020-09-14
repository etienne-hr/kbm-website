<?php

$public_key = "6LeqBsoZAAAAAKOolvW-s2BSoFwiCQN8cgetqdzh";
$private_key = "6LeqBsoZAAAAAHyb6B2QeGHu601NBfSuqzeTAoNY";
$url = "https://www.google.com/recaptcha/api/siteverify";



if (array_key_exists('submit', $_POST)) {

    $response_key = $_POST['g-recaptcha-response'];
    $response = file_get_contents($url . '?secret=' . $private_key . '&response=' . $response_key);
    $response = json_decode($response);
    if ($response->success === true) {
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
    } else {
        echo 'nnoo';
    };
}

// if (isset($_POST['submit'])) {

//     $name = $_POST['name'];
//     $lastname = $_POST['lastname'];
//     $mailFrom = $_POST['mail'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $mailTo = "etienneh.68@gmail.com";
//     $headers = "From: " . $mailFrom;
//     $txt = "Vous avez eu un message de :" . " " . $name . " " . $lastname . "\n Mail :" . $mailFrom . "\n\n" . $message;

//     if (mail($mailTo, $subject, $txt, $headers)) {
//         echo "Email successfully sent to $mailTo...";
//     } else {
//         echo "Email sending failed...";
//     };
// }
