<?php
$formValid = false;
$name = "";
$lastname = "";
$mailFrom = "";
$subject = "";
$message = "";

//recaptcha
$public_key = "6LeqBsoZAAAAAKOolvW-s2BSoFwiCQN8cgetqdzh";
$private_key = "6LeqBsoZAAAAAHyb6B2QeGHu601NBfSuqzeTAoNY";
$url = "https://www.google.com/recaptcha/api/siteverify";



if (array_key_exists('submit', $_POST)) {
    //Mail
    if (empty($_POST['name'])) {
        $errorMessages[] = "Veuillez renseigner votre prénom";
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['lastname'])) {
        $errorMessages[] = "Veuillez renseigner votre nom";
    } else {
        $lastname = $_POST['lastname'];
    }

    if (empty($_POST['mail'])) {
        $errorMessages[] = "Veuillez renseigner votre mail";
    } else {
        $mailFrom = $_POST['mail'];
        $headers = "From: " . $mailFrom;
    }

    if (empty($_POST['subject'])) {
        $errorMessages[] = "Veuillez renseigner un intitulé";
    } else {
        $subject = $_POST['subject'];
    }

    if (empty($_POST['message'])) {
        $errorMessages[] = "Le message est vide";
    } else {
        $message = $_POST['message'];
    }
    if (empty($_POST['g-recaptcha-response'])) {
        $errorMessages[] = "Veuillez confirmer que vous n'êtes pas un robot";
        $formValid = false;
    } else {
        $response_key = $_POST['g-recaptcha-response'];
        $response = file_get_contents($url . '?secret=' . $private_key . '&response=' . $response_key);
        $response = json_decode($response);
        if ($response->success === true) {
            $formValid = true;
        }
    }

    $mailTo = "etienneh.68@gmail.com";


    if (empty($errorMessages) && $formValid === true) {

        $txt = "Vous avez eu un message de :" . " " . $name . " " . $lastname . "\n Mail :" . $mailFrom . "\n\n" . $message;

        if (mail($mailTo, $subject, $txt, $headers)) {
            header('Location: http://localhost/kbm-website/');
            echo "Email successfully sent to $mailTo...";
        } else {
            echo "Email sending failed...";
        };
    } else {
    }
}
