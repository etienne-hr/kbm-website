<?php
include './includes/config/config.php';
?>
<?php
include './includes/config/form-handler.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site KBM Batiment</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="assets\images\logos\fav.png" />
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <?php
                include './includes/view/header.php';
                ?>
        <?php
        include './includes/view/landing-page.php';
        ?>
        <?php
        include './includes/view/services.php';
        ?>
        <?php
        include './includes/view/gallery.php';
        ?>
        <?php
        include './includes/view/company.php';
        ?>
        <?php
        include './includes/view/material.php';
        ?>
                <div class="form-contact-container" id="contact">
                <h2>Votre projet</h2>
                <div class="contact">
                        <div class="contact-p">
                                <p>Contactez-nous</p>
                        </div>
                        <?php foreach ($errorMessages as $_message) : ?>
                                <div class="message-error"><?= $_message ?></div>
                        <?php endforeach ?>
                        <?php foreach ($successMessages as $_message) : ?>
                                <div class="message-success"><?= $_message ?></div>
                        <?php endforeach ?>
                        <form class="contact-form" action="#" method="post">
                                <fieldset>
                                        <label>Prénom</label>
                                        <input type="text" name="name" value="<?= $name ?>">
                                </fieldset>
                                <fieldset>

                                        <label>Nom</label>
                                        <input type="text" name="lastname" value="<?= $lastname ?>">
                                </fieldset>
                                <fieldset>

                                        <label>Votre E-mail</label>
                                        <input type="text" name="mail" value="<?= $mailFrom ?>">
                                </fieldset>
                                <fieldset>
                                        <label>Sujet</label>
                                        <input type="text" name="subject" value="<?= $subject ?>">

                                </fieldset>
                                <fieldset>
                                        <label>Message</label>
                                        <textarea name="message"><?= $message ?></textarea>
                                </fieldset>
                                <div class="g-recaptcha" data-sitekey="PASSWORD"></div>
                                <button name="submit">Envoyer</button>
                        </form>
                </div>
        </div>
        <?php
                include './includes/view/footer.php';
                ?>
        

        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="index.js"></script>
        <script src="assets\javascripts\contact.js"></script>
        <script src="assets/javascripts/services.js"></script>
        <script src="assets/javascripts/galery.js"></script>
</body>

</html>
