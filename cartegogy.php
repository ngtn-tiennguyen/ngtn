<?php
include './admin/php/server.php';
$sql_hang = "SELECT * FROM hang";
$result_hang = mysqli_query($conn, $sql_hang);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/layout_head.php' ?>
    <link rel="stylesheet" href="css/caterlogy.css">
</head>

<body>
    <header>
        <?php include 'php/layout_header.php' ?>
    </header>
    <section class="caretgogy">
        <div class="container ">
            <div class="caretgogy-top row">
                <p> TRANG CHỦ </p><span>&#8594;</span>
                <p>TRANG SỨC</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="caterlogy-bottom row">
                    <div class="cartergogy-bottom-content ">
                        <div class="cartergogy-bottom-content-column row">
                            <?php
                            foreach($result_hang as $value){?>
                             <div class="each-product">
                                <figure><a href="product.php?mahang=<?php echo $value["mahang"]?>"><img src="admin/file/<?php echo $value["hinhanh"]; ?>" width="200" height="300" /></a></figure>
                                <a href="product.php?mahang=<?php echo $value["mahang"]?>"><h1><?php echo $value["tenhang"];?></h1></a>
                                <a href="product.php?mahang=<?php echo $value["mahang"]?>"><p><?php echo number_format($value["giahang"]);?><sup>đ</sup></p></a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include 'php/layout_footer.php' ?>
    </footer>
</body>

</html>