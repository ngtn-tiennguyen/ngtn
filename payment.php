<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/layout_head.php' ?>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <header>
        <?php include 'php/layout_header.php' ?>
    </header>
    <section class="profile">
        <div class="container ">
            <div class="profile-top row">
                <p> Trang chủ </p> <span>&#8594;</span>
                <p>Thông tin đơn hàng</p>
            </div>
        </div>
        <form method="POST">
            <label>Số lượng</label>
            <input type="number" name="soluonghang" id="" min="0" value="1">
            <input type="text" name="tenkhach_d" placeholder="Họ và tên">
            <input type="number" name="sdt_d" placeholder="Số điện thoại">
            <input type="text" name="diachi_d" placeholder="Địa chỉ">
            <input type="date" name="ngaydathang" placeholder="Ngày đặt hàng">
            <input type="submit" name="xacnhan" value="Xác nhận">
        </form>
    </section>
    <!-- footer -->
    <footer>
        <?php include 'php/layout_footer.php' ?>
    </footer>
    <?php include 'php/don_process.php' ?>
</body>

</html>