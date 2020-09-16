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
        <div class="provider-container">
                <h3 class="reverse-title">Fournisseurs</h3>
                <a class="provider-img" href="https://www.came.com/fr/"><img src="assets\images\logos\came.png" alt="came logo"></a>
                <a class="provider-img" href="https://faac.fr/"><img src="assets\images\logos\faac.png" alt="faac logo"></a>
        </div>
        <div class="container-material">
                <h3 class="reverse-title">Matériaux</h3>
                <h4>MÉTAL <div class="sub-title-material"></div></h4>
                <h4>ACIER <div class="sub-title-material"></div></h4>
                <h4>ALUMINIUM <div class="sub-title-material"></div></h4>
                <h4>COMPOSITE <div class="sub-title-material"></div></h4>
        </div>
        
        <!-- <?php
                include './includes/view/provider.php';
                ?> -->
        <?php
                include './includes/view/form.php';
                ?>
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