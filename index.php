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

        <div class="gallery-container">
                <div class="gallery">
                        <div class="gallery-images">
                                <img src="assets\images\gallery\photo1.png" alt="">
                                <img src="assets\images\gallery\photo2.png" alt="">
                                <img src="assets\images\gallery\photo3.png" alt="">
                                <img src="assets\images\gallery\photo4.png" alt="">
                                <img src="assets\images\gallery\photo5.png" alt="">
                                <img src="assets\images\gallery\photo6.png" alt="">
                                <img src="assets\images\gallery\photo7.png" alt="">
                                <img src="assets\images\gallery\photo8.png" alt="">
                        </div>
                        <div class="gallery-controller">
                                <div class="controller controller-up">
                                        <svg width="59" height="39" viewBox="0 0 59 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                        <path d="M18 29.3998L32.75 19.6498L18 9.8998L20.95 5.9998L41.6 19.6498L20.95 33.2998L18 29.3998Z" fill="white" />
                                                </g>
                                                <defs>
                                                        <clipPath id="clip0">
                                                                <rect width="39" height="59" fill="white" transform="translate(0 39) rotate(-90)" />
                                                        </clipPath>
                                                </defs>
                                        </svg>
                                </div>
                                <div class="controller controller-down">
                                        <svg width="59" height="39" viewBox="0 0 59 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                        <path d="M41.6 9.9L26.85 19.65L41.6 29.4L38.65 33.3L18 19.65L38.65 6L41.6 9.9Z" fill="white" />
                                                </g>
                                                <defs>
                                                        <clipPath id="clip0">
                                                                <rect width="39" height="59" fill="white" transform="translate(59) rotate(90)" />
                                                        </clipPath>
                                                </defs>
                                        </svg>
                                </div>

                        </div>

                </div>
        </div>
        <script src="index.js"></script>
        <script src="assets/javascripts/services.js"></script>
        <script src="assets/javascripts/galery.js"></script>
</body>

</html>