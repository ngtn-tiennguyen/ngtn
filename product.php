<?php
include './admin/php/server.php';
session_start();
$mahang_pro = $_GET["mahang"];
$sql_pro = "select * from hang h, loai l where h.maloai=l.maloai and mahang = $mahang_pro";
$result = mysqli_query($conn, $sql_pro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'php/layout_head.php' ?>
  <link rel="stylesheet" href="css/product.css">
  <script src="js/processItems.js" defer></script>
</head>

<body>
  <header>
    <?php include 'php/layout_header.php' ?>
  </header>
  <section class="product">
    <?php
    foreach ($result as $value) { ?>
      <div class="container">
        <div class="product-top row">
          <p>Trang sức</p><span>&#10230;</span>
          <p><?php echo $value["tenloai"] ?></p><span>&#10230;</span>
          <p><?php echo $value["tenhang"] ?></p>
        </div>
        <div class="product-content row">
          <div class="product-imgs">
            <div class="img-select">
              <div class="img-item">
                <a href="#" data-id="1">
                  <img src="admin/file/<?php echo $value["hinhanh"]; ?>" width="200" height="300" alt="shoe image">
                </a>
              </div>
            </div>
          </div>
          <div class="product-content-right">
          <form action="payment.php?mahang=<?php echo $value["mahang"] ?>" method="POST">
            <div class="product-content-product-name">
              <h1><?php echo $value["tenhang"]; ?></h1>
              <p>Mã SP: <?php echo $value["mahang"]; ?></p>
            </div>
            <div class="product-content-product-price">
              <p><?php echo $value["giahang"]; ?></p>
            </div>
            <!-- <div class="quantity">
              <p style="font-weight: bold;">Số lượng</p>
              <input type="number" name="soluonghang" id="" min="0" value="1">
            </div> -->
            <div class="product-content-right-product">
                <button type="submit" name=""><i class="fa-regular fa-cart"></i>
                  <p>Mua hàng &nbsp;<i class="fa fa-shopping-cart"></i></p>
                </button>
              </form>
            </div>
            <div class="product-content-right-product">
              <button onclick="window.location.href='http:./cartegogy.php'">
                <p>Quay lại</p>
              </button>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div>
        <table border="0" style="font-size: 20px;" width="auto;" height="auto;">
          <tr>
            <td>Tiêu đề &nbsp;</td>
            <td><?php echo $value["tieudehang"]; ?></td>
          </tr>
          <tr>
            <td>Ngày cập nhật &nbsp;</td>
            <td><?php echo $value["ngayuphang"]; ?></td>
          </tr>
          <tr>
            <td>Mô tả &nbsp;</td>
            <td><?php echo $value["motahang"]; ?></td>
          </tr>
        </table>
      </div>
    <?php } ?>
  </section>
</body>
<footer>
  <?php include 'php/layout_footer.php' ?>
</footer>

</html>