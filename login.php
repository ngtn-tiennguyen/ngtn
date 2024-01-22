<!DOCTYPE html>
<html>
<link>
<title>Đăng nhập</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="login">
            <form method="POST">
                <label for="chk" aria-hidden="true">Đăng Nhập</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit" name="dangnhap">Đăng nhập</button>
            </form>
        </div>

        <div class="signup">
            <form method="POST">
                <label for="chk" aria-hidden="true">Đăng Kí</label>
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit" name="dangki">Đăng kí</button>
            </form>
        </div>
    </div>
    <?php
    include('php/login_process.php');
    include('php/register_process.php');
    ?>
</body>

</html>