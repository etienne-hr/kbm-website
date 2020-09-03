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
        <!-- <?php
                include './includes/view/company.php';
                ?> -->
        <!-- <?php
                include './includes/view/gallery.php';
                ?> -->
        <!-- <?php
                include './includes/view/provider.php';
                ?> -->
        <!-- <?php
                include './includes/view/form.php';
                ?> -->
        <!-- <?php
                include './includes/view/footer.php';
                ?> -->
        <div class="container-company">
                <div class="company-orange-top"></div>
                <div class="company-center-block">
                        <img src="assets\images\logos\logokbmbackground.png" alt="logo">
                        <p>“ Une expertise de longue date dans la <span>serruerie</span> et la <span>métallerie</span> ” </p>
                        <div class="company-front-block">
                        </div>
                        <div class="back-block-orange"></div>
                </div>

                <script src="index.js"></script>
                <script src="assets/javascripts/services.js"></script>
                <script src="assets/javascripts/galery.js"></script>
</body>

</html>