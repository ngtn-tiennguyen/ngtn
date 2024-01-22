<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TNAT Official Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- style -->
  <link rel="stylesheet" href="css/admin-style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="images/logo-tnat-brown.jpeg" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link btnhome">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4" id="mau-cay-menu">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="images/logo-tnat-brown.jpeg" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" id="mau-muc-cay-menu"><b>TNAT JEWELRY</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="images/frozen-elsa.gif" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block" id="mau-muc-cay-menu">Admin</a>
          </div>
        </div>

        <!-- DANH SÁCH CÁC MENU -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- QUẢN LÝ NGƯỜI DÙNG -->
            <li class="nav-item">
              <a href="#" class="nav-link" id="mau-muc-cay-menu">
                <i class="nav-icon fa fa-user-circle-o"></i>
                <p>
                  Quản lý người dùng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menuuser">
                  <a href="#taikhoan" class="nav-link" id="mau-muc-cay-menu">
                    &nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-arrow-circle-right"></i>
                    <p>Tài khoản</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item menukhach">
                  <a href="#khachhang" class="nav-link" id="mau-muc-cay-menu">
                    &nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-arrow-circle-right"></i>
                    <p>Khách hàng</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--DANH MỤC SẢN PHẨM -->
            <li class="nav-item">
              <a href="#" class="nav-link" id="mau-muc-cay-menu">
                <i class="nav-icon fas fa fa-github-alt"></i>
                <p>
                  Quản lý sản phẩm
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menuloai">
                  <a href="#loai" class="nav-link" id="mau-muc-cay-menu">
                    &nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-arrow-circle-right"></i>
                    <p>Loại</p>
                  </a>
                </li>
                <li class="nav-item menuhang">
                  <a href="#hang" class="nav-link" id="mau-muc-cay-menu">
                    &nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-arrow-circle-right"></i>
                    <p>Sản phẩm</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--QUẢN LÝ ĐƠN HÀNG -->
            <li class="nav-item">
              <a href="#" class="nav-link" id="mau-muc-cay-menu">
                <i class="nav-icon fas fa fa-tasks"></i>
                <p>
                  Quản lý đơn hàng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menudonhang">
                  <a href="#donhang" class="nav-link" id="mau-muc-cay-menu">
                    &nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-arrow-circle-right"></i>
                    <p>Hóa đơn</p>
                  </a>
                </li>
              </ul>
            </li>
            <a href="../" class="nav-link" id="mau-muc-cay-menu">
              <i class="nav-icon fas fa fa-sign-out"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 btnhome"><a href="" style="color: burlywood;">Trang chủ</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right breadcrumbcurrent">
              </ol>
            </div><!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- BẮT ĐẦU MỞ FORM -->
          <!-- QUẢN LÝ NGƯỜI DÙNG -->
          <?php include "php/user.php" ?>
          <?php include "php/khach.php" ?>
          <!-- QUẢN LÝ SẢN PHẨM -->
          <?php include "php/loai.php" ?>
          <?php include "php/hang.php" ?>
          <!-- QUẢN LÝ ĐƠN HÀNG -->
          <?php include "php/donhang.php" ?>
          <!-- KẾT THÚC ĐÓNG FORM-->

        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="http://localhost/tnat/" style="color: burlywood;">tnatofficialwebsite.vn</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.3.62
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!---->
  <!-- Liên kết thư viện bootbox -->
  <script src="js/bootbox/bootbox.min.js"></script>
  <!-- Liên kết file menu -->
  <script src="js/menu.js"></script>
  <!-- Liên kết file chung common -->
  <script src="js/common.js"></script>
  <!-- Liên kết file xử lý tài khoản -->
  <script src="js/user.js"></script>
  <!-- Liên kết file xử lý khách hàng -->
  <script src="js/khach.js"></script>
  <!-- Liên kết file xử lý loại sản phẩm -->
  <script src="js/loai.js"></script>
  <!-- Liên kết file xử lý sản phẩm -->
  <script src="js/hang.js"></script>
  <!-- Liên kết file xử lý hóa đơn-->
  <script src="js/donhang.js"></script>
</body>

</html>