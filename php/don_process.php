
<?php

// xử lý sự kiện đăng ký 
if (!isset($_POST['xacnhan'])) {
    die('');
}

//Nhúng file kết nối với database
include('./admin/php/server.php');

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
$soluonghang = addslashes($_POST['soluonghang']);
$tenkhach_d = addslashes($_POST['tenkhach_d']);
$sdt_d = addslashes($_POST['sdt_d']);
$diachi_d = addslashes($_POST['diachi_d']);
$ngaydathang = addslashes($_POST['ngaydathang']);
$mahang = addslashes($_GET['mahang']);


//Lưu thông tin vào bảng
$sql = "INSERT INTO `donhang`(`soluonghang`,`tenkhach_d`, `sdt_d`, `diachi_d`, `ngaydathang`, `trangthai`, `mahang`) 
        VALUES ('" . $soluonghang . "','" . $tenkhach_d . "','" . $sdt_d . "','" . $diachi_d . "','" . $ngaydathang . "','0', '" . $mahang . "')";

@$add = mysqli_query($conn, $sql);
//Thông báo quá trình lưu
if ($add)
echo "<script> alert(\"Đặt hàng thành công.\")</script> <a href='./cartegogy.php'>Quay lại</a>";
else
echo "<script> alert(\"Đặt hàng thất bại.\")</script> <a href='./cartegogy.php'>Quay lại</a>";
?>