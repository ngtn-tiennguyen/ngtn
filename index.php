<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/layout_head.php' ?>
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/processPage.js" defer></script>
</head>

<body>
    <header>
        <div class="logo">
            <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <div class="main-menu">
            <li><a href="./index.php">TRANG CHỦ</a>
        </div>
        <div class="others">
            <li><a href="./login.php?act=login" class="fa fa-user" aria-hidden="true"></a></li>
        </div>
    </header>
    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="images/slider0.webp">
            <img src="images/slider1.jpg">
            <img src="images/slider2.webp">
            <img src="images/slider3.webp">
            <img src="images/slider4.jpg">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <footer>
        <?php include 'php/layout_footer.php' ?>
    </footer>
</body>
<?php
?>

</html>
