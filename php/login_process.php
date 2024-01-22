<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('./admin/php/server.php');
     
    //Lấy dữ liệu nhập vào
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$email || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
        exit;
    }
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT email, password, chucvu FROM user WHERE email='$email'");
    if (mysqli_num_rows($query) == 0) {
        echo "Email đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại.";
        exit;
    }
    if($row['chucvu']=='0') {
        header("Location: ./index_login.php?act=index_login");
    }
    if($row['chucvu']=='1') {
        header("Location: ./admin/admin.php");
    }
     
}
