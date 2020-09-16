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
        include './includes/view/company.php';
        ?>
        <?php
        include './includes/view/gallery.php';
        ?>
        <!-- <?php
                include './includes/view/provider.php';
                ?> -->
        <?php
                include './includes/view/form.php';
                ?>
        <!-- <?php
                include './includes/view/footer.php';
                ?> -->
        <footer>
                <div class="footer-left">
                        <div class="footer-img"><img src="assets\images\logos\logokbm.png" alt="logo"></div>
                        <p>©KBM BATIMENT</p>
                </div>
                <div class="footer-center">
                        <p>kbmbatiment@orange.fr</p>
                </div>
                <div class="footer-right">
                        <p>2 rue des Flandres</p>
                        <p>68100 Mulhouse</p>
                        <p>03 89 65 10 63</p>
                </div>
        </footer>

        


        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="index.js"></script>
        <script src="assets\javascripts\contact.js"></script>
        <script src="assets/javascripts/services.js"></script>
        <script src="assets/javascripts/galery.js"></script>
</body>

</html>