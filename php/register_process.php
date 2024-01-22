<?php
    // xử lý sự kiện đăng ký 
if (!isset($_POST['dangki'])){
    die('');
}
 
//Nhúng file kết nối với database
include('./admin/php/server.php');
      
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
      
//Lấy dữ liệu từ file dangky.php
$username   = addslashes($_POST['username']);
$password   = addslashes($_POST['password']);
$email      = addslashes($_POST['email']);
      
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$password || !$email )
{
    echo "Vui lòng nhập đầy đủ thông tin.";
    exit;
}
      
//Kiểm tra tên đăng nhập này đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM user WHERE username='$username'")) > 0){
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
    exit;
}
      
//Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM user WHERE email='$email'")) > 0)
{
    echo "Email này đã có người dùng. Vui lòng chọn Email khác.";
    exit;
}

//Lưu thông tin thành viên vào bảng
@$adduser = mysqli_query($conn,"
    INSERT INTO user (
        username,
        email,
        password,
        chucvu
    )
    VALUE (
        '{$username}',
        '{$email}',
        '{$password}',
        0
    )
");
                      
//Thông báo quá trình lưu
if ($adduser)
echo "Quá trình đăng ký thành công. <a href='./login.php'>Đăng nhập</a>";
else
    echo "Có lỗi xảy ra trong quá trình đăng ký.";
