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
        <!-- <?php
                include './includes/view/landing-page.php';
                ?> -->
        <!-- <?php
                include './includes/view/services.php';
                ?> -->
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
        <div class="services-container">
                <h2> Nos Services </h2>
                <h3 class="metallerie-serrurerie"> Métallerie - Serrurerie</h3>
                <div class="slider-services slider1">
                        <div class="slide">
                                <div class="image">
                                        <img src="assets\images\metallerie\photo1.png" alt="Escaliers">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Escaliers</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo2.png" alt="Gardes corps">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Gardes corps</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo3.png" alt="Portails">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Portails</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo4.png" alt="Charpentes">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Charpentes</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo5.png" alt="Portes">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Portes</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo6.png" alt="Montage">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Montage</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo7.png" alt="Maintenance">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Maintenance</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\metallerie\photo8.png" alt="Escalier">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Escalier</span> </a>
                                </div>
                        </div>
                        <div class="btn-service-right">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(0 66) rotate(-90)" fill="#E67817" />
                                        <path d="M21.3559 49.7539L38.8559 33.2539L21.3559 16.7539L24.8559 10.1539L49.3559 33.2539L24.8559 56.3539L21.3559 49.7539Z" fill="white" />
                                </svg>
                        </div>
                        <div class="btn-service-left">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(70) rotate(90)" fill="#E67817" />
                                        <path d="M48.6441 16.2462L31.1441 32.7462L48.6441 49.2462L45.1441 55.8462L20.6441 32.7462L45.1441 9.64624L48.6441 16.2462Z" fill="white" />
                                </svg>
                        </div>
                        <ul class="slider-btn">
                                <li class="current-dot" data-pos="0"></li>
                                <li data-pos="1"></li>
                                <li data-pos="2"></li>
                                <li data-pos="3"></li>
                                <li data-pos="4"></li>
                                <li data-pos="5"></li>
                                <li data-pos="6"></li>
                                <li data-pos="7"></li>
                        </ul>
                </div>
                <h3> Automatisme </h3>
                <div class="slider-services slider2">
                        <div class="slide">
                                <div class="image">
                                        <img src="assets\images\automatisme\photo1.png" alt="Électricité">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Électricité</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\automatisme\photo2.png" alt="Bâtiment">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Bâtiment</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\automatisme\photo3.png" alt="Indus">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Indus</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\automatisme\photo4.png" alt="Automatisme">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Automatisme</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\automatisme\photo5.png" alt="Maintenance">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Maintenance</span> </a>
                                </div>
                        </div>
                        <div class="btn-service-right">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(0 66) rotate(-90)" fill="#E67817" />
                                        <path d="M21.3559 49.7539L38.8559 33.2539L21.3559 16.7539L24.8559 10.1539L49.3559 33.2539L24.8559 56.3539L21.3559 49.7539Z" fill="white" />
                                </svg>
                        </div>
                        <div class="btn-service-left">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(70) rotate(90)" fill="#E67817" />
                                        <path d="M48.6441 16.2462L31.1441 32.7462L48.6441 49.2462L45.1441 55.8462L20.6441 32.7462L45.1441 9.64624L48.6441 16.2462Z" fill="white" />
                                </svg>
                        </div>
                        <ul class="slider-btn">
                                <li class="current-dot" data-pos="0"></li>
                                <li data-pos="1"></li>
                                <li data-pos="2"></li>
                                <li data-pos="3"></li>
                                <li data-pos="4"></li>
                        </ul>
                </div>
                <h3> Sécurité </h3>
                <div class="slider-services slider3">
                        <div class="slide">
                                <div class="image">
                                        <img src="assets\images\securite\photo1.png" alt="Légal">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Légal</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\securite\photo2.png" alt="PMR">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">PMR</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\securite\photo3.png" alt="Conforme">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Conforme</span> </a>
                                </div>
                        </div>
                        <div class="btn-service-right">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(0 66) rotate(-90)" fill="#E67817" />
                                        <path d="M21.3559 49.7539L38.8559 33.2539L21.3559 16.7539L24.8559 10.1539L49.3559 33.2539L24.8559 56.3539L21.3559 49.7539Z" fill="white" />
                                </svg>
                        </div>
                        <div class="btn-service-left">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(70) rotate(90)" fill="#E67817" />
                                        <path d="M48.6441 16.2462L31.1441 32.7462L48.6441 49.2462L45.1441 55.8462L20.6441 32.7462L45.1441 9.64624L48.6441 16.2462Z" fill="white" />
                                </svg>
                        </div>
                        <ul class="slider-btn">
                                <li class="current-dot" data-pos="0"></li>
                                <li data-pos="1"></li>
                                <li data-pos="2"></li>
                        </ul>
                </div>
                <h3> Négoce matériaux </h3>
                <div class="slider-services slider4">
                        <div class="slide">
                                <div class="image">
                                        <img src="assets\images\materiaux\photo1.png" alt="Acier">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Acier</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\materiaux\photo2.png" alt="Inox">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Inox</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\materiaux\photo3.png" alt="Aluminium">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Aluminium</span> </a>
                                </div>
                                <div class="image">
                                        <img src="assets\images\materiaux\photo4.png" alt="Composite">
                                        <a class="context-slide" href="http://google.com"><span class="title-service">Composite</span> </a>
                                </div>
                        </div>
                        <div class="btn-service-right">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(0 66) rotate(-90)" fill="#E67817" />
                                        <path d="M21.3559 49.7539L38.8559 33.2539L21.3559 16.7539L24.8559 10.1539L49.3559 33.2539L24.8559 56.3539L21.3559 49.7539Z" fill="white" />
                                </svg>
                        </div>
                        <div class="btn-service-left">
                                <svg width="70" height="66" viewBox="0 0 70 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="66" height="70" transform="translate(70) rotate(90)" fill="#E67817" />
                                        <path d="M48.6441 16.2462L31.1441 32.7462L48.6441 49.2462L45.1441 55.8462L20.6441 32.7462L45.1441 9.64624L48.6441 16.2462Z" fill="white" />
                                </svg>
                        </div>
                        <ul class="slider-btn">
                                <li class="current-dot" data-pos="0"></li>
                                <li data-pos="1"></li>
                                <li data-pos="2"></li>
                                <li data-pos="3"></li>
                        </ul>
                </div>
        </div>

        <script src="index.js"></script>
        <script src="assets/javascripts/services.js"></script>
        <script src="assets/javascripts/galery.js"></script>
</body>

</html>