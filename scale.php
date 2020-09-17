<?php
$folder = $_GET['folder'];
$dir    = './assets/images/metallerie';
$file = scandir($dir);
$counter = count($file);
$newArray = [];
$i = 2;
for ($i; $i <$counter; $i++) { 
    $newArray[] = $file[$i];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header-display-orange">
        <a class="back-home" href="./index.php">
            <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.49996 32.5H9.99996V50C9.99996 52.7575 12.2425 55 15 55H45C47.7575 55 50 52.7575 50 50V32.5H52.5C52.9943 32.4999 53.4776 32.3532 53.8886 32.0785C54.2996 31.8038 54.62 31.4134 54.8091 30.9566C54.9983 30.4999 55.0478 29.9973 54.9514 29.5124C54.855 29.0276 54.617 28.5821 54.2675 28.2325L31.7675 5.73251C31.5355 5.50015 31.26 5.31581 30.9567 5.19003C30.6534 5.06425 30.3283 4.99951 30 4.99951C29.6716 4.99951 29.3465 5.06425 29.0432 5.19003C28.7399 5.31581 28.4644 5.50015 28.2325 5.73251L5.73246 28.2325C5.38293 28.5821 5.14492 29.0276 5.0485 29.5124C4.95208 29.9973 5.00159 30.4999 5.19076 30.9566C5.37994 31.4134 5.70028 31.8038 6.11131 32.0785C6.52233 32.3532 7.00558 32.4999 7.49996 32.5ZM25 50V37.5H35V50H25ZM30 11.035L45 26.035V37.5L45.0025 50H40V37.5C40 34.7425 37.7575 32.5 35 32.5H25C22.2425 32.5 20 34.7425 20 37.5V50H15V26.035L30 11.035Z" fill="black"/>
            </svg>
        </a>
        <h2>Les escaliers</h2>
    </div>
    <div class="container-photos-service">
        <div class="fake-mid-orange"></div>
        <div class="fake-left-orange"></div>
        <div class="fake-right-orange"></div>
        <?php 
            foreach ($newArray as $key => $image) {
                echo '<div class="item-services"><img src="assets/images/'.$folder.'/'.$image.'" alt=""></div>';
            }
        ?>
    </div>
</body>
</html>
<?php
include './includes/view/footer.php';

?>

