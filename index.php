<?php
include './includes/config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site KBM</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <!-- <?php
                include './includes/view/header.php';
                ?> -->
        <?php
        include './includes/view/landing-page.php';
        ?>
        <?php
        include './includes/view/services.php';
        ?>
        <?php
        include './includes/view/company.php';
        ?>
        <?php
        include './includes/view/gallery.php';
        ?>
        <!-- <?php
                include './includes/view/provider.php';
                ?> -->
        <!-- <?php
                include './includes/view/form.php';
                ?> -->
        <!-- <?php
                include './includes/view/footer.php';
                ?> -->
        <div class="form-contact-container">
                <h2>Votre projet</h2>
                <div class="contact">
                        <div class="contact-p">
                                <p>Contactez-nous</p>
                        </div>
                        <form class="contact-form" action="includes/config/form-handler.php" method="post">
                                <fieldset>

                                        <label>Prénom</label>
                                        <input type="text" name="name">
                                </fieldset>
                                <fieldset>

                                        <label>Nom</label>
                                        <input type="text" name="lastname">
                                </fieldset>
                                <fieldset>

                                        <label>Votre E-mail</label>
                                        <input type="text" name="mail">
                                </fieldset>
                                <fieldset>
                                        <label>Sujet</label>
                                        <input type="text" name="subject">

                                </fieldset>
                                <fieldset>
                                        <label>Message</label>
                                        <textarea name="message"></textarea>
                                </fieldset>
                                <button type="submit" name="submit">Envoyer</button>
                        </form>
                </div>
        </div>


        <script src="index.js"></script>
        <script src="assets/javascripts/services.js"></script>
        <script src="assets/javascripts/galery.js"></script>
</body>

</html>