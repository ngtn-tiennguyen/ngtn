$(document).ready(function () {
    swapForm("formhome");

    //menu tai khoan
    $(".menuuser").click(function () {
        swapForm("listuser");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Tài khoản</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        showDataTableUser();
    })
    //menu khach hang
    $(".menukhach").click(function () {
        swapForm("listkhach");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        showDataTableKH();
    })

    //menu loai
    $(".menuloai").click(function () {
        swapForm("listloai");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Loại</li>';
        $(".breadcrumbcurrent").html(st);
        showDataTableLoai();
    })

    //menu san pham
    $(".menuhang").click(function () {
        swapForm("listhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Hàng</li>';
        $(".breadcrumbcurrent").html(st);
        showCBLoai();
        showDataTableHang();
    })

    //menu hoa don
    $(".menudonhang").click(function () {
        swapForm("listdonhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý đơn hàng</a></li>' +
            ' <li class="breadcrumb-item active">Hóa đơn</li>';
        console.log(st);
        $(".breadcrumbcurrent").html(st);
        showDataTableHDon();
    })

    // --------------------FORM-----------------------------------------------
    //chuyển form
    function swapForm(f) {
        $(".formhome").addClass("is-hidden");
        $(".listuser").addClass("is-hidden");
        $(".listkhach").addClass("is-hidden");
        $(".listloai").addClass("is-hidden");
        $(".listhang").addClass("is-hidden");
        $(".listdonhang").addClass("is-hidden");
        $(".listdonchitiet").addClass("is-hidden");
        $(".formloai").addClass("is-hidden");
        $(".formhang").addClass("is-hidden");
        $(".formkhach").addClass("is-hidden");
        $(".formuser").addClass("is-hidden");
        $(".formdonhang").addClass("is-hidden");

        $("." + f).removeClass("is-hidden");
    }

    // ---------------------------------BUTTON-------------------------------
    //button home
    $(".btnhome").click(function () {
        swapForm("formhome");
        var st = ' <li class="breadcrumb-item"><a href="#" ></a></li>' +
            ' <li class="breadcrumb-item active">Trang chủ</li>';
        console.log(st);
        $(".breadcrumbcurrent").html(st);
    });

});